<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

	

$mod_strings = array (
  'LBL_COLON' => ':',
  'LBL_MINSS_ABBREV' => 'm',
  'LBL_OUTLOOK_ID' => 'Outlook ID',
  'LBL_SEND_BUTTON_KEY' => 'I',
  'ERR_DELETE_RECORD' => 'Įrašas turi būti nurodytas norint ištrinti susitikimą.',
  'LBL_ACCEPT_THIS' => 'Patvirtinti?',
  'LBL_ADD_BUTTON' => 'Pridėti',
  'LBL_ADD_INVITEE' => 'Pridėti dalyvius',
  'LBL_CONTACT_NAME' => 'Kontaktas:',
  'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontaktai',
  'LBL_CREATED_BY' => 'Sukūrė',
  'LBL_DATE_END' => 'Pabaigos data',
  'LBL_DATE_TIME' => 'Pradžios data ir laikas:',
  'LBL_DATE' => 'Pradžios data:',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Susitikimai',
  'LBL_DEL' => 'Trinti',
  'LBL_DESCRIPTION_INFORMATION' => 'Aprašymo informacija',
  'LBL_DESCRIPTION' => 'Aprašymas:',
  'LBL_DURATION_HOURS' => 'Trukmė valandomis:',
  'LBL_DURATION_MINUTES' => 'Trukmė minutėmis:',
  'LBL_DURATION' => 'Trukmė:',
  'LBL_EMAIL' => 'El. paštas',
  'LBL_FIRST_NAME' => 'Vardas',
  'LBL_HISTORY_SUBPANEL_TITLE' => 'Užrašai',
  'LBL_HOURS_ABBREV' => 'v',
  'LBL_HOURS_MINS' => '(valandos/minutės)',
  'LBL_INVITEE' => 'Dalyviai',
  'LBL_LAST_NAME' => 'Pavardė',
  'LBL_ASSIGNED_TO_NAME' => 'Atsakingas:',
  'LBL_LIST_ASSIGNED_TO_NAME' => 'Atsakingas',
  'LBL_LIST_CLOSE' => 'Uždaryti',
  'LBL_LIST_CONTACT' => 'Kontaktas',
  'LBL_LIST_DATE_MODIFIED' => 'Redagavimo data',
  'LBL_LIST_DATE' => 'Pražios data',
  'LBL_LIST_DIRECTION' => 'Kryptis',
  'LBL_LIST_DUE_DATE' => 'Terminas',
  'LBL_LIST_FORM_TITLE' => 'Susitikimų sąrašas',
  'LBL_LIST_MY_MEETINGS' => 'Mano susitikimai',
  'LBL_LIST_RELATED_TO' => 'Susijęs su',
  'LBL_LIST_STATUS' => 'Statusas',
  'LBL_LIST_SUBJECT' => 'Tema',
  'LBL_LIST_TIME' => 'Pradžios laikas',
  'LBL_LEADS_SUBPANEL_TITLE' => 'Potencialūs kontaktai',
  'LBL_LOCATION' => 'Vieta:',
  'LBL_MEETING' => 'Susitikimas:',
  'LBL_MODIFIED_BY' => 'Redagavo',
  'LBL_MODULE_NAME' => 'Susitikimai',
  'LBL_MODULE_TITLE' => 'Susitikimai: Pradžia',
  'LBL_NAME' => 'Pavadinimas',
  'LBL_NEW_FORM_TITLE' => 'Sukurti paskyrimą',
  'LBL_PHONE' => 'Darbovietės telefonas:',
  'LBL_REMINDER_TIME' => 'Priminimo laikas',
  'LBL_REMINDER' => 'Priminimas:',
  'LBL_REMOVE' => 'trinti',
  'LBL_SCHEDULING_FORM_TITLE' => 'Suplanuojama',
  'LBL_SEARCH_BUTTON' => 'Ieškoti',
  'LBL_SEARCH_FORM_TITLE' => 'Ieškoti susitikimo',
  'LBL_SEND_BUTTON_LABEL' => 'Siųsti pakvietimus',
  'LBL_SEND_BUTTON_TITLE' => 'Siųsti pakvietimus [Alternatyvus+I]',
  'LBL_STATUS' => 'Statusas:',
  'LBL_TYPE' => 'Tipas:',
  'LBL_PASSWORD' => 'Slaptažodis',
  'LBL_URL' => 'Pradėti/Prisijungti prie susitikimo',
  'LBL_CREATOR' => 'Susitikimo sukūrėjas',
  'LBL_EXTERNALID' => 'Išorinis App ID',
  'LBL_SUBJECT' => 'Tema:',
  'LBL_TIME' => 'Pradžios laikas:',
  'LBL_USERS_SUBPANEL_TITLE' => 'Vartotojai',
  'LBL_ACTIVITIES_REPORTS' => 'Priminimų ataskaita',
  'LNK_MEETING_LIST' => 'Susitikimai',
  'LNK_NEW_APPOINTMENT' => 'Sukurti paskyrimą',
  'LNK_NEW_MEETING' => 'Suplanuoti susitikimą',
  'LNK_IMPORT_MEETINGS' => 'Importuoti susitikimus',
  'NTC_REMOVE_INVITEE' => 'Ar tikrai norite pašalinti dalyvį iš susitikimo?',
  'LBL_CREATED_USER' => 'Sukūrė',
  'LBL_MODIFIED_USER' => 'Redagavo',
  'NOTICE_DURATION_TIME' => 'Trukmės periodas turi būti daugiau už 0',
  'LBL_MEETING_INFORMATION' => 'Susitikimo informacija',
  'LBL_LIST_JOIN_MEETING' => 'Prisijungti prie susitikimo',
  'LBL_JOIN_EXT_MEETING' => 'Prisijungti prie susitikimo',
  'LBL_HOST_EXT_MEETING' => 'Pradėti susitikimą',
  'LBL_EXTNOT_HEADER' => 'Klaida: nepakviestas',
  'LBL_EXTNOT_MAIN' => 'Jūs negalite prisijungti prie šio susitikimo, nes nesate dalyvis.',
  'LBL_EXTNOT_RECORD_LINK' => 'Žiūrėti susitikimą',
  'LBL_EXTNOT_GO_BACK' => 'Grįžti atgal',
  'LBL_EXTNOSTART_HEADER' => 'Klaida: negalima pradėti susitikimo',
  'LBL_EXTNOSTART_MAIN' => 'Jūs negalite pradėti šio susitikimo, nes nesate administratorius arba susitikimo savininkas.',
);

