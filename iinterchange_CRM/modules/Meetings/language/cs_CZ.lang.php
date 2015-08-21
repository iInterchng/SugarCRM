<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

	

$mod_strings = array (
  'LBL_EXTNOT_MAIN' => 'Nemůžete se přihlásit k této schůzce, protože nejste pozváni.',
  'LBL_EXTNOSTART_MAIN' => 'Nemůžete spustit tuto schůzku, protože nejste její správce ani vlastník.',
  'LBL_COLON' => ':',
  'LBL_HOURS_ABBREV' => 'h',
  'LBL_MINSS_ABBREV' => 'm',
  'LBL_SEND_BUTTON_KEY' => 'I',
  'ERR_DELETE_RECORD' => 'Pro odstranění',
  'LBL_ACCEPT_THIS' => 'Přijmout?',
  'LBL_ADD_BUTTON' => 'Přidat',
  'LBL_ADD_INVITEE' => 'Přidat Invites',
  'LBL_CONTACT_NAME' => 'Kontakt:',
  'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakty',
  'LBL_CREATED_BY' => 'Vytvořil',
  'LBL_DATE_END' => 'Konec',
  'LBL_DATE_TIME' => 'Počáteční datum & čas:',
  'LBL_DATE' => 'Počáteční datum:',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Schůzky',
  'LBL_DEL' => 'Smazat',
  'LBL_DESCRIPTION_INFORMATION' => 'Popis',
  'LBL_DESCRIPTION' => 'Popis:',
  'LBL_DURATION_HOURS' => 'Doba trvání',
  'LBL_DURATION_MINUTES' => 'Doba trvání',
  'LBL_DURATION' => 'Doba trvání:',
  'LBL_EMAIL' => 'E-mail',
  'LBL_FIRST_NAME' => 'Jméno',
  'LBL_HISTORY_SUBPANEL_TITLE' => 'Poznámky',
  'LBL_HOURS_MINS' => '(hodiny/minuty)',
  'LBL_INVITEE' => 'Pozvánka',
  'LBL_LAST_NAME' => 'Příjmení',
  'LBL_ASSIGNED_TO_NAME' => 'Přiřazeno (komu):',
  'LBL_LIST_ASSIGNED_TO_NAME' => 'Zodpovědný uživatel',
  'LBL_LIST_CLOSE' => 'Zavřít',
  'LBL_LIST_CONTACT' => 'Kontakt',
  'LBL_LIST_DATE_MODIFIED' => 'Datum poslední úpravy',
  'LBL_LIST_DATE' => 'Počáteční datum',
  'LBL_LIST_DIRECTION' => 'Směr',
  'LBL_LIST_DUE_DATE' => 'Do data',
  'LBL_LIST_FORM_TITLE' => 'Seznam schůzek',
  'LBL_LIST_MY_MEETINGS' => 'Schůzky',
  'LBL_LIST_RELATED_TO' => 'Týka se',
  'LBL_LIST_STATUS' => 'Stav',
  'LBL_LIST_SUBJECT' => 'Předmět',
  'LBL_LIST_TIME' => 'Počáteční čas',
  'LBL_LEADS_SUBPANEL_TITLE' => 'Příležitosti',
  'LBL_LOCATION' => 'Umístění:',
  'LBL_MEETING' => 'Schůzka:',
  'LBL_MODIFIED_BY' => 'Změnil',
  'LBL_MODULE_NAME' => 'Schůzky',
  'LBL_MODULE_TITLE' => 'Schůzky',
  'LBL_NAME' => 'Název',
  'LBL_NEW_FORM_TITLE' => 'Naplánovat událost',
  'LBL_OUTLOOK_ID' => 'ID Outlooku',
  'LBL_PHONE' => 'Telefon práce:',
  'LBL_REMINDER_TIME' => 'Čas připomínky',
  'LBL_REMINDER' => 'Upomínka:',
  'LBL_REMOVE' => 'odstranit',
  'LBL_SCHEDULING_FORM_TITLE' => 'Plánování',
  'LBL_SEARCH_BUTTON' => 'Hledat',
  'LBL_SEARCH_FORM_TITLE' => 'Hledání schůzek',
  'LBL_SEND_BUTTON_LABEL' => 'Odeslat pozvání',
  'LBL_SEND_BUTTON_TITLE' => 'Odeslat pozvání [Alt+I]',
  'LBL_STATUS' => 'Stav:',
  'LBL_TYPE' => 'Typ schůzky',
  'LBL_PASSWORD' => 'Heslo schůzky',
  'LBL_URL' => 'Spustit/Připojit se ke schůzce',
  'LBL_CREATOR' => 'Organizátor schůzky',
  'LBL_EXTERNALID' => 'Externí App ID',
  'LBL_SUBJECT' => 'Předmět:',
  'LBL_TIME' => 'Počátenčí čas:',
  'LBL_USERS_SUBPANEL_TITLE' => 'Uživatelé',
  'LBL_ACTIVITIES_REPORTS' => 'Reporty aktivit',
  'LNK_MEETING_LIST' => 'Schůzky',
  'LNK_NEW_APPOINTMENT' => 'Naplánovat událost',
  'LNK_NEW_MEETING' => 'Naplánovat schůzku',
  'LNK_IMPORT_MEETINGS' => 'Importovat schůzky',
  'NTC_REMOVE_INVITEE' => 'Opravdu chcete odstranit pozvánku ze schůzky?',
  'LBL_CREATED_USER' => 'Vytvořit uživatele',
  'LBL_MODIFIED_USER' => 'Upraveno uživatelem',
  'NOTICE_DURATION_TIME' => 'Doba trvání musí být větší než 0',
  'LBL_MEETING_INFORMATION' => 'Přehled setkání',
  'LBL_LIST_JOIN_MEETING' => 'Připojit se ke schůzce',
  'LBL_JOIN_EXT_MEETING' => 'Připojit se ke schůzce',
  'LBL_HOST_EXT_MEETING' => 'Spustit schůzku',
  'LBL_EXTNOT_HEADER' => 'Chyba: Pozvánka neexistuje',
  'LBL_EXTNOT_RECORD_LINK' => 'Zobrazit schůzku',
  'LBL_EXTNOT_GO_BACK' => 'Vraťte se zpět na předchozí záznam',
  'LBL_EXTNOSTART_HEADER' => 'Chyba: Schůzku nelze spustit',
);

