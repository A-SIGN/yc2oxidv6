<?php
/**
 * Renders template file asign_yellowcube_articles.tpl
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
 * @see       Asign_YellowCube_Articles
 * @since     File available since Release 2.0
 */

/**
 * Renders Template file
 *
 * @category Asign
 * @package  Asign_Yellowcube_V_EE
 * @author   Asign <entwicklung@a-sign.ch>
 * @license  http://www.a-sign.ch/
 * @link     http://www.a-sign.ch
 */
namespace AsignYellowcube\Controllers\Admin;
use AsignYellowcube\Core\Asign_YellowCubeCore;
use AsignYellowcube\Model\Asign_YellowCube_Model;
use OxidEsales\Eshop\Application\Controller\Admin\AdminController;
use OxidEsales\Eshop\Application\Model\Article;
use OxidEsales\Eshop\Core\DatabaseProvider;
use OxidEsales\Eshop\Core\Registry;

class Asign_YellowCube_Articles extends AdminController
{
    /**
     * Executes parent method parent::render(), show the details
     * for selected object and passed to Smarty engine and returns name of template file
     * "asign_yellowcube_articles.tpl".
     *
     * @return string
     */
    public function render()
    {
        parent::render();

        $soxId = $this->getEditObjectId();
        $this->_aViewData["oxid"] = $soxId;

        // check if downloadable
        $oArticle = oxNew(Article::class);
        $oArticle->load($soxId);
        $this->_aViewData["blDownloadable"] = $oArticle->isDownloadable();

        // get stored status
        $oModel = oxNew(Asign_YellowCube_Model::class);
        $artResponse = $oModel->getYellowcubeReport($soxId, "oxarticles");
        $aSpsDetails = $oModel->getSpSDetailsForThisArticle($soxId);

        if ($artResponse) {
            $artResponse = array_reverse($artResponse);
            if (in_array("E", $artResponse)) {
                $this->_aViewData['setError'] = true;
            }
        }

        // template params..
        $this->_aViewData["ARTResponse"] = $artResponse;
        $this->_aViewData["SpsDetails"]  = $aSpsDetails;

        return 'asign_yellowcube_articles.tpl';
    }

    /**
     * Executes yellowcube Articles creation
     *
     * @return null
     */
    public function save()
    {
        $soxId      = $this->getEditObjectId();
        $aParams    = Registry::getRequest()->getRequestParameter('spsval');
        $sParams    = serialize($aParams);
        DatabaseProvider::getDb()->execute("update `oxarticles` set `asignspsdetails` = '" . $sParams . "' where `oxid` = '" . $soxId . "'");

        $this->_aViewData["storeok"]    = 'true';
    }

    /**
     * Executes yellowcube Articles creation
     *
     * @return null
     */
    public function create()
    {
        $soxId      = $this->getEditObjectId();
        $this->_aViewData["oxid"] = $soxId;
        $sFlag      = Registry::getRequest()->getRequestParameter("sflag");
        $sBaseOUM   = Registry::getRequest()->getRequestParameter("sbaseoum");
        $oArticle   = oxNew(Article::class);
        $oArticle->load($soxId);

        // execute the article object
        $oYCube = oxNew(Asign_YellowCubeCore::class);
        $oRequestObject = $oYCube->getYCFormattedArticleData($oArticle, $sFlag, $sBaseOUM);
        $aResponse = $oYCube->insertArticleMasterData($oRequestObject);

        if ($aResponse == null ) {
            $this->_aViewData["mcreate"] = "false";
        } else {
            // save the response to database
            $oModel = oxNew(Asign_YellowCube_Model::class);
            $aResponse->Status = 'Pending';
            $oModel->saveResponseData($aResponse, "oxarticles", $soxId);

            $this->_aViewData["mcreate"] = "true";
        }
    }

    /**
     * Executes and stores the status of the inserted article
     * received from YellowCube
     *
     * @return array
     */
    public function status()
    {
        $soxId                      = $this->getEditObjectId();
        $this->_aViewData["oxid"]   = $soxId;

        $oYCube = oxNew(Asign_YellowCubeCore::class);
        $aResponse = $oYCube->getYCGeneralDataStatus($soxId, "ART");

        // save update status
        if ($aResponse == null ) {
            $this->_aViewData["mstatus"] = "false";
        } else {
            $oModel = oxNew(Asign_YellowCube_Model::class);
            if ($aResponse->StatusCode == 10) {
                $aResponse->Status = 'Pending';
            } elseif ($aResponse->StatusCode == 100) {
                $aResponse->Status = 'Success';
            }
            $oModel->saveResponseData($aResponse, "oxarticles", $soxId);

            $this->_aViewData["mstatus"] = "true";
        }
    }

    /**
     * Returns array of boolean options
     *
     * @return array
     */
    public function getBooleanOptions()
    {
        return array('NO', 'YES');
    }

    /**
     * Returns array of expiry date options
     *
     * @return array
     */
    public function getPeriodExpDateTypeOptions()
    {
        return array('0'=>'--', '1'=>'week', '2'=>'month', '3'=>'year');
    }

    /**
     * Returns array of Alternate ISO Units
     *
     * @return array
     */
    public function getAlternateUnitISOOptions()
    {
        return array(
            'PCE', 'PK', 'BG',
            'CA', 'CT', 'PF'
        );
    }

    /**
     * Returns array of EANTypes
     *
     * @return array
     */
    public function getEANTypesOptions()
    {
        return array(
            //'E5','EA','SA','SG' -- Frische-EAN values disabled
            'HE','HK','I6','UC',
            'IC','IE','IK','VC'
        );
    }

    /**
     * Returns array of Weight Units
     *
     * @return array
     */
    public function getWeightUnitOptions()
    {
        return array('GRM','KGM');
    }

    /**
     * Returns array of Length Units
     *
     * @return array
     */
    public function getLengthUnitOptions()
    {
        return array('CMT','MTR','MMT');
    }

    /**
     * Returns array of Volume Units
     *
     * @return array
     */
    public function getVolumeUnitOptions()
    {
        return array('CMQ','MTQ');
    }
}
