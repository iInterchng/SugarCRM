<?php

/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

















if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');



$mod_strings = array (
	'LBL_MODULE_NAME'										=> 'Suspect',
	'LBL_MODULE_ID'											=> 'Suspect',
	'LBL_INVITEE'											=> 'Rapports directs',
	'LBL_MODULE_TITLE'										=> 'Suspect',
	'LBL_SEARCH_FORM_TITLE'									=> 'Rechercher un Suspect',
	'LBL_LIST_FORM_TITLE'									=> 'Liste des Suspects',
	'LBL_NEW_FORM_TITLE'									=> 'Nouveau Suspect',
	'LBL_PROSPECT'											=> 'Cible:',
	'LBL_BUSINESSCARD'										=> 'Carte de Visite',
	'LBL_LIST_NAME'											=> 'Nom',
	'LBL_LIST_LAST_NAME'									=> 'Nom',
	'LBL_LIST_PROSPECT_NAME'								=> 'Nom du Suspect',
	'LBL_LIST_TITLE'										=> 'Fonction',
	'LBL_LIST_EMAIL_ADDRESS'								=> 'Email',
	'LBL_LIST_OTHER_EMAIL_ADDRESS'							=> 'Email Autre',
	'LBL_LIST_PHONE'										=> 'Téléphone',
	'LBL_LIST_PROSPECT_ROLE'								=> 'Rôle',
	'LBL_LIST_FIRST_NAME'									=> 'Prénom',
	'LBL_ASSIGNED_TO_NAME'									=> 'Assigné à',
	'LBL_ASSIGNED_TO_ID'									=> 'Assigné à :',
	'db_last_name'											=> 'LBL_LIST_LAST_NAME',
	'db_first_name'											=> 'LBL_LIST_FIRST_NAME',
	'db_title'												=> 'LBL_LIST_TITLE',
	'db_email1'												=> 'LBL_LIST_EMAIL_ADDRESS',
	'db_email2'												=> 'LBL_LIST_OTHER_EMAIL_ADDRESS',
	'LBL_CAMPAIGN_ID'										=> 'Campagne ID',
	'LBL_EXISTING_PROSPECT'									=> 'Contact existant utilisé',
	'LBL_CREATED_PROSPECT'									=> 'Nouveau Contact créé',
	'LBL_EXISTING_ACCOUNT'									=> 'Compte existant utilisé',
	'LBL_CREATED_ACCOUNT'									=> 'Nouveau Compte créé',
	'LBL_CREATED_CALL'										=> 'Nouvel Appel créé',
	'LBL_CREATED_MEETING'									=> 'Nouvelle Réunion créée',
	'LBL_ADDMORE_BUSINESSCARD'								=> 'Ajouter une autre Carte de Visite',
	'LBL_ADD_BUSINESSCARD'									=> 'Saisir une Carte de Visite',
	'LBL_NAME'												=> 'Nom:',
	'LBL_FULL_NAME'											=> 'Nom',
	'LBL_PROSPECT_NAME'										=> 'Nom du Suspect:',
	'LBL_PROSPECT_INFORMATION'								=> 'Informations Suspect',
	'LBL_MORE_INFORMATION'									=> 'Plus d&#39;Informations',
	'LBL_PROSPECT_INFORMATION'								=> 'Informations sur le Suspect',
	'LBL_FIRST_NAME'										=> 'Prénom:',
	'LBL_OFFICE_PHONE'										=> 'Téléphone:',
	'LBL_ANY_PHONE'											=> 'Téléphone Quelconque:',
	'LBL_PHONE'												=> 'Téléphone:',
	'LBL_LAST_NAME'											=> 'Nom de Famille:',
	'LBL_MOBILE_PHONE'										=> 'Téléphone Mobile:',
	'LBL_HOME_PHONE'										=> 'Téléphone Personnel:',
	'LBL_OTHER_PHONE'										=> 'Téléphone Autre:',
	'LBL_FAX_PHONE'											=> 'Fax:',
	'LBL_PRIMARY_ADDRESS_STREET'							=> 'Adresse Principale - Rue 1:',
	'LBL_PRIMARY_ADDRESS_CITY'								=> 'Adresse Principale - Ville:',
	'LBL_PRIMARY_ADDRESS_COUNTRY'							=> 'Adresse Principale - Pays:',
	'LBL_PRIMARY_ADDRESS_STATE'								=> 'Adresse Principale - Région:',
	'LBL_PRIMARY_ADDRESS_POSTALCODE'						=> 'Adresse Principale - Code Postal:',
	'LBL_ALT_ADDRESS_STREET'								=> 'Adresse Secondaire - Rue 1:',
	'LBL_ALT_ADDRESS_CITY'									=> 'Adresse Secondaire - Ville :',
	'LBL_ALT_ADDRESS_COUNTRY'								=> 'Adresse Secondaire - Pays:',
	'LBL_ALT_ADDRESS_STATE'									=> 'Adresse Secondaire - Région:',
	'LBL_ALT_ADDRESS_POSTALCODE'							=> 'Adresse Secondaire - Code Postal:',
	'LBL_TITLE'												=> 'Fonction:',
	'LBL_DEPARTMENT'										=> 'Service:',
	'LBL_BIRTHDATE'											=> 'Date Anniversaire:',
	'LBL_EMAIL_ADDRESS'										=> 'Email:',
	'LBL_OTHER_EMAIL_ADDRESS'								=> 'Email Autre:',
	'LBL_ANY_EMAIL'											=> 'Email Quelconque:',
	'LBL_ASSISTANT'											=> 'Assistant:',
	'LBL_ASSISTANT_PHONE'									=> 'Assistant - Tél:',
	'LBL_DO_NOT_CALL'										=> 'Ne pas appeler:',
	'LBL_EMAIL_OPT_OUT'										=> 'Email Opt Out:',
	'LBL_PRIMARY_ADDRESS'									=> 'Adresse Principale:',
	'LBL_ALTERNATE_ADDRESS'									=> 'Adresse Secondaire:',
	'LBL_ANY_ADDRESS'										=> 'Adresse Quelconque:',
	'LBL_CITY'												=> 'Ville:',
	'LBL_STATE'												=> 'Région:',
	'LBL_POSTAL_CODE'										=> 'Code Postal:',
	'LBL_COUNTRY'											=> 'Pays:',
	'LBL_DESCRIPTION_INFORMATION'							=> 'Description',
	'LBL_ADDRESS_INFORMATION'								=> 'Adresse',
	'LBL_DESCRIPTION'										=> 'Description:',
	'LBL_PROSPECT_ROLE'										=> 'Rôle:',
	'LBL_OPP_NAME'											=> 'Nom Affaire:',
	'LBL_IMPORT_VCARD'										=> 'Importer vCard',
	'LBL_IMPORT_VCARDTEXT'									=> 'Créer automatiquement un nouveau contact en important une carte de Visite de votre fichier système.',
	'LBL_DUPLICATE'											=> 'Doublon possible sur les Suspects',
	'MSG_SHOW_DUPLICATES'									=> 'La création de ce Contact peut entraîner la création d&#39;un doublon. Vous pouvez continuer pour créer ce Contact avec les données renseignées ou cliquer sur "Annuler".',
	'MSG_DUPLICATE'											=> 'Duplication de contact possible. Selectionnez un contact dans la liste ci-dessous ou cliquez sur "Sauvegarder" pour poursuivre la création d&#39;un nouveau contact avec les données saisies.',
	'LNK_IMPORT_VCARD'										=> 'Insérer une vCard',
	'LNK_NEW_ACCOUNT'										=> 'Créer Compte',
	'LNK_NEW_OPPORTUNITY'									=> 'Créer une Affaire',
	'LNK_NEW_CASE'											=> 'Créer Ticket',
	'LNK_NEW_NOTE'											=> 'Créer Note',
	'LNK_NEW_CALL'											=> 'Planifier Appel',
	'LNK_IMPORT_PROSPECTS'									=> 'Import Suspects',
	'LNK_NEW_EMAIL'											=> 'Archiver Email',
	'LNK_NEW_MEETING'										=> 'Planifier Réunion',
	'LNK_NEW_TASK'											=> 'Créer Tâche',
	'LNK_NEW_APPOINTMENT'									=> 'Planifier Rendez-vous',
	'NTC_DELETE_CONFIRMATION'								=> 'Etes vous sûr de vouloir supprimer cet enregistrement ?',
	'NTC_REMOVE_CONFIRMATION'								=> 'Etes vous sûr de vouloir supprmier ce contact pour ce ticket?',
	'NTC_REMOVE_DIRECT_REPORT_CONFIRMATION'					=> 'Etes vous sûr de vouloir supprimer cet enregistrement en tant que rapport direct ?',
	'ERR_DELETE_RECORD'										=> 'Un numéro d&#39;enregistrement doit être spécifié pour toute suppression.',
	'NTC_COPY_PRIMARY_ADDRESS'								=> 'Copier l&#39;adresse principale sur l&#39;adresse alternative',
	'NTC_COPY_ALTERNATE_ADDRESS'							=> 'Copier l&#39;adresse alternative sur l&#39;adresse principale',
	'LBL_SALUTATION'										=> 'Civilité',
	'LBL_SAVE_PROSPECT'										=> 'Enregister le Suspect',
	'LBL_CREATED_OPPORTUNITY'								=> 'Nouvelle Affaire créée',
	'NTC_OPPORTUNITY_REQUIRES_ACCOUNT'						=> "Créer une Affaire nécessite un Compte associé.\n Merci de le créer ou de le sélectionner.",
	'LNK_SELECT_ACCOUNT'									=> 'Choisir un Compte',
	'LNK_NEW_PROSPECT'										=> 'Nouveau Suspect',
	'LNK_PROSPECT_LIST'										=> 'Suspects',
	'LNK_NEW_CAMPAIGN'										=> 'Créer Campagne',
	'LNK_CAMPAIGN_LIST'										=> 'Campagnes',
	'LNK_NEW_PROSPECT_LIST'									=> 'Nouvelle Liste de Suspects',
	'LNK_PROSPECT_LIST_LIST'								=> 'Listes des Suspects',
	'LNK_IMPORT_PROSPECT'									=> 'Importer Suspects',
	'LBL_SELECT_CHECKED_BUTTON_LABEL'						=> 'Utiliser les Suspects sélectionnés',
	'LBL_SELECT_CHECKED_BUTTON_TITLE'						=> 'Utiliser les Suspects sélectionnés',
	'LBL_INVALID_EMAIL'										=> 'Email non Valide:',
	'LBL_DEFAULT_SUBPANEL_TITLE'							=> 'Suspects',
	'LBL_PROSPECT_LIST'										=> 'Liste des Suspects',

	'LBL_CONVERT_BUTTON_KEY'								=> 'V',
	'LBL_CONVERT_BUTTON_TITLE'								=> 'Convertir le Suspect',
	'LBL_CONVERT_BUTTON_LABEL'								=> 'Convertir le Suspect',
	'LBL_CONVERTPROSPECT'									=> 'Convertir le Suspect',
	'LNK_NEW_CONTACT'										=> 'Nouveau Contact',
	'LBL_CREATED_CONTACT'									=> 'Nouveau Contact créé',
	'LBL_BACKTO_PROSPECTS'									=> 'Retour aux Suspects',
	'LBL_CAMPAIGNS'											=> 'Campagnes',
	'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE'						=> 'Logs des Campagnes',
	'LBL_TRACKER_KEY'										=> 'Clé de tracking',
	'LBL_LEAD_ID'											=> 'Id Lead',
	'LBL_CONVERTED_LEAD'									=> 'Lead Convertit',
	'LBL_ACCOUNT_NAME'										=> 'Nom Compte',
	'LBL_EDIT_ACCOUNT_NAME'									=> 'Nom du Compte:',
	'LBL_CREATED_USER'										=> 'Créé par',
	'LBL_MODIFIED_USER'										=> 'Modifié par',
	'LBL_CAMPAIGNS_SUBPANEL_TITLE'							=> 'Campagnes',
	'LBL_HISTORY_SUBPANEL_TITLE'							=> 'Historique',
);

?>