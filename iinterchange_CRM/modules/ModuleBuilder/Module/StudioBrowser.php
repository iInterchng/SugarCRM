<?php
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

require_once 'modules/ModuleBuilder/Module/StudioModuleFactory.php' ;

function cmp($a,$b)
{
	return strcasecmp($a,$b);
}

class StudioBrowser{
	var $modules = array();
	
	function loadModules(){
	    global $current_user;
		$access = get_admin_modules_for_user($current_user);
	    $d = dir('modules');
		while($e = $d->read()){
			if(substr($e, 0, 1) == '.' || !is_dir('modules/' . $e))continue;
			if(file_exists('modules/' . $e . '/metadata/studio.php') && isset($GLOBALS [ 'beanList' ][$e]) && (in_array($e, $access) || is_admin($current_user))) // installed modules must also exist in the beanList
			{
				$this->modules[$e] =  StudioModuleFactory::getStudioModule( $e ) ;
			}
		}
	}
	
    function loadRelatableModules(){
        $d = dir('modules');
        while($e = $d->read()){
            if(substr($e, 0, 1) == '.' || !is_dir('modules/' . $e))continue;
            if(file_exists('modules/' . $e . '/metadata/studio.php') && isset($GLOBALS [ 'beanList' ][$e])) // installed modules must also exist in the beanList
            {
                $this->modules[$e] = StudioModuleFactory::getStudioModule( $e ) ;
            }
        }
    }
		
	function getNodes(){
		$this->loadModules();
	    $nodes = array();
		foreach($this->modules as $module){
			$nodes[$module->name] = $module->getNodes();
		}
		uksort($nodes,'cmp'); // bug 15103 - order is important - this array is later looped over by foreach to generate the module list
		return $nodes;
	}

	
	
	
	
}
?>