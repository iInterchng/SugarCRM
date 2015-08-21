<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/


require_once('include/JSON.php');
require_once('include/entryPoint.php');

global $sugar_config;
$supportedExtensions = array('jpg', 'png', 'jpeg');
$json = getJSONobj();
$rmdir=true;
$returnArray = array();
if($json->decode(html_entity_decode($_REQUEST['forQuotes']))){
    $returnArray['forQuotes']="quotes";
}else{
    $returnArray['forQuotes']="company";
}
if(isset($_FILES['file_1'])){
    $uploadTmpDir=$sugar_config['tmp_dir'].'tmp_logo_'.$returnArray['forQuotes'].'_upload';
    $file_name = $uploadTmpDir . DIRECTORY_SEPARATOR .  cleanFileName(basename($_FILES['file_1']['name']));
    if(file_exists($uploadTmpDir))
       rmdir_recursive($uploadTmpDir);

    mkdir_recursive( $uploadTmpDir,null,true );
    if (!empty($_FILES['file_1']['error'])){
        rmdir_recursive($uploadTmpDir);
        $returnArray['data']='not_recognize';
        echo $json->encode($returnArray);
        sugar_cleanup();
        exit();
    }
    if (!move_uploaded_file($_FILES['file_1']['tmp_name'], $file_name)){
        rmdir_recursive($uploadTmpDir);
        die("Possible file upload attack!\n");
    }
}else{
    $returnArray['data']='not_recognize';
    echo $json->encode($returnArray);
    sugar_cleanup();
    exit();
}
if(file_exists($file_name) && is_file($file_name)){
    $returnArray['path']=$file_name;
    if(!verify_uploaded_image($file_name, $returnArray['forQuotes'] == 'quotes')) {
        $returnArray['data']='other';
        $returnArray['path'] = '';
    } else {
        $img_size = getimagesize($file_name);
        $filetype = $img_size['mime'];
        $test=$img_size[0]/$img_size[1];
        if (($test>10 || $test<1) && $returnArray['forQuotes'] == 'company'){
            $rmdir=false;
            $returnArray['data']='size';
        }
        if (($test>20 || $test<3)&& $returnArray['forQuotes'] == 'quotes')
            $returnArray['data']='size';
    }
    if(!empty($returnArray['data'])){
        echo $json->encode($returnArray);
    }else{
        $rmdir=false;
        $returnArray['data']='ok';
        echo $json->encode($returnArray);
    }
}else{
    $returnArray['data']='file_error';
    echo $json->encode($returnArray);
}
if($rmdir)
    rmdir_recursive($uploadTmpDir);
sugar_cleanup();
exit();
?>
