<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

	

$mod_strings = array (
  'LBL_CRONTAB_SERVER_TIME_PRE' => 'Les tâches planifiées sont basées sur la timezone du serveur (',
  'LBL_CRONTAB_SERVER_TIME_POST' => '). Veuillez en tenir compte lorsque vous paramétrez des tâches planifiées.',
  'LBL_MINUTES' => 'minutes',
  'LBL_MINS' => 'min',
  'LBL_HOURS' => 'hrs',
  'LBL_DAY_OF_MONTH' => 'date',
  'LBL_JOB' => 'Job',
  'LBL_WARN_CURL_TITLE' => 'cURL Warning:',
  'LBL_OOTB_WORKFLOW' => 'Actions des Processus de Workflow',
  'LBL_OOTB_REPORTS' => 'Lancer les actions planifiées de génération de rapports',
  'LBL_OOTB_IE' => 'Vérifier les boîtes emails entrants',
  'LBL_OOTB_BOUNCE' => 'Lancer le processus de nuit des Campagnes d&#39;Emails de type Bounce',
  'LBL_OOTB_CAMPAIGN' => 'Lancer de nuit les Campagnes d&#39;Emailing',
  'LBL_OOTB_PRUNE' => 'Purger la BDD le premier de chaque mois',
  'LBL_OOTB_TRACKER' => 'Purger les tables des historiques',
  'LBL_UPDATE_TRACKER_SESSIONS' => 'Mettre à jour la table tracker_sessions',
  'LBL_LIST_JOB_INTERVAL' => 'Fréquence',
  'LBL_LIST_LIST_ORDER' => 'Actions planifiées:',
  'LBL_LIST_NAME' => 'Action',
  'LBL_LIST_RANGE' => 'Plage d&#39;activité',
  'LBL_LIST_REMOVE' => 'Supprimer:',
  'LBL_LIST_STATUS' => 'Statut:',
  'LBL_LIST_TITLE' => '&nbsp;',
  'LBL_LIST_EXECUTE_TIME' => 'Va démarrer à:',
  'LBL_SUN' => 'Le dimanche',
  'LBL_MON' => 'Le lundi',
  'LBL_TUE' => 'Le mardi',
  'LBL_WED' => 'Le mercredi',
  'LBL_THU' => 'Le jeudi',
  'LBL_FRI' => 'Le vendredi',
  'LBL_SAT' => 'Le samedi',
  'LBL_ALL' => 'Tous les jours',
  'LBL_EVERY_DAY' => 'Tous les jours',
  'LBL_AT_THE' => 'A le',
  'LBL_EVERY' => 'Tous',
  'LBL_FROM' => 'De',
  'LBL_ON_THE' => 'Toutes les',
  'LBL_RANGE' => 'à',
  'LBL_AT' => 'à',
  'LBL_IN' => 'et',
  'LBL_AND' => 'et',
  'LBL_HOUR' => 'heures',
  'LBL_HOUR_SING' => 'heures',
  'LBL_MONTH' => 'mois',
  'LBL_OFTEN' => 'Aussi souvent que possible.',
  'LBL_MIN_MARK' => 'minutes',
  'LBL_MONTHS' => 'mois',
  'LBL_DAY_OF_WEEK' => 'jour',
  'LBL_CRONTAB_EXAMPLES' => 'Les valeurs ci dessus utilisent les notations standard de la crontab.',
  'LBL_ALWAYS' => '- toujours -',
  'LBL_CATCH_UP' => 'Relancer si manqué',
  'LBL_CATCH_UP_WARNING' => 'Décocher si cette action peut prendre du temps à s&#39;exectuer.',
  'LBL_DATE_TIME_END' => 'Date & heure de fin',
  'LBL_DATE_TIME_START' => 'Date & heure de démarrage',
  'LBL_INTERVAL' => 'Intervalle',
  'LBL_LAST_RUN' => 'Dernière exécution',
  'LBL_MODULE_NAME' => 'Planificateur',
  'LBL_MODULE_TITLE' => 'Actions planifiées',
  'LBL_NAME' => 'Nom du Job',
  'LBL_NEVER' => '- jamais -',
  'LBL_NEW_FORM_TITLE' => 'Nouvelle action planifiée',
  'LBL_PERENNIAL' => '- jamais -',
  'LBL_SEARCH_FORM_TITLE' => 'Recherche action planifiée',
  'LBL_SCHEDULER' => 'Planificateur:',
  'LBL_STATUS' => 'Statut',
  'LBL_TIME_FROM' => 'Actif de:',
  'LBL_TIME_TO' => 'Actif jusqu à',
  'LBL_WARN_CURL' => 'Attention:',
  'LBL_WARN_NO_CURL' => 'Ce système ne dispose pas des librairies cURL (activées/compilées) dans le module PHP (--with-curl=/path/to/curl_library).  Veuillez contacter votre administrateur pour résoudre ce problème.  Sans la fonctionnalité cURL, le planificateur ne pourra traiter ses jobs.',
  'LBL_BASIC_OPTIONS' => 'Paramétrages Essentiels',
  'LBL_ADV_OPTIONS' => 'Options avancées',
  'LBL_TOGGLE_ADV' => 'Options avancées',
  'LBL_TOGGLE_BASIC' => 'Options de base',
  'LNK_LIST_SCHEDULER' => 'Actions planifiées',
  'LNK_NEW_SCHEDULER' => 'Nouvelle action planifiée',
  'LNK_LIST_SCHEDULED' => 'Jobs Planifiés',
  'SOCK_GREETING' => 'Ceci est une interface pour le Service de Planification SugarCRM.<br /><br />[ Commandes disponibles du serveur: start|restart|shutdown|status ]<br /><br />Pour quitter, tapez &#39;quit&#39;. Pour arréter le service &#39;shutdown&#39;.',
  'ERR_DELETE_RECORD' => 'Un numéro d&#39;enregistrement doit être spécifié pour supprimer la planification.',
  'ERR_CRON_SYNTAX' => 'Syntaxe de l&#39;action planifiée invalide',
  'NTC_DELETE_CONFIRMATION' => 'Etes vous sûr de vouloir supprimer cet enregistrement ?',
  'NTC_STATUS' => 'Passer le statut à Inactif pour supprimer cette planification de les listes déroulantes du planificateur',
  'NTC_LIST_ORDER' => 'L&#39;ordre de cette planification va apparaitre dans les listes déroulantes du planificateur',
  'LBL_CRON_INSTRUCTIONS_WINDOWS' => 'Pour configurer le planificateur Windows',
  'LBL_CRON_INSTRUCTIONS_LINUX' => 'Pour configurer la Crontab',
  'LBL_CRON_LINUX_DESC' => 'Note: Afin d&#39;exécuter les Tâches planifiées SugarCRM, ajouter cette ligne dans votre crontab:',
  'LBL_CRON_WINDOWS_DESC' => 'Note: Afin d&#39;exécuter les Tâches planifiées SugarCRM, créer un fichier batch avec les commandes suivantes:',
  'LBL_NO_PHP_CLI' => 'Si votre serveur ne dispose pas du binaire PHP, vous pouvez utiliser wget ou curl pour lancer vos Jobs.<br>pour wget: <b>*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;wget --spider /cron.php</b><br>pour curl: <b>*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;curl --silent /cron.php',
  'LBL_JOBS_SUBPANEL_TITLE' => 'Executions',
  'LBL_EXECUTE_TIME' => 'Date d&#39;execution',
  'LBL_REFRESHJOBS' => 'Rafraichir les jobs',
  'LBL_POLLMONITOREDINBOXES' => 'Vérifier les boîtes emails entrantes',
  'LBL_RUNMASSEMAILCAMPAIGN' => 'Lancer de nuit les Campagnes d&#39;Emailing',
  'LBL_POLLMONITOREDINBOXESFORBOUNCEDCAMPAIGNEMAILS' => 'Lancer le processus de nuit des Campagnes d&#39;Emails de type Bounce',
  'LBL_PRUNEDATABASE' => 'Purger la BDD le premier de chaque mois',
  'LBL_TRIMTRACKER' => 'Purger les tables des historiques',
  'LBL_PROCESSWORKFLOW' => 'Actions des Processus de Workflow',
  'LBL_PROCESSQUEUE' => 'Lancer les actions planifiées de génération de rapports',
  'LBL_UPDATETRACKERSESSIONS' => 'Mettre à jour la table tracker_sessions',
);

