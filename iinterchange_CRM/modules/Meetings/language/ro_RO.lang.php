<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

	

$mod_strings = array (
  'LBL_LIST_JOIN_MEETING' => 'Alăturaţi-vă de conferinţei',
  'LBL_COLON' => ':',
  'LBL_DEL' => 'Del',
  'LBL_HOURS_ABBREV' => 'h',
  'LBL_LIST_CONTACT' => 'Contact',
  'LBL_MINSS_ABBREV' => 'm',
  'LBL_SEND_BUTTON_KEY' => 'I',
  'ERR_DELETE_RECORD' => 'Trebuie sa specifici un numar de inregistrare pentru a sterge intalnirea',
  'LBL_ACCEPT_THIS' => 'Acceptati?',
  'LBL_ADD_BUTTON' => 'Adauga',
  'LBL_ADD_INVITEE' => 'Adauga Invitati',
  'LBL_CONTACT_NAME' => 'Contact',
  'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contacte',
  'LBL_CREATED_BY' => 'Creeat de',
  'LBL_DATE_END' => 'Data Sfarsit',
  'LBL_DATE_TIME' => 'Data si timpul de start',
  'LBL_DATE' => 'Data de start',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Intalniri',
  'LBL_DESCRIPTION_INFORMATION' => 'Descriere Informatie',
  'LBL_DESCRIPTION' => 'Descriere',
  'LBL_DURATION_HOURS' => 'Ore Durata',
  'LBL_DURATION_MINUTES' => 'Minute Durata',
  'LBL_DURATION' => 'Durata',
  'LBL_EMAIL' => 'E-mail',
  'LBL_FIRST_NAME' => 'Nume:',
  'LBL_HISTORY_SUBPANEL_TITLE' => 'Note',
  'LBL_HOURS_MINS' => 'ore/minute',
  'LBL_INVITEE' => 'Invitat',
  'LBL_LAST_NAME' => 'Prenume',
  'LBL_ASSIGNED_TO_NAME' => 'Atrbuit lui',
  'LBL_LIST_ASSIGNED_TO_NAME' => 'Utilizator Atribuit',
  'LBL_LIST_CLOSE' => 'Inchide',
  'LBL_LIST_DATE_MODIFIED' => 'Data Modificata',
  'LBL_LIST_DATE' => 'Data Inceput:',
  'LBL_LIST_DIRECTION' => 'Directia',
  'LBL_LIST_DUE_DATE' => 'Pana la data:',
  'LBL_LIST_FORM_TITLE' => 'Lista intalniri',
  'LBL_LIST_MY_MEETINGS' => 'Intalnirile mele',
  'LBL_LIST_RELATED_TO' => 'Asociat cu',
  'LBL_LIST_STATUS' => 'Statut',
  'LBL_LIST_SUBJECT' => 'Subiect',
  'LBL_LIST_TIME' => 'Timp Inceput',
  'LBL_LEADS_SUBPANEL_TITLE' => 'Antete',
  'LBL_LOCATION' => 'Locatia:',
  'LBL_MEETING' => 'Intalnire:',
  'LBL_MODIFIED_BY' => 'Modificat de',
  'LBL_MODULE_NAME' => 'Intalniri',
  'LBL_MODULE_TITLE' => 'Intalniri : Acasa',
  'LBL_NAME' => 'Nume',
  'LBL_NEW_FORM_TITLE' => 'Creeaza Intalnire',
  'LBL_OUTLOOK_ID' => 'Identitate Outlook',
  'LBL_PHONE' => 'Telefon',
  'LBL_REMINDER_TIME' => 'Timpul Mementoului',
  'LBL_REMINDER' => 'Memento',
  'LBL_REMOVE' => 'Sterge',
  'LBL_SCHEDULING_FORM_TITLE' => 'Programare',
  'LBL_SEARCH_BUTTON' => 'Cauta',
  'LBL_SEARCH_FORM_TITLE' => 'Cautare intalinre',
  'LBL_SEND_BUTTON_LABEL' => 'Trimite invitatii',
  'LBL_SEND_BUTTON_TITLE' => 'Trimite Invitatii[Alt+I]',
  'LBL_STATUS' => 'Statut',
  'LBL_TYPE' => 'Tip:',
  'LBL_PASSWORD' => 'Parola:',
  'LBL_URL' => 'URL',
  'LBL_CREATOR' => 'Creator Conferinta',
  'LBL_EXTERNALID' => 'ID App Extern',
  'LBL_SUBJECT' => 'Subiect',
  'LBL_TIME' => 'Timpul de start',
  'LBL_USERS_SUBPANEL_TITLE' => 'Utilizatori',
  'LBL_ACTIVITIES_REPORTS' => 'Raport Activitati',
  'LNK_MEETING_LIST' => 'Vezi intalniri',
  'LNK_NEW_APPOINTMENT' => 'Creeaza Intalnire',
  'LNK_NEW_MEETING' => 'Orar Intalniri',
  'LNK_IMPORT_MEETINGS' => 'Importa Sedinte',
  'NTC_REMOVE_INVITEE' => 'Sunteţi sigur că doriţi să eliminaţi acest invitat din intalniri?',
  'LBL_CREATED_USER' => 'Utilizator creat',
  'LBL_MODIFIED_USER' => 'Utilizator Modificat',
  'NOTICE_DURATION_TIME' => 'Durata timpului trebuie sa fie mai mare ca 0',
  'LBL_MEETING_INFORMATION' => 'Trecere in revista a intalnirii',
  'LBL_JOIN_EXT_MEETING' => 'Alăturaţi-vă de conferinţei',
  'LBL_HOST_EXT_MEETING' => 'Inceperea Conferintei',
  'LBL_EXTNOT_HEADER' => 'Eroare:Neinvitat',
  'LBL_EXTNOT_MAIN' => 'Nu esti in masura sa participi la aceasta Conferinta, pt ca nu esti invitat',
  'LBL_EXTNOT_RECORD_LINK' => 'Vezi Conferinta',
  'LBL_EXTNOT_GO_BACK' => 'Intoarce-te la raportul anterior',
  'LBL_EXTNOSTART_HEADER' => 'Eroare: Conferinta nu poate incepe',
  'LBL_EXTNOSTART_MAIN' => 'Tu nu poti începe această întâlnire, deoarece nu sunteţi un administrator sau proprietar al reuniunii.',
);

