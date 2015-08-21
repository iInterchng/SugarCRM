<?php
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

class ProductCategoriesController extends SugarController {
	function ProductCategoriesController(){
		parent::SugarController();
	}

	public function process(){
		if(!is_admin($GLOBALS['current_user']) && (!is_admin_for_module($GLOBALS['current_user'],'Products'))){
			$this->hasAccess = false;
		}
		parent::process();
	}
	
}
?>
