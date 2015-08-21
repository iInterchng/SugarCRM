<?php /* Smarty version 2.6.11, created on 2014-05-08 12:30:44
         compiled from include/SugarFields/Fields/Text/DetailView.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugarvar', 'include/SugarFields/Fields/Text/DetailView.tpl', 30, false),array('function', 'sugarvar_connector', 'include/SugarFields/Fields/Text/DetailView.tpl', 39, false),)), $this); ?>
{*
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

*}
<span class="sugar_field" id="<?php echo smarty_function_sugarvar(array('key' => 'name'), $this);?>
">
<?php if (empty ( $this->_tpl_vars['displayParams']['textonly'] )):  echo smarty_function_sugarvar(array('key' => 'value','htmlentitydecode' => 'true'), $this);?>

<?php else:  echo smarty_function_sugarvar(array('key' => 'value'), $this);?>

<?php endif; ?>
</span>
<?php if (! empty ( $this->_tpl_vars['displayParams']['enableConnectors'] )): ?>
{if !empty(<?php echo smarty_function_sugarvar(array('key' => 'value'), $this);?>
)}
<?php echo smarty_function_sugarvar_connector(array('view' => 'DetailView'), $this);?>

{/if}
<?php endif; ?>