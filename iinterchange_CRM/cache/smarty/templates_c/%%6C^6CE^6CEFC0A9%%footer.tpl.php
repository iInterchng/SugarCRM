<?php /* Smarty version 2.6.11, created on 2014-05-08 12:48:40
         compiled from include/EditView/footer.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_button', 'include/EditView/footer.tpl', 34, false),)), $this); ?>
{*
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

*}
<?php if (empty ( $this->_tpl_vars['form']['button_location'] ) || $this->_tpl_vars['form']['button_location'] == 'bottom'): ?>
<div class="buttons">
<?php if (! empty ( $this->_tpl_vars['form'] ) && ! empty ( $this->_tpl_vars['form']['buttons'] )): ?>
   <?php $_from = $this->_tpl_vars['form']['buttons']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['val'] => $this->_tpl_vars['button']):
?>
      <?php echo smarty_function_sugar_button(array('module' => ($this->_tpl_vars['module']),'id' => ($this->_tpl_vars['button']),'view' => ($this->_tpl_vars['view'])), $this);?>

   <?php endforeach; endif; unset($_from);  else:  echo smarty_function_sugar_button(array('module' => ($this->_tpl_vars['module']),'id' => 'SAVE','view' => ($this->_tpl_vars['view']),'location' => 'FOOTER'), $this);?>

<?php echo smarty_function_sugar_button(array('module' => ($this->_tpl_vars['module']),'id' => 'CANCEL','view' => ($this->_tpl_vars['view']),'location' => 'FOOTER'), $this);?>

<?php endif;  if (empty ( $this->_tpl_vars['form']['hideAudit'] ) || ! $this->_tpl_vars['form']['hideAudit']):  echo smarty_function_sugar_button(array('module' => ($this->_tpl_vars['module']),'id' => 'Audit','view' => ($this->_tpl_vars['view'])), $this);?>

<?php endif; ?>
</div>
<?php endif; ?>
</form>
<?php if ($this->_tpl_vars['externalJSFile']): ?>
require_once("'".$externalJSFile."'");
<?php endif; ?>

{$set_focus_block}

<?php if (isset ( $this->_tpl_vars['scriptBlocks'] )): ?>
<!-- Begin Meta-Data Javascript -->
<?php echo $this->_tpl_vars['scriptBlocks']; ?>

<!-- End Meta-Data Javascript -->
<?php endif; ?>