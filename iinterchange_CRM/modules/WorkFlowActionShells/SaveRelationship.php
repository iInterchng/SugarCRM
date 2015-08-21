<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

/*********************************************************************************

 * Description:  
 ********************************************************************************/





$workflow = new WorkFlow();
if(isset($_REQUEST['workflow_id']) && isset($_REQUEST['record_id']))
{
	$action_shell = new WorkFlowActionShell();
	$action_shell->retrieve($_REQUEST['record_id']);
	$new_action_shell =& $action_shell;
	$new_action_shell->id = "";
	$new_action_shell->parent_id = $_REQUEST['workflow_id'];
	$new_action_shell->save();
	$new_id = $new_action_shell->id;
	
	//process actions
	$action_shell->retrieve($_REQUEST['record_id']);
	$action_shell->copy($new_id);

	$workflow->retrieve($_REQUEST['workflow_id']);
	$workflow->write_workflow();
	
	$javascript = "<script>window.opener.document.DetailView.action.value = 'DetailView';";
	$javascript .= "window.opener.document.DetailView.submit();";
	$javascript .= "window.close();</script>";
	echo $javascript;
}
?>
