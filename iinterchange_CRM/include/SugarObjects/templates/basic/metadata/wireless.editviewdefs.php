<?php
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

$module_name = '<module_name>';
$viewdefs[$module_name]['EditView'] = array(
	'templateMeta' => array('maxColumns' => '1',
                            'widths' => array(
                                            array('label' => '10', 'field' => '30'),
                                            array('label' => '10', 'field' => '30')
                                            ),
                            ),


	'panels' => array (
		array (
    		'name',
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