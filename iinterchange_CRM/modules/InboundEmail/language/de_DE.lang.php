<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

	

$mod_strings = array (
  'LBL_ALLOW_OUTBOUND_GROUP_USAGE' => 'Erlaubt User E-Mails zu verschicken, wo der "von" Name und Adresse als Antwort gesetzt werden',
  'LBL_ALLOW_OUTBOUND_GROUP_USAGE_DESC' => 'Bei dieser Option, wird die "Von" Name und "Von" Adresse mit dem Gruppen E-Mail Konto verknüpft für User mit Zugriff auf diesem Gruppen E-Mail Konto als Option bei der E-Mail Erstellung angezeigt.',
  'LBL_AUTOREPLY_HELP' => 'Select an automated response to notify email senders that their response has been received.',
  'LBL_EMAIL_BOUNCE_OPTIONS' => 'Bounce Handling Options',
  'LBL_FIND_OPTIMUM_KEY' => 'f',
  'LBL_HOME' => 'Home',
  'LBL_LIST_NAME' => 'Name:',
  'LBL_CREATE_CASE_REPLY_TEMPLATE_HELP' => 'Select an automated response to notify email senders that a case has been created. The email contains the case number in the Subject line which adheres to the Case Macro setting.  This response is only sent when the first email is received from the recipient.',
  'LBL_CREATE_CASE_HELP' => 'Select to automatically create case records in Sugar from incoming emails.',
  'LBL_BOUNCE_MODULE_NAME' => 'Bounce Handling Mailbox',
  'LBL_NAME' => 'Name',
  'LBL_PORT' => 'Mail Server Port',
  'LBL_STATUS' => 'Status',
  'LBL_TEST_BUTTON_KEY' => 't',
  'LBL_TEST_BUTTON_TITLE' => 'Test [Alt+T]',
  'LBL_WARNING_CHANGING_AUTO_IMPORT_WITH_CREATE_CASE' => 'Warning: Auto import must be enabled when automatically creating cases.',
  'LBL_ASSIGN_TEAM' => 'Den Teams zuweisen',
  'LBL_RE' => 'AW:',
  'ERR_BAD_LOGIN_PASSWORD' => 'Login oder Passwort stimmen nicht',
  'ERR_BODY_TOO_LONG' => '\\rTextkörper zu lang um die GANZE E-Mail zu speichern. Abgeschnitten.',
  'ERR_INI_ZLIB' => 'Konnte Zlib Komprimierung nicht temporär ausschalten. "Teste Einstellungen" könnte fehlschlagen.',
  'ERR_MAILBOX_FAIL' => 'Konnte keine E-Mail Konten finden.',
  'ERR_NO_IMAP' => 'Keine IMAP Bibliotheken gefunden. Bitte korrigieren Sie das bevor Sie mit eingehenden E-Mails weiterarbeiten können.',
  'ERR_NO_OPTS_SAVED' => 'Für Ihre eingehende E-Mail Mailbox wurden keine Optimums gespeichert. Bitte überprüfen Sie die Einstellungen.',
  'ERR_TEST_MAILBOX' => 'Überprüfen Sie bitte Ihre Einstellungen und versuchen Sie es erneut.',
  'LBL_APPLY_OPTIMUMS' => 'Optimums anwenden',
  'LBL_ASSIGN_TO_USER' => 'Mit Benutzer verknüpfen',
  'LBL_AUTOREPLY_OPTIONS' => 'Auto-Antwort Optionen',
  'LBL_AUTOREPLY' => 'Auto-Antwort Vorlage',
  'LBL_BASIC' => 'Basis Setup',
  'LBL_CASE_MACRO' => 'Anfrage Macro',
  'LBL_CASE_MACRO_DESC' => 'Setzen Sie das Macro, das verwendet wird, um importierte E-Mails Anfragen zuzuweisen.',
  'LBL_CASE_MACRO_DESC2' => 'Sezten Sie irgendeinen Wert, aber behalten Sie das <b>"%1"</b>.',
  'LBL_CERT_DESC' => 'Validierung des Mailserver Sicherheitszertifikats erzwingen - nicht verwenden, wenn selbstzertifiziert.',
  'LBL_CERT' => 'Zertifikat validieren',
  'LBL_CLOSE_POPUP' => 'Fenster schließen',
  'LBL_CREATE_NEW_GROUP' => '--Postfach Gruppe beim Speichern erzeugen--',
  'LBL_CREATE_TEMPLATE' => 'Erstellen',
  'LBL_SUBSCRIBE_FOLDERS' => 'Ordner abonnieren',
  'LBL_DEFAULT_FROM_ADDR' => 'Standard:',
  'LBL_DEFAULT_FROM_NAME' => 'Standard:',
  'LBL_DELETE_SEEN' => 'Gelesene Emails nach Import löschen',
  'LBL_EDIT_TEMPLATE' => 'Bearbeiten',
  'LBL_EMAIL_OPTIONS' => 'E-Mail Bearbeitungs Optionen',
  'LBL_FILTER_DOMAIN_DESC' => 'Keine Auto-Antwort E-Mails an folgende Domain senden.',
  'LBL_ASSIGN_TO_GROUP_FOLDER_DESC' => 'Das Zuordnen eines E-Mail Kontos zu einem Gruppenordner aktiviert den automatischen Import von E-Mails.',
  'LBL_POSSIBLE_ACTION_DESC' => 'Für die Option "Ticket erstellen" muss ein Gruppenordner ausgewählt werden.',
  'LBL_FILTER_DOMAIN' => 'Keine Auto-Antwort an diese Domain',
  'LBL_FIND_OPTIMUM_MSG' => '<br>Suche Optimum Verbindungseinstellungen',
  'LBL_FIND_OPTIMUM_TITLE' => 'Suche Optimum Konfiguration',
  'LBL_FIND_SSL_WARN' => '<br>Der SSL Test kann einige Zeit dauern. Haben Sie bitte Geduld.<br>',
  'LBL_FORCE_DESC' => 'Einige IMAP/POP3 Server benötigen spezielle Schalter. Erzwingen Sie bitte eine negative Schaltung bei der Verbindung (z.B. /notls)',
  'LBL_FORCE' => 'Erzwinge Negativ',
  'LBL_FOUND_MAILBOXES' => 'Folgende Postfächer gefunden:<br>Klicken Sie auf eines um es auszuwählen:',
  'LBL_FOUND_OPTIMUM_MSG' => '<br><br>Optimum Einstellungen wurden gefunden. Drücken Sie auf die Schaltfläche unten um diese für Ihre Mailbox zu übernehmen.',
  'LBL_FROM_ADDR' => '"Von" Adresse',
  'LBL_FROM_NAME_ADDR' => 'Antwort Name/E-Mail:',
  'LBL_FROM_NAME' => '"Von" Name',
  'LBL_GROUP_QUEUE' => 'An Gruppe zuweisen',
  'LBL_LIST_MAILBOX_TYPE' => 'Postfach Nutzung',
  'LBL_LIST_GLOBAL_PERSONAL' => 'Gruppe/Personal',
  'LBL_LIST_SERVER_URL' => 'Mail Server:',
  'LBL_LIST_STATUS' => 'Status:',
  'LBL_LOGIN' => 'Benutzername',
  'LBL_MAILBOX_DEFAULT' => 'Posteingang',
  'LBL_MAILBOX_SSL_DESC' => 'SSL zum Verbinden benützen. Wenn das nicht funktioniert, prüfen Sie ob Ihre PHP Installation "--with-imap-ssl" in der Konfiguration beinhaltet.',
  'LBL_MAILBOX_SSL' => 'Verwende SSL',
  'LBL_MAILBOX_TYPE' => 'Mögliche Aktionen',
  'LBL_DISTRIBUTION_METHOD' => 'Verteilmethode',
  'LBL_CREATE_CASE_REPLY_TEMPLATE' => 'Neue Ticket-Antwortvorlage',
  'LBL_MAILBOX' => 'Überwachter Ordner',
  'LBL_TRASH_FOLDER' => 'Papierkorb Ordner',
  'LBL_GET_TRASH_FOLDER' => 'Papierkorb Ordner holen',
  'LBL_SENT_FOLDER' => 'Gesendet Ordner',
  'LBL_GET_SENT_FOLDER' => 'Gesendet Ordner holen',
  'LBL_SELECT' => 'Auswählen',
  'LBL_MARK_READ_DESC' => 'Nachrichten auf Server als gelesen markieren; nicht löschen.',
  'LBL_MARK_READ_NO' => 'E-Mails werden nach dem Import als gelöscht markiert',
  'LBL_MARK_READ_YES' => 'E-Mails bleiben nach dem Import auf dem Server',
  'LBL_MARK_READ' => 'Nachrichten auf Server lassen',
  'LBL_MAX_AUTO_REPLIES' => 'Anzahl Auto-Antworten',
  'LBL_MAX_AUTO_REPLIES_DESC' => 'Setzen Sie die maximale Anzahl von Auto-Antworten für eine eindeutige E-Mail Adresse während 24 Stunden',
  'LBL_PERSONAL_MODULE_NAME' => 'persönlicher Mail Account',
  'LBL_CREATE_CASE' => 'Erstelle Ticket vom Email',
  'LBL_MODULE_NAME' => 'Einstellungen eingehende E-Mails',
  'LBL_MODULE_TITLE' => 'Eingehende E-Mails',
  'LBL_NONE' => 'Kein(e)',
  'LBL_NO_OPTIMUMS' => 'Konnte Optimum Einstellungen nicht finden. Bitte überprüfen Sie Ihre Einstellungen und versuchen Sie es dann noch einmal.',
  'LBL_ONLY_SINCE_DESC' => 'PHP kann bei POP3 neue bzw. ungelesenen E-Mails nicht filtern. Setzen Sie dieses Flag um neue Mitteilungen seit der letzten Abfrage zu suchen. Dies erhöht die Performance signifikat falls Ihr Mail Server kein IMAP unterstützt!',
  'LBL_ONLY_SINCE_NO' => 'Nein. Prüfe alle E-Mails auf dem Mailserver.',
  'LBL_ONLY_SINCE_YES' => 'Ja.',
  'LBL_ONLY_SINCE' => 'Importieren nur seit letztem Abruf:',
  'LBL_OUTBOUND_SERVER' => 'Ausgehende Mail Server',
  'LBL_PASSWORD_CHECK' => 'Passwort Überprüfung',
  'LBL_PASSWORD' => 'Passwort',
  'LBL_POP3_SUCCESS' => 'Ihre POP3 Test Verbindung war erfolgreich.',
  'LBL_POPUP_FAILURE' => 'Testverbindung fehlerhaft. Der Fehler wird unten angezeigt.',
  'LBL_POPUP_SUCCESS' => 'Testverbindung erfolgreich. Ihre Einstellungen funktionieren.',
  'LBL_POPUP_TITLE' => 'Teste Einstellungen',
  'LBL_GETTING_FOLDERS_LIST' => 'Hole Ordnerliste',
  'LBL_SELECT_SUBSCRIBED_FOLDERS' => 'Abonnierte(n) Ordner auswählen',
  'LBL_SELECT_TRASH_FOLDERS' => 'Papierkorb Ordner auswählen',
  'LBL_SELECT_SENT_FOLDERS' => 'Gesendet Ordner auswählen',
  'LBL_DELETED_FOLDERS_LIST' => 'Folgende(r) Ordner %s existieren nicht oder wurden gelöscht',
  'LBL_QUEUE' => 'Postfach Warteschlange',
  'LBL_REPLY_NAME_ADDR' => 'Antwort Name/E-Mail',
  'LBL_REPLY_TO_NAME' => '"Antwort" Name',
  'LBL_REPLY_TO_ADDR' => '"Antwort" E-Mail',
  'LBL_SAME_AS_ABOVE' => 'Bestehende Name/E-Mail verwenden',
  'LBL_SAVE_RAW' => 'Quellcode speichern',
  'LBL_SAVE_RAW_DESC_1' => 'Wählen Sie \\"Ja\\" wenn Sie den Quellcode für jede importierte E-Mail behalten wollen.',
  'LBL_SAVE_RAW_DESC_2' => 'Grosse Anhänge können bei konservativ oder nicht korrekt konfigurierten Datenbanken zu Fehlern führen.',
  'LBL_SERVER_OPTIONS' => 'Erweiterte Einstellungen',
  'LBL_SERVER_TYPE' => 'Mail Server Protokoll',
  'LBL_SERVER_URL' => 'Mail Server Adresse',
  'LBL_SSL_DESC' => 'Falls Ihr Mail Server SSL Verbindungen unterstützt, so werden beim Import der E-Mails SSL Verbindungen erzwungen.',
  'LBL_ASSIGN_TO_TEAM_DESC' => 'Das ausgewählte Team hat Zugang zu dem E-Mail Konto. Wenn ein Gruppenordner ausgewählt wurde dann überschreibt das dem Gruppenordner zugewiesene Team das ausgewählte.',
  'LBL_SSL' => 'Verwende SSL',
  'LBL_SYSTEM_DEFAULT' => 'System Vorgabe',
  'LBL_TEST_SETTINGS' => 'Teste Einstellungen',
  'LBL_TEST_SUCCESSFUL' => 'Verbindung erfolgreich hergestellt.',
  'LBL_TEST_WAIT_MESSAGE' => 'Einen Moment bitte...',
  'LBL_TLS_DESC' => 'Verwende TLS beim Verbinden zum Mailserver - verwenden Sie dies nur, wenn Ihr Mailserver dieses Protokoll unterstützt.',
  'LBL_TLS' => 'Verwende TLS',
  'LBL_WARN_IMAP_TITLE' => 'Eingehende E-Mails deaktiviert',
  'LBL_WARN_IMAP' => 'Warnungen:',
  'LBL_WARN_NO_IMAP' => 'Eingehenden E-Mail <b>kann nicht</b> funktionieren, ohne dass die IMAP c-client libraries im  PHP module integriert/aktiviert wurden. Bitte kontaktieren Sie den Administrator zur Lösung dieses Problems.',
  'LNK_CREATE_GROUP' => 'Neue Gruppe',
  'LNK_LIST_CREATE_NEW_GROUP' => 'Neuer Gruppen Mail Account',
  'LNK_LIST_CREATE_NEW_BOUNCE' => 'New Bounce handling Account',
  'LNK_LIST_MAILBOXES' => 'Alle Postfächer',
  'LNK_LIST_QUEUES' => 'Alle Warteschlangen',
  'LNK_LIST_SCHEDULER' => 'Geplante Aufgaben',
  'LNK_LIST_TEST_IMPORT' => 'Teste E-Mail Import',
  'LNK_NEW_QUEUES' => 'Neue Warteschlange',
  'LNK_SEED_QUEUES' => 'Seed Warteschlangen der Teams',
  'LBL_IS_PERSONAL' => 'persönlich',
  'LBL_GROUPFOLDER_ID' => 'Gruppenordner ID',
  'LBL_ASSIGN_TO_GROUP_FOLDER' => 'An Gruppenordner zuweisen',
  'LBL_STATUS_ACTIVE' => 'Aktiv',
  'LBL_STATUS_INACTIVE' => 'Inaktiv',
  'LBL_IS_GROUP' => 'Gruppe',
  'LBL_ENABLE_AUTO_IMPORT' => 'Emails automatisch importieren',
  'LBL_WARNING_CHANGING_AUTO_IMPORT' => 'Warnung: Sie modifizieren ihre automatische Import-Einstellung, welches zu Datenverlust führen kann.',
);

