<?php
/**
 * Extends OXORDER class.
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
 * @see       Asign_Yellowcube_Oxorder
 * @since     File available since Release 2.0
 */

/**
 * Extends OXORDER class.
 *
 * @category Asign
 * @package  Asign_Yellowcube_V_EE
 * @author   Asign <entwicklung@a-sign.ch>
 * @license  http://www.a-sign.ch/
 * @link     http://www.a-sign.ch
 */
namespace AsignYellowcube\Controllers;
use AsignYellowcube\Core\Asign_YellowCubeCore;
use AsignYellowcube\Model\Asign_YellowCube_Model;
use OxidEsales\Eshop\Application\Model\Order;
use OxidEsales\Eshop\Core\Registry;

class Asign_Yellowcube_Oxorder extends Asign_Yellowcube_Oxorder_parent
{
    /**
     * @var constant
     */
    const YCIGNORE = 'asignycignore';

    /**
    * Path to pdf folder
    * @var string
    */
    public $_sYellowcubePdfPath = "export/asign/pdf/";

    /**
     * Constructor for this class
     *
     * @return \Asign_Yellowcube_Oxorder
     */
    public function __construct()
    {
        parent::__construct();
        $this->_aFieldNames[static::YCIGNORE] = 0;
    }

    /**
     * Executes yellowcube order creation
     *
     * @param string $sDirectOxid Order Object ID
     * @param string $sDirectData encoded data
     *
     * @return null
     */
    public function sendGeneratedPDF($sDirectOxid = null, $sDirectData = null)
    {
        $blSuccess = false;

        $sOrderId = ( !is_null($sDirectOxid) ) ? $sDirectOxid : $this->getId();

        $blLoaded = $this->load($sOrderId);

        if ( $blLoaded ) {
            // set in array:
            $aParams = array(
                'pdfdata'       => $sDirectData,
                'batchnum'      => "",'supbatchnum'   => "",'pickmessage'   => "",'returnreason'  => "",
            );

            // execute the order object
            $oYCube = oxNew(Asign_YellowCubeCore::class);
            $oRequestObject = $oYCube->getYCFormattedOrderData($this, $aParams);
            $aResponse = $oYCube->createYCCustomerOrder($oRequestObject);

            if ($aResponse != null || $aResponse != "") {
                // save the response to database
                $oModel = oxNew(Asign_YellowCube_Model::class);
                $oModel->saveResponseData($aResponse, "oxorder", $sOrderId);
                $blSuccess = true;
            }
        }

        return $blSuccess;
    }

    /**
     * Performs PDF export to user (outputs file to save).
     *
     * @param string $soxId Direct call
     *
     * @return null
     */
    public function saveGeneratedPDF( $soxId = null)
    {
        $sOrderId = ( !is_null( $soxId ) ) ? $soxId : $this->getId();

        $bLoaded = $this->load( $sOrderId );

        if ( $bLoaded ) {

            $sFilename = asign_yellowcube_util::genTrimmedFilename( $this );
            $iOrderLang = (int) (isset($this->oxorder__oxlang->value) ? $this->oxorder__oxlang->value : 0);

            ob_start();
            $sShopDir = Registry::getConfig()->getConfigParam('sShopDir');
            $target_path = $sShopDir . $this->_sYellowcubePdfPath;
            //  if directory does not exist then create it
            if (!file_exists($target_path)) {
                mkdir($target_path, 0777, true);
            } else {
                //check if the folder is writable: if not set permission
                if (!is_writable($target_path)) {
                    chmod($target_path, 0777);
                }
            }
            $this->genPDF($sShopDir . $this->_sYellowcubePdfPath . $sFilename, $iOrderLang, true);
            ob_get_contents();
            ob_end_clean();

            return $sFilename;

        }
    }

    /**
     * Order will be ignored from further attempts of submission to YC
     */
    public function setYCIgnore()
    {
        $this->_setFieldData(static::YCIGNORE, true);
        $this->save();
    }
}