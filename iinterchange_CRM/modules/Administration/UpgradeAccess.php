<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/




global $mod_strings;
global $sugar_config;

$ignoreCase = (substr_count(strtolower($_SERVER['SERVER_SOFTWARE']), 'apache/2') > 0)?'(?i)':'';
$htaccess_file   = getcwd() . "/.htaccess";
$contents = '';
$restrict_str = <<<EOQ

# BEGIN SUGARCRM RESTRICTIONS
RedirectMatch 403 {$ignoreCase}.*\.log$
RedirectMatch 403 {$ignoreCase}/+not_imported_.*\.txt
RedirectMatch 403 {$ignoreCase}/+(soap|cache|xtemplate|data|examples|include|log4php|metadata|modules)/+.*\.(php|tpl)
RedirectMatch 403 {$ignoreCase}/+emailmandelivery\.php
RedirectMatch 403 {$ignoreCase}/+cache/+upload
RedirectMatch 403 {$ignoreCase}/+cache/+diagnostic
RedirectMatch 403 {$ignoreCase}/+files\.md5$
# END SUGARCRM RESTRICTIONS
EOQ;

if(file_exists($htaccess_file)){
    $fp = fopen($htaccess_file, 'r');
    $skip = false;
    while($line = fgets($fp)){

    	if(preg_match("/\s*#\s*BEGIN\s*SUGARCRM\s*RESTRICTIONS/i", $line))$skip = true;
        if(!$skip)$contents .= $line;
        if(preg_match("/\s*#\s*END\s*SUGARCRM\s*RESTRICTIONS/i", $line))$skip = false;
    }
}
$status =  file_put_contents($htaccess_file, $contents . $restrict_str);
if( !$status ){
    echo '<p>' . $mod_strings['LBL_HT_NO_WRITE'] . '<span class=stop>$htaccess_file</span></p>\n';
    echo '<p>' . $mod_strings['LBL_HT_NO_WRITE_2'] . '</p>\n';
    echo "$redirect_str";
}


// cn: bug 9365 - security for filesystem
$uploadDir='';
$uploadHta='';

if (empty($GLOBALS['sugar_config']['upload_dir'])) {
    $GLOBALS['sugar_config']['upload_dir']='cache/upload/';
}
$uploadDir = getcwd()."/".$sugar_config['upload_dir'];
if(file_exists($uploadDir)){
	$uploadHta = $uploadDir.".htaccess";
}
else{
	mkdir_recursive($uploadDir);
	if(is_dir($uploadDir)){
		$uploadHta = $uploadDir.".htaccess";
	}
}

$denyAll =<<<eoq
<Directory>
	Order Deny,Allow
	Deny from all
</Directory>
eoq;

if(file_exists($uploadHta) && filesize($uploadHta)) {
	// file exists, parse to make sure it is current
	if(is_writable($uploadHta) && ($fpUploadHta = @sugar_fopen($uploadHta, "r+"))) {
		$oldHtaccess = file_get_contents($uploadHta);
		// use a different regex boundary b/c .htaccess uses the typicals
		if(!preg_match("=".$denyAll."=", $oldHtaccess)) {
			$oldHtaccess .= $denyAll;
		}

		rewind($fpUploadHta);
		fwrite($fpUploadHta, $oldHtaccess);
		ftruncate($fpUploadHta, ftell($fpUploadHta));
		fclose($fpUploadHta);
	} else {
		$htaccess_failed = true;
	}
} else {
	// no .htaccess yet, create a fill
	if($fpUploadHta = @sugar_fopen($uploadHta, "w")) {
		fputs($fpUploadHta, $denyAll);
		fclose($fpUploadHta);
	} else {
		$htaccess_failed = true;
	}
}




include('modules/Versions/ExpectedVersions.php');


global $expect_versions;

if (isset($expect_versions['htaccess'])) {
        $version = new Version();
        $version->retrieve_by_string_fields(array('name'=>'htaccess'));

        $version->name = $expect_versions['htaccess']['name'];
        $version->file_version = $expect_versions['htaccess']['file_version'];
        $version->db_version = $expect_versions['htaccess']['db_version'];
        $version->save();
}

/* Commenting out as this shows on upgrade screen
 * echo "\n" . $mod_strings['LBL_HT_DONE']. "<br />\n";
*/

?>