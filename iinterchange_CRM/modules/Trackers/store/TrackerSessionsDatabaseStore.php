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
class TrackerSessionsDatabaseStore implements Store {
    
    public function flush($monitor) {

       $metrics = $monitor->getMetrics();
       $columns = array();
       $values = array();
       foreach($metrics as $name=>$metric) {
       	  if(!empty($monitor->$name)) {
       	  	 $columns[] = $name;
       	  	 if($metrics[$name]->_type == 'int' || $metrics[$name]->_type == 'double') {
                $values[] = $GLOBALS['db']->quote($monitor->$name);
             } else if ($metrics[$name]->_type == 'datetime') {
             	$values[] = ($GLOBALS['db']->dbType == 'oci8') ? db_convert("'".$monitor->$name."'",'datetime') : "'".$monitor->$name."'";
       	  	 } else {
                $values[] = "'".$GLOBALS['db']->quote($monitor->$name)."'";
             }     
       	  }
       } //foreach
       
       if(empty($values)) {
       	  return;
       }
       
       if($GLOBALS['db']->dbType == 'oci8'  &&  method_exists( $GLOBALS['db']->getHelper()  , 'getAutoIncrementSQL')) {
       	  $columns[] = 'id';
       	  if(method_exists($GLOBALS['db']->getHelper(), 'getAutoIncrementSQL'))
       	  {
       	  	$values[] = $GLOBALS['db']->getHelper()->getAutoIncrementSQL($monitor->table_name,'id');
       	  } else {
       	  	$values[] = $GLOBALS['db']->getHelper()->getAutoIncrement($monitor->table_name,'id');
       	  }
       }
       if ( !isset($monitor->round_trips) ) $monitor->round_trips = 0;
       if ( !isset($monitor->active) ) $monitor->active = 1;
       if ( !isset($monitor->seconds) ) $monitor->seconds = 0;
       if($monitor->round_trips == 1) {
		  $query = "INSERT INTO $monitor->table_name (" .implode("," , $columns). " ) VALUES ( ". implode("," , $values). ')';
		  $GLOBALS['db']->query($query);
       } else {
       	  $query = "UPDATE $monitor->table_name SET date_end = '{$monitor->date_end}' , seconds = {$monitor->seconds}, active = '{$monitor->active}', round_trips = $monitor->round_trips WHERE session_id = '{$monitor->session_id}'";
       	  $GLOBALS['db']->query($query);
       }
    }
}

?>
