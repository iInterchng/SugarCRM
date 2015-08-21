<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/


require_once('include/MVC/View/views/view.list.php');

class TimePeriodsViewList extends ViewList
{
 	public function preDisplay()
 	{
 	    global $current_user;
        
        if ( !is_admin($current_user) 
                && !is_admin_for_module($current_user,'Forecasts')
                && !is_admin_for_module($current_user,'ForecastSchedule') )
            sugar_die("Unauthorized access to administration.");
 	    
 		$this->lv = new ListViewSmarty();
 		$this->lv->showMassupdateFields = false;
 	}
}
