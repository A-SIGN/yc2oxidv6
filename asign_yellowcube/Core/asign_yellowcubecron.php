<?php
/**
 * Defines yellowcube cron functions
 *
 * PHP version 5
 *
 * @category  Asign
 * @package   Asign_Yellowcube_V_EE
 * @author    Asign <entwicklung@a-sign.ch>
 * @copyright asign
 * @license   http://www.a-sign.ch/
 * @version   2.0
 * @link      http://www.a-sign.ch/
 * @see       Asign_YellowCubeCron
 * @since     File available since Release 2.0
 */

/**
 * Yellowcube cron functions
 *
 * @category Asign
 * @package  Asign_Yellowcube_V_EE
 * @author   Asign <entwicklung@a-sign.ch>
 * @license  http://www.a-sign.ch/
 * @link     http://www.a-sign.ch/
 */

namespace AsignYellowcube\Core;

use AsignYellowcube\Controllers\Asign_Yellowcube_Oxorder;
use AsignYellowcube\Model\Asign_YellowCube_Model;
use OxidEsales\Eshop\Application\Model\Article;
use OxidEsales\Eshop\Application\Model\Order;
use OxidEsales\Eshop\Core\DatabaseProvider;
use OxidEsales\Eshop\Core\Email;
use OxidEsales\Eshop\Core\Registry;

class Asign_YellowCubeCron
{
    /**
     * Filename for storing the error-log.
     * Logs can bee seen in admin section
     *
     * @return string
     */
    protected $sLogFilepath = null;

    /**
     * Constructor for this class
     *
     * @param array $options script options
     *
     * @return \Asign_YellowCubeCron
     */
    public function __construct($options)
    {
        /**
         * First option is used for Hashcheck
         * Syntax: php -f autorun/runscript.php <hashvalue> <option1> <option2>
         */
        $sHashValue = $options[1];
        $dbHashValue = Registry::getConfig()->getConfigParam('sYellowCubeCronHash');

        if ($sHashValue != $dbHashValue) {
            die('You are not allowed to access this file!!');
        }

        // define the log file path
        $myconfig = Registry::getConfig();
        $this->sLogFilepath = $myconfig->getShopConfVar("sShopDir") . "modules/asign_yellowcube/logs/YClogs.log";

        /**
         * Options for script:
         *
         * co - Create YC Customer Order
         *      pp - Sends only prepaid orders
         * ia - Insert Article Master Data
         *      ax  - Include only active
         *      ix  - Include only inactive
         *      xx  - Include all
         *      I   - Insert article to yellowcube
         *      U   - Update article to yellowcube
         *      D   - Delete article from yellowcube
         * spdfs - Send InvoicePdfs to yellowcube
         *      pp - Sends only prepaid orders
         *      custom - Sends only orders defined in the settings
         * gi - Get Inventory
         */
        $command = $options[2];// main command - ia,co,gi,gs
        switch ($command) {
            case 'co':  // only for prepayment: CashInAdvance/Vorouskasse is present
                $sMode = $options[3]; // payment - prepad (pp) only
                $this->createYCCustomerOrder($sMode);
                break;

            case 'ia':  // applicable only for articles...
                $sMode = $options[3];// ax, ix, xx
                $sFlag = $options[4];//I, U, D

                // if no flags specified then use from module settings
                if ($sFlag == "") {
                    $sFlag = "I";
                }
                $this->insertArticleMasterData($sMode, $sFlag);
                break;

            case 'gi':
                $this->getInventory();
                break;

            case 'gs':
                $sMode = $options[3];// ax, ix, xx
                $this->getGenStatus($sMode);
                break;

            default:
                echo "No options specified...";
                break;
        }
    }

    /**
     * Creates New customer Order in Yellowcube
     *
     * @param string $sMode Mode of Operation
     *
     * @return array
     */
    public function createYCCustomerOrder($sMode = null)
    {
        $iCount = 0;

        // if pp = prepayment then?
        $sWhere = "WHERE `" . Asign_Yellowcube_Oxorder::YCIGNORE . "` != 1
                   AND (`" . Asign_YellowCube_Model::YCRESPONSE . "` = '' OR `" . Asign_YellowCube_Model::YCWABRESPONSE . "` = '' OR `" . asign_yellowcube_model::YCWARRESPONSE . "` = '')";// check if initial wab response not present
        if ($sMode === 'pp') {
            $sWhere .= " AND `oxpaymenttype` = 'oxidpayadvance'";// include only prepayment
        } else {
            $sWhere .= " AND `oxpaymenttype` <> 'oxidpayadvance'"; // exclude prepayment
        }

        // get orders based on condition
        $aOrders = DatabaseProvider::getDb(DatabaseProvider::FETCH_MODE_ASSOC)->getAll("SELECT `oxid` FROM `oxorder` " . $sWhere);

        // traverse and perform YC actions
        foreach ($aOrders as $order) {
            $soxId = $order['oxid'];
            $oOrder = oxNew(Order::class);

            /** @var object $oOrder */
            $oOrder->load($soxId);

            // check if the article is already recorded previously...
            $sRequestField = $this->_getOrderRequestField($oOrder);
            $aResponseType = '';

            $iStatusCode = $this->getRecordedStatus($soxId, $oOrder->getCoreTableName(), $sRequestField);

            // not 10 then create new order
            $oYCube = oxNew(Asign_YellowCubeCore::class);
            if ($iStatusCode == null && $oOrder->getFieldData($sRequestField) == '') {
                // execute the order object
                echo "Submitting Order for OXID: " . $soxId . "\n";
                $sFilename = $oOrder->saveGeneratedPDF($soxId);

                if ($sFilename) {
                    // define the paths
                    $sShopDir = Registry::getConfig()->getConfigParam('sShopDir');
                    $sFilename = $sShopDir . "/export/asign/pdf/" . $sFilename;

                    // get the base64 encoded content
                    $sContent = file_get_contents($sFilename);
                } else {
                    $sContent = '';
                }

                // set in array:
                $aParams = array(
                    'pdfdata' => $sContent,
                    'batchnum' => "", 'supbatchnum' => "", 'pickmessage' => "", 'returnreason' => "",
                );

                $oRequestObject = $oYCube->getYCFormattedOrderData($oOrder, $aParams);
                $aResponse = $oYCube->createYCCustomerOrder($oRequestObject);
            } elseif ($iStatusCode < 100) {
                // get the status
                echo "Requesting WAB status for OXID: " . $soxId . "\n";
                $aResponse = $oYCube->getYCGeneralDataStatus($soxId, "WAB");
                $aResponseType = 'WAB';
            } elseif ($iStatusCode == 100) {
                // get the WAR status
                echo "Requesting WAR status for OXID: " . $soxId . "\n";
                $aResponse = $oYCube->getYCGeneralDataStatus($soxId, "WAR");
                $aResponseType = 'WAR';
            }

            // increment the counter
            if (isset($aResponse) && count((array)$aResponse) !== 0) {
                // save the response to database
                $oModel = oxNew(Asign_YellowCube_Model::class);
                if (empty($aResponseType)) {
                    $aResponse->Status = 'Pending';
                } else {
                    if (
                        ($aResponse->StatusCode == 10 && $aResponseType == 'WAB') || ($aResponse->StatusCode < 100 && $aResponseType == 'WAB')) {
                        $aResponse->Status = 'Pending';
                    } elseif (($aResponse->StatusCode == 100 && $aResponseType == 'WAB')) {
                        $aResponse->Status = 'Success';
                    }
                }
//                if (($aResponse->StatusCode == 10 && $aResponseType == '') || ($aResponse->StatusCode < 100 && $aResponseType == 'WAB')) {
//                    $aResponse->Status = 'Pending';
//                } elseif (($aResponse->StatusCode == 100 && $aResponseType == 'WAB')) {
//                    $aResponse->Status = 'Success';
//                }

                $oModel->saveResponseData($aResponse, $oOrder->getCoreTableName(), $soxId, $aResponseType);

                if ($oModel->isTrackingNrResponse()) {
                    echo "Sending Tracking E-Mail \n";
                    $oEmail = oxNew(Email::class);
                    $oEmail->sendSendedNowMail($oOrder);
                }

                $iCount = $iCount + 1;
            }
        }

        error_log("[ " . date("Y-m-d H:i:s") . " ][CRON-ORDERS] Total Yellowcube Orders created: " . $iCount . " \n", 3, $this->sLogFilepath);
    }

    /**
     * Inserts Article Master data to Yellowcube
     *
     * @param string $sMode - Mode of handling
     *                        ax - Only active ones
     *                        ix - Only Inactive ones
     *                        xx - All articles
     * @param string $sFlag - Type of action
     *                        Insert(I),
     *                        Update(U),
     *                        Deactivate/Delete(D)
     *
     * @return array
     */
    public function insertArticleMasterData($sMode, $sFlag)
    {
        $oArticle = oxNew(Article::class);
        $iCount = 0;
        $sWhere = "";

        /*
         * when flag is 'I' it will check if the articles have empty yellowcube response and it will then send that article to yellowcube
         * when flag is 'U' it will check if the articles have yellowcube response filled and it will then update the article into yellowcube
         * when flag is 'D' it will check if the articles have yellowcube response filled and it will then update the article into yellowcube
         * */
        switch ($sFlag) {
            case 'I':
                $sWhere .= " where `" . Asign_YellowCube_Model::YCRESPONSE . "` = ''";
                break;
            case 'U':
            case 'D':
                $sWhere .= " where `" . Asign_YellowCube_Model::YCRESPONSE . "` <> ''";
                break;
        }

        // form where condition based on options...
        switch ($sMode) {
            case 'ax':
                $sWhere .= " and oxactive = 1";
                break;

            case 'ix':
                $sWhere .= " and oxactive = 0";
                break;

            case 'xx':
                $sWhere .= "";
                break;
        }

        // get all the articles based on above condition...
        $aArticles = DatabaseProvider::getDb(DatabaseProvider::FETCH_MODE_ASSOC)->getAll("SELECT `oxid` FROM `oxarticles`" . $sWhere);
        foreach ($aArticles as $article) {
            $soxId = $article['oxid'];
            $oArticle->load($soxId);

            if (!$oArticle->isDownloadable()) {
                $oYCube = oxNew(Asign_YellowCubeCore::class);

                $oRequestObject = $oYCube->getYCFormattedArticleData($oArticle, $sFlag);
                $aResponse = $oYCube->insertArticleMasterData($oRequestObject);

                // increment the counter
                if ($aResponse) {
                    $iCount = $iCount + 1;

                    $oModel = oxNew(Asign_YellowCube_Model::class);
                    // add additional data {status} upon response
                    if ($aResponse->StatusCode == 10) {
                        $aResponse->Status = 'Pending';
                    }
                    $oModel->saveResponseData($aResponse, "oxarticles", $soxId);
                }
            }
        }

        error_log("[ " . date("Y-m-d H:i:s") . " ][CRON-ARTICLES] Total items inserted into Yellowcube: " . $iCount . " \n", 3, $this->sLogFilepath);
    }


    /**
     * Get the general data status for the articles
     *
     * @param $sMode
     * @throws \OxidEsales\Eshop\Core\Exception\DatabaseConnectionException
     * @throws \OxidEsales\Eshop\Core\Exception\DatabaseErrorException
     */
    public function getGenStatus($sMode)
    {
        $oArticle = oxNew(Article::class);
        $iCount = 0;
        $sWhere = " where `" . Asign_YellowCube_Model::YCRESPONSE . "` <> ''";

        // form where condition based on options...
        switch ($sMode) {
            case 'ax':
                $sWhere .= " and oxactive = 1";
                break;

            case 'ix':
                $sWhere .= " and oxactive = 0";
                break;

            case 'xx':
                $sWhere .= "";
                break;
        }

        $aArticles = DatabaseProvider::getDb(DatabaseProvider::FETCH_MODE_ASSOC)->getAll("SELECT `oxid` FROM `oxarticles`" . $sWhere);

        foreach ($aArticles as $article) {
            $soxId = $article['oxid'];
            $oArticle->load($soxId);

            if (!$oArticle->isDownloadable()) {
                $oYCube = oxNew(Asign_YellowCubeCore::class);
                // Get current status if not 100
                $iStatusCode = $this->getRecordedStatus($soxId, "oxarticles", Asign_YellowCube_Model::YCRESPONSE);

                if ($iStatusCode != 100) {
                    $statusResponse = $oYCube->getYCGeneralDataStatus($soxId, "ART");
                    if ($statusResponse) {
                        $oModel = oxNew(Asign_YellowCube_Model::class);
                        if ($statusResponse->StatusCode == 10) {
                            $statusResponse->Status = 'Pending';
                        } elseif ($statusResponse->StatusCode == 100) {
                            $statusResponse->Status = 'Success';
                        }
                        $oModel->saveResponseData($statusResponse, "oxarticles", $soxId);
                    }
                }
            }
        }

        error_log("[ " . date("Y-m-d H:i:s") . " ][CRON-GENSTATUS] Got Status of Total items from Yellowcube: " . $iCount . " \n", 3, $this->sLogFilepath);
    }


    /**
     * Checks which step is the present step the order is in based on the filled database fields
     *
     * @param oxOrder $oOrder
     * @return string
     */
    protected function _getOrderRequestField(Order $oOrder)
    {

        $sResponseField = '';

        if ($oOrder->getFieldData(Asign_YellowCube_Model::YCRESPONSE) == '') {
            $sResponseField = Asign_YellowCube_Model::YCRESPONSE;
        } elseif ($oOrder->getFieldData(Asign_YellowCube_Model::YCWABRESPONSE) == '') {
            $sResponseField = Asign_YellowCube_Model::YCRESPONSE;
        } elseif ($oOrder->getFieldData(Asign_YellowCube_Model::YCWARRESPONSE) == '') {
            $sResponseField = Asign_YellowCube_Model::YCWABRESPONSE;
        }

        return $sResponseField;
    }

    /**
     * Returns inventory list from Yellowcube
     *
     * @param string $soxId Object id
     * @param string $sTable Table name
     *
     * @param string null $sResponseType
     * @return string
     */
    protected function getRecordedStatus($soxId, $sTable, $sResponseField = null)
    {
        $oModel = oxNew(Asign_YellowCube_Model::class);
        $aParams = $oModel->getYellowcubeReport($soxId, $sTable, false, $sResponseField);

        return $aParams["StatusCode"];
    }

    /**
     * Returns inventory list from Yellowcube
     *
     * @return array
     * @internal param Object $oObject Active object
     *
     */
    public function getInventory()
    {
        $oYCube = oxNew(Asign_YellowCubeCore::class);
        $aResponse = $oYCube->getInventory();

        // update
        $oModel = oxNew(Asign_YellowCube_Model::class);
        $iCount = $oModel->saveInventoryData($aResponse);

        error_log("[ " . date("Y-m-d H:i:s") . " ][CRON-INVENTORY] Total updated inventory Items: " . $iCount . " \n", 3, $this->sLogFilepath);
    }
}
