<?php /* Smarty version 2.6.11, created on 2014-05-08 12:30:44
         compiled from include/SugarFields/Fields/Relate/DetailView.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugarvar', 'include/SugarFields/Fields/Relate/DetailView.tpl', 31, false),array('function', 'sugarvar_connector', 'include/SugarFields/Fields/Relate/DetailView.tpl', 39, false),)), $this); ?>
{*
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

*}
<?php if (! $this->_tpl_vars['nolink'] && ! empty ( $this->_tpl_vars['vardef']['id_name'] )): ?> 
{if !empty(<?php echo smarty_function_sugarvar(array('memberName' => 'vardef.id_name','key' => 'value','string' => 'true'), $this);?>
)}<a href="index.php?module=<?php echo $this->_tpl_vars['vardef']['module']; ?>
&action=DetailView&record=<?php echo smarty_function_sugarvar(array('memberName' => 'vardef.id_name','key' => 'value'), $this);?>
">{/if}
<?php endif; ?>
<span id="<?php echo $this->_tpl_vars['vardef']['id_name']; ?>
" class="sugar_field"><?php echo smarty_function_sugarvar(array('key' => 'value'), $this);?>
</span>
<?php if (! $this->_tpl_vars['nolink'] && ! empty ( $this->_tpl_vars['vardef']['id_name'] )): ?>
{if !empty(<?php echo smarty_function_sugarvar(array('memberName' => 'vardef.id_name','key' => 'value','string' => 'true'), $this);?>
)}</a>{/if}
<?php endif;  if (! empty ( $this->_tpl_vars['displayParams']['enableConnectors'] ) && ! empty ( $this->_tpl_vars['vardef']['id_name'] )): ?>
{if !empty(<?php echo smarty_function_sugarvar(array('memberName' => 'vardef.id_name','key' => 'value','string' => 'true'), $this);?>
)}
<?php echo smarty_function_sugarvar_connector(array('view' => 'DetailView'), $this);?>
 
{/if}
<?php endif; ?>