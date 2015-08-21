<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/



 class ConnectorRecord extends MergeRecord{
	var $object_name = 'ConnectorRecord';
    var $module_dir = 'Connector'; 
    
    
    function ConnectorRecord($merge_module = '', $merge_id = '') {
       parent::MergeRecord($merge_module, $merge_id);
    }

 }
?>
