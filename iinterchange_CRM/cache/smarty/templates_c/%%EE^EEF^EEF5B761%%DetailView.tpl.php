<?php /* Smarty version 2.6.11, created on 2014-05-08 12:30:44
         compiled from include/SugarFields/Fields/Link/DetailView.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugarvar', 'include/SugarFields/Fields/Link/DetailView.tpl', 30, false),array('function', 'sugarvar_connector', 'include/SugarFields/Fields/Link/DetailView.tpl', 40, false),array('modifier', 'replace', 'include/SugarFields/Fields/Link/DetailView.tpl', 32, false),)), $this); ?>
{*
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

*}
{capture name=getLink assign=link}<?php echo smarty_function_sugarvar(array('key' => 'value'), $this);?>
{/capture}
<?php if ($this->_tpl_vars['vardef']['gen']): ?>
{sugar_replace_vars subject='<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['vardef']['default'])) ? $this->_run_mod_handler('replace', true, $_tmp, '{', '[') : smarty_modifier_replace($_tmp, '{', '[')))) ? $this->_run_mod_handler('replace', true, $_tmp, '}', ']') : smarty_modifier_replace($_tmp, '}', ']')); ?>
' assign='link'}
<?php endif; ?>
{if !empty($link)}
{capture name=getStart assign=linkStart}{$link|substr:0:7}{/capture}
<span class="sugar_field" id="<?php echo smarty_function_sugarvar(array('key' => 'name'), $this);?>
">
<a href='{$link|to_url}' <?php if ($this->_tpl_vars['displayParams']['link_target']): ?>target='<?php echo $this->_tpl_vars['displayParams']['link_target']; ?>
'<?php elseif ($this->_tpl_vars['vardef']['link_target']): ?>target='<?php echo $this->_tpl_vars['vardef']['link_target']; ?>
'<?php endif; ?> ><?php if (! empty ( $this->_tpl_vars['displayParams']['title'] )): ?>{sugar_translate label='<?php echo $this->_tpl_vars['displayParams']['title']; ?>
' module=$module}<?php else: ?>{$link}<?php endif; ?></a>
</span>
<?php if (! empty ( $this->_tpl_vars['displayParams']['enableConnectors'] )):  echo smarty_function_sugarvar_connector(array('view' => 'DetailView'), $this);?>

<?php endif; ?>
{/if}