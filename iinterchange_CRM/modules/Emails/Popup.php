<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/




if(isset($_REQUEST['mode']) && $_REQUEST['mode'] == 'show_raw') {
	if(!class_exists("Email")) {
		
	}
	$email = new Email();
	$email->retrieve($_REQUEST['metadata']);
	echo nl2br($email->safeText($email->raw_source));
} else {
	require_once('include/Popups/Popup_picker.php');
	$popup = new Popup_Picker();
	echo $popup->process_page();
}

?>