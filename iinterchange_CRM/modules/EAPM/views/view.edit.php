<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

/*********************************************************************************

 * Description: This file is used to override the default Meta-data EditView behavior
 * to provide customization specific to the Bugs module.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

require_once('include/MVC/View/views/view.edit.php');

class EAPMViewEdit extends ViewEdit {

    private $_returnId;

    protected function _getModuleTab()
    {
        return 'Users';
    }

    /**
	 * @see SugarView::_getModuleTitleParams()
	 */
	protected function _getModuleTitleParams($browserTitle = false)
	{
	    global $mod_strings;

        $returnAction = 'DetailView';
        $returnModule = 'Users';
        $returnId = $GLOBALS['current_user']->id;
        $returnName = $GLOBALS['current_user']->full_name;
        if(!empty($_REQUEST['return_action']) && !empty($_REQUEST['return_module'])){
            if('Users' == $_REQUEST['return_module']){
                if('EditView' == $_REQUEST['return_action']){
                    $returnAction = 'EditView';
                }
                if(!empty($_REQUEST['return_name'])){
                    $returnName = $_REQUEST['return_name'];
                }
                if(!empty($_REQUEST['user_id'])){
                    $returnId = $_REQUEST['user_id'];
                }
            }
        }
        $this->_returnId = $returnId;

        $iconPath = $this->getModuleTitleIconPath($this->module);
        $params = array();
        if (!empty($iconPath) && !$browserTitle) {
            $params[] = "<a href='index.php?module=Users&action=index'><img src='{$iconPath}' alt='".translate('LBL_MODULE_NAME','Users')."' title='".translate('LBL_MODULE_NAME','Users')."' align='absmiddle'></a>";
        }
        else {
            $params[] = translate('LBL_MODULE_NAME','Users');
        }
        $params[] = "<a href='index.php?module={$returnModule}&action=EditView&record={$returnId}'>".$returnName."</a>";
        $params[] = $GLOBALS['app_strings']['LBL_EDIT_BUTTON_LABEL'];

        return $params;
    }

    /**
	 * @see SugarView::getModuleTitleIconPath()
	 */
	protected function getModuleTitleIconPath($module) 
    {
        return parent::getModuleTitleIconPath('Users');
    }

 	function display() {
        $this->ss->assign('return_id', $this->_returnId);

        if($GLOBALS['current_user']->is_admin || empty($this->bean) || empty($this->bean->id) || $this->bean->isOwner($GLOBALS['current_user']->id)){
            if(!empty($this->bean) && empty($this->bean->id) && $this->_returnId != $GLOBALS['current_user']->id){
                $this->bean->assigned_user_id = $this->_returnId;
            }
            
            parent::display();
        } else {
        	ACLController::displayNoAccess();
        }
 	}
}
?>