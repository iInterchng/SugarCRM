<?php
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

class ViewIndex extends SugarView
{
	function ViewIndex(){
		$this->options['show_footer'] = false;
		$this->options['show_header'] = true;
 		parent::SugarView();
 	}
 	
 	function display() {
 		$smarty = new Sugar_Smarty();
 		$smarty->display('modules/ExpressionEngine/tpls/index.tpl');
 	}
}