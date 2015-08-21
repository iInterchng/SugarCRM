<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/


require_once('modules/DynamicFields/templates/Fields/TemplatePhone.php');

function get_body(&$ss, $vardef){
	return $ss->fetch('modules/DynamicFields/templates/Fields/Forms/phone.tpl');
}

?>
