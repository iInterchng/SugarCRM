<?php
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

class EmployeesController extends SugarController{
	function EmployeesController(){
		parent::SugarController();
	}

	function action_editview(){
		if(is_admin($GLOBALS['current_user']) || $_REQUEST['record'] == $GLOBALS['current_user']->id) 
			$this->view = 'edit';
		else
			sugar_die("Unauthorized access to employees.");
		return true;
	}
	
	protected function action_delete()
	{
	    if($_REQUEST['record'] != $GLOBALS['current_user']->id && (is_admin($GLOBALS['current_user'])||is_admin_for_module($GLOBALS['current_user'],'Users')))
        {
            $u = new User();
            $u->retrieve($_REQUEST['record']);
            $u->deleted = 1;
            $u->status = 'Inactive';
            $u->employee_status = 'Terminated';
            $u->save();
            $GLOBALS['log']->info("User id: {$GLOBALS['current_user']->id} deleted user record: {$_REQUEST['record']}");
            
            if( !empty($u->user_name) ) //If user redirect back to assignment screen.
                SugarApplication::redirect("index.php?module=Users&action=reassignUserRecords&record={$u->id}");
            else 
                SugarApplication::redirect("index.php?module=Employees&action=index");
        }
        else 
            sugar_die("Unauthorized access to administration.");
	}
	
}
?>