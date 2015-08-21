<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

global $portal;

$result = $portal->getAttachment($_REQUEST['id']);

$output = base64_decode($result['note_attachment']['file']);
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("Content-type: application/force-download");
header("Content-Length: " . strlen($output));
header("Content-disposition: attachment; filename=\"".$result['note_attachment']['filename']."\";");
header("Expires: 0");
set_time_limit(0);

ob_clean();
ob_start();
echo $output;
ob_flush();

?>