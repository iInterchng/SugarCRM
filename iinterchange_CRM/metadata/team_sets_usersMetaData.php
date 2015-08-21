<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

$dictionary['team_sets_users'] = array('table' => 'team_sets_users'
                               ,'fields' => array (
	  'team_set_id' => 
	  array (
	    'name' => 'team_set_id',
	    'type' => 'id',
	    'required' => true,
	  ),
	   'user_id' => 
	  array (
	    'name' => 'user_id',
	    'type' => 'id',
	    'required' => true,
	  ),       
	), 'indices' => array (
		array(
            'name' => 'idx_tmst_user',
            'type' => 'index',
            'fields' => array(
                'team_set_id',
				'user_id'
            )
        ) ,
        array(
            'name' => 'idx_user_tmst',
            'type' => 'index',
            'fields' => array(
                'user_id',
				'team_set_id'
            )
        ),
         array(
            'name' => 'idx_user_id',
            'type' => 'index',
            'fields' => array(
                'user_id',
            )
        )
	)
);
?>
