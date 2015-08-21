<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

$mod_strings   = return_module_language($current_language, $_REQUEST['target_module']);
$target_module = $_REQUEST['target_module']; // target class

if(file_exists('modules/'. $_REQUEST['target_module'] . '/EditView.php')) {
    $tpl = $_REQUEST['tpl'];
	if(is_file('modules/' . $target_module . '/' . $target_module . 'QuickCreate.php')) { // if there is a quickcreate override
	    require_once('modules/' . $target_module . '/' . $target_module . 'QuickCreate.php');
	    $editviewClass     = $target_module . 'QuickCreate'; // eg. OpportunitiesQuickCreate 
	    $editview          = new $editviewClass($target_module, 'modules/' . $target_module . '/tpls/' . $tpl);
	    $editview->viaAJAX = true;
	}
	else { // else use base class
	    require_once('include/EditView/EditViewQuickCreate.php');
	    $editview = new EditViewQuickCreate($target_module, 'modules/' . $target_module . '/tpls/' . $tpl);
	}
	$editview->process();
	echo $editview->display();
} else{
	
	$subpanelView = 'modules/'. $target_module . '/views/view.subpanelquickcreate.php';
	$view = (!empty($_REQUEST['target_view'])) ? $_REQUEST['target_view'] : 'QuickCreate';
	//Check if there is a custom override, then check for module override, finally use default (SubpanelQuickCreate)
	if(file_exists('custom/' . $subpanelView)) {
		require_once($subpanelView);
		$subpanelClass = $target_module . 'SubpanelQuickCreate';
		$sqc  = new $subpanelClass($target_module, $view);
	} else if(file_exists($subpanelView)) {
		require_once($subpanelView);
		$subpanelClass = $target_module . 'SubpanelQuickCreate';
		$sqc  = new $subpanelClass($target_module, $view);
	} else {
		require_once('include/EditView/SubpanelQuickCreate.php');
		$sqc  = new SubpanelQuickCreate($target_module, $view);
	}
}	

?>
