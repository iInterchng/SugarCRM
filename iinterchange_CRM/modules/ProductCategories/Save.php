<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

/*********************************************************************************

 * Description:  
 ********************************************************************************/


_pp($_REQUEST);
$focus = new ProductCategory();


	$focus->retrieve($_REQUEST['record']);

	foreach($focus->column_fields as $field)
	{
		if(isset($_REQUEST[$field]))
		{
			$focus->$field = $_REQUEST[$field];
			
		}
	}
	
	foreach($focus->additional_column_fields as $field)
	{
		if(isset($_REQUEST[$field]))
		{
			$value = $_REQUEST[$field];
			$focus->$field = $value;
			
		}
	}

$focus->save();
$return_id = $focus->id;

$edit='';
$return_module = (isset($_REQUEST['return_module']) && $_REQUEST['return_module'] != "") ? $_REQUEST['return_module'] : "ProductCategories";
$return_action = (isset($_REQUEST['return_action']) && $_REQUEST['return_action'] != "") ? $_REQUEST['return_action'] : "DetailView";

if (isset($_REQUEST['return_id']) && $_REQUEST['return_id'] != "") {
	$return_id = $_REQUEST['return_id'];
}
if (!empty($_REQUEST['edit'])) {
	$return_id='';
	$edit='&edit=true';
}
if (!empty($_REQUEST['isDuplicate']) && ($_REQUEST['isDuplicate'] == 'true')) {
	$return_id='';
}
$GLOBALS['log']->debug("Saved record with id of ".$return_id);

header("Location: index.php?action=$return_action&module=$return_module&record={$return_id}{$edit}");
?>