<?php
if (! defined ( 'sugarEntry' ) || ! sugarEntry)
    die ( 'Not A Valid Entry Point' ) ;
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/


require_once ('modules/DynamicFields/DynamicField.php') ;

class StandardField extends DynamicField
{
	var $custom_def = array();
	var $baseField;
	

    function __construct($module = '') {
        parent::DynamicField($module);
    }
    
    protected function loadCustomDef($field){
    	global $beanList;
    	if (!empty($beanList[$this->module]) && is_file("custom/Extension/modules/{$this->module}/Ext/Vardefs/sugarfield_$field.php"))
    	{
    		$dictionary = array($beanList[$this->module] => array("fields" => array($field => array())));
            include("$this->base_path/sugarfield_$field.php");
            if (!empty($dictionary[$beanList[$this->module]]) && isset($dictionary[$beanList[$this->module]]["fields"][$field]))
                $this->custom_def = $dictionary[$beanList[$this->module]]["fields"][$field];
    	}
    }
    
    /**
     * Adds a custom field using a field object
     *
     * @param Field Object $field
     * @return boolean
     */
    function addFieldObject(&$field){
        global $dictionary, $beanList;
        
        
        if (empty($beanList[$this->module]))
            return false;

        $bean_name = get_valid_bean_name($this->module);

        if (empty($dictionary[$bean_name]) || empty($dictionary[$bean_name]["fields"][$field->name]))
            return false;

        $currdef = $dictionary[$bean_name]["fields"][$field->name];
        $this->loadCustomDef($field->name);
        $newDef = $field->get_field_def();
        
        require_once ('modules/DynamicFields/FieldCases.php') ;
        $this->baseField = get_widget ( $field->type) ;
        foreach ($field->vardef_map as $property => $fmd_col){
           
        	if ($property == "action" || $property == "label_value" || $property == "label"
            	|| ((substr($property, 0,3) == 'ext' && strlen($property) == 4))
            ) 
            	continue;
       	 		
            // Bug 37043 - Avoid writing out vardef defintions that are the default value.
            if (isset($newDef[$property]) && 
            	((!isset($currdef[$property]) && !$this->isDefaultValue($property,$newDef[$property], $this->baseField))
            		|| (isset($currdef[$property]) && $currdef[$property] != $newDef[$property])
            	)
            ){
            	$this->custom_def[$property] = 
                    is_string($newDef[$property]) ? htmlspecialchars_decode($newDef[$property], ENT_QUOTES) : $newDef[$property];
            }
            
            if (isset($this->custom_def[$property]) && !isset($newDef[$property]))
            	unset($this->custom_def[$property]);
        }
        
        if (isset($this->custom_def["duplicate_merge_dom_value"]) && !isset($this->custom_def["duplicate_merge"]))
        	unset($this->custom_def["duplicate_merge_dom_value"]);
        
        $this->writeVardefExtension($bean_name, $field, $this->custom_def);
    }
    
    
}

?>
