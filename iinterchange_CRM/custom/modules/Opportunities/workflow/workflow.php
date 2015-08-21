<?php

include_once("include/workflow/alert_utils.php");
include_once("include/workflow/action_utils.php");
include_once("include/workflow/time_utils.php");
include_once("include/workflow/trigger_utils.php");
//BEGIN WFLOW PLUGINS
include_once("include/workflow/custom_utils.php");
//END WFLOW PLUGINS
	class Opportunities_workflow {
	function process_wflow_triggers(& $focus){
		include("custom/modules/Opportunities/workflow/triggers_array.php");
		include("custom/modules/Opportunities/workflow/alerts_array.php");
		include("custom/modules/Opportunities/workflow/actions_array.php");
		include("custom/modules/Opportunities/workflow/plugins_array.php");
		
 if( (isset($focus->sales_stage) && $focus->sales_stage ==  'Closed Won')){ 
 

	 //Frame Secondary 

	 $secondary_array = array(); 
	 //Secondary Triggers 

	global $triggeredWorkflows;
	if (!isset($triggeredWorkflows['b2acf0fa_6f88_9714_350a_536cc16f9543'])){
		$triggeredWorkflows['b2acf0fa_6f88_9714_350a_536cc16f9543'] = true;
		 unset($alertshell_array); 
		 process_workflow_actions($focus, $action_meta_array['Opportunities0_action0']); 
 	}
 

	 //End Frame Secondary 

	 unset($secondary_array); 
 

 //End if trigger is true 
 } 


	//end function process_wflow_triggers
	}
	
	//end class
	}

?>