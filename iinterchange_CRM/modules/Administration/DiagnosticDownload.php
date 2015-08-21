<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/


global $current_user;


if (!is_admin($current_user)) sugar_die("Unauthorized access to administration.");

if(!isset($_REQUEST['guid']) || !isset($_REQUEST['time']))
{
	die('Did not receive a filename to download');
}
$time = str_replace(array('.', '/', '\\'), '', $_REQUEST['time']);
$guid = str_replace(array('.', '/', '\\'), '', $_REQUEST['guid']);
$path = getcwd()."/{$GLOBALS['sugar_config']['cache_dir']}diagnostic/{$guid}/diagnostic{$time}.zip";
$filesize = filesize($path);
ob_clean();
header('Content-Description: File Transfer');
header('Content-type: application/octet-stream');
header("Pragma: public");
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("Content-Disposition: attachment; filename=$guid.zip");
header("Content-Transfer-Encoding: binary");
header("Content-Length: $filesize");
readfile($path);



?>
