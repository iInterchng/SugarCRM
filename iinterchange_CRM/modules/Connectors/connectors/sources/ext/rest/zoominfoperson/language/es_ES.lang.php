<?php

/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/


















if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');



$connector_strings = array (
        'LBL_LICENSING_INFO' => '<table border="0" cellspacing="1"><tr><td valign="top" width="35%" class="dataLabel"><image src="' . getWebPath('modules/Connectors/connectors/sources/ext/rest/zoominfoperson/images/zoominfo.gif') . '" border="0"></td><td width="65%" valign="top" class="dataLabel">' .
                            'ZoomInfo&#169; provee extensa información sobre 45 millones de gente de negocio en unas 5 millones de compañías.  Sepa más.  <a target="_blank" href="http://www.zoominfo.com/about">http://www.zoominfo.com/about</a></td></tr></table>',    
    
    'LBL_SEARCH_FIELDS_INFO' => 'Los siguientes campos están soportados por el API de Zoominfo&#169; para Personas: Nombre, Apellido y Dirección de Email.',    
    
    	'LBL_ID' => 'ID',
	'LBL_EMAIL' => 'Dirección de Email',
	'LBL_FIRST_NAME' => 'Nombre',
	'LBL_LAST_NAME' => 'Apellido',
	'LBL_JOB_TITLE' => 'Puesto Laboral',
	'LBL_IMAGE_URL' => 'URL de Imagen',
	'LBL_SUMMARY_URL' => 'URL de Resumen',
	'LBL_COMPANY_NAME' => 'Nombre de Compañía',
	'LBL_ZOOMPERSON_URL' => 'URL de Persona Zoominfo',
	'LBL_DIRECT_PHONE' => 'Teléfono Directo',
	'LBL_COMPANY_PHONE' => 'Teléfono de Compañía',
	'LBL_FAX' => 'Fax',

    'LBL_CURRENT_JOB_TITLE' => 'Cargo en Trabajo Actual',
    'LBL_CURRENT_JOB_START_DATE' => 'Fecha de Inicio del Trabajo Actual',
	'LBL_CURRENT_JOB_COMPANY_NAME' => 'Nombre de Compañía del Trabajo Actual',
	'LBL_CURRENT_JOB_COMPANY_STREET' => 'Calle de Dirección del Trabajo Actual',
	'LBL_CURRENT_JOB_COMPANY_CITY' => 'Ciudad de Dirección del Trabajo Actual',
	'LBL_CURRENT_JOB_COMPANY_STATE' => 'Estado/Provincia del Trabajo Actual',
	'LBL_CURRENT_JOB_COMPANY_ZIP' => 'CP del Trabajo Actual',
	'LBL_CURRENT_JOB_COMPANY_COUNTRY_CODE' => 'Código de País del Trabajo Actual',
	'LBL_CURRENT_INDUSTRY' => 'Industria del Trabajo Actual',
	'LBL_BIOGRAPHY' => 'Biografía',
	'LBL_EDUCATION_SCHOOL' => 'Escuela/Universidad',                       	
    'LBL_AFFILIATION_TITLE' => 'Cargo de Trabajo de Afilicación',
    'LBL_AFFILIATION_COMPANY_PHONE' => 'Teléfono de Compañía de Afiliación',
    'LBL_AFFILIATION_COMPANY_NAME' => 'Nombre de Compañía de Afiliación',
    'LBL_AFFILIATION_COMPANY_WEBSITE' => 'Sitio web de Compañía de Afiliación',

		'person_search_url' => 'URL de Consulta de Búsqueda de Persona',
    'person_detail_url' => 'URL de Consulta de Detalle de Persona',
	'partner_code' => 'Código del API del Partner',
	'api_key' => 'Clave API',
	
		'ERROR_LBL_CONNECTION_PROBLEM' => 'Error: No ha sido posible realizar la conexión al servidor de Zoominfo - Conector para Personas.',
);

?>
