<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

/*********************************************************************************

 * Description:  TODO: To be written.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/
global $mod_strings;
echo getClassicModuleTitle($mod_strings['LBL_MODULE_TITLE'], array($mod_strings['LBL_MODULE_TITLE'],$mod_strings['LBL_HOME']), true); 
require_once('modules/InboundEmail/ListView.php');

?>
