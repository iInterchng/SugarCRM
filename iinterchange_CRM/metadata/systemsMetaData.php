<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

$dictionary['systems'] = array (
	'table' => 'systems',
    'fields' => array (
		array(
			'name' =>'system_id',
			'type' =>'int',
			'auto_increment'=>true,
			'required'=>true
		),
		array(
			'name' =>'system_key',
			'type' =>'varchar',
			'len'=>'36'
		),
		array(
			'name' =>'user_id',
			'type' =>'id'
		),
		array(
			'name' =>'last_connect_date',
			'type' => 'datetime'
		),
		array(
			'name' =>'disabled',
			'type' =>'bool',
			'len'=>'1', 
			'default'=>'0',
		),
		array (
			'name' => 'date_entered',
			'type' => 'datetime'
		),
	),
	'indices' => array(
		array(
			'name' =>'systems_pk',
			'type' =>'primary',
			'fields'=> array('system_id')
		),
	),
);
?>
