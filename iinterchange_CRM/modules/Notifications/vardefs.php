<?php
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

$dictionary['Notifications'] = array(
	'table'=>'notifications',
	'audited'=>true,
	'fields'=>array (
  'is_read' => 
  array (
    'required' => false,
    'name' => 'is_read',
    'vname' => 'LBL_IS_READ',
    'type' => 'bool',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'false',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 1,
    'len' => '255',
  ),
),
	'relationships'=>array (
),
	'optimistic_lock'=>true,
);
require_once('include/SugarObjects/VardefManager.php');
VardefManager::createVardef('Notifications','Notifications', array('basic','assignable'));