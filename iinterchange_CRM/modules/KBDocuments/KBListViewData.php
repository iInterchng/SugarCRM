<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

require_once('include/ListView/ListViewData.php');
class KBListViewData extends ListViewData{
	
	function KBListViewData() {
		parent::ListViewData();
	}
	
	function getTotalCount($main_query){
		$count_query = $this->seed->create_list_count_query($main_query);
		$result = $GLOBALS['db']->query($count_query);
		if($row = $GLOBALS['db']->fetchByAssoc($result)){
		return $row['c'];
		}           
		return 0;
	}	
}
?>