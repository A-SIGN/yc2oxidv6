<?php
/**
 * Renders template asign_yellowcube_main.tpl
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
 * @see       Asign_YellowCube_Main
 * @since     File available since Release 2.0
 */

/**
 * Renders template asign_yellowcube_main.tpl
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
use OxidEsales\Eshop\Application\Controller\Admin\AdminDetailsController;
use OxidEsales\Eshop\Core\Exception\StandardException;
use OxidEsales\Eshop\Core\Registry;

class Asign_Yellowcube_Main extends AdminDetailsController
{
    /**
     * Executes parent method parent::render(), show the details
     * for selected object and passed to Smarty engine and returns name of template file
     * "asign_yellowcube_main.tpl".
     *
     * @return string
     */
    public function render()
    {
        parent::render();

        /** @var string $soxId */
        $soxId      = $this->getEditObjectId();
        $this->_aViewData["oxid"] = $soxId;

        // get the inventory information
        $oModel = oxNew(Asign_YellowCube_Model::class);
        $this->_aViewData["aInventory"] = $oModel->getInventoryData($soxId);

        return "asign_yellowcube_main.tpl";
    }

    /**
     * Executes yellowcube Inventory status
     *
     * @return null
     */
    public function refresh()
    {
        try {
            $oYCube = oxNew(Asign_YellowCubeCore::class);
            $aResponse = $oYCube->getInventory();

            foreach ($aResponse as $key => $value) {
                foreach ($value->Article as $childKey => $childValue) {
                    // Iterate through Article Object and round of the stock quantity.
                    // For Example: 243.000 will be converted to 243 after this loop and alter the response.
                    // After this loop alteration, the response will be saved in asign_ycinventory table.
                    // And show the rounded off value in the log box when fetching stock from YELLOWCUBE.
                    $value->Article[$childKey]->QuantityUOM->_ = round($childValue->QuantityUOM->_);
                }
            }

            // update
            $oModel = oxNew(Asign_YellowCube_Model::class);
            $iCount = $oModel->saveInventoryData($aResponse);

            // if some result then only show message
            if ($iCount) {
                $this->_aViewData['blStatus'] = true;
            }
        } catch (\Exception $Ex) {
            Registry::getUtilsView()->addErrorToDisplay(new StandardException('[Error: ' . $Ex->getCode() . '] ' . $Ex->getMessage()));
        }

    }

    /**
     * Returns Last updated date for Inventory
     *
     * @return string
     */
    public function getLastUpdateDate()
    {
        return $this->getConfig()->getShopConfVar('ycupdlast');
    }

    /**
     * Returns Stock value meaning
     *
     * @param string $iStock Stock value
     *
     * @return string
     */
    public function getStockText($iStock)
    {
        // get the inventory information
        $oModel = oxNew(Asign_YellowCube_Model::class);
        $sText = $oModel->getStockValueMeaning($iStock);

        return $sText;
    }
}
