<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/




$expect_versions = array();

//$expect_versions['Custom Labels'] = array('name'=>'Custom Labels', 'db_version' =>'3.0', 'file_version'=>'3.0');
$expect_versions['Chart Data Cache'] = array('name'=>'Chart Data Cache', 'db_version' =>'3.5.1', 'file_version'=>'3.5.1');
$expect_versions['htaccess'] = array('name'=>'htaccess', 'db_version' =>'3.5.1', 'file_version'=>'3.5.1');
//$expect_versions['DST Fix'] = array('name'=>'DST Fix', 'db_version' =>'3.5.1b', 'file_version'=>'3.5.1b');
$expect_versions['Rebuild Relationships'] = array('name'=>'Rebuild Relationships', 'db_version' =>'4.0.0', 'file_version'=>'4.0.0');
$expect_versions['Rebuild Extensions'] = array('name'=>'Rebuild Extensions', 'db_version' =>'4.0.0', 'file_version'=>'4.0.0');
//$expect_versions['Studio Files'] = array('name'=>'Studio Files', 'db_version' =>'4.5.0', 'file_version'=>'4.5.0');
?>