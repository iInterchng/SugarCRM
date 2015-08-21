<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/



$layout_defs['Contacts'] = array(
	// list of what Subpanels to show in the DetailView 
	'subpanel_setup' => array(
		'calls' => array(
			'order' => 10,
			'module' => 'Calls',
			'get_subpanel_data' => 'calls',
			'title_key' => 'LBL_CALLS_SUBPANEL_TITLE',
		),
		'meetings' => array(
			'order' => 20,
			'module' => 'Meetings',
			'get_subpanel_data' => 'meetings',
			'title_key' => 'LBL_MEETINGS_SUBPANEL_TITLE',		
		),
		'tasks' => array(
			'order' => 30,
			'module' => 'Tasks',
			'get_subpanel_data' => 'tasks',
			'title_key' => 'LBL_TASKS_SUBPANEL_TITLE',		
		),
		'accounts'=> array(
			'order' => 40,
			'module' => 'Accounts',
			'get_subpanel_data' => 'accounts',
			'title_key' => 'LBL_ACCOUNTS_SUBPANEL_TITLE',		
		),		
		'contacts'=> array(
			'order' => 50,
			'module' => 'Contacts',
			'get_subpanel_data' => 'contacts',
			'title_key' => 'LBL_CONTACTS_SUBPANEL_TITLE',		
		),
		'opportunities'=> array(
			'order' => 60,
			'module' => 'Opportunities',
			'get_subpanel_data' => 'opportunities',
			'title_key' => 'LBL_OPPORTUNITIES_SUBPANEL_TITLE',		
		),
		'cases'=> array(
			'order' => 70,
			'module' => 'Cases',
			'get_subpanel_data' => 'cases',
			'title_key' => 'LBL_CASES_SUBPANEL_TITLE',		
		),
	),	
);
?>