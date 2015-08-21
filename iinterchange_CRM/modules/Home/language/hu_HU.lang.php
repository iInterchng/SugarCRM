<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

	

$mod_strings = array (
  'LBL_WEB' => 'Web',
  'LBL_HOME_PAGE_6_NAME' => 'Marketing',
  'LBL_SUGAR_COMMUNITY_EDITION' => 'Sugar Community Edition',
  'LBL_SUGAR_PROFESSIONAL' => 'Sugar Professional',
  'LBL_SUGAR_ENTERPRISE' => 'Sugar Enterprise',
  'LBL_WIKI' => 'Wiki',
  'LBL_MODULE_NAME' => 'Főoldal',
  'LBL_MODULES_TO_SEARCH' => 'Modulok keresése',
  'LBL_NEW_FORM_TITLE' => 'Új kapcsolat',
  'LBL_FIRST_NAME' => 'Keresztnév:',
  'LBL_LAST_NAME' => 'Vezetéknév:',
  'LBL_LIST_LAST_NAME' => 'Vezetéknév',
  'LBL_PHONE' => 'Telefon:',
  'LBL_EMAIL_ADDRESS' => 'Email:',
  'LBL_MY_PIPELINE_FORM_TITLE' => 'Adatcsatornám',
  'LBL_PIPELINE_FORM_TITLE' => 'Adatcsatorna - Eladások szerint',
  'LBL_CAMPAIGN_ROI_FORM_TITLE' => 'Kampány megtérülése',
  'LBL_MY_CLOSED_OPPORTUNITIES_GAUGE' => 'Lezárt, sikeres lehetőségeim mutatója',
  'LNK_NEW_CONTACT' => 'Kapcsolat létrehozása',
  'LNK_NEW_ACCOUNT' => 'Kliens létrehozása',
  'LNK_NEW_OPPORTUNITY' => 'Lehetőség létrehozása',
  'LNK_NEW_QUOTE' => 'Árajánlat létrehozása',
  'LNK_NEW_LEAD' => 'Ajánlás létrehozása',
  'LNK_NEW_CASE' => 'Eset létrehozása',
  'LNK_NEW_NOTE' => 'Feljegyzés vagy csatolmány létrehozása',
  'LNK_NEW_CALL' => 'Hívás naplózása',
  'LNK_NEW_EMAIL' => 'Email archíválása',
  'LNK_COMPOSE_EMAIL' => 'Email írása',
  'LNK_NEW_MEETING' => 'Találkozó ütemezése',
  'LNK_NEW_TASK' => 'Feladat létrehozása',
  'LNK_NEW_BUG' => 'Hibajelentés',
  'LBL_ADD_BUSINESSCARD' => 'Adja meg a névjegykártya adatait',
  'ERR_ONE_CHAR' => 'Kérjük, adjon meg legalább egy betűt vagy számot a keresésre ...',
  'LBL_OPEN_TASKS' => 'Nyitott feladataim',
  'LBL_SEARCH_RESULTS' => 'Keresés eredménye',
  'LBL_SEARCH_RESULTS_IN' => 'A',
  'LNK_NEW_SEND_EMAIL' => 'Email írása',
  'LBL_NO_ACCESS' => 'Ön nem férhet hozzá ehhez az oldalhoz. Lépjen kapcsolatba a webhely rendszergazdájával, a hozzáféréshez',
  'LBL_NO_RESULTS_IN_MODULE' => '-- Nincs találat --',
  'LBL_NO_RESULTS' => 'Nem volt találat. Kérjük, keressen újra!',
  'LBL_NO_RESULTS_TIPS' => 'Győződjön meg róla, hogy a megfelelő kategóriát választotta ki.<br />Bővítse a keresési feltételeket.<br />Ha még mindig nem talál semmilyen eredményt próbálja meg a speciális keresési lehetőséget.',
  'LBL_RELOAD_PAGE' => 'Kérjük, frissítse az ablakot , hogy használni tudja ezt a Sugar Dashlet-et.',
  'LBL_ADD_DASHLETS' => 'Sugar Dashletek hozzáadása',
  'LBL_ADD_PAGE' => 'Oldal hozzáadása',
  'LBL_DEL_PAGE' => 'Oldal törlése',
  'LBL_WEBSITE_TITLE' => 'Honlap',
  'LBL_RSS_TITLE' => 'Hírforrás',
  'LBL_DELETE_PAGE' => 'Oldal törlése',
  'LBL_CHANGE_LAYOUT' => 'Elrendezés váltása',
  'LBL_RENAME_PAGE' => 'Oldal átnevezése',
  'LBL_CLOSE_DASHLETS' => 'Bezár',
  'LBL_CLOSE_SITEMAP' => 'Bezár',
  'LBL_OPTIONS' => 'Opciók',
  'LBL_TODAY' => 'Ma',
  'LBL_YESTERDAY' => 'Tegnap',
  'LBL_TOMORROW' => 'Holnap',
  'LBL_LAST_WEEK' => 'Múlt hét',
  'LBL_NEXT_WEEK' => 'Következő hét',
  'LBL_LAST_7_DAYS' => 'Utolsó 7 nap',
  'LBL_NEXT_7_DAYS' => 'Következő 7 nap',
  'LBL_LAST_MONTH' => 'Múlt hónap',
  'LBL_NEXT_MONTH' => 'Következő hónap',
  'LBL_LAST_QUARTER' => 'Elmúlt negyedév',
  'LBL_THIS_QUARTER' => 'Aktuális negyedév',
  'LBL_LAST_YEAR' => 'Múlt év',
  'LBL_NEXT_YEAR' => 'Következő év',
  'LBL_LAST_30_DAYS' => 'Elmúlt 30 nap',
  'LBL_NEXT_30_DAYS' => 'Következő 30 nap',
  'LBL_THIS_MONTH' => 'Aktuális hónap',
  'LBL_THIS_YEAR' => 'Aktuális év',
  'LBL_MODULES' => 'Modulok',
  'LBL_CHARTS' => 'Grafikonok',
  'LBL_TOOLS' => 'Eszközök',
  'LBL_MAX_DASHLETS_REACHED' => 'Elérte Sugar Dashlet-ek maximális számát. Kérjük, távolítson el egy Sugar Dashlet-et mielőtt létrehoz egy újat!',
  'LBL_ADDING_DASHLET' => 'Sugar Dashlet hozzáadása...',
  'LBL_ADDED_DASHLET' => 'Sugar Dashlet hozzáadva',
  'LBL_REMOVE_DASHLET_CONFIRM' => 'Biztosan el akarja távolítani a Sugar Dashlet-et?',
  'LBL_REMOVING_DASHLET' => 'Sugar Dashlet eltávolítása...',
  'LBL_REMOVED_DASHLET' => 'Sugar Dashlet eltávolítva',
  'LBL_DASHLET_CONFIGURE_GENERAL' => 'Általános',
  'LBL_DASHLET_CONFIGURE_FILTERS' => 'Szűrők',
  'LBL_DASHLET_CONFIGURE_MY_ITEMS_ONLY' => 'Csak a saját tételeim',
  'LBL_DASHLET_CONFIGURE_TITLE' => 'Titulus',
  'LBL_DASHLET_CONFIGURE_DISPLAY_ROWS' => 'Sorok megjelenítése',
  'LBL_DASHLET_DELETE' => 'Sugar Dashlet törlése',
  'LBL_DASHLET_REFRESH' => 'Sugar Dashlet frissítése',
  'LBL_DASHLET_EDIT' => 'Sugar Dashlet szerkesztése',
  'LBL_TRAINING_TITLE' => 'Tréning',
  'LBL_CREATING_NEW_PAGE' => 'Új oldal létrehozása...',
  'LBL_NEW_PAGE_FEEDBACK' => 'Ön létrehozott egy új oldalt. Felvehet új tartalmat Sugar Dashlet-opcióként.',
  'LBL_DELETE_PAGE_CONFIRM' => 'Valóban törölni akarja ezt a lapot?',
  'LBL_SAVING_PAGE_TITLE' => 'Az oldal címének mentése...',
  'LBL_RETRIEVING_PAGE' => 'Oldal visszaállítása...',
  'LBL_HOME_PAGE_1_NAME' => 'Portálom',
  'LBL_HOME_PAGE_2_NAME' => 'Eladások',
  'LBL_HOME_PAGE_3_NAME' => 'Támogatás',
  'LBL_HOME_PAGE_4_NAME' => 'Követés',
  'LBL_SEARCH' => 'Keres',
  'LBL_CLEAR' => 'Töröl',
  'LBL_BASIC_CHARTS' => 'Alap diagramok',
  'LBL_REPORT_CHARTS' => 'Diagramok lekérése',
  'LBL_MY_FAVORITE_REPORT_CHARTS' => 'Kedvenc jelentéseim',
  'LBL_GLOBAL_REPORT_CHARTS' => 'Globális csoport jelentései',
  'LBL_MY_TEAM_REPORT_CHARTS' => 'Csoportom jelentései',
  'LBL_MY_SAVED_REPORT_CHARTS' => 'Mentett jelentéseim',
  'LBL_DASHLET_SEARCH' => 'Sugar Dashlet keresés',
  'LBL_VERSION' => 'Verzió',
  'LBL_BUILD' => 'Felépít',
  'LBL_AND' => 'és',
  'LBL_ARE' => 'van(nak)',
  'LBL_TRADEMARKS' => 'védjegyek',
  'LBL_OF' => 'A',
  'LBL_FOUNDERS' => 'Szerzők',
  'LBL_JOIN_SUGAR_COMMUNITY' => 'Belépés a Sugar Community-be',
  'LBL_DETAILS_SUGARFORGE' => 'Sugar-bővítmények felhasználása és fejlesztése',
  'LBL_DETAILS_SUGAREXCHANGE' => 'Tanúsított Sugar-bővítések vétele és eladása',
  'LBL_TRAINING' => 'Tréning',
  'LBL_DETAILS_TRAINING' => 'Tudjon meg többet a Sugarról az online és interaktív tananyagból',
  'LBL_FORUMS' => 'Fórumok',
  'LBL_DETAILS_FORUMS' => 'Beszélgessen a Sugar-ról szakértőkkel és fejlesztőkkel',
  'LBL_DETAILS_WIKI' => 'Alapismeretek keresése a fejlesztői és felhasználói topikokban',
  'LBL_DEVSITE' => 'Fejlesztői oldal',
  'LBL_DETAILS_DEVSITE' => 'Fedezze fel a forrásokat, tananyagokat, és hasznos linkeket, hogy gyorsan tudja Sugar rendszert fejleszteni',
  'LBL_GET_SUGARCRM_RSS' => 'SugarCRM RSS létrehozása',
  'LBL_SUGARCRM_NEWS' => 'SugarCRM Hírek',
  'LBL_SUGARCRM_TRAINING_NEWS' => 'SugarCRM Tréning Hírek',
  'LBL_SUGARCRM_FORUMS' => 'SugarCRM Fórumok',
  'LBL_SUGARFORGE_NEWS' => 'SugarForge hírek',
  'LBL_ALL_NEWS' => 'Összes hír',
  'LBL_LINK_CURRENT_CONTRIBUTORS' => 'Erre a hivatkozásra kattintva egy aktuális listát kapsz a Sugar hozzászólókról!',
  'LBL_SOURCE_CODE' => 'Forráskód',
  'LBL_SOURCE_SUGAR' => 'Sugar - A világ legnépszerűbb Sales Force Automation alkalmazása. Fejleszti a SugarCRM Inc.',
  'LBL_SOURCE_XTEMPLATE' => 'XTemplate - Egy sablon motor PHP-ben. Létrehozta Debreceni Barnabás',
  'LBL_SOURCE_NUSOAP' => 'NuSOAP - készlet PHP-hez ami lehetővé teszi a fejlesztők számára webszervizek készítését. Készítette NuSphere Corporation és Dietrich Ayala',
  'LBL_SOURCE_JSCALENDAR' => 'JS naptár - Naptár dátumok beviteléhez. Készítette Mihai Bazon',
  'LBL_SOURCE_PHPPDF' => 'PHP PDF - Könyvtár PDF dokumentumok készítéséhez. Készítette Wayne Munro',
  'LBL_SOURCE_JSONPHP' => 'JSON.php - PHP parancsállomány JSON adatformátum konvertálásához. Készítette Michal Migurski',
  'LBL_SOURCE_JSON' => 'JSON.js - JSON szintaktikai elemző JavaScript-ben',
  'LBL_SOURCE_HTTP_WEBDAV_SERVER' => 'HTTP-WebDav_Server - WebDAV szerver megvalósítás PHP-ben',
  'LBL_SOURCE_JS_O_LAIT' => 'JavaScript O LAit - Könyvtár újrafelhasználható modulokkal és komponensekkel JavaScript-hez. Készítette Jan-Klaas Kollhof',
  'LBL_SOURCE_PCLZIP' => 'PcIZip - Könyvtár tömörítő és kicsomagoló funkciókkal ZIP formátumú mentésekhez. Készítette Vincent Blavet',
  'LBL_SOURCE_SMARTY' => 'Smarty - Minta modul PHP-hez',
  'LBL_SOURCE_OVERLIBMWS' => 'Overlibmws - JavaScript könyvtár felhasználó oldali ablakokhoz',
  'LBL_SOURCE_YAHOO_UI_LIB' => 'Yahoo! User Interface Library - UI Library Utilities elősegíti a kliens oldali felhasználás megvalósítását',
  'LBL_SOURCE_PHPMAILER' => 'PHPMailer - Mindenre kiterjedő email továbbítás PHP-hez',
  'LBL_SOURCE_CRYPT_BLOWFISH' => 'Crypt_Blowfish - Lehetővé teszi a kétirányú szimmetrikus blokkrejtjel titkosítást anélkül hogy megkövetelné a MCrypt PHP bővítést.',
  'LBL_SOURCE_HTML_SAFE' => 'HTML_Safe - Szintaktikai elemző ami megmutat minden lehetséges hibás tartalmat a HTML-ben',
  'LBL_SOURCE_XML_HTMLSAX3' => 'XML_HTMLSax3 - SAX szintaktikai elemző HTML-hez és hibásan formázott XML dokumentumokhoz',
  'LBL_SOURCE_YAHOO_UI_LIB_EXT' => 'Yahoo! UI Extensions Library - Kiterjesztés Yahoo! felhasználói felület könyvtárhoz. Készítette Jack Slocum',
  'LBL_SOURCE_JSMIN' => 'JSMin - Szűrő a megjegyzések és a szükségtelen üres helyek eltávolításához JavaScript állományokból.',
  'LBL_SOURCE_SWFOBJECT' => 'SWFObject - Javascript Flash Player parancsfájl felismeréséhez és beágyazásához.',
  'LBL_SOURCE_TINYMCE' => 'TinyMCE - WYSIWYG szerkesztő ellenőrző azon böngészőkhöz, amelyek lehetővé teszik a felhasználónak HTML tartalmak szerkesztését.',
  'LBL_SOURCE_EXT' => 'Ext - Felhasználó oldali JavaSceipt keretrendszer webes alkalmazások készítéséhez.',
  'LBL_SOURCE_RECAPTCHA' => 'reCAPTCHA - Ingyenes CAPTCHA szervíz könyvek, újságok és régi rádiós műsorok digitalizálásához.',
  'LBL_SOURCE_TCPDF' => 'TCPDF - PHP gyűjtemény PDF dokumentumok készítéséhez.',
  'LBL_SOURCE_CSSMIN' => 'CssMin - css szintaktikai elemző',
  'LBL_SOURCE_PHPSAML' => 'PHP-SAML - Egyszerű SAML csomag PHP-hez',
  'LBL_SOURCE_ISCROLL' => 'iScroll - Túlcsordulás: scroll mobil csomaghoz. Natív görgetési lehetőség fix szélességű/magasságú elemen belül.',
  'LBL_SOURCE_FLASHCANVAS' => 'FlashCanvas - FlashCanvas egy JavaScript könyvtár, amely HTML5 Canvas támogatást ad Internet Exprorer-hez. A Flash rajzoló API segítségével legenerálja a görbéket és a képeket. Támogatja az összes Canvas API-t, és a legtöbb esetben jóval gyorsabb, mint a hasonló VML vagy Silverlight megoldásokat használó könyvtárak.',
  'LBL_SOURCE_JIT' => 'JavaScript InfoVis - Ez a csomag a weben megjelenő Interaktív Adat Vizualizációk létrehozásához (megjelenítéséhez) nyújt támogatást.',
  'LBL_DASHLET_TITLE' => 'Oldalaim',
  'LBL_DASHLET_OPT_TITLE' => 'Titulus',
  'LBL_DASHLET_OPT_URL' => 'Weboldal helye',
  'LBL_DASHLET_OPT_HEIGHT' => 'Dashlet magasság (képpontban)',
  'LBL_DASHLET_SUGAR_NEWS' => 'Sugar hírek',
  'LBL_DASHLET_DISCOVER_SUGAR_PRO' => 'A Sugar felfedezése',
  'dashlet_categories_dom' => 
  array (
    'Module Views' => 'Modul nézetek',
    'Portal' => 'Portál',
    'Charts' => 'Diagramok',
    'Tools' => 'Eszközök',
    'Miscellaneous' => 'Vegyes',
  ),
);

