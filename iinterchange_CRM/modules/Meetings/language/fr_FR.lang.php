<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

	

$mod_strings = array (
  'LBL_COLON' => ':',
  'LBL_CONTACT_NAME' => 'Contact:',
  'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contacts',
  'LBL_DESCRIPTION' => 'Description:',
  'LBL_EMAIL' => 'Email',
  'LBL_HISTORY_SUBPANEL_TITLE' => 'Notes',
  'LBL_HOURS_ABBREV' => 'h',
  'LBL_LIST_CONTACT' => 'Contact',
  'LBL_LIST_DIRECTION' => 'Direction',
  'LBL_LEADS_SUBPANEL_TITLE' => 'Leads',
  'LBL_MINSS_ABBREV' => 'm',
  'LBL_OUTLOOK_ID' => 'Outlook ID',
  'LBL_SEND_BUTTON_KEY' => 'I',
  'ERR_DELETE_RECORD' => 'Un numéro d&#39;enregistrement doit être spécifié pour toute suppression.',
  'LBL_ACCEPT_THIS' => 'Accepter ?',
  'LBL_ADD_BUTTON' => 'Ajouter',
  'LBL_ADD_INVITEE' => 'Ajouter des participants',
  'LBL_CREATED_BY' => 'Créé par',
  'LBL_DATE_END' => 'Date de fin',
  'LBL_DATE_TIME' => 'Date et Heure début:',
  'LBL_DATE' => 'Date de début:',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Réunions',
  'LBL_DEL' => 'Sup',
  'LBL_DESCRIPTION_INFORMATION' => 'Description',
  'LBL_DURATION_HOURS' => 'Durée en Heures:',
  'LBL_DURATION_MINUTES' => 'Durée en Minutes:',
  'LBL_DURATION' => 'Durée:',
  'LBL_FIRST_NAME' => 'Prénom',
  'LBL_HOURS_MINS' => '(heures/minutes)',
  'LBL_INVITEE' => 'Participants',
  'LBL_LAST_NAME' => 'Nom',
  'LBL_ASSIGNED_TO_NAME' => 'Assigné à :',
  'LBL_LIST_ASSIGNED_TO_NAME' => 'Assigné à',
  'LBL_LIST_CLOSE' => 'Clôturer',
  'LBL_LIST_DATE_MODIFIED' => 'Date de modification',
  'LBL_LIST_DATE' => 'Date de début',
  'LBL_LIST_DUE_DATE' => 'Date prévue',
  'LBL_LIST_FORM_TITLE' => 'Liste des Réunions',
  'LBL_LIST_MY_MEETINGS' => 'Mes Rendez-vous',
  'LBL_LIST_RELATED_TO' => 'Relatif à',
  'LBL_LIST_STATUS' => 'Statut',
  'LBL_LIST_SUBJECT' => 'Sujet',
  'LBL_LIST_TIME' => 'Heure début',
  'LBL_LOCATION' => 'Localisation:',
  'LBL_MEETING' => 'Réunion:',
  'LBL_MODIFIED_BY' => 'Modifié par',
  'LBL_MODULE_NAME' => 'Réunions',
  'LBL_MODULE_TITLE' => 'Réunions',
  'LBL_NAME' => 'Nom',
  'LBL_NEW_FORM_TITLE' => 'Planifier Réunion',
  'LBL_PHONE' => 'Téléphone:',
  'LBL_REMINDER_TIME' => 'Heure de la notification',
  'LBL_REMINDER' => 'Notification:',
  'LBL_REMOVE' => 'Sup',
  'LBL_SCHEDULING_FORM_TITLE' => 'Planification',
  'LBL_SEARCH_BUTTON' => 'Rechercher',
  'LBL_SEARCH_FORM_TITLE' => 'Rechercher une Réunion',
  'LBL_SEND_BUTTON_LABEL' => 'Envoyer Invitations',
  'LBL_SEND_BUTTON_TITLE' => 'Envoyer les invitations [Alt+I]',
  'LBL_STATUS' => 'Statut:',
  'LBL_TYPE' => 'Type',
  'LBL_PASSWORD' => 'Mot de passe',
  'LBL_URL' => 'Démarrer/rejoindre la réunion',
  'LBL_CREATOR' => 'Créé par',
  'LBL_EXTERNALID' => 'ID application externe',
  'LBL_SUBJECT' => 'Sujet:',
  'LBL_TIME' => 'Heure de début:',
  'LBL_USERS_SUBPANEL_TITLE' => 'Utilisateurs',
  'LBL_ACTIVITIES_REPORTS' => 'Rapport d&#39;activités',
  'LNK_MEETING_LIST' => 'Réunions',
  'LNK_NEW_APPOINTMENT' => 'Planifier Rendez-vous',
  'LNK_NEW_MEETING' => 'Planifier Réunion',
  'LNK_IMPORT_MEETINGS' => 'Import Réunions',
  'NTC_REMOVE_INVITEE' => 'Etes-vous sûr(e) de vouloir supprimer ce participant de la réunion ?',
  'LBL_CREATED_USER' => 'Créé par',
  'LBL_MODIFIED_USER' => 'Modifié par',
  'NOTICE_DURATION_TIME' => 'La durée doit être supérieur à 0',
  'LBL_MEETING_INFORMATION' => 'Informations Réunion',
  'LBL_LIST_JOIN_MEETING' => 'Joindre la réunion',
  'LBL_JOIN_EXT_MEETING' => 'Joindre la réunion',
  'LBL_HOST_EXT_MEETING' => 'Démarrer la réunion',
  'LBL_EXTNOT_HEADER' => 'Erreur : vous n&#39;êtes pas un participant de cette réunion',
  'LBL_EXTNOT_MAIN' => 'Vous n&#39;êtes pas autorisé à joindre cette réunion car vous n&#39;êtes pas un des participants de celle-ci.',
  'LBL_EXTNOT_RECORD_LINK' => 'Voir la réunion',
  'LBL_EXTNOT_GO_BACK' => 'Retour à l&#39;enregistrement précédent',
  'LBL_EXTNOSTART_HEADER' => 'Erreur : Impossible de démarrer la réunion',
  'LBL_EXTNOSTART_MAIN' => 'Vous ne pouvez pas démarrer cette réunion car vous êtes ni un administrateur ni le responsable de cette réunion.',
);

