<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/




/**
 * Created on Jul 17, 2006
 * Ajax Procedure for loading all subpanels for a certain subpanel tab.
 */

require_once('include/DetailView/DetailView.php');
$detailView = new DetailView();


$class = $beanList[$_REQUEST['loadModule']];

require_once($beanFiles[$class]);
$focus = new $class();
$focus->id = $_REQUEST['record'];

require_once('include/SubPanel/SubPanelTiles.php');
$subpanel = new SubPanelTiles($focus, $_REQUEST['loadModule']);

if(!function_exists('get_form_header')) {
    global $theme;

}

// set up data for subpanels
global $currentModule;
$currentModule = $_REQUEST['loadModule'];
$_REQUEST['action'] = 'DetailView';

echo $subpanel->display(false);
?>
