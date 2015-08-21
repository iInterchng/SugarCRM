<?php
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

class FieldViewer{
	function FieldViewer(){
		$this->ss = new Sugar_Smarty();
	}
	function getLayout($vardef){

		if(empty($vardef['type']))$vardef['type'] = 'varchar';
		$mod = return_module_language($GLOBALS['current_language'], 'EditCustomFields');
		$this->ss->assign('vardef', $vardef);
		$this->ss->assign('MOD', $mod);
		$this->ss->assign('APP', $GLOBALS['app_strings']);
		//Only display range search option if in Studio, not ModuleBuilder
		$this->ss->assign('range_search_option_enabled', empty($_REQUEST['view_package']));
		
		$GLOBALS['log']->debug('FieldViewer.php->getLayout() = '.$vardef['type']);
		switch($vardef['type']){
			case 'address':
                return $this->ss->fetch('modules/DynamicFields/templates/Fields/Forms/address.tpl');
			case 'bool':
				return $this->ss->fetch('modules/DynamicFields/templates/Fields/Forms/bool.tpl');
			case 'int':
				return $this->ss->fetch('modules/DynamicFields/templates/Fields/Forms/int.tpl');
			case 'float':
				return $this->ss->fetch('modules/DynamicFields/templates/Fields/Forms/float.tpl');
			case 'decimal':
				return $this->ss->fetch('modules/DynamicFields/templates/Fields/Forms/float.tpl');
			case 'date':
			    require_once('modules/DynamicFields/templates/Fields/Forms/date.php');
				return get_body($this->ss, $vardef);
			case 'datetimecombo':
			case 'datetime':
			    require_once('modules/DynamicFields/templates/Fields/Forms/datetimecombo.php');
				return get_body($this->ss, $vardef);
			case 'enum':
				require_once('modules/DynamicFields/templates/Fields/Forms/enum2.php');
				return get_body($this->ss, $vardef);
			case 'multienum':
				require_once('modules/DynamicFields/templates/Fields/Forms/multienum.php');
				return get_body($this->ss, $vardef);
			case 'radioenum':
				require_once('modules/DynamicFields/templates/Fields/Forms/radioenum.php');
				return get_body($this->ss, $vardef);
			case 'html':
				require_once('modules/DynamicFields/templates/Fields/Forms/html.php');
				return get_body($this->ss, $vardef);
			case 'currency':
				return $this->ss->fetch('modules/DynamicFields/templates/Fields/Forms/currency.tpl');
			case 'relate':
				require_once('modules/DynamicFields/templates/Fields/Forms/relate.php');
				return get_body($this->ss, $vardef);
			case 'parent':
				require_once('modules/DynamicFields/templates/Fields/Forms/parent.php');
				return get_body($this->ss, $vardef);
			case 'text':
				return $this->ss->fetch('modules/DynamicFields/templates/Fields/Forms/text.tpl');
			case 'encrypt':
				require_once('modules/DynamicFields/templates/Fields/Forms/encrypt.php');
				return get_body($this->ss, $vardef);
			case 'iframe':
				require_once('modules/DynamicFields/templates/Fields/Forms/iframe.php');
				return get_body($this->ss, $vardef);
			case 'url':
				require_once('modules/DynamicFields/templates/Fields/Forms/url.php');
				return get_body($this->ss, $vardef);
			case 'phone:':
				require_once('modules/DynamicFields/templates/Fields/Forms/phone.php');
				return get_body($this->ss, $vardef);
			default:
				$file = false;
				if(file_exists('custom/modules/DynamicFields/templates/Fields/Forms/' . $vardef['type'] . '.php')){
					$file = 'custom/modules/DynamicFields/templates/Fields/Forms/' . $vardef['type'] . '.php';
				} elseif(file_exists('modules/DynamicFields/templates/Fields/Forms/' . $vardef['type'] . '.php')){
					$file = 'modules/DynamicFields/templates/Fields/Forms/' . $vardef['type'] . '.php';
				}
				if(!empty($file)){
					require_once($file);
					return get_body($this->ss, $vardef);
				}else{ 
					return $this->ss->fetch('modules/DynamicFields/templates/Fields/Forms/varchar.tpl');
				}
		}
	}

}