<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/


$subpanel_layout = array(
	'top_buttons' => array(
			/*array('widget_class' => 'SubPanelTopSelectButton', 'popup_module' => 'Queues'),*/
	),
	'where' => "",
	
	'fill_in_additional_fields'=>true,
	'list_fields' => array(
//		'name'			=> array (
//			'vname'		=> 'LBL_NAME',
//			'width'		=> '50%',
//			'sortable'	=> false,
//		),
		'execute_time'	=> array (
			 'vname'	=> 'LBL_EXECUTE_TIME',
			 'width'	=> '50%',
			 'sortable'	=> false,
		),		
		'status'		=> array (
			 'vname'	=> 'LBL_STATUS',
			 'width'	=> '50%',
			 'sortable'	=> false,
		),
	),
);		

?>