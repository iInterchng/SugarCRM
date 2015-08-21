<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/





    global $json,$current_user;
    
    
    if ($_REQUEST['object_type'] == "Meeting")
    {
        $focus = new Meeting();
        $focus->id = $_REQUEST['object_id'];
        $test = $focus->set_accept_status($current_user, $_REQUEST['accept_status']);
    }
    else if ($_REQUEST['object_type'] == "Call")
    {
        $focus = new Call();
        $focus->id = $_REQUEST['object_id'];
        $test = $focus->set_accept_status($current_user, $_REQUEST['accept_status']);
    }
    print 1;
    exit;
?>
