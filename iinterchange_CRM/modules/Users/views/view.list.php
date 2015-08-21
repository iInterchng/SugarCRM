<?php
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/


require_once('include/MVC/View/views/view.list.php');

class UsersViewList extends ViewList
{
 	public function preDisplay()
 	{
 	    if ( !is_admin($GLOBALS['current_user'])
                && !is_admin_for_module($GLOBALS['current_user'],'Users') ) {
            //instead of just dying here with unauthorized access will send the user back to his/her settings
             SugarApplication::redirect('index.php?module=Users&action=DetailView&record='.$GLOBALS['current_user']->id);
        }
 	    $this->lv = new ListViewSmarty();
 	    $this->lv->delete = false;
 	    $this->lv->email = false;
 	}

}
