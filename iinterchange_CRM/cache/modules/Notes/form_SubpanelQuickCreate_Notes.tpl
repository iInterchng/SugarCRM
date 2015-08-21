

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
{if $bean->aclAccess("save")}<input title="{$APP.LBL_SAVE_BUTTON_TITLE}" accessKey="{$APP.LBL_SAVE_BUTTON_KEY}" class="button" onclick="this.form.action.value='Save';if(check_form('form_SubpanelQuickCreate_Notes'))return SUGAR.subpanelUtils.inlineSave(this.form.id, 'Notes_subpanel_save_button');return false;" type="submit" name="Notes_subpanel_save_button" id="Notes_subpanel_save_button" value="{$APP.LBL_SAVE_BUTTON_LABEL}">{/if} 
<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="return SUGAR.subpanelUtils.cancelCreate('Notes_subpanel_cancel_button');return false;" type="submit" name="Notes_subpanel_cancel_button" id="Notes_subpanel_cancel_button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}"> 
<input title="{$APP.LBL_FULL_FORM_BUTTON_TITLE}" accessKey="{$APP.LBL_FULL_FORM_BUTTON_KEY}" class="button" onclick="disableOnUnloadEditView(this.form); this.form.return_action.value='DetailView'; this.form.action.value='EditView'; if(typeof(this.form.to_pdf)!='undefined') this.form.to_pdf.value='0';" type="submit" name="Notes_subpanel_full_form_button" id="Notes_subpanel_full_form_button" value="{$APP.LBL_FULL_FORM_BUTTON_LABEL}"> <input type="hidden" name="full_form" value="full_form">
{if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=Notes", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="submit" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}
</td>
<td align='right'>
{$PAGINATION}
</td>
</tr>
</table>{sugar_include include=$includes}
<div id="form_SubpanelQuickCreate_Notes_tabs"
>
<div >
<div id="Default_{$module}_Subpanel">
{counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}
<table width="100%" border="0" cellspacing="1" cellpadding="0"  class="{$def.templateMeta.panelClass|default:'edit view'}">
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>
{if $fields.contact_name.acl > 1 || ($showDetailData && $fields.contact_name.acl > 0)}
<td valign="top" id='contact_name_label' width='12.5%' scope="row">
{capture name="label" assign="label"}{sugar_translate label='LBL_CONTACT_NAME' module='Notes'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}
<td valign="top" width='37.5%' >
{if $fields.contact_name.acl > 1}
{counter name="panelFieldCount"}

<input type="text" name="{$fields.contact_name.name}" class="sqsEnabled" tabindex="100" id="{$fields.contact_name.name}" size="" value="{$fields.contact_name.value}" title='' autocomplete="off"  >
<input type="hidden" name="{$fields.contact_name.id_name}" 
id="{$fields.contact_name.id_name}" 
value="{$fields.contact_id.value}">
<span class="id-ff multiple">
<button type="button" name="btn_{$fields.contact_name.name}" id="btn_{$fields.contact_name.name}" tabindex="100" title="{$APP.LBL_SELECT_BUTTON_TITLE}" accessKey="{$APP.LBL_SELECT_BUTTON_KEY}" class="button firstChild" value="{$APP.LBL_SELECT_BUTTON_LABEL}" 
onclick='open_popup(
"{$fields.contact_name.module}", 
600, 
400, 
"", 
true, 
false, 
{literal}{"call_back_function":"set_return","form_name":"form_SubpanelQuickCreate_Notes","field_to_name_array":{"id":"contact_id","last_name":"contact_name"}}{/literal}, 
"single", 
true
);' ><img src="{sugar_getimagepath file="id-ff-select.png"}"></button><button type="button" name="btn_clr_{$fields.contact_name.name}" id="btn_clr_{$fields.contact_name.name}" tabindex="100" title="{$APP.LBL_CLEAR_BUTTON_TITLE}" accessKey="{$APP.LBL_CLEAR_BUTTON_KEY}" class="button lastChild" 
onclick="this.form.{$fields.contact_name.name}.value = ''; this.form.{$fields.contact_name.id_name}.value = '';" 
value="{$APP.LBL_CLEAR_BUTTON_LABEL}" ><img src="{sugar_getimagepath file="id-ff-clear.png"}"></button>
</span>
<script type="text/javascript">
<!--
if(typeof QSProcessedFieldsArray != 'undefined') 
	QSProcessedFieldsArray["{$form_name}_{$fields.contact_name.name}"] = false;
	

enableQS(false);
-->	
</script>
{else}
{counter name="panelFieldCount"}

{if !empty($fields.contact_id.value)}<a href="index.php?module=Contacts&action=DetailView&record={$fields.contact_id.value}">{/if}
<span id="contact_id" class="sugar_field">{$fields.contact_name.value}</span>
{if !empty($fields.contact_id.value)}</a>{/if}
</td>
{/if}
{else}
<td></td><td></td>
{/if}
{if $fields.parent_name.acl > 1 || ($showDetailData && $fields.parent_name.acl > 0)}
<td valign="top" id='parent_name_label' width='12.5%' scope="row">
{capture name="label" assign="label"}{sugar_translate label='LBL_RELATED_TO' module='Notes'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}
<td valign="top" width='37.5%' >
{if $fields.parent_name.acl > 1}
{counter name="panelFieldCount"}

<select name='parent_type' tabindex="101" id='parent_type' title='' 
onchange='document.{$form_name}.{$fields.parent_name.name}.value="";document.{$form_name}.parent_id.value=""; {$fields.parent_name.name}changeQS(); checkParentType(document.{$form_name}.parent_type.value, document.{$form_name}.btn_{$fields.parent_name.name});'>
{html_options options=$fields.parent_name.options selected=$fields.parent_type.value sortoptions=true}
</select>
{if empty($fields.parent_name.options[$fields.parent_type.value])}
{assign var="keepParent" value = 0}
{else}
{assign var="keepParent" value = 1}
{/if}
<input type="text" name="{$fields.parent_name.name}" id="{$fields.parent_name.name}" class="sqsEnabled" tabindex="101" 
size="" {if $keepParent}value="{$fields.parent_name.value}"{/if} autocomplete="off"><input type="hidden" name="{$fields.parent_id.name}" id="{$fields.parent_id.name}"  
{if $keepParent}value="{$fields.parent_id.value}"{/if}>
<span class="id-ff multiple">
<button type="button" name="btn_{$fields.parent_name.name}" id="btn_{$fields.parent_name.name}" tabindex="101" 
title="{$APP.LBL_SELECT_BUTTON_TITLE}" accessKey="{$APP.LBL_SELECT_BUTTON_KEY}" class="button firstChild" value="{$APP.LBL_SELECT_BUTTON_LABEL}" 
onclick='open_popup(document.{$form_name}.parent_type.value, 600, 400, "", true, false, {literal}{"call_back_function":"set_return","form_name":"form_SubpanelQuickCreate_Notes","field_to_name_array":{"id":"parent_id","name":"parent_name"}}{/literal}, "single", true);' ><img src="{sugar_getimagepath file="id-ff-select.png"}"></button><button type="button" name="btn_clr_{$fields.parent_name.name}" id="btn_clr_{$fields.parent_name.name}" tabindex="101" title="{$APP.LBL_CLEAR_BUTTON_TITLE}" accessKey="{$APP.LBL_CLEAR_BUTTON_KEY}" class="button lastChild" onclick="this.form.{$fields.parent_name.name}.value = ''; this.form.{$fields.parent_id.name}.value = '';" value="{$APP.LBL_CLEAR_BUTTON_LABEL}" ><img src="{sugar_getimagepath file="id-ff-clear.png"}"></button>
</span>
<script type="text/javascript">
function {$fields.parent_name.name}changeQS() {literal}{
{/literal}
	new_module = document.forms["{$form_name}"].elements["parent_type"].value;
{literal}
	if(typeof(disabledModules[new_module]) != 'undefined') {
{/literal}
		sqs_objects["{$form_name}_parent_name"]["disable"] = true;
		document.forms["{$form_name}"].elements["parent_name"].readOnly = true;
{literal}
	} else {
{/literal}
		sqs_objects["{$form_name}_parent_name"]["disable"] = false;
		document.forms["{$form_name}"].elements["parent_name"].readOnly = false;
{literal}
	}
{/literal}
	sqs_objects["{$form_name}_parent_name"]["modules"] = new Array(new_module);
	if(typeof QSProcessedFieldsArray != 'undefined')
{literal}
    {
{/literal}
	   QSProcessedFieldsArray["{$form_name}_parent_name"] = false;
{literal}
	}	
{/literal}    
    enableQS(false);
{literal}
}
{/literal}
</script>
{literal}
<script>var disabledModules=[];</script>
{/literal}
{literal}
<script language="javascript">if(typeof sqs_objects == 'undefined'){var sqs_objects = new Array;}sqs_objects['form_SubpanelQuickCreate_Notes_parent_name']={"form":"form_SubpanelQuickCreate_Notes","method":"query","modules":["{/literal}{if !empty($fields.parent_type.value)}{$fields.parent_type.value}{else}Accounts{/if}{literal}"],"group":"or","field_list":["name","id"],"populate_list":["parent_name","parent_id"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"No Match"};</script>
{/literal}
{else}
{counter name="panelFieldCount"}

<input type="hidden" class="sugar_field" id="{$fields.parent_name.name}" value="{$fields.parent_name.value}">
<input type="hidden" class="sugar_field" id="parent_id" value="{$fields.parent_id.value}">
<a href="index.php?module={$fields.parent_type.value}&action=DetailView&record={$fields.parent_id.value}" class="tabDetailViewDFLink">{$fields.parent_name.value}</a>
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
{if $fields.name.acl > 1 || ($showDetailData && $fields.name.acl > 0)}
<td valign="top" id='name_label' width='12.5%' scope="row">
{capture name="label" assign="label"}{sugar_translate label='LBL_SUBJECT' module='Notes'}{/capture}
{$label|strip_semicolon}:
<span class="required">*</span>
</td>
{counter name="fieldsUsed"}
<td valign="top" width='37.5%' >
{if $fields.name.acl > 1}
{counter name="panelFieldCount"}

{if strlen($fields.name.value) <= 0}
{assign var="value" value=$fields.name.default_value }
{else}
{assign var="value" value=$fields.name.value }
{/if}  
<input type='text' name='{$fields.name.name}' 
id='{$fields.name.name}' size='50' 
maxlength='255' 
value='{$value}' title='' tabindex='102' > 
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
{if $fields.assigned_user_name.acl > 1 || ($showDetailData && $fields.assigned_user_name.acl > 0)}
<td valign="top" id='assigned_user_name_label' width='12.5%' scope="row">
{capture name="label" assign="label"}{sugar_translate label='LBL_ASSIGNED_TO_NAME' module='Notes'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}
<td valign="top" width='37.5%' >
{if $fields.assigned_user_name.acl > 1}
{counter name="panelFieldCount"}

<input type="text" name="{$fields.assigned_user_name.name}" class="sqsEnabled" tabindex="103" id="{$fields.assigned_user_name.name}" size="" value="{$fields.assigned_user_name.value}" title='' autocomplete="off"  >
<input type="hidden" name="{$fields.assigned_user_name.id_name}" 
id="{$fields.assigned_user_name.id_name}" 
value="{$fields.assigned_user_id.value}">
<span class="id-ff multiple">
<button type="button" name="btn_{$fields.assigned_user_name.name}" id="btn_{$fields.assigned_user_name.name}" tabindex="103" title="{$APP.LBL_SELECT_BUTTON_TITLE}" accessKey="{$APP.LBL_SELECT_BUTTON_KEY}" class="button firstChild" value="{$APP.LBL_SELECT_BUTTON_LABEL}" 
onclick='open_popup(
"{$fields.assigned_user_name.module}", 
600, 
400, 
"", 
true, 
false, 
{literal}{"call_back_function":"set_return","form_name":"form_SubpanelQuickCreate_Notes","field_to_name_array":{"id":"assigned_user_id","user_name":"assigned_user_name"}}{/literal}, 
"single", 
true
);' ><img src="{sugar_getimagepath file="id-ff-select.png"}"></button><button type="button" name="btn_clr_{$fields.assigned_user_name.name}" id="btn_clr_{$fields.assigned_user_name.name}" tabindex="103" title="{$APP.LBL_CLEAR_BUTTON_TITLE}" accessKey="{$APP.LBL_CLEAR_BUTTON_KEY}" class="button lastChild" 
onclick="this.form.{$fields.assigned_user_name.name}.value = ''; this.form.{$fields.assigned_user_name.id_name}.value = '';" 
value="{$APP.LBL_CLEAR_BUTTON_LABEL}" ><img src="{sugar_getimagepath file="id-ff-clear.png"}"></button>
</span>
<script type="text/javascript">
<!--
if(typeof QSProcessedFieldsArray != 'undefined') 
	QSProcessedFieldsArray["{$form_name}_{$fields.assigned_user_name.name}"] = false;
	

enableQS(false);
-->	
</script>
{else}
{counter name="panelFieldCount"}

<span id="assigned_user_id" class="sugar_field">{$fields.assigned_user_name.value}</span>
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
{if $fields.filename.acl > 1 || ($showDetailData && $fields.filename.acl > 0)}
<td valign="top" id='filename_label' width='12.5%' scope="row">
{capture name="label" assign="label"}{sugar_translate label='LBL_FILENAME' module='Notes'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}
<td valign="top" width='37.5%' colspan='3'>
{if $fields.filename.acl > 1}
{counter name="panelFieldCount"}

<script type="text/javascript" src='include/SugarFields/Fields/File/SugarFieldFile.js?s=528ea9837190122019b07d9a2372fd8d&c=1'></script>
{if !empty($fields.filename.value) }
{assign var=showRemove value=true}
{else}
{assign var=showRemove value=false}
{/if}
{assign var=noChange value=false}
<input type="hidden" name="deleteAttachment" value="0">
<input type="hidden" name="{$fields.filename.name}" id="{$fields.filename.name}" value="{$fields.filename.value}">
<span id="{$fields.filename.name}_old" style="display:{if !$showRemove}none;{/if}">
<a href="index.php?entryPoint=download&id={$fields.id.value}&type={$module}" class="tabDetailViewDFLink">{$fields.filename.value}</a>
{if !$noChange}
<input type='button' class='button' value='{$APP.LBL_REMOVE}' onclick='SUGAR.field.file.deleteAttachment("{$fields.filename.name}","",this);'>
{/if}
</span>
{if !$noChange}
<span id="{$fields.filename.name}_new" style="display:{if $showRemove}none;{/if}">
<input type="hidden" name="{$fields.filename.name}_escaped">
<input id="{$fields.filename.name}_file" name="{$fields.filename.name}_file" 
type="file" title='' size="30" 
maxlength='255'
>
{else}

{/if}
</span>
{else}
{counter name="panelFieldCount"}

<span class="sugar_field" id="{$fields.filename.name}">
<a href="index.php?entryPoint=download&id={$fields.id.value}&type={$module}" class="tabDetailViewDFLink" target='_blank'>{$fields.filename.value}</a>
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
{if $fields.description.acl > 1 || ($showDetailData && $fields.description.acl > 0)}
<td valign="top" id='description_label' width='12.5%' scope="row">
{capture name="label" assign="label"}{sugar_translate label='LBL_NOTE_STATUS' module='Notes'}{/capture}
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
rows="6" 
cols="75" 
title='' tabindex="105" >{$value}</textarea>
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
{if $fields.team_name.acl > 1 || ($showDetailData && $fields.team_name.acl > 0)}
<td valign="top" id='team_name_label' width='12.5%' scope="row">
{capture name="label" assign="label"}{sugar_translate label='LBL_TEAMS' module='Notes'}{/capture}
{$label|strip_semicolon}:
<span class="required">*</span>
</td>
{counter name="fieldsUsed"}
<td valign="top" width='37.5%' colspan='3'>
{if $fields.team_name.acl > 1}
{counter name="panelFieldCount"}

{sugarvar_teamset parentFieldArray=fields vardef=$fields.team_name tabindex='106' display='' labelSpan='' fieldSpan='' formName='form_SubpanelQuickCreate_Notes' tabindex=1 displayType='renderEditView'  }
{else}
{counter name="panelFieldCount"}

{sugarvar_teamset parentFieldArray=fields vardef=$fields.team_name tabindex='106' display='' labelSpan='' fieldSpan='' formName='form_SubpanelQuickCreate_Notes' tabindex=1 displayType='renderDetailView'  }
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
</table>
</div>
{if $panelFieldCount == 0}
<script>document.getElementById("DEFAULT").style.display='none';</script>
{/if}
</div></div>

<div class="buttons">
{if $bean->aclAccess("save")}<input title="{$APP.LBL_SAVE_BUTTON_TITLE}" accessKey="{$APP.LBL_SAVE_BUTTON_KEY}" class="button" onclick="this.form.action.value='Save';if(check_form('form_SubpanelQuickCreate_Notes'))return SUGAR.subpanelUtils.inlineSave(this.form.id, 'Notes_subpanel_save_button');return false;" type="submit" name="Notes_subpanel_save_button" id="Notes_subpanel_save_button" value="{$APP.LBL_SAVE_BUTTON_LABEL}">{/if} 
<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="return SUGAR.subpanelUtils.cancelCreate('Notes_subpanel_cancel_button');return false;" type="submit" name="Notes_subpanel_cancel_button" id="Notes_subpanel_cancel_button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}"> 
<input title="{$APP.LBL_FULL_FORM_BUTTON_TITLE}" accessKey="{$APP.LBL_FULL_FORM_BUTTON_KEY}" class="button" onclick="disableOnUnloadEditView(this.form); this.form.return_action.value='DetailView'; this.form.action.value='EditView'; if(typeof(this.form.to_pdf)!='undefined') this.form.to_pdf.value='0';" type="submit" name="Notes_subpanel_full_form_button" id="Notes_subpanel_full_form_button" value="{$APP.LBL_FULL_FORM_BUTTON_LABEL}"> <input type="hidden" name="full_form" value="full_form">
{if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=Notes", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="submit" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}
</div>
</form>
{$set_focus_block}
<!-- Begin Meta-Data Javascript -->
<script type="text/javascript" src="include/javascript/dashlets.js?s={$SUGAR_VERSION}&c={$JS_CUSTOM_VERSION}"></script>
<script>toggle_portal_flag(); function toggle_portal_flag()  {literal} { {/literal} {$TOGGLE_JS} {literal} } {/literal} </script>
<!-- End Meta-Data Javascript -->
{$overlibStuff}
<script type="text/javascript">
YAHOO.util.Event.onContentReady("form_SubpanelQuickCreate_Notes",
    function () {ldelim} initEditView(document.forms.form_SubpanelQuickCreate_Notes) {rdelim});
//window.setTimeout(, 100);
window.onbeforeunload = function () {ldelim} return onUnloadEditView(); {rdelim};
</script>{literal}
<script type="text/javascript">
addToValidate('form_SubpanelQuickCreate_Notes', 'assigned_user_id', 'relate', false,'{/literal}{sugar_translate label='LBL_ASSIGNED_TO_ID' module='Notes' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Notes', 'assigned_user_name', 'relate', false,'{/literal}{sugar_translate label='LBL_ASSIGNED_TO_NAME' module='Notes' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Notes', 'team_id', 'team_list', false,'{/literal}{sugar_translate label='LBL_TEAM_ID' module='Notes' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Notes', 'team_set_id', 'id', false,'{/literal}{sugar_translate label='LBL_TEAM_SET_ID' module='Notes' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Notes', 'team_count', 'relate', true,'{/literal}{sugar_translate label='LBL_TEAMS' module='Notes' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Notes', 'team_name', 'teamset', true,'{/literal}{sugar_translate label='LBL_TEAMS' module='Notes' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Notes', 'id', 'id', false,'{/literal}{sugar_translate label='LBL_ID' module='Notes' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Notes', 'date_entered_date', 'date', false,'Date Created' );
addToValidate('form_SubpanelQuickCreate_Notes', 'date_modified_date', 'date', false,'Date Modified' );
addToValidate('form_SubpanelQuickCreate_Notes', 'modified_user_id', 'assigned_user_name', false,'{/literal}{sugar_translate label='LBL_MODIFIED' module='Notes' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Notes', 'modified_by_name', 'relate', false,'{/literal}{sugar_translate label='LBL_MODIFIED_BY' module='Notes' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Notes', 'created_by', 'assigned_user_name', false,'{/literal}{sugar_translate label='LBL_CREATED_BY' module='Notes' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Notes', 'created_by_name', 'relate', false,'{/literal}{sugar_translate label='LBL_CREATED_BY' module='Notes' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Notes', 'name', 'name', true,'{/literal}{sugar_translate label='LBL_NOTE_SUBJECT' module='Notes' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Notes', 'file_mime_type', 'varchar', false,'{/literal}{sugar_translate label='LBL_FILE_MIME_TYPE' module='Notes' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Notes', 'file_url', 'function', false,'{/literal}{sugar_translate label='LBL_FILE_URL' module='Notes' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Notes', 'filename', 'file', false,'{/literal}{sugar_translate label='LBL_FILENAME' module='Notes' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Notes', 'parent_type', 'parent_type', false,'{/literal}{sugar_translate label='LBL_PARENT_TYPE' module='Notes' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Notes', 'parent_id', 'id', false,'{/literal}{sugar_translate label='LBL_PARENT_ID' module='Notes' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Notes', 'contact_id', 'id', false,'{/literal}{sugar_translate label='LBL_CONTACT_ID' module='Notes' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Notes', 'portal_flag', 'bool', true,'{/literal}{sugar_translate label='LBL_PORTAL_FLAG' module='Notes' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Notes', 'embed_flag', 'bool', false,'{/literal}{sugar_translate label='LBL_EMBED_FLAG' module='Notes' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Notes', 'description', 'text', false,'{/literal}{sugar_translate label='LBL_DESCRIPTION' module='Notes' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Notes', 'deleted', 'bool', false,'{/literal}{sugar_translate label='LBL_DELETED' module='Notes' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Notes', 'parent_name', 'parent', false,'{/literal}{sugar_translate label='LBL_RELATED_TO' module='Notes' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Notes', 'contact_name', 'relate', false,'{/literal}{sugar_translate label='LBL_CONTACT_NAME' module='Notes' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Notes', 'contact_phone', 'phone', false,'{/literal}{sugar_translate label='LBL_PHONE' module='Notes' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Notes', 'contact_email', 'varchar', false,'{/literal}{sugar_translate label='LBL_EMAIL_ADDRESS' module='Notes' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Notes', 'account_id', 'id', false,'{/literal}{sugar_translate label='LBL_ACCOUNT_ID' module='Notes' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Notes', 'opportunity_id', 'id', false,'{/literal}{sugar_translate label='LBL_OPPORTUNITY_ID' module='Notes' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Notes', 'acase_id', 'id', false,'{/literal}{sugar_translate label='LBL_CASE_ID' module='Notes' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Notes', 'lead_id', 'id', false,'{/literal}{sugar_translate label='LBL_LEAD_ID' module='Notes' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Notes', 'product_id', 'id', false,'{/literal}{sugar_translate label='LBL_PRODUCT_ID' module='Notes' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Notes', 'quote_id', 'id', false,'{/literal}{sugar_translate label='LBL_QUOTE_ID' module='Notes' for_js=true}{literal}' );
addToValidateBinaryDependency('form_SubpanelQuickCreate_Notes', 'assigned_user_name', 'alpha', false,'{/literal}{sugar_translate label='ERR_SQS_NO_MATCH_FIELD' module='Notes' for_js=true}{literal}: {/literal}{sugar_translate label='LBL_ASSIGNED_TO' module='Notes' for_js=true}{literal}', 'assigned_user_id' );
addToValidateBinaryDependency('form_SubpanelQuickCreate_Notes', 'contact_name', 'alpha', false,'{/literal}{sugar_translate label='ERR_SQS_NO_MATCH_FIELD' module='Notes' for_js=true}{literal}: {/literal}{sugar_translate label='LBL_CONTACT_NAME' module='Notes' for_js=true}{literal}', 'contact_id' );
</script><script language="javascript">if(typeof sqs_objects == 'undefined'){var sqs_objects = new Array;}sqs_objects['form_SubpanelQuickCreate_Notes_contact_name']={"form":"form_SubpanelQuickCreate_Notes","method":"get_contact_array","modules":["Contacts"],"field_list":["salutation","first_name","last_name","id"],"populate_list":["contact_name","contact_id","contact_id","contact_id"],"required_list":["contact_id"],"group":"or","conditions":[{"name":"first_name","op":"like_custom","end":"%","value":""},{"name":"last_name","op":"like_custom","end":"%","value":""}],"order":"last_name","limit":"30","no_match_text":"No Match"};sqs_objects['form_SubpanelQuickCreate_Notes_assigned_user_name']={"form":"form_SubpanelQuickCreate_Notes","method":"get_user_array","field_list":["user_name","id"],"populate_list":["assigned_user_name","assigned_user_id"],"required_list":["assigned_user_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"No Match"};sqs_objects['form_SubpanelQuickCreate_Notes_team_name']={"form":"form_SubpanelQuickCreate_Notes","method":"query","modules":["Teams"],"group":"or","field_list":["name","id"],"populate_list":["team_name","team_id"],"required_list":["team_id"],"whereExtra":"( teams.associated_user_id IS NULL OR teams.associated_user_id NOT IN ( SELECT id FROM users WHERE status = 'Inactive' OR portal_only = '1' ))","conditions":[{"name":"name","op":"like_custom","end":"%","value":""},{"name":"name","op":"like_custom","begin":"(","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"No Match"};</script><script type=text/javascript>
SUGAR.forms.AssignmentHandler.registerView('form_SubpanelQuickCreate_Notes');
</script>{/literal}
