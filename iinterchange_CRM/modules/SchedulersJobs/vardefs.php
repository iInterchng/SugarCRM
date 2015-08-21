<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/


$dictionary['SchedulersJob'] = array('table' => 'schedulers_times',
	'fields' => array (
		'id' => array (
			'name' => 'id',
			'vname' => 'LBL_NAME',
			'type' => 'id',
			'len' => '36',
			'required' => true,
			'reportable'=>false,
		),
		'deleted' => array (
			'name' => 'deleted',
			'vname' => 'LBL_DELETED',
			'type' => 'bool',
			'required' => true,
			'default' => '0',
			'reportable'=>false,
		),
		'date_entered' => array (
			'name' => 'date_entered',
			'vname' => 'LBL_DATE_ENTERED',
			'type' => 'datetime',
			'required' => true,
		),
		'date_modified' => array (
			'name' => 'date_modified',
			'vname' => 'LBL_DATE_MODIFIED',
			'type' => 'datetime',
			'required' => true,
		),
		'scheduler_id' => array (
			'name' => 'scheduler_id',
			'vname' => 'LBL_SCHEDULER_ID',
			'type' => 'id',
			'db_type' => 'varchar',
			'len' => 36,
			'required' => true,
			'reportable' => false,
		),
		'execute_time' => array (
			'name' => 'execute_time',
			'vname' => 'LBL_EXECUTE_TIME',
			'type' => 'datetime',
			'required' => true,
			'importable' => 'required',
		),
		'status' => array (
			'name' => 'status',
			'vname' => 'LBL_STATUS',
			'type' => 'enum',
			'options'	=> 'schedulers_times_dom',
			'len' => 100,
			'required' => true,
			'reportable' => true,
			'default' => 'ready',
		),
	),
	'indices' => array (
		array(
			'name' =>'schedulers_timespk',
			'type' =>'primary',
			'fields' => array(
				'id'
			)
		),
		array(
		'name' =>'idx_scheduler_id',
		'type'=>'index',
		'fields' => array(
			'scheduler_id',
			'execute_time',
			)
		),
	),
);

?>
