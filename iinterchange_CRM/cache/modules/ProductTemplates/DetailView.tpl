

<table cellpadding="1" cellspacing="0" border="0" width="100%" class="actionsContainer">
<tr>
<td class="buttons" align="left" NOWRAP>
<form action="index.php" method="post" name="DetailView" id="form">
<input type="hidden" name="module" value="{$module}">
<input type="hidden" name="record" value="{$fields.id.value}">
<input type="hidden" name="return_action">
<input type="hidden" name="return_module">
<input type="hidden" name="return_id">
<input type="hidden" name="module_tab">
<input type="hidden" name="isDuplicate" value="false">
<input type="hidden" name="offset" value="{$offset}">
<input type="hidden" name="action" value="EditView">
{if $bean->aclAccess("edit")}<input title="{$APP.LBL_EDIT_BUTTON_TITLE}" accessKey="{$APP.LBL_EDIT_BUTTON_KEY}" class="button primary" onclick="this.form.return_module.value='ProductTemplates'; this.form.return_action.value='DetailView'; this.form.return_id.value='{$id}'; this.form.action.value='EditView';" type="submit" name="Edit" id="edit_button" value="{$APP.LBL_EDIT_BUTTON_LABEL}">{/if} 
{if $bean->aclAccess("edit")}<input title="{$APP.LBL_DUPLICATE_BUTTON_TITLE}" accessKey="{$APP.LBL_DUPLICATE_BUTTON_KEY}" class="button" onclick="this.form.return_module.value='ProductTemplates'; this.form.return_action.value='DetailView'; this.form.isDuplicate.value=true; this.form.action.value='EditView'; this.form.return_id.value='{$id}';" type="submit" name="Duplicate" value="{$APP.LBL_DUPLICATE_BUTTON_LABEL}" id="duplicate_button">{/if} 
{if $bean->aclAccess("delete")}<input title="{$APP.LBL_DELETE_BUTTON_TITLE}" accessKey="{$APP.LBL_DELETE_BUTTON_KEY}" class="button" onclick="this.form.return_module.value='ProductTemplates'; this.form.return_action.value='ListView'; this.form.action.value='Delete'; return confirm('{$APP.NTC_DELETE_CONFIRMATION}');" type="submit" name="Delete" value="{$APP.LBL_DELETE_BUTTON_LABEL}">{/if} 
</form>
</td>
<td class="buttons" align="left" NOWRAP>
{if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=ProductTemplates", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="submit" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}
</td>
<td align="right" width="100%">{$ADMIN_EDIT}
{$PAGINATION}
</td>
</tr>
</table>{sugar_include include=$includes}
<div id="ProductTemplates_detailview_tabs"
>
<div >
<div id='' class='detail view'>
{counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}
<table id='detailpanel_1' cellspacing='{$gridline}'>
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{if $fields.name.acl > 0}
{counter name="fieldsUsed"}
<td width='12.5%' scope="row">
{if !$fields.name.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_NAME' module='ProductTemplates'}{/capture}
{$label|strip_semicolon}:
{else}
{counter name="fieldsHidden"}
{/if}
</td>
<td width='37.5%'  >
{if !$fields.name.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.name.value) <= 0}
{assign var="value" value=$fields.name.default_value }
{else}
{assign var="value" value=$fields.name.value }
{/if} 
<span class="sugar_field" id="{$fields.name.name}">{$fields.name.value}</span>
{/if}
</td>
{else}
<td scope="row">&nbsp;</td><td>&nbsp;</td>
{/if}
{if $fields.status.acl > 0}
{counter name="fieldsUsed"}
<td width='12.5%' scope="row">
{if !$fields.status.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_STATUS' module='ProductTemplates'}{/capture}
{$label|strip_semicolon}:
{else}
{counter name="fieldsHidden"}
{/if}
</td>
<td width='37.5%'  >
{if !$fields.status.hidden}
{counter name="panelFieldCount"}


{if is_string($fields.status.options)}
<input type="hidden" class="sugar_field" id="{$fields.status.name}" value="{ $fields.status.options }">
{ $fields.status.options }
{else}
<input type="hidden" class="sugar_field" id="{$fields.status.name}" value="{ $fields.status.value }">
{ $fields.status.options[$fields.status.value]}
{/if}
{/if}
</td>
{else}
<td scope="row">&nbsp;</td><td>&nbsp;</td>
{/if}
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{if $fields.website.acl > 0}
{counter name="fieldsUsed"}
<td width='12.5%' scope="row">
{if !$fields.website.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_URL' module='ProductTemplates'}{/capture}
{$label|strip_semicolon}:
{else}
{counter name="fieldsHidden"}
{/if}
</td>
<td width='37.5%'  >
{if !$fields.website.hidden}
{counter name="panelFieldCount"}

{capture name=getLink assign=link}{$fields.website.value}{/capture}
{if !empty($link)}
{capture name=getStart assign=linkStart}{$link|substr:0:7}{/capture}
<span class="sugar_field" id="{$fields.website.name}">
<a href='{$link|to_url}'  >{$link}</a>
</span>
{/if}
{/if}
</td>
{else}
<td scope="row">&nbsp;</td><td>&nbsp;</td>
{/if}
{if $fields.date_available.acl > 0}
{counter name="fieldsUsed"}
<td width='12.5%' scope="row">
{if !$fields.date_available.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_DATE_AVAILABLE' module='ProductTemplates'}{/capture}
{$label|strip_semicolon}:
{else}
{counter name="fieldsHidden"}
{/if}
</td>
<td width='37.5%'  >
{if !$fields.date_available.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.date_available.value) <= 0}
{assign var="value" value=$fields.date_available.default_value }
{else}
{assign var="value" value=$fields.date_available.value }
{/if} 
<span class="sugar_field" id="{$fields.date_available.name}">{$fields.date_available.value}</span>
{/if}
</td>
{else}
<td scope="row">&nbsp;</td><td>&nbsp;</td>
{/if}
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{if $fields.tax_class.acl > 0}
{counter name="fieldsUsed"}
<td width='12.5%' scope="row">
{if !$fields.tax_class.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_TAX_CLASS' module='ProductTemplates'}{/capture}
{$label|strip_semicolon}:
{else}
{counter name="fieldsHidden"}
{/if}
</td>
<td width='37.5%'  >
{if !$fields.tax_class.hidden}
{counter name="panelFieldCount"}


{if is_string($fields.tax_class.options)}
<input type="hidden" class="sugar_field" id="{$fields.tax_class.name}" value="{ $fields.tax_class.options }">
{ $fields.tax_class.options }
{else}
<input type="hidden" class="sugar_field" id="{$fields.tax_class.name}" value="{ $fields.tax_class.value }">
{ $fields.tax_class.options[$fields.tax_class.value]}
{/if}
{/if}
</td>
{else}
<td scope="row">&nbsp;</td><td>&nbsp;</td>
{/if}
{if $fields.qty_in_stock.acl > 0}
{counter name="fieldsUsed"}
<td width='12.5%' scope="row">
{if !$fields.qty_in_stock.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_QUANTITY' module='ProductTemplates'}{/capture}
{$label|strip_semicolon}:
{else}
{counter name="fieldsHidden"}
{/if}
</td>
<td width='37.5%'  >
{if !$fields.qty_in_stock.hidden}
{counter name="panelFieldCount"}

<span class="sugar_field" id="{$fields.qty_in_stock.name}">
{sugar_number_format precision=0 var=$fields.qty_in_stock.value}
</span>
{/if}
</td>
{else}
<td scope="row">&nbsp;</td><td>&nbsp;</td>
{/if}
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{if $fields.manufacturer_id.acl > 0}
{counter name="fieldsUsed"}
<td width='12.5%' scope="row">
{if !$fields.manufacturer_id.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_LIST_MANUFACTURER_ID' module='ProductTemplates'}{/capture}
{$label|strip_semicolon}:
{else}
{counter name="fieldsHidden"}
{/if}
</td>
<td width='37.5%'  >
{if !$fields.manufacturer_id.hidden}
{counter name="panelFieldCount"}
<span id='manufacturer_id'>
{$fields.manufacturer_id.value}
</span>
{/if}
</td>
{else}
<td scope="row">&nbsp;</td><td>&nbsp;</td>
{/if}
{if $fields.weight.acl > 0}
{counter name="fieldsUsed"}
<td width='12.5%' scope="row">
{if !$fields.weight.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_WEIGHT' module='ProductTemplates'}{/capture}
{$label|strip_semicolon}:
{else}
{counter name="fieldsHidden"}
{/if}
</td>
<td width='37.5%'  >
{if !$fields.weight.hidden}
{counter name="panelFieldCount"}

<span class="sugar_field" id="{$fields.weight.name}">
{sugar_number_format var=$fields.weight.value precision=2 }
</span>
{/if}
</td>
{else}
<td scope="row">&nbsp;</td><td>&nbsp;</td>
{/if}
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{if $fields.mft_part_num.acl > 0}
{counter name="fieldsUsed"}
<td width='12.5%' scope="row">
{if !$fields.mft_part_num.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_MFT_PART_NUM' module='ProductTemplates'}{/capture}
{$label|strip_semicolon}:
{else}
{counter name="fieldsHidden"}
{/if}
</td>
<td width='37.5%'  >
{if !$fields.mft_part_num.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.mft_part_num.value) <= 0}
{assign var="value" value=$fields.mft_part_num.default_value }
{else}
{assign var="value" value=$fields.mft_part_num.value }
{/if} 
<span class="sugar_field" id="{$fields.mft_part_num.name}">{$fields.mft_part_num.value}</span>
{/if}
</td>
{else}
<td scope="row">&nbsp;</td><td>&nbsp;</td>
{/if}
{if $fields.category_name.acl > 0}
{counter name="fieldsUsed"}
<td width='12.5%' scope="row">
{if !$fields.category_name.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_CATEGORY' module='ProductTemplates'}{/capture}
{$label|strip_semicolon}:
{else}
{counter name="fieldsHidden"}
{/if}
</td>
<td width='37.5%'  >
{if !$fields.category_name.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.category_name.value) <= 0}
{assign var="value" value=$fields.category_name.default_value }
{else}
{assign var="value" value=$fields.category_name.value }
{/if} 
<span class="sugar_field" id="{$fields.category_name.name}">{$fields.category_name.value}</span>
{/if}
</td>
{else}
<td scope="row">&nbsp;</td><td>&nbsp;</td>
{/if}
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{if $fields.vendor_part_num.acl > 0}
{counter name="fieldsUsed"}
<td width='12.5%' scope="row">
{if !$fields.vendor_part_num.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_VENDOR_PART_NUM' module='ProductTemplates'}{/capture}
{$label|strip_semicolon}:
{else}
{counter name="fieldsHidden"}
{/if}
</td>
<td width='37.5%'  >
{if !$fields.vendor_part_num.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.vendor_part_num.value) <= 0}
{assign var="value" value=$fields.vendor_part_num.default_value }
{else}
{assign var="value" value=$fields.vendor_part_num.value }
{/if} 
<span class="sugar_field" id="{$fields.vendor_part_num.name}">{$fields.vendor_part_num.value}</span>
{/if}
</td>
{else}
<td scope="row">&nbsp;</td><td>&nbsp;</td>
{/if}
{if $fields.type_id.acl > 0}
{counter name="fieldsUsed"}
<td width='12.5%' scope="row">
{if !$fields.type_id.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_TYPE' module='ProductTemplates'}{/capture}
{$label|strip_semicolon}:
{else}
{counter name="fieldsHidden"}
{/if}
</td>
<td width='37.5%'  >
{if !$fields.type_id.hidden}
{counter name="panelFieldCount"}
<span id='type_id'>
{$fields.type_id.value}
</span>
{/if}
</td>
{else}
<td scope="row">&nbsp;</td><td>&nbsp;</td>
{/if}
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{if $fields.currency_id.acl > 0}
{counter name="fieldsUsed"}
<td width='12.5%' scope="row">
{if !$fields.currency_id.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_CURRENCY' module='ProductTemplates'}{/capture}
{$label|strip_semicolon}:
{else}
{counter name="fieldsHidden"}
{/if}
</td>
<td width='37.5%'  >
{if !$fields.currency_id.hidden}
{counter name="panelFieldCount"}
<span id='currency_id'>
{$fields.currency_id.value}
</span>
{/if}
</td>
{else}
<td scope="row">&nbsp;</td><td>&nbsp;</td>
{/if}
{if $fields.support_name.acl > 0}
{counter name="fieldsUsed"}
<td width='12.5%' scope="row">
{if !$fields.support_name.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_SUPPORT_NAME' module='ProductTemplates'}{/capture}
{$label|strip_semicolon}:
{else}
{counter name="fieldsHidden"}
{/if}
</td>
<td width='37.5%'  >
{if !$fields.support_name.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.support_name.value) <= 0}
{assign var="value" value=$fields.support_name.default_value }
{else}
{assign var="value" value=$fields.support_name.value }
{/if} 
<span class="sugar_field" id="{$fields.support_name.name}">{$fields.support_name.value}</span>
{/if}
</td>
{else}
<td scope="row">&nbsp;</td><td>&nbsp;</td>
{/if}
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{if $fields.cost_price.acl > 0}
{counter name="fieldsUsed"}
<td width='12.5%' scope="row">
{if !$fields.cost_price.hidden}
{capture name="label" assign="label"}{$MOD.LBL_COST_PRICE|strip_semicolon} ({$CURRENCY}){/capture}
{$label|strip_semicolon}:
{else}
{counter name="fieldsHidden"}
{/if}
</td>
<td width='37.5%'  >
{if !$fields.cost_price.hidden}
{counter name="panelFieldCount"}

<span id='{$fields.cost_price.name}'>
{sugar_number_format var=$fields.cost_price.value }
</span>
{/if}
</td>
{else}
<td scope="row">&nbsp;</td><td>&nbsp;</td>
{/if}
{if $fields.support_contact.acl > 0}
{counter name="fieldsUsed"}
<td width='12.5%' scope="row">
{if !$fields.support_contact.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_SUPPORT_CONTACT' module='ProductTemplates'}{/capture}
{$label|strip_semicolon}:
{else}
{counter name="fieldsHidden"}
{/if}
</td>
<td width='37.5%'  >
{if !$fields.support_contact.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.support_contact.value) <= 0}
{assign var="value" value=$fields.support_contact.default_value }
{else}
{assign var="value" value=$fields.support_contact.value }
{/if} 
<span class="sugar_field" id="{$fields.support_contact.name}">{$fields.support_contact.value}</span>
{/if}
</td>
{else}
<td scope="row">&nbsp;</td><td>&nbsp;</td>
{/if}
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{if $fields.list_price.acl > 0}
{counter name="fieldsUsed"}
<td width='12.5%' scope="row">
{if !$fields.list_price.hidden}
{capture name="label" assign="label"}{$MOD.LBL_LIST_PRICE|strip_semicolon} ({$CURRENCY}){/capture}
{$label|strip_semicolon}:
{else}
{counter name="fieldsHidden"}
{/if}
</td>
<td width='37.5%'  >
{if !$fields.list_price.hidden}
{counter name="panelFieldCount"}

<span id='{$fields.list_price.name}'>
{sugar_number_format var=$fields.list_price.value }
</span>
{/if}
</td>
{else}
<td scope="row">&nbsp;</td><td>&nbsp;</td>
{/if}
{if $fields.support_description.acl > 0}
{counter name="fieldsUsed"}
<td width='12.5%' scope="row">
{if !$fields.support_description.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_SUPPORT_DESCRIPTION' module='ProductTemplates'}{/capture}
{$label|strip_semicolon}:
{else}
{counter name="fieldsHidden"}
{/if}
</td>
<td width='37.5%'  >
{if !$fields.support_description.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.support_description.value) <= 0}
{assign var="value" value=$fields.support_description.default_value }
{else}
{assign var="value" value=$fields.support_description.value }
{/if} 
<span class="sugar_field" id="{$fields.support_description.name}">{$fields.support_description.value}</span>
{/if}
</td>
{else}
<td scope="row">&nbsp;</td><td>&nbsp;</td>
{/if}
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{if $fields.discount_price.acl > 0}
{counter name="fieldsUsed"}
<td width='12.5%' scope="row">
{if !$fields.discount_price.hidden}
{capture name="label" assign="label"}{$MOD.LBL_DISCOUNT_PRICE|strip_semicolon} ({$CURRENCY}){/capture}
{$label|strip_semicolon}:
{else}
{counter name="fieldsHidden"}
{/if}
</td>
<td width='37.5%'  >
{if !$fields.discount_price.hidden}
{counter name="panelFieldCount"}

<span id='{$fields.discount_price.name}'>
{sugar_number_format var=$fields.discount_price.value }
</span>
{/if}
</td>
{else}
<td scope="row">&nbsp;</td><td>&nbsp;</td>
{/if}
{if $fields.support_term.acl > 0}
{counter name="fieldsUsed"}
<td width='12.5%' scope="row">
{if !$fields.support_term.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_SUPPORT_TERM' module='ProductTemplates'}{/capture}
{$label|strip_semicolon}:
{else}
{counter name="fieldsHidden"}
{/if}
</td>
<td width='37.5%'  >
{if !$fields.support_term.hidden}
{counter name="panelFieldCount"}


{if is_string($fields.support_term.options)}
<input type="hidden" class="sugar_field" id="{$fields.support_term.name}" value="{ $fields.support_term.options }">
{ $fields.support_term.options }
{else}
<input type="hidden" class="sugar_field" id="{$fields.support_term.name}" value="{ $fields.support_term.value }">
{ $fields.support_term.options[$fields.support_term.value]}
{/if}
{/if}
</td>
{else}
<td scope="row">&nbsp;</td><td>&nbsp;</td>
{/if}
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{if $fields.pricing_formula.acl > 0}
{counter name="fieldsUsed"}
<td width='12.5%' scope="row">
{if !$fields.pricing_formula.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_PRICING_FORMULA' module='ProductTemplates'}{/capture}
{$label|strip_semicolon}:
{else}
{counter name="fieldsHidden"}
{/if}
</td>
<td width='37.5%' colspan='3' >
{if !$fields.pricing_formula.hidden}
{counter name="panelFieldCount"}
<span id='pricing_formula'>
{$fields.pricing_formula.value}
</span>
{/if}
</td>
{else}
<td scope="row">&nbsp;</td><td>&nbsp;</td>
{/if}
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{if $fields.description.acl > 0}
{counter name="fieldsUsed"}
<td width='12.5%' scope="row">
{if !$fields.description.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_DESCRIPTION' module='ProductTemplates'}{/capture}
{$label|strip_semicolon}:
{else}
{counter name="fieldsHidden"}
{/if}
</td>
<td width='37.5%' colspan='3' >
{if !$fields.description.hidden}
{counter name="panelFieldCount"}

<span class="sugar_field" id="{$fields.description.name|escape:'html'|url2html|nl2br}">
{$fields.description.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br}
</span>
{/if}
</td>
{else}
<td scope="row">&nbsp;</td><td>&nbsp;</td>
{/if}
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
</table>
</div>
{if $panelFieldCount == 0}
<script>document.getElementById("").style.display='none';</script>
{/if}
</div></div>

</form>{literal}
<script type=text/javascript>
SUGAR.forms.AssignmentHandler.registerView('DetailView');
</script>{/literal}
