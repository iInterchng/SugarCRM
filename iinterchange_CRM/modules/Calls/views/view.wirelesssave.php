<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

/*********************************************************************************

 * Description: This file is used to override the default Meta-data EditView behavior
 * to provide customization specific to the Calls module.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

require_once('include/MVC/View/views/view.wirelesssave.php');

class CallsViewWirelesssave extends ViewWirelesssave {

 	protected function post_save()
    {
        // Bug 22326 - Handle special case of saving calls to leads and contacts
        if ( $this->return_module == 'Leads' ) {
            $this->bean->load_relationship('leads');
            $this->bean->leads->add($this->return_id);
        }
        if ( $this->return_module == 'Contacts' ) {
            $this->bean->load_relationship('contacts');
            $this->bean->contacts->add($this->return_id);
        }
        
        parent::post_save();
 	}
}
?>
