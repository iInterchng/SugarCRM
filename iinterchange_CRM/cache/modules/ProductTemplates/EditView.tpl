

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
{if $bean->aclAccess("save")}<input title="{$APP.LBL_SAVE_BUTTON_TITLE}" accessKey="{$APP.LBL_SAVE_BUTTON_KEY}" class="button primary" onclick="{if $isDuplicate}this.form.return_id.value=''; {/if}this.form.action.value='Save'; return check_form('EditView');" type="submit" name="button" value="{$APP.LBL_SAVE_BUTTON_LABEL}" id="SAVE_HEADER">{/if} 
{if !empty($smarty.request.return_action) && ($smarty.request.return_action == "DetailView" && !empty($smarty.request.return_id))}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="window.location.href='index.php?action=DetailView&module={$smarty.request.return_module}&record={$smarty.request.return_id}'; return false;" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" type="button" id="CANCEL_HEADER"> {elseif !empty($smarty.request.return_action) && ($smarty.request.return_action == "DetailView" && !empty($fields.id.value))}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="window.location.href='index.php?action=DetailView&module={$smarty.request.return_module}&record={$fields.id.value}'; return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL_HEADER"> {elseif empty($smarty.request.return_action) || empty($smarty.request.return_id) && !empty($fields.id.value)}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="window.location.href='index.php?action=index&module=ProductTemplates'; return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL_HEADER"> {else}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="window.location.href='index.php?action=index&module={$smarty.request.return_module}&record={$smarty.request.return_id}'; return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL_HEADER"> {/if}
{if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=ProductTemplates", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="submit" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}
</td>
<td align='right'>
{$PAGINATION}
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
{capture name="label" assign="label"}{sugar_translate label='LBL_NAME' module='ProductTemplates'}{/capture}
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
{if $fields.status.acl > 1 || ($showDetailData && $fields.status.acl > 0)}
<td valign="top" id='status_label' width='12.5%' scope="row">
{capture name="label" assign="label"}{sugar_translate label='LBL_STATUS' module='ProductTemplates'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}
<td valign="top" width='37.5%' >
{if $fields.status.acl > 1}
{counter name="panelFieldCount"}

<select name="{$fields.status.name}" 
id="{$fields.status.name}" 
title='' tabindex="101"  
>
{if isset($fields.status.value) && $fields.status.value != ''}
{html_options options=$fields.status.options selected=$fields.status.value}
{else}
{html_options options=$fields.status.options selected=$fields.status.default}
{/if}
</select>
{else}
{counter name="panelFieldCount"}


{if is_string($fields.status.options)}
<input type="hidden" class="sugar_field" id="{$fields.status.name}" value="{ $fields.status.options }">
{ $fields.status.options }
{else}
<input type="hidden" class="sugar_field" id="{$fields.status.name}" value="{ $fields.status.value }">
{ $fields.status.options[$fields.status.value]}
{/if}
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
{if $fields.category_name.acl > 1 || ($showDetailData && $fields.category_name.acl > 0)}
<td valign="top" id='category_name_label' width='12.5%' scope="row">
{capture name="label" assign="label"}{sugar_translate label='LBL_CATEGORY_NAME' module='ProductTemplates'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}
<td valign="top" width='37.5%' colspan='3'>
{if $fields.category_name.acl > 1}
{counter name="panelFieldCount"}

<input type="text" name="{$fields.category_name.name}" class="sqsEnabled" tabindex="102" id="{$fields.category_name.name}" size="" value="{$fields.category_name.value}" title='' autocomplete="off"  >
<input type="hidden" name="{$fields.category_name.id_name}" 
id="{$fields.category_name.id_name}" 
value="{$fields.category_id.value}">
<span class="id-ff multiple">
<button type="button" name="btn_{$fields.category_name.name}" id="btn_{$fields.category_name.name}" tabindex="102" title="{$APP.LBL_SELECT_BUTTON_TITLE}" accessKey="{$APP.LBL_SELECT_BUTTON_KEY}" class="button firstChild" value="{$APP.LBL_SELECT_BUTTON_LABEL}" 
onclick='open_popup(
"{$fields.category_name.module}", 
600, 
400, 
"", 
true, 
false, 
{literal}{"call_back_function":"set_return","form_name":"EditView","field_to_name_array":{"id":"category_id","name":"category_name"}}{/literal}, 
"single", 
true
);' ><img src="{sugar_getimagepath file="id-ff-select.png"}"></button><button type="button" name="btn_clr_{$fields.category_name.name}" id="btn_clr_{$fields.category_name.name}" tabindex="102" title="{$APP.LBL_CLEAR_BUTTON_TITLE}" accessKey="{$APP.LBL_CLEAR_BUTTON_KEY}" class="button lastChild" 
onclick="this.form.{$fields.category_name.name}.value = ''; this.form.{$fields.category_name.id_name}.value = '';" 
value="{$APP.LBL_CLEAR_BUTTON_LABEL}" ><img src="{sugar_getimagepath file="id-ff-clear.png"}"></button>
</span>
<script type="text/javascript">
<!--
if(typeof QSProcessedFieldsArray != 'undefined') 
	QSProcessedFieldsArray["{$form_name}_{$fields.category_name.name}"] = false;
	

enableQS(false);
-->	
</script>
{else}
{counter name="panelFieldCount"}

{if !empty($fields.category_id.value)}<a href="index.php?module=ProductCategories&action=DetailView&record={$fields.category_id.value}">{/if}
<span id="category_id" class="sugar_field">{$fields.category_name.value}</span>
{if !empty($fields.category_id.value)}</a>{/if}
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
{if $fields.website.acl > 1 || ($showDetailData && $fields.website.acl > 0)}
<td valign="top" id='website_label' width='12.5%' scope="row">
{capture name="label" assign="label"}{sugar_translate label='LBL_URL' module='ProductTemplates'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}
<td valign="top" width='37.5%' >
{if $fields.website.acl > 1}
{counter name="panelFieldCount"}

{if strlen($fields.website.value) <= 0}
{assign var="value" value=$fields.website.default_value }
{else}
{assign var="value" value=$fields.website.value }
{/if}  
<input type='text' name='{$fields.website.name}' 
id='{$fields.website.name}' size='30' 
maxlength='255' 
value='{$value}' title='' tabindex='103' > 
{else}
{counter name="panelFieldCount"}

{if strlen($fields.website.value) <= 0}
{assign var="value" value=$fields.website.default_value }
{else}
{assign var="value" value=$fields.website.value }
{/if} 
<span class="sugar_field" id="{$fields.website.name}">{$fields.website.value}</span>
</td>
{/if}
{else}
<td></td><td></td>
{/if}
{if $fields.date_available.acl > 1 || ($showDetailData && $fields.date_available.acl > 0)}
<td valign="top" id='date_available_label' width='12.5%' scope="row">
{capture name="label" assign="label"}{sugar_translate label='LBL_DATE_AVAILABLE' module='ProductTemplates'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}
<td valign="top" width='37.5%' >
{if $fields.date_available.acl > 1}
{counter name="panelFieldCount"}

<span class="dateTime">
{assign var=date_value value=$fields.date_available.value }
<input class="date_input" autocomplete="off" type="text" name="{$fields.date_available.name}" id="{$fields.date_available.name}" value="{$date_value}" title=''  tabindex='104' size="11" maxlength="10" >
<img border="0" src="{sugar_getimagepath file='jscalendar.gif'}" alt="{$APP.LBL_ENTER_DATE}" id="{$fields.date_available.name}_trigger" align="absmiddle" />
</span>
<script type="text/javascript">
Calendar.setup ({ldelim}
inputField : "{$fields.date_available.name}",
ifFormat : "{$CALENDAR_FORMAT}",
daFormat : "{$CALENDAR_FORMAT}",
button : "{$fields.date_available.name}_trigger",
singleClick : true,
dateStr : "{$date_value}",
step : 1,
weekNumbers:false
{rdelim}
);
</script>
{else}
{counter name="panelFieldCount"}

{if strlen($fields.date_available.value) <= 0}
{assign var="value" value=$fields.date_available.default_value }
{else}
{assign var="value" value=$fields.date_available.value }
{/if} 
<span class="sugar_field" id="{$fields.date_available.name}">{$fields.date_available.value}</span>
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
{if $fields.tax_class.acl > 1 || ($showDetailData && $fields.tax_class.acl > 0)}
<td valign="top" id='tax_class_label' width='12.5%' scope="row">
{capture name="label" assign="label"}{sugar_translate label='LBL_TAX_CLASS' module='ProductTemplates'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}
<td valign="top" width='37.5%' >
{if $fields.tax_class.acl > 1}
{counter name="panelFieldCount"}

<select name="{$fields.tax_class.name}" 
id="{$fields.tax_class.name}" 
title='' tabindex="105"  
>
{if isset($fields.tax_class.value) && $fields.tax_class.value != ''}
{html_options options=$fields.tax_class.options selected=$fields.tax_class.value}
{else}
{html_options options=$fields.tax_class.options selected=$fields.tax_class.default}
{/if}
</select>
{else}
{counter name="panelFieldCount"}


{if is_string($fields.tax_class.options)}
<input type="hidden" class="sugar_field" id="{$fields.tax_class.name}" value="{ $fields.tax_class.options }">
{ $fields.tax_class.options }
{else}
<input type="hidden" class="sugar_field" id="{$fields.tax_class.name}" value="{ $fields.tax_class.value }">
{ $fields.tax_class.options[$fields.tax_class.value]}
{/if}
</td>
{/if}
{else}
<td></td><td></td>
{/if}
{if $fields.qty_in_stock.acl > 1 || ($showDetailData && $fields.qty_in_stock.acl > 0)}
<td valign="top" id='qty_in_stock_label' width='12.5%' scope="row">
{capture name="label" assign="label"}{sugar_translate label='LBL_QUANTITY' module='ProductTemplates'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}
<td valign="top" width='37.5%' >
{if $fields.qty_in_stock.acl > 1}
{counter name="panelFieldCount"}

{if strlen($fields.qty_in_stock.value) <= 0}
{assign var="value" value=$fields.qty_in_stock.default_value }
{else}
{assign var="value" value=$fields.qty_in_stock.value }
{/if}  
<input type='text' name='{$fields.qty_in_stock.name}' 
id='{$fields.qty_in_stock.name}' size='30' maxlength='' value='{sugar_number_format precision=0 var=$value}' title='' tabindex='106' > 
{else}
{counter name="panelFieldCount"}

<span class="sugar_field" id="{$fields.qty_in_stock.name}">
{sugar_number_format precision=0 var=$fields.qty_in_stock.value}
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
{if $fields.manufacturer_id.acl > 1 || ($showDetailData && $fields.manufacturer_id.acl > 0)}
<td valign="top" id='manufacturer_id_label' width='12.5%' scope="row">
{capture name="label" assign="label"}{sugar_translate label='LBL_LIST_MANUFACTURER_ID' module='ProductTemplates'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}
<td valign="top" width='37.5%' >
{if $fields.manufacturer_id.acl > 1}
{counter name="panelFieldCount"}
<span id='manufacturer_id'>
{$fields.manufacturer_id.value}</span>
{else}
{counter name="panelFieldCount"}
<span id='manufacturer_id'>
{$fields.manufacturer_id.value}
</span>
</td>
{/if}
{else}
<td></td><td></td>
{/if}
{if $fields.weight.acl > 1 || ($showDetailData && $fields.weight.acl > 0)}
<td valign="top" id='weight_label' width='12.5%' scope="row">
{capture name="label" assign="label"}{sugar_translate label='LBL_WEIGHT' module='ProductTemplates'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}
<td valign="top" width='37.5%' >
{if $fields.weight.acl > 1}
{counter name="panelFieldCount"}

{if strlen($fields.weight.value) <= 0}
{assign var="value" value=$fields.weight.default_value }
{else}
{assign var="value" value=$fields.weight.value }
{/if}  
<input type='text' name='{$fields.weight.name}'
id='{$fields.weight.name}'
size='30'
maxlength=''value='{sugar_number_format var=$value precision=2 }'
title=''
tabindex='108' > 
{else}
{counter name="panelFieldCount"}

<span class="sugar_field" id="{$fields.weight.name}">
{sugar_number_format var=$fields.weight.value precision=2 }
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
{if $fields.mft_part_num.acl > 1 || ($showDetailData && $fields.mft_part_num.acl > 0)}
<td valign="top" id='mft_part_num_label' width='12.5%' scope="row">
{capture name="label" assign="label"}{sugar_translate label='LBL_MFT_PART_NUM' module='ProductTemplates'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}
<td valign="top" width='37.5%' colspan='3'>
{if $fields.mft_part_num.acl > 1}
{counter name="panelFieldCount"}

{if strlen($fields.mft_part_num.value) <= 0}
{assign var="value" value=$fields.mft_part_num.default_value }
{else}
{assign var="value" value=$fields.mft_part_num.value }
{/if}  
<input type='text' name='{$fields.mft_part_num.name}' 
id='{$fields.mft_part_num.name}' size='30' 
maxlength='50' 
value='{$value}' title='' tabindex='109' > 
{else}
{counter name="panelFieldCount"}

{if strlen($fields.mft_part_num.value) <= 0}
{assign var="value" value=$fields.mft_part_num.default_value }
{else}
{assign var="value" value=$fields.mft_part_num.value }
{/if} 
<span class="sugar_field" id="{$fields.mft_part_num.name}">{$fields.mft_part_num.value}</span>
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
{if $fields.vendor_part_num.acl > 1 || ($showDetailData && $fields.vendor_part_num.acl > 0)}
<td valign="top" id='vendor_part_num_label' width='12.5%' scope="row">
{capture name="label" assign="label"}{sugar_translate label='LBL_VENDOR_PART_NUM' module='ProductTemplates'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}
<td valign="top" width='37.5%' >
{if $fields.vendor_part_num.acl > 1}
{counter name="panelFieldCount"}

{if strlen($fields.vendor_part_num.value) <= 0}
{assign var="value" value=$fields.vendor_part_num.default_value }
{else}
{assign var="value" value=$fields.vendor_part_num.value }
{/if}  
<input type='text' name='{$fields.vendor_part_num.name}' 
id='{$fields.vendor_part_num.name}' size='30' 
maxlength='50' 
value='{$value}' title='' tabindex='110' > 
{else}
{counter name="panelFieldCount"}

{if strlen($fields.vendor_part_num.value) <= 0}
{assign var="value" value=$fields.vendor_part_num.default_value }
{else}
{assign var="value" value=$fields.vendor_part_num.value }
{/if} 
<span class="sugar_field" id="{$fields.vendor_part_num.name}">{$fields.vendor_part_num.value}</span>
</td>
{/if}
{else}
<td></td><td></td>
{/if}
{if $fields.type_id.acl > 1 || ($showDetailData && $fields.type_id.acl > 0)}
<td valign="top" id='type_id_label' width='12.5%' scope="row">
{capture name="label" assign="label"}{sugar_translate label='LBL_TYPE' module='ProductTemplates'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}
<td valign="top" width='37.5%' >
{if $fields.type_id.acl > 1}
{counter name="panelFieldCount"}
<span id='type_id'>
{$fields.type_id.value}</span>
{else}
{counter name="panelFieldCount"}
<span id='type_id'>
{$fields.type_id.value}
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
{if $fields.currency_id.acl > 1 || ($showDetailData && $fields.currency_id.acl > 0)}
<td valign="top" id='currency_id_label' width='12.5%' scope="row">
{capture name="label" assign="label"}{sugar_translate label='LBL_CURRENCY' module='ProductTemplates'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}
<td valign="top" width='37.5%' >
{if $fields.currency_id.acl > 1}
{counter name="panelFieldCount"}
<span id='currency_id'>
{$fields.currency_id.value}</span>
{else}
{counter name="panelFieldCount"}
<span id='currency_id'>
{$fields.currency_id.value}
</span>
</td>
{/if}
{else}
<td></td><td></td>
{/if}
{if $fields.support_name.acl > 1 || ($showDetailData && $fields.support_name.acl > 0)}
<td valign="top" id='support_name_label' width='12.5%' scope="row">
{capture name="label" assign="label"}{sugar_translate label='LBL_SUPPORT_NAME' module='ProductTemplates'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}
<td valign="top" width='37.5%' >
{if $fields.support_name.acl > 1}
{counter name="panelFieldCount"}

{if strlen($fields.support_name.value) <= 0}
{assign var="value" value=$fields.support_name.default_value }
{else}
{assign var="value" value=$fields.support_name.value }
{/if}  
<input type='text' name='{$fields.support_name.name}' 
id='{$fields.support_name.name}' size='30' 
maxlength='50' 
value='{$value}' title='' tabindex='113' > 
{else}
{counter name="panelFieldCount"}

{if strlen($fields.support_name.value) <= 0}
{assign var="value" value=$fields.support_name.default_value }
{else}
{assign var="value" value=$fields.support_name.value }
{/if} 
<span class="sugar_field" id="{$fields.support_name.name}">{$fields.support_name.value}</span>
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
{if $fields.cost_price.acl > 1 || ($showDetailData && $fields.cost_price.acl > 0)}
<td valign="top" id='cost_price_label' width='12.5%' scope="row">
{capture name="label" assign="label"}{sugar_translate label='LBL_COST_PRICE' module='ProductTemplates'}{/capture}
{$label|strip_semicolon}:
<span class="required">*</span>
</td>
{counter name="fieldsUsed"}
<td valign="top" width='37.5%' >
{if $fields.cost_price.acl > 1}
{counter name="panelFieldCount"}

{if strlen($fields.cost_price.value) <= 0}
{assign var="value" value=$fields.cost_price.default_value }
{else}
{assign var="value" value=$fields.cost_price.value }
{/if}  
<input type='text' name='{$fields.cost_price.name}' 
id='{$fields.cost_price.name}' size='30' maxlength='' value='{sugar_number_format var=$value}' title='' tabindex='114' > 
{else}
{counter name="panelFieldCount"}

<span id='{$fields.cost_price.name}'>
{sugar_number_format var=$fields.cost_price.value }
</span>
</td>
{/if}
{else}
<td></td><td></td>
{/if}
{if $fields.support_contact.acl > 1 || ($showDetailData && $fields.support_contact.acl > 0)}
<td valign="top" id='support_contact_label' width='12.5%' scope="row">
{capture name="label" assign="label"}{sugar_translate label='LBL_SUPPORT_CONTACT' module='ProductTemplates'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}
<td valign="top" width='37.5%' >
{if $fields.support_contact.acl > 1}
{counter name="panelFieldCount"}

{if strlen($fields.support_contact.value) <= 0}
{assign var="value" value=$fields.support_contact.default_value }
{else}
{assign var="value" value=$fields.support_contact.value }
{/if}  
<input type='text' name='{$fields.support_contact.name}' 
id='{$fields.support_contact.name}' size='30' 
maxlength='50' 
value='{$value}' title='' tabindex='115' > 
{else}
{counter name="panelFieldCount"}

{if strlen($fields.support_contact.value) <= 0}
{assign var="value" value=$fields.support_contact.default_value }
{else}
{assign var="value" value=$fields.support_contact.value }
{/if} 
<span class="sugar_field" id="{$fields.support_contact.name}">{$fields.support_contact.value}</span>
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
{if $fields.list_price.acl > 1 || ($showDetailData && $fields.list_price.acl > 0)}
<td valign="top" id='list_price_label' width='12.5%' scope="row">
{capture name="label" assign="label"}{sugar_translate label='LBL_LIST_PRICE' module='ProductTemplates'}{/capture}
{$label|strip_semicolon}:
<span class="required">*</span>
</td>
{counter name="fieldsUsed"}
<td valign="top" width='37.5%' >
{if $fields.list_price.acl > 1}
{counter name="panelFieldCount"}

{if strlen($fields.list_price.value) <= 0}
{assign var="value" value=$fields.list_price.default_value }
{else}
{assign var="value" value=$fields.list_price.value }
{/if}  
<input type='text' name='{$fields.list_price.name}' 
id='{$fields.list_price.name}' size='30' maxlength='' value='{sugar_number_format var=$value}' title='' tabindex='116' > 
{else}
{counter name="panelFieldCount"}

<span id='{$fields.list_price.name}'>
{sugar_number_format var=$fields.list_price.value }
</span>
</td>
{/if}
{else}
<td></td><td></td>
{/if}
{if $fields.support_description.acl > 1 || ($showDetailData && $fields.support_description.acl > 0)}
<td valign="top" id='support_description_label' width='12.5%' scope="row">
{capture name="label" assign="label"}{sugar_translate label='LBL_SUPPORT_DESCRIPTION' module='ProductTemplates'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}
<td valign="top" width='37.5%' >
{if $fields.support_description.acl > 1}
{counter name="panelFieldCount"}

{if strlen($fields.support_description.value) <= 0}
{assign var="value" value=$fields.support_description.default_value }
{else}
{assign var="value" value=$fields.support_description.value }
{/if}  
<input type='text' name='{$fields.support_description.name}' 
id='{$fields.support_description.name}' size='30' 
maxlength='255' 
value='{$value}' title='' tabindex='117' > 
{else}
{counter name="panelFieldCount"}

{if strlen($fields.support_description.value) <= 0}
{assign var="value" value=$fields.support_description.default_value }
{else}
{assign var="value" value=$fields.support_description.value }
{/if} 
<span class="sugar_field" id="{$fields.support_description.name}">{$fields.support_description.value}</span>
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
{if $fields.discount_price.acl > 1 || ($showDetailData && $fields.discount_price.acl > 0)}
<td valign="top" id='discount_price_label' width='12.5%' scope="row">
{capture name="label" assign="label"}{sugar_translate label='LBL_DISCOUNT_PRICE' module='ProductTemplates'}{/capture}
{$label|strip_semicolon}:
<span class="required">*</span>
</td>
{counter name="fieldsUsed"}
<td valign="top" width='37.5%' >
{if $fields.discount_price.acl > 1}
{counter name="panelFieldCount"}

{if strlen($fields.discount_price.value) <= 0}
{assign var="value" value=$fields.discount_price.default_value }
{else}
{assign var="value" value=$fields.discount_price.value }
{/if}  
<input type='text' name='{$fields.discount_price.name}' 
id='{$fields.discount_price.name}' size='30' maxlength='' value='{sugar_number_format var=$value}' title='' tabindex='118' > 
{else}
{counter name="panelFieldCount"}

<span id='{$fields.discount_price.name}'>
{sugar_number_format var=$fields.discount_price.value }
</span>
</td>
{/if}
{else}
<td></td><td></td>
{/if}
{if $fields.support_term.acl > 1 || ($showDetailData && $fields.support_term.acl > 0)}
<td valign="top" id='support_term_label' width='12.5%' scope="row">
{capture name="label" assign="label"}{sugar_translate label='LBL_SUPPORT_TERM' module='ProductTemplates'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}
<td valign="top" width='37.5%' >
{if $fields.support_term.acl > 1}
{counter name="panelFieldCount"}

<select name="{$fields.support_term.name}" 
id="{$fields.support_term.name}" 
title='' tabindex="119"  
>
{if isset($fields.support_term.value) && $fields.support_term.value != ''}
{html_options options=$fields.support_term.options selected=$fields.support_term.value}
{else}
{html_options options=$fields.support_term.options selected=$fields.support_term.default}
{/if}
</select>
{else}
{counter name="panelFieldCount"}


{if is_string($fields.support_term.options)}
<input type="hidden" class="sugar_field" id="{$fields.support_term.name}" value="{ $fields.support_term.options }">
{ $fields.support_term.options }
{else}
<input type="hidden" class="sugar_field" id="{$fields.support_term.name}" value="{ $fields.support_term.value }">
{ $fields.support_term.options[$fields.support_term.value]}
{/if}
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
{if $fields.pricing_formula.acl > 1 || ($showDetailData && $fields.pricing_formula.acl > 0)}
<td valign="top" id='pricing_formula_label' width='12.5%' scope="row">
{capture name="label" assign="label"}{sugar_translate label='LBL_PRICING_FORMULA' module='ProductTemplates'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}
<td valign="top" width='37.5%' colspan='3'>
{if $fields.pricing_formula.acl > 1}
{counter name="panelFieldCount"}
<span id='pricing_formula'>
{$fields.pricing_formula.value}</span>
{else}
{counter name="panelFieldCount"}
<span id='pricing_formula'>
{$fields.pricing_formula.value}
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
{capture name="label" assign="label"}{sugar_translate label='LBL_DESCRIPTION' module='ProductTemplates'}{/capture}
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
title='' tabindex="121" >{$value}</textarea>
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
</table>
</div>
{if $panelFieldCount == 0}
<script>document.getElementById("DEFAULT").style.display='none';</script>
{/if}
</div></div>

<div class="buttons">
{if $bean->aclAccess("save")}<input title="{$APP.LBL_SAVE_BUTTON_TITLE}" accessKey="{$APP.LBL_SAVE_BUTTON_KEY}" class="button primary" onclick="{if $isDuplicate}this.form.return_id.value=''; {/if}this.form.action.value='Save'; return check_form('EditView');" type="submit" name="button" value="{$APP.LBL_SAVE_BUTTON_LABEL}" id="SAVE_FOOTER">{/if} 
{if !empty($smarty.request.return_action) && ($smarty.request.return_action == "DetailView" && !empty($smarty.request.return_id))}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="window.location.href='index.php?action=DetailView&module={$smarty.request.return_module}&record={$smarty.request.return_id}'; return false;" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" type="button" id="CANCEL_FOOTER"> {elseif !empty($smarty.request.return_action) && ($smarty.request.return_action == "DetailView" && !empty($fields.id.value))}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="window.location.href='index.php?action=DetailView&module={$smarty.request.return_module}&record={$fields.id.value}'; return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL_FOOTER"> {elseif empty($smarty.request.return_action) || empty($smarty.request.return_id) && !empty($fields.id.value)}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="window.location.href='index.php?action=index&module=ProductTemplates'; return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL_FOOTER"> {else}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="window.location.href='index.php?action=index&module={$smarty.request.return_module}&record={$smarty.request.return_id}'; return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL_FOOTER"> {/if}
{if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=ProductTemplates", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="submit" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}
</div>
</form>
{$set_focus_block}
{$overlibStuff}
<script type="text/javascript">
YAHOO.util.Event.onContentReady("EditView",
    function () {ldelim} initEditView(document.forms.EditView) {rdelim});
//window.setTimeout(, 100);
window.onbeforeunload = function () {ldelim} return onUnloadEditView(); {rdelim};
</script>{literal}
<script type="text/javascript">
addToValidate('EditView', 'id', 'id', false,'{/literal}{sugar_translate label='LBL_PRODUCT_ID' module='ProductTemplates' for_js=true}{literal}' );
addToValidate('EditView', 'deleted', 'bool', false,'{/literal}{sugar_translate label='LBL_DELETED' module='ProductTemplates' for_js=true}{literal}' );
addToValidate('EditView', 'date_entered_date', 'date', false,'Date Created' );
addToValidate('EditView', 'date_modified_date', 'date', false,'Date Modified' );
addToValidate('EditView', 'modified_user_id', 'assigned_user_name', false,'{/literal}{sugar_translate label='LBL_MODIFIED_ID' module='ProductTemplates' for_js=true}{literal}' );
addToValidate('EditView', 'created_by', 'assigned_user_name', false,'{/literal}{sugar_translate label='LBL_CREATED_ID' module='ProductTemplates' for_js=true}{literal}' );
addToValidate('EditView', 'type_id', 'id', false,'{/literal}{sugar_translate label='LBL_TYPE' module='ProductTemplates' for_js=true}{literal}' );
addToValidate('EditView', 'manufacturer_id', 'id', false,'{/literal}{sugar_translate label='LBL_LIST_MANUFACTURER_ID' module='ProductTemplates' for_js=true}{literal}' );
addToValidate('EditView', 'manufacturer_name', 'relate', false,'{/literal}{sugar_translate label='LBL_MANUFACTURER_NAME' module='ProductTemplates' for_js=true}{literal}' );
addToValidate('EditView', 'category_id', 'id', false,'{/literal}{sugar_translate label='LBL_LIST_CATEGORY_ID' module='ProductTemplates' for_js=true}{literal}' );
addToValidate('EditView', 'category_name', 'relate', false,'{/literal}{sugar_translate label='LBL_CATEGORY_NAME' module='ProductTemplates' for_js=true}{literal}' );
addToValidate('EditView', 'type_name', 'relate', false,'{/literal}{sugar_translate label='LBL_TYPE' module='ProductTemplates' for_js=true}{literal}' );
addToValidate('EditView', 'name', 'varchar', true,'{/literal}{sugar_translate label='LBL_NAME' module='ProductTemplates' for_js=true}{literal}' );
addToValidate('EditView', 'mft_part_num', 'varchar', false,'{/literal}{sugar_translate label='LBL_MFT_PART_NUM' module='ProductTemplates' for_js=true}{literal}' );
addToValidate('EditView', 'vendor_part_num', 'varchar', false,'{/literal}{sugar_translate label='LBL_VENDOR_PART_NUM' module='ProductTemplates' for_js=true}{literal}' );
addToValidate('EditView', 'date_cost_price', 'date', false,'{/literal}{sugar_translate label='LBL_DATE_COST_PRICE' module='ProductTemplates' for_js=true}{literal}' );
addToValidate('EditView', 'cost_price', 'currency', true,'{/literal}{sugar_translate label='LBL_COST_PRICE' module='ProductTemplates' for_js=true}{literal}' );
addToValidate('EditView', 'discount_price', 'currency', true,'{/literal}{sugar_translate label='LBL_DISCOUNT_PRICE' module='ProductTemplates' for_js=true}{literal}' );
addToValidate('EditView', 'list_price', 'currency', true,'{/literal}{sugar_translate label='LBL_LIST_PRICE' module='ProductTemplates' for_js=true}{literal}' );
addToValidate('EditView', 'cost_usdollar', 'currency', false,'{/literal}{sugar_translate label='LBL_COST_USDOLLAR' module='ProductTemplates' for_js=true}{literal}' );
addToValidate('EditView', 'discount_usdollar', 'currency', false,'{/literal}{sugar_translate label='LBL_DISCOUNT_USDOLLAR' module='ProductTemplates' for_js=true}{literal}' );
addToValidate('EditView', 'list_usdollar', 'currency', false,'{/literal}{sugar_translate label='LBL_LIST_USDOLLAR' module='ProductTemplates' for_js=true}{literal}' );
addToValidate('EditView', 'currency_id', 'id', false,'{/literal}{sugar_translate label='LBL_CURRENCY' module='ProductTemplates' for_js=true}{literal}' );
addToValidate('EditView', 'currency_symbol', 'varchar', false,'{/literal}{sugar_translate label='LBL_CURRENCY_SYMBOL_NAME' module='ProductTemplates' for_js=true}{literal}' );
addToValidate('EditView', 'currency', 'varchar', false,'{/literal}{sugar_translate label='LBL_CURRENCY' module='ProductTemplates' for_js=true}{literal}' );
addToValidate('EditView', 'status', 'enum', false,'{/literal}{sugar_translate label='LBL_STATUS' module='ProductTemplates' for_js=true}{literal}' );
addToValidate('EditView', 'tax_class', 'enum', false,'{/literal}{sugar_translate label='LBL_TAX_CLASS' module='ProductTemplates' for_js=true}{literal}' );
addToValidate('EditView', 'date_available', 'date', false,'{/literal}{sugar_translate label='LBL_DATE_AVAILABLE' module='ProductTemplates' for_js=true}{literal}' );
addToValidate('EditView', 'website', 'varchar', false,'{/literal}{sugar_translate label='LBL_URL' module='ProductTemplates' for_js=true}{literal}' );
addToValidate('EditView', 'weight', 'decimal', false,'{/literal}{sugar_translate label='LBL_WEIGHT' module='ProductTemplates' for_js=true}{literal}' );
addToValidate('EditView', 'qty_in_stock', 'int', false,'{/literal}{sugar_translate label='LBL_QUANTITY' module='ProductTemplates' for_js=true}{literal}' );
addToValidate('EditView', 'description', 'text', false,'{/literal}{sugar_translate label='LBL_DESCRIPTION' module='ProductTemplates' for_js=true}{literal}' );
addToValidate('EditView', 'support_name', 'varchar', false,'{/literal}{sugar_translate label='LBL_SUPPORT_NAME' module='ProductTemplates' for_js=true}{literal}' );
addToValidate('EditView', 'support_description', 'varchar', false,'{/literal}{sugar_translate label='LBL_SUPPORT_DESCRIPTION' module='ProductTemplates' for_js=true}{literal}' );
addToValidate('EditView', 'support_contact', 'varchar', false,'{/literal}{sugar_translate label='LBL_SUPPORT_CONTACT' module='ProductTemplates' for_js=true}{literal}' );
addToValidate('EditView', 'support_term', 'enum', false,'{/literal}{sugar_translate label='LBL_SUPPORT_TERM' module='ProductTemplates' for_js=true}{literal}' );
addToValidate('EditView', 'pricing_formula', 'varchar', false,'{/literal}{sugar_translate label='LBL_PRICING_FORMULA' module='ProductTemplates' for_js=true}{literal}' );
addToValidate('EditView', 'pricing_factor', 'decimal', false,'{/literal}{sugar_translate label='LBL_PRICING_FACTOR' module='ProductTemplates' for_js=true}{literal}' );
addToValidate('EditView', 'account_name', 'relate', false,'{/literal}{sugar_translate label='LBL_ACCOUNT_NAME' module='ProductTemplates' for_js=true}{literal}' );
addToValidateBinaryDependency('EditView', 'assigned_user_name', 'alpha', false,'{/literal}{sugar_translate label='ERR_SQS_NO_MATCH_FIELD' module='ProductTemplates' for_js=true}{literal}: {/literal}{sugar_translate label='LBL_ASSIGNED_TO' module='ProductTemplates' for_js=true}{literal}', 'assigned_user_id' );
addToValidateBinaryDependency('EditView', 'category_name', 'alpha', false,'{/literal}{sugar_translate label='ERR_SQS_NO_MATCH_FIELD' module='ProductTemplates' for_js=true}{literal}: {/literal}{sugar_translate label='LBL_CATEGORY_NAME' module='ProductTemplates' for_js=true}{literal}', 'category_id' );
</script><script language="javascript">if(typeof sqs_objects == 'undefined'){var sqs_objects = new Array;}sqs_objects['EditView_category_name']={"form":"EditView","method":"query","modules":["ProductCategories"],"group":"or","field_list":["name","id"],"populate_list":["category_name","category_id"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"No Match"};</script><script type=text/javascript>
SUGAR.forms.AssignmentHandler.registerView('EditView');
</script>{/literal}
