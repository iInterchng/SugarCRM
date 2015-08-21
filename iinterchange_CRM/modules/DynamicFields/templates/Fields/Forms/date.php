<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/


require_once('modules/DynamicFields/templates/Fields/TemplateDate.php');

function get_body(&$ss, $vardef){
	$td = new TemplateDate();
	$ss->assign('default_values', array_flip($td->dateStrings));
	return $ss->fetch('modules/DynamicFields/templates/Fields/Forms/date.tpl');
}

?>
