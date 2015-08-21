<?php
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

require_once('include/SugarFields/Fields/SugarFieldVarchar/SugarFieldVarchar.php');

class SugarFieldText extends SugarFieldVarchar {

	function getDetailViewSmarty($parentFieldArray, $vardef, $displayParams) {
		$displayParams['nl2br'] = true;
		$displayParams['url2html'] = true;
		return parent::getDetailViewSmarty($parentFieldArray, $vardef, $displayParams);
    }	
	
	function getEditViewSmarty($parentFieldArray, $vardef, $displayParams) {
        if(!isset($displayParams)) $displayParams = array();
        if(!isset($displayParams['rows'])) $displayParams['rows'] = 15;
        if(!isset($displayParams['cols'])) $displayParams['cols'] = 80;

        $this->setup($parentFieldArray, $vardef, $displayParams);

        return $this->ss->fetch('include/SugarFields/Fields/SugarFieldText/SugarFieldTextEditViewSmarty.tpl');
    }

}
?>