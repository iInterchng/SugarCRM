<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

	

$mod_strings = array (
  'LBL_DUNS' => 'DUNS',
  'LBL_FINSALES' => 'Finsales',
  'LBL_MARKET_CAP' => 'Market Cap',
  'LBL_MODIFY_SEARCH_DESC' => 'Select the connector fields to use to search for data for each module.',
  'LBL_PARENT_DUNS' => 'Parent DUNS',
  'LBL_QUOTE' => 'Quote',
  'LBL_ULTIMATE_PARENT_DUNS' => 'Ultimate Parent DUNS',
  'LBL_ADD_MODULE' => 'Įdėti',
  'LBL_ADDRCITY' => 'Miestas',
  'LBL_ADDRCOUNTRY' => 'Šalis',
  'LBL_ADDRCOUNTRY_ID' => 'Šalies Id',
  'LBL_ADDRSTATEPROV' => 'Rajonas',
  'LBL_ADMINISTRATION' => 'Jungties administravimas',
  'LBL_ADMINISTRATION_MAIN' => 'Jungties nustatymai',
  'LBL_AVAILABLE' => 'Prieinamas',
  'LBL_BACK' => '< Atgal',
  'LBL_COMPANY_ID' => 'Įmonės Id',
  'LBL_CONFIRM_CONTINUE_SAVE' => 'Kai kurie privalomi laukai buvo palikti tušti. Ar norite tęsti toliau ir išsaugoti?',
  'LBL_CONNECTOR' => 'Jungtis',
  'LBL_CONNECTOR_FIELDS' => 'Jungties laukai',
  'LBL_DATA' => 'Duomenys',
  'LBL_DEFAULT' => 'Numatytas',
  'LBL_DELETE_MAPPING_ENTRY' => 'Ar Jūs tikrai norite ištrinti šį įrašą?',
  'LBL_DISABLED' => 'Išjungtas',
  'LBL_EMPTY_BEANS' => 'Nėra įrašų pagal Jūsų pasirinktą paiešką.',
  'LBL_ENABLED' => 'Įjungtas',
  'LBL_EXTERNAL' => 'Leisti vartotojams sukurti išorinius prisijungimus šiai jungčiai. Taip pat šis nustatymas turi būti įjungtas Jungties nustatymų lange.',
  'LBL_MERGE' => 'Apjungti',
  'LBL_MODIFY_DISPLAY_TITLE' => 'Įjungti jungtis',
  'LBL_MODIFY_DISPLAY_DESC' => 'Pasirinkti kuriems moduliams yra įjungtos jungtys.',
  'LBL_MODIFY_DISPLAY_PAGE_TITLE' => 'Jungties nustatymai: Įjungti jungtis',
  'LBL_MODULE_FIELDS' => 'Modulio laukai',
  'LBL_MODIFY_MAPPING_TITLE' => 'Susieti jungties laukus',
  'LBL_MODIFY_MAPPING_DESC' => 'Susieti jungties laukus su modulio laukais, kad būtų nustatyti kokie jungties duomenys gali patekti į modulį.',
  'LBL_MODIFY_MAPPING_PAGE_TITLE' => 'Jungties nustatymai: Susieti jungties laukus',
  'LBL_MODIFY_PROPERTIES_TITLE' => 'Įvardinti jungties savybes',
  'LBL_MODIFY_PROPERTIES_DESC' => 'Nustatyti kiekvienos jungties savybes, kaip adresą ir API raktus.',
  'LBL_MODIFY_PROPERTIES_PAGE_TITLE' => 'Jungties nustatymai: Įvardinti jungties savybes',
  'LBL_MODIFY_SEARCH_TITLE' => 'Valdyti jungties paiešką',
  'LBL_MODIFY_SEARCH' => 'Ieškoti',
  'LBL_MODIFY_SEARCH_PAGE_TITLE' => 'Jungties nustatymai: Valdyti jungties paiešką',
  'LBL_MODULE_NAME' => 'Jungtys',
  'LBL_NO_PROPERTIES' => 'Šiai jungčiai nėra jokių nustatomų savybių.',
  'LBL_PREVIOUS' => '< Atgal',
  'LBL_RECNAME' => 'Įmonės pavadinimas',
  'LBL_RESET_TO_DEFAULT' => 'Atstatyti į pradinę padėtį',
  'LBL_RESET_TO_DEFAULT_CONFIRM' => 'Ar Jūs tikrai norite atstatyti į pradinius nustatymus?',
  'LBL_RESET_BUTTON_TITLE' => 'Atstatyti [Alt+R]',
  'LBL_RESULT_LIST' => 'Duomenų sąrašas',
  'LBL_RUN_WIZARD' => 'Paleisti vedlį',
  'LBL_SAVE' => 'Saugoti',
  'LBL_SEARCHING_BUTTON_LABEL' => 'Ieškomas...',
  'LBL_SHOW_IN_LISTVIEW' => 'Rodyti apjungimo sąraše',
  'LBL_SMART_COPY' => 'Smart kopijavimas',
  'LBL_SUMMARY' => 'Santrauka',
  'LBL_STEP1' => 'Ieškoti ir žiūrėti duomenis',
  'LBL_STEP2' => 'Apjungti įrašus su',
  'LBL_TEST_SOURCE' => 'Testuoti jungtį',
  'LBL_TEST_SOURCE_FAILED' => 'Nesėkmingas testas',
  'LBL_TEST_SOURCE_RUNNING' => 'Atlikti testą...',
  'LBL_TEST_SOURCE_SUCCESS' => 'Sėkmingas testas',
  'LBL_TITLE' => 'Duomenų apjungimas',
  'ERROR_RECORD_NOT_SELECTED' => 'Klaida: Prašome pasirinkti įrašą iš sąrašo.',
  'ERROR_EMPTY_WRAPPER' => 'Klaida: Unable to retrieve wrapper instance for the source [{$source_id}]',
  'ERROR_EMPTY_SOURCE_ID' => 'Klaida: Šaltinio Id nėra įvardintas arba yra tuščias.',
  'ERROR_EMPTY_RECORD_ID' => 'Klaida: Įrašo Id nėra įvardintas arba yra tuščias.',
  'ERROR_NO_ADDITIONAL_DETAIL' => 'Klaida: Nerasta papildomų įrašo detalių.',
  'ERROR_NO_SEARCHDEFS_DEFINED' => 'Jokie moduliai nebuvo įjungti šiai jungčiai. Pasirinkite modulį šiai jungčiai Jungčių įjungimo puslapyje.',
  'ERROR_NO_SEARCHDEFS_MAPPED' => 'Klaida: nėra įjungtų jungčių, kurios turėtų apibrėžtų paieškos laukų.',
  'ERROR_NO_SOURCEDEFS_FILE' => 'Klaida: sourcedefs.php failas nerastas.',
  'ERROR_NO_SOURCEDEFS_SPECIFIED' => 'Klaida: Nerastas šaltinis duomenų gavimui.',
  'ERROR_NO_CONNECTOR_DISPLAY_CONFIG_FILE' => 'Klaida: Nėra jungčių nurodytam moduliui.',
  'ERROR_NO_SEARCHDEFS_MAPPING' => 'Klaida: Nėra paieškos laukų nurodytam moduliui ir jungčiai. Prašome susisiekti su administratoriumi.',
  'ERROR_NO_FIELDS_MAPPED' => 'Klaida: Jūs turite nurodyti bent vieną Jungties lauką kiekvienam moduliui.',
  'ERROR_NO_DISPLAYABLE_MAPPED_FIELDS' => 'Klaida: Nėra modulio laukų, kurie būtų nurodyti rezultatų atvaizdavimui. Prašome susisiekti su administratoriumi.',
);

