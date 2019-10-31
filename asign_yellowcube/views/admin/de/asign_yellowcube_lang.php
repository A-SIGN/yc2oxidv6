<?php
/**
 * This file is DE language idents
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
    'tbclycubereturn'           => 'Yellowcube-Rückgabe',
    'ASIGN_OXMENU'              => '<img src="../modules/asign_yellowcube--/images/as_icon.png">',
    'ASIGN_YELLOWCUBE'          => 'Yellowcube',
    'GENERAL_YELLOWCUBE_HEADING'=> 'Yellowcube v3.0: Inventarisierung',
    'GENERAL_YELLOWCUBELOGS_HEADING'            => 'Yellowcube v3.0: Fehlerprotokolle',
    'ASIGN_OVERVIEW'            => 'Übersicht',
    'ASIGN_LOGS'=> 'Logs',
    'ASIGN_LOGFILE_UNREADABLE'  => "Zugriff verweigert: modules/asign_yellowcube--/logs/YClogs.log dir erfordert 777 Genehmigung.",

    // module setting labels and helptext ...
    'SHOP_MODULE_GROUP_main'                    => 'Yellowcube',
    'SHOP_MODULE_GROUP_authentic'               => 'Authentifizierung',
    'SHOP_MODULE_GROUP_additional'              => 'Partnerinformationen',
    'SHOP_MODULE_GROUP_certificate'             => 'Informationen zum Zertifikat',
    'SHOP_MODULE_GROUP_order'   => 'Bestellinformationen',
    'SHOP_MODULE_GROUP_cronjob' => 'CRON Job-Informationen',
    'SHOP_MODULE_GROUP_developer'               => 'Entwicklermodus',
    'SHOP_MODULE_GROUP_orderdoc'=> 'Bestelldokument [PDF|PCL] Informationen',
    'SHOP_MODULE_GROUP_article' => 'Artikelinformationen',
    'SHOP_MODULE_sYellowCubeMode'               => 'Yellowcube Betriebsart',
    'SHOP_MODULE_sYellowCubeMode_T'             => 'Testen',
    'SHOP_MODULE_sYellowCubeMode_P'             => 'Produktion',
    'SHOP_MODULE_sYellowCubeMode_D'             => 'Entwicklung',
    'HELP_SHOP_MODULE_sYellowCubeMode'          => 'Yellowcube Betriebsarten: Test oder Produktion. Bevor Sie in den Live-Modus wechseln, stellen Sie den Modus auf den Produktionsmodus ein. Standardwert Testmodus.',

    'SHOP_MODULE_sYellowCubeEsdSend'            => 'An Yellowcube senden',
    'SHOP_MODULE_sYellowCubeFlag'               => 'Yellowcube Betriebsart',
    'SHOP_MODULE_sYellowCubeFlag_U'             => 'Aktualisieren',
    'SHOP_MODULE_sYellowCubeFlag_D'             => 'Deaktivieren',
    'SHOP_MODULE_sYellowCubeFlag_I'             => 'Einfügen',
    'HELP_SHOP_MODULE_sYellowCubeFlag'          => 'Yellowcube Change Flags: Aktualisieren, Löschen und Einfügen. Diese Option entscheidet, welche Maßnahmen für die Artikel zu ergreifen sind. Die Option wird am häufigsten für automatisierte Prozesse verwendet.',

    'SHOP_MODULE_sYellowCubeDepositorNo'        => 'Yellowcube Einzahler Nr.',
    'HELP_SHOP_MODULE_sYellowCubeDepositorNo'   => 'Geben Sie die Yellowcube-Einzahlernummer oder Kundennummer an, z.B. 0000054321, 0000010154.',

    'SHOP_MODULE_sYellowCubeWsdlUrl'            => 'WSDL Verbindungs-URL',
    'HELP_SHOP_MODULE_sYellowCubeWsdlUrl'       => 'Geben Sie die WSDL-Verbindungs-URL an, die für den Betrieb von Yellowcube verantwortlich ist.',

    'SHOP_MODULE_sYellowCubeSender'             => 'Absender-Identität',
    'HELP_SHOP_MODULE_sYellowCubeSender'        => 'Stellen Sie die Absenderidentität für Verbindung/Authentifizierung ein. Für Testzwecke wurde YCTest verwendet. Spätere Live-Absenderdetails können verwendet werden.',

    'SHOP_MODULE_sYellowCubeUseTestRefNo'       => 'Testauftragsreferenz verwenden ',
    'HELP_SHOP_MODULE_sYellowCubeUseTestRefNo'  => 'Wenn ausgewählt, wird die Testauftragsreferenz verwendet, z.B. 546698. Andernfalls wird die aktive Bestellreferenznummer verwendet. Nur für <strong>Testzwecke</strong> nur.',

    'SHOP_MODULE_sYellowCubeReceiver'           => 'Empfänger-Identität',
    'HELP_SHOP_MODULE_sYellowCubeReceiver'      => 'Der aktuelle Standardwert YELLOWCUBE ist eingestellt. Kann während der LIVE-Integration geändert werden.',

    'SHOP_MODULE_sYellowCubePartner'            => 'Referenz der Partner',
    'HELP_SHOP_MODULE_sYellowCubePartner'       => 'Referenz des Partners. z.B. A-SIGN AG',

    'SHOP_MODULE_sYellowCubePartnerNo'          => 'Partnernummer',
    'SHOP_MODULE_sYellowCubeCertFile'           => 'Zertifikat Dateiname',
    'HELP_SHOP_MODULE_sYellowCubeCertFile'      => 'Geben Sie den Dateinamen des SPS-Zertifikats an, der sich unter Ihrem Ordner Shop-root /cert befindet.',

    'SHOP_MODULE_sYellowCubeCertPass'           => 'Zertifikat Pass-Phrase',
    'SHOP_MODULE_blYellowCubeCertForAll'        => 'Zertifikat für alle Modi verwenden',

    'SHOP_MODULE_sYellowCubePType'              => 'Partnerart',
    'HELP_SHOP_MODULE_sYellowCubePType'         => 'WE = Warenempfänger (Im Standard YellowCube wird nur eine Partnerrolle neben dem Aufgeber unterstützt.)',

    'SHOP_MODULE_sYellowCubePlant'              => 'Werks-ID',
    'HELP_SHOP_MODULE_sYellowCubePlant'         => 'Das Werk ist der Ort, an dem das Produkt im Auto-Lager gelagert wird. Lager-ID als Werks-ID gemäß dem Profil Distanzhandel, z.B. Y001, Y004, Y010, etc.',

    'SHOP_MODULE_sYellowCubeTransMaxTime'       => 'Maximale Wartezeit (in Sekunden)',

    'SHOP_MODULE_sYellowCubeShipping'           => 'Yellowcube Versand',
    'HELP_SHOP_MODULE_sYellowCubeShipping'      => 'Basis-Produkte für YellowCube Versand: "ECO", "PRI", "ECO LKW", "PICKUP" (Selbstabholung), "LKW EXPRESS", "SKB", "SP SEM", etc.',

    'SHOP_MODULE_sYellowCubeQuantityISO'        => 'Standardmenge (ISO)',
    'SHOP_MODULE_sYellowCubeQuantityISO_PCE'    => 'PCE',
    'SHOP_MODULE_sYellowCubeQuantityISO_KGM'    => 'KGM',
    'SHOP_MODULE_sYellowCubeQuantityISO_GRM'    => 'GRM',
    'HELP_SHOP_MODULE_sYellowCubeQuantityISO'   => 'Verkaufs-Mengeneinheit in ISO-Code. Werte gemäss gültiger, mit Kunde vereinbarter Verkaufsmengenheinheiten.',

    'SHOP_MODULE_sYellowCubeYCLot'              => 'Chargennummer',
    'SHOP_MODULE_sYellowCubeLot'=> 'Lieferanten-Chargennummer',
    'SHOP_MODULE_sYellowCubePMessage'           => 'Kommissioniertexte (Default)',

    'SHOP_MODULE_sYellowCubeRReason'            => 'Rückgabegrund für diese Bestellung',
    'HELP_SHOP_MODULE_sYellowCubeRReason'       => 'Retouren-Grund gemäss YC-Retouren-Code-Liste z.B. "R06" - Anderer Artikel geliefert als bestellt.',

    'SHOP_MODULE_sYellowCubeCronHash'            => 'Cron-Job Hash-Wert',
    'HELP_SHOP_MODULE_sYellowCubeCronHash'       => 'Sicherheitsmaßnahme, um sicherzustellen, dass das Skript nicht anonym ohne Hash-Tag aufgerufen wird.',

    'SHOP_MODULE_sYellowCubeNotifyEmail'         => 'E-Mail-Adresse des Entwicklers',
    'HELP_SHOP_MODULE_sYellowCubeNotifyEmail'    => 'Dies sollte nur während des Entwicklungs- oder Debugging-Prozesses verwendet werden. SPS XML Request and Response wird an diese E-Mail-Adresse gesendet.',

    'SHOP_MODULE_sYellowCubeNetWeightISO'           => 'Default Nettogewicht (ISO)',
    'SHOP_MODULE_sYellowCubeNetWeightISO_GRM'       =>  'Gramm [gr]',
    'SHOP_MODULE_sYellowCubeNetWeightISO_KGM'       =>  'Kilogramm [kg]',

    'SHOP_MODULE_sYellowCubeGrossWeightISO'         => 'Default Bruttogewicht (ISO)',
    'SHOP_MODULE_sYellowCubeGrossWeightISO_GRM'     =>  'Gramm [gr]',
    'SHOP_MODULE_sYellowCubeGrossWeightISO_KGM'     =>  'Kilogramm [kg]',

    'SHOP_MODULE_sYellowCubeBatchMngtReq'           => 'Chargenpflicht',
    'SHOP_MODULE_sYellowCubePeriodExpDateType'      => 'Zeitraum Ablaufdatum Typ',
    'SHOP_MODULE_sYellowCubePeriodExpDateType_0'    => '--',
    'SHOP_MODULE_sYellowCubePeriodExpDateType_1'    => 'Woche',
    'SHOP_MODULE_sYellowCubePeriodExpDateType_2'    => 'Monat',
    'SHOP_MODULE_sYellowCubePeriodExpDateType_3'    => 'Jahr',

    'SHOP_MODULE_sYellowCubeSerialNoFlag'       => 'Seriennummer-Erfassung',

    'SHOP_MODULE_sYellowCubeMinRemLife'         => 'Restlaufzeit',
    'SHOP_MODULE_sYellowCubeEANType'            => 'EANType',
    'SHOP_MODULE_sYellowCubeEANType_HE'         =>  'Hersteller-EAN',
    'SHOP_MODULE_sYellowCubeEANType_HK'         =>  'Hersteller-Kurz-EAN',
    'SHOP_MODULE_sYellowCubeEANType_I6'         =>  'ITF-Code - 16stellig',
    'SHOP_MODULE_sYellowCubeEANType_IC'         =>  'ITF-Code',
    'SHOP_MODULE_sYellowCubeEANType_IE'         =>  'Instore-EAN (int. Vergabe mögl.)',
    'SHOP_MODULE_sYellowCubeEANType_IK'         =>  'Instore-Kurz-EAN (int. Vergabe mögl.)',
    'SHOP_MODULE_sYellowCubeEANType_UC'         =>  'UPC-Code',
    'SHOP_MODULE_sYellowCubeEANType_VC'         =>  'Velocity-Code (int. Vergabe mögl.)',

    'SHOP_MODULE_sYellowCubeAlternateUnitISO'   => 'Alterantive Basismengen-Einheit',
    'SHOP_MODULE_sYellowCubeAltNumeratorUOM'    => 'Zähler - Alternative Basismenge',
    'SHOP_MODULE_sYellowCubeAltDenominatorUOM'  => 'Nenner - Alternative Basismenge',

    'SHOP_MODULE_sYellowCubeLengthISO'          => 'Länge',
    'SHOP_MODULE_sYellowCubeLengthISO_CMT'      =>  'Zentimeter',
    'SHOP_MODULE_sYellowCubeLengthISO_MTR'      =>  'Meter',
    'SHOP_MODULE_sYellowCubeLengthISO_MMT'      =>  'Millimeter',

    'SHOP_MODULE_sYellowCubeWidthISO'           => 'Breite',
    'SHOP_MODULE_sYellowCubeWidthISO_CMT'      =>  'Zentimeter',
    'SHOP_MODULE_sYellowCubeWidthISO_MTR'      =>  'Meter',
    'SHOP_MODULE_sYellowCubeWidthISO_MMT'      =>  'Millimeter',

    'SHOP_MODULE_sYellowCubeHeightISO'          => 'Höhe',
    'SHOP_MODULE_sYellowCubeHeightISO_CMT'      =>  'Zentimeter',
    'SHOP_MODULE_sYellowCubeHeightISO_MTR'      =>  'Meter',
    'SHOP_MODULE_sYellowCubeHeightISO_MMT'      =>  'Millimeter',

    'SHOP_MODULE_sYellowCubeVolumeISO'          => 'Volumen',
    'SHOP_MODULE_sYellowCubeVolumeISO_CMQ'      =>  'Kubik-Centimeter [cm3]',
    'SHOP_MODULE_sYellowCubeVolumeISO_MTQ'      =>  'Kubik-Meter [m3]',
    'SHOP_MODULE_sYellowCubeVolumeISO_MMQ'      =>  'Kubik-Millimeter [mm3]',

    'SHOP_MODULE_sYellowCubeDocType'            =>  'Typ des Lieferbeleges',
    'SHOP_MODULE_sYellowCubeDocType_LS'	        =>  'Lieferschein',
    'SHOP_MODULE_sYellowCubeDocType_BL'     	=>	'Bulletin / Lieferschein',
    'SHOP_MODULE_sYellowCubeDocType_BC'	        =>	'Lieferschein',
    'SHOP_MODULE_sYellowCubeDocType_DN'	        =>	'Lieferschein',
    'SHOP_MODULE_sYellowCubeDocType_IV'	        =>	'Rechnung',
    'SHOP_MODULE_sYellowCubeDocType_RG'	        =>	'Rechnung',
    'SHOP_MODULE_sYellowCubeDocType_FA'	        =>	'Faktor/Fatura',
    'SHOP_MODULE_sYellowCubeDocType_ZS'	        =>	'Zahlschein',
    'SHOP_MODULE_sYellowCubeDocType_BP'	        =>	'Zahlungsformular',
    'SHOP_MODULE_sYellowCubeDocType_BV'	        =>	'Einzahlungsschein',
    'SHOP_MODULE_sYellowCubeDocType_PF'	        =>	'Zahlungsformular',

    'SHOP_MODULE_sYellowCubeDocMimeType'        =>  'Dokument-MIME-Typ',
    'SHOP_MODULE_sYellowCubeDocMimeType_pdf'	=>  'pdf',
    'SHOP_MODULE_sYellowCubeDocMimeType_pcl'	=>	'pcl',
    'HELP_SHOP_MODULE_sYellowCubeDocMimeType'   =>  'MIME-Typ als Extention des Lieferbeleges. [pdf|pcl] Inhalt des Streams muss mit der Extention übereinstimmen.',

    'SHOP_MODULE_blYellowCubeIgnoreLotInfo'      => 'Ignorieren von YCLot- und LOT-Feldern in der Artikelinformation?',
    'SHOP_MODULE_blYellowCubeDocDelete'          => 'Bestellbeleg nach dem Hochladen löschen?',
    'SHOP_MODULE_blYellowCubeUsePhoneAndFax'     => 'Geben Sie die Telefon-/Faxdaten in der Bestellung an.?',
    'SHOP_MODULE_blYellowCubeOrderManualSend'     => 'Manuelles Senden der Bestellung an Yellowcube?',
    'HELP_SHOP_MODULE_sYellowCubeOrderManualSend'=> 'Wenn aktiviert, kann die Bestellung an den YellowCube gesendet werden. Andernfalls wird die Bestellung sofort nach Abschluss der Bestellung versendet.',

    'SHOP_MODULE_sYellowCubeOrderDocumentsFlag'       => 'Entscheid: Ausliefer-Dokumente werden mitgeliefert.',
    'SHOP_MODULE_sYellowCubeOrderDocumentsFlag_1'     => 'Ja',
    'SHOP_MODULE_sYellowCubeOrderDocumentsFlag_0'     => 'Nein',
    'HELP_SHOP_MODULE_sYellowCubeOrderDocumentsFlag'  => 'Ja = Dokument liegt vor und muss in Sendung mitgeliefert werden.<br>Nein = es liegen keine Lieferdokumente vor.',

    // main/overview section
    'ASIGN_OVERVIEW_ADDITIONAL' => 'Zusätzliche Informationen...',
    'ASIGN_INVENTORY_UPDATE'    => 'Bestandsinformationen aktualisieren...',
    'ASIGN_INVENTORY_UPDATEDLAST'               => 'Letztes Update erhalten am',
    'ASIGN_COLUMN_YCARTICLENO'  => 'YCArticle Nr.',
    'ASIGN_COLUMN_SHOPID'       => 'Shop Name.',
    'ASIGN_COLUMN_ARTICLENO'    => 'Article Nr.',
    'ASIGN_COLUMN_ARTICLEDESC'  => 'Beschreibung',
    'ASIGN_COLUMN_PLANT'        => 'Plant',
    'ASIGN_COLUMN_STORAGELOC'   => 'Lagerort',
    'ASIGN_COLUMN_STOCKTYPE'    => 'Bestandsart',
    'ASIGN_COLUMN_QUANTITYISO'  => 'Qty. ISO',
    'ASIGN_COLUMN_QUANTITYUOM'  => 'Qty. UOM',
    'ASIGN_COLUMN_TIMESTAMP'    => 'Zeitstempel',
    'ASIGN_LABEL_INSERTARTICLE' => 'An Yellowcube senden',
    'ASIGN_LABEL_INSERTARTICLE_STATUS'          => 'Yellowcube Artikel Status',
    'ASIGN_MESSAGE_LAST_UPDATE_ON'              => '<strong>Erfolg:</strong> Aktuelles Yellowcube Inventar erhalten am.',
    'ASIGN_MESSAGE_YCITEM_INSERTED'             => '<strong>Erfolg:</strong> In Yellowcube-Stammdaten eingefügtes Element.',
    'ASIGN_MESSAGE_YCITEM_UPDATED'              => '<strong>Erfolg:</strong> Neuer Status für ausgewählten Artikel aktualisiert.',
    'ASIGN_MESSAGE_YCITEM_INSERTED_FAILED'      => '<strong>Warnung:</strong> Artikel konnte nicht in die Yellowcube-Stammdaten eingefügt werden. Überprüfen Sie die Fehlerprotokolle für weitere Informationen....',
    'ASIGN_MESSAGE_YCITEM_UPDATED_FAILED'       => '<strong>Warnung:</strong> Der Status für den ausgewählten Artikel konnte nicht aktualisiert werden. Überprüfen Sie die Fehlerprotokolle für weitere Informationen....',
    'ASIGN_LABEL_CREATEORDER'                   => 'Yellowcube Kundenauftrag anlegen',
    'ASIGN_LABEL_CREATEORDER_STATUS'            => 'Yellowcube Kundenauftragsstatus',
    'ASIGN_LABEL_CREATEORDER_REPLY'             => 'Yellowcube Kundenbestellung Antwort',
    'ASIGN_LABEL_CREATEORDER_RESPONSE'          => 'Antwort von Yellowcube',
    'ASIGN_LABEL_RETURN_RESPONSE'               => 'Antwort von Yellowcube zurückgeben',
    'ASIGN_MESSAGE_YCORDER_CREATED'             => '<strong>Erfolg:</strong> Yellowcube Kundenauftrag erfolgreich angelegt.',
    'ASIGN_MESSAGE_YCORDER_UPDATED'             => '<strong>Erfolg:</strong> Yellowcube Kundenauftrag erfolgreich in der Datenbank aktualisiert.',
    'ASIGN_MESSAGE_YCORDER_CREATED_FAILED'      => '<strong>Warnung:</strong> Yellowcube-Order konnte nicht erstellt werden. Überprüfen Sie die Fehlerprotokolle für weitere Informationen....',
    'ASIGN_MESSAGE_YCORDER_UPDATED_FAILED'      => '<strong>Warnung:</strong> Die Antwort konnte nicht aktualisiert werden. Möglicherweise ein Grund: Falsche Auftragsreferenznummer oder Auftrag noch nicht bearbeitet.',
    'ASIGN_MESSAGE_WRONG_FILE_FORMAT'           => '<strong>Warnung:</strong> Dateiformat hochgeladen im nicht PDF-Format.',
    'ASIGN_YCSPDETAILS_SAVED_OK'=> '<strong>Erfolg:</strong> Zusätzliche Artikeldetails, die für diesen Artikel gespeichert sind.',
    'ASIGN_MESSAGE_YCRETURN_CREATED'            => '<strong>Erfolg:</strong> Rücksendeauftrag an Yellowcube gesendet.',
    'ASIGN_OVERVIEW_INVENTORY_MESSAGE'          => 'T&auml;glich wird das Inventar aus dem Warenwirtschaftssystem von YellowCube extrahiert und steht in der aktuellsten Version zu Abfrage online zur Verfügung. Nur das aktuelle Inventar des Tages ist abrufbar.',
    'ASIGN_OVERVIEW_INVENTORY_MESSAGE_1'        => 'Um die neuesten Updates von Yellowcube Inventory zu erhalten, klicken Sie auf die Schaltfläche unten....',
    'ASIGN_MESSAGE_ZIPCODE_MISMATCH'            => 'Das Postleitzahlenformat stimmt nicht mit dem Ihres Landes überein..',
    'ASIGN_MESSAGE_ZIPCODE_INVALID'             => 'Die Postleitzahl ist nicht gültig. Enthält ungültige Zeichen.',
    'ASIGN_MESSAGE_MANUAL_MODE_OFF'             => '<strong>Hinweis:</strong> Der Handbetrieb ist für den Bestellversand deaktiviert. Dieser Modus kann unter Moduleinstellungen > Bestellinformationen > Bestellung manuell an Yellowcube senden aktiviert werden?',
    'ASIGN_LABEL_BASEOUM'       => 'Basismengeneinheit',
    'ASIGN_LABEL_OPERATINGMODE' => 'Betriebsart',
    'ASIGN_DOWNLOADABLE_PRODUCT_DETECTED' => 'Das ausgewählte Produkt wird als herunterladbares Produkt unter der Registerkarte "Downloads" eingestellt. Dieses Produkt wird nicht an YellowCube gesendet.',

    // buttons/options
    'ASIGN_YCARTICLES_OPTION_U' => 'Diesen Artikel aktualisieren',
    'ASIGN_YCARTICLES_OPTION_I' => 'Diesen Artikel einfügen',
    'ASIGN_YCARTICLES_OPTION_D' => 'Diesen Artikel deaktivieren',
    'ASIGN_YCARTICLES_BUTTON_INSERT'            => 'Yellowcube-Artikel versenden',
    'ASIGN_YCARTICLES_BUTTON_CREATE'            => 'Yellowcube Bestellung senden',
    'ASIGN_YCARTICLES_BUTTON_RETURN'            => 'Rücksendeanfrage senden',
    'ASIGN_YCARTICLES_BUTTON_STATUS'            => 'Aktuellen Status abrufen',
    'ASIGN_YCARTICLES_BUTTON_REFRESH'           => 'Jetzt aktualisieren',
    'ASIGN_YCARTICLES_BUTTON_SAVE'              => 'Informationen speichern',
    'ASIGN_YCORDERS_ORDER_PDF'  => 'PDF Bestellübersicht Dokument',
    'ASIGN_YCORDERS_BUTTON_REPLY'               => 'Bestellantwort erhalten',
    'ASIGN_YCORDERS_BUTTON_STATUS'              => 'Bestellstatus abfragen',

    // OPTIONS
    'ASIGN_OPTION_PCE'          =>  'Stück (Piece)',
    'ASIGN_OPTION_PK'           =>  'Paket (Parcel) evtl. Multipack',
    'ASIGN_OPTION_BG'           =>  'Bag (Beutel/Tüte)',
    'ASIGN_OPTION_CA'           =>  'Kanister/Dose',
    'ASIGN_OPTION_CT'           =>  'KAR-Karton 2. Stufe (EH2)',
    'ASIGN_OPTION_PF'           =>  'AL-Palette 3. Stufe (EH3)',
    'ASIGN_OPTION_CMT'          =>  'Zentimeter',
    'ASIGN_OPTION_MTR'          =>  'Meter',
    'ASIGN_OPTION_MMT'          =>  'Millimeter',
    'ASIGN_OPTION_CMQ'          =>  'Kubik-Centimeter [cm3]',
    'ASIGN_OPTION_MTQ'          =>  'Kubik-Meter [m3]',
    'ASIGN_OPTION_MMQ'          =>  'Kubik-Millimeter [mm3]',
    'ASIGN_OPTION_GRM'          =>  'Gramm [gr]',
    'ASIGN_OPTION_KGM'          =>  'Kilogramm [kg]',
    'ASIGN_OPTION_E5'	        =>  'Frische-EAN, var. Gew., ind. ArtNr 5st.',
    'ASIGN_OPTION_EA'	        =>	'Frische-EAN, var. Pr., ind. ArtNr 4stlg.',
    'ASIGN_OPTION_HE'	        =>	'Hersteller-EAN',
    'ASIGN_OPTION_HK'	        =>	'Hersteller-Kurz-EAN',
    'ASIGN_OPTION_I6'	        =>	'ITF-Code - 16stellig',
    'ASIGN_OPTION_IC'	        =>	'ITF-Code',
    'ASIGN_OPTION_IE'	        =>	'Instore-EAN (int. Vergabe mögl.)',
    'ASIGN_OPTION_IK'	        =>	'Instore-Kurz-EAN (int. Vergabe mögl.)',
    'ASIGN_OPTION_SA'	        =>	'Frische-EAN, var. Preis, SAN',
    'ASIGN_OPTION_SG'	        =>	'Frische-EAN, var. Preis, SAN + Gebindez.',
    'ASIGN_OPTION_UC'	        =>	'UPC-Code',
    'ASIGN_OPTION_VC'	        =>	'Velocity-Code (int. Vergabe mögl.)',
);

/*
[{ oxmultilang ident="GENERAL_YOUWANTTODELETE" }]
*/
