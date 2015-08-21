<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

	

$connector_strings = array (
  'LBL_ID' => 'ID',
  'LBL_DUNS' => 'DUNS',
  'LBL_LICENSING_INFO' => '<table border="0" cellspacing="1"><tr><td valign="top" width="35%" class="dataLabel"><image src="modules/Connectors/connectors/sources/ext/soap/hoovers/images/hooversLogo.gif" border="0"></td><td width="65%" valign="top" class="dataLabel">Hoovers&#169; provee información gratuita y actualizada sobre compañías a usuarios de productos SugarCRM.  Para obtener una información más completa así como informes sobre compañías, industrias, y ejecutivos vaya a <a href="http://www.hoovers.com" target="_blank">http://www.hoovers.com</a>.</td></tr></table>',
  'LBL_NAME' => 'Nombre de Empresa',
  'LBL_PARENT_DUNS' => 'DUNS Padre',
  'LBL_STREET' => 'Calle',
  'LBL_ADDRESS_STREET1' => 'Calle de Dirección1',
  'LBL_ADDRESS_STREET2' => 'Calle de Dirección2',
  'LBL_CITY' => 'Ciudad',
  'LBL_STATE' => 'Estado/Provincia',
  'LBL_COUNTRY' => 'País',
  'LBL_ZIP' => 'Código Postal',
  'LBL_FINSALES' => 'Ventas Anuales',
  'LBL_HQPHONE' => 'Teléfono de Oficina',
  'LBL_TOTAL_EMPLOYEES' => 'Nº de Empleados',
  'LBL_PRIMARY_URL' => 'URL Principal',
  'LBL_DESCRIPTION' => 'Descripción',
  'LBL_SYNOPSIS' => 'Sinopsis',
  'LBL_LOCATION_TYPE' => 'Tipo de Ubicación',
  'LBL_COMPANY_TYPE' => 'Tipo de Empresa',
  'ERROR_NULL_CLIENT' => 'No ha sido posible crear un SoapClient para conectarse a Hoovers.  Es posible que el servicio no esté disponible o que su clave de licencia haya caducado o haya alcanzado el límite de uso diario.',
  'ERROR_MISSING_SOAP_LIBRARIES' => 'Error: No ha sido posible cargar las bibliotecas de SOAP (SoapClient, SoapHeader).',
  'hoovers_endpoint' => 'URL del punto final',
  'hoovers_wsdl' => 'URL WSDL',
  'hoovers_api_key' => 'Clave API',
);

