<?php /* Smarty version 2.6.11, created on 2014-05-09 16:54:26
         compiled from cache/modules/Quotes/EditView.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_include', 'cache/modules/Quotes/EditView.tpl', 36, false),array('function', 'counter', 'cache/modules/Quotes/EditView.tpl', 41, false),array('function', 'sugar_translate', 'cache/modules/Quotes/EditView.tpl', 45, false),array('function', 'sugar_getimagepath', 'cache/modules/Quotes/EditView.tpl', 111, false),array('function', 'html_options', 'cache/modules/Quotes/EditView.tpl', 189, false),array('function', 'sugar_getjspath', 'cache/modules/Quotes/EditView.tpl', 637, false),array('function', 'sugarvar_teamset', 'cache/modules/Quotes/EditView.tpl', 916, false),array('modifier', 'default', 'cache/modules/Quotes/EditView.tpl', 42, false),array('modifier', 'strip_semicolon', 'cache/modules/Quotes/EditView.tpl', 54, false),array('modifier', 'escape', 'cache/modules/Quotes/EditView.tpl', 713, false),array('modifier', 'url2html', 'cache/modules/Quotes/EditView.tpl', 713, false),array('modifier', 'nl2br', 'cache/modules/Quotes/EditView.tpl', 713, false),array('modifier', 'strip_tags', 'cache/modules/Quotes/EditView.tpl', 718, false),)), $this); ?>


<div class="clear"></div>
<form action="index.php" method="POST" name="<?php echo $this->_tpl_vars['form_name']; ?>
" id="<?php echo $this->_tpl_vars['form_id']; ?>
" <?php echo $this->_tpl_vars['enctype']; ?>
>
<table width="100%" cellpadding="0" cellspacing="0" border="0" class="actionsContainer">
<tr>
<td class="buttons">
<input type="hidden" name="module" value="<?php echo $this->_tpl_vars['module']; ?>
">
<?php if (isset ( $_REQUEST['isDuplicate'] ) && $_REQUEST['isDuplicate'] == 'true'): ?>
<input type="hidden" name="record" value="">
<input type="hidden" name="duplicateSave" value="true">
<input type="hidden" name="duplicateId" value="<?php echo $this->_tpl_vars['fields']['id']['value']; ?>
">
<?php else: ?>
<input type="hidden" name="record" value="<?php echo $this->_tpl_vars['fields']['id']['value']; ?>
">
<?php endif; ?>
<input type="hidden" name="isDuplicate" value="false">
<input type="hidden" name="action">
<input type="hidden" name="return_module" value="<?php echo $_REQUEST['return_module']; ?>
">
<input type="hidden" name="return_action" value="<?php echo $_REQUEST['return_action']; ?>
">
<input type="hidden" name="return_id" value="<?php echo $_REQUEST['return_id']; ?>
">
<input type="hidden" name="module_tab"> 
<input type="hidden" name="contact_role">
<?php if (! empty ( $_REQUEST['return_module'] ) || ! empty ( $_REQUEST['relate_to'] )): ?>
<input type="hidden" name="relate_to" value="<?php if ($_REQUEST['return_relationship']):  echo $_REQUEST['return_relationship'];  elseif ($_REQUEST['relate_to'] && empty ( $_REQUEST['from_dcmenu'] )):  echo $_REQUEST['relate_to'];  elseif (empty ( $this->_tpl_vars['isDCForm'] ) && empty ( $_REQUEST['from_dcmenu'] )):  echo $_REQUEST['return_module'];  endif; ?>">
<input type="hidden" name="relate_id" value="<?php echo $_REQUEST['return_id']; ?>
">
<?php endif; ?>
<input type="hidden" name="offset" value="<?php echo $this->_tpl_vars['offset']; ?>
">
<?php if ($this->_tpl_vars['bean']->aclAccess('save')): ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_KEY']; ?>
" class="button primary" onclick="<?php if ($this->_tpl_vars['isDuplicate']): ?>this.form.return_id.value=''; <?php endif; ?>this.form.action.value='Save'; return check_form('EditView');" type="submit" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_LABEL']; ?>
" id="SAVE_HEADER"><?php endif; ?> 
<?php if (! empty ( $_REQUEST['return_action'] ) && ( $_REQUEST['return_action'] == 'DetailView' && ! empty ( $_REQUEST['return_id'] ) )): ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_KEY']; ?>
" class="button" onclick="window.location.href='index.php?action=DetailView&module=<?php echo $_REQUEST['return_module']; ?>
&record=<?php echo $_REQUEST['return_id']; ?>
'; return false;" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
" type="button" id="CANCEL_HEADER"> <?php elseif (! empty ( $_REQUEST['return_action'] ) && ( $_REQUEST['return_action'] == 'DetailView' && ! empty ( $this->_tpl_vars['fields']['id']['value'] ) )): ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_KEY']; ?>
" class="button" onclick="window.location.href='index.php?action=DetailView&module=<?php echo $_REQUEST['return_module']; ?>
&record=<?php echo $this->_tpl_vars['fields']['id']['value']; ?>
'; return false;" type="button" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
" id="CANCEL_HEADER"> <?php elseif (empty ( $_REQUEST['return_action'] ) || empty ( $_REQUEST['return_id'] ) && ! empty ( $this->_tpl_vars['fields']['id']['value'] )): ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_KEY']; ?>
" class="button" onclick="window.location.href='index.php?action=index&module=Quotes'; return false;" type="button" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
" id="CANCEL_HEADER"> <?php else: ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_KEY']; ?>
" class="button" onclick="window.location.href='index.php?action=index&module=<?php echo $_REQUEST['return_module']; ?>
&record=<?php echo $_REQUEST['return_id']; ?>
'; return false;" type="button" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
" id="CANCEL_HEADER"> <?php endif;  if ($this->_tpl_vars['bean']->aclAccess('detail')):  if (! empty ( $this->_tpl_vars['fields']['id']['value'] ) && $this->_tpl_vars['isAuditEnabled']): ?><input title="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
" class="button" onclick='open_popup("Audit", "600", "400", "&record=<?php echo $this->_tpl_vars['fields']['id']['value']; ?>
&module_name=Quotes", true, false,  { "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] } ); return false;' type="submit" value="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
"><?php endif;  endif; ?>
</td>
<td align='right'>
<?php echo $this->_tpl_vars['PAGINATION']; ?>

</td>
</tr>
</table><?php echo smarty_function_sugar_include(array('include' => $this->_tpl_vars['includes']), $this);?>

<div id="EditView_tabs"
>
<div >
<div id="LBL_QUOTE_INFORMATION">
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','start' => 0,'print' => false,'assign' => 'panelFieldCount'), $this);?>

<table width="100%" border="0" cellspacing="1" cellpadding="0"  class="<?php echo ((is_array($_tmp=@$this->_tpl_vars['def']['templateMeta']['panelClass'])) ? $this->_run_mod_handler('default', true, $_tmp, 'edit view') : smarty_modifier_default($_tmp, 'edit view')); ?>
">
<tr>
<th align="left" colspan="8">
<h4><?php echo smarty_function_sugar_translate(array('label' => 'LBL_QUOTE_INFORMATION','module' => 'Quotes'), $this);?>
</h4>
</th>
</tr>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php ob_start(); ?>
<tr>
<?php if ($this->_tpl_vars['fields']['name']['acl'] > 1 || ( $this->_tpl_vars['showDetailData'] && $this->_tpl_vars['fields']['name']['acl'] > 0 )): ?>
<td valign="top" id='name_label' width='12.5%' scope="row">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_QUOTE_NAME','module' => 'Quotes'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<span class="required">*</span>
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td valign="top" width='37.5%' >
<?php if ($this->_tpl_vars['fields']['name']['acl'] > 1):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['name']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['name']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['name']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['name']['name']; ?>
' 
id='<?php echo $this->_tpl_vars['fields']['name']['name']; ?>
' size='30' 
maxlength='50' 
value='<?php echo $this->_tpl_vars['value']; ?>
' title='' tabindex='100' > 
<?php else:  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['name']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['name']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['name']['value']);  endif; ?> 
<span class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['name']['name']; ?>
"><?php echo $this->_tpl_vars['fields']['name']['value']; ?>
</span>
</td>
<?php endif;  else: ?>
<td></td><td></td>
<?php endif;  if ($this->_tpl_vars['fields']['opportunity_name']['acl'] > 1 || ( $this->_tpl_vars['showDetailData'] && $this->_tpl_vars['fields']['opportunity_name']['acl'] > 0 )): ?>
<td valign="top" id='opportunity_name_label' width='12.5%' scope="row">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_OPPORTUNITY_NAME','module' => 'Quotes'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td valign="top" width='37.5%' >
<?php if ($this->_tpl_vars['fields']['opportunity_name']['acl'] > 1):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<input type="text" name="<?php echo $this->_tpl_vars['fields']['opportunity_name']['name']; ?>
" class="sqsEnabled" tabindex="101" id="<?php echo $this->_tpl_vars['fields']['opportunity_name']['name']; ?>
" size="" value="<?php echo $this->_tpl_vars['fields']['opportunity_name']['value']; ?>
" title='' autocomplete="off"  >
<input type="hidden" name="<?php echo $this->_tpl_vars['fields']['opportunity_name']['id_name']; ?>
" 
id="<?php echo $this->_tpl_vars['fields']['opportunity_name']['id_name']; ?>
" 
value="<?php echo $this->_tpl_vars['fields']['opportunity_id']['value']; ?>
">
<span class="id-ff multiple">
<button type="button" name="btn_<?php echo $this->_tpl_vars['fields']['opportunity_name']['name']; ?>
" id="btn_<?php echo $this->_tpl_vars['fields']['opportunity_name']['name']; ?>
" tabindex="101" title="<?php echo $this->_tpl_vars['APP']['LBL_SELECT_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_SELECT_BUTTON_KEY']; ?>
" class="button firstChild" value="<?php echo $this->_tpl_vars['APP']['LBL_SELECT_BUTTON_LABEL']; ?>
" 
onclick='open_popup(
"<?php echo $this->_tpl_vars['fields']['opportunity_name']['module']; ?>
", 
600, 
400, 
"", 
true, 
false, 
<?php echo '{"call_back_function":"set_return","form_name":"EditView","field_to_name_array":{"id":"opportunity_id","name":"opportunity_name"}}'; ?>
, 
"single", 
true
);' ><img src="<?php echo smarty_function_sugar_getimagepath(array('file' => "id-ff-select.png"), $this);?>
"></button><button type="button" name="btn_clr_<?php echo $this->_tpl_vars['fields']['opportunity_name']['name']; ?>
" id="btn_clr_<?php echo $this->_tpl_vars['fields']['opportunity_name']['name']; ?>
" tabindex="101" title="<?php echo $this->_tpl_vars['APP']['LBL_CLEAR_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_CLEAR_BUTTON_KEY']; ?>
" class="button lastChild" 
onclick="this.form.<?php echo $this->_tpl_vars['fields']['opportunity_name']['name']; ?>
.value = ''; this.form.<?php echo $this->_tpl_vars['fields']['opportunity_name']['id_name']; ?>
.value = '';" 
value="<?php echo $this->_tpl_vars['APP']['LBL_CLEAR_BUTTON_LABEL']; ?>
" ><img src="<?php echo smarty_function_sugar_getimagepath(array('file' => "id-ff-clear.png"), $this);?>
"></button>
</span>
<script type="text/javascript">
<!--
if(typeof QSProcessedFieldsArray != 'undefined') 
	QSProcessedFieldsArray["<?php echo $this->_tpl_vars['form_name']; ?>
_<?php echo $this->_tpl_vars['fields']['opportunity_name']['name']; ?>
"] = false;
	

enableQS(false);
-->	
</script>
<?php else:  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (! empty ( $this->_tpl_vars['fields']['opportunity_id']['value'] )): ?><a href="index.php?module=Opportunities&action=DetailView&record=<?php echo $this->_tpl_vars['fields']['opportunity_id']['value']; ?>
"><?php endif; ?>
<span id="opportunity_id" class="sugar_field"><?php echo $this->_tpl_vars['fields']['opportunity_name']['value']; ?>
</span>
<?php if (! empty ( $this->_tpl_vars['fields']['opportunity_id']['value'] )): ?></a><?php endif; ?>
</td>
<?php endif;  else: ?>
<td></td><td></td>
<?php endif; ?>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean();  if ($this->_tpl_vars['fieldsUsed'] > 0):  echo $this->_tpl_vars['tableRow']; ?>

<?php endif;  echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php ob_start(); ?>
<tr>
<?php if ($this->_tpl_vars['fields']['quote_num']['acl'] > 1 || ( $this->_tpl_vars['showDetailData'] && $this->_tpl_vars['fields']['quote_num']['acl'] > 0 )): ?>
<td valign="top" id='quote_num_label' width='12.5%' scope="row">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_QUOTE_NUM','module' => 'Quotes'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td valign="top" width='37.5%' >
<?php if ($this->_tpl_vars['fields']['quote_num']['acl'] > 1):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['quote_num']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['quote_num']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['quote_num']['value']);  endif; ?> 
<span class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['quote_num']['name']; ?>
"><?php echo $this->_tpl_vars['fields']['quote_num']['value']; ?>
</span>
<?php else:  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['quote_num']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['quote_num']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['quote_num']['value']);  endif; ?> 
<span class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['quote_num']['name']; ?>
"><?php echo $this->_tpl_vars['fields']['quote_num']['value']; ?>
</span>
</td>
<?php endif;  else: ?>
<td></td><td></td>
<?php endif;  if ($this->_tpl_vars['fields']['quote_stage']['acl'] > 1 || ( $this->_tpl_vars['showDetailData'] && $this->_tpl_vars['fields']['quote_stage']['acl'] > 0 )): ?>
<td valign="top" id='quote_stage_label' width='12.5%' scope="row">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_QUOTE_STAGE','module' => 'Quotes'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<span class="required">*</span>
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td valign="top" width='37.5%' >
<?php if ($this->_tpl_vars['fields']['quote_stage']['acl'] > 1):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<select name="<?php echo $this->_tpl_vars['fields']['quote_stage']['name']; ?>
" 
id="<?php echo $this->_tpl_vars['fields']['quote_stage']['name']; ?>
" 
title='' tabindex="103"  
>
<?php if (isset ( $this->_tpl_vars['fields']['quote_stage']['value'] ) && $this->_tpl_vars['fields']['quote_stage']['value'] != ''):  echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['quote_stage']['options'],'selected' => $this->_tpl_vars['fields']['quote_stage']['value']), $this);?>

<?php else:  echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['quote_stage']['options'],'selected' => $this->_tpl_vars['fields']['quote_stage']['default']), $this);?>

<?php endif; ?>
</select>
<?php else:  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>



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

<?php endif; ?>
</td>
<?php endif;  else: ?>
<td></td><td></td>
<?php endif; ?>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean();  if ($this->_tpl_vars['fieldsUsed'] > 0):  echo $this->_tpl_vars['tableRow']; ?>

<?php endif;  echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php ob_start(); ?>
<tr>
<?php if ($this->_tpl_vars['fields']['purchase_order_num']['acl'] > 1 || ( $this->_tpl_vars['showDetailData'] && $this->_tpl_vars['fields']['purchase_order_num']['acl'] > 0 )): ?>
<td valign="top" id='purchase_order_num_label' width='12.5%' scope="row">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_PURCHASE_ORDER_NUM','module' => 'Quotes'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td valign="top" width='37.5%' >
<?php if ($this->_tpl_vars['fields']['purchase_order_num']['acl'] > 1):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['purchase_order_num']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['purchase_order_num']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['purchase_order_num']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['purchase_order_num']['name']; ?>
' 
id='<?php echo $this->_tpl_vars['fields']['purchase_order_num']['name']; ?>
' size='30' 
maxlength='50' 
value='<?php echo $this->_tpl_vars['value']; ?>
' title='' tabindex='104' > 
<?php else:  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['purchase_order_num']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['purchase_order_num']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['purchase_order_num']['value']);  endif; ?> 
<span class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['purchase_order_num']['name']; ?>
"><?php echo $this->_tpl_vars['fields']['purchase_order_num']['value']; ?>
</span>
</td>
<?php endif;  else: ?>
<td></td><td></td>
<?php endif;  if ($this->_tpl_vars['fields']['date_quote_expected_closed']['acl'] > 1 || ( $this->_tpl_vars['showDetailData'] && $this->_tpl_vars['fields']['date_quote_expected_closed']['acl'] > 0 )): ?>
<td valign="top" id='date_quote_expected_closed_label' width='12.5%' scope="row">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_DATE_QUOTE_EXPECTED_CLOSED','module' => 'Quotes'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<span class="required">*</span>
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td valign="top" width='37.5%' >
<?php if ($this->_tpl_vars['fields']['date_quote_expected_closed']['acl'] > 1):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<span class="dateTime">
<?php $this->assign('date_value', $this->_tpl_vars['fields']['date_quote_expected_closed']['value']); ?>
<input class="date_input" autocomplete="off" type="text" name="<?php echo $this->_tpl_vars['fields']['date_quote_expected_closed']['name']; ?>
" id="<?php echo $this->_tpl_vars['fields']['date_quote_expected_closed']['name']; ?>
" value="<?php echo $this->_tpl_vars['date_value']; ?>
" title=''  tabindex='105' size="11" maxlength="10" >
<img border="0" src="<?php echo smarty_function_sugar_getimagepath(array('file' => 'jscalendar.gif'), $this);?>
" alt="<?php echo $this->_tpl_vars['APP']['LBL_ENTER_DATE']; ?>
" id="<?php echo $this->_tpl_vars['fields']['date_quote_expected_closed']['name']; ?>
_trigger" align="absmiddle" />
</span>
<script type="text/javascript">
Calendar.setup ({
inputField : "<?php echo $this->_tpl_vars['fields']['date_quote_expected_closed']['name']; ?>
",
ifFormat : "<?php echo $this->_tpl_vars['CALENDAR_FORMAT']; ?>
",
daFormat : "<?php echo $this->_tpl_vars['CALENDAR_FORMAT']; ?>
",
button : "<?php echo $this->_tpl_vars['fields']['date_quote_expected_closed']['name']; ?>
_trigger",
singleClick : true,
dateStr : "<?php echo $this->_tpl_vars['date_value']; ?>
",
step : 1,
weekNumbers:false
}
);
</script>
<?php else:  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['date_quote_expected_closed']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['date_quote_expected_closed']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['date_quote_expected_closed']['value']);  endif; ?> 
<span class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['date_quote_expected_closed']['name']; ?>
"><?php echo $this->_tpl_vars['fields']['date_quote_expected_closed']['value']; ?>
</span>
</td>
<?php endif;  else: ?>
<td></td><td></td>
<?php endif; ?>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean();  if ($this->_tpl_vars['fieldsUsed'] > 0):  echo $this->_tpl_vars['tableRow']; ?>

<?php endif;  echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php ob_start(); ?>
<tr>
<?php if ($this->_tpl_vars['fields']['payment_terms']['acl'] > 1 || ( $this->_tpl_vars['showDetailData'] && $this->_tpl_vars['fields']['payment_terms']['acl'] > 0 )): ?>
<td valign="top" id='payment_terms_label' width='12.5%' scope="row">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_PAYMENT_TERMS','module' => 'Quotes'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td valign="top" width='37.5%' >
<?php if ($this->_tpl_vars['fields']['payment_terms']['acl'] > 1):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<select name="<?php echo $this->_tpl_vars['fields']['payment_terms']['name']; ?>
" 
id="<?php echo $this->_tpl_vars['fields']['payment_terms']['name']; ?>
" 
title='' tabindex="106"  
>
<?php if (isset ( $this->_tpl_vars['fields']['payment_terms']['value'] ) && $this->_tpl_vars['fields']['payment_terms']['value'] != ''):  echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['payment_terms']['options'],'selected' => $this->_tpl_vars['fields']['payment_terms']['value']), $this);?>

<?php else:  echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['payment_terms']['options'],'selected' => $this->_tpl_vars['fields']['payment_terms']['default']), $this);?>

<?php endif; ?>
</select>
<?php else:  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>



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

<?php endif; ?>
</td>
<?php endif;  else: ?>
<td></td><td></td>
<?php endif;  if ($this->_tpl_vars['fields']['original_po_date']['acl'] > 1 || ( $this->_tpl_vars['showDetailData'] && $this->_tpl_vars['fields']['original_po_date']['acl'] > 0 )): ?>
<td valign="top" id='original_po_date_label' width='12.5%' scope="row">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_ORIGINAL_PO_DATE','module' => 'Quotes'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td valign="top" width='37.5%' >
<?php if ($this->_tpl_vars['fields']['original_po_date']['acl'] > 1):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<span class="dateTime">
<?php $this->assign('date_value', $this->_tpl_vars['fields']['original_po_date']['value']); ?>
<input class="date_input" autocomplete="off" type="text" name="<?php echo $this->_tpl_vars['fields']['original_po_date']['name']; ?>
" id="<?php echo $this->_tpl_vars['fields']['original_po_date']['name']; ?>
" value="<?php echo $this->_tpl_vars['date_value']; ?>
" title=''  tabindex='107' size="11" maxlength="10" >
<img border="0" src="<?php echo smarty_function_sugar_getimagepath(array('file' => 'jscalendar.gif'), $this);?>
" alt="<?php echo $this->_tpl_vars['APP']['LBL_ENTER_DATE']; ?>
" id="<?php echo $this->_tpl_vars['fields']['original_po_date']['name']; ?>
_trigger" align="absmiddle" />
</span>
<script type="text/javascript">
Calendar.setup ({
inputField : "<?php echo $this->_tpl_vars['fields']['original_po_date']['name']; ?>
",
ifFormat : "<?php echo $this->_tpl_vars['CALENDAR_FORMAT']; ?>
",
daFormat : "<?php echo $this->_tpl_vars['CALENDAR_FORMAT']; ?>
",
button : "<?php echo $this->_tpl_vars['fields']['original_po_date']['name']; ?>
_trigger",
singleClick : true,
dateStr : "<?php echo $this->_tpl_vars['date_value']; ?>
",
step : 1,
weekNumbers:false
}
);
</script>
<?php else:  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['original_po_date']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['original_po_date']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['original_po_date']['value']);  endif; ?> 
<span class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['original_po_date']['name']; ?>
"><?php echo $this->_tpl_vars['fields']['original_po_date']['value']; ?>
</span>
</td>
<?php endif;  else: ?>
<td></td><td></td>
<?php endif; ?>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean();  if ($this->_tpl_vars['fieldsUsed'] > 0):  echo $this->_tpl_vars['tableRow']; ?>

<?php endif; ?>
</table>
</div>
<?php if ($this->_tpl_vars['panelFieldCount'] == 0): ?>
<script>document.getElementById("LBL_QUOTE_INFORMATION").style.display='none';</script>
<?php endif; ?>
<div id="LBL_BILL_TO">
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','start' => 0,'print' => false,'assign' => 'panelFieldCount'), $this);?>

<table width="100%" border="0" cellspacing="1" cellpadding="0"  class="<?php echo ((is_array($_tmp=@$this->_tpl_vars['def']['templateMeta']['panelClass'])) ? $this->_run_mod_handler('default', true, $_tmp, 'edit view') : smarty_modifier_default($_tmp, 'edit view')); ?>
">
<tr>
<th align="left" colspan="8">
<h4><?php echo smarty_function_sugar_translate(array('label' => 'LBL_BILL_TO','module' => 'Quotes'), $this);?>
</h4>
</th>
</tr>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php ob_start(); ?>
<tr>
<?php if ($this->_tpl_vars['fields']['billing_account_name']['acl'] > 1 || ( $this->_tpl_vars['showDetailData'] && $this->_tpl_vars['fields']['billing_account_name']['acl'] > 0 )): ?>
<td valign="top" id='billing_account_name_label' width='12.5%' scope="row">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_BILLING_ACCOUNT_NAME','module' => 'Quotes'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<span class="required">*</span>
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td valign="top" width='37.5%' >
<?php if ($this->_tpl_vars['fields']['billing_account_name']['acl'] > 1):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<input type="text" name="<?php echo $this->_tpl_vars['fields']['billing_account_name']['name']; ?>
" class="sqsEnabled" tabindex="108" id="<?php echo $this->_tpl_vars['fields']['billing_account_name']['name']; ?>
" size="" value="<?php echo $this->_tpl_vars['fields']['billing_account_name']['value']; ?>
" title='' autocomplete="off"  >
<input type="hidden" name="<?php echo $this->_tpl_vars['fields']['billing_account_name']['id_name']; ?>
" 
id="<?php echo $this->_tpl_vars['fields']['billing_account_name']['id_name']; ?>
" 
value="<?php echo $this->_tpl_vars['fields']['billing_account_id']['value']; ?>
">
<span class="id-ff multiple">
<button type="button" name="btn_<?php echo $this->_tpl_vars['fields']['billing_account_name']['name']; ?>
" id="btn_<?php echo $this->_tpl_vars['fields']['billing_account_name']['name']; ?>
" tabindex="108" title="<?php echo $this->_tpl_vars['APP']['LBL_SELECT_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_SELECT_BUTTON_KEY']; ?>
" class="button firstChild" value="<?php echo $this->_tpl_vars['APP']['LBL_SELECT_BUTTON_LABEL']; ?>
" 
onclick='open_popup(
"<?php echo $this->_tpl_vars['fields']['billing_account_name']['module']; ?>
", 
600, 
400, 
"", 
true, 
false, 
<?php echo '{"call_back_function":"set_billing_return","form_name":"EditView","field_to_name_array":{"id":"billing_account_id","name":"billing_account_name","billing_address_street":"billing_address_street","billing_address_city":"billing_address_city","billing_address_state":"billing_address_state","billing_address_postalcode":"billing_address_postalcode","billing_address_country":"billing_address_country","shipping_address_street":"shipping_address_street","shipping_address_city":"shipping_address_city","shipping_address_state":"shipping_address_state","shipping_address_postalcode":"shipping_address_postalcode","shipping_address_country":"shipping_address_country"}}'; ?>
, 
"single", 
true
);' ><img src="<?php echo smarty_function_sugar_getimagepath(array('file' => "id-ff-select.png"), $this);?>
"></button><button type="button" name="btn_clr_<?php echo $this->_tpl_vars['fields']['billing_account_name']['name']; ?>
" id="btn_clr_<?php echo $this->_tpl_vars['fields']['billing_account_name']['name']; ?>
" tabindex="108" title="<?php echo $this->_tpl_vars['APP']['LBL_CLEAR_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_CLEAR_BUTTON_KEY']; ?>
" class="button lastChild" 
onclick="this.form.<?php echo $this->_tpl_vars['fields']['billing_account_name']['name']; ?>
.value = ''; this.form.<?php echo $this->_tpl_vars['fields']['billing_account_name']['id_name']; ?>
.value = '';" 
value="<?php echo $this->_tpl_vars['APP']['LBL_CLEAR_BUTTON_LABEL']; ?>
" ><img src="<?php echo smarty_function_sugar_getimagepath(array('file' => "id-ff-clear.png"), $this);?>
"></button>
</span>
<script type="text/javascript">
<!--
if(typeof QSProcessedFieldsArray != 'undefined') 
	QSProcessedFieldsArray["<?php echo $this->_tpl_vars['form_name']; ?>
_<?php echo $this->_tpl_vars['fields']['billing_account_name']['name']; ?>
"] = false;
	

enableQS(false);
-->	
</script>
<?php else:  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (! empty ( $this->_tpl_vars['fields']['billing_account_id']['value'] )): ?><a href="index.php?module=Accounts&action=DetailView&record=<?php echo $this->_tpl_vars['fields']['billing_account_id']['value']; ?>
"><?php endif; ?>
<span id="billing_account_id" class="sugar_field"><?php echo $this->_tpl_vars['fields']['billing_account_name']['value']; ?>
</span>
<?php if (! empty ( $this->_tpl_vars['fields']['billing_account_id']['value'] )): ?></a><?php endif; ?>
</td>
<?php endif;  else: ?>
<td></td><td></td>
<?php endif;  if ($this->_tpl_vars['fields']['shipping_account_name']['acl'] > 1 || ( $this->_tpl_vars['showDetailData'] && $this->_tpl_vars['fields']['shipping_account_name']['acl'] > 0 )): ?>
<td valign="top" id='shipping_account_name_label' width='12.5%' scope="row">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_SHIPPING_ACCOUNT_NAME','module' => 'Quotes'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td valign="top" width='37.5%' >
<?php if ($this->_tpl_vars['fields']['shipping_account_name']['acl'] > 1):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<input type="text" name="<?php echo $this->_tpl_vars['fields']['shipping_account_name']['name']; ?>
" class="sqsEnabled" tabindex="109" id="<?php echo $this->_tpl_vars['fields']['shipping_account_name']['name']; ?>
" size="" value="<?php echo $this->_tpl_vars['fields']['shipping_account_name']['value']; ?>
" title='' autocomplete="off"  >
<input type="hidden" name="<?php echo $this->_tpl_vars['fields']['shipping_account_name']['id_name']; ?>
" 
id="<?php echo $this->_tpl_vars['fields']['shipping_account_name']['id_name']; ?>
" 
value="<?php echo $this->_tpl_vars['fields']['shipping_account_id']['value']; ?>
">
<span class="id-ff multiple">
<button type="button" name="btn_<?php echo $this->_tpl_vars['fields']['shipping_account_name']['name']; ?>
" id="btn_<?php echo $this->_tpl_vars['fields']['shipping_account_name']['name']; ?>
" tabindex="109" title="<?php echo $this->_tpl_vars['APP']['LBL_SELECT_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_SELECT_BUTTON_KEY']; ?>
" class="button firstChild" value="<?php echo $this->_tpl_vars['APP']['LBL_SELECT_BUTTON_LABEL']; ?>
" 
onclick='open_popup(
"<?php echo $this->_tpl_vars['fields']['shipping_account_name']['module']; ?>
", 
600, 
400, 
"", 
true, 
false, 
<?php echo '{"call_back_function":"set_shipping_return","form_name":"EditView","field_to_name_array":{"id":"shipping_account_id","name":"shipping_account_name","shipping_address_street":"shipping_address_street","shipping_address_city":"shipping_address_city","shipping_address_state":"shipping_address_state","shipping_address_postalcode":"shipping_address_postalcode","shipping_address_country":"shipping_address_country"}}'; ?>
, 
"single", 
true
);' ><img src="<?php echo smarty_function_sugar_getimagepath(array('file' => "id-ff-select.png"), $this);?>
"></button><button type="button" name="btn_clr_<?php echo $this->_tpl_vars['fields']['shipping_account_name']['name']; ?>
" id="btn_clr_<?php echo $this->_tpl_vars['fields']['shipping_account_name']['name']; ?>
" tabindex="109" title="<?php echo $this->_tpl_vars['APP']['LBL_CLEAR_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_CLEAR_BUTTON_KEY']; ?>
" class="button lastChild" 
onclick="this.form.<?php echo $this->_tpl_vars['fields']['shipping_account_name']['name']; ?>
.value = ''; this.form.<?php echo $this->_tpl_vars['fields']['shipping_account_name']['id_name']; ?>
.value = '';" 
value="<?php echo $this->_tpl_vars['APP']['LBL_CLEAR_BUTTON_LABEL']; ?>
" ><img src="<?php echo smarty_function_sugar_getimagepath(array('file' => "id-ff-clear.png"), $this);?>
"></button>
</span>
<script type="text/javascript">
<!--
if(typeof QSProcessedFieldsArray != 'undefined') 
	QSProcessedFieldsArray["<?php echo $this->_tpl_vars['form_name']; ?>
_<?php echo $this->_tpl_vars['fields']['shipping_account_name']['name']; ?>
"] = false;
	

enableQS(false);
-->	
</script>
<?php else:  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (! empty ( $this->_tpl_vars['fields']['shipping_account_id']['value'] )): ?><a href="index.php?module=Accounts&action=DetailView&record=<?php echo $this->_tpl_vars['fields']['shipping_account_id']['value']; ?>
"><?php endif; ?>
<span id="shipping_account_id" class="sugar_field"><?php echo $this->_tpl_vars['fields']['shipping_account_name']['value']; ?>
</span>
<?php if (! empty ( $this->_tpl_vars['fields']['shipping_account_id']['value'] )): ?></a><?php endif; ?>
</td>
<?php endif;  else: ?>
<td></td><td></td>
<?php endif; ?>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean();  if ($this->_tpl_vars['fieldsUsed'] > 0):  echo $this->_tpl_vars['tableRow']; ?>

<?php endif;  echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php ob_start(); ?>
<tr>
<?php if ($this->_tpl_vars['fields']['billing_contact_name']['acl'] > 1 || ( $this->_tpl_vars['showDetailData'] && $this->_tpl_vars['fields']['billing_contact_name']['acl'] > 0 )): ?>
<td valign="top" id='billing_contact_name_label' width='12.5%' scope="row">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_BILLING_CONTACT_NAME','module' => 'Quotes'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td valign="top" width='37.5%' >
<?php if ($this->_tpl_vars['fields']['billing_contact_name']['acl'] > 1):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<input type="text" name="<?php echo $this->_tpl_vars['fields']['billing_contact_name']['name']; ?>
" class="sqsEnabled" tabindex="110" id="<?php echo $this->_tpl_vars['fields']['billing_contact_name']['name']; ?>
" size="" value="<?php echo $this->_tpl_vars['fields']['billing_contact_name']['value']; ?>
" title='' autocomplete="off"  >
<input type="hidden" name="<?php echo $this->_tpl_vars['fields']['billing_contact_name']['id_name']; ?>
" 
id="<?php echo $this->_tpl_vars['fields']['billing_contact_name']['id_name']; ?>
" 
value="<?php echo $this->_tpl_vars['fields']['billing_contact_id']['value']; ?>
">
<span class="id-ff multiple">
<button type="button" name="btn_<?php echo $this->_tpl_vars['fields']['billing_contact_name']['name']; ?>
" id="btn_<?php echo $this->_tpl_vars['fields']['billing_contact_name']['name']; ?>
" tabindex="110" title="<?php echo $this->_tpl_vars['APP']['LBL_SELECT_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_SELECT_BUTTON_KEY']; ?>
" class="button firstChild" value="<?php echo $this->_tpl_vars['APP']['LBL_SELECT_BUTTON_LABEL']; ?>
" 
onclick='open_popup(
"<?php echo $this->_tpl_vars['fields']['billing_contact_name']['module']; ?>
", 
600, 
400, 
"&account_id_advanced="+this.form.<?php echo $this->_tpl_vars['fields']['billing_account_name']['id_name']; ?>
.value+"&account_name_advanced="+this.form.<?php echo $this->_tpl_vars['fields']['billing_account_name']['name']; ?>
.value+"", 
true, 
false, 
<?php echo '{"call_back_function":"set_return","form_name":"EditView","field_to_name_array":{"id":"billing_contact_id","last_name":"billing_contact_name"}}'; ?>
, 
"single", 
true
);' ><img src="<?php echo smarty_function_sugar_getimagepath(array('file' => "id-ff-select.png"), $this);?>
"></button><button type="button" name="btn_clr_<?php echo $this->_tpl_vars['fields']['billing_contact_name']['name']; ?>
" id="btn_clr_<?php echo $this->_tpl_vars['fields']['billing_contact_name']['name']; ?>
" tabindex="110" title="<?php echo $this->_tpl_vars['APP']['LBL_CLEAR_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_CLEAR_BUTTON_KEY']; ?>
" class="button lastChild" 
onclick="this.form.<?php echo $this->_tpl_vars['fields']['billing_contact_name']['name']; ?>
.value = ''; this.form.<?php echo $this->_tpl_vars['fields']['billing_contact_name']['id_name']; ?>
.value = '';" 
value="<?php echo $this->_tpl_vars['APP']['LBL_CLEAR_BUTTON_LABEL']; ?>
" ><img src="<?php echo smarty_function_sugar_getimagepath(array('file' => "id-ff-clear.png"), $this);?>
"></button>
</span>
<script type="text/javascript">
<!--
if(typeof QSProcessedFieldsArray != 'undefined') 
	QSProcessedFieldsArray["<?php echo $this->_tpl_vars['form_name']; ?>
_<?php echo $this->_tpl_vars['fields']['billing_contact_name']['name']; ?>
"] = false;
	

enableQS(false);
-->	
</script>
<?php else:  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (! empty ( $this->_tpl_vars['fields']['billing_contact_id']['value'] )): ?><a href="index.php?module=Contacts&action=DetailView&record=<?php echo $this->_tpl_vars['fields']['billing_contact_id']['value']; ?>
"><?php endif; ?>
<span id="billing_contact_id" class="sugar_field"><?php echo $this->_tpl_vars['fields']['billing_contact_name']['value']; ?>
</span>
<?php if (! empty ( $this->_tpl_vars['fields']['billing_contact_id']['value'] )): ?></a><?php endif; ?>
</td>
<?php endif;  else: ?>
<td></td><td></td>
<?php endif;  if ($this->_tpl_vars['fields']['shipping_contact_name']['acl'] > 1 || ( $this->_tpl_vars['showDetailData'] && $this->_tpl_vars['fields']['shipping_contact_name']['acl'] > 0 )): ?>
<td valign="top" id='shipping_contact_name_label' width='12.5%' scope="row">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_SHIPPING_CONTACT_NAME','module' => 'Quotes'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td valign="top" width='37.5%' >
<?php if ($this->_tpl_vars['fields']['shipping_contact_name']['acl'] > 1):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<input type="text" name="<?php echo $this->_tpl_vars['fields']['shipping_contact_name']['name']; ?>
" class="sqsEnabled" tabindex="111" id="<?php echo $this->_tpl_vars['fields']['shipping_contact_name']['name']; ?>
" size="" value="<?php echo $this->_tpl_vars['fields']['shipping_contact_name']['value']; ?>
" title='' autocomplete="off"  >
<input type="hidden" name="<?php echo $this->_tpl_vars['fields']['shipping_contact_name']['id_name']; ?>
" 
id="<?php echo $this->_tpl_vars['fields']['shipping_contact_name']['id_name']; ?>
" 
value="<?php echo $this->_tpl_vars['fields']['shipping_contact_id']['value']; ?>
">
<span class="id-ff multiple">
<button type="button" name="btn_<?php echo $this->_tpl_vars['fields']['shipping_contact_name']['name']; ?>
" id="btn_<?php echo $this->_tpl_vars['fields']['shipping_contact_name']['name']; ?>
" tabindex="111" title="<?php echo $this->_tpl_vars['APP']['LBL_SELECT_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_SELECT_BUTTON_KEY']; ?>
" class="button firstChild" value="<?php echo $this->_tpl_vars['APP']['LBL_SELECT_BUTTON_LABEL']; ?>
" 
onclick='open_popup(
"<?php echo $this->_tpl_vars['fields']['shipping_contact_name']['module']; ?>
", 
600, 
400, 
"&account_id_advanced="+this.form.<?php echo $this->_tpl_vars['fields']['shipping_account_name']['id_name']; ?>
.value+"&account_name_advanced="+this.form.<?php echo $this->_tpl_vars['fields']['shipping_account_name']['name']; ?>
.value+"", 
true, 
false, 
<?php echo '{"call_back_function":"set_return","form_name":"EditView","field_to_name_array":{"id":"shipping_contact_id","last_name":"shipping_contact_name"}}'; ?>
, 
"single", 
true
);' ><img src="<?php echo smarty_function_sugar_getimagepath(array('file' => "id-ff-select.png"), $this);?>
"></button><button type="button" name="btn_clr_<?php echo $this->_tpl_vars['fields']['shipping_contact_name']['name']; ?>
" id="btn_clr_<?php echo $this->_tpl_vars['fields']['shipping_contact_name']['name']; ?>
" tabindex="111" title="<?php echo $this->_tpl_vars['APP']['LBL_CLEAR_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_CLEAR_BUTTON_KEY']; ?>
" class="button lastChild" 
onclick="this.form.<?php echo $this->_tpl_vars['fields']['shipping_contact_name']['name']; ?>
.value = ''; this.form.<?php echo $this->_tpl_vars['fields']['shipping_contact_name']['id_name']; ?>
.value = '';" 
value="<?php echo $this->_tpl_vars['APP']['LBL_CLEAR_BUTTON_LABEL']; ?>
" ><img src="<?php echo smarty_function_sugar_getimagepath(array('file' => "id-ff-clear.png"), $this);?>
"></button>
</span>
<script type="text/javascript">
<!--
if(typeof QSProcessedFieldsArray != 'undefined') 
	QSProcessedFieldsArray["<?php echo $this->_tpl_vars['form_name']; ?>
_<?php echo $this->_tpl_vars['fields']['shipping_contact_name']['name']; ?>
"] = false;
	

enableQS(false);
-->	
</script>
<?php else:  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (! empty ( $this->_tpl_vars['fields']['shipping_contact_id']['value'] )): ?><a href="index.php?module=Contacts&action=DetailView&record=<?php echo $this->_tpl_vars['fields']['shipping_contact_id']['value']; ?>
"><?php endif; ?>
<span id="shipping_contact_id" class="sugar_field"><?php echo $this->_tpl_vars['fields']['shipping_contact_name']['value']; ?>
</span>
<?php if (! empty ( $this->_tpl_vars['fields']['shipping_contact_id']['value'] )): ?></a><?php endif; ?>
</td>
<?php endif;  else: ?>
<td></td><td></td>
<?php endif; ?>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean();  if ($this->_tpl_vars['fieldsUsed'] > 0):  echo $this->_tpl_vars['tableRow']; ?>

<?php endif; ?>
</table>
</div>
<?php if ($this->_tpl_vars['panelFieldCount'] == 0): ?>
<script>document.getElementById("LBL_BILL_TO").style.display='none';</script>
<?php endif; ?>
<div id="LBL_ADDRESS_INFORMATION">
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','start' => 0,'print' => false,'assign' => 'panelFieldCount'), $this);?>

<table width="100%" border="0" cellspacing="1" cellpadding="0"  class="<?php echo ((is_array($_tmp=@$this->_tpl_vars['def']['templateMeta']['panelClass'])) ? $this->_run_mod_handler('default', true, $_tmp, 'edit view') : smarty_modifier_default($_tmp, 'edit view')); ?>
">
<tr>
<th align="left" colspan="8">
<h4><?php echo smarty_function_sugar_translate(array('label' => 'LBL_ADDRESS_INFORMATION','module' => 'Quotes'), $this);?>
</h4>
</th>
</tr>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php ob_start(); ?>
<tr>
<?php if ($this->_tpl_vars['fields']['billing_address_street']['acl'] > 1 || ( $this->_tpl_vars['showDetailData'] && $this->_tpl_vars['fields']['billing_address_street']['acl'] > 0 )):  echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td valign="top" width='37.5%' colspan='2'>
<?php if ($this->_tpl_vars['fields']['billing_address_street']['acl'] > 1):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<script type="text/javascript" src='<?php echo smarty_function_sugar_getjspath(array('file' => "include/SugarFields/Fields/Address/SugarFieldAddress.js"), $this);?>
'></script>
<fieldset id='BILLING_address_fieldset'>
<legend><?php echo smarty_function_sugar_translate(array('label' => 'LBL_BILLING_ADDRESS','module' => ''), $this);?>
</legend>
<table border="0" cellspacing="1" cellpadding="0" class="edit" width="100%">
<tr>
<td valign="top" id="billing_address_street_label" width='25%' scope='row' >
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_STREET','module' => ''), $this);?>
:
<?php if ($this->_tpl_vars['fields']['billing_address_street']['required'] || false): ?>
<span class="required"><?php echo $this->_tpl_vars['APP']['LBL_REQUIRED_SYMBOL']; ?>
</span>
<?php endif; ?>
</td>
<td width="*">
<textarea id="billing_address_street" name="billing_address_street" maxlength="150" rows="2" cols="30" tabindex="112"><?php echo $this->_tpl_vars['fields']['billing_address_street']['value']; ?>
</textarea>
</td>
</tr>
<tr>
<td id="billing_address_city_label" width='%' scope='row' >
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_CITY','module' => ''), $this);?>
:
<?php if ($this->_tpl_vars['fields']['billing_address_city']['required'] || false): ?>
<span class="required"><?php echo $this->_tpl_vars['APP']['LBL_REQUIRED_SYMBOL']; ?>
</span>
<?php endif; ?>
</td>
<td>
<input type="text" name="billing_address_city" id="billing_address_city" size="30" maxlength='150' value='<?php echo $this->_tpl_vars['fields']['billing_address_city']['value']; ?>
' tabindex="112">
</td>
</tr>
<tr>
<td id="billing_address_state_label" width='%' scope='row' >
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_STATE','module' => ''), $this);?>
:
<?php if ($this->_tpl_vars['fields']['billing_address_state']['required'] || false): ?>
<span class="required"><?php echo $this->_tpl_vars['APP']['LBL_REQUIRED_SYMBOL']; ?>
</span>
<?php endif; ?>
</td>
<td>
<input type="text" name="billing_address_state" id="billing_address_state" size="30" maxlength='150' value='<?php echo $this->_tpl_vars['fields']['billing_address_state']['value']; ?>
' tabindex="112">
</td>
</tr>
<tr>
<td id="billing_address_postalcode_label" width='%' scope='row' >
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_POSTAL_CODE','module' => ''), $this);?>
:
<?php if ($this->_tpl_vars['fields']['billing_address_postalcode']['required'] || false): ?>
<span class="required"><?php echo $this->_tpl_vars['APP']['LBL_REQUIRED_SYMBOL']; ?>
</span>
<?php endif; ?>
</td>
<td>
<input type="text" name="billing_address_postalcode" id="billing_address_postalcode" size="30" maxlength='150' value='<?php echo $this->_tpl_vars['fields']['billing_address_postalcode']['value']; ?>
' tabindex="112">
</td>
</tr>
<tr>
<td id="billing_address_country_label" width='%' scope='row' >
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_COUNTRY','module' => ''), $this);?>
:
<?php if ($this->_tpl_vars['fields']['billing_address_country']['required'] || false): ?>
<span class="required"><?php echo $this->_tpl_vars['APP']['LBL_REQUIRED_SYMBOL']; ?>
</span>
<?php endif; ?>
</td>
<td>
<input type="text" name="billing_address_country" id="billing_address_country" size="30" maxlength='150' value='<?php echo $this->_tpl_vars['fields']['billing_address_country']['value']; ?>
' tabindex="112">
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
<?php else:  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


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
</td>
<?php endif;  else: ?>
<td></td><td></td>
<?php endif;  if ($this->_tpl_vars['fields']['shipping_address_street']['acl'] > 1 || ( $this->_tpl_vars['showDetailData'] && $this->_tpl_vars['fields']['shipping_address_street']['acl'] > 0 )):  echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td valign="top" width='37.5%' colspan='2'>
<?php if ($this->_tpl_vars['fields']['shipping_address_street']['acl'] > 1):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<script type="text/javascript" src='<?php echo smarty_function_sugar_getjspath(array('file' => "include/SugarFields/Fields/Address/SugarFieldAddress.js"), $this);?>
'></script>
<fieldset id='SHIPPING_address_fieldset'>
<legend><?php echo smarty_function_sugar_translate(array('label' => 'LBL_SHIPPING_ADDRESS','module' => ''), $this);?>
</legend>
<table border="0" cellspacing="1" cellpadding="0" class="edit" width="100%">
<tr>
<td valign="top" id="shipping_address_street_label" width='25%' scope='row' >
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_STREET','module' => ''), $this);?>
:
<?php if ($this->_tpl_vars['fields']['shipping_address_street']['required'] || false): ?>
<span class="required"><?php echo $this->_tpl_vars['APP']['LBL_REQUIRED_SYMBOL']; ?>
</span>
<?php endif; ?>
</td>
<td width="*">
<textarea id="shipping_address_street" name="shipping_address_street" maxlength="150" rows="2" cols="30" tabindex="113"><?php echo $this->_tpl_vars['fields']['shipping_address_street']['value']; ?>
</textarea>
</td>
</tr>
<tr>
<td id="shipping_address_city_label" width='%' scope='row' >
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_CITY','module' => ''), $this);?>
:
<?php if ($this->_tpl_vars['fields']['shipping_address_city']['required'] || false): ?>
<span class="required"><?php echo $this->_tpl_vars['APP']['LBL_REQUIRED_SYMBOL']; ?>
</span>
<?php endif; ?>
</td>
<td>
<input type="text" name="shipping_address_city" id="shipping_address_city" size="30" maxlength='150' value='<?php echo $this->_tpl_vars['fields']['shipping_address_city']['value']; ?>
' tabindex="113">
</td>
</tr>
<tr>
<td id="shipping_address_state_label" width='%' scope='row' >
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_STATE','module' => ''), $this);?>
:
<?php if ($this->_tpl_vars['fields']['shipping_address_state']['required'] || false): ?>
<span class="required"><?php echo $this->_tpl_vars['APP']['LBL_REQUIRED_SYMBOL']; ?>
</span>
<?php endif; ?>
</td>
<td>
<input type="text" name="shipping_address_state" id="shipping_address_state" size="30" maxlength='150' value='<?php echo $this->_tpl_vars['fields']['shipping_address_state']['value']; ?>
' tabindex="113">
</td>
</tr>
<tr>
<td id="shipping_address_postalcode_label" width='%' scope='row' >
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_POSTAL_CODE','module' => ''), $this);?>
:
<?php if ($this->_tpl_vars['fields']['shipping_address_postalcode']['required'] || false): ?>
<span class="required"><?php echo $this->_tpl_vars['APP']['LBL_REQUIRED_SYMBOL']; ?>
</span>
<?php endif; ?>
</td>
<td>
<input type="text" name="shipping_address_postalcode" id="shipping_address_postalcode" size="30" maxlength='150' value='<?php echo $this->_tpl_vars['fields']['shipping_address_postalcode']['value']; ?>
' tabindex="113">
</td>
</tr>
<tr>
<td id="shipping_address_country_label" width='%' scope='row' >
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_COUNTRY','module' => ''), $this);?>
:
<?php if ($this->_tpl_vars['fields']['shipping_address_country']['required'] || false): ?>
<span class="required"><?php echo $this->_tpl_vars['APP']['LBL_REQUIRED_SYMBOL']; ?>
</span>
<?php endif; ?>
</td>
<td>
<input type="text" name="shipping_address_country" id="shipping_address_country" size="30" maxlength='150' value='<?php echo $this->_tpl_vars['fields']['shipping_address_country']['value']; ?>
' tabindex="113">
</td>
</tr>
<tr>
<td scope='row' NOWRAP>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_COPY_ADDRESS_FROM_LEFT','module' => ''), $this);?>
:
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
<?php else:  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


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
</td>
<?php endif;  else: ?>
<td></td><td></td>
<?php endif; ?>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean();  if ($this->_tpl_vars['fieldsUsed'] > 0):  echo $this->_tpl_vars['tableRow']; ?>

<?php endif; ?>
</table>
</div>
<?php if ($this->_tpl_vars['panelFieldCount'] == 0): ?>
<script>document.getElementById("LBL_ADDRESS_INFORMATION").style.display='none';</script>
<?php endif; ?>
<div id="LBL_PANEL_ASSIGNMENT">
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','start' => 0,'print' => false,'assign' => 'panelFieldCount'), $this);?>

<table width="100%" border="0" cellspacing="1" cellpadding="0"  class="<?php echo ((is_array($_tmp=@$this->_tpl_vars['def']['templateMeta']['panelClass'])) ? $this->_run_mod_handler('default', true, $_tmp, 'edit view') : smarty_modifier_default($_tmp, 'edit view')); ?>
">
<tr>
<th align="left" colspan="8">
<h4><?php echo smarty_function_sugar_translate(array('label' => 'LBL_PANEL_ASSIGNMENT','module' => 'Quotes'), $this);?>
</h4>
</th>
</tr>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php ob_start(); ?>
<tr>
<?php if ($this->_tpl_vars['fields']['assigned_user_name']['acl'] > 1 || ( $this->_tpl_vars['showDetailData'] && $this->_tpl_vars['fields']['assigned_user_name']['acl'] > 0 )): ?>
<td valign="top" id='assigned_user_name_label' width='12.5%' scope="row">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_ASSIGNED_TO_NAME','module' => 'Quotes'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td valign="top" width='37.5%' >
<?php if ($this->_tpl_vars['fields']['assigned_user_name']['acl'] > 1):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<input type="text" name="<?php echo $this->_tpl_vars['fields']['assigned_user_name']['name']; ?>
" class="sqsEnabled" tabindex="114" id="<?php echo $this->_tpl_vars['fields']['assigned_user_name']['name']; ?>
" size="" value="<?php echo $this->_tpl_vars['fields']['assigned_user_name']['value']; ?>
" title='' autocomplete="off"  >
<input type="hidden" name="<?php echo $this->_tpl_vars['fields']['assigned_user_name']['id_name']; ?>
" 
id="<?php echo $this->_tpl_vars['fields']['assigned_user_name']['id_name']; ?>
" 
value="<?php echo $this->_tpl_vars['fields']['assigned_user_id']['value']; ?>
">
<span class="id-ff multiple">
<button type="button" name="btn_<?php echo $this->_tpl_vars['fields']['assigned_user_name']['name']; ?>
" id="btn_<?php echo $this->_tpl_vars['fields']['assigned_user_name']['name']; ?>
" tabindex="114" title="<?php echo $this->_tpl_vars['APP']['LBL_SELECT_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_SELECT_BUTTON_KEY']; ?>
" class="button firstChild" value="<?php echo $this->_tpl_vars['APP']['LBL_SELECT_BUTTON_LABEL']; ?>
" 
onclick='open_popup(
"<?php echo $this->_tpl_vars['fields']['assigned_user_name']['module']; ?>
", 
600, 
400, 
"", 
true, 
false, 
<?php echo '{"call_back_function":"set_return","form_name":"EditView","field_to_name_array":{"id":"assigned_user_id","user_name":"assigned_user_name"}}'; ?>
, 
"single", 
true
);' ><img src="<?php echo smarty_function_sugar_getimagepath(array('file' => "id-ff-select.png"), $this);?>
"></button><button type="button" name="btn_clr_<?php echo $this->_tpl_vars['fields']['assigned_user_name']['name']; ?>
" id="btn_clr_<?php echo $this->_tpl_vars['fields']['assigned_user_name']['name']; ?>
" tabindex="114" title="<?php echo $this->_tpl_vars['APP']['LBL_CLEAR_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_CLEAR_BUTTON_KEY']; ?>
" class="button lastChild" 
onclick="this.form.<?php echo $this->_tpl_vars['fields']['assigned_user_name']['name']; ?>
.value = ''; this.form.<?php echo $this->_tpl_vars['fields']['assigned_user_name']['id_name']; ?>
.value = '';" 
value="<?php echo $this->_tpl_vars['APP']['LBL_CLEAR_BUTTON_LABEL']; ?>
" ><img src="<?php echo smarty_function_sugar_getimagepath(array('file' => "id-ff-clear.png"), $this);?>
"></button>
</span>
<script type="text/javascript">
<!--
if(typeof QSProcessedFieldsArray != 'undefined') 
	QSProcessedFieldsArray["<?php echo $this->_tpl_vars['form_name']; ?>
_<?php echo $this->_tpl_vars['fields']['assigned_user_name']['name']; ?>
"] = false;
	

enableQS(false);
-->	
</script>
<?php else:  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<span id="assigned_user_id" class="sugar_field"><?php echo $this->_tpl_vars['fields']['assigned_user_name']['value']; ?>
</span>
</td>
<?php endif;  else: ?>
<td></td><td></td>
<?php endif;  if ($this->_tpl_vars['fields']['team_name']['acl'] > 1 || ( $this->_tpl_vars['showDetailData'] && $this->_tpl_vars['fields']['team_name']['acl'] > 0 )): ?>
<td valign="top" id='team_name_label' width='12.5%' scope="row">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_TEAMS','module' => 'Quotes'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<span class="required">*</span>
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td valign="top" width='37.5%' >
<?php if ($this->_tpl_vars['fields']['team_name']['acl'] > 1):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php echo smarty_function_sugarvar_teamset(array('parentFieldArray' => 'fields','vardef' => $this->_tpl_vars['fields']['team_name'],'tabindex' => 1,'display' => '','labelSpan' => '','fieldSpan' => '','formName' => 'EditView','displayType' => 'renderEditView'), $this);?>

<?php else:  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php echo smarty_function_sugarvar_teamset(array('parentFieldArray' => 'fields','vardef' => $this->_tpl_vars['fields']['team_name'],'tabindex' => 1,'display' => '','labelSpan' => '','fieldSpan' => '','formName' => 'EditView','displayType' => 'renderDetailView'), $this);?>

</td>
<?php endif;  else: ?>
<td></td><td></td>
<?php endif; ?>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean();  if ($this->_tpl_vars['fieldsUsed'] > 0):  echo $this->_tpl_vars['tableRow']; ?>

<?php endif; ?>
</table>
</div>
<?php if ($this->_tpl_vars['panelFieldCount'] == 0): ?>
<script>document.getElementById("LBL_PANEL_ASSIGNMENT").style.display='none';</script>
<?php endif; ?>
</div></div>

<table width="100%" border="0" cellspacing="0" cellpadding="0" class="edit view">
<tr>
<td>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<th align="left" scope="row" colspan="4" scope="row"><h4><?php echo $this->_tpl_vars['MOD']['LBL_LINE_ITEM_INFORMATION']; ?>
</h4></th>
</tr><tr>
<td colspan="4">
<table border='0' width="100%" cellspacing='2' cellpadding='0'>
<tr>
<td width='10%' scope="row"><?php echo $this->_tpl_vars['MOD']['LBL_CURRENCY']; ?>
</td>
<td width='10%' ><select tabindex='5' name='currency_id' id='currency_id' onchange='ConvertItems(this.options[selectedIndex].value);'><?php echo $this->_tpl_vars['CURRENCY']; ?>
</select></td>
<td width='10%' scope="row"><?php echo $this->_tpl_vars['MOD']['LBL_TAXRATE']; ?>
</td>
<td width='13%' >
<select tabindex='5' name='taxrate_id' onchange="this.form.taxrate_value.value=get_taxrate(this.form.taxrate_id.options[selectedIndex].value);calculate(document)"><?php echo $this->_tpl_vars['TAXRATE_OPTIONS']; ?>
</select>
<input type="hidden" name="taxrate_value" value="<?php echo $this->_tpl_vars['TAXRATE_VALUE']; ?>
">
</td>
<td width='13%' scope="row"><?php echo $this->_tpl_vars['MOD']['LBL_SHIPPING_PROVIDER']; ?>
</td>
<td width='13%' ><select tabindex='5' name='shipper_id'><?php echo $this->_tpl_vars['SHIPPER_OPTIONS']; ?>
</select></td>
<td width='13%' scope="row"><?php echo $this->_tpl_vars['MOD']['LBL_CALC_GRAND']; ?>
</td>
<td width='13%' ><input tabindex='5' type='checkbox' class='checkbox' name='calc_grand_total' id='calc_grand_total' onClick='toggleDisplay("grand_tally");' <?php echo $this->_tpl_vars['CALC_GRAND_TOTAL_CHECKED']; ?>
></td>
<td width='13%' scope="row"><?php echo $this->_tpl_vars['MOD']['LBL_SHOW_LINE_NUMS']; ?>
</td>
<td width='40%' ><input tabindex='5' type='checkbox' class='checkbox' name='show_line_nums' id='show_line_nums' <?php echo $this->_tpl_vars['SHOW_LINE_NUMS_CHECKED']; ?>
></td>
</tr>
</table>
<div id='ie_hack_stage' style='display:none'>
<table name='table_name' id='table_id' >
<tr><td scope="row"><?php echo $this->_tpl_vars['MOD']['LBL_BUNDLE_NAME']; ?>
</td>
<td >
&nbsp; <input type='text' tabindex='5' size='20' name='name_name' id='name_id' value=''>
</td><td scope="row"><?php echo $this->_tpl_vars['MOD']['LBL_BUNDLE_STAGE']; ?>
</td>
<td >&nbsp;
<select name='select_name' tabindex='5' id='select_id' onchange='calculate(document);'>
<?php echo $this->_tpl_vars['QUOTE_STAGE_OPTIONS']; ?>

</select>
</td></tr></table>
</div>
<div id='add_tables'>&nbsp;</div>
<div id='grand_tally' style='display:inline'>
<table  border="0" cellspacing="0" cellpadding="0" >
<tr>
<td scope="row"  valign="top" style="text-align: left;"><?php echo $this->_tpl_vars['MOD']['LBL_LIST_GRAND_TOTAL']; ?>
</td>
</tr>
<tr>
<td scope="row" NOWRAP style="text-align: left;"><?php echo $this->_tpl_vars['MOD']['LBL_SUBTOTAL']; ?>
</td>
<td scope="row" NOWRAP><div style="text-align: right;" id='grand_sub'><?php echo $this->_tpl_vars['SUBTOTAL']; ?>
</div></td>
</tr>
<tr>
<td scope="row" NOWRAP style="text-align: left;"><?php echo $this->_tpl_vars['MOD']['LBL_DISCOUNT_TOTAL']; ?>
</td>
<td scope="row" NOWRAP><div style="text-align: right;" id='grand_discount'><?php echo $this->_tpl_vars['DISCOUNT']; ?>
</div></td>
</tr>
<tr>
<td scope="row" NOWRAP style="text-align: left;"><?php echo $this->_tpl_vars['MOD']['LBL_NEW_SUB']; ?>
</td>
<td scope="row" NOWRAP><div style="text-align: right;" id='grand_new_sub'><?php echo $this->_tpl_vars['NEW_SUB']; ?>
</div></td>
</tr>
<tr>
<td scope="row" NOWRAP style="text-align: left;"><?php echo $this->_tpl_vars['MOD']['LBL_TAX']; ?>
</td>
<td scope="row" NOWRAP><div style="text-align: right;" id='grand_tax'><?php echo $this->_tpl_vars['TAX']; ?>
</div></td>
</tr>
<tr>
<td scope="row" NOWRAP style="text-align: left;"><?php echo $this->_tpl_vars['MOD']['LBL_SHIPPING']; ?>
</td>
<td scope="row" NOWRAP><div style="text-align: right;" id='grand_ship'><?php echo $this->_tpl_vars['SHIPPING']; ?>
</div></td>
</tr>
<tr>
<td scope="row" NOWRAP style="text-align: left;"><?php echo $this->_tpl_vars['MOD']['LBL_TOTAL']; ?>
</td>
<td scope="row" NOWRAP> <div style="text-align: right;" id='grand_total'><?php echo $this->_tpl_vars['TOTAL']; ?>
</div></td>
</tr>
</table>
</div>
<br>
<input type='button' id='add_group' name='add_group' class='button' value='<?php echo $this->_tpl_vars['MOD']['LBL_ADD_GROUP']; ?>
' onclick='addTable("", "","","0.00")'>
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
<tr><th align="left" scope="row" colspan="2" scope="row"><h4><?php echo $this->_tpl_vars['MOD']['LBL_DESCRIPTION_INFORMATION']; ?>
</h4></th></tr>
<tr><td width="15%" valign="top" scope="row"><?php echo $this->_tpl_vars['MOD']['LBL_DESCRIPTION']; ?>
</td><td width="85%" ><textarea name='description' tabindex='7' cols="60" rows="8"><?php echo $this->_tpl_vars['fields']['description']['value']; ?>
</textarea></td></tr>
</table>
</td></tr>
</table>
<script type="text/javascript">
Calendar.setup (<?php echo ' { '; ?>

	inputField : "jscal_field", daFormat : "<?php echo $this->_tpl_vars['CALENDAR_DATEFORMAT']; ?>
", ifFormat : "<?php echo $this->_tpl_vars['CALENDAR_DATEFORMAT']; ?>
", showsTime : false, button : "jscal_trigger", singleClick : true, step : 1, weekNumbers:false
<?php echo ' } '; ?>
);

Calendar.setup (<?php echo ' { '; ?>

	inputField : "jscal_field_original_po_date", ifFormat : "<?php echo $this->_tpl_vars['CALENDAR_DATEFORMAT']; ?>
", showsTime : false, button : "jscal_trigger_original_po_date", singleClick : true, step : 1, weekNumbers:false
<?php echo ' } '; ?>
);
</script>
<?php echo $this->_tpl_vars['TAXRATE_JAVASCRIPT']; ?>

<?php echo $this->_tpl_vars['NO_MATCH_VARIABLE']; ?>

<?php echo $this->_tpl_vars['CURRENCY_JAVASCRIPT']; ?>

<script type="text/javascript" src="<?php echo smarty_function_sugar_getjspath(array('file' => 'modules/Quotes/quotes.js'), $this);?>
"></script>
<script type="text/javascript" src="<?php echo smarty_function_sugar_getjspath(array('file' => 'modules/Quotes/EditView.js'), $this);?>
"></script>
<script type="text/javascript">
<?php echo '
if(!document.getElementById(\'calc_grand_total\').checked){
	document.getElementById(\'grand_tally\').style.display = \'none\';
}
'; ?>


var precision = "<?php echo $this->_tpl_vars['PRECISION']; ?>
";
var default_product_status = "<?php echo $this->_tpl_vars['DEFAULT_PRODUCT_STATUS']; ?>
";
var invalidAmount = "<?php echo $this->_tpl_vars['APP']['ERR_INVALID_AMOUNT']; ?>
";
var selectButtonTitle = "<?php echo $this->_tpl_vars['APP']['LBL_SELECT_BUTTON_TITLE']; ?>
";
var selectButtonKey = "<?php echo $this->_tpl_vars['APP']['LBL_SELECT_BUTTON_KEY']; ?>
";
var selectButtonValue = "<?php echo $this->_tpl_vars['APP']['LBL_SELECT_BUTTON_LABEL']; ?>
";
var deleteButtonName = "<?php echo $this->_tpl_vars['MOD']['LBL_REMOVE_ROW']; ?>
";
var deleteButtonConfirm = "<?php echo $this->_tpl_vars['MOD']['NTC_REMOVE_PRODUCT_CONFIRMATION']; ?>
";
var deleteGroupConfirm = "<?php echo $this->_tpl_vars['MOD']['NTC_REMOVE_GROUP_CONFIRMATION']; ?>
";
var deleteButtonValue = "<?php echo $this->_tpl_vars['MOD']['LBL_REMOVE_ROW']; ?>
";
var addRowName = "<?php echo $this->_tpl_vars['MOD']['LBL_ADD_ROW']; ?>
";
var addRowValue = "<?php echo $this->_tpl_vars['MOD']['LBL_ADD_ROW']; ?>
";
var deleteTableName = "<?php echo $this->_tpl_vars['MOD']['LBL_DELETE_GROUP']; ?>
";
var deleteTableValue = "<?php echo $this->_tpl_vars['MOD']['LBL_DELETE_GROUP']; ?>
";
var subtotal_string = "<?php echo $this->_tpl_vars['MOD']['LBL_SUBTOTAL']; ?>
";
var shipping_string = "<?php echo $this->_tpl_vars['MOD']['LBL_SHIPPING']; ?>
";
var deal_tot_string = "<?php echo $this->_tpl_vars['MOD']['LBL_DISCOUNT_TOTAL']; ?>
";
var new_sub_string = "<?php echo $this->_tpl_vars['MOD']['LBL_NEW_SUB']; ?>
";
var total_string = "<?php echo $this->_tpl_vars['MOD']['LBL_TOTAL']; ?>
";
var tax_string = "<?php echo $this->_tpl_vars['MOD']['LBL_TAX']; ?>
";
var list_quantity_string = "<?php echo $this->_tpl_vars['MOD']['LBL_LIST_QUANTITY']; ?>
"
var list_product_name_string = "<?php echo $this->_tpl_vars['MOD']['LBL_LIST_PRODUCT_NAME']; ?>
"
var list_mf_part_num_string = "<?php echo $this->_tpl_vars['MOD']['LBL_LIST_MANUFACTURER_PART_NUM']; ?>
"
var list_taxclass_string = "<?php echo $this->_tpl_vars['MOD']['LBL_LIST_TAXCLASS']; ?>
"
var list_cost_string = "<?php echo $this->_tpl_vars['MOD']['LBL_LIST_COST_PRICE']; ?>
"
var list_list_string = "<?php echo $this->_tpl_vars['MOD']['LBL_LIST_LIST_PRICE']; ?>
"
var list_discount_string = "<?php echo $this->_tpl_vars['MOD']['LBL_LIST_DISCOUNT_PRICE']; ?>
"
var list_deal_tot = "<?php echo $this->_tpl_vars['MOD']['LBL_LIST_DEAL_TOT']; ?>
"
var check_data = "<?php echo $this->_tpl_vars['MOD']['LBL_CHECK_DATA']; ?>
"
var addCommentName = "<?php echo $this->_tpl_vars['MOD']['LBL_ADD_COMMENT']; ?>
";
var addCommentValue = "<?php echo $this->_tpl_vars['MOD']['LBL_ADD_COMMENT']; ?>
";
var deleteCommentName = "<?php echo $this->_tpl_vars['MOD']['LBL_REMOVE_COMMENT']; ?>
";
var deleteCommentValue = "<?php echo $this->_tpl_vars['MOD']['LBL_REMOVE_COMMENT']; ?>
";
var deleteCommentConfirm = "<?php echo $this->_tpl_vars['MOD']['NTC_REMOVE_COMMENT_CONFIRMATION']; ?>
";

<?php echo $this->_tpl_vars['ADD_ROWS']; ?>

</script>
<script type="text/javascript" language="Javascript">
<?php echo $this->_tpl_vars['SETUP_SCRIPT']; ?>

<?php echo '
YAHOO.util.Event.onDOMReady(function()
{
    sqs_objects[\'EditView_billing_account_name\'][\'post_onblur_function\'] = \'set_shipping_account_name\';
});
'; ?>

</script>
<?php echo $this->_tpl_vars['CALCULATE_FUNCTION']; ?>

<?php echo $this->_tpl_vars['SAVED_SEARCH_SELECTS']; ?>


<div class="buttons">
<?php if ($this->_tpl_vars['bean']->aclAccess('save')): ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_KEY']; ?>
" class="button primary" onclick="<?php if ($this->_tpl_vars['isDuplicate']): ?>this.form.return_id.value=''; <?php endif; ?>this.form.action.value='Save'; return check_form('EditView');" type="submit" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_LABEL']; ?>
" id="SAVE_FOOTER"><?php endif; ?> 
<?php if (! empty ( $_REQUEST['return_action'] ) && ( $_REQUEST['return_action'] == 'DetailView' && ! empty ( $_REQUEST['return_id'] ) )): ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_KEY']; ?>
" class="button" onclick="window.location.href='index.php?action=DetailView&module=<?php echo $_REQUEST['return_module']; ?>
&record=<?php echo $_REQUEST['return_id']; ?>
'; return false;" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
" type="button" id="CANCEL_FOOTER"> <?php elseif (! empty ( $_REQUEST['return_action'] ) && ( $_REQUEST['return_action'] == 'DetailView' && ! empty ( $this->_tpl_vars['fields']['id']['value'] ) )): ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_KEY']; ?>
" class="button" onclick="window.location.href='index.php?action=DetailView&module=<?php echo $_REQUEST['return_module']; ?>
&record=<?php echo $this->_tpl_vars['fields']['id']['value']; ?>
'; return false;" type="button" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
" id="CANCEL_FOOTER"> <?php elseif (empty ( $_REQUEST['return_action'] ) || empty ( $_REQUEST['return_id'] ) && ! empty ( $this->_tpl_vars['fields']['id']['value'] )): ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_KEY']; ?>
" class="button" onclick="window.location.href='index.php?action=index&module=Quotes'; return false;" type="button" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
" id="CANCEL_FOOTER"> <?php else: ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_KEY']; ?>
" class="button" onclick="window.location.href='index.php?action=index&module=<?php echo $_REQUEST['return_module']; ?>
&record=<?php echo $_REQUEST['return_id']; ?>
'; return false;" type="button" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
" id="CANCEL_FOOTER"> <?php endif;  if ($this->_tpl_vars['bean']->aclAccess('detail')):  if (! empty ( $this->_tpl_vars['fields']['id']['value'] ) && $this->_tpl_vars['isAuditEnabled']): ?><input title="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
" class="button" onclick='open_popup("Audit", "600", "400", "&record=<?php echo $this->_tpl_vars['fields']['id']['value']; ?>
&module_name=Quotes", true, false,  { "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] } ); return false;' type="submit" value="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
"><?php endif;  endif; ?>
</div>
</form>
<?php echo $this->_tpl_vars['set_focus_block']; ?>

<?php echo $this->_tpl_vars['overlibStuff']; ?>

<script type="text/javascript">
YAHOO.util.Event.onContentReady("EditView",
    function () { initEditView(document.forms.EditView) });
//window.setTimeout(, 100);
window.onbeforeunload = function () { return onUnloadEditView(); };
</script><?php echo '
<script type="text/javascript">
addToValidate(\'EditView\', \'id\', \'id\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ID','module' => 'Quotes','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'name\', \'name\', true,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_QUOTE_NAME','module' => 'Quotes','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'date_entered_date\', \'date\', false,\'Date Created\' );
addToValidate(\'EditView\', \'date_modified_date\', \'date\', false,\'Date Modified\' );
addToValidate(\'EditView\', \'modified_user_id\', \'assigned_user_name\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_MODIFIED','module' => 'Quotes','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'modified_by_name\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_MODIFIED_NAME','module' => 'Quotes','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'created_by\', \'assigned_user_name\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_CREATED','module' => 'Quotes','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'created_by_name\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_CREATED','module' => 'Quotes','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'description\', \'text\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_DESCRIPTION','module' => 'Quotes','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'deleted\', \'bool\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_DELETED','module' => 'Quotes','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'assigned_user_id\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ASSIGNED_TO_ID','module' => 'Quotes','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'assigned_user_name\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ASSIGNED_TO_NAME','module' => 'Quotes','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'team_id\', \'team_list\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_TEAM_ID','module' => 'Quotes','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'team_set_id\', \'id\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_TEAM_SET_ID','module' => 'Quotes','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'team_count\', \'relate\', true,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_TEAMS','module' => 'Quotes','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'team_name\', \'teamset\', true,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_TEAMS','module' => 'Quotes','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'shipper_id\', \'id\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_SHIPPER_ID','module' => 'Quotes','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'currency_id\', \'id\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_CURRENCY_ID','module' => 'Quotes','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'taxrate_id\', \'id\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_TAXRATE_ID','module' => 'Quotes','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'show_line_nums\', \'bool\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_SHOW_LINE_NUMS','module' => 'Quotes','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'calc_grand_total\', \'bool\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_CALC_GRAND','module' => 'Quotes','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'quote_type\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_QUOTE_TYPE','module' => 'Quotes','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'date_quote_expected_closed\', \'date\', true,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_DATE_QUOTE_EXPECTED_CLOSED','module' => 'Quotes','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'original_po_date\', \'date\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ORIGINAL_PO_DATE','module' => 'Quotes','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'payment_terms\', \'enum\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_PAYMENT_TERMS','module' => 'Quotes','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'date_quote_closed\', \'date\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_DATE_QUOTE_CLOSED','module' => 'Quotes','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'date_order_shipped\', \'date\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_LIST_DATE_QUOTE_CLOSED','module' => 'Quotes','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'order_stage\', \'enum\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ORDER_STAGE','module' => 'Quotes','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'quote_stage\', \'enum\', true,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_QUOTE_STAGE','module' => 'Quotes','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'purchase_order_num\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_PURCHASE_ORDER_NUM','module' => 'Quotes','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'quote_num\', \'int\', true,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_QUOTE_NUM','module' => 'Quotes','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'subtotal\', \'currency\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_SUBTOTAL','module' => 'Quotes','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'subtotal_usdollar\', \'currency\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_SUBTOTAL_USDOLLAR','module' => 'Quotes','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'shipping\', \'currency\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_SHIPPING','module' => 'Quotes','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'shipping_usdollar\', \'currency\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_SHIPPING_USDOLLAR','module' => 'Quotes','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'discount\', \'currency\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_DISCOUNT_TOTAL','module' => 'Quotes','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'deal_tot\', \'decimal\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_DEAL_TOT','module' => 'Quotes','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'deal_tot_usdollar\', \'decimal\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_DEAL_TOT_USDOLLAR','module' => 'Quotes','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'new_sub\', \'currency\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_NEW_SUB','module' => 'Quotes','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'new_sub_usdollar\', \'currency\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_NEW_SUB','module' => 'Quotes','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'tax\', \'currency\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_TAX','module' => 'Quotes','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'tax_usdollar\', \'currency\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_TAX_USDOLLAR','module' => 'Quotes','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'total\', \'currency\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_TOTAL','module' => 'Quotes','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'total_usdollar\', \'currency\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_TOTAL_USDOLLAR','module' => 'Quotes','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'billing_address_street\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_BILLING_ADDRESS_STREET','module' => 'Quotes','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'billing_address_city\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_BILLING_ADDRESS_CITY','module' => 'Quotes','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'billing_address_state\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_BILLING_ADDRESS_STATE','module' => 'Quotes','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'billing_address_postalcode\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_BILLING_ADDRESS_POSTAL_CODE','module' => 'Quotes','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'billing_address_country\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_BILLING_ADDRESS_COUNTRY','module' => 'Quotes','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'shipping_address_street\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_SHIPPING_ADDRESS_STREET','module' => 'Quotes','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'shipping_address_city\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_SHIPPING_ADDRESS_CITY','module' => 'Quotes','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'shipping_address_state\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_SHIPPING_ADDRESS_STATE','module' => 'Quotes','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'shipping_address_postalcode\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_SHIPPING_ADDRESS_POSTAL_CODE','module' => 'Quotes','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'shipping_address_country\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_SHIPPING_ADDRESS_COUNTRY','module' => 'Quotes','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'system_id\', \'int\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_SYSTEM_ID','module' => 'Quotes','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'shipping_account_name\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_SHIPPING_ACCOUNT_NAME','module' => 'Quotes','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'shipping_account_id\', \'id\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_SHIPPING_ACCOUNT_ID','module' => 'Quotes','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'shipping_contact_name\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_SHIPPING_CONTACT_NAME','module' => 'Quotes','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'shipping_contact_id\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_SHIPPING_CONTACT_ID','module' => 'Quotes','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'account_name\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ACCOUNT_NAME','module' => 'Quotes','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'account_id\', \'id\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ACCOUNT_ID','module' => 'Quotes','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'billing_account_name\', \'relate\', true,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_BILLING_ACCOUNT_NAME','module' => 'Quotes','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'billing_account_id\', \'id\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_BILLING_ACCOUNT_ID','module' => 'Quotes','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'billing_contact_name\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_BILLING_CONTACT_NAME','module' => 'Quotes','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'billing_contact_id\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_BILLING_CONTACT_ID','module' => 'Quotes','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'opportunity_name\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_OPPORTUNITY_NAME','module' => 'Quotes','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'opportunity_id\', \'id\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_BILLING_ACCOUNT_NAME','module' => 'Quotes','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'pymentterm_c\', \'enum\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_PYMENTTERM','module' => 'Quotes','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'terms_c\', \'wysiwyg\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_TERMS','module' => 'Quotes','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'proddesc_c\', \'wysiwyg\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_PRODDESC','module' => 'Quotes','for_js' => true), $this); echo '\' );
addToValidateBinaryDependency(\'EditView\', \'assigned_user_name\', \'alpha\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'ERR_SQS_NO_MATCH_FIELD','module' => 'Quotes','for_js' => true), $this); echo ': ';  echo smarty_function_sugar_translate(array('label' => 'LBL_ASSIGNED_TO','module' => 'Quotes','for_js' => true), $this); echo '\', \'assigned_user_id\' );
addToValidateBinaryDependency(\'EditView\', \'shipping_account_name\', \'alpha\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'ERR_SQS_NO_MATCH_FIELD','module' => 'Quotes','for_js' => true), $this); echo ': ';  echo smarty_function_sugar_translate(array('label' => 'LBL_SHIPPING_ACCOUNT_NAME','module' => 'Quotes','for_js' => true), $this); echo '\', \'shipping_account_id\' );
addToValidateBinaryDependency(\'EditView\', \'shipping_contact_name\', \'alpha\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'ERR_SQS_NO_MATCH_FIELD','module' => 'Quotes','for_js' => true), $this); echo ': ';  echo smarty_function_sugar_translate(array('label' => 'LBL_SHIPPING_CONTACT_NAME','module' => 'Quotes','for_js' => true), $this); echo '\', \'shipping_contact_id\' );
addToValidateBinaryDependency(\'EditView\', \'billing_account_name\', \'alpha\', true,\'';  echo smarty_function_sugar_translate(array('label' => 'ERR_SQS_NO_MATCH_FIELD','module' => 'Quotes','for_js' => true), $this); echo ': ';  echo smarty_function_sugar_translate(array('label' => 'LBL_BILLING_ACCOUNT_NAME','module' => 'Quotes','for_js' => true), $this); echo '\', \'billing_account_id\' );
addToValidateBinaryDependency(\'EditView\', \'billing_contact_name\', \'alpha\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'ERR_SQS_NO_MATCH_FIELD','module' => 'Quotes','for_js' => true), $this); echo ': ';  echo smarty_function_sugar_translate(array('label' => 'LBL_BILLING_CONTACT_NAME','module' => 'Quotes','for_js' => true), $this); echo '\', \'billing_contact_id\' );
addToValidateBinaryDependency(\'EditView\', \'opportunity_name\', \'alpha\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'ERR_SQS_NO_MATCH_FIELD','module' => 'Quotes','for_js' => true), $this); echo ': ';  echo smarty_function_sugar_translate(array('label' => 'LBL_OPPORTUNITY_NAME','module' => 'Quotes','for_js' => true), $this); echo '\', \'opportunity_id\' );
</script><script language="javascript">if(typeof sqs_objects == \'undefined\'){var sqs_objects = new Array;}sqs_objects[\'EditView_opportunity_name\']={"form":"EditView","method":"query","modules":["Opportunities"],"group":"or","field_list":["name","id"],"populate_list":["opportunity_name","opportunity_id"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"No Match"};sqs_objects[\'EditView_billing_account_name\']={"form":"EditView","method":"query","modules":["Accounts"],"group":"or","field_list":["name","id","billing_address_street","billing_address_city","billing_address_state","billing_address_postalcode","billing_address_country","shipping_address_street","shipping_address_city","shipping_address_state","shipping_address_postalcode","shipping_address_country"],"populate_list":["EditView_billing_account_name","billing_account_id","billing_address_street","billing_address_city","billing_address_state","billing_address_postalcode","billing_address_country","shipping_address_street","shipping_address_city","shipping_address_state","shipping_address_postalcode","shipping_address_country"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"required_list":["billing_account_id"],"order":"name","limit":"30","no_match_text":"No Match"};sqs_objects[\'EditView_shipping_account_name\']={"form":"EditView","method":"query","modules":["Accounts"],"group":"or","field_list":["name","id","shipping_address_street","shipping_address_city","shipping_address_state","shipping_address_postalcode","shipping_address_country"],"populate_list":["EditView_shipping_account_name","shipping_account_id","shipping_address_street","shipping_address_city","shipping_address_state","shipping_address_postalcode","shipping_address_country"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"required_list":["shipping_account_id"],"order":"name","limit":"30","no_match_text":"No Match"};sqs_objects[\'EditView_billing_contact_name\']={"form":"EditView","method":"get_contact_array","modules":["Contacts"],"field_list":["salutation","first_name","last_name","id"],"populate_list":["billing_contact_name","billing_contact_id","billing_contact_id","billing_contact_id"],"required_list":["billing_contact_id"],"group":"or","conditions":[{"name":"first_name","op":"like_custom","end":"%","value":""},{"name":"last_name","op":"like_custom","end":"%","value":""}],"order":"last_name","limit":"30","no_match_text":"No Match"};sqs_objects[\'EditView_shipping_contact_name\']={"form":"EditView","method":"get_contact_array","modules":["Contacts"],"field_list":["salutation","first_name","last_name","id"],"populate_list":["shipping_contact_name","shipping_contact_id","shipping_contact_id","shipping_contact_id"],"required_list":["shipping_contact_id"],"group":"or","conditions":[{"name":"first_name","op":"like_custom","end":"%","value":""},{"name":"last_name","op":"like_custom","end":"%","value":""}],"order":"last_name","limit":"30","no_match_text":"No Match"};sqs_objects[\'EditView_assigned_user_name\']={"form":"EditView","method":"get_user_array","field_list":["user_name","id"],"populate_list":["assigned_user_name","assigned_user_id"],"required_list":["assigned_user_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"No Match"};sqs_objects[\'EditView_team_name\']={"form":"EditView","method":"query","modules":["Teams"],"group":"or","field_list":["name","id"],"populate_list":["team_name","team_id"],"required_list":["team_id"],"whereExtra":"( teams.associated_user_id IS NULL OR teams.associated_user_id NOT IN ( SELECT id FROM users WHERE status = \'Inactive\' OR portal_only = \'1\' ))","conditions":[{"name":"name","op":"like_custom","end":"%","value":""},{"name":"name","op":"like_custom","begin":"(","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"No Match"};</script><script type=text/javascript>
SUGAR.forms.AssignmentHandler.registerView(\'EditView\');
</script>'; ?>
