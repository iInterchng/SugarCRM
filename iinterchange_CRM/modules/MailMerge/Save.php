<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

/*
 * Created on Oct 7, 2005
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
require_once('soap/SoapHelperFunctions.php');
require_once('modules/MailMerge/MailMerge.php'); 
 

global  $beanList, $beanFiles;

$module = $_POST['mailmerge_module'];
$document_id = $_POST['document_id'];
$selObjs = urldecode($_POST['selected_objects_def']);

$item_ids = array();
parse_str($selObjs,$item_ids);

$class_name = $beanList[$module];
$includedir = $beanFiles[$class_name];
require_once($includedir);
$seed = new $class_name(); 

$fields =  get_field_list($seed);

$document = new Document();
$document->retrieve($document_id);

$items = array();
foreach($item_ids as $key=>$value)
{
	$seed->retrieve($key);
	$items[] = $seed;
}

ini_set('max_execution_time', 600);
ini_set('error_reporting', 'E_ALL');
$dataDir = getcwd()."\\MergedDocuments\\";
$fileName = getcwd()."\\".$document->file_url_noimage;
list($outfile, $ext) = preg_split('/[.]/', $document->filename);

$mm = new MailMerge(null, null, $dataDir);
$mm->SetDataList($items);
$mm->SetFieldList($fields);
$mm->Template(array($fileName, $outfile));
$file = $mm->Execute();
$mm->CleanUp();

header("Location: index.php?module=MailMerge&action=Step4&file=".urlencode($file));


?>
