<?php /* Smarty version 2.6.11, created on 2014-05-08 12:13:45
         compiled from themes/Sugar/tpls/_globalLinks.tpl */ ?>
<div id="globalLinksModule">
	<div id="globalLinksCtrl">
	</div>
<div id="globalLinks">

    <?php $_from = $this->_tpl_vars['GCLS']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['gcl'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['gcl']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['GCL']):
        $this->_foreach['gcl']['iteration']++;
?>

    <span <?php if (($this->_foreach['gcl']['iteration'] <= 1)): ?>class="first"<?php endif; ?>>|</span>
    <a href="<?php echo $this->_tpl_vars['GCL']['URL']; ?>
" <?php if (($this->_foreach['gcl']['iteration'] == $this->_foreach['gcl']['total'])): ?>class="last"<?php endif;  if (! empty ( $this->_tpl_vars['GCL']['ONCLICK'] )): ?> onclick="<?php echo $this->_tpl_vars['GCL']['ONCLICK']; ?>
"<?php endif; ?>><?php echo $this->_tpl_vars['GCL']['LABEL']; ?>
</a>

    <?php $_from = $this->_tpl_vars['GCL']['SUBMENU']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['gcl_submenu'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['gcl_submenu']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['GCL_SUBMENU']):
        $this->_foreach['gcl_submenu']['iteration']++;
?>
    <a href="<?php echo $this->_tpl_vars['GCL_SUBMENU']['URL']; ?>
"<?php if (! empty ( $this->_tpl_vars['GCL_SUBMENU']['ONCLICK'] )): ?> onclick="<?php echo $this->_tpl_vars['GCL_SUBMENU']['ONCLICK']; ?>
"<?php endif; ?>><?php echo $this->_tpl_vars['GCL_SUBMENU']['LABEL']; ?>
</a>
    <?php endforeach; endif; unset($_from); ?>

    <?php endforeach; endif; unset($_from); ?>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "themes/Sugar/tpls/_welcome.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</div>