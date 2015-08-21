<?php /* Smarty version 2.6.11, created on 2014-05-09 16:24:34
         compiled from include/SugarFields/Fields/Parent/DetailView.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugarvar', 'include/SugarFields/Fields/Parent/DetailView.tpl', 31, false),array('function', 'sugarvar_connector', 'include/SugarFields/Fields/Parent/DetailView.tpl', 37, false),)), $this); ?>
{*
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

*}
<?php if (! $this->_tpl_vars['nolink']): ?>
<input type="hidden" class="sugar_field" id="<?php echo smarty_function_sugarvar(array('key' => 'name'), $this);?>
" value="<?php echo smarty_function_sugarvar(array('key' => 'value'), $this);?>
">
<input type="hidden" class="sugar_field" id="<?php echo $this->_tpl_vars['vardef']['id_name']; ?>
" value="<?php echo smarty_function_sugarvar(array('key' => 'value','memberName' => 'vardef.id_name'), $this);?>
">
<a href="index.php?module=<?php echo smarty_function_sugarvar(array('objectName' => 'fields','memberName' => 'vardef.type_name','key' => 'value'), $this);?>
&action=DetailView&record=<?php echo smarty_function_sugarvar(array('key' => 'value','memberName' => 'vardef.id_name'), $this);?>
" class="tabDetailViewDFLink"><?php endif;  echo smarty_function_sugarvar(array('key' => 'value'), $this); if (! $this->_tpl_vars['nolink']): ?></a>
<?php endif;  if (! empty ( $this->_tpl_vars['displayParams']['enableConnectors'] )): ?>
{if !empty(<?php echo smarty_function_sugarvar(array('key' => 'value'), $this);?>
)}
<?php echo smarty_function_sugarvar_connector(array('view' => 'DetailView'), $this);?>

{/if}
<?php endif; ?>