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
	$alert_shell = new WorkFlowAlertShell();
	$alert_shell->retrieve($_REQUEST['record_id']);
	$alert_shell->copy($_REQUEST['workflow_id']);
	
	$javascript = "<script>window.opener.document.DetailView.action.value = 'DetailView';";
	$javascript .= "window.opener.document.DetailView.submit();";
	$javascript .= "window.close();</script>";
	echo $javascript;
}
?>
