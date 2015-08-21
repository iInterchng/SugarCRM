<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

/*
 * Created on Oct 4, 2005
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */




if(!empty($_REQUEST['mtime']))
{
	$mTime = $_REQUEST['mtime'];
	$file = $_SESSION['MAILMERGE_TEMP_FILE_'.$mTime];
	$rtfFile = 'sugartokendoc'.$mTime.'.doc';
	unlink($file);
	if(file_exists($rtfFile)){
		unlink($rtfFile);
	}
}

header("Location: index.php?module=MailMerge");
?>
