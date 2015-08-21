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
require_once('modules/Prospects/ProspectFormBase.php');
$prospectForm = new ProspectFormBase();
if (!isset($_REQUEST['return_module'])) $_REQUEST['return_module']='Prospects';
if (!isset($_REQUEST['return_action'])) $_REQUEST['return_action']='index';

$prospectForm->handleSave('', true, false);

?>
