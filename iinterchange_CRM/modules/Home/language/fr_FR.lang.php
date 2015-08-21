<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

	

$mod_strings = array (
  'LBL_SOURCE_ISCROLL' => 'iScroll - Gestion du paramètre overflow:scroll pour les mobiles. Permet de gérer le défilement natif pour les éléments à hauteur/largeur fixe.',
  'LBL_SOURCE_FLASHCANVAS' => 'FlashCanvas - FlashCanvas est une librairie Javascript qui ajoute le support de la balise HTML5 "canvas" à Internet Explorer. Elle permet le support des formes et des images au travers de l&#39;API flash. Elle supporte toutes les APIs Canvas et, dans certain cas, accélère le rendu par rapport aux autres librairies qui utilisent VML ou Silverlight.',
  'LBL_SOURCE_JIT' => 'JavaScript InfoVis Toolkit - L&#39;environnement javscript InfoVis Toolkit fournit des outils de création interactif pour la visualisation de données.',
  'LBL_OPTIONS' => 'Options',
  'LBL_MODULES' => 'Modules',
  'LBL_WEB' => 'Web',
  'LBL_HOME_PAGE_3_NAME' => 'Support',
  'LBL_HOME_PAGE_6_NAME' => 'Marketing',
  'LBL_VERSION' => 'Version',
  'LBL_SUGAR_COMMUNITY_EDITION' => 'Sugar Community Edition',
  'LBL_SUGAR_PROFESSIONAL' => 'Sugar Professional',
  'LBL_SUGAR_ENTERPRISE' => 'Sugar Enterprise',
  'LBL_FORUMS' => 'Forums',
  'LBL_WIKI' => 'Wiki',
  'LBL_MODULE_NAME' => 'Accueil',
  'LBL_MODULES_TO_SEARCH' => 'Modules utilisés pour la recherche',
  'LBL_NEW_FORM_TITLE' => 'Nouveau Contact',
  'LBL_FIRST_NAME' => 'Prénom:',
  'LBL_LAST_NAME' => 'Nom de Famille:',
  'LBL_LIST_LAST_NAME' => 'Nom',
  'LBL_PHONE' => 'Téléphone:',
  'LBL_EMAIL_ADDRESS' => 'Email:',
  'LBL_MY_PIPELINE_FORM_TITLE' => 'Mon Portefeuille',
  'LBL_PIPELINE_FORM_TITLE' => 'Mon Portefeuille',
  'LBL_CAMPAIGN_ROI_FORM_TITLE' => 'ROI de Campagne',
  'LBL_MY_CLOSED_OPPORTUNITIES_GAUGE' => 'Jauge de mes affaires gagnées',
  'LNK_NEW_CONTACT' => 'Créer Contact',
  'LNK_NEW_ACCOUNT' => 'Créer Compte',
  'LNK_NEW_OPPORTUNITY' => 'Créer Affaire',
  'LNK_NEW_QUOTE' => 'Créer Devis',
  'LNK_NEW_LEAD' => 'Créer Lead',
  'LNK_NEW_CASE' => 'Créer Ticket',
  'LNK_NEW_NOTE' => 'Créer Note',
  'LNK_NEW_CALL' => 'Planifier Appel',
  'LNK_NEW_EMAIL' => 'Archiver Email',
  'LNK_COMPOSE_EMAIL' => 'Envoyer Email',
  'LNK_NEW_MEETING' => 'Planifier Réunion',
  'LNK_NEW_TASK' => 'Créer Tâche',
  'LNK_NEW_BUG' => 'Signaler Bug',
  'LBL_ADD_BUSINESSCARD' => 'Créer Carte de Visite',
  'ERR_ONE_CHAR' => 'Merci de saisir au moins une lettre ou un chiffre pour votre recherche ...',
  'LBL_OPEN_TASKS' => 'Mes Tâches ouvertes',
  'LBL_SEARCH_RESULTS' => 'Résultats de la Recherche',
  'LBL_SEARCH_RESULTS_IN' => 'dans',
  'LNK_NEW_SEND_EMAIL' => 'Envoyer Email',
  'LBL_NO_ACCESS' => 'Vous n&#39;avez pas accès à cet espace. Veuillez contacter votre administrateur pour en connaître la raison.',
  'LBL_NO_RESULTS_IN_MODULE' => '-- Pas de résultats --',
  'LBL_NO_RESULTS' => '<h2>Aucun résultat trouvé. Veuillez effectuer une nouvelle recherche.</h2><br>',
  'LBL_NO_RESULTS_TIPS' => '<h3>Petits rappels:</h3><ul><li>Assurez vous d&#39;avoir sélectionnées les catégories appropriées ci-dessus.</li><li>Élargissez vos critères de recherche.</li><li>Si vous ne trouvez aucun résultat, essayez la recherche avancée du module.</li></ul>',
  'LBL_RELOAD_PAGE' => 'Merci de <a href="javascript: window.location.reload()">réactualiser la fenêtre</a> pour utiliser ce Dashlet.',
  'LBL_ADD_DASHLETS' => 'Ajout de Dashlets',
  'LBL_ADD_PAGE' => 'Ajouter une page',
  'LBL_DEL_PAGE' => 'Supprimer une Page',
  'LBL_WEBSITE_TITLE' => 'Site web',
  'LBL_RSS_TITLE' => 'News RSS',
  'LBL_DELETE_PAGE' => 'Supprimer une page',
  'LBL_CHANGE_LAYOUT' => 'Changer le Layout',
  'LBL_RENAME_PAGE' => 'Renommer une page',
  'LBL_CLOSE_DASHLETS' => 'Fermer',
  'LBL_CLOSE_SITEMAP' => 'Fermer',
  'LBL_TODAY' => 'Aujourd&#39;hui',
  'LBL_YESTERDAY' => 'Hier',
  'LBL_TOMORROW' => 'Demain',
  'LBL_LAST_WEEK' => 'La semaine dernière',
  'LBL_NEXT_WEEK' => 'La semaine prochaine',
  'LBL_LAST_7_DAYS' => 'Dans les 7 derniers jours',
  'LBL_NEXT_7_DAYS' => 'Dans les 7 prochains jours',
  'LBL_LAST_MONTH' => 'Le mois dernier',
  'LBL_NEXT_MONTH' => 'Le mois prochain',
  'LBL_LAST_QUARTER' => 'Le trimestre dernier',
  'LBL_THIS_QUARTER' => 'Ce trimestre',
  'LBL_LAST_YEAR' => 'L&#39;année dernière',
  'LBL_NEXT_YEAR' => 'L&#39;année prochaine',
  'LBL_LAST_30_DAYS' => 'Dans les 30 derniers jours',
  'LBL_NEXT_30_DAYS' => 'Dans les 30 prochains jours',
  'LBL_THIS_MONTH' => 'Ce Mois-ci',
  'LBL_THIS_YEAR' => 'Cette Année',
  'LBL_CHARTS' => 'Graphiques',
  'LBL_TOOLS' => 'Outils',
  'LBL_MAX_DASHLETS_REACHED' => 'Vous avez atteint le nombre maximal de dashlets autorisés par votre administrateur. Merci de supprimer un dashlet pour en ajouter d&#39;autres.',
  'LBL_ADDING_DASHLET' => 'Ajout de Dashlet ...',
  'LBL_ADDED_DASHLET' => 'Dashlet ajouté',
  'LBL_REMOVE_DASHLET_CONFIRM' => 'Etes-vous sûr(e) de vouloir supprimer le Dashlet ?',
  'LBL_REMOVING_DASHLET' => 'Suppression du Dashlet ...',
  'LBL_REMOVED_DASHLET' => 'Dashlet supprimé',
  'LBL_DASHLET_CONFIGURE_GENERAL' => 'Général',
  'LBL_DASHLET_CONFIGURE_FILTERS' => 'Filtres',
  'LBL_DASHLET_CONFIGURE_MY_ITEMS_ONLY' => 'Mes Eléments seulement',
  'LBL_DASHLET_CONFIGURE_TITLE' => 'Titre',
  'LBL_DASHLET_CONFIGURE_DISPLAY_ROWS' => 'Afficher les lignes',
  'LBL_DASHLET_DELETE' => 'Supprimer le Dashlet',
  'LBL_DASHLET_REFRESH' => 'Rafraîchir le Dashlet',
  'LBL_DASHLET_EDIT' => 'Editer le Dashlet',
  'LBL_TRAINING_TITLE' => 'Formation',
  'LBL_CREATING_NEW_PAGE' => 'Création nouvelle page...',
  'LBL_NEW_PAGE_FEEDBACK' => 'Vous avez créé une nouvelle page. Vous pouvez ajouter du contenu avec le menu "Ajouter Dashlets".',
  'LBL_DELETE_PAGE_CONFIRM' => 'Etes-vous sûr(e) de vouloir supprimer cette page ?',
  'LBL_SAVING_PAGE_TITLE' => 'Sauvegarde du titre de la page...',
  'LBL_RETRIEVING_PAGE' => 'Rechargement de la page...',
  'LBL_HOME_PAGE_1_NAME' => 'Mon Sugar',
  'LBL_HOME_PAGE_2_NAME' => 'Ventes',
  'LBL_HOME_PAGE_4_NAME' => 'Suivis',
  'LBL_SEARCH' => 'Rechercher',
  'LBL_CLEAR' => 'Effacer',
  'LBL_BASIC_CHARTS' => 'Graphique basique',
  'LBL_REPORT_CHARTS' => 'Graphique de rapport',
  'LBL_MY_FAVORITE_REPORT_CHARTS' => 'Mes rapports favoris',
  'LBL_GLOBAL_REPORT_CHARTS' => 'Rapports de l&#39;équipe Globale',
  'LBL_MY_TEAM_REPORT_CHARTS' => 'Rapports de mes équipes',
  'LBL_MY_SAVED_REPORT_CHARTS' => 'Graphiques de mes rapports sauvegardés',
  'LBL_DASHLET_SEARCH' => 'Recherche de Dashlets',
  'LBL_BUILD' => 'version de construction',
  'LBL_AND' => 'et',
  'LBL_ARE' => 'sont',
  'LBL_TRADEMARKS' => 'des marques déposées',
  'LBL_OF' => 'par',
  'LBL_FOUNDERS' => 'Fondateurs',
  'LBL_JOIN_SUGAR_COMMUNITY' => 'Rejoigner la communauté SugarCRM',
  'LBL_DETAILS_SUGARFORGE' => 'Extensions SugarCRM développées par la communauté SugarCRM',
  'LBL_DETAILS_SUGAREXCHANGE' => 'Achat et ventes d&#39;extensions certifiées SugarCRM',
  'LBL_TRAINING' => 'Formations',
  'LBL_DETAILS_TRAINING' => 'Découvrir et apprendre à utiliser SugarCRM avec les contenus de formation en ligne interactif',
  'LBL_DETAILS_FORUMS' => 'Discuter avec des utilisateurs expérimentés de la communauté et des développeurs',
  'LBL_DETAILS_WIKI' => 'Rechercher un sujet dans la base de connaissances des utilisateurs et des développeurs',
  'LBL_DEVSITE' => 'Site des développeurs',
  'LBL_DETAILS_DEVSITE' => 'Découvrir les ressources, tutoriels, et liens d&#39;aide au développement sur SugarCRM',
  'LBL_GET_SUGARCRM_RSS' => 'Recevoir le flux RSS SugarCRM',
  'LBL_SUGARCRM_NEWS' => 'Nouveautés SugarCRM',
  'LBL_SUGARCRM_TRAINING_NEWS' => 'Nouveautés sur les formations SugarCRM',
  'LBL_SUGARCRM_FORUMS' => 'Forums SugarCRM',
  'LBL_SUGARFORGE_NEWS' => 'Nouveautés SugarForge',
  'LBL_ALL_NEWS' => 'Toutes les nouveautés',
  'LBL_LINK_CURRENT_CONTRIBUTORS' => 'Cliquez sur ce lien pour voir la liste courante des contributeurs Sugar !',
  'LBL_SOURCE_CODE' => 'Code Source',
  'LBL_SOURCE_SUGAR' => 'Sugar - L&#39;application la plus populaire au monde d&#39;automatisation des forces de ventes créée par SugarCRM Inc.',
  'LBL_SOURCE_XTEMPLATE' => 'XTemplate - Un moteur de mise en page pour PHP créé par Barnabás Debreceni',
  'LBL_SOURCE_NUSOAP' => 'NuSOAP - Un ensemble de classe PHP développées pour créer et utiliser des services web, créée par NuSphere Corporation and Dietrich Ayala',
  'LBL_SOURCE_JSCALENDAR' => 'JS Calendar - Un calendrier pour enregistrer des dates créé par Mihai Bazon',
  'LBL_SOURCE_PHPPDF' => 'PHP PDF - Une librairie pour créer des documents PDF créé par Wayne Munro',
  'LBL_SOURCE_JSONPHP' => 'JSON.php - Un script PHP pour convertir des données depuis et pour le format JSON, créé par Michal Migurski.',
  'LBL_SOURCE_JSON' => 'JSON.js - Un parseur JSON en Javascript.',
  'LBL_SOURCE_HTTP_WEBDAV_SERVER' => 'HTTP_WebDAV_Server - Une implémentation de serveur WebDAV en PHP.',
  'LBL_SOURCE_JS_O_LAIT' => 'JavaScript O Lait - Une librairie de module et composant réutilisable en JavaScript de Jan-Klaas Kollhof.',
  'LBL_SOURCE_PCLZIP' => 'PclZip - librairie qui permet la compression et l&#39;extraction de fichier Zip par Vincent Blavet',
  'LBL_SOURCE_SMARTY' => 'Smarty - Un moteur de template en PHP.',
  'LBL_SOURCE_OVERLIBMWS' => 'Overlibmws - Librairie de client JavaScript.',
  'LBL_SOURCE_YAHOO_UI_LIB' => 'Yahoo! User Interface Library - La librairie interface utilisateur pour faciliter l&#39;implentation de clients rîches.',
  'LBL_SOURCE_PHPMAILER' => 'PHPMailer - Une classe de transfert de mail en PHP',
  'LBL_SOURCE_CRYPT_BLOWFISH' => 'Crypt_Blowfish - Permet le code en blowfish même si l&#39;extension MCrypt n&#39;est pas installée.',
  'LBL_SOURCE_HTML_SAFE' => 'HTML_Safe - Parser qui protège des contenus potentiellement dangeureux en HTML',
  'LBL_SOURCE_XML_HTMLSAX3' => 'XML_HTMLSax3 - Un parseur SAX pour HTML et autres documents XML',
  'LBL_SOURCE_YAHOO_UI_LIB_EXT' => 'Yahoo! UI Extensions Library - Extensions pour Yahoo! User Interface Library de Jack Slocum',
  'LBL_SOURCE_JSMIN' => 'JSMin - filtre qui supprime les commentaires et espaces non nécessaires dans les fichiers JavaScript.',
  'LBL_SOURCE_SWFOBJECT' => 'SWFObject - Javascript Flash Player detection.',
  'LBL_SOURCE_TINYMCE' => 'TinyMCE - Un éditeur WYSIWYG pour éditer le contenu HTML',
  'LBL_SOURCE_EXT' => 'Ext - Un framework de client Javascript pour la création d&#39;application web.',
  'LBL_SOURCE_RECAPTCHA' => 'reCAPTCHA permet de prévenir des abus sur votre site (comme les commentaires de type SPAM ou enregistrements falacieux) en utilisant un CAPTCHA pour assurer que seuls des humains effectuent certaines actions.',
  'LBL_SOURCE_TCPDF' => 'TCPDF - Une classe PHP pour générer des documents PDF.',
  'LBL_SOURCE_CSSMIN' => 'CssMin - Un parser/analyseur et minifier/réducteur de CSS.',
  'LBL_SOURCE_PHPSAML' => 'PHP-SAML - Une boute à outils SAML pour PHP.',
  'LBL_DASHLET_TITLE' => 'Mes sites',
  'LBL_DASHLET_OPT_TITLE' => 'Titre',
  'LBL_DASHLET_OPT_URL' => 'URL',
  'LBL_DASHLET_OPT_HEIGHT' => 'Hauteur du Dashlet (en pixels)',
  'LBL_DASHLET_SUGAR_NEWS' => 'News du réseau Sugar',
  'LBL_DASHLET_DISCOVER_SUGAR_PRO' => 'Découvrir SugarCRM Pro ...',
  'dashlet_categories_dom' => 
  array (
    'Module Views' => 'Vue Modules',
    'Portal' => 'Portail',
    'Charts' => 'Graphiques',
    'Tools' => 'Outils',
    'Miscellaneous' => 'Divers',
  ),
);
