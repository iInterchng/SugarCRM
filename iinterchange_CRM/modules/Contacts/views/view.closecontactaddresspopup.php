<?php
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

 
require_once('include/MVC/View/views/view.list.php');

class ContactsViewCloseContactAddressPopup extends ViewList {
	
 	function CloseContactAddressPopup(){
 		parent::ViewList();
 	}

 	function display() {
        if(isset($_REQUEST['close_window'])) echo "<script>window.close();</script>";
        parent::display();
 	}	
}
?>
