<?php
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

require_once("include/Expressions/Actions/AbstractAction.php");


class ActionFactory {
	static $exclude_files = array("ActionFactory.php", "AbstractAction.php");
	static $action_directory = "include/Expressions/Actions";
	static $loaded_actions = array();
	
	static function loadFunctionList() {
		if (!is_file("cache/Expressions/actions_cache.php"))
		{
		    ActionFactory::buildActionCache();
		} else 
		{
			include("cache/Expressions/actions_cache.php");
			ActionFactory::$loaded_actions = $actions;
		}
	}
	
	static function buildActionCache($silent = true) {
		if (!is_dir(ActionFactory::$action_directory))
            return false;
        
        // First get a list of all the files in this directory.
        $entries = array();
        $actions = array();
		$javascript = "";
		foreach(array("", "custom/") as $prefix) {
			if (!is_dir($prefix . ActionFactory::$action_directory)) continue;
			$directory = opendir($prefix . ActionFactory::$action_directory);
            if ( !$directory )  continue;
			while( $entry = readdir($directory) )
	        {
	            if (strtolower(substr($entry, -4)) != ".php" || in_array($entry, ActionFactory::$exclude_files))
	                continue;
	            
	            $path = $prefix . ActionFactory::$action_directory . "/" . $entry;
	            require_once($path);
	            
				$className = substr($entry, 0, strlen($entry) - 4);
	            $actionName = call_user_func(array($className, "getActionName"));
	            $actions[$actionName] = array('class' => $className, 'file' => $path);
				$javascript .= call_user_func(array($className, "getJavascriptClass"));
				if (!$silent) echo "added action $actionName <br/>";
	        }
		}
		
		if (empty($actions)) return "";
		
		create_cache_directory("Expressions/actions_cache.php");
		write_array_to_file('actions', $actions, 'cache/Expressions/actions_cache.php');
		
		ActionFactory::$loaded_actions = $actions;
		
		return $javascript;
		
	}
	
	static function getNewAction($name, $params) {
		if (empty(ActionFactory::$loaded_actions))
			ActionFactory::loadFunctionList();
		if (isset(ActionFactory::$loaded_actions[$name]))
		{
			require_once(ActionFactory::$loaded_actions[$name]['file']);
			$class = ActionFactory::$loaded_actions[$name]['class'];
			return new $class($params);
		}
		
		return false;
	}
}
?>