<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

abstract class loc_xml extends source
{
	public function __construct()
	{
 		parent::__construct();
 	}
 	
 	public function __parse($file)
 	{
 		$contents = file_get_contents($file);
 		return simplexml_load_string($contents);
 	}
 	
 	public function __destruct()
 	{
		parent::__destruct();
	}
}
