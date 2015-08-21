<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

$mapping = array(
	'beans' => array (
		'Accounts' => array (
		    'name'=>'name',
		),
		'Contacts' => array (
		    'name'=>'account_name',
		),
		'Leads' => array (
		    'name'=>'account_name',
		),
		'Prospects' => array(
		    'name'=>'account_name',
		)
	),
);
?>