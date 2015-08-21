<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/



$subpanel_layout = array(
	'top_buttons' => array(
        array('widget_class' => 'SubPanelTopCreateButton'),
		array('widget_class' => 'SubPanelTopSelectButton', 'popup_module' => 'Notes'),
	),

	'where' => '',
	
	

	'list_fields' => array(
		'object_image'=>array(
			'vname' => 'LBL_OBJECT_IMAGE',
			'widget_class' => 'SubPanelIcon',
 		 	'width' => '2%',
 		 	'image2'=>'attachment',
 		 	'image2_url_field'=> array(
				'id_field' => 'id',
				'filename_field' => 'filename',
			),
		),
        'name'=>array(
 			'vname' => 'LBL_LIST_SUBJECT',
			'widget_class' => 'SubPanelDetailViewLink',
			'width' => '9999%',
		),
/*todo AG
		array( // this column does not exist on
		    'name' => '$filename',
			'vname' => 'LBL_LIST_FILENAME',
			'width' => '9999%',
		),
		*/
		'contact_name'=>array(
			'module' => 'Contacts',
			'vname' => 'LBL_LIST_CONTACT_NAME',
		    'width' => '9999%',
            'target_record_key' => 'contact_id',
            'target_module' => 'Contacts',
            'widget_class' => 'SubPanelDetailViewLink',
		),
		'date_modified'=>array(
		 	'vname' => 'LBL_LIST_DATE_MODIFIED',
			'width' => '9999%',
		),
		'edit_button'=>array(
			'vname' => 'LBL_EDIT_BUTTON',
			'widget_class' => 'SubPanelEditButton',
		 	'module' => 'Notes',
			'width' => '9999%',
		),
		'file_url'=>array(
			'usage'=>'query_only'
			),
		'filename'=>array(
			'usage'=>'query_only'
			),
	),
);

?>