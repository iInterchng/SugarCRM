<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/




global $app_strings;
global $app_list_strings;
global $mod_strings;
global $theme;
global $currentModule;
global $gridline;

echo getClassicModuleTitle('MigrateFields', array($mod_strings['LBL_EXTERNAL_DEV_TITLE']), true);

?>
<p>
<table cellspacing="<?php echo $gridline;?>" class="other view">
<tr>
	<td scope="row"><?php echo SugarThemeRegistry::current()->getImage('ImportCustomFields','alt="'. $mod_strings['LBL_IMPORT_CUSTOM_FIELDS_TITLE'].'" align="absmiddle" border="0"'); ?>&nbsp;<a href="./index.php?module=Administration&action=ImportCustomFieldStructure" class="tabDetailViewDL2Link"><?php echo $mod_strings['LBL_IMPORT_CUSTOM_FIELDS_TITLE']; ?></a></td>
	<td> <?php echo $mod_strings['LBL_IMPORT_CUSTOM_FIELDS'] ; ?> </td>
</tr>
<tr>
	<td scope="row"><?php echo SugarThemeRegistry::current()->getImage('ExportCustomFields','alt="'. $mod_strings['LBL_EXPORT_CUSTOM_FIELDS_TITLE'].'" align="absmiddle" border="0"'); ?>&nbsp;<a href="./index.php?module=Administration&action=ExportCustomFieldStructure" class="tabDetailViewDL2Link"><?php echo $mod_strings['LBL_EXPORT_CUSTOM_FIELDS_TITLE']; ?></a></td>
	<td> <?php echo $mod_strings['LBL_EXPORT_CUSTOM_FIELDS'] ; ?> </td>
</tr>

</table></p>


