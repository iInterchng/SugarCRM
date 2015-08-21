<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

/*********************************************************************************

 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/
 
 require_once('include/MVC/View/views/view.edit.php');
 class <module_name>ViewEdit extends ViewEdit{
 	function <module_name>ViewEdit(){
 		parent::ViewEdit();
 	}
 	function display(){
		if (isset($this->bean->id)) {
			$this->ss->assign("FILE_OR_HIDDEN", "hidden");
			if (empty($_REQUEST['isDuplicate']) || $_REQUEST['isDuplicate'] == 'false') {
				$this->ss->assign("DISABLED", "disabled");
			}
		} else {
			$this->ss->assign("FILE_OR_HIDDEN", "file");
		}
		parent::display();
 	}
 }

?>
