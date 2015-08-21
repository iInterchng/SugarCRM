<?php
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

class ProductTemplatesController extends SugarController {
	function ProductTemplatesController(){
		parent::SugarController();
	}

	public function process(){
		if((!is_admin($GLOBALS['current_user']) && (!is_admin_for_module($GLOBALS['current_user'],'Products'))) 
		  && (strtolower($this->action) != 'popup')){
			$this->hasAccess = false;
		}
		parent::process();
	}
	
}
?>
