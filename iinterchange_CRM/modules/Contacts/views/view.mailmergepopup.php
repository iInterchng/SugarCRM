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

class ContactsViewMailMergePopup extends SugarView {
	
 	function ContactAddressPopup(){
 		parent::SugarView();
 	}
 	
 	function process() {
		$this->display();
 	}

 	function display() {
 		
		$popup = new Popup_Picker();
		echo $popup->process_page_for_merge();
 	}	
}
?>