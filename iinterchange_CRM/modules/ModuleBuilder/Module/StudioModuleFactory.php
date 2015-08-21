<?php
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

require_once 'modules/ModuleBuilder/Module/StudioModule.php' ;

class StudioModuleFactory
{
	function getStudioModule($module)
	{
		$studioModClass = "{$module}StudioModule";
		if (file_exists("modules/{$module}/{$studioModClass}.php"))
		{
			require_once "modules/{$module}/{$studioModClass}.php";
			return new $studioModClass($module);
		} 
		else 
		{
			return new StudioModule($module);
		}
	}
}
?>