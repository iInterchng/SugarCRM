<?php
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

require_once('include/MVC/View/SugarView.php');
require_once('include/MVC/Controller/SugarController.php');

class CampaignsViewClassic extends SugarView
{	
 	function CampaignsViewClassic()
 	{
 		parent::SugarView();
 		$this->type = $this->action;
 	}	
 	
 	/**
	 * @see SugarView::display()
	 */
	public function display()
	{
 		// Call SugarController::getActionFilename to handle case sensitive file names
 		$file = SugarController::getActionFilename($this->action);
 		if(file_exists('custom/modules/' . $this->module . '/'. $file . '.php')){
			$this->includeClassicFile('custom/modules/'. $this->module . '/'. $file . '.php');
			return true;
		}elseif(file_exists('modules/' . $this->module . '/'. $file . '.php')){
			$this->includeClassicFile('modules/'. $this->module . '/'. $file . '.php');
			return true;
		}
		return false;
 	} 	
	
    /**
	 * @see SugarView::_getModuleTitleParams()
	 */
	protected function _getModuleTitleParams($browserTitle = false)
	{
    	$params = array();
    	$params[] = $this->_getModuleTitleListParam($browserTitle);
    	if (isset($this->action)){
    		switch($_REQUEST['action']){
    				case 'WizardHome':
				    	if(!empty($this->bean->id))
				    	{
				    		$params[] = "<a href='index.php?module={$this->module}&action=DetailView&record={$this->bean->id}'>".$this->bean->name."</a>";
				    	}
				    	$params[] = $GLOBALS['mod_strings']['LBL_CAMPAIGN_WIZARD'];
				    	break;
				    case 'WebToLeadCreation':
    					$params[] = $GLOBALS['mod_strings']['LBL_LEAD_FORM_WIZARD'];
    					break;
    				case 'WizardNewsletter':
				    	if(!empty($this->bean->id))
				    	{
				    		$params[] = "<a href='index.php?module={$this->module}&action=DetailView&record={$this->bean->id}'>".$GLOBALS['mod_strings']['LBL_NEWSLETTER_TITLE']."</a>";
				    	}
				    	$params[] = $GLOBALS['mod_strings']['LBL_CREATE_NEWSLETTER'];
				    	break;
    				case 'CampaignDiagnostic':
    					$params[] = $GLOBALS['mod_strings']['LBL_CAMPAIGN_DIAGNOSTICS'];
    					break;  
    				case 'WizardEmailSetup':
    					$params[] = $GLOBALS['mod_strings']['LBL_EMAIL_SETUP_WIZARD_TITLE'];
    					break;    
    				case 'TrackDetailView':
    					if(!empty($this->bean->id))
    					{
	    					$params[] = "<a href='index.php?module={$this->module}&action=DetailView&record={$this->bean->id}'>".$this->bean->name."</a>";
    					}
	    				$params[] = $GLOBALS['mod_strings']['LBL_LIST_TO_ACTIVITY'];
    					break;			  					    					
    		}//switch
    	}//fi
 		
    	return $params;
    }
}