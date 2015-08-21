<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

require_once('include/MVC/View/views/view.popup.php');

class ProductTemplatesViewPopup extends ViewPopup {

 	function ProductTemplatesViewPopup(){
 		parent::ViewPopup();
 	}
 	
 	function display() {
		require_once('modules/ProductTemplates/Popup_picker.php');
		$popup = new Popup_Picker();
		echo $popup->process_page();
 	}
}

?>