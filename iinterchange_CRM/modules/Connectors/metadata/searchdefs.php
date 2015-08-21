<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

$searchdefs = array(
	'ext_soap_hoovers' => array(
		'Leads' => array(
			'recname',
		),
		'Accounts' => array(
			'recname',
		),
		'Contacts' => array(
		    'recname',
		),	
	),
	
	
	'ext_rest_zoominfocompany' => array(
		'Leads' => array(
			'companyname',
			'state',
			'countrycode'
		),
		'Accounts' => array(
			'companyname',
			'state',
			'countrycode'
		),
		'Contacts' => array(
			'companyname',
			'state',
			'countrycode'
		)
	),	
	
	'ext_rest_zoominfoperson' => array(
		'Leads' => array(
			'firstname',
			'lastname',
			'email',
			'companyname'
		),
		'Accounts' => array(
			'email',
			'companyname'
		),
		'Contacts' => array(
			'firstname',
			'lastname',
			'email',
			'companyname'
		)
	),	
)
?>
