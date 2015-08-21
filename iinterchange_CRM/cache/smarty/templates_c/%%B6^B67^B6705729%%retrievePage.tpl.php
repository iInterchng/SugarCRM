<?php /* Smarty version 2.6.11, created on 2014-05-08 19:15:39
         compiled from include/MySugar/tpls/retrievePage.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_getimagepath', 'include/MySugar/tpls/retrievePage.tpl', 45, false),array('function', 'counter', 'include/MySugar/tpls/retrievePage.tpl', 59, false),)), $this); ?>

<table width="100%" cellspacing="0" cellpadding="0" border="0" style="border-top: 0px none; margin-bottom: 4px;">
<tr>
<td>
<!-- BEGIN PAGE RENDERING -->
	<table cellspacing='5' cellpadding='0' border='0' valign='top' width='100%'>
	<?php if ($this->_tpl_vars['numCols'] > 1): ?>
 	<tr>
 		<?php if ($this->_tpl_vars['numCols'] > 2): ?>
	 	<td>

		</td>
	
		<td rowspan="3">
				<img src='<?php echo smarty_function_sugar_getimagepath(array('file' => 'blank.gif'), $this);?>
' width='15' height='1' border='0'>
		</td>
		<?php endif; ?>
		<?php if ($this->_tpl_vars['numCols'] > 1): ?>
		<td>

		</td>
		<td rowspan="3">
				<img src='<?php echo smarty_function_sugar_getimagepath(array('file' => 'blank.gif'), $this);?>
' width='15' height='1' border='0'>
		</td>
		<?php endif; ?>	
	</tr>
	<?php endif; ?>
	<tr>
	<?php echo smarty_function_counter(array('assign' => 'hiddenCounter','start' => 0,'print' => false), $this);?>

	<?php $_from = $this->_tpl_vars['columns']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['colNum'] => $this->_tpl_vars['data']):
?>
	<td valign='top' width=<?php echo $this->_tpl_vars['data']['width']; ?>
>
		<ul class='noBullet' id='col_<?php echo $this->_tpl_vars['selectedPage']; ?>
_<?php echo $this->_tpl_vars['colNum']; ?>
'>
			<li id='page_<?php echo $this->_tpl_vars['selectedPage']; ?>
_hidden<?php echo $this->_tpl_vars['hiddenCounter']; ?>
b' style='height: 5px' class='noBullet'>&nbsp;&nbsp;&nbsp;</li>
	        <?php $_from = $this->_tpl_vars['data']['dashlets']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['id'] => $this->_tpl_vars['dashlet']):
?>		
			<li class='noBullet' id='dashlet_<?php echo $this->_tpl_vars['id']; ?>
'>
				<div id='dashlet_entire_<?php echo $this->_tpl_vars['id']; ?>
' class='dashletPanel'>
					<?php echo $this->_tpl_vars['dashlet']['script']; ?>

					<?php echo $this->_tpl_vars['dashlet']['displayHeader']; ?>

					<?php echo $this->_tpl_vars['dashlet']['display']; ?>

					<?php echo $this->_tpl_vars['dashlet']['displayFooter']; ?>

			    </div>
			</li>
			<script>
				SUGAR.mySugar.attachToggleToolsetEvent('<?php echo $this->_tpl_vars['id']; ?>
');
			</script>
			<?php endforeach; endif; unset($_from); ?>
			<li id='page_<?php echo $this->_tpl_vars['selectedPage']; ?>
_hidden<?php echo $this->_tpl_vars['hiddenCounter']; ?>
' style='height: 5px' class='noBullet'>&nbsp;&nbsp;&nbsp;</li>
		</ul>
	</td>
	<?php echo smarty_function_counter(array(), $this);?>

	<?php endforeach; endif; unset($_from); ?>
	</tr>
	</table>
<!-- END PAGE RENDERING -->
</td>
</tr>
</table>
<script>
	<?php if (! $this->_tpl_vars['lock_homepage']): ?>
	SUGAR.mySugar.attachDashletCtrlEvent();
	<?php endif; ?>
</script>