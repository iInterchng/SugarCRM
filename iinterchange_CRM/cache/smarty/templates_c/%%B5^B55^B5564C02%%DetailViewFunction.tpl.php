<?php /* Smarty version 2.6.11, created on 2014-05-08 12:30:44
         compiled from include/SugarFields/Fields/Base/DetailViewFunction.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugarvar', 'include/SugarFields/Fields/Base/DetailViewFunction.tpl', 30, false),array('function', 'sugarvar_connector', 'include/SugarFields/Fields/Base/DetailViewFunction.tpl', 32, false),)), $this); ?>
{*
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

*}
<?php echo smarty_function_sugarvar(array('key' => 'value'), $this);?>

<?php if (! empty ( $this->_tpl_vars['displayParams']['enableConnectors'] )):  echo smarty_function_sugarvar_connector(array('view' => 'DetailView'), $this);?>
 
<?php endif; ?>