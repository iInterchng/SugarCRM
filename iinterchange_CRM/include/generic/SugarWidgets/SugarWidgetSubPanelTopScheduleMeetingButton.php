<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
   ********************************************************************************/




require_once('include/generic/SugarWidgets/SugarWidgetSubPanelTopButtonQuickCreate.php');

class SugarWidgetSubPanelTopScheduleMeetingButton extends SugarWidgetSubPanelTopButtonQuickCreate
{
	function &_get_form($defines, $additionalFormFields = null)
	{
		global $app_strings;
		global $currentModule;

		$this->module="Meetings";
		$this->subpanelDiv = "activities";

		// Create the additional form fields with real values if they were not passed in
		if(empty($additionalFormFields) && $this->additional_form_fields)
		{
			foreach($this->additional_form_fields as $key=>$value)
			{
				if(!empty($defines['focus']->$value))
				{
					$additionalFormFields[$key] = $defines['focus']->$value;
				}
				else
				{
					$additionalFormFields[$key] = '';
				}
			}
		}

		if(!empty($this->module))
		{
			$defines['child_module_name'] = $this->module;
		}
		else
		{
			$defines['child_module_name'] = $defines['module'];
		}

		if(!empty($this->subpanelDiv))
		{
			$defines['subpanelDiv'] = $this->subpanelDiv;
		}

		$defines['parent_bean_name'] = get_class( $defines['focus']);

		$form = 'form' . $defines['child_module_name'];
		$button = '<form onsubmit="return SUGAR.subpanelUtils.sendAndRetrieve(this.id, \'subpanel_' . strtolower($defines['subpanelDiv']) . '\', \'' . addslashes($app_strings['LBL_LOADING']) . '\');" action="index.php" method="post" name="form" id="form' . $form . "\">\n";

		//module_button is used to override the value of module name
		$button .= "<input type='hidden' name='target_module' value='".$defines['child_module_name']."'>\n";
		$button .= "<input type='hidden' name='".strtolower($defines['parent_bean_name'])."_id' value='".$defines['focus']->id."'>\n";

		if(isset($defines['focus']->name))
		{
			$button .= "<input type='hidden' name='".strtolower($defines['parent_bean_name'])."_name' value='".$defines['focus']->name."'>";
		}

		$button .= '<input type="hidden" name="to_pdf" value="true" />';
        $button .= '<input type="hidden" name="tpl" value="QuickCreate.tpl" />';
		$button .= '<input type="hidden" name="return_module" value="' . $currentModule . "\" />\n";
		$button .= '<input type="hidden" name="return_action" value="' . $defines['action'] . "\" />\n";
		$button .= '<input type="hidden" name="return_id" value="' . $defines['focus']->id . "\" />\n";

		// TODO: move this out and get $additionalFormFields working properly
		if(empty($additionalFormFields['parent_type']))
		{
			if($defines['focus']->object_name=='Contact') {
				$additionalFormFields['parent_type'] = 'Accounts';
			}
			else {
				$additionalFormFields['parent_type'] = $defines['focus']->module_dir;
			}
		}
		if(empty($additionalFormFields['parent_name']))
		{
			if($defines['focus']->object_name=='Contact') {
				$additionalFormFields['parent_name'] = $defines['focus']->account_name;
				$additionalFormFields['account_name'] = $defines['focus']->account_name;
			}
			else {
				$additionalFormFields['parent_name'] = $defines['focus']->name;
			}
		}
		if(empty($additionalFormFields['parent_id']))
		{
			if($defines['focus']->object_name=='Contact') {
				$additionalFormFields['parent_id'] = $defines['focus']->account_id;
				$additionalFormFields['account_id'] = $defines['focus']->account_id;
			}
			else {
				$additionalFormFields['parent_id'] = $defines['focus']->id;
			}
		}

		$button .= '<input type="hidden" name="action" value="SubpanelCreates" />' . "\n";
		$button .= '<input type="hidden" name="module" value="Home" />' . "\n";
		$button .= '<input type="hidden" name="target_action" value="QuickCreate" />' . "\n";

		// fill in additional form fields for all but action
		foreach($additionalFormFields as $key => $value)
		{
			if($key != 'action')
			{
				$button .= '<input type="hidden" name="' . $key . '" value="' . $value . '" />' . "\n";
			}
		}
		$button .='<script type="text/javascript" src="include/SugarFields/Fields/Datetimecombo/Datetimecombo.js"></script>'."\n";
		$button .='<script type="text/javascript" src="include/jsolait/init.js"></script>'."\n";
		$button .='<script type="text/javascript" src="include/javascript/jsclass_base.js"></script>'."\n";
		$button .='<script type="text/javascript" src="include/javascript/jsclass_async.js"></script>'."\n";
		$button .='<script type="text/javascript" src="modules/Meetings/jsclass_scheduler.js"></script>'."\n";
		
		return $button;
	}
	
	function display($defines, $additionalFormFields = null)
	{
	    $focus = new Meeting;
		if ( !$focus->ACLAccess('EditView') ) {
		    return '';
	    }
		
		return parent::display($defines, $additionalFormFields);
	}
}
?>
