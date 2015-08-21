<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

/*********************************************************************************

 * Description: This file is used to override the default Meta-data DetailView behavior
 * to provide customization specific to the Prospects module.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

require_once('include/MVC/View/views/view.detail.php');

class ProspectsViewDetail extends ViewDetail {

 	function ProspectsViewDetail(){
 		parent::ViewDetail();
 	}
 	
 	function display() {
		if(isset($this->bean->lead_id) && !empty($this->bean->lead_id)){
			
			//get lead name
			$lead = new Lead();
			$lead->retrieve($this->bean->lead_id);
			$this->ss->assign('lead', $lead);
		}
 		parent::display();
 	}
}
?>
