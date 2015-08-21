<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/




$listViewDefs['Holidays'] = array(
	'HOLIDAY_DATE' => array(
		'width' => '20',  
		'label' => 'LBL_HOLIDAY_DATE', 
		'link' => true,
        'default' => true),
	'DESCRIPTION' => array(
		'width' => '40', 
		'label' => 'LBL_DESCRIPTION',
		'sortable' => false,
        'default' => true)
);
?>
