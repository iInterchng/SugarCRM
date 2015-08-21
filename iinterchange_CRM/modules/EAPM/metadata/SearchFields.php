<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

$module_name = 'EAPM';
$searchFields[$module_name] =
	array (
		'type' => array( 'query_type'=>'default'),
		'name' => array( 'query_type'=>'default'),
		'application' => array( 'query_type'=>'application'),
		'validated' => array( 'query_type'=>'default'),
		'current_user_only'=> array('query_type'=>'default','db_field'=>array('assigned_user_id'),'my_items'=>true, 'vname' => 'LBL_CURRENT_USER_FILTER', 'type' => 'bool'),
		'assigned_user_id'=> array('query_type'=>'default'),
		'favorites_only' => array(
            'query_type'=>'format',
			'operator' => 'subquery',
			'subquery' => 'SELECT sugarfavorites.record_id FROM sugarfavorites
			                    WHERE sugarfavorites.deleted=0
			                        and sugarfavorites.module = "'.$module_name.'"
			                        and sugarfavorites.assigned_user_id = "{0}"',
			'db_field'=>array('id')),
	);
?>
