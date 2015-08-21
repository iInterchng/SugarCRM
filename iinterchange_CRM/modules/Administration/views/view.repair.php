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
require_once('modules/Administration/QuickRepairAndRebuild.php');

class ViewRepair extends SugarView
{
    /**
	 * @see SugarView::display()
	 */
	public function display()
	{
	    $randc = new RepairAndClear();
        $randc->repairAndClearAll(array('clearAll'),array(translate('LBL_ALL_MODULES')), false,true);
        
        echo <<<EOHTML
<br /><br /><a href="index.php?module=Administration&action=index">{$GLOBALS['mod_strings']['LBL_DIAGNOSTIC_DELETE_RETURN']}</a>
EOHTML;
	}
}
