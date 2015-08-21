<?php

/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/


require_once('include/SugarFields/Fields/Base/SugarFieldBase.php');
require_once('modules/Currencies/Currency.php');

class SugarFieldInt extends SugarFieldBase 
{
    public function formatField($rawField, $vardef){
        if ( !empty($vardef['disable_num_format']) ) {
            return $rawField;
        }
        if ( $rawField === '' || $rawField === NULL ) {
            return '';
        }
            
        return format_number($rawField,0,0);
    }

    public function unformatField($formattedField, $vardef){
        if ( $formattedField === '' || $formattedField === NULL ) {
            return '';
        }
        return (int)unformat_number($formattedField);
    }

    public function unformatSearchRequest(&$inputData, &$field) {
        $field['value'] = $this->unformatField($field['value'],$field);
    }

    function getSearchViewSmarty($parentFieldArray, $vardef, $displayParams, $tabindex) {
        // Use the basic field type for searches, no need to format/unformat everything... for now
    	$this->setup($parentFieldArray, $vardef, $displayParams, $tabindex);
        if($this->isRangeSearchView($vardef)) {
           $id = isset($displayParams['idName']) ? $displayParams['idName'] : $vardef['name'];
 		   $this->ss->assign('original_id', "{$id}");           
           $this->ss->assign('id_range', "range_{$id}");
           $this->ss->assign('id_range_start', "start_range_{$id}");
           $this->ss->assign('id_range_end', "end_range_{$id}");
           $this->ss->assign('id_range_choice', "{$id}_range_choice");
           if(file_exists('custom/include/SugarFields/Fields/Int/RangeSearchForm.tpl'))
           {
           	  return $this->fetch('custom/include/SugarFields/Fields/Int/RangeSearchForm.tpl');
           } 
           return $this->fetch('include/SugarFields/Fields/Int/RangeSearchForm.tpl');
        }        
    
    	return $this->fetch($this->findTemplate('SearchForm'));
    }  
    
    /**
     * @see SugarFieldBase::importSanitize()
     */
    public function importSanitize(
        $value,
        $vardef,
        $focus,
        ImportFieldSanitize $settings
        )
    {
        $value = str_replace($settings->num_grp_sep,"",$value);
        if (!is_numeric($value) || strstr($value,".")) {
            return false;
        }
        
        return $value;
    }
}