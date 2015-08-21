<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

require_once('modules/DynamicFields/templates/Fields/TemplateEnum.php');
require_once('include/utils/array_utils.php');
class TemplateAddressCountry extends TemplateEnum {
    
    var $group = '';
    
	function get_field_def(){
		$def = parent::get_field_def();
		$def['group'] = $this->group;
		$def['options'] = 'countries_dom';
		return $def;	
	}
}


?>
