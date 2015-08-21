<?php

/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/





if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


	
$mod_strings = array (
  'PDF_PROTECTION_INFO' => 'Sätt dokumentskydd<br />- kopiera: kopiera text och bilder till klippbordet<br />- skriv ut: skriva ut dokumentet<br />- ändra: ändra dokumentet (förutom kommentarer och formulär)<br />- kommentarer-formulär: ändra kommenterar och formulär.<br />Kommentar: skyddet mot förändringar är för människor som använder den fulla versionen av Acrobat.',
  'PDF_USER_PASSWORD_INFO' => 'Om du inte sätter ett lösenord så kan dokumentet öppnas som vanligt.<br />Om du sätter ett användarlösenord, så kommer PDF visaren att fråga efter det innan dokumentet visas.<br />Huvudlösenordet, om annorlunda än användarens kan användas för att få full åtkomst.',
  'PDF_OWNER_PASSWORD_INFO' => 'Om du inte sätter ett lösenord så kan dokumentet öppnas som vanligt.<br />Om du sätter ett användarlösenord, så kommer PDF visaren att fråga efter det innan dokumentet visas.<br />Huvudlösenordet, om annorlunda än användarens kan användas för att få full åtkomst.',
  'K_CELL_HEIGHT_RATIO_INFO' => 'Om höjden på ett block är mindre än (typsnittshöjden * blockhöjds faktorn) så används (typsnittshöjden * blockhöjdsfaktorn) höjd på blocket.<br />(Typsnittshöjd * blockhöjds faktor) används också som höjden på ett block utan någon höjd angiven.',
  'K_TITLE_MAGNIFICATION_INFO' => 'Titel förstoring huvud typsnittsstorlek',
  'K_SMALL_RATIO_INFO' => 'Minskningsfaktor för små typsnitt',
  'HEAD_MAGNIFICATION_INFO' => 'Förstoringsfaktor för titlar',
  'PDF_GD_WARNING' => 'Du har inte GD biblioteket installerat för PHP. Utan GD biblioteket installerat så kan endast JPEG loggor visas i PDF dokument.',
  'ERR_EZPDF_DISABLE' => 'Varning: EZPDF klassen är inaktiverad i konfigurationstabellen men är satt som PDF klass. Var god spara detta formulär för att sätta TCPDF som PDF klassen och återgå till stabil miljö.',
  'LBL_PDF_PATCH_INFO' => 'Skräddarsydda modifieringar på kodning. Skriv en PHP lista.<br />Exempel: ISO-8859-1 innehåller inte euro symbol. För att lägga till den på position 164, skriv "array(164=>\\\'Euro\\\')".',
  'LBL_PDF_ENCODING_TABLE_INFO' => 'Namn på kodningstabell.<br />Denna möjlighet är ignorerade för TrueType Unicode, OpenType Unicode och symbolic typsnitt.<br />Kodningsdefinitionen är mellan 0-255) och bokstäver i typsnittet.<br />De första 128 är dedikerade och matchar ASCII.',
  'PDF_INSTRUCTIONS_ADD_FONT' => 'Typsnitt som stöds av SugarPDF :<br /><br />    * TrueTypeUnicode (UTF-8 Unicode)<br />    * OpenTypeUnicode<br />    * TrueType<br />    * OpenType<br />    * Type1<br />    * CID-0<br /><br />Om du väljer att inte sammanfoga ett typsnitt i din PDF kommer den genererade filen att bli mindre men ett ersättnings typsnitt kommer att visas när PDF filen visas.<br /><br />Att lägga till ett PDF typsnitt till SugarCRM kräver att du följer steg 1 och 2 i TCPDF typsnitts dokumentation tillgänglig under "DOCS" sektionen på <a href="http://www.tcpdf.org/">TCPDF </a>website. <br /><br />pfm2afm och ttf2ufm är tillgängliga typsnitt som finns i TCPDF och du kan ladda ned dem från "DOWNLOAD" sektionen på <a href="http://www.tcpdf.org/">TCPDF </a>website.',
  'LBL_WIZARD_WELCOME' => 'Klicka på Nästa för att konfigurera några grundinställningar i Sugar, för att göra det senare klicka på <b>skippa</b>.',
  'LBL_WIZARD_FINISH' => 'Klicka <b>fortsätt</b> för att konfigurera användarinställningarna.<br /><br />För att konfigurera ytterligare systeminställningar klicka <a href="index.php?module=Administration&action=index">här</a>.',
  'LBL_WIZARD_LOCALE_DESC' => 'Specificera hur du vill att data i Sugar ska visas baserat på din geografiska belägenhet. Dessa inställningar kommer att vara default inställningar, varje användare kan sätta sina egna.',
  'LBL_WIZARD_SMTP_DESC' => 'Ange det epostkonto som ska användas för att skicka epost såsom tilldelning av notiser och nya användarlösenord. Användare kan ta emot epost från Sugar som skickat från specificerat epostkonto.',
  'DEFAULT_DECIMAL_SEP' => 'Decimal symbol',
  'LBL_PROXY_PORT' => 'Port',
  'LBL_LDAP_SERVER_HOSTNAME' => 'Server:',
  'LBL_REG_EXP' => 'Reg Exp:',
  'LBL_LOGGER_FILE_EXTENSION' => 'Extension',
  'PDF_PDF_VERSION' => 'PDF Version',
  'LBL_FONT_TYPE_CID0' => 'CID-0',
  'LBL_FONT_LIST_ENC' => 'Encoding',
  'LBL_FONT_LIST_CIDINFO' => 'CID Information',
  'ADVANCED' => 'Avancerat',
  'DEFAULT_CURRENCY_ISO4217' => 'ISO 4217 valuta kod',
  'DEFAULT_CURRENCY_NAME' => 'Valuta namn',
  'DEFAULT_CURRENCY_SYMBOL' => 'Valuta symbol',
  'DEFAULT_CURRENCY' => 'Standardvaluta',
  'DEFAULT_DATE_FORMAT' => 'Standard datumformat',
  'DEFAULT_LANGUAGE' => 'Standardspråk',
  'DEFAULT_NUMBER_GROUPING_SEP' => '1000 separator',
  'DEFAULT_SYSTEM_SETTINGS' => 'Användargränssnitt',
  'DEFAULT_THEME' => 'Standard tema',
  'DEFAULT_TIME_FORMAT' => 'Standard tidsformat',
  'DISPLAY_RESPONSE_TIME' => 'Visa serverns svarstid',
  'IMAGES' => 'Loggor',
  'LBL_ADMIN_WIZARD' => 'Administratörs guide',
  'LBL_ALLOW_USER_TABS' => 'Tillåt användare att konfigurera flikar',
  'LBL_CONFIGURE_SETTINGS_TITLE' => 'Systeminställningar',
  'LBL_ENABLE_MAILMERGE' => 'Möjliggör epost merge',
  'LBL_LOGVIEW' => 'Konfigurera logginställningar',
  'LBL_MAIL_SMTPAUTH_REQ' => 'Använd SMTP autentifiering?',
  'LBL_MAIL_SMTPPASS' => 'SMTP lösenord:',
  'LBL_MAIL_SMTPPORT' => 'SMTP port:',
  'LBL_MAIL_SMTPSERVER' => 'SMTP server:',
  'LBL_MAIL_SMTPUSER' => 'SMTP användarnamn:',
  'LBL_MAIL_SMTPTYPE' => 'SMTP Server typ:',
  'LBL_MAIL_SMTP_SETTINGS' => 'SMTP Server specifikation',
  'LBL_CHOOSE_EMAIL_PROVIDER' => 'Välj din Epost leverantör',
  'LBL_YAHOOMAIL_SMTPPASS' => 'Yahoo! Mail Lösenord',
  'LBL_YAHOOMAIL_SMTPUSER' => 'Yahoo! Mail ID',
  'LBL_GMAIL_SMTPPASS' => 'Gmail Lösenord',
  'LBL_GMAIL_SMTPUSER' => 'Gmail Epost Adress',
  'LBL_EXCHANGE_SMTPPASS' => 'Exchange Lösenord',
  'LBL_EXCHANGE_SMTPUSER' => 'Exchange Användarnamn',
  'LBL_EXCHANGE_SMTPPORT' => 'Exchange Server port',
  'LBL_EXCHANGE_SMTPSERVER' => 'Exchange Server',
  'LBL_ALLOW_DEFAULT_SELECTION' => 'Tillåt användare att använda detta konto för utgående epost:',
  'LBL_ALLOW_DEFAULT_SELECTION_HELP' => 'När denna är vald kommer alla användare att kunna skicka epost från samma utgående epost konto som används för att skicka system notiser och varningar. Om den inte är vald kan användare fortfarande använda den utgående epost servern efter att ha angivit sin egna konto information.',
  'LBL_MAILMERGE_DESC' => 'Flaggan ska endast sättas om du använder Sugars plug-in för Microsoft® Word®.',
  'LBL_MAILMERGE' => 'Epost merge',
  'LBL_MODULE_FAVICON' => 'Visa modul ikonen som favicon',
  'LBL_MODULE_FAVICON_HELP' => 'Om du är i en modul med en ikon, använd modulens ikon som favicon, istället för temats favicon i browser fliken.',
  'LBL_MODULE_NAME' => 'Systeminställningar',
  'LBL_MODULE_ID' => 'Konfigurator',
  'LBL_MODULE_TITLE' => 'Användargränssnitt',
  'LBL_NOTIFY_FROMADDRESS' => '"Avsändar" adress:',
  'LBL_NOTIFY_SUBJECT' => 'E-post ämne:',
  'LBL_PORTAL_ON_DESC' => 'Tillåter externa kunder komma åt ärenden, anteckningar samt annan data via ett självbetjäningsportal system.',
  'LBL_PORTAL_ON' => 'Aktivera självbetjäningsportal integration?',
  'LBL_PORTAL_TITLE' => 'Självbetjäningsportal',
  'LBL_PROXY_AUTH' => 'Autentifiering?',
  'LBL_PROXY_HOST' => 'Proxy host',
  'LBL_PROXY_ON_DESC' => 'Konfigurera proxyserver adress och autentifieringsinställningar',
  'LBL_PROXY_ON' => 'Använd proxyserver?',
  'LBL_PROXY_PASSWORD' => 'Lösenord',
  'LBL_PROXY_TITLE' => 'Proxy inställningar',
  'LBL_PROXY_USERNAME' => 'Användarnamn',
  'LBL_RESTORE_BUTTON_LABEL' => 'Återställ',
  'LBL_SYSTEM_SETTINGS' => 'Systeminställningar',
  'LBL_SKYPEOUT_ON_DESC' => 'Gör det möjligt för användare att klicka på telefonnummer för att ringa med hjälp av SkypeOut®. Telefonnumrena måste vara korrekt formaterade för att kunna använda den här funktionen. Det måste vara "+"  "Landskod" "Telefonnumret", såsom +1 (555) 555-1234. För mer information se Skype FAQ på <a href="http://www.skype.com/help/faq/skypeout.html#calling" target="skype">skype® faq</a>',
  'LBL_SKYPEOUT_ON' => 'Aktivera SkypeOut® integration?',
  'LBL_SKYPEOUT_TITLE' => 'SkypeOut®',
  'LBL_USE_REAL_NAMES' => 'Visa hela namnet (ej inloggning)',
  'LBL_USE_REAL_NAMES_DESC' => 'Visa användarens hela namn istället för användarnamnet i uppdragsfälten.',
  'LIST_ENTRIES_PER_LISTVIEW' => 'Antal listade poster per sida',
  'LIST_ENTRIES_PER_SUBPANEL' => 'Antal subpaneler per sida',
  'LBL_WIRELESS_LIST_ENTRIES' => 'Antal listade poster per sida',
  'LBL_WIRELESS_SUBPANEL_LIST_ENTRIES' => 'Antal subpaneler per sida',
  'LOG_MEMORY_USAGE' => 'Logga minnesanvändning',
  'LOG_SLOW_QUERIES' => 'Logga långsamma SQL frågor',
  'LOCK_HOMEPAGE_HELP' => 'Detta inställning finns för att förhindra<br />1) tillägg av nya hemside sidor och dashlets i Hemside modulen,<br />2) skräddarsy dashlets placeringen på hemsidor genom drag & släpp',
  'CURRENT_LOGO' => 'Aktuell logotyp som används',
  'CURRENT_LOGO_HELP' => 'Denna logga visas längst upp i vänstra hörnet på Sugar applikation.',
  'NEW_LOGO' => 'Ladda upp ny logo (212x40)',
  'NEW_LOGO_HELP' => 'Bildfilformatet skall vara .png eller .jpg.<br />Rekomenderad storlek är 212x40 px.',
  'NEW_QUOTE_LOGO' => 'Ladda upp ny offert logo (867x74)',
  'NEW_QUOTE_LOGO_HELP' => 'Filformatet skall vara .jpg.<br />Rekomenderad storlek är 867x74 px.',
  'QUOTES_CURRENT_LOGO' => 'Logotyp att använda i offerter',
  'SLOW_QUERY_TIME_MSEC' => 'Långsamma SQL frågor över tröskelvärde',
  'STACK_TRACE_ERRORS' => 'Visa lista på felmeddelanden',
  'UPLOAD_MAX_SIZE' => 'Maximal uppladdningsstorlek',
  'VERIFY_CLIENT_IP' => 'Validera användarens IP-adress',
  'LOCK_HOMEPAGE' => 'Hindra användaren från att skapa anpassade "Hem" sidor',
  'LOCK_SUBPANELS' => 'Hindra användarna från att skapa anpassade subpaneler',
  'MAX_DASHLETS' => 'Max antal dashlets på hemsidan',
  'SYSTEM_NAME' => 'Systemnamn',
  'SYSTEM_NAME_WIZARD' => 'Namn:',
  'SYSTEM_NAME_HELP' => 'Detta namn visas som titel i din browser.',
  'LBL_OC_STATUS' => 'Standardstatus för Offline klient',
  'DEFAULT_OC_STATUS' => 'Aktivera offline klient automatiskt',
  'LBL_OC_STATUS_DESC' => 'Klicka här om du vill att alla användare ska ha tillgång till offline klienten. I annat fall kan du konfigurera detta på användarnivå.',
  'SESSION_TIMEOUT' => 'Timeout för portalsession',
  'SESSION_TIMEOUT_UNITS' => 'sekunder',
  'LBL_LDAP_TITLE' => 'Support för LDAP autentifiering',
  'LBL_LDAP_ENABLE' => 'Aktivera LDAP',
  'LBL_LDAP_SERVER_PORT' => 'Portnummer:',
  'LBL_LDAP_ADMIN_USER' => 'Autentifierad användare:',
  'LBL_LDAP_ADMIN_USER_DESC' => 'Används för att söka användaren i Sugar. [Måste eventuellt vara fullt kvalificerad]<br>Den kommer att kopplas anonymt om ej angiven.',
  'LBL_LDAP_ADMIN_PASSWORD' => 'Autentifierat lösenord:',
  'LBL_LDAP_AUTHENTICATION' => 'Verifiering',
  'LBL_LDAP_AUTHENTICATION_DESC' => 'Bind till LDAP servern genom att använda specifika användar inställningar.',
  'LBL_LDAP_AUTO_CREATE_USERS' => 'Autoskapa användare:',
  'LBL_LDAP_USER_DN' => 'Användar DN:',
  'LBL_LDAP_GROUP_DN' => 'Grupp DN:',
  'LBL_LDAP_GROUP_DN_DESC' => 'Exempel: ou=groups,dc=example,dc=com',
  'LBL_LDAP_USER_FILTER' => 'Användarfilter:',
  'LBL_LDAP_GROUP_MEMBERSHIP' => 'Gruppmedlemskap:',
  'LBL_LDAP_GROUP_MEMBERSHIP_DESC' => 'Användaren måste vara en medlem i specifik grupp',
  'LBL_LDAP_GROUP_USER_ATTR' => 'Användar attribut:',
  'LBL_LDAP_GROUP_USER_ATTR_DESC' => 'Den unika identifieringen av personen som ska användas för kontroll av medlemskap i gruppen, exempelvis: <i>uid</i>',
  'LBL_LDAP_GROUP_ATTR_DESC' => 'Det attribut på gruppen som skall användas som filter gentemot användar attributen, Exempel: <i>memberUid</i>',
  'LBL_LDAP_GROUP_ATTR' => 'Grupp attribut:',
  'LBL_LDAP_USER_FILTER_DESC' => 'Eventuella ytterligare filter parametrar vid behörighetskontroll av användare t.ex is_sugar_user=1 eller (is_sugar_user=1)(is_sales=1)',
  'LBL_LDAP_LOGIN_ATTRIBUTE' => 'Login attribut:',
  'LBL_LDAP_BIND_ATTRIBUTE' => 'Bind attribut:',
  'LBL_LDAP_BIND_ATTRIBUTE_DESC' => 'För att binda LDAP användaren<br />Exempel:[<b>AD:</b> userPrincipalName] [<b>openLDAP:</b> userPrincipalName] [<b>Mac OS X:</b> uid]',
  'LBL_LDAP_LOGIN_ATTRIBUTE_DESC' => 'För sökning efter LDAP användare Exempel:[<b>AD:</b> userPrincipalName] [<b>openLDAP:</b> dn] [<b>Mac OS X:</b> dn]',
  'LBL_LDAP_SERVER_HOSTNAME_DESC' => 'Exempel: ldap.example.com',
  'LBL_LDAP_SERVER_PORT_DESC' => 'Exempel: 389',
  'LBL_LDAP_GROUP_NAME' => 'Gruppnamn:',
  'LBL_LDAP_GROUP_NAME_DESC' => 'Exempel cn=sugarcrm',
  'LBL_LDAP_USER_DN_DESC' => 'Exempel: ou=people,dc=example,dc=com',
  'LBL_LDAP_AUTO_CREATE_USERS_DESC' => 'Om det inte finns någon autentifierad användare kommer en skapas i Sugar.',
  'LBL_LDAP_ENC_KEY' => 'Krypteringsnyckel:',
  'DEVELOPER_MODE' => 'Utvecklingsläge',
  'LBL_LDAP_ENC_KEY_DESC' => 'För SOAP autentifiering vid ldap användning.',
  'LDAP_ENC_KEY_NO_FUNC_DESC' => 'php_mcrypt ändelsen måste vara aktiverad i er php.ini fil.',
  'LBL_ALL' => 'Alla',
  'LBL_MARK_POINT' => 'Markera plats',
  'LBL_NEXT_' => 'Nästa>>',
  'LBL_REFRESH_FROM_MARK' => 'Uppdatera från markering',
  'LBL_SEARCH' => 'Sök:',
  'LBL_IGNORE_SELF' => 'Ignorera Själv:',
  'LBL_MARKING_WHERE_START_LOGGING' => 'Markerar var loggning skall starta från',
  'LBL_DISPLAYING_LOG' => 'Visa Logg',
  'LBL_YOUR_PROCESS_ID' => 'Ditt process id',
  'LBL_YOUR_IP_ADDRESS' => 'Din IP-address är',
  'LBL_IT_WILL_BE_IGNORED' => 'kommer att ignoreras',
  'LBL_LOG_NOT_CHANGED' => 'loggen har inte förändrats',
  'LBL_ALERT_JPG_IMAGE' => 'Filformatet på bilden måste vara .jpg. Ladda upp en ny fil med filändelsen .jpg.',
  'LBL_ALERT_TYPE_IMAGE' => 'Filformatet på bilden måste vara .jpg eller .png. Ladda upp en ny fil med filändelsen .jpg eller .png.',
  'LBL_ALERT_SIZE_RATIO' => 'Bildkvoten måste vara mellan 1:1 och 10:1. Bilden kommer att skalas om.',
  'LBL_ALERT_SIZE_RATIO_QUOTES' => 'Bildkvoten måste vara mellan 3:1 och 20:1. Ladda upp en ny fil med denna bildkvot.',
  'ERR_ALERT_FILE_UPLOAD' => 'Error under uppladdning av bild.',
  'LBL_LOGGER' => 'Logger-inställningar',
  'LBL_LOGGER_FILENAME' => 'Logfil namn',
  'LBL_LOGGER_MAX_LOG_SIZE' => 'Maximal logfilsstorlek',
  'LBL_LOGGER_DEFAULT_DATE_FORMAT' => 'Standard datumformat',
  'LBL_LOGGER_LOG_LEVEL' => 'Lognivå',
  'LBL_LOGGER_MAX_LOGS' => 'Maximal antal loggar (innan rullning)',
  'LBL_LOGGER_FILENAME_SUFFIX' => 'Läggtill efter filnamn',
  'LBL_VCAL_PERIOD' => 'vCal uppdaterings period:',
  'vCAL_HELP' => 'Använd den här inställningen för att bestämma antalet månader före aktuellt datum för lediga/ upptagna för samtal och möten som ska publiceras. För att stänga av lediga/upptagna publiceringar, skriv "0". Minimum är 1 månad och max 12 månader.',
  'LBL_PDFMODULE_NAME' => 'PDF Inställningar',

  'SUGARPDF_BASIC_SETTINGS' => 'Dokumentegenskaper',
  'SUGARPDF_ADVANCED_SETTINGS' => 'Avancerade inställningar',
  'SUGARPDF_LOGO_SETTINGS' => 'Bilder',

  'PDF_CREATOR' => 'PDF skapare',
  'PDF_CREATOR_INFO' => 'Definierar skaparen av ett dokument.<br />Detta är oftast namnet på applikationen som skapar PDF filen.',
  'PDF_AUTHOR' => 'Författare',
  'PDF_AUTHOR_INFO' => 'Författaren syns i dokumentets egenskaper',
  'PDF_HEADER_LOGO' => 'För offert PDF dokument',
  'PDF_HEADER_LOGO_INFO' => 'Denna bild syns i default sidhuvud på offert PDF dokument.',
  'PDF_NEW_HEADER_LOGO' => 'Välj ny bild för offerter',
  'PDF_NEW_HEADER_LOGO_INFO' => 'Filformatet kan vara antingen .jpg eller .png (Endast .jpg för EZPDF)',
  'PDF_HEADER_LOGO_WIDTH' => 'Offert bild bredd',
  'PDF_HEADER_LOGO_WIDTH_INFO' => 'Ändra skalan på den uppladdade bilden som syns i offerter PDF dokument. (Endast TCPDF)',
  'PDF_SMALL_HEADER_LOGO' => 'För rapport PDF Dokument',
  'PDF_SMALL_HEADER_LOGO_INFO' => 'Denna bild syns i default sidhuvud på rapport PDF dokument',
  'PDF_NEW_SMALL_HEADER_LOGO' => 'Välj ny bild för rapporter',
  'PDF_NEW_SMALL_HEADER_LOGO_INFO' => 'Filformatet kan vara antingen .jpg eller .png (Endast .jpg för EZPDF)<br />Rekommenderad storlek är 212x40px.',
  'PDF_SMALL_HEADER_LOGO_WIDTH' => 'Rapporter bild bredd',
  'PDF_SMALL_HEADER_LOGO_WIDTH_INFO' => 'Ändra skalan på den uppladdade bilden som syns i Rapport PDF dokument. (Endast TCPDF)',
  'PDF_HEADER_STRING' => 'Sidhuvud sträng',
  'PDF_HEADER_STRING_INFO' => 'Sidhuvud beskrivnings sträng',
  'PDF_HEADER_TITLE' => 'Sidhuvud titel',
  'PDF_HEADER_TITLE_INFO' => 'Sträng att skriva ut som titel på dokumentets sidhuvud',
  'PDF_FILENAME' => 'Default filnamn',
  'PDF_FILENAME_INFO' => 'Default filnamn för genererade PDF filer',
  'PDF_TITLE' => 'Titel',
  'PDF_TITLE_INFO' => 'Titel som syns i dokumentet egenskaperna',
  'PDF_SUBJECT' => 'Ämne',
  'PDF_SUBJECT_INFO' => 'Rubrik som syns i dokument egenskaperna.',
  'PDF_KEYWORDS' => 'Nyckelord',
  'PDF_KEYWORDS_INFO' => 'Associera nyckelord med dokumentet, vanligtvis i formen "nyckelord1 nyckelord2 ..."',
  'PDF_COMPRESSION' => 'Kompression',
  'PDF_COMPRESSION_INFO' => 'Aktiverar eller inaktiverar sid kompression.<br />När den är aktiverad så är den interna representationen på varje sida komprimerad, vilket leder till en kompressions proportion om ca 2 för dokumentet.',
  'PDF_JPEG_QUALITY' => 'JPEG kvalitet (1-100)',
  'PDF_JPEG_QUALITY_INFO' => 'Sätt standard JPEG kompression kvalitet (1-100)',
  'PDF_PDF_VERSION_INFO' => 'Ange PDF versionen (kontrollera PDF referensen för giltiga värden).',
  'PDF_PROTECTION' => 'Dokumentskydd',
  'PDF_USER_PASSWORD' => 'Användarlösenord',
  'PDF_OWNER_PASSWORD' => 'Ägarlösenord',
  'PDF_ACL_ACCESS' => 'Åtkomstkontroll',
  'PDF_ACL_ACCESS_INFO' => 'Default access kontroll för skapande av PDF',
  'K_CELL_HEIGHT_RATIO' => 'Block höjds proportioner',
  'K_TITLE_MAGNIFICATION' => 'Titel förstoring',
  'K_SMALL_RATIO' => 'Font proportioner för "small"',
  'HEAD_MAGNIFICATION' => 'Huvudförstoring',
  'PDF_IMAGE_SCALE_RATIO' => 'Bildskalnings proportioner',
  'PDF_IMAGE_SCALE_RATIO_INFO' => 'Proportion att användas vid skalning av bilder',
  'PDF_UNIT' => 'Enhet',
  'PDF_UNIT_INFO' => 'dokumentsenhet för mätning',
  'LBL_IMG_RESIZED' => '(storlek anpassad för visning)',
  'LBL_FONTMANAGER_BUTTON' => 'PDF font hanterare',
  'LBL_FONTMANAGER_TITLE' => 'PDF font hanterare',
  'LBL_FONT_BOLD' => 'Fet',
  'LBL_FONT_ITALIC' => 'Kursiv',
  'LBL_FONT_BOLDITALIC' => 'Fet/kursiv',
  'LBL_FONT_REGULAR' => 'Vanlig',
  'LBL_FONT_TYPE_CORE' => 'Kärna',
  'LBL_FONT_TYPE_TRUETYPE' => '"TrueType"',
  'LBL_FONT_TYPE_TYPE1' => 'Typ1',
  'LBL_FONT_TYPE_TRUETYPEU' => '"TrueTypeUnicode"',
  'LBL_FONT_LIST_NAME' => 'Namn',
  'LBL_FONT_LIST_FILENAME' => 'Filnamn',
  'LBL_FONT_LIST_TYPE' => 'Typ',
  'LBL_FONT_LIST_STYLE' => 'Stil',
  'LBL_FONT_LIST_STYLE_INFO' => 'Fontstil',
  'LBL_FONT_LIST_EMBEDDED' => 'Inbäddad',
  'LBL_FONT_LIST_EMBEDDED_INFO' => 'Aktivera för att sammanfoga fonten i PDF filen.',
  'LBL_FONT_LIST_CIDINFO_INFO' => 'Exempel :<br /><br />    * Chinese Traditional :<br /><br />      $enc=\\\'UniCNS-UTF16-H\\\';<br />      $cidinfo=array(\\\'Registry\\\'=>\\\'Adobe\\\', \\\'Ordering\\\'=>\\\'CNS1\\\',\\\'Supplement\\\'=>0);<br />      include(\\\'include/tcpdf/fonts/uni2cid_ac15.php\\\');<br /><br />    * Chinese Simplified :<br /><br />      $enc=\\\'UniGB-UTF16-H\\\';<br />      $cidinfo=array(\\\'Registry\\\'=>\\\'Adobe\\\', \\\'Ordering\\\'=>\\\'GB1\\\',\\\'Supplement\\\'=>2);<br />      include(\\\'include/tcpdf/fonts/uni2cid_ag15.php\\\');<br /><br />    * Korean :<br /><br />      $enc=\\\'UniKS-UTF16-H\\\';<br />      $cidinfo=array(\\\'Registry\\\'=>\\\'Adobe\\\', \\\'Ordering\\\'=>\\\'Korea1\\\',\\\'Supplement\\\'=>0);<br />      include(\\\'include/tcpdf/fonts/uni2cid_ak12.php\\\');<br /><br />    * Japanese :<br /><br />      $enc=\\\'UniJIS-UTF16-H\\\';<br />      $cidinfo=array(\\\'Registry\\\'=>\\\'Adobe\\\', \\\'Ordering\\\'=>\\\'Japan1\\\',\\\'Supplement\\\'=>5);<br />      include(\\\'include/tcpdf/fonts/uni2cid_aj16.php\\\');<br /><br />För mer hjälp : www.tcpdf.org',
  'LBL_FONT_LIST_FILESIZE' => 'Fontstorlek (KB)',
  'LBL_ADD_FONT' => 'Lägg till en font',
  'LBL_BACK' => 'Tillbaka',
  'LBL_REMOVE' => 'ta bort',
  'LBL_JS_CONFIRM_DELETE_FONT' => 'Är du säker på att du vill ta bort den här fonten?',
  'LBL_ADDFONT_TITLE' => 'Lägg till en PDF font',
  'LBL_PDF_PATCH' => 'Fix',
  'LBL_PDF_ENCODING_TABLE' => 'Encoding tabell',
  'LBL_PDF_FONT_FILE' => 'Font fil',
  'LBL_PDF_FONT_FILE_INFO' => '.ttf eller .otf eller .pfb fil',
  'LBL_PDF_METRIC_FILE' => 'Metrisk fil',
  'LBL_PDF_METRIC_FILE_INFO' => '.afm eller .ufm fil',
  'LBL_ADD_FONT_BUTTON' => 'Lägg till',
  'JS_ALERT_PDF_WRONG_EXTENSION' => 'Filen har inte en bra ändelse',
  'LBL_PDF_INSTRUCTIONS' => 'Instruktioner',
  'ERR_MISSING_CIDINFO' => 'Fältets CID information får ej vara tomt',
  'LBL_ADDFONTRESULT_TITLE' => 'Resultatet av tillagd font',
  'LBL_STATUS_FONT_SUCCESS' => 'GODKÄNT: Fonten har lagts till i SugarCRM',
  'LBL_STATUS_FONT_ERROR' => 'FEL: Fonten har inte lagts till. Kontrollera loggen nedan.',
  'LBL_FONT_MOVE_DEFFILE' => 'Font definitionens filen flyttat till :',
  'LBL_FONT_MOVE_FILE' => 'Font filen flyttad till :',
  'ERR_LOADFONTFILE' => 'FEL: LoadFontFile fel!',
  'ERR_FONT_EMPTYFILE' => 'FEL: Tomt filnamn!',
  'ERR_FONT_UNKNOW_TYPE' => 'FEL: Okänd font typ:',
  'ERR_DELETE_CORE_FILE' => 'FEL: Det går inte att ta bort en system font.',
  'ERR_NO_FONT_PATH' => 'FEL: Ingen font sökväg tillgänglig!',
  'ERR_NO_CUSTOM_FONT_PATH' => 'FEL: Ingen skräddarsydd font sökväg tillgänglig!',
  'ERR_FONT_NOT_WRITABLE' => 'den är inte skrivbar.',
  'ERR_FONT_FILE_DO_NOT_EXIST' => 'existerar inte eller är inte en katalog.',
  'ERR_FONT_MAKEFONT' => 'FEL: MakeFont fel',
  'ERR_FONT_ALREADY_EXIST' => 'FEL: Denna font existerar redan. Återställer...',
  'ERR_PDF_NO_UPLOAD' => 'Fel vid uppladdning av font eller metrisk fil.',
  'LBL_WIZARD_TITLE' => 'Administrationsguide',
  'LBL_WIZARD_WELCOME_TAB' => 'Välkommen',
  'LBL_WIZARD_WELCOME_TITLE' => 'Välkommen till Sugar!',
  'LBL_WIZARD_NEXT_BUTTON' => 'Nästa >',
  'LBL_WIZARD_BACK_BUTTON' => '< Tillbaka',
  'LBL_WIZARD_SKIP_BUTTON' => 'Skippa',
  'LBL_WIZARD_FINISH_BUTTON' => 'Avsluta',
  'LBL_WIZARD_CONTINUE_BUTTON' => 'Fortsätt',
  'LBL_WIZARD_FINISH_TAB' => 'Avsluta',
  'LBL_WIZARD_FINISH_TITLE' => 'Grundläggande system konfiguration är klar',
  'LBL_WIZARD_SYSTEM_TITLE' => 'Märkning',
  'LBL_WIZARD_SYSTEM_DESC' => 'Ange ditt företagsnamn och logga för att märka din Sugar.',
  'LBL_MOBILE_MOD_REPORTS_RESTRICTION' => '* Rapportmodulen är endast tillgänglig i Sugar Mobile iPhone klienten.',
);

