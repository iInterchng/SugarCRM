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

$json = getJSONobj();
$not_a_file = 0; 

$divAndEl = explode(",", $_REQUEST['div_name_and_El']);
$div_name = $divAndEl[0];
$element_name = $divAndEl[1];

$ret = array();

if(!isset($_FILES[$element_name])|| ($_FILES[$element_name]['error']==4) || !file_exists($_FILES[$element_name]['tmp_name']) 
|| ($_FILES[$element_name]['size']==0)){
      $not_a_file = 1;   	
}

$currGuid = create_guid();
$is_file_image = 0;

if($not_a_file == 0){
	$imgType = array('image/gif', 'image/png',  'image/x-png', 'application/octet-stream','image/bmp', 'image/jpeg', 'image/jpg', 'image/pjpeg');
	//Save the currently uploaded file	
		if(in_array(strtolower($_FILES[$element_name]['type']), $imgType)) {	
			$currGuid = $currGuid . $_FILES[$element_name]['name'];
			$_FILES[$element_name]['name'] = $currGuid;
			$dest = $sugar_config['cache_dir'].'/images/'.$_FILES[$element_name]['name'];				 
			if(is_uploaded_file($_FILES[$element_name]['tmp_name'])) {
				move_uploaded_file($_FILES[$element_name]['tmp_name'], $dest);
				$is_file_image = 1;
			}		
				
		}		
}

if($not_a_file == 1){
	$response=array('status'=>'failed','div_name'=>$div_name);
}  
else{
	$response=array('status'=>'success','div_name'=>$div_name,'new_file_name'=>$currGuid,'is_file_image'=>$is_file_image);
}
if (!empty($response)) {	
	$json = getJSONobj();
	print $json->encode($response);	
}
sugar_cleanup();
exit();
?>
