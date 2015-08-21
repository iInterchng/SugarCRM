{*
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

*}
<table class="tabform" ><tr><th>{sugar_translate label='LBL_HISTORY_TIMESTAMP' module='ModuleBuilder'}</th><th>&nbsp;</th><th>&nbsp;</th></tr>
{if empty($snapshots)}
	<tr><td class='mbLBLL'>{sugar_translate label='ERROR_NO_HISTORY' module='ModuleBuilder'}</td></tr>
{/if}
{foreach from=$snapshots item='timestamp' key='id'}
<tr>
	<td class="oddListRowS1"><a onclick="ModuleBuilder.history.preview('{$view_module}', '{$view}', '{$id}', '{$subpanel}');" href="javascript:void(0);">
	{$timestamp}</a></td>
	<td width="1%"><input type='button' value="{sugar_translate label='LBL_MB_PREVIEW' module='ModuleBuilder'}" onclick="ModuleBuilder.history.preview('{$view_module}', '{$view}', '{$id}', '{$subpanel}');"/></td>
	<td width="1%"><input type='button' value="{sugar_translate label='LBL_MB_RESTORE' module='ModuleBuilder'}" onclick="ModuleBuilder.history.revert('{$view_module}', '{$view}', '{$id}', '{$subpanel}');"/></td>
</tr>
{/foreach}
</table>