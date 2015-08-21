<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

	

$mod_strings = array (
  'LBL_NEW_EMPLOYEE_BUTTON_KEY' => 'N',
  'LBL_CREATE_USER_BUTTON_KEY' => 'N',
  'LBL_MODULE_NAME' => 'Служители',
  'LBL_MODULE_TITLE' => 'Служители',
  'LBL_SEARCH_FORM_TITLE' => 'Търсене в модул "Служители"',
  'LBL_LIST_FORM_TITLE' => 'Служители',
  'LBL_NEW_FORM_TITLE' => 'Нов служител',
  'LBL_EMPLOYEE' => 'Служители:',
  'LBL_LOGIN' => 'Вход',
  'LBL_RESET_PREFERENCES' => 'Връщане към стандартни настройки',
  'LBL_TIME_FORMAT' => 'Формат на часа:',
  'LBL_DATE_FORMAT' => 'Формат на датата:',
  'LBL_TIMEZONE' => 'Текущо време:',
  'LBL_CURRENCY' => 'Валута:',
  'LBL_LIST_NAME' => 'Име',
  'LBL_LIST_LAST_NAME' => 'Фамилия',
  'LBL_LIST_EMPLOYEE_NAME' => 'Име на служителя',
  'LBL_LIST_DEPARTMENT' => 'Отдел',
  'LBL_LIST_REPORTS_TO_NAME' => 'Докладва на',
  'LBL_LIST_EMAIL' => 'Електронна поща',
  'LBL_LIST_PRIMARY_PHONE' => 'Телефон',
  'LBL_LIST_USER_NAME' => 'Потребител',
  'LBL_LIST_ADMIN' => 'Администриране',
  'LBL_NEW_EMPLOYEE_BUTTON_TITLE' => 'Добавяне на нов служител [Alt+N]',
  'LBL_NEW_EMPLOYEE_BUTTON_LABEL' => 'Нов служител',
  'LBL_ERROR' => 'Грешка:',
  'LBL_PASSWORD' => 'Парола за идентификация:',
  'LBL_EMPLOYEE_NAME' => 'Име на служителя:',
  'LBL_USER_NAME' => 'Потребителско име:',
  'LBL_FIRST_NAME' => 'Име:',
  'LBL_LAST_NAME' => 'Фамилия:',
  'LBL_EMPLOYEE_SETTINGS' => 'Настройки',
  'LBL_THEME' => 'Визуализация:',
  'LBL_LANGUAGE' => 'Език:',
  'LBL_ADMIN' => 'Администратор:',
  'LBL_EMPLOYEE_INFORMATION' => 'Информация за служителя',
  'LBL_OFFICE_PHONE' => 'Служебен телефон:',
  'LBL_REPORTS_TO' => 'Докладва на:',
  'LBL_REPORTS_TO_NAME' => 'Докладва на',
  'LBL_OTHER_PHONE' => 'Алтернативен телефон:',
  'LBL_OTHER_EMAIL' => 'Алтернативна електронна поща:',
  'LBL_NOTES' => 'Бележки:',
  'LBL_DEPARTMENT' => 'Отдел:',
  'LBL_TITLE' => 'Длъжност:',
  'LBL_ANY_ADDRESS' => 'Адрес:',
  'LBL_ANY_PHONE' => 'Телефон:',
  'LBL_ANY_EMAIL' => 'Електронна поща:',
  'LBL_ADDRESS' => 'Адрес:',
  'LBL_CITY' => 'Град:',
  'LBL_STATE' => 'Област:',
  'LBL_POSTAL_CODE' => 'Пощенски код:',
  'LBL_COUNTRY' => 'Държава:',
  'LBL_NAME' => 'Име:',
  'LBL_MOBILE_PHONE' => 'Мобилен номер:',
  'LBL_OTHER' => 'Алтернативен телефон:',
  'LBL_FAX' => 'Факс:',
  'LBL_EMAIL' => 'Електронна поща:',
  'LBL_HOME_PHONE' => 'Домашен телефон:',
  'LBL_WORK_PHONE' => 'Телефон:',
  'LBL_ADDRESS_INFORMATION' => 'Адресна информация',
  'LBL_EMPLOYEE_STATUS' => 'Статус на служителя:',
  'LBL_PRIMARY_ADDRESS' => 'Основен адрес:',
  'LBL_SAVED_SEARCH' => 'Настройки на подредби',
  'LBL_CREATE_USER_BUTTON_TITLE' => 'Добавяне на нов потребител [Alt+N]',
  'LBL_CREATE_USER_BUTTON_LABEL' => 'Добавяне на нов потребител',
  'LBL_FAVORITE_COLOR' => 'Любим цвят:',
  'LBL_MESSENGER_ID' => 'IM име:',
  'LBL_MESSENGER_TYPE' => 'IM тип:',
  'ERR_EMPLOYEE_NAME_EXISTS_1' => 'Име на служителя',
  'ERR_EMPLOYEE_NAME_EXISTS_2' => 'вече съществува.  Не се допуска дублиране на имената на служителите. Променете името на служителя така, че да няма дублиране.',
  'ERR_LAST_ADMIN_1' => 'Име на служителя "',
  'ERR_LAST_ADMIN_2' => '" е последен служител с администраторски права. Поне един служител трябва да има администраторски права.',
  'LNK_NEW_EMPLOYEE' => 'Добавяне на нов служител',
  'LNK_EMPLOYEE_LIST' => 'Служители',
  'ERR_DELETE_RECORD' => 'Трябва да определите номер, за да изтриете този запис.',
  'LBL_DEFAULT_TEAM' => 'Екип по подразбиране:',
  'LBL_DEFAULT_TEAM_TEXT' => 'Изберете екип по подразбиране за нови записи',
  'LBL_MY_TEAMS' => 'Моите екипи',
  'LBL_LIST_DESCRIPTION' => 'Описание',
  'LNK_EDIT_TABS' => 'Редактиране на табулатори',
  'NTC_REMOVE_TEAM_MEMBER_CONFIRMATION' => 'Сигурни ли сте че искате да премахнете това членство на потребителя?',
  'LBL_LIST_EMPLOYEE_STATUS' => 'Статус на служителя',
  'LBL_SUGAR_LOGIN' => 'е потребител на Sugar:',
  'LBL_RECEIVE_NOTIFICATIONS' => 'Уведомление при присвоен запис:',
  'LBL_IS_ADMIN' => 'е администратор:',
  'LBL_GROUP' => 'Групов потребител',
  'LBL_PORTAL_ONLY' => 'Потребител само на портала',
  'LBL_PHOTO' => 'Снимка',
  'LBL_DELETE_USER_CONFIRM' => 'Служителита са също и потребители на системата.<br />Изтриването на запис на служителите ще изтрие записа на потребителите, и потребителите вече няма да имат достъп до приложението.<br />Искате ли да продължите с изтриването на този запис?',
  'LBL_DELETE_EMPLOYEE_CONFIRM' => 'Наистина ли желаете да изтриете този служител?',
);

