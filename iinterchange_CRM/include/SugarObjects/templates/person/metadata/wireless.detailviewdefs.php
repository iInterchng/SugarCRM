<?php
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

$module_name = '<module_name>';
$viewdefs[$module_name]['DetailView'] = array(
	'templateMeta' => array('form' => array('buttons'=>array('EDIT', 'DUPLICATE', 'DELETE',)),
                        	'maxColumns' => '1',
                        	'widths' => array(
                                        array('label' => '10', 'field' => '30'),
                                        array('label' => '10', 'field' => '30')
                                        ),
                        	),

	'panels' => array (
		array (
    		array (
      			'name' => 'full_name',
	  			'label' => 'LBL_NAME',
    		),
    	),
    	array (
    		array (
      			'name' => 'phone_work',
    		),
    	),
    	array (
    		'email1'
  		),
		array (
			'assigned_user_name',
		),
		array (
			'team_name',
		),
	)
);
?>