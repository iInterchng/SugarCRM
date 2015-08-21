<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/


	

$mod_strings = array (
  'LBL_CONTRACTS' => 'Договори',
  'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Документи',
  'LBL_CONTRACTS_SUBPANEL_TITLE' => 'Договори',
  'LBL_COPY_ADDRESS_CHECKED_PRIMARY' => 'Копирай в основния адрес',
  'LBL_COPY_ADDRESS_CHECKED_ALT' => 'Копирай в алтернативния адрес',
  'db_last_name' => 'LBL_LIST_LAST_NAME',
  'db_first_name' => 'LBL_LIST_FIRST_NAME',
  'db_title' => 'LBL_LIST_TITLE',
  'db_email1' => 'LBL_LIST_EMAIL_ADDRESS',
  'db_email2' => 'LBL_LIST_OTHER_EMAIL_ADDRESS',
  'ERR_DELETE_RECORD' => 'Specify the record number to delete the contact.',
  'LBL_CONTACT_OPP_FORM_TITLE' => 'Контакт-Възможност:',
  'LBL_DUPLICATE' => 'Possible Duplicate Contacts',
  'LBL_EMPTY_VCARD' => 'Изберете файл съдържащ електронна визитка',
  'LBL_ID' => 'ID:',
  'LBL_VCARD' => 'vCard',
  'LBL_VIEW_FORM_TITLE' => 'Contact View',
  'LBL_NOTE_SUBJECT' => 'Note Subject',
  'LBL_OPPORTUNITY_ROLE_ID' => 'Opportunity Role ID:',
  'LBL_PORTAL_PASSWORD_ISSET' => 'Portal Password is Set:',
  'LBL_RELATED_CONTACTS_TITLE' => 'Related Contacts',
  'LBL_RESOURCE_NAME' => 'Resource Name',
  'LBL_SAVE_CONTACT' => 'Save Contact',
  'LBL_SEARCH_FORM_TITLE' => 'Contact Search',
  'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Select Checked Contacts',
  'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Select Checked Contacts',
  'LBL_TARGET_OF_CAMPAIGNS' => 'Campaigns (Target of) :',
  'LBL_PORTAL_PASSWORD' => 'Portal Password',
  'LBL_CONFIRM_PORTAL_PASSWORD' => 'Confirm Portal Password',
  'LBL_CHECKOUT_DATE' => 'Checkout Date',
  'LNK_CONTACT_REPORTS' => 'Справки за контакти',
  'LBL_ACCOUNT_ID' => 'Организации:',
  'LBL_ACCOUNT_NAME' => 'Организация:',
  'LBL_CAMPAIGN' => 'Кампания:',
  'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Дейности',
  'LBL_ADD_BUSINESSCARD' => 'Въвеждане на електронна визитка',
  'LBL_ADDMORE_BUSINESSCARD' => 'Добави визитка',
  'LBL_ADDRESS_INFORMATION' => 'Адресна информация',
  'LBL_ALT_ADDRESS_CITY' => 'Алтернативен адрес: град',
  'LBL_ALT_ADDRESS_COUNTRY' => 'Алтернативен адрес: държава',
  'LBL_ALT_ADDRESS_POSTALCODE' => 'Алтернативен адрес: пощенски код:',
  'LBL_ALT_ADDRESS_STATE' => 'Алтернативен адрес: област',
  'LBL_ALT_ADDRESS_STREET_2' => 'Алтернативен адрес: улица 2:',
  'LBL_ALT_ADDRESS_STREET_3' => 'Алтернативен адрес: улица 3:',
  'LBL_ALT_ADDRESS_STREET' => 'Алтернативен адрес: улица',
  'LBL_ALTERNATE_ADDRESS' => 'Алтернативен адрес:',
  'LBL_ALT_ADDRESS' => 'Алтернативен адрес:',
  'LBL_ANY_ADDRESS' => 'Адрес:',
  'LBL_ANY_EMAIL' => 'Електронна поща:',
  'LBL_ANY_PHONE' => 'Телефон:',
  'LBL_ASSIGNED_TO_NAME' => 'Отговорник:',
  'LBL_ASSIGNED_TO_ID' => 'Отговорник',
  'LBL_ASSISTANT_PHONE' => 'Телефон на асистента:',
  'LBL_ASSISTANT' => 'Асистент:',
  'LBL_BIRTHDATE' => 'Дата на раждане:',
  'LBL_BUSINESSCARD' => 'Визитка',
  'LBL_CITY' => 'Град:',
  'LBL_CAMPAIGN_ID' => 'Кампания',
  'LBL_CONTACT_INFORMATION' => 'Данни за контакта',
  'LBL_CONTACT_NAME' => 'Контакт:',
  'LBL_CONTACT_ROLE' => 'Роля:',
  'LBL_CONTACT' => 'Контакт:',
  'LBL_COUNTRY' => 'Държава:',
  'LBL_CREATED_ACCOUNT' => 'Въведена е нова организация',
  'LBL_CREATED_CALL' => 'Планирано е ново обаждане',
  'LBL_CREATED_CONTACT' => 'Въведен е нов контакт',
  'LBL_CREATED_MEETING' => 'Насрочена е нова среща',
  'LBL_CREATED_OPPORTUNITY' => 'Въведена е нова възможност',
  'LBL_DATE_MODIFIED' => 'Последно модифицирано:',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Контакти',
  'LBL_DEPARTMENT' => 'Отдел:',
  'LBL_DESCRIPTION_INFORMATION' => 'Допълнителна информация',
  'LBL_DESCRIPTION' => 'Описание:',
  'LBL_DIRECT_REPORTS_SUBPANEL_TITLE' => 'Докладва на',
  'LBL_DO_NOT_CALL' => 'Да не бъде търсен по телефон:',
  'LBL_EMAIL_ADDRESS' => 'Електронна поща:',
  'LBL_EMAIL_OPT_OUT' => 'Да не се изпраща електронна поща:',
  'LBL_EXISTING_ACCOUNT' => 'Използвана е вече съществуваща организация',
  'LBL_EXISTING_CONTACT' => 'Използван е вече съществуващ контакт',
  'LBL_EXISTING_OPPORTUNITY' => 'Използвана е вече съществуваща възможност',
  'LBL_FAX_PHONE' => 'Факс:',
  'LBL_FIRST_NAME' => 'Име:',
  'LBL_FULL_NAME' => 'Пълно име:',
  'LBL_HISTORY_SUBPANEL_TITLE' => 'История',
  'LBL_HOME_PHONE' => 'Домашен телефон:',
  'LBL_IMPORT_VCARD' => 'Импортиране на електронна визитка',
  'LBL_IMPORT_VCARDTEXT' => 'Автоматично създаване на контакт чрез импортиране на електронна визитка от системата.',
  'LBL_INVALID_EMAIL' => 'Неработеща електронна поща:',
  'LBL_INVITEE' => 'Докладва на',
  'LBL_LAST_NAME' => 'Фамилия:',
  'LBL_LEAD_SOURCE' => 'Източник:',
  'LBL_LIST_ACCEPT_STATUS' => 'Статус на поканата',
  'LBL_LIST_ACCOUNT_NAME' => 'Oрганизация',
  'LBL_LIST_CONTACT_NAME' => 'Контакт',
  'LBL_LIST_CONTACT_ROLE' => 'Роля',
  'LBL_LIST_EMAIL_ADDRESS' => 'Електронна поща',
  'LBL_LIST_FIRST_NAME' => 'Име',
  'LBL_LIST_FORM_TITLE' => 'Списък с контакти:',
  'LBL_LIST_LAST_NAME' => 'Фамилия',
  'LBL_LIST_NAME' => 'Име',
  'LBL_LIST_OTHER_EMAIL_ADDRESS' => 'Алтернативна електронна поща',
  'LBL_LIST_PHONE' => 'Телефон',
  'LBL_LIST_TITLE' => 'Заглавие',
  'LBL_MOBILE_PHONE' => 'Мобилен номер:',
  'LBL_MODIFIED' => 'Модифицирано от:',
  'LBL_MODULE_NAME' => 'Контакти',
  'LBL_MODULE_TITLE' => 'Контакти',
  'LBL_NAME' => 'Име:',
  'LBL_NEW_FORM_TITLE' => 'Нов контакт',
  'LBL_NEW_PORTAL_PASSWORD' => 'Нова парола за достъп до портала:',
  'LBL_OFFICE_PHONE' => 'Служебен телефон:',
  'LBL_OPP_NAME' => 'Възможност:',
  'LBL_OPPORTUNITY_ROLE' => 'Роля при реализиране на възможност:',
  'LBL_OTHER_EMAIL_ADDRESS' => 'Алтернативна електронна поща:',
  'LBL_OTHER_PHONE' => 'Алтернативен телефонен номер:',
  'LBL_PHONE' => 'Телефон:',
  'LBL_PORTAL_ACTIVE' => 'Порталът е активен:',
  'LBL_PORTAL_APP' => 'Приложения:',
  'LBL_PORTAL_INFORMATION' => 'Информация',
  'LBL_PORTAL_NAME' => 'Име на портала:',
  'LBL_STREET' => 'Улица',
  'LBL_POSTAL_CODE' => 'Пощенски код:',
  'LBL_PRIMARY_ADDRESS_CITY' => 'Основен адрес: град',
  'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Основен адрес: държава',
  'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Основен адрес: пощенски код',
  'LBL_PRIMARY_ADDRESS_STATE' => 'Основен адрес: област',
  'LBL_PRIMARY_ADDRESS_STREET_2' => 'Адрес за кореспонденция: улица 2:',
  'LBL_PRIMARY_ADDRESS_STREET_3' => 'Адрес за кореспонденция: улица 3:',
  'LBL_PRIMARY_ADDRESS_STREET' => 'Основен адрес: улица',
  'LBL_PRIMARY_ADDRESS' => 'Основен адрес:',
  'LBL_PRODUCTS_TITLE' => 'Продукти',
  'LBL_REPORTS_TO_ID' => 'Докладва на:',
  'LBL_REPORTS_TO' => 'Докладва на:',
  'LBL_SALUTATION' => 'Поздрав:',
  'LBL_STATE' => 'Област:',
  'LBL_SYNC_CONTACT' => 'Синхронизиране с Outlook&reg;:',
  'LBL_PROSPECT_LIST' => 'Целева група',
  'LBL_TEAM_ID' => 'Екип:',
  'LBL_TITLE' => 'Длъжност:',
  'LNK_CONTACT_LIST' => 'Списък с контакти',
  'LNK_IMPORT_VCARD' => 'Създаване от електронна визитка',
  'LNK_NEW_ACCOUNT' => 'Въвеждане на организация',
  'LNK_NEW_APPOINTMENT' => 'Създаване на ангажимент',
  'LNK_NEW_CALL' => 'Планиране на обаждане',
  'LNK_NEW_CASE' => 'Въвеждане на казус',
  'LNK_NEW_CONTACT' => 'Въвеждане на контакт',
  'LNK_NEW_EMAIL' => 'Създаване на запис за изпратена поща',
  'LNK_NEW_MEETING' => 'Насрочване на среща',
  'LNK_NEW_NOTE' => 'Въвеждане на бележки',
  'LNK_NEW_OPPORTUNITY' => 'Създаване на възможност',
  'LNK_NEW_TASK' => 'Добавяне на задача',
  'LNK_SELECT_ACCOUNT' => 'Избери организация',
  'MSG_DUPLICATE' => 'The contact record you are about to create might be a duplicate of a contact record that already exists. Contact records containing similar names and/or email addresses are listed below.<br>Click Save to continue creating this new contact, or click Cancel to return to the module without creating the contact.',
  'MSG_SHOW_DUPLICATES' => 'The contact record you are about to create might be a duplicate of a contact record that already exists. Contact records containing similar names and/or email addresses are listed below.<br>Click Save to continue creating this new contact, or click Cancel to return to the module without creating the contact.',
  'NTC_COPY_ALTERNATE_ADDRESS' => 'Копиране данните от алтернативния адрес върху основния адрес',
  'NTC_COPY_PRIMARY_ADDRESS' => 'Копиране данните от основния адрес върху алтернативния адрес',
  'NTC_DELETE_CONFIRMATION' => 'Сигурни ли сте, че желаете да изтриете този запис?',
  'NTC_OPPORTUNITY_REQUIRES_ACCOUNT' => 'За да запазите тази възможност е необходимо да посочите организация.n Моля, въведете нова или изберете от вече съществуващи.',
  'NTC_REMOVE_CONFIRMATION' => 'Сигурни ли сте, че желаете да изтриете този контакт от казусa?',
  'NTC_REMOVE_DIRECT_REPORT_CONFIRMATION' => 'Сигурни ли сте, че искате да изтриете този запис като direct report?',
  'LBL_USER_PASSWORD' => 'Парола за идентификация:',
  'LBL_LEADS_SUBPANEL_TITLE' => 'Потенциални клиенти',
  'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Възможности',
  'LBL_QUOTES_SUBPANEL_TITLE' => 'Оферти',
  'LBL_PRODUCTS_SUBPANEL_TITLE' => 'Продукти',
  'LBL_CASES_SUBPANEL_TITLE' => 'Казуси',
  'LBL_BUGS_SUBPANEL_TITLE' => 'Проблеми',
  'LBL_PROJECTS_SUBPANEL_TITLE' => 'Проекти',
  'LBL_CAMPAIGNS' => 'Кампании',
  'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Кампании',
  'LBL_LIST_CITY' => 'Град',
  'LBL_LIST_STATE' => 'Област',
  'LBL_HOMEPAGE_TITLE' => 'Моите контакти',
  'LBL_OPPORTUNITIES' => 'Възможности',
  'LBL_CONTACTS_SUBPANEL_TITLE' => 'Контакти',
  'LBL_PROJECT_SUBPANEL_TITLE' => 'Проекти',
  'LBL_CAMPAIGNS_SUBPANEL_TITLE' => 'Кампании',
  'LNK_IMPORT_CONTACTS' => 'Импортиране на контакти',
);
