<?php
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

//require_once('include/Utils.php');

class ViewEditFormula extends SugarView
{
	function ViewEditFormula(){
		$this->options['show_footer'] = false;
		if (isset ($_REQUEST['embed']) && $_REQUEST['embed'])
		{
			$this->options['show_header'] = false;
		}
		parent::SugarView();

 	}

 	function display(){
 		global $app_strings, $current_user, $mod_strings, $theme, $beanList, $beanFiles;
		$smarty = new Sugar_Smarty();
 		$json = new JSON();
		require_once('include/JSON.php');
		//Load the field list from the target module
		if (!empty($_REQUEST['targetModule']))
 		{
			$module = $_REQUEST['targetModule'];
 			if (isset($_REQUEST['package']) && $_REQUEST['package'] != 'studio' && $_REQUEST['package'] != '') {
				//Get the MB Parsers
 				require_once('modules/ModuleBuilder/MB/MBPackage.php');
 				$pak = new MBPackage($_REQUEST['package']);
 				$defs = $pak->modules[$module]->getVardefs();
 				$fields = $this->cleanFields($defs['fields']);
 			} else {
 				$class = $beanList[$module];
				require_once $beanFiles [ $class ] ;
	        	$seed = new $class ( ) ;
	        	$fields = $this->cleanFields($seed->field_defs);
 			}
        	$smarty->assign('Field_Array', $json->encode($fields));
		}
		else
		{
			$fields = array(array('income', 'number'), array('employed', 'boolean'), array('first_name', 'string'), array('last_name', 'string'));
			$smarty->assign('Field_Array', $json->encode($fields));
		}
		if (!empty($_REQUEST['targetField']))
		{
			$smarty->assign("target", $_REQUEST['targetField']);
		}
        if (isset($_REQUEST['returnType']))
		{
			$smarty->assign("returnType", $_REQUEST['returnType']);
		}
		//Assign any requested Javascript event actions
		foreach(array('onSave', 'onLoad', 'onClose') as $e) {
			if (!empty($_REQUEST[$e]))
			{
				$smarty->assign($e, html_entity_decode($_REQUEST[$e], ENT_QUOTES));
			} else
			{
				$smarty->assign($e, 'function(){}');
			}
		}
		//Check if we need to load Ext ourselves
 		if (!isset($_REQUEST['loadExt']) || ($_REQUEST['loadExt'] && $_REQUEST['loadExt'] != "false"))
		{
			$smarty->assign('loadExt', true);
		} else
		{
			$smarty->assign('loadExt', false);
		}
		if (!empty($_REQUEST['formula'])) {
			$smarty->assign('formula', $json->decode(htmlspecialchars_decode($_REQUEST['formula'])));
		}
		if (isset($_REQUEST['returnType'])) {
			$smarty->assign('returnType', $_REQUEST['returnType']);
		}
 		$smarty->assign('app_strings', $app_strings);
 		$smarty->assign('mod', $mod_strings);
 		$smarty->display('modules/ExpressionEngine/tpls/formulaBuilder.tpl');
 	}

 	/**
 	 * Takes an array of field defs and returns a formated list of fields that are valid for use in expressions.
 	 *
 	 * @param array $fieldDef
 	 * @return array
 	 */
 	function cleanFields($fieldDef){
 		$fieldArray = array();
 		foreach($fieldDef as $fieldName => $def) {
 			if ($fieldName == 'deleted' || $fieldName == 'email1' || empty($def['type']))
 				continue;
 			if (isset($def['studio']) && ($def['studio'] == false || $def['studio'] == "false"))
 			    continue;
 			switch($def['type']) {
 				case "int":
 				case "float":
 				case "decimal":
 				case "currency":
 					$fieldArray[] = array($fieldName, 'number');
 					break;
 				case "bool":
 					$fieldArray[] = array($fieldName, 'boolean');
 					break;
 				case "varchar":
 				case "name":
 				case "phone":
 				case "text":
 				case "url":
 				case "encrypt":
 				case "enum":
					$fieldArray[] = array($fieldName, 'string');
 					break;
                case "date":
                case "datetime":
                case "datetimecombo":
					$fieldArray[] = array($fieldName, 'date');
 					break;
 				case "link":
					$fieldArray[] = array($fieldName, 'relate');
 					break;
                 default:
 					//Do Nothing
 					break;
 			}
 		}
 		return $fieldArray;
 	}

}
?>