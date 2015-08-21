

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
{if !empty($smarty.request.return_action) && ($smarty.request.return_action == "DetailView" && !empty($smarty.request.return_id))}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="window.location.href='index.php?action=DetailView&module={$smarty.request.return_module}&record={$smarty.request.return_id}'; return false;" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" type="button" id="CANCEL_HEADER"> {elseif !empty($smarty.request.return_action) && ($smarty.request.return_action == "DetailView" && !empty($fields.id.value))}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="window.location.href='index.php?action=DetailView&module={$smarty.request.return_module}&record={$fields.id.value}'; return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL_HEADER"> {elseif empty($smarty.request.return_action) || empty($smarty.request.return_id) && !empty($fields.id.value)}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="window.location.href='index.php?action=index&module=Quotes'; return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL_HEADER"> {else}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="window.location.href='index.php?action=index&module={$smarty.request.return_module}&record={$smarty.request.return_id}'; return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL_HEADER"> {/if}
{if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=Quotes", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="submit" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}
</td>
<td align='right'>
{$PAGINATION}
</td>
</tr>
</table>{sugar_include include=$includes}
<div id="EditView_tabs"
>
<div >
<div id="LBL_QUOTE_INFORMATION">
{counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}
<table width="100%" border="0" cellspacing="1" cellpadding="0"  class="{$def.templateMeta.panelClass|default:'edit view'}">
<tr>
<th align="left" colspan="8">
<h4>{sugar_translate label='LBL_QUOTE_INFORMATION' module='Quotes'}</h4>
</th>
</tr>
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>
{if $fields.name.acl > 1 || ($showDetailData && $fields.name.acl > 0)}
<td valign="top" id='name_label' width='12.5%' scope="row">
{capture name="label" assign="label"}{sugar_translate label='LBL_QUOTE_NAME' module='Quotes'}{/capture}
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
{if $fields.opportunity_name.acl > 1 || ($showDetailData && $fields.opportunity_name.acl > 0)}
<td valign="top" id='opportunity_name_label' width='12.5%' scope="row">
{capture name="label" assign="label"}{sugar_translate label='LBL_OPPORTUNITY_NAME' module='Quotes'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}
<td valign="top" width='37.5%' >
{if $fields.opportunity_name.acl > 1}
{counter name="panelFieldCount"}

<input type="text" name="{$fields.opportunity_name.name}" class="sqsEnabled" tabindex="101" id="{$fields.opportunity_name.name}" size="" value="{$fields.opportunity_name.value}" title='' autocomplete="off"  >
<input type="hidden" name="{$fields.opportunity_name.id_name}" 
id="{$fields.opportunity_name.id_name}" 
value="{$fields.opportunity_id.value}">
<span class="id-ff multiple">
<button type="button" name="btn_{$fields.opportunity_name.name}" id="btn_{$fields.opportunity_name.name}" tabindex="101" title="{$APP.LBL_SELECT_BUTTON_TITLE}" accessKey="{$APP.LBL_SELECT_BUTTON_KEY}" class="button firstChild" value="{$APP.LBL_SELECT_BUTTON_LABEL}" 
onclick='open_popup(
"{$fields.opportunity_name.module}", 
600, 
400, 
"", 
true, 
false, 
{literal}{"call_back_function":"set_return","form_name":"EditView","field_to_name_array":{"id":"opportunity_id","name":"opportunity_name"}}{/literal}, 
"single", 
true
);' ><img src="{sugar_getimagepath file="id-ff-select.png"}"></button><button type="button" name="btn_clr_{$fields.opportunity_name.name}" id="btn_clr_{$fields.opportunity_name.name}" tabindex="101" title="{$APP.LBL_CLEAR_BUTTON_TITLE}" accessKey="{$APP.LBL_CLEAR_BUTTON_KEY}" class="button lastChild" 
onclick="this.form.{$fields.opportunity_name.name}.value = ''; this.form.{$fields.opportunity_name.id_name}.value = '';" 
value="{$APP.LBL_CLEAR_BUTTON_LABEL}" ><img src="{sugar_getimagepath file="id-ff-clear.png"}"></button>
</span>
<script type="text/javascript">
<!--
if(typeof QSProcessedFieldsArray != 'undefined') 
	QSProcessedFieldsArray["{$form_name}_{$fields.opportunity_name.name}"] = false;
	

enableQS(false);
-->	
</script>
{else}
{counter name="panelFieldCount"}

{if !empty($fields.opportunity_id.value)}<a href="index.php?module=Opportunities&action=DetailView&record={$fields.opportunity_id.value}">{/if}
<span id="opportunity_id" class="sugar_field">{$fields.opportunity_name.value}</span>
{if !empty($fields.opportunity_id.value)}</a>{/if}
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
{if $fields.quote_num.acl > 1 || ($showDetailData && $fields.quote_num.acl > 0)}
<td valign="top" id='quote_num_label' width='12.5%' scope="row">
{capture name="label" assign="label"}{sugar_translate label='LBL_QUOTE_NUM' module='Quotes'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}
<td valign="top" width='37.5%' >
{if $fields.quote_num.acl > 1}
{counter name="panelFieldCount"}

{if strlen($fields.quote_num.value) <= 0}
{assign var="value" value=$fields.quote_num.default_value }
{else}
{assign var="value" value=$fields.quote_num.value }
{/if} 
<span class="sugar_field" id="{$fields.quote_num.name}">{$fields.quote_num.value}</span>
{else}
{counter name="panelFieldCount"}

{if strlen($fields.quote_num.value) <= 0}
{assign var="value" value=$fields.quote_num.default_value }
{else}
{assign var="value" value=$fields.quote_num.value }
{/if} 
<span class="sugar_field" id="{$fields.quote_num.name}">{$fields.quote_num.value}</span>
</td>
{/if}
{else}
<td></td><td></td>
{/if}
{if $fields.quote_stage.acl > 1 || ($showDetailData && $fields.quote_stage.acl > 0)}
<td valign="top" id='quote_stage_label' width='12.5%' scope="row">
{capture name="label" assign="label"}{sugar_translate label='LBL_QUOTE_STAGE' module='Quotes'}{/capture}
{$label|strip_semicolon}:
<span class="required">*</span>
</td>
{counter name="fieldsUsed"}
<td valign="top" width='37.5%' >
{if $fields.quote_stage.acl > 1}
{counter name="panelFieldCount"}

<select name="{$fields.quote_stage.name}" 
id="{$fields.quote_stage.name}" 
title='' tabindex="103"  
>
{if isset($fields.quote_stage.value) && $fields.quote_stage.value != ''}
{html_options options=$fields.quote_stage.options selected=$fields.quote_stage.value}
{else}
{html_options options=$fields.quote_stage.options selected=$fields.quote_stage.default}
{/if}
</select>
{else}
{counter name="panelFieldCount"}


{if is_string($fields.quote_stage.options)}
<input type="hidden" class="sugar_field" id="{$fields.quote_stage.name}" value="{ $fields.quote_stage.options }">
{ $fields.quote_stage.options }
{else}
<input type="hidden" class="sugar_field" id="{$fields.quote_stage.name}" value="{ $fields.quote_stage.value }">
{ $fields.quote_stage.options[$fields.quote_stage.value]}
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
{if $fields.purchase_order_num.acl > 1 || ($showDetailData && $fields.purchase_order_num.acl > 0)}
<td valign="top" id='purchase_order_num_label' width='12.5%' scope="row">
{capture name="label" assign="label"}{sugar_translate label='LBL_PURCHASE_ORDER_NUM' module='Quotes'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}
<td valign="top" width='37.5%' >
{if $fields.purchase_order_num.acl > 1}
{counter name="panelFieldCount"}

{if strlen($fields.purchase_order_num.value) <= 0}
{assign var="value" value=$fields.purchase_order_num.default_value }
{else}
{assign var="value" value=$fields.purchase_order_num.value }
{/if}  
<input type='text' name='{$fields.purchase_order_num.name}' 
id='{$fields.purchase_order_num.name}' size='30' 
maxlength='50' 
value='{$value}' title='' tabindex='104' > 
{else}
{counter name="panelFieldCount"}

{if strlen($fields.purchase_order_num.value) <= 0}
{assign var="value" value=$fields.purchase_order_num.default_value }
{else}
{assign var="value" value=$fields.purchase_order_num.value }
{/if} 
<span class="sugar_field" id="{$fields.purchase_order_num.name}">{$fields.purchase_order_num.value}</span>
</td>
{/if}
{else}
<td></td><td></td>
{/if}
{if $fields.date_quote_expected_closed.acl > 1 || ($showDetailData && $fields.date_quote_expected_closed.acl > 0)}
<td valign="top" id='date_quote_expected_closed_label' width='12.5%' scope="row">
{capture name="label" assign="label"}{sugar_translate label='LBL_DATE_QUOTE_EXPECTED_CLOSED' module='Quotes'}{/capture}
{$label|strip_semicolon}:
<span class="required">*</span>
</td>
{counter name="fieldsUsed"}
<td valign="top" width='37.5%' >
{if $fields.date_quote_expected_closed.acl > 1}
{counter name="panelFieldCount"}

<span class="dateTime">
{assign var=date_value value=$fields.date_quote_expected_closed.value }
<input class="date_input" autocomplete="off" type="text" name="{$fields.date_quote_expected_closed.name}" id="{$fields.date_quote_expected_closed.name}" value="{$date_value}" title=''  tabindex='105' size="11" maxlength="10" >
<img border="0" src="{sugar_getimagepath file='jscalendar.gif'}" alt="{$APP.LBL_ENTER_DATE}" id="{$fields.date_quote_expected_closed.name}_trigger" align="absmiddle" />
</span>
<script type="text/javascript">
Calendar.setup ({ldelim}
inputField : "{$fields.date_quote_expected_closed.name}",
ifFormat : "{$CALENDAR_FORMAT}",
daFormat : "{$CALENDAR_FORMAT}",
button : "{$fields.date_quote_expected_closed.name}_trigger",
singleClick : true,
dateStr : "{$date_value}",
step : 1,
weekNumbers:false
{rdelim}
);
</script>
{else}
{counter name="panelFieldCount"}

{if strlen($fields.date_quote_expected_closed.value) <= 0}
{assign var="value" value=$fields.date_quote_expected_closed.default_value }
{else}
{assign var="value" value=$fields.date_quote_expected_closed.value }
{/if} 
<span class="sugar_field" id="{$fields.date_quote_expected_closed.name}">{$fields.date_quote_expected_closed.value}</span>
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
{if $fields.payment_terms.acl > 1 || ($showDetailData && $fields.payment_terms.acl > 0)}
<td valign="top" id='payment_terms_label' width='12.5%' scope="row">
{capture name="label" assign="label"}{sugar_translate label='LBL_PAYMENT_TERMS' module='Quotes'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}
<td valign="top" width='37.5%' >
{if $fields.payment_terms.acl > 1}
{counter name="panelFieldCount"}

<select name="{$fields.payment_terms.name}" 
id="{$fields.payment_terms.name}" 
title='' tabindex="106"  
>
{if isset($fields.payment_terms.value) && $fields.payment_terms.value != ''}
{html_options options=$fields.payment_terms.options selected=$fields.payment_terms.value}
{else}
{html_options options=$fields.payment_terms.options selected=$fields.payment_terms.default}
{/if}
</select>
{else}
{counter name="panelFieldCount"}


{if is_string($fields.payment_terms.options)}
<input type="hidden" class="sugar_field" id="{$fields.payment_terms.name}" value="{ $fields.payment_terms.options }">
{ $fields.payment_terms.options }
{else}
<input type="hidden" class="sugar_field" id="{$fields.payment_terms.name}" value="{ $fields.payment_terms.value }">
{ $fields.payment_terms.options[$fields.payment_terms.value]}
{/if}
</td>
{/if}
{else}
<td></td><td></td>
{/if}
{if $fields.original_po_date.acl > 1 || ($showDetailData && $fields.original_po_date.acl > 0)}
<td valign="top" id='original_po_date_label' width='12.5%' scope="row">
{capture name="label" assign="label"}{sugar_translate label='LBL_ORIGINAL_PO_DATE' module='Quotes'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}
<td valign="top" width='37.5%' >
{if $fields.original_po_date.acl > 1}
{counter name="panelFieldCount"}

<span class="dateTime">
{assign var=date_value value=$fields.original_po_date.value }
<input class="date_input" autocomplete="off" type="text" name="{$fields.original_po_date.name}" id="{$fields.original_po_date.name}" value="{$date_value}" title=''  tabindex='107' size="11" maxlength="10" >
<img border="0" src="{sugar_getimagepath file='jscalendar.gif'}" alt="{$APP.LBL_ENTER_DATE}" id="{$fields.original_po_date.name}_trigger" align="absmiddle" />
</span>
<script type="text/javascript">
Calendar.setup ({ldelim}
inputField : "{$fields.original_po_date.name}",
ifFormat : "{$CALENDAR_FORMAT}",
daFormat : "{$CALENDAR_FORMAT}",
button : "{$fields.original_po_date.name}_trigger",
singleClick : true,
dateStr : "{$date_value}",
step : 1,
weekNumbers:false
{rdelim}
);
</script>
{else}
{counter name="panelFieldCount"}

{if strlen($fields.original_po_date.value) <= 0}
{assign var="value" value=$fields.original_po_date.default_value }
{else}
{assign var="value" value=$fields.original_po_date.value }
{/if} 
<span class="sugar_field" id="{$fields.original_po_date.name}">{$fields.original_po_date.value}</span>
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
<script>document.getElementById("LBL_QUOTE_INFORMATION").style.display='none';</script>
{/if}
<div id="LBL_BILL_TO">
{counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}
<table width="100%" border="0" cellspacing="1" cellpadding="0"  class="{$def.templateMeta.panelClass|default:'edit view'}">
<tr>
<th align="left" colspan="8">
<h4>{sugar_translate label='LBL_BILL_TO' module='Quotes'}</h4>
</th>
</tr>
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>
{if $fields.billing_account_name.acl > 1 || ($showDetailData && $fields.billing_account_name.acl > 0)}
<td valign="top" id='billing_account_name_label' width='12.5%' scope="row">
{capture name="label" assign="label"}{sugar_translate label='LBL_BILLING_ACCOUNT_NAME' module='Quotes'}{/capture}
{$label|strip_semicolon}:
<span class="required">*</span>
</td>
{counter name="fieldsUsed"}
<td valign="top" width='37.5%' >
{if $fields.billing_account_name.acl > 1}
{counter name="panelFieldCount"}

<input type="text" name="{$fields.billing_account_name.name}" class="sqsEnabled" tabindex="108" id="{$fields.billing_account_name.name}" size="" value="{$fields.billing_account_name.value}" title='' autocomplete="off"  >
<input type="hidden" name="{$fields.billing_account_name.id_name}" 
id="{$fields.billing_account_name.id_name}" 
value="{$fields.billing_account_id.value}">
<span class="id-ff multiple">
<button type="button" name="btn_{$fields.billing_account_name.name}" id="btn_{$fields.billing_account_name.name}" tabindex="108" title="{$APP.LBL_SELECT_BUTTON_TITLE}" accessKey="{$APP.LBL_SELECT_BUTTON_KEY}" class="button firstChild" value="{$APP.LBL_SELECT_BUTTON_LABEL}" 
onclick='open_popup(
"{$fields.billing_account_name.module}", 
600, 
400, 
"", 
true, 
false, 
{literal}{"call_back_function":"set_billing_return","form_name":"EditView","field_to_name_array":{"id":"billing_account_id","name":"billing_account_name","billing_address_street":"billing_address_street","billing_address_city":"billing_address_city","billing_address_state":"billing_address_state","billing_address_postalcode":"billing_address_postalcode","billing_address_country":"billing_address_country","shipping_address_street":"shipping_address_street","shipping_address_city":"shipping_address_city","shipping_address_state":"shipping_address_state","shipping_address_postalcode":"shipping_address_postalcode","shipping_address_country":"shipping_address_country"}}{/literal}, 
"single", 
true
);' ><img src="{sugar_getimagepath file="id-ff-select.png"}"></button><button type="button" name="btn_clr_{$fields.billing_account_name.name}" id="btn_clr_{$fields.billing_account_name.name}" tabindex="108" title="{$APP.LBL_CLEAR_BUTTON_TITLE}" accessKey="{$APP.LBL_CLEAR_BUTTON_KEY}" class="button lastChild" 
onclick="this.form.{$fields.billing_account_name.name}.value = ''; this.form.{$fields.billing_account_name.id_name}.value = '';" 
value="{$APP.LBL_CLEAR_BUTTON_LABEL}" ><img src="{sugar_getimagepath file="id-ff-clear.png"}"></button>
</span>
<script type="text/javascript">
<!--
if(typeof QSProcessedFieldsArray != 'undefined') 
	QSProcessedFieldsArray["{$form_name}_{$fields.billing_account_name.name}"] = false;
	

enableQS(false);
-->	
</script>
{else}
{counter name="panelFieldCount"}

{if !empty($fields.billing_account_id.value)}<a href="index.php?module=Accounts&action=DetailView&record={$fields.billing_account_id.value}">{/if}
<span id="billing_account_id" class="sugar_field">{$fields.billing_account_name.value}</span>
{if !empty($fields.billing_account_id.value)}</a>{/if}
</td>
{/if}
{else}
<td></td><td></td>
{/if}
{if $fields.shipping_account_name.acl > 1 || ($showDetailData && $fields.shipping_account_name.acl > 0)}
<td valign="top" id='shipping_account_name_label' width='12.5%' scope="row">
{capture name="label" assign="label"}{sugar_translate label='LBL_SHIPPING_ACCOUNT_NAME' module='Quotes'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}
<td valign="top" width='37.5%' >
{if $fields.shipping_account_name.acl > 1}
{counter name="panelFieldCount"}

<input type="text" name="{$fields.shipping_account_name.name}" class="sqsEnabled" tabindex="109" id="{$fields.shipping_account_name.name}" size="" value="{$fields.shipping_account_name.value}" title='' autocomplete="off"  >
<input type="hidden" name="{$fields.shipping_account_name.id_name}" 
id="{$fields.shipping_account_name.id_name}" 
value="{$fields.shipping_account_id.value}">
<span class="id-ff multiple">
<button type="button" name="btn_{$fields.shipping_account_name.name}" id="btn_{$fields.shipping_account_name.name}" tabindex="109" title="{$APP.LBL_SELECT_BUTTON_TITLE}" accessKey="{$APP.LBL_SELECT_BUTTON_KEY}" class="button firstChild" value="{$APP.LBL_SELECT_BUTTON_LABEL}" 
onclick='open_popup(
"{$fields.shipping_account_name.module}", 
600, 
400, 
"", 
true, 
false, 
{literal}{"call_back_function":"set_shipping_return","form_name":"EditView","field_to_name_array":{"id":"shipping_account_id","name":"shipping_account_name","shipping_address_street":"shipping_address_street","shipping_address_city":"shipping_address_city","shipping_address_state":"shipping_address_state","shipping_address_postalcode":"shipping_address_postalcode","shipping_address_country":"shipping_address_country"}}{/literal}, 
"single", 
true
);' ><img src="{sugar_getimagepath file="id-ff-select.png"}"></button><button type="button" name="btn_clr_{$fields.shipping_account_name.name}" id="btn_clr_{$fields.shipping_account_name.name}" tabindex="109" title="{$APP.LBL_CLEAR_BUTTON_TITLE}" accessKey="{$APP.LBL_CLEAR_BUTTON_KEY}" class="button lastChild" 
onclick="this.form.{$fields.shipping_account_name.name}.value = ''; this.form.{$fields.shipping_account_name.id_name}.value = '';" 
value="{$APP.LBL_CLEAR_BUTTON_LABEL}" ><img src="{sugar_getimagepath file="id-ff-clear.png"}"></button>
</span>
<script type="text/javascript">
<!--
if(typeof QSProcessedFieldsArray != 'undefined') 
	QSProcessedFieldsArray["{$form_name}_{$fields.shipping_account_name.name}"] = false;
	

enableQS(false);
-->	
</script>
{else}
{counter name="panelFieldCount"}

{if !empty($fields.shipping_account_id.value)}<a href="index.php?module=Accounts&action=DetailView&record={$fields.shipping_account_id.value}">{/if}
<span id="shipping_account_id" class="sugar_field">{$fields.shipping_account_name.value}</span>
{if !empty($fields.shipping_account_id.value)}</a>{/if}
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
{if $fields.billing_contact_name.acl > 1 || ($showDetailData && $fields.billing_contact_name.acl > 0)}
<td valign="top" id='billing_contact_name_label' width='12.5%' scope="row">
{capture name="label" assign="label"}{sugar_translate label='LBL_BILLING_CONTACT_NAME' module='Quotes'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}
<td valign="top" width='37.5%' >
{if $fields.billing_contact_name.acl > 1}
{counter name="panelFieldCount"}

<input type="text" name="{$fields.billing_contact_name.name}" class="sqsEnabled" tabindex="110" id="{$fields.billing_contact_name.name}" size="" value="{$fields.billing_contact_name.value}" title='' autocomplete="off"  >
<input type="hidden" name="{$fields.billing_contact_name.id_name}" 
id="{$fields.billing_contact_name.id_name}" 
value="{$fields.billing_contact_id.value}">
<span class="id-ff multiple">
<button type="button" name="btn_{$fields.billing_contact_name.name}" id="btn_{$fields.billing_contact_name.name}" tabindex="110" title="{$APP.LBL_SELECT_BUTTON_TITLE}" accessKey="{$APP.LBL_SELECT_BUTTON_KEY}" class="button firstChild" value="{$APP.LBL_SELECT_BUTTON_LABEL}" 
onclick='open_popup(
"{$fields.billing_contact_name.module}", 
600, 
400, 
"&account_id_advanced="+this.form.{$fields.billing_account_name.id_name}.value+"&account_name_advanced="+this.form.{$fields.billing_account_name.name}.value+"", 
true, 
false, 
{literal}{"call_back_function":"set_return","form_name":"EditView","field_to_name_array":{"id":"billing_contact_id","last_name":"billing_contact_name"}}{/literal}, 
"single", 
true
);' ><img src="{sugar_getimagepath file="id-ff-select.png"}"></button><button type="button" name="btn_clr_{$fields.billing_contact_name.name}" id="btn_clr_{$fields.billing_contact_name.name}" tabindex="110" title="{$APP.LBL_CLEAR_BUTTON_TITLE}" accessKey="{$APP.LBL_CLEAR_BUTTON_KEY}" class="button lastChild" 
onclick="this.form.{$fields.billing_contact_name.name}.value = ''; this.form.{$fields.billing_contact_name.id_name}.value = '';" 
value="{$APP.LBL_CLEAR_BUTTON_LABEL}" ><img src="{sugar_getimagepath file="id-ff-clear.png"}"></button>
</span>
<script type="text/javascript">
<!--
if(typeof QSProcessedFieldsArray != 'undefined') 
	QSProcessedFieldsArray["{$form_name}_{$fields.billing_contact_name.name}"] = false;
	

enableQS(false);
-->	
</script>
{else}
{counter name="panelFieldCount"}

{if !empty($fields.billing_contact_id.value)}<a href="index.php?module=Contacts&action=DetailView&record={$fields.billing_contact_id.value}">{/if}
<span id="billing_contact_id" class="sugar_field">{$fields.billing_contact_name.value}</span>
{if !empty($fields.billing_contact_id.value)}</a>{/if}
</td>
{/if}
{else}
<td></td><td></td>
{/if}
{if $fields.shipping_contact_name.acl > 1 || ($showDetailData && $fields.shipping_contact_name.acl > 0)}
<td valign="top" id='shipping_contact_name_label' width='12.5%' scope="row">
{capture name="label" assign="label"}{sugar_translate label='LBL_SHIPPING_CONTACT_NAME' module='Quotes'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}
<td valign="top" width='37.5%' >
{if $fields.shipping_contact_name.acl > 1}
{counter name="panelFieldCount"}

<input type="text" name="{$fields.shipping_contact_name.name}" class="sqsEnabled" tabindex="111" id="{$fields.shipping_contact_name.name}" size="" value="{$fields.shipping_contact_name.value}" title='' autocomplete="off"  >
<input type="hidden" name="{$fields.shipping_contact_name.id_name}" 
id="{$fields.shipping_contact_name.id_name}" 
value="{$fields.shipping_contact_id.value}">
<span class="id-ff multiple">
<button type="button" name="btn_{$fields.shipping_contact_name.name}" id="btn_{$fields.shipping_contact_name.name}" tabindex="111" title="{$APP.LBL_SELECT_BUTTON_TITLE}" accessKey="{$APP.LBL_SELECT_BUTTON_KEY}" class="button firstChild" value="{$APP.LBL_SELECT_BUTTON_LABEL}" 
onclick='open_popup(
"{$fields.shipping_contact_name.module}", 
600, 
400, 
"&account_id_advanced="+this.form.{$fields.shipping_account_name.id_name}.value+"&account_name_advanced="+this.form.{$fields.shipping_account_name.name}.value+"", 
true, 
false, 
{literal}{"call_back_function":"set_return","form_name":"EditView","field_to_name_array":{"id":"shipping_contact_id","last_name":"shipping_contact_name"}}{/literal}, 
"single", 
true
);' ><img src="{sugar_getimagepath file="id-ff-select.png"}"></button><button type="button" name="btn_clr_{$fields.shipping_contact_name.name}" id="btn_clr_{$fields.shipping_contact_name.name}" tabindex="111" title="{$APP.LBL_CLEAR_BUTTON_TITLE}" accessKey="{$APP.LBL_CLEAR_BUTTON_KEY}" class="button lastChild" 
onclick="this.form.{$fields.shipping_contact_name.name}.value = ''; this.form.{$fields.shipping_contact_name.id_name}.value = '';" 
value="{$APP.LBL_CLEAR_BUTTON_LABEL}" ><img src="{sugar_getimagepath file="id-ff-clear.png"}"></button>
</span>
<script type="text/javascript">
<!--
if(typeof QSProcessedFieldsArray != 'undefined') 
	QSProcessedFieldsArray["{$form_name}_{$fields.shipping_contact_name.name}"] = false;
	

enableQS(false);
-->	
</script>
{else}
{counter name="panelFieldCount"}

{if !empty($fields.shipping_contact_id.value)}<a href="index.php?module=Contacts&action=DetailView&record={$fields.shipping_contact_id.value}">{/if}
<span id="shipping_contact_id" class="sugar_field">{$fields.shipping_contact_name.value}</span>
{if !empty($fields.shipping_contact_id.value)}</a>{/if}
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
<script>document.getElementById("LBL_BILL_TO").style.display='none';</script>
{/if}
<div id="LBL_ADDRESS_INFORMATION">
{counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}
<table width="100%" border="0" cellspacing="1" cellpadding="0"  class="{$def.templateMeta.panelClass|default:'edit view'}">
<tr>
<th align="left" colspan="8">
<h4>{sugar_translate label='LBL_ADDRESS_INFORMATION' module='Quotes'}</h4>
</th>
</tr>
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>
{if $fields.billing_address_street.acl > 1 || ($showDetailData && $fields.billing_address_street.acl > 0)}
{counter name="fieldsUsed"}
<td valign="top" width='37.5%' colspan='2'>
{if $fields.billing_address_street.acl > 1}
{counter name="panelFieldCount"}

<script type="text/javascript" src='{sugar_getjspath file="include/SugarFields/Fields/Address/SugarFieldAddress.js"}'></script>
<fieldset id='BILLING_address_fieldset'>
<legend>{sugar_translate label='LBL_BILLING_ADDRESS' module=''}</legend>
<table border="0" cellspacing="1" cellpadding="0" class="edit" width="100%">
<tr>
<td valign="top" id="billing_address_street_label" width='25%' scope='row' >
{sugar_translate label='LBL_STREET' module=''}:
{if $fields.billing_address_street.required || false}
<span class="required">{$APP.LBL_REQUIRED_SYMBOL}</span>
{/if}
</td>
<td width="*">
<textarea id="billing_address_street" name="billing_address_street" maxlength="150" rows="2" cols="30" tabindex="112">{$fields.billing_address_street.value}</textarea>
</td>
</tr>
<tr>
<td id="billing_address_city_label" width='%' scope='row' >
{sugar_translate label='LBL_CITY' module=''}:
{if $fields.billing_address_city.required || false}
<span class="required">{$APP.LBL_REQUIRED_SYMBOL}</span>
{/if}
</td>
<td>
<input type="text" name="billing_address_city" id="billing_address_city" size="30" maxlength='150' value='{$fields.billing_address_city.value}' tabindex="112">
</td>
</tr>
<tr>
<td id="billing_address_state_label" width='%' scope='row' >
{sugar_translate label='LBL_STATE' module=''}:
{if $fields.billing_address_state.required || false}
<span class="required">{$APP.LBL_REQUIRED_SYMBOL}</span>
{/if}
</td>
<td>
<input type="text" name="billing_address_state" id="billing_address_state" size="30" maxlength='150' value='{$fields.billing_address_state.value}' tabindex="112">
</td>
</tr>
<tr>
<td id="billing_address_postalcode_label" width='%' scope='row' >
{sugar_translate label='LBL_POSTAL_CODE' module=''}:
{if $fields.billing_address_postalcode.required || false}
<span class="required">{$APP.LBL_REQUIRED_SYMBOL}</span>
{/if}
</td>
<td>
<input type="text" name="billing_address_postalcode" id="billing_address_postalcode" size="30" maxlength='150' value='{$fields.billing_address_postalcode.value}' tabindex="112">
</td>
</tr>
<tr>
<td id="billing_address_country_label" width='%' scope='row' >
{sugar_translate label='LBL_COUNTRY' module=''}:
{if $fields.billing_address_country.required || false}
<span class="required">{$APP.LBL_REQUIRED_SYMBOL}</span>
{/if}
</td>
<td>
<input type="text" name="billing_address_country" id="billing_address_country" size="30" maxlength='150' value='{$fields.billing_address_country.value}' tabindex="112">
</td>
</tr>
<tr>
<td colspan='2' NOWRAP>&nbsp;</td>
</tr>
</table>
</fieldset>
<script type="text/javascript">
    var fromKey = '';
    var toKey = 'billing';
    var checkbox = toKey + "_checkbox";
    var obj = new TestCheckboxReady(checkbox);
</script>
{else}
{counter name="panelFieldCount"}

<table border='0' cellpadding='0' cellspacing='0' width='100%'>
<tr>
<td width='99%'>
<input type="hidden" class="sugar_field" id="billing_address_street" value="{$fields.billing_address_street.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br}">
<input type="hidden" class="sugar_field" id="billing_address_city" value="{$fields.billing_address_city.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br}">
<input type="hidden" class="sugar_field" id="billing_address_country" value="{$fields.billing_address_country.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br}">
<input type="hidden" class="sugar_field" id="billing_address_postalcode" value="{$fields.billing_address_postalcode.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br}">
{$fields.billing_address_street.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br}<br>
{$fields.billing_address_city.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br} {$fields.billing_address_state.value|escape:'htmlentitydecode'|strip_tags|url2html|nl2br}&nbsp;&nbsp;{$fields.billing_address_postalcode.value|escape:'htmlentitydecode'|strip_tags|url2html|nl2br}<br>
{$fields.billing_address_country.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br}
</td>
<td class='dataField' width='1%'>
{$custom_code_billing}
</td>
</tr>
</table>
</td>
{/if}
{else}
<td></td><td></td>
{/if}
{if $fields.shipping_address_street.acl > 1 || ($showDetailData && $fields.shipping_address_street.acl > 0)}
{counter name="fieldsUsed"}
<td valign="top" width='37.5%' colspan='2'>
{if $fields.shipping_address_street.acl > 1}
{counter name="panelFieldCount"}

<script type="text/javascript" src='{sugar_getjspath file="include/SugarFields/Fields/Address/SugarFieldAddress.js"}'></script>
<fieldset id='SHIPPING_address_fieldset'>
<legend>{sugar_translate label='LBL_SHIPPING_ADDRESS' module=''}</legend>
<table border="0" cellspacing="1" cellpadding="0" class="edit" width="100%">
<tr>
<td valign="top" id="shipping_address_street_label" width='25%' scope='row' >
{sugar_translate label='LBL_STREET' module=''}:
{if $fields.shipping_address_street.required || false}
<span class="required">{$APP.LBL_REQUIRED_SYMBOL}</span>
{/if}
</td>
<td width="*">
<textarea id="shipping_address_street" name="shipping_address_street" maxlength="150" rows="2" cols="30" tabindex="113">{$fields.shipping_address_street.value}</textarea>
</td>
</tr>
<tr>
<td id="shipping_address_city_label" width='%' scope='row' >
{sugar_translate label='LBL_CITY' module=''}:
{if $fields.shipping_address_city.required || false}
<span class="required">{$APP.LBL_REQUIRED_SYMBOL}</span>
{/if}
</td>
<td>
<input type="text" name="shipping_address_city" id="shipping_address_city" size="30" maxlength='150' value='{$fields.shipping_address_city.value}' tabindex="113">
</td>
</tr>
<tr>
<td id="shipping_address_state_label" width='%' scope='row' >
{sugar_translate label='LBL_STATE' module=''}:
{if $fields.shipping_address_state.required || false}
<span class="required">{$APP.LBL_REQUIRED_SYMBOL}</span>
{/if}
</td>
<td>
<input type="text" name="shipping_address_state" id="shipping_address_state" size="30" maxlength='150' value='{$fields.shipping_address_state.value}' tabindex="113">
</td>
</tr>
<tr>
<td id="shipping_address_postalcode_label" width='%' scope='row' >
{sugar_translate label='LBL_POSTAL_CODE' module=''}:
{if $fields.shipping_address_postalcode.required || false}
<span class="required">{$APP.LBL_REQUIRED_SYMBOL}</span>
{/if}
</td>
<td>
<input type="text" name="shipping_address_postalcode" id="shipping_address_postalcode" size="30" maxlength='150' value='{$fields.shipping_address_postalcode.value}' tabindex="113">
</td>
</tr>
<tr>
<td id="shipping_address_country_label" width='%' scope='row' >
{sugar_translate label='LBL_COUNTRY' module=''}:
{if $fields.shipping_address_country.required || false}
<span class="required">{$APP.LBL_REQUIRED_SYMBOL}</span>
{/if}
</td>
<td>
<input type="text" name="shipping_address_country" id="shipping_address_country" size="30" maxlength='150' value='{$fields.shipping_address_country.value}' tabindex="113">
</td>
</tr>
<tr>
<td scope='row' NOWRAP>
{sugar_translate label='LBL_COPY_ADDRESS_FROM_LEFT' module=''}:
</td>
<td>
<input id="shipping_checkbox" name="shipping_checkbox" type="checkbox" onclick="syncFields('billing', 'shipping');">
</td>
</tr>
</table>
</fieldset>
<script type="text/javascript">
    var fromKey = 'billing';
    var toKey = 'shipping';
    var checkbox = toKey + "_checkbox";
    var obj = new TestCheckboxReady(checkbox);
</script>
{else}
{counter name="panelFieldCount"}

<table border='0' cellpadding='0' cellspacing='0' width='100%'>
<tr>
<td width='99%'>
<input type="hidden" class="sugar_field" id="shipping_address_street" value="{$fields.shipping_address_street.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br}">
<input type="hidden" class="sugar_field" id="shipping_address_city" value="{$fields.shipping_address_city.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br}">
<input type="hidden" class="sugar_field" id="shipping_address_country" value="{$fields.shipping_address_country.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br}">
<input type="hidden" class="sugar_field" id="shipping_address_postalcode" value="{$fields.shipping_address_postalcode.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br}">
{$fields.shipping_address_street.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br}<br>
{$fields.shipping_address_city.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br} {$fields.shipping_address_state.value|escape:'htmlentitydecode'|strip_tags|url2html|nl2br}&nbsp;&nbsp;{$fields.shipping_address_postalcode.value|escape:'htmlentitydecode'|strip_tags|url2html|nl2br}<br>
{$fields.shipping_address_country.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br}
</td>
<td class='dataField' width='1%'>
{$custom_code_shipping}
</td>
</tr>
</table>
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
<script>document.getElementById("LBL_ADDRESS_INFORMATION").style.display='none';</script>
{/if}
<div id="LBL_PANEL_ASSIGNMENT">
{counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}
<table width="100%" border="0" cellspacing="1" cellpadding="0"  class="{$def.templateMeta.panelClass|default:'edit view'}">
<tr>
<th align="left" colspan="8">
<h4>{sugar_translate label='LBL_PANEL_ASSIGNMENT' module='Quotes'}</h4>
</th>
</tr>
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>
{if $fields.assigned_user_name.acl > 1 || ($showDetailData && $fields.assigned_user_name.acl > 0)}
<td valign="top" id='assigned_user_name_label' width='12.5%' scope="row">
{capture name="label" assign="label"}{sugar_translate label='LBL_ASSIGNED_TO_NAME' module='Quotes'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}
<td valign="top" width='37.5%' >
{if $fields.assigned_user_name.acl > 1}
{counter name="panelFieldCount"}

<input type="text" name="{$fields.assigned_user_name.name}" class="sqsEnabled" tabindex="114" id="{$fields.assigned_user_name.name}" size="" value="{$fields.assigned_user_name.value}" title='' autocomplete="off"  >
<input type="hidden" name="{$fields.assigned_user_name.id_name}" 
id="{$fields.assigned_user_name.id_name}" 
value="{$fields.assigned_user_id.value}">
<span class="id-ff multiple">
<button type="button" name="btn_{$fields.assigned_user_name.name}" id="btn_{$fields.assigned_user_name.name}" tabindex="114" title="{$APP.LBL_SELECT_BUTTON_TITLE}" accessKey="{$APP.LBL_SELECT_BUTTON_KEY}" class="button firstChild" value="{$APP.LBL_SELECT_BUTTON_LABEL}" 
onclick='open_popup(
"{$fields.assigned_user_name.module}", 
600, 
400, 
"", 
true, 
false, 
{literal}{"call_back_function":"set_return","form_name":"EditView","field_to_name_array":{"id":"assigned_user_id","user_name":"assigned_user_name"}}{/literal}, 
"single", 
true
);' ><img src="{sugar_getimagepath file="id-ff-select.png"}"></button><button type="button" name="btn_clr_{$fields.assigned_user_name.name}" id="btn_clr_{$fields.assigned_user_name.name}" tabindex="114" title="{$APP.LBL_CLEAR_BUTTON_TITLE}" accessKey="{$APP.LBL_CLEAR_BUTTON_KEY}" class="button lastChild" 
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
{if $fields.team_name.acl > 1 || ($showDetailData && $fields.team_name.acl > 0)}
<td valign="top" id='team_name_label' width='12.5%' scope="row">
{capture name="label" assign="label"}{sugar_translate label='LBL_TEAMS' module='Quotes'}{/capture}
{$label|strip_semicolon}:
<span class="required">*</span>
</td>
{counter name="fieldsUsed"}
<td valign="top" width='37.5%' >
{if $fields.team_name.acl > 1}
{counter name="panelFieldCount"}

{sugarvar_teamset parentFieldArray=fields vardef=$fields.team_name tabindex='115' display='' labelSpan='' fieldSpan='' formName='EditView' tabindex=1 displayType='renderEditView'  }
{else}
{counter name="panelFieldCount"}

{sugarvar_teamset parentFieldArray=fields vardef=$fields.team_name tabindex='115' display='' labelSpan='' fieldSpan='' formName='EditView' tabindex=1 displayType='renderDetailView'  }
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
<script>document.getElementById("LBL_PANEL_ASSIGNMENT").style.display='none';</script>
{/if}
</div></div>

<table width="100%" border="0" cellspacing="0" cellpadding="0" class="edit view">
<tr>
<td>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<th align="left" scope="row" colspan="4" scope="row"><h4>{$MOD.LBL_LINE_ITEM_INFORMATION}</h4></th>
</tr><tr>
<td colspan="4">
<table border='0' width="100%" cellspacing='2' cellpadding='0'>
<tr>
<td width='10%' scope="row">{$MOD.LBL_CURRENCY}</td>
<td width='10%' ><select tabindex='5' name='currency_id' id='currency_id' onchange='ConvertItems(this.options[selectedIndex].value);'>{$CURRENCY}</select></td>
<td width='10%' scope="row">{$MOD.LBL_TAXRATE}</td>
<td width='13%' >
<select tabindex='5' name='taxrate_id' onchange="this.form.taxrate_value.value=get_taxrate(this.form.taxrate_id.options[selectedIndex].value);calculate(document)">{$TAXRATE_OPTIONS}</select>
<input type="hidden" name="taxrate_value" value="{$TAXRATE_VALUE}">
</td>
<td width='13%' scope="row">{$MOD.LBL_SHIPPING_PROVIDER}</td>
<td width='13%' ><select tabindex='5' name='shipper_id'>{$SHIPPER_OPTIONS}</select></td>
<td width='13%' scope="row">{$MOD.LBL_CALC_GRAND}</td>
<td width='13%' ><input tabindex='5' type='checkbox' class='checkbox' name='calc_grand_total' id='calc_grand_total' onClick='toggleDisplay("grand_tally");' {$CALC_GRAND_TOTAL_CHECKED}></td>
<td width='13%' scope="row">{$MOD.LBL_SHOW_LINE_NUMS}</td>
<td width='40%' ><input tabindex='5' type='checkbox' class='checkbox' name='show_line_nums' id='show_line_nums' {$SHOW_LINE_NUMS_CHECKED}></td>
</tr>
</table>
<div id='ie_hack_stage' style='display:none'>
<table name='table_name' id='table_id' >
<tr><td scope="row">{$MOD.LBL_BUNDLE_NAME}</td>
<td >
&nbsp; <input type='text' tabindex='5' size='20' name='name_name' id='name_id' value=''>
</td><td scope="row">{$MOD.LBL_BUNDLE_STAGE}</td>
<td >&nbsp;
<select name='select_name' tabindex='5' id='select_id' onchange='calculate(document);'>
{$QUOTE_STAGE_OPTIONS}
</select>
</td></tr></table>
</div>
<div id='add_tables'>&nbsp;</div>
<div id='grand_tally' style='display:inline'>
<table  border="0" cellspacing="0" cellpadding="0" >
<tr>
<td scope="row"  valign="top" style="text-align: left;">{$MOD.LBL_LIST_GRAND_TOTAL}</td>
</tr>
<tr>
<td scope="row" NOWRAP style="text-align: left;">{$MOD.LBL_SUBTOTAL}</td>
<td scope="row" NOWRAP><div style="text-align: right;" id='grand_sub'>{$SUBTOTAL}</div></td>
</tr>
<tr>
<td scope="row" NOWRAP style="text-align: left;">{$MOD.LBL_DISCOUNT_TOTAL}</td>
<td scope="row" NOWRAP><div style="text-align: right;" id='grand_discount'>{$DISCOUNT}</div></td>
</tr>
<tr>
<td scope="row" NOWRAP style="text-align: left;">{$MOD.LBL_NEW_SUB}</td>
<td scope="row" NOWRAP><div style="text-align: right;" id='grand_new_sub'>{$NEW_SUB}</div></td>
</tr>
<tr>
<td scope="row" NOWRAP style="text-align: left;">{$MOD.LBL_TAX}</td>
<td scope="row" NOWRAP><div style="text-align: right;" id='grand_tax'>{$TAX}</div></td>
</tr>
<tr>
<td scope="row" NOWRAP style="text-align: left;">{$MOD.LBL_SHIPPING}</td>
<td scope="row" NOWRAP><div style="text-align: right;" id='grand_ship'>{$SHIPPING}</div></td>
</tr>
<tr>
<td scope="row" NOWRAP style="text-align: left;">{$MOD.LBL_TOTAL}</td>
<td scope="row" NOWRAP> <div style="text-align: right;" id='grand_total'>{$TOTAL}</div></td>
</tr>
</table>
</div>
<br>
<input type='button' id='add_group' name='add_group' class='button' value='{$MOD.LBL_ADD_GROUP}' onclick='addTable("", "","","0.00")'>
</td>
</tr></table>
</td>
</tr>
</table>
<input type='hidden' id='product_count' name='product_count' value='0'>
<input type="hidden" name="quote_type" value="Quotes">
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="edit view">
<tr><td>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr><th align="left" scope="row" colspan="2" scope="row"><h4>{$MOD.LBL_DESCRIPTION_INFORMATION}</h4></th></tr>
<tr><td width="15%" valign="top" scope="row">{$MOD.LBL_DESCRIPTION}</td><td width="85%" ><textarea name='description' tabindex='7' cols="60" rows="8">{$fields.description.value}</textarea></td></tr>
</table>
</td></tr>
</table>
<script type="text/javascript">
Calendar.setup ({literal} { {/literal}
	inputField : "jscal_field", daFormat : "{$CALENDAR_DATEFORMAT}", ifFormat : "{$CALENDAR_DATEFORMAT}", showsTime : false, button : "jscal_trigger", singleClick : true, step : 1, weekNumbers:false
{literal} } {/literal});

Calendar.setup ({literal} { {/literal}
	inputField : "jscal_field_original_po_date", ifFormat : "{$CALENDAR_DATEFORMAT}", showsTime : false, button : "jscal_trigger_original_po_date", singleClick : true, step : 1, weekNumbers:false
{literal} } {/literal});
</script>
{$TAXRATE_JAVASCRIPT}
{$NO_MATCH_VARIABLE}
{$CURRENCY_JAVASCRIPT}
<script type="text/javascript" src="{sugar_getjspath file='modules/Quotes/quotes.js'}"></script>
<script type="text/javascript" src="{sugar_getjspath file='modules/Quotes/EditView.js'}"></script>
<script type="text/javascript">
{literal}
if(!document.getElementById('calc_grand_total').checked){
	document.getElementById('grand_tally').style.display = 'none';
}
{/literal}

var precision = "{$PRECISION}";
var default_product_status = "{$DEFAULT_PRODUCT_STATUS}";
var invalidAmount = "{$APP.ERR_INVALID_AMOUNT}";
var selectButtonTitle = "{$APP.LBL_SELECT_BUTTON_TITLE}";
var selectButtonKey = "{$APP.LBL_SELECT_BUTTON_KEY}";
var selectButtonValue = "{$APP.LBL_SELECT_BUTTON_LABEL}";
var deleteButtonName = "{$MOD.LBL_REMOVE_ROW}";
var deleteButtonConfirm = "{$MOD.NTC_REMOVE_PRODUCT_CONFIRMATION}";
var deleteGroupConfirm = "{$MOD.NTC_REMOVE_GROUP_CONFIRMATION}";
var deleteButtonValue = "{$MOD.LBL_REMOVE_ROW}";
var addRowName = "{$MOD.LBL_ADD_ROW}";
var addRowValue = "{$MOD.LBL_ADD_ROW}";
var deleteTableName = "{$MOD.LBL_DELETE_GROUP}";
var deleteTableValue = "{$MOD.LBL_DELETE_GROUP}";
var subtotal_string = "{$MOD.LBL_SUBTOTAL}";
var shipping_string = "{$MOD.LBL_SHIPPING}";
var deal_tot_string = "{$MOD.LBL_DISCOUNT_TOTAL}";
var new_sub_string = "{$MOD.LBL_NEW_SUB}";
var total_string = "{$MOD.LBL_TOTAL}";
var tax_string = "{$MOD.LBL_TAX}";
var list_quantity_string = "{$MOD.LBL_LIST_QUANTITY}"
var list_product_name_string = "{$MOD.LBL_LIST_PRODUCT_NAME}"
var list_mf_part_num_string = "{$MOD.LBL_LIST_MANUFACTURER_PART_NUM}"
var list_taxclass_string = "{$MOD.LBL_LIST_TAXCLASS}"
var list_cost_string = "{$MOD.LBL_LIST_COST_PRICE}"
var list_list_string = "{$MOD.LBL_LIST_LIST_PRICE}"
var list_discount_string = "{$MOD.LBL_LIST_DISCOUNT_PRICE}"
var list_deal_tot = "{$MOD.LBL_LIST_DEAL_TOT}"
var check_data = "{$MOD.LBL_CHECK_DATA}"
var addCommentName = "{$MOD.LBL_ADD_COMMENT}";
var addCommentValue = "{$MOD.LBL_ADD_COMMENT}";
var deleteCommentName = "{$MOD.LBL_REMOVE_COMMENT}";
var deleteCommentValue = "{$MOD.LBL_REMOVE_COMMENT}";
var deleteCommentConfirm = "{$MOD.NTC_REMOVE_COMMENT_CONFIRMATION}";

{$ADD_ROWS}
</script>
<script type="text/javascript" language="Javascript">
{$SETUP_SCRIPT}
{literal}
YAHOO.util.Event.onDOMReady(function()
{
    sqs_objects['EditView_billing_account_name']['post_onblur_function'] = 'set_shipping_account_name';
});
{/literal}
</script>
{$CALCULATE_FUNCTION}
{$SAVED_SEARCH_SELECTS}

<div class="buttons">
{if $bean->aclAccess("save")}<input title="{$APP.LBL_SAVE_BUTTON_TITLE}" accessKey="{$APP.LBL_SAVE_BUTTON_KEY}" class="button primary" onclick="{if $isDuplicate}this.form.return_id.value=''; {/if}this.form.action.value='Save'; return check_form('EditView');" type="submit" name="button" value="{$APP.LBL_SAVE_BUTTON_LABEL}" id="SAVE_FOOTER">{/if} 
{if !empty($smarty.request.return_action) && ($smarty.request.return_action == "DetailView" && !empty($smarty.request.return_id))}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="window.location.href='index.php?action=DetailView&module={$smarty.request.return_module}&record={$smarty.request.return_id}'; return false;" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" type="button" id="CANCEL_FOOTER"> {elseif !empty($smarty.request.return_action) && ($smarty.request.return_action == "DetailView" && !empty($fields.id.value))}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="window.location.href='index.php?action=DetailView&module={$smarty.request.return_module}&record={$fields.id.value}'; return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL_FOOTER"> {elseif empty($smarty.request.return_action) || empty($smarty.request.return_id) && !empty($fields.id.value)}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="window.location.href='index.php?action=index&module=Quotes'; return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL_FOOTER"> {else}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="window.location.href='index.php?action=index&module={$smarty.request.return_module}&record={$smarty.request.return_id}'; return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL_FOOTER"> {/if}
{if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=Quotes", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="submit" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}
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
addToValidate('EditView', 'id', 'id', false,'{/literal}{sugar_translate label='LBL_ID' module='Quotes' for_js=true}{literal}' );
addToValidate('EditView', 'name', 'name', true,'{/literal}{sugar_translate label='LBL_QUOTE_NAME' module='Quotes' for_js=true}{literal}' );
addToValidate('EditView', 'date_entered_date', 'date', false,'Date Created' );
addToValidate('EditView', 'date_modified_date', 'date', false,'Date Modified' );
addToValidate('EditView', 'modified_user_id', 'assigned_user_name', false,'{/literal}{sugar_translate label='LBL_MODIFIED' module='Quotes' for_js=true}{literal}' );
addToValidate('EditView', 'modified_by_name', 'relate', false,'{/literal}{sugar_translate label='LBL_MODIFIED_NAME' module='Quotes' for_js=true}{literal}' );
addToValidate('EditView', 'created_by', 'assigned_user_name', false,'{/literal}{sugar_translate label='LBL_CREATED' module='Quotes' for_js=true}{literal}' );
addToValidate('EditView', 'created_by_name', 'relate', false,'{/literal}{sugar_translate label='LBL_CREATED' module='Quotes' for_js=true}{literal}' );
addToValidate('EditView', 'description', 'text', false,'{/literal}{sugar_translate label='LBL_DESCRIPTION' module='Quotes' for_js=true}{literal}' );
addToValidate('EditView', 'deleted', 'bool', false,'{/literal}{sugar_translate label='LBL_DELETED' module='Quotes' for_js=true}{literal}' );
addToValidate('EditView', 'assigned_user_id', 'relate', false,'{/literal}{sugar_translate label='LBL_ASSIGNED_TO_ID' module='Quotes' for_js=true}{literal}' );
addToValidate('EditView', 'assigned_user_name', 'relate', false,'{/literal}{sugar_translate label='LBL_ASSIGNED_TO_NAME' module='Quotes' for_js=true}{literal}' );
addToValidate('EditView', 'team_id', 'team_list', false,'{/literal}{sugar_translate label='LBL_TEAM_ID' module='Quotes' for_js=true}{literal}' );
addToValidate('EditView', 'team_set_id', 'id', false,'{/literal}{sugar_translate label='LBL_TEAM_SET_ID' module='Quotes' for_js=true}{literal}' );
addToValidate('EditView', 'team_count', 'relate', true,'{/literal}{sugar_translate label='LBL_TEAMS' module='Quotes' for_js=true}{literal}' );
addToValidate('EditView', 'team_name', 'teamset', true,'{/literal}{sugar_translate label='LBL_TEAMS' module='Quotes' for_js=true}{literal}' );
addToValidate('EditView', 'shipper_id', 'id', false,'{/literal}{sugar_translate label='LBL_SHIPPER_ID' module='Quotes' for_js=true}{literal}' );
addToValidate('EditView', 'currency_id', 'id', false,'{/literal}{sugar_translate label='LBL_CURRENCY_ID' module='Quotes' for_js=true}{literal}' );
addToValidate('EditView', 'taxrate_id', 'id', false,'{/literal}{sugar_translate label='LBL_TAXRATE_ID' module='Quotes' for_js=true}{literal}' );
addToValidate('EditView', 'show_line_nums', 'bool', false,'{/literal}{sugar_translate label='LBL_SHOW_LINE_NUMS' module='Quotes' for_js=true}{literal}' );
addToValidate('EditView', 'calc_grand_total', 'bool', false,'{/literal}{sugar_translate label='LBL_CALC_GRAND' module='Quotes' for_js=true}{literal}' );
addToValidate('EditView', 'quote_type', 'varchar', false,'{/literal}{sugar_translate label='LBL_QUOTE_TYPE' module='Quotes' for_js=true}{literal}' );
addToValidate('EditView', 'date_quote_expected_closed', 'date', true,'{/literal}{sugar_translate label='LBL_DATE_QUOTE_EXPECTED_CLOSED' module='Quotes' for_js=true}{literal}' );
addToValidate('EditView', 'original_po_date', 'date', false,'{/literal}{sugar_translate label='LBL_ORIGINAL_PO_DATE' module='Quotes' for_js=true}{literal}' );
addToValidate('EditView', 'payment_terms', 'enum', false,'{/literal}{sugar_translate label='LBL_PAYMENT_TERMS' module='Quotes' for_js=true}{literal}' );
addToValidate('EditView', 'date_quote_closed', 'date', false,'{/literal}{sugar_translate label='LBL_DATE_QUOTE_CLOSED' module='Quotes' for_js=true}{literal}' );
addToValidate('EditView', 'date_order_shipped', 'date', false,'{/literal}{sugar_translate label='LBL_LIST_DATE_QUOTE_CLOSED' module='Quotes' for_js=true}{literal}' );
addToValidate('EditView', 'order_stage', 'enum', false,'{/literal}{sugar_translate label='LBL_ORDER_STAGE' module='Quotes' for_js=true}{literal}' );
addToValidate('EditView', 'quote_stage', 'enum', true,'{/literal}{sugar_translate label='LBL_QUOTE_STAGE' module='Quotes' for_js=true}{literal}' );
addToValidate('EditView', 'purchase_order_num', 'varchar', false,'{/literal}{sugar_translate label='LBL_PURCHASE_ORDER_NUM' module='Quotes' for_js=true}{literal}' );
addToValidate('EditView', 'quote_num', 'int', true,'{/literal}{sugar_translate label='LBL_QUOTE_NUM' module='Quotes' for_js=true}{literal}' );
addToValidate('EditView', 'subtotal', 'currency', false,'{/literal}{sugar_translate label='LBL_SUBTOTAL' module='Quotes' for_js=true}{literal}' );
addToValidate('EditView', 'subtotal_usdollar', 'currency', false,'{/literal}{sugar_translate label='LBL_SUBTOTAL_USDOLLAR' module='Quotes' for_js=true}{literal}' );
addToValidate('EditView', 'shipping', 'currency', false,'{/literal}{sugar_translate label='LBL_SHIPPING' module='Quotes' for_js=true}{literal}' );
addToValidate('EditView', 'shipping_usdollar', 'currency', false,'{/literal}{sugar_translate label='LBL_SHIPPING_USDOLLAR' module='Quotes' for_js=true}{literal}' );
addToValidate('EditView', 'discount', 'currency', false,'{/literal}{sugar_translate label='LBL_DISCOUNT_TOTAL' module='Quotes' for_js=true}{literal}' );
addToValidate('EditView', 'deal_tot', 'decimal', false,'{/literal}{sugar_translate label='LBL_DEAL_TOT' module='Quotes' for_js=true}{literal}' );
addToValidate('EditView', 'deal_tot_usdollar', 'decimal', false,'{/literal}{sugar_translate label='LBL_DEAL_TOT_USDOLLAR' module='Quotes' for_js=true}{literal}' );
addToValidate('EditView', 'new_sub', 'currency', false,'{/literal}{sugar_translate label='LBL_NEW_SUB' module='Quotes' for_js=true}{literal}' );
addToValidate('EditView', 'new_sub_usdollar', 'currency', false,'{/literal}{sugar_translate label='LBL_NEW_SUB' module='Quotes' for_js=true}{literal}' );
addToValidate('EditView', 'tax', 'currency', false,'{/literal}{sugar_translate label='LBL_TAX' module='Quotes' for_js=true}{literal}' );
addToValidate('EditView', 'tax_usdollar', 'currency', false,'{/literal}{sugar_translate label='LBL_TAX_USDOLLAR' module='Quotes' for_js=true}{literal}' );
addToValidate('EditView', 'total', 'currency', false,'{/literal}{sugar_translate label='LBL_TOTAL' module='Quotes' for_js=true}{literal}' );
addToValidate('EditView', 'total_usdollar', 'currency', false,'{/literal}{sugar_translate label='LBL_TOTAL_USDOLLAR' module='Quotes' for_js=true}{literal}' );
addToValidate('EditView', 'billing_address_street', 'varchar', false,'{/literal}{sugar_translate label='LBL_BILLING_ADDRESS_STREET' module='Quotes' for_js=true}{literal}' );
addToValidate('EditView', 'billing_address_city', 'varchar', false,'{/literal}{sugar_translate label='LBL_BILLING_ADDRESS_CITY' module='Quotes' for_js=true}{literal}' );
addToValidate('EditView', 'billing_address_state', 'varchar', false,'{/literal}{sugar_translate label='LBL_BILLING_ADDRESS_STATE' module='Quotes' for_js=true}{literal}' );
addToValidate('EditView', 'billing_address_postalcode', 'varchar', false,'{/literal}{sugar_translate label='LBL_BILLING_ADDRESS_POSTAL_CODE' module='Quotes' for_js=true}{literal}' );
addToValidate('EditView', 'billing_address_country', 'varchar', false,'{/literal}{sugar_translate label='LBL_BILLING_ADDRESS_COUNTRY' module='Quotes' for_js=true}{literal}' );
addToValidate('EditView', 'shipping_address_street', 'varchar', false,'{/literal}{sugar_translate label='LBL_SHIPPING_ADDRESS_STREET' module='Quotes' for_js=true}{literal}' );
addToValidate('EditView', 'shipping_address_city', 'varchar', false,'{/literal}{sugar_translate label='LBL_SHIPPING_ADDRESS_CITY' module='Quotes' for_js=true}{literal}' );
addToValidate('EditView', 'shipping_address_state', 'varchar', false,'{/literal}{sugar_translate label='LBL_SHIPPING_ADDRESS_STATE' module='Quotes' for_js=true}{literal}' );
addToValidate('EditView', 'shipping_address_postalcode', 'varchar', false,'{/literal}{sugar_translate label='LBL_SHIPPING_ADDRESS_POSTAL_CODE' module='Quotes' for_js=true}{literal}' );
addToValidate('EditView', 'shipping_address_country', 'varchar', false,'{/literal}{sugar_translate label='LBL_SHIPPING_ADDRESS_COUNTRY' module='Quotes' for_js=true}{literal}' );
addToValidate('EditView', 'system_id', 'int', false,'{/literal}{sugar_translate label='LBL_SYSTEM_ID' module='Quotes' for_js=true}{literal}' );
addToValidate('EditView', 'shipping_account_name', 'relate', false,'{/literal}{sugar_translate label='LBL_SHIPPING_ACCOUNT_NAME' module='Quotes' for_js=true}{literal}' );
addToValidate('EditView', 'shipping_account_id', 'id', false,'{/literal}{sugar_translate label='LBL_SHIPPING_ACCOUNT_ID' module='Quotes' for_js=true}{literal}' );
addToValidate('EditView', 'shipping_contact_name', 'relate', false,'{/literal}{sugar_translate label='LBL_SHIPPING_CONTACT_NAME' module='Quotes' for_js=true}{literal}' );
addToValidate('EditView', 'shipping_contact_id', 'relate', false,'{/literal}{sugar_translate label='LBL_SHIPPING_CONTACT_ID' module='Quotes' for_js=true}{literal}' );
addToValidate('EditView', 'account_name', 'relate', false,'{/literal}{sugar_translate label='LBL_ACCOUNT_NAME' module='Quotes' for_js=true}{literal}' );
addToValidate('EditView', 'account_id', 'id', false,'{/literal}{sugar_translate label='LBL_ACCOUNT_ID' module='Quotes' for_js=true}{literal}' );
addToValidate('EditView', 'billing_account_name', 'relate', true,'{/literal}{sugar_translate label='LBL_BILLING_ACCOUNT_NAME' module='Quotes' for_js=true}{literal}' );
addToValidate('EditView', 'billing_account_id', 'id', false,'{/literal}{sugar_translate label='LBL_BILLING_ACCOUNT_ID' module='Quotes' for_js=true}{literal}' );
addToValidate('EditView', 'billing_contact_name', 'relate', false,'{/literal}{sugar_translate label='LBL_BILLING_CONTACT_NAME' module='Quotes' for_js=true}{literal}' );
addToValidate('EditView', 'billing_contact_id', 'relate', false,'{/literal}{sugar_translate label='LBL_BILLING_CONTACT_ID' module='Quotes' for_js=true}{literal}' );
addToValidate('EditView', 'opportunity_name', 'relate', false,'{/literal}{sugar_translate label='LBL_OPPORTUNITY_NAME' module='Quotes' for_js=true}{literal}' );
addToValidate('EditView', 'opportunity_id', 'id', false,'{/literal}{sugar_translate label='LBL_BILLING_ACCOUNT_NAME' module='Quotes' for_js=true}{literal}' );
addToValidate('EditView', 'pymentterm_c', 'enum', false,'{/literal}{sugar_translate label='LBL_PYMENTTERM' module='Quotes' for_js=true}{literal}' );
addToValidate('EditView', 'terms_c', 'wysiwyg', false,'{/literal}{sugar_translate label='LBL_TERMS' module='Quotes' for_js=true}{literal}' );
addToValidate('EditView', 'proddesc_c', 'wysiwyg', false,'{/literal}{sugar_translate label='LBL_PRODDESC' module='Quotes' for_js=true}{literal}' );
addToValidateBinaryDependency('EditView', 'assigned_user_name', 'alpha', false,'{/literal}{sugar_translate label='ERR_SQS_NO_MATCH_FIELD' module='Quotes' for_js=true}{literal}: {/literal}{sugar_translate label='LBL_ASSIGNED_TO' module='Quotes' for_js=true}{literal}', 'assigned_user_id' );
addToValidateBinaryDependency('EditView', 'shipping_account_name', 'alpha', false,'{/literal}{sugar_translate label='ERR_SQS_NO_MATCH_FIELD' module='Quotes' for_js=true}{literal}: {/literal}{sugar_translate label='LBL_SHIPPING_ACCOUNT_NAME' module='Quotes' for_js=true}{literal}', 'shipping_account_id' );
addToValidateBinaryDependency('EditView', 'shipping_contact_name', 'alpha', false,'{/literal}{sugar_translate label='ERR_SQS_NO_MATCH_FIELD' module='Quotes' for_js=true}{literal}: {/literal}{sugar_translate label='LBL_SHIPPING_CONTACT_NAME' module='Quotes' for_js=true}{literal}', 'shipping_contact_id' );
addToValidateBinaryDependency('EditView', 'billing_account_name', 'alpha', true,'{/literal}{sugar_translate label='ERR_SQS_NO_MATCH_FIELD' module='Quotes' for_js=true}{literal}: {/literal}{sugar_translate label='LBL_BILLING_ACCOUNT_NAME' module='Quotes' for_js=true}{literal}', 'billing_account_id' );
addToValidateBinaryDependency('EditView', 'billing_contact_name', 'alpha', false,'{/literal}{sugar_translate label='ERR_SQS_NO_MATCH_FIELD' module='Quotes' for_js=true}{literal}: {/literal}{sugar_translate label='LBL_BILLING_CONTACT_NAME' module='Quotes' for_js=true}{literal}', 'billing_contact_id' );
addToValidateBinaryDependency('EditView', 'opportunity_name', 'alpha', false,'{/literal}{sugar_translate label='ERR_SQS_NO_MATCH_FIELD' module='Quotes' for_js=true}{literal}: {/literal}{sugar_translate label='LBL_OPPORTUNITY_NAME' module='Quotes' for_js=true}{literal}', 'opportunity_id' );
</script><script language="javascript">if(typeof sqs_objects == 'undefined'){var sqs_objects = new Array;}sqs_objects['EditView_opportunity_name']={"form":"EditView","method":"query","modules":["Opportunities"],"group":"or","field_list":["name","id"],"populate_list":["opportunity_name","opportunity_id"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"No Match"};sqs_objects['EditView_billing_account_name']={"form":"EditView","method":"query","modules":["Accounts"],"group":"or","field_list":["name","id","billing_address_street","billing_address_city","billing_address_state","billing_address_postalcode","billing_address_country","shipping_address_street","shipping_address_city","shipping_address_state","shipping_address_postalcode","shipping_address_country"],"populate_list":["EditView_billing_account_name","billing_account_id","billing_address_street","billing_address_city","billing_address_state","billing_address_postalcode","billing_address_country","shipping_address_street","shipping_address_city","shipping_address_state","shipping_address_postalcode","shipping_address_country"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"required_list":["billing_account_id"],"order":"name","limit":"30","no_match_text":"No Match"};sqs_objects['EditView_shipping_account_name']={"form":"EditView","method":"query","modules":["Accounts"],"group":"or","field_list":["name","id","shipping_address_street","shipping_address_city","shipping_address_state","shipping_address_postalcode","shipping_address_country"],"populate_list":["EditView_shipping_account_name","shipping_account_id","shipping_address_street","shipping_address_city","shipping_address_state","shipping_address_postalcode","shipping_address_country"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"required_list":["shipping_account_id"],"order":"name","limit":"30","no_match_text":"No Match"};sqs_objects['EditView_billing_contact_name']={"form":"EditView","method":"get_contact_array","modules":["Contacts"],"field_list":["salutation","first_name","last_name","id"],"populate_list":["billing_contact_name","billing_contact_id","billing_contact_id","billing_contact_id"],"required_list":["billing_contact_id"],"group":"or","conditions":[{"name":"first_name","op":"like_custom","end":"%","value":""},{"name":"last_name","op":"like_custom","end":"%","value":""}],"order":"last_name","limit":"30","no_match_text":"No Match"};sqs_objects['EditView_shipping_contact_name']={"form":"EditView","method":"get_contact_array","modules":["Contacts"],"field_list":["salutation","first_name","last_name","id"],"populate_list":["shipping_contact_name","shipping_contact_id","shipping_contact_id","shipping_contact_id"],"required_list":["shipping_contact_id"],"group":"or","conditions":[{"name":"first_name","op":"like_custom","end":"%","value":""},{"name":"last_name","op":"like_custom","end":"%","value":""}],"order":"last_name","limit":"30","no_match_text":"No Match"};sqs_objects['EditView_assigned_user_name']={"form":"EditView","method":"get_user_array","field_list":["user_name","id"],"populate_list":["assigned_user_name","assigned_user_id"],"required_list":["assigned_user_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"No Match"};sqs_objects['EditView_team_name']={"form":"EditView","method":"query","modules":["Teams"],"group":"or","field_list":["name","id"],"populate_list":["team_name","team_id"],"required_list":["team_id"],"whereExtra":"( teams.associated_user_id IS NULL OR teams.associated_user_id NOT IN ( SELECT id FROM users WHERE status = 'Inactive' OR portal_only = '1' ))","conditions":[{"name":"name","op":"like_custom","end":"%","value":""},{"name":"name","op":"like_custom","begin":"(","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"No Match"};</script><script type=text/javascript>
SUGAR.forms.AssignmentHandler.registerView('EditView');
</script>{/literal}
