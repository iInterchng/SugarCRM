<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

$viewdefs['KBDocuments']['listview'] = array(
	'KBDOCUMENT_NAME' => array(
		'width' => '45',
		'label' => 'LBL_NAME',
		'link' => true,
		'sortable' => false), 
	'ACTIVE_DATE' => array(
		'width' => '20',
		'label' => 'LBL_ACTIVE_DATE',
		'sortable' => false),
	'CREATED_BY' => array(
		'width' => '35',
		'label' => 'LBL_ARTICLE_AUTHOR_LIST',
		'sortable' => false),
);
?>
