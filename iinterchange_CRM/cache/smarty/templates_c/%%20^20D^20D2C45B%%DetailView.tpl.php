<?php /* Smarty version 2.6.11, created on 2014-05-08 12:30:44
         compiled from include/SugarFields/Fields/Enum/DetailView.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugarvar', 'include/SugarFields/Fields/Enum/DetailView.tpl', 32, false),array('function', 'sugarvar_connector', 'include/SugarFields/Fields/Enum/DetailView.tpl', 40, false),)), $this); ?>
{*
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

*}
{* This is here so currency fields, who don't really have dropdown
lists can work. *}
{if is_string(<?php echo smarty_function_sugarvar(array('key' => 'options','string' => true), $this);?>
)}
<input type="hidden" class="sugar_field" id="<?php echo smarty_function_sugarvar(array('key' => 'name'), $this);?>
" value="{ <?php echo smarty_function_sugarvar(array('key' => 'options','string' => true), $this);?>
 }">
{ <?php echo smarty_function_sugarvar(array('key' => 'options','string' => true), $this);?>
 }
{else}
<input type="hidden" class="sugar_field" id="<?php echo smarty_function_sugarvar(array('key' => 'name'), $this);?>
" value="{ <?php echo smarty_function_sugarvar(array('key' => 'value','string' => true), $this);?>
 }">
{ <?php echo smarty_function_sugarvar(array('key' => 'options','string' => true), $this);?>
[<?php echo smarty_function_sugarvar(array('key' => 'value','string' => true), $this);?>
]}
{/if}
<?php if (! empty ( $this->_tpl_vars['displayParams']['enableConnectors'] )):  echo smarty_function_sugarvar_connector(array('view' => 'DetailView'), $this);?>

<?php endif; ?>