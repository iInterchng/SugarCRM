<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

	

$mod_strings = array (
  'LBL_EMAIL_BOUNCE_OPTIONS' => 'Možnosti zacházení s Bounce maily',
  'LBL_CREATE_CASE_REPLY_TEMPLATE_HELP' => 'Vyberte automatickou odpověd, kterou upozorníte odesílatele mailu, že Případ byl vytvořen. Mail obsahuje číslo Případu v předmětu zprávy, který se drží nastavení v Případovém makru. Tato reakce je zaslána pouze pokud se jedná o první mail od příjemce.',
  'LBL_BOUNCE_MODULE_NAME' => 'Schránka na Bounce maily',
  'LBL_SELECT_SUBSCRIBED_FOLDERS' => 'Vyberte odebíranou složku',
  'LBL_SSL_DESC' => 'Jestliže Váš mail server podporuje secure socket připojení,umožní se tímto SSL připojení pro import mailů.',
  'LNK_LIST_CREATE_NEW_BOUNCE' => 'Nová Schránka na Bounce maily',
  'LBL_GROUPFOLDER_ID' => 'ID skupiny složek',
  'LBL_ASSIGN_TO_GROUP_FOLDER' => 'Přiřadit ke skupině složek',
  'LBL_WARNING_CHANGING_AUTO_IMPORT_WITH_CREATE_CASE' => 'Upozornění: Automatický import musí byt povolen pro automatické vytváření případů.',
  'LBL_RE' => 'RE:',
  'LBL_FIND_OPTIMUM_KEY' => 'f',
  'LBL_MAILBOX_DEFAULT' => 'INBOX',
  'LBL_TEST_BUTTON_KEY' => 't',
  'LBL_TEST_BUTTON_TITLE' => 'Test [Alt+T]',
  'LBL_ASSIGN_TEAM' => 'Přiděleno týmům:',
  'ERR_BAD_LOGIN_PASSWORD' => 'Přilášení nebo heslo nesprávné',
  'ERR_BODY_TOO_LONG' => 'Text v body je příliš dlouhý na zachycení CELÉHO emailu. Přebytečný text byl odstraněn.',
  'ERR_INI_ZLIB' => 'Nepodařilo se dočasně vypnout Zlib kompresi. \\"Testoací nastavení\\" může selhat.',
  'ERR_MAILBOX_FAIL' => 'Nemohl jsem získat žádné mailboxy.',
  'ERR_NO_IMAP' => 'Nenalezeny žádné IMAP knihovny. Prosím vyřešte to, než budeme pokračovat PříchozímaEmailama',
  'ERR_NO_OPTS_SAVED' => 'Žádné Optimání nebyly uloženy s Vaším příchozím emailem.Prosím zkontrolujte nastavení',
  'ERR_TEST_MAILBOX' => 'Zkontrolujte nastavení a zkuste to znovu.',
  'LBL_APPLY_OPTIMUMS' => 'Aplikovat optimální',
  'LBL_ASSIGN_TO_USER' => 'Přiřadit uživateli',
  'LBL_AUTOREPLY_OPTIONS' => 'Nastavení auto-odpovědi',
  'LBL_AUTOREPLY' => 'Šablona auto-odpovědi',
  'LBL_AUTOREPLY_HELP' => 'Vyberte automatickou odpověď pro upozorněni odesílatelů že jejich odpověď byla doručena.',
  'LBL_BASIC' => 'Základní nastavení',
  'LBL_CASE_MACRO' => 'Makro pro případy',
  'LBL_CASE_MACRO_DESC' => 'Nastavte makro, které bude zpracováno a použito pro propojení importovaného emailu s případem.',
  'LBL_CASE_MACRO_DESC2' => 'Nastavte jakoukkoli hodnotu, ale zachovejte <pre>\\"%1\\"</pre>',
  'LBL_CERT_DESC' => 'Vynutit ověření platnosti bezpečtnostního  certifikátu  mail serveru - nepoužívejte tuto volbu pokud se sami přihlašujete.',
  'LBL_CERT' => 'Schválit platnost certifikátu',
  'LBL_CLOSE_POPUP' => 'Zavřít okno',
  'LBL_CREATE_NEW_GROUP' => '-- Při uložení vytvořit mailbox skupinu --',
  'LBL_CREATE_TEMPLATE' => 'Přidat',
  'LBL_SUBSCRIBE_FOLDERS' => 'Přihlásit se do složky',
  'LBL_DEFAULT_FROM_ADDR' => 'Standartní:',
  'LBL_DEFAULT_FROM_NAME' => 'Standartní:',
  'LBL_DELETE_SEEN' => 'Po importu smazat přečtené emaily',
  'LBL_EDIT_TEMPLATE' => 'Editace',
  'LBL_EMAIL_OPTIONS' => 'Nastavení manipulace s emaily',
  'LBL_FILTER_DOMAIN_DESC' => 'Neposílat žádné auto-odpovědi do této domény.',
  'LBL_ASSIGN_TO_GROUP_FOLDER_DESC' => 'Vyberte, zda chcete automaticky vytvořit e-mailový záznam v Sugaru pro všechny příchozí e-maily.',
  'LBL_POSSIBLE_ACTION_DESC' => 'Pro vytvoření možnosti případu, musí být vybrána skupina složky',
  'LBL_FILTER_DOMAIN' => 'Žádné auto odpovědi do domény',
  'LBL_FIND_OPTIMUM_MSG' => 'Nalezení optimálních proměných připojení.',
  'LBL_FIND_OPTIMUM_TITLE' => 'Nalézt optimální konfiguraci',
  'LBL_FIND_SSL_WARN' => '<br />Testování SSL může trvat dlouhou dobu. Mějte prosím strpení.<br />',
  'LBL_FORCE_DESC' => 'Některé IMAP/POP3 servery potřebují speciální přepínače. Check to force a negative switch when connecting (i.e., /notls)',
  'LBL_FORCE' => 'Nutit negativní',
  'LBL_FOUND_MAILBOXES' => 'Nalezeny následující použitelné složky. <br />Klikněte na jednu pro její použití.',
  'LBL_FOUND_OPTIMUM_MSG' => 'Nalezeno optimální nastavení. Stiskněte tlačítko níže pro uložení.',
  'LBL_FROM_ADDR' => 'Od adresa',
  'LBL_FROM_NAME_ADDR' => 'Odpovědět jméno/adresa',
  'LBL_FROM_NAME' => 'Od jméno',
  'LBL_GROUP_QUEUE' => 'Přiřadit ke skupině',
  'LBL_HOME' => 'Domů',
  'LBL_LIST_MAILBOX_TYPE' => 'Využití mailboxu',
  'LBL_LIST_NAME' => 'Název:',
  'LBL_LIST_GLOBAL_PERSONAL' => 'Typ',
  'LBL_LIST_SERVER_URL' => 'Mail server:',
  'LBL_LIST_STATUS' => 'Stav:',
  'LBL_LOGIN' => 'Uživatelské jméno',
  'LBL_MAILBOX_SSL_DESC' => 'se SSL when connecting. If this does not work, check that your PHP installation included \\"--with-imap-ssl\\" in the configuration.',
  'LBL_MAILBOX_SSL' => 'Použít SSL',
  'LBL_MAILBOX_TYPE' => 'Možné akce',
  'LBL_DISTRIBUTION_METHOD' => 'Způsob distribuce',
  'LBL_CREATE_CASE_REPLY_TEMPLATE' => 'Šablona auomatické odpovědy nového případu',
  'LBL_MAILBOX' => 'Monitorovaná složka',
  'LBL_TRASH_FOLDER' => 'Složka koše',
  'LBL_GET_TRASH_FOLDER' => 'Získat složku koše',
  'LBL_SENT_FOLDER' => 'Odesla složku',
  'LBL_GET_SENT_FOLDER' => 'Získat odeslanou složku',
  'LBL_SELECT' => 'Vybrat',
  'LBL_MARK_READ_DESC' => 'Při importu označit zprávy na serveru jako přečtené; nesmaže zprávy.',
  'LBL_MARK_READ_NO' => 'Po importu emaily smazat',
  'LBL_MARK_READ_YES' => 'Po importu ponechat zprávy na serveru',
  'LBL_MARK_READ' => 'Ponechat zprávy na serveru',
  'LBL_MAX_AUTO_REPLIES' => 'Počet automatických odpovědí',
  'LBL_MAX_AUTO_REPLIES_DESC' => 'Nastavit maximální počet automatických odpovědí k odeslání na unikátní e-mailovou adresu během 24 hodin.',
  'LBL_PERSONAL_MODULE_NAME' => 'Osobní e-mailový účet',
  'LBL_CREATE_CASE' => 'Vytvořit případ z e-mailu',
  'LBL_CREATE_CASE_HELP' => 'Vyberte, zda chcete automaticky vytvořit záznamy v Sugaru z příchozích e-mailů.',
  'LBL_MODULE_NAME' => 'Nastavení příchozího emailu',
  'LBL_MODULE_TITLE' => 'Příchozí email',
  'LBL_NAME' => 'Název',
  'LBL_NONE' => 'Žádný',
  'LBL_NO_OPTIMUMS' => 'Nepodařilo se najít optimální. Prosím zkontrolujte Vaše nastavení a zkuste znovu.',
  'LBL_ONLY_SINCE_DESC' => 'When using POP3, PHP cannot filter for New/Unread messages. This flag allows the request to check for messages SINCE the last time the mailbox was polled. This will significantly improve performance if your mail server cannot support IMAP.',
  'LBL_ONLY_SINCE_NO' => 'Ne. Zkontrovat všchny zprávy na serveru.',
  'LBL_ONLY_SINCE_YES' => 'Ano',
  'LBL_ONLY_SINCE' => 'Importovat pouze od poslední kontroly:',
  'LBL_OUTBOUND_SERVER' => 'Server odchozí pošty',
  'LBL_PASSWORD_CHECK' => 'Kontrola hesla',
  'LBL_PASSWORD' => 'Heslo',
  'LBL_POP3_SUCCESS' => 'Váš POP3 test proběhl úspěšně.',
  'LBL_POPUP_FAILURE' => 'Testovací připojení selhalo. Chyby jsou vypsány.',
  'LBL_POPUP_SUCCESS' => 'Testovací připojení proběhlo úspěšne. Vaše nastavení funguje.',
  'LBL_POPUP_TITLE' => 'Otestovat nastavení',
  'LBL_GETTING_FOLDERS_LIST' => 'Získávám seznam složek',
  'LBL_SELECT_TRASH_FOLDERS' => 'Vyberte složku koše',
  'LBL_SELECT_SENT_FOLDERS' => 'Vyberte složku pro odeslanou poštu',
  'LBL_DELETED_FOLDERS_LIST' => 'Následující složka (y):% s buď neexistují nebo byly odstraněny ze serveru',
  'LBL_PORT' => 'Port mailového serveru',
  'LBL_QUEUE' => 'Fronta Mailboxu',
  'LBL_REPLY_NAME_ADDR' => 'Odpovědět Jméno/E-mail',
  'LBL_REPLY_TO_NAME' => '"Odpovědět na" jméno:',
  'LBL_REPLY_TO_ADDR' => '"Odpovědět na" adresu:',
  'LBL_SAME_AS_ABOVE' => 'Používat Jméno/adresu',
  'LBL_SAVE_RAW' => 'Uložit hrubý zdroj',
  'LBL_SAVE_RAW_DESC_1' => 'Vyberte \\"Ano\\", pokud chcete zachovat hrubý zdroj všech importovaných emailů.',
  'LBL_SAVE_RAW_DESC_2' => 'Velké přílohy mohou způsobit selhání konzervativně, nebo špatně nakonfigurovaných databází',
  'LBL_SERVER_OPTIONS' => 'Pokročilé nastavení',
  'LBL_SERVER_TYPE' => 'Protokol mailového serveru',
  'LBL_SERVER_URL' => 'Adresa mailového serveru',
  'LBL_ASSIGN_TO_TEAM_DESC' => 'Vybraný tým má přístup k poštovnímu účtu.',
  'LBL_SSL' => 'Použít SSL',
  'LBL_STATUS' => 'Stav',
  'LBL_SYSTEM_DEFAULT' => 'Výchozí nastavení systému',
  'LBL_TEST_SETTINGS' => 'Zkontrolovat nastavení',
  'LBL_TEST_SUCCESSFUL' => 'Připojení bylo ukončno úspěšně.',
  'LBL_TEST_WAIT_MESSAGE' => 'Chvilku strpení prosím...',
  'LBL_TLS_DESC' => 'Use Transport Layer Security when connecting to the mail server - only use this if your mail server supports this protocol.',
  'LBL_TLS' => 'Použít TLS',
  'LBL_WARN_IMAP_TITLE' => 'Příchozí emaily zakázány.',
  'LBL_WARN_IMAP' => 'Varování:',
  'LBL_WARN_NO_IMAP' => 'Příchozí email <b>nemůže</b> fungovat bez IMAP knihoven. prosím kontaktujte Vašeho administrátora, aby toto vyřešil.',
  'LNK_CREATE_GROUP' => 'Vytvořit novou skupinu',
  'LNK_LIST_CREATE_NEW_GROUP' => 'Nová skupina Poštovní účet',
  'LNK_LIST_MAILBOXES' => 'Všechny mailboxy',
  'LNK_LIST_QUEUES' => 'Všechny fronty',
  'LNK_LIST_SCHEDULER' => 'Plánovač',
  'LNK_LIST_TEST_IMPORT' => 'Otestovat import emailu',
  'LNK_NEW_QUEUES' => 'Vytvořit novou frontu',
  'LNK_SEED_QUEUES' => 'Supervizor fronty od týmů',
  'LBL_IS_PERSONAL' => 'osboní',
  'LBL_ALLOW_OUTBOUND_GROUP_USAGE' => 'Umožnit uživatelům odeslat email s použitím jména a adresy (z pole Od) jako odpovědní adresy.',
  'LBL_ALLOW_OUTBOUND_GROUP_USAGE_DESC' => 'Pokud je tato volba vybrána, bude jméno a adresa (Od) svázáná s tímto skupinovým emailovým účtem vidět jako volba pro pole Od při psaní emailu u uživatelů, kteří mají přístup do tohoto skupinového emailu.',
  'LBL_STATUS_ACTIVE' => 'Aktivní',
  'LBL_STATUS_INACTIVE' => 'Neaktivní',
  'LBL_IS_GROUP' => 'skupina',
  'LBL_ENABLE_AUTO_IMPORT' => 'Importovat e-maily automaticky',
  'LBL_WARNING_CHANGING_AUTO_IMPORT' => 'Upozornění: Měníte nastavení Vašeho automatického importu, které změny mohou vést ke ztrátě dat.',
);

