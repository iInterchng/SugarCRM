<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/




require_once('modules/Campaigns/utils.php');

if (!empty($_REQUEST['remove'])) clean_string($_REQUEST['remove'], "STANDARD");
if (!empty($_REQUEST['from'])) clean_string($_REQUEST['from'], "STANDARD");

if(!empty($_REQUEST['identifier'])) {
	$keys=log_campaign_activity($_REQUEST['identifier'],'removed');
    global $current_language;
    $mod_strings = return_module_language($current_language, 'Campaigns');

    
    global $beanFiles, $beanList;
    if (!empty($keys) && $keys['target_type'] == 'Users'){
        //Users cannot opt out of receiving emails, print out warning message.
        echo $mod_strings['LBL_USERS_CANNOT_OPTOUT'];       
     }elseif(!empty($keys) && isset($keys['campaign_id']) && !empty($keys['campaign_id'])){
        //we need to unsubscribe the user from this particular campaign
        $beantype = $beanList[$keys['target_type']];
        require_once($beanFiles[$beantype]);
        $focus = new $beantype();
        $tmp_security = $focus->disable_row_level_security;
        $focus->disable_row_level_security = 1;
        $focus->retrieve($keys['target_id']);
        $focus->disable_row_level_security = $tmp_security;   
        unsubscribe($keys['campaign_id'], $focus); 
    
    }elseif(!empty($keys)){
		$id = $keys['target_id'];
		$module = trim($keys['target_type']);
		$class = $beanList[$module];
		require_once($beanFiles[$class]);
		$mod = new $class();
		$db = DBManagerFactory::getInstance();

		$id = $db->quote($id);

		//no opt out for users.
		if(preg_match('/^[0-9A-Za-z\-]*$/', $id) && $module != 'Users'){
            //record this activity in the campaing log table..
			$query = "UPDATE email_addresses SET email_addresses.opt_out = 1 WHERE EXISTS(SELECT 1 FROM email_addr_bean_rel ear WHERE ear.bean_id = '$id' AND ear.deleted=0 AND email_addresses.id = ear.email_address_id)";
			$status=$db->query($query);
			if($status){
				echo "*";
			}
		}
    }
		//Print Confirmation Message.
		echo $mod_strings['LBL_ELECTED_TO_OPTOUT'];
	
}
sugar_cleanup();
?>
