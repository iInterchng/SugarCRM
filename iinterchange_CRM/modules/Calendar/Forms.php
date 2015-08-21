<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/


    $GLOBALS['QCModule'] = 'Calls';
    //If Meetings module was requested, we override the return_module action to default to Calls
    if((isset($_REQUEST['module']) && $_REQUEST['module'] == 'Meetings') && (isset($_REQUEST['action']) && $_REQUEST['action'] == 'index')) {
      $_REQUEST['return_module'] = 'Calls';  	
    }    
    require_once('modules/Calls/Forms.php');
?>