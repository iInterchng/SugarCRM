<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

	

$mod_strings = array (
  'LBL_FORECAST_ID' => 'ID',
  'LB_FS_KEY' => 'ID',
  'LBL_MODULE_NAME' => 'Prognozės',
  'LNK_NEW_OPPORTUNITY' => 'Sukurti pardavimą',
  'LBL_MODULE_TITLE' => 'Prognozės',
  'LBL_LIST_FORM_TITLE' => 'Vykdomos prognozės',
  'LNK_UPD_FORECAST' => 'Prognozių lentelė',
  'LNK_QUOTA' => 'Kvotos',
  'LNK_FORECAST_LIST' => 'Prognozės istorija',
  'LBL_FORECAST_HISTORY' => 'Prognozės: Istorija',
  'LBL_FORECAST_HISTORY_TITLE' => 'Prognozės: Istorija',
  'LBL_TIMEPERIOD_NAME' => 'Laiko periodas',
  'LBL_USER_NAME' => 'Vartotojo vardas',
  'LBL_REPORTS_TO_USER_NAME' => 'Pavaldus kam',
  'LBL_FORECAST_TIME_ID' => 'Laiko periodo ID',
  'LBL_FORECAST_TYPE' => 'Prognozės tipas',
  'LBL_FORECAST_OPP_COUNT' => 'Pardavimai',
  'LBL_FORECAST_OPP_WEIGH' => 'Pasverta suma',
  'LBL_FORECAST_OPP_COMMIT' => 'Greičiausiu atveju',
  'LBL_FORECAST_OPP_BEST_CASE' => 'Geriausiu atveju',
  'LBL_FORECAST_OPP_WORST' => 'Blogiausiu atveju',
  'LBL_FORECAST_USER' => 'Atsakingas',
  'LBL_DATE_COMMITTED' => 'Pavesta',
  'LBL_DATE_ENTERED' => 'Įvesta',
  'LBL_DATE_MODIFIED' => 'Redaguota',
  'LBL_CREATED_BY' => 'Sukūrė',
  'LBL_DELETED' => 'Ištrintas',
  'LBL_QC_TIME_PERIOD' => 'Laiko periodas:',
  'LBL_QC_OPPORTUNITY_COUNT' => 'Pardavimų skaičius:',
  'LBL_QC_WEIGHT_VALUE' => 'Pasverta suma:',
  'LBL_QC_COMMIT_VALUE' => 'Pavesta suma:',
  'LBL_QC_COMMIT_BUTTON' => 'Vykdyti',
  'LBL_QC_WORKSHEET_BUTTON' => 'Lentelė',
  'LBL_QC_ROLL_COMMIT_VALUE' => 'Komandos pavedimo suma:',
  'LBL_QC_DIRECT_FORECAST' => 'Mano tiesioginės prognozės:',
  'LBL_QC_ROLLUP_FORECAST' => 'Mano grupės prognozės',
  'LBL_QC_UPCOMING_FORECASTS' => 'Mano prognozės',
  'LBL_QC_LAST_DATE_COMMITTED' => 'Paskutinė pavedimo data:',
  'LBL_QC_LAST_COMMIT_VALUE' => 'Paskutinė pavedimo suma:',
  'LBL_QC_HEADER_DELIM' => 'Kam',
  'LBL_OW_OPPORTUNITIES' => 'Pardavimas',
  'LBL_OW_ACCOUNTNAME' => 'Klientas',
  'LBL_OW_REVENUE' => 'Suma',
  'LBL_OW_WEIGHTED' => 'Pasverta suma',
  'LBL_OW_MODULE_TITLE' => 'Pardavimų lentelė',
  'LBL_OW_PROBABILITY' => 'Tikimybė',
  'LBL_OW_NEXT_STEP' => 'Kitas žingsnis',
  'LBL_OW_DESCRIPTION' => 'Aprašymas',
  'LBL_OW_TYPE' => 'Tipas',
  'LNK_NEW_TIMEPERIOD' => 'Sukurti laiko periodą',
  'LNK_TIMEPERIOD_LIST' => 'Laiko periodai',
  'LBL_SVFS_FORECASTDATE' => 'Suplanuoti pradžios datą',
  'LBL_SVFS_STATUS' => 'Statusas:',
  'LBL_SVFS_USER' => 'Kam',
  'LBL_SVFS_CASCADE' => 'Rodyti visiems susijusiems vadovams.',
  'LBL_SVFS_HEADER' => 'Prognozės tvarkaraštis:',
  'LBL_FS_TIMEPERIOD_ID' => 'Laiko periodo ID',
  'LBL_FS_USER_ID' => 'Vartotojo ID',
  'LBL_FS_TIMEPERIOD' => 'Laiko periodas',
  'LBL_FS_START_DATE' => 'Pradžios data',
  'LBL_FS_END_DATE' => 'Pabaigos data',
  'LBL_FS_FORECAST_START_DATE' => 'Prognozės pradžios data',
  'LBL_FS_STATUS' => 'Statusas',
  'LBL_FS_FORECAST_FOR' => 'Suplanuota:',
  'LBL_FS_CASCADE' => 'Pakopinis?',
  'LBL_FS_MODULE_NAME' => 'Prognozės planavimas',
  'LBL_FS_CREATED_BY' => 'Sukūrė',
  'LBL_FS_DATE_ENTERED' => 'Sukurta',
  'LBL_FS_DATE_MODIFIED' => 'Redaguota',
  'LBL_FS_DELETED' => 'Ištrintas',
  'LBL_FDR_USER_NAME' => 'Pavaldinys',
  'LBL_FDR_OPPORTUNITIES' => 'Prognozės pardavimai:',
  'LBL_FDR_WEIGH' => 'Pasvertos pardavimų sumos:',
  'LBL_FDR_COMMIT' => 'Pavesta suma',
  'LBL_FDR_DATE_COMMIT' => 'Pavedimo data',
  'LBL_DV_HEADER' => 'Prognozės: Lentelė',
  'LBL_DV_MY_FORECASTS' => 'Mano prognozės',
  'LBL_DV_MY_TEAM' => 'Mano komandos prognozės',
  'LBL_DV_TIMEPERIODS' => 'Laiko periodas:',
  'LBL_DV_FORECAST_PERIOD' => 'Prognozės laiko periodas',
  'LBL_DV_FORECAST_OPPORTUNITY' => 'Suplanuoti pardavimus',
  'LBL_SEARCH' => 'Pasirinkti',
  'LBL_SEARCH_LABEL' => 'Pasirinkti',
  'LBL_COMMIT_HEADER' => 'Prognozės vykdymas',
  'LBL_DV_LAST_COMMIT_DATE' => 'Paskutinė pavedimo data:',
  'LBL_DV_LAST_COMMIT_AMOUNT' => 'Paskutinė pavedimo suma:',
  'LBL_DV_FORECAST_ROLLUP' => 'Prognozė komandai',
  'LBL_DV_TIMEPERIOD' => 'Laiko periodas:',
  'LBL_DV_TIMPERIOD_DATES' => 'Laikotarpis:',
  'LBL_LV_TIMPERIOD' => 'Laiko periodas',
  'LBL_LV_TIMPERIOD_START_DATE' => 'Pradžios data',
  'LBL_LV_TIMPERIOD_END_DATE' => 'Pabaigos data',
  'LBL_LV_TYPE' => 'Prognozės tipas',
  'LBL_LV_COMMIT_DATE' => 'Pavesta',
  'LBL_LV_OPPORTUNITIES' => 'Pardavimai',
  'LBL_LV_WEIGH' => 'Pasverta suma',
  'LBL_LV_COMMIT' => 'Pavesta suma',
  'LBL_COMMIT_NOTE' => 'Prašome įvesti sumą kurią norite pavesti nurodytam laiko periodui:',
  'LBL_COMMIT_MESSAGE' => 'Ar Jūs norite pavesti šias sumas?',
  'ERR_FORECAST_AMOUNT' => 'Pavesta suma yra privaloma ir turi būti skaičius.',
  'LBL_FC_START_DATE' => 'Pradžios data',
  'LBL_FC_USER' => 'Suplanuota:',
  'LBL_NO_ACTIVE_TIMEPERIOD' => 'Nėra prognozei aktyvaus laiko periodo.',
  'LBL_FDR_ADJ_AMOUNT' => 'Pakoreguota suma',
  'LBL_SAVE_WOKSHEET' => 'Saugoti lentelę',
  'LBL_RESET_WOKSHEET' => 'Išvalyti lentelę',
  'LBL_RESET_CHECK' => 'Visi lentelės duomenys nurodytoje laiko periode bus išvalyti. Tęsti?',
  'LB_FS_LIKELY_CASE' => 'Greičiausiu atveju',
  'LB_FS_WORST_CASE' => 'Blogiausiu atveju',
  'LB_FS_BEST_CASE' => 'Geriausiu atveju',
  'LBL_FDR_WK_LIKELY_CASE' => 'Greičiausias atvejis',
  'LBL_FDR_WK_BEST_CASE' => 'Geriausias atvejis',
  'LBL_FDR_WK_WORST_CASE' => 'Blogiausias atvejis',
  'LBL_BEST_CASE' => 'Geriausias atvejis:',
  'LBL_LIKELY_CASE' => 'Greičiausias atvejis:',
  'LBL_WORST_CASE' => 'Blogiausias atvejis:',
  'LBL_FDR_C_BEST_CASE' => 'Geriausiu atveju',
  'LBL_FDR_C_WORST_CASE' => 'Blogiausiu atveju',
  'LBL_FDR_C_LIKELY_CASE' => 'Greičiausiu atveju',
  'LBL_QC_LAST_BEST_CASE' => 'Paskutinė pavesta suma (geriausias atvejis)',
  'LBL_QC_LAST_LIKELY_CASE' => 'Paskutinė pavesta suma (greičiausias atvejis)',
  'LBL_QC_LAST_WORST_CASE' => 'Paskutinė pavesta suma (blogiausias atvejis)',
  'LBL_QC_ROLL_BEST_VALUE' => 'Komandos pavesta suma (geriausias atvejis)',
  'LBL_QC_ROLL_LIKELY_VALUE' => 'Komandos pavesta suma (greičiausias atvejis)',
  'LBL_QC_ROLL_WORST_VALUE' => 'Komandos pavesta suma (blogiausias atvejis)',
  'LBL_QC_COMMIT_BEST_CASE' => 'Pavesta suma (geriausias atvejis)',
  'LBL_QC_COMMIT_LIKELY_CASE' => 'Pavesta suma (greičiausias atvejis)',
  'LBL_QC_COMMIT_WORST_CASE' => 'Pavesta suma (blogiausias atvejis)',
);

