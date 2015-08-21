<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/




$listViewDefs['Bugs'] = array(
	'BUG_NUMBER' => array(
		'width' => '5',
		'label' => 'LBL_NUMBER',
		'link' => true,
        'default' => true),
	'NAME' => array(
		'width' => '32',
		'label' => 'LBL_SUBJECT',
		'default' => true,
        'link' => true),
	'STATUS' => array(
		'width' => '10',
		'label' => 'LBL_STATUS',
        'default' => true),
    'PRIORITY' => array(
        'width' => '10',
        'label' => 'LBL_PRIORITY',
        'default' => true),
    'RESOLUTION' => array(
        'width' => '10',
        'label' => 'LBL_RESOLUTION',
        'default' => true),
	'TEAM_NAME' => array(
		'width' => '9',
		'label' => 'LBL_TEAM',
        'default' => true),
	'ASSIGNED_USER_NAME' => array(
		'width' => '9',
		'label' => 'LBL_ASSIGNED_USER',
        'default' => true),

);
?>
