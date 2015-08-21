<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/



if(isset($_GET['DynamicAction']) && $_GET['DynamicAction'] == "saveImage") {
	$cache = $GLOBALS['sugar_config']['cache_dir']."images/";
	
	
	$filename = $_POST['filename'];
	$image = str_replace(" ", "+", $_POST["imageStr"]);
	$data = substr($image, strpos($image, ","));

	file_put_contents($cache.$filename, base64_decode($data));
	

}