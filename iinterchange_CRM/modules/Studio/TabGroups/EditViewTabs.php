<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/




global $app_list_strings, $app_strings, $mod_strings;

require_once('modules/Studio/TabGroups/TabGroupHelper.php');
require_once('modules/Studio/parsers/StudioParser.php');

$tabGroupSelected_lang = (!empty($_GET['lang'])?$_GET['lang']:$_SESSION['authenticated_user_language']);
$tg = new TabGroupHelper();
$smarty = new Sugar_Smarty();
if(empty($GLOBALS['tabStructure'])){
	require_once('include/tabConfig.php');
}
$title=getClassicModuleTitle($mod_strings['LBL_MODULE_NAME'], array($mod_strings['LBL_CONFIGURE_GROUP_TABS']), false);

#30205
$selectedAppLanguages = return_application_language($tabGroupSelected_lang);
require_once('include/GroupedTabs/GroupedTabStructure.php');
$groupedTabsClass = new GroupedTabStructure();
$groupedTabStructure = $groupedTabsClass->get_tab_structure('', '', true,true);
foreach($groupedTabStructure as $mainTab => $subModules){
 	$groupedTabStructure[$mainTab]['label'] = $mainTab;
 	$groupedTabStructure[$mainTab]['labelValue'] = $selectedAppLanguages[$mainTab];
}

$smarty->assign('tabs', $groupedTabStructure);
#end of 30205
$selectedLanguageModStrings = return_module_language($tabGroupSelected_lang , 'Studio');
$smarty->assign('TGMOD', $selectedLanguageModStrings);
$smarty->assign('MOD', $GLOBALS['mod_strings']);
$smarty->assign('otherLabel', 'LBL_TABGROUP_OTHER');
$selected_lang = (!empty($_REQUEST['dropdown_lang'])?$_REQUEST['dropdown_lang']:$_SESSION['authenticated_user_language']);
if(empty($selected_lang)){
    $selected_lang = $GLOBALS['sugar_config']['default_language'];
}
$availableModules = $tg->getAvailableModules($tabGroupSelected_lang);
$smarty->assign('availableModuleList',$availableModules);

$smarty->assign('dropdown_languages', get_languages());


$imageSave = SugarThemeRegistry::current()->getImage( 'studio_save', '');

$buttons = array();
$buttons [] = array ( 'text' => $GLOBALS['mod_strings']['LBL_BTN_SAVEPUBLISH'],'actionScript'=>"onclick='studiotabs.generateForm(\"edittabs\");document.edittabs.submit()'" ) ;
$html = "" ;
foreach ( $buttons as $button )
{
    $html .= "<td><input type='button' valign='center' class='button' style='cursor:pointer' onmousedown='this.className=\"buttonOn\";return false;' onmouseup='this.className=\"button\"' onmouseout='this.className=\"button\"' {$button['actionScript']} value = '{$button['text']}' ></td>" ;
}
$smarty->assign('buttons', $html);
$smarty->assign('title', $title);
$smarty->assign('dropdown_lang', $selected_lang);

$editImage = SugarThemeRegistry::current()->getImage( 'edit_inline', '');
$smarty->assign('editImage',$editImage);
$deleteImage = SugarThemeRegistry::current()->getImage( 'delete_inline', '');
$recycleImage = SugarThemeRegistry::current()->getImage('icon_Delete','',48,48 );
$smarty->assign('deleteImage',$deleteImage);
$smarty->assign('recycleImage',$recycleImage);	

//#30205
global $sugar_config;
if(isset($sugar_config['other_group_tab_displayed'])){
	if($sugar_config['other_group_tab_displayed']){
		$value = 'checked';
	}else{
		$value = null;
	}
	$smarty->assign('other_group_tab_displayed', $value);
}else{
	$smarty->assign('other_group_tab_displayed', 'checked');
}
$smarty->assign('tabGroupSelected_lang', $tabGroupSelected_lang);

$smarty->assign('available_languages', get_languages());
$smarty->display("modules/Studio/TabGroups/EditViewTabs.tpl");
?>
