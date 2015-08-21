<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/



$subpanel_layout = array(
	'top_buttons' => array(
		array('widget_class' => 'SubPanelTopCreateButton'),
		array('widget_class' => 'SubPanelTopSelectButton', 'popup_module' => 'Accounts'),
	),

	'where' => '',
	
	'list_fields' => array (
	  'name' => 
	  array (
	    'vname' => 'LBL_LIST_ACCOUNT_NAME',
	    'widget_class' => 'SubPanelDetailViewLink',
	    'width' => '45%',
	    'default' => true,
	  ),
	  'billing_address_city' => 
	  array (
	    'vname' => 'LBL_LIST_CITY',
	    'width' => '20%',
	    'default' => true,
	  ),
	  'billing_address_country' => 
	  array (
	    'type' => 'varchar',
	    'vname' => 'LBL_BILLING_ADDRESS_COUNTRY',
	    'width' => '7%',
	    'default' => true,
	  ),
	  'phone_office' => 
	  array (
	    'vname' => 'LBL_LIST_PHONE',
	    'width' => '20%',
	    'default' => true,
	  ),
	  'edit_button' => 
	  array (
	    'vname' => 'LBL_EDIT_BUTTON',
	    'widget_class' => 'SubPanelEditButton',
	    'width' => '4%',
	    'default' => true,
	  ),
	  'remove_button' => 
	  array (
	    'vname' => 'LBL_REMOVE',
	    'widget_class' => 'SubPanelRemoveButton',
	    'width' => '4%',
	    'default' => true,
	  ),
   )	
);
?>