<?php /* Smarty version 2.6.11, created on 2014-05-08 12:30:44
         compiled from include/DetailView/header.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_button', 'include/DetailView/header.tpl', 54, false),array('function', 'counter', 'include/DetailView/header.tpl', 58, false),)), $this); ?>
{*
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

*}
<?php if ($this->_tpl_vars['preForm']): ?>
	<?php echo $this->_tpl_vars['preForm']; ?>

<?php endif; ?>
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
<?php if (isset ( $this->_tpl_vars['form']['hidden'] )):  $_from = $this->_tpl_vars['form']['hidden']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['field']):
 echo $this->_tpl_vars['field']; ?>

<?php endforeach; endif; unset($_from);  endif; ?>

<?php if (! isset ( $this->_tpl_vars['form']['buttons'] )):  echo smarty_function_sugar_button(array('module' => ($this->_tpl_vars['module']),'id' => 'EDIT','view' => ($this->_tpl_vars['view'])), $this);?>

<?php echo smarty_function_sugar_button(array('module' => ($this->_tpl_vars['module']),'id' => 'DUPLICATE','view' => 'EditView'), $this);?>

<?php echo smarty_function_sugar_button(array('module' => ($this->_tpl_vars['module']),'id' => 'DELETE','view' => ($this->_tpl_vars['view'])), $this);?>

<?php else: ?>
	<?php echo smarty_function_counter(array('assign' => 'num_buttons','start' => 0,'print' => false), $this);?>

	<?php $_from = $this->_tpl_vars['form']['buttons']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['val'] => $this->_tpl_vars['button']):
?>
	  <?php if (! is_array ( $this->_tpl_vars['button'] ) && in_array ( $this->_tpl_vars['button'] , $this->_tpl_vars['built_in_buttons'] )): ?>
	     <?php echo smarty_function_counter(array('print' => false), $this);?>

	     <?php echo smarty_function_sugar_button(array('module' => ($this->_tpl_vars['module']),'id' => ($this->_tpl_vars['button']),'view' => 'EditView'), $this);?>

	  <?php endif; ?>
	<?php endforeach; endif; unset($_from); ?>
	<?php if (isset ( $this->_tpl_vars['closeFormBeforeCustomButtons'] )): ?>
	</form>
	</td>
	<?php endif; ?>
	<?php if (count ( $this->_tpl_vars['form']['buttons'] ) > $this->_tpl_vars['num_buttons']): ?>
			<?php $_from = $this->_tpl_vars['form']['buttons']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['val'] => $this->_tpl_vars['button']):
?>
			  <?php if (is_array ( $this->_tpl_vars['button'] ) && $this->_tpl_vars['button']['customCode']): ?>
              <?php if (isset ( $this->_tpl_vars['closeFormBeforeCustomButtons'] )): ?>
              <td class="buttons" align="left" NOWRAP>
              <?php endif; ?>
			  <?php echo smarty_function_sugar_button(array('module' => ($this->_tpl_vars['module']),'id' => ($this->_tpl_vars['button']),'view' => 'EditView'), $this);?>

              <?php if (isset ( $this->_tpl_vars['closeFormBeforeCustomButtons'] )): ?>
              </td>
              <?php endif; ?>
			  <?php endif; ?>
			<?php endforeach; endif; unset($_from); ?>
	<?php endif;  endif;  if (! isset ( $this->_tpl_vars['closeFormBeforeCustomButtons'] )): ?>
</form>
</td>
<?php endif;  if (empty ( $this->_tpl_vars['form']['hideAudit'] ) || ! $this->_tpl_vars['form']['hideAudit']): ?>
<td class="buttons" align="left" NOWRAP>
<?php echo smarty_function_sugar_button(array('module' => ($this->_tpl_vars['module']),'id' => 'Audit','view' => 'EditView'), $this);?>

</td>
<?php endif; ?>
<td align="right" width="100%">{$ADMIN_EDIT}
	<?php if ($this->_tpl_vars['panelCount'] == 0): ?>
	    		<?php if ($this->_tpl_vars['SHOW_VCR_CONTROL']): ?>
			{$PAGINATION}
		<?php endif; ?>
		<?php echo smarty_function_counter(array('name' => 'panelCount','print' => false), $this);?>

	<?php endif; ?>
</td>
<?php if (! empty ( $this->_tpl_vars['form'] ) && isset ( $this->_tpl_vars['form']['links'] )): ?>
	<td align="right" width="10%">&nbsp;</td>
	<td align="right" width="100%" NOWRAP>
	<?php $_from = $this->_tpl_vars['form']['links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['link']):
?>
	    <?php echo $this->_tpl_vars['link']; ?>
&nbsp;
	<?php endforeach; endif; unset($_from); ?>
	</td>
<?php endif; ?>
</tr>
</table>