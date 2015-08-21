<?php /* Smarty version 2.6.11, created on 2014-05-09 17:07:32
         compiled from cache/modules/ProductTemplates/DetailView.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_include', 'cache/modules/ProductTemplates/DetailView.tpl', 28, false),array('function', 'counter', 'cache/modules/ProductTemplates/DetailView.tpl', 33, false),array('function', 'sugar_translate', 'cache/modules/ProductTemplates/DetailView.tpl', 43, false),array('function', 'sugar_number_format', 'cache/modules/ProductTemplates/DetailView.tpl', 202, false),array('modifier', 'strip_semicolon', 'cache/modules/ProductTemplates/DetailView.tpl', 44, false),array('modifier', 'substr', 'cache/modules/ProductTemplates/DetailView.tpl', 116, false),array('modifier', 'to_url', 'cache/modules/ProductTemplates/DetailView.tpl', 118, false),array('modifier', 'escape', 'cache/modules/ProductTemplates/DetailView.tpl', 653, false),array('modifier', 'url2html', 'cache/modules/ProductTemplates/DetailView.tpl', 653, false),array('modifier', 'nl2br', 'cache/modules/ProductTemplates/DetailView.tpl', 653, false),)), $this); ?>


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
" class="button primary" onclick="this.form.return_module.value='ProductTemplates'; this.form.return_action.value='DetailView'; this.form.return_id.value='<?php echo $this->_tpl_vars['id']; ?>
'; this.form.action.value='EditView';" type="submit" name="Edit" id="edit_button" value="<?php echo $this->_tpl_vars['APP']['LBL_EDIT_BUTTON_LABEL']; ?>
"><?php endif; ?> 
<?php if ($this->_tpl_vars['bean']->aclAccess('edit')): ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_DUPLICATE_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_DUPLICATE_BUTTON_KEY']; ?>
" class="button" onclick="this.form.return_module.value='ProductTemplates'; this.form.return_action.value='DetailView'; this.form.isDuplicate.value=true; this.form.action.value='EditView'; this.form.return_id.value='<?php echo $this->_tpl_vars['id']; ?>
';" type="submit" name="Duplicate" value="<?php echo $this->_tpl_vars['APP']['LBL_DUPLICATE_BUTTON_LABEL']; ?>
" id="duplicate_button"><?php endif; ?> 
<?php if ($this->_tpl_vars['bean']->aclAccess('delete')): ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_DELETE_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_DELETE_BUTTON_KEY']; ?>
" class="button" onclick="this.form.return_module.value='ProductTemplates'; this.form.return_action.value='ListView'; this.form.action.value='Delete'; return confirm('<?php echo $this->_tpl_vars['APP']['NTC_DELETE_CONFIRMATION']; ?>
');" type="submit" name="Delete" value="<?php echo $this->_tpl_vars['APP']['LBL_DELETE_BUTTON_LABEL']; ?>
"><?php endif; ?> 
</form>
</td>
<td class="buttons" align="left" NOWRAP>
<?php if ($this->_tpl_vars['bean']->aclAccess('detail')):  if (! empty ( $this->_tpl_vars['fields']['id']['value'] ) && $this->_tpl_vars['isAuditEnabled']): ?><input title="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
" class="button" onclick='open_popup("Audit", "600", "400", "&record=<?php echo $this->_tpl_vars['fields']['id']['value']; ?>
&module_name=ProductTemplates", true, false,  { "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] } ); return false;' type="submit" value="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
"><?php endif;  endif; ?>
</td>
<td align="right" width="100%"><?php echo $this->_tpl_vars['ADMIN_EDIT']; ?>

<?php echo $this->_tpl_vars['PAGINATION']; ?>

</td>
</tr>
</table><?php echo smarty_function_sugar_include(array('include' => $this->_tpl_vars['includes']), $this);?>

<div id="ProductTemplates_detailview_tabs"
>
<div >
<div id='' class='detail view'>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','start' => 0,'print' => false,'assign' => 'panelFieldCount'), $this);?>

<table id='detailpanel_1' cellspacing='<?php echo $this->_tpl_vars['gridline']; ?>
'>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php echo smarty_function_counter(array('name' => 'fieldsHidden','start' => 0,'print' => false,'assign' => 'fieldsHidden'), $this);?>

<?php ob_start(); ?>
<tr>
<?php if ($this->_tpl_vars['fields']['name']['acl'] > 0):  echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="row">
<?php if (! $this->_tpl_vars['fields']['name']['hidden']):  ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_NAME','module' => 'ProductTemplates'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
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
<?php endif;  if ($this->_tpl_vars['fields']['status']['acl'] > 0):  echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="row">
<?php if (! $this->_tpl_vars['fields']['status']['hidden']):  ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_STATUS','module' => 'ProductTemplates'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php else:  echo smarty_function_counter(array('name' => 'fieldsHidden'), $this);?>

<?php endif; ?>
</td>
<td width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['status']['hidden']):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>



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
<?php if ($this->_tpl_vars['fields']['website']['acl'] > 0):  echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="row">
<?php if (! $this->_tpl_vars['fields']['website']['hidden']):  ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_URL','module' => 'ProductTemplates'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php else:  echo smarty_function_counter(array('name' => 'fieldsHidden'), $this);?>

<?php endif; ?>
</td>
<td width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['website']['hidden']):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php ob_start();  echo $this->_tpl_vars['fields']['website']['value'];  $this->_smarty_vars['capture']['getLink'] = ob_get_contents();  $this->assign('link', ob_get_contents());ob_end_clean();  if (! empty ( $this->_tpl_vars['link'] )):  ob_start();  echo ((is_array($_tmp=$this->_tpl_vars['link'])) ? $this->_run_mod_handler('substr', true, $_tmp, 0, 7) : substr($_tmp, 0, 7));  $this->_smarty_vars['capture']['getStart'] = ob_get_contents();  $this->assign('linkStart', ob_get_contents());ob_end_clean(); ?>
<span class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['website']['name']; ?>
">
<a href='<?php echo ((is_array($_tmp=$this->_tpl_vars['link'])) ? $this->_run_mod_handler('to_url', true, $_tmp) : smarty_modifier_to_url($_tmp)); ?>
'  ><?php echo $this->_tpl_vars['link']; ?>
</a>
</span>
<?php endif;  endif; ?>
</td>
<?php else: ?>
<td scope="row">&nbsp;</td><td>&nbsp;</td>
<?php endif;  if ($this->_tpl_vars['fields']['date_available']['acl'] > 0):  echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="row">
<?php if (! $this->_tpl_vars['fields']['date_available']['hidden']):  ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_DATE_AVAILABLE','module' => 'ProductTemplates'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php else:  echo smarty_function_counter(array('name' => 'fieldsHidden'), $this);?>

<?php endif; ?>
</td>
<td width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['date_available']['hidden']):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['date_available']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['date_available']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['date_available']['value']);  endif; ?> 
<span class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['date_available']['name']; ?>
"><?php echo $this->_tpl_vars['fields']['date_available']['value']; ?>
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
<?php if ($this->_tpl_vars['fields']['tax_class']['acl'] > 0):  echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="row">
<?php if (! $this->_tpl_vars['fields']['tax_class']['hidden']):  ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_TAX_CLASS','module' => 'ProductTemplates'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php else:  echo smarty_function_counter(array('name' => 'fieldsHidden'), $this);?>

<?php endif; ?>
</td>
<td width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['tax_class']['hidden']):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>



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

<?php endif;  endif; ?>
</td>
<?php else: ?>
<td scope="row">&nbsp;</td><td>&nbsp;</td>
<?php endif;  if ($this->_tpl_vars['fields']['qty_in_stock']['acl'] > 0):  echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="row">
<?php if (! $this->_tpl_vars['fields']['qty_in_stock']['hidden']):  ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_QUANTITY','module' => 'ProductTemplates'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php else:  echo smarty_function_counter(array('name' => 'fieldsHidden'), $this);?>

<?php endif; ?>
</td>
<td width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['qty_in_stock']['hidden']):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<span class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['qty_in_stock']['name']; ?>
">
<?php echo smarty_function_sugar_number_format(array('precision' => 0,'var' => $this->_tpl_vars['fields']['qty_in_stock']['value']), $this);?>

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
<?php if ($this->_tpl_vars['fields']['manufacturer_id']['acl'] > 0):  echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="row">
<?php if (! $this->_tpl_vars['fields']['manufacturer_id']['hidden']):  ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_LIST_MANUFACTURER_ID','module' => 'ProductTemplates'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php else:  echo smarty_function_counter(array('name' => 'fieldsHidden'), $this);?>

<?php endif; ?>
</td>
<td width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['manufacturer_id']['hidden']):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>

<span id='manufacturer_id'>
<?php echo $this->_tpl_vars['fields']['manufacturer_id']['value']; ?>

</span>
<?php endif; ?>
</td>
<?php else: ?>
<td scope="row">&nbsp;</td><td>&nbsp;</td>
<?php endif;  if ($this->_tpl_vars['fields']['weight']['acl'] > 0):  echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="row">
<?php if (! $this->_tpl_vars['fields']['weight']['hidden']):  ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_WEIGHT','module' => 'ProductTemplates'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php else:  echo smarty_function_counter(array('name' => 'fieldsHidden'), $this);?>

<?php endif; ?>
</td>
<td width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['weight']['hidden']):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<span class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['weight']['name']; ?>
">
<?php echo smarty_function_sugar_number_format(array('var' => $this->_tpl_vars['fields']['weight']['value'],'precision' => 2), $this);?>

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
<?php if ($this->_tpl_vars['fields']['mft_part_num']['acl'] > 0):  echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="row">
<?php if (! $this->_tpl_vars['fields']['mft_part_num']['hidden']):  ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_MFT_PART_NUM','module' => 'ProductTemplates'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php else:  echo smarty_function_counter(array('name' => 'fieldsHidden'), $this);?>

<?php endif; ?>
</td>
<td width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['mft_part_num']['hidden']):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['mft_part_num']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['mft_part_num']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['mft_part_num']['value']);  endif; ?> 
<span class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['mft_part_num']['name']; ?>
"><?php echo $this->_tpl_vars['fields']['mft_part_num']['value']; ?>
</span>
<?php endif; ?>
</td>
<?php else: ?>
<td scope="row">&nbsp;</td><td>&nbsp;</td>
<?php endif;  if ($this->_tpl_vars['fields']['category_name']['acl'] > 0):  echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="row">
<?php if (! $this->_tpl_vars['fields']['category_name']['hidden']):  ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_CATEGORY','module' => 'ProductTemplates'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php else:  echo smarty_function_counter(array('name' => 'fieldsHidden'), $this);?>

<?php endif; ?>
</td>
<td width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['category_name']['hidden']):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['category_name']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['category_name']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['category_name']['value']);  endif; ?> 
<span class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['category_name']['name']; ?>
"><?php echo $this->_tpl_vars['fields']['category_name']['value']; ?>
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
<?php if ($this->_tpl_vars['fields']['vendor_part_num']['acl'] > 0):  echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="row">
<?php if (! $this->_tpl_vars['fields']['vendor_part_num']['hidden']):  ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_VENDOR_PART_NUM','module' => 'ProductTemplates'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php else:  echo smarty_function_counter(array('name' => 'fieldsHidden'), $this);?>

<?php endif; ?>
</td>
<td width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['vendor_part_num']['hidden']):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['vendor_part_num']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['vendor_part_num']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['vendor_part_num']['value']);  endif; ?> 
<span class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['vendor_part_num']['name']; ?>
"><?php echo $this->_tpl_vars['fields']['vendor_part_num']['value']; ?>
</span>
<?php endif; ?>
</td>
<?php else: ?>
<td scope="row">&nbsp;</td><td>&nbsp;</td>
<?php endif;  if ($this->_tpl_vars['fields']['type_id']['acl'] > 0):  echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="row">
<?php if (! $this->_tpl_vars['fields']['type_id']['hidden']):  ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_TYPE','module' => 'ProductTemplates'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php else:  echo smarty_function_counter(array('name' => 'fieldsHidden'), $this);?>

<?php endif; ?>
</td>
<td width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['type_id']['hidden']):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>

<span id='type_id'>
<?php echo $this->_tpl_vars['fields']['type_id']['value']; ?>

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
<?php if ($this->_tpl_vars['fields']['currency_id']['acl'] > 0):  echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="row">
<?php if (! $this->_tpl_vars['fields']['currency_id']['hidden']):  ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_CURRENCY','module' => 'ProductTemplates'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php else:  echo smarty_function_counter(array('name' => 'fieldsHidden'), $this);?>

<?php endif; ?>
</td>
<td width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['currency_id']['hidden']):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>

<span id='currency_id'>
<?php echo $this->_tpl_vars['fields']['currency_id']['value']; ?>

</span>
<?php endif; ?>
</td>
<?php else: ?>
<td scope="row">&nbsp;</td><td>&nbsp;</td>
<?php endif;  if ($this->_tpl_vars['fields']['support_name']['acl'] > 0):  echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="row">
<?php if (! $this->_tpl_vars['fields']['support_name']['hidden']):  ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_SUPPORT_NAME','module' => 'ProductTemplates'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php else:  echo smarty_function_counter(array('name' => 'fieldsHidden'), $this);?>

<?php endif; ?>
</td>
<td width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['support_name']['hidden']):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['support_name']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['support_name']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['support_name']['value']);  endif; ?> 
<span class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['support_name']['name']; ?>
"><?php echo $this->_tpl_vars['fields']['support_name']['value']; ?>
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
<?php if ($this->_tpl_vars['fields']['cost_price']['acl'] > 0):  echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="row">
<?php if (! $this->_tpl_vars['fields']['cost_price']['hidden']):  ob_start();  echo ((is_array($_tmp=$this->_tpl_vars['MOD']['LBL_COST_PRICE'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
 (<?php echo $this->_tpl_vars['CURRENCY']; ?>
)<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php else:  echo smarty_function_counter(array('name' => 'fieldsHidden'), $this);?>

<?php endif; ?>
</td>
<td width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['cost_price']['hidden']):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<span id='<?php echo $this->_tpl_vars['fields']['cost_price']['name']; ?>
'>
<?php echo smarty_function_sugar_number_format(array('var' => $this->_tpl_vars['fields']['cost_price']['value']), $this);?>

</span>
<?php endif; ?>
</td>
<?php else: ?>
<td scope="row">&nbsp;</td><td>&nbsp;</td>
<?php endif;  if ($this->_tpl_vars['fields']['support_contact']['acl'] > 0):  echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="row">
<?php if (! $this->_tpl_vars['fields']['support_contact']['hidden']):  ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_SUPPORT_CONTACT','module' => 'ProductTemplates'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php else:  echo smarty_function_counter(array('name' => 'fieldsHidden'), $this);?>

<?php endif; ?>
</td>
<td width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['support_contact']['hidden']):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['support_contact']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['support_contact']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['support_contact']['value']);  endif; ?> 
<span class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['support_contact']['name']; ?>
"><?php echo $this->_tpl_vars['fields']['support_contact']['value']; ?>
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
<?php if ($this->_tpl_vars['fields']['list_price']['acl'] > 0):  echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="row">
<?php if (! $this->_tpl_vars['fields']['list_price']['hidden']):  ob_start();  echo ((is_array($_tmp=$this->_tpl_vars['MOD']['LBL_LIST_PRICE'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
 (<?php echo $this->_tpl_vars['CURRENCY']; ?>
)<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php else:  echo smarty_function_counter(array('name' => 'fieldsHidden'), $this);?>

<?php endif; ?>
</td>
<td width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['list_price']['hidden']):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<span id='<?php echo $this->_tpl_vars['fields']['list_price']['name']; ?>
'>
<?php echo smarty_function_sugar_number_format(array('var' => $this->_tpl_vars['fields']['list_price']['value']), $this);?>

</span>
<?php endif; ?>
</td>
<?php else: ?>
<td scope="row">&nbsp;</td><td>&nbsp;</td>
<?php endif;  if ($this->_tpl_vars['fields']['support_description']['acl'] > 0):  echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="row">
<?php if (! $this->_tpl_vars['fields']['support_description']['hidden']):  ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_SUPPORT_DESCRIPTION','module' => 'ProductTemplates'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php else:  echo smarty_function_counter(array('name' => 'fieldsHidden'), $this);?>

<?php endif; ?>
</td>
<td width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['support_description']['hidden']):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['support_description']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['support_description']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['support_description']['value']);  endif; ?> 
<span class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['support_description']['name']; ?>
"><?php echo $this->_tpl_vars['fields']['support_description']['value']; ?>
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
<?php if ($this->_tpl_vars['fields']['discount_price']['acl'] > 0):  echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="row">
<?php if (! $this->_tpl_vars['fields']['discount_price']['hidden']):  ob_start();  echo ((is_array($_tmp=$this->_tpl_vars['MOD']['LBL_DISCOUNT_PRICE'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
 (<?php echo $this->_tpl_vars['CURRENCY']; ?>
)<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php else:  echo smarty_function_counter(array('name' => 'fieldsHidden'), $this);?>

<?php endif; ?>
</td>
<td width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['discount_price']['hidden']):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<span id='<?php echo $this->_tpl_vars['fields']['discount_price']['name']; ?>
'>
<?php echo smarty_function_sugar_number_format(array('var' => $this->_tpl_vars['fields']['discount_price']['value']), $this);?>

</span>
<?php endif; ?>
</td>
<?php else: ?>
<td scope="row">&nbsp;</td><td>&nbsp;</td>
<?php endif;  if ($this->_tpl_vars['fields']['support_term']['acl'] > 0):  echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="row">
<?php if (! $this->_tpl_vars['fields']['support_term']['hidden']):  ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_SUPPORT_TERM','module' => 'ProductTemplates'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php else:  echo smarty_function_counter(array('name' => 'fieldsHidden'), $this);?>

<?php endif; ?>
</td>
<td width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['support_term']['hidden']):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>



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
<?php if ($this->_tpl_vars['fields']['pricing_formula']['acl'] > 0):  echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="row">
<?php if (! $this->_tpl_vars['fields']['pricing_formula']['hidden']):  ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_PRICING_FORMULA','module' => 'ProductTemplates'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php else:  echo smarty_function_counter(array('name' => 'fieldsHidden'), $this);?>

<?php endif; ?>
</td>
<td width='37.5%' colspan='3' >
<?php if (! $this->_tpl_vars['fields']['pricing_formula']['hidden']):  echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>

<span id='pricing_formula'>
<?php echo $this->_tpl_vars['fields']['pricing_formula']['value']; ?>

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
<?php if ($this->_tpl_vars['fields']['description']['acl'] > 0):  echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="row">
<?php if (! $this->_tpl_vars['fields']['description']['hidden']):  ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_DESCRIPTION','module' => 'ProductTemplates'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
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
<script>document.getElementById("").style.display='none';</script>
<?php endif; ?>
</div></div>

</form><?php echo '
<script type=text/javascript>
SUGAR.forms.AssignmentHandler.registerView(\'DetailView\');
</script>'; ?>
