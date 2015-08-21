{*
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

*}
<div id='studiofields'>
<input type='button' name='addfieldbtn' value='{$mod_strings.LBL_BTN_ADDFIELD}' class='button' onclick='ModuleBuilder.moduleLoadField("");'>&nbsp;
{if $editLabelsMb=='1'}
<input type='button' name='addfieldbtn' value='{$mod_strings.LBL_BTN_EDLABELS}' class='button' onclick='ModuleBuilder.moduleLoadLabels("mb");'>
{else}
<input type='button' name='addfieldbtn' value='{$mod_strings.LBL_BTN_EDLABELS}' class='button' onclick='ModuleBuilder.moduleLoadLabels("studio");'>
{/if}
{foreach from=$module->mbvardefs->vardefs.fields key='group' item='fields'}
<hr>
<h2>{$title[$group]}</h2>
    <table width='100%'>
    <colgroup span='3' width='33%'>
    <tr>
    {counter name='items' assign='items' start=0}
    {foreach from=$fields key='name' item='def'}
            {if $items % 3 == 0 && $items != 0}
                        </tr><tr>
            {/if}
            <td>
            <a class='mbLBLL' href='javascript:void(0)' onclick='ModuleBuilder.moduleLoadField("{$name}")'>{$name}</a>
            </td>
            {counter name='items'}
    {/foreach}
    {if $items == 0}
        <td class='mbLBLL'>{$mod_strings.LBL_NONE}</td>
    {elseif $items % 3 == 1}
        <td>&nbsp;</td><td>&nbsp;</td>
    {elseif $items % 3 == 2}
        <td>&nbsp;</td>
    {/if}
    </tr>
    </table>
{/foreach}
<script>
ModuleBuilder.module = '{$module->name}';
ModuleBuilder.MBpackage = '{$package->name}';
ModuleBuilder.helpRegisterByID('studiofields', 'input');
{if $package->name != 'studio'}
ModuleBuilder.helpSetup('fieldsEditor','mbDefault');
{else}
ModuleBuilder.helpSetup('fieldsEditor','default');
{/if}
</script>