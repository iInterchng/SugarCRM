<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

	

$mod_strings = array (
  'LBL_TRACKER_COUNT' => 'Tracker Count:',
  'LBL_LOG_ENTRIES_REMOVED_TITLE' => 'Opted Out',
  'LBL_ROLLOVER_VIEW' => 'Rollover a bar to view details.',
  'LBL_UNSUBSCRIPTION_TARGET_WIZARD_DESC' => 'This will define the target list of type Unsubscription for this campaign.<br />This target list will contain names of people who have opted out of your campaign and should not be contacted through email.<br />If you do not have a list ready, an empty list will be created for you.',
  'LBL_TEST_TARGET_WIZARD_DESC' => 'This will define the target list of type Test for this campaign.<br />This target list will be used to send out test emails for this campaign.<br />If you do not have a list ready, an empty list will be created for you.',
  'LBL_ELECTED_TO_OPTOUT' => 'You have elected to opt out of receiving emails.',
  'ERR_INT_ONLY_EMAIL_PER_RUN' => 'Only integer values are allow for Number of emails sent per batch',
  'LBL_MAILBOX_CHECK_WIZ_GOOD' => 'Mail account(s) with bounce handling were detected. You do not need to create a new one, but you can still do so below.',
  'LBL_MAILBOX_CHECK_WIZ_BAD' => 'No mail accounts with bounce handling were detected, please create a new one below.',
  'LBL_MAILBOX_CHECK1_GOOD' => 'Mail account(s)) with bounce handling detected:',
  'LBL_MAILBOX_CHECK1_BAD' => 'No mail account(s) with bounce handling detected.',
  'LBL_SCHEDULER_CHECK1_BAD' => 'Scheduler has not been set up to process Bounced Campaign Emails.',
  'LBL_SCHEDULER_CHECK2_BAD' => 'Scheduler has not been set up to process Campaign Emails.',
  'LBL_MARKETING_CHECK1_BAD' => 'No Email marketing components detected, you will need to create one to mail out a campaign.',
  'LBL_MARKETING_CHECK2_BAD' => 'No target lists detected, you will need to create one from desired campaign screen.',
  'LBL_SCHEDULER_LINK' => 'go to scheduler admin screen.',
  'LBL_DEFINE_LEAD_HEADER' => 'Form Header:',
  'LBL_LEAD_DEFAULT_HEADER' => 'Web to lead form for Campaign',
  'LBL_DEFINE_LEAD_SUBMIT' => 'Submit Button Label:',
  'LBL_EDIT_LEAD_POST_URL' => 'Edit Post URL?',
  'LBL_DEFINE_LEAD_REDIRECT_URL' => 'Redirect URL:',
  'LBL_DOWNLOAD_TEXT_WEB_TO_LEAD_FORM' => 'Please download your Web To Lead form',
  'LBL_CREATE_WEB_TO_LEAD_FORM' => 'CreateWebToLeadForm',
  'LBL_LOG_ENTRIES_BLOCKEDD_TITLE' => 'Suppressed by Email Address or domain',
  'LBL_AMOUNT_IN' => 'Amount in',
  'LBL_TRACK_QUEUE_SUBPANEL_TITLE' => 'Track Queue',
  'LBL_TRACK_BUTTON_KEY' => 'T',
  'LBL_QUEUE_BUTTON_KEY' => 'u',
  'LBL_TEST_BUTTON_KEY' => 'e',
  'LBL_TODETAIL_BUTTON_KEY' => 'T',
  'LBL_TRACK_DELETE_BUTTON_KEY' => 'D',
  'LBL_MAIL_SENDTYPE' => 'Mail Transfer Agent:',
  'TRACKING_ENTRIES_LOCATION_DEFAULT_VALUE' => 'Value of Config.php setting site_url',
  'LBL_PORT' => 'Mail Server Port',
  'LBL_SSL' => 'Use SSL',
  'LBL_DEFINE_LEAD_POST_URL' => 'Post URL:',
  'NTC_NO_LEGENDS' => 'None',
  'LBL_DOWNLOAD_WEB_TO_LEAD_FORM' => 'Web To Lead Form',
  'LBL_LINK_SUBPANEL_TITLE' => 'Link',
  'LBL_FROM_ADDR' => '"Kellelt" aadress',
  'LBL_REPLY_ADDR' => '"Vasta" aadress:',
  'LBL_REPLY_NAME' => '"Vasta" nimi:',
  'LBL_MODULE_NAME' => 'Kampaaniad',
  'LBL_MODULE_TITLE' => 'Kampaaniad: Avaleht',
  'LBL_NEWSLETTER_TITLE' => 'Kampaaniad: Uudiskirjad',
  'LBL_SEARCH_FORM_TITLE' => 'Kampaania otsing',
  'LBL_LIST_FORM_TITLE' => 'Kampaania loend',
  'LBL_NEWSLETTER_LIST_FORM_TITLE' => 'Uudiskirja loend',
  'LBL_CAMPAIGN_NAME' => 'Nimi:',
  'LBL_CAMPAIGN' => 'Kampaania:',
  'LBL_NAME' => 'Nimi',
  'LBL_INVITEE' => 'Kontaktid',
  'LBL_LIST_CAMPAIGN_NAME' => 'Kampaania',
  'LBL_LIST_STATUS' => 'Olek',
  'LBL_LIST_TYPE' => 'Tüüp',
  'LBL_LIST_START_DATE' => 'Algus kuupäev',
  'LBL_LIST_END_DATE' => 'Lõppkuupäev',
  'LBL_DATE_ENTERED' => 'Loomiskuupäev',
  'LBL_DATE_MODIFIED' => 'Muutmiskuupäev',
  'LBL_MODIFIED' => 'Muutja:',
  'LBL_CREATED' => 'Loodud:',
  'LBL_TEAM' => 'Meeskond:',
  'LBL_ASSIGNED_TO' => 'Vastutaja:',
  'LBL_ASSIGNED_TO_ID' => 'Vastutaja:',
  'LBL_ASSIGNED_TO_NAME' => 'Vastutaja:',
  'LBL_CAMPAIGN_START_DATE' => 'Alguskuupäev:',
  'LBL_CAMPAIGN_END_DATE' => 'Lõpukuupäev:',
  'LBL_CAMPAIGN_STATUS' => 'Olek:',
  'LBL_CAMPAIGN_BUDGET' => 'Eelarve:',
  'LBL_CAMPAIGN_EXPECTED_COST' => 'Oodatav maksumus:',
  'LBL_CAMPAIGN_ACTUAL_COST' => 'Tegelik maksumus:',
  'LBL_CAMPAIGN_EXPECTED_REVENUE' => 'Oodatav tulu:',
  'LBL_CAMPAIGN_IMPRESSIONS' => 'Näitamisi:',
  'LBL_CAMPAIGN_COST_PER_IMPRESSION' => 'Kulu näitamise kohta:',
  'LBL_CAMPAIGN_COST_PER_CLICK_THROUGH' => 'Kulu kliki kohta:',
  'LBL_CAMPAIGN_OPPORTUNITIES_WON' => 'Võidetud müügivõimalusi:',
  'LBL_CAMPAIGN_TYPE' => 'Tüüp:',
  'LBL_CAMPAIGN_OBJECTIVE' => 'Eesmärk:',
  'LBL_CAMPAIGN_CONTENT' => 'Kirjeldus:',
  'LBL_CAMPAIGN_DAYS_REMAIN' => 'Allesjäänud päevi',
  'LNK_NEW_CAMPAIGN' => 'Loo kampaania (klassika)',
  'LNL_NEW_CAMPAIGN_WIZARD' => 'Loo kampaania (viisard)',
  'LNK_CAMPAIGN_LIST' => 'Vaata kampaaniaid',
  'LNK_NEW_PROSPECT' => 'Loo eesmärk',
  'LNK_PROSPECT_LIST' => 'Vaata eesmärke',
  'LNK_NEW_PROSPECT_LIST' => 'Loo eesmärkide loend',
  'LNK_PROSPECT_LIST_LIST' => 'Vaata eesmärkide loendit',
  'LBL_MODIFIED_BY' => 'Muutja:',
  'LBL_CREATED_BY' => 'Looja:',
  'LBL_DATE_CREATED' => 'Loodud:',
  'LBL_DATE_LAST_MODIFIED' => 'Muudetud:',
  'LBL_TRACKER_KEY' => 'Tracker:',
  'LBL_TRACKER_URL' => 'Trackeri URL:',
  'LBL_TRACKER_TEXT' => 'tlingi tekst:',
  'LBL_REFER_URL' => 'Trackeri suunamise URL.',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Kampaaniad',
  'LBL_EMAIL_CAMPAIGNS_TITLE' => 'E-posti kampaaniad',
  'LBL_NEW_FORM_TITLE' => 'Uus kampaania',
  'LBL_TRACKED_URLS' => 'Trackeri URL',
  'LBL_TRACKED_URLS_SUBPANEL_TITLE' => 'Trackeri URL',
  'LBL_CAMPAIGN_ACCOUNTS_SUBPANEL_TITLE' => 'Ettevõtted',
  'LBL_PROSPECT_LIST_SUBPANEL_TITLE' => 'Eesmärgi loend',
  'LBL_EMAIL_MARKETING_SUBPANEL_TITLE' => 'E-posti turundus',
  'LNK_NEW_EMAIL_TEMPLATE' => 'Loo e-kirja mall',
  'LNK_EMAIL_TEMPLATE_LIST' => 'Vaata e-kirja malle',
  'LBL_TRACK_BUTTON_TITLE' => 'Vaata olekut',
  'LBL_TRACK_BUTTON_LABEL' => 'Vaata olekut',
  'LBL_QUEUE_BUTTON_TITLE' => 'Saada e-kirjad',
  'LBL_QUEUE_BUTTON_LABEL' => 'Saada e-kirjad',
  'LBL_TEST_BUTTON_TITLE' => 'Saada Test',
  'LBL_TEST_BUTTON_LABEL' => 'Saada test',
  'LBL_COPY_AND_PASTE_CODE' => 'Või kopeeri ja kleebi allolev html olemasolevale lehele',
  'LBL_TODETAIL_BUTTON_TITLE' => 'Vaata lisainfot',
  'LBL_TODETAIL_BUTTON_LABEL' => 'Vaata lisainfot',
  'LBL_DEFAULT' => 'Kõik eesmärgiloendid',
  'LBL_MESSAGE_QUEUE_TITLE' => 'Pakkumise sõnum',
  'LBL_LOG_ENTRIES_TITLE' => 'Vastused',
  'LBL_LOG_ENTRIES_TARGETED_TITLE' => 'Sõnum saadetud/üritatud',
  'LBL_LOG_ENTRIES_SEND_ERROR_TITLE' => 'Tõrjutud sõnumid, teine',
  'LBL_LOG_ENTRIES_INVALID_EMAIL_TITLE' => 'Tõrjutud sõnumid, kehtetud e-post',
  'LBL_LOG_ENTRIES_LINK_TITLE' => 'Klikipõhine link',
  'LBL_LOG_ENTRIES_VIEWED_TITLE' => 'Vaadatud sõnum',
  'LBL_LOG_ENTRIES_LEAD_TITLE' => 'Müügivihjeid loodud',
  'LBL_CAMPAIGN_LEAD_SUBPANEL_TITLE' => 'Müügivihjed',
  'LBL_OPPORTUNITY_SUBPANEL_TITLE' => 'Müügivõimalused',
  'LBL_LOG_ENTRIES_CONTACT_TITLE' => 'Kontakte loodud',
  'LBL_BACK_TO_CAMPAIGNS' => 'Tagasi kampaaniate juurde',
  'ERR_NO_EMAIL_MARKETING' => 'Peab olema vähemalt üks aktiivne kampaaniaga seotud  e-kirja turundussõnum.',
  'ERR_NO_TARGET_LISTS' => 'Peab olema vähemalt üks kampaaniaga seonduv Eesmärgi loend.',
  'ERR_NO_TEST_TARGET_LISTS' => 'Peab olema vähemalt üks kampaaniaga seonduv Eesmärgi loend.',
  'ERR_SENDING_NOW' => 'Sõnumid on kohaleviidud, palun proovi seda hiljem.',
  'ERR_MESS_NOT_FOUND_FOR_LIST' => 'E.posti turundussõnumit selle eesmärgiloendi jaoks ei leitud',
  'ERR_MESS_DUPLICATE_FOR_LIST' => 'Selle sihtloendi jaoks on määratletud mitmekordne e-posti turundus',
  'ERR_FIX_MESSAGES' => 'Palun korrekteeri järgnevad vead enne edasiminekut',
  'LBL_TRACK_ROI_BUTTON_LABEL' => 'Vaata ROI-d',
  'LBL_TRACK_DELETE_BUTTON_TITLE' => 'Kustuta Testi sissekanded',
  'LBL_TRACK_DELETE_BUTTON_LABEL' => 'Kustuta Testi sissekanded',
  'LBL_TRACK_DELETE_CONFIRM' => 'Testi käivitamisel loodud suvand kustutatakse logi sisenditest. Jätkata?',
  'ERR_NO_MAILBOX' => 'Järgnevad turundussõnumid ei oma nendega seotud e-posti kontot. Palun korrekteeri see enne jätkamist.',
  'LBL_LIST_TO_ACTIVITY' => 'Vaata olekut',
  'LBL_CURRENCY_ID' => 'Valuuta ID',
  'LBL_CURRENCY' => 'Valuuta:',
  'LBL_TARGETED' => 'Eesmärgistatud',
  'LBL_TOTAL_TARGETED' => 'Kokku eesmärgistatud',
  'LBL_CAMPAIGN_FREQUENCY' => 'Sagedus:',
  'LBL_NEWSLETTERS' => 'Vaata uudiskirju',
  'LBL_NEWSLETTER' => 'Uudiskiri',
  'LBL_NEWSLETTER_FORENTRY' => 'Uudiskiri',
  'LBL_MORE_DETAILS' => 'Rohkem infot',
  'LBL_CREATE_NEWSLETTER' => 'Loo uudiskiri',
  'LBL_LIST_NAME' => 'Nimi',
  'LBL_STATUS_TEXT' => 'Olek:',
  'LBL_FROM_MAILBOX_NAME' => 'Kasuta postkasti:',
  'LBL_FROM_NAME' => 'Nime alt:',
  'LBL_START_DATE_TIME' => 'Alguskuupäev ja aeg:',
  'LBL_DATE_START' => 'Alguskuupäev',
  'LBL_TIME_START' => 'Algusaeg',
  'LBL_TEMPLATE' => 'E-kirja mall',
  'LBL_CREATE_EMAIL_TEMPLATE' => 'Loo',
  'LBL_MESSAGE_FOR' => 'Saada see sõnum:',
  'LBL_FINISH' => 'Lõpeta',
  'LBL_ALL_PROSPECT_LISTS' => 'Kõik kampaania eesmärgi loendid',
  'LBL_EDIT_EMAIL_TEMPLATE' => 'Redigeeri',
  'LBL_EMAIL_SETUP_WIZARD' => 'Seadista e-post',
  'LBL_DIAGNOSTIC_WIZARD' => 'Vaata diagnostikat',
  'LBL_ALREADY_SUBSCRIBED_HEADER' => 'Tellitud uudiskirjad',
  'LBL_UNSUBSCRIBED_HEADER' => 'Saadaval/Tellimata uudiskirjad',
  'LBL_UNSUBSCRIBED_HEADER_EXPL' => 'Uudiskirja paigutamine Saadaval Uudiskirjadesse/Tellimata uudiskirjad loendisse lisab kontakti selle uudiskirja Tellimata loendisse. Kontakti ei eemaldata esialgsest Tellimiste loendist või sihtloendist.',
  'LBL_FILTER_CHART_BY' => 'Filtreeri diagramm:',
  'LBL_MANAGE_SUBSCRIPTIONS_TITLE' => 'Halda Tellimisi',
  'LBL_MARK_AS_SENT' => 'Märgi saadetuks',
  'LBL_DEFAULT_LIST_NOT_FOUND' => 'Eesmärgiloendit või vaiketüüpi ei leitud',
  'LBL_DEFAULT_LIST_ENTRIES_NOT_FOUND' => 'Sissekandeid ei leitud',
  'LBL_DEFAULT_LIST_ENTRIES_WERE_PROCESSED' => 'Sissekanded töödeldi',
  'LBL_EDIT_TRACKER_NAME' => 'Trackeri nimi:',
  'LBL_EDIT_TRACKER_URL' => 'Trackeri URL:',
  'LBL_EDIT_OPT_OUT_' => 'Opt-out link?',
  'LBL_EDIT_OPT_OUT' => 'Opt-out link?',
  'LBL_UNSUBSCRIPTION_LIST_NAME' => 'Tellimata loendi nimi.',
  'LBL_SUBSCRIPTION_LIST_NAME' => 'Tellimiste loendi nimi:',
  'LBL_TEST_LIST_NAME' => 'Testloendi nimi:',
  'LBL_UNSUBSCRIPTION_TYPE_NAME' => 'Tellimata',
  'LBL_SUBSCRIPTION_TYPE_NAME' => 'Tellimine',
  'LBL_TEST_TYPE_NAME' => 'Testi',
  'LBL_UNSUBSCRIPTION_LIST' => 'Tellimata loend',
  'LBL_SUBSCRIPTION_LIST' => 'Tellimise loend',
  'LBL_MRKT_NAME' => 'Nimi',
  'LBL_TEST_LIST' => 'Testi loend',
  'LBL_WIZARD_HEADER_MESSAGE' => 'Kampaania identifitseerimiseks täida nõutud väljad.',
  'LBL_WIZARD_BUDGET_MESSAGE' => 'Sisesta eelarve ROI arvutamiseks',
  'LBL_WIZARD_SUBSCRIPTION_MESSAGE' => 'iga uudiskiri peab omama kolme sihtloendit (Tellimine, Mittetellimine ja Test). Saad määratleda olemasoleva sihtloendi. Kui mitte, siis tühi sihtloend luuakse uudiskirja salvestamisel.',
  'LBL_WIZARD_TARGET_MESSAGE1' => 'Vali või loo eesmärkide loend koos kampaaniaga kasutamiseks. Seda loendit kasutatakse e-kirjade saatmisel koos sinu turundussõnumitega.',
  'LBL_WIZARD_TARGET_MESSAGE2' => 'Või loo uus kasutades allolevat vormi:',
  'LBL_WIZARD_TRACKER_MESSAGE' => 'Defineeri tarckeri URL selle kampaaniaga kasutamiseks. Sisesta nii nimi kui URL trackeri loomiseks.',
  'LBL_WIZARD_MARKETING_MESSAGE' => 'Täida allolev vorm e-kirja loomiseks uudiskirja asemel. See lubab sul täpsustada infot millal ja kuidas sinu uudiskiri peaks levitatama.',
  'LBL_WIZARD_SENDMAIL_MESSAGE' => 'See on vimane samm protsessis. Vali, kas soovid saata testkirja, planeeri oma uudiskiri või salvesta muudatused ning jätka kokkuvõtte lehel.',
  'LBL_HOME_START_MESSAGE' => 'Vali kampaana tüüp, mida soovid luua.',
  'LBL_WIZARD_LAST_STEP_MESSAGE' => 'Sa oled juba viimase sammu juures.',
  'LBL_WIZARD_FIRST_STEP_MESSAGE' => 'Sa oled juba esimese sammu juures.',
  'LBL_WIZ_NEWSLETTER_TITLE_STEP1' => 'Kampaania päis',
  'LBL_WIZ_NEWSLETTER_TITLE_STEP2' => 'Kampaania eelarve',
  'LBL_WIZ_NEWSLETTER_TITLE_STEP3' => 'Kampaania trackeri URL',
  'LBL_WIZ_NEWSLETTER_TITLE_STEP4' => 'Tellimise info',
  'LBL_WIZ_MARKETING_TITLE' => 'Turundus e-kiri',
  'LBL_WIZ_SENDMAIL_TITLE' => 'Saada e-kiri',
  'LBL_WIZ_TEST_EMAIL_TITLE' => 'Test e-kiri',
  'LBL_WIZ_NEWSLETTER_TITLE_SUMMARY' => 'Kokkuvõte',
  'LBL_NAVIGATION_MENU_GEN1' => 'Kampaania päis',
  'LBL_NAVIGATION_MENU_GEN2' => 'Eelarve',
  'LBL_NAVIGATION_MENU_TRACKERS' => 'Trackerid',
  'LBL_NAVIGATION_MENU_MARKETING' => 'Turundus',
  'LBL_NAVIGATION_MENU_SEND_EMAIL' => 'Saada e-kiri',
  'LBL_NAVIGATION_MENU_SUBSCRIPTIONS' => 'Tellimised',
  'LBL_NAVIGATION_MENU_SUMMARY' => 'Kokkuvõte',
  'LBL_SUBSCRIPTION_TARGET_WIZARD_DESC' => 'See määratleb selle kampaania liitumistüübi sihtrühma loendi.<br />Seda sihtrühma loendit kasutatakse selle kampaania e-posti saatmsel.<br />Kui sul ei ole loendit valmis, siis sinu jaoks luuakse tühi loend.',
  'LBL_TRACKERS' => 'Trackerid',
  'LBL_ADD_TRACKER' => 'Loo tracker',
  'LBL_ADD_TARGET' => 'Lisa',
  'LBL_CREATE_TARGET' => 'Loo',
  'LBL_SELECT_TARGET' => 'Kasuta olemasolevat eesmärkide loendit',
  'LBL_REMOVE' => 'eemalda',
  'LBL_CONFIRM' => 'Alusta',
  'LBL_START' => 'Alusta',
  'LBL_TOTAL_ENTRIES' => 'Sissekanded',
  'LBL_CONFIRM_CAMPAIGN_SAVE_CONTINUE' => 'Salvesta töö ja jätka turundus e-kirjada',
  'LBL_CONFIRM_CAMPAIGN_SAVE_OPTIONS' => 'Salvesta suvandid',
  'LBL_CONFIRM_CAMPAIGN_SAVE_EXIT' => 'Kas soovid info salvestada ja väljuda?',
  'LBL_CONFIRM_SEND_SAVE' => 'Oled lahkumas ja jätkamas Saada Kampaania e-kiri lehega. Kas soovid salvestada ja jätkata?',
  'LBL_NEWSLETTER WIZARD_TITLE' => 'Uudskiri:',
  'LBL_NEWSLETTER_WIZARD_START_TITLE' => 'Redigeeri uudiskiri:',
  'LBL_CAMPAIGN_WIZARD_START_TITLE' => 'Redigeeri kampaania:',
  'LBL_SEND_AS_TEST' => 'Saada Turundus e-kiri testina',
  'LBL_SAVE_EXIT_BUTTON_LABEL' => 'Lõpeta',
  'LBL_SAVE_CONTINUE_BUTTON_LABEL' => 'Salvesta ja jätka',
  'LBL_TARGET_LISTS' => 'Eesmärkide loendid',
  'LBL_NO_SUBS_ENTRIES_WARNING' => 'Sa ei saa saata turundus e-kirja kuni sinu tellimiste loend omab vähemalt ühte sissekannet. Saad täita oma loendit pärast lõpetamist.',
  'LBL_NO_TARGET_ENTRIES_WARNING' => 'Kampaania e-kirju ei saa saata kuni sinu eesmärgiloendis on vähemalt üks sissekanne. Sa saad kasutada oma loendit pärast lõpetamist.',
  'LBL_NO_TARGETS_WARNING' => 'Kampaania e-kirju ei saa saata kuni sinu kampaania omab vähemalt ühte eesmärgiloendit.',
  'LBL_NONE' => 'Ühtegi pole loodud',
  'LBL_CAMPAIGN_WIZARD' => 'Kampaania viisard',
  'LBL_EMAIL' => 'E-post',
  'LBL_OTHER_TYPE_CAMPAIGN' => 'Mitte e-kirjal baseeruv kampaania',
  'LBL_CHOOSE_CAMPAIGN_TYPE' => 'Kampaania tüüp',
  'LBL_TARGET_LIST' => 'Eesmärgi loend',
  'LBL_TARGET_TYPE' => 'Eesmärgi loendi tüüp',
  'LBL_TARGET_NAME' => 'Eelsmärgi loendi nimi',
  'LBL_EMAILS_SCHEDULED' => 'E-kirju planeeritud',
  'LBL_TEST_EMAILS_SENT' => 'Test e-kirjad saadetud',
  'LBL_USERS_CANNOT_OPTOUT' => 'Süsteemikasutajad ei saa loobuda e-kirjade saamisest.',
  'LBL_COPY_OF' => 'Koopia',
  'LBL_SAVED_SEARCH' => 'Salvestatud otsing ning paigutus',
  'LBL_WIZ_FROM_NAME' => 'Nimest:',
  'LBL_WIZ_FROM_ADDRESS' => 'Aadressilt:',
  'LBL_EMAILS_PER_RUN' => 'Saadetud e-kirju partii kohta:',
  'LBL_CUSTOM_LOCATION' => 'Kasutaja on määratletud',
  'LBL_DEFAULT_LOCATION' => 'Vaikimisi',
  'LBL_LOCATION_TRACK' => 'Kampaania jälgimise failide asukoht (nagu campaign_tracker.php)',
  'LBL_MAIL_SMTPAUTH_REQ' => 'Kasuta SMTP autentimist?',
  'LBL_MAIL_SMTPPASS' => 'SMTP salasõna:',
  'LBL_MAIL_SMTPPORT' => 'SMTP Port:',
  'LBL_MAIL_SMTPSERVER' => 'SMTP Server:',
  'LBL_MAIL_SMTPUSER' => 'SMTP kasutajanimi:',
  'LBL_EMAIL_SETUP_WIZARD_TITLE' => 'E-posti seadistamine kampaaniate jaoks',
  'LBL_NOTIFY_TITLE' => 'E-posti teavitussuvandid',
  'LBL_MASS_MAILING_TITLE' => 'Masspostituse suvandid',
  'LBL_SERVER_TYPE' => 'Mail server protocol',
  'LBL_SERVER_URL' => 'Mail server address',
  'LBL_LOGIN' => 'Kasutajanimi',
  'LBL_MAILBOX_NAME' => 'E-posti konto nimi:',
  'LBL_PASSWORD' => 'Parool:',
  'LBL_MAILBOX_DEFAULT' => 'Postkast',
  'LBL_MAILBOX' => 'Monitooritud kaust',
  'LBL_NAVIGATION_MENU_SETUP' => 'Seadista e-post',
  'LBL_NAVIGATION_MENU_NEW_MAILBOX' => 'Uus e-posti konto',
  'LBL_CAMP_MESSAGE_COPY' => 'Kampaania sõnumite koopiad hoia:',
  'LBL_CAMP_MESSAGE_COPY_DESC' => 'Kas soovite hoiustada täielikud koopiad kõigi e-kirjade kohta, mis on kampaaniate käigus edastatud? Soovitame mitte ja see on ka vaikimisi seadistus. Valides Ei hoiustatakse vaid saadetud sõnumi mall, mis on vajalik uue individuaalse sõnumi taasloomiseks.',
  'LBL_YES' => 'Jah',
  'LBL_NO' => 'Ei',
  'LBL_DEFAULT_FROM_ADDR' => 'Vaikimisi:',
  'LBL_EMAIL_SETUP_DESC' => 'Täida allolev vorm oma süsteemiseadete muutmiseks nii, et kampaania e-kirjad saab saata välja.',
  'LBL_CREATE_MAILBOX' => 'Loo uus e-posti konto',
  'LBL_SSL_DESC' => 'Kui sinu e-posti server toetab turvalisusaukude ühendusi, siis selle lubamine tekitab SSL ühendusi e-posti importimisel.',
  'LNK_CAMPAIGN_DIGNOSTIC_LINK' => 'Kampaania ei pruugi oodatavalt toimida ning e-kirjad võivad jääda edastamata alljärgnevail põhjustel:',
  'LBL_CAMPAIGN_DIAGNOSTICS' => 'Kampaania diagnostika',
  'LBL_DIAGNOSTIC' => 'Diagnostika',
  'LBL_MAILBOX_CHECK2_GOOD' => 'E-posti sätteid on konfigureeritud:',
  'LBL_MAILBOX_CHECK2_BAD' => 'Palun konfigureeri oma süsteemi e-posti aadressi. E-posti sätteid pole konfigureeritud.',
  'LBL_SCHEDULER_CHECK_GOOD' => 'Planeerijad avastatud',
  'LBL_SCHEDULER_CHECK_BAD' => 'Planeerijaid ei avastatud',
  'LBL_SCHEDULER_NAME' => 'Planeerija',
  'LBL_SCHEDULER_STATUS' => 'Olek',
  'LBL_MARKETING_CHECK1_GOOD' => 'E-posti turunduse komponendid on leitud.',
  'LBL_MARKETING_CHECK2_GOOD' => 'Sihtloend leitud.',
  'LBL_EMAIL_SETUP_WIZ' => 'Käivita e-posti seaditus',
  'LBL_TO_WIZARD' => 'käivita',
  'LBL_TO_WIZARD_TITLE' => 'Käivitusviisard',
  'LBL_EDIT_EXISTING' => 'Redigeeri kampaania',
  'LBL_EDIT_TARGET_LIST' => 'Redigeeri eesmärgiloend',
  'LBL_SEND_EMAIL' => 'Planeeri e-kiri',
  'LBL_USE_EXISTING' => 'Kasuta olemasolevat',
  'LBL_CREATE_NEW_MARKETING_EMAIL' => 'Loo uus turundus e-kiri',
  'LBL_CHOOSE_NEXT_STEP' => 'Vali oma järgmine samm',
  'LBL_NON_ADMIN_ERROR_MSG' => 'Palun teavita oma süsteemiadministraatorit probleemi kõrvaldamiseks',
  'LBL_EMAIL_COMPONENTS' => 'E-posti komponendid',
  'LBL_SCHEDULER_COMPONENTS' => 'Planeerija komponendid',
  'LBL_RECHECK_BTN' => 'Ülekontroll',
  'LBL_WEB_TO_LEAD_FORM_TITLE1' => 'Loo müügivihje vorm: Vali väljad',
  'LBL_WEB_TO_LEAD_FORM_TITLE2' => 'Loo müügivihje vorm: Vormi omadused',
  'LBL_DRAG_DROP_COLUMNS' => 'Lohista ja aseta müügivihje vormid veerus 1 & 2',
  'LBL_LEAD_NOTIFY_CAMPAIGN' => 'Seotud kampaania:',
  'LBL_DEFAULT_LEAD_SUBMIT' => 'Edasta',
  'LBL_WEB_TO_LEAD' => 'Loo müügivihje vorm',
  'LBL_LEAD_FOOTER' => 'Jaluse vorm:',
  'LBL_CAMPAIGN_NOT_SELECTED' => 'Vali ja seosta kampaania:',
  'LBL_SELECT_LEAD_FIELDS' => 'Palun vali saadaolevatest väljadest',
  'LBL_DESCRIPTION_LEAD_FORM' => 'Kirjelduse vorm:',
  'LBL_DESCRIPTION_TEXT_LEAD_FORM' => 'Selle vormi edastamine loob kampaaniaga koos müügivihje ja lingi',
  'LBL_PROVIDE_WEB_TO_LEAD_FORM_FIELDS' => 'Palun paku kõik nõutud väljad',
  'LBL_NOT_VALID_EMAIL_ADDRESS' => 'Kehtetud e-posti aadress',
  'LBL_AVALAIBLE_FIELDS_HEADER' => 'Saadaolevad väljad',
  'LBL_LEAD_FORM_FIRST_HEADER' => 'Müügivihje vorm (esimene veerg)',
  'LBL_LEAD_FORM_SECOND_HEADER' => 'Müügivihje vorm (teine veerg)',
  'LBL_LEAD_MODULE' => 'Müügivihjed',
  'LBL_SELECT_REQUIRED_LEAD_FIELDS' => 'Palun vali nõutud väljad:',
  'LBL_CAMPAIGN_RETURN_ON_INVESTMENT' => 'Kampaania ROI',
  'LBL_CAMPAIGN_RESPONSE_BY_RECIPIENT_ACTIVITY' => 'Kampaania tulemus saaja aktiivsuse järgi',
  'LBL_ROI_CHART_REVENUE' => 'Tulu',
  'LBL_ROI_CHART_INVESTMENT' => 'Investeering',
  'LBL_ROI_CHART_BUDGET' => 'Eelarve',
  'LBL_ROI_CHART_EXPECTED_REVENUE' => 'Oodatav tulu:',
  'LBL_TOP_CAMPAIGNS' => 'Top kampaaniad',
  'LBL_TOP_CAMPAIGNS_NAME' => 'Kampaania nimi:',
  'LBL_TOP_CAMPAIGNS_REVENUE' => 'Tulu',
  'LBL_LEADS' => 'Müügivihjed',
  'LBL_CONTACTS' => 'Kontaktid',
  'LBL_ACCOUNTS' => 'Ettevõtted',
  'LBL_OPPORTUNITIES' => 'Müügivõimalused',
  'LBL_CREATED_USER' => 'Loodud kasutaja',
  'LBL_MODIFIED_USER' => 'Muudetud kasutaja',
  'LBL_LOG_ENTRIES' => 'Logi sissekanded',
  'LBL_PROSPECTLISTS_SUBPANEL_TITLE' => 'Väljavaadete loend',
  'LBL_EMAILMARKETING_SUBPANEL_TITLE' => 'E-posti turundus',
  'LBL_TARGETED_SUBPANEL_TITLE' => 'Eesmärgistatud',
  'LBL_VIEWED_SUBPANEL_TITLE' => 'Vaatamisi',
  'LBL_LEAD_SUBPANEL_TITLE' => 'Müügivihje',
  'LBL_CONTACT_SUBPANEL_TITLE' => 'Kontakt',
  'LBL_INVALID EMAIL_SUBPANEL_TITLE' => 'Kehtetu e-post:',
  'LBL_SEND ERROR_SUBPANEL_TITLE' => 'Saada veateade',
  'LBL_REMOVED_SUBPANEL_TITLE' => 'Eemaldatud',
  'LBL_BLOCKED_SUBPANEL_TITLE' => 'Blokeeritud',
  'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Ettevõtted',
  'LBL_LEADS_SUBPANEL_TITLE' => 'Müügivihjed',
  'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Müügivõimalused',
  'LBL_IMPORT_PROSPECTS' => 'Impordi eesmärgid',
  'LBL_LEAD_FORM_WIZARD' => 'Müügivihje viisardist',
  'LBL_CAMPAIGN_INFORMATION' => 'Kampaania ülevaade',
  'LBL_MONTH' => 'Kuu',
  'LBL_YEAR' => 'Aasta',
  'LBL_DAY' => 'Päev',
);

