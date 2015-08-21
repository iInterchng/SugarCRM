<?php

/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/





if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


	
$mod_strings = array (
  'SOCK_GREETING' => 'Detta är gränssnittet för SugarCRM shemaläggnings service. [ Tillgängliga daemon kommandon: start|restart|shutdown|status ] För att avsluta, skriv \'quit\'. För att stänga av servicen \'shutdown\'.',
  'LBL_REFRESHJOBS' => 'Uppdatera jobb',
  'LBL_POLLMONITOREDINBOXES' => 'Kontrollera inkommande Epost konton',
  'LBL_RUNMASSEMAILCAMPAIGN' => 'Kör nattliga mass epost kampanjer',
  'LBL_POLLMONITOREDINBOXESFORBOUNCEDCAMPAIGNEMAILS' => 'Kör nattlig process för studsad kampanj epost',
  'LBL_PRUNEDATABASE' => 'Rensa databasen den 1:a varje månad',
  'LBL_TRIMTRACKER' => 'Minska ned logg tabeller',
  'LBL_PROCESSWORKFLOW' => 'Genomför workflow uppgifter',
  'LBL_PROCESSQUEUE' => 'Kör schemalagd process för att generera rapporter',
  'LBL_UPDATETRACKERSESSIONS' => 'Uppdatera sessions logg tabeller',
  'LBL_LIST_STATUS' => 'Status:',
  'LBL_MINS' => 'min',
  'LBL_HOURS' => 'hrs',
  'LBL_STATUS' => 'Status',
  'LBL_OOTB_WORKFLOW' => 'Genomför workflow uppgifter',
  'LBL_OOTB_REPORTS' => 'Kör schemalagd process för att generera rapporter',
  'LBL_OOTB_IE' => 'Kontrollera inkommande mailboxar',
  'LBL_OOTB_BOUNCE' => 'Kör nattlig process för studsad kampanj epost',
  'LBL_OOTB_CAMPAIGN' => 'Kör nattliga mass epost kampanjer',
  'LBL_OOTB_PRUNE' => 'Rensa databasen den 1:a varje månad',
  'LBL_OOTB_TRACKER' => 'Rensa användarhistorik den 1:a varje månad',
  'LBL_UPDATE_TRACKER_SESSIONS' => 'Uppdatera tracker_sessions tabellen',
  'LBL_LIST_JOB_INTERVAL' => 'Intervall:',
  'LBL_LIST_LIST_ORDER' => 'Schemaläggare:',
  'LBL_LIST_NAME' => 'Schemaläggare:',
  'LBL_LIST_RANGE' => 'Intervall:',
  'LBL_LIST_REMOVE' => 'Ta bort:',
  'LBL_LIST_TITLE' => 'Lista schema:',
  'LBL_LIST_EXECUTE_TIME' => 'Kommer köras på:',
  'LBL_SUN' => 'Söndag',
  'LBL_MON' => 'Måndag',
  'LBL_TUE' => 'Tisdag',
  'LBL_WED' => 'Onsdag',
  'LBL_THU' => 'Torsdag',
  'LBL_FRI' => 'Fredag',
  'LBL_SAT' => 'Lördag',
  'LBL_ALL' => 'Varje dag',
  'LBL_EVERY_DAY' => 'Varje dag',
  'LBL_AT_THE' => 'Vid',
  'LBL_EVERY' => 'Varje',
  'LBL_FROM' => 'Från',
  'LBL_ON_THE' => 'På',
  'LBL_RANGE' => 'till',
  'LBL_AT' => 'på',
  'LBL_IN' => 'i',
  'LBL_AND' => 'och',
  'LBL_MINUTES' => 'minuter',
  'LBL_HOUR' => 'timmar',
  'LBL_HOUR_SING' => 'timme',
  'LBL_MONTH' => 'månad',
  'LBL_OFTEN' => 'Så ofta som möjligt.',
  'LBL_MIN_MARK' => 'minut markering',
  'LBL_DAY_OF_MONTH' => 'datum',
  'LBL_MONTHS' => 'må',
  'LBL_DAY_OF_WEEK' => 'dag',
  'LBL_CRONTAB_EXAMPLES' => 'Det ovan använder standard crontab notation.',
  'LBL_ALWAYS' => 'Alltid',
  'LBL_CATCH_UP' => 'Exekvera om missat',
  'LBL_CATCH_UP_WARNING' => 'Kryssa ur detta jobb kan ta längre än en stund att köra.',
  'LBL_DATE_TIME_END' => 'Slutdatum & -tid',
  'LBL_DATE_TIME_START' => 'Startdatum & -tid',
  'LBL_INTERVAL' => 'Intervall',
  'LBL_JOB' => 'Jobb',
  'LBL_LAST_RUN' => 'Senast lyckade körningen',
  'LBL_MODULE_NAME' => 'Sugar schemaläggare',
  'LBL_MODULE_TITLE' => 'Schemaläggare',
  'LBL_NAME' => 'Jobbnamn',
  'LBL_NEVER' => 'Aldrig',
  'LBL_NEW_FORM_TITLE' => 'Nytt schema',
  'LBL_PERENNIAL' => 'evig',
  'LBL_SEARCH_FORM_TITLE' => 'Sök schemaläggare',
  'LBL_SCHEDULER' => 'Schemaläggare:',
  'LBL_TIME_FROM' => 'Aktiv från',
  'LBL_TIME_TO' => 'Aktiv till',
  'LBL_WARN_CURL_TITLE' => 'cURL varning:',
  'LBL_WARN_CURL' => 'Varning',
  'LBL_WARN_NO_CURL' => 'Systemet har inte cURL biblioteken aktiverade/kopilerade i PHP modulen  (--with-curl=/path/to/curl_library). Var god kontakta administratören för att lösa problemet. Utan cURL funktionaliteten kan inte shcemaläggaren tråda jobben.',
  'LBL_BASIC_OPTIONS' => 'Enkla inställningar',
  'LBL_ADV_OPTIONS' => 'Avancerade alternativ',
  'LBL_TOGGLE_ADV' => 'Avancerade alternativ',
  'LBL_TOGGLE_BASIC' => 'Enkla alternativ',
  'LNK_LIST_SCHEDULER' => 'Schemaläggare',
  'LNK_NEW_SCHEDULER' => 'Skapa schemaläggning',
  'LNK_LIST_SCHEDULED' => 'Schemalagda jobb',
  'ERR_DELETE_RECORD' => 'Ett objektnummer måste specificeras för att radera schemaläggaren.',
  'ERR_CRON_SYNTAX' => 'Invalidera Cron-syntax',
  'NTC_DELETE_CONFIRMATION' => 'Är du säker på att du vill radera posten?',
  'NTC_STATUS' => 'Sätt status till Inaktiv för att ta bort schemat från Shemaläggarens dropdown meny.',
  'NTC_LIST_ORDER' => 'Sätt ordningen för hur schemaläggningen ska visas i dropdownmenyn över schemaläggning',
  'LBL_CRON_INSTRUCTIONS_WINDOWS' => 'Sätta upp windows schemaläggare',
  'LBL_CRON_INSTRUCTIONS_LINUX' => 'Sätt upp crontab',
  'LBL_CRON_LINUX_DESC' => 'Lägg till denna rad i din crontab:',
  'LBL_CRON_WINDOWS_DESC' => 'Skapa en batch fil med följande kommandon:',
  'LBL_NO_PHP_CLI' => 'If your host does not have the PHP binary available, you can use wget or curl to launch your Jobs.<br>for wget: <b>*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;wget --quiet --non-verbose /cron.php > /dev/null 2>&1</b><br>for curl: <b>*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;curl --silent /cron.php > /dev/null 2>&1',
  'LBL_JOBS_SUBPANEL_TITLE' => 'Jobb logg',
  'LBL_EXECUTE_TIME' => 'Exekveringstid',
);
