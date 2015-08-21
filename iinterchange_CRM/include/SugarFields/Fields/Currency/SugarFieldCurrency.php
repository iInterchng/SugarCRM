<?php

/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/


require_once('include/SugarFields/Fields/Float/SugarFieldFloat.php');

class SugarFieldCurrency extends SugarFieldFloat 
{
    function getListViewSmarty($parentFieldArray, $vardef, $displayParams, $col) {
        $tabindex = 1;
    	$this->setup($parentFieldArray, $vardef, $displayParams, $tabindex, false);
        
        $this->ss->left_delimiter = '{';
        $this->ss->right_delimiter = '}';
        $this->ss->assign('col',strtoupper($vardef['name']));        
	    if(is_object($parentFieldArray) ){
            if(!empty($parentFieldArray->currency_id)) {
                $this->ss->assign('currency_id',$parentFieldArray->currency_id);
            }
	    } else if (!empty($parentFieldArray['CURRENCY_ID'])) {
	    	$this->ss->assign('currency_id',$parentFieldArray['CURRENCY_ID']);
	    } else if (!empty($parentFieldArray['currency_id'])) {
	    	$this->ss->assign('currency_id',$parentFieldArray['currency_id']);
	    }
        return $this->fetch($this->findTemplate('ListView'));
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
        $value = str_replace($settings->currency_symbol,"",$value);
        
        return $settings->float($value,$vardef,$focus);
    }
}