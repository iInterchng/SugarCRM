<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

/*********************************************************************************

 * Description: This file is used to override the default Meta-data EditView behavior
 * to provide customization specific to the Contacts module.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

require_once('include/MVC/View/views/view.edit.php');

class HolidaysViewEdit extends ViewEdit 
{
    /**
	 * @see SugarView::display()
	 */
	public function display() 
	{
		global $beanFiles, $mod_strings;
		
		// the user admin (MLA) cannot edit any administrator holidays
		global $current_user;
		if(isset($_REQUEST['record'])){
	 		$result = $GLOBALS['db']->query("SELECT is_admin FROM users WHERE id=(SELECT person_id FROM holidays WHERE id='$_REQUEST[record]')");
			$row = $GLOBALS['db']->fetchByAssoc($result);
			if(!is_admin($current_user)&& is_admin_for_module($current_user,'Users')&& $row['is_admin']==1){
				sugar_die('Unauthorized access');
			}
		}
		
		$this->ev->process();

		if ($_REQUEST['return_module'] == 'Project'){
			
        	$projectBean = new Project();
        	
        	$projectBean->retrieve($_REQUEST['return_id']);
        	
        	$userBean = new User();
        	$contactBean = new Contact();
        	
        	$projectBean->load_relationship("user_resources");
        	$userResources = $projectBean->user_resources->getBeans($userBean);
        	$projectBean->load_relationship("contact_resources");
        	$contactResources = $projectBean->contact_resources->getBeans($contactBean);
        	       	
			ksort($userResources);
			ksort($contactResources);	
						
			$this->ss->assign("PROJECT", true);
			$this->ss->assign("USER_RESOURCES", $userResources);
			$this->ss->assign("CONTACT_RESOURCES", $contactResources);
			
			$this->ss->assign("MOD", $mod_strings);
			
			$holiday_js = "<script type='text/javascript'>\n";
			$holiday_js .= $projectBean->resourceSelectJS();
			$holiday_js .= "\n</script>";

			echo $holiday_js;
        }
		
 		echo $this->ev->display();
 	}
}