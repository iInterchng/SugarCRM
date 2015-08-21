<?php /* Smarty version 2.6.11, created on 2014-05-08 13:30:01
         compiled from include/SugarFields/Fields/Int/DetailView.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugarvar', 'include/SugarFields/Fields/Int/DetailView.tpl', 30, false),array('function', 'sugarvar_connector', 'include/SugarFields/Fields/Int/DetailView.tpl', 39, false),)), $this); ?>
{*
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

*}
<span class="sugar_field" id="<?php echo smarty_function_sugarvar(array('key' => 'name'), $this);?>
">
<?php if ($this->_tpl_vars['vardef']['disable_num_format']): ?>
{assign var="value" value=<?php echo smarty_function_sugarvar(array('key' => 'value','string' => true), $this);?>
 }
{$value}
<?php else: ?>
{sugar_number_format precision=0 var=<?php echo smarty_function_sugarvar(array('key' => 'value','stringFormat' => 'false'), $this);?>
}
<?php endif; ?>
</span>
<?php if (! empty ( $this->_tpl_vars['displayParams']['enableConnectors'] )):  echo smarty_function_sugarvar_connector(array('view' => 'DetailView'), $this);?>
 
<?php endif; ?>