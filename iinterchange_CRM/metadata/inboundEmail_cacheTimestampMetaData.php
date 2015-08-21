<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

$dictionary['InboundEmail_cacheTimestamp'] = array ('table' => 'inbound_email_cache_ts',
	'fields' => array (
		'id' => array (
			'name' => 'id',
			'vname' => 'LBL_ID',
			'type' => 'varchar',
			'len'	=> 255,
			'required' => true,
			'reportable' => false,
		),
		'ie_timestamp' => array(
			'name'	=> 'ie_timestamp',
			'type'	=> 'uint',
			'len'	=> 16,
			'required'	=> true,
		),
	),
	'indices' => array (
		array(
			'name' => 'ie_cachetimestamppk',
			'type' =>'primary',
			'fields' => array(
				'id'
			)
		),
	), /* end indices */
	'relationships' => array (
	), /* end relationships */
);

?>
