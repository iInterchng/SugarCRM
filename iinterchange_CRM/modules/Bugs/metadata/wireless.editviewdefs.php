<?php
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/


$viewdefs['Bugs']['EditView'] = array(
	'templateMeta' => array('maxColumns' => '1',
                            'widths' => array(
                                            array('label' => '10', 'field' => '30'),
                                            array('label' => '10', 'field' => '30')
                                            ),
                            ),


	'panels' => array (
    	array (
			array('name' => 'bug_number','displayParams'=>array('required'=>false,'wireless_detail_only'=>true,)),
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