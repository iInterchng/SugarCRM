<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/




global $timedate;
global $app_strings;
global $app_list_strings;
global $current_language;
global $current_user;
global $sugar_version, $sugar_config;
$focus = new Project();



if(!empty($_REQUEST['record']))
{
    $focus->retrieve($_REQUEST['record']);
}

if ($focus->is_template){
	echo getClassicModuleTitle($mod_strings['LBL_MODULE_NAME'],
						 array($mod_strings['LBL_PROJECT_TEMPLATE'] . ': ' . $focus->name), true);
}
else{
	echo getClassicModuleTitle($mod_strings['LBL_MODULE_NAME'], array($mod_strings['LBL_MODULE_NAME'],$focus->name), true);

}



$GLOBALS['log']->info("Project detail view");

$sugar_smarty = new Sugar_Smarty();
///
/// Assign the template variables
///
$sugar_smarty->assign('MOD', $mod_strings);
$sugar_smarty->assign('APP', $app_strings);
$sugar_smarty->assign('name', $focus->name);

$sugar_smarty->assign('PRINT_URL', "index.php?".$GLOBALS['request_string']);
$sugar_smarty->assign('ID', $focus->id);
$sugar_smarty->assign('NAME', $focus->name);

// awu: Bug 11820 - date entered was not conforming to correct date in Oracle
$focus->fetched_row['estimated_start_date'] = $focus->estimated_start_date;
$focus->fetched_row['estimated_end_date'] = $focus->estimated_end_date;
$focus->fetched_row['date_entered'] = $timedate->nowDbDate();
$focus->fetched_row['date_modified'] = $timedate->nowDbDate();

// populate form with project's data
$sugar_smarty->assign('PROJECT_FORM', $focus->fetched_row);

if ($focus->is_template){
	$sugar_smarty->assign('SAVE_TYPE', "TemplateToProject");
	$sugar_smarty->assign('SAVE_TO', "project");
	$sugar_smarty->assign('SAVE_TO_LBL', $mod_strings['LBL_PROJECT_NAME']);
	$sugar_smarty->assign('SAVE_BUTTON', $mod_strings['LBL_SAVE_AS_NEW_PROJECT_BUTTON']);
}
else{
	$sugar_smarty->assign('SAVE_TYPE', "ProjectToTemplate");
	$sugar_smarty->assign('SAVE_TO', "template");
	$sugar_smarty->assign('SAVE_TO_LBL', $mod_strings['LBL_TEMPLATE_NAME']);
	$sugar_smarty->assign('SAVE_BUTTON', $mod_strings['LBL_SAVE_AS_NEW_TEMPLATE_BUTTON']);
}

echo $sugar_smarty->fetch('modules/Project/Convert.tpl');


$javascript = new javascript();
$javascript->setFormName('EditView');
$javascript->setSugarBean($focus);
$javascript->addAllFields('');
if ($focus->is_template){
	$javascript->addFieldGeneric('project_name', 'varchar', $mod_strings['LBL_PROJECT_NAME'] ,'true');
}
else{
	$javascript->addFieldGeneric('template_name', 'varchar', $mod_strings['LBL_TEMPLATE_NAME'] ,'true');
}

echo $javascript->getScript();

?>
