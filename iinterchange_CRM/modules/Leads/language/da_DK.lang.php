<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

	

$mod_strings = array (
  'db_last_name' => 'LBL_LIST_LAST_NAME',
  'db_first_name' => 'LBL_LIST_FIRST_NAME',
  'db_title' => 'LBL_LIST_TITLE',
  'db_email1' => 'LBL_LIST_EMAIL_ADDRESS',
  'db_account_name' => 'LBL_LIST_ACCOUNT_NAME',
  'db_email2' => 'LBL_LIST_EMAIL_ADDRESS',
  'LBL_CONVERTLEAD_BUTTON_KEY' => 'V',
  'LBL_FAX_PHONE' => 'Fax:',
  'LBL_VCARD' => 'vCard',
  'LBL_LIST_STATUS' => 'Status',
  'LBL_STATUS' => 'Status:',
  'LBL_TARGET_BUTTON_KEY' => 'T',
  'ERR_DELETE_RECORD' => 'Der skal angives et postnummer for at slette kundeemnet.',
  'LBL_ACCOUNT_DESCRIPTION' => 'Virksomhedsbeskrivelse',
  'LBL_ACCOUNT_ID' => 'Virksomheds-id',
  'LBL_ACCOUNT_NAME' => 'Virksomhedsnavn:',
  'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktiviteter',
  'LBL_ADD_BUSINESSCARD' => 'Tilføj visitkort',
  'LBL_ADDRESS_INFORMATION' => 'Adresseoplysninger',
  'LBL_ALT_ADDRESS_CITY' => 'Alternativ adresse, by',
  'LBL_ALT_ADDRESS_COUNTRY' => 'Alternativ adresse, land',
  'LBL_ALT_ADDRESS_POSTALCODE' => 'Alternativ adresse, postnummer',
  'LBL_ALT_ADDRESS_STATE' => 'Alternativ adresse, stat',
  'LBL_ALT_ADDRESS_STREET_2' => 'Alternativ adresse, gade 2:',
  'LBL_ALT_ADDRESS_STREET_3' => 'Alternativ adresse, gade 3:',
  'LBL_ALT_ADDRESS_STREET' => 'Alternativ adresse, gade',
  'LBL_ALTERNATE_ADDRESS' => 'Anden adresse:',
  'LBL_ALT_ADDRESS' => 'Anden adresse:',
  'LBL_ANY_ADDRESS' => 'Adresse:',
  'LBL_ANY_EMAIL' => 'E-mail:',
  'LBL_ANY_PHONE' => 'Telefon:',
  'LBL_ASSIGNED_TO_NAME' => 'Tildelt til',
  'LBL_ASSIGNED_TO_ID' => 'Tildelt bruger:',
  'LBL_BACKTOLEADS' => 'Tilbage til kundeemner',
  'LBL_BUSINESSCARD' => 'Konverter Kundeemne',
  'LBL_CITY' => 'By:',
  'LBL_CONTACT_ID' => 'Kontakt-id:',
  'LBL_CONTACT_INFORMATION' => 'Oplysninger om kundeemne',
  'LBL_CONTACT_NAME' => 'Kundeemnets navn:',
  'LBL_CONTACT_OPP_FORM_TITLE' => 'Kundeemne-salgsmulighed:',
  'LBL_CONTACT_ROLE' => 'Rolle:',
  'LBL_CONTACT' => 'Kundeemne:',
  'LBL_CONVERTED_ACCOUNT' => 'Konverteret virksomhed:',
  'LBL_CONVERTED_CONTACT' => 'Konverteret kontakt:',
  'LBL_CONVERTED_OPP' => 'Konverteret salgsmulighed:',
  'LBL_CONVERTED' => 'Konverteret',
  'LBL_CONVERTLEAD_TITLE' => 'Konverter kundeemne [Alt+V]',
  'LBL_CONVERTLEAD' => 'Konverter kundeemne',
  'LBL_CONVERTLEAD_WARNING' => 'Advarsel: Status på kundeemnet som du er ved at konvertere er "konverteret". Kontakt og/eller virksomheden er muligvis allerede oprettet fra kundeemnet. Hvis du ønsker at fortsætte med konverteringen, tryk Gem. For at gå tilbage til kundeemnet uden at konvertere, tryk Annullere.',
  'LBL_CONVERTLEAD_WARNING_INTO_RECORD' => 'Mulig kontakt:',
  'LBL_COUNTRY' => 'Land:',
  'LBL_CREATED_NEW' => 'Opret ny',
  'LBL_CREATED_ACCOUNT' => 'Oprettet en ny virksomhed',
  'LBL_CREATED_CALL' => 'Oprettet et nyt opkald',
  'LBL_CREATED_CONTACT' => 'Oprettet en ny kontakt',
  'LBL_CREATED_MEETING' => 'Oprettet et nyt møde',
  'LBL_CREATED_OPPORTUNITY' => 'Oprettet en ny salgsmulighed',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Kundeemner',
  'LBL_DEPARTMENT' => 'Afdeling:',
  'LBL_DESCRIPTION_INFORMATION' => 'Beskrivelsesoplysninger',
  'LBL_DESCRIPTION' => 'Beskrivelse:',
  'LBL_DO_NOT_CALL' => 'Ring ikke:',
  'LBL_DUPLICATE' => 'Lignende kundeemner',
  'LBL_EMAIL_ADDRESS' => 'E-mail-adresse:',
  'LBL_EMAIL_OPT_OUT' => 'Fravælg e-mail:',
  'LBL_EXISTING_ACCOUNT' => 'Brugt en eksisterende virksomhed',
  'LBL_EXISTING_CONTACT' => 'Brugt en eksisterende kontakt',
  'LBL_EXISTING_OPPORTUNITY' => 'Brugt en eksisterende salgsmulighed',
  'LBL_FIRST_NAME' => 'Fornavn:',
  'LBL_FULL_NAME' => 'Fulde navn:',
  'LBL_HISTORY_SUBPANEL_TITLE' => 'Historik',
  'LBL_HOME_PHONE' => 'Telefon "privat":',
  'LBL_IMPORT_VCARD' => 'Importér vCard',
  'LBL_IMPORT_VCARDTEXT' => 'Opret automatisk et nyt kundeemne ved at importere et vCard fra filsystemet.',
  'LBL_INVALID_EMAIL' => 'Ugyldig e-mail:',
  'LBL_INVITEE' => 'Direkte rapporter',
  'LBL_LAST_NAME' => 'Efternavn:',
  'LBL_LEAD_SOURCE_DESCRIPTION' => 'Beskrivelse af kilde til kundeemne:',
  'LBL_LEAD_SOURCE' => 'Kilde til kundeemne:',
  'LBL_LIST_ACCEPT_STATUS' => 'Acceptér status',
  'LBL_LIST_ACCOUNT_NAME' => 'Virksomhedsnavn',
  'LBL_LIST_CONTACT_NAME' => 'Kundeemnes navn',
  'LBL_LIST_CONTACT_ROLE' => 'Rolle',
  'LBL_LIST_DATE_ENTERED' => 'Oprettet den',
  'LBL_LIST_EMAIL_ADDRESS' => 'E-mail',
  'LBL_LIST_FIRST_NAME' => 'Fornavn',
  'LBL_VIEW_FORM_TITLE' => 'Kundeemnevisning',
  'LBL_LIST_FORM_TITLE' => 'Kundeemneliste',
  'LBL_LIST_LAST_NAME' => 'Efternavn',
  'LBL_LIST_LEAD_SOURCE_DESCRIPTION' => 'Beskrivelse af kilde til kundeemne',
  'LBL_LIST_LEAD_SOURCE' => 'Kilde til kundeemne',
  'LBL_LIST_MY_LEADS' => 'Mine kundeemner',
  'LBL_LIST_NAME' => 'Navn',
  'LBL_LIST_PHONE' => 'Telefon "arbejde"',
  'LBL_LIST_REFERED_BY' => 'Henvist af',
  'LBL_LIST_TITLE' => 'Titel',
  'LBL_MOBILE_PHONE' => 'Mobiltelefon:',
  'LBL_MODULE_NAME' => 'Kundeemner',
  'LBL_MODULE_TITLE' => 'Kundeemner: Startside',
  'LBL_NAME' => 'Navn:',
  'LBL_NEW_FORM_TITLE' => 'Nyt kundeemne',
  'LBL_NEW_PORTAL_PASSWORD' => 'Ny portaladgangskode:',
  'LBL_OFFICE_PHONE' => 'Telefon "arbejde":',
  'LBL_OPP_NAME' => 'Salgsmuligheds navn:',
  'LBL_OPPORTUNITY_AMOUNT' => 'Salgsmulighedsbeløb:',
  'LBL_OPPORTUNITY_ID' => 'Salgsmuligheds-id',
  'LBL_OPPORTUNITY_NAME' => 'Salgsmuligheds navn:',
  'LBL_OTHER_EMAIL_ADDRESS' => 'Anden e-mail:',
  'LBL_OTHER_PHONE' => 'Anden telefon:',
  'LBL_PHONE' => 'Telefon:',
  'LBL_PORTAL_ACTIVE' => 'Portal aktiv:',
  'LBL_PORTAL_APP' => 'Portalprogram:',
  'LBL_PORTAL_INFORMATION' => 'Portaloplysninger',
  'LBL_PORTAL_NAME' => 'Portalnavn:',
  'LBL_PORTAL_PASSWORD_ISSET' => 'Portaladgangskode er angivet:',
  'LBL_POSTAL_CODE' => 'Postnummer:',
  'LBL_STREET' => 'Gade',
  'LBL_PRIMARY_ADDRESS_CITY' => 'Primær adresse, by',
  'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Primær adresse, land',
  'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Primær adresse, postnummer',
  'LBL_PRIMARY_ADDRESS_STATE' => 'Primær adresse, stat',
  'LBL_PRIMARY_ADDRESS_STREET_2' => 'Primær adresse, gade 2',
  'LBL_PRIMARY_ADDRESS_STREET_3' => 'Primær adresse, gade 3',
  'LBL_PRIMARY_ADDRESS_STREET' => 'Primær adresse, gade',
  'LBL_PRIMARY_ADDRESS' => 'Primær adresse:',
  'LBL_REFERED_BY' => 'Henvist af:',
  'LBL_REPORTS_TO_ID' => 'Rapporterer til id:',
  'LBL_REPORTS_TO' => 'Rapporterer til:',
  'LBL_SALUTATION' => 'Tiltaleform',
  'LBL_MODIFIED' => 'Ændret af',
  'LBL_MODIFIED_ID' => 'Ændret af id',
  'LBL_CREATED' => 'Oprettet af',
  'LBL_CREATED_ID' => 'Oprettet af id',
  'LBL_SEARCH_FORM_TITLE' => 'Søg efter kundeemne',
  'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Vælg kontrollerede kundeemner',
  'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Vælg kontrollerede kundeemner',
  'LBL_STATE' => 'Stat:',
  'LBL_STATUS_DESCRIPTION' => 'Statusbeskrivelse:',
  'LBL_TITLE' => 'Titel:',
  'LNK_IMPORT_VCARD' => 'Opret fra vCard',
  'LNK_LEAD_LIST' => 'Kundeemner',
  'LNK_NEW_ACCOUNT' => 'Opret virksomhed',
  'LNK_NEW_APPOINTMENT' => 'Opret aftale',
  'LNK_NEW_CONTACT' => 'Opret kontakt',
  'LNK_NEW_LEAD' => 'Opret kundeemne',
  'LNK_NEW_NOTE' => 'Opret note',
  'LNK_NEW_TASK' => 'Opret opgave',
  'LNK_NEW_CASE' => 'Opret sag',
  'LNK_NEW_CALL' => 'Registrér opkald',
  'LNK_NEW_MEETING' => 'Planlæg møde',
  'LNK_NEW_OPPORTUNITY' => 'Opret salgsmulighed',
  'LNK_SELECT_ACCOUNT' => 'Vælg virksomhed',
  'LNK_SELECT_ACCOUNTS' => 'Vælg virksomhed',
  'MSG_DUPLICATE' => 'Lignende kundeemner er fundet. Markér feltet ud for alle de kundeemner, du vil knytte til de poster, der oprettes fra denne konvertering. Når du er færdig, skal du trykke på næste.',
  'NTC_COPY_ALTERNATE_ADDRESS' => 'Kopiér alternativ adresse til primær adresse',
  'NTC_COPY_PRIMARY_ADDRESS' => 'Kopiér primær adresse til alternativ adresse',
  'NTC_DELETE_CONFIRMATION' => 'Er du sikker på, at du vil slette denne post?',
  'NTC_OPPORTUNITY_REQUIRES_ACCOUNT' => 'Oprettelse af en salgsmulighed kræver en virksomhed.\\n Opret en ny virksomhed, eller vælg en eksisterende.',
  'NTC_REMOVE_CONFIRMATION' => 'Er du sikker på, at du vil fjerne dette kundeemne fra denne sag?',
  'NTC_REMOVE_DIRECT_REPORT_CONFIRMATION' => 'Er du sikker på, at du vil fjerne denne post som en direkte rapport?',
  'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Kampagner',
  'LBL_TARGET_OF_CAMPAIGNS' => 'Succesfuld kampagne:',
  'LBL_TARGET_BUTTON_LABEL' => 'Målrettet',
  'LBL_TARGET_BUTTON_TITLE' => 'Målrettet',
  'LBL_CAMPAIGN_ID' => 'Kampagne-id',
  'LBL_CAMPAIGN' => 'Kampagne:',
  'LBL_LIST_ASSIGNED_TO_NAME' => 'Tildelt bruger',
  'LBL_PROSPECT_LIST' => 'Liste over potentielle kunder',
  'LBL_CAMPAIGN_LEAD' => 'Kampagner',
  'LNK_LEAD_REPORTS' => 'Kundeemnerapporter',
  'LBL_BIRTHDATE' => 'Fødselsdato:',
  'LBL_THANKS_FOR_SUBMITTING_LEAD' => 'Tak for din indsendelse.',
  'LBL_SERVER_IS_CURRENTLY_UNAVAILABLE' => 'Vi beklager, at serveren er ikke tilgængelig i øjeblikket. Prøv igen senere.',
  'LBL_ASSISTANT_PHONE' => 'Assistents telefon',
  'LBL_ASSISTANT' => 'Assistent',
  'LBL_REGISTRATION' => 'Registrering',
  'LBL_MESSAGE' => 'Angiv dine oplysninger nedenfor. Oplysninger og/eller en virksomhed oprettes og afventer din godkendelse.',
  'LBL_SAVED' => 'Tak for din registrering. Din virksomhed oprettes, og en person kontakter dig snarest.',
  'LBL_CLICK_TO_RETURN' => 'Retur til portal',
  'LBL_CREATED_USER' => 'Oprettet bruger',
  'LBL_MODIFIED_USER' => 'Ændret bruger',
  'LBL_CAMPAIGNS' => 'Kampagner',
  'LBL_CAMPAIGNS_SUBPANEL_TITLE' => 'Kampagner',
  'LBL_CONVERT_MODULE_NAME' => 'Modul',
  'LBL_CONVERT_REQUIRED' => 'Obligatorisk',
  'LBL_CONVERT_SELECT' => 'Tillad valg',
  'LBL_CONVERT_COPY' => 'Kopier data',
  'LBL_CONVERT_EDIT' => 'Rediger',
  'LBL_CONVERT_DELETE' => 'Slet',
  'LBL_CONVERT_ADD_MODULE' => 'Tilføj modul',
  'LBL_CONVERT_EDIT_LAYOUT' => 'Rediger konverter layout',
  'LBL_CREATE' => 'Opret',
  'LBL_SELECT' => 'Vælg',
  'LBL_WEBSITE' => 'Websted',
  'LNK_IMPORT_LEADS' => 'Importér kundeemner',
  'LBL_NOTICE_OLD_LEAD_CONVERT_OVERRIDE' => 'Bemærk: Det viste konverter kundeemne skærmbillede indeholder tilpassede felter. Når du tilpasser konverter kundeemne skærmbilledet i Studio første gang, skal du tilføje tilpassede felter til layoutet, som nødvendigt. De tilpassede felter vil ikke automatisk blive vist i layoutet, som de gjorde tidligere.',
  'LBL_MODULE_TIP' => 'Modulet til at oprette en ny post i.',
  'LBL_REQUIRED_TIP' => 'Nødvendige moduler skal oprettes eller vælges før kundeemnet kan konverteres.',
  'LBL_COPY_TIP' => 'Hvis markeret, vil felter fra kundeemnet blive kopieret til felter med samme navn i de nyoprettede poster.',
  'LBL_SELECTION_TIP' => 'Moduler med et relateret felt i kontakter kan vælges i stedet for skabt i løbet af konverter kundeemne processen.',
  'LBL_EDIT_TIP' => 'Ændre konverter layout for dette modul.',
  'LBL_DELETE_TIP' => 'Fjern dette modul fra konverter layout.',
);

