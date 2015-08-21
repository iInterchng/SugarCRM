<?php /* Smarty version 2.6.11, created on 2014-05-08 13:30:13
         compiled from include/SugarFields/Fields/Enum/SearchView.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', 'include/SugarFields/Fields/Enum/SearchView.tpl', 30, false),array('function', 'sugarvar', 'include/SugarFields/Fields/Enum/SearchView.tpl', 31, false),)), $this); ?>
{*
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

*}
<?php ob_start();  echo ((is_array($_tmp=@$this->_tpl_vars['displayParams']['size'])) ? $this->_run_mod_handler('default', true, $_tmp, 6) : smarty_modifier_default($_tmp, 6));  $this->_smarty_vars['capture']['display_size'] = ob_get_contents();  $this->assign('size', ob_get_contents());ob_end_clean(); ?>
{html_options name='<?php echo $this->_tpl_vars['vardef']['name']; ?>
[]' options=<?php echo smarty_function_sugarvar(array('key' => 'options','string' => true), $this);?>
 size="<?php echo $this->_tpl_vars['size']; ?>
" style="width: 150px" <?php if ($this->_tpl_vars['size'] > 1): ?>multiple="1"<?php endif; ?> selected=<?php echo smarty_function_sugarvar(array('key' => 'value','string' => true), $this);?>
}