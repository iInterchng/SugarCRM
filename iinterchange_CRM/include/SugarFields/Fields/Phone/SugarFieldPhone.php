<?php
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

require_once('include/SugarFields/Fields/Base/SugarFieldBase.php');

class SugarFieldPhone extends SugarFieldBase {
    
	/**
     * This should be called when the bean is saved. The bean itself will be passed by reference
     * 
     * @param SugarBean bean - the bean performing the save
     * @param array params - an array of paramester relevant to the save, most likely will be $_REQUEST
     */
	public function save($bean, $params, $field, $properties, $prefix = ''){
		 parent::save($bean, $params, $field, $properties, $prefix);
    }    
    
}
?>