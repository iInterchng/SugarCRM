<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

/*********************************************************************************

 * Description: This file is used to override the default Meta-data DetailView behavior
 * to provide customization specific to the Campaigns module.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

require_once('include/json_config.php');

require_once('include/MVC/View/views/view.detail.php');

class CampaignsViewDetail extends ViewDetail {

 	function CampaignsViewDetail(){

        parent::ViewDetail();
        //turn off normal display of subpanels
        $this->options['show_subpanels'] = false;
        
 	}
 	

    function preDisplay(){
        global $mod_strings;
        if (isset($this->bean->campaign_type) && strtolower($this->bean->campaign_type) == 'newsletter'){
            $mod_strings['LBL_MODULE_NAME'] = $mod_strings['LBL_NEWSLETTERS'];
        }
        parent::preDisplay();

    }        

 	function display() {
        
        if (isset($_REQUEST['mode']) && $_REQUEST['mode']=='set_target'){
            require_once('modules/Campaigns/utils.php');
            //call function to create campaign logs
            $mess = track_campaign_prospects($this->bean);
            
            $confirm_msg = "var ajax_C_LOG_Status = new SUGAR.ajaxStatusClass(); 
            window.setTimeout(\"ajax_C_LOG_Status.showStatus('".$mess."')\",1000); 
            window.setTimeout('ajax_C_LOG_Status.hideStatus()', 1500); 
            window.setTimeout(\"ajax_C_LOG_Status.showStatus('".$mess."')\",2000); 
            window.setTimeout('ajax_C_LOG_Status.hideStatus()', 5000); ";
            $this->ss->assign("MSG_SCRIPT",$confirm_msg);
            
        }         
        
	    if (($this->bean->campaign_type == 'Email') || ($this->bean->campaign_type == 'NewsLetter' )) {
	    	$this->ss->assign("ADD_BUTTON_STATE", "submit");
	        $this->ss->assign("TARGET_BUTTON_STATE", "hidden");
	    } else {
	    	$this->ss->assign("ADD_BUTTON_STATE", "hidden");
	    	$this->ss->assign("DISABLE_LINK", "display:none");
	        $this->ss->assign("TARGET_BUTTON_STATE", "submit");
	    }
	    
	    $currency = new Currency();
	    if(isset($this->bean->currency_id) && !empty($this->bean->currency_id))
	    {
	    	$currency->retrieve($this->bean->currency_id);
	    	if( $currency->deleted != 1){
	    		$this->ss->assign('CURRENCY', $currency->iso4217 .' '.$currency->symbol);
	    	}else {
	    	    $this->ss->assign('CURRENCY', $currency->getDefaultISO4217() .' '.$currency->getDefaultCurrencySymbol());	
	    	}
	    }else{
	    	$this->ss->assign('CURRENCY', $currency->getDefaultISO4217() .' '.$currency->getDefaultCurrencySymbol());
	    }

        parent::display();

        //We want to display subset of available, panels, so we will call subpanel
        //object directly instead of using sugarview.  
        $GLOBALS['focus'] = $this->bean;
        require_once('include/SubPanel/SubPanelTiles.php');
        $subpanel = new SubPanelTiles($this->bean, $this->module);
        //get available list of subpanels
        $alltabs=$subpanel->subpanel_definitions->get_available_tabs();
        if (!empty($alltabs)) {
            //iterate through list, and filter out all but 3 subpanels
            foreach ($alltabs as $key=>$name) {
                if ($name != 'prospectlists' && $name!='emailmarketing' && $name != 'tracked_urls') {
                    //exclude subpanels that are not prospectlists, emailmarketing, or tracked urls
                    $subpanel->subpanel_definitions->exclude_tab($name);
                }   
            }
            //only show email marketing subpanel for email/newsletter campaigns
            if ($this->bean->campaign_type != 'Email' && $this->bean->campaign_type != 'NewsLetter' ) {
                //exclude subpanels that are not prospectlists, emailmarketing, or tracked urls
                $subpanel->subpanel_definitions->exclude_tab('emailmarketing');
            }                       
        }
        //show filtered subpanel list
        echo $subpanel->display();    

    }
}
?>