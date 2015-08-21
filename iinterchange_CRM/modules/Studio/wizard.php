<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/




require_once('modules/Studio/config.php');
require_once('modules/Studio/wizards/StudioWizard.php');

$wizard = !empty($_REQUEST['wizard'])? $_REQUEST['wizard']: 'StudioWizard';

if(file_exists('modules/Studio/wizards/'. $wizard . '.php')){
	require_once('modules/Studio/wizards/'. $wizard . '.php');
	$thewiz = new $wizard();
}else{
	unset($_SESSION['studio']['lastWizard']);
	$thewiz = new StudioWizard();
}

if(!empty($_REQUEST['back'])){
    $thewiz->back();
}
if(!empty($_REQUEST['option'])){
	$thewiz->process($_REQUEST['option']);
}else{
	$thewiz->display();
	
}


