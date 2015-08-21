<?php /* Smarty version 2.6.11, created on 2014-05-09 17:01:29
         compiled from include/SugarFields/Fields/File/DetailView.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugarvar', 'include/SugarFields/Fields/File/DetailView.tpl', 30, false),array('function', 'sugarvar_connector', 'include/SugarFields/Fields/File/DetailView.tpl', 42, false),)), $this); ?>
{*
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

*}
<span class="sugar_field" id="<?php if (empty ( $this->_tpl_vars['displayParams']['idName'] )):  echo smarty_function_sugarvar(array('key' => 'name'), $this); else:  echo $this->_tpl_vars['displayParams']['idName'];  endif; ?>">
<a href="index.php?entryPoint=download&id={$fields.<?php echo $this->_tpl_vars['vardef']['fileId']; ?>
.value}&type=<?php echo $this->_tpl_vars['vardef']['linkModule']; ?>
" class="tabDetailViewDFLink" target='_blank'><?php echo smarty_function_sugarvar(array('key' => 'value'), $this);?>
</a>
</span>
<?php if (isset ( $this->_tpl_vars['vardef'] ) && isset ( $this->_tpl_vars['vardef']['allowEapm'] ) && $this->_tpl_vars['vardef']['allowEapm']): ?>
{if isset($fields.<?php echo $this->_tpl_vars['vardef']['docType']; ?>
) && !empty($fields.<?php echo $this->_tpl_vars['vardef']['docType']; ?>
.value) && $fields.<?php echo $this->_tpl_vars['vardef']['docType']; ?>
.value != 'SugarCRM' && !empty($fields.<?php echo $this->_tpl_vars['vardef']['docUrl']; ?>
.value) }
{capture name=imageNameCapture assign=imageName}
{$fields.<?php echo $this->_tpl_vars['vardef']['docType']; ?>
.value}_image_inline.png
{/capture}
<a href="{$fields.<?php echo $this->_tpl_vars['vardef']['docUrl']; ?>
.value}" class="tabDetailViewDFLink" target="_blank"><img src="{sugar_getimagepath file=$imageName}" border="0"></a>
{/if}
<?php endif;  if (! empty ( $this->_tpl_vars['displayParams']['enableConnectors'] )):  echo smarty_function_sugarvar_connector(array('view' => 'DetailView'), $this);?>

<?php endif; ?>