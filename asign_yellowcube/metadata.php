<?php
/**
 * Module information defined....
 *
 * @category  Asign
 * @package   Asign_Yellowcube_V_EE
 * @author    Asign <entwicklung@a-sign.ch>
 * @copyright asign
 * @license   http://www.a-sign.ch/
 * @version   2.0
 * @link      http://www.a-sign.ch/
 * @see       Module information
 * @since     File available since Release 2.0
 */

/**
 * Metadata version
 */
$sMetadataVersion = '2.0';

/**
 * Module information
 */
$aModule = [
    'id'            =>  'asign_yellowcube',
    'title'         =>  'A-Sign GmbH Yellowcube v3.0',
    'description'   =>  "Integrates SOAP based Yellowcube API. For signing in with SOAP Certificate upload your binary certificate file under <em>/cert folder</em>. <br /><br /><strong>Important:</strong> Make sure that this folder contents are <strong>.htaccess protected</strong>.",
    'version'       =>  '3.0',
    'thumbnail'     =>  'images/picture.png',
    'author'        =>  'entwicklung@a-sign.ch',
    'email'         =>  'entwicklung@a-sign.ch',
    'url'           =>  'http://www.a-sign.ch',
    'extend'        =>  [
        \OxidEsales\Eshop\Application\Model\Order::class   => \AsignYellowcube\Controllers\Asign_Yellowcube_Oxorder::class
    ],
    'controllers' => [
        'asign_yellowcube_articles' => \AsignYellowcube\Controllers\Admin\Asign_YellowCube_Articles::class,
        'asign_yellowcube' => \AsignYellowcube\Controllers\Admin\Asign_YellowCube::class,
        'asign_yellowcube_list' => \AsignYellowcube\Controllers\Admin\Asign_Yellowcube_List::class,
        'asign_yellowcube_main' => \AsignYellowcube\Controllers\Admin\Asign_Yellowcube_Main::class,
        'asign_yellowcube_logs' => \AsignYellowcube\Controllers\Admin\Asign_YellowCube_Logs::class,
        'asign_yellowcube_orders' => \AsignYellowcube\Controllers\Admin\Asign_YellowCube_Orders::class,
        'asign_yellowcube_return' => \AsignYellowcube\Controllers\Admin\Asign_Yellowcube_Return::class
    ],
    'events'        =>  [
        'onActivate'    => 'AsignYellowcube\Event\asign_yellowcube_event::onActivate',
//        'onDeactivate'  => 'asign_yellowcube_event::onDeactivate',
    ],

    'files'         =>  [
        // soap related files
        'asign_soapclientapi'       => \AsignYellowcube\Core\Asign_SoapClientApi::class,
        'asign_soapclient'          => \AsignYellowcube\Core\Utils\Asign_SoapClient::class,
        'WSSESoap'                  => \AsignYellowcube\Core\Utils\Inc\WSSESoap::class,
        'XMLSecurityDSig'           => \AsignYellowcube\Core\Utils\Inc\XMLSecurityDSig::class,
        'XMLSecurityKey'            => \AsignYellowcube\Core\Utils\Inc\XMLSecurityKey::class,

        'asign_yellowcubecore'      => \AsignYellowcube\Core\Asign_YellowCubeCore::class,
        'asign_yellowcubecron'      => \AsignYellowcube\Core\Asign_YellowCubeCron::class,
        'asign_yellowcube_event'    => \AsignYellowcube\Event\Asign_YellowCube_Event::class,
        'asign_yellowcube'          => \AsignYellowcube\Controllers\Admin\Asign_YellowCube::class,
        'asign_yellowcube_list'     => \AsignYellowcube\Controllers\Admin\Asign_Yellowcube_List::class,
        'asign_yellowcube_main'     => \AsignYellowcube\Controllers\Admin\Asign_Yellowcube_Main::class,
        'asign_yellowcube_logs'     => \AsignYellowcube\Controllers\Admin\Asign_YellowCube_Logs::class,
        'asign_yellowcube_articles' => \AsignYellowcube\Controllers\Admin\Asign_YellowCube_Articles::class,
        'asign_yellowcube_orders'   => \AsignYellowcube\Controllers\Admin\Asign_YellowCube_Orders::class,
        'asign_yellowcube_return'   => \AsignYellowcube\Controllers\Admin\Asign_Yellowcube_Return::class,
        'asign_yellowcube_util'     => \AsignYellowcube\Controllers\Asign_Yellowcube_Util::class,
        'asign_yellowcube_model'    => \AsignYellowcube\Model\Asign_YellowCube_Model::class
    ],

    'templates'     =>  [
        'asign_yellowcube.tpl'          => 'asign_yellowcube/views/admin/tpl/asign_yellowcube.tpl',
        'asign_yellowcube_list.tpl'     => 'asign_yellowcube/views/admin/tpl/asign_yellowcube_list.tpl',
        'asign_yellowcube_main.tpl'     => 'asign_yellowcube/views/admin/tpl/asign_yellowcube_main.tpl',
        'asign_yellowcube_logs.tpl'     => 'asign_yellowcube/views/admin/tpl/asign_yellowcube_logs.tpl',
        'asign_yellowcube_articles.tpl' => 'asign_yellowcube/views/admin/tpl/asign_yellowcube_articles.tpl',
        'asign_yellowcube_orders.tpl'   => 'asign_yellowcube/views/admin/tpl/asign_yellowcube_orders.tpl',
        'asign_yellowcube_return.tpl'   => 'asign_yellowcube/views/admin/tpl/asign_yellowcube_return.tpl',
    ],
     'blocks'        => [
        [
            'template' => 'order_list.tpl',
            'block'    => 'admin_order_list_item',
            'file'     => '/views/admin/blocks/asign_yellowcube_listitems.tpl'
        ],
     ],

    'settings'      =>  [
        // SOAP information
        [
            'group'         => 'main',
            'name'          => 'sYellowCubeMode',
            'type'          => 'select',
            'value'         => 'T',
            'constraints'    => 'T|P|D'
        ],
        [
            'group'         => 'main',
            'name'          => 'sYellowCubeWsdlUrl',
            'type'          => 'str',
            'value'         => '',
        ],
        [
            'group'         => 'main',
            'name'          => 'sYellowCubeTransMaxTime',
            'type'          => 'str',
            'value'         => '120'
        ],
        // authentication information only
        [
            'group'         => 'authentic',
            'name'          => 'sYellowCubeDepositorNo',
            'type'          => 'str',
            'value'         => '',
        ],
        [
            'group'         => 'authentic',
            'name'          => 'sYellowCubeSender',
            'type'          => 'str',
            'value'         => 'YCTest'
        ],
        [
            'group'         => 'authentic',
            'name'          => 'sYellowCubeReceiver',
            'type'          => 'str',
            'value'         => 'YELLOWCUBE'
        ],

        // certificate information
        [
            'group'         => 'certificate',
            'name'          => 'blYellowCubeCertForAll',
            'type'          => 'bool',
            'value'         => 'true',
        ],
        [
            'group'         => 'certificate',
            'name'          => 'sYellowCubeCertFile',
            'type'          => 'str',
            'value'         => '',
        ],

        // additional information only
        [
            'group'         => 'additional',
            'name'          => 'sYellowCubePartnerNo',
            'type'          => 'str',
            'value'         => ''
        ],
        [
            'group'         => 'additional',
            'name'          => 'sYellowCubePType',
            'type'          => 'str',
            'value'         => 'WE'
        ],
        [
            'group'         => 'additional',
            'name'          => 'sYellowCubePlant',
            'type'          => 'str',
            'value'         => ''
        ],

        // Order information only
        [
            'group'         => 'order',
            'name'          => 'blYellowCubeDocDelete',
            'type'          => 'bool',
            'value'         => 'false'
        ],
        [
            'group'         => 'order',
            'name'          => 'blYellowCubeUsePhoneAndFax',
            'type'          => 'bool',
            'value'         => 'false'
        ],
        [
            'group'         => 'order',
            'name'          => 'blYellowCubeOrderManualSend',
            'type'          => 'bool',
            'value'         => 'false'
        ],
        [
            'group'         => 'order',
            'name'          => 'sYellowCubeOrderDocumentsFlag',
            'type'          => 'select',
            'value'         => '1',
            'constraints'    => '1|0'
        ],
        [
            'group'         => 'order',
            'name'          => 'sYellowCubeDocMimeType',
            'type'          => 'select',
            'value'         => 'pdf',
            'constraints'    => 'pdf|pcl'
        ],
        [
            'group'         => 'order',
            'name'          => 'sYellowCubeDocType',
            'type'          => 'select',
            'value'         => 'LS',
            'constraints'    => 'LS|BL|BC|DN|IV|RG|FA|ZS|BP|BV|PF'
        ],

        // article information only
        [
            'group'         => 'article',
            'name'          => 'blYellowCubeIgnoreLotInfo',
            'type'          => 'bool',
            'value'         => 'true'
        ],
        [
            'group'         => 'article',
            'name'          => 'sYellowCubeNetWeightISO',
            'type'          => 'select',
            'value'         => 'KGM',
            'constraints'    => 'KGM|GRM'
        ],
        [
            'group'         => 'article',
            'name'          => 'sYellowCubeGrossWeightISO',
            'type'          => 'select',
            'value'         => 'KGM',
            'constraints'    => 'KGM|GRM'
        ],
        [
            'group'         => 'article',
            'name'          => 'sYellowCubeEANType',
            'type'          => 'select',
            'value'         => 'HE',
            'constraints'    => 'HE|HK|I6|IC|IE|IK|UC|VC'
        ],
        [
            'group'         => 'article',
            'name'          => 'sYellowCubeQuantityISO',
            'type'          => 'str',
            'value'         => 'PCE',
        ],
        [
            'group'         => 'article',
            'name'          => 'sYellowCubeAlternateUnitISO',
            'type'          => 'str',
            'value'         => 'PCE',
        ],
        [
            'group'         => 'article',
            'name'          => 'sYellowCubeLengthISO',
            'type'          => 'select',
            'value'         => 'MTR',
            'constraints'    => 'MTR|CMT|MMT'
        ],
        [
            'group'         => 'article',
            'name'          => 'sYellowCubeWidthISO',
            'type'          => 'select',
            'value'         => 'MTR',
            'constraints'    => 'MTR|CMT|MMT'
        ],
        [
            'group'         => 'article',
            'name'          => 'sYellowCubeHeightISO',
            'type'          => 'select',
            'value'         => 'MTR',
            'constraints'    => 'MTR|CMT|MMT'
        ],
        [
            'group'         => 'article',
            'name'          => 'sYellowCubeVolumeISO',
            'type'          => 'select',
            'value'         => 'CMQ',
            'constraints'    => 'CMQ|MTQ'
        ],

        // Cronjob information
        [
            'group'         => 'cronjob',
            'name'          => 'sYellowCubeCronHash',
            'type'          => 'str',
            'value'         => ''
        ],
        [
            'group'         => 'developer',
            'name'          => 'sYellowCubeNotifyEmail',
            'type'          => 'str',
            'value'         => ''
        ],
    ],
];
