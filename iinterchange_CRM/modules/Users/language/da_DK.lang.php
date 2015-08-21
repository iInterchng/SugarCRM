<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

	

$mod_strings = array (
  'LBL_DOWNLOADS' => 'Downloads',
  'LBL_FAX_PHONE' => 'Fax',
  'LBL_FAX' => 'Fax',
  'LBL_GENERATE_PASSWORD_BUTTON_KEY' => 'G',
  'LBL_LDAP' => 'LDAP',
  'LBL_LIST_STATUS' => 'Status',
  'LBL_LOGIN_BUTTON_KEY' => 'L',
  'LBL_LOGIN_LOGIN_TIME_MINUTES' => 'min.',
  'LBL_NAVIGATION_PARADIGM' => 'Navigation',
  'LBL_NEW_USER_BUTTON_KEY' => 'N',
  'LBL_SETTINGS_URL' => 'URL',
  'LBL_STATUS' => 'Status',
  'LBL_FIND_OPTIMUM_KEY' => 'f',
  'LBL_TEST_BUTTON_KEY' => 't',
  'LBL_TEST_BUTTON_TITLE' => 'Test [Alt+T]',
  'LBL_RESOURCE_TYPE' => 'Type',
  'LBL_OK' => 'OK',
  'LBL_ASSIGN_PRIVATE_TEAM' => '"privat team ved gem"',
  'LBL_ASSIGN_TEAM' => 'Tildel til team',
  'LBL_DEFAULT_TEAM_TEXT' => 'Som standard kan de team vises, som du er medlem af.',
  'LBL_DEFAULT_TEAM' => 'Standardteam:',
  'LBL_LIST_DESCRIPTION' => 'Beskrivelse',
  'LBL_MY_TEAMS' => 'Mine team',
  'LBL_PRIVATE_TEAM_FOR' => 'Privat team for',
  'LNK_EDIT_TABS' => 'Rediger faner',
  'NTC_REMOVE_TEAM_MEMBER_CONFIRMATION' => 'Er du sikker på, at du vil fjerne denne brugers medlemskab?',
  'LBL_TEAMS' => 'Team',
  'LBL_TEAM_UPLINE' => 'Medlems Rapporterer til',
  'LBL_TEAM_UPLINE_EXPLICIT' => 'Medlem',
  'LBL_DELETE_USER_CONFIRM' => 'Når brugerposten er slettet, vil den tilsvarende medarbejderpost også blive slettet. Efter at brugeren er slettet skal enhver arbejdsgangsdefinition eller rapport relateret til brugeren muligvis opdateres.<br><br /><br><br />Klik "ok" for at slette brugerposten. Når du har klikket på "ok", får du mulighed for at omplacere poster, tildelt til brugeren, til en anden bruger.',
  'LBL_DELETE_GROUP_CONFIRM' => 'Er du sikker på at du vil slette denne gruppebruger? Klik på "ok" for at slette brugerposten.<br><br />Når du har klikket på "ok", får du mulighed for at omplacere poster tildelt til gruppebrugeren til en anden bruger.',
  'LBL_DELETE_PORTAL_CONFIRM' => 'Er du sikker på, at du vil slette denne Portal API bruger? Klik på "ok" for at slette brugerposten.',
  'LNK_IMPORT_USERS' => 'Importér brugere',
  'ERR_DELETE_RECORD' => 'Der skal angives et postnummer for at slette Virksomheden.',
  'ERR_EMAIL_INCORRECT' => 'Angiv en gyldig e-mail-adresse for at oprette og sende adgangskoden.',
  'ERR_EMAIL_NO_OPTS' => 'Optimale indstillinger for indgående e-mail blev ikke fundet.',
  'ERR_ENTER_CONFIRMATION_PASSWORD' => 'Angiv din bekræftelse af adgangskoden.',
  'ERR_ENTER_NEW_PASSWORD' => 'Angiv din nye adgangskode.',
  'ERR_ENTER_OLD_PASSWORD' => 'Angiv din nuværende adgangskode.',
  'ERR_IE_FAILURE1' => '[Klik her for at vende tilbage]',
  'ERR_IE_FAILURE2' => 'Der opstod problemer med at oprette forbindelse til e-mail-kontoen. Kontrollér dine indstillinger, og prøv igen.',
  'ERR_IE_MISSING_REQUIRED' => 'Indstillingerne for indgående e-mail mangler obligatoriske oplysninger. Kontrollér dine indstillinger, og prøv igen. Hvis du ikke konfigurerer indgående e-mail, skal du rydde alle felter i denne sektion.',
  'ERR_INVALID_PASSWORD' => 'Du skal angive et gyldigt brugernavn og en gyldig adgangskode.',
  'ERR_NO_LOGIN_MOBILE' => 'Du skal logge på dette program med en ikke-mobil browser eller i normal tilstand. Vend tilbage med en fuld browser, eller klik på det normale link nedenfor. Vi beklager ulejligheden.',
  'ERR_LAST_ADMIN_1' => '"Brugernavnet """',
  'ERR_LAST_ADMIN_2' => 'Er den sidste bruger med administratorkonto adgang. Mindst en bruger skal vÃ¦re en administrator."',
  'ERR_PASSWORD_CHANGE_FAILED_1' => 'Ændringen af brugeradgangskode mislykkedes for',
  'ERR_PASSWORD_CHANGE_FAILED_2' => 'mislykkedes. Den nye adgangskode skal angives.',
  'ERR_PASSWORD_INCORRECT_OLD_1' => 'Forkert nuværende adgangskode for bruger',
  'ERR_PASSWORD_INCORRECT_OLD_2' => '. Angiv adgangskodeoplysninger igen.',
  'ERR_PASSWORD_MISMATCH' => 'Adgangskoderne stemmer ikke overens.',
  'ERR_PASSWORD_USERNAME_MISSMATCH' => 'Du skal angive et gyldigt brugernavn og en gyldig e-mail-adresse.',
  'ERR_PASSWORD_LINK_EXPIRED' => 'Linket er udløbet. Generer et nyt link.',
  'ERR_REENTER_PASSWORDS' => 'Værdierne for Ny adgangskode og Bekræft adgangskode stemmer ikke overens.',
  'ERR_REPORT_LOOP' => 'Systemet har registreret en rapporteringsløkke. Brugere kan ikke referere til sig selv, og heller ingen af deres ledere kan referere til dem.',
  'ERR_RULES_NOT_MET' => 'Den adgangskode, du har angivet, opfylder ikke adgangskodekravene. Prøv igen.',
  'ERR_USER_INFO_NOT_FOUND' => 'Brugeroplysningerne blev ikke fundet',
  'ERR_USER_NAME_EXISTS_1' => 'Brugernavnet',
  'ERR_USER_NAME_EXISTS_2' => 'findes allerede. Identiske brugernavne er ikke tilladt. Skift brugernavnet, så det er entydigt.',
  'ERR_USER_IS_LOCKED_OUT' => 'Brugerens adgang til Sugar-programmet er spærret, og brugeren kan ikke logge på ved hjælp af sin eksisterende adgangskode.',
  'LBL_PASSWORD_SENT' => 'Adgangskode er opdateret',
  'LBL_CANNOT_SEND_PASSWORD' => 'Kan ikke sende adgangskode',
  'ERR_EMAIL_NOT_SENT_ADMIN' => 'Systemet kan ikke behandle din anmodning. Kontrollér dette:',
  'ERR_SMTP_URL_SMTP_PORT' => 'SMTP-serverens URL og port',
  'ERR_SMTP_USERNAME_SMTP_PASSWORD' => 'SMTP-brugernavn og SMTP-adgangskode',
  'ERR_RECIPIENT_EMAIL' => 'Modtagers e-mail-adresse',
  'ERR_SERVER_STATUS' => 'Din serverstatus',
  'ERR_SERVER_SMTP_EMPTY' => 'Systemet kan ikke sende en e-mail til brugeren. Kontrollér e-mail-overførselsagenten i E-mail-indstillinger.',
  'LBL_ADDRESS_CITY' => 'By',
  'LBL_ADDRESS_COUNTRY' => 'Land',
  'LBL_ADDRESS_INFORMATION' => 'Adresseoplysninger',
  'LBL_ADDRESS_POSTALCODE' => 'Postnummer',
  'LBL_ADDRESS_STATE' => 'Stat',
  'LBL_ADDRESS_STREET' => 'Adresse, gade',
  'LBL_ADDRESS' => 'Adresse',
  'LBL_ADMIN_USER' => 'Systemadministratorbruger',
  'LBL_ADMIN_DESC' => 'Brugeren har adgang til alle poster på siden Administration uanset teamsikkerhed.',
  'LBL_REGULAR_DESC' => 'Brugeren har adgang til moduler og poster baseret på teamsikkerhed og -roller.',
  'LBL_ADMIN' => 'Systemadministrator',
  'LBL_ADVANCED' => 'Avanceret',
  'LBL_ANY_ADDRESS' => 'Adresse:',
  'LBL_ANY_EMAIL' => 'E-mail',
  'LBL_ANY_PHONE' => 'Telefon',
  'LBL_BUTTON_CREATE' => 'Opret',
  'LBL_BUTTON_EDIT' => 'Rediger',
  'LBL_CALENDAR_OPTIONS' => 'Kalenderindstillinger',
  'LBL_CHANGE_PASSWORD' => 'Skift genereret adgangskode',
  'LBL_CHANGE_SYSTEM_PASSWORD' => 'Angiv en ny adgangskode.',
  'LBL_CHANGE_PASSWORD_TITLE' => 'Skift adgangskode',
  'LBL_CHOOSE_A_KEY' => 'Vælg en nøgle for at forhindre uautoriseret udgivelse af din kalender',
  'LBL_CHOOSE_WHICH' => 'Vælge, hvilke faner der skal vises',
  'LBL_CITY' => 'By',
  'LBL_CLEAR_BUTTON_TITLE' => 'Ryd',
  'LBL_CONFIRM_PASSWORD' => 'Bekræft adgangskode',
  'LBL_CONFIRM_REGULAR_USER' => '"Du har ændret brugertypen fra Systemadministratorbruger til Almindelig bruger. Når du har gemt denne ændring, har brugeren ikke længere rettigheder som systemadministrator.\\n\\nKlik på ""OK"',
  'LBL_COUNTRY' => 'Land',
  'LBL_CURRENCY_TEXT' => 'Vælg standardvalutaen',
  'LBL_CURRENCY' => 'Valuta',
  'LBL_CURRENCY_EXAMPLE' => 'Eksempel på valutavisning',
  'LBL_CURRENCY_SIG_DIGITS' => 'Valutabetydende cifre',
  'LBL_CURRENCY_SIG_DIGITS_DESC' => 'Antal decimaler, der skal vises for valuta',
  'LBL_NUMBER_GROUPING_SEP' => 'Tusindtalsseparator',
  'LBL_NUMBER_GROUPING_SEP_TEXT' => 'Tegn, der skal bruges til at adskille tusinder',
  'LBL_DECIMAL_SEP' => 'Decimaltegn',
  'LBL_DECIMAL_SEP_TEXT' => 'Tegn, der skal bruges til at adskille decimalen',
  'LBL_DATE_FORMAT_TEXT' => 'Angiv visningsformatet til datostempler',
  'LBL_DATE_FORMAT' => 'Datoformat',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Brugere',
  'LBL_DEPARTMENT' => 'Afdeling',
  'LBL_DESCRIPTION' => 'Beskrivelse',
  'LBL_DISPLAY_TABS' => 'Vis faner',
  'LBL_DST_INSTRUCTIONS' => '"+DST" angiver sommertid',
  'LBL_EDIT_TABS' => 'Rediger faner',
  'LBL_EDIT' => 'Rediger',
  'LBL_USER_HASH' => 'Adgangskode',
  'LBL_AUTHENTICATE_ID' => 'Godkendelses-id',
  'LBL_ACCOUNT_NAME' => 'Virksomhedsnavn',
  'LBL_USER_PREFERENCES' => 'Brugerindstillinger',
  'LBL_EXT_AUTHENTICATE' => 'Ekstern godkendelse',
  'LBL_EMAIL_OTHER' => 'E-mail 2',
  'LBL_EMAIL' => 'E-mail-adresse',
  'LBL_EMAIL_CHARSET' => 'Udgående tegnsæt',
  'LBL_EMAIL_EDITOR_OPTION' => 'Opret format',
  'LBL_EMAIL_GMAIL_DEFAULTS' => 'Angiv Gmail som standard',
  'LBL_EMAIL_LINK_TYPE' => 'E-mail-klient',
  'LBL_EMAIL_LINK_TYPE_HELP' => '<b>Sugar-e-mail-klient:</b> Send e-mails ved hjælp af e-mail-klienten i Sugar-programmet.<br><b>Ekstern e-mail-klient:</b> Send e-mail ved hjælp af en e-mail-klient uden for Sugar-programmet, f.eks. Microsoft Outlook.',
  'LBL_EMAIL_NOT_SENT' => 'Systemet kan ikke behandle din anmodning. Kontakt systemadministratoren.',
  'LBL_EMAIL_PROVIDER' => 'E-mail-udbyder',
  'LBL_EMAIL_SHOW_COUNTS' => 'Vil du vise antal e-mails?',
  'LBL_EMAIL_SIGNATURE_ERROR1' => 'Denne signatur kræver et navn.',
  'LBL_EMAIL_SMTP_SSL' => 'Aktivér SMTP via SSL',
  'LBL_EMAIL_TEMPLATE_MISSING' => 'Ingen e-mail-skabelon er valgt til den e-mail med adgangskoden, som sendes til brugeren. Vælg en e-mail-skabelon på siden Adgangskodeadministration.',
  'LBL_EMPLOYEE_STATUS' => 'Medarbejderstatus',
  'LBL_EMPLOYEE_INFORMATION' => 'Medarbejderoplysninger',
  'LBL_ERROR' => 'Fejl',
  'LBL_EXPORT_CHARSET' => 'Importér/eksportér tegnsæt',
  'LBL_EXPORT_CHARSET_DESC' => 'Vælg det tegnsæt, der bruges i din landestandard. Denne egenskab bruges til dataimport, .csv-eksport og generering af vCard.',
  'LBL_EXPORT_DELIMITER' => 'Eksportér afgrænsningstegn',
  'LBL_EXPORT_DELIMITER_DESC' => 'Angiv det eller de tegn, der bruges til at afgrænse eksporterede data.',
  'LBL_FIRST_NAME' => 'Fornavn',
  'LBL_SYSTEM_GENERATED_PASSWORD' => 'Systemgenereret adgangskode',
  'LBL_GENERATE_PASSWORD_BUTTON_LABEL' => 'Nulstil adgangskode',
  'LBL_GENERATE_PASSWORD_BUTTON_TITLE' => 'Nulstil adgangskode [Alt+G]',
  'LBL_GENERATE_PASSWORD' => 'Nulstil adgangskode',
  'LBL_GROUP_DESC' => 'Bruges til at tildele poster til en gruppe "f.eks. til indgående e-mail". Denne type kan ikke logge på via Sugar-webgrænsefladen.',
  'LBL_GROUP_USER_STATUS' => 'Gruppebruger',
  'LBL_GROUP_USER' => 'Gruppebruger',
  'LBL_HIDE_TABS' => 'Skjul faner',
  'LBL_HOME_PHONE' => 'Telefon "privat"',
  'LBL_INBOUND_TITLE' => 'Virksomhedsoplysninger',
  'LBL_IS_ADMIN' => 'Er administrator',
  'LBL_LANGUAGE' => 'Sprog',
  'LBL_LAST_NAME' => 'Efternavn',
  'LBL_LAST_NAME_SLASH_NAME' => 'Efternavn/navn',
  'LBL_LAYOUT_OPTIONS' => 'Layoutindstillinger',
  'LBL_LDAP_AUTHENTICATION' => 'LDAP-godkendelse',
  'LBL_LIST_ACCEPT_STATUS' => 'Acceptér status',
  'LBL_LIST_ADMIN' => 'Administration',
  'LBL_LIST_DEPARTMENT' => 'Afdeling',
  'LBL_LIST_EMAIL' => 'E-mail',
  'LBL_LIST_FORM_TITLE' => 'Brugere',
  'LBL_LIST_GROUP' => 'Gruppe',
  'LBL_LIST_LAST_NAME' => 'Efternavn',
  'LBL_LIST_MEMBERSHIP' => 'Medlemskab',
  'LBL_LIST_NAME' => 'Navn',
  'LBL_LIST_PRIMARY_PHONE' => 'Primær telefon',
  'LBL_LIST_PASSWORD' => 'Adgangskode',
  'LBL_LIST_TITLE' => 'Titel',
  'LBL_LIST_USER_NAME' => 'Brugernavn',
  'LBL_LOCALE_DEFAULT_NAME_FORMAT' => 'Visningsformat til navn',
  'LBL_LOCALE_DESC_FIRST' => '[Fornavn]',
  'LBL_LOCALE_DESC_LAST' => '[Efternavn]',
  'LBL_LOCALE_DESC_SALUTATION' => '[Tiltaleform]',
  'LBL_LOCALE_DESC_TITLE' => '[Titel]',
  'LBL_PICTURE_FILE' => 'Billede',
  'LBL_LOCALE_EXAMPLE_NAME_FORMAT' => 'Eksempel',
  'LBL_LOCALE_NAME_FORMAT_DESC' => 'Angiv, hvordan navne vises.',
  'LBL_LOCALE_NAME_FORMAT_DESC_2' => '"<i> ""s"" tiltaleform <br>""f"" Fornavn<br>""l"" Efternavn</i>"',
  'LBL_SAVED_SEARCH' => 'Gemt søgning og layout',
  'LBL_LOGIN_BUTTON_LABEL' => 'Log på',
  'LBL_LOGIN_BUTTON_TITLE' => 'Log på [Alt+L]',
  'LBL_LOGIN_WELCOME_TO' => 'Velkommen til',
  'LBL_LOGIN_OPTIONS' => 'Indstillinger',
  'LBL_LOGIN_FORGOT_PASSWORD' => 'Glemt adgangskode?',
  'LBL_LOGIN_SUBMIT' => 'Indsend',
  'LBL_LOGIN_ATTEMPTS_OVERRUN' => 'For mange mislykkede log på forsøg.',
  'LBL_LOGIN_LOGIN_TIME_ALLOWED' => 'Du kan prøve at logge på igen om',
  'LBL_LOGIN_LOGIN_TIME_DAYS' => 'dage.',
  'LBL_LOGIN_LOGIN_TIME_HOURS' => 't.',
  'LBL_LOGIN_LOGIN_TIME_SECONDS' => 'sek.',
  'LBL_LOGIN_ADMIN_CALL' => 'Kontakt systemadministratoren.',
  'LBL_MAIL_FROMADDRESS' => 'Svar til-adresse',
  'LBL_MAIL_FROMNAME' => 'Svar til-navn',
  'LBL_MAIL_OPTIONS_TITLE' => 'E-mail-indstillinger',
  'LBL_MAIL_SENDTYPE' => 'E-mail-overførselsagent',
  'LBL_MAIL_SMTPAUTH_REQ' => 'Vil du bruge SMTP-godkendelse?',
  'LBL_MAIL_SMTPPORT' => 'SMTP-port',
  'LBL_MAILMERGE_TEXT' => 'Aktivér brevfletning "brevfletning skal også aktiveres af systemadministratoren under Konfigurer indstillinger"',
  'LBL_MAILMERGE' => 'Brevfletning',
  'LBL_MAX_TAB' => 'Antal faner',
  'LBL_MAX_TAB_DESCRIPTION' => 'Antal faner vises øverst på siden, før en overløbsmenu vises.',
  'LBL_MAX_SUBTAB' => 'Antal underfaner',
  'LBL_MAX_SUBTAB_DESCRIPTION' => 'Antal underfaner, der vises pr. fane, før en oveløbsmenu vises.',
  'LBL_MESSENGER_ID' => 'Chatnavn',
  'LBL_MESSENGER_TYPE' => 'Chattype',
  'LBL_MOBILE_PHONE' => 'Mobil',
  'LBL_MODIFIED_BY' => 'Ændret af',
  'LBL_MODIFIED_BY_ID' => 'Ændret af id',
  'LBL_MODULE_NAME' => 'Brugere',
  'LBL_MODULE_TITLE' => 'Brugere: Startside',
  'LBL_NAME' => 'Hele navnet',
  'LBL_SIGNATURE_NAME' => 'Navn',
  'LBL_NAVIGATION_PARADIGM_DESCRIPTION' => 'Vis moduler grupperet under fanekategorier, eller vis moduler efter bestemte faner for hvert modul.',
  'LBL_USE_GROUP_TABS' => 'Grupperede moduler',
  'LBL_NEW_FORM_TITLE' => 'Ny bruger',
  'LBL_NEW_PASSWORD' => 'Ny adgangskode',
  'LBL_NEW_PASSWORD1' => 'Adgangskode',
  'LBL_NEW_PASSWORD2' => 'Bekræft adgangskode',
  'LBL_NEW_USER_PASSWORD_1' => 'Adgangskoden blev ændret.',
  'LBL_NEW_USER_PASSWORD_2' => 'En e-mail er sendt til brugeren med en systemgenereret adgangskode.',
  'LBL_NEW_USER_PASSWORD_3' => 'Adgangskoden blev oprettet.',
  'LBL_NEW_USER_BUTTON_LABEL' => 'Ny bruger',
  'LBL_NEW_USER_BUTTON_TITLE' => 'Ny bruger [Alt+N]',
  'LBL_NORMAL_LOGIN' => 'Skift til normal visning',
  'LBL_NOTES' => 'Noter',
  'LBL_OFFICE_PHONE' => 'Telefon "arbejde"',
  'LBL_OLD_PASSWORD' => 'Nuværende adgangskode',
  'LBL_OTHER_EMAIL' => 'Anden e-mail-adresse',
  'LBL_OTHER_PHONE' => 'Anden telefon',
  'LBL_OTHER' => 'Andet',
  'LBL_PASSWORD' => 'Adgangskode',
  'LBL_PASSWORD_GENERATED' => 'En ny adgangskode blev genereret',
  'LBL_PASSWORD_EXPIRATION_LOGIN' => 'Adgangskoden er udløbet. Angiv en ny adgangskode.',
  'LBL_PASSWORD_EXPIRATION_GENERATED' => 'Adgangskoden er systemgenereret',
  'LBL_PASSWORD_EXPIRATION_TIME' => 'Adgangskoden er udløbet. Angiv en ny adgangskode.',
  'LBL_PSW_MODIFIED' => 'adgangskoden er sidst ændret',
  'LBL_PHONE' => 'Telefon',
  'LBL_PICK_TZ_WELCOME' => 'Velkommen til Sugar.',
  'LBL_PICK_TZ_DESCRIPTION' => '"Før du fortsætter, skal du bekræfte din tidszone. Vælg den relevante tidszone på listen nedenfor, og klik på Gem for at fortsætte. Tidszonen kan ændres når som helst i ""Min konto""."',
  'LBL_PORTAL_ONLY_DESC' => 'Bruges til portal-API&#39;en. Denne type kan ikke bruges til at logge på via Sugar-webgrænsefladen.',
  'LBL_PORTAL_ONLY_USER' => 'Portal-API-bruger',
  'LBL_POSTAL_CODE' => 'Postnummer',
  'LBL_PRIMARY_ADDRESS' => 'Primær adresse',
  'LBL_PROMPT_TIMEZONE_TEXT' => 'Markér dette felt for at bede brugeren om at bekræfte tidszonen når denne logger på.',
  'LBL_PROMPT_TIMEZONE' => 'Tidszone-prompt',
  'LBL_PROVIDE_USERNAME_AND_EMAIL' => 'Angiv både et brugernavn og en e-mail-adresse.',
  'LBL_PUBLISH_KEY' => 'Udgiv nøgle',
  'LBL_RECAPTCHA_NEW_CAPTCHA' => 'Hent en anden CAPTCHA',
  'LBL_RECAPTCHA_SOUND' => 'Skift til lyd',
  'LBL_RECAPTCHA_IMAGE' => 'Skift til billede',
  'LBL_RECAPTCHA_INSTRUCTION' => 'Angiv de to ord nedenfor',
  'LBL_RECAPTCHA_INSTRUCTION_OPPOSITE' => 'Angiv de to ord til højre',
  'LBL_RECAPTCHA_FILL_FIELD' => 'Angiv den tekst, der skal vises i billedet.',
  'LBL_RECAPTCHA_INVALID_PRIVATE_KEY' => 'Ugyldig privat nøgle fra Recaptcha',
  'LBL_RECAPTCHA_INVALID_REQUEST_COOKIE' => 'Challenge-parameteren for scriptet til bekræftelse af Recaptcha er ugyldig.',
  'LBL_RECAPTCHA_UNKNOWN' => 'Ukendt Recaptcha-fejl',
  'LBL_RECEIVE_NOTIFICATIONS_TEXT' => 'Modtag en e-mail-meddelelse, når en post er tildelt dig.',
  'LBL_RECEIVE_NOTIFICATIONS' => 'Giv besked om tildeling',
  'LBL_REGISTER' => 'Ny bruger? Venligst registrer',
  'LBL_REGULAR_USER' => 'Almindelig bruger',
  'LBL_REMINDER_TEXT' => 'Angiv en standardpåmindelse for opkald og møder.',
  'LBL_REMINDER' => 'Påmindelser',
  'LBL_REMOVED_TABS' => 'Administratoren fjerner faner',
  'LBL_REPORTS_TO_NAME' => 'Rapporterer til',
  'LBL_REPORTS_TO' => 'Rapporterer til',
  'LBL_REPORTS_TO_ID' => 'Rapporterer til id:',
  'LBL_REQUEST_SUBMIT' => 'Din anmodning er indsendt.',
  'LBL_RESET_TO_DEFAULT' => 'Nulstil til standard',
  'LBL_RESET_PREFERENCES' => 'Nulstil Brugerindstillinger',
  'LBL_RESET_PREFERENCES_WARNING' => 'Er du sikker på, at du vil nulstille alle dine brugerindstillinger? Advarsel! Dette vil også logge dig af programmet.',
  'LBL_RESET_PREFERENCES_WARNING_USER' => 'Er du sikker på, at du vil nulstille alle indstillinger for denne bruger?',
  'LBL_RESET_HOMEPAGE' => 'Nulstil Startside',
  'LBL_RESET_DASHBOARD' => 'Dashboard',
  'LBL_RESET_HOMEPAGE_WARNING' => 'Er du sikker på at du vil nulstille din startside?',
  'LBL_RESET_HOMEPAGE_WARNING_USER' => 'Er du sikker på, at du vil nulstille hjemmesiden for denne bruger?',
  'LBL_SALUTATION' => 'Tiltaleform',
  'LBL_ROLES_SUBPANEL_TITLE' => 'Roller',
  'LBL_SEARCH_FORM_TITLE' => 'Søg efter bruger',
  'LBL_SEARCH_URL' => 'Søg efter placering',
  'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Vælg kontrollerede brugere',
  'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Vælg kontrollerede brugere',
  'LBL_SETTINGS_URL_DESC' => 'Brug denne URL, når du angiver log på indstillinger for Sugar Plug-in til Microsoft Â® Outlook Â® og Sugar Plug-in til MicrosoftÂ® WordÂ®.',
  'LBL_SIGNATURE' => 'Signatur',
  'LBL_SIGNATURE_HTML' => 'HTML-signatur',
  'LBL_SIGNATURE_DEFAULT' => 'Brug signatur?',
  'LBL_SIGNATURE_PREPEND' => 'Signatur oven over svar?',
  'LBL_SIGNATURES' => 'Signaturer',
  'LBL_STATE' => 'Tilstand',
  'LBL_SUBPANEL_LINKS' => 'Underpanellinks',
  'LBL_SUBPANEL_LINKS_DESCRIPTION' => 'Vis en række med genvejslinks i underpanelet i detaljevisning.',
  'LBL_SUBPANEL_TABS' => 'Faner i underpanel',
  'LBL_SUBPANEL_TABS_DESCRIPTION' => 'Gruppér underpaneler i faner i detaljevisning, og vis én fane ad gangen.',
  'LBL_SUGAR_LOGIN' => 'Er Sugar-bruger',
  'LBL_SUPPORTED_THEME_ONLY' => 'Påvirker kun temaer, der understøtter denne indstilling.',
  'LBL_SWAP_LAST_VIEWED_DESCRIPTION' => 'Viser panelet Senest vist i siden, hvis det er markeret. Ellers vises det øverst.',
  'LBL_SWAP_SHORTCUT_DESCRIPTION' => 'Viser panelet Genveje øverst, hvis det er markeret. Ellers vises det i siden.',
  'LBL_SWAP_LAST_VIEWED_POSITION' => 'Senest vist i siden',
  'LBL_SWAP_SHORTCUT_POSITION' => 'Genveje øverst',
  'LBL_TAB_TITLE_EMAIL' => 'E-mail-indstillinger',
  'LBL_TAB_TITLE_USER' => 'Brugerindstillinger',
  'LBL_THEME' => 'Tema',
  'LBL_THEME_COLOR' => 'Farve',
  'LBL_THEME_FONT' => 'Skrifttype',
  'LBL_TIME_FORMAT_TEXT' => 'Angiv visningsformatet for tidsstempler',
  'LBL_TIME_FORMAT' => 'Klokkeslætsformat:',
  'LBL_TIMEZONE_DST_TEXT' => 'Overhold sommertid',
  'LBL_TIMEZONE_DST' => 'Sommertid',
  'LBL_TIMEZONE_TEXT' => 'Indstil den aktuelle tidszone',
  'LBL_TIMEZONE' => 'Tidszone',
  'LBL_TITLE' => 'Titel',
  'LBL_USE_REAL_NAMES' => 'Vis fulde navn',
  'LBL_USE_REAL_NAMES_DESC' => 'Vis en brugers fulde navn i stedet for brugernavnet.',
  'LBL_USER_INFORMATION' => 'Brugeroplysninger',
  'LBL_USER_LOCALE' => 'Landestandardindstillinger',
  'LBL_USER_NAME' => 'Brugernavn',
  'LBL_USER_SETTINGS' => 'Brugerindstillinger',
  'LBL_USER_TYPE' => 'Brugertype',
  'LBL_USER_ACCESS' => 'Adgang',
  'LBL_USER' => 'Brugere',
  'LBL_WORK_PHONE' => 'Telefon "arbejde"',
  'LBL_YOUR_PUBLISH_URL' => 'Udgiv på min placering',
  'LBL_YOUR_QUERY_URL' => 'Din forespørgsels-URL',
  'LNK_NEW_USER' => 'Opret en ny bruger',
  'LNK_NEW_PORTAL_USER' => 'Opret portal-API-bruger',
  'LNK_NEW_GROUP_USER' => 'Opret gruppebruger',
  'LNK_USER_LIST' => 'Brugere',
  'LNK_REASSIGN_RECORDS' => 'Omfordel poster',
  'LBL_PROSPECT_LIST' => 'Liste over potentielle kunder',
  'LBL_PROCESSING' => 'Behandler',
  'LBL_UPDATE_FINISH' => 'Opdatering fuldført',
  'LBL_AFFECTED' => 'berørte',
  'LBL_USER_NAME_FOR_ROLE' => 'Brugere/team/roller',
  'LBL_SESSION_EXPIRED' => 'Du er blevet logget af, da din session er udløbet.',
  'LBL_TOO_MANY_CONCURRENT' => 'Denne session er afsluttet, da en anden session er blevet startet under samme brugernavn.',
  'LBL_REASS_SCRIPT_TITLE' => 'Omfordeling af poster',
  'LBL_REASS_DESC_PART1' => 'Finder alle de poster i de valgte moduler, som er tildelt en bruger, og omfordeler dem til en anden bruger.',
  'LBL_REASS_DESC_PART2' => 'Vælg hvilke moduler der skal køres arbejdsprocesser, sendes opgavepåmindelser og revideres sporingen imod under omplacering. Klik "næste" for at fortsætte og tildele poster. Klik "genstart" for at starte forfra.',
  'LBL_REASS_STEP2_TITLE' => 'Omfordeling af team',
  'LBL_REASS_STEP2_DESC' => 'Teamene nedenfor var tilgængelige i Fra brugerteam, men ikke i Til brugerteam. Alle poster i Fra brugerteam er ikke synlige i Til brugerteam, medmindre teamværdierne er tilknyttet.',
  'LBL_REASS_USER_FROM_TEAM' => 'Fra brugerteam:',
  'LBL_REASS_USER_TO_TEAM' => 'Til brugerteam:',
  'LBL_REASS_USER_FROM' => 'Fra bruger.',
  'LBL_REASS_USER_TO' => 'Til bruger.',
  'LBL_REASS_TEAM_TO' => 'Angiv team til:',
  'LBL_REASS_TEAMS_GOOD_MSG' => 'Til bruger har adgang til alle Fra brugerteam. Ingen tilknytning er nødvendig. Omdirigerer til næste side om 5 sekunder.',
  'LBL_REASS_TEAM_NO_CHANGE' => '- Ingen ændring -',
  'LBL_REASS_NOT_PROCESSED' => 'kunne ikke behandles:',
  'LBL_REASS_MOD_REASSIGN' => 'Moduler, der skal inkluderes i omfordeling:',
  'LBL_REASS_FILTERS' => 'Filtre',
  'LBL_REASS_NOTES_TITLE' => 'Noter:',
  'LBL_REASS_NOTES_THREE' => 'Selvom du ikke medtager Revision, opdateres Ændret den og Ændret af stadig tilsvarende.',
  'LBL_REASS_NOTES_ONE' => 'Tildeling af poster til dig selv udløser ikke tildelingsmeddelelser.',
  'LBL_REASS_NOTES_TWO' => 'Det er betydeligt langsommere, hvis du medtager sporing af Arbejdsgang, Meddelelser og Revision i omfordelingen.',
  'LBL_REASS_VERBOSE_OUTPUT' => 'Detaljeret output "gælder kun for omfordelingsopgaver, der omfatter arbejdsgange"',
  'LBL_REASS_VERBOSE_HELP' => 'Vælg denne mulighed for at få vist detaljerede oplysninger om de omplacerede opgaver, der involverer arbejdsgange.',
  'LBL_REASS_ASSESSING' => 'Vurderer',
  'LBL_REASS_RECORDS_FROM' => 'poster fra',
  'LBL_REASS_WILL_BE_UPDATED' => 'opdateres.',
  'LBL_REASS_WORK_NOTIF_AUDIT' => 'Medtag Arbejdsgang/Meddelelser/Revision "betydeligt langsommere"',
  'LBL_REASS_SUCCESS_ASSIGN' => 'Blev tildelt',
  'LBL_REASS_FROM' => 'fra',
  'LBL_REASS_TO' => 'til',
  'LBL_REASS_TEAM_SET_TO' => 'og team er angivet til',
  'LBL_REASS_FAILED_SAVE' => 'Der blev ikke gemt for post',
  'LBL_REASS_THE_FOLLOWING' => 'Følgende',
  'LBL_REASS_HAVE_BEEN_UPDATED' => 'er blevet opdateret:',
  'LBL_REASS_CANNOT_PROCESS' => 'kunne ikke behandles:',
  'LBL_REASS_NONE' => 'Ingen',
  'LBL_REASS_UPDATE_COMPLETE' => 'Opdatering fuldført',
  'LBL_REASS_SUCCESSFUL' => 'Handlingen lykkedes',
  'LBL_REASS_FAILED' => 'Mislykkedes',
  'LBL_REASS_BUTTON_SUBMIT' => 'Indsend',
  'LBL_REASS_BUTTON_CLEAR' => 'Ryd',
  'LBL_REASS_BUTTON_CONTINUE' => 'Fortsæt',
  'LBL_REASS_BUTTON_REASSIGN' => 'Omfordel',
  'LBL_REASS_BUTTON_GO_BACK' => 'Tilbage',
  'LBL_REASS_BUTTON_RESTART' => 'Genstart',
  'LBL_REASS_BUTTON_RETURN' => 'Retur',
  'LBL_REASS_CONFIRM_REASSIGN' => 'Vil du omfordele alle denne brugers poster?',
  'ERR_REASS_SELECT_MODULE' => 'Gå tilbage, og vælg mindst et modul.',
  'ERR_REASS_DIFF_USERS' => 'Vælg en Tildel til bruger, der er forskellig fra Tildel fra bruger.',
  'LBL_APPLY_OPTIMUMS' => 'Anvend optimale',
  'LBL_ASSIGN_TO_USER' => 'Tildel til bruger',
  'LBL_BASIC' => 'Indgående konfiguration',
  'LBL_CERT_DESC' => 'Gennemtving validering af e-mail-serverens sikkerhedscertifikat - må ikke anvendes ved egensignering.',
  'LBL_CERT' => 'Valider certifikat',
  'LBL_FIND_OPTIMUM_MSG' => '<br>Finder optimale forbindelsesvariabler.',
  'LBL_FIND_OPTIMUM_TITLE' => 'Find den optimale konfiguration',
  'LBL_FORCE' => 'Gennemtving negativ',
  'LBL_FORCE_DESC' => 'Nogle IMAP/POP3-servere kræver særlige parametre. Kontrollér for at gennemtvinge en negativ parameter ved tilslutning "dvs. /notls"',
  'LBL_FOUND_OPTIMUM_MSG' => '<br>Optimale indstillinger blev fundet. Tryk på knappen nedenfor for at anvende dem til din postkasse.',
  'LBL_EMAIL_INBOUND_TITLE' => 'Indstillinger for indgående e-mail',
  'LBL_EMAIL_OUTBOUND_TITLE' => 'Indstillinger for udgående e-mail',
  'LBL_LOGIN' => 'Brugernavn',
  'LBL_MAILBOX_DEFAULT' => 'INDBAKKE',
  'LBL_MAILBOX_SSL_DESC' => '"Brug SSL til at oprette forbindelse. Hvis dette ikke virker, skal du kontrollere, at din PHP-installation har medtaget ""- with-imap-ssl"" i konfigurationen."',
  'LBL_MAILBOX' => 'Overvåget mappe',
  'LBL_MAILBOX_TYPE' => 'Mulige handlinger',
  'LBL_MARK_READ_NO' => 'E-mail markeret som slettet efter import',
  'LBL_MARK_READ_YES' => 'E-mail tilbage på serveren efter import',
  'LBL_MARK_READ_DESC' => 'Importér og markér meddelelser som læst på e-mail-serveren. Undlad at slette.',
  'LBL_MARK_READ' => 'Lad meddelelser forblive på serveren',
  'LBL_ONLY_SINCE_NO' => 'Nej. Kontrollér i forhold til alle e-mails på e-mail-serveren.',
  'LBL_ONLY_SINCE_YES' => 'Ja.',
  'LBL_ONLY_SINCE_DESC' => 'PHP kan ikke skelne nye fra ulæste meddelelser, når du bruger POP3. Kontrollér dette flag for at scanne efter meddelelser, siden e-mail-kontoen sidst blev adspurgt. Dette vil i høj grad forbedre ydeevnen, hvis din e-mail-server ikke kan understøtte IMAP.',
  'LBL_ONLY_SINCE' => 'Importér kun siden sidste tjek',
  'LBL_PORT' => 'E-mail-serverport',
  'LBL_SERVER_OPTIONS' => 'Avanceret konfiguration',
  'LBL_SERVER_TYPE' => 'E-mail-server-protokol',
  'LBL_SERVER_URL' => 'E-mail-server-adresse',
  'LBL_SSL' => 'Brug SSL',
  'LBL_SSL_DESC' => 'Brug Secure Socket Layer ved tilslutning til din e-mail-server.',
  'LBL_TEST_SETTINGS' => 'Testindstillinger',
  'LBL_TEST_SUCCESSFUL' => 'Forbindelsen blev oprettet.',
  'LBL_TLS_DESC' => 'Brug Transport Layer Security, når du opretter forbindelse til e-mail-serveren - brug kun bruge dette, hvis din e-mail-server understøtter denne protokol.',
  'LBL_TLS' => 'Brug TLS',
  'LBL_TOGGLE_ADV' => 'Vis avanceret',
  'LBL_OWN_OPPS' => 'Ingen salgsmuligheder',
  'LBL_EXTERNAL_AUTH_ONLY' => 'Godkend kun denne bruger via',
  'LBL_ONLY' => 'Kun',
  'LBL_OWN_OPPS_DESC' => 'Vælges, hvis brugeren ikke tildeles salgsmuligheder. Brug denne indstilling til brugere, som er ledere, der ikke er involveret i salgsaktiviteter. Indstillingen bruges til prognosemodulet.',
  'LBL_LDAP_ERROR' => 'LDAP-fejl: Kontakt en administrator',
  'LBL_LDAP_EXTENSION_ERROR' => 'LDAP-fejl: Udvidelser er ikke indlæst',
  'LBL_USER_HOLIDAY_SUBPANEL_TITLE' => 'Brugerhelligdage',
  'LBL_RESOURCE_NAME' => 'Navn',
  'LBL_PDF_SETTINGS' => 'PDF-indstillinger',
  'LBL_PDF_PAGE_FORMAT' => 'Sideformat',
  'LBL_PDF_PAGE_FORMAT_TEXT' => 'Det format, der bruges til sider',
  'LBL_PDF_PAGE_ORIENTATION' => 'Sideretning',
  'LBL_PDF_PAGE_ORIENTATION_TEXT' => 'PDF side orientering',
  'LBL_PDF_PAGE_ORIENTATION_P' => 'Stående',
  'LBL_PDF_PAGE_ORIENTATION_L' => 'Liggende',
  'LBL_PDF_MARGIN_HEADER' => 'Sidehovedmargen',
  'LBL_PDF_MARGIN_HEADER_TEXT' => 'PDF sidehoved margin',
  'LBL_PDF_MARGIN_FOOTER' => 'Sidefodsmargen',
  'LBL_PDF_MARGIN_FOOTER_TEXT' => 'PDF sidemargin Sidebund',
  'LBL_PDF_MARGIN_TOP' => 'Topmargen',
  'LBL_PDF_MARGIN_TOP_TEXT' => 'PDF topmargin top tekst',
  'LBL_PDF_MARGIN_BOTTOM' => 'Bundmargen',
  'LBL_PDF_MARGIN_BOTTOM_TEXT' => 'PDF bundmargin',
  'LBL_PDF_MARGIN_LEFT' => 'Venstre margen',
  'LBL_PDF_MARGIN_LEFT_TEXT' => 'PDF venstremargin',
  'LBL_PDF_MARGIN_RIGHT' => 'Højre margen',
  'LBL_PDF_MARGIN_RIGHT_TEXT' => 'PDF højremargin',
  'LBL_PDF_FONT_NAME_MAIN' => 'Skrifttype til sidehoved og brødtekst',
  'LBL_PDF_FONT_NAME_MAIN_TEXT' => 'Den valgte skrifttype anvendes til teksten i sidehovedet og i brødteksten i PDF-dokumentet',
  'LBL_PDF_FONT_SIZE_MAIN' => 'Hovedskriftstørrelse',
  'LBL_PDF_FONT_SIZE_MAIN_TEXT' => 'PDF Fontstørrelse bodytekst',
  'LBL_PDF_FONT_NAME_DATA' => 'Skrifttype til sidefod',
  'LBL_PDF_FONT_NAME_DATA_TEXT' => 'Den valgte skrifttype anvendes til teksten i sidefoden i PDF-dokumentet',
  'LBL_PDF_FONT_SIZE_DATA' => 'Dataskriftstørrelse',
  'LBL_PDF_FONT_SIZE_DATA_TEXT' => 'PDF Fontstørrelse datatekst',
  'LBL_LAST_ADMIN_NOTICE' => 'Du har selv valgt. Du kan ikke ændre din egen brugertype eller status.',
  'LBL_MAIL_SMTPUSER' => 'Brugernavn',
  'LBL_MAIL_SMTPPASS' => 'Adgangskode',
  'LBL_MAIL_SMTPSERVER' => 'SMTP-e-mail-server',
  'LBL_SMTP_SERVER_HELP' => 'Denne SMTP-e-mail-server kan bruges til udgående e-mail. Angiv et brugernavn og en adgangskode til din e-mail-konto, hvis du vil bruge e-mail-serveren.',
  'LBL_MISSING_DEFAULT_OUTBOUND_SMTP_SETTINGS' => 'Administratoren har endnu ikke konfigureret den udgående standardkonto. Test-e-mailen kan ikke sendes.',
  'LBL_MAIL_SMTPTYPE' => 'SMTP-server-type:',
  'LBL_MAIL_SMTP_SETTINGS' => 'SMTP-server specifikation',
  'LBL_CHOOSE_EMAIL_PROVIDER' => 'Vælg din e-mail-udbyder:',
  'LBL_YAHOOMAIL_SMTPPASS' => 'Yahoo! Mail adgangskode:',
  'LBL_YAHOOMAIL_SMTPUSER' => 'Yahoo! Mail id:',
  'LBL_GMAIL_SMTPPASS' => 'Gmail adgangskode:',
  'LBL_GMAIL_SMTPUSER' => 'Gmail e-mail-adresse:',
  'LBL_EXCHANGE_SMTPPASS' => 'Exchange adgangskode:',
  'LBL_EXCHANGE_SMTPUSER' => 'Exchange brugernavn',
  'LBL_EXCHANGE_SMTPPORT' => 'Exchange serverport:',
  'LBL_EXCHANGE_SMTPSERVER' => 'Exchange server:',
  'LBL_CANCEL' => 'Annullér',
  'LBL_DELETE_USER' => 'Slet bruger',
  'LBL_WIZARD_TITLE' => 'Brugerguide',
  'LBL_WIZARD_WELCOME_TAB' => 'Velkommen',
  'LBL_WIZARD_WELCOME_TITLE' => 'Velkommen til Sugar!',
  'LBL_WIZARD_WELCOME' => 'Klik på "næste" for at konfigurere et par grundlæggende indstillinger for brugen af Sugar.',
  'LBL_WIZARD_WELCOME_NOSMTP' => 'Klik på "næste" for at konfigurere et par grundlæggende indstillinger for brugen af Sugar.',
  'LBL_WIZARD_NEXT_BUTTON' => 'Næste >',
  'LBL_WIZARD_BACK_BUTTON' => '< Tilbage',
  'LBL_WIZARD_SKIP_BUTTON' => 'Spring over',
  'LBL_WIZARD_FINISH_BUTTON' => 'Udfør',
  'LBL_WIZARD_FINISH_TAB' => 'Udfør',
  'LBL_WIZARD_FINISH_TITLE' => 'Du er klar til at anvende Sugar!',
  'LBL_WIZARD_FINISH' => 'Klik <b>Afslut</b> nedenfor for a gemme dine opsætninger og begyde at bruge Sugar. For mere information om hvordan du brugere Sugar:<br /><br /> <br /><table cellpadding=0 cellspacing=0> <br /><tr><td><img src=include/images/university.png style="margin-right: 5px;"></td><td><a href="http://www.sugarcrm.com/university" target="_blank"><b>Sugar Universitet</b></a><br>Slut-bruger og System administrator træning og resourser</td></tr> <br /><tr><td colspan=2><hr style="margin: 5px 0px;"></td></tr> <br /><tr><td><img src=include/images/docs.png style="margin-right: 5px;"></td><td><a href="http://docs.sugarcrm.com/" target="_blank"><b>Dokumentation</b></a><br>Produkt Guides og Udgivelses Noter</td></tr> <br /><tr><td colspan=2><hr style="margin: 5px 0px;"></td></tr> <br /><tr><td><img src=include/images/kb.png style="margin-right: 5px;"></td><td><a href="http://kb.sugarcrm.com/" target="_blank"><b>Knowledge Base</b></a><br>Tips fra SugarCRM Support for at udføre gennerelle handlinger og processer i Sugar</td></tr> <br /><tr><td colspan=2><hr style="margin: 5px 0px;"></td></tr> <br /><tr><td><img src=include/images/forums.png style="margin-right: 5px;"></td><td><a href="http://www.sugarcrm.com/forums" target="_blank"><b>Forum</b></a><br>Fora dedikeret til Sugar brugergruppe for at diskutere emner med fælles interesse med hinanden og med SugarCRM Udviklere</td></tr> <br /></table>',
  'LBL_WIZARD_PERSONALINFO' => 'Din information',
  'LBL_WIZARD_LOCALE' => 'Din lokale',
  'LBL_WIZARD_SMTP' => 'Din e-mail-konto',
  'LBL_WIZARD_PERSONALINFO_DESC' => 'Give oplysninger om dig selv. De oplysninger, du giver om dig, selv vil være synlige for andre Sugar brugere.<br />Felter markeret med * er påkrævet.',
  'LBL_WIZARD_LOCALE_DESC' => 'Angive din tidszone og hvordan du gerne vil have at datoer, valutaer og navne vises i Sugar.',
  'LBL_WIZARD_SMTP_DESC' => 'Angiv dit e-mail-konto brugernavn og adgangskode til standard udgående e-mail-serveren.',
  'LBL_EAPM_SUBPANEL_TITLE' => 'Eksterne konti',
);

