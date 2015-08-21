<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

$viewdefs['Bugs']['listview'] = array(
	'BUG_NUMBER' => array(
		'width' => '5',
		//'label' => 'LBL_LIST_NUMBER',
		'label' => 'LBL_BUG_NUMBER',
        'link' => true,
        'default' => true),
	'NAME' => array(
		'width' => '30',
		'label' => 'LBL_LIST_SUBJECT',
		'default' => true,
        'link' => true),
	'STATUS' => array(
		'width' => '10',
		'label' => 'LBL_LIST_STATUS',
        'default' => true),
    'TYPE' => array(
        'width' => '10',
        'label' => 'LBL_LIST_TYPE',
        'default' => true),
    'PRIORITY' => array(
        'width' => '10',
        'label' => 'LBL_LIST_PRIORITY',
        'default' => true),
/*
    'RELEASE_NAME' => array(
        'width' => '10',
        'label' => 'LBL_FOUND_IN_RELEASE',
        'default' => false,
        'related_fields' => array('found_in_release'),
        'module' => 'Releases',
        'id' => 'FOUND_IN_RELEASE',),
    'FIXED_IN_RELEASE_NAME' => array(
        'width' => '15',
        'label' => 'LBL_LIST_FIXED_IN_RELEASE',
        'default' => true,
        'related_fields' => array('fixed_in_release'),
        'module' => 'Releases',
        'id' => 'FIXED_IN_RELEASE',),
*/
        'RESOLUTION' => array(
        'width' => '10',
        'label' => 'LBL_LIST_RESOLUTION',
        'default' => false),
);
?>
