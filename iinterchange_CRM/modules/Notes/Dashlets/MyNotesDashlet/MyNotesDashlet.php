<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/


require_once('include/Dashlets/DashletGeneric.php');


class MyNotesDashlet extends DashletGeneric { 
    function MyNotesDashlet($id, $def = null) {
        global $current_user, $app_strings, $dashletData;
		require('modules/Notes/Dashlets/MyNotesDashlet/MyNotesDashlet.data.php');
        
        parent::DashletGeneric($id, $def);

        if(empty($def['title'])) $this->title = translate('LBL_MY_NOTES_DASHLETNAME', 'Notes');
         
        $this->searchFields = $dashletData['MyNotesDashlet']['searchFields'];
        $this->columns = $dashletData['MyNotesDashlet']['columns'];
        
        $this->seedBean = new Note();        
    }    
}
?>
