<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

	

$mod_strings = array (
  'LBL_EMAILTEMPLATE_MESSAGE_WARNING_TITLE' => 'Avviso',
  'LBL_FW' => 'FW:',
  'LBL_RE' => 'RE:',
  'LBL_BUGS_SUBPANEL_TITLE' => 'Bugs',
  'LBL_CC' => 'Cc:',
  'LBL_COLON' => ':',
  'LBL_SAVE_AS_DRAFT_BUTTON_KEY' => 'R',
  'LBL_SEND_BUTTON_KEY' => 'S',
  'LNK_EMAIL_LIST' => 'Emails',
  'LBL_BUTTON_RAW_KEY' => 'e',
  'LBL_BUTTON_CHECK_KEY' => 'c',
  'LBL_BUTTON_FORWARD_KEY' => 'f',
  'LBL_BUTTON_REPLY_KEY' => 'r',
  'LBL_INTENT' => 'Intent',
  'LBL_BUTTON_DISTRIBUTE_KEY' => 'a',
  'LBL_BUTTON_GRAB_KEY' => 't',
  'LBL_TAKE_ONE_TITLE' => 'Reps',
  'LBL_IMPORT_STATUS_TITLE' => 'Status',
  'LBL_LIST_STATUS' => 'Status',
  'LBL_ADD_CC_BCC_SEP' => '|',
  'LBL_BUTTON_CREATE' => 'Nuovo',
  'LBL_BUTTON_EDIT' => 'Modifica',
  'LBL_QS_DISABLED' => '(La ricerca veloce non è disponibile per questo modulo. Si prega di usare il pulsante di selezione.)',
  'LBL_SIGNATURE_PREPEND' => 'Firmare sopra la risposta?',
  'LBL_EMAIL_DEFAULT_DESCRIPTION' => 'Di seguito trova l´offerta richiesta (Puoi cambiare questo testo)',
  'LBL_EMAIL_QUOTE_FOR' => 'Offerta per:',
  'LBL_QUOTE_LAYOUT_DOES_NOT_EXIST_ERROR' => 'il file del modello per le offerte non esiste: $layout',
  'LBL_QUOTE_LAYOUT_REGISTERED_ERROR' => 'il modello delle offerte non è stato registrato in modules/Quotes/Layouts.php',
  'LBL_CONFIRM_DELETE' => 'Sei sicuro di voler eliminare questa cartella?',
  'LBL_ENTER_FOLDER_NAME' => 'Si prega di inserire un nome alla cartella',
  'LBL_QUOTES_SUBPANEL_TITLE' => 'Offerte',
  'LBL_EMAILS_QUOTES_REL' => 'Emails: Offerte',
  'LBL_ERROR_SELECT_REPORT' => 'Si prega di selezionare un report',
  'LBL_ERROR_SELECT_MODULE_SELECT' => 'Si prega di selezionare il nome cliccando sul pulsante di selezione accanto al campo Collega A',
  'LBL_ERROR_SELECT_MODULE' => 'Si prega di selezionare un modulo per il campo Collega A',
  'ERR_ARCHIVE_EMAIL' => 'Errore: Seleziona i messaggi da archiviare',
  'ERR_DATE_START' => 'Data Inizio',
  'ERR_DELETE_RECORD' => 'Errore: Per eliminare l´azienda devi specificare un numero del record.',
  'ERR_NOT_ADDRESSED' => 'Errore: La Email deve avere almeno un indirizzo di destinazione (A,CC,CCN)',
  'ERR_TIME_START' => 'Ora Inizio',
  'ERR_TIME_SENT' => 'Ora Invio',
  'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Aziende',
  'LBL_ADD_ANOTHER_FILE' => 'Aggiungi un altro File',
  'LBL_ADD_DASHLETS' => 'Aggiungi le Dashlet di Sugar',
  'LBL_ADD_DOCUMENT' => 'Aggiungi Documenti',
  'LBL_ADD_ENTRIES' => 'Aggiungi Voci',
  'LBL_ADD_FILE' => 'Aggiungi File',
  'LBL_ARCHIVED_EMAIL' => 'Email Archiviate',
  'LBL_ARCHIVED_MODULE_NAME' => 'Nuove Email Archiviate',
  'LBL_ATTACHMENTS' => 'Allegati:',
  'LBL_HAS_ATTACHMENT' => 'Ci sono allegati?:',
  'LBL_BCC' => 'Ccn:',
  'LBL_BODY' => 'Corpo del messaggio:',
  'LBL_COMPOSE_MODULE_NAME' => 'Componi Email',
  'LBL_CONTACT_FIRST_NAME' => 'Nome Contatto',
  'LBL_CONTACT_LAST_NAME' => 'Cognome Contatto',
  'LBL_CONTACT_NAME' => 'Contatto:',
  'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contatti',
  'LBL_CREATED_BY' => 'Creato da',
  'LBL_DATE_AND_TIME' => 'Data & Ora di Invio:',
  'LBL_DATE_SENT' => 'Data Invio:',
  'LBL_DATE' => 'Data Invio:',
  'LBL_DELETE_FROM_SERVER' => 'Cancella messaggio dal server',
  'LBL_DESCRIPTION' => 'Descrizione',
  'LBL_EDIT_ALT_TEXT' => 'Modifica Testo Alternativo',
  'LBL_SEND_IN_PLAIN_TEXT' => 'Invia Testo Normale',
  'LBL_EDIT_MY_SETTINGS' => 'Modifica le mie Impostazioni',
  'LBL_EMAIL_ATTACHMENT' => 'Allegato Email',
  'LBL_EMAIL_EDITOR_OPTION' => 'Invia Email HTML',
  'LBL_EMAIL_SELECTOR' => 'Seleziona',
  'LBL_EMAIL' => 'Email:',
  'LBL_EMAILS_ACCOUNTS_REL' => 'Email: Aziende',
  'LBL_EMAILS_BUGS_REL' => 'Email: Bugs',
  'LBL_EMAILS_CASES_REL' => 'Email: Reclami',
  'LBL_EMAILS_CONTACTS_REL' => 'Email: Contatti',
  'LBL_EMAILS_LEADS_REL' => 'Email: Leads',
  'LBL_EMAILS_OPPORTUNITIES_REL' => 'Email: Opportunità',
  'LBL_EMAILS_NOTES_REL' => 'Email: Note',
  'LBL_EMAILS_PROJECT_REL' => 'Email: Progetto',
  'LBL_EMAILS_PROJECT_TASK_REL' => 'Email: Compito di Progetto',
  'LBL_EMAILS_PROSPECT_REL' => 'Email: Prospect',
  'LBL_EMAILS_TASKS_REL' => 'Email: Compiti',
  'LBL_EMAILS_USERS_REL' => 'Email: Utenti',
  'LBL_EMPTY_FOLDER' => 'Nessuna Email da visualizzare',
  'LBL_ERROR_SENDING_EMAIL' => 'Errore durante l´invio',
  'LBL_ERROR_SAVING_DRAFT' => 'Errore durante il salvataggio della bozza',
  'LBL_FORWARD_HEADER' => 'Inizio del messaggio inoltrato:',
  'LBL_FROM_NAME' => 'Da Nome',
  'LBL_FROM' => 'Da:',
  'LBL_REPLY_TO' => 'Rispondi A:',
  'LBL_HTML_BODY' => 'Corpo HTML',
  'LBL_INVITEE' => 'Destinatari',
  'LBL_LEADS_SUBPANEL_TITLE' => 'Lead',
  'LBL_MESSAGE_SENT' => 'Messaggio Inviato',
  'LBL_MODIFIED_BY' => 'Modificato Da',
  'LBL_MODULE_NAME_NEW' => 'Archivia Email',
  'LBL_MODULE_NAME' => 'Tutte le Email',
  'LBL_MODULE_TITLE' => 'Email:',
  'LBL_MY_EMAILS' => 'Le mie Email',
  'LBL_NEW_FORM_TITLE' => 'Scrivi Email',
  'LBL_NONE' => 'Nessuno',
  'LBL_NOT_SENT' => 'Errore di Invio',
  'LBL_NOTE_SEMICOLON' => 'Nota: per più indirizzi email usa la virgola o il punto e virgola come separatore.',
  'LBL_NOTES_SUBPANEL_TITLE' => 'Allegati',
  'LBL_OPPORTUNITY_SUBPANEL_TITLE' => 'Opportunità',
  'LBL_PROJECT_SUBPANEL_TITLE' => 'Progetti',
  'LBL_PROJECT_TASK_SUBPANEL_TITLE' => 'Compiti di Progetto',
  'LBL_RAW' => 'Sorgente Email',
  'LBL_SAVE_AS_DRAFT_BUTTON_LABEL' => 'Salva Bozza',
  'LBL_SAVE_AS_DRAFT_BUTTON_TITLE' => 'Salva Bozza [Alt+R]',
  'LBL_SEARCH_FORM_DRAFTS_TITLE' => 'Cerca Bozze',
  'LBL_SEARCH_FORM_SENT_TITLE' => 'Cerca Email Inviate',
  'LBL_SEARCH_FORM_TITLE' => 'Cerca Email',
  'LBL_SEND_ANYWAYS' => 'Questo messaggio non ha un oggetto. Inviare/salvare lo stesso?',
  'LBL_SEND_BUTTON_LABEL' => 'Invia',
  'LBL_SEND_BUTTON_TITLE' => 'Invia [Alt+S]',
  'LBL_SEND' => 'INVIA',
  'LBL_SENT_MODULE_NAME' => 'Email Inviate',
  'LBL_SHOW_ALT_TEXT' => 'Mostra Testo Alternativo',
  'LBL_SIGNATURE' => 'Firma',
  'LBL_SUBJECT' => 'Oggetto:',
  'LBL_TEXT_BODY' => 'Corpo Testo',
  'LBL_TIME' => 'Ora Invio:',
  'LBL_TO_ADDRS' => 'A',
  'LBL_USE_TEMPLATE' => 'Usa Modello:',
  'LBL_USERS_SUBPANEL_TITLE' => 'Utenti',
  'LBL_USERS' => 'Utenti',
  'LNK_ALL_EMAIL_LIST' => 'Tutte le Email',
  'LNK_ARCHIVED_EMAIL_LIST' => 'Email Archiviate',
  'LNK_CALL_LIST' => 'Chiamate',
  'LNK_DRAFTS_EMAIL_LIST' => 'Tutte le Bozze',
  'LBL_EMAIL_RELATE' => 'Relativo A',
  'LNK_EMAIL_TEMPLATE_LIST' => 'Visualizza Modelli Email',
  'LNK_MEETING_LIST' => 'Riunioni',
  'LNK_NEW_ARCHIVE_EMAIL' => 'Nuova Email Archiviata',
  'LNK_NEW_CALL' => 'Nuova Chiamata',
  'LNK_NEW_EMAIL_TEMPLATE' => 'Nuovo Modello Email',
  'LNK_NEW_EMAIL' => 'Nuova Email',
  'LNK_NEW_MEETING' => 'Nuova Riunione',
  'LNK_NEW_NOTE' => 'Nuova Nota o Allegato',
  'LNK_NEW_SEND_EMAIL' => 'Componi',
  'LNK_NEW_TASK' => 'Nuovo Compito',
  'LNK_NOTE_LIST' => 'Note',
  'LNK_SENT_EMAIL_LIST' => 'Email Inviate',
  'LNK_TASK_LIST' => 'Compiti',
  'LNK_VIEW_CALENDAR' => 'Oggi',
  'LBL_LIST_ASSIGNED' => 'Assegnato',
  'LBL_LIST_CONTACT_NAME' => 'Nome Contatto',
  'LBL_LIST_CREATED' => 'Creato',
  'LBL_LIST_DATE_SENT' => 'Data Invio',
  'LBL_LIST_DATE' => 'Data Invio',
  'LBL_LIST_FORM_DRAFTS_TITLE' => 'Bozza',
  'LBL_LIST_FORM_SENT_TITLE' => 'Email Inviate',
  'LBL_LIST_FORM_TITLE' => 'Elenco Email',
  'LBL_LIST_FROM_ADDR' => 'Da',
  'LBL_LIST_RELATED_TO' => 'Tipo Destinatario',
  'LBL_LIST_SUBJECT' => 'Oggetto',
  'LBL_LIST_TIME' => 'Ora Invio',
  'LBL_LIST_TO_ADDR' => 'A',
  'LBL_LIST_TYPE' => 'Tipo',
  'NTC_REMOVE_INVITEE' => 'Sei sicuro di voler rimuovere questo destinatario dall´email?',
  'WARNING_SETTINGS_NOT_CONF' => 'Avviso: Le tue impostazioni email non sono state configurate per l´invio di email.',
  'WARNING_NO_UPLOAD_DIR' => 'Gli allegati potrebbero non funzionare: è stato rilevato nessun valore per "upload_tmp_dir". Si prega di correggerlo nel file php.ini',
  'WARNING_UPLOAD_DIR_NOT_WRITABLE' => 'Gli allegati potrebbero non funzionare: è stato rilevato un valore non corretto o non valido per  "upload_tmp_dir". Si prega di correggerlo nel file php.ini',
  'LBL_BUTTON_RAW_TITLE' => 'Mostra Sorgente Email [Alt+E]',
  'LBL_BUTTON_RAW_LABEL' => 'Mostra Sorgente',
  'LBL_BUTTON_RAW_LABEL_HIDE' => 'Nascondi Sorgente',
  'LBL_BUTTON_CHECK' => 'Controlla Email',
  'LBL_BUTTON_CHECK_TITLE' => 'Verifica Nuove Email [Alt+C]',
  'LBL_BUTTON_FORWARD' => 'Inoltra',
  'LBL_BUTTON_FORWARD_TITLE' => 'Inoltra Questa Email [Alt+F]',
  'LBL_BUTTON_REPLY_TITLE' => 'Rispondi [ALT+R]',
  'LBL_BUTTON_REPLY' => 'Rispondi',
  'LBL_CASES_SUBPANEL_TITLE' => 'Reclami',
  'LBL_INBOUND_TITLE' => 'Posta in Arrivo',
  'LBL_MESSAGE_ID' => 'ID Messaggio',
  'LBL_REPLY_HEADER_1' => 'su',
  'LBL_REPLY_HEADER_2' => 'ha scritto:',
  'LBL_REPLY_TO_ADDRESS' => 'Rispondi a indirizzo',
  'LBL_REPLY_TO_NAME' => 'Rispondi a Nome',
  'LBL_LIST_BUG' => 'Bug',
  'LBL_LIST_CASE' => 'Reclami',
  'LBL_LIST_CONTACT' => 'Contatti',
  'LBL_LIST_LEAD' => 'Lead',
  'LBL_LIST_TASK' => 'Compiti',
  'LBL_LIST_ASSIGNED_TO_NAME' => 'Utente Assegnato',
  'LBL_ALL' => 'Tutti',
  'LBL_ASSIGN_WARN' => 'Assicurati che tutte le 2 opzioni siano state selezionate.',
  'LBL_BACK_TO_GROUP' => 'Torna alla Posta in Arrivo del Gruppo',
  'LBL_BUTTON_DISTRIBUTE_TITLE' => 'Assegna [Alt+A]',
  'LBL_BUTTON_DISTRIBUTE' => 'Assegna',
  'LBL_BUTTON_GRAB_TITLE' => 'Prendi dal Gruppo [Alt+T]',
  'LBL_BUTTON_GRAB' => 'Prendi dal Gruppo',
  'LBL_CREATE_BUG' => 'Nuovo Bug',
  'LBL_CREATE_CASE' => 'Nuovo Reclamo',
  'LBL_CREATE_CONTACT' => 'Nuovo Contatto',
  'LBL_CREATE_LEAD' => 'Nuovo Lead',
  'LBL_CREATE_TASK' => 'Nuovo Compito',
  'LBL_DIST_TITLE' => 'Assegnazione',
  'LBL_LOCK_FAIL_DESC' => 'L´oggetto scelto non è al momento disponibile.',
  'LBL_LOCK_FAIL_USER' => 'ha preso possesso.',
  'LBL_MASS_DELETE_ERROR' => 'Non sono stati selezionati gli oggetti da cancellare.',
  'LBL_NEW' => 'Nuovo',
  'LBL_NEXT_EMAIL' => 'Prossimo Oggetto Libero',
  'LBL_NO_GRAB_DESC' => 'Non ci sono oggetti disponibili. Riprovare più tardi.',
  'LBL_QUICK_REPLY' => 'Rispondi',
  'LBL_REPLIED' => 'Risposto',
  'LBL_SELECT_TEAM' => 'Seleziona Team',
  'LBL_TITLE_SEARCH_RESULTS' => 'Cerca Risultati',
  'LBL_TO' => 'A:',
  'LBL_TOGGLE_ALL' => 'Seleziona Tutti',
  'LBL_UNKNOWN' => 'Sconosciuto',
  'LBL_UNREAD_HOME' => 'Messaggi non Letti',
  'LBL_UNREAD' => 'Non Letto',
  'LBL_USE_ALL' => 'Tutti i Risultati della Ricerca',
  'LBL_USE_CHECKED' => 'Solo i Selezionati',
  'LBL_USE_MAILBOX_INFO' => 'Utilizza Casella Email Da: Indirizzo',
  'LBL_USE' => 'Assegna:',
  'LBL_ASSIGN_SELECTED_RESULTS_TO' => 'Assegna i risultati selezionati A:',
  'LBL_USER_SELECT' => 'Seleziona Utenti',
  'LBL_USING_RULES' => 'Utilizzando Regole:',
  'LBL_WARN_NO_DIST' => 'Nessun metodo di distribuzione selezionato',
  'LBL_WARN_NO_USERS' => 'Nessun utente è stato selezionato',
  'LBL_WARN_NO_USERS_OR_TEAM' => 'Si prega di selezionare o un utente o un team per l´assegnazione.',
  'LBL_LIST_TITLE_GROUP_INBOX' => 'Posta in Arrivo del Gruppo',
  'LBL_LIST_TITLE_MY_DRAFTS' => 'Le mie Bozze',
  'LBL_LIST_TITLE_MY_INBOX' => 'La mia Posta in Arrivo',
  'LBL_LIST_TITLE_MY_SENT' => 'Le mie Email Inviate',
  'LBL_LIST_TITLE_MY_ARCHIVES' => 'Le mie Email Archiviate',
  'LBL_ACTIVITIES_REPORTS' => 'Report Attività',
  'LNK_CHECK_MY_INBOX' => 'Controlla la mia Posta',
  'LNK_DATE_SENT' => 'Data Invio',
  'LNK_GROUP_INBOX' => 'Posta in Arrivo del Gruppo',
  'LNK_MY_DRAFTS' => 'Le mie Bozze',
  'LNK_MY_INBOX' => 'La mia Email',
  'LNK_VIEW_MY_INBOX' => 'Visualizza le mie Email',
  'LNK_QUICK_REPLY' => 'Rispondi',
  'LNK_MY_ARCHIVED_LIST' => 'I miei Archivi',
  'LBL_EMAILS_NO_PRIMARY_TEAM_SPECIFIED' => 'Nessun Team Primario specificato',
  'LBL_ASSIGNED_TO' => 'Assegnato A:',
  'LBL_MEMBER_OF' => 'Padre',
  'LBL_QUICK_CREATE' => 'Creazione Rapida',
  'LBL_STATUS' => 'Stato Email:',
  'LBL_EMAIL_FLAGGED' => 'Selezionato:',
  'LBL_EMAIL_REPLY_TO_STATUS' => 'Rispondi allo Stato:',
  'LBL_TYPE' => 'Tipo:',
  'LBL_EMAILTEMPLATE_MESSAGE_SHOW_TITLE' => 'Si prega di controllare!',
  'LBL_EMAILTEMPLATE_MESSAGE_SHOW_MSG' => 'Selezionando questo modello tutti i dati già inseriti nel corpo della email saranno sovrascritti. Desideri continuare?',
  'LBL_EMAILTEMPLATE_MESSAGE_CLEAR_MSG' => 'Selezionando "--Nessuno--" tutti i dati già inseriti nel corpo della email saranno azzerati. Desideri continuare?',
  'LBL_CHECK_ATTACHMENTS' => 'Si prega di controllare gli allegati!',
  'LBL_HAS_ATTACHMENTS' => 'Questa email contiene già allegati. Vuoi mantenere gli allegati?',
  'ERR_MISSING_REQUIRED_FIELDS' => 'Campo obbligatorio mancante',
  'ERR_INVALID_REQUIRED_FIELDS' => 'Campo obbligatorio non valido',
  'LBL_FILTER_BY_RELATED_BEAN' => 'Mostra solamente i destinatari correlati a',
  'LBL_RECIPIENTS_HAVE_BEEN_ADDED' => 'I destinatari sono stati aggiunti.',
  'LBL_ADD_INBOUND_ACCOUNT' => 'Aggiungi',
  'LBL_ADD_OUTBOUND_ACCOUNT' => 'Aggiungi',
  'LBL_EMAIL_ACCOUNTS_INBOUND' => 'Proprietà dell´Account Email',
  'LBL_EMAIL_SETTINGS_OUTBOUND_ACCOUNT' => 'Server Email SMTP Posta in Uscita',
  'LBL_EMAIL_SETTINGS_OUTBOUND_ACCOUNTS' => 'Server Email SMTP Posta in Uscita',
  'LBL_EMAIL_SETTINGS_INBOUND_ACCOUNTS' => 'Account Email',
  'LBL_EMAIL_SETTINGS_INBOUND' => 'Posta in Entrata',
  'LBL_EMAIL_SETTINGS_OUTBOUND' => 'Posta in Uscita',
  'LBL_ADD_CC' => 'Aggiung Cc',
  'LBL_ADD_BCC' => 'Aggiungi Ccn',
  'LBL_ADD_TO_ADDR' => 'Aggiungi A',
  'LBL_SELECTED_ADDR' => 'Selezionato',
  'LBL_SEND_EMAIL_FAIL_TITLE' => 'Errore durante l´invio della Email',
  'LBL_EMAIL_DETAIL_VIEW_SHOW' => 'mostra',
  'LBL_EMAIL_DETAIL_VIEW_MORE' => 'più',
  'LBL_MORE_OPTIONS' => 'Più',
  'LBL_LESS_OPTIONS' => 'Meno',
  'LBL_MAILBOX_TYPE_PERSONAL' => 'Personale',
  'LBL_MAILBOX_TYPE_GROUP' => 'Gruppo',
  'LBL_MAILBOX_TYPE_GROUP_FOLDER' => 'Gruppo - Import Automatico',
  'LBL_SEARCH_FOR' => 'Cerca per',
  'LBL_EMAIL_INBOUND_TYPE_HELP' => '<b>Personale</b>: Account di posta accessibile da te. Solo tu puoi gestire e importare email da questo account.<br><b>Gruppo</b>: Account di posta accessibile dai membri di specifici team. I membri del team possono gestire e importare emails da questo account.<br><b>Gruppo - import automatico</b>: Account di posta accessibile dai membri di specifici team. Le email vengono automaticamente importate come records.',
  'LBL_ADDRESS_BOOK_SEARCH_HELP' => 'Per trovare i destinatari inserire un indirizzo email, Nome, Cognome o Nome Azienda.',
  'LBL_TEST_SETTINGS' => 'Impostazioni Test',
  'LBL_EMPTY_EMAIL_BODY' => '<p><span style="color: #888888;"><em>Questo messaggio non ha un contenuto</em></span></p>',
  'LBL_TEST_EMAIL_SUBJECT' => 'Email di Test da Sugar',
  'LBL_NO_SUBJECT' => '(nessun oggetto)',
  'LBL_CHECKING_ACCOUNT' => 'Controllo Account in corso',
  'LBL_OF' => 'di',
  'LBL_TEST_EMAIL_BODY' => 'Questa email è stata inviata per testare le informazioni sul server di posta in uscita fornite dall´applicazione Sugar. L´avvenuta ricezione di questa email indica che le informazioni sul server di posta in uscita sono valide.',
  'LBL_MAIL_SMTPUSER' => 'Nome Utente SMTP:',
  'LBL_MAIL_SMTPPASS' => 'Password SMTP:',
  'LBL_MAIL_SMTPSERVER' => 'Server SMTP:',
  'LBL_SMTP_SERVER_HELP' => 'Questo server SMTP di posta può essere utilizzato per le email in uscita. Si prega di fornire un Nome Utente e una password per il tuo account di posta per poter utilizzare il server di posta.',
  'LBL_MISSING_DEFAULT_OUTBOUND_SMTP_SETTINGS' => 'L´amministratore non ha ancora configurato l´account standard della posta in uscita.  Impossibile inviare email di test.',
  'LBL_MAIL_SMTPAUTH_REQ' => 'Utilizzare Autenticazione SMTP?',
  'LBL_MAIL_SMTPPORT' => 'Porta SMTP:',
  'LBL_MAIL_SMTPTYPE' => 'Tipo Server SMTP:',
  'LBL_MAIL_SMTP_SETTINGS' => 'Specifica Server SMTP',
  'LBL_CHOOSE_EMAIL_PROVIDER' => 'Scegli il provider della tua Email:',
  'LBL_YAHOOMAIL_SMTPPASS' => 'Password Mail Yahoo!:',
  'LBL_YAHOOMAIL_SMTPUSER' => 'ID Mail Yahoo!:',
  'LBL_GMAIL_SMTPPASS' => 'Password Gmail :',
  'LBL_GMAIL_SMTPUSER' => 'Indirizzo Email di Gmail:',
  'LBL_EXCHANGE_SMTPPASS' => 'Cambia Password:',
  'LBL_EXCHANGE_SMTPUSER' => 'Nome Utente Exchange:',
  'LBL_EXCHANGE_SMTPPORT' => 'Server Port Exchange:',
  'LBL_EXCHANGE_SMTPSERVER' => 'Server Exchange:',
);


