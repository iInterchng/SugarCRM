<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/



	//Used for custom plugins
	if(
	!empty($_REQUEST['plugin_action']) && $_REQUEST['plugin_action']!=""
	&&
	!empty($_REQUEST['plugin_module']) && $_REQUEST['plugin_module']!=""){
		
		if(file_exists('custom/workflow/plugins/'.$_REQUEST['plugin_module'].'/'.$_REQUEST['plugin_action'].'.php')){
				include_once('custom/workflow/plugins/'.$_REQUEST['plugin_module'].'/'.$_REQUEST['plugin_action'].'.php');	
		} else {
			echo "custom plugin file not found";
		}	
	} else {

		echo "A custom plugin step 2 was not specified";	
	}		


?>