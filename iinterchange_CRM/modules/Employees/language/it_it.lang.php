<?php

/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/





if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


	
$mod_strings = array (
  'LBL_LOGIN' => 'Login',
  'LBL_LIST_EMAIL' => 'Email',
  'LBL_LIST_ADMIN' => 'Admin',
  'LBL_NEW_EMPLOYEE_BUTTON_KEY' => 'N',
  'LBL_PASSWORD' => 'Password:',
  'LBL_FAX' => 'Fax:',
  'LBL_CREATE_USER_BUTTON_KEY' => 'N',
  'LBL_MODULE_NAME' => 'Dipendenti',
  'LBL_MODULE_TITLE' => 'Dipendenti: Home',
  'LBL_SEARCH_FORM_TITLE' => 'Cerca Dipendente',
  'LBL_LIST_FORM_TITLE' => 'Dipendenti',
  'LBL_NEW_FORM_TITLE' => 'Nuovo Dipendente',
  'LBL_EMPLOYEE' => 'Dipendenti:',
  'LBL_RESET_PREFERENCES' => 'Ripristina Preferenze Predefinite',
  'LBL_TIME_FORMAT' => 'Formato Ora:',
  'LBL_DATE_FORMAT' => 'Formato Data:',
  'LBL_TIMEZONE' => 'Fuso Orario:',
  'LBL_CURRENCY' => 'Valuta:',
  'LBL_LIST_NAME' => 'Nome',
  'LBL_LIST_LAST_NAME' => 'Cognome',
  'LBL_LIST_EMPLOYEE_NAME' => 'Nome Dipendente',
  'LBL_LIST_DEPARTMENT' => 'Dipartimento',
  'LBL_LIST_REPORTS_TO_NAME' => 'Dipende Da',
  'LBL_LIST_PRIMARY_PHONE' => 'Telefono',
  'LBL_LIST_USER_NAME' => 'Nome Utente',
  'LBL_NEW_EMPLOYEE_BUTTON_TITLE' => 'Nuovo Dipendente [Alt+N]',
  'LBL_NEW_EMPLOYEE_BUTTON_LABEL' => 'Nuovo Dipendente',
  'LBL_ERROR' => 'Errore:',
  'LBL_EMPLOYEE_NAME' => 'Nome Dipendente:',
  'LBL_USER_NAME' => 'Nome Utente:',
  'LBL_FIRST_NAME' => 'Nome:',
  'LBL_LAST_NAME' => 'Cognome:',
  'LBL_EMPLOYEE_SETTINGS' => 'Impostazioni Dipendente',
  'LBL_THEME' => 'Tema:',
  'LBL_LANGUAGE' => 'Lingua:',
  'LBL_ADMIN' => 'Amministratore:',
  'LBL_EMPLOYEE_INFORMATION' => 'Informazioni Dipendente',
  'LBL_OFFICE_PHONE' => 'Telefono Ufficio:',
  'LBL_REPORTS_TO' => 'Dipende da Id:',
  'LBL_REPORTS_TO_NAME' => 'Dipende da',
  'LBL_OTHER_PHONE' => 'Altro:',
  'LBL_OTHER_EMAIL' => 'Altra Email:',
  'LBL_NOTES' => 'Note:',
  'LBL_DEPARTMENT' => 'Divisione:',
  'LBL_TITLE' => 'Funzione:',
  'LBL_ANY_ADDRESS' => 'Altro indirizzo:',
  'LBL_ANY_PHONE' => 'Altro Telefono:',
  'LBL_ANY_EMAIL' => 'Altra Email:',
  'LBL_ADDRESS' => 'Indirizzo:',
  'LBL_CITY' => 'Comune:',
  'LBL_STATE' => 'Provincia:',
  'LBL_POSTAL_CODE' => 'CAP:',
  'LBL_COUNTRY' => 'Nazione:',
  'LBL_NAME' => 'Nome:',
  'LBL_MOBILE_PHONE' => 'Telefono Cellulare:',
  'LBL_OTHER' => 'Altro:',
  'LBL_EMAIL' => 'Email:',
  'LBL_HOME_PHONE' => 'Telefono Casa:',
  'LBL_WORK_PHONE' => 'Telefono Lavoro:',
  'LBL_ADDRESS_INFORMATION' => 'Indirizzo',
  'LBL_EMPLOYEE_STATUS' => 'Stato Dipendente:',
  'LBL_PRIMARY_ADDRESS' => 'Indirizzo principale:',
  'LBL_SAVED_SEARCH' => 'Opzioni Layout',
  'LBL_CREATE_USER_BUTTON_TITLE' => 'Nuovo Utente [Alt+N]',
  'LBL_CREATE_USER_BUTTON_LABEL' => 'Nuovo Utente',
  'LBL_FAVORITE_COLOR' => 'Colore Preferito:',
  'LBL_MESSENGER_ID' => 'Nome IM:',
  'LBL_MESSENGER_TYPE' => 'Tipo IM:',
  'ERR_EMPLOYEE_NAME_EXISTS_1' => 'Nome Dipendente',
  'ERR_EMPLOYEE_NAME_EXISTS_2' => 'esiste già. Non sono ammessi dipendenti con lo stesso nome. Modifica il nome afffinchè sia unico.',
  'ERR_LAST_ADMIN_1' => 'Il dipendente "',
  'ERR_LAST_ADMIN_2' => 'è l´ultimo dipendente con accesso amministrativo. Deve esserci almeno un dipendente amministratore.',
  'LNK_NEW_EMPLOYEE' => 'Nuovo Dipendente',
  'LNK_EMPLOYEE_LIST' => 'Vista Dipendenti',
  'ERR_DELETE_RECORD' => 'Per eliminare l´azienda deve essere specificato il numero del record.',
  'LBL_DEFAULT_TEAM' => 'Team Predefinito:',
  'LBL_DEFAULT_TEAM_TEXT' => 'Seleziona il team predefinito per i nuovi record',
  'LBL_MY_TEAMS' => 'I miei Team',
  'LBL_LIST_DESCRIPTION' => 'Descrizione',
  'LNK_EDIT_TABS' => 'Modifica Schede',
  'NTC_REMOVE_TEAM_MEMBER_CONFIRMATION' => 'Sei sicuro di voler rimuovere questo membro?',
  'LBL_LIST_EMPLOYEE_STATUS' => 'Stato Dipendente',
  'LBL_SUGAR_LOGIN' => 'è utente sugar',
  'LBL_RECEIVE_NOTIFICATIONS' => 'Notifica di Assegnazione',
  'LBL_IS_ADMIN' => 'è Amministratore',
  'LBL_GROUP' => 'Gruppo Utenti',
  'LBL_PORTAL_ONLY' => 'Portale Solo Utenti',
  'LBL_PHOTO' => 'Foto',
  'LBL_DELETE_USER_CONFIRM' => 'Questo dipendente è anche un utente. Eliminando il record del dipendente verrà eliminato anche il record dell´utente, e l´utente non sarà più in grado di accedere all´applicativo. Vuoi procedere ugualmente con l´eliminazione di questo record?',
  'LBL_DELETE_EMPLOYEE_CONFIRM' => 'Sei sicuro di voler eliminare questo dipendente?',
);


