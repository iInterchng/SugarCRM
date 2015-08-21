<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point'); 
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

/*********************************************************************************

 * Description:  controls which link show up in the upper right hand corner of the app
 ********************************************************************************/
if(!isset($global_control_links)){
  $global_control_links = array();
}

if(!empty($_SESSION['current_user_id'])){
	$global_control_links['users'] = array(
	'linkinfo' => array($app_strings['LBL_MY_ACCOUNT'] => 'index.php?module=Users&action=DetailView&id='.(empty($_SESSION['current_user_id']) ? '' : $_SESSION['current_user_id']) ,
	                    $app_strings['LBL_LOGOUT'] => 'index.php?module=Users&action=Logout'),
	'submenu' => ''
	);
}
?>