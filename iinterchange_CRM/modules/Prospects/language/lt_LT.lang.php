<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

	

$mod_strings = array (
  'LBL_INVITEE' => 'Pavaldiniai',
  'db_last_name' => 'LBL_LIST_LAST_NAME',
  'db_first_name' => 'LBL_LIST_FIRST_NAME',
  'db_title' => 'LBL_LIST_TITLE',
  'db_email1' => 'LBL_LIST_EMAIL_ADDRESS',
  'db_email2' => 'LBL_LIST_OTHER_EMAIL_ADDRESS',
  'LBL_CONVERT_BUTTON_KEY' => 'V',
  'LBL_MODULE_NAME' => 'Adresatai',
  'LBL_MODULE_ID' => 'Adresatai',
  'LBL_MODULE_TITLE' => 'Adresatai: pradžia',
  'LBL_SEARCH_FORM_TITLE' => 'Adresato paieška',
  'LBL_LIST_FORM_TITLE' => 'Adresatų sąrašas',
  'LBL_NEW_FORM_TITLE' => 'Naujas adresatas',
  'LBL_PROSPECT' => 'Adresatas:',
  'LBL_BUSINESSCARD' => 'Verslo kortelė',
  'LBL_LIST_NAME' => 'Vardas',
  'LBL_LIST_LAST_NAME' => 'Pavardė',
  'LBL_LIST_PROSPECT_NAME' => 'Adresato vardas',
  'LBL_LIST_TITLE' => 'Pareigybės',
  'LBL_LIST_EMAIL_ADDRESS' => 'El. paštas',
  'LBL_LIST_OTHER_EMAIL_ADDRESS' => 'Kitas el.paštas',
  'LBL_LIST_PHONE' => 'Telefonas',
  'LBL_LIST_PROSPECT_ROLE' => 'Rolė',
  'LBL_LIST_FIRST_NAME' => 'Vardas',
  'LBL_ASSIGNED_TO_NAME' => 'Atsakingas',
  'LBL_ASSIGNED_TO_ID' => 'Atsakingas:',
  'LBL_CAMPAIGN_ID' => 'Kampanijos ID',
  'LBL_EXISTING_PROSPECT' => 'Panaudotas esamas kontaktas',
  'LBL_CREATED_PROSPECT' => 'Sukurtas naujas kontaktas',
  'LBL_EXISTING_ACCOUNT' => 'Panaudotas esamas klientas',
  'LBL_CREATED_ACCOUNT' => 'Sukurtas naujas klientas',
  'LBL_CREATED_CALL' => 'Sukurtas naujas skambutis',
  'LBL_CREATED_MEETING' => 'Sukurtas naujas susitikimas',
  'LBL_ADDMORE_BUSINESSCARD' => 'pridėkite dar vieną verslo kortelę',
  'LBL_ADD_BUSINESSCARD' => 'Įveskite verslo kortelę',
  'LBL_NAME' => 'Vardas:',
  'LBL_FULL_NAME' => 'Pilnas vardas',
  'LBL_PROSPECT_NAME' => 'Adresato vardas:',
  'LBL_PROSPECT_INFORMATION' => 'Adresato informacija',
  'LBL_MORE_INFORMATION' => 'Daugiau informacijos',
  'LBL_FIRST_NAME' => 'Vardas:',
  'LBL_OFFICE_PHONE' => 'Telefonas:',
  'LBL_ANY_PHONE' => 'Telefonas:',
  'LBL_PHONE' => 'Telefonas:',
  'LBL_LAST_NAME' => 'Pavardė:',
  'LBL_MOBILE_PHONE' => 'Mobilus:',
  'LBL_HOME_PHONE' => 'Namų:',
  'LBL_OTHER_PHONE' => 'Kitas telefonas:',
  'LBL_FAX_PHONE' => 'Faksas:',
  'LBL_PRIMARY_ADDRESS_STREET' => 'Pagrindinio adreso gatvė:',
  'LBL_PRIMARY_ADDRESS_CITY' => 'Pagrindinio adreso miestas:',
  'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Pagrindinio adreso šalis:',
  'LBL_PRIMARY_ADDRESS_STATE' => 'Pagrindinio adreso gyvenvietė:',
  'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Pagrindinio adreso pašto kodas:',
  'LBL_ALT_ADDRESS_STREET' => 'Kito adreso gatvė:',
  'LBL_ALT_ADDRESS_CITY' => 'Kito adreso miestas:',
  'LBL_ALT_ADDRESS_COUNTRY' => 'Kito adreso šalis:',
  'LBL_ALT_ADDRESS_STATE' => 'Kito adreso rajonas:',
  'LBL_ALT_ADDRESS_POSTALCODE' => 'Kito adreso pašto kodas:',
  'LBL_TITLE' => 'Pareigybės:',
  'LBL_DEPARTMENT' => 'Skyrius:',
  'LBL_BIRTHDATE' => 'Gimtadienis:',
  'LBL_EMAIL_ADDRESS' => 'El.paštas:',
  'LBL_OTHER_EMAIL_ADDRESS' => 'Kitas el.paštas:',
  'LBL_ANY_EMAIL' => 'El.paštas:',
  'LBL_ASSISTANT' => 'Asistentas:',
  'LBL_ASSISTANT_PHONE' => 'Asistento telefonas:',
  'LBL_DO_NOT_CALL' => 'Neskambinti:',
  'LBL_EMAIL_OPT_OUT' => 'Nesiųsti el. pašto:',
  'LBL_PRIMARY_ADDRESS' => 'Pagrindinis adresas:',
  'LBL_ALTERNATE_ADDRESS' => 'Kitas adresas:',
  'LBL_ANY_ADDRESS' => 'Bet koks adresas:',
  'LBL_CITY' => 'Miestas:',
  'LBL_STATE' => 'Rajonas:',
  'LBL_POSTAL_CODE' => 'Pašto kodas:',
  'LBL_COUNTRY' => 'Šalis:',
  'LBL_DESCRIPTION_INFORMATION' => 'Aprašymo informacija',
  'LBL_ADDRESS_INFORMATION' => 'Adreso informacija',
  'LBL_DESCRIPTION' => 'Aprašymas:',
  'LBL_PROSPECT_ROLE' => 'Rolė',
  'LBL_OPP_NAME' => 'Pardavimo pavadinimas:',
  'LBL_IMPORT_VCARD' => 'Importuoti vizitinę kortelę',
  'LBL_IMPORT_VCARDTEXT' => 'Automatiškai sukurti naują kontaktą importuojant vizitinę kortelę.',
  'LBL_DUPLICATE' => 'Galimas adresatų dubliavimas',
  'MSG_SHOW_DUPLICATES' => 'Sukuriant šį kontaktą gali būti sukurtas dublikatas. Galite paspausti Saugoti ir tęsti kuriant naują kontaktą arba galite paspausti  Atšaukti.',
  'MSG_DUPLICATE' => 'Sukuriant šį kontaktą gali būti sukurtas dublikatas. Jūs galite pasirinkti kontaktą iš sąrašo arba galite paspausti Saugoti  ir tęsti naujo kontakto kūrimą su anksčiau įvestais duomenimis.',
  'LNK_IMPORT_VCARD' => 'Sukurti iš vizitinės kortelės',
  'LNK_NEW_ACCOUNT' => 'Sukurti klientą',
  'LNK_NEW_OPPORTUNITY' => 'Sukurti pardavimą',
  'LNK_NEW_CASE' => 'Sukurti aptarnavimą',
  'LNK_NEW_NOTE' => 'Sukurti užrašą',
  'LNK_NEW_CALL' => 'Suplanuoti skambutį',
  'LNK_NEW_EMAIL' => 'Archyvuoti el. paštą',
  'LNK_NEW_MEETING' => 'Suplanuoti susitikimą',
  'LNK_NEW_TASK' => 'Sukurti užduotį',
  'LNK_NEW_APPOINTMENT' => 'Sukurti paskyrimą',
  'LNK_IMPORT_PROSPECTS' => 'Importuoti adresatus',
  'NTC_DELETE_CONFIRMATION' => 'Ar tikrai norite ištrinti šį įrašą?',
  'NTC_REMOVE_CONFIRMATION' => 'Ar tikrai norite išmesti šį kontaktą iš aptarnavimo ?',
  'NTC_REMOVE_DIRECT_REPORT_CONFIRMATION' => 'Ar tikrai norite išmesti šį įrašą kaip pavaldinį?',
  'ERR_DELETE_RECORD' => 'Įrašo numeris turi būti nurodytas norint ištrinti kontaktą.',
  'NTC_COPY_PRIMARY_ADDRESS' => 'Kopijuoti pirminį adresą į alternatyvų adresą',
  'NTC_COPY_ALTERNATE_ADDRESS' => 'Kopijuoti alternatyvų adresą į pirminį adresą',
  'LBL_SALUTATION' => 'Sveikinimas',
  'LBL_SAVE_PROSPECT' => 'Išsaugoti adresatą',
  'LBL_CREATED_OPPORTUNITY' => 'Sukūrė naują pardavimą',
  'NTC_OPPORTUNITY_REQUIRES_ACCOUNT' => 'Kuriant pardavimą reikia kliento.\\n  Prašome sukurti naują klientą arba pasirinkite jau esamą.',
  'LNK_SELECT_ACCOUNT' => 'Pasirinkite klientą',
  'LNK_NEW_PROSPECT' => 'Sukurti adresatą',
  'LNK_PROSPECT_LIST' => 'Adresatai',
  'LNK_NEW_CAMPAIGN' => 'Sukurti kampaniją',
  'LNK_CAMPAIGN_LIST' => 'Kampanijos',
  'LNK_NEW_PROSPECT_LIST' => 'Sukurti adresatų sąrašą',
  'LNK_PROSPECT_LIST_LIST' => 'Adresatų sąrašas',
  'LNK_IMPORT_PROSPECT' => 'Importuoti adresatus',
  'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Pasirinkti pažymėtus adresatus',
  'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Pasirinkti pažymėtus adresatus',
  'LBL_INVALID_EMAIL' => 'Neteisingas el. paštas:',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Adresatai',
  'LBL_PROSPECT_LIST' => 'Adresatų sąrašas',
  'LBL_CONVERT_BUTTON_TITLE' => 'Pakeisti adresatą',
  'LBL_CONVERT_BUTTON_LABEL' => 'Pakeisti adresatą',
  'LBL_CONVERTPROSPECT' => 'Pakeisti adresatą',
  'LNK_NEW_CONTACT' => 'Naujas kontaktas',
  'LBL_CREATED_CONTACT' => 'Sukūrė naują kontaktą',
  'LBL_BACKTO_PROSPECTS' => 'Atgal į adresatus',
  'LBL_CAMPAIGNS' => 'Kampanijos',
  'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Kampanijos istorija',
  'LBL_TRACKER_KEY' => 'Sekamos nuorodos raktas',
  'LBL_LEAD_ID' => 'Potencialaus kontakto Id',
  'LBL_CONVERTED_LEAD' => 'Konvertuotas potencialus kontaktas',
  'LBL_ACCOUNT_NAME' => 'Įmonės pavadinimas',
  'LBL_EDIT_ACCOUNT_NAME' => 'Įmonės pavadinimas:',
  'LBL_CREATED_USER' => 'Sukūrė',
  'LBL_MODIFIED_USER' => 'Redagavo',
  'LBL_CAMPAIGNS_SUBPANEL_TITLE' => 'Kampanijos',
  'LBL_HISTORY_SUBPANEL_TITLE' => 'Istorija',
);

