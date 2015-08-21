<?php /* Smarty version 2.6.11, created on 2014-05-09 15:17:19
         compiled from modules/ACLRoles/EditRole.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_options', 'modules/ACLRoles/EditRole.tpl', 67, false),)), $this); ?>
<form method='POST' name='EditView' id='ACLEditView'>
<input type='hidden' name='record' value='<?php echo $this->_tpl_vars['ROLE']['id']; ?>
'>
<input type='hidden' name='module' value='ACLRoles'>
<input type='hidden' name='action' value='Save'>
<input type='hidden' name='return_record' value='<?php echo $this->_tpl_vars['RETURN']['record']; ?>
'>
<input type='hidden' name='return_action' value='<?php echo $this->_tpl_vars['RETURN']['action']; ?>
'>
<input type='hidden' name='return_module' value='<?php echo $this->_tpl_vars['RETURN']['module']; ?>
'>
<input title="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_KEY']; ?>
" class="button" onclick="this.form.action.value='Save';aclviewer.save('ACLEditView');return false;" type="button" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_LABEL']; ?>
" > &nbsp;
<input title="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_TITLE']; ?>
"   class='button' accessKey="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_KEY']; ?>
" type='button' name='save' value="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
" class='button' onclick='aclviewer.view("<?php echo $this->_tpl_vars['ROLE']['id']; ?>
", "All");'>
<br>
<TABLE width='100%' class='detail view' border='0' cellpadding=0 cellspacing = 1  >
<?php if (! empty ( $this->_tpl_vars['CATEGORIES'][$this->_tpl_vars['CATEGORY_NAME']] )): ?>
	<TR>
	<?php $_from = $this->_tpl_vars['ACTION_NAMES']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ACTION_NAME'] => $this->_tpl_vars['ACTION_LABEL']):
?>
		<?php $_from = $this->_tpl_vars['CATEGORIES'][$this->_tpl_vars['CATEGORY_NAME']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ACTIONS']):
?>
			<?php $_from = $this->_tpl_vars['ACTIONS']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ACTION_NAME_ACTIVE'] => $this->_tpl_vars['ACTION']):
?>
				<?php if ($this->_tpl_vars['ACTION_NAME'] == $this->_tpl_vars['ACTION_NAME_ACTIVE']): ?>
					<td align='center'><div align='center'><b><?php echo $this->_tpl_vars['ACTION_LABEL']; ?>
</b></div></td>
				<?php endif; ?>
			<?php endforeach; endif; unset($_from); ?>
		<?php endforeach; endif; unset($_from); ?>
	<?php endforeach; else: ?>
	
	          <td colspan="2">&nbsp;</td>
	
	<?php endif; unset($_from); ?>
	</TR>
	
	<TR>
	<?php $_from = $this->_tpl_vars['ACTION_NAMES']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ACTION_NAME'] => $this->_tpl_vars['ACTION_LABEL']):
?>
	    <?php $_from = $this->_tpl_vars['CATEGORIES'][$this->_tpl_vars['CATEGORY_NAME']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ACTIONS']):
?>
	        <?php $_from = $this->_tpl_vars['ACTIONS']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ACTION_NAME_ACTIVE'] => $this->_tpl_vars['ACTION']):
?>
	            <?php if ($this->_tpl_vars['ACTION_NAME'] == $this->_tpl_vars['ACTION_NAME_ACTIVE']): ?>	
					<td nowrap width='<?php echo $this->_tpl_vars['TDWIDTH']; ?>
%' style="text-align: center;" >
					<div  style="display: none" id="<?php echo $this->_tpl_vars['ACTION']['id']; ?>
">
					<?php if ($this->_tpl_vars['APP_LIST']['moduleList'][$this->_tpl_vars['CATEGORY_NAME']] == $this->_tpl_vars['APP_LIST']['moduleList']['Users'] && $this->_tpl_vars['ACTION_LABEL'] != $this->_tpl_vars['MOD']['LBL_ACTION_ADMIN']): ?>
					<select DISABLED class="acl<?php echo $this->_tpl_vars['ACTION']['accessName']; ?>
" name='act_guid<?php echo $this->_tpl_vars['ACTION']['id']; ?>
' id = 'act_guid<?php echo $this->_tpl_vars['ACTION']['id']; ?>
' onblur="document.getElementById('<?php echo $this->_tpl_vars['ACTION']['id']; ?>
link').innerHTML=this.options[this.selectedIndex].text; aclviewer.toggleDisplay('<?php echo $this->_tpl_vars['ACTION']['id']; ?>
');" >
				   		<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['ACTION']['accessOptions'],'selected' => $this->_tpl_vars['ACTION']['aclaccess']), $this);?>

					</select>
					<?php else: ?>
                    <select class="acl<?php echo $this->_tpl_vars['ACTION']['accessName']; ?>
" name='act_guid<?php echo $this->_tpl_vars['ACTION']['id']; ?>
' id = 'act_guid<?php echo $this->_tpl_vars['ACTION']['id']; ?>
' onblur="document.getElementById('<?php echo $this->_tpl_vars['ACTION']['id']; ?>
link').innerHTML=this.options[this.selectedIndex].text; aclviewer.toggleDisplay('<?php echo $this->_tpl_vars['ACTION']['id']; ?>
');" >
                        <?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['ACTION']['accessOptions'],'selected' => $this->_tpl_vars['ACTION']['aclaccess']), $this);?>

                    </select>					
					<?php endif; ?>
					</div>
					<div class="acl<?php echo $this->_tpl_vars['ACTION']['accessName']; ?>
"  id="<?php echo $this->_tpl_vars['ACTION']['id']; ?>
link" onclick="aclviewer.toggleDisplay('<?php echo $this->_tpl_vars['ACTION']['id']; ?>
')"><?php echo $this->_tpl_vars['ACTION']['accessName']; ?>
</div>
					</td>
	            <?php endif; ?>
	        <?php endforeach; endif; unset($_from); ?>
	    <?php endforeach; endif; unset($_from); ?>
	<?php endforeach; else: ?>
	          <td colspan="2">&nbsp;</td>
	<?php endif; unset($_from); ?>
	
	</TR>
<?php else: ?>
    <tr> <td colspan="2">No Actions Defined</td></tr>
<?php endif; ?>
</TABLE>