<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/


	

$mod_strings = array (
  'LBL_MIN_AUTO_REFRESH_INTERVAL' => 'Minimum Dashlet Auto-Refresh Interval',
  'LBL_MIN_AUTO_REFRESH_INTERVAL_HELP' => 'This is the minimum value one can choose to have dashlets auto-refresh. Setting to \'Never\' disables auto-refreshing of dashlets entirely.',
  'SHOW_DOWNLOADS_TAB' => 'Display Downloads Tab',
  'SHOW_DOWNLOADS_TAB_HELP' => 'When selected, the Download tab will appear in the User settings and provide users with access to Sugar plug-ins and other available files',
  'LBL_MOBILE_MOD_REPORTS_RESTRICTION' => '* The Reports module is only available for the Sugar Mobile iPhone client.',
  'IMAGES' => 'Logos',
  'LBL_ADMIN_WIZARD' => 'Admin Wizard',
  'LBL_MAIL_SMTPTYPE' => 'SMTP Server Type:',
  'LBL_MAIL_SMTP_SETTINGS' => 'SMTP Server Specification',
  'LBL_CHOOSE_EMAIL_PROVIDER' => 'Choose your Email provider:',
  'LBL_YAHOOMAIL_SMTPPASS' => 'Парола:',
  'LBL_YAHOOMAIL_SMTPUSER' => 'Идентификатор:',
  'LBL_GMAIL_SMTPPASS' => 'Парола:',
  'LBL_GMAIL_SMTPUSER' => 'Ел. адрес:',
  'LBL_EXCHANGE_SMTPPASS' => 'Парола:',
  'LBL_EXCHANGE_SMTPUSER' => 'Потребител:',
  'LBL_EXCHANGE_SMTPPORT' => 'Порт:',
  'LBL_EXCHANGE_SMTPSERVER' => 'Сървър:',
  'LBL_ALLOW_DEFAULT_SELECTION_HELP' => 'When this option is selected, all users will be able to send emails using the same outgoing mail account used to send system notifications and alerts.  If the option is not selected, users can still use the outgoing mail server after providing their own account information.',
  'LBL_MODULE_ID' => 'Configurator',
  'LBL_PORTAL_TITLE' => 'Customer Self-Service Portal',
  'LBL_PROXY_AUTH' => 'Authentication?',
  'LBL_PROXY_HOST' => 'Proxy Host',
  'LBL_PROXY_TITLE' => 'Proxy Settings',
  'LBL_SKYPEOUT_TITLE' => 'SkypeOut&reg;',
  'SYSTEM_NAME_HELP' => 'This is the name that displays in the title bar of your browser.',
  'LBL_OC_STATUS' => 'Default Offline Client Status',
  'DEFAULT_OC_STATUS' => 'Enable Offline Client by default',
  'LBL_OC_STATUS_DESC' => 'Check here if you would like any user to have access to Offline Client.  Otherwise you can configure access at the user level.',
  'SESSION_TIMEOUT' => 'Portal Session Timeout',
  'LBL_LDAP_AUTHENTICATION' => 'Authentication:',
  'LBL_LDAP_AUTHENTICATION_DESC' => 'Bind to the LDAP server using a specific users credentials',
  'LBL_LDAP_USER_DN' => 'User DN:',
  'LBL_LDAP_GROUP_DN' => 'Group DN:',
  'LBL_LDAP_GROUP_DN_DESC' => 'Example: <em>ou=groups,dc=example,dc=com</em>',
  'LBL_LDAP_USER_FILTER' => 'User Filter:',
  'LBL_LDAP_GROUP_MEMBERSHIP' => 'Group Membership:',
  'LBL_LDAP_GROUP_MEMBERSHIP_DESC' => 'Users must be a member of a specific group',
  'LBL_LDAP_GROUP_USER_ATTR' => 'User Attribute:',
  'LBL_LDAP_GROUP_USER_ATTR_DESC' => 'The unique identifier of the person that will be used to check if they are a member of the group Example: <em>uid</em>',
  'LBL_LDAP_GROUP_ATTR_DESC' => 'The attribute of the Group that will be used to filter against the User Attribute Example: <em>memberUid</em>',
  'LBL_LDAP_GROUP_ATTR' => 'Group Attribute:',
  'LBL_LDAP_USER_FILTER_DESC' => 'Any additional filter params to apply when authenticating users e.g.<em>is_sugar_user=1 or (is_sugar_user=1)(is_sales=1)</em>',
  'LBL_LDAP_LOGIN_ATTRIBUTE' => 'Login Attribute:',
  'LBL_LDAP_BIND_ATTRIBUTE' => 'Bind Attribute:',
  'LBL_LDAP_BIND_ATTRIBUTE_DESC' => 'For Binding the LDAP User Examples:[<b>AD:</b>&nbsp;userPrincipalName] [<b>openLDAP:</b>&nbsp;userPrincipalName] [<b>Mac&nbsp;OS&nbsp;X:</b>&nbsp;uid]',
  'LBL_LDAP_LOGIN_ATTRIBUTE_DESC' => 'For searching for the LDAP User Examples:[<b>AD:</b>&nbsp;userPrincipalName] [<b>openLDAP:</b>&nbsp;dn] [<b>Mac&nbsp;OS&nbsp;X:</b>&nbsp;dn]',
  'LBL_LDAP_GROUP_NAME_DESC' => 'Example <em>cn=sugarcrm</em>',
  'LBL_LDAP_USER_DN_DESC' => 'Example: <em>ou=people,dc=example,dc=com</eM>',
  'DEVELOPER_MODE' => 'Developer Mode',
  'LBL_MARK_POINT' => 'Mark Point',
  'LBL_NEXT_' => 'Next>>',
  'LBL_REFRESH_FROM_MARK' => 'Refresh From Mark',
  'LBL_DISPLAYING_LOG' => 'Displaying Log',
  'LBL_PDFMODULE_NAME' => 'PDF Settings',
  'SUGARPDF_BASIC_SETTINGS' => 'Document Properties',
  'SUGARPDF_ADVANCED_SETTINGS' => 'Advanced Settings',
  'SUGARPDF_LOGO_SETTINGS' => 'Images',
  'PDF_CREATOR' => 'PDF Creator',
  'PDF_CREATOR_INFO' => 'Defines the creator of the document. <br>This is typically the name of the application that generates the PDF.',
  'PDF_AUTHOR_INFO' => 'The Author appears in the document properties.',
  'PDF_HEADER_LOGO' => 'For Quotes PDF Documents',
  'PDF_HEADER_LOGO_INFO' => 'This image appears in the default Header in Quotes PDF Documents.',
  'PDF_NEW_HEADER_LOGO' => 'Select New Image for Quotes',
  'PDF_NEW_HEADER_LOGO_INFO' => 'The file format can be either .jpg or .png. (Only .jpg for EZPDF)<BR>The recommended size is 867x74 px.',
  'PDF_HEADER_LOGO_WIDTH' => 'Quotes Image Width',
  'PDF_HEADER_LOGO_WIDTH_INFO' => 'Change the scale of the uploaded image that appears in Quotes PDF Documents. (TCPDF only)',
  'PDF_SMALL_HEADER_LOGO' => 'For Reports PDF Documents',
  'PDF_SMALL_HEADER_LOGO_INFO' => 'This image appears in the default Header in Reports PDF Documents.<br> This image also appears in the top left-hand corner of the Sugar application.',
  'PDF_NEW_SMALL_HEADER_LOGO' => 'Select New Image for Reports',
  'PDF_NEW_SMALL_HEADER_LOGO_INFO' => 'The file format can be either .jpg or .png. (Only .jpg for EZPDF)<BR>The recommended size is 212x40 px.',
  'PDF_SMALL_HEADER_LOGO_WIDTH' => 'Reports Image Width',
  'PDF_SMALL_HEADER_LOGO_WIDTH_INFO' => 'Change the scale of the uploaded image that appears in Reports PDF Documents. (TCPDF only)',
  'PDF_HEADER_STRING' => 'Header String',
  'PDF_HEADER_STRING_INFO' => 'Header description string',
  'PDF_HEADER_TITLE' => 'Header Title',
  'PDF_HEADER_TITLE_INFO' => 'String to print as title on document header',
  'PDF_FILENAME' => 'Default Filename',
  'PDF_FILENAME_INFO' => 'Default filename for the generated PDF files',
  'PDF_TITLE_INFO' => 'The Title appears in the document properties.',
  'PDF_SUBJECT_INFO' => 'The Subject appears in the document properties.',
  'PDF_KEYWORDS' => 'Keyword(s)',
  'PDF_KEYWORDS_INFO' => 'Associate Keywords with the document, generally in the form "keyword1 keyword2..."',
  'PDF_COMPRESSION' => 'Compression',
  'PDF_COMPRESSION_INFO' => 'Activates or deactivates page compression. <br>When activated, the internal representation of each page is compressed, which leads to a compression ratio of about 2 for the resulting document.',
  'PDF_JPEG_QUALITY' => 'JPEG Quality (1-100)',
  'PDF_JPEG_QUALITY_INFO' => 'Set the default JPEG compression quality (1-100)',
  'PDF_PDF_VERSION' => 'PDF Version',
  'PDF_PDF_VERSION_INFO' => 'Set the PDF version (check PDF reference for valid values).',
  'PDF_PROTECTION' => 'Document Protection',
  'PDF_PROTECTION_INFO' => 'Set document protection<br>- copy: copy text and images to the clipboard<br>- print: print the document<br>- modify: modify it (except for annotations and forms)<br>- annot-forms: add annotations and forms<br>Note: the protection against modification is for people who have the full Acrobat product.',
  'PDF_USER_PASSWORD' => 'User Password',
  'PDF_OWNER_PASSWORD' => 'Owner Password',
  'PDF_ACL_ACCESS' => 'Access Control',
  'PDF_ACL_ACCESS_INFO' => 'Default Access Control for the PDF generation.',
  'K_CELL_HEIGHT_RATIO' => 'Cell Height Ratio',
  'K_CELL_HEIGHT_RATIO_INFO' => 'If the height of a cell is smaller than (Font Height x Cell Height Ratio), then (Font Height x Cell Height Ratio) is used as the cell height.<br>(Font Height x Cell Height Ratio) is also used as the height of the cell when no height is define.',
  'K_TITLE_MAGNIFICATION' => 'Title Magnification',
  'K_TITLE_MAGNIFICATION_INFO' => 'Title magnification respect main font size.',
  'K_SMALL_RATIO' => 'Small Font Factor',
  'K_SMALL_RATIO_INFO' => 'Reduction factor for small font.',
  'HEAD_MAGNIFICATION' => 'Head Magnification',
  'HEAD_MAGNIFICATION_INFO' => 'Magnification factor for titles.',
  'PDF_IMAGE_SCALE_RATIO' => 'Image scale ratio',
  'PDF_IMAGE_SCALE_RATIO_INFO' => 'Ratio used to scale the images',
  'PDF_UNIT' => 'Unit',
  'PDF_UNIT_INFO' => 'document unit of measure',
  'PDF_GD_WARNING' => 'You do not have the GD library installed for PHP. Without the GD library installed, only JPEG logos can be displayed in PDF documents.',
  'ERR_EZPDF_DISABLE' => 'Warning : The EZPDF class is disabled from the config table and it set as the PDF class. Please "Save" this form to set TCPDF as the PDF Class and return in a stable state.',
  'LBL_IMG_RESIZED' => '(resized for display)',
  'LBL_FONTMANAGER_BUTTON' => 'PDF Font Manager',
  'LBL_FONTMANAGER_TITLE' => 'PDF Font Manager',
  'LBL_FONT_BOLD' => 'Bold',
  'LBL_FONT_ITALIC' => 'Italic',
  'LBL_FONT_BOLDITALIC' => 'Bold/Italic',
  'LBL_FONT_REGULAR' => 'Regular',
  'LBL_FONT_TYPE_CID0' => 'CID-0',
  'LBL_FONT_TYPE_CORE' => 'Core',
  'LBL_FONT_TYPE_TRUETYPE' => 'TrueType',
  'LBL_FONT_TYPE_TYPE1' => 'Type1',
  'LBL_FONT_TYPE_TRUETYPEU' => 'TrueTypeUnicode',
  'LBL_FONT_LIST_STYLE' => 'Style',
  'LBL_FONT_LIST_STYLE_INFO' => 'Style of the font',
  'LBL_FONT_LIST_ENC' => 'Encoding',
  'LBL_FONT_LIST_EMBEDDED' => 'Embedded',
  'LBL_FONT_LIST_EMBEDDED_INFO' => 'Check to embed the font into the PDF file',
  'LBL_FONT_LIST_CIDINFO' => 'CID Information',
  'LBL_FONT_LIST_FILESIZE' => 'Font Size (KB)',
  'LBL_ADD_FONT' => 'Add a font',
  'LBL_JS_CONFIRM_DELETE_FONT' => 'Are you sure that you want to delete this font?',
  'LBL_ADDFONT_TITLE' => 'Add a PDF Font',
  'LBL_PDF_PATCH' => 'Patch',
  'LBL_PDF_ENCODING_TABLE' => 'Encoding Table',
  'LBL_PDF_ENCODING_TABLE_INFO' => 'Name of the encoding table.<br>This option is ignored for TrueType Unicode, OpenType Unicode and symbolic fonts.<br>The encoding defines the association between a code (from 0 to 255) and a character contained in the font.<br>The first 128 are fixed and correspond to ASCII.',
  'LBL_PDF_FONT_FILE' => 'Font File',
  'LBL_PDF_FONT_FILE_INFO' => '.ttf or .otf or .pfb file',
  'LBL_PDF_METRIC_FILE' => 'Metric File',
  'LBL_PDF_METRIC_FILE_INFO' => '.afm or .ufm file',
  'JS_ALERT_PDF_WRONG_EXTENSION' => 'This file do not have a good file extension.',
  'LBL_PDF_INSTRUCTIONS' => 'Instructions',
  'ERR_MISSING_CIDINFO' => 'The field CID Information cannot be empty.',
  'LBL_ADDFONTRESULT_TITLE' => 'Result of the add font process',
  'LBL_STATUS_FONT_SUCCESS' => 'SUCCESS : The font has been added to SugarCRM.',
  'LBL_STATUS_FONT_ERROR' => 'ERROR : The font has not been added. Look at the log below.',
  'LBL_FONT_MOVE_DEFFILE' => 'Font definition file move to :',
  'LBL_FONT_MOVE_FILE' => 'Font file move to :',
  'ERR_LOADFONTFILE' => 'ERROR: LoadFontFile error!',
  'ERR_FONT_EMPTYFILE' => 'ERROR: Empty filename!',
  'ERR_FONT_UNKNOW_TYPE' => 'ERROR: Unknow font type:',
  'ERR_DELETE_CORE_FILE' => 'ERROR: It is not possible to delete a core font.',
  'ERR_NO_FONT_PATH' => 'ERROR: No font path available!',
  'ERR_NO_CUSTOM_FONT_PATH' => 'ERROR: No custom font path available!',
  'ERR_FONT_NOT_WRITABLE' => 'is not writable.',
  'ERR_FONT_FILE_DO_NOT_EXIST' => 'doesn\'t exist or is not a directory.',
  'ERR_FONT_MAKEFONT' => 'ERROR: MakeFont error',
  'ERR_FONT_ALREADY_EXIST' => 'ERROR : This font already exist. Rollback...',
  'ERR_PDF_NO_UPLOAD' => 'Error during the upload of the font or metric file.',
  'LBL_WIZARD_TITLE' => 'Admin Wizard',
  'LBL_WIZARD_WELCOME_TITLE' => 'Welcome to CRM APPS !',
  'LBL_WIZARD_SKIP_BUTTON' => 'Skip',
  'LBL_WIZARD_FINISH_TITLE' => 'Basic system configuration is complete',
  'LBL_WIZARD_SYSTEM_TITLE' => 'Branding',
  'LBL_WIZARD_SYSTEM_DESC' => 'Provide your organization\'s name and logo in order to brand your Sugar.',
  'LBL_WIZARD_LOCALE_DESC' => 'Specify how you would like data in Sugar to be displayed, based on your geographical location. The settings you provide here will be the default settings. Users will be able set their own preferences.',
  'LBL_WIZARD_SMTP_DESC' => 'Provide the email account that will be used to send emails, such as the assignment notifications and new user passwords. Users will receive emails from Sugar, as sent from the specified email account.',
  'ADVANCED' => 'Разширено търсене',
  'DEFAULT_CURRENCY_ISO4217' => 'Валутен код ISO 4217',
  'DEFAULT_CURRENCY_NAME' => 'Име на валутата',
  'DEFAULT_CURRENCY_SYMBOL' => 'Валутен символ',
  'DEFAULT_CURRENCY' => 'Валута по подразбиране',
  'DEFAULT_DATE_FORMAT' => 'Формат на дата по подразбиране',
  'DEFAULT_DECIMAL_SEP' => 'Десетичен знак',
  'DEFAULT_LANGUAGE' => 'Език по подразбиране',
  'DEFAULT_NUMBER_GROUPING_SEP' => 'Разделител за хилядите',
  'DEFAULT_SYSTEM_SETTINGS' => 'Потребителски интерфейс',
  'DEFAULT_THEME' => 'Визуализация по подразбиране',
  'DEFAULT_TIME_FORMAT' => 'Формат на време по подразбиране',
  'DISPLAY_RESPONSE_TIME' => 'Покажи времето за реакция на сървъра',
  'LBL_ALLOW_USER_TABS' => 'На потребителите е разрешено да конфигурират табулатори',
  'LBL_CONFIGURE_SETTINGS_TITLE' => 'Системни настройки',
  'LBL_ENABLE_MAILMERGE' => 'Възможност за сливане на писма?',
  'LBL_LOGVIEW' => 'Конфигуриране настройките на регистъра',
  'LBL_MAIL_SMTPAUTH_REQ' => 'Рестриктиран достъп?',
  'LBL_MAIL_SMTPPASS' => 'Парола:',
  'LBL_MAIL_SMTPPORT' => 'Порт:',
  'LBL_MAIL_SMTPSERVER' => 'Сървър за електронна поща:',
  'LBL_MAIL_SMTPUSER' => 'Потребител:',
  'LBL_ALLOW_DEFAULT_SELECTION' => 'Позволи на потребителите да използват този имейл акаунт за изходящата поща:',
  'LBL_MAILMERGE_DESC' => 'Отметката се маркира само при наличие на Sugar Plug-in за Microsoft&reg; Word&reg;.',
  'LBL_MAILMERGE' => 'Сливане на писма',
  'LBL_MODULE_FAVICON' => 'Покажи иконата на модула като favicon',
  'LBL_MODULE_FAVICON_HELP' => 'Ако сте в модул с икона, използвайте модул иконата като favicon, вместо тема, в таба на браузара.',
  'LBL_MODULE_NAME' => 'Системни настройки',
  'LBL_MODULE_TITLE' => 'Потребителски интерфейс',
  'LBL_NOTIFY_FROMADDRESS' => 'Адрес на подателя:',
  'LBL_NOTIFY_SUBJECT' => 'Относно:',
  'LBL_PORTAL_ON_DESC' => 'Allows Case, Note and other data to be accessible by an external customer self-service portal system.',
  'LBL_PORTAL_ON' => 'Enable self-service portal integration?',
  'LBL_PROXY_ON_DESC' => 'Използване на прокси-сървър за достъп до външна информация.',
  'LBL_PROXY_ON' => 'Да се използва прокси-сървър?',
  'LBL_PROXY_PASSWORD' => 'Парола',
  'LBL_PROXY_PORT' => 'Порт',
  'LBL_PROXY_USERNAME' => 'Потребител',
  'LBL_RESTORE_BUTTON_LABEL' => 'Възстанови',
  'LBL_SYSTEM_SETTINGS' => 'Системни настройки',
  'LBL_SKYPEOUT_ON_DESC' => 'Позволява на потребителите, натискайки номера, да се обаждат посредством SkypeOut&reg;. За целта номерата следва да бъдат въведени в определен формат. Последователността е следната "+"  "The Country Code" "The Number", пример: +1 (555) 555-1234. За повече информация, виж Skype FAQ на адрес <a href="http://www.skype.com/help/faq/skypeout.html#calling" target="skype">skype&reg; faq</a>',
  'LBL_SKYPEOUT_ON' => 'Дайте възможност на SkypeOut® интеграция?',
  'LBL_USE_REAL_NAMES' => 'Покажи цялото име (не потребителското)',
  'LBL_USE_REAL_NAMES_DESC' => 'Изписване пълно име на потребителя вместо потребителско име',
  'LIST_ENTRIES_PER_LISTVIEW' => 'Списък със записи на страница',
  'LIST_ENTRIES_PER_SUBPANEL' => 'Списък със субпанели на страница',
  'LBL_WIRELESS_LIST_ENTRIES' => 'Listview items per page (Wireless)',

  'LBL_WIRELESS_SUBPANEL_LIST_ENTRIES' => 'Subpanel items per page (Wireless)',
  'LOG_MEMORY_USAGE' => 'Записване на използваната памет в дневника',
  'LOG_SLOW_QUERIES' => 'Отчитане на заявките със забавяне в изпълнението',
  'LOCK_HOMEPAGE_HELP' => 'This setting is to prevent<BR> 1) the addition of new home pages in the Home module, and <BR>2) customization of dashlet placement in the home pages by dragging and dropping.',
  'CURRENT_LOGO' => 'Текущо лого в употреба',
  'CURRENT_LOGO_HELP' => 'Това лого се показва в горния ляв ъгъл на прозорците на програмата.',
  'NEW_LOGO' => 'Зареждане на ново лого (212x40)',
  'NEW_LOGO_HELP' => 'Форматът на файла с изображение следва да е .png или .jpg.<BR>Препоръчителният размер: 212x40 px.',
  'NEW_QUOTE_LOGO' => 'Зареждане на ново лого за оферти (867x74)',
  'NEW_QUOTE_LOGO_HELP' => 'Форматът на файла следва да е .jpg.<BR>Препоръчителният размер: 867x74 px.',
  'QUOTES_CURRENT_LOGO' => 'Лого за фактури',
  'SLOW_QUERY_TIME_MSEC' => 'Максимално време за изпълнение на стандартни заявки (msec)',
  'STACK_TRACE_ERRORS' => 'Покажи трасировката на грешки',
  'UPLOAD_MAX_SIZE' => 'Максимален размер на файла за зареждане',
  'VERIFY_CLIENT_IP' => 'Валидиране на потребителски IP адрес',
  'LOCK_HOMEPAGE' => 'Ограничаване на потребителите да персонализират началната си страница',
  'LOCK_SUBPANELS' => 'Ограничаване на потребителите да персонализират панели със свързани записи',
  'MAX_DASHLETS' => 'Максимален брой раздели на началната страница',
  'SYSTEM_NAME' => 'Име на системата',
  'SYSTEM_NAME_WIZARD' => 'Име:',
  'SESSION_TIMEOUT_UNITS' => 'секунди',
  'LBL_LDAP_TITLE' => 'Поддръжка на идентификация през LDAP',
  'LBL_LDAP_ENABLE' => 'Разреши използването на LDAP',
  'LBL_LDAP_SERVER_HOSTNAME' => 'Сървър:',
  'LBL_LDAP_SERVER_PORT' => 'Номер на порт:',
  'LBL_LDAP_ADMIN_USER' => 'Потребителско име:',
  'LBL_LDAP_ADMIN_USER_DESC' => 'Used to search for the sugar user. [May need to be fully qualified]<br>It will bind anonymously if not provided.',
  'LBL_LDAP_ADMIN_PASSWORD' => 'Парола за идентификация:',
  'LBL_LDAP_AUTO_CREATE_USERS' => 'Автоматично създаване на потребители:',
  'LBL_LDAP_SERVER_HOSTNAME_DESC' => 'Пример: ldap.example.com',
  'LBL_LDAP_SERVER_PORT_DESC' => 'Пример: 389',
  'LBL_LDAP_GROUP_NAME' => 'Име на групата:',
  'LBL_LDAP_AUTO_CREATE_USERS_DESC' => 'Ако идентифицирания потребител не съществува, такъв ще бъде създаден в Sugar.',
  'LBL_LDAP_ENC_KEY' => 'Ключ за криптиране:',
  'LBL_LDAP_ENC_KEY_DESC' => 'Използване на SOAP за идентификация през ldap.',
  'LDAP_ENC_KEY_NO_FUNC_DESC' => 'Разширението php_mcrypt трябва да бъде разрешено в конфигурационния файл php.ini.',
  'LBL_ALL' => 'Всички записи',
  'LBL_SEARCH' => 'Търси:',
  'LBL_REG_EXP' => 'Рег.Exp:',
  'LBL_IGNORE_SELF' => 'Премахни самоуправлението:',
  'LBL_MARKING_WHERE_START_LOGGING' => 'Маркирайте от къде да запоне логването',
  'LBL_YOUR_PROCESS_ID' => 'id на процеса',
  'LBL_YOUR_IP_ADDRESS' => 'IP адресът Ви е',
  'LBL_IT_WILL_BE_IGNORED' => 'it will be ignored',
  'LBL_LOG_NOT_CHANGED' => 'log has not changed',
  'LBL_ALERT_JPG_IMAGE' => 'Форматът на файла с изображение следва да е JPEG.  Заредете нов файл с разширение .jpg.',
  'LBL_ALERT_TYPE_IMAGE' => 'Форматът на файла с изображение следва да е JPEG или PNG.  Заредете нов файл с разширение .jpg или .png.',
  'LBL_ALERT_SIZE_RATIO' => 'The aspect ratio of the image should be between 1:1 или 10:1.  The image will be resized.',
  'LBL_ALERT_SIZE_RATIO_QUOTES' => 'The aspect ratio of the image must be between 3:1 или 20:1.  Upload a new file with this ratio.',
  'ERR_ALERT_FILE_UPLOAD' => 'Грешка при зареждане на изображението.',
  'LBL_LOGGER' => 'Настройка на логовете',
  'LBL_LOGGER_FILENAME' => 'Име на файла за вход',
  'LBL_LOGGER_FILE_EXTENSION' => 'Разширение',
  'LBL_LOGGER_MAX_LOG_SIZE' => 'Максимален размер на лога',
  'LBL_LOGGER_DEFAULT_DATE_FORMAT' => 'Формат на дата по подразбиране',
  'LBL_LOGGER_LOG_LEVEL' => 'Ниво на входа',
  'LBL_LOGGER_MAX_LOGS' => 'Максимален размер на логовете',
  'LBL_LOGGER_FILENAME_SUFFIX' => 'Добавяне след името на файла',
  'LBL_VCAL_PERIOD' => 'vCal актуализации за период от време:',
  'vCAL_HELP' => 'Използвайте тази настройка за определяне на броя на месеците преди текущата дата, че безплатна/ запазена информацията за разговори и срещи се публикува.</BR>За да включите/ изключите, натиснете "0". Минималното е 1 месец, а максималната е 12 месеца.',
  'PDF_AUTHOR' => 'Автор',
  'PDF_TITLE' => 'Заглавие',
  'PDF_SUBJECT' => 'Относно',
  'PDF_USER_PASSWORD_INFO' => 'If you don\'t set any password, the document will open as usual. <br>If you set a user password, the PDF viewer will ask for it before displaying the document. <br>The master password, if different from the user one, can be used to get full access.',
  'PDF_OWNER_PASSWORD_INFO' => 'If you don\'t set any password, the document will open as usual. <br>If you set a user password, the PDF viewer will ask for it before displaying the document. <br>The master password, if different from the user one, can be used to get full access.',
  'LBL_FONT_LIST_NAME' => 'Име',
  'LBL_FONT_LIST_FILENAME' => 'Име на файла',
  'LBL_FONT_LIST_TYPE' => 'Тип',
  'LBL_FONT_LIST_CIDINFO_INFO' => 'Examples :<ul><li>Chinese Traditional :<br><pre>$enc=\'UniCNS-UTF16-H\';<br>$cidinfo=array(\'Registry\'=>\'Adobe\', \'Ordering\'=>\'CNS1\',\'Supplement\'=>0);<br>include(\'include/tcpdf/fonts/uni2cid_ac15.php\');</pre></li><li>Chinese Simplified :<br><pre>$enc=\'UniGB-UTF16-H\';<br>$cidinfo=array(\'Registry\'=>\'Adobe\', \'Ordering\'=>\'GB1\',\'Supplement\'=>2);<br>include(\'include/tcpdf/fonts/uni2cid_ag15.php\');</pre></li><li>Korean :<br><pre>$enc=\'UniKS-UTF16-H\';<br>$cidinfo=array(\'Registry\'=>\'Adobe\', \'Ordering\'=>\'Korea1\',\'Supplement\'=>0);<br>include(\'include/tcpdf/fonts/uni2cid_ak12.php\');</pre></li><li>Japanese :<br><pre>$enc=\'UniJIS-UTF16-H\';<br>$cidinfo=array(\'Registry\'=>\'Adobe\', \'Ordering\'=>\'Japan1\',\'Supplement\'=>5);<br>include(\'include/tcpdf/fonts/uni2cid_aj16.php\');</pre></li></ul>More help : www.tcpdf.org',
  'LBL_BACK' => 'Върни',
  'LBL_REMOVE' => 'изтрий',
  'LBL_PDF_PATCH_INFO' => 'Custom modification of the encoding. Write a PHP array.<br>Example :<br>ISO-8859-1 does not contain the euro symbol. To add it at position 164, write "array(164=>\'Euro\')".',
  'LBL_ADD_FONT_BUTTON' => 'Добави',
  'PDF_INSTRUCTIONS_ADD_FONT' => 'Fonts supported by SugarPDF :<br /><ul><br /><li>TrueTypeUnicode (UTF-8 Unicode)</li><br /><li>OpenTypeUnicode</li><br /><li>TrueType</li><br /><li>OpenType</li><br /><li>Type1</li><br /><li>CID-0</li><br /></ul><br /><br><br />If you choose to not embed your font in the PDF, the generated PDF file will be lighter but a substitution will be use if the font is not available in the system of your reader.<br /><br><br><br />Adding a PDF font to SugarCRM requires to follow steps 1 and 2 of the TCPDF Fonts documentation available in the "DOCS" section of the <a href="http://www.tcpdf.org" target="_blank">TCPDF website</a>.<br /><br><br>The pfm2afm and ttf2ufm utils are available in fonts/utils in the TCPDF package that you can download on the "DOWNLOAD" section of the <a href="http://www.tcpdf.org" target="_blank">TCPDF website</a>.<br /><br><br>Load the metric file generated in step 2 and your font file below.',
  'LBL_WIZARD_WELCOME_TAB' => 'Потребител:',
  'LBL_WIZARD_WELCOME' => 'Click <b>Next</b> to brand, localize and configure Sugar now.<br/><br />If you wish to configure Sugar later, click <b>Skip</b>.',
  'LBL_WIZARD_NEXT_BUTTON' => 'Продължи >',
  'LBL_WIZARD_BACK_BUTTON' => '< Върни',
  'LBL_WIZARD_FINISH_BUTTON' => 'Край',
  'LBL_WIZARD_CONTINUE_BUTTON' => 'Продължи',
  'LBL_WIZARD_FINISH_TAB' => 'Край',
  'LBL_WIZARD_FINISH' => 'Click <b>Continue</b> to configure your user settings.<br/><br /><br />To configure additional system settings, click <a href="index.php?module=Administration&action=index" target="_blank">here</a>.',
);

