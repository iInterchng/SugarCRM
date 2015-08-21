<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point'); 
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

/*********************************************************************************

 * Description:  TODO To be written.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

global $mod_strings, $sugar_config, $app_strings;

if(ACLController::checkAccess('Quotes', 'edit', true))$module_menu[] =Array("index.php?module=Quotes&action=EditView&return_module=Quotes&return_action=DetailView", $mod_strings['LNK_NEW_QUOTE'],"CreateQuotes");
if(ACLController::checkAccess('Quotes', 'list', true))$module_menu[] =Array("index.php?module=Quotes&action=index&return_module=Quotes&return_action=index", $mod_strings['LNK_QUOTE_LIST'],"Quotes");
if(empty($sugar_config['disc_client'])){
	if(ACLController::checkAccess('Quotes', 'list', true))$module_menu[] =Array("index.php?module=Reports&action=index&view=quotes", $mod_strings['LNK_QUOTE_REPORTS'],"QuoteReports", 'Quotes');
}


?>