<?php /* Smarty version 2.6.11, created on 2014-05-09 16:58:58
         compiled from cache/modules/Quotes/DetailView.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_include', 'cache/modules/Quotes/DetailView.tpl', 38, false),array('function', 'counter', 'cache/modules/Quotes/DetailView.tpl', 43, false),array('function', 'sugar_translate', 'cache/modules/Quotes/DetailView.tpl', 44, false),array('function', 'sugarvar_teamset', 'cache/modules/Quotes/DetailView.tpl', 572, false),array('function', 'sugar_currency_format', 'cache/modules/Quotes/DetailView.tpl', 663, false),array('function', 'sugar_number_format', 'cache/modules/Quotes/DetailView.tpl', 786, false),array('modifier', 'strip_semicolon', 'cache/modules/Quotes/DetailView.tpl', 55, false),array('modifier', 'escape', 'cache/modules/Quotes/DetailView.tpl', 408, false),array('modifier', 'url2html', 'cache/modules/Quotes/DetailView.tpl', 408, false),array('modifier', 'nl2br', 'cache/modules/Quotes/DetailView.tpl', 408, false),array('modifier', 'strip_tags', 'cache/modules/Quotes/DetailView.tpl', 413, false),array('modifier', 'replace', 'cache/modules/Quotes/DetailView.tpl', 678, false),)), $this); ?>


<table cellpadding="1" cellspacing="0" border="0" width="100%" class="actionsContainer">
<tr>
<td class="buttons" align="left" NOWRAP>
<form action="index.php" method="post" name="DetailView" id="form">
<input type="hidden" name="module" value="<?php echo $this->_tpl_vars['module']; ?>
">
<input type="hidden" name="record" value="<?php echo $this->_tpl_vars['fields']['id']['value']; ?>
">
<input type="hidden" name="return_action">
<input type="hidden" name="return_module">
<input type="hidden" name="return_id">
<input type="hidden" name="module_tab">
<input type="hidden" name="isDuplicate" value="false">
<input type="hidden" name="offset" value="<?php echo $this->_tpl_vars['offset']; ?>
">
<input type="hidden" name="action" value="EditView">
<?php if ($this->_tpl_vars['bean']->aclAccess('edit')): ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_EDIT_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_EDIT_BUTTON_KEY']; ?>
" class="button primary" onclick="this.form.return_module.value='Quotes'; this.form.return_action.value='DetailView'; this.form.return_id.value='<?php echo $this->_tpl_vars['id']; ?>
'; this.form.action.value='EditView';" type="submit" name="Edit" id="edit_button" value="<?php echo $this->_tpl_vars['APP']['LBL_EDIT_BUTTON_LABEL']; ?>
"><?php endif; ?> 
<?php if ($this->_tpl_vars['bean']->aclAccess('edit')): ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_DUPLICATE_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_DUPLICATE_BUTTON_KEY']; ?>
" class="button" onclick="this.form.return_module.value='Quotes'; this.form.return_action.value='DetailView'; this.form.isDuplicate.value=true; this.form.action.value='EditView'; this.form.return_id.value='<?php echo $this->_tpl_vars['id']; ?>
';" type="submit" name="Duplicate" value="<?php echo $this->_tpl_vars['APP']['LBL_DUPLICATE_BUTTON_LABEL']; ?>
" id="duplicate_button"><?php endif; ?> 
<?php if ($this->_tpl_vars['bean']->aclAccess('delete')): ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_DELETE_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_DELETE_BUTTON_KEY']; ?>
" class="button" onclick="this.form.return_module.value='Quotes'; this.form.return_action.value='ListView'; this.form.action.value='Delete'; return confirm('<?php echo $this->_tpl_vars['APP']['NTC_DELETE_CONFIRMATION']; ?>
');" type="submit" name="Delete" value="<?php echo $this->_tpl_vars['APP']['LBL_DELETE_BUTTON_LABEL']; ?>
"><?php endif; ?> 
</form>
</td>
<td class="buttons" align="left" NOWRAP>
<form action="index.php" method="POST" name="Quote2Opp" id="form"><input type="hidden" name="module" value="Quotes"><input type="hidden" name="record" value="<?php echo $this->_tpl_vars['fields']['id']['value']; ?>
"><input type="hidden" name="user_id" value="<?php echo $this->_tpl_vars['current_user']->id; ?>
"><input type="hidden" name="team_id" value="<?php echo $this->_tpl_vars['fields']['team_id']['value']; ?>
"><input type="hidden" name="user_name" value="<?php echo $this->_tpl_vars['current_user']->user_name; ?>
"><input type="hidden" name="action" value="QuoteToOpportunity"><input type="hidden" name="opportunity_subject" value="<?php echo $this->_tpl_vars['fields']['name']['value']; ?>
"><input type="hidden" name="opportunity_name" value="<?php echo $this->_tpl_vars['fields']['name']['value']; ?>
"><input type="hidden" name="opportunity_id" value="<?php echo $this->_tpl_vars['fields']['billing_account_id']['value']; ?>
"><input type="hidden" name="amount" value="<?php echo $this->_tpl_vars['fields']['total']['value']; ?>
"><input type="hidden" name="valid_until" value="<?php echo $this->_tpl_vars['fields']['date_quote_expected_closed']['value']; ?>
"><input type="hidden" name="currency_id" value="<?php echo $this->_tpl_vars['fields']['currency_id']['value']; ?>
"><input title="<?php echo $this->_tpl_vars['APP']['LBL_QUOTE_TO_OPPORTUNITY_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_QUOTE_TO_OPPORTUNITY_KEY']; ?>
" class="button" type="submit" name="opp_to_quote_button" value="<?php echo $this->_tpl_vars['APP']['LBL_QUOTE_TO_OPPORTUNITY_LABEL']; ?>
"></form>
</td>
<td class="buttons" align="left" NOWRAP>
<form action="index.php" method="<?php echo $this->_tpl_vars['PDFMETHOD']; ?>
" name="ViewPDF" id="form"><input type="hidden" name="module" value="Quotes"><input type="hidden" name="record" value="<?php echo $this->_tpl_vars['fields']['id']['value']; ?>
"><input type="hidden" name="action" value="sugarpdf"><input type="hidden" name="email_action"><input title="<?php echo $this->_tpl_vars['APP']['LBL_EMAIL_COMPOSE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_EMAIL_PDF_BUTTON_KEY']; ?>
" class="button" type="submit" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_EMAIL_COMPOSE']; ?>
" onclick="location.href='mailto:';return false;"> <input title="<?php echo $this->_tpl_vars['APP']['LBL_VIEW_PDF_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_VIEW_PDF_BUTTON_KEY']; ?>
" class="button" type="submit" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_VIEW_PDF_BUTTON_LABEL']; ?>
">
</td>
<td class="buttons" align="left" NOWRAP>
<?php if ($this->_tpl_vars['bean']->aclAccess('detail')):  if (! empty ( $this->_tpl_vars['fields']['id']['value'] ) && $this->_tpl_vars['isAuditEnabled']): ?><input title="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
" class="button" onclick='open_popup("Audit", "600", "400", "&record=<?php echo $this->_tpl_vars['fields']['id']['value']; ?>
&module_name=Quotes", true, false,  { "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] } ); return false;' type="submit" value="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
"><?php endif;  endif; ?>
</td>
<td align="right" width="100%"><?php echo $this->_tpl_vars['ADMIN_EDIT']; ?>

<?php echo $this->_tpl_vars['PAGINATION']; ?>

</td>
<td align="right" width="10%">&nbsp;</td>
<td align="right" width="100%" NOWRAP>
<?php echo $this->_tpl_vars['MOD']['PDF_FORMAT']; ?>
 <select name="sugarpdf" id="sugarpdf"><?php echo $this->_tpl_vars['LAYOUT_OPTIONS']; ?>
</select></form>&nbsp;
</td>
</tr>
</table><?php echo smarty_function_sugar_include(array('include' => $this->_tpl_vars['includes']), $this);?>

<div id="Quotes_detailview_tabs"
>
<div >
<div id='LBL_QUOTE_INFORMATION' class='detail view'>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','start' => 0,'print' => false,'assign' => 'panelFieldCount'), $this);?>

<h4><?php echo smarty_function_sugar_translate(array('label' => 'LBL_QUOTE_INFORMATION','module' => 'Quotes'), $this);?>
</h4>
<table id='detailpanel_1' cellspacing='<?php echo $this->_tpl_vars['gridline']; ?>
'>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php echo smarty_function_counter(array('name' => 'fieldsHidden','start' => 0,'print' => false,'assign' => 'fieldsHidden'), $this);?>

<?php ob_start(); ?>
<tr>
<?php if ($this->_tpl_vars['fields']['name']['acl'] > 0):  echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="row">
<?php if (! $this->_tpl_vars['fields']['name']['hidden']):  ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_QUOTE_NAME','module' => 'Quotes'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php else:  echo smarty_function_counter(array('name' => 'fieldsHidden'), $this);?>

<?php endif; ?>
</td>
<td width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['name']['hidden']):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['name']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['name']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['name']['value']);  endif; ?> 
<span class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['name']['name']; ?>
"><?php echo $this->_tpl_vars['fields']['name']['value']; ?>
</span>
<?php endif; ?>
</td>
<?php else: ?>
<td scope="row">&nbsp;</td><td>&nbsp;</td>
<?php endif;  if ($this->_tpl_vars['fields']['opportunity_name']['acl'] > 0):  echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="row">
<?php if (! $this->_tpl_vars['fields']['opportunity_name']['hidden']):  ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_OPPORTUNITY_NAME','module' => 'Quotes'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php else:  echo smarty_function_counter(array('name' => 'fieldsHidden'), $this);?>

<?php endif; ?>
</td>
<td width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['opportunity_name']['hidden']):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (! empty ( $this->_tpl_vars['fields']['opportunity_id']['value'] )): ?><a href="index.php?module=Opportunities&action=DetailView&record=<?php echo $this->_tpl_vars['fields']['opportunity_id']['value']; ?>
"><?php endif; ?>
<span id="opportunity_id" class="sugar_field"><?php echo $this->_tpl_vars['fields']['opportunity_name']['value']; ?>
</span>
<?php if (! empty ( $this->_tpl_vars['fields']['opportunity_id']['value'] )): ?></a><?php endif;  endif; ?>
</td>
<?php else: ?>
<td scope="row">&nbsp;</td><td>&nbsp;</td>
<?php endif; ?>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean();  if ($this->_tpl_vars['fieldsUsed'] > 0 && $this->_tpl_vars['fieldsUsed'] != $this->_tpl_vars['fieldsHidden']):  echo $this->_tpl_vars['tableRow']; ?>

<?php endif;  echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php echo smarty_function_counter(array('name' => 'fieldsHidden','start' => 0,'print' => false,'assign' => 'fieldsHidden'), $this);?>

<?php ob_start(); ?>
<tr>
<?php if ($this->_tpl_vars['fields']['quote_num']['acl'] > 0):  echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="row">
<?php if (! $this->_tpl_vars['fields']['quote_num']['hidden']):  ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_QUOTE_NUM','module' => 'Quotes'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php else:  echo smarty_function_counter(array('name' => 'fieldsHidden'), $this);?>

<?php endif; ?>
</td>
<td width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['quote_num']['hidden']):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<span class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['quote_num']['name']; ?>
">
<?php $this->assign('value', $this->_tpl_vars['fields']['quote_num']['value']);  echo $this->_tpl_vars['value']; ?>

</span>
<?php endif; ?>
</td>
<?php else: ?>
<td scope="row">&nbsp;</td><td>&nbsp;</td>
<?php endif;  if ($this->_tpl_vars['fields']['quote_stage']['acl'] > 0):  echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="row">
<?php if (! $this->_tpl_vars['fields']['quote_stage']['hidden']):  ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_QUOTE_STAGE','module' => 'Quotes'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php else:  echo smarty_function_counter(array('name' => 'fieldsHidden'), $this);?>

<?php endif; ?>
</td>
<td width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['quote_stage']['hidden']):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>



<?php if (is_string ( $this->_tpl_vars['fields']['quote_stage']['options'] )): ?>
<input type="hidden" class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['quote_stage']['name']; ?>
" value="<?php echo $this->_tpl_vars['fields']['quote_stage']['options']; ?>
">
<?php echo $this->_tpl_vars['fields']['quote_stage']['options']; ?>

<?php else: ?>
<input type="hidden" class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['quote_stage']['name']; ?>
" value="<?php echo $this->_tpl_vars['fields']['quote_stage']['value']; ?>
">
<?php echo $this->_tpl_vars['fields']['quote_stage']['options'][$this->_tpl_vars['fields']['quote_stage']['value']]; ?>

<?php endif;  endif; ?>
</td>
<?php else: ?>
<td scope="row">&nbsp;</td><td>&nbsp;</td>
<?php endif; ?>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean();  if ($this->_tpl_vars['fieldsUsed'] > 0 && $this->_tpl_vars['fieldsUsed'] != $this->_tpl_vars['fieldsHidden']):  echo $this->_tpl_vars['tableRow']; ?>

<?php endif;  echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php echo smarty_function_counter(array('name' => 'fieldsHidden','start' => 0,'print' => false,'assign' => 'fieldsHidden'), $this);?>

<?php ob_start(); ?>
<tr>
<?php if ($this->_tpl_vars['fields']['purchase_order_num']['acl'] > 0):  echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="row">
<?php if (! $this->_tpl_vars['fields']['purchase_order_num']['hidden']):  ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_PURCHASE_ORDER_NUM','module' => 'Quotes'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php else:  echo smarty_function_counter(array('name' => 'fieldsHidden'), $this);?>

<?php endif; ?>
</td>
<td width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['purchase_order_num']['hidden']):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['purchase_order_num']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['purchase_order_num']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['purchase_order_num']['value']);  endif; ?> 
<span class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['purchase_order_num']['name']; ?>
"><?php echo $this->_tpl_vars['fields']['purchase_order_num']['value']; ?>
</span>
<?php endif; ?>
</td>
<?php else: ?>
<td scope="row">&nbsp;</td><td>&nbsp;</td>
<?php endif;  if ($this->_tpl_vars['fields']['date_quote_expected_closed']['acl'] > 0):  echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="row">
<?php if (! $this->_tpl_vars['fields']['date_quote_expected_closed']['hidden']):  ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_DATE_QUOTE_EXPECTED_CLOSED','module' => 'Quotes'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php else:  echo smarty_function_counter(array('name' => 'fieldsHidden'), $this);?>

<?php endif; ?>
</td>
<td width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['date_quote_expected_closed']['hidden']):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['date_quote_expected_closed']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['date_quote_expected_closed']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['date_quote_expected_closed']['value']);  endif; ?> 
<span class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['date_quote_expected_closed']['name']; ?>
"><?php echo $this->_tpl_vars['fields']['date_quote_expected_closed']['value']; ?>
</span>
<?php endif; ?>
</td>
<?php else: ?>
<td scope="row">&nbsp;</td><td>&nbsp;</td>
<?php endif; ?>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean();  if ($this->_tpl_vars['fieldsUsed'] > 0 && $this->_tpl_vars['fieldsUsed'] != $this->_tpl_vars['fieldsHidden']):  echo $this->_tpl_vars['tableRow']; ?>

<?php endif;  echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php echo smarty_function_counter(array('name' => 'fieldsHidden','start' => 0,'print' => false,'assign' => 'fieldsHidden'), $this);?>

<?php ob_start(); ?>
<tr>
<?php if ($this->_tpl_vars['fields']['payment_terms']['acl'] > 0):  echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="row">
<?php if (! $this->_tpl_vars['fields']['payment_terms']['hidden']):  ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_PAYMENT_TERMS','module' => 'Quotes'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php else:  echo smarty_function_counter(array('name' => 'fieldsHidden'), $this);?>

<?php endif; ?>
</td>
<td width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['payment_terms']['hidden']):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>



<?php if (is_string ( $this->_tpl_vars['fields']['payment_terms']['options'] )): ?>
<input type="hidden" class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['payment_terms']['name']; ?>
" value="<?php echo $this->_tpl_vars['fields']['payment_terms']['options']; ?>
">
<?php echo $this->_tpl_vars['fields']['payment_terms']['options']; ?>

<?php else: ?>
<input type="hidden" class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['payment_terms']['name']; ?>
" value="<?php echo $this->_tpl_vars['fields']['payment_terms']['value']; ?>
">
<?php echo $this->_tpl_vars['fields']['payment_terms']['options'][$this->_tpl_vars['fields']['payment_terms']['value']]; ?>

<?php endif;  endif; ?>
</td>
<?php else: ?>
<td scope="row">&nbsp;</td><td>&nbsp;</td>
<?php endif;  if ($this->_tpl_vars['fields']['original_po_date']['acl'] > 0):  echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="row">
<?php if (! $this->_tpl_vars['fields']['original_po_date']['hidden']):  ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_ORIGINAL_PO_DATE','module' => 'Quotes'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php else:  echo smarty_function_counter(array('name' => 'fieldsHidden'), $this);?>

<?php endif; ?>
</td>
<td width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['original_po_date']['hidden']):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['original_po_date']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['original_po_date']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['original_po_date']['value']);  endif; ?> 
<span class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['original_po_date']['name']; ?>
"><?php echo $this->_tpl_vars['fields']['original_po_date']['value']; ?>
</span>
<?php endif; ?>
</td>
<?php else: ?>
<td scope="row">&nbsp;</td><td>&nbsp;</td>
<?php endif; ?>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean();  if ($this->_tpl_vars['fieldsUsed'] > 0 && $this->_tpl_vars['fieldsUsed'] != $this->_tpl_vars['fieldsHidden']):  echo $this->_tpl_vars['tableRow']; ?>

<?php endif;  echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php echo smarty_function_counter(array('name' => 'fieldsHidden','start' => 0,'print' => false,'assign' => 'fieldsHidden'), $this);?>

<?php ob_start(); ?>
<tr>
<?php if ($this->_tpl_vars['fields']['billing_account_name']['acl'] > 0):  echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="row">
<?php if (! $this->_tpl_vars['fields']['billing_account_name']['hidden']):  ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_BILLING_ACCOUNT_NAME','module' => 'Quotes'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php else:  echo smarty_function_counter(array('name' => 'fieldsHidden'), $this);?>

<?php endif; ?>
</td>
<td width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['billing_account_name']['hidden']):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (! empty ( $this->_tpl_vars['fields']['billing_account_id']['value'] )): ?><a href="index.php?module=Accounts&action=DetailView&record=<?php echo $this->_tpl_vars['fields']['billing_account_id']['value']; ?>
"><?php endif; ?>
<span id="billing_account_id" class="sugar_field"><?php echo $this->_tpl_vars['fields']['billing_account_name']['value']; ?>
</span>
<?php if (! empty ( $this->_tpl_vars['fields']['billing_account_id']['value'] )): ?></a><?php endif;  endif; ?>
</td>
<?php else: ?>
<td scope="row">&nbsp;</td><td>&nbsp;</td>
<?php endif;  if ($this->_tpl_vars['fields']['shipping_account_name']['acl'] > 0):  echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="row">
<?php if (! $this->_tpl_vars['fields']['shipping_account_name']['hidden']):  ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_SHIPPING_ACCOUNT_NAME','module' => 'Quotes'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php else:  echo smarty_function_counter(array('name' => 'fieldsHidden'), $this);?>

<?php endif; ?>
</td>
<td width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['shipping_account_name']['hidden']):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (! empty ( $this->_tpl_vars['fields']['shipping_account_id']['value'] )): ?><a href="index.php?module=Accounts&action=DetailView&record=<?php echo $this->_tpl_vars['fields']['shipping_account_id']['value']; ?>
"><?php endif; ?>
<span id="shipping_account_id" class="sugar_field"><?php echo $this->_tpl_vars['fields']['shipping_account_name']['value']; ?>
</span>
<?php if (! empty ( $this->_tpl_vars['fields']['shipping_account_id']['value'] )): ?></a><?php endif;  endif; ?>
</td>
<?php else: ?>
<td scope="row">&nbsp;</td><td>&nbsp;</td>
<?php endif; ?>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean();  if ($this->_tpl_vars['fieldsUsed'] > 0 && $this->_tpl_vars['fieldsUsed'] != $this->_tpl_vars['fieldsHidden']):  echo $this->_tpl_vars['tableRow']; ?>

<?php endif;  echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php echo smarty_function_counter(array('name' => 'fieldsHidden','start' => 0,'print' => false,'assign' => 'fieldsHidden'), $this);?>

<?php ob_start(); ?>
<tr>
<?php if ($this->_tpl_vars['fields']['billing_contact_name']['acl'] > 0):  echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="row">
<?php if (! $this->_tpl_vars['fields']['billing_contact_name']['hidden']):  ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_BILLING_CONTACT_NAME','module' => 'Quotes'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php else:  echo smarty_function_counter(array('name' => 'fieldsHidden'), $this);?>

<?php endif; ?>
</td>
<td width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['billing_contact_name']['hidden']):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (! empty ( $this->_tpl_vars['fields']['billing_contact_id']['value'] )): ?><a href="index.php?module=Contacts&action=DetailView&record=<?php echo $this->_tpl_vars['fields']['billing_contact_id']['value']; ?>
"><?php endif; ?>
<span id="billing_contact_id" class="sugar_field"><?php echo $this->_tpl_vars['fields']['billing_contact_name']['value']; ?>
</span>
<?php if (! empty ( $this->_tpl_vars['fields']['billing_contact_id']['value'] )): ?></a><?php endif;  endif; ?>
</td>
<?php else: ?>
<td scope="row">&nbsp;</td><td>&nbsp;</td>
<?php endif;  if ($this->_tpl_vars['fields']['shipping_contact_name']['acl'] > 0):  echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="row">
<?php if (! $this->_tpl_vars['fields']['shipping_contact_name']['hidden']):  ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_SHIPPING_CONTACT_NAME','module' => 'Quotes'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php else:  echo smarty_function_counter(array('name' => 'fieldsHidden'), $this);?>

<?php endif; ?>
</td>
<td width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['shipping_contact_name']['hidden']):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (! empty ( $this->_tpl_vars['fields']['shipping_contact_id']['value'] )): ?><a href="index.php?module=Contacts&action=DetailView&record=<?php echo $this->_tpl_vars['fields']['shipping_contact_id']['value']; ?>
"><?php endif; ?>
<span id="shipping_contact_id" class="sugar_field"><?php echo $this->_tpl_vars['fields']['shipping_contact_name']['value']; ?>
</span>
<?php if (! empty ( $this->_tpl_vars['fields']['shipping_contact_id']['value'] )): ?></a><?php endif;  endif; ?>
</td>
<?php else: ?>
<td scope="row">&nbsp;</td><td>&nbsp;</td>
<?php endif; ?>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean();  if ($this->_tpl_vars['fieldsUsed'] > 0 && $this->_tpl_vars['fieldsUsed'] != $this->_tpl_vars['fieldsHidden']):  echo $this->_tpl_vars['tableRow']; ?>

<?php endif;  echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php echo smarty_function_counter(array('name' => 'fieldsHidden','start' => 0,'print' => false,'assign' => 'fieldsHidden'), $this);?>

<?php ob_start(); ?>
<tr>
<?php if ($this->_tpl_vars['fields']['billing_address_street']['acl'] > 0):  echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="row">
<?php if (! $this->_tpl_vars['fields']['billing_address_street']['hidden']):  ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_BILL_TO','module' => 'Quotes'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php else:  echo smarty_function_counter(array('name' => 'fieldsHidden'), $this);?>

<?php endif; ?>
</td>
<td width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['billing_address_street']['hidden']):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<table border='0' cellpadding='0' cellspacing='0' width='100%'>
<tr>
<td width='99%'>
<input type="hidden" class="sugar_field" id="billing_address_street" value="<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['fields']['billing_address_street']['value'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlentitydecode') : smarty_modifier_escape($_tmp, 'htmlentitydecode')))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('url2html', true, $_tmp) : url2html($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
">
<input type="hidden" class="sugar_field" id="billing_address_city" value="<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['fields']['billing_address_city']['value'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlentitydecode') : smarty_modifier_escape($_tmp, 'htmlentitydecode')))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('url2html', true, $_tmp) : url2html($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
">
<input type="hidden" class="sugar_field" id="billing_address_country" value="<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['fields']['billing_address_country']['value'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlentitydecode') : smarty_modifier_escape($_tmp, 'htmlentitydecode')))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('url2html', true, $_tmp) : url2html($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
">
<input type="hidden" class="sugar_field" id="billing_address_postalcode" value="<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['fields']['billing_address_postalcode']['value'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlentitydecode') : smarty_modifier_escape($_tmp, 'htmlentitydecode')))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('url2html', true, $_tmp) : url2html($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
">
<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['fields']['billing_address_street']['value'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlentitydecode') : smarty_modifier_escape($_tmp, 'htmlentitydecode')))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('url2html', true, $_tmp) : url2html($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
<br>
<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['fields']['billing_address_city']['value'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlentitydecode') : smarty_modifier_escape($_tmp, 'htmlentitydecode')))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('url2html', true, $_tmp) : url2html($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
 <?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['fields']['billing_address_state']['value'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlentitydecode') : smarty_modifier_escape($_tmp, 'htmlentitydecode')))) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)))) ? $this->_run_mod_handler('url2html', true, $_tmp) : url2html($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
&nbsp;&nbsp;<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['fields']['billing_address_postalcode']['value'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlentitydecode') : smarty_modifier_escape($_tmp, 'htmlentitydecode')))) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)))) ? $this->_run_mod_handler('url2html', true, $_tmp) : url2html($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
<br>
<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['fields']['billing_address_country']['value'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlentitydecode') : smarty_modifier_escape($_tmp, 'htmlentitydecode')))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('url2html', true, $_tmp) : url2html($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>

</td>
<td class='dataField' width='1%'>
<?php echo $this->_tpl_vars['custom_code_billing']; ?>

</td>
</tr>
</table>
<?php endif; ?>
</td>
<?php else: ?>
<td scope="row">&nbsp;</td><td>&nbsp;</td>
<?php endif;  if ($this->_tpl_vars['fields']['shipping_address_street']['acl'] > 0):  echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="row">
<?php if (! $this->_tpl_vars['fields']['shipping_address_street']['hidden']):  ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_SHIP_TO','module' => 'Quotes'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php else:  echo smarty_function_counter(array('name' => 'fieldsHidden'), $this);?>

<?php endif; ?>
</td>
<td width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['shipping_address_street']['hidden']):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<table border='0' cellpadding='0' cellspacing='0' width='100%'>
<tr>
<td width='99%'>
<input type="hidden" class="sugar_field" id="shipping_address_street" value="<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['fields']['shipping_address_street']['value'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlentitydecode') : smarty_modifier_escape($_tmp, 'htmlentitydecode')))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('url2html', true, $_tmp) : url2html($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
">
<input type="hidden" class="sugar_field" id="shipping_address_city" value="<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['fields']['shipping_address_city']['value'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlentitydecode') : smarty_modifier_escape($_tmp, 'htmlentitydecode')))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('url2html', true, $_tmp) : url2html($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
">
<input type="hidden" class="sugar_field" id="shipping_address_country" value="<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['fields']['shipping_address_country']['value'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlentitydecode') : smarty_modifier_escape($_tmp, 'htmlentitydecode')))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('url2html', true, $_tmp) : url2html($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
">
<input type="hidden" class="sugar_field" id="shipping_address_postalcode" value="<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['fields']['shipping_address_postalcode']['value'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlentitydecode') : smarty_modifier_escape($_tmp, 'htmlentitydecode')))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('url2html', true, $_tmp) : url2html($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
">
<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['fields']['shipping_address_street']['value'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlentitydecode') : smarty_modifier_escape($_tmp, 'htmlentitydecode')))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('url2html', true, $_tmp) : url2html($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
<br>
<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['fields']['shipping_address_city']['value'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlentitydecode') : smarty_modifier_escape($_tmp, 'htmlentitydecode')))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('url2html', true, $_tmp) : url2html($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
 <?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['fields']['shipping_address_state']['value'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlentitydecode') : smarty_modifier_escape($_tmp, 'htmlentitydecode')))) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)))) ? $this->_run_mod_handler('url2html', true, $_tmp) : url2html($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
&nbsp;&nbsp;<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['fields']['shipping_address_postalcode']['value'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlentitydecode') : smarty_modifier_escape($_tmp, 'htmlentitydecode')))) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)))) ? $this->_run_mod_handler('url2html', true, $_tmp) : url2html($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
<br>
<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['fields']['shipping_address_country']['value'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlentitydecode') : smarty_modifier_escape($_tmp, 'htmlentitydecode')))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('url2html', true, $_tmp) : url2html($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>

</td>
<td class='dataField' width='1%'>
<?php echo $this->_tpl_vars['custom_code_shipping']; ?>

</td>
</tr>
</table>
<?php endif; ?>
</td>
<?php else: ?>
<td scope="row">&nbsp;</td><td>&nbsp;</td>
<?php endif; ?>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean();  if ($this->_tpl_vars['fieldsUsed'] > 0 && $this->_tpl_vars['fieldsUsed'] != $this->_tpl_vars['fieldsHidden']):  echo $this->_tpl_vars['tableRow']; ?>

<?php endif;  echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php echo smarty_function_counter(array('name' => 'fieldsHidden','start' => 0,'print' => false,'assign' => 'fieldsHidden'), $this);?>

<?php ob_start(); ?>
<tr>
<?php if ($this->_tpl_vars['fields']['description']['acl'] > 0):  echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="row">
<?php if (! $this->_tpl_vars['fields']['description']['hidden']):  ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_DESCRIPTION','module' => 'Quotes'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php else:  echo smarty_function_counter(array('name' => 'fieldsHidden'), $this);?>

<?php endif; ?>
</td>
<td width='37.5%' colspan='3' >
<?php if (! $this->_tpl_vars['fields']['description']['hidden']):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<span class="sugar_field" id="<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['fields']['description']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('url2html', true, $_tmp) : url2html($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
">
<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['fields']['description']['value'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlentitydecode') : smarty_modifier_escape($_tmp, 'htmlentitydecode')))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('url2html', true, $_tmp) : url2html($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>

</span>
<?php endif; ?>
</td>
<?php else: ?>
<td scope="row">&nbsp;</td><td>&nbsp;</td>
<?php endif; ?>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean();  if ($this->_tpl_vars['fieldsUsed'] > 0 && $this->_tpl_vars['fieldsUsed'] != $this->_tpl_vars['fieldsHidden']):  echo $this->_tpl_vars['tableRow']; ?>

<?php endif; ?>
</table>
</div>
<?php if ($this->_tpl_vars['panelFieldCount'] == 0): ?>
<script>document.getElementById("LBL_QUOTE_INFORMATION").style.display='none';</script>
<?php endif; ?>
<div id='LBL_PANEL_ASSIGNMENT' class='detail view'>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','start' => 0,'print' => false,'assign' => 'panelFieldCount'), $this);?>

<h4><?php echo smarty_function_sugar_translate(array('label' => 'LBL_PANEL_ASSIGNMENT','module' => 'Quotes'), $this);?>
</h4>
<table id='detailpanel_2' cellspacing='<?php echo $this->_tpl_vars['gridline']; ?>
'>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php echo smarty_function_counter(array('name' => 'fieldsHidden','start' => 0,'print' => false,'assign' => 'fieldsHidden'), $this);?>

<?php ob_start(); ?>
<tr>
<?php if ($this->_tpl_vars['fields']['assigned_user_name']['acl'] > 0):  echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="row">
<?php if (! $this->_tpl_vars['fields']['assigned_user_name']['hidden']):  ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_ASSIGNED_TO','module' => 'Quotes'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php else:  echo smarty_function_counter(array('name' => 'fieldsHidden'), $this);?>

<?php endif; ?>
</td>
<td width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['assigned_user_name']['hidden']):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<span id="assigned_user_id" class="sugar_field"><?php echo $this->_tpl_vars['fields']['assigned_user_name']['value']; ?>
</span>
<?php endif; ?>
</td>
<?php else: ?>
<td scope="row">&nbsp;</td><td>&nbsp;</td>
<?php endif;  if ($this->_tpl_vars['fields']['date_modified']['acl'] > 0):  echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="row">
<?php if (! $this->_tpl_vars['fields']['date_modified']['hidden']):  ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_DATE_MODIFIED','module' => 'Quotes'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php else:  echo smarty_function_counter(array('name' => 'fieldsHidden'), $this);?>

<?php endif; ?>
</td>
<td width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['date_modified']['hidden']):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>

<span id="date_modified" class="sugar_field"><?php echo $this->_tpl_vars['fields']['date_modified']['value']; ?>
 <?php echo $this->_tpl_vars['APP']['LBL_BY']; ?>
 <?php echo $this->_tpl_vars['fields']['modified_by_name']['value']; ?>
</span>
<?php endif; ?>
</td>
<?php else: ?>
<td scope="row">&nbsp;</td><td>&nbsp;</td>
<?php endif; ?>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean();  if ($this->_tpl_vars['fieldsUsed'] > 0 && $this->_tpl_vars['fieldsUsed'] != $this->_tpl_vars['fieldsHidden']):  echo $this->_tpl_vars['tableRow']; ?>

<?php endif;  echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php echo smarty_function_counter(array('name' => 'fieldsHidden','start' => 0,'print' => false,'assign' => 'fieldsHidden'), $this);?>

<?php ob_start(); ?>
<tr>
<?php if ($this->_tpl_vars['fields']['team_name']['acl'] > 0):  echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="row">
<?php if (! $this->_tpl_vars['fields']['team_name']['hidden']):  ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_TEAMS','module' => 'Quotes'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php else:  echo smarty_function_counter(array('name' => 'fieldsHidden'), $this);?>

<?php endif; ?>
</td>
<td width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['team_name']['hidden']):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php echo smarty_function_sugarvar_teamset(array('parentFieldArray' => 'fields','vardef' => $this->_tpl_vars['fields']['team_name'],'tabindex' => 1,'display' => '','labelSpan' => '','fieldSpan' => '','formName' => '','displayType' => 'renderDetailView'), $this);?>

<?php endif; ?>
</td>
<?php else: ?>
<td scope="row">&nbsp;</td><td>&nbsp;</td>
<?php endif;  if ($this->_tpl_vars['fields']['date_entered']['acl'] > 0):  echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="row">
<?php if (! $this->_tpl_vars['fields']['date_entered']['hidden']):  ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_DATE_ENTERED','module' => 'Quotes'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php else:  echo smarty_function_counter(array('name' => 'fieldsHidden'), $this);?>

<?php endif; ?>
</td>
<td width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['date_entered']['hidden']):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>

<span id="date_entered" class="sugar_field"><?php echo $this->_tpl_vars['fields']['date_entered']['value']; ?>
 <?php echo $this->_tpl_vars['APP']['LBL_BY']; ?>
 <?php echo $this->_tpl_vars['fields']['created_by_name']['value']; ?>
</span>
<?php endif; ?>
</td>
<?php else: ?>
<td scope="row">&nbsp;</td><td>&nbsp;</td>
<?php endif; ?>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean();  if ($this->_tpl_vars['fieldsUsed'] > 0 && $this->_tpl_vars['fieldsUsed'] != $this->_tpl_vars['fieldsHidden']):  echo $this->_tpl_vars['tableRow']; ?>

<?php endif; ?>
</table>
</div>
<?php if ($this->_tpl_vars['panelFieldCount'] == 0): ?>
<script>document.getElementById("LBL_PANEL_ASSIGNMENT").style.display='none';</script>
<?php endif; ?>
</div></div>

<div class="detail view">
<table width="100%" border="0" cellpadding="0" cellspacing="<?php echo $this->_tpl_vars['gridline']; ?>
">
<tr>
<td scope="row" align="left" colspan="7"><h4><?php echo $this->_tpl_vars['MOD']['LBL_LINE_ITEM_INFORMATION']; ?>
</h4></td>
</tr>
<?php $_from = $this->_tpl_vars['ordered_bundle_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['index'] => $this->_tpl_vars['product_bundle']):
 $this->assign('product_bundle_product_note_list', $this->_tpl_vars['product_bundle']->get_notes());  $this->assign('bundle_list', $this->_tpl_vars['product_bundle']->get_product_bundle_line_items());  $this->assign('BUNDLE_NAME', $this->_tpl_vars['product_bundle']->name);  $this->assign('bundle_key', $this->_tpl_vars['product_bundle']->bundle_stage);  $this->assign('BUNDLE_STAGE', $this->_tpl_vars['APP_LIST_STRINGS']['quote_stage_dom'][$this->_tpl_vars['bundle_key']]); ?>
<!-- BEGIN: product_bundle -->
<tr>
<td scope="row" width="1%" valign="top" style="text-align: left;" colspan='3'><?php echo $this->_tpl_vars['MOD']['LBL_BUNDLE_NAME']; ?>
&nbsp;<b><?php echo $this->_tpl_vars['BUNDLE_NAME']; ?>
</b></td>
<td scope="row" width="45%" valign="top" style="text-align: left;" colspan='<?php if ($this->_tpl_vars['product_bundle']->deal_tot != "0.00" && $this->_tpl_vars['product_bundle']->deal_tot != ""): ?>4<?php else: ?>3<?php endif; ?>'><?php echo $this->_tpl_vars['MOD']['LBL_BUNDLE_STAGE']; ?>
&nbsp;<b><?php echo $this->_tpl_vars['BUNDLE_STAGE']; ?>
</b></td>
</tr>
<!-- BEGIN: bundle_row -->
<!-- BEGIN: product_row -->
<tr>
<td scope="row" width="1%" valign="top" style="text-align: left;">&nbsp;</td>
<td scope="row" width="10%" valign="top" style="text-align: center;"><?php echo $this->_tpl_vars['MOD']['LBL_LIST_QUANTITY']; ?>
</td>
<?php if ($this->_tpl_vars['bean']->deal_tot != "0.00"): ?>
<td scope="row" width="30%" valign="top" style="text-align: left;"><?php echo $this->_tpl_vars['MOD']['LBL_LIST_PRODUCT_NAME']; ?>
</td>
<?php else: ?>
<td scope="row" width="45%" valign="top" style="text-align: left;"><?php echo $this->_tpl_vars['MOD']['LBL_LIST_PRODUCT_NAME']; ?>
</td>
<?php endif; ?>
<td scope="row" width="15%" valign="top" style="text-align: right;"><?php echo $this->_tpl_vars['MOD']['LBL_LIST_COST_PRICE']; ?>
</td>
<td scope="row" width="15%" valign="top" style="text-align: right;"><?php echo $this->_tpl_vars['MOD']['LBL_LIST_LIST_PRICE']; ?>
</td>
<td scope="row" width="15%" valign="top" style="text-align: right;"><?php echo $this->_tpl_vars['MOD']['LBL_LIST_DISCOUNT_PRICE']; ?>
</td>
<?php if ($this->_tpl_vars['product_bundle']->deal_tot != "0.00" && $this->_tpl_vars['product_bundle']->deal_tot != ""): ?>
<td scope="row" width="15%" valign="top" style="text-align: right;"><?php echo $this->_tpl_vars['MOD']['LBL_LIST_DEAL_TOT']; ?>
</td>
<?php endif; ?>
</tr>
<?php if (is_array ( $this->_tpl_vars['bundle_list'] )):  echo smarty_function_counter(array('start' => 0,'print' => false), $this);?>

<?php $_from = $this->_tpl_vars['bundle_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['line_item']):
 if ($this->_tpl_vars['line_item']->object_name == 'Product'): ?>
<tr>
<td width="1" valign="top"style="text-align: center;"><?php if ($this->_tpl_vars['bean']->show_line_nums == 1):  echo smarty_function_counter(array('print' => true), $this); endif; ?>&nbsp;</td>
<td valign="top" style="text-align: center;"><?php echo $this->_tpl_vars['line_item']->quantity; ?>
</td>
<td valign="top"><a href="index.php?module=Products&action=DetailView&record=<?php echo $this->_tpl_vars['line_item']->id; ?>
"><?php echo $this->_tpl_vars['line_item']->name; ?>
</a><BR><?php echo ((is_array($_tmp=$this->_tpl_vars['line_item']->description)) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</td>
<?php if ($this->_tpl_vars['line_item']->currency_id == $this->_tpl_vars['bean']->currency_id && $this->_tpl_vars['line_item']->currency_id != "-99"):  $this->assign('COST_PRICE', $this->_tpl_vars['line_item']->cost_price);  $this->assign('LIST_PRICE', $this->_tpl_vars['line_item']->list_price);  $this->assign('DISCOUNT_PRICE', $this->_tpl_vars['line_item']->discount_price);  $this->assign('DISCOUNT_AMOUNT', $this->_tpl_vars['line_item']->discount_amount);  $this->assign('SELECT_DISCOUNT', $this->_tpl_vars['line_item']->discount_select);  else:  $this->assign('COST_PRICE', $this->_tpl_vars['line_item']->cost_usdollar);  $this->assign('LIST_PRICE', $this->_tpl_vars['line_item']->list_usdollar);  $this->assign('DISCOUNT_PRICE', $this->_tpl_vars['line_item']->discount_usdollar);  $this->assign('DISCOUNT_AMOUNT', $this->_tpl_vars['line_item']->discount_amount_usdollar);  $this->assign('SELECT_DISCOUNT', $this->_tpl_vars['line_item']->discount_select);  endif; ?>
<td valign="top" style="text-align: right;"><?php echo smarty_function_sugar_currency_format(array('var' => $this->_tpl_vars['COST_PRICE'],'currency_id' => $this->_tpl_vars['CURRENCY_ID']), $this);?>
</td>
<td valign="top" style="text-align: right;"><?php echo smarty_function_sugar_currency_format(array('var' => $this->_tpl_vars['LIST_PRICE'],'currency_id' => $this->_tpl_vars['CURRENCY_ID']), $this);?>
</td>
<td valign="top" style="text-align: right;"><?php echo smarty_function_sugar_currency_format(array('var' => $this->_tpl_vars['DISCOUNT_PRICE'],'currency_id' => $this->_tpl_vars['CURRENCY_ID']), $this);?>
</td>
<?php if ($this->_tpl_vars['line_item']->discount_amount != "0.00" && $this->_tpl_vars['product_bundle']->deal_tot != ""):  if ($this->_tpl_vars['line_item']->discount_select): ?>
<td valign="top" style="text-align: right;"><?php echo smarty_function_sugar_currency_format(array('var' => $this->_tpl_vars['DISCOUNT_AMOUNT'],'currency_symbol' => ''), $this);?>
%</td>
<?php else: ?>
<td valign="top" style="text-align: right;"><?php echo smarty_function_sugar_currency_format(array('var' => $this->_tpl_vars['DISCOUNT_AMOUNT'],'currency_id' => $this->_tpl_vars['CURRENCY_ID']), $this);?>
</td>
<?php endif;  endif; ?>
</tr>
<?php elseif ($this->_tpl_vars['line_item']->object_name == 'ProductBundleNote'): ?>
<tr valign="top">
<td width='1' valign="top" style="text-align: center;">&nbsp;</td>
<td valign="top" style="text-align: center;">&nbsp;</td>
<td valign="top"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['line_item']->description)) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, '\\', '') : smarty_modifier_replace($_tmp, '\\', '')); ?>
</td>
<td valign="top">&nbsp;</td>
<td valign="top">&nbsp;</td>
<td valign="top">&nbsp;</td>
</tr>
<?php endif;  endforeach; endif; unset($_from); ?>
<tr><td colspan='7' NOWRAP><HR><br></td></tr>
<tr>
<td NOWRAP>&nbsp;</td>
<td NOWRAP>&nbsp;</td>
<td style="text-align: right;">&nbsp;</td>
<td>&nbsp;</td>
<?php if ($this->_tpl_vars['bean']->deal_tot != "0.00"): ?>
<td>&nbsp;</td>
<?php endif; ?>
<td NOWRAP style="text-align: right;"><?php echo $this->_tpl_vars['MOD']['LBL_SUBTOTAL']; ?>
</td>
<td NOWRAP style="text-align: right;"><?php echo smarty_function_sugar_currency_format(array('var' => $this->_tpl_vars['product_bundle']->subtotal,'currency_id' => $this->_tpl_vars['CURRENCY_ID']), $this);?>
</td>
</tr><tr>
<?php if ($this->_tpl_vars['product_bundle']->deal_tot != "0.00" && $this->_tpl_vars['product_bundle']->deal_tot != ""): ?>
<td NOWRAP>&nbsp;</td>
<td NOWRAP>&nbsp;</td>
<td style="text-align: right;">&nbsp;</td>
<td>&nbsp;</td>
<?php if ($this->_tpl_vars['bean']->deal_tot != "0.00"): ?>
<td>&nbsp;</td>
<?php endif; ?>
<td NOWRAP style="text-align: right;"><?php echo $this->_tpl_vars['MOD']['LBL_DISCOUNT_TOTAL']; ?>
</td>
<td NOWRAP style="text-align: right;"><?php echo smarty_function_sugar_currency_format(array('var' => $this->_tpl_vars['product_bundle']->deal_tot,'currency_id' => $this->_tpl_vars['CURRENCY_ID']), $this);?>
</td>
</tr><tr>
<td NOWRAP>&nbsp;</td>
<td NOWRAP>&nbsp;</td>
<td style="text-align: right;">&nbsp;</td>
<td>&nbsp;</td>
<?php if ($this->_tpl_vars['bean']->deal_tot != "0.00"): ?>
<td>&nbsp;</td>
<?php endif; ?>
<td NOWRAP style="text-align: right;"><?php echo $this->_tpl_vars['MOD']['LBL_NEW_SUB']; ?>
</td>
<td NOWRAP style="text-align: right;"><?php echo smarty_function_sugar_currency_format(array('var' => $this->_tpl_vars['product_bundle']->new_sub,'currency_id' => $this->_tpl_vars['CURRENCY_ID']), $this);?>
</td>
</tr><tr>
<?php endif; ?>
<td NOWRAP>&nbsp;</td>
<td NOWRAP>&nbsp;</td>
<td style="text-align: right;">&nbsp;</td>
<td>&nbsp;</td>
<?php if ($this->_tpl_vars['bean']->deal_tot != "0.00"): ?>
<td>&nbsp;</td>
<?php endif; ?>
<td NOWRAP style="text-align: right;"><?php echo $this->_tpl_vars['MOD']['LBL_TAX']; ?>
</td>
<td NOWRAP style="text-align: right;"><?php echo smarty_function_sugar_currency_format(array('var' => $this->_tpl_vars['product_bundle']->tax,'currency_id' => $this->_tpl_vars['CURRENCY_ID']), $this);?>
</td>
</tr><tr>
<td NOWRAP>&nbsp;</td>
<td NOWRAP>&nbsp;</td>
<td style="text-align: right;">&nbsp;</td>
<td>&nbsp;</td>
<?php if ($this->_tpl_vars['bean']->deal_tot != "0.00"): ?>
<td>&nbsp;</td>
<?php endif; ?>
<td NOWRAP style="text-align: right;"><?php echo $this->_tpl_vars['MOD']['LBL_SHIPPING']; ?>
</td>
<td NOWRAP style="text-align: right;"><?php echo smarty_function_sugar_currency_format(array('var' => $this->_tpl_vars['product_bundle']->shipping,'currency_id' => $this->_tpl_vars['CURRENCY_ID']), $this);?>
</td>
</tr><tr>
<td NOWRAP>&nbsp;</td>
<td colspan='3' NOWRAP>&nbsp;</td>
<?php if ($this->_tpl_vars['bean']->deal_tot != "0.00"): ?>
<td>&nbsp;</td>
<?php endif; ?>
<td NOWRAP style="text-align: right;"><?php echo $this->_tpl_vars['MOD']['LBL_TOTAL']; ?>
</td>
<td NOWRAP style="text-align: right;"><?php echo smarty_function_sugar_currency_format(array('var' => $this->_tpl_vars['product_bundle']->total,'currency_id' => $this->_tpl_vars['CURRENCY_ID']), $this);?>
</td>
</tr>
<tr><td colspan='7' NOWRAP><br></td></tr>
<?php endif;  endforeach; endif; unset($_from);  if (! empty ( $this->_tpl_vars['bean']->calc_grand_total ) && $this->_tpl_vars['bean']->calc_grand_total == 1): ?>

<tr><td scope="row" colspan='7' valign="top" style="text-align: left;"><?php echo $this->_tpl_vars['MOD']['LBL_LIST_GRAND_TOTAL']; ?>
</td></tr>
<tr>
<td NOWRAP>&nbsp;</td>
<td NOWRAP>&nbsp;</td>
<?php if (abs ( $this->_tpl_vars['bean']->deal_tot ) > 0.01): ?>
<td>&nbsp;</td>
<?php endif; ?>
<td style="text-align: right;"><?php echo $this->_tpl_vars['MOD']['LBL_CURRENCY']; ?>
</td>
<td><?php echo $this->_tpl_vars['CURRENCY']; ?>
</td>
<td NOWRAP style="text-align: right;"><?php echo $this->_tpl_vars['MOD']['LBL_SUBTOTAL']; ?>
</td>
<td NOWRAP style="text-align: right;"><?php echo smarty_function_sugar_currency_format(array('var' => $this->_tpl_vars['bean']->subtotal,'currency_id' => $this->_tpl_vars['CURRENCY_ID']), $this);?>
</td>
</tr><tr>
<?php if (abs ( $this->_tpl_vars['bean']->deal_tot ) > 0.01): ?>
<td colspan='4' NOWRAP>&nbsp;</td>
<?php if (abs ( $this->_tpl_vars['bean']->deal_tot ) > 0.01): ?>
<td>&nbsp;</td>
<?php endif; ?>
<td NOWRAP style="text-align: right;"><?php echo $this->_tpl_vars['MOD']['LBL_DISCOUNT_TOTAL']; ?>
</td>
<td NOWRAP style="text-align: right;"><?php echo smarty_function_sugar_currency_format(array('var' => $this->_tpl_vars['bean']->deal_tot,'currency_id' => $this->_tpl_vars['CURRENCY_ID']), $this);?>
</td>
</tr><tr>
<td colspan='4' NOWRAP>&nbsp;</td>
<?php if (abs ( $this->_tpl_vars['bean']->deal_tot ) > 0.01): ?>
<td>&nbsp;</td>
<?php endif; ?>
<td NOWRAP style="text-align: right;"><?php echo $this->_tpl_vars['MOD']['LBL_NEW_SUB']; ?>
</td>
<td NOWRAP style="text-align: right;"><?php echo smarty_function_sugar_currency_format(array('var' => $this->_tpl_vars['bean']->new_sub,'currency_id' => $this->_tpl_vars['CURRENCY_ID']), $this);?>
</td>
</tr><tr>
<?php endif; ?>
<td NOWRAP>&nbsp;</td>
<td NOWRAP>&nbsp;</td>
<?php if (abs ( $this->_tpl_vars['bean']->deal_tot ) > 0.01): ?>
<td>&nbsp;</td>
<?php endif; ?>
<td style="text-align: right;"><?php echo $this->_tpl_vars['MOD']['LBL_TAXRATE']; ?>
</td>
<td><?php echo smarty_function_sugar_number_format(array('precision' => 2,'var' => $this->_tpl_vars['bean']->taxrate_value), $this);?>
 <?php echo $this->_tpl_vars['APP']['LBL_PERCENTAGE_SYMBOL']; ?>
</td>
<td NOWRAP style="text-align: right;"><?php echo $this->_tpl_vars['MOD']['LBL_TAX']; ?>
</td>
<td NOWRAP style="text-align: right;"><?php echo smarty_function_sugar_currency_format(array('var' => $this->_tpl_vars['bean']->tax,'currency_id' => $this->_tpl_vars['CURRENCY_ID']), $this);?>
</td>
</tr><tr>
<td NOWRAP>&nbsp;</td>
<td NOWRAP>&nbsp;</td>
<?php if (abs ( $this->_tpl_vars['bean']->deal_tot ) > 0.01): ?>
<td>&nbsp;</td>
<?php endif; ?>
<td style="text-align: right;"><?php echo $this->_tpl_vars['MOD']['LBL_SHIPPING_PROVIDER']; ?>
</td>
<td><?php echo $this->_tpl_vars['bean']->shipper_name; ?>
&nbsp;</td>
<td NOWRAP style="text-align: right;"><?php echo $this->_tpl_vars['MOD']['LBL_SHIPPING']; ?>
</td>
<td NOWRAP style="text-align: right;"><?php echo smarty_function_sugar_currency_format(array('var' => $this->_tpl_vars['bean']->shipping,'currency_id' => $this->_tpl_vars['CURRENCY_ID']), $this);?>
</td>
</tr><tr>
<td colspan='4' NOWRAP>&nbsp;</td>
<?php if (abs ( $this->_tpl_vars['bean']->deal_tot ) > 0.01): ?>
<td>&nbsp;</td>
<?php endif; ?>
<td NOWRAP style="text-align: right;"><?php echo $this->_tpl_vars['MOD']['LBL_TOTAL']; ?>
</td>
<td NOWRAP style="text-align: right;"><?php echo smarty_function_sugar_currency_format(array('var' => $this->_tpl_vars['bean']->total,'currency_id' => $this->_tpl_vars['CURRENCY_ID']), $this);?>
</td>
</tr>

<?php endif; ?>
</table>
</div><?php echo '
<script type=text/javascript>
SUGAR.forms.AssignmentHandler.registerView(\'DetailView\');
</script>'; ?>
