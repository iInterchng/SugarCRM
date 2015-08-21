<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

/*********************************************************************************

 * Description:
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc. All Rights
 * Reserved. Contributor(s): ______________________________________..
 *********************************************************************************/


$focus = new Email();
$focus->email2init();
$focus->et->preflightUser($current_user);
$out = $focus->et->displayEmailFrame();
echo $out;
echo "<script>var composePackage = null;</script>";

$skipFooters = true;

