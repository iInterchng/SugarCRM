<?php /* Smarty version 2.6.11, created on 2014-05-08 12:33:49
         compiled from include/SugarFields/Fields/File/ListView.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_fetch', 'include/SugarFields/Fields/File/ListView.tpl', 30, false),array('function', 'sugar_getimagepath', 'include/SugarFields/Fields/File/ListView.tpl', 36, false),)), $this); ?>
<a href="index.php?entryPoint=download&id=<?php echo $this->_tpl_vars['parentFieldArray']['ID']; ?>
&type=<?php echo $this->_tpl_vars['displayParams']['module'];  echo $this->_tpl_vars['vardef']['displayParams']['module']; ?>
" class="tabDetailViewDFLink" target='_blank'><?php echo smarty_function_sugar_fetch(array('object' => $this->_tpl_vars['parentFieldArray'],'key' => $this->_tpl_vars['col']), $this);?>

<?php if (isset ( $this->_tpl_vars['vardef']['allowEapm'] ) && $this->_tpl_vars['vardef']['allowEapm'] && isset ( $this->_tpl_vars['parentFieldArray']['DOC_TYPE'] )):  ob_start();  echo smarty_function_sugar_fetch(array('object' => $this->_tpl_vars['parentFieldArray'],'key' => 'DOC_TYPE'), $this);?>
_image_inline.png
<?php $this->_smarty_vars['capture']['imageNameCapture'] = ob_get_contents();  $this->assign('imageName', ob_get_contents());ob_end_clean();  ob_start();  echo smarty_function_sugar_getimagepath(array('file' => $this->_tpl_vars['imageName']), $this);?>

<?php $this->_smarty_vars['capture']['imageURLCapture'] = ob_get_contents();  $this->assign('imageURL', ob_get_contents());ob_end_clean();  if (strlen ( $this->_tpl_vars['imageURL'] ) > 1): ?><img src="<?php echo $this->_tpl_vars['imageURL']; ?>
" border="0"><?php endif;  endif; ?>
</a>