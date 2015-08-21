<?php
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

$vardefs = array (
	'fields' => array (
		$_object_name . '_number' => array (
			'name' => $_object_name . '_number',
			'vname' => 'LBL_NUMBER',
			'type' => 'int',
			'len' => 11,
			'required' => true,
			'auto_increment' => true,
			'unified_search' => true,
			'comment' => 'Visual unique identifier',
			'duplicate_merge' => 'disabled',
			'disable_num_format' => true,
		),

		'name' => array (
			'name' => 'name',
			'vname' => 'LBL_SUBJECT',
			'type' => 'name',
			'dbType' => 'varchar',
			'len' => 255,
			'audited' => true,
			'unified_search' => true,
			'comment' => 'The short description of the bug',
			'merge_filter' => 'selected',
			'required'=>true,
            'importable' => 'required',
			
		),
		  'type' => 
  array (
    'name' => 'type',
    'vname' => 'LBL_TYPE',
    'type' => 'enum',
    'options' => strtolower($object_name) . '_type_dom',
    'len'=>255,
    'comment' => 'The type of issue (ex: issue, feature)',
    'merge_filter' => 'enabled',
  ),

		'status' => array (
			'name' => 'status',
			'vname' => 'LBL_STATUS',
			'type' => 'enum',
			'options' => strtolower($object_name) . '_status_dom',
			'len' => 100,
			'audited' => true,
			'comment' => 'The status of the issue',
			'merge_filter' => 'enabled',
			
		),

		'priority' => array (
			'name' => 'priority',
			'vname' => 'LBL_PRIORITY',
			'type' => 'enum',
			'options' => strtolower($object_name) . '_priority_dom',
			'len' => 100,
			'audited' => true,
			'comment' => 'An indication of the priorty of the issue',
			'merge_filter' => 'enabled',
			
		),

		'resolution' => array (
			'name' => 'resolution',
			'vname' => 'LBL_RESOLUTION',
			'type' => 'enum',
			'options' => strtolower($object_name) . '_resolution_dom',
			'len' => 255,
			'audited' => true,
			'comment' => 'An indication of how the issue was resolved',
			'merge_filter' => 'enabled',
			
		),

	'system_id' => array (
			'name' => 'system_id',
			'vname' => 'LBL_SYSTEM_ID',
			'type' => 'int',
			'comment' => 'The offline client device that created the bug'
		),


			//not in cases.
	'work_log' => array (
			'name' => 'work_log',
			'vname' => 'LBL_WORK_LOG',
			'type' => 'text',
			'comment' => 'Free-form text used to denote activities of interest'
		),

		
	),
	'indices'=>array(
		 'number'=>array('name' =>strtolower($module).'numk', 'type' =>'unique', 'fields'=>array($_object_name . '_number'))
	),
	
);
?>