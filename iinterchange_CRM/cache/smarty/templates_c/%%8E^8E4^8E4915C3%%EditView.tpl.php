<?php /* Smarty version 2.6.11, created on 2014-05-09 15:17:19
         compiled from modules/ACLFields/EditView.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_translate', 'modules/ACLFields/EditView.tpl', 32, false),array('function', 'counter', 'modules/ACLFields/EditView.tpl', 35, false),array('function', 'html_options', 'modules/ACLFields/EditView.tpl', 58, false),)), $this); ?>
<?php if (! empty ( $this->_tpl_vars['FIELDS'] )): ?>
<link rel="stylesheet" type="text/css" href="modules/ModuleBuilder/tpls/ListEditor.css" />
<h3><?php echo smarty_function_sugar_translate(array('label' => 'LBL_FIELDS','module' => 'ACLFields'), $this);?>
</h3>
<input type='hidden' name='flc_module' value='<?php echo $this->_tpl_vars['FLC_MODULE']; ?>
'> 
<table  class='detail view' border='0' cellpadding=0 cellspacing = 1  width='100%'>
		<?php echo smarty_function_counter(array('start' => 0,'name' => 'colCount','assign' => 'colCount'), $this);?>

		<?php $_from = $this->_tpl_vars['FIELDS']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['NAME'] => $this->_tpl_vars['DEF']):
?>
		
		<?php if (( $this->_tpl_vars['colCount'] % 4 == 0 || $this->_tpl_vars['colCount'] == 0 )): ?>
			<?php if ($this->_tpl_vars['colCount'] != 0): ?>
				</tr>
			<?php endif; ?>
			<tr>
		<?php endif; ?>
			<td scope='row'><?php echo smarty_function_sugar_translate(array('label' => $this->_tpl_vars['DEF']['label'],'module' => $this->_tpl_vars['LBL_MODULE']), $this); if ($this->_tpl_vars['DEF']['required']): ?>*<?php endif; ?>
			<?php if (count ( $this->_tpl_vars['DEF']['fields'] ) > 0): ?>
			<a id="d_<?php echo $this->_tpl_vars['NAME']; ?>
_anchor" class='link' onclick='toggleDisplay("d_<?php echo $this->_tpl_vars['NAME']; ?>
")' href='javascript:void(0)'>[+]</a><div id='d_<?php echo $this->_tpl_vars['NAME']; ?>
' style='display:none'>
				<?php $_from = $this->_tpl_vars['DEF']['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['subField'] => $this->_tpl_vars['subLabel']):
?>
				<?php echo smarty_function_sugar_translate(array('label' => $this->_tpl_vars['subLabel'],'module' => $this->_tpl_vars['FLC_MODULE']), $this);?>
<br><span class='fieldValue'>[<?php echo $this->_tpl_vars['subField']; ?>
]</span><br>
				<?php endforeach; endif; unset($_from); ?>
				</div>
			<?php endif; ?>
			</td>
			
			<td>
					<div  style="display: none" id="<?php echo $this->_tpl_vars['DEF']['key']; ?>
">
						<select  name='flc_guid<?php echo $this->_tpl_vars['DEF']['key']; ?>
' id = 'flc_guid<?php echo $this->_tpl_vars['DEF']['key']; ?>
'onblur="document.getElementById('<?php echo $this->_tpl_vars['DEF']['key']; ?>
link').innerHTML=this.options[this.selectedIndex].text; aclviewer.toggleDisplay('<?php echo $this->_tpl_vars['DEF']['key']; ?>
');" >
							<?php if (! empty ( $this->_tpl_vars['DEF']['required'] )): ?>
							<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['OPTIONS_REQUIRED'],'selected' => $this->_tpl_vars['DEF']['aclaccess']), $this);?>

							<?php else: ?>
							<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['OPTIONS'],'selected' => $this->_tpl_vars['DEF']['aclaccess']), $this);?>

							<?php endif; ?>
							
						</select>
					</div>
					<div  id="<?php echo $this->_tpl_vars['DEF']['key']; ?>
link" onclick="aclviewer.toggleDisplay('<?php echo $this->_tpl_vars['DEF']['key']; ?>
')">
						<?php if (! empty ( $this->_tpl_vars['OPTIONS'][$this->_tpl_vars['DEF']['aclaccess']] )): ?>
							<?php echo $this->_tpl_vars['OPTIONS'][$this->_tpl_vars['DEF']['aclaccess']]; ?>

						<?php else: ?>
							Not Defined
						<?php endif; ?>
					</div>
		</td>
		<?php echo smarty_function_counter(array('name' => 'colCount'), $this);?>

		<?php endforeach; endif; unset($_from); ?>
		</tr>	
</table>
<?php endif; ?>
	