<?php /* Smarty version 2.6.11, created on 2014-05-09 17:24:03
         compiled from modules/Connectors/tpls/search_form.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'counter', 'modules/Connectors/tpls/search_form.tpl', 45, false),)), $this); ?>
<table class="h3Row" width="100%" cellpadding="0" cellspacing="0" border="0">
<tr>
<td nowrap>
<h3><?php echo $this->_tpl_vars['mod']['LBL_MODIFY_SEARCH']; ?>
</h3></td><td width='100%'>
<IMG height='1' width='1' src='include/images/blank.gif' alt=''>
</td>
</tr>
</table>
<form name='SearchForm' method='POST' id='SearchForm'>
 	<input type='hidden' name='source_id' id='source_id' value='<?php echo $this->_tpl_vars['source_id']; ?>
' />
 	<input type='hidden' name='merge_module' value='<?php echo $this->_tpl_vars['module']; ?>
' />
 	<input type='hidden' name='record' value='<?php echo $this->_tpl_vars['RECORD']; ?>
' />
 	<table width="100%" cellspacing="0" cellpadding="0" border="0" class="tabForm">
<?php if (! empty ( $this->_tpl_vars['search_fields'] )): ?>
 	<tr>
 	 <?php echo smarty_function_counter(array('assign' => 'field_count','start' => 0,'print' => 0), $this);?>
 
	 <?php $_from = $this->_tpl_vars['search_fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['field_name'] => $this->_tpl_vars['field_value']):
?> 
	 	<?php echo smarty_function_counter(array('assign' => 'field_count'), $this);?>

		<?php if (( $this->_tpl_vars['field_count'] % 3 == 1 && $this->_tpl_vars['field_count'] != 1 )): ?>
		</tr><tr>
		<?php endif; ?>
		<td nowrap="nowrap" width='10%' class="dataLabel">
		<?php echo $this->_tpl_vars['field_value']['label']; ?>
: 
		</td>
		<td nowrap="nowrap" width='30%' class="dataField">
		<input type='text' onkeydown='checkKeyDown(event);' name='<?php echo $this->_tpl_vars['field_name']; ?>
' value='<?php echo $this->_tpl_vars['field_value']['value']; ?>
'/>
		</td>
	 <?php endforeach; endif; unset($_from);  else: ?>
     <?php echo $this->_tpl_vars['mod']['ERROR_NO_SEARCHDEFS_MAPPING']; ?>

<?php endif; ?>
</table>
<input type='button' name='btn_search' id='btn_search' title="<?php echo $this->_tpl_vars['APP']['LBL_SEARCH_BUTTON_LABEL']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_SEARCH_BUTTON_KEY']; ?>
" class="button" onClick="javascript:SourceTabs.search();" value="      <?php echo $this->_tpl_vars['APP']['LBL_SEARCH_BUTTON_LABEL']; ?>
      "/>&nbsp;
<input type='button' name='btn_clear' title="<?php echo $this->_tpl_vars['APP']['LBL_CLEAR_BUTTON_LABEL']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_CLEAR_BUTTON_KEY']; ?>
" class="button" onClick="javascript:SourceTabs.clearForm();" value="<?php echo $this->_tpl_vars['APP']['LBL_CLEAR_BUTTON_LABEL']; ?>
"/>
</form>