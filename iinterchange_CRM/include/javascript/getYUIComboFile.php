<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

if (empty($_REQUEST)) die();

$yui_path = array(
    "2.7.0" => "include/javascript/yui",
	"2_7_0" => "include/javascript/yui",
	"3.0.0" => "include/javascript/yui3",
	"3_0_0" => "include/javascript/yui3"
);
$types = array(
    "js" => "application/x-javascript",
	"css" => "text/css",
);
$out = "";

$contentType = "";
$allpath = "";

foreach ($_REQUEST as $param => $val)
{
	//No backtracking in the path
	if (strpos($param, "..") !== false)
        continue;

	$version = explode("/", $param);
	$version = $version[0];
    if (empty($yui_path[$version])) continue;

    $path = $yui_path[$version] . substr($param, strlen($version));

	$extension = substr($path, strrpos($path, "_") + 1);

	//Only allowed file extensions
	if (empty($types[$extension]))
	   continue;

	if (empty($contentType))
    {
        $contentType = $types[$extension];
    }
	//Put together the final filepath
	$path = substr($path, 0, strrpos($path, "_")) . "." . $extension;
	$contents = '';
	if (is_file($path)) {
	   $out .= "/*" . $path . "*/\n";
	   $contents =  file_get_contents($path);
	   $out .= $contents . "\n";
	}
	$path = empty($contents) ? $path : $contents;
	$allpath .= md5($path);
}

$etag = '"'.md5($allpath).'"';

// try to use the content cached locally if it's the same as we have here.
header("Cache-Control: private");
header("Pragma: dummy=bogus");
header("Etag: $etag");
header('Expires: ' . TimeDate::httpTime(time()+86400));
header("Content-Type: $contentType");
echo ($out);