<?php
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/


require_once('include/MVC/View/views/view.list.php');

class ACLRolesViewList extends ViewList
{
 	public function preDisplay()
 	{
 	    if (!is_admin($GLOBALS['current_user'])&& !is_admin_for_module($GLOBALS['current_user'],'Users'))
            sugar_die('No Access');
 	    
 		$this->lv = new ListViewSmarty();
 		$this->lv->export = false;
 		$this->lv->showMassupdateFields = false;
 	}
}
