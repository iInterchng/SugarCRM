<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/





require_once('modules/Versions/DefaultVersions.php');

foreach($default_versions as $default_version){
	
	$version = new Version();
	$query="select count(*) the_count from versions where name='{$default_version['name']}'";
	$result=$version->db->query($query);
	$row=$version->db->fetchByAssoc($result);
	if ($row== null or $row['the_count'] ==0) {
		$version->name = $default_version['name'];
		$version->file_version = $default_version['file_version'];
		$version->db_version = $default_version['db_version'];
		$version->save();
	}
}

?>