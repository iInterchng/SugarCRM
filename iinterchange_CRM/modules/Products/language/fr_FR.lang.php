<?php

/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

















if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');



$mod_strings = array (
	'LBL_MODULE_NAME'										=> 'Produits',
	'LBL_MODULE_TITLE'										=> 'Produits',
	'LBL_SEARCH_FORM_TITLE'									=> 'Rechercher un Produit',
	'LBL_LIST_FORM_TITLE'									=> 'Liste Produits',
	'LBL_NEW_FORM_TITLE'									=> 'Créer Produit',
	'LBL_PRODUCT'											=> 'Produit:',
	'LBL_RELATED_PRODUCTS'									=> 'Produit lié',
	'LBL_LIST_NAME'											=> 'Product',
	'LBL_LIST_MANUFACTURER'									=> 'Fabricant',
	'LBL_LIST_LBL_MFT_PART_NUM'								=> 'N° série Fabricant',
	'LBL_LIST_QUANTITY'										=> 'Quantité',
	'LBL_LIST_COST_PRICE'									=> 'Prix de Revient',
	'LBL_LIST_DISCOUNT_PRICE'								=> 'Prix remisé',
	'LBL_LIST_LIST_PRICE'									=> 'Listing',
	'LBL_LIST_STATUS'										=> 'Statut',
	'LBL_LIST_ACCOUNT_NAME'									=> 'Nom Compte',
	'LBL_LIST_CONTACT_NAME'									=> 'Nom Contact',
	'LBL_LIST_QUOTE_NAME'									=> 'Nom Devis',
	'LBL_LIST_DATE_PURCHASED'								=> 'Acheté le',
	'LBL_LIST_SUPPORT_EXPIRES'								=> 'Expire le',
	'LBL_NAME'												=> 'Produit:',
	'LBL_URL'												=> 'URL Produit:',
	'LBL_QUOTE_NAME'										=> 'Nom Devis:',
	'LBL_CONTACT_NAME'										=> 'Nom du Contact:',
	'LBL_DATE_PURCHASED'									=> 'Acheté:',
	'LBL_DATE_SUPPORT_EXPIRES'								=> 'Expiration du Support:',
	'LBL_DATE_SUPPORT_STARTS'								=> 'Démarrage Support:',
	'LBL_COST_PRICE'										=> 'Prix de Revient:',
	'LBL_DISCOUNT_PRICE'									=> 'Prix Unitaire:',
	'LBL_DEAL_TOT'											=> 'Remise:',
	'LBL_DISCOUNT_RATE'										=> 'Taux de remise',
	'LBL_DISCOUNT_RATE_USDOLLAR'							=> 'Taux de remise (devise par défaut)',
	'LBL_DISCOUNT_TOTAL'									=> 'Remise',
	'LBL_DISCOUNT_TOTAL_USDOLLAR'							=> 'Remise (devise par défaut)',
	'LBL_SELECT_DISCOUNT'									=> 'Remise en %',
	'LBL_LIST_PRICE'										=> 'Prix Public:',
	'LBL_VENDOR_PART_NUM'									=> 'N° série Revendeur:',
	'LBL_MFT_PART_NUM'										=> 'N° série Fabricant:',
	'LBL_DISCOUNT_PRICE_DATE'								=> 'Date promotion:',
	'LBL_WEIGHT'											=> 'Poids:',
	'LBL_DESCRIPTION'										=> 'Description:',
	'LBL_TYPE'												=> 'Type:',
	'LBL_CATEGORY'											=> 'Catégorie',
	'LBL_QUANTITY'											=> 'Quantité:',
	'LBL_STATUS'											=> 'Statut:',
	'LBL_TAX_CLASS'											=> 'Classe de Taxe:',
	'LBL_MANUFACTURER'										=> 'Fabricant:',
	'LBL_SUPPORT_DESCRIPTION'								=> 'Desc Support:',
	'LBL_SUPPORT_TERM'										=> 'Durée du Support:',
	'LBL_SUPPORT_NAME'										=> 'Titre du Support:',
	'LBL_SUPPORT_CONTACT'									=> 'Interlocuteur Support:',
	'LBL_PRICING_FORMULA'									=> 'Formule de Pricing:',
	'LBL_ACCOUNT_NAME'										=> 'Nom du Compte:',
	'LNK_PRODUCT_LIST'										=> 'Produits',
	'LNK_NEW_PRODUCT'										=> 'Créer Produit',
	'NTC_DELETE_CONFIRMATION'								=> 'Etes vous sûr de vouloir supprimer cet enregistrement ?',
	'NTC_REMOVE_CONFIRMATION'								=> 'Etes vous sûr de vouloir supprimer ce Produit ?',
	'ERR_DELETE_RECORD'										=> 'Un numéro d&#39;enregistrement doit être spécifié pour toute suppression.',
	'LBL_CURRENCY'											=> 'Devise:',
	'LBL_ASSET_NUMBER'										=> 'Autre N°:',
	'LBL_SERIAL_NUMBER'										=> 'N° de série:',
	'LBL_BOOK_VALUE'										=> 'Prix réservé:',
	'LBL_BOOK_VALUE_USDOLLAR'								=> 'Prix réservé (devise par défaut):',
	'LBL_BOOK_VALUE_DATE'									=> 'Date de réservation:',
	'LBL_DEFAULT_SUBPANEL_TITLE'							=> 'Produits',
	'LBL_RELATED_PRODUCTS_TITLE'							=> 'Produit lié',
	'LBL_WEBSITE'											=> 'Site Web',
	'LBL_COST_USDOLLAR'										=> 'Prix de revient (devise par défaut)',
	'LBL_DISCOUNT_USDOLLAR'									=> 'Prix unitaire (devise par défaut)',
	'LBL_LIST_USDOLLAR'										=> 'Prix Public (devise par défaut)',
	'LBL_PRICING_FACTOR'									=> 'Coef pour le prix',
	'LBL_ACCOUNT_ID'										=> 'Compte (ID)',
	'LBL_CONTACT_ID'										=> 'Ident. Contact',
	'LBL_CATEGORY_NAME'										=> 'Nom de la Catégorie:',
	'LBL_NOTES_SUBPANEL_TITLE'								=> 'Notes',
	'LBL_MEMBER_OF'											=> 'Membre de:',
	'LBL_PROJECTS_SUBPANEL_TITLE'							=> 'Projets',
        'LBL_DOCUMENTS_SUBPANEL_TITLE'                                                  => 'Documents',
	
	'LBL_CONTRACTS_SUBPANEL_TITLE'							=> 'Contrats',
	'LBL_CONTRACTS'											=> 'Contracts',
	'LBL_PRODUCT_CATEGORIES'								=> 'Categories de Produit',
	'LBL_PRODUCT_TYPES'										=> 'Types de Produit',
	'LBL_ASSIGNED_TO_NAME'									=> 'Assigné à:',
	'LBL_PRODUCT_TEMPLATE_ID'								=> 'ID Modèle Produit:',
	'LBL_QUOTE_ID'											=> 'ID Devis',
	'LBL_CREATED_USER'										=> 'Créé par',
	'LBL_MODIFIED_USER'										=> 'Modifié par',
	'LBL_QUOTE'												=> 'Devis',
	'LBL_CONTACT'											=> 'Contact',
	'LBL_DISCOUNT_TOTAL'									=> 'Total Remise',   
	'LBL_DISCOUNT_AMOUNT'									=> 'Montant Remise',   
	'LBL_CURRENCY_SYMBOL_NAME'								=> 'Symbole de la devise',

	'LBL_PRODUCTS_SUBPANEL_TITLE'							=> 'Produits',
	'LNK_IMPORT_PRODUCTS'									=> 'Import Produits',
);

?>
