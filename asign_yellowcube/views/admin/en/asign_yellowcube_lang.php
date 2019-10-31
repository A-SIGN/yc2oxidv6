<?php
/**
 * This file is EN language idents
 *
 * PHP version 5
 *
 * @category  Asign
 * @package   Asign_Yellowcube_V_EE
 * @author    Asign <entwicklung@a-sign.ch>
 * @copyright asign
 * @license   http://www.a-sign.ch/
 * @version   3.0
 * @link      http://www.a-sign.ch/
 * @see       Deutsch language idents
 * @since     File available since Release 2.0
 */
$sLangName  = "Deutsch";
// -------------------------------
// RESOURCE IDENTITFIER = STRING
// -------------------------------
$aLang = array(
    'charset'   => 'UTF-8',

    'tbclyellowcube'            => 'Yellowcube',
    'tbclycubereturn'           => 'Yellowcube-Return',
    'ASIGN_OXMENU'              => '<img src="../modules/asign_yellowcube--/images/as_icon.png">',
    'ASIGN_YELLOWCUBE'          => 'Yellowcube',
    'GENERAL_YELLOWCUBE_HEADING'=> 'Yellowcube v3.0: Inventory',
    'GENERAL_YELLOWCUBELOGS_HEADING'            => 'Yellowcube v3.0: Error Logs',
    'ASIGN_OVERVIEW'            => 'Overview',
    'ASIGN_LOGS'=> 'Logs',
    'ASIGN_LOGFILE_UNREADABLE'  => "Access denied: modules/asign_yellowcube--/logs/YClogs.log dir required 777 authorization.",

    // module setting labels and helptext ...
    'SHOP_MODULE_GROUP_main'                    => 'Yellowcube',
    'SHOP_MODULE_GROUP_authentic'               => 'Authentication',
    'SHOP_MODULE_GROUP_additional'              => 'Partner Information',
    'SHOP_MODULE_GROUP_certificate'             => 'Certificate Information',
    'SHOP_MODULE_GROUP_order'                   => 'Order Information',
    'SHOP_MODULE_GROUP_cronjob'                 => 'CRON Job Information',
    'SHOP_MODULE_GROUP_developer'               => 'Developer Mode',
    'SHOP_MODULE_GROUP_orderdoc'                => 'Order Document [PDF|PCL] Information',
    'SHOP_MODULE_GROUP_article'                 => 'Article Information',
    'SHOP_MODULE_sYellowCubeMode'               => 'Yellowcube Operating Mode',
    'SHOP_MODULE_sYellowCubeMode_T'             => 'Test',
    'SHOP_MODULE_sYellowCubeMode_P'             => 'Production',
    'SHOP_MODULE_sYellowCubeMode_D'             => 'Development',
    'HELP_SHOP_MODULE_sYellowCubeMode'          => 'Yellowcube Operating Modes: Test or Production. Before going Live set Mode to Production mode. Default value Test mode.',

    'SHOP_MODULE_sYellowCubeEsdSend'            => 'Send to Yellowcube',
    'SHOP_MODULE_sYellowCubeFlag'               => 'Yellowcube Operating Mode',
    'SHOP_MODULE_sYellowCubeFlag_U'             => 'Update',
    'SHOP_MODULE_sYellowCubeFlag_D'             => 'Deactivate',
    'SHOP_MODULE_sYellowCubeFlag_I'             => 'Insert',
    'HELP_SHOP_MODULE_sYellowCubeFlag'          => 'Yellowcube Change Flags: Update, Delete and Insert. This option decides what action to be take on the articles. Option will be used most for automated process.',

    'SHOP_MODULE_sYellowCubeDepositorNo'        => 'Yellowcube Depositor No.',
    'HELP_SHOP_MODULE_sYellowCubeDepositorNo'   => 'Specify Yellowcube Depositor Number or Customer Number. e.g. 0000054321, 0000010154.',

    'SHOP_MODULE_sYellowCubeWsdlUrl'            => 'WSDL Connection URL',
    'HELP_SHOP_MODULE_sYellowCubeWsdlUrl'       => 'Specify the WSDL Connection URL which is responsible for Yellowcube operations.',

    'SHOP_MODULE_sYellowCubeSender'             => 'Sender Identity',
    'HELP_SHOP_MODULE_sYellowCubeSender'        => 'Set the sender identity for connection/Authentication. For Testing purpose YCTest has been used. Later Live sender details can be used.',

    'SHOP_MODULE_sYellowCubeUseTestRefNo'       => 'Use Test Order Reference ',
    'HELP_SHOP_MODULE_sYellowCubeUseTestRefNo'  => 'If selected then the Test order Reference will be used i.e. 546698. Else active Order reference number will be used. Only for <strong>Testing purpose</strong> only.',

    'SHOP_MODULE_sYellowCubeReceiver'           => 'Receiver Identity',
    'HELP_SHOP_MODULE_sYellowCubeReceiver'      => 'Currently default value YELLOWCUBE has been set. Can be modified during LIVE integration.',

    'SHOP_MODULE_sYellowCubePartner'            => 'Reference of the partner',
    'HELP_SHOP_MODULE_sYellowCubePartner'       => 'Reference  of the partner. z.B. A-SIGN AG',

    'SHOP_MODULE_sYellowCubePartnerNo'          => 'Partner No.',
    'SHOP_MODULE_sYellowCubeCertFile'           => 'Certificate Filename',
    'HELP_SHOP_MODULE_sYellowCubeCertFile'      => 'Specify the SPS Certificate filename placed under your Shop-root /cert folder.',

    'SHOP_MODULE_sYellowCubeCertPass'           => 'Certificate Pass-phrase',
    'SHOP_MODULE_blYellowCubeCertForAll'        => 'Use Certificate for all modes',

    'SHOP_MODULE_sYellowCubePType'              => 'Partner Type',
    'HELP_SHOP_MODULE_sYellowCubePType'         => 'WE = consignees (In the standard YellowCube only one partner role is supported besides the supplier.)',

    'SHOP_MODULE_sYellowCubePlant'              => 'Plant ID',
    'HELP_SHOP_MODULE_sYellowCubePlant'         => 'Plant is the place where the product is stored in the auto-store. Bearing ID as a work ID according to the profile distance dealer. e.g. Y001, Y004, Y010, etc.',

    'SHOP_MODULE_sYellowCubeTransMaxTime'       => 'Maximum waiting Time (in seconds)',

    'SHOP_MODULE_sYellowCubeShipping'           => 'Yellowcube Versand',
    'HELP_SHOP_MODULE_sYellowCubeShipping'      => 'Basic products for YellowCube shipment: "ECO", "PRI", "ECO LKW", "PICKUP" (self collection), "LKW EXPRESS", "SKB", "SP SEM", etc.',

    'SHOP_MODULE_sYellowCubeQuantityISO'        => 'Default Quantity (ISO)',
    'SHOP_MODULE_sYellowCubeQuantityISO_PCE'    => 'PCE',
    'SHOP_MODULE_sYellowCubeQuantityISO_KGM'    => 'KGM',
    'SHOP_MODULE_sYellowCubeQuantityISO_GRM'    => 'GRM',
    'HELP_SHOP_MODULE_sYellowCubeQuantityISO'   => 'Sales unit of measure in ISO code. Values according to valid sales quantity units agreed with customer.',

    'SHOP_MODULE_sYellowCubeYCLot'              => 'Batch number',
    'SHOP_MODULE_sYellowCubeLot'=> 'Supplier batch number',
    'SHOP_MODULE_sYellowCubePMessage'           => 'Picking texts (default)',

    'SHOP_MODULE_sYellowCubeRReason'            => 'Return Reason for this Order',
    'HELP_SHOP_MODULE_sYellowCubeRReason'       => 'Return reason according to YC return code list e.g. "R06" - Other article delivered than ordered.',

    'SHOP_MODULE_sYellowCubeCronHash'            => 'Cron-job Hash value',
    'HELP_SHOP_MODULE_sYellowCubeCronHash'       => 'Security measure to make sure the script is not called anonymously without Hash Tag',

    'SHOP_MODULE_sYellowCubeNotifyEmail'         => 'Developer Email-address',
    'HELP_SHOP_MODULE_sYellowCubeNotifyEmail'    => 'This should be used only during Development or debugging process. SPS XML Request and Response will be sent on this email address.',

    'SHOP_MODULE_sYellowCubeNetWeightISO'           => 'net weight',
    'SHOP_MODULE_sYellowCubeNetWeightISO_GRM'       =>  'Gram [gr]',
    'SHOP_MODULE_sYellowCubeNetWeightISO_KGM'       =>  'Kilogram [kg]',

    'SHOP_MODULE_sYellowCubeGrossWeightISO'         => 'gross weight',
    'SHOP_MODULE_sYellowCubeGrossWeightISO_GRM'     =>  'Gram [gr]',
    'SHOP_MODULE_sYellowCubeGrossWeightISO_KGM'     =>  'Kilogram [kg]',

    'SHOP_MODULE_sYellowCubeBatchMngtReq'           => 'Batch duty',
    'SHOP_MODULE_sYellowCubePeriodExpDateType'      => 'Period Expiry Date Type',
    'SHOP_MODULE_sYellowCubePeriodExpDateType_0'    => '--',
    'SHOP_MODULE_sYellowCubePeriodExpDateType_1'    => 'Week',
    'SHOP_MODULE_sYellowCubePeriodExpDateType_2'    => 'Month',
    'SHOP_MODULE_sYellowCubePeriodExpDateType_3'    => 'Year',

    'SHOP_MODULE_sYellowCubeSerialNoFlag'       => 'Serial number acquisition',

    'SHOP_MODULE_sYellowCubeMinRemLife'         => 'Remaining term',
    'SHOP_MODULE_sYellowCubeEANType'            => 'EAN Type',
    'SHOP_MODULE_sYellowCubeEANType_HE'         =>  'Mnufacturer\'s EAN',
    'SHOP_MODULE_sYellowCubeEANType_HK'         =>  'Hersteller-Kurz-EAN',
    'SHOP_MODULE_sYellowCubeEANType_I6'         =>  'ITF-Code - 16 digits',
    'SHOP_MODULE_sYellowCubeEANType_IC'         =>  'ITF-Code',
    'SHOP_MODULE_sYellowCubeEANType_IE'         =>  'Instore-EAN (int. allocation possible)',
    'SHOP_MODULE_sYellowCubeEANType_IK'         =>  'Instore-Short EAN (int. assignment possible)',
    'SHOP_MODULE_sYellowCubeEANType_UC'         =>  'UPC-Code',
    'SHOP_MODULE_sYellowCubeEANType_VC'         =>  'Velocity-Code (int. allocation possible)',

    'SHOP_MODULE_sYellowCubeAlternateUnitISO'   => 'Alternative Base Unit of Measure',
    'SHOP_MODULE_sYellowCubeAltNumeratorUOM'    => 'Counter - Alternative Base Quantity',
    'SHOP_MODULE_sYellowCubeAltDenominatorUOM'  => 'Denominator - Alternative base quantity',

    'SHOP_MODULE_sYellowCubeLengthISO'          => 'Length',
    'SHOP_MODULE_sYellowCubeLengthISO_CMT'      =>  'Centimeter',
    'SHOP_MODULE_sYellowCubeLengthISO_MTR'      =>  'Meter',
    'SHOP_MODULE_sYellowCubeLengthISO_MMT'      =>  'Millimeter',

    'SHOP_MODULE_sYellowCubeWidthISO'           => 'Width',
    'SHOP_MODULE_sYellowCubeWidthISO_CMT'      =>  'Centimeter',
    'SHOP_MODULE_sYellowCubeWidthISO_MTR'      =>  'Meter',
    'SHOP_MODULE_sYellowCubeWidthISO_MMT'      =>  'Millimeter',

    'SHOP_MODULE_sYellowCubeHeightISO'          => 'Height',
    'SHOP_MODULE_sYellowCubeHeightISO_CMT'      =>  'Centimeter',
    'SHOP_MODULE_sYellowCubeHeightISO_MTR'      =>  'Meter',
    'SHOP_MODULE_sYellowCubeHeightISO_MMT'      =>  'Millimeter',

    'SHOP_MODULE_sYellowCubeVolumeISO'          => 'Volume',
    'SHOP_MODULE_sYellowCubeVolumeISO_CMQ'      =>  'Cubic centimeter [cm3]',
    'SHOP_MODULE_sYellowCubeVolumeISO_MTQ'      =>  'Cubic meter [m3]',
    'SHOP_MODULE_sYellowCubeVolumeISO_MMQ'      =>  'Cubic millimeter [mm3]',

    'SHOP_MODULE_sYellowCubeDocType'            =>  'Type of delivery document',
    'SHOP_MODULE_sYellowCubeDocType_LS'	        =>  'Lieferschein',
    'SHOP_MODULE_sYellowCubeDocType_BL'     	=>	'Bill of delivery',
    'SHOP_MODULE_sYellowCubeDocType_BC'	        =>	'Delivery note',
    'SHOP_MODULE_sYellowCubeDocType_DN'	        =>	'Delivery note',
    'SHOP_MODULE_sYellowCubeDocType_IV'	        =>	'Invoice',
    'SHOP_MODULE_sYellowCubeDocType_RG'	        =>	'Bill',
    'SHOP_MODULE_sYellowCubeDocType_FA'	        =>	'Facture/Fatura',
    'SHOP_MODULE_sYellowCubeDocType_ZS'	        =>	'Payment slip',
    'SHOP_MODULE_sYellowCubeDocType_BP'	        =>	'Payment slip',
    'SHOP_MODULE_sYellowCubeDocType_BV'	        =>	'Deposit slip',
    'SHOP_MODULE_sYellowCubeDocType_PF'	        =>	'Payment form',

    'SHOP_MODULE_sYellowCubeDocMimeType'        =>  'Document MIME Type',
    'SHOP_MODULE_sYellowCubeDocMimeType_pdf'	=>  'pdf',
    'SHOP_MODULE_sYellowCubeDocMimeType_pcl'	=>	'pcl',
    'HELP_SHOP_MODULE_sYellowCubeDocMimeType'   =>  'MIME-Type as an extension of the delivery document. [pdf|pcl] The content of the stream must match the extension.',

    'SHOP_MODULE_blYellowCubeIgnoreLotInfo'      => 'Ignore YCLot and LOT fields in Article information?',
    'SHOP_MODULE_blYellowCubeDocDelete'          => 'Delete Order document after uploading?',
    'SHOP_MODULE_blYellowCubeUsePhoneAndFax'     => 'Include Phone/Fax details in order?',
    'SHOP_MODULE_blYellowCubeOrderManualSend'     => 'Manually send Order to Yellowcube?',
    'HELP_SHOP_MODULE_sYellowCubeOrderManualSend'=> 'If enabled allows sending of Order to YellowCube. Otherwise the order is sent immediately after Order is completed.',

    'SHOP_MODULE_sYellowCubeOrderDocumentsFlag'       => 'Decision: Delivery documents are included.',
    'SHOP_MODULE_sYellowCubeOrderDocumentsFlag_1'     => 'Yes',
    'SHOP_MODULE_sYellowCubeOrderDocumentsFlag_0'     => 'No',
    'HELP_SHOP_MODULE_sYellowCubeOrderDocumentsFlag'  => 'Yes = Document is available and must be delivered with the shipment.<br>No = No delivery documents are available.',

    // main/overview section
    'ASIGN_OVERVIEW_ADDITIONAL' => 'Additional Information...',
    'ASIGN_INVENTORY_UPDATE'    => 'Update Inventory Information...',
    'ASIGN_INVENTORY_UPDATEDLAST'               => 'Last Update received on',
    'ASIGN_COLUMN_YCARTICLENO'  => 'YCArticle Nr.',
    'ASIGN_COLUMN_SHOPID'       => 'Shop Name.',
    'ASIGN_COLUMN_ARTICLENO'    => 'Article Nr.',
    'ASIGN_COLUMN_ARTICLEDESC'  => 'Description',
    'ASIGN_COLUMN_PLANT'        => 'Plant',
    'ASIGN_COLUMN_STORAGELOC'   => 'Storage Location',
    'ASIGN_COLUMN_STOCKTYPE'    => 'Stock Type',
    'ASIGN_COLUMN_QUANTITYISO'  => 'Qty. ISO',
    'ASIGN_COLUMN_QUANTITYUOM'  => 'Qty. UOM',
    'ASIGN_COLUMN_TIMESTAMP'    => 'Timestamp',
    'ASIGN_LABEL_INSERTARTICLE' => 'Send to Yellowcube',
    'ASIGN_LABEL_INSERTARTICLE_STATUS'          => 'Yellocube Article Status',
    'ASIGN_MESSAGE_LAST_UPDATE_ON'              => '<strong>Success:</strong> Latest Yellowcube Inventory received on.',
    'ASIGN_MESSAGE_YCITEM_INSERTED'             => '<strong>Success:</strong> Item inserted into Yellowcube Master data.',
    'ASIGN_MESSAGE_YCITEM_UPDATED'              => '<strong>Success:</strong> New status updated for selected Article.',
    'ASIGN_MESSAGE_YCITEM_INSERTED_FAILED'      => '<strong>Warning:</strong> Failed to insert Item into Yellowcube Master data!! Check Error Logs for more information...',
    'ASIGN_MESSAGE_YCITEM_UPDATED_FAILED'       => '<strong>Warning:</strong> Failed to update status for selected Article!! Check Error Logs for more information...',
    'ASIGN_LABEL_CREATEORDER'                   => 'Create Yellowcube Customer Order',
    'ASIGN_LABEL_CREATEORDER_STATUS'            => 'Yellowcube Customer Order Status',
    'ASIGN_LABEL_CREATEORDER_REPLY'             => 'Yellowcube Customer Order Reply',
    'ASIGN_LABEL_CREATEORDER_RESPONSE'          => 'Response from Yellowcube',
    'ASIGN_LABEL_RETURN_RESPONSE'               => 'Return response from Yellowcube',
    'ASIGN_MESSAGE_YCORDER_CREATED'             => '<strong>Success:</strong> Yellowcube customer order successfully created.',
    'ASIGN_MESSAGE_YCORDER_UPDATED'             => '<strong>Success:</strong> Yellowcube customer order updated to database successfully.',
    'ASIGN_MESSAGE_YCORDER_CREATED_FAILED'      => '<strong>Warning:</strong> Failed to create Yellowcube order!! Check Error Logs for more information...',
    'ASIGN_MESSAGE_YCORDER_UPDATED_FAILED'      => '<strong>Warning:</strong> Failed to get updated response. Possible reason: Wrong order reference number or Order not yet processed.',
    'ASIGN_MESSAGE_WRONG_FILE_FORMAT'           => '<strong>Warning:</strong> File format uploaded in not PDF format.',
    'ASIGN_YCSPDETAILS_SAVED_OK'=> '<strong>Success:</strong> Additional Article details saved for this article.',
    'ASIGN_MESSAGE_YCRETURN_CREATED'            => '<strong>Success:</strong> Order return request sent to Yellowcube.',
    'ASIGN_OVERVIEW_INVENTORY_MESSAGE'          => 'The inventory is extracted daily from the YellowCube inventory management system and the latest version is available for retrieval online. Only the current inventory of the day is available.',
    'ASIGN_OVERVIEW_INVENTORY_MESSAGE_1'        => 'To get latest updates from Yellowcube Inventory click below button...',
    'ASIGN_MESSAGE_ZIPCODE_MISMATCH'            => 'Zip code format is not matching as per your country.',
    'ASIGN_MESSAGE_ZIPCODE_INVALID'             => 'Zip code is not valid. Contains invalid characters.',
    'ASIGN_MESSAGE_MANUAL_MODE_OFF'             => '<strong>Notice:</strong> Manual mode is deactivated for Order sending process. This mode can be activated under Module Settings > Order Information > Manually send Order to Yellowcube?',
    'ASIGN_LABEL_BASEOUM'       => 'Base unit',
    'ASIGN_LABEL_OPERATINGMODE' => 'Operating Mode',
    'ASIGN_DOWNLOADABLE_PRODUCT_DETECTED' => 'Select product is set as Downloadable product under "Downloads" tab. This product will not be sent to YellowCube.',

    // buttons/options
    'ASIGN_YCARTICLES_OPTION_U' => 'Update this article',
    'ASIGN_YCARTICLES_OPTION_I' => 'Insert this article',
    'ASIGN_YCARTICLES_OPTION_D' => 'Deactivate this article',
    'ASIGN_YCARTICLES_BUTTON_INSERT'            => 'Send Yellowcube article',
    'ASIGN_YCARTICLES_BUTTON_CREATE'            => 'Send Yellowcube Order',
    'ASIGN_YCARTICLES_BUTTON_RETURN'            => 'Send Return Request',
    'ASIGN_YCARTICLES_BUTTON_STATUS'            => 'Get Current Status',
    'ASIGN_YCARTICLES_BUTTON_REFRESH'           => 'Update Now',
    'ASIGN_YCARTICLES_BUTTON_SAVE'              => 'Save information',
    'ASIGN_YCORDERS_ORDER_PDF'  => 'PDF order overview document',
    'ASIGN_YCORDERS_BUTTON_REPLY'               => 'Get Order Reply',
    'ASIGN_YCORDERS_BUTTON_STATUS'              => 'Get Order Status',

    // OPTIONS
    'ASIGN_OPTION_PCE'          =>  'Piece',
    'ASIGN_OPTION_PK'           =>  'Package (Parcel) possibly Multipack',
    'ASIGN_OPTION_BG'           =>  'Bag',
    'ASIGN_OPTION_CA'           =>  'Canister/can',
    'ASIGN_OPTION_CT'           =>  'KAR-Cardboard 2nd stage (EH2)',
    'ASIGN_OPTION_PF'           =>  'AL-Pallet 3rd stage (EH3)',
    'ASIGN_OPTION_CMT'          =>  'Centimeter',
    'ASIGN_OPTION_MTR'          =>  'Meter',
    'ASIGN_OPTION_MMT'          =>  'Millimeter',
    'ASIGN_OPTION_CMQ'          =>  'Cubic-Centimeter [cm3]',
    'ASIGN_OPTION_MTQ'          =>  'Cubic-Meter [m3]',
    'ASIGN_OPTION_MMQ'          =>  'Cubic-Millimeter [mm3]',
    'ASIGN_OPTION_GRM'          =>  'Gram [gr]',
    'ASIGN_OPTION_KGM'          =>  'Kilogram [kg]',
    'ASIGN_OPTION_E5'	        =>  'Fresh-EAN, var. wt., ind. Art. no. 5 pcs.',
    'ASIGN_OPTION_EA'	        =>	'Fresh-EAN, var. Pr., ind. Art. no. 4 pcs.',
    'ASIGN_OPTION_HE'	        =>	'Manufacturer\'s-EAN',
    'ASIGN_OPTION_HK'	        =>	'Manufacturer-Short-EAN',
    'ASIGN_OPTION_I6'	        =>	'ITF-Code - 16 digits',
    'ASIGN_OPTION_IC'	        =>	'ITF-Code',
    'ASIGN_OPTION_IE'	        =>	'Instore-EAN (int. allocation possible)',
    'ASIGN_OPTION_IK'	        =>	'Instore-Short-EAN (int. assignment possible)',
    'ASIGN_OPTION_SA'	        =>	'Fresh-EAN, var. price, SAN',
    'ASIGN_OPTION_SG'	        =>	'Fresh-EAN, var. price, SAN + container.',
    'ASIGN_OPTION_UC'	        =>	'UPC-Code',
    'ASIGN_OPTION_VC'	        =>	'Velocity-Code (int. allocation possible)',
);

/*
[{ oxmultilang ident="GENERAL_YOUWANTTODELETE" }]
*/
