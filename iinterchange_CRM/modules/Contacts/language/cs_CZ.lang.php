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
  'db_email2' => 'LBL_LIST_OTHER_EMAIL_ADDRESS',
  'LBL_CONTACT_ROLE' => 'Role:',
  'LBL_FAX_PHONE' => 'Fax:',
  'LBL_ID' => 'ID:',
  'LBL_VCARD' => 'vCard',
  'LBL_LIST_CONTACT_ROLE' => 'Role',
  'LNK_CONTACT_REPORTS' => 'Přehled reportů kontaktů',
  'ERR_DELETE_RECORD' => 'Pro smazání kontaktu musí být zadáno číslo záznamu.',
  'LBL_ACCOUNT_ID' => 'Společnost ID:',
  'LBL_ACCOUNT_NAME' => 'Název společnosti:',
  'LBL_CAMPAIGN' => 'Kampaň:',
  'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktivity',
  'LBL_ADD_BUSINESSCARD' => 'Přidat vizitku',
  'LBL_ADDMORE_BUSINESSCARD' => 'Přidat další vizitku',
  'LBL_ADDRESS_INFORMATION' => 'Adresa',
  'LBL_ALT_ADDRESS_CITY' => 'Město:',
  'LBL_ALT_ADDRESS_COUNTRY' => 'Země:',
  'LBL_ALT_ADDRESS_POSTALCODE' => 'PSČ:',
  'LBL_ALT_ADDRESS_STATE' => 'Stát:',
  'LBL_ALT_ADDRESS_STREET_2' => 'Alternativní ulice 2:',
  'LBL_ALT_ADDRESS_STREET_3' => 'Alternativní ulice 3:',
  'LBL_ALT_ADDRESS_STREET' => 'Ulice:',
  'LBL_ALTERNATE_ADDRESS' => 'Další adresa:',
  'LBL_ALT_ADDRESS' => 'Další adresa:',
  'LBL_ANY_ADDRESS' => 'Ostatní adresa:',
  'LBL_ANY_EMAIL' => 'Email:',
  'LBL_ANY_PHONE' => 'Telefon:',
  'LBL_ASSIGNED_TO_NAME' => 'Přiřazeno (komu):',
  'LBL_ASSIGNED_TO_ID' => 'Zodpovědný uživatel',
  'LBL_ASSISTANT_PHONE' => 'Assistent telefon:',
  'LBL_ASSISTANT' => 'Asistent:',
  'LBL_BIRTHDATE' => 'Datum narození:',
  'LBL_BUSINESSCARD' => 'Vizitka',
  'LBL_CITY' => 'Město:',
  'LBL_CAMPAIGN_ID' => 'ID kampaně',
  'LBL_CONTACT_INFORMATION' => 'Informace o kontaktu',
  'LBL_CONTACT_NAME' => 'Jméno kontaktu:',
  'LBL_CONTACT_OPP_FORM_TITLE' => 'Kontakt-možnosti:',
  'LBL_CONTACT' => 'Kontakt:',
  'LBL_CONTRACTS' => 'Kontrakty',
  'LBL_COUNTRY' => 'Země:',
  'LBL_CREATED_ACCOUNT' => 'Přidán nový účet',
  'LBL_CREATED_CALL' => 'Naplánován nový hovor',
  'LBL_CREATED_CONTACT' => 'Přidán nový kontakt',
  'LBL_CREATED_MEETING' => 'Naplánována nová schůzka',
  'LBL_CREATED_OPPORTUNITY' => 'Vytvořit nový obchod',
  'LBL_DATE_MODIFIED' => 'Datum změny:',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Kontakty',
  'LBL_DEPARTMENT' => 'Oddělení:',
  'LBL_DESCRIPTION_INFORMATION' => 'Popis',
  'LBL_DESCRIPTION' => 'Popis:',
  'LBL_DIRECT_REPORTS_SUBPANEL_TITLE' => 'Přímé Reporty',
  'LBL_DO_NOT_CALL' => 'Nevolat:',
  'LBL_DUPLICATE' => 'Možnost duplikovat kontakty',
  'LBL_EMAIL_ADDRESS' => 'Email:',
  'LBL_EMAIL_OPT_OUT' => 'Nechce dostávat emaily:',
  'LBL_EMPTY_VCARD' => 'Vyberte vCard soubor',
  'LBL_EXISTING_ACCOUNT' => 'Použít existující účet',
  'LBL_EXISTING_CONTACT' => 'Použít existující kontakt',
  'LBL_EXISTING_OPPORTUNITY' => 'Použít existující obchod',
  'LBL_FIRST_NAME' => 'Křestní jméno:',
  'LBL_FULL_NAME' => 'Plné jméno:',
  'LBL_HISTORY_SUBPANEL_TITLE' => 'Historie',
  'LBL_HOME_PHONE' => 'Domácí telefon:',
  'LBL_IMPORT_VCARD' => 'Importovat vCard',
  'LBL_IMPORT_VCARDTEXT' => 'Automaticky přidat nový kontakt importováním vCard z vašeho souborového systému.',
  'LBL_INVALID_EMAIL' => 'Neplatný email:',
  'LBL_INVITEE' => 'Přímé Reporty',
  'LBL_LAST_NAME' => 'Příjmení:',
  'LBL_LEAD_SOURCE' => 'Zdroj příležitosti:',
  'LBL_LIST_ACCEPT_STATUS' => 'Přijato ?',
  'LBL_LIST_ACCOUNT_NAME' => 'Název společnosti',
  'LBL_LIST_CONTACT_NAME' => 'Název kontaktu',
  'LBL_LIST_EMAIL_ADDRESS' => 'E-mail',
  'LBL_LIST_FIRST_NAME' => 'Jméno',
  'LBL_LIST_FORM_TITLE' => 'Seznam kontaktů',
  'LBL_VIEW_FORM_TITLE' => 'Pohled kontakty',
  'LBL_LIST_LAST_NAME' => 'Příjmení',
  'LBL_LIST_NAME' => 'Název',
  'LBL_LIST_OTHER_EMAIL_ADDRESS' => 'Další email',
  'LBL_LIST_PHONE' => 'Telefon do práce:',
  'LBL_LIST_TITLE' => 'Titul',
  'LBL_MOBILE_PHONE' => 'Mobil:',
  'LBL_MODIFIED' => 'Upraveno uživatelem ID:',
  'LBL_MODULE_NAME' => 'Kontakty',
  'LBL_MODULE_TITLE' => 'Kontakty',
  'LBL_NAME' => 'Název:',
  'LBL_NEW_FORM_TITLE' => 'Přidat kontakt',
  'LBL_NEW_PORTAL_PASSWORD' => 'Nové vstupní heslo:',
  'LBL_NOTE_SUBJECT' => 'Předmět poznámky',
  'LBL_OFFICE_PHONE' => 'Telefon do práce:',
  'LBL_OPP_NAME' => 'Název obchodu:',
  'LBL_OPPORTUNITY_ROLE_ID' => 'Role v obchodu (id):',
  'LBL_OPPORTUNITY_ROLE' => 'Role v obchodu',
  'LBL_OTHER_EMAIL_ADDRESS' => 'Další email:',
  'LBL_OTHER_PHONE' => 'Další telefon:',
  'LBL_PHONE' => 'Telefon',
  'LBL_PORTAL_ACTIVE' => 'Vstup aktivní:',
  'LBL_PORTAL_APP' => 'Portálová Aplikace',
  'LBL_PORTAL_INFORMATION' => 'Vstupní informace',
  'LBL_PORTAL_NAME' => 'Vstupní jméno:',
  'LBL_PORTAL_PASSWORD_ISSET' => 'Vloženo vstupní heslo:',
  'LBL_STREET' => 'Ulice',
  'LBL_POSTAL_CODE' => 'PSČ:',
  'LBL_PRIMARY_ADDRESS_CITY' => 'Město:',
  'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Země:',
  'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'PSČ:',
  'LBL_PRIMARY_ADDRESS_STATE' => 'Stát:',
  'LBL_PRIMARY_ADDRESS_STREET_2' => 'Ulice 2:',
  'LBL_PRIMARY_ADDRESS_STREET_3' => 'Ulice 3:',
  'LBL_PRIMARY_ADDRESS_STREET' => 'Ulice:',
  'LBL_PRIMARY_ADDRESS' => 'Hlavní adresa:',
  'LBL_PRODUCTS_TITLE' => 'Produkty',
  'LBL_RELATED_CONTACTS_TITLE' => 'Spřízněné kontakty',
  'LBL_REPORTS_TO_ID' => 'Nadřízený:',
  'LBL_REPORTS_TO' => 'Reporty pro:',
  'LBL_RESOURCE_NAME' => 'Název zdroje',
  'LBL_SALUTATION' => 'Oslovení',
  'LBL_SAVE_CONTACT' => 'Uložit kontakt',
  'LBL_SEARCH_FORM_TITLE' => 'Vzhledávání kontaktů',
  'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Zvolit zkontrolované kontakty',
  'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Zvolit zkontrolované kontakty',
  'LBL_STATE' => 'Stát:',
  'LBL_SYNC_CONTACT' => 'Synchronizovat do Outlook®:',
  'LBL_PROSPECT_LIST' => 'Seznam prospektů',
  'LBL_TEAM_ID' => 'Tým ID:',
  'LBL_TITLE' => 'Titul:',
  'LNK_CONTACT_LIST' => 'Kontakty',
  'LNK_IMPORT_VCARD' => 'Importovat vCard',
  'LNK_NEW_ACCOUNT' => 'Přidat společnost',
  'LNK_NEW_APPOINTMENT' => 'Naplánovat událost',
  'LNK_NEW_CALL' => 'Naplánovat hovor',
  'LNK_NEW_CASE' => 'Vytvořit případ',
  'LNK_NEW_CONTACT' => 'Přidat kontakt',
  'LNK_NEW_EMAIL' => 'Archivovat zprávu',
  'LNK_NEW_MEETING' => 'Naplánovat schůzku',
  'LNK_NEW_NOTE' => 'Přidat poznámku',
  'LNK_NEW_OPPORTUNITY' => 'Vytvořit obchod',
  'LNK_NEW_TASK' => 'Přidat úkol',
  'LNK_SELECT_ACCOUNT' => 'Zvolit účet',
  'MSG_DUPLICATE' => 'Přidáním tohoto kontaktu můžete vytvořit duplicitní kontakt. Můžete vybrat kontakt ze seznamu níže nebo kliknout na Přidat kontakt pro přidání nového kontaktu se zadanými údaji.',
  'MSG_SHOW_DUPLICATES' => 'Přidáním tohoto kontaktu můžete vytvořit duplicitní kontakt. Můžete vybrat kontakt ze seznamu níže nebo kliknout na Přidat kontakt pro přidání nového kontaktu se zadanými údaji.',
  'NTC_COPY_ALTERNATE_ADDRESS' => 'Zkopírovat další adresu do adresy',
  'NTC_COPY_PRIMARY_ADDRESS' => 'Zkopírovat adresu do další adresy',
  'NTC_DELETE_CONFIRMATION' => 'Opravdu chcete smazat tento záznam?',
  'NTC_OPPORTUNITY_REQUIRES_ACCOUNT' => 'Pro vytvoření nového obchodu je třeba zadat účet. Prosím zvolte existující nebo přidejte nový.',
  'NTC_REMOVE_CONFIRMATION' => 'Opravdu chcete kontakt vyjmout z případu?',
  'NTC_REMOVE_DIRECT_REPORT_CONFIRMATION' => 'Opravdu chcete odstranit tento záznam z Přímých reportů?',
  'LBL_USER_PASSWORD' => 'Heslo:',
  'LBL_LEADS_SUBPANEL_TITLE' => 'Příležitosti',
  'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Obchody',
  'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Dokumenty',
  'LBL_QUOTES_SUBPANEL_TITLE' => 'Nabídky',
  'LBL_PRODUCTS_SUBPANEL_TITLE' => 'Produkty',
  'LBL_CONTRACTS_SUBPANEL_TITLE' => 'Kontrakty',
  'LBL_COPY_ADDRESS_CHECKED_PRIMARY' => 'Kopírovat do Primární adresy',
  'LBL_COPY_ADDRESS_CHECKED_ALT' => 'Kopírovat do Další adresy',
  'LBL_CASES_SUBPANEL_TITLE' => 'Případy',
  'LBL_BUGS_SUBPANEL_TITLE' => 'Chyby',
  'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projekty',
  'LBL_TARGET_OF_CAMPAIGNS' => 'Kampaně (Cíle):',
  'LBL_CAMPAIGNS' => 'Kampaně',
  'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Kampaně',
  'LBL_LIST_CITY' => 'Město',
  'LBL_LIST_STATE' => 'Stát',
  'LBL_HOMEPAGE_TITLE' => 'Kontakty',
  'LBL_OPPORTUNITIES' => 'Obchody',
  'LBL_PORTAL_PASSWORD' => 'Portalové heslo',
  'LBL_CONFIRM_PORTAL_PASSWORD' => 'Potvrzení portalového hesla',
  'LBL_CHECKOUT_DATE' => 'Datum odhlášení',
  'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakty',
  'LBL_PROJECT_SUBPANEL_TITLE' => 'Projecty',
  'LBL_CAMPAIGNS_SUBPANEL_TITLE' => 'Kampaně',
  'LNK_IMPORT_CONTACTS' => 'Import kontaktů',
);

