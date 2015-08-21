<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

/*********************************************************************************

 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/
require_once('modules/DynamicFields/templates/Fields/TemplateField.php');
class TemplateEncrypt extends TemplateField{

	var $type='encrypt';
	function save($df){
		$this->type = 'encrypt';
		$this->ext3 = 'varchar';
		parent::save($df);

	}
	function get_field_def(){
		$vardef = parent::get_field_def();
		$vardef['dbType'] = $this->ext3;
		return $vardef;
	}
}

?>
