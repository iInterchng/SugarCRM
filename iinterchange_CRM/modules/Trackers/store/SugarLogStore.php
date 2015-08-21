<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

/*********************************************************************************

 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

require_once('modules/Trackers/store/Store.php');

class SugarLogStore implements Store {
    
    public function flush($monitor) {
       $metrics = $monitor->getMetrics();
       $values = array();
       foreach($metrics as $name=>$metric) {
       	  if(!empty($monitor->$name)) {
       	  	 $values[$name] = $monitor->$name;
       	  }
       } //foreach
       
       if(empty($values)) {
       	  return;
       }
       
       $GLOBALS['log']->info("---- metrics for $monitor->name ----");
       $GLOBALS['log']->info(var_export($values, true));
    }
}
?>
