<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

	

$mod_strings = array (
  'LBL_EMAIL_BOUNCE_OPTIONS' => 'Opcje obsługi autorespondera',
  'LBL_CREATE_CASE_REPLY_TEMPLATE_HELP' => 'Wybierz automatyczną odpowiedź, aby zawiadomić nadawców wiadomości, że utworzono sprawę. E-mail zawiera numer sprawy w polu Temat. Ta odpowiedź jest tylko wysyłana, gdy pierwszy e-mail jest otrzymany od odbiorcy.',
  'LBL_BOUNCE_MODULE_NAME' => 'Skrzynka obsługi autorespondera',
  'LNK_LIST_CREATE_NEW_BOUNCE' => 'Nowe konto obsługi autorespondera',
  'LBL_FIND_OPTIMUM_KEY' => 'f',
  'LBL_STATUS' => 'Status',
  'LBL_TEST_BUTTON_KEY' => 't',
  'LBL_TEST_BUTTON_TITLE' => 'Test [Alt+T]',
  'LBL_ASSIGN_TEAM' => 'Przydziel do zespołu',
  'LBL_RE' => 'Odpowiedz:',
  'ERR_BAD_LOGIN_PASSWORD' => 'Niewłaściwe hasło lub login',
  'ERR_BODY_TOO_LONG' => '\\rTekst wiadomości jest za długi, aby ściągnąć CAŁĄ wiadomość. Przycięto.',
  'ERR_INI_ZLIB' => 'Nie można czasowo wyłączyć kompresji Zlib. Testowanie ustawień może się nie powieść.',
  'ERR_MAILBOX_FAIL' => 'Nie mogę sprawdzić żadnych skrzynek pocztowych.',
  'ERR_NO_IMAP' => 'Nie znaleziono bibliotek IMAP.  Należy rozwiązać ten problem przez kontynuowaniem konfiguracji poczty przychodzącej',
  'ERR_NO_OPTS_SAVED' => 'Nie zapisano właściwych ustawień dla Twojej skrzynki pocztowej. Sprawdź te ustawienia jeszcze raz.',
  'ERR_TEST_MAILBOX' => 'Sprawdź ustawienia i spróbuj jeszcze raz.',
  'LBL_APPLY_OPTIMUMS' => 'Zatwierdź ustawienia',
  'LBL_ASSIGN_TO_USER' => 'Przydziel do użytkownika',
  'LBL_AUTOREPLY_OPTIONS' => 'Opcje autoodpowiedzi',
  'LBL_AUTOREPLY' => 'Wzór autoodpowiedzi',
  'LBL_AUTOREPLY_HELP' => 'Wybierz automatyczną odpowiedź aby zawiadomić nadawców, że ich wiadomość została otrzymana.',
  'LBL_BASIC' => 'Podstawowe ustawienia',
  'LBL_CASE_MACRO' => 'Makro spraw',
  'LBL_CASE_MACRO_DESC' => 'Ustaw macro, które będzie używane jako mechanizm importu wiadomości przychodzących do spraw.',
  'LBL_CASE_MACRO_DESC2' => 'Ustaw dowolną wartość, ale nie używaj <b>"%1"</b>.',
  'LBL_CERT_DESC' => 'Sprawdź ważność certyfikatu servera\'s Security Certificate - nie używaj, gdy jest samodzielnie podpisany.',
  'LBL_CERT' => 'Ważność certyfikatu',
  'LBL_CLOSE_POPUP' => 'Zamknij to okno',
  'LBL_CREATE_NEW_GROUP' => '--Utwórz użytkownika grupowego Poczty przy zapisaniu--',
  'LBL_CREATE_TEMPLATE' => 'Utwórz',
  'LBL_SUBSCRIBE_FOLDERS' => 'Subskrybuj foldery',
  'LBL_DEFAULT_FROM_ADDR' => 'Domyślny adres:',
  'LBL_DEFAULT_FROM_NAME' => 'Domyślna nazwa:',
  'LBL_DELETE_SEEN' => 'Usuń przeczytane wiadomości po imporcie',
  'LBL_EDIT_TEMPLATE' => 'Edytuj',
  'LBL_EMAIL_OPTIONS' => 'Opcje transportu poczty',
  'LBL_FILTER_DOMAIN_DESC' => 'Nie wysyłaj auto-odpowiedzi dla tej domeny.',
  'LBL_ASSIGN_TO_GROUP_FOLDER_DESC' => 'Przydzielanie kont pocztowych do folderów grupowych włącza automatyczny import wiadomości.',
  'LBL_POSSIBLE_ACTION_DESC' => 'Musi zostać wybrany folder grupowy, aby skorzystać z funkcji Utwórz Sprawę',
  'LBL_FILTER_DOMAIN' => 'Brak auto-odpowiedzi dla domeny:',
  'LBL_FIND_OPTIMUM_MSG' => '<br>Znajdź optymalne zmienne połączenia.',
  'LBL_FIND_OPTIMUM_TITLE' => 'Znajdź optymalną konfigurację',
  'LBL_FIND_SSL_WARN' => '<br>Testowanie SSL może zająć trochę czasu. Poczekaj chwilę.<br>',
  'LBL_FORCE_DESC' => 'Niektóre serweryIMAP/POP3 wymagają specjalnych ustawień. Sprawdź ustawienie "negatywne" podczas połączenia (np.., /notls)',
  'LBL_FORCE' => 'Sprawdź ustawienie "negatywne"',
  'LBL_FOUND_MAILBOXES' => 'Znaleziono następujące skrzynki:',
  'LBL_FOUND_OPTIMUM_MSG' => '<br>Znaleziono optymalne ustawienia.  Naciśnij przycisk poniżej, aby zatwierdzić je jako ustawienia Twojej skrzynki.',
  'LBL_FROM_ADDR' => '"Pole Od" - Adres',
  'LBL_FROM_NAME_ADDR' => 'Odopwiedź Nazwa/Email:',
  'LBL_FROM_NAME' => '"Pole Od" - Nazwa',
  'LBL_GROUP_QUEUE' => 'Przydziel do użytkownika grupowego',
  'LBL_HOME' => 'Strona główna',
  'LBL_LIST_MAILBOX_TYPE' => 'Wykorzystanie skrzynki',
  'LBL_LIST_NAME' => 'Nazwa:',
  'LBL_LIST_GLOBAL_PERSONAL' => 'Grupowe/Osobiste',
  'LBL_LIST_SERVER_URL' => 'Serwer poczty:',
  'LBL_LIST_STATUS' => 'Status:',
  'LBL_LOGIN' => 'Login nazwa użytkownika',
  'LBL_MAILBOX_DEFAULT' => 'Skrzynka odbiorcza',
  'LBL_MAILBOX_SSL_DESC' => 'Używaj SSL gdy połączony. Jeżeli nie działa, to sprawdź parametr "--with-imap-ssl" w Konfiguracji PHP.',
  'LBL_MAILBOX_SSL' => 'Używaj  SSL',
  'LBL_MAILBOX_TYPE' => 'Możliwe działania',
  'LBL_DISTRIBUTION_METHOD' => 'Metoda dystrybucji',
  'LBL_CREATE_CASE_REPLY_TEMPLATE' => 'Utwórz wzorzec odopowiedzi dla spraw',
  'LBL_MAILBOX' => 'Monitorowane foldery',
  'LBL_TRASH_FOLDER' => 'Folder kosza',
  'LBL_GET_TRASH_FOLDER' => 'Pobierz folder kosza',
  'LBL_SENT_FOLDER' => 'Folder wysłane',
  'LBL_GET_SENT_FOLDER' => 'Pobierz folder wysłane',
  'LBL_SELECT' => 'Wybierz',
  'LBL_MARK_READ_DESC' => 'Zaznacz wiadomości przeczytane podczas importu. Nie usuwaj.',
  'LBL_MARK_READ_NO' => 'Poczta zaznaczona do usunięcia po imporcie',
  'LBL_MARK_READ_YES' => 'Poczta pozostawiona na serwerze po imporcie',
  'LBL_MARK_READ' => 'Pozostaw kopie wiadomości na serwerze.',
  'LBL_MAX_AUTO_REPLIES' => 'Liczba autoodpowiedzi',
  'LBL_MAX_AUTO_REPLIES_DESC' => 'Ustaw maksymalną liczbę autoodpowiedzi do wysłania na ten sam adres w przedziale 24 godzin.',
  'LBL_PERSONAL_MODULE_NAME' => 'Osobiste konto pocztowe',
  'LBL_CREATE_CASE' => 'Utwórz sprawę z email',
  'LBL_CREATE_CASE_HELP' => 'Wybierz, aby automatycznie tworzyć rekordy spraw w aplikacji Sugar z przychodzących e-maili.',
  'LBL_MODULE_NAME' => 'Ustawienia poczty przychodzącej',
  'LBL_MODULE_TITLE' => 'Poczta przychodząca',
  'LBL_NAME' => 'Nazwa',
  'LBL_NONE' => 'Nic',
  'LBL_NO_OPTIMUMS' => 'Nie można znaleźć ustawień optymalnych. Sprawdź swoje ustawienia i spróbuj ponownie.',
  'LBL_ONLY_SINCE_DESC' => 'Kiedy używasz POP3, PHP nie możesz filtrować  Nowych/Nieprzeczytanych wiadomości.  Ta flaga pozwala zapytać o wiadomości OD CZASU ostatniego sprawdzania poczty.  To znacząco wpływa na poprawę wydajnośći jezeli Twój serwer nie wspiera IMAP.',
  'LBL_ONLY_SINCE_NO' => 'Nie. Sprawdź wszystkie wiadomości na serwerze.',
  'LBL_ONLY_SINCE_YES' => 'Tak.',
  'LBL_ONLY_SINCE' => 'Importuj tylko zmiany od odstaniego importu:',
  'LBL_OUTBOUND_SERVER' => 'Serwer poczty wychodzącej',
  'LBL_PASSWORD_CHECK' => 'Weryfikacja hasła',
  'LBL_PASSWORD' => 'Hasło',
  'LBL_POP3_SUCCESS' => 'Twoje połączenie POP3 zostało nawiązane pomyślnie.',
  'LBL_POPUP_FAILURE' => 'Połączenie nie powiodło się. Informacja o błędzie poniżej',
  'LBL_POPUP_SUCCESS' => 'Połączenie zakończone powodzeniem. Twoje ustawienia działają.',
  'LBL_POPUP_TITLE' => 'Testuj ustawienia',
  'LBL_GETTING_FOLDERS_LIST' => 'Pobieranie listy folderów',
  'LBL_SELECT_SUBSCRIBED_FOLDERS' => 'Zaznacz foldery do subskrybcji',
  'LBL_SELECT_TRASH_FOLDERS' => 'Wybierz folder kosza',
  'LBL_SELECT_SENT_FOLDERS' => 'Wybierz folder wysłane',
  'LBL_DELETED_FOLDERS_LIST' => 'Żaden z folderów %s nie istnieje, lub został usunięty z serwera',
  'LBL_PORT' => 'Port serwera poczty',
  'LBL_QUEUE' => 'Kolejkowanie skrzynek pocztowych',
  'LBL_REPLY_NAME_ADDR' => 'Odpowiedz Nazwa/Adres',
  'LBL_REPLY_TO_NAME' => 'Nazwa"Odpowiedź do"',
  'LBL_REPLY_TO_ADDR' => 'Adres "Odpowiedz do"',
  'LBL_SAME_AS_ABOVE' => 'Uzyj z Nazwa/Adres',
  'LBL_SAVE_RAW' => 'Zapisz źródło strony',
  'LBL_SAVE_RAW_DESC_1' => 'Wybierz "Tak", jeśli chcesz zabezpieczyć źródło wiadomości dla każdej importowanej wiadomości.',
  'LBL_SAVE_RAW_DESC_2' => 'Duże załączniki mogą spowodować problemy tradycyjnie lub nieprawidłowo skonfigurowanych baz danych.',
  'LBL_SERVER_OPTIONS' => 'Zaawansowane opcje serwera poczty',
  'LBL_SERVER_TYPE' => 'Protokół serwera pocztowego',
  'LBL_SERVER_URL' => 'Serwer poczty przychodzącej',
  'LBL_SSL_DESC' => 'Jeżeli Twój serwer poczty wspiera bezpieczne połączenie, włączenie tej funkcji spowoduje użycie SSL podczas importowania poczty.',
  'LBL_ASSIGN_TO_TEAM_DESC' => 'Zaznaczony zespół ma dostęp do konta pocztowego. Jeśli jest wybrany Folder Grupowy, zespół przydzielony do niego, jest nadrzędny wobec zaznaczonego.',
  'LBL_SSL' => 'Używaj SSL',
  'LBL_SYSTEM_DEFAULT' => 'Domyślne ustawienia',
  'LBL_TEST_SETTINGS' => 'Testuj ustawienia',
  'LBL_TEST_SUCCESSFUL' => 'Połączenie zakończone pomyślnie.',
  'LBL_TEST_WAIT_MESSAGE' => 'Poczekaj chwilę...',
  'LBL_TLS_DESC' => 'Użyj TLS gdy połączony z serwerem - używaj tylko, gdy Twój serwer akceptuje ten protokół.',
  'LBL_TLS' => 'Używaj TLS',
  'LBL_WARN_IMAP_TITLE' => 'Ostrzeżenie IMAP',
  'LBL_WARN_IMAP' => 'Ostrzeżenia:',
  'LBL_WARN_NO_IMAP' => 'Ten klient nie posiada bibliotek c-client wkompilowanych do PHP (--with-imap=/path/to/imap_c-client_library). Skontatkuj się z administratorem, aby usunąć ten problem.',
  'LNK_CREATE_GROUP' => 'Utwórz nową grupę',
  'LNK_LIST_CREATE_NEW_GROUP' => 'Konto pocztowe nowej grupy',
  'LNK_LIST_MAILBOXES' => 'Wszystkie skrzynki',
  'LNK_LIST_QUEUES' => 'Wszystkie oczekujące',
  'LNK_LIST_SCHEDULER' => 'Harmonogramy',
  'LNK_LIST_TEST_IMPORT' => 'Testuj importowanie wiadomości',
  'LNK_NEW_QUEUES' => 'Utwórz nową kolejkę',
  'LNK_SEED_QUEUES' => 'Wyślij oczekujące wiadomości zespołów',
  'LBL_IS_PERSONAL' => 'osobisty',
  'LBL_GROUPFOLDER_ID' => 'Id grupowego folderu',
  'LBL_ASSIGN_TO_GROUP_FOLDER' => 'Przydziel do grupowego folderu',
  'LBL_ALLOW_OUTBOUND_GROUP_USAGE' => 'Zezwalaj użytkownikom wysyłanie wiadomości używając "Od" nazwa i adres jako odpowiedź do adresu',
  'LBL_ALLOW_OUTBOUND_GROUP_USAGE_DESC' => 'Gdy ta opcja jest wybrana, pola "Od nazwa" i "Od adres e-mail", związane z tym kontem pocztowym grupy, pojawią się jako opcja dla pola "Od" podczas tworzenia wiadomości dla użytkowników, którzy mają dostęp do tego konta grupy.',
  'LBL_STATUS_ACTIVE' => 'Aktywny',
  'LBL_STATUS_INACTIVE' => 'Nieaktywny',
  'LBL_IS_GROUP' => 'grupowy',
  'LBL_ENABLE_AUTO_IMPORT' => 'Automatycznie importuj wiadomości e-mail',
  'LBL_WARNING_CHANGING_AUTO_IMPORT' => 'Ostrzeżenie: Modyfikujesz swoje ustawienia automatycznego importu, które mogą spowodować utratę danych.',
  'LBL_WARNING_CHANGING_AUTO_IMPORT_WITH_CREATE_CASE' => 'Ostrzeżenie: Auto import musi być włączone podczas automatycznego tworzenia spraw.',
);

