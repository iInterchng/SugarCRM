<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/


if( !isset( $install_script ) || !$install_script ){
    die($mod_strings['ERR_NO_DIRECT_SCRIPT']);
}
if(!isset($_SESSION['setup_db_type']) || $_SESSION['setup_db_type'] ==''){
 $_SESSION['setup_db_type'] = 'mysql';   
}
$setup_db_type = $_SESSION['setup_db_type'];

$errs = '';
if(isset($validation_errors)) {
	if(count($validation_errors) > 0) {
		$errs  = '<div id="errorMsgs">';
		$errs .= "<p>{$mod_strings['LBL_SYSOPTS_ERRS_TITLE']}</p>";
		$errs .= '<ul>';

		foreach($validation_errors as $error) {
			$errs .= '<li>' . $error . '</li>';
		}

		$errs .= '</ul>';
		$errs .= '</div>';
	}
}

$mysql = '';
$oci8 = '';
$mssql = '';
if($setup_db_type == "mysql")
	$mysql = 'checked="checked"';
else if ($setup_db_type == "mssql")
	$mssql = 'checked="checked"';


$out=<<<EOQ
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
   <meta http-equiv="Content-Script-Type" content="text/javascript">
   <meta http-equiv="Content-Style-Type" content="text/css">
   <title>{$mod_strings['LBL_WIZARD_TITLE']} {$mod_strings['LBL_SYSOPTS_DB_TITLE']}</title>
   <link REL="SHORTCUT ICON" HREF="include/images/sugar_icon.ico">
   <link rel="stylesheet" href="install/install.css" type="text/css" />
   <script type="text/javascript" src="install/installCommon.js"></script>
</head>
<body onload="document.getElementById('defaultFocus').focus();">
<form action="install.php" method="post" name="systemOptions" id="form">

<table cellspacing="0" cellpadding="0" border="0" align="center" class="shell">
      <tr><td colspan="2" id="help"><a href="{$help_url}" target='_blank'>{$mod_strings['LBL_HELP']} </a></td></tr>
    <tr>
      <th width="500">
		<p>
		<img src="{$sugar_md}" alt="SugarCRM" border="0">
		</p>
    {$mod_strings['LBL_SYSOPTS_DB_TITLE']}</th>
	<th width="200" style="text-align: right;">
		<a href="http://www.sugarcrm.com" target="_blank"><IMG src="include/images/sugarcrm_login.png" width="145" height="30" alt="SugarCRM" border="0"></a>
        </th>
</tr>
<tr>
   <td colspan="2">	
		{$errs}


<table width="100%" cellpadding="0" cellpadding="0" border="0" class="StyleDottedHr">
<tr><th colspan="3" align="left">{$mod_strings['LBL_SYSOPTS_DB']}</td></tr>
<tr><td colspan="3" align="left">{$mod_strings['LBL_SYSOPTS_2']}</td></tr>
<tr>
    <td>&nbsp;</td>
    <td align="left">
EOQ;
if(function_exists('mysql_connect') || function_exists('mysqli_connect')){ 
$out.=<<<EOQ
        <input type="radio" class="checkbox" name="setup_db_type" id="setup_db_type" value="mysql" {$mysql} onclick="document.getElementById('ociMsg').style.display='none'"/>{$mod_strings['LBL_MYSQL']}
EOQ;
//check to see if mysqli is enabled
if(function_exists('mysqli_connect')){
    $_SESSION['mysql_type'] = 'mysqli';
    $out.=' &nbsp;(MySQLi detected)<br>';
}else{
     $out.= '<br>';
}    
}
if(function_exists('mssql_connect') || function_exists('sqlsrv_connect')){
$out.=<<<EOQ
		<input type="radio" class="checkbox" name="setup_db_type" id="setup_db_type" value="mssql" {$mssql} onclick="document.getElementById('ociMsg').style.display='none'"/>{$mod_strings['LBL_MSSQL']}
EOQ;
}
//check to see if sqlsrv is enabled
if(function_exists('sqlsrv_connect')){
    $_SESSION['mssql_type'] = 'sqlsrv';
    $out.=' &nbsp;(Microsoft SQL Server Driver for PHP detected)<br>';
}else{
     $out.= '<br>';
}




$out.=<<<EOQ
    </td>
    <td width='350'nowrap>&nbsp;
    <div name="ociMsg" id="ociMsg" style="display:none">
    </div>
EOQ;

$out.=<<<EOQ
    </td>
        
</tr>
</table>
</td>
</tr>
<tr>
<td align="right" colspan="2">
<hr>
     <input type="hidden" name="current_step" value=" $next_step ">
     <table cellspacing="0" cellpadding="0" border="0" class="stdTable">
       <tr>
         <td>
            <input class="button" type="button" value="{$mod_strings['LBL_BACK']}" onclick="document.getElementById('form').submit();" />
            <input type="hidden" name="goto" value="{$mod_strings['LBL_BACK']}" />
         </td>
         <td><input class="button" type="submit" id="defaultFocus" name="goto" value="{$mod_strings['LBL_NEXT']}" /></td>
       </tr>
     </table>
</td>
</tr>
</table>
</form>
</body>
</html>
EOQ;
echo $out;
?>
