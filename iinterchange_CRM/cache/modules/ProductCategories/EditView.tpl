

<div class="clear"></div>
<form action="index.php" method="POST" name="{$form_name}" id="{$form_id}" {$enctype}>
<table width="100%" cellpadding="0" cellspacing="0" border="0" class="actionsContainer">
<tr>
<td class="buttons">
<input type="hidden" name="module" value="{$module}">
{if isset($smarty.request.isDuplicate) && $smarty.request.isDuplicate eq "true"}
<input type="hidden" name="record" value="">
<input type="hidden" name="duplicateSave" value="true">
<input type="hidden" name="duplicateId" value="{$fields.id.value}">
{else}
<input type="hidden" name="record" value="{$fields.id.value}">
{/if}
<input type="hidden" name="isDuplicate" value="false">
<input type="hidden" name="action">
<input type="hidden" name="return_module" value="{$smarty.request.return_module}">
<input type="hidden" name="return_action" value="{$smarty.request.return_action}">
<input type="hidden" name="return_id" value="{$smarty.request.return_id}">
<input type="hidden" name="module_tab"> 
<input type="hidden" name="contact_role">
{if !empty($smarty.request.return_module) || !empty($smarty.request.relate_to)}
<input type="hidden" name="relate_to" value="{if $smarty.request.return_relationship}{$smarty.request.return_relationship}{elseif $smarty.request.relate_to && empty($smarty.request.from_dcmenu)}{$smarty.request.relate_to}{elseif empty($isDCForm) && empty($smarty.request.from_dcmenu)}{$smarty.request.return_module}{/if}">
<input type="hidden" name="relate_id" value="{$smarty.request.return_id}">
{/if}
<input type="hidden" name="offset" value="{$offset}">
{if $bean->aclAccess("save")}<input title="{$APP.LBL_SAVE_BUTTON_TITLE}" accessKey="{$APP.LBL_SAVE_BUTTON_KEY}" class="button primary" onclick="{if $isDuplicate}this.form.return_id.value=''; {/if}this.form.action.value='Save'; return check_form('EditView');" type="submit" name="button" value="{$APP.LBL_SAVE_BUTTON_LABEL}" id="SAVE">{/if} 
<input class="button" type="submit" value="{$APP.LBL_SAVE_NEW_BUTTON_LABEL}" onclick="this.form.action.value='Save'; this.form.isDuplicate.value='true'; this.form.return_action.value='EditView'; return check_form('EditView');" accesskey="{$APP.LBL_SAVE_NEW_BUTTON_KEY}" title="{$APP.LBL_SAVE_NEW_BUTTON_TITLE}"/>
{if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=ProductCategories", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="submit" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}
</td>
<td align='right'>
</td>
</tr>
</table>{sugar_include include=$includes}
<div id="EditView_tabs"
>
<div >
<div id="Default_{$module}_Subpanel">
{counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}
<table width="100%" border="0" cellspacing="1" cellpadding="0"  class="{$def.templateMeta.panelClass|default:'edit view'}">
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>
{if $fields.name.acl > 1 || ($showDetailData && $fields.name.acl > 0)}
<td valign="top" id='name_label' width='12.5%' scope="row">
{capture name="label" assign="label"}{sugar_translate label='LBL_LIST_NAME' module='ProductCategories'}{/capture}
{$label|strip_semicolon}:
<span class="required">*</span>
</td>
{counter name="fieldsUsed"}
<td valign="top" width='37.5%' colspan='3'>
{if $fields.name.acl > 1}
{counter name="panelFieldCount"}

{if strlen($fields.name.value) <= 0}
{assign var="value" value=$fields.name.default_value }
{else}
{assign var="value" value=$fields.name.value }
{/if}  
<input type='text' name='{$fields.name.name}' 
id='{$fields.name.name}' size='30' 
maxlength='50' 
value='{$value}' title='' tabindex='100' > 
{else}
{counter name="panelFieldCount"}

{if strlen($fields.name.value) <= 0}
{assign var="value" value=$fields.name.default_value }
{else}
{assign var="value" value=$fields.name.value }
{/if} 
<span class="sugar_field" id="{$fields.name.name}">{$fields.name.value}</span>
</td>
{/if}
{else}
<td></td><td></td>
{/if}
</tr>
{/capture}
{if $fieldsUsed > 0 }
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>
{if $fields.parent_id.acl > 1 || ($showDetailData && $fields.parent_id.acl > 0)}
<td valign="top" id='parent_id_label' width='12.5%' scope="row">
{capture name="label" assign="label"}{sugar_translate label='LBL_PARENT_NAME' module='ProductCategories'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}
<td valign="top" width='37.5%' colspan='3'>
{if $fields.parent_id.acl > 1}
{counter name="panelFieldCount"}
<input tabindex="101"  name="type" type="hidden" value="{$fields.type.value}"><input tabindex="101"  name="parent_name" readonly type="text" value="{$fields.parent_name.value}"><input tabindex="101"  name="parent_id" type="hidden" value="{$fields.parent_id.value}"><input tabindex="101"  class="button" type="button" onclick="return get_popup();" language="javascript" name="button" value="{$APP.LBL_SELECT_BUTTON_LABEL}" tabindex="2" accesskey="{$APP.LBL_SELECT_BUTTON_KEY}" title="{$APP.LBL_SELECT_BUTTON_TITLE}"/><input tabindex="101"  class="button" type="button" value="{$APP.LBL_CLEAR_BUTTON_LABEL}" name="button" onclick="this.form.parent_name.value = '';" language="javascript" accesskey="{$APP.LBL_CLEAR_BUTTON_KEY}" title="{$APP.LBL_CLEAR_BUTTON_TITLE}"/>
{else}
<td></td><td></td>
</td>
{/if}
{else}
<td></td><td></td>
{/if}
</tr>
{/capture}
{if $fieldsUsed > 0 }
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>
{if $fields.description.acl > 1 || ($showDetailData && $fields.description.acl > 0)}
<td valign="top" id='description_label' width='12.5%' scope="row">
{capture name="label" assign="label"}{sugar_translate label='LBL_DESCRIPTION' module='ProductCategories'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}
<td valign="top" width='37.5%' colspan='3'>
{if $fields.description.acl > 1}
{counter name="panelFieldCount"}

{if empty($fields.description.value)}
{assign var="value" value=$fields.description.default_value }
{else}
{assign var="value" value=$fields.description.value }
{/if}  
<textarea  id='{$fields.description.name}' name='{$fields.description.name}'
rows="4" 
cols="60" 
title='' tabindex="102" >{$value}</textarea>
{else}
{counter name="panelFieldCount"}

<span class="sugar_field" id="{$fields.description.name|escape:'html'|url2html|nl2br}">
{$fields.description.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br}
</span>
</td>
{/if}
{else}
<td></td><td></td>
{/if}
</tr>
{/capture}
{if $fieldsUsed > 0 }
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>
{if $fields.list_order.acl > 1 || ($showDetailData && $fields.list_order.acl > 0)}
<td valign="top" id='list_order_label' width='12.5%' scope="row">
{capture name="label" assign="label"}{sugar_translate label='LBL_LIST_ORDER' module='ProductCategories'}{/capture}
{$label|strip_semicolon}:
<span class="required">*</span>
</td>
{counter name="fieldsUsed"}
<td valign="top" width='37.5%' colspan='3'>
{if $fields.list_order.acl > 1}
{counter name="panelFieldCount"}

{if strlen($fields.list_order.value) <= 0}
{assign var="value" value=$fields.list_order.default_value }
{else}
{assign var="value" value=$fields.list_order.value }
{/if}  
<input type='text' name='{$fields.list_order.name}' 
id='{$fields.list_order.name}' size='5' maxlength='' value='{sugar_number_format precision=0 var=$value}' title='' tabindex='103' > 
{else}
{counter name="panelFieldCount"}

<span class="sugar_field" id="{$fields.list_order.name}">
{sugar_number_format precision=0 var=$fields.list_order.value}
</span>
</td>
{/if}
{else}
<td></td><td></td>
{/if}
<td valign="top" id='_label' width='12.5%' scope="row">
</td>
{counter name="fieldsUsed"}
<td valign="top" width='37.5%' >
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 }
{$tableRow}
{/if}
</table>
</div>
{if $panelFieldCount == 0}
<script>document.getElementById("DEFAULT").style.display='none';</script>
{/if}
</div></div>

<div class="buttons">
{if $bean->aclAccess("save")}<input title="{$APP.LBL_SAVE_BUTTON_TITLE}" accessKey="{$APP.LBL_SAVE_BUTTON_KEY}" class="button primary" onclick="{if $isDuplicate}this.form.return_id.value=''; {/if}this.form.action.value='Save'; return check_form('EditView');" type="submit" name="button" value="{$APP.LBL_SAVE_BUTTON_LABEL}" id="SAVE">{/if} 
<input class="button" type="submit" value="{$APP.LBL_SAVE_NEW_BUTTON_LABEL}" onclick="this.form.action.value='Save'; this.form.isDuplicate.value='true'; this.form.return_action.value='EditView'; return check_form('EditView');" accesskey="{$APP.LBL_SAVE_NEW_BUTTON_KEY}" title="{$APP.LBL_SAVE_NEW_BUTTON_TITLE}"/>
{if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=ProductCategories", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="submit" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}
</div>
</form>
{$set_focus_block}
<!-- Begin Meta-Data Javascript -->
<script language="javascript" type="text/javascript">function get_popup() {ldelim}
		var parent_name = document.EditView.parent_name.value;
    	var parent_id = document.EditView.parent_id.value;
		var button_query = "index.php?module=ProductCategories&action=Popup&html=Popup_picker&tree=CatCat&form=EditView" +"&parent_name=" + parent_name + "&parent_category_id=" + parent_id ;
 		var button_params = "width=600,height=400,resizable=1,scrollbars=1";
		window.open(button_query + "&query=true", "Test", button_params);
	{rdelim}</script>
<!-- End Meta-Data Javascript -->
{$overlibStuff}
<script type="text/javascript">
YAHOO.util.Event.onContentReady("EditView",
    function () {ldelim} initEditView(document.forms.EditView) {rdelim});
//window.setTimeout(, 100);
window.onbeforeunload = function () {ldelim} return onUnloadEditView(); {rdelim};
</script>{literal}
<script type="text/javascript">
addToValidate('EditView', 'id', 'id', false,'{/literal}{sugar_translate label='LBL_ID' module='ProductCategories' for_js=true}{literal}' );
addToValidate('EditView', 'deleted', 'bool', false,'{/literal}{sugar_translate label='LBL_DELETED' module='ProductCategories' for_js=true}{literal}' );
addToValidate('EditView', 'date_entered_date', 'date', true,'Date Created' );
addToValidate('EditView', 'date_modified_date', 'date', true,'Date Modified' );
addToValidate('EditView', 'modified_user_id', 'assigned_user_name', false,'{/literal}{sugar_translate label='LBL_ASSIGNED_TO' module='ProductCategories' for_js=true}{literal}' );
addToValidate('EditView', 'created_by', 'assigned_user_name', false,'{/literal}{sugar_translate label='LBL_ASSIGNED_TO' module='ProductCategories' for_js=true}{literal}' );
addToValidate('EditView', 'name', 'name', true,'{/literal}{sugar_translate label='LBL_LIST_NAME' module='ProductCategories' for_js=true}{literal}' );
addToValidate('EditView', 'list_order', 'int', true,'{/literal}{sugar_translate label='LBL_LIST_ORDER' module='ProductCategories' for_js=true}{literal}' );
addToValidate('EditView', 'description', 'text', false,'{/literal}{sugar_translate label='LBL_DESCRIPTION' module='ProductCategories' for_js=true}{literal}' );
addToValidate('EditView', 'parent_id', 'varchar', false,'{/literal}{sugar_translate label='LBL_PARENT_NAME' module='ProductCategories' for_js=true}{literal}' );
addToValidateBinaryDependency('EditView', 'assigned_user_name', 'alpha', false,'{/literal}{sugar_translate label='ERR_SQS_NO_MATCH_FIELD' module='ProductCategories' for_js=true}{literal}: {/literal}{sugar_translate label='LBL_ASSIGNED_TO' module='ProductCategories' for_js=true}{literal}', 'assigned_user_id' );
</script><script type=text/javascript>
SUGAR.forms.AssignmentHandler.registerView('EditView');
</script>{/literal}
