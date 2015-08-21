<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/





require_once('include/Dashlets/DashletGeneric.php');


class MyLeadsDashlet extends DashletGeneric { 
    function MyLeadsDashlet($id, $def = null) {
        global $current_user, $app_strings;
		require('modules/Leads/Dashlets/MyLeadsDashlet/MyLeadsDashlet.data.php');
		
        parent::DashletGeneric($id, $def);
         
        if(empty($def['title'])) $this->title = translate('LBL_LIST_MY_LEADS', 'Leads');
        
        $this->searchFields = $dashletData['MyLeadsDashlet']['searchFields'];
        $this->columns = $dashletData['MyLeadsDashlet']['columns'];
        $this->seedBean = new Lead();        
    }
}

?>
