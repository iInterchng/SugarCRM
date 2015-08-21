<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

 //Request object must have these property values:
 //		Module: module name, this module should have a file called TreeData.php
 //		Function: name of the function to be called in TreeData.php, the function will be called statically.
 //		PARAM prefixed properties: array of these property/values will be passed to the function as parameter.


require_once('include/JSON.php');
require_once('include/upload_file.php');

$GLOBALS['log']->debug(print_r($_FILES, true));
         $file_ext_allow = FALSE;	

if (!is_dir($GLOBALS['sugar_config']['cache_dir'].'images/'))
    mkdir_recursive($GLOBALS['sugar_config']['cache_dir'].'images/');

// cn: bug 11012 - fixed some MIME types not getting picked up.  Also changed array iterator.
$imgType = array('image/gif', 'image/png', 'image/x-png', 'image/bmp', 'image/jpeg', 'image/jpg', 'image/pjpeg');

$ret = array();

foreach($_FILES as $k => $file) {
	if(in_array(strtolower($_FILES[$k]['type']), $imgType)) {
		$dest = $GLOBALS['sugar_config']['cache_dir'].'images/'.$_FILES[$k]['name'];
		if(is_uploaded_file($_FILES[$k]['tmp_name'])) {
			move_uploaded_file($_FILES[$k]['tmp_name'], $dest);
		    $ret[] = $dest;
		}
	}
}

if (!empty($ret)) {	
	$json = getJSONobj();
	echo $json->encode($ret);	
	//return the parameters
}

?>
