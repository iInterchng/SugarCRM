<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

$searchFields['Employees'] = 
	array (
		'first_name' => array( 'query_type'=>'default'),
		'last_name'=> array('query_type'=>'default'),	
		'search_name'=> array('query_type'=>'default','db_field'=>array('first_name','last_name')),
        'email'=> array(
			'query_type' => 'default',
			'operator' => 'subquery',
			'subquery' => 'SELECT eabr.bean_id FROM email_addr_bean_rel eabr JOIN email_addresses ea ON (ea.id = eabr.email_address_id) WHERE eabr.deleted=0 and ea.email_address LIKE',
			'db_field' => array(
				'id',
			)
		),
        'phone'=> array(
            'query_type' => 'default',
            'operator' => 'subquery',
            'subquery' => array('SELECT id FROM users where phone_home LIKE ',
                'SELECT id FROM users where phone_fax LIKE',
                'SELECT id FROM users where phone_other LIKE',
                'SELECT id FROM users where phone_work LIKE',
                'SELECT id FROM users where phone_mobile LIKE',
                'OR' =>true              
            ),
            'db_field' => array(
                'id',
            )
        ),
		'current_user_only'=> array('query_type'=>'default','db_field'=>array('assigned_user_id'),'my_items'=>true, 'vname' => 'LBL_CURRENT_USER_FILTER', 'type' => 'bool'),
		      
		'employee_status'=> array('query_type'=>'default', 'options' => 'employee_status_dom', 'template_var' => 'STATUS_OPTIONS', 'options_add_blank' => true)
	);
?>
