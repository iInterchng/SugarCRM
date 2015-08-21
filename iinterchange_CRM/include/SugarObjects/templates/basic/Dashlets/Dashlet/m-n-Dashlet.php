<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

/*********************************************************************************

 * Description:  Defines the English language pack for the base application.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

require_once('include/Dashlets/DashletGeneric.php');
require_once('modules/<module_name>/<object_name>.php');

class <module_name>Dashlet extends DashletGeneric { 
    function <module_name>Dashlet($id, $def = null) {
		global $current_user, $app_strings;
		require('modules/<module_name>/metadata/dashletviewdefs.php');

        parent::DashletGeneric($id, $def);

        if(empty($def['title'])) $this->title = translate('LBL_HOMEPAGE_TITLE', '<module_name>');

        $this->searchFields = $dashletData['<module_name>Dashlet']['searchFields'];
        $this->columns = $dashletData['<module_name>Dashlet']['columns'];

        $this->seedBean = new <object_name>();        
    }
}