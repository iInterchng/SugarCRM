<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

// adding custom fields:
if(isset($focus->custom_fields)){
/*
$test is set to focus to increment the reference count 
since it appears that the reference count was off by 1 
*/
$test =& $focus;
$focus->custom_fields->bean =& $focus;
$focus->custom_fields->populateXTPL($xtpl, 'edit');
}

?>
