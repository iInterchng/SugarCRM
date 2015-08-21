<?php
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

require_once('include/SugarFields/Fields/SugarFieldBase/SugarFieldBase.php');

class SugarFieldLink extends SugarFieldBase {
    
	function getDetailViewSmarty($parentFieldArray, $vardef, $displayParams) {
    	$this->setup($parentFieldArray, $vardef, $displayParams);
        return $this->ss->fetch('include/SugarFields/Fields/SugarFieldLink/SugarFieldLinkDetailViewSmarty.tpl');
    }
    
}
?>
