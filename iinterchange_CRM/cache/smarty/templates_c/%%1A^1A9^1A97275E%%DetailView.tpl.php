<?php /* Smarty version 2.6.11, created on 2014-05-09 17:41:57
         compiled from modules/Forecasts/DetailView.tpl */ ?>

<?php echo $this->_tpl_vars['SITEURL']; ?>

<?php echo $this->_tpl_vars['TREEHEADER']; ?>

<SCRIPT type='text/javascript' src='modules/Forecasts/forecast.js'></SCRIPT>
	<form action="index.php" method="post"  id="form">
		<input type="hidden" name="module" value="Forecasts">
		<input type="hidden" name="action" value="index">
		<input type="hidden" name="isDuplicate" value="0">
		<input type="hidden" name="timeperiod_id" >
			 <?php echo $this->_tpl_vars['LBL_DV_TIMEPERIODS']; ?>
&nbsp;<select name="timeperiod_id" onchange="this.form.timeperiod_id.value=this.value;this.form.submit();" class="dataField"><?php echo $this->_tpl_vars['CURRENT_TIMEPERIODS']; ?>
</select>&nbsp;
			 <?php echo $this->_tpl_vars['TP_START_DATE']; ?>
&nbsp;<?php echo $this->_tpl_vars['TP_END_DATE']; ?>

	</form>			 
<br/>
<table width="100%" cellpadding="0" cellspacing="0" border="<?php echo $this->_tpl_vars['BORDER']; ?>
" id="forecastsWorksheet">
<tr>
	<td width="<?php echo $this->_tpl_vars['TREE_WIDTH']; ?>
" valign="top"  >
		<div id="activetimeperiods">
			<?php echo $this->_tpl_vars['TREEINSTANCE']; ?>

		</div>
	</td>
	<td id="activetimeperiodsworksheet" valign="top">
		<?php echo $this->_tpl_vars['FORECASTDATA']; ?>

	</td>
</tr>
</table>