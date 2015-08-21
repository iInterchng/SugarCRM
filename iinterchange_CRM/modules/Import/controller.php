<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

/*********************************************************************************

 * Description: Controller for the Import module
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 ********************************************************************************/

require_once("modules/Import/Forms.php");
require_once("include/MVC/Controller/SugarController.php");

class ImportController extends SugarController
{
    /**
     * @see SugarController::loadBean()
     */
    public function loadBean()
    {
        global $mod_strings;
        
        $this->bean = loadBean($_REQUEST['import_module']);
        if ( $this->bean ) {
            if ( !$this->bean->importable )
                $this->bean = false;
            elseif ( $_REQUEST['import_module'] == 'Users' && !is_admin($GLOBALS['current_user']) )
                $this->bean = false;
            elseif ( $this->bean->bean_implements('ACL')){
                if(!ACLController::checkAccess($this->bean->module_dir, 'import', true)){
                    ACLController::displayNoAccess();
                    sugar_die('');
                }
            }
        }
        
        if ( !$this->bean ) {
            $_REQUEST['message'] = $mod_strings['LBL_ERROR_IMPORTS_NOT_SET_UP'];
            $this->view = 'error';
        }
        else
            $GLOBALS['FOCUS'] = $this->bean;
    }
    
    function action_index()
    {
        $this->action_Step1();
    }
    
	function action_Step1()
    {
		$this->view = 'step1';
    }
    
    function action_Step2()
    {
		$this->view = 'step2';
    }
    
    function action_Step3()
    {
		$this->view = 'step3';
    }
    
    function action_Step4()
    {
		$this->view = 'step4';
    }
    
    function action_Last()
    {
		$this->view = 'last';
    }
    
    function action_Undo()
    {
		$this->view = 'undo';
    }
    
    function action_Error()
    {
		$this->view = 'error';
    }
    
    function action_GetControl()
    {
        echo getControl($_REQUEST['import_module'],$_REQUEST['field_name']);
        exit;
    }
}
?>