<?php /* Smarty version 2.6.11, created on 2014-05-08 12:48:40
         compiled from include/SugarFields/Fields/Enum/EditView.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugarvar', 'include/SugarFields/Fields/Enum/EditView.tpl', 31, false),)), $this); ?>
{*
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

*}

<select name="<?php if (empty ( $this->_tpl_vars['displayParams']['idName'] )):  echo smarty_function_sugarvar(array('key' => 'name'), $this); else:  echo $this->_tpl_vars['displayParams']['idName'];  endif; ?>" 
id="<?php if (empty ( $this->_tpl_vars['displayParams']['idName'] )):  echo smarty_function_sugarvar(array('key' => 'name'), $this); else:  echo $this->_tpl_vars['displayParams']['idName'];  endif; ?>" 
title='<?php echo $this->_tpl_vars['vardef']['help']; ?>
' tabindex="<?php echo $this->_tpl_vars['tabindex']; ?>
" <?php echo $this->_tpl_vars['displayParams']['field']; ?>
 
<?php if (isset ( $this->_tpl_vars['displayParams']['javascript'] )):  echo $this->_tpl_vars['displayParams']['javascript'];  endif; ?>>

{if isset(<?php echo smarty_function_sugarvar(array('key' => 'value','string' => true), $this);?>
) && <?php echo smarty_function_sugarvar(array('key' => 'value','string' => true), $this);?>
 != ''}
{html_options options=<?php echo smarty_function_sugarvar(array('key' => 'options','string' => true), $this);?>
 selected=<?php echo smarty_function_sugarvar(array('key' => 'value','string' => true), $this);?>
}
{else}
{html_options options=<?php echo smarty_function_sugarvar(array('key' => 'options','string' => true), $this);?>
 selected=<?php echo smarty_function_sugarvar(array('key' => 'default','string' => true), $this);?>
}
{/if}
</select>