<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/


class TemplateParentType extends TemplateText{
    var $max_size = 25;
    var $type='parent_type';
    
    function get_field_def(){
		$def = parent::get_field_def();
		$def['dbType'] = 'varchar';
		$def['studio'] = 'hidden';
		return $def;	
	}

}


?>
