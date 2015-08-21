<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

	

$mod_strings = array (
  'LBL_FORECAST_REPORTS' => 'Reporty předpovědí',
  'DEFAULT_REPORT_TITLE_19' => 'Mé statistiky použití (Dnes)',
  'DEFAULT_REPORT_TITLE_20' => 'Mé statistiky použití (Posledních 7 dnů)',
  'DEFAULT_REPORT_TITLE_21' => 'Mé statistiky použití (Posledních 30 dnů)',
  'DEFAULT_REPORT_TITLE_25' => 'Statistiky použití (Posledních 7 dnů)',
  'DEFAULT_REPORT_TITLE_26' => 'Statistiky použití (Posledních 30 dnů)',
  'DEFAULT_REPORT_TITLE_27' => 'Moduly využívané Vašimi podřízenými (Posledních 30 dnů)',
  'DEFAULT_REPORT_TITLE_31' => 'Mé nedávno změněné záznamy (Posledních 30 dnů)',
  'DEFAULT_REPORT_TITLE_32' => 'Změněné záznamy Vašimi podřízenými (Posledních 30 dnů)',
  'DEFAULT_REPORT_TITLE_41' => 'Aktivní uživatelé (Posledních 7 dnů)',
  'DEFAULT_REPORT_TITLE_42' => 'Přehled uživatelských připojení (Posledních 7 dnů)',
  'DEFAULT_REPORT_TITLE_43' => 'Vlastníci Zakazníka',
  'DEFAULT_REPORT_TITLE_44' => 'Moji nový zákazníci',
  'DEFAULT_REPORT_TITLE_50' => 'Obchody vyhrané (By Account)',
  'DEFAULT_REPORT_TITLE_51' => 'Obchody vyhrané uživatelem',
  'LBL_MAXIMUM_3_GROUP_BY' => 'Maticový report nemůže mít více než 3 agregační klauzule (group-by clauses)',
  'LBL_MINIMUM_2_GROUP_BY' => 'Maticový report musí mít nejméně 2 agregační klauzule (group-by clauses)',
  'LBL_FILTERS_HELP_DESC' => 'Kroky pro definici filtrů:<br />1, Vyberte modul v Souvisejících modulech pro definici filtru. Primární modul bude nastaven jako výchozí.<br />2, Vyberte pole v Dostupných polích pro přidání do filtru. Můžete vyhledat pole přimo v textové oblasti.<br />3, Vyberte AND nebo OR pro určení zdali filtr využívá všechny nebo jakoukoliv z podmínek.<br />4, [Nepovinné] Můžete Vytvořit skupinu filtrů a jakkoliv je větvit.<br />5, [Nepovinné] Vyberte možnost Run-time čímž umožníte uživatelům další upravy filtrů.',
  'LBL_EXPORT' => 'Export',
  'LBL_PDF_TIMESTAMP' => 'Y_m_d_H_i',
  'LBL_CSV_TIMESTAMP' => 'Y_m_d_H_i_s',
  'LBL_REPORT_RESET_FILTER' => 'Reset',
  'LBL_RUN_REPORT_BUTTON_KEY' => 'R',
  'LBL_MAX' => 'MAX',
  'LBL_MIN' => 'MIN',
  'LBL_QUARTER_ABBREVIATION' => 'Q',
  'LBL_RUN_TIME_LABEL' => 'Run-time',
  'LBL_1X2' => '1 X 2',
  'LBL_2X1' => '2 X 1',
  'LBL_MODULE_NAME' => 'Reporty',
  'LBL_REPORT_MODULES' => 'Moduly reportů',
  'LBL_REPORT_ATT_MODULES' => 'Moduly',
  'LBL_REPORT_EXPAND_ALL' => 'Rozbalit všechny',
  'LBL_REPORT_COLLAPSE_ALL' => 'Zabalit všechny',
  'LBL_REPORT_SHOW_CHART' => 'Zobrazit graf',
  'LBL_REPORT_HIDE_CHART' => 'Schovat graf',
  'LBL_REPORT_SHOW_DETAILS' => 'Zobrazit detaily',
  'LBL_REPORT_HIDE_DETAILS' => 'Schovat detaily',
  'LNK_NEW_CONTACT' => 'Vytvořit kontakt',
  'LNK_NEW_ACCOUNT' => 'Vytvořit společnost',
  'LNK_NEW_OPPORTUNITY' => 'Vytvořit obchod',
  'LNK_NEW_CASE' => 'Vytvořit případ',
  'LNK_NEW_NOTE' => 'Vytvořit poznámku nebo přílohu',
  'LNK_NEW_CALL' => 'Log hovorů',
  'LNK_NEW_EMAIL' => 'Archivovat E-mail',
  'LNK_NEW_MEETING' => 'Harmonogram jednání',
  'LNK_NEW_TASK' => 'Vytvořit úkol',
  'LBL_REPORTS' => 'Reporty',
  'LBL_TITLE' => 'Název',
  'LBL_UNTITLED' => 'bez názvu',
  'LBL_MODULE' => 'Modul',
  'LBL_ACCOUNTS' => 'Společnosti',
  'LBL_OPPORTUNITIES' => 'Obchody',
  'LBL_CONTACTS' => 'Kontakty',
  'LBL_LEADS' => 'Příležitosti',
  'LBL_ACCOUNT' => 'Společnost',
  'LBL_OPPORTUNITY' => 'Obchod',
  'LBL_CONTACT' => 'Kontakt',
  'LBL_LEAD' => 'Příležitost',
  'LBL_DELETE_ERROR' => 'Pouze majitelé reportů a administrátoři mobou odstranit reporty.',
  'LBL_ROWS_AND_COLUMNS_REPORT' => 'Řádky a sloupce reportů',
  'LBL_ROWS_AND_COLUMNS_REPORT_DESC' => 'Vytvořit tabulkový report který bude obsahovat hodnoty vybraných polí pro záznamy odpovídající specifickým kritériím.',
  'LBL_SUMMATION_REPORT' => 'Shrnutí reportu',
  'LBL_SUMMATION_REPORT_DESC' => 'Vytvořit tabulkový report který poskytne vypočtené údaje pro záznamy odpovídající specifickým kritériím. Data mohou být zobrazena také ve grafu.',
  'LBL_MATRIX_REPORT' => 'Matrix report',
  'LBL_MATRIX_REPORT_DESC' => 'Vytvoření shrnutí reportů, které zobrazuje výsledky v mřížce a seskupené podle maximálně tří polí.',
  'LBL_SUMMATION_REPORT_WITH_DETAILS_DESC' => 'Vytvoření shrnutí reportů, které zobrazuje další údaje týkající se záznamů ve výsledcích.',
  'LBL_SUMMATION_REPORT_WITH_DETAILS' => 'Skrnuí reportů s detaily',
  'LBL_SHOW_QUERY' => 'Zobrazení dotazu',
  'LBL_DO_ROUND' => 'Zaokrouhlit čísla nad 100000',
  'LBL_SAVE_AS' => 'Uložit jako',
  'LBL_FILTERS' => 'Filtry',
  'LBL_NO_CHART_DRAWN_MESSAGE' => 'Graf nemůže být vypracován z důvodu nedostatečných údajů',
  'LBL_RUNTIME_FILTERS' => 'Runtime Filters',
  'LBL_VIEWER_RUNTIME_HELP' => 'Specify values for <b>Runtime Filters</b> and click the <b>Apply Filters</b> button to re-run the report.',
  'LBL_REPORT_RESULTS' => 'Výsledky',
  'LBL_REPORT_RESULTS_MESSAGE' => 'Klikněte na "Spustit report" pro zobrazení výsledků.',
  'LBL_REPORT_FILTER_MODIFIED_MESSAGE' => 'Filtry reportu byly změněny od posledního spuštění.',
  'LBL_REPORT_MODIFIED_MESSAGE' => 'Report byl změněn od posledního spuštění.',
  'LBL_ADD_NEW_FILTER' => 'Přidat nový filtr',
  'LBL_DISPLAY_COLUMNS' => 'Zobrazit sloupce',
  'LBL_SUMMARY_COLUMNS' => 'Souhrn sloupců',
  'LBL_HIDE_COLUMNS' => 'Schovat sloupce',
  'LBL_SUBMIT_QUERY' => 'Odeslad dotaz',
  'LBL_QUERY' => 'Dotaz',
  'LBL_CHANGE' => 'Změnit',
  'LBL_REMOVE' => 'Odstranit',
  'LBL_CREATE_CUSTOM_REPORT' => 'Průvodce reporty',
  'LBL_CREATE_REPORT' => 'Vytvořit report',
  'LBL_MY_SAVED_REPORTS' => 'Moje uložené reporty',
  'LBL_MY_TEAMS_REPORTS' => 'Reporty mého týmu',
  'LBL_REPORT_NAME' => 'Jméno reportu',
  'LBL_REPORT_ATT_NAME' => 'Jméno',
  'LBL_CURRENT_QUARTER_FORECAST' => 'Aktuální čtvrtletí předpověď',
  'LBL_ALL_PUBLISHED_REPORTS' => 'Všechny publikované reporty',
  'LBL_DETAILED_FORECAST' => 'Podrobná předpověď',
  'LBL_PARTNER_ACCOUNT_LIST' => 'Seznam partnerských společností',
  'LBL_CUSTOMER_ACCOUNT_LIST' => 'Seznam zákazníckých účtů',
  'LBL_CALL_LIST_BY_LAST_DATE_CONTACTED' => 'Seznam volání o datumu posledního kontaktovaného',
  'LBL_OPPORTUNITIES_BY_LEAD_SOURCE' => 'Obchody podle zdroje příležitosti',
  'LBL_CURRENT_QUARTER_COMMITTED_DEALS' => 'Odsouhlasené obchody aktuálního čtvrtletí',
  'LBL_VIEW' => 'zobrazit',
  'LBL_DELETE' => 'Smazat',
  'LBL_PUBLISH' => 'zveřejnit',
  'LBL_UN_PUBLISH' => 'zneveřejnit',
  'LBL_SCHEDULE_REPORT' => 'Plán reportů',
  'LBL_START_DATE' => 'Datum zahájení',
  'LBL_END_DATE' => 'Datm ukončení',
  'LBL_FILTER_DATE_RANGE_START' => 'Z',
  'LBL_FILTER_DATE_RANGE_FINISH' => 'Do',
  'LBL_SELECT_RECORD' => 'Vybrat záznam',
  'LBL_TIME_INTERVAL' => 'Časový interval',
  'LBL_SCHEDULE_ACTIVE' => 'Aktivní',
  'LBL_SCHEDULE_EMAIL' => 'Naplánovat reporty',
  'LBL_NEXT_RUN' => 'Další e-mail',
  'LBL_UPDATE_SCHEDULE' => 'Obnovit plán',
  'LBL_YOU_HAVE_NO_SAVED_REPORTS.' => 'Nemáte žádné uložené reporty.',
  'LBL_MY_REPORTS' => 'Moje reporty',
  'LBL_ACCOUNT_REPORTS' => 'Reporty společností',
  'LBL_CONTACT_REPORTS' => 'Reporty kontaktů',
  'LBL_OPPORTUNITY_REPORTS' => 'Reporty obchodl',
  'LBL_CASE_REPORTS' => 'Reporty případů',
  'LBL_BUG_REPORTS' => 'Reporty chyb',
  'LBL_LEAD_REPORTS' => 'Reporty příležitostí',
  'LBL_QUOTE_REPORTS' => 'Reporty dotazů',
  'LBL_CALL_REPORTS' => 'Reporty volání',
  'LBL_MEETING_REPORTS' => 'Reporty schůzek',
  'LBL_TASK_REPORTS' => 'Reporty úkolů',
  'LBL_EMAIL_REPORTS' => 'Reporty e-mailů',
  'LBL_ALL_REPORTS' => 'Reporty zobrazení',
  'LBL_ACTIVITIES_REPORTS' => 'Reporty aktivit',
  'LBL_CHART_TYPE' => 'Typ grafu',
  'LBL_NO_REPORTS' => 'Žádný výsledek.',
  'LBL_SAVED_SEARCH' => 'Uložené hledání a rozvržení',
  'LBL_MY_TEAM_ACCOUNT_REPORTS' => 'Reporty společností mého týmu',
  'LBL_MY_TEAM_OPPORTUNITY_REPORTS' => 'Reporty obchodů mého týmu',
  'LBL_MY_TEAM_CONTACT_REPORTS' => 'Reporty kontaktů mého týmu',
  'LBL_MY_TEAM_CASE_REPORTS' => 'Reporty případů mého týmu',
  'LBL_MY_TEAM_BUG_REPORTS' => 'Reporty chyb mého týmu',
  'LBL_MY_TEAM_LEAD_REPORTS' => 'Reporty příležitostí mého týmu',
  'LBL_MY_TEAM_QUOTE_REPORTS' => 'Reporty dotazů mého týmu',
  'LBL_MY_TEAM_CALL_REPORTS' => 'Reporty hovorů mého týmu',
  'LBL_MY_TEAM_MEETING_REPORTS' => 'Reporty schůzek mého týmu',
  'LBL_MY_TEAM_TASK_REPORTS' => 'Reporty úkolů mého týmu',
  'LBL_MY_TEAM_EMAIL_REPORTS' => 'Reporty e-malů mého týmu',
  'LBL_MY_TEAM_FORECAST_REPORTS' => 'Reporty předpovědí mého týmu',
  'LBL_MY_TEAM_PROSPECT_REPORTS' => 'Cílové reporty mého týmu',
  'LBL_MY_TEAM_CONTRACT_REPORTS' => 'Reporty kontaktů mého týmu',
  'LBL_MY_TEAM_PROJECT_TASK_REPORTS' => 'Reporty projektů mého týmu',
  'LBL_MY_ACCOUNT_REPORTS' => 'Reporty mého účtu',
  'LBL_MY_OPPORTUNITY_REPORTS' => 'Reporty mých obchodů',
  'LBL_MY_CONTACT_REPORTS' => 'Reporty mých kontaků',
  'LBL_MY_CASE_REPORTS' => 'Reporty mých případů',
  'LBL_MY_BUG_REPORTS' => 'Reporty mých chyb',
  'LBL_MY_LEAD_REPORTS' => 'Reporty mých příležitostí',
  'LBL_MY_QUOTE_REPORTS' => 'Reporty mých dotazů',
  'LBL_MY_CALL_REPORTS' => 'Reporty mých hovorů',
  'LBL_MY_MEETING_REPORTS' => 'Reporty mých schůzek',
  'LBL_MY_TASK_REPORTS' => 'Reporty mých úkolů',
  'LBL_MY_EMAIL_REPORTS' => 'Reporty mých e-mailů',
  'LBL_MY_FORECAST_REPORTS' => 'Reporty mých předpovědí',
  'LBL_OF' => 'z',
  'LBL_SUCCESS_REPORT' => 'ÚSPĚCH: Report',
  'LBL_MY_PROSPECT_REPORTS' => 'Moje cílové reporty',
  'LBL_WAS_SAVED' => 'byl uložen',
  'LBL_FAILURE_REPORT' => 'CHYBA: Report',
  'LBL_WAS_NOT_SAVED' => 'nebyl uložen',
  'LBL_EQUALS' => 'Rovná',
  'LBL_LESS_THAN' => 'Méně než',
  'LBL_GREATER_THAN' => 'Více než',
  'LBL_DOES_NOT_EQUAL' => 'Se nerovná',
  'LBL_ON' => 'Na',
  'LBL_BEFORE' => 'Před',
  'LBL_AFTER' => 'Po',
  'LBL_IS_BETWEEN' => 'Ne mezi',
  'LBL_NOT_ON' => 'Ne na',
  'LBL_CONTAINS' => 'Obsahuje',
  'LBL_DOES_NOT_CONTAIN' => 'Neobsahuje',
  'LBL_STARTS_WITH' => 'Začíná',
  'LBL_ENDS_WITH' => 'Končí',
  'LBL_TO_PDF' => 'Uložit jako PDF',
  'LBL_IS' => 'Je',
  'LBL_IS_NOT' => 'Není',
  'LBL_ONE_OF' => 'One Of',
  'LBL_IS_NOT_ONE_OF' => 'Není jeden z',
  'LBL_ANY' => 'Jakýkoli',
  'LBL_ALL' => 'Alespoň',
  'LBL_EXACT' => 'Přesný',
  'MSG_UNABLE_PUBLISH_ANOTHER' => 'Nelze zveřejnit. Je zde jiný zveřejnění report se stejným jménem.',
  'MSG_UNABLE_PUBLISH_YOU_OWN' => 'Nelze zneveřejnit report jiného uživatele. Vlastníte report se stejným jménem.',
  'LBL_PUBLISHED_ACCOUNT_REPORTS' => 'Publikované reporty společnosti',
  'LBL_PUBLISHED_CONTACT_REPORTS' => 'Publikované reporty konktu',
  'LBL_PUBLISHED_OPPORTUNITY_REPORTS' => 'Publikované reporty obchodů',
  'LBL_PUBLISHED_CASE_REPORTS' => 'Publikované reporty případů',
  'LBL_PUBLISHED_BUG_REPORTS' => 'Publikované reporty chyb',
  'LBL_PUBLISHED_LEAD_REPORTS' => 'Publikované reporty příležitostí',
  'LBL_PUBLISHED_QUOTE_REPORTS' => 'Publikované reporty nabídek',
  'LBL_PUBLISHED_CALL_REPORTS' => 'Publikované reporty hovorů',
  'LBL_PUBLISHED_MEETING_REPORTS' => 'Publikované reporty schůzek',
  'LBL_PUBLISHED_TASK_REPORTS' => 'Publikované reporty úkolů',
  'LBL_PUBLISHED_EMAIL_REPORTS' => 'Publikované reporty e-mailů',
  'LBL_PUBLISHED_FORECAST_REPORTS' => 'Publikované reporty předpovědí',
  'LBL_PUBLISHED_PROSPECT_REPORTS' => 'Publikované cílové reporty',
  'LBL_THERE_ARE_NO_REPORTS_OF_THIS_TYPE' => 'Neexistjí žádné reporty tohoto typu',
  'LBL_AND' => 'a',
  'LBL_MISSING_FIELDS' => 'Chybějící pole',
  'LBL_AT_LEAST_ONE_DISPLAY_COLUMN' => 'Vyberte alespoň zobrazení jednoho sloupce',
  'LBL_MISSING_INPUT_VALUE' => 'chybějící vstupní hodnota.',
  'LBL_MISSING_SECOND_INPUT_VALUE' => 'chybějící druhá vstupní hodnota.',
  'LBL_NOTHING_WAS_SELECTED' => 'nic nebylo označeno.',
  'LBL_TOTAL' => 'Celkem',
  'LBL_MODULE_NAME_SAVED' => 'Jméno modulu',
  'LBL_REPORT_TYPE' => 'Typ reportu',
  'LBL_REPORT_LAST_RUN_DATE' => 'K dispozici na',
  'LBL_REPORT__ATT_TYPE' => 'Typ',
  'LBL_REPORT_RUN_WITH_FILTER' => 'Aplikovat',
  'LBL_DISPLAY_SUMMARIES' => 'Zvolte zobrazení shrnutí',
  'LBL_HIDE_SUMMARIES' => 'Schovat shrnutí',
  'LBL_RUN_BUTTON_TITLE' => 'Spustit report [Alt+R]',
  'LBL_RUN_REPORT_BUTTON_LABEL' => 'Spustit report',
  'LBL_DUPLICATE_AS_ORIGINAL' => 'Jak původní typ',
  'LBL_DUPLICATE_AS_ROWS_AND_COLS' => 'Jako řádky a sloupce',
  'LBL_DUPLICATE_AS_SUMMATON' => 'Jako shrnutí',
  'LBL_DUPLICATE_AS_SUMMATION_DETAILS' => 'Jako shrnutí s podrobnostmi',
  'LBL_SUMMATION_WITH_DETAILS' => 'Shrnutí s podrobnostmi',
  'LBL_DUPLICATE_AS_MATRIX' => 'Jako Matrix',
  'LBL_SAVE_RUN' => 'Uložit a spustit',
  'LBL_WITH_DETAILS' => 'S podrobnostmi',
  'LBL_CHOOSE_COLUMNS' => 'Zvolte sloupce k zobrazení',
  'LBL_CHOOSE_SUMMARIES' => 'Vyberte shrnutí pro zobrazení',
  'LBL_GROUP_BY' => 'Seskupit podle',
  'LBL_ADD_COLUMN' => 'Přidat sloupec',
  'LBL_GRAND_TOTAL' => 'Celkový součet',
  'LBL_SEARCH_FORM_TITLE' => 'Seznam reportů',
  'LBL_MY_PROJECT_TASK_REPORTS' => 'Reporty mých projektovách úkolů',
  'LBL_PUBLISHED_PROJECT_TASK_REPORTS' => 'Reporty publikovaných projektových úkolů',
  'LBL_PROJECT_TASK_REPORTS' => 'Reporty projektového úkolu',
  'LBL_WEIGHTED_AVG_AMOUNT' => 'Vážená průměrná částka',
  'LBL_WEIGHTED_SUM_AMOUNT' => 'Vážená sečtená částka',
  'ERR_SELECT_COLUMN' => 'Prosím vyberte zobrazení sloupců první.',
  'LBL_BY_MONTH' => 'Podle měsíce',
  'LBL_BY_YEAR' => 'Podle roku',
  'LBL_BY_QUARTER' => 'Podle čtvrtletí',
  'LBL_COUNT' => 'Součet',
  'LBL_SUM' => 'SOUČET',
  'LBL_AVG' => 'PRŮMĚR',
  'LBL_MONTH' => 'Měsíc',
  'LBL_YEAR' => 'Rok',
  'LBL_QUARTER' => 'Čtvrtletí',
  'LBL_YESTERDAY' => 'Včera',
  'LBL_TODAY' => 'Dnes',
  'LBL_TOMORROW' => 'Zítra',
  'LBL_LAST_WEEK' => 'Minulý týden',
  'LBL_NEXT_WEEK' => 'Příští týden',
  'LBL_LAST_7_DAYS' => 'Minulých 7 dní',
  'LBL_NEXT_7_DAYS' => 'Příštích 7 dní',
  'LBL_LAST_MONTH' => 'Minulý měsíc',
  'LBL_NEXT_MONTH' => 'Příští měsíc',
  'LBL_LAST_QUARTER' => 'Minulé čtvrtletí',
  'LBL_THIS_QUARTER' => 'Toto čtvrtletí',
  'LBL_LAST_YEAR' => 'Minulý rok',
  'LBL_NEXT_YEAR' => 'Příští rok',
  'LBL_SELECT' => 'Označit',
  'LBL_AT_LEAST_ONE_SUMMARY_COLUMN' => 'Alespoň jeden souhrnný sloupec.',
  'LBL_SHOW_DETAILS' => 'Zobrazit podrobnosti',
  'LBL_1_REPORT_ON' => '1. Report',
  'LBL_2_FILTER' => '2. Filtr',
  'LBL_3_GROUP' => '3. Skupina',
  'LBL_3_CHOOSE' => '3. Zvolte zobrazení sloupců',
  'LBL_4_CHOOSE' => '4. Zvolte zobrazení sloupců',
  'LBL_5_CHART_OPTIONS' => '5. Možnosti grafu',
  'LBL_LABEL' => 'Štítek',
  'LBL_THIS_MONTH' => 'Tento měsíc',
  'LBL_LAST_30_DAYS' => 'Posledních 30 dní',
  'LBL_NEXT_30_DAYS' => 'Příštích 30 dní',
  'LBL_THIS_YEAR' => 'Tento rok',
  'LBL_LIST_FORM_TITLE' => 'Reporty',
  'LBL_PROSPECT_REPORTS' => 'Cílové reporty',
  'LBL_IS_EMPTY' => 'Je prázdný',
  'LBL_IS_NOT_EMPTY' => 'Není prázdný',
  'LBL_CHART_DESCRIPTION' => 'Popis',
  'LBL_USE_COLUMN_FOR' => 'Řada údajů',
  'LBL_RELATED' => 'Související:',
  'LBL_OWNER' => 'Přiřazeno k',
  'LBL_TEAM' => 'Týmy',

  'LBL_TOTAL_IS' => 'Součet je',
  'CHART_COUNT_PATTERN' => '{count} {module} kde {group_label} je {group_text}',
  'LBL_WITH_A_TOTAL' => 's celkovou',
  'LBL_WITH_AN_AVERAGE' => 's průměrem',
  'CHART_SUMAVG_PATTERN' => '{count} {module} {numerical_function} {numerical_label} z {currency_symbol}{numerical_value}{thousands} kde {group_label} je {group_text}',
  'LBL_WHOSE_MAXIMUM' => 'jejichž maximální',
  'LBL_WHOSE_MINIMUM' => 'jejichž minimální',
  'CHART_MINMAX_PATTERN' => '{count} {module} {numerical_function} {numerical_label} je {numerical_value}{thousands} kde {group_label} je {group_text}',
  'LBL_ROLLOVER' => 'Najeďte nad tabulku pro zobrazení podrobností.',
  'LBL_ROLLOVER_WEDGE' => 'Najeďte nad pro zobrazení podrobností.',
  'LBL_ROLLOVER_SQUARE' => 'Najeďte nad čtverec pro zobrazení podrobností.',
  'LBL_NO_CHART' => 'Žádný graf',
  'LBL_HORIZ_BAR' => 'Horizontální tabulka',
  'LBL_VERT_BAR' => 'Vertikální tabulka',
  'LBL_PIE' => 'Koláč',
  'LBL_LINE' => 'Linka',
  'LBL_FUNNEL' => 'Trychtýř',
  'LBL_GROUP_BY_REQUIRED' => 'Alespoň jedno sloupec seskupení a jeden sloupec souhrnu jsou potřebné pro vykreslení grafu.',
  'MSG_NO_PERMISSIONS' => 'Nemáte oprávnění k úpravám tohoto reportu',
  'LBL_NONE' => '-- žádný --',
  'LBL_NONE_STRING' => 'Žádný',
  'LBL_DATE_BASED_FILTERS' => '<i>Filtry datumu jsou relativní k časovému pásmu reportu <b>Přidělenému</b> uživateli< /i>',
  'LBL_CONTRACT_REPORTS' => 'Reporty kontraktu',
  'LBL_MY_CONTRACT_REPORTS' => 'Reporty mého kontraktu',
  'LBL_PUBLISHED_CONTRACT_REPORTS' => 'Reporty publikovaných kontraktů',
  'LBL_HELLO' => 'Dobrý den',
  'LBL_SCHEDULED_REPORT_MSG_INTRO' => 'Toto je vygenerovaný report poslaný vám z aplikace Sugar. Tato zpráva byla vytvořena na',
  'LBL_SCHEDULED_REPORT_MSG_BODY1' => 'a uloží s názvem "',
  'LBL_SCHEDULED_REPORT_MSG_BODY2' => '". Pokud si přejete změnit nastavení vašich reportů, přihlašte se do aplikace Sugar a klikněte na záložku "Reporty".',
  'LBL_LIST_PUBLISHED' => 'Publikovaná',
  'LBL_THIS_WEEK' => 'Tento týden',
  'LBL_NEXT_QUARTER' => 'Příští čtvrtletí',
  'LBL_ADD_RELATE' => 'Přidat související',
  'LBL_DEL_THIS' => 'Odstranit',
  'LBL_ALERT_CANT_ADD' => 'Nemůžete přidat související  modul dokud neoznačíte tabulky tykající se .\\nSelect modulu v levém dropdown listě v nabídce "Přidat související"',
  'LBL_BY_DAY' => 'Podle dne',
  'LBL_DAY' => 'Den',
  'LBL_OUTER_JOIN_CHECKBOX' => 'Související volitelné moduly',
  'LBL_ANY_ONE_OF' => 'Některý z',
  'LBL_RELATED_TABLE_BLANK' => 'Prosím, vyberte modul',
  'LBL_FILTER_CONDITIONS' => 'Zvolte provozovatele:',
  'LBL_FILTER_OR' => 'NEBO',
  'LBL_FILTER_AND' => 'A',
  'LBL_FILTERS_END' => 'následujících filtrů.',
  'LBL_FAVORITE_REPORTS' => 'Moje oblíbené reporty',
  'LBL_FAVORITE_REPORTS_TITLE' => 'Moje oblíbené reporty',
  'LBL_ADDED_FAVORITES' => 'Report(y) přidány do mýc oblíbených reportů.',
  'LBL_REMOVED_FAVORITES' => 'Report(y) odstraněny z mých oblíbených reportů.',
  'LBL_MODULE_TITLE' => 'Reporty: Domů',
  'LBL_MODULE_VIEWER_TITLE' => 'Prohlížeč reportů: Domů',
  'LBL_REPORT_MODULE_VIEWER_TITLE' => 'Prohlížeč reportů',
  'LBL_REPORT_SCHEDULE_TITLE' => 'Plán',
  'LBL_FAVORITES_TITLE' => 'Moje oblíbené reporty',
  'LBL_TABLE_CHANGED' => 'Seznam modulů byl změněn, prosím zkontrolujte kritéria zadaná v záložce Skupiny',
  'LBL_OPTIONAL_HELP' => 'Select the boxes to display the primary module records even if the related module records do not exist. When the box is not selected, then primary module records will display only when there are one or more related module records.',
  'LBL_RUNTIME_HELP' => 'Zvolením políčka povolíte uživatelům měnit hodnoty filtrů před spuštěním reportu',
  'LBL_USER_EMPTY_HELP' => 'Pro potřebu vidět záznamy není přířazen ani jeden uživatel, zaškrtněnte checbox \'Možné navázané moduly\' v kroku \'Detaily reportu\' pro případ použití volby \'Není definován\' u filtru přiřazeného uživatele. toto zobrazí všechny záznamy, které nejsou navázány na Uživatele.',
  'DEFAULT_REPORT_TITLE_1' => 'Aktuální čtvrtletní předpověď',
  'DEFAULT_REPORT_TITLE_2' => 'Podrobná předpověd',
  'DEFAULT_REPORT_TITLE_3' => 'Seznam partnerských společností',
  'DEFAULT_REPORT_TITLE_4' => 'Seznam zákazníckých účtů',
  'DEFAULT_REPORT_TITLE_5' => 'Seznam hovorů podle posledního kontaktovaného',
  'DEFAULT_REPORT_TITLE_6' => 'Obchody podle zdroje příležitosti',
  'DEFAULT_REPORT_TITLE_7' => 'Otevřené případy podle uživatele a stavu',
  'DEFAULT_REPORT_TITLE_8' => 'Otevřené případy podle měsíce a uživatele',
  'DEFAULT_REPORT_TITLE_9' => 'Otevřené případy podle priority a uživatele',
  'DEFAULT_REPORT_TITLE_10' => 'Nové případy podle měsíce',
  'DEFAULT_REPORT_TITLE_11' => '"Pipeline" podle typu podle týmu',
  'DEFAULT_REPORT_TITLE_12' => '"Pipeline" podle týmu podle uživatele',
  'DEFAULT_REPORT_TITLE_17' => 'Vyhrané obchody podle zdroje',
  'DEFAULT_REPORT_TITLE_13' => 'Úkoly podle týmu a uživatele',
  'DEFAULT_REPORT_TITLE_14' => 'Volání podle týmu a uživatele',
  'DEFAULT_REPORT_TITLE_15' => 'Schůzky podle týmu a uživatele',
  'DEFAULT_REPORT_TITLE_16' => 'Společnosti podle typu průmyslu',
  'DEFAULT_REPORT_TITLE_18' => 'Příležitosti podle zdroje příležitosti',
  'DEFAULT_REPORT_TITLE_22' => 'Využití modulu (dnes)',
  'DEFAULT_REPORT_TITLE_23' => 'Využití modulu (posledních 7 dní)',
  'DEFAULT_REPORT_TITLE_24' => 'Využití modulu (posledních 30 dní)',
  'DEFAULT_REPORT_TITLE_28' => 'Pomalé dotazy',
  'DEFAULT_REPORT_TITLE_29' => 'Změněné záznamy (posledních 7 dní)',
  'DEFAULT_REPORT_TITLE_45' => 'Obchody podle fáze prodeje',
  'DEFAULT_REPORT_TITLE_46' => 'Obchody podle typu',
  'DEFAULT_REPORT_TITLE_47' => 'Otevřené hovory',
  'DEFAULT_REPORT_TITLE_48' => 'Otevřené schůzky',
  'DEFAULT_REPORT_TITLE_49' => 'Otevřené úkoly',
  'DEFAULT_REPORT_TITLE_52' => 'Všechny otevřené obchody',
  'DEFAULT_REPORT_TITLE_53' => 'Všechny uzavřené obchody',
  'LBL_ASSIGNED_TO_NAME' => 'Přidělen k:',
  'LBL_CONTENT' => 'Obsah',
  'LBL_IS_PUBLISHED' => 'Je zveřejněn',
  'LBL_FAVORITE' => 'Oblíbené',
  'LBL_SCHEDULE_TYPE' => 'Typ plánu',
  'LBL_NO_ACCESS' => 'Nemůžete přistupovat k tomuto reportu v důsledku omezení oprávnění.',
  'LBL_SELECT_REPORT_TYPE' => 'Kliknutím na ikonu vyberete typ reportu',
  'LBL_SELECT_MODULE' => 'Zvolit modul',
  'LBL_NEXT' => 'Dalíš >',
  'LBL_PREVIOUS' => '< Předchozí',
  'LBL_CANCEL' => 'Zrušit',
  'LBL_AVAILABLE_FIELDS' => 'Dostupné pole',
  'LBL_RELATED_MODULES' => 'Související moduly',
  'LBL_FIELD_NAME' => 'Jméno pole',
  'LBL_NO_IMAGE' => 'Žádný obrázek',
  'LBL_BASIC_FILTERS' => 'Základní filtry',
  'LBL_ADVANCED_FILTERS' => 'Rozšířené filtry',
  'LBL_ADD_GROUP' => 'Přidat skupinu filtrů',
  'LBL_REMOVE_GROUP' => 'Vyjměte skupinu filtrů',
  'LBL_FILTER' => 'Filtr',
  'LBL_ADD_FILTER_TO' => 'Přidat filtr do',
  'LBL_COLUMN_NAME' => 'Jméno sloupce',
  'LBL_OPTIONAL_MODULES' => 'Volitelné moduly',
  'LBL_SELECT_REPORT_TYPE_ICON' => 'Zvolit typ reportu',
  'LBL_SELECT_MODULE_BUTTON' => 'Kliknutím na ikonu označíte modul.',
  'LBL_DEFINE_FILTERS' => 'Definovat filtry',
  'LBL_SELECT_GROUP_BY' => 'Definovat seskupení podle',
  'LBL_CHOOSE_DISPLAY_COLS' => 'Zvolte zobrazení sloupců',
  'LBL_REPORT_DETAILS' => 'Podrobnosti reportu',
  'LBL_REPORT_GROUP_BY' => 'Seskupit podle',
  'LBL_CLEAR' => 'Vyčistit',
  'LBL_CHART_OPTIONS' => 'Možnosti grafu',
  'LBL_CHART_DATA_HELP' => 'Vyberte Souhrn, který bude zobrazen v grafu.',
  'LBL_DO_ROUND_HELP' => 'Čísla vyšší než 100000 se v grafech zaokrouhlí.<br>Příklad: 350000 se zobrazí jako 350K.',
  'LBL_COMBO_TYPE_AHEAD' => 'Hledat pole',
  'LBL_MATRIX_LAYOUT' => 'Možnosti rozložení:',
  'LBL_REMOVE_BTN_HELP' => 'Klikněte pro odebrání tohoto skupinového filtru.',
  'LBL_ADD_BTN_HELP' => 'Klikněte pro přidání novéhu filtru skupiny. Použijte skupiny pro použití a/nebo logiky sady filtrů.',
  'LBL_ORDER_BY' => 'Order By',
  'LBL_ASCENDING' => 'Vzestupně',
  'LBL_DESCENDING' => 'Sestupně',
  'LBL_TYPE' => 'Typ',
  'LBL_SUBJECT' => 'Předmět',
  'LBL_STATUS' => 'Stav',
  'LBL_DATE' => 'Datum zahájení',
  'LBL_NO_FILTERS' => 'nemá žádné filtry',
  'LBL_DELETED_FIELD_IN_REPORT1' => 'Následují pole v tomto reportu nejsou již déle validní:',
  'LBL_DELETED_FIELD_IN_REPORT2' => 'Prosím změnte tento report a zkontrolujte zda ostatní parametry jsou stále relevantní.',
  'LBL_CURRENT_USER' => 'Aktuální uživatel',
  'LBL_MODULE_CHANGE_PROMPT' => 'Změnou vybraného modulu bude mít za výsledek ztrátu filtrů, zobrazení sloupců, atd. Opravdu si přejete pokračovat?',
  'LBL_CANNOT_BE_EMPTY' => 'nemůže být prázdné.',
  'LBL_FIELDS_PANEL_HELP_DESC' => 'Všechny možné pole z vybraného modulu v <b>souvisejících modules</b> se objeví zde. Vyberte pole.',
  'LBL_RELATED_MODULES_PANEL_HELP_DESC' => 'Primární modul a všechny moduly související s primárním modulem se objeví zde. Vyberte modul.',
  'LBL_PREVIEW_REPORT' => 'Náhled',
  'LBL_DCE_LICENSING_REPORT' => 'Zpráva o licencování',
  'DEFAULT_REPORT_TITLE_33' => 'Využití šablony',
  'DEFAULT_REPORT_TITLE_34' => '"Max Sessions" za den (posledních 7 dní)',
  'DEFAULT_REPORT_TITLE_35' => 'Requestů za den (posledních 7 dní)',
  'DEFAULT_REPORT_TITLE_36' => 'Přihlášení za den (posledních 7 dní)',
  'DEFAULT_REPORT_TITLE_37' => 'Dotazů za den (posledních 7 dní)',
  'DEFAULT_REPORT_TITLE_38' => 'Souborů za den (posledních 7 dní)',
  'DEFAULT_REPORT_TITLE_39' => 'Uživatelů za den (posledních 7 dní)',
  'DEFAULT_REPORT_TITLE_40' => 'Využití paměti za den (posledních 7 dní)',
  'LBL_ALT_SHOW' => 'Zobrazit',
  'LBL_REPORT_DATA_COLUMN_ORDERS' => 'Tento report obsahuje data v následujícím pořadí sloupců:',
  'DROPDOWN_SCHEDULE_INTERVALS' => 
  array (
    3600 => 'Hodinový',
    21600 => 'každých 6 hodin',
    43200 => 'Každých 12 hodin',
    86400 => 'Denní',
    604800 => 'Týdení',
    1209600 => 'Každé 2 týdny',
    2419200 => 'Každé 4 týdny',
  ),
);

