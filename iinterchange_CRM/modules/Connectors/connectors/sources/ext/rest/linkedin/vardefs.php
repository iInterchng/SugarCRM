<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

$dictionary['ext_rest_linkedin'] = array(

  'comment' => 'vardefs for linkedin connector',
  'fields' => array (
    'id' =>
	  array (
	    'name' => 'id',
	    'vname' => 'LBL_ID',
	    'type' => 'id',
	    'comment' => 'Unique identifier',
	  	'hidden' => true,
	),
    'name'=> array(
	    'name' => 'name',
	    'vname' => 'LBL_NAME',
	    'type' => 'varchar',
		'hover' => true,
	    'comment' => 'The name of the company',
    ),
  )
);
?>