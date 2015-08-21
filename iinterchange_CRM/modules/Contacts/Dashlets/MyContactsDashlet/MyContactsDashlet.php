<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/





require_once('include/Dashlets/DashletGeneric.php');


class MyContactsDashlet extends DashletGeneric { 
    function MyContactsDashlet($id, $def = null) {
        global $current_user, $app_strings;
		require('modules/Contacts/Dashlets/MyContactsDashlet/MyContactsDashlet.data.php');
        
        parent::DashletGeneric($id, $def);

        if(empty($def['title'])) $this->title = translate('LBL_HOMEPAGE_TITLE', 'Contacts');
        
        $this->searchFields = $dashletData['MyContactsDashlet']['searchFields'];
        $this->columns = $dashletData['MyContactsDashlet']['columns'];
                                                             
        $this->seedBean = new Contact();        
    }
}

?>
