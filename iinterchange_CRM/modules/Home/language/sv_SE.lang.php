<?php

/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/





if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


	
$mod_strings = array (
  'LBL_SOURCE_CSSMIN' => 'CssMin - En css kod och förminskare.',
  'LBL_SOURCE_PHPSAML' => 'PHP-SAML - En enkel SAML verktygslåda för PHP.',
  'LBL_SEARCH_RESULTS_IN' => 'in',
  'LBL_HOME_PAGE_4_NAME' => 'Tracker',
  'LBL_VERSION' => 'Version',
  'LBL_BUILD' => 'Build',
  'LBL_SUGAR_COMMUNITY_EDITION' => 'Sugar Community Edition',
  'LBL_SUGAR_PROFESSIONAL' => 'Sugar Professional',
  'LBL_SUGAR_ENTERPRISE' => 'Sugar Enterprise',
  'LBL_AND' => 'and',
  'LBL_ARE' => 'are',
  'LBL_TRADEMARKS' => 'trademarks',
  'LBL_OF' => 'of',
  'LBL_FOUNDERS' => 'Founders',
  'LBL_JOIN_SUGAR_COMMUNITY' => 'Join the Sugar Community',
  'LBL_DETAILS_SUGARFORGE' => 'Collaborate and develop Sugar extensions',
  'LBL_DETAILS_SUGAREXCHANGE' => 'Buy and sell certified Sugar extensions',
  'LBL_TRAINING' => 'Training',
  'LBL_DETAILS_TRAINING' => 'Learn about Sugar using online and interactive learning content',
  'LBL_FORUMS' => 'Forums',
  'LBL_DETAILS_FORUMS' => 'Discuss Sugar with expert community users and developers',
  'LBL_WIKI' => 'Wiki',
  'LBL_DETAILS_WIKI' => 'Search the knowledge base of user and developer topics',
  'LBL_DEVSITE' => 'Developer Site',
  'LBL_DETAILS_DEVSITE' => 'Discover resources, tutorials, and helpful links to get you up to speed on Sugar development',
  'LBL_GET_SUGARCRM_RSS' => 'Get SugarCRM RSS',
  'LBL_SUGARCRM_NEWS' => 'SugarCRM News',
  'LBL_SUGARCRM_TRAINING_NEWS' => 'SugarCRM Training News',
  'LBL_SUGARCRM_FORUMS' => 'SugarCRM Forums',
  'LBL_SUGARFORGE_NEWS' => 'SugarForge News',
  'LBL_ALL_NEWS' => 'All News',
  'LBL_LINK_CURRENT_CONTRIBUTORS' => 'Click this link for a current list of Sugar contributors!',
  'LBL_SOURCE_CODE' => 'Source Code',
  'LBL_SOURCE_SUGAR' => 'Sugar - The world\'s most popular sales force automation application created by SugarCRM Inc.',
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
  'LBL_SOURCE_TINYMCE' => 'TinyMCE - A WYSIWYG editor control for web browsers that enables the user to edit HTML contents',
  'LBL_SOURCE_EXT' => 'Ext - A client-side JavaScript framework for building web applications.',
  'dashlet_categories_dom' => 
  array (
    'Portal' => 'Portal',
    'Module Views' => 'Modul vy',
    'Charts' => 'Diagram',
    'Tools' => 'Verktyg',
    'Miscellaneous' => 'Diverse',
  ),
  'LBL_MODULE_NAME' => 'Hem',
  'LBL_MODULES_TO_SEARCH' => 'Moduler att söka i',
  'LBL_NEW_FORM_TITLE' => 'Ny kontakt',
  'LBL_FIRST_NAME' => 'Förnamn',
  'LBL_LAST_NAME' => 'Efternamn',
  'LBL_LIST_LAST_NAME' => 'Efternamn',
  'LBL_PHONE' => 'Telefon',
  'LBL_EMAIL_ADDRESS' => 'Epost:',
  'LBL_MY_PIPELINE_FORM_TITLE' => 'Min pipeline',
  'LBL_PIPELINE_FORM_TITLE' => 'Pipeline efter säljnivå',
  'LBL_CAMPAIGN_ROI_FORM_TITLE' => 'Kampanj ROI',
  'LBL_MY_CLOSED_OPPORTUNITIES_GAUGE' => 'Mätare över mina stängda affärsmöjligheter',
  'LNK_NEW_CONTACT' => 'Skapa kontakt',
  'LNK_NEW_ACCOUNT' => 'Skapa organisation',
  'LNK_NEW_OPPORTUNITY' => 'Skapa affärsmöjlighet',
  'LNK_NEW_QUOTE' => 'Skapa offert',
  'LNK_NEW_LEAD' => 'Skapa lead',
  'LNK_NEW_CASE' => 'Skapa ärende',
  'LNK_NEW_NOTE' => 'Skapa anteckning eller bilaga',
  'LNK_NEW_CALL' => 'Schemalägg telefonsamtal',
  'LNK_NEW_EMAIL' => 'Arkivera epost',
  'LNK_COMPOSE_EMAIL' => 'Skapa epost',
  'LNK_NEW_MEETING' => 'Schemalägg möte',
  'LNK_NEW_TASK' => 'Skapa uppgift',
  'LNK_NEW_BUG' => 'Rapportera bugg',
  'LBL_ADD_BUSINESSCARD' => 'Lägg till visitkort',
  'ERR_ONE_CHAR' => 'Var god fyll i minst en bokstav eller nummer för din sökning ...',
  'LBL_OPEN_TASKS' => 'Mina öppna uppgifter',
  'LBL_SEARCH_RESULTS' => 'Sökresultat',
  'LNK_NEW_SEND_EMAIL' => 'Skapa epost',
  'LBL_NO_ACCESS' => 'Du saknar behörighet att besöka detta område. Kontakta din administratör för att få behörighet.',
  'LBL_NO_RESULTS_IN_MODULE' => '-- Inga resultat --',
  'LBL_NO_RESULTS' => '<h2>Hittade inget resultat. Var god sök igen.</h2><br>',
  'LBL_NO_RESULTS_TIPS' => '<h3>Sök tips:</h3><ul><li>Var god kontrollera att du har valt rätt kategorier ovan.</li><li>Utöka ditt sökkriteria.</li><li>Om du inte finner det du söker, prova den avancerade sökningen.</li></ul>',
  'LBL_RELOAD_PAGE' => 'Var god <a href="javascript: window.location.reload()">ladda om sidan </a> för at använda dashleten.',
  'LBL_ADD_DASHLETS' => 'Lägg till dashlet',
  'LBL_ADD_PAGE' => 'Lägg till sida',
  'LBL_DEL_PAGE' => 'Radera sida',
  'LBL_WEBSITE_TITLE' => 'Hemsida',
  'LBL_RSS_TITLE' => 'Nyhetsflöde',
  'LBL_DELETE_PAGE' => 'Radera sida',
  'LBL_CHANGE_LAYOUT' => 'Ändra layout',
  'LBL_RENAME_PAGE' => 'Döp om sidan',
  'LBL_CLOSE_DASHLETS' => 'Stäng',
  'LBL_CLOSE_SITEMAP' => 'Stäng',
  'LBL_OPTIONS' => 'Alternativ',
  'LBL_TODAY' => 'Idag',
  'LBL_YESTERDAY' => 'Igår',
  'LBL_TOMORROW' => 'Imorgon',
  'LBL_LAST_WEEK' => 'Förra veckan',
  'LBL_NEXT_WEEK' => 'Nästa vecka',
  'LBL_LAST_7_DAYS' => 'Senaste 7 dagarna',
  'LBL_NEXT_7_DAYS' => 'Nästa 7 dagar',
  'LBL_LAST_MONTH' => 'Senaste månaden',
  'LBL_NEXT_MONTH' => 'Nästa månad',
  'LBL_LAST_QUARTER' => 'Senaste kvartalet',
  'LBL_THIS_QUARTER' => 'Det här kvartalet',
  'LBL_LAST_YEAR' => 'Senaste året',
  'LBL_NEXT_YEAR' => 'Nästa år',
  'LBL_LAST_30_DAYS' => 'Senaste 30 dagarna',
  'LBL_NEXT_30_DAYS' => 'Nästa 30 dagar',
  'LBL_THIS_MONTH' => 'Den här månaden',
  'LBL_THIS_YEAR' => 'Det här året',
  'LBL_MODULES' => 'Moduler',
  'LBL_CHARTS' => 'Diagram',
  'LBL_TOOLS' => 'Verktyg',
  'LBL_WEB' => 'Webb',
  'LBL_MAX_DASHLETS_REACHED' => 'Du har nått maximalt antal dashlets som din administratör har satt. Var god ta bort en dashlet för att kunna lägga till en ny.',
  'LBL_ADDING_DASHLET' => 'Lägger till dashlet ...',
  'LBL_ADDED_DASHLET' => 'Dashlet tillagd',
  'LBL_REMOVE_DASHLET_CONFIRM' => 'Är du säker på att du vill radera denna dashlet?',
  'LBL_REMOVING_DASHLET' => 'Raderar dashlet ...',
  'LBL_REMOVED_DASHLET' => 'Dashlet raderad',
  'LBL_DASHLET_CONFIGURE_GENERAL' => 'Allmän',
  'LBL_DASHLET_CONFIGURE_FILTERS' => 'Filter',
  'LBL_DASHLET_CONFIGURE_MY_ITEMS_ONLY' => 'Endast mina tilldelade objekt',
  'LBL_DASHLET_CONFIGURE_TITLE' => 'Titel',
  'LBL_DASHLET_CONFIGURE_DISPLAY_ROWS' => 'Visa rader',
  'LBL_DASHLET_DELETE' => 'Radera dashelt',
  'LBL_DASHLET_REFRESH' => 'Uppdatera dashlet',
  'LBL_DASHLET_EDIT' => 'Redigera dashlet',
  'LBL_TRAINING_TITLE' => 'Träning',
  'LBL_CREATING_NEW_PAGE' => 'Skapar ny sida...',
  'LBL_NEW_PAGE_FEEDBACK' => 'Du har skapat en ny sida. Du kan lägga till innehåll med hjälp av Lägg till Dahlet.',
  'LBL_DELETE_PAGE_CONFIRM' => 'Är du säker på att du vill radera sidan?',
  'LBL_SAVING_PAGE_TITLE' => 'Sparar sidans titel...',
  'LBL_RETRIEVING_PAGE' => 'Hämtar sida...',
  'LBL_HOME_PAGE_1_NAME' => 'Mitt Sugar',
  'LBL_HOME_PAGE_2_NAME' => 'Säljsida',
  'LBL_HOME_PAGE_3_NAME' => 'Marknad & Support sida',
  'LBL_HOME_PAGE_6_NAME' => 'Marknad',
  'LBL_SEARCH' => 'Sök',
  'LBL_CLEAR' => 'Rensa',
  'LBL_BASIC_CHARTS' => 'Enkelt diagram',
  'LBL_REPORT_CHARTS' => 'Diagramrapporter',
  'LBL_MY_FAVORITE_REPORT_CHARTS' => 'Mina favoritrapporter',
  'LBL_GLOBAL_REPORT_CHARTS' => 'Global team rapporter',
  'LBL_MY_TEAM_REPORT_CHARTS' => 'Mitt team\'s rapporter',
  'LBL_MY_SAVED_REPORT_CHARTS' => 'Mina sparade diagramrapporter',
  'LBL_DASHLET_SEARCH' => 'Sök dashlet',
  'LBL_SOURCE_XTEMPLATE' => 'XTemplate - A template engine for PHP created by BarnabÃ¡s Debreceni',
  'LBL_SOURCE_RECAPTCHA' => 'reCAPTCHA hjälper till att hindra övergrepp på din site (som till exempel span eller falska registreringar) genom en CAPTCHA genom att försäkra att bara människor kan göra vissa saker.',
  'LBL_SOURCE_TCPDF' => 'TCPDF - En PHP klass för att genera PDF dokument',
  'LBL_DASHLET_TITLE' => 'Mina sajter',
  'LBL_DASHLET_OPT_TITLE' => 'Titel',
  'LBL_DASHLET_OPT_URL' => 'Hemsideplats',
  'LBL_DASHLET_OPT_HEIGHT' => 'Dashlet höjd (i pixlar)',
  'LBL_DASHLET_SUGAR_NEWS' => 'Sugar Nyheter',
  'LBL_DASHLET_DISCOVER_SUGAR_PRO' => 'Upptäck Sugar',
);

