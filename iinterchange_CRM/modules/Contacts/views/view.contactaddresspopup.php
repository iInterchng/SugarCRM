<?php
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/


/**
 * ContactsViewContactAddressPopup
 * 
 * */
 
require_once('include/MVC/View/SugarView.php');
require_once('modules/Contacts/Popup_picker.php');

class ContactsViewContactAddressPopup extends SugarView {
	
 	function ContactsViewContactAddressPopup(){
 		parent::SugarView();
 	}
 	
 	function process() {
		$this->display();
 	}

 	function display() {
 		$this->renderJavascript();
 		$popup = new Popup_Picker();
		echo $popup->process_page_for_address();
 	}	
}
?>