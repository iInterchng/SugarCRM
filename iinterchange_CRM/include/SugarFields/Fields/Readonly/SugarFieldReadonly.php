<?php
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

require_once('include/SugarFields/Fields/Base/SugarFieldBase.php');

class SugarFieldReadonly extends SugarFieldBase {
    function getEditViewSmarty($parentFieldArray, $vardef, $displayParams, $tabindex) {
    	return $this->getDetailViewSmarty($parentFieldArray, $vardef, $displayParams, $tabindex);
    }
    
}
?>