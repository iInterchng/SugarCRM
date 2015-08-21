<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

$viewdefs['Cases']['listview'] = array(
	'CASE_NUMBER' => array(
		'width' => '10'),
	'NAME' => array(
		'width' => '35',
		'link' => true),
	'ACCOUNT_NAME' => array(
		'width' => '20',
        'sortable' => false),
	'PRIORITY' => array(
		'width' => '15'),
	'STATUS' => array(
		'width' => '15'),
);
?>
