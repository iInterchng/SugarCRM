<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/


require("include/modules.php");
require_once("include/utils/sugar_file_utils.php");

foreach ($beanFiles as $classname => $filename){ 
	if (file_exists($filename)){
		// Rename the class and its constructor adding SugarCore at the beginning  (Ex: class SugarCoreCall)
		$handle = file_get_contents($filename);
        $patterns = array ('/class '.$classname.'/','/function '.$classname.'/');
        $replace = array ('class SugarCore'.$classname,'function SugarCore'.$classname);
		$data = preg_replace($patterns,$replace, $handle);
		sugar_file_put_contents($filename,$data);
		
		// Rename the SugarBean file into SugarCore.SugarBean (Ex: SugarCore.Call.php)
		$pos=strrpos($filename,"/");
		$newfilename=substr_replace($filename, 'SugarCore.', $pos+1, 0);
		sugar_rename($filename,$newfilename);
		
		//Create a new SugarBean that extends CoreBean
		$fileHandle = sugar_fopen($filename, 'w') ;
$newclass = <<<FABRICE
<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

if(!class_exists('$classname')){  
if (file_exists('custom/$filename')){
	require('custom/$filename');
	}
else{
	require('$newfilename');
	class $classname extends SugarCore$classname{}
	}
}
?>
FABRICE;
		fwrite($fileHandle, $newclass);
		fclose($fileHandle);
	}
}
?>