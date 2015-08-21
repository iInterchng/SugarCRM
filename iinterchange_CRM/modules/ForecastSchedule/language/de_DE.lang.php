<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

	

$mod_strings = array (
  'LBL_FORECAST_ID' => 'ID',
  'LBL_SVFS_STATUS' => 'Status',
  'LB_FS_KEY' => 'ID',
  'LBL_FS_USER_ID' => 'User ID',
  'LBL_FS_STATUS' => 'Status',
  'LBL_MODULE_NAME' => 'Prognosen',
  'LNK_NEW_OPPORTUNITY' => 'Neue Verkaufschance',
  'LBL_MODULE_TITLE' => 'Prognosen',
  'LBL_LIST_FORM_TITLE' => 'Festgelegte Prognosen',
  'LNK_UPD_FORECAST' => 'Prognose Arbeitsblatt',
  'LNK_QUOTA' => 'Vorgaben',
  'LNK_FORECAST_LIST' => 'Prognose Verlauf',
  'LBL_FORECAST_HISTORY' => 'Prognosen: Verlauf',
  'LBL_FORECAST_HISTORY_TITLE' => 'Prognosen: Verlauf',
  'LBL_TIMEPERIOD_NAME' => 'Zeitraum',
  'LBL_USER_NAME' => 'Benutzername',
  'LBL_REPORTS_TO_USER_NAME' => 'Berichtet an',
  'LBL_FORECAST_TIME_ID' => 'Zeitraum ID',
  'LBL_FORECAST_TYPE' => 'Prognosetyp',
  'LBL_FORECAST_OPP_COUNT' => 'Verkaufschancen',
  'LBL_FORECAST_OPP_WEIGH' => 'Gewichteter Betrag',
  'LBL_FORECAST_OPP_COMMIT' => 'Wahrscheinlicher Fall',
  'LBL_FORECAST_OPP_BEST_CASE' => 'Bester Fall',
  'LBL_FORECAST_OPP_WORST' => 'Schlechtester Fall',
  'LBL_FORECAST_USER' => 'Benutzer',
  'LBL_DATE_COMMITTED' => 'Festgelegtes Datum',
  'LBL_DATE_ENTERED' => 'Datum erstellt',
  'LBL_DATE_MODIFIED' => 'Geändert am',
  'LBL_CREATED_BY' => 'Erstellt von:',
  'LBL_DELETED' => 'Gelöscht',
  'LBL_QC_TIME_PERIOD' => 'Zeitraum:',
  'LBL_QC_OPPORTUNITY_COUNT' => 'Verkaufschancen Zähler:',
  'LBL_QC_WEIGHT_VALUE' => 'Gewichteter Betrag:',
  'LBL_QC_COMMIT_VALUE' => 'Festgelegter Betrag:',
  'LBL_QC_COMMIT_BUTTON' => 'Durchführen',
  'LBL_QC_WORKSHEET_BUTTON' => 'Arbeitsblatt',
  'LBL_QC_ROLL_COMMIT_VALUE' => 'Rollup festgelegter Betrag:',
  'LBL_QC_DIRECT_FORECAST' => 'Mein direkte Prognose:',
  'LBL_QC_ROLLUP_FORECAST' => 'Meine Gruppenprognose:',
  'LBL_QC_UPCOMING_FORECASTS' => 'Meine Prognosen',
  'LBL_QC_LAST_DATE_COMMITTED' => 'Letztes Verpflichtungsdatum:',
  'LBL_QC_LAST_COMMIT_VALUE' => 'Letzter festgelegter Betrag:',
  'LBL_QC_HEADER_DELIM' => 'An',
  'LBL_OW_OPPORTUNITIES' => 'Verkaufschance',
  'LBL_OW_ACCOUNTNAME' => 'Firma',
  'LBL_OW_REVENUE' => 'Betrag',
  'LBL_OW_WEIGHTED' => 'Gewichteter Betrag',
  'LBL_OW_MODULE_TITLE' => 'Verkaufschancen Arbeitsblatt',
  'LBL_OW_PROBABILITY' => 'Wahrscheinlichkeit',
  'LBL_OW_NEXT_STEP' => 'Nächster Schritt',
  'LBL_OW_DESCRIPTION' => 'Beschreibung',
  'LBL_OW_TYPE' => 'Typ:',
  'LNK_NEW_TIMEPERIOD' => 'Zeitraum erstellen',
  'LNK_TIMEPERIOD_LIST' => 'Zeiträume',
  'LBL_SVFS_FORECASTDATE' => 'Startdatum terminieren',
  'LBL_SVFS_USER' => 'Für',
  'LBL_SVFS_CASCADE' => 'Auf Berichte kaskardieren?',
  'LBL_SVFS_HEADER' => 'Prognoseplan:',
  'LBL_FS_TIMEPERIOD_ID' => 'Zeitraum ID',
  'LBL_FS_TIMEPERIOD' => 'Zeitraum',
  'LBL_FS_START_DATE' => 'Startdatum',
  'LBL_FS_END_DATE' => 'Enddatum',
  'LBL_FS_FORECAST_START_DATE' => 'Prognose Startdatum',
  'LBL_FS_FORECAST_FOR' => 'Zeitplan für:',
  'LBL_FS_CASCADE' => 'Kaskardieren?',
  'LBL_FS_MODULE_NAME' => 'Prognoseplan',
  'LBL_FS_CREATED_BY' => 'Erstellt von:',
  'LBL_FS_DATE_ENTERED' => 'Datum erstellt',
  'LBL_FS_DATE_MODIFIED' => 'Geändert am',
  'LBL_FS_DELETED' => 'Gelöscht',
  'LBL_FDR_USER_NAME' => 'Direktbericht',
  'LBL_FDR_OPPORTUNITIES' => 'Verkaufschancen in Prognose:',
  'LBL_FDR_WEIGH' => 'Gewichteter Betrag der Verkaufschancen:',
  'LBL_FDR_COMMIT' => 'Festgelegter Betrag',
  'LBL_FDR_DATE_COMMIT' => 'Festlegungsdatum',
  'LBL_DV_HEADER' => 'Prognosen: Arbeitsblatt',
  'LBL_DV_MY_FORECASTS' => 'Meine Prognosen',
  'LBL_DV_MY_TEAM' => 'Meine Team Prognosen',
  'LBL_DV_TIMEPERIODS' => 'Zeiträume:',
  'LBL_DV_FORECAST_PERIOD' => 'Prognosezeitraum',
  'LBL_DV_FORECAST_OPPORTUNITY' => 'Prognose Verkaufschancen',
  'LBL_SEARCH' => 'Auswählen',
  'LBL_SEARCH_LABEL' => 'Auswählen',
  'LBL_COMMIT_HEADER' => 'Prognose Festlegung',
  'LBL_DV_LAST_COMMIT_DATE' => 'Letztes Verpflichtungsdatum:',
  'LBL_DV_LAST_COMMIT_AMOUNT' => 'Letzten festgelegten Beträge:',
  'LBL_DV_FORECAST_ROLLUP' => 'Rollup Prognose',
  'LBL_DV_TIMEPERIOD' => 'Zeitraum:',
  'LBL_DV_TIMPERIOD_DATES' => 'Datumsbereich:',
  'LBL_LV_TIMPERIOD' => 'Zeitraum',
  'LBL_LV_TIMPERIOD_START_DATE' => 'Startdatum',
  'LBL_LV_TIMPERIOD_END_DATE' => 'Enddatum',
  'LBL_LV_TYPE' => 'Prognosetyp',
  'LBL_LV_COMMIT_DATE' => 'Festgelegtes Datum',
  'LBL_LV_OPPORTUNITIES' => 'Verkaufschancen',
  'LBL_LV_WEIGH' => 'Gewichteter Betrag',
  'LBL_LV_COMMIT' => 'Festgelegter Betrag',
  'LBL_COMMIT_NOTE' => 'Geben Sie Beträge ein, für die Sie sich im gewählten Zeitraum festlegen:',
  'LBL_COMMIT_MESSAGE' => 'Wollen Sie sich für diese Beträge festlegen?',
  'ERR_FORECAST_AMOUNT' => 'Der festgelegte Betrag wird benötigt und muss eine Zahl sein.',
  'LBL_FC_START_DATE' => 'Startdatum',
  'LBL_FC_USER' => 'Zeitplan für',
  'LBL_NO_ACTIVE_TIMEPERIOD' => 'Keine aktiven Zeiträume für Prognostizierung.',
  'LBL_FDR_ADJ_AMOUNT' => 'Angepasster Betrag',
  'LBL_SAVE_WOKSHEET' => 'Arbeitsblatt speichern',
  'LBL_RESET_WOKSHEET' => 'Arbeitsblatt zurücksetzen',
  'LBL_RESET_CHECK' => 'Alle Arbeitsblattdaten für den gewählten Zeitraum und den angemeldeten Benutzer werden entfernt. Fortsetzen?',
  'LB_FS_LIKELY_CASE' => 'Wahrscheinlicher Fall',
  'LB_FS_WORST_CASE' => 'Schlechtester Fall',
  'LB_FS_BEST_CASE' => 'Bester Fall',
  'LBL_FDR_WK_LIKELY_CASE' => 'Gesch. wahrsch. Fall',
  'LBL_FDR_WK_BEST_CASE' => 'Gesch. bester Fall',
  'LBL_FDR_WK_WORST_CASE' => 'Gesch. schlechtester Fall',
  'LBL_BEST_CASE' => 'Bester Fall:',
  'LBL_LIKELY_CASE' => 'Wahrscheinlicher Fall:',
  'LBL_WORST_CASE' => 'Schlechtester Fall:',
  'LBL_FDR_C_BEST_CASE' => 'Bester Fall',
  'LBL_FDR_C_WORST_CASE' => 'Schlechtester Fall',
  'LBL_FDR_C_LIKELY_CASE' => 'Wahrscheinlicher Fall',
  'LBL_QC_LAST_BEST_CASE' => 'Letzter festgelegter Betrag (Bester Fall):',
  'LBL_QC_LAST_LIKELY_CASE' => 'Letzter festgelegter Betrag (Wahrscheinlicher Fall):',
  'LBL_QC_LAST_WORST_CASE' => 'Letzter festgelegter Betrag (Schechtester Fall):',
  'LBL_QC_ROLL_BEST_VALUE' => 'Rollup festgelegter Betrag (Bester Fall):',
  'LBL_QC_ROLL_LIKELY_VALUE' => 'Rollup festgelegter Betrag (Wahrscheinlicher Fall):',
  'LBL_QC_ROLL_WORST_VALUE' => 'Rollup festgelegter Betrag (Schechtester Fall):',
  'LBL_QC_COMMIT_BEST_CASE' => 'Festgelegter Betrag (Bester Fall):',
  'LBL_QC_COMMIT_LIKELY_CASE' => 'Festgelegter Betrag (Wahrscheinlicher Fall):',
  'LBL_QC_COMMIT_WORST_CASE' => 'Festgelegter Betrag (Schlechtester Fall):',
);

