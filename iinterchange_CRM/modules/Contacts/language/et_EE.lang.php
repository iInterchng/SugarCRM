<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

	

$mod_strings = array (
  'LBL_CONTRACTS' => 'Lepingud',
  'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Dokumendid',
  'LBL_CONTRACTS_SUBPANEL_TITLE' => 'Lepingud',
  'LBL_COPY_ADDRESS_CHECKED_PRIMARY' => 'Kopeeri esmasele aadressile',
  'LBL_COPY_ADDRESS_CHECKED_ALT' => 'Kopeeri teisele aadressile',
  'db_last_name' => 'LBL_LIST_LAST_NAME',
  'db_first_name' => 'LBL_LIST_FIRST_NAME',
  'db_title' => 'LBL_LIST_TITLE',
  'db_email1' => 'LBL_LIST_EMAIL_ADDRESS',
  'db_email2' => 'LBL_LIST_OTHER_EMAIL_ADDRESS',
  'LBL_EMAIL_OPT_OUT' => 'Email Opt Out:',
  'LBL_FAX_PHONE' => 'Fax:',
  'LBL_VCARD' => 'vCard',
  'LNK_CONTACT_REPORTS' => 'Vaata kontakti aruandeid',
  'ERR_DELETE_RECORD' => 'Kontakti kustutamiseks täpsusta kirje numbrit.',
  'LBL_ACCOUNT_ID' => 'Ettevõtte ID',
  'LBL_ACCOUNT_NAME' => 'Ettevõtte nimi:',
  'LBL_CAMPAIGN' => 'Kampaania:',
  'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Tegevused',
  'LBL_ADD_BUSINESSCARD' => 'Sisesta visiitkaart',
  'LBL_ADDMORE_BUSINESSCARD' => 'Lisa teine visiitkaart',
  'LBL_ADDRESS_INFORMATION' => 'Aadressi info',
  'LBL_ALT_ADDRESS_CITY' => 'Alternatiivne aadress linn:',
  'LBL_ALT_ADDRESS_COUNTRY' => 'Alternatiivne aadress maakond:',
  'LBL_ALT_ADDRESS_POSTALCODE' => 'Alternatiivne aadress postiindeks:',
  'LBL_ALT_ADDRESS_STATE' => 'Alternatiivne aadress riik:',
  'LBL_ALT_ADDRESS_STREET_2' => 'Alternatiivne aadress tänav 2:',
  'LBL_ALT_ADDRESS_STREET_3' => 'Alternatiivne aadress tänav 3:',
  'LBL_ALT_ADDRESS_STREET' => 'Alternatiivne aadress tänav:',
  'LBL_ALTERNATE_ADDRESS' => 'Teine aadress:',
  'LBL_ALT_ADDRESS' => 'Teine aadress:',
  'LBL_ANY_ADDRESS' => 'Muu aadress:',
  'LBL_ANY_EMAIL' => 'Muu E-post:',
  'LBL_ANY_PHONE' => 'Muu telefon:',
  'LBL_ASSIGNED_TO_NAME' => 'Vastutaja',
  'LBL_ASSIGNED_TO_ID' => 'Määratud kasutaja',
  'LBL_ASSISTANT_PHONE' => 'Assistendi telefon:',
  'LBL_ASSISTANT' => 'Assistent',
  'LBL_BIRTHDATE' => 'Sünnipäev:',
  'LBL_BUSINESSCARD' => 'Visiitkaart',
  'LBL_CITY' => 'Linn:',
  'LBL_CAMPAIGN_ID' => 'Kampaania ID',
  'LBL_CONTACT_INFORMATION' => 'Kontakti ülevaade',
  'LBL_CONTACT_NAME' => 'Kontaktisiku nimi:',
  'LBL_CONTACT_OPP_FORM_TITLE' => 'Kontakt-müügivõimalus:',
  'LBL_CONTACT_ROLE' => 'Roll:',
  'LBL_CONTACT' => 'Kontakt',
  'LBL_COUNTRY' => 'Riik',
  'LBL_CREATED_ACCOUNT' => 'Loodud uus kontakt',
  'LBL_CREATED_CALL' => 'Loodud uus kõne',
  'LBL_CREATED_CONTACT' => 'Loodud uus kontakt',
  'LBL_CREATED_MEETING' => 'Loodud uus kohtumine',
  'LBL_CREATED_OPPORTUNITY' => 'Loodud uus müügivõimalus',
  'LBL_DATE_MODIFIED' => 'Kuupäev muudetud',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Kontaktid',
  'LBL_DEPARTMENT' => 'Osakond:',
  'LBL_DESCRIPTION_INFORMATION' => 'Kirjelduse info',
  'LBL_DESCRIPTION' => 'Kirjeldus:',
  'LBL_DIRECT_REPORTS_SUBPANEL_TITLE' => 'Otsesed aruanded',
  'LBL_DO_NOT_CALL' => 'Mitte helistada:',
  'LBL_DUPLICATE' => 'Võimalikud topeltkontaktid',
  'LBL_EMAIL_ADDRESS' => 'E-post:',
  'LBL_EMPTY_VCARD' => 'Palun vali vCard fail',
  'LBL_EXISTING_ACCOUNT' => 'Kasutatud olemasolevat ettevõtet',
  'LBL_EXISTING_CONTACT' => 'Kasutatud olemasolevat kontakti',
  'LBL_EXISTING_OPPORTUNITY' => 'Kasutatud olemasolevat müügivõimalust',
  'LBL_FIRST_NAME' => 'Eesnimi:',
  'LBL_FULL_NAME' => 'Nimi',
  'LBL_HISTORY_SUBPANEL_TITLE' => 'Vaata ajalugu',
  'LBL_HOME_PHONE' => 'Telefon kodus:',
  'LBL_ID' => 'ID',
  'LBL_IMPORT_VCARD' => 'Impordi vCard',
  'LBL_IMPORT_VCARDTEXT' => 'Loo automaatselt uus kontakt importides vCardi sinu failisüsteemist.',
  'LBL_INVALID_EMAIL' => 'Kehtetu e-post:',
  'LBL_INVITEE' => 'Otsesed aruanded',
  'LBL_LAST_NAME' => 'Perekonnanimi:',
  'LBL_LEAD_SOURCE' => 'Müügivihje allikas:',
  'LBL_LIST_ACCEPT_STATUS' => 'Aktsepteeri olek',
  'LBL_LIST_ACCOUNT_NAME' => 'Ettevõtte nimi',
  'LBL_LIST_CONTACT_NAME' => 'Kontaktisiku nimi:',
  'LBL_LIST_CONTACT_ROLE' => 'Roll',
  'LBL_LIST_EMAIL_ADDRESS' => 'E-post',
  'LBL_LIST_FIRST_NAME' => 'Eesnimi',
  'LBL_LIST_FORM_TITLE' => 'Kontaktiloend',
  'LBL_VIEW_FORM_TITLE' => 'Kontakti vaade',
  'LBL_LIST_LAST_NAME' => 'Perekonnanimi',
  'LBL_LIST_NAME' => 'Nimi',
  'LBL_LIST_OTHER_EMAIL_ADDRESS' => 'Teine e-post:',
  'LBL_LIST_PHONE' => 'Töötelefon:',
  'LBL_LIST_TITLE' => 'Tiitel',
  'LBL_MOBILE_PHONE' => 'Mobiil:',
  'LBL_MODIFIED' => 'Muutja:',
  'LBL_MODULE_NAME' => 'Kontaktid',
  'LBL_MODULE_TITLE' => 'Kontaktid: Avaleht',
  'LBL_NAME' => 'Nimi:',
  'LBL_NEW_FORM_TITLE' => 'Uus kontakt',
  'LBL_NEW_PORTAL_PASSWORD' => 'Uus saidi salasõna:',
  'LBL_NOTE_SUBJECT' => 'Märkuse teema',
  'LBL_OFFICE_PHONE' => 'Töötelefon:',
  'LBL_OPP_NAME' => 'Müügivõimaluse nimi:',
  'LBL_OPPORTUNITY_ROLE_ID' => 'Müügivõimaluse rolli ID:',
  'LBL_OPPORTUNITY_ROLE' => 'Müügivõimaluse roll',
  'LBL_OTHER_EMAIL_ADDRESS' => 'Teine e-post:',
  'LBL_OTHER_PHONE' => 'Teine telefon:',
  'LBL_PHONE' => 'Tlf number',
  'LBL_PORTAL_ACTIVE' => 'Sait aktiivne:',
  'LBL_PORTAL_APP' => 'Saidi rakendus:',
  'LBL_PORTAL_INFORMATION' => 'Saidi info',
  'LBL_PORTAL_NAME' => 'Saidi nimi:',
  'LBL_PORTAL_PASSWORD_ISSET' => 'Saidi salasõna on määratud:',
  'LBL_STREET' => 'Tänav',
  'LBL_POSTAL_CODE' => 'Postiindeks:',
  'LBL_PRIMARY_ADDRESS_CITY' => 'Esmane aadress linn:',
  'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Esmane aadress maakond:',
  'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Esmane aadress postiindeks:',
  'LBL_PRIMARY_ADDRESS_STATE' => 'Esmane aadress riik:',
  'LBL_PRIMARY_ADDRESS_STREET_2' => 'Esmane aadress Tänav 2:',
  'LBL_PRIMARY_ADDRESS_STREET_3' => 'Esmane aadress Tänav 3:',
  'LBL_PRIMARY_ADDRESS_STREET' => 'Esmane aadress tänav:',
  'LBL_PRIMARY_ADDRESS' => 'Esmane aadress:',
  'LBL_PRODUCTS_TITLE' => 'artiklid',
  'LBL_RELATED_CONTACTS_TITLE' => 'Seotud kontaktid',
  'LBL_REPORTS_TO_ID' => 'Juhataja ID:',
  'LBL_REPORTS_TO' => 'Juhataja:',
  'LBL_RESOURCE_NAME' => 'Allika nimi',
  'LBL_SALUTATION' => 'Tervitus:',
  'LBL_SAVE_CONTACT' => 'Salvesta kontakt',
  'LBL_SEARCH_FORM_TITLE' => 'Kontakti otsing',
  'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Vali vaadatud kontaktid',
  'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Vali vaadatud kontaktid',
  'LBL_STATE' => 'Maakond:',
  'LBL_SYNC_CONTACT' => 'Süngi Outlook®:',
  'LBL_PROSPECT_LIST' => 'Väljavaadete loend',
  'LBL_TEAM_ID' => 'Meeskonna ID:',
  'LBL_TITLE' => 'Tiitel:',
  'LNK_CONTACT_LIST' => 'Vaata kontakte',
  'LNK_IMPORT_VCARD' => 'Loo kontakt vCardist',
  'LNK_NEW_ACCOUNT' => 'Loo ettevõte',
  'LNK_NEW_APPOINTMENT' => 'Loo kohtumine',
  'LNK_NEW_CALL' => 'Kõne logi',
  'LNK_NEW_CASE' => 'Loo juhtum',
  'LNK_NEW_CONTACT' => 'Loo kontakt',
  'LNK_NEW_EMAIL' => 'Arhiveeri e-kiri',
  'LNK_NEW_MEETING' => 'Planeeri kohtumine',
  'LNK_NEW_NOTE' => 'Loo märkus',
  'LNK_NEW_OPPORTUNITY' => 'Loo müügivõimalus',
  'LNK_NEW_TASK' => 'Loo ülesanne',
  'LNK_SELECT_ACCOUNT' => 'Vali ettevõte',
  'MSG_DUPLICATE' => 'Kontakti kirje, mida hetkel lood võib olla duplikaat juba olemasolevast kontakti kirjest. Kontakti kirjed, mis sisaldavad sarnaseid nimesid ja/või aadresse on väljatoodud allpool. Kliki Salvesta selle uue kontakti loomiseks või kliki Tühista moodulisse tagasiminemiseks eesmärki loomata.',
  'MSG_SHOW_DUPLICATES' => 'Kontakti kirje, mida hetkel lood võib olla duplikaat juba olemasolevast kontakti kirjest. Kontakti kirjed, mis sisaldavad sarnaseid nimesid ja/või aadresse on väljatoodud allpool. Kliki Salvesta selle uue kontakti loomiseks või kliki Tühista moodulisse tagasiminemiseks eesmärki loomata.',
  'NTC_COPY_ALTERNATE_ADDRESS' => 'Kopeeri alternatiivne aadress esmaseks aadressiks',
  'NTC_COPY_PRIMARY_ADDRESS' => 'Kopeeri esmane aadress alternatiivseks aadressiks',
  'NTC_DELETE_CONFIRMATION' => 'Oled kindel, et soovid seda kirjet kustutada?',
  'NTC_OPPORTUNITY_REQUIRES_ACCOUNT' => 'Müügivõimaluse loomine eeldab ettevõtte kontot. \\n Palun loo kas uus ettevõte või vali olemasolev.',
  'NTC_REMOVE_CONFIRMATION' => 'Oled kindel, et soovid selle kontakti juhtumist eemaldada?',
  'NTC_REMOVE_DIRECT_REPORT_CONFIRMATION' => 'Oled kindel, et soovid selle kirje eemaldada otsese aruandena?',
  'LBL_USER_PASSWORD' => 'Salasõna:',
  'LBL_LEADS_SUBPANEL_TITLE' => 'Müügivihjed',
  'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Müügivõimalused',
  'LBL_QUOTES_SUBPANEL_TITLE' => 'Pakkumised',
  'LBL_PRODUCTS_SUBPANEL_TITLE' => 'Artiklid',
  'LBL_CASES_SUBPANEL_TITLE' => 'Juhtumid',
  'LBL_BUGS_SUBPANEL_TITLE' => 'Bugid',
  'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projektid',
  'LBL_TARGET_OF_CAMPAIGNS' => 'Kampaaniad (eesmärgid):',
  'LBL_CAMPAIGNS' => 'Kampaaniad',
  'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Kampaaniad',
  'LBL_LIST_CITY' => 'Linn:',
  'LBL_LIST_STATE' => 'Maakond:',
  'LBL_HOMEPAGE_TITLE' => 'Minu kontaktid',
  'LBL_OPPORTUNITIES' => 'Müügivõimalused',
  'LBL_PORTAL_PASSWORD' => 'Saidi salasõna',
  'LBL_CONFIRM_PORTAL_PASSWORD' => 'Kinnita saidi salasõna',
  'LBL_CHECKOUT_DATE' => 'Lahkumise kuupäev',
  'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontaktid',
  'LBL_PROJECT_SUBPANEL_TITLE' => 'Projektid',
  'LBL_CAMPAIGNS_SUBPANEL_TITLE' => 'Kampaaniad',
  'LNK_IMPORT_CONTACTS' => 'Impordi kontaktid',
);

