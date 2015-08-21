<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/


class FeedLogicBase {
	var $module = '';
	
	function pushFeed($bean, $event, $arguments){
		
	}

	function installHook($file,$className){
		check_logic_hook_file($this->module, "before_save", array(1, $this->module . " push feed",  $file, $className, "pushFeed"));
	}

    function removeHook($file,$className){
		remove_logic_hook($this->module, "before_save", array(1, $this->module . " push feed",  $file, $className, "pushFeed"));        
    }
}
