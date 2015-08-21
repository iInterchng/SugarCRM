<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

	

$mod_strings = array (
  'LBL_LIST_STATUS' => 'Status',
  'LBL_LIST_TYPE' => 'Type',
  'LBL_TRACK_BUTTON_KEY' => 'T',
  'LBL_QUEUE_BUTTON_KEY' => 'u',
  'LBL_TEST_BUTTON_KEY' => 'e',
  'LBL_TODETAIL_BUTTON_KEY' => 'T',
  'LBL_CAMPAIGN_LEAD_SUBPANEL_TITLE' => 'Leads',
  'LBL_OPPORTUNITY_SUBPANEL_TITLE' => 'Opportunities',
  'LBL_TRACK_DELETE_BUTTON_KEY' => 'D',
  'LBL_STATUS_TEXT' => 'Status:',
  'LBL_EDIT_TRACKER_URL' => 'Tracker URL:',
  'LBL_TEST_TYPE_NAME' => 'Test',
  'LBL_UNSUBSCRIPTION_LIST' => 'Unsubscription List',
  'LBL_SUBSCRIPTION_LIST' => 'Subscription List',
  'LBL_WIZARD_SUBSCRIPTION_MESSAGE' => 'Each newsletter must have three target lists (Subscription, Unsubscription, and Test). You can assign an existing target list. If not, an empty target list will be created when you save the newsletter.',
  'LBL_WIZARD_TARGET_MESSAGE1' => 'Select or create a target list for use with your campaign.  This list will be used while sending emails with your marketing messages.',
  'LBL_WIZARD_TARGET_MESSAGE2' => 'Or create a new one using the form below:',
  'LBL_WIZARD_TRACKER_MESSAGE' => 'Define a tracker URL here to use with this campaign. You must enter both the name and the URL to create the tracker.',
  'LBL_NAVIGATION_MENU_GEN2' => 'Budget',
  'LBL_NAVIGATION_MENU_TRACKERS' => 'Trackers',
  'LBL_NAVIGATION_MENU_MARKETING' => 'Marketing',
  'LBL_SUBSCRIPTION_TARGET_WIZARD_DESC' => 'This will define the target list of type Subscription for this campaign.<br>  This target list will be used to send out emails for this campaign.  <br>If you do not have a list ready, an empty list will be created for you.',
  'LBL_UNSUBSCRIPTION_TARGET_WIZARD_DESC' => 'This will define the target list of type Unsubscription for this campaign.  <br>This target list will contain names of people who have opted out of your campaign and should not be contacted through email.  <br>If you do not have a list ready, an empty list will be created for you.',
  'LBL_TEST_TARGET_WIZARD_DESC' => 'This will define the target list of type Test for this campaign.  <br>This target list will be used to send out test emails for this campaign.  <br>If you do not have a list ready, an empty list will be created for you.',
  'LBL_TRACKERS' => 'Trackers',
  'LBL_CONFIRM' => 'Start',
  'LBL_START' => 'Start',
  'LBL_TOTAL_ENTRIES' => 'Entries',
  'LBL_SAVE_EXIT_BUTTON_LABEL' => 'Finish',
  'LBL_NO_SUBS_ENTRIES_WARNING' => 'You cannot send a marketing email until your subscription list has at least one entry.  You can populate your list after finishing.',
  'LBL_NO_TARGET_ENTRIES_WARNING' => 'You cannot send a marketing email until your target list has at least one entry.  You can populate your list after finishing.',
  'LBL_NO_TARGETS_WARNING' => 'You cannot send a marketing email until your campaign has at least one target list.',
  'LBL_NONE' => 'none created',
  'ERR_INT_ONLY_EMAIL_PER_RUN' => 'Only integer values are allow for Number of emails sent per batch',
  'LBL_LOCATION_TRACK' => 'Location of campaign tracking files (like campaign_tracker.php):',
  'LBL_MAIL_SENDTYPE' => 'Mail Transfer Agent:',
  'LBL_MAIL_SMTPAUTH_REQ' => 'Use SMTP Authentication?',
  'LBL_MAIL_SMTPSERVER' => 'SMTP Server',
  'TRACKING_ENTRIES_LOCATION_DEFAULT_VALUE' => 'Value of Config.php setting site_url',
  'LBL_NOTIFY_TITLE' => 'Email Notification Options',
  'LBL_MASS_MAILING_TITLE' => 'Mass Mailing Options',
  'LBL_SERVER_TYPE' => 'Mail Server Protocol',
  'LBL_SERVER_URL' => 'Mail Server Address',
  'LBL_LOGIN' => 'User Name',
  'LBL_PORT' => 'Mail Server Port',
  'LBL_PASSWORD' => 'Password',
  'LBL_MAILBOX_DEFAULT' => 'INBOX',
  'LBL_MAILBOX' => 'Monitored Folder',
  'LBL_CAMP_MESSAGE_COPY_DESC' => 'Would you like to store complete copies of <bold>EACH</bold> email message sent during all campaigns?  <bold>We recommend and default to no</bold>.  Choosing no will store only the template that is sent and the needed variables to recreate the individual message.',
  'LBL_SSL_DESC' => 'If your mail server supports secure socket connections, enabling this will force SSL connections when importing email.',
  'LNK_CAMPAIGN_DIGNOSTIC_LINK' => 'Campaign may not function as desired and your emails may not be sent for the following reasons:',
  'LBL_MAILBOX_CHECK2_BAD' => 'Please configure your system email address.  E-mail Settings have not been configured.',
  'LBL_SCHEDULER_CHECK_GOOD' => 'Schedulers detected',
  'LBL_SCHEDULER_CHECK_BAD' => 'No Schedulers detected',
  'LBL_SCHEDULER_CHECK1_BAD' => 'Scheduler has not been set up to process Bounced Campaign Emails.',
  'LBL_SCHEDULER_CHECK2_BAD' => 'Scheduler has not been set up to process Campaign Emails.',
  'LBL_SCHEDULER_NAME' => 'Scheduler',
  'LBL_SCHEDULER_STATUS' => 'Status',
  'LBL_MARKETING_CHECK1_GOOD' => 'Email marketing components detected.',
  'LBL_MARKETING_CHECK1_BAD' => 'No Email marketing components detected, you will need to create one to mail out a campaign.',
  'LBL_MARKETING_CHECK2_GOOD' => 'Target lists detected.',
  'LBL_MARKETING_CHECK2_BAD' => 'No target lists detected, you will need to create one from desired campaign screen.',
  'LBL_EMAIL_SETUP_WIZ' => 'Launch Email Setup',
  'LBL_SCHEDULER_LINK' => 'go to scheduler admin screen.',
  'LBL_TO_WIZARD' => 'launch',
  'LBL_TO_WIZARD_TITLE' => 'Launch Wizard',
  'LBL_DEFINE_LEAD_POST_URL' => 'Post URL:',
  'LBL_DEFINE_LEAD_REDIRECT_URL' => 'Redirect URL:',
  'LBL_DESCRIPTION_TEXT_LEAD_FORM' => 'Submitting this form will create a lead and link with campaign',
  'LBL_PROVIDE_WEB_TO_LEAD_FORM_FIELDS' => 'Please provide all the required fields',
  'LBL_LEAD_MODULE' => 'Leads',
  'LBL_CAMPAIGN_RETURN_ON_INVESTMENT' => 'Campaign Return On Investment',
  'LBL_CAMPAIGN_RESPONSE_BY_RECIPIENT_ACTIVITY' => 'Campaign Response by Recipient Activity',
  'LBL_ROI_CHART_BUDGET' => 'Budget',
  'LBL_LEADS' => 'Leads',
  'LBL_OPPORTUNITIES' => 'Opportunities',
  'LBL_LOG_ENTRIES' => 'Log Entries',
  'LBL_EMAILMARKETING_SUBPANEL_TITLE' => 'Email Marketing',
  'LBL_TRACK_QUEUE_SUBPANEL_TITLE' => 'Track Queue',
  'LBL_TARGETED_SUBPANEL_TITLE' => 'Targeted',
  'LBL_VIEWED_SUBPANEL_TITLE' => 'Viewed',
  'LBL_LINK_SUBPANEL_TITLE' => 'Link',
  'LBL_LEAD_SUBPANEL_TITLE' => 'Lead',
  'LBL_LEADS_SUBPANEL_TITLE' => 'Leads',
  'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Opportunities',
  'LBL_FROM_ADDR' => '"Van" Adres',
  'LBL_REPLY_ADDR' => '"Antwoord-naar" Adres:',
  'LBL_REPLY_NAME' => '"Antwoord-naar" Naam:',
  'LBL_MODULE_NAME' => 'Campagne',
  'LBL_MODULE_TITLE' => 'Campagnes: Start',
  'LBL_NEWSLETTER_TITLE' => 'Campagnes: Nieuwsbrieven',
  'LBL_SEARCH_FORM_TITLE' => 'Campagne Zoeken',
  'LBL_LIST_FORM_TITLE' => 'Campagne Lijst',
  'LBL_NEWSLETTER_LIST_FORM_TITLE' => 'Nieuwsbrievenlijst',
  'LBL_CAMPAIGN_NAME' => 'Naam:',
  'LBL_CAMPAIGN' => 'Campagnes:',
  'LBL_NAME' => 'Naam:',
  'LBL_INVITEE' => 'Personen',
  'LBL_LIST_CAMPAIGN_NAME' => 'Campagnes',
  'LBL_LIST_START_DATE' => 'Begindatum',
  'LBL_LIST_END_DATE' => 'Einddatum',
  'LBL_DATE_ENTERED' => 'Datum ingevoerd',
  'LBL_DATE_MODIFIED' => 'Laatste wijziging',
  'LBL_MODIFIED' => 'Gewijzigd door:',
  'LBL_CREATED' => 'Gemaakt door:',
  'LBL_TEAM' => 'Team:',
  'LBL_ASSIGNED_TO' => 'Toegewezen aan:',
  'LBL_ASSIGNED_TO_ID' => 'Toegewezen aan:',
  'LBL_ASSIGNED_TO_NAME' => 'Toegewezen aan:',
  'LBL_CAMPAIGN_START_DATE' => 'Begindatum:',
  'LBL_CAMPAIGN_END_DATE' => 'Einddatum:',
  'LBL_CAMPAIGN_STATUS' => 'Status:',
  'LBL_CAMPAIGN_BUDGET' => 'Budget:',
  'LBL_CAMPAIGN_EXPECTED_COST' => 'Verwachte Kosten:',
  'LBL_CAMPAIGN_ACTUAL_COST' => 'Werkelijke Kosten:',
  'LBL_CAMPAIGN_EXPECTED_REVENUE' => 'Verwachte Omzet:',
  'LBL_CAMPAIGN_IMPRESSIONS' => 'Impressies',
  'LBL_CAMPAIGN_COST_PER_IMPRESSION' => 'Kosten per impressie',
  'LBL_CAMPAIGN_COST_PER_CLICK_THROUGH' => 'Kosten per doorklik',
  'LBL_CAMPAIGN_OPPORTUNITIES_WON' => 'Opportunities gewonnen',
  'LBL_CAMPAIGN_TYPE' => 'Type:',
  'LBL_CAMPAIGN_OBJECTIVE' => 'Doel:',
  'LBL_CAMPAIGN_CONTENT' => 'Beschrijving:',
  'LBL_CAMPAIGN_DAYS_REMAIN' => 'Dagen resterend',
  'LNK_NEW_CAMPAIGN' => 'Ontwerp Campagne',
  'LNL_NEW_CAMPAIGN_WIZARD' => 'Maak Campagne (Wizard)',
  'LNK_CAMPAIGN_LIST' => 'Campagnes',
  'LNK_NEW_PROSPECT' => 'Nieuwe Target',
  'LNK_PROSPECT_LIST' => 'Targets',
  'LNK_NEW_PROSPECT_LIST' => 'Ontwerp Target Lijst',
  'LNK_PROSPECT_LIST_LIST' => 'Target Lijsten',
  'LBL_MODIFIED_BY' => 'Gewijzigd door:',
  'LBL_CREATED_BY' => 'Gemaakt door:',
  'LBL_DATE_CREATED' => 'Datum ingevoerd:',
  'LBL_DATE_LAST_MODIFIED' => 'Laatste wijziging:',
  'LBL_TRACKER_KEY' => 'Tracker:',
  'LBL_TRACKER_URL' => 'Tracker URL:',
  'LBL_TRACKER_TEXT' => 'Tracker Link Tekst:',
  'LBL_TRACKER_COUNT' => 'Tracker Teller:',
  'LBL_REFER_URL' => 'Tracker Redirect URL:',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Campagnes',
  'LBL_EMAIL_CAMPAIGNS_TITLE' => 'E-mail Campagnes',
  'LBL_NEW_FORM_TITLE' => 'Nieuwe Campagne',
  'LBL_TRACKED_URLS' => 'Tracker URL&#39;s',
  'LBL_TRACKED_URLS_SUBPANEL_TITLE' => 'Tracker URL&#39;s',
  'LBL_CAMPAIGN_ACCOUNTS_SUBPANEL_TITLE' => 'Organisaties',
  'LBL_PROSPECT_LIST_SUBPANEL_TITLE' => 'Targetlijst',
  'LBL_EMAIL_MARKETING_SUBPANEL_TITLE' => 'E-mail Marketing',
  'LNK_NEW_EMAIL_TEMPLATE' => 'Ontwerp E-mail Template',
  'LNK_EMAIL_TEMPLATE_LIST' => 'Email Templates',
  'LBL_TRACK_BUTTON_TITLE' => 'Bekijk Status',
  'LBL_TRACK_BUTTON_LABEL' => 'Bekijk Status',
  'LBL_QUEUE_BUTTON_TITLE' => 'Verzend E-mails',
  'LBL_QUEUE_BUTTON_LABEL' => 'Verzend E-mails',
  'LBL_TEST_BUTTON_TITLE' => 'Verzend Test',
  'LBL_TEST_BUTTON_LABEL' => 'Verzend Test',
  'LBL_COPY_AND_PASTE_CODE' => 'Of kopieer en plak de onderstaande HTML in een bestaande pagina',
  'LBL_TODETAIL_BUTTON_TITLE' => 'Bekijk Details',
  'LBL_TODETAIL_BUTTON_LABEL' => 'Bekijk Details',
  'LBL_DEFAULT' => 'Alle Targetlijsten',
  'LBL_MESSAGE_QUEUE_TITLE' => 'Berichten Wachtrij',
  'LBL_LOG_ENTRIES_TITLE' => 'Respons',
  'LBL_LOG_ENTRIES_TARGETED_TITLE' => 'Berichten Verstuurd',
  'LBL_LOG_ENTRIES_SEND_ERROR_TITLE' => 'Bounced, reden onbekend',
  'LBL_LOG_ENTRIES_INVALID_EMAIL_TITLE' => 'Bounced, fout E-mailadres',
  'LBL_LOG_ENTRIES_LINK_TITLE' => 'Link aangeklikt',
  'LBL_LOG_ENTRIES_VIEWED_TITLE' => 'E-mail bekeken',
  'LBL_LOG_ENTRIES_REMOVED_TITLE' => 'Afgemeld voor Mail',
  'LBL_LOG_ENTRIES_LEAD_TITLE' => 'Lead Aangemaakt',
  'LBL_LOG_ENTRIES_CONTACT_TITLE' => 'Persoon Aangemaakt',
  'LBL_BACK_TO_CAMPAIGNS' => 'Naar Campagnes',
  'ERR_NO_EMAIL_MARKETING' => 'Er moet minstens één actief E-mail Marketing bericht bij een Campagne horen.',
  'ERR_NO_TARGET_LISTS' => 'Er moet minstens één Targetlijst bij een Campagne horen.',
  'ERR_NO_TEST_TARGET_LISTS' => 'Er moet minstens één test Targetlijst bij een Campagne horen.',
  'ERR_SENDING_NOW' => 'De berichten worden op dit moment verstuurd, probeer het later opnieuw.',
  'ERR_MESS_NOT_FOUND_FOR_LIST' => 'Er zijn geen Email Marketing berichten gevonden voor deze targetlijst',
  'ERR_MESS_DUPLICATE_FOR_LIST' => 'Er zijn meerdere Email Marketing berichten gedefinieerd voor deze targetlijst',
  'ERR_FIX_MESSAGES' => 'Corrigeer de volgende fouten voor je verdergaat',
  'LBL_TRACK_ROI_BUTTON_LABEL' => 'Bekijk ROI',
  'LBL_TRACK_DELETE_BUTTON_TITLE' => 'Verwijder Test Items',
  'LBL_TRACK_DELETE_BUTTON_LABEL' => 'Verwijder Test Items',
  'LBL_TRACK_DELETE_CONFIRM' => 'Deze optie zal alle log-items verwijderen die zijn gemaakt tijdens de test-sessie. Doorgaan?',
  'ERR_NO_MAILBOX' => 'Aan de volgende marketing berichten is geen E-mailaccount gekoppeld.<br>Gelieve te wijzigen.',
  'LBL_LIST_TO_ACTIVITY' => 'Bekijk Status',
  'LBL_CURRENCY_ID' => 'Valuta ID',
  'LBL_CURRENCY' => 'Valuta',
  'LBL_ROLLOVER_VIEW' => 'Houdt cursor boven balk voor meer details.',
  'LBL_TARGETED' => 'Doelstelling',
  'LBL_TOTAL_TARGETED' => 'Totaal doelstelling',
  'LBL_CAMPAIGN_FREQUENCY' => 'Frequentie',
  'LBL_NEWSLETTERS' => 'Nieuwsbrieven',
  'LBL_NEWSLETTER' => 'Nieuwsbrief',
  'LBL_NEWSLETTER_FORENTRY' => 'Nieuwsbrief',
  'LBL_MORE_DETAILS' => 'Meer Details',
  'LBL_CREATE_NEWSLETTER' => 'Nieuwe Nieuwsbrief',
  'LBL_LIST_NAME' => 'Naam',
  'LBL_FROM_MAILBOX_NAME' => 'Gebruik E-Mailaccount:',
  'LBL_FROM_NAME' => 'Naam afzender:',
  'LBL_START_DATE_TIME' => 'Begindatum & -tijd:',
  'LBL_DATE_START' => 'Begindatum',
  'LBL_TIME_START' => 'Begintijd',
  'LBL_TEMPLATE' => 'E-mail Sjabloon:',
  'LBL_CREATE_EMAIL_TEMPLATE' => 'Nieuw',
  'LBL_MESSAGE_FOR' => 'Ontvanger:',
  'LBL_FINISH' => 'Afronden',
  'LBL_ALL_PROSPECT_LISTS' => 'Alle Target lijsten in de Campagne.',
  'LBL_EDIT_EMAIL_TEMPLATE' => 'Wijzigen',
  'LBL_EMAIL_SETUP_WIZARD' => 'E-mail Setup',
  'LBL_DIAGNOSTIC_WIZARD' => 'Diagnostiek',
  'LBL_ALREADY_SUBSCRIBED_HEADER' => 'Nieuwsbrief abonnementen',
  'LBL_UNSUBSCRIBED_HEADER' => 'Beschikbare Nieuwsbrieven/ Uitgeschreven van',
  'LBL_UNSUBSCRIBED_HEADER_EXPL' => 'Verplaatst de nieuwsbrief naar de &#39;Beschikbare Nieuwsbrieven/ Uitgeschreven van&#39; lijst voegt de Persoon toe aan de Uitgeschreven Lijst voor deze nieuwsbrief. Hij wordt niet verwijderd van de originele Abonnementen Lijst of Target Lijst.',
  'LBL_FILTER_CHART_BY' => 'Filter Grafiek op:',
  'LBL_MANAGE_SUBSCRIPTIONS_TITLE' => 'Beheer Abonnementen',
  'LBL_MARK_AS_SENT' => 'Markeer als Verzonden',
  'LBL_DEFAULT_LIST_NOT_FOUND' => 'Target lijst of standaardwaarde niet gevonden',
  'LBL_DEFAULT_LIST_ENTRIES_NOT_FOUND' => 'Geen input gevonden',
  'LBL_DEFAULT_LIST_ENTRIES_WERE_PROCESSED' => 'Input is verwerkt',
  'LBL_EDIT_TRACKER_NAME' => 'Tracker Naam:',
  'LBL_EDIT_OPT_OUT_' => 'Afmelden Link?',
  'LBL_EDIT_OPT_OUT' => 'Afmelden Link:',
  'LBL_UNSUBSCRIPTION_LIST_NAME' => 'Uitschrijving Lijst Naam:',
  'LBL_SUBSCRIPTION_LIST_NAME' => 'Inschrijving Lijst Naam:',
  'LBL_TEST_LIST_NAME' => 'Test Lijst Naam:',
  'LBL_UNSUBSCRIPTION_TYPE_NAME' => 'Uitschrijving',
  'LBL_SUBSCRIPTION_TYPE_NAME' => 'Inschrijving',
  'LBL_MRKT_NAME' => 'Naam',
  'LBL_TEST_LIST' => 'Test Lijst',
  'LBL_WIZARD_HEADER_MESSAGE' => 'Vul de vereiste velden in om de juiste Campagne te identificeren.',
  'LBL_WIZARD_BUDGET_MESSAGE' => 'Vul het Budget in voor de berekening van ROI.',
  'LBL_WIZARD_MARKETING_MESSAGE' => 'Fill out the form below to create an email instance for your newsletter.  This will allow you to specify the information regarding when and how your newsletter should be sent out.',
  'LBL_WIZARD_SENDMAIL_MESSAGE' => 'This is the last step in the process.  Choose whether you wish to send out a test, schedule your newsletter to be sent, or simply to save your work and go to summary.',
  'LBL_HOME_START_MESSAGE' => 'Selecteer het gewenste soort Campagne.',
  'LBL_WIZARD_LAST_STEP_MESSAGE' => 'U kunt niet verder, u bevindt zich op de laatste stap.',
  'LBL_WIZARD_FIRST_STEP_MESSAGE' => 'U kunt niet verder terug, u bevindt zich op de eerste stap.',
  'LBL_WIZ_NEWSLETTER_TITLE_STEP1' => 'Campagne Header',
  'LBL_WIZ_NEWSLETTER_TITLE_STEP2' => 'Campagne Budget',
  'LBL_WIZ_NEWSLETTER_TITLE_STEP3' => 'Campagne Tracker URLs',
  'LBL_WIZ_NEWSLETTER_TITLE_STEP4' => 'Inschrijving informatie',
  'LBL_WIZ_MARKETING_TITLE' => 'Marketing E-mail',
  'LBL_WIZ_SENDMAIL_TITLE' => 'Verzend E-mail',

  'LBL_WIZ_TEST_EMAIL_TITLE' => 'Test E-mail',
  'LBL_WIZ_NEWSLETTER_TITLE_SUMMARY' => 'Samenvatting',
  'LBL_NAVIGATION_MENU_GEN1' => 'Campagne Header',
  'LBL_NAVIGATION_MENU_SEND_EMAIL' => 'Verzend E-mail',
  'LBL_NAVIGATION_MENU_SUBSCRIPTIONS' => 'Inschrijvingen',
  'LBL_NAVIGATION_MENU_SUMMARY' => 'Samenvatting',
  'LBL_ADD_TRACKER' => 'Nieuwe Tracker',
  'LBL_ADD_TARGET' => 'Toevoegen',
  'LBL_CREATE_TARGET' => 'Nieuw',
  'LBL_SELECT_TARGET' => 'Gebruik bestaande Target Lijst',
  'LBL_REMOVE' => 'del',
  'LBL_CONFIRM_CAMPAIGN_SAVE_CONTINUE' => 'Campagne opslaan en doorgaan naar Marketing E-Mail',

  'LBL_CONFIRM_CAMPAIGN_SAVE_OPTIONS' => 'Instellingen Opslaan',
  'LBL_CONFIRM_CAMPAIGN_SAVE_EXIT' => 'Wilt u de informatie opslaan en sluiten?',
  'LBL_CONFIRM_SEND_SAVE' => 'U staat op het punt door te gaan de Campagne Email pagina te versturen. Wilt u opslaan en door gaan?',
  'LBL_NEWSLETTER WIZARD_TITLE' => 'Nieuwsbrief:',
  'LBL_NEWSLETTER_WIZARD_START_TITLE' => 'Wijzig Nieuwsbrief:',
  'LBL_CAMPAIGN_WIZARD_START_TITLE' => 'Wijzig Campagne:',
  'LBL_SEND_AS_TEST' => 'Verzend Marketing E-mail als Test',
  'LBL_SAVE_CONTINUE_BUTTON_LABEL' => 'Opslaan en verder gaan',
  'LBL_TARGET_LISTS' => 'Target Lijst',
  'LBL_CAMPAIGN_WIZARD' => 'Campagne Wizard',
  'LBL_EMAIL' => 'E-mail',
  'LBL_OTHER_TYPE_CAMPAIGN' => 'Overige (Niet E-mail gebaseerd)',
  'LBL_CHOOSE_CAMPAIGN_TYPE' => 'Campagne Soort',
  'LBL_TARGET_LIST' => 'Target Lijst',
  'LBL_TARGET_TYPE' => 'Target Lijst Type',
  'LBL_TARGET_NAME' => 'Target Lijst Naam',
  'LBL_EMAILS_SCHEDULED' => 'Geplande E-Mails',
  'LBL_TEST_EMAILS_SENT' => 'Test E-Mails Verzonden',
  'LBL_USERS_CANNOT_OPTOUT' => 'System Users do not have the choice of opting out from receiving emails.',
  'LBL_ELECTED_TO_OPTOUT' => 'You have elected to opt out and to no longer receive emails.',
  'LBL_COPY_OF' => 'Kopie van',
  'LBL_SAVED_SEARCH' => 'Opgeslagen Zoekopdrachten & Layout',
  'LBL_WIZ_FROM_NAME' => 'Naam Afzender:',
  'LBL_WIZ_FROM_ADDRESS' => 'Adres Afzender:',
  'LBL_EMAILS_PER_RUN' => 'Aantal verzonden E-Mails deze batch:',
  'LBL_CUSTOM_LOCATION' => 'Allow Select',
  'LBL_DEFAULT_LOCATION' => 'Auto-Create',
  'LBL_MAIL_SMTPPASS' => 'SMTP Wachtwoord:',
  'LBL_MAIL_SMTPPORT' => 'SMTP Poort',
  'LBL_MAIL_SMTPUSER' => 'SMTP Gebruikersnaam',
  'LBL_EMAIL_SETUP_WIZARD_TITLE' => 'E-Mail setup voor Campagnes',
  'LBL_MAILBOX_NAME' => 'Mailbox Name:',
  'LBL_NAVIGATION_MENU_SETUP' => 'Setup E-Mail',
  'LBL_NAVIGATION_MENU_NEW_MAILBOX' => 'Nieuw E-Mailaccount',
  'LBL_MAILBOX_CHECK_WIZ_GOOD' => 'Mailbox(es) with bounce handling detected.  You do not need to create a new one, but you can still do so below.',
  'LBL_MAILBOX_CHECK_WIZ_BAD' => 'No mailboxes with bounce handling were detected, please create a new one below.',
  'LBL_CAMP_MESSAGE_COPY' => 'Bewaar kopieën van Campagne berichten:',
  'LBL_YES' => 'Ja',
  'LBL_NO' => 'Nee',
  'LBL_DEFAULT_FROM_ADDR' => 'Default:',
  'LBL_EMAIL_SETUP_DESC' => 'Fill out the form below to modify your System Settings so that Campaign Emails can be sent out.',
  'LBL_CREATE_MAILBOX' => 'Nieuw E-Mailaccount',
  'LBL_SSL' => 'Gebruik SSL',
  'LBL_CAMPAIGN_DIAGNOSTICS' => 'Campagne Statistieken',
  'LBL_DIAGNOSTIC' => 'Statistiek',
  'LBL_MAILBOX_CHECK1_GOOD' => 'Mailbox(es) with bounce handling detected:',
  'LBL_MAILBOX_CHECK1_BAD' => 'No Mailboxes with bounce handling detected.',
  'LBL_MAILBOX_CHECK2_GOOD' => 'E-mail Settings have been configured:',
  'LBL_EDIT_EXISTING' => 'Wijzig Campagne',
  'LBL_EDIT_TARGET_LIST' => 'Wijzig Target Lijst',
  'LBL_SEND_EMAIL' => 'Schedule E-Mail',
  'LBL_USE_EXISTING' => 'Gebruik Bestaand',
  'LBL_CREATE_NEW_MARKETING_EMAIL' => 'Nieuwe Marketing E-Mail',
  'LBL_CHOOSE_NEXT_STEP' => 'Kies volgende actie',
  'LBL_NON_ADMIN_ERROR_MSG' => 'Gelieve uw Systeembeheerder te waarschuwen zodat het probleem kan worden opgelost.',
  'LBL_EMAIL_COMPONENTS' => 'E-Mail Onderdelen',
  'LBL_SCHEDULER_COMPONENTS' => 'Agenda Onderdelen',
  'LBL_RECHECK_BTN' => 'Verversen',
  'LBL_WEB_TO_LEAD_FORM_TITLE1' => 'Nieuw Lead Formulier: Selecteer velden',
  'LBL_WEB_TO_LEAD_FORM_TITLE2' => 'Nieuw Lead Formulier: Instellingen',
  'LBL_DRAG_DROP_COLUMNS' => 'Drag-and-drop lead velden in kolommen 1 & 2',
  'LBL_DEFINE_LEAD_HEADER' => 'Formulier Header:',
  'LBL_LEAD_DEFAULT_HEADER' => 'Web-to-Lead Formulier voor Campagne',
  'LBL_DEFINE_LEAD_SUBMIT' => 'Verzend-knop Label:',
  'LBL_EDIT_LEAD_POST_URL' => 'Wijzig Post URL?',
  'LBL_LEAD_NOTIFY_CAMPAIGN' => 'Gerelateerde Campagne:',
  'LBL_DEFAULT_LEAD_SUBMIT' => 'Verzenden',
  'LBL_WEB_TO_LEAD' => 'Nieuw Lead Formulier',
  'LBL_LEAD_FOOTER' => 'Formulier Afsluiting:',
  'LBL_CAMPAIGN_NOT_SELECTED' => 'Selecteer en koppel een Campagne',
  'NTC_NO_LEGENDS' => 'Geen',
  'LBL_SELECT_LEAD_FIELDS' => 'Gelieve selecteren uit beschikbare velden',
  'LBL_DESCRIPTION_LEAD_FORM' => 'Formulier Omschrijving:',
  'LBL_DOWNLOAD_TEXT_WEB_TO_LEAD_FORM' => 'Please download your web to lead form',
  'LBL_DOWNLOAD_WEB_TO_LEAD_FORM' => 'Web-to-Lead Formulier',
  'LBL_NOT_VALID_EMAIL_ADDRESS' => 'Ongeldig E-Mailadres',
  'LBL_AVALAIBLE_FIELDS_HEADER' => 'Beschikbare velden',
  'LBL_LEAD_FORM_FIRST_HEADER' => 'Lead Formulier (Eerste Kolom)',
  'LBL_LEAD_FORM_SECOND_HEADER' => 'Lead Formulier (Tweede Kolom)',
  'LBL_CREATE_WEB_TO_LEAD_FORM' => 'Nieuw Web-to-Lead Formulier',
  'LBL_SELECT_REQUIRED_LEAD_FIELDS' => 'Selecteer vereiste velden:',
  'LBL_LOG_ENTRIES_BLOCKEDD_TITLE' => 'Onderdrukt door E-mailadres of domein',
  'LBL_AMOUNT_IN' => 'Bedrag in',
  'LBL_ROI_CHART_REVENUE' => 'Opbrengst',
  'LBL_ROI_CHART_INVESTMENT' => 'Investering',
  'LBL_ROI_CHART_EXPECTED_REVENUE' => 'Verwachte Opbrengst',
  'LBL_TOP_CAMPAIGNS' => 'Hoogste Campagnes',
  'LBL_TOP_CAMPAIGNS_NAME' => 'Campagne Naam',
  'LBL_TOP_CAMPAIGNS_REVENUE' => 'Opbrengst',
  'LBL_CONTACTS' => 'Personen',
  'LBL_ACCOUNTS' => 'Organisaties',
  'LBL_CREATED_USER' => 'Aangemaakt door Gebruiker',
  'LBL_MODIFIED_USER' => 'Gewijzigd door Gebruiker',
  'LBL_PROSPECTLISTS_SUBPANEL_TITLE' => 'Prospect Lijst',
  'LBL_CONTACT_SUBPANEL_TITLE' => 'Persoon',
  'LBL_INVALID EMAIL_SUBPANEL_TITLE' => 'Ongeldige E-Mail',
  'LBL_SEND ERROR_SUBPANEL_TITLE' => 'Verstuur Error',
  'LBL_REMOVED_SUBPANEL_TITLE' => 'Verwijderd',
  'LBL_BLOCKED_SUBPANEL_TITLE' => 'Geblokkeerd',
  'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Organisaties',
  'LBL_IMPORT_PROSPECTS' => 'Importeer Targets',
  'LBL_LEAD_FORM_WIZARD' => 'Lead van Wizard',
  'LBL_CAMPAIGN_INFORMATION' => 'Campagne Overzicht',
  'LBL_MONTH' => 'Maand',
  'LBL_YEAR' => 'Jaar',
  'LBL_DAY' => 'Dag',
);

