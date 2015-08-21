<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

require_once('modules/DynamicFields/templates/Fields/TemplateId.php');
class TemplateCurrencyId extends TemplateId{
    var $max_size = 25;
    var $type='currency_id';
    
    function get_field_def(){
		$def = parent::get_field_def();
		$def['type'] = 'id';
		$def['studio'] = 'visible';
		$def['function'] = array('name'=>'getCurrencyDropDown', 'returns'=>'html');
		return $def;	
	}
	
	function save($df){
		if(!$df->fieldExists($this->name))
			parent::save($df);
	}
	
	function delete($df){
		if(!$df->fieldExists($this->name))
			parent::delete($df);
	}
}


?>
