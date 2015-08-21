

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
{if $bean->aclAccess("edit")}<input title="{$APP.LBL_EDIT_BUTTON_TITLE}" accessKey="{$APP.LBL_EDIT_BUTTON_KEY}" class="button primary" onclick="this.form.return_module.value='Quotes'; this.form.return_action.value='DetailView'; this.form.return_id.value='{$id}'; this.form.action.value='EditView';" type="submit" name="Edit" id="edit_button" value="{$APP.LBL_EDIT_BUTTON_LABEL}">{/if} 
{if $bean->aclAccess("edit")}<input title="{$APP.LBL_DUPLICATE_BUTTON_TITLE}" accessKey="{$APP.LBL_DUPLICATE_BUTTON_KEY}" class="button" onclick="this.form.return_module.value='Quotes'; this.form.return_action.value='DetailView'; this.form.isDuplicate.value=true; this.form.action.value='EditView'; this.form.return_id.value='{$id}';" type="submit" name="Duplicate" value="{$APP.LBL_DUPLICATE_BUTTON_LABEL}" id="duplicate_button">{/if} 
{if $bean->aclAccess("delete")}<input title="{$APP.LBL_DELETE_BUTTON_TITLE}" accessKey="{$APP.LBL_DELETE_BUTTON_KEY}" class="button" onclick="this.form.return_module.value='Quotes'; this.form.return_action.value='ListView'; this.form.action.value='Delete'; return confirm('{$APP.NTC_DELETE_CONFIRMATION}');" type="submit" name="Delete" value="{$APP.LBL_DELETE_BUTTON_LABEL}">{/if} 
</form>
</td>
<td class="buttons" align="left" NOWRAP>
<form action="index.php" method="POST" name="Quote2Opp" id="form"><input type="hidden" name="module" value="Quotes"><input type="hidden" name="record" value="{$fields.id.value}"><input type="hidden" name="user_id" value="{$current_user->id}"><input type="hidden" name="team_id" value="{$fields.team_id.value}"><input type="hidden" name="user_name" value="{$current_user->user_name}"><input type="hidden" name="action" value="QuoteToOpportunity"><input type="hidden" name="opportunity_subject" value="{$fields.name.value}"><input type="hidden" name="opportunity_name" value="{$fields.name.value}"><input type="hidden" name="opportunity_id" value="{$fields.billing_account_id.value}"><input type="hidden" name="amount" value="{$fields.total.value}"><input type="hidden" name="valid_until" value="{$fields.date_quote_expected_closed.value}"><input type="hidden" name="currency_id" value="{$fields.currency_id.value}"><input title="{$APP.LBL_QUOTE_TO_OPPORTUNITY_TITLE}" accessKey="{$APP.LBL_QUOTE_TO_OPPORTUNITY_KEY}" class="button" type="submit" name="opp_to_quote_button" value="{$APP.LBL_QUOTE_TO_OPPORTUNITY_LABEL}"></form>
</td>
<td class="buttons" align="left" NOWRAP>
<form action="index.php" method="{$PDFMETHOD}" name="ViewPDF" id="form"><input type="hidden" name="module" value="Quotes"><input type="hidden" name="record" value="{$fields.id.value}"><input type="hidden" name="action" value="sugarpdf"><input type="hidden" name="email_action"><input title="{$APP.LBL_EMAIL_COMPOSE}" accessKey="{$APP.LBL_EMAIL_PDF_BUTTON_KEY}" class="button" type="submit" name="button" value="{$APP.LBL_EMAIL_COMPOSE}" onclick="location.href='mailto:';return false;"> <input title="{$APP.LBL_VIEW_PDF_BUTTON_TITLE}" accessKey="{$APP.LBL_VIEW_PDF_BUTTON_KEY}" class="button" type="submit" name="button" value="{$APP.LBL_VIEW_PDF_BUTTON_LABEL}">
</td>
<td class="buttons" align="left" NOWRAP>
{if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=Quotes", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="submit" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}
</td>
<td align="right" width="100%">{$ADMIN_EDIT}
{$PAGINATION}
</td>
<td align="right" width="10%">&nbsp;</td>
<td align="right" width="100%" NOWRAP>
{$MOD.PDF_FORMAT} <select name="sugarpdf" id="sugarpdf">{$LAYOUT_OPTIONS}</select></form>&nbsp;
</td>
</tr>
</table>{sugar_include include=$includes}
<div id="Quotes_detailview_tabs"
>
<div >
<div id='LBL_QUOTE_INFORMATION' class='detail view'>
{counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}
<h4>{sugar_translate label='LBL_QUOTE_INFORMATION' module='Quotes'}</h4>
<table id='detailpanel_1' cellspacing='{$gridline}'>
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{if $fields.name.acl > 0}
{counter name="fieldsUsed"}
<td width='12.5%' scope="row">
{if !$fields.name.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_QUOTE_NAME' module='Quotes'}{/capture}
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
{if $fields.opportunity_name.acl > 0}
{counter name="fieldsUsed"}
<td width='12.5%' scope="row">
{if !$fields.opportunity_name.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_OPPORTUNITY_NAME' module='Quotes'}{/capture}
{$label|strip_semicolon}:
{else}
{counter name="fieldsHidden"}
{/if}
</td>
<td width='37.5%'  >
{if !$fields.opportunity_name.hidden}
{counter name="panelFieldCount"}

{if !empty($fields.opportunity_id.value)}<a href="index.php?module=Opportunities&action=DetailView&record={$fields.opportunity_id.value}">{/if}
<span id="opportunity_id" class="sugar_field">{$fields.opportunity_name.value}</span>
{if !empty($fields.opportunity_id.value)}</a>{/if}
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
{if $fields.quote_num.acl > 0}
{counter name="fieldsUsed"}
<td width='12.5%' scope="row">
{if !$fields.quote_num.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_QUOTE_NUM' module='Quotes'}{/capture}
{$label|strip_semicolon}:
{else}
{counter name="fieldsHidden"}
{/if}
</td>
<td width='37.5%'  >
{if !$fields.quote_num.hidden}
{counter name="panelFieldCount"}

<span class="sugar_field" id="{$fields.quote_num.name}">
{assign var="value" value=$fields.quote_num.value }
{$value}
</span>
{/if}
</td>
{else}
<td scope="row">&nbsp;</td><td>&nbsp;</td>
{/if}
{if $fields.quote_stage.acl > 0}
{counter name="fieldsUsed"}
<td width='12.5%' scope="row">
{if !$fields.quote_stage.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_QUOTE_STAGE' module='Quotes'}{/capture}
{$label|strip_semicolon}:
{else}
{counter name="fieldsHidden"}
{/if}
</td>
<td width='37.5%'  >
{if !$fields.quote_stage.hidden}
{counter name="panelFieldCount"}


{if is_string($fields.quote_stage.options)}
<input type="hidden" class="sugar_field" id="{$fields.quote_stage.name}" value="{ $fields.quote_stage.options }">
{ $fields.quote_stage.options }
{else}
<input type="hidden" class="sugar_field" id="{$fields.quote_stage.name}" value="{ $fields.quote_stage.value }">
{ $fields.quote_stage.options[$fields.quote_stage.value]}
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
{if $fields.purchase_order_num.acl > 0}
{counter name="fieldsUsed"}
<td width='12.5%' scope="row">
{if !$fields.purchase_order_num.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_PURCHASE_ORDER_NUM' module='Quotes'}{/capture}
{$label|strip_semicolon}:
{else}
{counter name="fieldsHidden"}
{/if}
</td>
<td width='37.5%'  >
{if !$fields.purchase_order_num.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.purchase_order_num.value) <= 0}
{assign var="value" value=$fields.purchase_order_num.default_value }
{else}
{assign var="value" value=$fields.purchase_order_num.value }
{/if} 
<span class="sugar_field" id="{$fields.purchase_order_num.name}">{$fields.purchase_order_num.value}</span>
{/if}
</td>
{else}
<td scope="row">&nbsp;</td><td>&nbsp;</td>
{/if}
{if $fields.date_quote_expected_closed.acl > 0}
{counter name="fieldsUsed"}
<td width='12.5%' scope="row">
{if !$fields.date_quote_expected_closed.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_DATE_QUOTE_EXPECTED_CLOSED' module='Quotes'}{/capture}
{$label|strip_semicolon}:
{else}
{counter name="fieldsHidden"}
{/if}
</td>
<td width='37.5%'  >
{if !$fields.date_quote_expected_closed.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.date_quote_expected_closed.value) <= 0}
{assign var="value" value=$fields.date_quote_expected_closed.default_value }
{else}
{assign var="value" value=$fields.date_quote_expected_closed.value }
{/if} 
<span class="sugar_field" id="{$fields.date_quote_expected_closed.name}">{$fields.date_quote_expected_closed.value}</span>
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
{if $fields.payment_terms.acl > 0}
{counter name="fieldsUsed"}
<td width='12.5%' scope="row">
{if !$fields.payment_terms.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_PAYMENT_TERMS' module='Quotes'}{/capture}
{$label|strip_semicolon}:
{else}
{counter name="fieldsHidden"}
{/if}
</td>
<td width='37.5%'  >
{if !$fields.payment_terms.hidden}
{counter name="panelFieldCount"}


{if is_string($fields.payment_terms.options)}
<input type="hidden" class="sugar_field" id="{$fields.payment_terms.name}" value="{ $fields.payment_terms.options }">
{ $fields.payment_terms.options }
{else}
<input type="hidden" class="sugar_field" id="{$fields.payment_terms.name}" value="{ $fields.payment_terms.value }">
{ $fields.payment_terms.options[$fields.payment_terms.value]}
{/if}
{/if}
</td>
{else}
<td scope="row">&nbsp;</td><td>&nbsp;</td>
{/if}
{if $fields.original_po_date.acl > 0}
{counter name="fieldsUsed"}
<td width='12.5%' scope="row">
{if !$fields.original_po_date.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_ORIGINAL_PO_DATE' module='Quotes'}{/capture}
{$label|strip_semicolon}:
{else}
{counter name="fieldsHidden"}
{/if}
</td>
<td width='37.5%'  >
{if !$fields.original_po_date.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.original_po_date.value) <= 0}
{assign var="value" value=$fields.original_po_date.default_value }
{else}
{assign var="value" value=$fields.original_po_date.value }
{/if} 
<span class="sugar_field" id="{$fields.original_po_date.name}">{$fields.original_po_date.value}</span>
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
{if $fields.billing_account_name.acl > 0}
{counter name="fieldsUsed"}
<td width='12.5%' scope="row">
{if !$fields.billing_account_name.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_BILLING_ACCOUNT_NAME' module='Quotes'}{/capture}
{$label|strip_semicolon}:
{else}
{counter name="fieldsHidden"}
{/if}
</td>
<td width='37.5%'  >
{if !$fields.billing_account_name.hidden}
{counter name="panelFieldCount"}

{if !empty($fields.billing_account_id.value)}<a href="index.php?module=Accounts&action=DetailView&record={$fields.billing_account_id.value}">{/if}
<span id="billing_account_id" class="sugar_field">{$fields.billing_account_name.value}</span>
{if !empty($fields.billing_account_id.value)}</a>{/if}
{/if}
</td>
{else}
<td scope="row">&nbsp;</td><td>&nbsp;</td>
{/if}
{if $fields.shipping_account_name.acl > 0}
{counter name="fieldsUsed"}
<td width='12.5%' scope="row">
{if !$fields.shipping_account_name.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_SHIPPING_ACCOUNT_NAME' module='Quotes'}{/capture}
{$label|strip_semicolon}:
{else}
{counter name="fieldsHidden"}
{/if}
</td>
<td width='37.5%'  >
{if !$fields.shipping_account_name.hidden}
{counter name="panelFieldCount"}

{if !empty($fields.shipping_account_id.value)}<a href="index.php?module=Accounts&action=DetailView&record={$fields.shipping_account_id.value}">{/if}
<span id="shipping_account_id" class="sugar_field">{$fields.shipping_account_name.value}</span>
{if !empty($fields.shipping_account_id.value)}</a>{/if}
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
{if $fields.billing_contact_name.acl > 0}
{counter name="fieldsUsed"}
<td width='12.5%' scope="row">
{if !$fields.billing_contact_name.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_BILLING_CONTACT_NAME' module='Quotes'}{/capture}
{$label|strip_semicolon}:
{else}
{counter name="fieldsHidden"}
{/if}
</td>
<td width='37.5%'  >
{if !$fields.billing_contact_name.hidden}
{counter name="panelFieldCount"}

{if !empty($fields.billing_contact_id.value)}<a href="index.php?module=Contacts&action=DetailView&record={$fields.billing_contact_id.value}">{/if}
<span id="billing_contact_id" class="sugar_field">{$fields.billing_contact_name.value}</span>
{if !empty($fields.billing_contact_id.value)}</a>{/if}
{/if}
</td>
{else}
<td scope="row">&nbsp;</td><td>&nbsp;</td>
{/if}
{if $fields.shipping_contact_name.acl > 0}
{counter name="fieldsUsed"}
<td width='12.5%' scope="row">
{if !$fields.shipping_contact_name.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_SHIPPING_CONTACT_NAME' module='Quotes'}{/capture}
{$label|strip_semicolon}:
{else}
{counter name="fieldsHidden"}
{/if}
</td>
<td width='37.5%'  >
{if !$fields.shipping_contact_name.hidden}
{counter name="panelFieldCount"}

{if !empty($fields.shipping_contact_id.value)}<a href="index.php?module=Contacts&action=DetailView&record={$fields.shipping_contact_id.value}">{/if}
<span id="shipping_contact_id" class="sugar_field">{$fields.shipping_contact_name.value}</span>
{if !empty($fields.shipping_contact_id.value)}</a>{/if}
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
{if $fields.billing_address_street.acl > 0}
{counter name="fieldsUsed"}
<td width='12.5%' scope="row">
{if !$fields.billing_address_street.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_BILL_TO' module='Quotes'}{/capture}
{$label|strip_semicolon}:
{else}
{counter name="fieldsHidden"}
{/if}
</td>
<td width='37.5%'  >
{if !$fields.billing_address_street.hidden}
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
{/if}
</td>
{else}
<td scope="row">&nbsp;</td><td>&nbsp;</td>
{/if}
{if $fields.shipping_address_street.acl > 0}
{counter name="fieldsUsed"}
<td width='12.5%' scope="row">
{if !$fields.shipping_address_street.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_SHIP_TO' module='Quotes'}{/capture}
{$label|strip_semicolon}:
{else}
{counter name="fieldsHidden"}
{/if}
</td>
<td width='37.5%'  >
{if !$fields.shipping_address_street.hidden}
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
{capture name="label" assign="label"}{sugar_translate label='LBL_DESCRIPTION' module='Quotes'}{/capture}
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
<script>document.getElementById("LBL_QUOTE_INFORMATION").style.display='none';</script>
{/if}
<div id='LBL_PANEL_ASSIGNMENT' class='detail view'>
{counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}
<h4>{sugar_translate label='LBL_PANEL_ASSIGNMENT' module='Quotes'}</h4>
<table id='detailpanel_2' cellspacing='{$gridline}'>
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{if $fields.assigned_user_name.acl > 0}
{counter name="fieldsUsed"}
<td width='12.5%' scope="row">
{if !$fields.assigned_user_name.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_ASSIGNED_TO' module='Quotes'}{/capture}
{$label|strip_semicolon}:
{else}
{counter name="fieldsHidden"}
{/if}
</td>
<td width='37.5%'  >
{if !$fields.assigned_user_name.hidden}
{counter name="panelFieldCount"}

<span id="assigned_user_id" class="sugar_field">{$fields.assigned_user_name.value}</span>
{/if}
</td>
{else}
<td scope="row">&nbsp;</td><td>&nbsp;</td>
{/if}
{if $fields.date_modified.acl > 0}
{counter name="fieldsUsed"}
<td width='12.5%' scope="row">
{if !$fields.date_modified.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_DATE_MODIFIED' module='Quotes'}{/capture}
{$label|strip_semicolon}:
{else}
{counter name="fieldsHidden"}
{/if}
</td>
<td width='37.5%'  >
{if !$fields.date_modified.hidden}
{counter name="panelFieldCount"}
<span id="date_modified" class="sugar_field">{$fields.date_modified.value} {$APP.LBL_BY} {$fields.modified_by_name.value}</span>
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
{if $fields.team_name.acl > 0}
{counter name="fieldsUsed"}
<td width='12.5%' scope="row">
{if !$fields.team_name.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_TEAMS' module='Quotes'}{/capture}
{$label|strip_semicolon}:
{else}
{counter name="fieldsHidden"}
{/if}
</td>
<td width='37.5%'  >
{if !$fields.team_name.hidden}
{counter name="panelFieldCount"}

{sugarvar_teamset parentFieldArray=fields vardef=$fields.team_name tabindex='' display='' labelSpan='' fieldSpan='' formName='' tabindex=1 displayType='renderDetailView'  }
{/if}
</td>
{else}
<td scope="row">&nbsp;</td><td>&nbsp;</td>
{/if}
{if $fields.date_entered.acl > 0}
{counter name="fieldsUsed"}
<td width='12.5%' scope="row">
{if !$fields.date_entered.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_DATE_ENTERED' module='Quotes'}{/capture}
{$label|strip_semicolon}:
{else}
{counter name="fieldsHidden"}
{/if}
</td>
<td width='37.5%'  >
{if !$fields.date_entered.hidden}
{counter name="panelFieldCount"}
<span id="date_entered" class="sugar_field">{$fields.date_entered.value} {$APP.LBL_BY} {$fields.created_by_name.value}</span>
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
<script>document.getElementById("LBL_PANEL_ASSIGNMENT").style.display='none';</script>
{/if}
</div></div>

<div class="detail view">
<table width="100%" border="0" cellpadding="0" cellspacing="{$gridline}">
<tr>
<td scope="row" align="left" colspan="7"><h4>{$MOD.LBL_LINE_ITEM_INFORMATION}</h4></td>
</tr>
{foreach from=$ordered_bundle_list key=index item=product_bundle}
{assign var=product_bundle_product_note_list value=$product_bundle->get_notes()}
{assign var=bundle_list value=$product_bundle->get_product_bundle_line_items()}
{assign var=BUNDLE_NAME value=$product_bundle->name}
{assign var=bundle_key value=$product_bundle->bundle_stage}
{assign var=BUNDLE_STAGE value=$APP_LIST_STRINGS.quote_stage_dom.$bundle_key}
<!-- BEGIN: product_bundle -->
<tr>
<td scope="row" width="1%" valign="top" style="text-align: left;" colspan='3'>{$MOD.LBL_BUNDLE_NAME}&nbsp;<b>{$BUNDLE_NAME}</b></td>
<td scope="row" width="45%" valign="top" style="text-align: left;" colspan='{if $product_bundle->deal_tot != "0.00" && $product_bundle->deal_tot != ""}4{else}3{/if}'>{$MOD.LBL_BUNDLE_STAGE}&nbsp;<b>{$BUNDLE_STAGE}</b></td>
</tr>
<!-- BEGIN: bundle_row -->
<!-- BEGIN: product_row -->
<tr>
<td scope="row" width="1%" valign="top" style="text-align: left;">&nbsp;</td>
<td scope="row" width="10%" valign="top" style="text-align: center;">{$MOD.LBL_LIST_QUANTITY}</td>
{if $bean->deal_tot != "0.00"}
<td scope="row" width="30%" valign="top" style="text-align: left;">{$MOD.LBL_LIST_PRODUCT_NAME}</td>
{else}
<td scope="row" width="45%" valign="top" style="text-align: left;">{$MOD.LBL_LIST_PRODUCT_NAME}</td>
{/if}
<td scope="row" width="15%" valign="top" style="text-align: right;">{$MOD.LBL_LIST_COST_PRICE}</td>
<td scope="row" width="15%" valign="top" style="text-align: right;">{$MOD.LBL_LIST_LIST_PRICE}</td>
<td scope="row" width="15%" valign="top" style="text-align: right;">{$MOD.LBL_LIST_DISCOUNT_PRICE}</td>
{if $product_bundle->deal_tot!= "0.00" && $product_bundle->deal_tot!= ""}
<td scope="row" width="15%" valign="top" style="text-align: right;">{$MOD.LBL_LIST_DEAL_TOT}</td>
{/if}
</tr>
{if is_array($bundle_list)}
{counter start=0 print=false}
{foreach from=$bundle_list key=key item=line_item}
{if $line_item->object_name == "Product"}
<tr>
<td width="1" valign="top"style="text-align: center;">{if $bean->show_line_nums == 1}{counter print=true}{/if}&nbsp;</td>
<td valign="top" style="text-align: center;">{$line_item->quantity}</td>
<td valign="top"><a href="index.php?module=Products&action=DetailView&record={$line_item->id}">{$line_item->name}</a><BR>{$line_item->description|nl2br}</td>
{if $line_item->currency_id == $bean->currency_id && $line_item->currency_id != "-99"}
{assign var="COST_PRICE" value=$line_item->cost_price}
{assign var="LIST_PRICE" value=$line_item->list_price}
{assign var="DISCOUNT_PRICE" value=$line_item->discount_price}
{assign var="DISCOUNT_AMOUNT" value=$line_item->discount_amount}
{assign var="SELECT_DISCOUNT" value=$line_item->discount_select}
{else}
{assign var="COST_PRICE" value=$line_item->cost_usdollar}
{assign var="LIST_PRICE" value=$line_item->list_usdollar}
{assign var="DISCOUNT_PRICE" value=$line_item->discount_usdollar}
{assign var="DISCOUNT_AMOUNT" value=$line_item->discount_amount_usdollar}
{assign var="SELECT_DISCOUNT" value=$line_item->discount_select}
{/if}
<td valign="top" style="text-align: right;">{sugar_currency_format var=$COST_PRICE currency_id=$CURRENCY_ID}</td>
<td valign="top" style="text-align: right;">{sugar_currency_format var=$LIST_PRICE currency_id=$CURRENCY_ID}</td>
<td valign="top" style="text-align: right;">{sugar_currency_format var=$DISCOUNT_PRICE currency_id=$CURRENCY_ID}</td>
{if $line_item->discount_amount != "0.00" && $product_bundle->deal_tot!= ""}
{if $line_item->discount_select}
<td valign="top" style="text-align: right;">{sugar_currency_format var=$DISCOUNT_AMOUNT currency_symbol=''}%</td>
{else}
<td valign="top" style="text-align: right;">{sugar_currency_format var=$DISCOUNT_AMOUNT currency_id=$CURRENCY_ID}</td>
{/if}
{/if}
</tr>
{elseif $line_item->object_name == "ProductBundleNote"}
<tr valign="top">
<td width='1' valign="top" style="text-align: center;">&nbsp;</td>
<td valign="top" style="text-align: center;">&nbsp;</td>
<td valign="top">{$line_item->description|nl2br|replace:'\\':''}</td>
<td valign="top">&nbsp;</td>
<td valign="top">&nbsp;</td>
<td valign="top">&nbsp;</td>
</tr>
{/if}
{/foreach}
<tr><td colspan='7' NOWRAP><HR><br></td></tr>
<tr>
<td NOWRAP>&nbsp;</td>
<td NOWRAP>&nbsp;</td>
<td style="text-align: right;">&nbsp;</td>
<td>&nbsp;</td>
{if $bean->deal_tot != "0.00"}
<td>&nbsp;</td>
{/if}
<td NOWRAP style="text-align: right;">{$MOD.LBL_SUBTOTAL}</td>
<td NOWRAP style="text-align: right;">{sugar_currency_format var=$product_bundle->subtotal currency_id=$CURRENCY_ID}</td>
</tr><tr>
{if $product_bundle->deal_tot!= "0.00" && $product_bundle->deal_tot!= ""}
<td NOWRAP>&nbsp;</td>
<td NOWRAP>&nbsp;</td>
<td style="text-align: right;">&nbsp;</td>
<td>&nbsp;</td>
{if $bean->deal_tot != "0.00"}
<td>&nbsp;</td>
{/if}
<td NOWRAP style="text-align: right;">{$MOD.LBL_DISCOUNT_TOTAL}</td>
<td NOWRAP style="text-align: right;">{sugar_currency_format var=$product_bundle->deal_tot currency_id=$CURRENCY_ID}</td>
</tr><tr>
<td NOWRAP>&nbsp;</td>
<td NOWRAP>&nbsp;</td>
<td style="text-align: right;">&nbsp;</td>
<td>&nbsp;</td>
{if $bean->deal_tot != "0.00"}
<td>&nbsp;</td>
{/if}
<td NOWRAP style="text-align: right;">{$MOD.LBL_NEW_SUB}</td>
<td NOWRAP style="text-align: right;">{sugar_currency_format var=$product_bundle->new_sub currency_id=$CURRENCY_ID}</td>
</tr><tr>
{/if}
<td NOWRAP>&nbsp;</td>
<td NOWRAP>&nbsp;</td>
<td style="text-align: right;">&nbsp;</td>
<td>&nbsp;</td>
{if $bean->deal_tot != "0.00"}
<td>&nbsp;</td>
{/if}
<td NOWRAP style="text-align: right;">{$MOD.LBL_TAX}</td>
<td NOWRAP style="text-align: right;">{sugar_currency_format var=$product_bundle->tax currency_id=$CURRENCY_ID}</td>
</tr><tr>
<td NOWRAP>&nbsp;</td>
<td NOWRAP>&nbsp;</td>
<td style="text-align: right;">&nbsp;</td>
<td>&nbsp;</td>
{if $bean->deal_tot != "0.00"}
<td>&nbsp;</td>
{/if}
<td NOWRAP style="text-align: right;">{$MOD.LBL_SHIPPING}</td>
<td NOWRAP style="text-align: right;">{sugar_currency_format var=$product_bundle->shipping currency_id=$CURRENCY_ID}</td>
</tr><tr>
<td NOWRAP>&nbsp;</td>
<td colspan='3' NOWRAP>&nbsp;</td>
{if $bean->deal_tot != "0.00"}
<td>&nbsp;</td>
{/if}
<td NOWRAP style="text-align: right;">{$MOD.LBL_TOTAL}</td>
<td NOWRAP style="text-align: right;">{sugar_currency_format var=$product_bundle->total currency_id=$CURRENCY_ID}</td>
</tr>
<tr><td colspan='7' NOWRAP><br></td></tr>
{/if}
{/foreach}
{if !empty($bean->calc_grand_total) && $bean->calc_grand_total == 1}

<tr><td scope="row" colspan='7' valign="top" style="text-align: left;">{$MOD.LBL_LIST_GRAND_TOTAL}</td></tr>
<tr>
<td NOWRAP>&nbsp;</td>
<td NOWRAP>&nbsp;</td>
{if abs($bean->deal_tot) > 0.01}
<td>&nbsp;</td>
{/if}
<td style="text-align: right;">{$MOD.LBL_CURRENCY}</td>
<td>{$CURRENCY}</td>
<td NOWRAP style="text-align: right;">{$MOD.LBL_SUBTOTAL}</td>
<td NOWRAP style="text-align: right;">{sugar_currency_format var=$bean->subtotal currency_id=$CURRENCY_ID}</td>
</tr><tr>
{if abs($bean->deal_tot) > 0.01}
<td colspan='4' NOWRAP>&nbsp;</td>
{if abs($bean->deal_tot) > 0.01}
<td>&nbsp;</td>
{/if}
<td NOWRAP style="text-align: right;">{$MOD.LBL_DISCOUNT_TOTAL}</td>
<td NOWRAP style="text-align: right;">{sugar_currency_format var=$bean->deal_tot currency_id=$CURRENCY_ID}</td>
</tr><tr>
<td colspan='4' NOWRAP>&nbsp;</td>
{if abs($bean->deal_tot) > 0.01}
<td>&nbsp;</td>
{/if}
<td NOWRAP style="text-align: right;">{$MOD.LBL_NEW_SUB}</td>
<td NOWRAP style="text-align: right;">{sugar_currency_format var=$bean->new_sub currency_id=$CURRENCY_ID}</td>
</tr><tr>
{/if}
<td NOWRAP>&nbsp;</td>
<td NOWRAP>&nbsp;</td>
{if abs($bean->deal_tot) > 0.01}
<td>&nbsp;</td>
{/if}
<td style="text-align: right;">{$MOD.LBL_TAXRATE}</td>
<td>{sugar_number_format precision=2 var=$bean->taxrate_value} {$APP.LBL_PERCENTAGE_SYMBOL}</td>
<td NOWRAP style="text-align: right;">{$MOD.LBL_TAX}</td>
<td NOWRAP style="text-align: right;">{sugar_currency_format var=$bean->tax currency_id=$CURRENCY_ID}</td>
</tr><tr>
<td NOWRAP>&nbsp;</td>
<td NOWRAP>&nbsp;</td>
{if abs($bean->deal_tot) > 0.01}
<td>&nbsp;</td>
{/if}
<td style="text-align: right;">{$MOD.LBL_SHIPPING_PROVIDER}</td>
<td>{$bean->shipper_name}&nbsp;</td>
<td NOWRAP style="text-align: right;">{$MOD.LBL_SHIPPING}</td>
<td NOWRAP style="text-align: right;">{sugar_currency_format var=$bean->shipping currency_id=$CURRENCY_ID}</td>
</tr><tr>
<td colspan='4' NOWRAP>&nbsp;</td>
{if abs($bean->deal_tot) > 0.01}
<td>&nbsp;</td>
{/if}
<td NOWRAP style="text-align: right;">{$MOD.LBL_TOTAL}</td>
<td NOWRAP style="text-align: right;">{sugar_currency_format var=$bean->total currency_id=$CURRENCY_ID}</td>
</tr>

{/if}
</table>
</div>{literal}
<script type=text/javascript>
SUGAR.forms.AssignmentHandler.registerView('DetailView');
</script>{/literal}
