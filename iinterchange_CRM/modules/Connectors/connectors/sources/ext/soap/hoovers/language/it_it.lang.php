<?php

/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/





if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


	
$connector_strings = array (
  'LBL_ID' => 'ID',
  'LBL_DUNS' => 'DUNS',
  'LBL_PARENT_DUNS' => 'Parent DUNS',
  'LBL_SYNOPSIS' => 'Synopsis',
  'hoovers_endpoint' => 'Endpoint URL',
  'hoovers_wsdl' => 'WSDL URL',
  'LBL_LICENSING_INFO' => '<table border="0" cellspacing="1"><tr><td valign="top" width="35%" class="dataLabel"><image src="modules/Connectors/connectors/sources/ext/soap/hoovers/images/hooversLogo.gif" border="0"></td><td width="65%" valign="top" class="dataLabel">Hoovers&#169; fornisce gratuitamente, agli utenti di SugarCRM, aggiornamenti su tutte le informazioni relative ad aziende. Per ottenere informazioni più dettagliate vai al sito <a href="http://www.hoovers.com" target="_blank">http://www.hoovers.com</a>.</td></tr></table>',
  'LBL_NAME' => 'Nome Azienda',
  'LBL_STREET' => 'Indirizzo',
  'LBL_ADDRESS_STREET1' => 'Indirizzo 1',
  'LBL_ADDRESS_STREET2' => 'Indirizzo 2',
  'LBL_CITY' => 'Comune',
  'LBL_STATE' => 'Provincia',
  'LBL_COUNTRY' => 'Nazione',
  'LBL_ZIP' => 'CAP',
  'LBL_FINSALES' => 'Vendite Annuali',
  'LBL_HQPHONE' => 'Telefono Ufficio',
  'LBL_TOTAL_EMPLOYEES' => 'Totale Dipendenti',
  'LBL_PRIMARY_URL' => 'URL Primario',
  'LBL_DESCRIPTION' => 'Descrizione',
  'LBL_LOCATION_TYPE' => 'Tipo Posizione',
  'LBL_COMPANY_TYPE' => 'Tipo Azienda',
  'ERROR_NULL_CLIENT' => 'Impossibile creare SoapClient per connettersi a Hoovers. Il servizio potrebbe essere non disponibile o la licenza potrebbe essere scaduta oppure hai raggiunto il limite di utilizzo giornaliero.',
  'ERROR_MISSING_SOAP_LIBRARIES' => 'Errore: Impossibile caricare le librerie SOAP (SoapClient, SoapHeader).',
  'hoovers_api_key' => 'Chiave API',
);

