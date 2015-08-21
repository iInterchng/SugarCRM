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

require_once('include/MVC/View/views/view.list.php');

class ContractTypesViewList extends ViewList {
   
 	function ContractTypeViewList(){
 		parent::ViewList();
 	}
 	
 	function preDisplay(){
 		parent::preDisplay();
 		$this->lv->showMassupdateFields=false;
 		
 	}
}
?>