<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

/**
 * The Dashlet Container Factory (DCF) provides a facility for loading the appropriate Dashlet Container.
 * It will make the decision based on what container is requested as well as system and user settings.  
 * @author mitani
 *
 */
require_once('include/DashletContainer/Containers/DCAbstract.php');

class DCFactory
{
	static $defaultContainer = 'DCList';
	
	/**
	 * Prevent Instantiation of DCFactory it should only be used statically
	 * 
	 */
	private function __construct() 
	{ 
	}
	
	/**
	 * This function will make the decision for which container to load. 
	 * 
	 * If container is not specified
	 * 1. check if user has a default container they prefer load
	 * 
	 * @param string $dashletMetaDataFile - file path to the meta-data specificying the Dashlets used in this container
	 * @param string $container  - name of the Dashlet Container to use if not specified it will use the system default
	 * @static 
	 * @return DashletContainer
	 */
	public static function getContainer(
	    $dashletMetaDataFile, 
	    $container = null
	    )
	{
		if($container == null)
			$container = self::$defaultContainer;
		
		$path = 'include/DashletContainer/Containers/' . $container .'.php';
		if(file_exists('custom/'. $path))
			require_once('custom/'. $path);
		elseif(file_exists($path))
			require_once($path);
		else
		    return false;
		
		$class = (class_exists('Custom' . $container))? 'Custom' . $container : $container;
		
		if ( !class_exists($class) )
		    return false;
		
        return new $class($dashletMetaDataFile);
	}
}