<?php
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/


require_once('modules/ModuleBuilder/MB/MBPackageTree.php');
require_once('modules/ModuleBuilder/Module/DropDownBrowser.php');

class DropDownTree extends MBPackageTree{
	function DropDownTree(){
		$this->tree = new Tree('package_tree');
		$this->tree->id = 'package_tree';
		$this->mb = new DropDownBrowser();
		$this->populateTree($this->mb->getNodes(), $this->tree);
	}
	
	function getName(){
		return translate('LBL_SECTION_PACKAGES');
	}
}
?>