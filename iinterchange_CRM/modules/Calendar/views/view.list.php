<?php
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/


require_once('include/MVC/View/views/view.list.php');

class CalendarViewList extends ViewList{
 	function ActivitiesViewList(){
 		parent::ViewList();
 		
 	}

 	function display(){
 		global $mod_strings, $export_module, $current_language, $theme, $current_user;
 		include('modules/Calendar/index.php');
 	}
 	
}
?>
