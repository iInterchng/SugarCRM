<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/




require_once('include/Dashlets/DashletGeneric.php');


class MyCasesDashlet extends DashletGeneric { 
    function MyCasesDashlet($id, $def = null) {
        global $current_user, $app_strings;
		require('modules/Cases/Dashlets/MyCasesDashlet/MyCasesDashlet.data.php');
		
        parent::DashletGeneric($id, $def);
        
        if(empty($def['title'])) $this->title = translate('LBL_LIST_MY_CASES', 'Cases');
        $this->searchFields = $dashletData['MyCasesDashlet']['searchFields'];
        $this->columns = $dashletData['MyCasesDashlet']['columns'];
        $this->seedBean = new aCase();        
    }
}

?>
