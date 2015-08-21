<?php /* Smarty version 2.6.11, created on 2014-05-08 13:30:01
         compiled from include/SugarFields/Fields/Currency/DetailView.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugarvar', 'include/SugarFields/Fields/Currency/DetailView.tpl', 30, false),array('function', 'sugarvar_connector', 'include/SugarFields/Fields/Currency/DetailView.tpl', 34, false),)), $this); ?>
{*
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

*}
<span id='<?php echo smarty_function_sugarvar(array('key' => 'name'), $this);?>
'>
{sugar_number_format var=<?php echo smarty_function_sugarvar(array('key' => 'value','stringFormat' => 'false'), $this);?>
 }
</span>
<?php if (! empty ( $this->_tpl_vars['displayParams']['enableConnectors'] )):  echo smarty_function_sugarvar_connector(array('view' => 'DetailView'), $this);?>

<?php endif; ?>