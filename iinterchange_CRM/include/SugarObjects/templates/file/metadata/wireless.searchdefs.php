<?php
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/


$module_name = '<module_name>';
$searchdefs[$module_name] = array(
	'templateMeta' => array(
		'maxColumns' => '1',
		'widths' => array('label' => '10', 'field' => '30'),
	),
	'layout' => array(
		'basic_search' => array(
			'document_name',
		),
		'advanced_search' => array(
			'document_name',
		),
	),
);
?>
