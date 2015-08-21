<?php
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/




$viewdefs['Project']['DetailView'] = array(
	'templateMeta' => array( 
		'maxColumns' => '2',
		'widths' => array(	
			array('label' => '10', 'field' => '30'),
			array('label' => '10', 'field' => '30')
		),
		'includes'=> array(
			 array('file'=>'modules/Project/Project.js'),
	 	),
		'form' => array(
	 		'buttons'=> array(
			 	array( 'customCode' =>
			 		'<input title="{$APP.LBL_EDIT_BUTTON_TITLE}" ' .
					'accessKey="{$APP.LBL_EDIT_BUTTON_KEY}" class="button" type="submit" ' .
					'name="Edit" id="edit_button" value="{$APP.LBL_EDIT_BUTTON_LABEL}"'.
					'{if $IS_TEMPLATE}'.
						'onclick="this.form.return_module.value=\'Project\'; this.form.return_action.value=\'ProjectTemplatesDetailView\'; this.form.return_id.value=\'{$id}\'; this.form.action.value=\'ProjectTemplatesEditView\';"'.
					'{else}'.
						'onclick="this.form.return_module.value=\'Project\'; this.form.return_action.value=\'DetailView\'; this.form.return_id.value=\'{$id}\'; this.form.action.value=\'EditView\';" {/if}'.
					'"/>', 
				),
				array( 'customCode' =>
					'<input title="{$APP.LBL_DELETE_BUTTON_TITLE}" ' .
					'accessKey="{$APP.LBL_DELETE_BUTTON_KEY}" class="button" type="submit" ' .
					'name="Delete" id="delete_button" value="{$APP.LBL_DELETE_BUTTON_LABEL}"'.
					'{if $IS_TEMPLATE}'.
						'onclick="this.form.return_module.value=\'Project\'; this.form.return_action.value=\'ProjectTemplatesListView\'; this.form.action.value=\'Delete\'; return confirm(\'{$APP.NTC_DELETE_CONFIRMATION}\');"'.
					'{else}'.
						'onclick="this.form.return_module.value=\'Project\'; this.form.return_action.value=\'ListView\'; this.form.action.value=\'Delete\'; return confirm(\'{$APP.NTC_DELETE_CONFIRMATION}\');" {/if}'.
					'"/>', 
				),
								

				array( 'customCode' => 
					'{if $EDIT_RIGHTS_ONLY}<input title="{$MOD.LBL_VIEW_GANTT_TITLE}" '.
					'accessKey="{$APP.LBL_DELETE_BUTTON_KEY}" class="button" type="submit" '.
					'name="EditProjectTasks" value="  {$MOD.LBL_VIEW_GANTT_TITLE}  " '.
					'onclick="prep_edit_project_tasks(this.form);" />{/if}',
				),
				array( 'customCode' =>
					'<input title="{$SAVE_AS}" ' .
					'accessKey="{$APP.LBL_DELETE_BUTTON_KEY}" class="button" type="submit" ' .
					'name="SaveAsTemplate" value="{$SAVE_AS}"'.
					'{if $IS_TEMPLATE}'.
						'onclick="prep_save_as_project(this.form)"'.
					'{else}'.
						'onclick="prep_save_as_template(this.form) {/if}'.
					'"/>',
				),
				array( 'customCode' => 
					'<input title="{$MOD.LBL_EXPORT_TO_MS_PROJECT}" ' .
					'class="button" type="submit" ' .
					'name="ExportToProject" value="  {$MOD.LBL_EXPORT_TO_MS_PROJECT}  " ' .
					'onclick="prep_export_to_project(this.form);"/>',
				),
 			),
 		),
	),
	'panels' => array ( 
	  'lbl_project_information' =>
	  array (
			array ( 
				'name', 
				'status', ),
			array (
				array ( 
					'name' => 'estimated_start_date',
					'label' => 'LBL_DATE_START',
  				),
				'priority',
			),
			array (
			    array (
					'name' => 'estimated_end_date',
					'label' => 'LBL_DATE_END',
  				  ),
			  	),
			array (
				'description',
	  		),
  	  ),				
	  'LBL_PANEL_ASSIGNMENT' => 
	  array (
		array (
		  array (
			'name' => 'assigned_user_name',
			'label' => 'LBL_ASSIGNED_TO',
		  ),
		  array (
			'name' => 'modified_by_name',
			'customCode' => '{$fields.date_modified.value} {$APP.LBL_BY} {$fields.modified_by_name.value}&nbsp;',
			'label' => 'LBL_DATE_MODIFIED',
		  ),
		),
		array (
		 	'team_name',
			array (
				'name' => 'created_by_name',
				'customCode' => '{$fields.date_entered.value} {$APP.LBL_BY} {$fields.created_by_name.value}&nbsp;',
				'label' => 'LBL_DATE_ENTERED',
			),
		),
	  ),  						
	),
);
?>