<?php /* Smarty version 2.6.11, created on 2014-05-09 15:00:44
         compiled from modules/ACLRoles/EditViewBody.tpl */ ?>
<script src="modules/ACLRoles/ACLRoles.js"></script>
<b><?php echo $this->_tpl_vars['MOD']['LBL_EDIT_VIEW_DIRECTIONS']; ?>
</b>
<table width='100%'><tr>
<td valign='top'>
<TABLE class='edit view' border='0' cellpadding=0 cellspacing = 1  >
<tr> <td colspan="2" scope="row"><a href='javascript:void(0);' onclick='aclviewer.view("<?php echo $this->_tpl_vars['ROLE']['id']; ?>
", "All");'><b><?php echo $this->_tpl_vars['MOD']['LBL_ALL']; ?>
</b></a></td></tr>

<?php $_from = $this->_tpl_vars['CATEGORIES2']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['CATEGORY_NAME'] => $this->_tpl_vars['TYPES']):
 if ($this->_tpl_vars['APP_LIST']['moduleList'][$this->_tpl_vars['CATEGORY_NAME']] != 'Users'): ?>
<TR>
<td nowrap width='1%' scope="row"><a href='javascript:void(0);' onclick='aclviewer.view("<?php echo $this->_tpl_vars['ROLE']['id']; ?>
", "<?php echo $this->_tpl_vars['CATEGORY_NAME']; ?>
");'><b><?php echo $this->_tpl_vars['APP_LIST']['moduleList'][$this->_tpl_vars['CATEGORY_NAME']]; ?>
</b></a></td>
</TR>
<?php endif; ?>
	<?php endforeach; else: ?>

         <tr> <td colspan="2">No Modules Available</td></tr>

<?php endif; unset($_from); ?>
</TABLE>
</td>
<td width= '100%'  valign='top'>
<div id='category_data'>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'modules/ACLRoles/EditAllBody.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</div>
</td></tr>
</table>

