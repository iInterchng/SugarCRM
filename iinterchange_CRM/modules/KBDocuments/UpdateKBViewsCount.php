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
require_once('include/ytree/Tree.php');
require_once('include/ytree/Node.php');
require_once('modules/KBTags/TreeData.php');

$json = getJSONobj();
$kb_id = $json->decode(html_entity_decode($_REQUEST['selectedKBId']));
if(isset($kb_id['jsonObject']) && $kb_id['jsonObject'] != null){
   $kb_id = $kb_id['jsonObject'];
 }	

if(!empty($kb_id)){		         
        require_once("modules/KBDocuments/SearchUtils.php");
        updateKBView($kb_id);		         		         		         		        		
  }
  $response = $kb_id;                 
if (!empty($response)) {	
    echo $response;
	//$json = getJSONobj();
	//print $json->encode($response);	
	//return the parameters
}
sugar_cleanup();
exit();
?>
