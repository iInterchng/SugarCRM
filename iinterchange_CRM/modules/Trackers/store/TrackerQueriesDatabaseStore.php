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

class TrackerQueriesDatabaseStore implements Store {
    
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
       
       if($monitor->run_count == 1) {
       	  if($GLOBALS['db']->dbType == 'oci8') {
	          $query = "INSERT INTO $monitor->table_name (" .implode("," , $columns). " ) VALUES ( ". implode("," , $values). ')';
	
			  $lob_fields = array();
			  $lob_field_type = array();
			  $lobs = array();
			  
			  //Add text as the lob field
			  $lob_fields['text'] = ":". 'text';
			  $lob_field_type['text'] = OCI_B_CLOB;
			
			  $query .= " RETURNING ".implode(",", array_keys($lob_fields)).' INTO '.implode(",", array_values($lob_fields));
			
			  $stmt = oci_parse($GLOBALS['db']->database, $query);
			  $err = oci_error($GLOBALS['db']->database);
			  if ($err != false){
			      $GLOBALS['log']->error($query.">>".$err['code'].":".$err['message']);
			      return;
			  }
	
			  foreach ($lob_fields as $key=>$descriptor) {
			    $newlob = OCINewDescriptor($GLOBALS['db']->database, OCI_D_LOB);
			    OCIBindByName($stmt, $descriptor, $newlob, -1, $lob_field_type[$key]);
			    $lobs[$key] = $newlob;
			  }
			
			  oci_execute($stmt,OCI_DEFAULT);
			  $err = oci_error($stmt);
			  if ($err != false){
				  $GLOBALS['log']->fatal($query.">>".$err['code'].":".$err['message']);
				  return;
			  } else {
				  foreach ($lobs as $key=>$lob){
				        $val = $monitor->$key;
				        if (empty($val)) $val=" ";
				        $lob->save($val);
				  }
				  oci_commit($GLOBALS['db']->database);
			  }
			
			  // free all the lobs.
			  foreach ($lobs as $lob){
			    $lob->free();
			  }
			  oci_freecursor($stmt); 
       	  } else {
	          $query = "INSERT INTO $monitor->table_name (" .implode("," , $columns). " ) VALUES ( ". implode("," , $values). ')';
		      $GLOBALS['db']->query($query);
       	  }       
       } else {
       	  $query = "UPDATE $monitor->table_name set run_count={$monitor->run_count}, sec_avg={$monitor->sec_avg}, sec_total={$monitor->sec_total}, date_modified='{$monitor->date_modified}' where query_hash = '{$monitor->query_hash}'";
          $GLOBALS['db']->query($query);
       }
    }
}

?>
