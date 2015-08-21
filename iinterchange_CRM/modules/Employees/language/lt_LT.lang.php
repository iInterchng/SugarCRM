<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

	

$mod_strings = array (
  'LBL_NEW_EMPLOYEE_BUTTON_KEY' => 'N',
  'LBL_CREATE_USER_BUTTON_KEY' => 'N',
  'LBL_MODULE_NAME' => 'Darbuotojai',
  'LBL_MODULE_TITLE' => 'Darbuotojai: Pradžia',
  'LBL_SEARCH_FORM_TITLE' => 'Darbuotojo paieška',
  'LBL_LIST_FORM_TITLE' => 'Darbuotojai',
  'LBL_NEW_FORM_TITLE' => 'Naujas darbuotojas',
  'LBL_EMPLOYEE' => 'Darbuotojai:',
  'LBL_LOGIN' => 'Prisijungimas',
  'LBL_RESET_PREFERENCES' => 'Atstatyti į pradinę padėtį',
  'LBL_TIME_FORMAT' => 'Laiko formatas:',
  'LBL_DATE_FORMAT' => 'Datos formatas:',
  'LBL_TIMEZONE' => 'Dabartinis laikas:',
  'LBL_CURRENCY' => 'Valiuta:',
  'LBL_LIST_NAME' => 'Vardas',
  'LBL_LIST_LAST_NAME' => 'Pavardė',
  'LBL_LIST_EMPLOYEE_NAME' => 'Darbuotojo vardas',
  'LBL_LIST_DEPARTMENT' => 'Skyrius',
  'LBL_LIST_REPORTS_TO_NAME' => 'Pavaldus kam',
  'LBL_LIST_EMAIL' => 'El. paštas',
  'LBL_LIST_PRIMARY_PHONE' => 'Telefonas',
  'LBL_LIST_USER_NAME' => 'Vartotojo vardas',
  'LBL_LIST_ADMIN' => 'Administratorius',
  'LBL_NEW_EMPLOYEE_BUTTON_TITLE' => 'Naujas darbuotojas [Alt+N]',
  'LBL_NEW_EMPLOYEE_BUTTON_LABEL' => 'Naujas darbuotojas',
  'LBL_ERROR' => 'Klaida:',
  'LBL_PASSWORD' => 'Slaptažodis:',
  'LBL_EMPLOYEE_NAME' => 'Darbuotojo vardas:',
  'LBL_USER_NAME' => 'Vartotojo vardas:',
  'LBL_FIRST_NAME' => 'Vardas:',
  'LBL_LAST_NAME' => 'Pavardė:',
  'LBL_EMPLOYEE_SETTINGS' => 'Darbuotojo nustatymai',
  'LBL_THEME' => 'Tema:',
  'LBL_LANGUAGE' => 'Kalba:',
  'LBL_ADMIN' => 'Administratorius:',
  'LBL_EMPLOYEE_INFORMATION' => 'Darbuotojo informacija',
  'LBL_OFFICE_PHONE' => 'Telefonas:',
  'LBL_REPORTS_TO' => 'Pavaldus kam:',
  'LBL_REPORTS_TO_NAME' => 'Pavaldus kam',
  'LBL_OTHER_PHONE' => 'Kiti:',
  'LBL_OTHER_EMAIL' => 'Kitas laiškas:',
  'LBL_NOTES' => 'Užrašai:',
  'LBL_DEPARTMENT' => 'Skyrius:',
  'LBL_TITLE' => 'Pareigos:',
  'LBL_ANY_ADDRESS' => 'Adresas:',
  'LBL_ANY_PHONE' => 'Telefonas:',
  'LBL_ANY_EMAIL' => 'El. paštas:',
  'LBL_ADDRESS' => 'Adresas:',
  'LBL_CITY' => 'Miestas:',
  'LBL_STATE' => 'Rajonas:',
  'LBL_POSTAL_CODE' => 'Pašto kodas:',
  'LBL_COUNTRY' => 'Šalis:',
  'LBL_NAME' => 'Vardas:',
  'LBL_MOBILE_PHONE' => 'Mobilus telefonas:',
  'LBL_OTHER' => 'Kita:',
  'LBL_FAX' => 'Faksas:',
  'LBL_EMAIL' => 'El. paštas:',
  'LBL_HOME_PHONE' => 'Namų telefonas:',
  'LBL_WORK_PHONE' => 'Darbo telefonas:',
  'LBL_ADDRESS_INFORMATION' => 'Adreso informacija',
  'LBL_EMPLOYEE_STATUS' => 'Darbuotojo statusas:',
  'LBL_PRIMARY_ADDRESS' => 'Pirminis Adresas:',
  'LBL_SAVED_SEARCH' => 'Išdėstymas nustatymai',
  'LBL_CREATE_USER_BUTTON_TITLE' => 'Sukurti vartotoją [Alt+N]',
  'LBL_CREATE_USER_BUTTON_LABEL' => 'Sukurti vartotoją',
  'LBL_FAVORITE_COLOR' => 'Mėgstamiausia spalva:',
  'LBL_MESSENGER_ID' => 'IM vardas:',
  'LBL_MESSENGER_TYPE' => 'IM tipas:',
  'ERR_EMPLOYEE_NAME_EXISTS_1' => 'Darbuotojo vardas',
  'ERR_EMPLOYEE_NAME_EXISTS_2' => 'jau egzistuoja. Darbuotojų vardų dublikatai nėra leidžiami.  Prašome pakeisti į naują unikalų darbuotojo vardą.',
  'ERR_LAST_ADMIN_1' => 'Darbuotojo vardas "',
  'ERR_LAST_ADMIN_2' => '" yra paskutinis darbuotojas su administratoriaus teisėmis. Mažiausia vienas darbuotojas turi būti administratorius.',
  'LNK_NEW_EMPLOYEE' => 'Sukurti darbuotoją',
  'LNK_EMPLOYEE_LIST' => 'Darbuotojai',
  'ERR_DELETE_RECORD' => 'Įrašas turi būti nurodytas norint ištrinti klientą.',
  'LBL_DEFAULT_TEAM' => 'Numatyta komanda',
  'LBL_DEFAULT_TEAM_TEXT' => 'Pasirinkite numatytą komandą naujiems įrašams',
  'LBL_MY_TEAMS' => 'Mano komandos',
  'LBL_LIST_DESCRIPTION' => 'Aprašymas',
  'LNK_EDIT_TABS' => 'Redaguoti korteles',
  'NTC_REMOVE_TEAM_MEMBER_CONFIRMATION' => 'Ar Jūs tikrai norite pašalinti šį narį iš komandos?',
  'LBL_LIST_EMPLOYEE_STATUS' => 'Statusas',
  'LBL_SUGAR_LOGIN' => 'Yra Sugar vartotojas',
  'LBL_RECEIVE_NOTIFICATIONS' => 'Darbuotojas yra perspėjamas apie naują užduočių jam priskyrimą',
  'LBL_IS_ADMIN' => 'Yra administratorius',
  'LBL_GROUP' => 'Grupės vartotojas',
  'LBL_PORTAL_ONLY' => 'Tik portalo vartotojas',
  'LBL_PHOTO' => 'Nuotrauka',
  'LBL_DELETE_USER_CONFIRM' => 'Šis darbuotojas yra ir vartotojas. Ištrinant darbuotoją bus ištrinta ir vartotojo informacija. Ar norite tęsti?',
  'LBL_DELETE_EMPLOYEE_CONFIRM' => 'Ar tikrai norite ištrinti darbuotoją?',
);

