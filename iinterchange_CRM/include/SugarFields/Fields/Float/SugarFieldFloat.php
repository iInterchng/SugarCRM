<?php

/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/


require_once('include/SugarFields/Fields/Int/SugarFieldInt.php');

class SugarFieldFloat extends SugarFieldInt 
{
    public function formatField($rawField, $vardef){
        // A null precision uses the user prefs / system prefs by default
        $precision = null;
        if ( isset($vardef['precision']) ) {
            $precision = $vardef['precision'];
        }
        
        if ( $rawField === '' || $rawField === NULL ) {
            return '';
        }

        return format_number($rawField,$precision,$precision);
    }
    
    public function unformatField($formattedField, $vardef){
        if ( $formattedField === '' || $formattedField === NULL ) {
            return '';
        }
        return (float)unformat_number($formattedField);
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
        $dec_sep = $settings->dec_sep;
        if ( $dec_sep != '.' ) {
            $value = str_replace($dec_sep,".",$value);
        }
        if ( !is_numeric($value) ) {
            return false;
        }
        
        return $value;
    }
}
