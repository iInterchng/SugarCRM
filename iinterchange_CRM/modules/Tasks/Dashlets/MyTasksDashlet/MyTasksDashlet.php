<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/





require_once('include/Dashlets/DashletGeneric.php');


class MyTasksDashlet extends DashletGeneric { 
    function MyTasksDashlet($id, $def = null) {
        global $current_user, $app_strings;
		require('modules/Tasks/Dashlets/MyTasksDashlet/MyTasksDashlet.data.php');
		
        parent::DashletGeneric($id, $def);
        
        if(empty($def['title'])) $this->title = translate('LBL_LIST_MY_TASKS', 'Tasks');

        $this->searchFields = $dashletData['MyTasksDashlet']['searchFields'];
        $this->columns = $dashletData['MyTasksDashlet']['columns'];
                
        $this->seedBean = new Task();        
    }    
}

?>
