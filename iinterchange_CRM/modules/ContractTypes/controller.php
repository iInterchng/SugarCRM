<?php
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

class ContractTypesController extends SugarController {
	function ContractTypesController(){
		parent::SugarController();
	}

	public function process(){
        if((!is_admin($GLOBALS['current_user']) && (!is_admin_for_module($GLOBALS['current_user'],'Contracts')))){ 
			$this->hasAccess = false;
		}
		parent::process();
	}
	
}