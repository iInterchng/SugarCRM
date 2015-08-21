<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

	

$mod_strings = array (
  'LBL_REMOVE' => 'usuń',
  'LBL_COLON' => ':',
  'LBL_DEL' => 'Del',
  'LBL_HOURS_ABBREV' => 'h',
  'LBL_LIST_STATUS' => 'Status',
  'LBL_MINSS_ABBREV' => 'm',
  'LBL_OUTLOOK_ID' => 'Outlook ID',
  'LBL_SEND_BUTTON_KEY' => 'I',
  'LBL_STATUS' => 'Status:',
  'ERR_DELETE_RECORD' => 'Numer rekordu musi zostać określony, aby usunąć spotkanie.',
  'LBL_ACCEPT_THIS' => 'Akceptujesz?',
  'LBL_ADD_BUTTON' => 'Dodaj',
  'LBL_ADD_INVITEE' => 'Dodaj uczestników',
  'LBL_CONTACT_NAME' => 'Kontakt:',
  'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakty',
  'LBL_CREATED_BY' => 'Utworzone przez',
  'LBL_DATE_END' => 'Data zakończenia',
  'LBL_DATE_TIME' => 'Data i czas rozpoczęcia:',
  'LBL_DATE' => 'Data rozpoczęcia:',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Spotkania',
  'LBL_DESCRIPTION_INFORMATION' => 'Informacje opisowe',
  'LBL_DESCRIPTION' => 'Opis:',
  'LBL_DURATION_HOURS' => 'Czas trwania w godzinach:',
  'LBL_DURATION_MINUTES' => 'Czas trwania w minutach:',
  'LBL_DURATION' => 'Czas trwania:',
  'LBL_EMAIL' => 'E-mail',
  'LBL_FIRST_NAME' => 'Imię',
  'LBL_HISTORY_SUBPANEL_TITLE' => 'Notatki',
  'LBL_HOURS_MINS' => '(godziny/minuty)',
  'LBL_INVITEE' => 'Zaproszeni',
  'LBL_LAST_NAME' => 'Nazwisko',
  'LBL_ASSIGNED_TO_NAME' => 'Przydzielone do:',
  'LBL_LIST_ASSIGNED_TO_NAME' => 'Przydzielony użytkownik',
  'LBL_LIST_CLOSE' => 'Zamknij',
  'LBL_LIST_CONTACT' => 'Kontakt',
  'LBL_LIST_DATE_MODIFIED' => 'Data modyfikacji',
  'LBL_LIST_DATE' => 'Data rozpoczęcia',
  'LBL_LIST_DIRECTION' => 'Kierunek',
  'LBL_LIST_DUE_DATE' => 'Termin',
  'LBL_LIST_FORM_TITLE' => 'Lista spotkań',
  'LBL_LIST_MY_MEETINGS' => 'Moje spotkania',
  'LBL_LIST_RELATED_TO' => 'Powiązane z',
  'LBL_LIST_SUBJECT' => 'Temat',
  'LBL_LIST_TIME' => 'Czas rozpoczęcia',
  'LBL_LEADS_SUBPANEL_TITLE' => 'Leady',
  'LBL_LOCATION' => 'Miejsce spotkania:',
  'LBL_MEETING' => 'Spotkanie:',
  'LBL_MODIFIED_BY' => 'Zmodyfikowane przez',
  'LBL_MODULE_NAME' => 'Spotkania',
  'LBL_MODULE_TITLE' => 'Spotkania: Strona główna',
  'LBL_NAME' => 'Nazwa',
  'LBL_NEW_FORM_TITLE' => 'Utwórz termin',
  'LBL_PHONE' => 'Telefon do biura:',
  'LBL_REMINDER_TIME' => 'Godzina przypomnienia',
  'LBL_REMINDER' => 'Przypomnienie:',
  'LBL_SCHEDULING_FORM_TITLE' => 'Harmonogram',
  'LBL_SEARCH_BUTTON' => 'Szukaj',
  'LBL_SEARCH_FORM_TITLE' => 'Szukanie spotkań',
  'LBL_SEND_BUTTON_LABEL' => 'Wyślij zaproszenia',
  'LBL_SEND_BUTTON_TITLE' => 'Wyślij zaproszenia [Alt+I]',
  'LBL_TYPE' => 'Typ spotkania',
  'LBL_PASSWORD' => 'Hasło spotkania',
  'LBL_URL' => 'Rozpocznij/Dołącz spotkanie/do spotkania',
  'LBL_CREATOR' => 'Kreator spotkania',
  'LBL_EXTERNALID' => 'ID zewnętrznej aplikacji',
  'LBL_SUBJECT' => 'Temat:',
  'LBL_TIME' => 'Czas rozpoczęcia:',
  'LBL_USERS_SUBPANEL_TITLE' => 'Użytkownicy',
  'LBL_ACTIVITIES_REPORTS' => 'Raport działań',
  'LNK_MEETING_LIST' => 'Spotkania',
  'LNK_NEW_APPOINTMENT' => 'Utwórz termin',
  'LNK_NEW_MEETING' => 'Zaplanuj spotkanie',
  'LNK_IMPORT_MEETINGS' => 'Importuj spotkania',
  'NTC_REMOVE_INVITEE' => 'Czy na pewno chcesz usunąć te zaproszenia ze spotkania?',
  'LBL_CREATED_USER' => 'Użytkownik tworzący',
  'LBL_MODIFIED_USER' => 'Użytkownik modyfikujący',
  'NOTICE_DURATION_TIME' => 'Czas trwania musi być większy niż 0',
  'LBL_MEETING_INFORMATION' => 'Przegląd spotkania',
  'LBL_LIST_JOIN_MEETING' => 'Dołącz do spotkania',
  'LBL_JOIN_EXT_MEETING' => 'Dołącz do spotkania',
  'LBL_HOST_EXT_MEETING' => 'Rozpocznij spotkanie',
  'LBL_EXTNOT_HEADER' => 'Błąd: brak zaproszenia',
  'LBL_EXTNOT_MAIN' => 'Nie jesteś w stanie dołączyć do tego spotkania, ponieważ nie jesteś zaproszony.',
  'LBL_EXTNOT_RECORD_LINK' => 'Zobacz spotkanie',
  'LBL_EXTNOT_GO_BACK' => 'Wróć do poprzedniego rekordu',
  'LBL_EXTNOSTART_HEADER' => 'Błąd: Nie można rozpocząć spotkania',
  'LBL_EXTNOSTART_MAIN' => 'Nie możesz rozpocząć spotkania, ponieważ nie jesteś administratorem lub właścicielem tego spotkania.',
);

