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

/**
 * Database
 * This is an implementation of the Store interface where the storage uses
 * the configured database instance as defined in DBManagerFactory::getInstance() method
 * 
 */
class DatabaseStore implements Store {
 
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

       if($GLOBALS['db']->dbType == 'oci8') {
       	  $columns[] = 'id';
       	  $values[] = $GLOBALS['db']->getHelper()->getAutoIncrementSQL($monitor->table_name,'id');
       }
       
       $query = "INSERT INTO $monitor->table_name (" .implode("," , $columns). " ) VALUES ( ". implode("," , $values). ')';
	   $GLOBALS['db']->query($query);	   
    }
}

?>
