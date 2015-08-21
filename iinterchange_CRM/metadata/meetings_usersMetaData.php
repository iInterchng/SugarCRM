<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

$dictionary['meetings_users'] = array(
	'table' => 'meetings_users',
	'fields' => array(
		array(	'name'			=> 'id',
				'type'			=> 'varchar',
				'len'			=> '36',
		),
		array(	'name'			=> 'meeting_id',
				'type'			=> 'varchar',
				'len'			=> '36',
		),
		array(	'name'			=> 'user_id',
				'type'			=> 'varchar',
				'len'			=> '36', 
		),
		array(	'name'			=> 'required',
				'type'			=> 'varchar',
				'len'			=> '1',
				'default'		=> '1',
		),
		array(	'name'			=> 'accept_status', 
				'type'			=> 'varchar', 
				'len'			=> '25', 
				'default'		=> 'none',
		),
		array(	'name'			=> 'date_modified',
				'type'			=> 'datetime',
		),
		array(	'name'			=> 'deleted',
				'type'			=> 'bool', 
				'len'			=> '1', 
				'default'		=> '0', 
				'required'		=> false,
		),
    ),
	'indices' => array(
		array(	'name'			=> 'meetings_userspk', 
				'type'			=> 'primary', 
				'fields'		=> array('id'),
		),
		array(	'name'			=> 'idx_usr_mtg_mtg', 
				'type'			=> 'index', 
				'fields'		=> array('meeting_id'),
		),
		array(	'name'			=> 'idx_usr_mtg_usr', 
				'type'			=> 'index', 
				'fields'		=> array('user_id'),
		),
		array(	'name'			=> 'idx_meeting_users', 
				'type'			=> 'alternate_key', 
				'fields'		=> array('meeting_id', 'user_id'),
		),
	),
	'relationships' => array(
		'meetings_users' => array(
			'lhs_module'		=> 'Meetings',
			'lhs_table'			=> 'meetings', 
			'lhs_key'			=> 'id',
			'rhs_module'		=> 'Users', 
			'rhs_table'			=> 'users', 
			'rhs_key'			=> 'id',
			'relationship_type'	=> 'many-to-many',
			'join_table'		=> 'meetings_users', 
			'join_key_lhs'		=> 'meeting_id', 
			'join_key_rhs'		=> 'user_id',
		),
	),
);
?>