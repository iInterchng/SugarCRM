<?php
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/


require_once('include/MVC/View/views/view.list.php');

class HomeViewList extends ViewList{
 	function ActivitiesViewList(){
 		parent::ViewList();
 		
 	}

 	function display(){
 		global $mod_strings, $export_module, $current_language, $theme, $current_user, $dashletData, $sugar_flavor;
 		include('modules/Home/index.php');
 	}
 	
}
?>
