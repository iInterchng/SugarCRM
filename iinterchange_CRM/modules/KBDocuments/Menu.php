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

global $mod_strings;
global $current_user;


if(ACLController::checkAccess('KBDocuments', 'edit', true))$module_menu[]=Array("index.php?module=KBDocuments&action=EditView&return_module=KBDocuments&return_action=DetailView", $mod_strings['LNK_NEW_ARTICLE'],"CreateKBArticle");
//if(ACLController::checkAccess('KBDocuments', 'list', true))$module_menu[]=Array("index.php?module=KBDocuments&action=index", $mod_strings['LNK_KBDOCUMENT_LIST'],"Documents");
if(ACLController::checkAccess('KBDocuments', 'edit', true)){
	
	$admin = new Administration();
	$admin->retrieveSettings();
	$user_merge = $current_user->getPreference('mailmerge_on');
	if ($user_merge == 'on' && isset($admin->settings['system_mailmerge_on']) && $admin->settings['system_mailmerge_on']){
		$module_menu[]=Array("index.php?module=MailMerge&action=index&reset=true", $mod_strings['LNK_NEW_MAIL_MERGE'],"Documents");
	}
}
if(ACLController::checkAccess('KBDocuments', 'list', true))$module_menu[]=Array("index.php?module=KBDocuments&action=SearchHome", $mod_strings['LBL_LIST_ARTICLES'],"KBArticle");
if(is_admin($current_user) || is_admin_for_module($current_user,'KBDocuments')){
	if(ACLController::checkAccess('KBDocuments', 'list', true))$module_menu[]=Array("index.php?module=KBDocuments&action=KBAdminView", $mod_strings['LBL_KNOWLEDGE_BASE_ADMIN_MENU'],"KB");
}
?>
