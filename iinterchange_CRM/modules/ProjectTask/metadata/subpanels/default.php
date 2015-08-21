<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/




global $current_user, $app;
// check if $app present - if in Studio/MB then loading a subpanel definition through the SubpanelDefinitions class 'requires' this file without an $app
if (isset($app)){
	$projectId = $app->controller->record;
	
	$focus = new Project();
	$focus->retrieve($projectId);
	
	if (!$focus->isTemplate()){
		$subpanel_layout = array(
			'top_buttons' => array(
		        array('widget_class' => 'SubPanelTopCreateButton'),
					array('widget_class' => 'SubPanelTopSelectButton', 'popup_module' => 'ProjectTask'),
			),
		
			'where' => '',
		
		
			'list_fields' => array(
		        'name'=>array(
				 	'vname' => 'LBL_LIST_NAME',
					'widget_class' => 'SubPanelDetailViewLink',
					'width' => '9999%',
				),
				'percent_complete'=>array(
				 	'vname' => 'LBL_LIST_PERCENT_COMPLETE',
					'width' => '9999%',
				),
				'status'=>array(
				 	'vname' => 'LBL_LIST_STATUS',
					'width' => '9999%',
				),
				'assigned_user_name'=>array(
				 	'vname' => 'LBL_LIST_ASSIGNED_USER_ID',
				 	'module' => 'Users',
					'width' => '9999%',
				),
				'date_finish'=>array(
				 	'vname' => 'LBL_LIST_DATE_DUE',
					'width' => '9999%',
				),
			),
		);
	}
	else{
		$subpanel_layout = array(
	
		'top_buttons' => array(
		),
	
		'where' => '',
	
	
		'list_fields' => array(
	        'name'=>array(
			 	'vname' => 'LBL_LIST_NAME',
				'widget_class' => 'SubPanelDetailViewLink',
				'width' => '70%',
			),
			'date_start'=>array(
			 	'vname' => 'LBL_DATE_START',
				'width' => '15%',
			),
	        'date_finish'=>array(
	            'vname' => 'LBL_DATE_FINISH',
	            'width' => '15%',
	        ),
		),
	);
	}
}
?>