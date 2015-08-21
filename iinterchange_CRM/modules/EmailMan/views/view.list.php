<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/


require_once('include/MVC/View/views/view.list.php');

class EmailManViewList extends ViewList
{
 	/**
	 * @see SugarView::preDisplay()
	 */
	public function preDisplay()
 	{
 	    global $current_user;
        
        if ( !is_admin($current_user) && !is_admin_for_module($current_user,'Campaigns') )
            sugar_die($GLOBALS['app_strings']['ERR_NOT_ADMIN']); 
 	    
 		$this->lv = new ListViewSmarty();
 		$this->lv->export = false;
 		$this->lv->quickViewLinks = false;
 	}
 	
 	/**
	 * @see SugarView::_getModuleTitleParams()
	 */
	protected function _getModuleTitleParams($browserTitle = false)
	{
	    global $mod_strings;
	    
    	return array(
    	   "<a href='index.php?module=Administration&action=index'>".translate('LBL_MODULE_NAME','Administration')."</a>",
    	   translate('LBL_MASS_EMAIL_MANAGER_TITLE','Administration'),
    	   );
    }
    
    
    function listViewPrepare(){
    	$this->options['show_title'] = false;
    	parent::listViewPrepare();
    	echo $this->getModuleTitle(false);
    }
	/**
	 * @see ViewList::listViewProcess()
	 */
	function listViewProcess()
 	{
		parent::listViewProcess();
		
		global $app_strings;
		
		echo "<form action=\"index.php\" method=\"post\" name=\"EmailManDelivery\" id=\"form\">
			<table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" class='actionsContainer'>
				<tr><td style=\"padding-bottom: 2px;\">
                        <input type=\"hidden\" name=\"module\" value=\"EmailMan\">
                        <input type=\"hidden\" name=\"action\">
                        <input type=\"hidden\" name=\"return_module\">
                        <input type=\"hidden\" name=\"return_action\">
                        <input type=\"hidden\" name=\"manual\" value=\"true\">
                        <input	title=\"".$app_strings['LBL_CAMPAIGNS_SEND_QUEUED']."\" 
                                accessKey=\"".$app_strings['LBL_SAVE_BUTTON_KEY']."\" class=\"button\" 
                                onclick=\"this.form.return_module.value='EmailMan'; this.form.return_action.value='index'; this.form.action.value='EmailManDelivery'\" 
                                type=\"submit\" name=\"Send\" value=\"".$app_strings['LBL_CAMPAIGNS_SEND_QUEUED']."\">
            </td></tr></table></form>";
 	}
}