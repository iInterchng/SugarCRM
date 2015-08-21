<?php
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/


$viewdefs['Bugs']['DetailView'] = array(
	'templateMeta' => array('form' => array('buttons'=>array('EDIT', 'DUPLICATE', 'DELETE',)),
                        	'maxColumns' => '1',
                        	'widths' => array(
                                        array('label' => '10', 'field' => '30'),
                                        array('label' => '10', 'field' => '30')
                                        ),
                        	),

	'panels' => array (
    	array (
			'bug_number',
		),
		array (
			'priority'
		),
		array (
			'status',
		),
		array (
			array (
				'name' 	=> 'name',
				'label' => 'LBL_SUBJECT',
			),
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