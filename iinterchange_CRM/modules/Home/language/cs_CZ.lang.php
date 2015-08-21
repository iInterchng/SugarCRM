<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

	

$mod_strings = array (
  'LBL_SOURCE_CSSMIN' => 'CssMin - A css parser and minifier.',
  'LBL_SOURCE_PHPSAML' => 'PHP-SAML - A simple SAML toolkit for PHP.',
  'LBL_SOURCE_ISCROLL' => 'iScroll - The overflow:scroll for mobile webkit. Native scrolling inside a fixed width/height element.',
  'LBL_SOURCE_FLASHCANVAS' => 'lashCanvas - FlashCanvas is a JavaScript library which adds the HTML5 Canvas support to Internet Explorer. It renders shapes and images via Flash drawing API. It supports almost all Canvas APIs and, in many cases, runs faster than other similar libraries which use VML or Silverlight.',
  'LBL_SOURCE_JIT' => 'JavaScript InfoVis Toolkit - The JavaScript InfoVis Toolkit provides tools for creating Interactive Data Visualizations for the Web.',
  'LBL_WEB' => 'Web',
  'LBL_HOME_PAGE_6_NAME' => 'Marketing',
  'LBL_HOME_PAGE_4_NAME' => 'Tracker',
  'LBL_SUGAR_COMMUNITY_EDITION' => 'Sugar Community Edition',
  'LBL_SUGAR_PROFESSIONAL' => 'Sugar Professional',
  'LBL_SUGAR_ENTERPRISE' => 'Sugar Enterprise',
  'LBL_WIKI' => 'Wiki',
  'LBL_SOURCE_SUGAR' => 'Sugar - The world\'s most popular sales force automation application created by SugarCRM Inc.',
  'LBL_SOURCE_XTEMPLATE' => 'XTemplate - A template engine for PHP created by Barnabás Debreceni',
  'LBL_SOURCE_NUSOAP' => 'NuSOAP - A set of PHP classes that allow developers to create and consume web services created by NuSphere Corporation and Dietrich Ayala',
  'LBL_SOURCE_JSCALENDAR' => 'JS Calendar - A calendar for entering dates created by Mihai Bazon',
  'LBL_SOURCE_PHPPDF' => 'PHP PDF - A library for creating PDF documents created by Wayne Munro',
  'LBL_SOURCE_JSONPHP' => 'JSON.php - A PHP script to convert to and from JSON data format by Michal Migurski.',
  'LBL_SOURCE_JSON' => 'JSON.js - A JSON parser and JSON stringifier in JavaScript.',
  'LBL_SOURCE_HTTP_WEBDAV_SERVER' => 'HTTP_WebDAV_Server - A WebDAV Server Implementation in PHP.',
  'LBL_SOURCE_JS_O_LAIT' => 'JavaScript O Lait - A library of reusable modules and components to enhance JavaScript by Jan-Klaas Kollhof.',
  'LBL_SOURCE_PCLZIP' => 'PclZip - library offers compression and extraction functions for Zip formatted archives by Vincent Blavet',
  'LBL_SOURCE_SMARTY' => 'Smarty - A template engine for PHP.',
  'LBL_SOURCE_OVERLIBMWS' => 'Overlibmws - JavaScript library for client-side windowing.',
  'LBL_SOURCE_YAHOO_UI_LIB' => 'Yahoo! User Interface Library - The UI Library Utilities facilitate the implementation of rich client-side features.',
  'LBL_SOURCE_PHPMAILER' => 'PHPMailer - A full featured email transfer class for PHP',
  'LBL_SOURCE_CRYPT_BLOWFISH' => 'Crypt_Blowfish - Allows for quick two-way blowfish encryption without requiring the MCrypt PHP extension.',
  'LBL_SOURCE_HTML_SAFE' => 'HTML_Safe - A parser that strips down all potentially dangerous content within HTML',
  'LBL_SOURCE_XML_HTMLSAX3' => 'XML_HTMLSax3 - A SAX parser for HTML and other badly formed XML documents',
  'LBL_SOURCE_YAHOO_UI_LIB_EXT' => 'Yahoo! UI Extensions Library - Extensions to the Yahoo! User Interface Library by Jack Slocum',
  'LBL_SOURCE_JSMIN' => 'JSMin - filter which removes comments and unnecessary whitespace from JavaScript files.',
  'LBL_SOURCE_SWFOBJECT' => 'SWFObject - Javascript Flash Player detection and embed script.',
  'LBL_MODULE_NAME' => 'Domů',
  'LBL_MODULES_TO_SEARCH' => 'Moduly pro vyhledávání',
  'LBL_NEW_FORM_TITLE' => 'Přidat kontakt',
  'LBL_FIRST_NAME' => 'Křestní jméno:',
  'LBL_LAST_NAME' => 'Příjmení:',
  'LBL_LIST_LAST_NAME' => 'Příjmení',
  'LBL_PHONE' => 'Telefon',
  'LBL_EMAIL_ADDRESS' => 'Email:',
  'LBL_MY_PIPELINE_FORM_TITLE' => 'Moje Pipeline',
  'LBL_PIPELINE_FORM_TITLE' => 'Obchody podle fáze',
  'LBL_CAMPAIGN_ROI_FORM_TITLE' => 'ROI kampaně',
  'LBL_MY_CLOSED_OPPORTUNITIES_GAUGE' => 'Mé vyhrané obchody',
  'LNK_NEW_CONTACT' => 'Přidat kontakt',
  'LNK_NEW_ACCOUNT' => 'Přidat společnost',
  'LNK_NEW_OPPORTUNITY' => 'Vytvořit obchod',
  'LNK_NEW_QUOTE' => 'Vytvořit nabídku',
  'LNK_NEW_LEAD' => 'Vytvořit příležitost',
  'LNK_NEW_CASE' => 'Vytvořit případ',
  'LNK_NEW_NOTE' => 'Přidat poznámku nebo přílohu',
  'LNK_NEW_CALL' => 'Naplánovat hovor',
  'LNK_NEW_EMAIL' => 'Archivovat zprávu',
  'LNK_COMPOSE_EMAIL' => 'Nová zpráva',
  'LNK_NEW_MEETING' => 'Naplánovat schůzku',
  'LNK_NEW_TASK' => 'Přidat úkol',
  'LNK_NEW_BUG' => 'Report chyb',
  'LBL_ADD_BUSINESSCARD' => 'Přidat vizitku',
  'ERR_ONE_CHAR' => 'Prosím zadejte nejméně jeden znak nebo číslo pro vyhledávání ...',
  'LBL_OPEN_TASKS' => 'Moje otevřené úkoly',
  'LBL_SEARCH_RESULTS' => 'Výsledky hledání',
  'LBL_SEARCH_RESULTS_IN' => 'v',
  'LNK_NEW_SEND_EMAIL' => 'Nová zpráva',
  'LBL_NO_ACCESS' => 'Nemáte přístup do tohoto modulu. Obtaťte se na správce systému.',
  'LBL_NO_RESULTS_IN_MODULE' => '-- Nic nebylo nalezeno --',
  'LBL_NO_RESULTS' => 'Nebylo nalezeny žádné položky. Zkuste hledat znova.',
  'LBL_NO_RESULTS_TIPS' => 'Tipy pro vyhledávání:/n/n<br /><ul><br /><li>Ujistěte se, že máte zvolené správné kategori</li><br /><li>Rozšiřte kategorie vyhledávání</li><br /><li>Pokud stále ještě nemůžete nalézt co hledáte, vyzkoušete rozšířené hledání daného modulu</li><br /></ul>',
  'LBL_RELOAD_PAGE' => 'Abyste mohli tento budík použít, musíte <a href=&#34;javascript: window.location.reload()&#34;>znovu načíst okno</a>.',
  'LBL_ADD_DASHLETS' => 'Přidat budík',
  'LBL_ADD_PAGE' => 'Přidat stránku',
  'LBL_DEL_PAGE' => 'Smazat stránku',
  'LBL_WEBSITE_TITLE' => 'Internetová stránka',
  'LBL_RSS_TITLE' => 'Nové Feed',
  'LBL_DELETE_PAGE' => 'Smazat stránku',
  'LBL_CHANGE_LAYOUT' => 'Změnit rozložení',
  'LBL_RENAME_PAGE' => 'Přejmenovat stránku',
  'LBL_CLOSE_DASHLETS' => 'Zavřít',
  'LBL_CLOSE_SITEMAP' => 'Zavřít',
  'LBL_OPTIONS' => 'Volby',
  'LBL_TODAY' => 'Dnes',
  'LBL_YESTERDAY' => 'Včera',
  'LBL_TOMORROW' => 'Zítra',
  'LBL_LAST_WEEK' => 'Minulý týden',
  'LBL_NEXT_WEEK' => 'Následující týden',
  'LBL_LAST_7_DAYS' => 'Posledních 7 dní',
  'LBL_NEXT_7_DAYS' => 'Následujících 7 dní',
  'LBL_LAST_MONTH' => 'Minulý měsíc',
  'LBL_NEXT_MONTH' => 'Následující měsíc',
  'LBL_LAST_QUARTER' => 'Minulý kvartál',
  'LBL_THIS_QUARTER' => 'Tento kvartál',
  'LBL_LAST_YEAR' => 'Minulý rok',
  'LBL_NEXT_YEAR' => 'Následující rok',
  'LBL_LAST_30_DAYS' => 'Posledních 30 dní',
  'LBL_NEXT_30_DAYS' => 'Následujících 30 dní',
  'LBL_THIS_MONTH' => 'Aktuální měsíc',
  'LBL_THIS_YEAR' => 'Letos',
  'LBL_MODULES' => 'Moduly',
  'LBL_CHARTS' => 'Grafy',
  'LBL_TOOLS' => 'Nástroje',
  'LBL_MAX_DASHLETS_REACHED' => 'Dosáhli jste maximální počet budíků, které vám správce povolil. Abyste mohli budík přidat, musíte nejprve jeden odebrat.',
  'LBL_ADDING_DASHLET' => 'Přidávání budíku ...',
  'LBL_ADDED_DASHLET' => 'Budík přidán',
  'LBL_REMOVE_DASHLET_CONFIRM' => 'Jste si jist, že chcete budík odstranit ?',
  'LBL_REMOVING_DASHLET' => 'Odstranění budíku',
  'LBL_REMOVED_DASHLET' => 'Budík odstraněn',
  'LBL_DASHLET_CONFIGURE_GENERAL' => 'Obecné',
  'LBL_DASHLET_CONFIGURE_FILTERS' => 'Filtry',
  'LBL_DASHLET_CONFIGURE_MY_ITEMS_ONLY' => 'Pouze mé položky',
  'LBL_DASHLET_CONFIGURE_TITLE' => 'Titul',
  'LBL_DASHLET_CONFIGURE_DISPLAY_ROWS' => 'Počet řádků',
  'LBL_DASHLET_DELETE' => 'Smazat Sugar Dashlet',
  'LBL_DASHLET_REFRESH' => 'Obnovit Sugar Dashlet',
  'LBL_DASHLET_EDIT' => 'Upravit Sugar Dashlet',
  'LBL_TRAINING_TITLE' => 'Trénink',
  'LBL_CREATING_NEW_PAGE' => 'Vytvořit novou stránku...',
  'LBL_NEW_PAGE_FEEDBACK' => 'Stránka byla vytvořena. Můžete přidat nový obsah přes nabídku Přidat Sugar Dashlest.',
  'LBL_DELETE_PAGE_CONFIRM' => 'Určitě chcete smazat tuto stránku?',
  'LBL_SAVING_PAGE_TITLE' => 'Ukládání názvu stránky...',
  'LBL_RETRIEVING_PAGE' => 'Načítání stránky...',
  'LBL_HOME_PAGE_1_NAME' => 'Můj Sugar',
  'LBL_HOME_PAGE_2_NAME' => 'Prodej',
  'LBL_HOME_PAGE_3_NAME' => 'Podpora',
  'LBL_SEARCH' => 'Hledat',
  'LBL_CLEAR' => 'Smazat',
  'LBL_BASIC_CHARTS' => 'Základní grafy',
  'LBL_REPORT_CHARTS' => 'Grafy reportů',
  'LBL_MY_FAVORITE_REPORT_CHARTS' => 'Mé oblíbené reporty',
  'LBL_GLOBAL_REPORT_CHARTS' => 'Reporty globálního týmu',
  'LBL_MY_TEAM_REPORT_CHARTS' => 'Reporty mého týmu',
  'LBL_MY_SAVED_REPORT_CHARTS' => 'Mé uložené reporty',
  'LBL_DASHLET_SEARCH' => 'Hledej Sugar Dashlet',
  'LBL_VERSION' => 'Verze',
  'LBL_BUILD' => 'Stavět',
  'LBL_AND' => 'a',
  'LBL_ARE' => 'jsou',
  'LBL_TRADEMARKS' => 'ochranné známky',
  'LBL_OF' => 'z',
  'LBL_FOUNDERS' => 'Zakladatelé',
  'LBL_JOIN_SUGAR_COMMUNITY' => 'Připojte se k Sugar komunitě',
  'LBL_DETAILS_SUGARFORGE' => 'Spolupráce a rozvoj rozšíření Sugar',
  'LBL_DETAILS_SUGAREXCHANGE' => 'Nakupovat a prodávat certifikované rozšíření Sugar',
  'LBL_TRAINING' => 'Trénink',
  'LBL_DETAILS_TRAINING' => 'Přečtěte si více o Sugar pomocí online interaktivního vzdělávacího obsahu',
  'LBL_FORUMS' => 'Fórum',
  'LBL_DETAILS_FORUMS' => 'Diskuse nad Sugar s vývojáři a lidmi s komunity',
  'LBL_DETAILS_WIKI' => 'Vyhledávání ve znalostní databázi tvořenou uživateli a vývojáři',
  'LBL_DEVSITE' => 'Vývoj Sugar',
  'LBL_DETAILS_DEVSITE' => 'Objevte zdroje, návody a užitečné odkazy k rychlejšímu rozšiřování Sugar',
  'LBL_GET_SUGARCRM_RSS' => 'Získat SugarCRM RSS',
  'LBL_SUGARCRM_NEWS' => 'Zrávy SugarCRM',
  'LBL_SUGARCRM_TRAINING_NEWS' => 'Školení SugarCRM',
  'LBL_SUGARCRM_FORUMS' => 'SugarCRM Fórum',
  'LBL_SUGARFORGE_NEWS' => 'Novinky z SugarForge',
  'LBL_ALL_NEWS' => 'Všechny zprávy',
  'LBL_LINK_CURRENT_CONTRIBUTORS' => 'Aktuální seznam přispěvatelů Sugar!',
  'LBL_SOURCE_CODE' => 'Zdrojový kód',
  'LBL_SOURCE_TINYMCE' => 'TinyMCE - WYSIWYG editor pro webové prohlížeče který umožňuje úpravu HTML obsahů.',
  'LBL_SOURCE_EXT' => 'Ext - Klientský JavaScript framework pro vytváření webových aplikací.',
  'LBL_SOURCE_RECAPTCHA' => 'reCAPTCHA - CAPTCHA je zdarma. Pomáhá digitalizovat knihy, noviny a stará rádiová představení.',
  'LBL_SOURCE_TCPDF' => 'TCPDF - PHP třída pro generování PDF dokumentů.',
  'LBL_DASHLET_TITLE' => 'Moje stránky',
  'LBL_DASHLET_OPT_TITLE' => 'Název',
  'LBL_DASHLET_OPT_URL' => 'URL webové stránky',
  'LBL_DASHLET_OPT_HEIGHT' => 'Výška Dashlet (v pixelech)',
  'LBL_DASHLET_SUGAR_NEWS' => 'Zpravodajství Sugar',
  'LBL_DASHLET_DISCOVER_SUGAR_PRO' => 'Objevte Sugar',
  'dashlet_categories_dom' => 
  array (
    'Module Views' => 'Pohled na moduly',
    'Portal' => 'Portál',
    'Charts' => 'Grafy',
    'Tools' => 'Nástroje',
    'Miscellaneous' => 'Různé',
  ),
);

