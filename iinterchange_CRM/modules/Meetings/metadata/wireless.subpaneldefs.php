<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/



$layout_defs['Meetings'] = array(
	// list of what Subpanels to show in the DetailView 
	'subpanel_setup' => array(		
		'contacts'=> array(
			'order' => 10,
			'module' => 'Contacts',
			'get_subpanel_data' => 'contacts',
			'title_key' => 'LBL_CONTACTS_SUBPANEL_TITLE',		
		),
		'leads' => array(
			'order' => 30,
			'module' => 'Leads',
			'get_subpanel_data' => 'leads',
			'title_key' => 'LBL_LEADS_SUBPANEL_TITLE',
		),
	),
);
?>