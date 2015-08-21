<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

/*********************************************************************************

 * Description: This file is used to override the default Meta-data DetailView behavior
 * to provide customization specific to the Bugs module.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

require_once('include/MVC/View/views/view.detail.php');

class EmployeesViewDetail extends ViewDetail {

 	function EmployeesViewDetail(){
 		parent::ViewDetail();
 	}
 	
 	function display() {
       	if(is_admin($GLOBALS['current_user']) || $_REQUEST['record'] == $GLOBALS['current_user']->id) {
			 $this->ss->assign('DISPLAY_EDIT', true);
        }
        if(is_admin($GLOBALS['current_user'])){
 			$this->ss->assign('DISPLAY_DUPLICATE', true);
 		}
 		
 		$showDeleteButton = FALSE;
 		if(  $_REQUEST['record'] != $GLOBALS['current_user']->id && ( is_admin($GLOBALS['current_user']) || is_admin_for_module($GLOBALS['current_user'],'Users')) )
        {
            $showDeleteButton = TRUE;
 		     if( empty($this->bean->user_name) ) //Indicates just employee
 		         $deleteWarning = $GLOBALS['mod_strings']['LBL_DELETE_EMPLOYEE_CONFIRM'];
 		     else 
 		         $deleteWarning = $GLOBALS['mod_strings']['LBL_DELETE_USER_CONFIRM'];
 		     $this->ss->assign('DELETE_WARNING', $deleteWarning);
        }
        $this->ss->assign('DISPLAY_DELETE', $showDeleteButton);
        
 		parent::display();
 	}
}
?>
