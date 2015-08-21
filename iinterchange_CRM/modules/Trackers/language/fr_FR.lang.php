<?php

/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

















if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');



$mod_strings = array (
		'ShowActiveUsers'										=> 'Voir les utilisateurs actifs',
	'ShowLastModifiedRecords'								=> '10 derniers enregistrements modifiés',
	'ShowTopUser'											=> 'Top Utilisateur',
	'ShowMyModuleUsage'										=> 'Mes utilisateurs par module',
	'ShowMyWeeklyActivities'								=> 'Mes activités par semaines',
	'ShowTop3ModulesUsed'									=> 'Mon Top 3 des modules utilisés',
	'ShowLoggedInUserCount'									=> 'Nombre d&#39;utilisateur actif',
	'ShowMyCumulativeLoggedInTime'							=> 'Mon temps de login cumulé (Cette semaine)',
	'ShowUsersCumulativeLoggedInTime'						=> 'Temps de login cumulé pour tous les utilisateurs (Cette semaine)',

		'action'												=> 'Action',
	'active_users'											=> 'Nombre d&#39;utilisateur actif',
	'date_modified'											=> 'Date de la dernière Action',
	'different_modules_accessed'							=> 'Nombde de module accédé',
	'first_name'											=> 'Prénom',
	'item_id'												=> 'ID',
	'item_summary'											=> 'Nom',
	'last_action'											=> 'Dernière action Date/Heure',
	'last_name'												=> 'Prénom',
	'module_name'											=> 'Nom du module',
	'records_modified'										=> 'Nombre total d&#39;enregistrement modifié',
	'top_module'											=> 'Top Module accédé',
	'total_count'											=> 'Total Page Vues',
	'total_login_time'										=> 'Heure (hh:mm:ss)',
	'user_name'												=> 'Nom utilisateur',
	'users'													=> 'Utilisateurs',

		'LBL_ENABLE'											=> 'Activé',
	'LBL_MODULE_NAME_TITLE'									=> 'Suivi',
	'LBL_MODULE_NAME'										=> 'Suivi',
	'LBL_TRACKER_SETTINGS'									=> 'Paramètres du Suivi',
	'LBL_TRACKER_QUERIES_DESC'								=> 'Suivi des Requêtes',
	'LBL_TRACKER_QUERIES_HELP'								=> 'Suivi des requêtes lorsque dump_slow_queries est activé et que le temps d&#39;exécution est supérieur au paramètre slow_query_time_msec présent dans config.php.',
	'LBL_TRACKER_PERF_DESC'									=> 'Suivi des performances',
	'LBL_TRACKER_QUERIES_HELP'								=> 'Trace les états SQL quand "Logger les requêtes trop longues" est activé et que le paramètre "Seuil pour les requêtes trop longues" est dépassé',
	'LBL_TRACKER_PERF_HELP'									=> 'Suivi du roundtrips de base de donné, des fichiers accédés et de l&#39;utilisation de la mémoire',
	'LBL_TRACKER_SESSIONS_DESC'								=> 'Suivi des Sessions',
	'LBL_TRACKER_SESSIONS_HELP'								=> 'Suivi des utilisateurs actifs et des informations de sessions des utilisateurs',
	'LBL_TRACKER_DESC'										=> 'Suivi des Actions',
	'LBL_TRACKER_HELP'										=> 'Suivi des pages vues par les utilisateurs (enregistrements et modules accédés) et des enregistrements sauvegardés',
	'LBL_TRACKER_PRUNE_INTERVAL'							=> 'Nombre de jours durant lesquels les données de Suivi sont sauvegardées avant d&#39;être purgé par le planificateur de tâches.',
	'LBL_TRACKER_PRUNE_RANGE'								=> 'Nombre de jours',
);
?>