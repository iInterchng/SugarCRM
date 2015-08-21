<?php

/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/


















if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');




$connector_strings = array (
    
    'LBL_LICENSING_INFO' => '<table border="0" cellspacing="1"><tr><td valign="top" width="35%" class="dataLabel"><image src="' . getWebPath('modules/Connectors/connectors/sources/ext/soap/hoovers/images/hooversLogo.gif') . '" border="0"></td><td width="65%" valign="top" class="dataLabel">' .
                            'Hoovers&#169; fournit des données à jour gratuitement sur les sociétés pour les utilisateurs des produits SugarCRM. Pour avoir plus d\'information et de rapports sur les sociétés, et autres établissements aller sur <a href="http://www.hoovers.com" target="_blank">http://www.hoovers.com</a>.</td></tr></table>',    
    
        'LBL_SEARCH_FIELDS_INFO' => 'Les champs supportés par l&#39;API Hoovers sont : Nom de la société, Ville, Etat, Pays et Code postal.',
    
    	'LBL_ID' => 'ID',
	'LBL_NAME' => 'Nom de la société',
	'LBL_DUNS' => 'DUNS',
	'LBL_PARENT_DUNS' => 'DUNS Parent',	
	'LBL_STREET' => 'Adresse',
	'LBL_ADDRESS_STREET1' => 'Adresse Rue 1',
	'LBL_ADDRESS_STREET2' => 'Adresse Rue 2',	
	'LBL_CITY' => 'Ville',
	'LBL_STATE' => 'Etat',
	'LBL_COUNTRY' => 'Pays',
	'LBL_ZIP' => 'Code Postal',
	'LBL_FINSALES' => 'CA Annuel',
	'LBL_SALES' => 'CA Annuel',
	'LBL_HQPHONE' => 'Téléphone',
    	'LBL_TOTAL_EMPLOYEES' => 'Nombre Employés',
	'LBL_PRIMARY_URL' => 'Site Web',
	'LBL_DESCRIPTION' => 'Description',
	'LBL_SYNOPSIS' => 'Synopsis',	
	'LBL_LOCATION_TYPE' => 'Type de localisation',
	'LBL_COMPANY_TYPE' => 'Type de société',
	
	    	'ERROR_NULL_CLIENT' => 'Impossible de créer le client SOAP pour se connecter à Hoovers. Le service doit être indisponible ou votre licence à expiré ou bien vous avez atteint la limite du nombre de requête par jour autorisée.',
    	'ERROR_MISSING_SOAP_LIBRARIES' => 'Erreur : Impossible de charger la librairie SOAP (SoapClient, SoapHeader).',

		'hoovers_endpoint' => 'URL du Web Service',
	'hoovers_wsdl' => 'URL de la WSDL',
	'hoovers_api_key' => 'Clé API',
);

?>

