<?php
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

class ViewCfTest extends SugarView
{
	function ViewCfTest(){
		$this->options['show_footer'] = true;
		$this->options['show_header'] = true;
 		parent::SugarView();
 	}
 	
 	function display() {
 		require_once("include/Expressions/Dependency.php");
 		require_once("include/TemplateHandler/TemplateHandler.php");
 		$th = new TemplateHandler();
 		$depScript = $th->createDependencyJavascript(array(
 			'phone_office' => array(
 				'calculated' => true, 
 				"formula" => 'add(strlen($name), $employees)',
 				"enforced" => true,
 		)),array(), "EditView");
 		$smarty = new Sugar_Smarty();
 		$smarty->assign("dependencies", $depScript);
 		$smarty->display('modules/ExpressionEngine/tpls/cfTest.tpl');
 	}
}