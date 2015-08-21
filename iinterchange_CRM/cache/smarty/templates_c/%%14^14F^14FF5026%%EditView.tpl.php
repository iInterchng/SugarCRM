<?php /* Smarty version 2.6.11, created on 2014-05-09 17:06:17
         compiled from cache/modules/ProductTemplates/EditView.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_include', 'cache/modules/ProductTemplates/EditView.tpl', 36, false),array('function', 'counter', 'cache/modules/ProductTemplates/EditView.tpl', 41, false),array('function', 'sugar_translate', 'cache/modules/ProductTemplates/EditView.tpl', 48, false),array('function', 'html_options', 'cache/modules/ProductTemplates/EditView.tpl', 95, false),array('function', 'sugar_getimagepath', 'cache/modules/ProductTemplates/EditView.tpl', 150, false),array('function', 'sugar_number_format', 'cache/modules/ProductTemplates/EditView.tpl', 317, false),array('modifier', 'default', 'cache/modules/ProductTemplates/EditView.tpl', 42, false),array('modifier', 'strip_semicolon', 'cache/modules/ProductTemplates/EditView.tpl', 49, false),array('modifier', 'escape', 'cache/modules/ProductTemplates/EditView.tpl', 827, false),array('modifier', 'url2html', 'cache/modules/ProductTemplates/EditView.tpl', 827, false),array('modifier', 'nl2br', 'cache/modules/ProductTemplates/EditView.tpl', 827, false),)), $this); ?>


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
" class="button" onclick="window.location.href='index.php?action=index&module=ProductTemplates'; return false;" type="button" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
" id="CANCEL_HEADER"> <?php else: ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_KEY']; ?>
" class="button" onclick="window.location.href='index.php?action=index&module=<?php echo $_REQUEST['return_module']; ?>
&record=<?php echo $_REQUEST['return_id']; ?>
'; return false;" type="button" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
" id="CANCEL_HEADER"> <?php endif;  if ($this->_tpl_vars['bean']->aclAccess('detail')):  if (! empty ( $this->_tpl_vars['fields']['id']['value'] ) && $this->_tpl_vars['isAuditEnabled']): ?><input title="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
" class="button" onclick='open_popup("Audit", "600", "400", "&record=<?php echo $this->_tpl_vars['fields']['id']['value']; ?>
&module_name=ProductTemplates", true, false,  { "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] } ); return false;' type="submit" value="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
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
<div id="Default_<?php echo $this->_tpl_vars['module']; ?>
_Subpanel">
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','start' => 0,'print' => false,'assign' => 'panelFieldCount'), $this);?>

<table width="100%" border="0" cellspacing="1" cellpadding="0"  class="<?php echo ((is_array($_tmp=@$this->_tpl_vars['def']['templateMeta']['panelClass'])) ? $this->_run_mod_handler('default', true, $_tmp, 'edit view') : smarty_modifier_default($_tmp, 'edit view')); ?>
">
<?php echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php ob_start(); ?>
<tr>
<?php if ($this->_tpl_vars['fields']['name']['acl'] > 1 || ( $this->_tpl_vars['showDetailData'] && $this->_tpl_vars['fields']['name']['acl'] > 0 )): ?>
<td valign="top" id='name_label' width='12.5%' scope="row">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_NAME','module' => 'ProductTemplates'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
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
<?php endif;  if ($this->_tpl_vars['fields']['status']['acl'] > 1 || ( $this->_tpl_vars['showDetailData'] && $this->_tpl_vars['fields']['status']['acl'] > 0 )): ?>
<td valign="top" id='status_label' width='12.5%' scope="row">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_STATUS','module' => 'ProductTemplates'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td valign="top" width='37.5%' >
<?php if ($this->_tpl_vars['fields']['status']['acl'] > 1):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<select name="<?php echo $this->_tpl_vars['fields']['status']['name']; ?>
" 
id="<?php echo $this->_tpl_vars['fields']['status']['name']; ?>
" 
title='' tabindex="101"  
>
<?php if (isset ( $this->_tpl_vars['fields']['status']['value'] ) && $this->_tpl_vars['fields']['status']['value'] != ''):  echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['status']['options'],'selected' => $this->_tpl_vars['fields']['status']['value']), $this);?>

<?php else:  echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['status']['options'],'selected' => $this->_tpl_vars['fields']['status']['default']), $this);?>

<?php endif; ?>
</select>
<?php else:  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>



<?php if (is_string ( $this->_tpl_vars['fields']['status']['options'] )): ?>
<input type="hidden" class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['status']['name']; ?>
" value="<?php echo $this->_tpl_vars['fields']['status']['options']; ?>
">
<?php echo $this->_tpl_vars['fields']['status']['options']; ?>

<?php else: ?>
<input type="hidden" class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['status']['name']; ?>
" value="<?php echo $this->_tpl_vars['fields']['status']['value']; ?>
">
<?php echo $this->_tpl_vars['fields']['status']['options'][$this->_tpl_vars['fields']['status']['value']]; ?>

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
<?php if ($this->_tpl_vars['fields']['category_name']['acl'] > 1 || ( $this->_tpl_vars['showDetailData'] && $this->_tpl_vars['fields']['category_name']['acl'] > 0 )): ?>
<td valign="top" id='category_name_label' width='12.5%' scope="row">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_CATEGORY_NAME','module' => 'ProductTemplates'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td valign="top" width='37.5%' colspan='3'>
<?php if ($this->_tpl_vars['fields']['category_name']['acl'] > 1):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<input type="text" name="<?php echo $this->_tpl_vars['fields']['category_name']['name']; ?>
" class="sqsEnabled" tabindex="102" id="<?php echo $this->_tpl_vars['fields']['category_name']['name']; ?>
" size="" value="<?php echo $this->_tpl_vars['fields']['category_name']['value']; ?>
" title='' autocomplete="off"  >
<input type="hidden" name="<?php echo $this->_tpl_vars['fields']['category_name']['id_name']; ?>
" 
id="<?php echo $this->_tpl_vars['fields']['category_name']['id_name']; ?>
" 
value="<?php echo $this->_tpl_vars['fields']['category_id']['value']; ?>
">
<span class="id-ff multiple">
<button type="button" name="btn_<?php echo $this->_tpl_vars['fields']['category_name']['name']; ?>
" id="btn_<?php echo $this->_tpl_vars['fields']['category_name']['name']; ?>
" tabindex="102" title="<?php echo $this->_tpl_vars['APP']['LBL_SELECT_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_SELECT_BUTTON_KEY']; ?>
" class="button firstChild" value="<?php echo $this->_tpl_vars['APP']['LBL_SELECT_BUTTON_LABEL']; ?>
" 
onclick='open_popup(
"<?php echo $this->_tpl_vars['fields']['category_name']['module']; ?>
", 
600, 
400, 
"", 
true, 
false, 
<?php echo '{"call_back_function":"set_return","form_name":"EditView","field_to_name_array":{"id":"category_id","name":"category_name"}}'; ?>
, 
"single", 
true
);' ><img src="<?php echo smarty_function_sugar_getimagepath(array('file' => "id-ff-select.png"), $this);?>
"></button><button type="button" name="btn_clr_<?php echo $this->_tpl_vars['fields']['category_name']['name']; ?>
" id="btn_clr_<?php echo $this->_tpl_vars['fields']['category_name']['name']; ?>
" tabindex="102" title="<?php echo $this->_tpl_vars['APP']['LBL_CLEAR_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_CLEAR_BUTTON_KEY']; ?>
" class="button lastChild" 
onclick="this.form.<?php echo $this->_tpl_vars['fields']['category_name']['name']; ?>
.value = ''; this.form.<?php echo $this->_tpl_vars['fields']['category_name']['id_name']; ?>
.value = '';" 
value="<?php echo $this->_tpl_vars['APP']['LBL_CLEAR_BUTTON_LABEL']; ?>
" ><img src="<?php echo smarty_function_sugar_getimagepath(array('file' => "id-ff-clear.png"), $this);?>
"></button>
</span>
<script type="text/javascript">
<!--
if(typeof QSProcessedFieldsArray != 'undefined') 
	QSProcessedFieldsArray["<?php echo $this->_tpl_vars['form_name']; ?>
_<?php echo $this->_tpl_vars['fields']['category_name']['name']; ?>
"] = false;
	

enableQS(false);
-->	
</script>
<?php else:  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (! empty ( $this->_tpl_vars['fields']['category_id']['value'] )): ?><a href="index.php?module=ProductCategories&action=DetailView&record=<?php echo $this->_tpl_vars['fields']['category_id']['value']; ?>
"><?php endif; ?>
<span id="category_id" class="sugar_field"><?php echo $this->_tpl_vars['fields']['category_name']['value']; ?>
</span>
<?php if (! empty ( $this->_tpl_vars['fields']['category_id']['value'] )): ?></a><?php endif; ?>
</td>
<?php endif;  else: ?>
<td></td><td></td>
<?php endif; ?>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean();  if ($this->_tpl_vars['fieldsUsed'] > 0):  echo $this->_tpl_vars['tableRow']; ?>

<?php endif;  echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php ob_start(); ?>
<tr>
<?php if ($this->_tpl_vars['fields']['website']['acl'] > 1 || ( $this->_tpl_vars['showDetailData'] && $this->_tpl_vars['fields']['website']['acl'] > 0 )): ?>
<td valign="top" id='website_label' width='12.5%' scope="row">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_URL','module' => 'ProductTemplates'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td valign="top" width='37.5%' >
<?php if ($this->_tpl_vars['fields']['website']['acl'] > 1):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['website']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['website']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['website']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['website']['name']; ?>
' 
id='<?php echo $this->_tpl_vars['fields']['website']['name']; ?>
' size='30' 
maxlength='255' 
value='<?php echo $this->_tpl_vars['value']; ?>
' title='' tabindex='103' > 
<?php else:  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['website']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['website']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['website']['value']);  endif; ?> 
<span class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['website']['name']; ?>
"><?php echo $this->_tpl_vars['fields']['website']['value']; ?>
</span>
</td>
<?php endif;  else: ?>
<td></td><td></td>
<?php endif;  if ($this->_tpl_vars['fields']['date_available']['acl'] > 1 || ( $this->_tpl_vars['showDetailData'] && $this->_tpl_vars['fields']['date_available']['acl'] > 0 )): ?>
<td valign="top" id='date_available_label' width='12.5%' scope="row">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_DATE_AVAILABLE','module' => 'ProductTemplates'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td valign="top" width='37.5%' >
<?php if ($this->_tpl_vars['fields']['date_available']['acl'] > 1):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<span class="dateTime">
<?php $this->assign('date_value', $this->_tpl_vars['fields']['date_available']['value']); ?>
<input class="date_input" autocomplete="off" type="text" name="<?php echo $this->_tpl_vars['fields']['date_available']['name']; ?>
" id="<?php echo $this->_tpl_vars['fields']['date_available']['name']; ?>
" value="<?php echo $this->_tpl_vars['date_value']; ?>
" title=''  tabindex='104' size="11" maxlength="10" >
<img border="0" src="<?php echo smarty_function_sugar_getimagepath(array('file' => 'jscalendar.gif'), $this);?>
" alt="<?php echo $this->_tpl_vars['APP']['LBL_ENTER_DATE']; ?>
" id="<?php echo $this->_tpl_vars['fields']['date_available']['name']; ?>
_trigger" align="absmiddle" />
</span>
<script type="text/javascript">
Calendar.setup ({
inputField : "<?php echo $this->_tpl_vars['fields']['date_available']['name']; ?>
",
ifFormat : "<?php echo $this->_tpl_vars['CALENDAR_FORMAT']; ?>
",
daFormat : "<?php echo $this->_tpl_vars['CALENDAR_FORMAT']; ?>
",
button : "<?php echo $this->_tpl_vars['fields']['date_available']['name']; ?>
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


<?php if (strlen ( $this->_tpl_vars['fields']['date_available']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['date_available']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['date_available']['value']);  endif; ?> 
<span class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['date_available']['name']; ?>
"><?php echo $this->_tpl_vars['fields']['date_available']['value']; ?>
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
<?php if ($this->_tpl_vars['fields']['tax_class']['acl'] > 1 || ( $this->_tpl_vars['showDetailData'] && $this->_tpl_vars['fields']['tax_class']['acl'] > 0 )): ?>
<td valign="top" id='tax_class_label' width='12.5%' scope="row">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_TAX_CLASS','module' => 'ProductTemplates'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td valign="top" width='37.5%' >
<?php if ($this->_tpl_vars['fields']['tax_class']['acl'] > 1):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<select name="<?php echo $this->_tpl_vars['fields']['tax_class']['name']; ?>
" 
id="<?php echo $this->_tpl_vars['fields']['tax_class']['name']; ?>
" 
title='' tabindex="105"  
>
<?php if (isset ( $this->_tpl_vars['fields']['tax_class']['value'] ) && $this->_tpl_vars['fields']['tax_class']['value'] != ''):  echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['tax_class']['options'],'selected' => $this->_tpl_vars['fields']['tax_class']['value']), $this);?>

<?php else:  echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['tax_class']['options'],'selected' => $this->_tpl_vars['fields']['tax_class']['default']), $this);?>

<?php endif; ?>
</select>
<?php else:  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>



<?php if (is_string ( $this->_tpl_vars['fields']['tax_class']['options'] )): ?>
<input type="hidden" class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['tax_class']['name']; ?>
" value="<?php echo $this->_tpl_vars['fields']['tax_class']['options']; ?>
">
<?php echo $this->_tpl_vars['fields']['tax_class']['options']; ?>

<?php else: ?>
<input type="hidden" class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['tax_class']['name']; ?>
" value="<?php echo $this->_tpl_vars['fields']['tax_class']['value']; ?>
">
<?php echo $this->_tpl_vars['fields']['tax_class']['options'][$this->_tpl_vars['fields']['tax_class']['value']]; ?>

<?php endif; ?>
</td>
<?php endif;  else: ?>
<td></td><td></td>
<?php endif;  if ($this->_tpl_vars['fields']['qty_in_stock']['acl'] > 1 || ( $this->_tpl_vars['showDetailData'] && $this->_tpl_vars['fields']['qty_in_stock']['acl'] > 0 )): ?>
<td valign="top" id='qty_in_stock_label' width='12.5%' scope="row">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_QUANTITY','module' => 'ProductTemplates'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td valign="top" width='37.5%' >
<?php if ($this->_tpl_vars['fields']['qty_in_stock']['acl'] > 1):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['qty_in_stock']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['qty_in_stock']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['qty_in_stock']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['qty_in_stock']['name']; ?>
' 
id='<?php echo $this->_tpl_vars['fields']['qty_in_stock']['name']; ?>
' size='30' maxlength='' value='<?php echo smarty_function_sugar_number_format(array('precision' => 0,'var' => $this->_tpl_vars['value']), $this);?>
' title='' tabindex='106' > 
<?php else:  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<span class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['qty_in_stock']['name']; ?>
">
<?php echo smarty_function_sugar_number_format(array('precision' => 0,'var' => $this->_tpl_vars['fields']['qty_in_stock']['value']), $this);?>

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
<?php if ($this->_tpl_vars['fields']['manufacturer_id']['acl'] > 1 || ( $this->_tpl_vars['showDetailData'] && $this->_tpl_vars['fields']['manufacturer_id']['acl'] > 0 )): ?>
<td valign="top" id='manufacturer_id_label' width='12.5%' scope="row">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_LIST_MANUFACTURER_ID','module' => 'ProductTemplates'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td valign="top" width='37.5%' >
<?php if ($this->_tpl_vars['fields']['manufacturer_id']['acl'] > 1):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>

<span id='manufacturer_id'>
<?php echo $this->_tpl_vars['fields']['manufacturer_id']['value']; ?>
</span>
<?php else:  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>

<span id='manufacturer_id'>
<?php echo $this->_tpl_vars['fields']['manufacturer_id']['value']; ?>

</span>
</td>
<?php endif;  else: ?>
<td></td><td></td>
<?php endif;  if ($this->_tpl_vars['fields']['weight']['acl'] > 1 || ( $this->_tpl_vars['showDetailData'] && $this->_tpl_vars['fields']['weight']['acl'] > 0 )): ?>
<td valign="top" id='weight_label' width='12.5%' scope="row">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_WEIGHT','module' => 'ProductTemplates'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td valign="top" width='37.5%' >
<?php if ($this->_tpl_vars['fields']['weight']['acl'] > 1):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['weight']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['weight']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['weight']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['weight']['name']; ?>
'
id='<?php echo $this->_tpl_vars['fields']['weight']['name']; ?>
'
size='30'
maxlength=''value='<?php echo smarty_function_sugar_number_format(array('var' => $this->_tpl_vars['value'],'precision' => 2), $this);?>
'
title=''
tabindex='108' > 
<?php else:  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<span class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['weight']['name']; ?>
">
<?php echo smarty_function_sugar_number_format(array('var' => $this->_tpl_vars['fields']['weight']['value'],'precision' => 2), $this);?>

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
<?php if ($this->_tpl_vars['fields']['mft_part_num']['acl'] > 1 || ( $this->_tpl_vars['showDetailData'] && $this->_tpl_vars['fields']['mft_part_num']['acl'] > 0 )): ?>
<td valign="top" id='mft_part_num_label' width='12.5%' scope="row">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_MFT_PART_NUM','module' => 'ProductTemplates'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td valign="top" width='37.5%' colspan='3'>
<?php if ($this->_tpl_vars['fields']['mft_part_num']['acl'] > 1):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['mft_part_num']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['mft_part_num']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['mft_part_num']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['mft_part_num']['name']; ?>
' 
id='<?php echo $this->_tpl_vars['fields']['mft_part_num']['name']; ?>
' size='30' 
maxlength='50' 
value='<?php echo $this->_tpl_vars['value']; ?>
' title='' tabindex='109' > 
<?php else:  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['mft_part_num']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['mft_part_num']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['mft_part_num']['value']);  endif; ?> 
<span class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['mft_part_num']['name']; ?>
"><?php echo $this->_tpl_vars['fields']['mft_part_num']['value']; ?>
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
<?php if ($this->_tpl_vars['fields']['vendor_part_num']['acl'] > 1 || ( $this->_tpl_vars['showDetailData'] && $this->_tpl_vars['fields']['vendor_part_num']['acl'] > 0 )): ?>
<td valign="top" id='vendor_part_num_label' width='12.5%' scope="row">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_VENDOR_PART_NUM','module' => 'ProductTemplates'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td valign="top" width='37.5%' >
<?php if ($this->_tpl_vars['fields']['vendor_part_num']['acl'] > 1):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['vendor_part_num']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['vendor_part_num']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['vendor_part_num']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['vendor_part_num']['name']; ?>
' 
id='<?php echo $this->_tpl_vars['fields']['vendor_part_num']['name']; ?>
' size='30' 
maxlength='50' 
value='<?php echo $this->_tpl_vars['value']; ?>
' title='' tabindex='110' > 
<?php else:  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['vendor_part_num']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['vendor_part_num']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['vendor_part_num']['value']);  endif; ?> 
<span class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['vendor_part_num']['name']; ?>
"><?php echo $this->_tpl_vars['fields']['vendor_part_num']['value']; ?>
</span>
</td>
<?php endif;  else: ?>
<td></td><td></td>
<?php endif;  if ($this->_tpl_vars['fields']['type_id']['acl'] > 1 || ( $this->_tpl_vars['showDetailData'] && $this->_tpl_vars['fields']['type_id']['acl'] > 0 )): ?>
<td valign="top" id='type_id_label' width='12.5%' scope="row">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_TYPE','module' => 'ProductTemplates'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td valign="top" width='37.5%' >
<?php if ($this->_tpl_vars['fields']['type_id']['acl'] > 1):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>

<span id='type_id'>
<?php echo $this->_tpl_vars['fields']['type_id']['value']; ?>
</span>
<?php else:  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>

<span id='type_id'>
<?php echo $this->_tpl_vars['fields']['type_id']['value']; ?>

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
<?php if ($this->_tpl_vars['fields']['currency_id']['acl'] > 1 || ( $this->_tpl_vars['showDetailData'] && $this->_tpl_vars['fields']['currency_id']['acl'] > 0 )): ?>
<td valign="top" id='currency_id_label' width='12.5%' scope="row">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_CURRENCY','module' => 'ProductTemplates'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td valign="top" width='37.5%' >
<?php if ($this->_tpl_vars['fields']['currency_id']['acl'] > 1):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>

<span id='currency_id'>
<?php echo $this->_tpl_vars['fields']['currency_id']['value']; ?>
</span>
<?php else:  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>

<span id='currency_id'>
<?php echo $this->_tpl_vars['fields']['currency_id']['value']; ?>

</span>
</td>
<?php endif;  else: ?>
<td></td><td></td>
<?php endif;  if ($this->_tpl_vars['fields']['support_name']['acl'] > 1 || ( $this->_tpl_vars['showDetailData'] && $this->_tpl_vars['fields']['support_name']['acl'] > 0 )): ?>
<td valign="top" id='support_name_label' width='12.5%' scope="row">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_SUPPORT_NAME','module' => 'ProductTemplates'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td valign="top" width='37.5%' >
<?php if ($this->_tpl_vars['fields']['support_name']['acl'] > 1):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['support_name']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['support_name']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['support_name']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['support_name']['name']; ?>
' 
id='<?php echo $this->_tpl_vars['fields']['support_name']['name']; ?>
' size='30' 
maxlength='50' 
value='<?php echo $this->_tpl_vars['value']; ?>
' title='' tabindex='113' > 
<?php else:  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['support_name']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['support_name']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['support_name']['value']);  endif; ?> 
<span class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['support_name']['name']; ?>
"><?php echo $this->_tpl_vars['fields']['support_name']['value']; ?>
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
<?php if ($this->_tpl_vars['fields']['cost_price']['acl'] > 1 || ( $this->_tpl_vars['showDetailData'] && $this->_tpl_vars['fields']['cost_price']['acl'] > 0 )): ?>
<td valign="top" id='cost_price_label' width='12.5%' scope="row">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_COST_PRICE','module' => 'ProductTemplates'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<span class="required">*</span>
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td valign="top" width='37.5%' >
<?php if ($this->_tpl_vars['fields']['cost_price']['acl'] > 1):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['cost_price']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['cost_price']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['cost_price']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['cost_price']['name']; ?>
' 
id='<?php echo $this->_tpl_vars['fields']['cost_price']['name']; ?>
' size='30' maxlength='' value='<?php echo smarty_function_sugar_number_format(array('var' => $this->_tpl_vars['value']), $this);?>
' title='' tabindex='114' > 
<?php else:  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<span id='<?php echo $this->_tpl_vars['fields']['cost_price']['name']; ?>
'>
<?php echo smarty_function_sugar_number_format(array('var' => $this->_tpl_vars['fields']['cost_price']['value']), $this);?>

</span>
</td>
<?php endif;  else: ?>
<td></td><td></td>
<?php endif;  if ($this->_tpl_vars['fields']['support_contact']['acl'] > 1 || ( $this->_tpl_vars['showDetailData'] && $this->_tpl_vars['fields']['support_contact']['acl'] > 0 )): ?>
<td valign="top" id='support_contact_label' width='12.5%' scope="row">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_SUPPORT_CONTACT','module' => 'ProductTemplates'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td valign="top" width='37.5%' >
<?php if ($this->_tpl_vars['fields']['support_contact']['acl'] > 1):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['support_contact']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['support_contact']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['support_contact']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['support_contact']['name']; ?>
' 
id='<?php echo $this->_tpl_vars['fields']['support_contact']['name']; ?>
' size='30' 
maxlength='50' 
value='<?php echo $this->_tpl_vars['value']; ?>
' title='' tabindex='115' > 
<?php else:  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['support_contact']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['support_contact']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['support_contact']['value']);  endif; ?> 
<span class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['support_contact']['name']; ?>
"><?php echo $this->_tpl_vars['fields']['support_contact']['value']; ?>
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
<?php if ($this->_tpl_vars['fields']['list_price']['acl'] > 1 || ( $this->_tpl_vars['showDetailData'] && $this->_tpl_vars['fields']['list_price']['acl'] > 0 )): ?>
<td valign="top" id='list_price_label' width='12.5%' scope="row">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_LIST_PRICE','module' => 'ProductTemplates'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<span class="required">*</span>
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td valign="top" width='37.5%' >
<?php if ($this->_tpl_vars['fields']['list_price']['acl'] > 1):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['list_price']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['list_price']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['list_price']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['list_price']['name']; ?>
' 
id='<?php echo $this->_tpl_vars['fields']['list_price']['name']; ?>
' size='30' maxlength='' value='<?php echo smarty_function_sugar_number_format(array('var' => $this->_tpl_vars['value']), $this);?>
' title='' tabindex='116' > 
<?php else:  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<span id='<?php echo $this->_tpl_vars['fields']['list_price']['name']; ?>
'>
<?php echo smarty_function_sugar_number_format(array('var' => $this->_tpl_vars['fields']['list_price']['value']), $this);?>

</span>
</td>
<?php endif;  else: ?>
<td></td><td></td>
<?php endif;  if ($this->_tpl_vars['fields']['support_description']['acl'] > 1 || ( $this->_tpl_vars['showDetailData'] && $this->_tpl_vars['fields']['support_description']['acl'] > 0 )): ?>
<td valign="top" id='support_description_label' width='12.5%' scope="row">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_SUPPORT_DESCRIPTION','module' => 'ProductTemplates'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td valign="top" width='37.5%' >
<?php if ($this->_tpl_vars['fields']['support_description']['acl'] > 1):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['support_description']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['support_description']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['support_description']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['support_description']['name']; ?>
' 
id='<?php echo $this->_tpl_vars['fields']['support_description']['name']; ?>
' size='30' 
maxlength='255' 
value='<?php echo $this->_tpl_vars['value']; ?>
' title='' tabindex='117' > 
<?php else:  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['support_description']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['support_description']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['support_description']['value']);  endif; ?> 
<span class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['support_description']['name']; ?>
"><?php echo $this->_tpl_vars['fields']['support_description']['value']; ?>
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
<?php if ($this->_tpl_vars['fields']['discount_price']['acl'] > 1 || ( $this->_tpl_vars['showDetailData'] && $this->_tpl_vars['fields']['discount_price']['acl'] > 0 )): ?>
<td valign="top" id='discount_price_label' width='12.5%' scope="row">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_DISCOUNT_PRICE','module' => 'ProductTemplates'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<span class="required">*</span>
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td valign="top" width='37.5%' >
<?php if ($this->_tpl_vars['fields']['discount_price']['acl'] > 1):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['discount_price']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['discount_price']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['discount_price']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['discount_price']['name']; ?>
' 
id='<?php echo $this->_tpl_vars['fields']['discount_price']['name']; ?>
' size='30' maxlength='' value='<?php echo smarty_function_sugar_number_format(array('var' => $this->_tpl_vars['value']), $this);?>
' title='' tabindex='118' > 
<?php else:  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<span id='<?php echo $this->_tpl_vars['fields']['discount_price']['name']; ?>
'>
<?php echo smarty_function_sugar_number_format(array('var' => $this->_tpl_vars['fields']['discount_price']['value']), $this);?>

</span>
</td>
<?php endif;  else: ?>
<td></td><td></td>
<?php endif;  if ($this->_tpl_vars['fields']['support_term']['acl'] > 1 || ( $this->_tpl_vars['showDetailData'] && $this->_tpl_vars['fields']['support_term']['acl'] > 0 )): ?>
<td valign="top" id='support_term_label' width='12.5%' scope="row">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_SUPPORT_TERM','module' => 'ProductTemplates'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td valign="top" width='37.5%' >
<?php if ($this->_tpl_vars['fields']['support_term']['acl'] > 1):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<select name="<?php echo $this->_tpl_vars['fields']['support_term']['name']; ?>
" 
id="<?php echo $this->_tpl_vars['fields']['support_term']['name']; ?>
" 
title='' tabindex="119"  
>
<?php if (isset ( $this->_tpl_vars['fields']['support_term']['value'] ) && $this->_tpl_vars['fields']['support_term']['value'] != ''):  echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['support_term']['options'],'selected' => $this->_tpl_vars['fields']['support_term']['value']), $this);?>

<?php else:  echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['support_term']['options'],'selected' => $this->_tpl_vars['fields']['support_term']['default']), $this);?>

<?php endif; ?>
</select>
<?php else:  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>



<?php if (is_string ( $this->_tpl_vars['fields']['support_term']['options'] )): ?>
<input type="hidden" class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['support_term']['name']; ?>
" value="<?php echo $this->_tpl_vars['fields']['support_term']['options']; ?>
">
<?php echo $this->_tpl_vars['fields']['support_term']['options']; ?>

<?php else: ?>
<input type="hidden" class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['support_term']['name']; ?>
" value="<?php echo $this->_tpl_vars['fields']['support_term']['value']; ?>
">
<?php echo $this->_tpl_vars['fields']['support_term']['options'][$this->_tpl_vars['fields']['support_term']['value']]; ?>

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
<?php if ($this->_tpl_vars['fields']['pricing_formula']['acl'] > 1 || ( $this->_tpl_vars['showDetailData'] && $this->_tpl_vars['fields']['pricing_formula']['acl'] > 0 )): ?>
<td valign="top" id='pricing_formula_label' width='12.5%' scope="row">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_PRICING_FORMULA','module' => 'ProductTemplates'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td valign="top" width='37.5%' colspan='3'>
<?php if ($this->_tpl_vars['fields']['pricing_formula']['acl'] > 1):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>

<span id='pricing_formula'>
<?php echo $this->_tpl_vars['fields']['pricing_formula']['value']; ?>
</span>
<?php else:  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>

<span id='pricing_formula'>
<?php echo $this->_tpl_vars['fields']['pricing_formula']['value']; ?>

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
<?php if ($this->_tpl_vars['fields']['description']['acl'] > 1 || ( $this->_tpl_vars['showDetailData'] && $this->_tpl_vars['fields']['description']['acl'] > 0 )): ?>
<td valign="top" id='description_label' width='12.5%' scope="row">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_DESCRIPTION','module' => 'ProductTemplates'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td valign="top" width='37.5%' colspan='3'>
<?php if ($this->_tpl_vars['fields']['description']['acl'] > 1):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (empty ( $this->_tpl_vars['fields']['description']['value'] )):  $this->assign('value', $this->_tpl_vars['fields']['description']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['description']['value']);  endif; ?>  
<textarea  id='<?php echo $this->_tpl_vars['fields']['description']['name']; ?>
' name='<?php echo $this->_tpl_vars['fields']['description']['name']; ?>
'
rows="4" 
cols="60" 
title='' tabindex="121" ><?php echo $this->_tpl_vars['value']; ?>
</textarea>
<?php else:  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<span class="sugar_field" id="<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['fields']['description']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('url2html', true, $_tmp) : url2html($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
">
<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['fields']['description']['value'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlentitydecode') : smarty_modifier_escape($_tmp, 'htmlentitydecode')))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('url2html', true, $_tmp) : url2html($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>

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
<script>document.getElementById("DEFAULT").style.display='none';</script>
<?php endif; ?>
</div></div>

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
" class="button" onclick="window.location.href='index.php?action=index&module=ProductTemplates'; return false;" type="button" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
" id="CANCEL_FOOTER"> <?php else: ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_KEY']; ?>
" class="button" onclick="window.location.href='index.php?action=index&module=<?php echo $_REQUEST['return_module']; ?>
&record=<?php echo $_REQUEST['return_id']; ?>
'; return false;" type="button" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
" id="CANCEL_FOOTER"> <?php endif;  if ($this->_tpl_vars['bean']->aclAccess('detail')):  if (! empty ( $this->_tpl_vars['fields']['id']['value'] ) && $this->_tpl_vars['isAuditEnabled']): ?><input title="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
" class="button" onclick='open_popup("Audit", "600", "400", "&record=<?php echo $this->_tpl_vars['fields']['id']['value']; ?>
&module_name=ProductTemplates", true, false,  { "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] } ); return false;' type="submit" value="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
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
addToValidate(\'EditView\', \'id\', \'id\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_PRODUCT_ID','module' => 'ProductTemplates','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'deleted\', \'bool\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_DELETED','module' => 'ProductTemplates','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'date_entered_date\', \'date\', false,\'Date Created\' );
addToValidate(\'EditView\', \'date_modified_date\', \'date\', false,\'Date Modified\' );
addToValidate(\'EditView\', \'modified_user_id\', \'assigned_user_name\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_MODIFIED_ID','module' => 'ProductTemplates','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'created_by\', \'assigned_user_name\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_CREATED_ID','module' => 'ProductTemplates','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'type_id\', \'id\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_TYPE','module' => 'ProductTemplates','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'manufacturer_id\', \'id\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_LIST_MANUFACTURER_ID','module' => 'ProductTemplates','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'manufacturer_name\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_MANUFACTURER_NAME','module' => 'ProductTemplates','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'category_id\', \'id\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_LIST_CATEGORY_ID','module' => 'ProductTemplates','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'category_name\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_CATEGORY_NAME','module' => 'ProductTemplates','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'type_name\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_TYPE','module' => 'ProductTemplates','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'name\', \'varchar\', true,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_NAME','module' => 'ProductTemplates','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'mft_part_num\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_MFT_PART_NUM','module' => 'ProductTemplates','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'vendor_part_num\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_VENDOR_PART_NUM','module' => 'ProductTemplates','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'date_cost_price\', \'date\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_DATE_COST_PRICE','module' => 'ProductTemplates','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'cost_price\', \'currency\', true,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_COST_PRICE','module' => 'ProductTemplates','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'discount_price\', \'currency\', true,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_DISCOUNT_PRICE','module' => 'ProductTemplates','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'list_price\', \'currency\', true,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_LIST_PRICE','module' => 'ProductTemplates','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'cost_usdollar\', \'currency\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_COST_USDOLLAR','module' => 'ProductTemplates','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'discount_usdollar\', \'currency\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_DISCOUNT_USDOLLAR','module' => 'ProductTemplates','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'list_usdollar\', \'currency\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_LIST_USDOLLAR','module' => 'ProductTemplates','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'currency_id\', \'id\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_CURRENCY','module' => 'ProductTemplates','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'currency_symbol\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_CURRENCY_SYMBOL_NAME','module' => 'ProductTemplates','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'currency\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_CURRENCY','module' => 'ProductTemplates','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'status\', \'enum\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_STATUS','module' => 'ProductTemplates','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'tax_class\', \'enum\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_TAX_CLASS','module' => 'ProductTemplates','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'date_available\', \'date\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_DATE_AVAILABLE','module' => 'ProductTemplates','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'website\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_URL','module' => 'ProductTemplates','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'weight\', \'decimal\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_WEIGHT','module' => 'ProductTemplates','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'qty_in_stock\', \'int\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_QUANTITY','module' => 'ProductTemplates','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'description\', \'text\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_DESCRIPTION','module' => 'ProductTemplates','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'support_name\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_SUPPORT_NAME','module' => 'ProductTemplates','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'support_description\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_SUPPORT_DESCRIPTION','module' => 'ProductTemplates','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'support_contact\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_SUPPORT_CONTACT','module' => 'ProductTemplates','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'support_term\', \'enum\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_SUPPORT_TERM','module' => 'ProductTemplates','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'pricing_formula\', \'varchar\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_PRICING_FORMULA','module' => 'ProductTemplates','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'pricing_factor\', \'decimal\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_PRICING_FACTOR','module' => 'ProductTemplates','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'account_name\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ACCOUNT_NAME','module' => 'ProductTemplates','for_js' => true), $this); echo '\' );
addToValidateBinaryDependency(\'EditView\', \'assigned_user_name\', \'alpha\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'ERR_SQS_NO_MATCH_FIELD','module' => 'ProductTemplates','for_js' => true), $this); echo ': ';  echo smarty_function_sugar_translate(array('label' => 'LBL_ASSIGNED_TO','module' => 'ProductTemplates','for_js' => true), $this); echo '\', \'assigned_user_id\' );
addToValidateBinaryDependency(\'EditView\', \'category_name\', \'alpha\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'ERR_SQS_NO_MATCH_FIELD','module' => 'ProductTemplates','for_js' => true), $this); echo ': ';  echo smarty_function_sugar_translate(array('label' => 'LBL_CATEGORY_NAME','module' => 'ProductTemplates','for_js' => true), $this); echo '\', \'category_id\' );
</script><script language="javascript">if(typeof sqs_objects == \'undefined\'){var sqs_objects = new Array;}sqs_objects[\'EditView_category_name\']={"form":"EditView","method":"query","modules":["ProductCategories"],"group":"or","field_list":["name","id"],"populate_list":["category_name","category_id"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"No Match"};</script><script type=text/javascript>
SUGAR.forms.AssignmentHandler.registerView(\'EditView\');
</script>'; ?>
