<?php

/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

















if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


$mod_strings = array (
	'LBL_MODULE_NAME'										=> 'Ventes',
	'LBL_MODULE_TITLE'										=> 'Ventes',
	'LBL_SEARCH_FORM_TITLE'									=> 'Rechercher',
	'LBL_VIEW_FORM_TITLE'									=> 'Ventes',
	'LBL_LIST_FORM_TITLE'									=> 'Listes des Ventes',
	'LBL_SALE_NAME'											=> 'Nom de la Vente:',
	'LBL_SALE'												=> 'Vente :',
	'LBL_NAME'												=> 'Name',
	'LBL_LIST_SALE_NAME'									=> 'Nom',
	'LBL_LIST_ACCOUNT_NAME'									=> 'Nom Compte',
	'LBL_LIST_AMOUNT'										=> 'Montant',
	'LBL_LIST_DATE_CLOSED'									=> 'Fermée',
	'LBL_LIST_SALE_STAGE'									=> 'Etape de Vente',
	'LBL_ACCOUNT_ID'										=> 'Réf Compte',
	'LBL_CURRENCY_ID'										=> 'Réf devise',
	'LBL_TEAM_ID'											=> 'Réf Equipe',

	
	
	
	

	'UPDATE'												=> 'Ventes - Devise Mise à Jour',
	'UPDATE_DOLLARAMOUNTS'									=> 'Mise à  Jour des montants en devise par défaut',
	'UPDATE_VERIFY'											=> 'Vérifier les Montants',
	'UPDATE_VERIFY_TXT'										=> 'Vérifier la valeur des Montant : chiffre uniquement et séparateur decimal (.)',
	'UPDATE_FIX'											=> 'Réparer les montants',
	'UPDATE_FIX_TXT'										=> 'Tentative de correction des montants invalides. Les anciens montants seront sauvegardés en base.',
	'UPDATE_DOLLARAMOUNTS_TXT'								=> 'Mise à  Jour des montants en devise par défaut',
	'UPDATE_CREATE_CURRENCY'								=> 'Créer une nouvelle Devise',
	'UPDATE_VERIFY_FAIL'									=> 'Echec de Verification de l&#39;enregistrement :',
	'UPDATE_VERIFY_CURAMOUNT'								=> 'Montant actuel :',
	'UPDATE_VERIFY_FIX'										=> 'Lancer la réparation',
	'UPDATE_INCLUDE_CLOSE'									=> 'Inclure enregistrements clos',
	'UPDATE_VERIFY_NEWAMOUNT'								=> 'Nouveau Montant :',
	'UPDATE_VERIFY_NEWCURRENCY'								=> 'Nouvelle Devise :',
	'UPDATE_DONE'											=> 'Terminé',
	'UPDATE_BUG_COUNT'										=> 'Bugs trouvés, tentive de correction :',
	'UPDATE_BUGFOUND_COUNT'									=> 'Bugs trouvés :',
	'UPDATE_COUNT'											=> 'Nombre d&#39;enregistrement Mise à Jour :',
	'UPDATE_RESTORE_COUNT'									=> 'Nombre de Montants enregistrés restaurés :',
	'UPDATE_RESTORE'										=> 'Restaurer les Montants ',
	'UPDATE_RESTORE_TXT'									=> 'Montants restaurés sur la sauvegarde créée lors de la réparation.',
	'UPDATE_FAIL'											=> 'Mise à Jour Impossible',
	'UPDATE_NULL_VALUE'										=> 'Montant NULL, mise à 0',
	'UPDATE_MERGE'											=> 'Fusionner les devises',
	'UPDATE_MERGE_TXT'										=> 'Merge multiple currencies into a single currency. If there are multiple currency records for the same currency, you merge them together. This will also merge the currencies for all other modules.',
	'LBL_ACCOUNT_NAME'										=> 'Nom du Compte :',
	'LBL_AMOUNT'											=> 'Montant :',
	'LBL_AMOUNT_USDOLLAR'									=> 'Montant (Devise par défaut) :',
	'LBL_CURRENCY'											=> 'Devise :',
	'LBL_DATE_CLOSED'										=> 'Date de cloture (prévue):',
	'LBL_TYPE'												=> 'Type :',
	'LBL_CAMPAIGN'											=> 'Campagne :',
	'LBL_NEXT_STEP'											=> 'Prochaine étape:',
	'LBL_LEAD_SOURCE'										=> 'Origine Principale :',
	'LBL_SALES_STAGE'										=> 'Phase de vente :',
	'LBL_PROBABILITY'										=> 'Probabilité (%) :',
	'LBL_DESCRIPTION'										=> 'Description :',
	'LBL_DUPLICATE'											=> 'Possibilité de duplication des Ventes',
	'MSG_DUPLICATE'											=> 'Possibilité de doublon des Ventes. Vous pouvez soit selectionner une Affaire dans la liste ci dessous ou cliquer sur "Sauvegarder" pour poursuivre la création.',
	'LBL_NEW_FORM_TITLE'									=> 'Créer une Vente',
	'LNK_NEW_SALE'											=> 'Créer une Vente',
	'LNK_SALE_LIST'											=> 'Ventes',
	'ERR_DELETE_RECORD'										=> 'Un numéro d&#39;enregistrement doit être spécifié pour toute suppression.',
	'LBL_TOP_SALES'											=> 'Top des Ventes',
	'NTC_REMOVE_OPP_CONFIRMATION'							=> 'Etes-vous sûr(e) de vouloir supprimer ce Contact pour cette Affaire ? ',
	'SALE_REMOVE_PROJECT_CONFIRM'							=> 'Etes-vous sûr(e) de vouloir supprimer cette Vente de ce Projet ?',
	'LBL_DEFAULT_SUBPANEL_TITLE'							=> 'Ventes',
	'LBL_ACTIVITIES_SUBPANEL_TITLE'							=> 'Activités à réaliser',
	'LBL_HISTORY_SUBPANEL_TITLE'							=> 'Historique et Activités terminées',
	'LBL_RAW_AMOUNT'										=> 'Montant Brut',

	'LBL_LEADS_SUBPANEL_TITLE'								=> 'Leads',
	'LBL_CONTACTS_SUBPANEL_TITLE'							=> 'Contacts',
	'LBL_PROJECTS_SUBPANEL_TITLE'							=> 'Projets',
	'LBL_ASSIGNED_TO_NAME'									=> 'Assigné à :',
	'LBL_LIST_ASSIGNED_TO_NAME'								=> 'Assigné à ',
	'LBL_MY_CLOSED_SALES'									=> 'Mes Ventes cloturées',
	'LBL_TOTAL_SALES'										=> 'Total des Ventes',
	'LBL_CLOSED_WON_SALES'									=> 'Ventes cloturés et gagnés',
	'LBL_ASSIGNED_TO_ID'									=> 'Assigné à (ID)',
	'LBL_CREATED_ID'										=> 'Créé par (ID)',
	'LBL_MODIFIED_ID'										=> 'Modifié par (ID)',
	'LBL_MODIFIED_NAME'										=> 'Modifié par',
	'LBL_SALE_INFORMATION'									=> 'Informations de Ventes',
	'LBL_CURRENCY_ID'										=> 'Devise ID',
	'LBL_CURRENCY_NAME'										=> 'Devise',
	'LBL_CURRENCY_SYMBOL'									=> 'Devise symbole',
);

?>
