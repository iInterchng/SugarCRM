<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

// try to use the user's theme if we can figure it out
if ( isset($_REQUEST['themeName']) )
    SugarThemeRegistry::set($_REQUEST['themeName']);
elseif ( isset($_SESSION['authenticated_user_theme']) )
    SugarThemeRegistry::set($_SESSION['authenticated_user_theme']);

while(substr_count($_REQUEST['imageName'], '..') > 0){
	$_REQUEST['imageName'] = str_replace('..', '.', $_REQUEST['imageName']);
}
$filename = SugarThemeRegistry::current()->getImageURL($_REQUEST['imageName']);
if ( empty($filename) ) {
    header($_SERVER["SERVER_PROTOCOL"].' 404 Not Found');
    die;
}
$filename_arr = explode('?', $filename);
$filename = $filename_arr[0];
$file_ext = substr($filename,-3);

$extensions = SugarThemeRegistry::current()->imageExtensions;
if(!in_array($file_ext, $extensions)){
	header($_SERVER["SERVER_PROTOCOL"].' 404 Not Found');
    die;
}


// try to use the content cached locally if it's the same as we have here.
if(defined('TEMPLATE_URL'))
	$last_modified_time = time();
else
	$last_modified_time = filemtime($filename);

$etag = '"'.md5_file($filename).'"';

header("Cache-Control: private");
header("Pragma: dummy=bogus");
header("Etag: $etag");

$ifmod = isset($_SERVER['HTTP_IF_MODIFIED_SINCE'])
    ? strtotime($_SERVER['HTTP_IF_MODIFIED_SINCE']) >= $last_modified_time : null;
$iftag = isset($_SERVER['HTTP_IF_NONE_MATCH'])
    ? $_SERVER['HTTP_IF_NONE_MATCH'] == $etag : null;
if (($ifmod || $iftag) && ($ifmod !== false && $iftag !== false)) {
    header($_SERVER["SERVER_PROTOCOL"].' 304 Not Modified');
    die;
}

header('Expires: ' . gmdate('D, d M Y H:i:s \G\M\T', time() + 86400));
header("Last-Modified: ".gmdate('D, d M Y H:i:s \G\M\T', $last_modified_time));

// now send the content
if ( substr($filename,-3) == 'gif' )
    header("Content-Type: image/gif");
elseif ( substr($filename,-3) == 'png' )
    header("Content-Type: image/png");

if(!defined('TEMPLATE_URL')) {
    if(!file_exists($filename)) {
        sugar_touch($filename);
    }
}

readfile($filename);
