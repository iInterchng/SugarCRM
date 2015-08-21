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

require_once('include/MVC/View/views/view.wirelessedit.php');

class EmployeesViewWirelessedit extends ViewWirelessedit {

 	function display() {
       	if(is_admin($GLOBALS['current_user'])) {
			$this->ss->assign('EDIT_TITLE_DEPT', true);
        }
 		parent::display();
 	}
}
?>
