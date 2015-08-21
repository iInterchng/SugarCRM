<?php
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

require_once('modules/ModuleBuilder/MB/MBPackageTree.php');
require_once('modules/ModuleBuilder/Module/StudioBrowser.php');
class StudioTree extends MBPackageTree{
	function StudioTree(){
		$this->tree = new Tree('package_tree');
		$this->tree->id = 'package_tree';
		$this->mb = new StudioBrowser();
		$this->populateTree($this->mb->getNodes(), $this->tree);
	}
	
	function getName(){
		return translate('LBL_SECTION_MODULES');
	}
	
}
?>