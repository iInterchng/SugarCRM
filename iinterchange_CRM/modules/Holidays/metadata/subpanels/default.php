<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/



$subpanel_layout = array(
	'top_buttons' => array(
			array('widget_class' => 'SubPanelTopCreateButton'),
	),

	'where' => '',

	'list_fields' => array(
        'holiday_date'=>array(
		 	'vname' => 'LBL_HOLIDAY_DATE',
			'widget_class' => 'SubPanelDetailViewLink',
			'width' => '21%',
		),
		'description'=>array(
		 	'vname' => 'LBL_DESCRIPTION',
			'width' => '75%',
			'sortable'=>false,				
		),
		'edit_button'=>array(
			'vname' => 'LBL_EDIT_BUTTON',
			 'widget_class' => 'SubPanelEditButton',
			 'width' => '2%',
		),


	),
);

//remove the administrator edit button holiday for the user admin only
global $current_user;
$result = $GLOBALS['db']->query("SELECT is_admin FROM users WHERE id='$_REQUEST[record]'");
$row = $GLOBALS['db']->fetchByAssoc($result);
if(!is_admin($current_user)&& is_admin_for_module($current_user,'Users')&& $row['is_admin']==1){
	unset($subpanel_layout['list_fields']['edit_button']);
}
?>