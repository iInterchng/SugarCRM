<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

	

$mod_strings = array (
  'LBL_FAILURE' => 'Import nie powiódł się:',
  'LBL_DELETE_MAP_CONFIRMATION' => 'Czy na pewno chcesz usunąć to mapowanie?',
  'LBL_ERROR_INVALID_FLOAT' => 'Invalid floating point number',
  'LBL_NOT_MULTIENUM' => 'Not a MultiEnum',
  'LBL_MODULE_NAME' => 'Import',
  'LBL_MICROSOFT_OUTLOOK' => 'Microsoft Outlook',
  'LBL_ACT' => 'Act!',
  'LBL_SALESFORCE' => 'Salesforce.com',
  'LBL_NUM_1' => '1.',
  'LBL_NUM_2' => '2.',
  'LBL_NUM_3' => '3.',
  'LBL_NUM_4' => '4.',
  'LBL_NUM_5' => '5.',
  'LBL_NUM_6' => '6.',
  'LBL_NUM_7' => '7.',
  'LBL_NUM_8' => '8.',
  'LBL_NUM_9' => '9.',
  'LBL_NUM_10' => '10.',
  'LBL_NUM_11' => '11.',
  'LBL_NUM_12' => '12.',
  'LBL_' => '',
  'LBL_IMPORT_FIELDDEF_BOOL' => '&#39;0&#39; or &#39;1&#39;',
  'LBL_GOOD_FILE' => 'Przeczytano importowane pliki',
  'LBL_RECORDS_SKIPPED_DUE_TO_ERROR' => 'Ominięto rekordy z powodu błędu',
  'LBL_UPDATE_SUCCESSFULLY' => 'Z powodzeniem uaktualniono lub stworzono rekordy.',
  'LBL_SUCCESSFULLY_IMPORTED' => 'Z powodzeniem stworzono rekordy.',
  'LBL_STEP_4_TITLE' => 'Krok 4: Import plików',
  'LBL_STEP_5_TITLE' => 'Krok 5: Obejrzyj rezultaty',
  'LBL_CUSTOM_ENCLOSURE' => 'Pola zakfalifikowane jako:',
  'LBL_ERROR_UNABLE_TO_PUBLISH' => 'Nie można opublikować. Został zamapowany inny import o tej samej nazwie.',
  'LBL_ERROR_UNABLE_TO_UNPUBLISH' => 'Nie można usunąć opublikowanego i zamapowanego przez innego użytkownika pliku. Posiadasz zamapowany import o tej samej nazwie.',
  'LBL_ERROR_IMPORTS_NOT_SET_UP' => 'Importy nie są skonfigurowane do tego typu modułów.',
  'LBL_IMPORT_TYPE' => 'Akcje importu',
  'LBL_IMPORT_BUTTON' => 'Utwórz rekordy',
  'LBL_UPDATE_BUTTON' => 'Utwórz i aktualizuj rekordy',
  'LBL_ERROR_INVALID_BOOL' => 'Nieprawidłowa wartość (powinno być  1 lub 0)',
  'LBL_NO_ID' => 'Wymagane ID',
  'LBL_PRE_CHECK_SKIPPED' => 'Pominięto Wstepne sprawdzenie',
  'LBL_IMPORT_ERROR' => 'Pojawiły się błędy importu',
  'LBL_ERROR' => 'Błąd:',
  'LBL_NOLOCALE_NEEDED' => 'Konwersja danych lokalizacyjnych nie jest konieczna',
  'LBL_FIELD_NAME' => 'Nazwa pola',
  'LBL_VALUE' => 'Wartość',
  'LBL_ROW_NUMBER' => 'Numer wiersza',
  'LBL_NONE' => 'Nic',
  'LBL_REQUIRED_VALUE' => 'Nie odnaleziono wymaganej wartości',
  'LBL_ID_EXISTS_ALREADY' => 'Taki ID już istnieje w tej tabeli',
  'LBL_ASSIGNED_USER' => 'Jeśli ten użytkownik nie istenieje, użyj bieżącego',
  'LBL_SHOW_HIDDEN' => 'Pokaż pola, które nie są normalnie importowane',
  'LBL_UPDATE_RECORDS' => 'Uaktualnij istniejące rekordy, zamiast importować je (Cofnięcie operacji nie będzie możliwe)',
  'LBL_TEST' => 'Test Importu (nie zapisuje, ani nie zmienia danych)',
  'LBL_TRUNCATE_TABLE' => 'Opróżnij tabelę przed importem (usuwa wszystkie rekordy)',
  'LBL_RELATED_ACCOUNTS' => 'Nie twórz powiązanych kont',
  'LBL_NO_DATECHECK' => 'Przeskocz sprawdzanie danych (szybsze, lecz wysypie się, przy jakimkolwiek blędzie)',
  'LBL_NO_WORKFLOW' => 'Nie przeprowadzaj prac do wykonania podczas tego importu',
  'LBL_NO_EMAILS' => 'Nie wysyłaj powiadomień pocztą podczas tego importu',
  'LBL_NO_PRECHECK' => 'Tryb formatu natywnego',
  'LBL_STRICT_CHECKS' => 'Użyj tych reguł (Sprawdź również adresy pocztowe i numery telefonów)',
  'LBL_ERROR_SELECTING_RECORD' => 'Błąd wyboru rekordu:',
  'LBL_ERROR_DELETING_RECORD' => 'Bład usunięcia rekordu:',
  'LBL_NOT_SET_UP' => 'Import nie jest ustawiony dla tego typu modułu',
  'LBL_ARE_YOU_SURE' => 'Jesteś pewien? To wyczyści wszystkie dane w tym module.',
  'LBL_NO_RECORD' => 'Nie ma rekordów o tym ID do uaktualnienia',
  'LBL_NOT_SET_UP_FOR_IMPORTS' => 'Import nie jest ustawiony dla tego typu modułu',
  'LBL_DEBUG_MODE' => 'Włącz tryb debugowania',
  'LBL_ERROR_INVALID_ID' => 'Podane ID jest zbyt długie, aby pasować do pola (maksymalna długośc to 36 znaków)',
  'LBL_ERROR_INVALID_PHONE' => 'Niewłaściwy numer telefonu',
  'LBL_ERROR_INVALID_NAME' => 'String jest zbyt długi, aby pasować do pola',
  'LBL_ERROR_INVALID_VARCHAR' => 'String jest zbyt długi, aby pasować do pola',
  'LBL_ERROR_INVALID_DATE' => 'Nieprawidłowy format daty',
  'LBL_ERROR_INVALID_DATETIME' => 'Nieprawidłowy format daty i czasu',
  'LBL_ERROR_INVALID_DATETIMECOMBO' => 'Nieprawidłowy format daty i czasu',
  'LBL_ERROR_INVALID_TIME' => 'Nieprawidłowy format czasu',
  'LBL_ERROR_INVALID_INT' => 'Nieprawidłowa wartość liczbowa',
  'LBL_ERROR_INVALID_NUM' => 'Nieprawidłowa wartość numeryczna',
  'LBL_ERROR_INVALID_EMAIL' => 'Niewłaściwy format adresu email',
  'LBL_ERROR_INVALID_USER' => 'Nieprawidłowa nazwa użytkownika lub ID',
  'LBL_ERROR_INVALID_TEAM' => 'Nieprawidłowa nazwa zespołu lub ID',
  'LBL_ERROR_INVALID_ACCOUNT' => 'Nieprawidłowa nazwa klienta lub ID',
  'LBL_ERROR_INVALID_RELATE' => 'Nieprawidłowe pole zależne',
  'LBL_ERROR_INVALID_CURRENCY' => 'Nieprawidłowa wartość waluty',
  'LBL_ERROR_NOT_IN_ENUM' => 'Wartość nie występuje w liście rozwijalnej. Dozwolone wartości to:',
  'LBL_IMPORT_MODULE_NO_TYPE' => 'Import nie jest ustawiony dla tego typu modułu',
  'LBL_IMPORT_MODULE_NO_USERS' => 'UWAGA: Nie posiadasz zdefiniowanych użytkowników w swoim systemie. Jeśli przeprowadzisz najpierw import, bez dodawania użytkowników, wszystkie rekordy będą przydzielone do administratora.',
  'LBL_IMPORT_MODULE_MAP_ERROR' => 'Nie można opublikować. Jest inny zamapowany import o tej samej nazwie.',
  'LBL_IMPORT_MODULE_MAP_ERROR2' => 'Nie można usunąć opublikowanego i zamapowanego przez innego użytkownika pliku. Posiadasz zamapowany import o tej samej nazwie.',
  'LBL_IMPORT_MODULE_NO_DIRECTORY' => 'Folder',
  'LBL_IMPORT_MODULE_NO_DIRECTORY_END' => 'nie istnieje lub nie ma odpowiednich praw do zapisu',
  'LBL_IMPORT_MODULE_ERROR_NO_UPLOAD' => 'Nie udało się wysłać pliku, spróbuj ponownie',
  'LBL_IMPORT_MODULE_ERROR_LARGE_FILE' => 'Plik jest za duży. Maks.:',
  'LBL_IMPORT_MODULE_ERROR_LARGE_FILE_END' => 'Bajtów. Zmień wartość $upload_maxsize w pliku config.php',
  'LBL_TRY_AGAIN' => 'Spróbuj ponownie',
  'ERR_IMPORT_SYSTEM_ADMININSTRATOR' => 'Nie możesz importować użytkownika administratora systemu',
  'ERR_MULTIPLE' => 'Zdefiniowałeś kilka kolumn jako źródło dla pojedynczej kolumny.',
  'ERR_MISSING_REQUIRED_FIELDS' => 'Wypełnij wartości w polach wymaganych:',
  'ERR_MISSING_MAP_NAME' => 'Nie odnaleziono nazwy dla własnego mapowania',
  'ERR_SELECT_FULL_NAME' => 'Nie możesz wybrać pełnej nazwy kiedy wybrałeś Imię i Nazwisko.',
  'ERR_SELECT_FILE' => 'Wybierz plik do wysłania.',
  'LBL_SELECT_FILE' => 'Wybierz plik:',
  'LBL_CUSTOM' => 'Własny',
  'LBL_CUSTOM_CSV' => 'Własny plik z wartościami oddzielonymi przecinkiem',
  'LBL_CSV' => 'Plik z wartościami oddzielonymi przecinkiem',
  'LBL_TAB' => 'Plik z wartościami oddzielonymi tabulatorem',
  'LBL_CUSTOM_DELIMITED' => 'Plik z własnym znakiem rozdzielającym',
  'LBL_CUSTOM_DELIMITER' => 'Własny znak rozdzielający:',
  'LBL_FILE_OPTIONS' => 'Opcje pliku',
  'LBL_CUSTOM_TAB' => 'Własny plik z wartościami oddzielonymi tabulatorem',
  'LBL_DONT_MAP' => '-- Nie mapuj tego pola! --',
  'LBL_STEP_1_TITLE' => 'Krok 1: Wybierz źródło',
  'LBL_WHAT_IS' => 'Określ źródło danych:',
  'LBL_MY_SAVED' => 'Moje zapisane źródła:',
  'LBL_PUBLISH' => 'publikuj',
  'LBL_DELETE' => 'kasuj',
  'LBL_PUBLISHED_SOURCES' => 'Opublikowane źródło:',
  'LBL_UNPUBLISH' => 'Cofnij publikowanie',
  'LBL_NEXT' => 'Dalej >',
  'LBL_BACK' => '< Cofnij',
  'LBL_STEP_2_TITLE' => 'Krok 2: Wyślij plik do eksportu',
  'LBL_HAS_HEADER' => 'Posiada Nagłówek:',
  'LBL_NOTES' => 'Notatki:',
  'LBL_NOW_CHOOSE' => 'Wybierz plik do importu:',
  'LBL_IMPORT_OUTLOOK_TITLE' => 'Microsoft Outlook 98, 2000, XP, 2003 potrafi eksportować dane w formacie <b>Wartości oddzielone przecinkiem</b>, który może być użyty do przeniesienia danych. Żeby wyeksportować dane z Outlooka wykonaj następujące kroki:',
  'LBL_OUTLOOK_NUM_1' => 'Uruchom <b>MS Outlook</b>',
  'LBL_OUTLOOK_NUM_2' => 'Z Menu wybierz <b>Plik</b>, <b>Import i Eksport ...</b>',
  'LBL_OUTLOOK_NUM_3' => 'Wybierz <b>Eksportuj do pliku</b> kliknij <b>[Dalej]</b>',
  'LBL_OUTLOOK_NUM_4' => 'Wybierz <b>Wartości oddzielone przecinkiem (Windows)</b> kliknij <b>[Dalej]</b>.<br> Uwaga: System może upomnieć się o doinstalowanie modułu eksportu.',
  'LBL_OUTLOOK_NUM_5' => 'Wybierz folder <b>Kontakty</b> i kliknij <b>[Dalej]</b>. Możesz wybrać dowolny folder w którym przechowujesz kontakty.',
  'LBL_OUTLOOK_NUM_6' => 'Wybierz Nazwę Pliku i kliknij <b>[Dalej]</b>',
  'LBL_OUTLOOK_NUM_7' => 'Kliknij <b>[Zakończ]</b>',
  'LBL_IMPORT_SF_TITLE' => 'Salesforce.com potrafi eksportować do formatu <b>Wartości oddzielone przecinkiem</b>. Żeby wyeksportować dane postępuj zgodnie z poniższą instrukcją:',
  'LBL_SF_NUM_1' => 'Uruchom przeglądarkę, idź do <b>http://www.salesforce.com</b>, zaloguj się na swoje konto.',
  'LBL_SF_NUM_2' => 'Kliknij zakładkę <b>Raporty</b> w górnym menu.',
  'LBL_SF_NUM_3' => 'Żeby wyeksportować konta kliknij link: <b>Aktywni Klienci</b>. <br>Żeby wyeksportować kontakty kliknij link: <b>Mailing List</b>',
  'LBL_SF_NUM_4' => '<b>Krok 1: Wybierz typ raportu</b>, wybierz <b>Tabular Report</b> kliknij <b>Dalej</b>',
  'LBL_SF_NUM_5' => '<b>Krok 2: Wybierz kolumny raportu </b>, wybierz kolumny jakie chcesz wyeksportować i kliknij <b>Dalej</b>',
  'LBL_SF_NUM_6' => '<b>Krok 3: Wybierz rodzaj informacji do podsumowania </b>, kliknij <b>Dalej</b>',
  'LBL_SF_NUM_7' => '<b>Krok 4: Uporządkuj kolumny raportu </b>, kliknij <b>Dalej</b>',
  'LBL_SF_NUM_8' => '<b>Krok 5: Określ kryteria raportu</b>, Określ dokładne kryteria danych przeznaczonych do eksportu. Możesz w tym celu wykorzystać narzędzia zaawansowanego określania kryteriów. Po zakończeniu kliknij <b>Run Report</b>',
  'LBL_SF_NUM_9' => 'Raport zostanie wygenerowany; na stronie powinien pojawić się komunikat: <b>Report Generation Status: Complete.</b> kliknij <b>Eksportuj do Excela</b>',
  'LBL_SF_NUM_10' => '<b>Wyeksportuj Raport:</b>, wybierz format pliku <b>Comma Delimited .csv</b>. Kliknij <b>Export</b>.',
  'LBL_SF_NUM_11' => 'Pojawi się komunikat monitujący o zapisanie pliku na Twoim komputerze..',
  'LBL_IMPORT_ACT_TITLE' => 'Act! Potrafi eksportować dane w formacie  <b>Wartości oddzielone przecinkiem</b> dane takie możesz zaimportować do SugarSales. Żeby wyeksportować dane z programu ACT! wykonaj poniższe czynności:',
  'LBL_ACT_NUM_1' => 'Uruchom <b>ACT!</b>',
  'LBL_ACT_NUM_2' => 'Z menu wybierz <b>Plik</b> <b>Wymiana danych</b>, <b>Eksport...</b>',
  'LBL_ACT_NUM_3' => 'Wybierz format pliku: <b>Text-Delimited</b>',
  'LBL_ACT_NUM_4' => 'Wprowadź nazwę pliku i położenie, następnie kliknij <b>[Dalej]</b>',
  'LBL_ACT_NUM_5' => 'Wybierz <b>Tylko Kontakty</b>',
  'LBL_ACT_NUM_6' => 'Kliknij <b>Opcje...</b>',
  'LBL_ACT_NUM_7' => 'Wybierz <b>Przecinek</b> jako znak oddzielający pola',
  'LBL_ACT_NUM_8' => 'Zaznacz pole wyboru <b>Tak, eksportuj nazwy pól</b>, kliknij <b>[OK]</b>',
  'LBL_ACT_NUM_9' => 'Kliknij <b>[Dalej]</b>',
  'LBL_ACT_NUM_10' => 'Wybierz <b>Wszystkie Rekordy</b>, kliknij <b>[Zakończ]</b>',
  'LBL_IMPORT_CUSTOM_TITLE' => 'Wiele aplikacji pozwala na eksport w formacie <b>Plików tekstowych rozdzielonych przecinkiem (.csv)</b>. Generalnie obsługa eksportu w większości aplikacji składa się z następujących kroków:',
  'LBL_CUSTOM_NUM_1' => 'Uruchom aplikację, wskaż lub  załaduj źródło danych.',
  'LBL_CUSTOM_NUM_2' => 'Wybierz <b>Zapisz jako...</b> lub <b>Eksport...</b> z menu',
  'LBL_CUSTOM_NUM_3' => 'Zapisz plik w formacie <b>CSV</b> lub <b>Wartości oddzielone przecinkiem</b> .',
  'LBL_IMPORT_TAB_TITLE' => 'Wiele programów pozwala na export danych do  <b>plików z wartościami oddzielonymi tabulatorem (.tsv or .tab)</b>. Większość aplikacji postępuje tak:',
  'LBL_TAB_NUM_1' => 'Załaduj aplikację i otwórz plik z danymi',
  'LBL_TAB_NUM_2' => 'Wybierz <b>Zapisz jako...</b> lub <b>Eksport...</b> z opcji menu',
  'LBL_TAB_NUM_3' => 'Zapisz plik jako format<b>TSV</b> lub <b>plików z wartościami oddzielonymi tabulatorem</b>',
  'LBL_STEP_3_TITLE' => 'Krok 3: Zatwierdź pola i zaimportuj.',
  'LBL_SELECT_FIELDS_TO_MAP' => 'Z poniższej listy wskaż pola, które zamierzasz importować. Kiedy zakończysz kliknij <b>Importuj </b>:',
  'LBL_DATABASE_FIELD' => 'Pole bazy danych',
  'LBL_HEADER_ROW' => 'Nagłówek',
  'LBL_ROW' => 'Wiersz',
  'LBL_SAVE_AS_CUSTOM' => 'Zapisz jako własne mapowanie:',
  'LBL_SAVE_AS_CUSTOM_NAME' => 'Nazwa niestandardowego mapowania:',
  'LBL_CONTACTS_NOTE_1' => 'Jedno z pól Nazwisko lub Pełna Nazwa musi być zmapowane.',
  'LBL_CONTACTS_NOTE_2' => 'Jeśli zmapowane jest pole Pełna Nazwa, pola Imię i Nazwisko są ignorowane.',
  'LBL_CONTACTS_NOTE_3' => 'Jeśli zmapowałeś pole Pełna Nazwa, jego zawartość zostanie rozbita na Imię i Nazwisko po zakończeniu importu.',
  'LBL_CONTACTS_NOTE_4' => 'Ostatnie pola adresu 2 i 3 są łączone w pole Ulica adresu głównego podczas dodawania do bazy.',
  'LBL_ACCOUNTS_NOTE_1' => 'Ostatnie pola adresu 2 i 3 są łączone w pole Ulica adresu głównego podczas dodawania do bazy.',
  'LBL_REQUIRED_NOTE' => 'Wymagane pole(a):',
  'LBL_IMPORT_NOW' => 'Importuj',
  'LBL_CANNOT_OPEN' => 'Nie mogę otworzyć pliku do importu.',
  'LBL_NOT_SAME_NUMBER' => 'Twój plik zawiera niespójną ilość pól w poszczególnych liniach.',
  'LBL_NO_LINES' => 'Twój plik importu jest pusty.',
  'LBL_FILE_ALREADY_BEEN_OR' => 'Wskazany przez Ciebie plik nie istnieje lub został już zaimportowany',
  'LBL_SUCCESS' => 'Sukces:',
  'LBL_SUCCESSFULLY' => 'Poprawnie zaimportowano dane',
  'LBL_LAST_IMPORT_UNDONE' => 'Operacja ostatniego importu anulowana',
  'LBL_NO_IMPORT_TO_UNDO' => 'Nie można cofnąć operacji importu.',
  'LBL_FAIL' => 'Błąd:',
  'LBL_RECORDS_SKIPPED' => 'rekord pominięty ze wzgledu na brak lub niespójność danych',
  'LBL_IDS_EXISTED_OR_LONGER' => 'rekord pominięty. Rekord o identycznym ID istnieje lub jest dłuższy niż 36 znaków',
  'LBL_RESULTS' => 'Wyniki',
  'LBL_IMPORT_MORE' => 'Importuj następne',
  'LBL_FINISHED' => 'Zakończone',
  'LBL_UNDO_LAST_IMPORT' => 'Cofnij ostatni import',
  'LBL_LAST_IMPORTED' => 'Ostatnio importowany',
  'ERR_MULTIPLE_PARENTS' => 'Możesz zdefiniowac tylko jeden ID macierzysty.',
  'LBL_DUPLICATES' => 'Znaleziono duplikaty',
  'LNK_DUPLICATE_LIST' => 'Pobierz listę duplikatów',
  'LNK_ERROR_LIST' => 'Pobierz listę błędów',
  'LNK_RECORDS_SKIPPED_DUE_TO_ERROR' => 'Kliknij tutaj, aby pobrać pliki, które nie mogą być zaimportowane.',
  'LBL_UNIQUE_INDEX' => 'Wybierz wskaźnik do porównania duplikatów',
  'LBL_VERIFY_DUPS' => 'Sprawdź, czy nie ma duplikatów w rekordach o zaznaczonych indeksach',
  'LBL_INDEX_USED' => 'Index(y) użyte',
  'LBL_INDEX_NOT_USED' => 'Indeks(y) nieużyte',
  'LBL_IMPORT_MODULE_ERROR_NO_MOVE' => 'Plik nie został pomyślnie nadpisany. Sprawdź prawa do katalogu pamięci podręcznej instalacji Sugar (cache directory).',
  'LBL_IMPORT_FIELDDEF_ID' => 'Unikalny numer ID',
  'LBL_IMPORT_FIELDDEF_RELATE' => 'Nazwa luvID',
  'LBL_IMPORT_FIELDDEF_PHONE' => 'Numer telefonu',
  'LBL_IMPORT_FIELDDEF_TEAM_LIST' => 'Nazwa zespołu lub ID',
  'LBL_IMPORT_FIELDDEF_NAME' => 'Dowolny tekst',
  'LBL_IMPORT_FIELDDEF_VARCHAR' => 'Dowolny tekst',
  'LBL_IMPORT_FIELDDEF_TEXT' => 'Dowolny tekst',
  'LBL_IMPORT_FIELDDEF_TIME' => 'Czas',
  'LBL_IMPORT_FIELDDEF_DATE' => 'Data',
  'LBL_IMPORT_FIELDDEF_DATETIME' => 'Data i czas',
  'LBL_IMPORT_FIELDDEF_ASSIGNED_USER_NAME' => 'Nazwa użytkownika lub ID',
  'LBL_IMPORT_FIELDDEF_ENUM' => 'Lista',
  'LBL_IMPORT_FIELDDEF_EMAIL' => 'Adres email',
  'LBL_IMPORT_FIELDDEF_INT' => 'Numericznie (nie dziesiętnie)',
  'LBL_IMPORT_FIELDDEF_DOUBLE' => 'Numericznie (nie dziesiętnie)',
  'LBL_IMPORT_FIELDDEF_NUM' => 'Numericznie (nie dziesiętnie)',
  'LBL_IMPORT_FIELDDEF_CURRENCY' => 'Numericznie (również dziesiętnie)',
  'LBL_IMPORT_FIELDDEF_FLOAT' => 'Numericznie (również dziesiętnie)',
  'LBL_DATE_FORMAT' => 'Format daty:',
  'LBL_TIME_FORMAT' => 'Format czasu:',
  'LBL_TIMEZONE' => 'Strefa czsasowa:',
  'LBL_ADD_ROW' => 'Dodaj pole',
  'LBL_REMOVE_ROW' => 'Usuń pole',
  'LBL_DEFAULT_VALUE' => 'Domyślna wartość',
  'LBL_SHOW_ADVANCED_OPTIONS' => 'Pokaż zaawansowane opcje',
  'LBL_HIDE_ADVANCED_OPTIONS' => 'Ukryj zaawansowane opcje',
  'LBL_SHOW_PREVIEW_COLUMNS' => 'Pokaż podgląd kolumny',
  'LBL_HIDE_PREVIEW_COLUMNS' => 'Ukryj podgląd kolumny',
  'LBL_SAVE_MAPPING_AS' => 'Zachowaj mapowania jako',
  'LBL_OPTION_ENCLOSURE_QUOTE' => 'Pojedyncze zapytanie (&#39;)',
  'LBL_OPTION_ENCLOSURE_DOUBLEQUOTE' => 'Podwójne zapytanie (")',
  'LBL_OPTION_ENCLOSURE_NONE' => 'Nic',
  'LBL_OPTION_ENCLOSURE_OTHER' => 'Inny:',
  'LBL_IMPORT_COMPLETE' => 'Import zakończony',
  'LBL_IMPORT_RECORDS' => 'Importowane rekordy',
  'LBL_IMPORT_RECORDS_OF' => 'z',
  'LBL_IMPORT_RECORDS_TO' => 'do',
  'LBL_CURRENCY' => 'Waluta',
  'LBL_CURRENCY_SIG_DIGITS' => 'Cyfry waluty po przecinku',
  'LBL_LOCALE_EXAMPLE_NAME_FORMAT' => 'Przykład',
  'LBL_NUMBER_GROUPING_SEP' => 'Separator tysięcy',
  'LBL_DECIMAL_SEP' => 'Symbol dziesiętny',
  'LBL_LOCALE_DEFAULT_NAME_FORMAT' => 'Format wyświetlania nazwy',
  'LBL_LOCALE_NAME_FORMAT_DESC' => '<i>"s" pozdrowienie, "f" Imię, "l" Nazwisko</i>',
  'LBL_CHARSET' => 'Kodowanie pliku',
  'LBL_MY_SAVED_HELP' => 'Zapisane mapowania określają poprzednio użyte kombinacje danych źródłowych i zestawu pól bazy danych do mapowania na pola w importowanym pliku.<br>Kliknij <b>Opublikuj</b> aby uczynić to mapowanie dostępne dla innych użytkowników.<br>Kliknij <b>Wycofaj z publikacji</b> aby uczynić to mapowanie niedostępne dla innych użytkowników.',
  'LBL_MY_PUBLISHED_HELP' => 'Opublikowane mapowania określają poprzednio użyte kombinacje danych źródłowych i zestawu pól bazy danych do mapowania na pola w importowanym pliku.',
  'LBL_ENCLOSURE_HELP' => '<p>The <b>qualifier character</b> is used to enclose the intended field content, including any characters that are used as delimiters.<br><br>Example: If the delimiter is a comma (,) and the qualifier is a quotation mark ("),<br><b>"Cupertino, California"</b> is imported into one field in the application and appears as <b>Cupertino, California</b>.<br>If there are no qualifier characters, or if a different character is the qualifier,<br><b>"Cupertino, California"</b> is imported into two adjacent fields as <b>"Cupertino</b> and <b>Texas"</b>.<br><br>Note: The import file might not contain any qualifier characters.<br>The default qualifier character for comma- and tab- delimited files created in Excel is a quotation mark.</p>',
  'LBL_DELIMITER_COMMA_HELP' => 'Wybierz tę opcję, jeśli znakiem rozdzielającym pola w pliku importu jest <b>przecinek</b>, lub jeśli roższerzenie pliku to .csv.',
  'LBL_DELIMITER_TAB_HELP' => 'Wybierz tę opcję, jeśli znakiem rozdzielającym pola w pliku importu jest <b>tabulator</b>, lub jeśli roższerzenie pliku to .txt.',
  'LBL_DELIMITER_CUSTOM_HELP' => 'Wybierz tę opcję, jeśli znakiem rozdzielającym pola w pliku importu nie jest ani przecinek, ani tabulator, lecz inny znak, który należy podać w polu obok.',
  'LBL_DATABASE_FIELD_HELP' => 'Wybierz pole z listy wszystkich pól istniejących w bazie danych dla modułu.',
  'LBL_HEADER_ROW_HELP' => 'Są tam nazwy pól w wierszu nagłówka importowanego pliku.',
  'LBL_DEFAULT_VALUE_HELP' => 'Wskaż wartość, która zostanie użyta do określenia pola w tworzonym, lub uaktualnianym rekordzie, jeśli pole w pliku importu nie zawiera danych.',
  'LBL_ROW_HELP' => 'Pierwszy wiersz poniżej nagłówka w importowanym pliku zawiera dane.',
  'LBL_SAVE_MAPPING_HELP' => 'Wprowadź nazwę dla zestawu pól bazy danych, użytych powyżej dla zamapowania tych pól do pól w pliku importu.<br>Zestaw pól, jak również ich kolejność i źródło danych wybrane w kroku 1 importu, zostanie zachowana, gdy import się rozpocznie.<br>Zapisane mapowania mogą być wybrane w kroku 1 importu i użyte ponownie w innym imporcie.',
  'LBL_IMPORT_FILE_SETTINGS_HELP' => 'Określ ustawienia w pliku importu, by upewnić się, że dane są importowane <br> poprawnie.  Te ustawienia nie będą nadpisywać Twoich preferencji. Rekordy<br> utworzone lub uaktualnione będą zawierać ustawienia określone na stronie Twojego konta.',
  'LBL_IMPORT_FILE_SETTINGS' => 'Importuj ustawienia pliku',
  'LBL_VERIFY_DUPLCATES_HELP' => 'Wybierz pola w pliku importu, które będą używane przy sprawdzaniu duplikatów. <br>Jeśli dane w wybranych polach będą pasować do danych w polach w istniejących rekordach, nowe rekordy nie będą utworzone dla wierszy zawierających zduplikowane dane pól.<br>Wiersze zawierające duplikaty zostaną wyświetlone w rezultatach importu.',
  'LBL_IMPORT_STARTED' => 'Import rozpoczęty',
  'LBL_RECORD_CANNOT_BE_UPDATED' => 'Nie można aktualizować rekordu z powodu problemu z uprawnieniami',
);
