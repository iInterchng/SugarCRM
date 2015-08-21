<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

	

$mod_strings = array (
  'LBL_LIST_AMOUNT_USDOLLAR' => 'Kwota',
  'LBL_TEAM_ID' => 'ID Zespołu',
  'LNK_OPPORTUNITY_REPORTS' => 'Zobacz raporty okazji',
  'LBL_QUOTES_SUBPANEL_TITLE' => 'Kalkulacje',
  'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Dokumenty',
  'LBL_CONTRACTS' => 'Kontrakty',
  'LBL_CONTRACTS_SUBPANEL_TITLE' => 'Kontrakty',
  'LBL_PROJECT_SUBPANEL_TITLE' => 'Projekty',
  'LABEL_PANEL_ASSIGNMENT' => 'Przydział',
  'LNK_IMPORT_OPPORTUNITIES' => 'Importuj okazje',
  'UPDATE_VERIFY_FIX' => 'Running Fix would give',
  'LBL_MODULE_NAME' => 'Szanse sprzedaży',
  'LBL_MODULE_TITLE' => 'Szanse sprzedaży: Strona główna',
  'LBL_SEARCH_FORM_TITLE' => 'Wyszukaj szansę sprzedaży',
  'LBL_VIEW_FORM_TITLE' => 'Widok szansy sprzedaży',
  'LBL_LIST_FORM_TITLE' => 'Lista szans sprzedaży',
  'LBL_OPPORTUNITY_NAME' => 'Nazwa szansy sprzedaży:',
  'LBL_OPPORTUNITY' => 'Szansa sprzedaży:',
  'LBL_NAME' => 'Nazwa szansy sprzedaży:',
  'LBL_INVITEE' => 'Kontakty',
  'LBL_CURRENCIES' => 'Waluty',
  'LBL_LIST_OPPORTUNITY_NAME' => 'Nazwa szansy sprzedaży',
  'LBL_LIST_ACCOUNT_NAME' => 'Nazwa klienta',
  'LBL_LIST_AMOUNT' => 'Kwota',
  'LBL_LIST_DATE_CLOSED' => 'Zakończenie',
  'LBL_LIST_SALES_STAGE' => 'Etap sprzedaży',
  'LBL_ACCOUNT_ID' => 'ID klienta',
  'LBL_CURRENCY_ID' => 'ID waluty',
  'LBL_CURRENCY_NAME' => 'Nazwa waluty',
  'LBL_CURRENCY_SYMBOL' => 'Symbol waluty',
  'UPDATE' => 'Szansa sprzedaży - Aktualizuj waluty',
  'UPDATE_DOLLARAMOUNTS' => 'Aktualizuj przychody w USD',
  'UPDATE_VERIFY' => 'Weryfikuj kwotę przychodu',
  'UPDATE_VERIFY_TXT' => 'Weryfikuje tylko te wartości, które zapisane są w postaci cyfrowej (cyfry 0-9) oraz w postaci dziesiętnej.',
  'UPDATE_FIX' => 'Napraw przychody',
  'UPDATE_FIX_TXT' => 'Próba naprawienia wartości przychodów poprzez przekształcenie znalezionych wartości do postaci liczbowej. Obecne wartości zostaną zapisane w kopii bezpieczeństwa. Jeśli operacja spowoduje powstanie błędów możesz przywrócić poprzednie wartości z kopii bezpieczeństwa. Nie ponawiaj tej operacji po wykryciu nieprawidłowości. Grozi to nadpisaniem kopii bezpieczeństwa błędnymi danymi!.',
  'UPDATE_DOLLARAMOUNTS_TXT' => 'Aktualizuje przychody z tematów w oparciu o przelicznik do waluty bazowej (USD). Wartości te są używane do sporządzania wykresów oraz zestwień wartości Ofert.',
  'UPDATE_CREATE_CURRENCY' => 'Tworzenie nowej waluty:',
  'UPDATE_VERIFY_FAIL' => 'Błąd weryfikacji rekordu:',
  'UPDATE_VERIFY_CURAMOUNT' => 'Bieżąca kwota:',
  'UPDATE_INCLUDE_CLOSE' => 'Dodaj zamknięte rekordy',
  'UPDATE_VERIFY_NEWAMOUNT' => 'Nowa kwota:',
  'UPDATE_VERIFY_NEWCURRENCY' => 'Nowa waluta:',
  'UPDATE_DONE' => 'Zrobione',
  'UPDATE_BUG_COUNT' => 'Znaleziono błąd, trwa próba naprawienia:',
  'UPDATE_BUGFOUND_COUNT' => 'Znalezione błędy:',
  'UPDATE_COUNT' => 'Rekord zaktualizowany:',
  'UPDATE_RESTORE_COUNT' => 'Odzyskano przychód:',
  'UPDATE_RESTORE' => 'Odzyskiwanie przychodu',
  'UPDATE_RESTORE_TXT' => 'Odzyskiwanie wartości przychodów z kopii bezpieczeństwa.',
  'UPDATE_FAIL' => 'Nie mogę zaktualizować -',
  'UPDATE_NULL_VALUE' => 'Wartość przychodu nieznana. Ustawiam na 0 -',
  'UPDATE_MERGE' => 'Połącz waluty',
  'UPDATE_MERGE_TXT' => 'Łączy wiele walut w pojedynczą walutę. Użyj tej funkcji jeśli Twoje dane zawierają różne oznaczenia tej samej waluty np.: PLN, PLZ, ZŁ, zł.',
  'LBL_ACCOUNT_NAME' => 'Nazwa klienta:',
  'LBL_AMOUNT' => 'Kwota:',
  'LBL_AMOUNT_USDOLLAR' => 'Kwota USD:',
  'LBL_CURRENCY' => 'Waluta:',
  'LBL_DATE_CLOSED' => 'Przewidywana data zamknięcia:',
  'LBL_TYPE' => 'Typ:',
  'LBL_CAMPAIGN' => 'Kampania:',
  'LBL_NEXT_STEP' => 'Następny krok:',
  'LBL_LEAD_SOURCE' => 'Źródło leadu:',
  'LBL_SALES_STAGE' => 'Etap sprzedaży:',
  'LBL_PROBABILITY' => 'Prawdopodobieństwo (%):',
  'LBL_DESCRIPTION' => 'Opis:',
  'LBL_DUPLICATE' => 'Prawdopodobnie taki temat już istnieje',
  'MSG_DUPLICATE' => 'Utworzenie tego tematu prawdopodobnie spowoduje powstanie duplikatu już istniejącego. Możesz wybrać istniejący temat z listy lub kontynuować klikając [Zapisz]. Operacja ta utworzy nowy temat wykorzystując dane, które wprowadziłeś za pomocą formularza.',
  'LBL_NEW_FORM_TITLE' => 'Utwórz szansę sprzedaży',
  'LNK_NEW_OPPORTUNITY' => 'Utwórz szansę sprzedaży',
  'LNK_OPPORTUNITY_LIST' => 'Szanse sprzedaży',
  'ERR_DELETE_RECORD' => 'Musisz wybrać rekord, aby usunąć temat.',
  'LBL_TOP_OPPORTUNITIES' => '10 najważniejszych szans sprzedaży',
  'NTC_REMOVE_OPP_CONFIRMATION' => 'Czy na pewno usunąć osoby kontaktowe z tej szansy sprzedaży?',
  'OPPORTUNITY_REMOVE_PROJECT_CONFIRM' => 'Czy na pewno chcesz usunąć to zadanie z szansy sprzedaży?',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Szanse sprzedaży',
  'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Działania',
  'LBL_HISTORY_SUBPANEL_TITLE' => 'Historia',
  'LBL_RAW_AMOUNT' => 'Surowa kwota',
  'LBL_LEADS_SUBPANEL_TITLE' => 'Leady',
  'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakty',
  'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projekty',
  'LBL_ASSIGNED_TO_NAME' => 'Przydzielono do:',
  'LBL_LIST_ASSIGNED_TO_NAME' => 'Przydzielony użytkownik',
  'LBL_MY_CLOSED_OPPORTUNITIES' => 'Moje zamknięte szanse sprzedaży',
  'LBL_TOTAL_OPPORTUNITIES' => 'Wszystkie szanse sprzedaży',
  'LBL_CLOSED_WON_OPPORTUNITIES' => 'Szanse sprzedaży zakończone wygraną',
  'LBL_ASSIGNED_TO_ID' => 'Przydzielone do ID',
  'LBL_CREATED_ID' => 'Utworzone przez ID',
  'LBL_MODIFIED_ID' => 'Zmodyfikowane przez ID',
  'LBL_MODIFIED_NAME' => 'Zmodyfikowane przez użytkownika',
  'LBL_CREATED_USER' => 'Utworzone przez użytkownika',
  'LBL_MODIFIED_USER' => 'Zmodyfikowane przez użytkownika',
  'LBL_CAMPAIGN_OPPORTUNITY' => 'Kampania',
);

