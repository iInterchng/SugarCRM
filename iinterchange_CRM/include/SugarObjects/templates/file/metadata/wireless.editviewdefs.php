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
    		array (
      			'name' => 'document_name',
      			'label' => 'LBL_DOC_NAME',
    		),
    	),
     	array (
     		array (
      			'name' => 'uploadfile',
      			'displayParams' => array('link'=>'uploadfile', 'id'=>'id'),
     		),
    	),
      	array (
      		'active_date'
      	),
      	array (
      		'exp_date',
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