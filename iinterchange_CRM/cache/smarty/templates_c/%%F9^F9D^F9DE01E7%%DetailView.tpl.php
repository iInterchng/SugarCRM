<?php /* Smarty version 2.6.11, created on 2014-05-09 17:06:16
         compiled from include/SugarFields/Fields/Float/DetailView.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugarvar', 'include/SugarFields/Fields/Float/DetailView.tpl', 30, false),array('function', 'sugarvar_connector', 'include/SugarFields/Fields/Float/DetailView.tpl', 34, false),)), $this); ?>
{*
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

*}
<span class="sugar_field" id="<?php if (empty ( $this->_tpl_vars['displayParams']['idName'] )):  echo smarty_function_sugarvar(array('key' => 'name'), $this); else:  echo $this->_tpl_vars['displayParams']['idName'];  endif; ?>">
{sugar_number_format var=<?php echo smarty_function_sugarvar(array('key' => 'value','stringFormat' => 'false'), $this);?>
 <?php if (! empty ( $this->_tpl_vars['vardef']['precision'] )): ?>precision=<?php echo $this->_tpl_vars['vardef']['precision'];  endif; ?> }
</span>
<?php if (! empty ( $this->_tpl_vars['displayParams']['enableConnectors'] )):  echo smarty_function_sugarvar_connector(array('view' => 'DetailView'), $this);?>
 
<?php endif; ?>