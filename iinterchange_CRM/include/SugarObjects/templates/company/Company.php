<?php
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

require_once('include/SugarObjects/templates/basic/Basic.php');
 class Company extends Basic{
 	
 	function Company(){
 		parent::Basic();	
 		$this->emailAddress = new SugarEmailAddress();
 	}
 	function save($check_notify=false) {
		$this->add_address_streets('billing_address_street');
		$this->add_address_streets('shipping_address_street');
        $ori_in_workflow = empty($this->in_workflow) ? false : true;
		$this->emailAddress->handleLegacySave($this, $this->module_dir);
        parent::save($check_notify);
        $override_email = array();
        if(!empty($this->email1_set_in_workflow)) {
            $override_email['emailAddress0'] = $this->email1_set_in_workflow;
        }
        if(!empty($this->email2_set_in_workflow)) {
            $override_email['emailAddress1'] = $this->email2_set_in_workflow;
        }
        if(!isset($this->in_workflow)) {
            $this->in_workflow = false;
        }
        if($ori_in_workflow === false || !empty($override_email)){
            $this->emailAddress->save($this->id, $this->module_dir, $override_email,'','','','',$this->in_workflow);
        }
		return $this;
	}
	
 	function retrieve($id = -1, $encode=true) {
		$ret_val = parent::retrieve($id, $encode);
		$this->emailAddress->handleLegacyRetrieve($this);
		return $ret_val;
	}
	
	function get_list_view_data() {
		
		global $system_config;
		global $current_user;
		$temp_array = $this->get_list_view_array();
		$temp_array['EMAIL1'] = $this->emailAddress->getPrimaryAddress($this);
		$temp_array['EMAIL1_LINK'] = $current_user->getEmailLink('email1', $this, '', '', 'ListView');
		return $temp_array;
	}
 	
 }
?>
