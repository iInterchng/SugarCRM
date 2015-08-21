<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/




global $gridline;
global $theme;
global $beanList;
global $beanFiles;


if(empty($_REQUEST['module']))
{
	die("'module' was not defined");
}

if(empty($_REQUEST['record']))
{
	die("'record' was not defined");
}

if(!isset($beanList[$_REQUEST['module']]))
{
	die("'".$_REQUEST['module']."' is not defined in \$beanList");
}

$subpanel = $_REQUEST['subpanel'];
$record = $_REQUEST['record'];
$module = $_REQUEST['module'];


$image_path = 'themes/'.$theme.'/images/';

if(empty($_REQUEST['inline']))
{
	insert_popup_header($theme);
}

//require_once('include/SubPanel/SubPanelDefinitions.php');
//require_once($beanFiles[$beanList[$_REQUEST['module']]]);
//$focus=new $beanList[$_REQUEST['module']];
//$focus->retrieve($record);

include('include/SubPanel/SubPanel.php');
$layout_def_key = '';
if(!empty($_REQUEST['layout_def_key'])){
	$layout_def_key = $_REQUEST['layout_def_key'];
}

$subpanel_object = new SubPanel($module, $record, $subpanel,null, $layout_def_key);

$subpanel_object->setTemplateFile('include/SubPanel/SubPanelDynamic.html');

if(!empty($_REQUEST['mkt_id']) && $_REQUEST['mkt_id'] != 'all') {// bug 32910
    $mkt_id = $_REQUEST['mkt_id'];
}

if(!empty($mkt_id)) {
    $subpanel_object->subpanel_defs->_instance_properties['function_parameters']['EMAIL_MARKETING_ID_VALUE'] = $mkt_id;
}
echo (empty($_REQUEST['inline']))?$subpanel_object->get_buttons():'' ;  

$subpanel_object->display();

if(empty($_REQUEST['inline']))
{
	insert_popup_footer($theme);
}

?>