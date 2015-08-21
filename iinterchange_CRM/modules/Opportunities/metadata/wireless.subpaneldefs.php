<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/



$layout_defs['Opportunities'] = array(
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
		'leads'=> array(
			'order' => 40,
			'module' => 'Leads',
			'get_subpanel_data' => 'leads',
			'title_key' => 'LBL_LEADS_SUBPANEL_TITLE',		
		),	
		'contacts'=> array(
			'order' => 50,
			'module' => 'Contacts',
			'get_subpanel_data' => 'contacts',
			'title_key' => 'LBL_CONTACTS_SUBPANEL_TITLE',		
		),
	),	
);
?>