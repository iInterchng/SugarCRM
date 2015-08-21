<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

	

$mod_strings = array (
  'LBL_QC_HEADER_DELIM' => 'Komu',
  'LBL_RESET_CHECK' => 'Všechna data pracovního listu pro zvolené časové období a přihlášeného uživatele, budou odstraněny. Pokračovat?',
  'LBL_FORECAST_ID' => 'ID',
  'LB_FS_KEY' => 'ID',
  'LBL_FMT_DIRECT_FORECAST' => '(Direct)',
  'LBL_MODULE_NAME' => 'Předpovědi',
  'LNK_NEW_OPPORTUNITY' => 'Vytvořit obchod',
  'LBL_MODULE_TITLE' => 'Předpovědi',
  'LBL_LIST_FORM_TITLE' => 'Závazná prognóza',
  'LNK_UPD_FORECAST' => 'List předpovědí',
  'LNK_QUOTA' => 'zobrazit obchody',
  'LNK_FORECAST_LIST' => 'Přehled histore Forecast',
  'LBL_FORECAST_HISTORY' => 'Předpovědi: Historie',
  'LBL_FORECAST_HISTORY_TITLE' => 'Historie',
  'LBL_TIMEPERIOD_NAME' => 'Časové období',
  'LBL_USER_NAME' => 'Uživatelské jméno',
  'LBL_REPORTS_TO_USER_NAME' => 'Referovat (komu)',
  'LBL_FORECAST_TIME_ID' => 'Časové období ID',
  'LBL_FORECAST_TYPE' => 'Typ předpovědi',
  'LBL_FORECAST_OPP_COUNT' => 'Obchody',
  'LBL_FORECAST_OPP_WEIGH' => 'Vážená částka',
  'LBL_FORECAST_OPP_COMMIT' => 'Pravděpodobný případ',
  'LBL_FORECAST_OPP_BEST_CASE' => 'Nejlepší případ',
  'LBL_FORECAST_OPP_WORST' => 'Nejhorší případ',
  'LBL_FORECAST_USER' => 'Uživatel',
  'LBL_DATE_COMMITTED' => 'Datum schválení',
  'LBL_DATE_ENTERED' => 'Datum vložení',
  'LBL_DATE_MODIFIED' => 'Datum úpravení',
  'LBL_CREATED_BY' => 'Vytvořeno',
  'LBL_DELETED' => 'Smazáno',
  'LBL_MODIFIED_USER_ID' => 'Upraveno',
  'LBL_QC_TIME_PERIOD' => 'Časové období:',
  'LBL_QC_OPPORTUNITY_COUNT' => 'Počet obchodů:',
  'LBL_QC_WEIGHT_VALUE' => 'Vážená částka:',
  'LBL_QC_COMMIT_VALUE' => 'Schválit částku:',
  'LBL_QC_COMMIT_BUTTON' => 'Schválit',
  'LBL_QC_WORKSHEET_BUTTON' => 'List',
  'LBL_QC_ROLL_COMMIT_VALUE' => 'Kumulativní schálená částka',
  'LBL_QC_DIRECT_FORECAST' => 'Moje přímá předpověď:',
  'LBL_QC_ROLLUP_FORECAST' => 'Moje skupinová předpověď:',
  'LBL_QC_UPCOMING_FORECASTS' => 'Moje předpověďi',
  'LBL_QC_LAST_DATE_COMMITTED' => 'Datum posledního schválení:',
  'LBL_QC_LAST_COMMIT_VALUE' => 'Posledná závazná částka:',
  'LBL_OW_OPPORTUNITIES' => 'Obchod',
  'LBL_OW_ACCOUNTNAME' => 'Společnost',
  'LBL_OW_REVENUE' => 'Částka',
  'LBL_OW_WEIGHTED' => 'Vážený Počet',
  'LBL_OW_MODULE_TITLE' => 'List obchodů',
  'LBL_OW_PROBABILITY' => 'Pravděpodobnost',
  'LBL_OW_NEXT_STEP' => 'Další krok',
  'LBL_OW_DESCRIPTION' => 'Popis',
  'LBL_OW_TYPE' => 'Typ',
  'LNK_NEW_TIMEPERIOD' => 'Vytvoření časového období',
  'LNK_TIMEPERIOD_LIST' => 'Zobrazit časové periody',
  'LBL_SVFS_FORECASTDATE' => 'Naplánovat datum startu',
  'LBL_SVFS_STATUS' => 'Stav',
  'LBL_SVFS_USER' => 'Pro',
  'LBL_SVFS_CASCADE' => 'Kaskádně k Reportům?',
  'LBL_SVFS_HEADER' => 'Plán předpovědí:',
  'LBL_FS_TIMEPERIOD_ID' => 'ID časového období',
  'LBL_FS_USER_ID' => 'ID uživatele',
  'LBL_FS_TIMEPERIOD' => 'Časového období',
  'LBL_FS_START_DATE' => 'Datum zahájení',
  'LBL_FS_END_DATE' => 'Datum ukončení',
  'LBL_FS_FORECAST_START_DATE' => 'Předpověď datumu zahájení',
  'LBL_FS_STATUS' => 'Stav',
  'LBL_FS_FORECAST_FOR' => 'Plán na:',
  'LBL_FS_CASCADE' => 'Kaskádovat?',
  'LBL_FS_MODULE_NAME' => 'Plán předpovědí',
  'LBL_FS_CREATED_BY' => 'Vytvořeno',
  'LBL_FS_DATE_ENTERED' => 'Datum vložení',
  'LBL_FS_DATE_MODIFIED' => 'Datum upravení',
  'LBL_FS_DELETED' => 'Smazáno',
  'LBL_FDR_USER_NAME' => 'Přímý report',
  'LBL_FDR_OPPORTUNITIES' => 'Obchody v předpovědi:',
  'LBL_FDR_WEIGH' => 'Vážený Počet ochodů:',
  'LBL_FDR_COMMIT' => 'Schválený počet',
  'LBL_FDR_DATE_COMMIT' => 'Datum schválení',
  'LBL_DV_HEADER' => 'Předpovědi: list',
  'LBL_DV_MY_FORECASTS' => 'Moje předpovědi',
  'LBL_DV_MY_TEAM' => 'Předpovědi mého týmu',
  'LBL_DV_TIMEPERIODS' => 'Časová období:',
  'LBL_DV_FORECAST_PERIOD' => 'Předpověď časové období',
  'LBL_DV_FORECAST_OPPORTUNITY' => 'Předpověď obchodů',
  'LBL_SEARCH' => 'Zvolit',
  'LBL_SEARCH_LABEL' => 'Zvolit',
  'LBL_COMMIT_HEADER' => 'Schválit předpověď',
  'LBL_DV_LAST_COMMIT_DATE' => 'Poslední datum schválení:',
  'LBL_DV_LAST_COMMIT_AMOUNT' => 'Poslední schválené množství:',
  'LBL_DV_FORECAST_ROLLUP' => 'Kumulativní prognóza',
  'LBL_DV_TIMEPERIOD' => 'Časové období:',
  'LBL_DV_TIMPERIOD_DATES' => 'Časové rozpětí:',
  'LBL_LV_TIMPERIOD' => 'Časové období',
  'LBL_LV_TIMPERIOD_START_DATE' => 'Počáteční datum',
  'LBL_LV_TIMPERIOD_END_DATE' => 'Datum ukončení',
  'LBL_LV_TYPE' => 'Typ prognózy',
  'LBL_LV_COMMIT_DATE' => 'Datum schválení',
  'LBL_LV_OPPORTUNITIES' => 'Příležitosti',
  'LBL_LV_WEIGH' => 'Vážený Počet',
  'LBL_LV_COMMIT' => 'Závazný Počet',
  'LBL_COMMIT_NOTE' => 'Zadejte částky, které byste chtěli zavázat ve vybraném časovém období:',
  'LBL_COMMIT_MESSAGE' => 'Chcete se zavázat k těmto částkám?',
  'ERR_FORECAST_AMOUNT' => 'Závazný Počet je povinné číselný údaj.',
  'LBL_FC_START_DATE' => 'Počáteční datum',
  'LBL_FC_USER' => 'Plán pro',
  'LBL_NO_ACTIVE_TIMEPERIOD' => 'Žádné aktivní časové období pro prognózy.',
  'LBL_FDR_ADJ_AMOUNT' => 'Upravená částka',
  'LBL_SAVE_WOKSHEET' => 'Uložit pracovní list',
  'LBL_RESET_WOKSHEET' => 'Promazat pracovní list',
  'LBL_SHOW_CHART' => 'Prohlédnout tabulku',
  'LB_FS_LIKELY_CASE' => 'Pravděpodobný případ',
  'LB_FS_WORST_CASE' => 'Nejhorší případ',
  'LB_FS_BEST_CASE' => 'Nejlepší případ',
  'LBL_FDR_WK_LIKELY_CASE' => 'Odhadovaný nejpravděpodobnejší případ',
  'LBL_FDR_WK_BEST_CASE' => 'Odhadovaný nejlepší případ',
  'LBL_FDR_WK_WORST_CASE' => 'Odhadovaný nejhorší případ',
  'LBL_BEST_CASE' => 'Nejlepší případ:',
  'LBL_LIKELY_CASE' => 'Pravděpodobný případ:',
  'LBL_WORST_CASE' => 'Nejhorší případ:',
  'LBL_FDR_C_BEST_CASE' => 'Nejlepší případ',
  'LBL_FDR_C_WORST_CASE' => 'Nejhorší případ',
  'LBL_FDR_C_LIKELY_CASE' => 'Pravděpodobný případ',
  'LBL_QC_LAST_BEST_CASE' => 'Posledná závazná částka (Nejlepší případ):',
  'LBL_QC_LAST_LIKELY_CASE' => 'Posledná závazná částka  (Pravděpodobný případ):',
  'LBL_QC_LAST_WORST_CASE' => 'Posledná závazná částka  (Nejhorší případ):',
  'LBL_QC_ROLL_BEST_VALUE' => 'Kumulativní závazná částka (Nejlepší případ):',
  'LBL_QC_ROLL_LIKELY_VALUE' => 'Kumulativní závazná částka (Pravděpodobný případ):',
  'LBL_QC_ROLL_WORST_VALUE' => 'Kumulativní závazná částka (Nejhorší případ):',
  'LBL_QC_COMMIT_BEST_CASE' => 'Závazná částka (Nejlepší případ):',
  'LBL_QC_COMMIT_LIKELY_CASE' => 'Závazná částka (Pravděpodobný případ):',
  'LBL_QC_COMMIT_WORST_CASE' => 'Závazná částka (Nejhorší případ):',
  'LBL_FORECAST_FOR' => 'List prognózy pro:',
  'LBL_FMT_ROLLUP_FORECAST' => '(Kumulativní)',
  'LBL_GRAPH_TITLE' => 'Historie předpovědi',
  'LBL_GRAPH_QUOTA_ALTTEXT' => 'Kvóta pro %s',
  'LBL_GRAPH_COMMIT_ALTTEXT' => 'Přidělené částky pro %s',
  'LBL_GRAPH_OPPS_ALTTEXT' => 'Hodnota uzavřených obchodů v %s',
  'LBL_GRAPH_QUOTA_LEGEND' => 'Kvóta:',
  'LBL_GRAPH_COMMIT_LEGEND' => 'Závazná Prognóza',
  'LBL_GRAPH_OPPS_LEGEND' => 'Uzavřená Příležitost',
  'LBL_TP_QUOTA' => 'Kvóta:',
  'LBL_CHART_FOOTER' => 'Historie Prognóz',
  'LBL_TOTAL_VALUE' => 'Ceklem:',
  'LBL_COPY_AMOUNT' => 'Celková částka',
  'LBL_COPY_WEIGH_AMOUNT' => 'Celkový vážený počet',
  'LBL_WORKSHEET_AMOUNT' => 'Celkový očekávaný počet',
  'LBL_COPY' => 'Kopírovat hodnoty',
  'LBL_COMMIT_AMOUNT' => 'Celkový závazný počet',
  'LBL_COPY_FROM' => 'Kopírovat hodnoty z:',
  'LBL_CHART_TITLE' => 'Kvóta vs. závazné vs. aktuální',
);

