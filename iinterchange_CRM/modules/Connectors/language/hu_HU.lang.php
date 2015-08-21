<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

	

$mod_strings = array (
  'LBL_EXTERNAL' => 'Felhasználók engedélyezése új külső fiók rekordok létrehozásához ehhez a kapcsolóhoz. Ennek használatához a megfelelő tulajdonságokat be kell állítani a Kapcsoló Tulajdonságok Beállítása oldalon.',
  'LBL_DUNS' => 'DUNS',
  'LBL_RESET_BUTTON_TITLE' => 'Reset [Alt+R]',
  'LBL_ADD_MODULE' => 'Hozzáadás',
  'LBL_ADDRCITY' => 'Város',
  'LBL_ADDRCOUNTRY' => 'Ország',
  'LBL_ADDRCOUNTRY_ID' => 'Ország azonosító',
  'LBL_ADDRSTATEPROV' => 'Állam',
  'LBL_ADMINISTRATION' => 'Csatlakozó adminisztrálás',
  'LBL_ADMINISTRATION_MAIN' => 'Csatlakozó beállítások',
  'LBL_AVAILABLE' => 'Elérhető',
  'LBL_BACK' => '< Vissza',
  'LBL_COMPANY_ID' => 'Cég azonosító',
  'LBL_CONFIRM_CONTINUE_SAVE' => 'Néhány kötelezően kitöltendő mező üresen maradt. Folytatja a mentést?',
  'LBL_CONNECTOR' => 'Kapcsoló',
  'LBL_CONNECTOR_FIELDS' => 'Kapcsoló mezők',
  'LBL_DATA' => 'Adat',
  'LBL_DEFAULT' => 'Alapértelmezett',
  'LBL_DELETE_MAPPING_ENTRY' => 'Biztosan törli ezt a bejegyzést?',
  'LBL_DISABLED' => 'Tiltott',
  'LBL_EMPTY_BEANS' => 'Nincs érvényes találat a keresési feltétel alapján.',
  'LBL_ENABLED' => 'Engedélyezett',
  'LBL_FINSALES' => 'Éves értékesítés',
  'LBL_MARKET_CAP' => 'Piaci kapitalizáció',
  'LBL_MERGE' => 'Összefűzés',
  'LBL_MODIFY_DISPLAY_TITLE' => 'Kapcsolatok engedélyezése',
  'LBL_MODIFY_DISPLAY_DESC' => 'Válassza ki azokat a modulokat, amelyeket engedélyez a kapcsolóhoz.',
  'LBL_MODIFY_DISPLAY_PAGE_TITLE' => 'Kapcsoló beállítás: Kapcsoló engedélyezve',
  'LBL_MODULE_FIELDS' => 'Modul mezők',
  'LBL_MODIFY_MAPPING_TITLE' => 'Modul mezők térképe',
  'LBL_MODIFY_MAPPING_DESC' => 'Kapcsoló mezők térképe a modul mezőkhöz annak érdekében, hagy a kapcsoló mezők megtekinthetők és beleolvaszthatók legyenek a modul rekordjaiba.',
  'LBL_MODIFY_MAPPING_PAGE_TITLE' => 'Kapcsoló beállítás: kapcsoló mezők térképe',
  'LBL_MODIFY_PROPERTIES_TITLE' => 'Kapcsoló beállítása',
  'LBL_MODIFY_PROPERTIES_DESC' => 'Állítsa be a csatlakozó beállításait, beleértve az URL-eket és az API kulcsokat.',
  'LBL_MODIFY_PROPERTIES_PAGE_TITLE' => 'Kapcsoló beállítások: Kapcsoló beállításai',
  'LBL_MODIFY_SEARCH_TITLE' => 'Csatlakozó keresés kezelés',
  'LBL_MODIFY_SEARCH' => 'Keresés',
  'LBL_MODIFY_SEARCH_DESC' => 'Válassza ki a kapcsoló mezőket az adatok kereséséhez az egyes modulokban.',
  'LBL_MODIFY_SEARCH_PAGE_TITLE' => 'Kapcsoló beállítások: Csatlakozó keresés kezelés',
  'LBL_MODULE_NAME' => 'Csatlakozók',
  'LBL_NO_PROPERTIES' => 'Nincsenek beállítva ennek a kapcsolónak a tulajdonságai.',
  'LBL_PARENT_DUNS' => 'Szülő DUNS',
  'LBL_PREVIOUS' => '< Vissza',
  'LBL_QUOTE' => 'Árajánlat',
  'LBL_RECNAME' => 'Cég neve',
  'LBL_RESET_TO_DEFAULT' => 'Alapértelmezés visszaállítása',
  'LBL_RESET_TO_DEFAULT_CONFIRM' => 'Biztosan visszaállítja az alapértelmezett beállításokat?',
  'LBL_RESULT_LIST' => 'Adatok',
  'LBL_RUN_WIZARD' => 'Varázsló futtatása',
  'LBL_SAVE' => 'Mentés',
  'LBL_SEARCHING_BUTTON_LABEL' => 'Keresés ...',
  'LBL_SHOW_IN_LISTVIEW' => 'Egyesített listakép megjelenítése',
  'LBL_SMART_COPY' => 'Okos másolás',
  'LBL_SUMMARY' => 'Összefoglaló',
  'LBL_STEP1' => 'Adat keresés és nézet',
  'LBL_STEP2' => 'Sorok egyesítése (-val)',
  'LBL_TEST_SOURCE' => 'Kapcsoló teszt',
  'LBL_TEST_SOURCE_FAILED' => 'Hibás teszt',
  'LBL_TEST_SOURCE_RUNNING' => 'Teszt végrehajtása...',
  'LBL_TEST_SOURCE_SUCCESS' => 'Sikeres teszt',
  'LBL_TITLE' => 'Adategyesítés',
  'LBL_ULTIMATE_PARENT_DUNS' => 'Utolsó szülő DUNS',
  'ERROR_RECORD_NOT_SELECTED' => 'Hiba: Válasszon a listából a folyamat indításához.',
  'ERROR_EMPTY_WRAPPER' => 'Hiba: nem lehet letölteni a forrást [{$source_id}]',
  'ERROR_EMPTY_SOURCE_ID' => 'Hiba: A forrás azonosító nincs meghatározva vagy üres.',
  'ERROR_EMPTY_RECORD_ID' => 'Hiba: A sor azonosító nincs meghatározva vagy üres.',
  'ERROR_NO_ADDITIONAL_DETAIL' => 'Hiba: A sorhoz nem találhatók további részletek.',
  'ERROR_NO_SEARCHDEFS_DEFINED' => 'Nincsenek modulok engedélyezve ehhez a kapcsolóhoz. Válasszon hozzá a kapcsoló engedélyezése oldalon.',
  'ERROR_NO_SEARCHDEFS_MAPPED' => 'Hiba: Nincsenek kapcsolók engedélyezve ahhoz, hogy kereső mezőket határozzon meg.',
  'ERROR_NO_SOURCEDEFS_FILE' => 'Hiba: A sourcedefs.php fájl nem található.',
  'ERROR_NO_SOURCEDEFS_SPECIFIED' => 'Hiba: Nincsenek források meghatározva az adatok letöltéséhez.',
  'ERROR_NO_CONNECTOR_DISPLAY_CONFIG_FILE' => 'Hiba: Nincs kapcsoló térkép ehhez a modulhoz.',
  'ERROR_NO_SEARCHDEFS_MAPPING' => 'Hiba: nincsenek kereső mezők rendelve a modulhoz és a kapcsolóhoz. Vegye fel a kapcsolatot a rendszer adminisztrátorral.',
  'ERROR_NO_FIELDS_MAPPED' => 'Hiba: Szükség van még legalább egy kapcsoló mező térképre a modul mezőkhöz a belépéshez.',
  'ERROR_NO_DISPLAYABLE_MAPPED_FIELDS' => 'Hiba: Nincsenek leképezett modul mezők a megjelenített eredményekben. Vegye fel a kapcsolatot a rendszer adminisztrátorral.',
);

