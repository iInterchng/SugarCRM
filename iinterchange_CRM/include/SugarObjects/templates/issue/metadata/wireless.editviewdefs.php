<?php
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

$module_name = '<module_name>';
$_object_name = '<_object_name>';
$viewdefs[$module_name]['EditView'] = array(
	'templateMeta' => array('maxColumns' => '1',
                            'widths' => array(
                                            array('label' => '10', 'field' => '30'),
                                            array('label' => '10', 'field' => '30')
                                            ),
                            ),


	'panels' => array (
    	array (
			array('name' => $_object_name . '_number','displayParams'=>array('required'=>false,'wireless_detail_only'=>true,)),
		),
		array (
			'priority'
		),
		array (
			'status',
		),
		array (
			array (
				'name' => 'name',
				'label' => 'LBL_SUBJECT',
			)
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