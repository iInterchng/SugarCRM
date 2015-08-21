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
 * *******************************************************************************/
logThis('-----------------------------------------------------------------------------');
logThis('Upgrade started. At start.php');

//set the upgrade progress status.
set_upgrade_progress('start','in_progress');

unlinkTempFiles();
unlinkUploadFiles();
resetUwSession();

if(isset($_REQUEST['showUpdateWizardMessage']) && $_REQUEST['showUpdateWizardMessage'] == true) {
	// set a flag to skip the upload screen
	$_SESSION['skip_zip_upload'] = true;

	$newUWMsg =<<<eoq
	<table cellspacing="0" cellpadding="3" border="0">
		<tr>
			<th>
				{$mod_strings['LBL_UW_START_UPGRADED_UW_TITLE']}
			</th>
		</tr>
		<tr>
			<td>
				{$mod_strings['LBL_UW_START_UPGRADED_UW_DESC']}
			</td>
		</tr>
	</table>
eoq;
	echo $newUWMsg;
}


$uwMain =<<<eoq
<table cellpadding="3" cellspacing="0" border="0">
	<tr>
		<th align="left">
			{$mod_strings['LBL_UW_TITLE_START']}
		</th>
	</tr>
	<tr>
		<td align="left">
			<p>
		    {$mod_strings['LBL_UW_START_DESC']}
			</p>
			<BR>
			<p>
			<span class="error">
			{$mod_strings['LBL_UW_START_DESC2']}
			</span>
			</p>
			<BR>
			<p>
			{$mod_strings['LBL_UW_START_DESC3']}
			</p>
			</td>
	</tr>
</table>
<div id="upgradeDiv" style="display:none">
    <table cellspacing="0" cellpadding="0" border="0">
        <tr><td>
           <p><img src='modules/UpgradeWizard/processing.gif'> <br></p>
        </td></tr>
     </table>
 </div>
eoq;

$showBack		= false;
$showCancel		= true;
$showRecheck	= false;
$showNext		= true;

$stepBack		= 0;
$stepNext		= 1;
$stepCancel	= 0;
$stepRecheck	= 0;

?>
