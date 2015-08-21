<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

	

$mod_strings = array (
  'LBL_FW' => 'FW:',
  'LBL_RE' => 'RE:',
  'LBL_COLON' => ':',
  'LBL_SAVE_AS_DRAFT_BUTTON_KEY' => 'R',
  'LBL_SEND_BUTTON_KEY' => 'S',
  'LBL_BUTTON_RAW_KEY' => 'e',
  'LBL_BUTTON_CHECK_KEY' => 'c',
  'LBL_BUTTON_FORWARD_KEY' => 'f',
  'LBL_BUTTON_REPLY_KEY' => 'r',
  'LBL_BUTTON_DISTRIBUTE_KEY' => 'a',
  'LBL_BUTTON_GRAB_KEY' => 't',
  'LBL_ADD_CC_BCC_SEP' => '|',
  'LBL_BUTTON_CREATE' => 'Создать',
  'LBL_BUTTON_EDIT' => 'Изменить',
  'LBL_QS_DISABLED' => '(Функция быстрого поиска не доступна для данного модуля. Пожалуйста, используйте кнопку выбора.)',
  'LBL_SIGNATURE_PREPEND' => 'Подпись над ответом',
  'LBL_EMAIL_DEFAULT_DESCRIPTION' => 'Это запрошенное Вами коммерческое предложение (Вы можете изменить этот текст)',
  'LBL_EMAIL_QUOTE_FOR' => 'Квота для:',
  'LBL_QUOTE_LAYOUT_DOES_NOT_EXIST_ERROR' => 'файл макета коммерческого предложения не найден: $layout',
  'LBL_QUOTE_LAYOUT_REGISTERED_ERROR' => 'макет коммерческого предложения не найден в modules/Quotes/Layouts.php',
  'LBL_CONFIRM_DELETE' => 'Вы уверены, что хотите удалить эту папку?',
  'LBL_ENTER_FOLDER_NAME' => 'Пожалуйста, укажите название папки',
  'LBL_QUOTES_SUBPANEL_TITLE' => 'Коммерческие предложения',
  'LBL_EMAILS_QUOTES_REL' => 'E-mail: Коммерческие предложения',
  'LBL_ERROR_SELECT_REPORT' => 'Пожалуйста, выберите отчет',
  'LBL_ERROR_SELECT_MODULE_SELECT' => 'Пожалуйста, выберите название модуля, кликнув на кнопку рядом с полем Относится к',
  'LBL_ERROR_SELECT_MODULE' => 'Пожалуйста, выберите соответствующий модуль',
  'ERR_ARCHIVE_EMAIL' => 'Ошибка: Выберите сообщения для архивирования.',
  'ERR_DATE_START' => 'Дата начала',
  'ERR_DELETE_RECORD' => 'Вы должны указать соответствующую запись перед ее удалением.',
  'ERR_NOT_ADDRESSED' => 'Ошибка: должны быть заполнены поля: Кому, Копия или Скрытая копия',
  'ERR_TIME_START' => 'Время начала',
  'ERR_TIME_SENT' => 'Время отправки',
  'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Контрагенты',
  'LBL_ADD_ANOTHER_FILE' => 'Добавить другой файл',
  'LBL_ADD_DASHLETS' => 'Добавить разделы Sugar',
  'LBL_ADD_DOCUMENT' => 'Добавить документы Sugar',
  'LBL_ADD_ENTRIES' => 'Добавить записи',
  'LBL_ADD_FILE' => 'Добавить файлы',
  'LBL_ARCHIVED_EMAIL' => 'Архивное сообщение',
  'LBL_ARCHIVED_MODULE_NAME' => 'Архивация E-mail',
  'LBL_ATTACHMENTS' => 'Вложения:',
  'LBL_HAS_ATTACHMENT' => 'Содержит вложение?',
  'LBL_BCC' => 'Скрытая копия:',
  'LBL_BODY' => 'Текст письма:',
  'LBL_BUGS_SUBPANEL_TITLE' => 'Ошибки',
  'LBL_CC' => 'Копия:',
  'LBL_COMPOSE_MODULE_NAME' => 'Написать письмо',
  'LBL_CONTACT_FIRST_NAME' => 'Имя контакта',
  'LBL_CONTACT_LAST_NAME' => 'Фамилия контакта',
  'LBL_CONTACT_NAME' => 'Контакт:',
  'LBL_CONTACTS_SUBPANEL_TITLE' => 'Контакты',
  'LBL_CREATED_BY' => 'Создано',
  'LBL_DATE_AND_TIME' => 'Дата и время отправки:',
  'LBL_DATE_SENT' => 'Дата отправки:',
  'LBL_DATE' => 'Дата отправки:',
  'LBL_DELETE_FROM_SERVER' => 'Удалить сообщение с сервера',
  'LBL_DESCRIPTION' => 'Описание',
  'LBL_EDIT_ALT_TEXT' => 'Правка текстового сообщения',
  'LBL_SEND_IN_PLAIN_TEXT' => 'Отправить в виде неформатир. текста',
  'LBL_EDIT_MY_SETTINGS' => 'Изменить мои настройки',
  'LBL_EMAIL_ATTACHMENT' => 'Вложение E-mail',
  'LBL_EMAIL_EDITOR_OPTION' => 'Отправить E-mail в формате HTML',
  'LBL_EMAIL_SELECTOR' => 'Выбрать',
  'LBL_EMAIL' => 'E-mail-адрес:',
  'LBL_EMAILS_ACCOUNTS_REL' => 'E-mail: Контрагенты',
  'LBL_EMAILS_BUGS_REL' => 'E-mail: Ошибки',
  'LBL_EMAILS_CASES_REL' => 'E-mail: Обращения',
  'LBL_EMAILS_CONTACTS_REL' => 'E-mail: Контакты',
  'LBL_EMAILS_LEADS_REL' => 'E-mail: Предварительные контакты',
  'LBL_EMAILS_OPPORTUNITIES_REL' => 'E-mail: Сделки',
  'LBL_EMAILS_NOTES_REL' => 'E-mail: Заметки',
  'LBL_EMAILS_PROJECT_REL' => 'E-mail: Проект',
  'LBL_EMAILS_PROJECT_TASK_REL' => 'E-mail: Проектная задача',
  'LBL_EMAILS_PROSPECT_REL' => 'E-mail: Потенциальный клиент',
  'LBL_EMAILS_TASKS_REL' => 'E-mail: Задачи',
  'LBL_EMAILS_USERS_REL' => 'E-mail: Пользователи',
  'LBL_EMPTY_FOLDER' => 'Папка пуста',
  'LBL_ERROR_SENDING_EMAIL' => 'Ошибка при отправке E-mail',
  'LBL_ERROR_SAVING_DRAFT' => 'Ошибка сохранения черновика',
  'LBL_FORWARD_HEADER' => 'Начать перенаправленное сообщение:',
  'LBL_FROM_NAME' => 'Имя отправителя',
  'LBL_FROM' => 'От:',
  'LBL_REPLY_TO' => 'Ответить:',
  'LBL_HTML_BODY' => 'Текст HTML',
  'LBL_INVITEE' => 'Получатели',
  'LBL_LEADS_SUBPANEL_TITLE' => 'Предварительные контакты',
  'LBL_MESSAGE_SENT' => 'Сообщение отправлено',
  'LBL_MODIFIED_BY' => 'Изменено',
  'LBL_MODULE_NAME_NEW' => 'Отправить E-mail в архив',
  'LBL_MODULE_NAME' => 'Все E-mail-сообщения',
  'LBL_MODULE_TITLE' => 'E-mail',
  'LBL_MY_EMAILS' => 'Мои E-mail-сообщения',
  'LBL_NEW_FORM_TITLE' => 'Отправить E-mail в архив',
  'LBL_NONE' => 'Не определен',
  'LBL_NOT_SENT' => 'Ошибка отправки',
  'LBL_NOTE_SEMICOLON' => 'Замечание: используйте точку с запятой для разделения нескольких e-mail адресов.',
  'LBL_NOTES_SUBPANEL_TITLE' => 'Вложения',
  'LBL_OPPORTUNITY_SUBPANEL_TITLE' => 'Сделки',
  'LBL_PROJECT_SUBPANEL_TITLE' => 'Проекты',
  'LBL_PROJECT_TASK_SUBPANEL_TITLE' => 'Проектные задачи',
  'LBL_RAW' => 'Исходный E-mail',
  'LBL_SAVE_AS_DRAFT_BUTTON_LABEL' => 'Сохранить черновик',
  'LBL_SAVE_AS_DRAFT_BUTTON_TITLE' => 'Сохранить черновик [Alt+R]',
  'LBL_SEARCH_FORM_DRAFTS_TITLE' => 'Найти черновики',
  'LBL_SEARCH_FORM_SENT_TITLE' => 'Найти отправленные E-mail-сообщения',
  'LBL_SEARCH_FORM_TITLE' => 'Поиск E-mail-сообщения',
  'LBL_SEND_ANYWAYS' => 'У этого e-mail-сообщения нет темы. Отправить/сохранить все равно?',
  'LBL_SEND_BUTTON_LABEL' => 'Отправить',
  'LBL_SEND_BUTTON_TITLE' => 'Отправить [Alt+S]',
  'LBL_SEND' => 'ОТПРАВИТЬ',
  'LBL_SENT_MODULE_NAME' => 'Отправленные E-mail-сообщения',
  'LBL_SHOW_ALT_TEXT' => 'Показать в формате Plain Text',
  'LBL_SIGNATURE' => 'Подпись',
  'LBL_SUBJECT' => 'Тема:',
  'LBL_TEXT_BODY' => 'Текст письма',
  'LBL_TIME' => 'Время отправки:',
  'LBL_TO_ADDRS' => 'Кому',
  'LBL_USE_TEMPLATE' => 'Использовать шаблон:',
  'LBL_USERS_SUBPANEL_TITLE' => 'Пользователи',
  'LBL_USERS' => 'Пользователи',
  'LNK_ALL_EMAIL_LIST' => 'Все E-mail-сообщения',
  'LNK_ARCHIVED_EMAIL_LIST' => 'Архив E-mail-сообщений',
  'LNK_CALL_LIST' => 'Звонки',
  'LNK_DRAFTS_EMAIL_LIST' => 'Все черновики',
  'LNK_EMAIL_LIST' => 'E-mail',
  'LBL_EMAIL_RELATE' => 'Относится к:',
  'LNK_EMAIL_TEMPLATE_LIST' => 'Просмотреть шаблоны E-mail',
  'LNK_MEETING_LIST' => 'Встречи',
  'LNK_NEW_ARCHIVE_EMAIL' => 'Создать архивный E-mail',
  'LNK_NEW_CALL' => 'Назначить звонок',
  'LNK_NEW_EMAIL_TEMPLATE' => 'Создать шаблон E-mail',
  'LNK_NEW_EMAIL' => 'Новое E-mail-сообщение',
  'LNK_NEW_MEETING' => 'Назначить встречу',
  'LNK_NEW_NOTE' => 'Создать заметку или вложение',
  'LNK_NEW_SEND_EMAIL' => 'Написать письмо',
  'LNK_NEW_TASK' => 'Новая задача',
  'LNK_NOTE_LIST' => 'Заметки',
  'LNK_SENT_EMAIL_LIST' => 'Отправленные E-mail-сообщения',
  'LNK_TASK_LIST' => 'Задачи',
  'LNK_VIEW_CALENDAR' => 'Сегодня',
  'LBL_LIST_ASSIGNED' => 'Назначена',
  'LBL_LIST_CONTACT_NAME' => 'Контактное лицо',
  'LBL_LIST_CREATED' => 'Создано',
  'LBL_LIST_DATE_SENT' => 'Дата отправки',
  'LBL_LIST_DATE' => 'Дата отправки',
  'LBL_LIST_FORM_DRAFTS_TITLE' => 'Черновик',
  'LBL_LIST_FORM_SENT_TITLE' => 'Отправленные E-mail-сообщения',
  'LBL_LIST_FORM_TITLE' => 'Список E-mail',
  'LBL_LIST_FROM_ADDR' => 'От',
  'LBL_LIST_RELATED_TO' => 'Тип получателя',
  'LBL_LIST_SUBJECT' => 'Тема',
  'LBL_LIST_TIME' => 'Время отправки',
  'LBL_LIST_TO_ADDR' => 'Кому',
  'LBL_LIST_TYPE' => 'Вид',
  'NTC_REMOVE_INVITEE' => 'Вы уверены, что хотите удалить этого получателя из данного e-mail-сообщения?',
  'WARNING_SETTINGS_NOT_CONF' => 'Предупреждение: Ваши установки e-mail не настроены для отправки e-mail.',
  'WARNING_NO_UPLOAD_DIR' => 'Вероятно, вложения не будут прикреплены к сообщению: обнаружено неверное значение переменной "upload_tmp_dir". Пожалуйста, исправьте эту ошибку в файле php.ini.',
  'WARNING_UPLOAD_DIR_NOT_WRITABLE' => 'Вероятно, вложения не будут прикреплены к сообщению: обнаружено неверное или неиспользуемое значение переменной "upload_tmp_dir". Пожалуйста, исправьте эту ошибку в файле php.ini file.',
  'LBL_BUTTON_RAW_TITLE' => 'Показать исходный текст сообщения [Alt+E]',
  'LBL_BUTTON_RAW_LABEL' => 'Показать исходный текст сообщения',
  'LBL_BUTTON_RAW_LABEL_HIDE' => 'Скрыть исходный текст сообщения',
  'LBL_BUTTON_CHECK' => 'Проверить почту',
  'LBL_BUTTON_CHECK_TITLE' => 'Проверить почту [Alt+C]',
  'LBL_BUTTON_FORWARD' => 'Переслать',
  'LBL_BUTTON_FORWARD_TITLE' => 'Переслать это сообщение [Alt+F]',
  'LBL_BUTTON_REPLY_TITLE' => 'Ответить [Alt+R]',
  'LBL_BUTTON_REPLY' => 'Ответить',
  'LBL_CASES_SUBPANEL_TITLE' => 'Обращения',
  'LBL_INBOUND_TITLE' => 'Входящие E-mail-сообщения',
  'LBL_INTENT' => 'Цель',
  'LBL_MESSAGE_ID' => 'ID сообщения',
  'LBL_REPLY_HEADER_2' => 'писал(а):',
  'LBL_REPLY_TO_ADDRESS' => 'Ответить на адрес',
  'LBL_REPLY_TO_NAME' => 'Ответить на имя',
  'LBL_LIST_BUG' => 'Ошибки',
  'LBL_LIST_CASE' => 'Обращения',
  'LBL_LIST_CONTACT' => 'Контакты',
  'LBL_LIST_LEAD' => 'Предварительные контакты',
  'LBL_LIST_TASK' => 'Задачи',
  'LBL_LIST_ASSIGNED_TO_NAME' => 'Ответственный (-ая)',
  'LBL_ALL' => 'Все',
  'LBL_ASSIGN_WARN' => 'Убедитесь, что выбраны 2 опции.',
  'LBL_BACK_TO_GROUP' => 'Возврат к групповым входящим',
  'LBL_BUTTON_DISTRIBUTE_TITLE' => 'Назначить [Alt+A]',
  'LBL_BUTTON_DISTRIBUTE' => 'Назначить',
  'LBL_BUTTON_GRAB_TITLE' => 'Взять из группы [Alt+T]',
  'LBL_BUTTON_GRAB' => 'Взять из группы',
  'LBL_CREATE_BUG' => 'Новая ошибка',
  'LBL_CREATE_CASE' => 'Новое обращение',
  'LBL_CREATE_CONTACT' => 'Новый контакт',
  'LBL_CREATE_LEAD' => 'Новый предварительный контакт',
  'LBL_CREATE_TASK' => 'Новая задача',
  'LBL_DIST_TITLE' => 'Назначение ответственного',
  'LBL_LOCK_FAIL_DESC' => 'Выбранный пункт не доступен в настоящее время.',
  'LBL_LOCK_FAIL_USER' => 'стал владельцем.',
  'LBL_MASS_DELETE_ERROR' => 'Нет отмеченных записей для удаления.',
  'LBL_NEW' => 'Новое',
  'LBL_NEXT_EMAIL' => 'Следующая свободная запись',
  'LBL_NO_GRAB_DESC' => 'Нет доступным записей. Попробуйте еще раз попозже.',
  'LBL_QUICK_REPLY' => 'Ответить',
  'LBL_REPLIED' => 'Отвечено',
  'LBL_SELECT_TEAM' => 'Выбор команды',
  'LBL_TAKE_ONE_TITLE' => 'Повт.',
  'LBL_TITLE_SEARCH_RESULTS' => 'Результаты поиска',
  'LBL_TO' => 'Кому:',
  'LBL_TOGGLE_ALL' => 'Отметить все',
  'LBL_UNKNOWN' => 'Неизвестно',
  'LBL_UNREAD_HOME' => 'Непрочитанные письма',
  'LBL_UNREAD' => 'Непрочитано',
  'LBL_USE_ALL' => 'Все результаты поиска',
  'LBL_USE_CHECKED' => 'Только отмеченные',
  'LBL_USE_MAILBOX_INFO' => 'Производить рассылку с: адрес',
  'LBL_USE' => 'Назначение:',
  'LBL_ASSIGN_SELECTED_RESULTS_TO' => 'Назначить выбранные результаты:',
  'LBL_USER_SELECT' => 'Выбор пользователей',
  'LBL_USING_RULES' => 'Правило назначения:',
  'LBL_WARN_NO_DIST' => 'Не выбран метод распределения',
  'LBL_WARN_NO_USERS' => 'Пользователи не выбраны',
  'LBL_WARN_NO_USERS_OR_TEAM' => 'Пожалуйста, выберите пользователя или команду для назначения ответственного.',
  'LBL_IMPORT_STATUS_TITLE' => 'Статус',
  'LBL_LIST_STATUS' => 'Статус',
  'LBL_LIST_TITLE_GROUP_INBOX' => 'Входящие группы',
  'LBL_LIST_TITLE_MY_DRAFTS' => 'Мои черновики',
  'LBL_LIST_TITLE_MY_INBOX' => 'Мои входящие',
  'LBL_LIST_TITLE_MY_SENT' => 'Мои отправленные письма',
  'LBL_LIST_TITLE_MY_ARCHIVES' => 'Моя архивная почта',
  'LBL_ACTIVITIES_REPORTS' => 'Отчеты по мероприятиям',
  'LNK_CHECK_MY_INBOX' => 'Проверить мою почту',
  'LNK_DATE_SENT' => 'Дата отправки',
  'LNK_GROUP_INBOX' => 'Входящие группы',
  'LNK_MY_DRAFTS' => 'Мои черновики',
  'LNK_MY_INBOX' => 'Моя почта',
  'LNK_VIEW_MY_INBOX' => 'Посмотреть мою почту',
  'LNK_QUICK_REPLY' => 'Ответить',
  'LNK_MY_ARCHIVED_LIST' => 'Мои архивы',
  'LBL_EMAILS_NO_PRIMARY_TEAM_SPECIFIED' => 'Основная команда не выбрана',
  'LBL_ASSIGNED_TO' => 'Ответственный (-ая)',
  'LBL_MEMBER_OF' => 'Состоит в',
  'LBL_QUICK_CREATE' => 'Быстрое создание',
  'LBL_STATUS' => 'Статус письма:',
  'LBL_EMAIL_FLAGGED' => 'Помеченные:',
  'LBL_EMAIL_REPLY_TO_STATUS' => 'Статус ответа:',
  'LBL_TYPE' => 'Тип:',
  'LBL_EMAILTEMPLATE_MESSAGE_SHOW_TITLE' => 'Обратите внимание!',
  'LBL_EMAILTEMPLATE_MESSAGE_SHOW_MSG' => 'Выбор данного шаблона приведет к перезаписи всех данных в тексте письма. Вы желаете продолжить?',
  'LBL_EMAILTEMPLATE_MESSAGE_CLEAR_MSG' => 'При выборе пункта "--не выбрано--" будет удален весь текст из тела письма. Все равно продолжить?',
  'LBL_EMAILTEMPLATE_MESSAGE_WARNING_TITLE' => 'Предупреждение',
  'LBL_EMAILTEMPLATE_MESSAGE_MULTIPLE_RECIPIENTS' => 'Использование шаблона письма, содержащего такие переменные, как имя контакта, для рассылки писем нескольким абонентам может иметь неожиданные результаты. Для массовых рассылок рекомендуется использовать email-кампании.',
  'LBL_CHECK_ATTACHMENTS' => 'Пожалуйста, проверьте вложения!',
  'LBL_HAS_ATTACHMENTS' => 'Е-mail содержит вложения. Хотите их сохранить?',
  'ERR_MISSING_REQUIRED_FIELDS' => 'Необходимые поля не заполнены',
  'ERR_INVALID_REQUIRED_FIELDS' => 'Необходимые поля неверно заполнены',
  'LBL_FILTER_BY_RELATED_BEAN' => 'Показать только связанных с записью получателей',
  'LBL_RECIPIENTS_HAVE_BEEN_ADDED' => 'Получатели были успешно добавлены.',
  'LBL_ADD_INBOUND_ACCOUNT' => 'Добавить',
  'LBL_ADD_OUTBOUND_ACCOUNT' => 'Добавить',
  'LBL_EMAIL_ACCOUNTS_INBOUND' => 'Параметры учетной записи',
  'LBL_EMAIL_SETTINGS_OUTBOUND_ACCOUNT' => 'SMTP сервер исходящей почты',
  'LBL_EMAIL_SETTINGS_OUTBOUND_ACCOUNTS' => 'SMTP серверы исходящей почты',
  'LBL_EMAIL_SETTINGS_INBOUND_ACCOUNTS' => 'Учетные записи электронной почты',
  'LBL_EMAIL_SETTINGS_INBOUND' => 'Входящие E-mail-сообщения',
  'LBL_EMAIL_SETTINGS_OUTBOUND' => 'Исходящие E-mail-сообщения',
  'LBL_ADD_CC' => 'Добавить копию',
  'LBL_ADD_BCC' => 'Добавить скрытую копию',
  'LBL_ADD_TO_ADDR' => 'Добавить в',
  'LBL_SELECTED_ADDR' => 'Выбрано',
  'LBL_SEND_EMAIL_FAIL_TITLE' => 'Ошибка отправки Е-mail-сообщения',
  'LBL_EMAIL_DETAIL_VIEW_SHOW' => 'показать',
  'LBL_EMAIL_DETAIL_VIEW_MORE' => 'больше',
  'LBL_MORE_OPTIONS' => 'Больше',
  'LBL_LESS_OPTIONS' => 'Меньше',
  'LBL_MAILBOX_TYPE_PERSONAL' => 'Личный',
  'LBL_MAILBOX_TYPE_GROUP' => 'Группа',
  'LBL_MAILBOX_TYPE_GROUP_FOLDER' => 'Группа - авто импорт',
  'LBL_SEARCH_FOR' => 'Найти',
  'LBL_EMAIL_INBOUND_TYPE_HELP' => 'Личная: Учетная запись, к которой Вы имеете доступ. Только Вы можете управлять сообщениями и импортировать их с этой учетной записи. <br />Групповая: Учетная запись, к которой есть доступ у участников указанных команд. Участники команды могут управлять сообщениями и импортировать их с этой учетной записи. <br />Групповая - авто импорт: Учетная запись, к которой есть доступ у участников указанных команд. Сообщения автоматически импортируются как записи.',
  'LBL_ADDRESS_BOOK_SEARCH_HELP' => 'Введите e-mail-адрес, Имя, Фамилию или Контрагента, чтобы найти получателей.',
  'LBL_TEST_SETTINGS' => 'Проверить настройки',
  'LBL_EMPTY_EMAIL_BODY' => 'У этого сообщения нет текста',
  'LBL_TEST_EMAIL_SUBJECT' => 'Тестовое E-mail-сообщение из Sugar',
  'LBL_NO_SUBJECT' => '(нет темы)',
  'LBL_CHECKING_ACCOUNT' => 'Проверка учетной записи',
  'LBL_OF' => 'из',
  'LBL_TEST_EMAIL_BODY' => 'Это электронное письмо было отправлено для проверки информации о сервере исходящих соединение, находящейся в приложении Sugar. Получение данного письма означает, что информация верна.',
  'LBL_MAIL_SMTPUSER' => 'SMTP-логин',
  'LBL_MAIL_SMTPPASS' => 'SMTP-пароль:',
  'LBL_MAIL_SMTPSERVER' => 'SMTP сервер:',
  'LBL_SMTP_SERVER_HELP' => 'Почтовый сервер SMTP может быть использован для исходящей почты. Введите логин и пароль к Вашей учетной записи для использования почтового сервера.',
  'LBL_MISSING_DEFAULT_OUTBOUND_SMTP_SETTINGS' => 'Администратор еще не настроил исходящую учетную запись по умолчанию. Сообщение не отправлено.',
  'LBL_MAIL_SMTPAUTH_REQ' => 'Использовать SMTP-аутентификацию?',
  'LBL_MAIL_SMTPPORT' => 'SMTP-порт',
  'LBL_MAIL_SMTPTYPE' => 'Тип SMTP сервера:',
  'LBL_MAIL_SMTP_SETTINGS' => 'Настройка SMTP-сервера',
  'LBL_CHOOSE_EMAIL_PROVIDER' => 'Выберите почтовую службу:',
  'LBL_YAHOOMAIL_SMTPPASS' => 'Yahoo! - пароль:',
  'LBL_YAHOOMAIL_SMTPUSER' => 'Yahoo! - учетная запись почты:',
  'LBL_GMAIL_SMTPPASS' => 'Gmail - пароль:',
  'LBL_GMAIL_SMTPUSER' => 'Gmail - Emai-адрес:',
  'LBL_EXCHANGE_SMTPPASS' => 'Exchange - пароль:',
  'LBL_EXCHANGE_SMTPUSER' => 'Exchange - логин:',
  'LBL_EXCHANGE_SMTPPORT' => 'Exchange - порт сервера:',
  'LBL_EXCHANGE_SMTPSERVER' => 'Exchange  - сервер:',
);
