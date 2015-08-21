<?php /* Smarty version 2.6.11, created on 2014-05-09 17:41:57
         compiled from modules/Forecasts/ListViewForecast.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', 'modules/Forecasts/ListViewForecast.tpl', 125, false),array('modifier', 'count_characters', 'modules/Forecasts/ListViewForecast.tpl', 129, false),array('modifier', 'cat', 'modules/Forecasts/ListViewForecast.tpl', 130, false),array('modifier', 'lower', 'modules/Forecasts/ListViewForecast.tpl', 132, false),array('function', 'sugar_translate', 'modules/Forecasts/ListViewForecast.tpl', 127, false),array('function', 'sugar_getimagepath', 'modules/Forecasts/ListViewForecast.tpl', 136, false),array('function', 'sugar_evalcolumn_old', 'modules/Forecasts/ListViewForecast.tpl', 179, false),)), $this); ?>

<script>

   jsonObjs = new Array();
   <?php if ($this->_tpl_vars['pageData']['urls']['startPage']): ?>
       jsonObjs[0] = <?php echo $this->_tpl_vars['startPageJSON']; ?>
;
   <?php endif; ?>

   <?php if ($this->_tpl_vars['pageData']['urls']['prevPage']): ?>
       jsonObjs[1] = <?php echo $this->_tpl_vars['prevPageJSON']; ?>
;
   <?php endif; ?>
   
   <?php if ($this->_tpl_vars['pageData']['urls']['nextPage']): ?>
       jsonObjs[2] = <?php echo $this->_tpl_vars['nextPageJSON']; ?>
;
   <?php endif; ?>   

   <?php if ($this->_tpl_vars['pageData']['urls']['endPage']): ?>

       jsonObjs[3] = <?php echo $this->_tpl_vars['endPageJSON']; ?>
;

   <?php endif; ?>

   <?php echo '
   function goToNav(index) {
   	list_nav(jsonObjs[index], \'CommitEditView\');
   }

   '; ?>

</script>

<?php if ($this->_tpl_vars['overlib']): ?>
	<script type='text/javascript' src='include/javascript/sugar_grp_overlib.js'></script>
	<div id='overDiv' style='position:absolute; visibility:hidden; z-index:1000;'></div>
	<script>var image_path="<?php echo $this->_tpl_vars['IMAGE_PATH']; ?>
";
		<?php echo ' 
		function unformat_currency(amt) {
		'; ?>
 
			var csymbol="<?php echo $this->_tpl_vars['CURRENCY_SYMBOL']; ?>
";
			var num_grp_sep="<?php echo $this->_tpl_vars['NUM_GRP_SEP']; ?>
";
			var dec_sep="<?php echo $this->_tpl_vars['DEC_SEP']; ?>
";
			return unformatNumber(amt.replace(csymbol,''),num_grp_sep,dec_sep);
		<?php echo ' 
		}
		'; ?>
 
	</script>
<?php endif; ?>



<form name="CommitEditView" id="CommitEditView" method="POST" action="index.php" >
	<input type="hidden" name="module" value="Forecasts">
	<input type="hidden" name="action" value="index">
	<input type="hidden" name="user_id" value="<?php echo $this->_tpl_vars['USER_ID']; ?>
">
	<input type="hidden" name="timeperiod_id" value="<?php echo $this->_tpl_vars['TIMEPERIOD_ID']; ?>
">
	<input type="hidden" name="forecast_type" value="<?php echo $this->_tpl_vars['FORECASTTYPE']; ?>
">
	<input type="hidden" name="commit_forecast" value="0">
	<input type="hidden" name="opp_count" value="<?php echo $this->_tpl_vars['CURRENTOPPORTUNITYCOUNT']; ?>
">
	<input type="hidden" name="opp_weigh_value" value="<?php echo $this->_tpl_vars['CURRENTWEIGHTEDVALUENUMBER']; ?>
">
	<input type="hidden" name="call_back_function" value="commit_forecast">
	<input type="hidden" name="sel_user_id" value="<?php echo $this->_tpl_vars['SEL_USER_ID']; ?>
">
	<input type="hidden" name="sel_timeperiod_id" value="<?php echo $this->_tpl_vars['SEL_TIMEPERIOD_ID']; ?>
">
	<input type="hidden" name="sel_forecast_type" value="<?php echo $this->_tpl_vars['SEL_FORECASTTYPE']; ?>
">
	<table width="100%"  border="0" cellspacing="0" cellpadding="0" >
	    <tr>			
			<td>
				<span><strong><?php echo $this->_tpl_vars['LBL_FORECAST_FOR']; ?>
</strong>&nbsp;<?php echo $this->_tpl_vars['USER_FORECAST_TYPE']; ?>
&nbsp;<strong><?php echo $this->_tpl_vars['LBL_TP_QUOTA']; ?>
</strong>&nbsp;<?php echo $this->_tpl_vars['QUOTA_VALUE']; ?>
</span>
			</td>
			<td align="right">	
				<input title="<?php echo $this->_tpl_vars['LBL_SAVE_WOKSHEET']; ?>
" class="button"  type = "button" onclick="this.form.call_back_function.value='save_worksheet';formsubmit(this.form);" name="saveworksheet" value="  <?php echo $this->_tpl_vars['LBL_SAVE_WOKSHEET']; ?>
 ">
				<input title="<?php echo $this->_tpl_vars['LBL_RESET_WOKSHEET']; ?>
" class="button"  type = "button" onclick="if (!confirm('<?php echo $this->_tpl_vars['LBL_RESET_CHECK']; ?>
')) return false;this.form.call_back_function.value='reset_worksheet';formsubmit(this.form); " name="resetworksheet" value="  <?php echo $this->_tpl_vars['LBL_RESET_WOKSHEET']; ?>
 ">
				<input title="<?php echo $this->_tpl_vars['LBL_SHOW_CHART']; ?>
" class="button"  type = "button" onclick="this.form.call_back_function.value='get_chart';get_chart(this.form)" name="getchart" value="  <?php echo $this->_tpl_vars['LBL_SHOW_CHART']; ?>
 ">
			</td>
		</tr>
	</table>
<?php if ($this->_tpl_vars['prerow']): ?>
	<?php echo $this->_tpl_vars['multiSelectData']; ?>

<?php endif; ?>
<table cellpadding='0' cellspacing='0' width='100%' border='0' class="list view">
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'include/ListView/ListViewPagination.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	

		<tr height='20'>
		<?php if ($this->_tpl_vars['prerow']): ?>
			<th scope='col'>
				<input type='checkbox' class='checkbox' id='massall' name='massall' value='' onclick='sListView.check_all(document.MassUpdate, "mass[]", this.checked);' />
			</th>
		<?php endif; ?>
		<?php $_from = $this->_tpl_vars['displayColumns']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['colHeader'] => $this->_tpl_vars['params']):
?>
		    <?php if (! $this->_tpl_vars['params']['hidden']): ?>
				<th width='<?php echo $this->_tpl_vars['params']['width']; ?>
%' align='<?php echo $this->_tpl_vars['params']['align']; ?>
' >
					<div style='white-space: nowrap;'width='100%' align='<?php echo ((is_array($_tmp=@$this->_tpl_vars['params']['align'])) ? $this->_run_mod_handler('default', true, $_tmp, 'left') : smarty_modifier_default($_tmp, 'left')); ?>
'>
					<?php if (((is_array($_tmp=@$this->_tpl_vars['params']['sortable'])) ? $this->_run_mod_handler('default', true, $_tmp, true) : smarty_modifier_default($_tmp, true))): ?>
						<a href='javascript:list_nav(<?php echo $this->_tpl_vars['params']['order_by_object']; ?>
,"CommitEditView")' class='listViewThLinkS1'><?php echo smarty_function_sugar_translate(array('label' => $this->_tpl_vars['params']['label'],'module' => $this->_tpl_vars['pageData']['bean']['moduleDir']), $this);?>

						<?php $this->assign('default_order', ((is_array($_tmp=@$this->_tpl_vars['params']['tablename'])) ? $this->_run_mod_handler('default', true, $_tmp, '') : smarty_modifier_default($_tmp, ''))); ?>
						<?php if (((is_array($_tmp=$this->_tpl_vars['default_order'])) ? $this->_run_mod_handler('count_characters', true, $_tmp) : smarty_modifier_count_characters($_tmp)) > 0): ?> 
							<?php $this->assign('default_order', ((is_array($_tmp=$this->_tpl_vars['default_order'])) ? $this->_run_mod_handler('cat', true, $_tmp, ".") : smarty_modifier_cat($_tmp, "."))); ?>
						<?php endif; ?>
						<?php $this->assign('default_order', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['default_order'])) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['colHeader']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['colHeader'])))) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp))); ?>
						<?php if (((is_array($_tmp=((is_array($_tmp=@$this->_tpl_vars['params']['orderBy'])) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_tpl_vars['default_order']) : smarty_modifier_default($_tmp, @$this->_tpl_vars['default_order'])))) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)) == $this->_tpl_vars['pageData']['ordering']['orderBy']): ?>
							<?php if ($this->_tpl_vars['pageData']['ordering']['sortOrder'] == 'ASC'): ?>
                                <?php ob_start(); ?>arrow_down.<?php echo $this->_tpl_vars['arrowExt'];  $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('imageName', ob_get_contents());ob_end_clean(); ?>
                                <img border='0' src='<?php echo smarty_function_sugar_getimagepath(array('file' => $this->_tpl_vars['imageName']), $this);?>
' width='<?php echo $this->_tpl_vars['arrowWidth']; ?>
' height='<?php echo $this->_tpl_vars['arrowHeight']; ?>
' align='absmiddle' alt='<?php echo $this->_tpl_vars['arrowAlt']; ?>
'>
							<?php else: ?>
                                <?php ob_start(); ?>arrow_up.<?php echo $this->_tpl_vars['arrowExt'];  $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('imageName', ob_get_contents());ob_end_clean(); ?>
                                <img border='0' src='<?php echo smarty_function_sugar_getimagepath(array('file' => $this->_tpl_vars['imageName']), $this);?>
' width='<?php echo $this->_tpl_vars['arrowWidth']; ?>
' height='<?php echo $this->_tpl_vars['arrowHeight']; ?>
' align='absmiddle' alt='<?php echo $this->_tpl_vars['arrowAlt']; ?>
'>
							<?php endif; ?>
						<?php else: ?>
							<?php ob_start(); ?>arrow.<?php echo $this->_tpl_vars['arrowExt'];  $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('imageName', ob_get_contents());ob_end_clean(); ?>
							<img border='0' src='<?php echo smarty_function_sugar_getimagepath(array('file' => $this->_tpl_vars['imageName']), $this);?>
' width='<?php echo $this->_tpl_vars['arrowWidth']; ?>
' height='<?php echo $this->_tpl_vars['arrowHeight']; ?>
' align='absmiddle' alt='<?php echo $this->_tpl_vars['arrowAlt']; ?>
'>
						<?php endif; ?>
						</a>
					<?php else: ?>
						<?php echo smarty_function_sugar_translate(array('label' => $this->_tpl_vars['params']['label'],'module' => $this->_tpl_vars['pageData']['bean']['moduleDir']), $this);?>

					<?php endif; ?>
					</div>
				</th>
			<?php endif; ?>
		<?php endforeach; endif; unset($_from); ?>
	</tr>
	
			
	<?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['rowIteration'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['rowIteration']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['id'] => $this->_tpl_vars['rowData']):
        $this->_foreach['rowIteration']['iteration']++;
?>
		<?php if ((1 & $this->_foreach['rowIteration']['iteration'])): ?>
			<?php $this->assign('_rowColor', $this->_tpl_vars['rowColor'][0]); ?>
		<?php else: ?>
			<?php $this->assign('_rowColor', $this->_tpl_vars['rowColor'][1]); ?>
		<?php endif; ?>
		<tr height='20' class='<?php echo $this->_tpl_vars['_rowColor']; ?>
S1'>
			<?php if ($this->_tpl_vars['prerow']): ?>
				<td><input onclick='sListView.check_item(this, document.MassUpdate)' type='checkbox' class='checkbox' name='mass[]' value='<?php echo $this->_tpl_vars['id']; ?>
'></td>
			<?php endif; ?>
			<?php $_from = $this->_tpl_vars['displayColumns']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['colIteration'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['colIteration']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['col'] => $this->_tpl_vars['params']):
        $this->_foreach['colIteration']['iteration']++;
?>
				<?php if ($this->_tpl_vars['params']['hidden']): ?>	
                   	<input type="hidden" name="<?php echo $this->_tpl_vars['col']; ?>
_<?php echo ((is_array($_tmp=@$this->_tpl_vars['rowData'][$this->_tpl_vars['params']['id']])) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_tpl_vars['rowData']['ID']) : smarty_modifier_default($_tmp, @$this->_tpl_vars['rowData']['ID'])); ?>
" id="<?php echo $this->_tpl_vars['col']; ?>
_<?php echo ((is_array($_tmp=@$this->_tpl_vars['rowData'][$this->_tpl_vars['params']['id']])) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_tpl_vars['rowData']['ID']) : smarty_modifier_default($_tmp, @$this->_tpl_vars['rowData']['ID'])); ?>
" value="<?php echo $this->_tpl_vars['rowData'][$this->_tpl_vars['col']]; ?>
">				
				<?php else: ?>
					<td scope='row' align='<?php echo ((is_array($_tmp=@$this->_tpl_vars['params']['align'])) ? $this->_run_mod_handler('default', true, $_tmp, 'left') : smarty_modifier_default($_tmp, 'left')); ?>
' valign="top">
						<?php if (($this->_foreach['colIteration']['iteration']-1) == 0): ?>
							<?php echo $this->_tpl_vars['pageData']['additionalDetails'][$this->_tpl_vars['id']]; ?>

						<?php endif; ?>
	                    <?php if ($this->_tpl_vars['params']['edit']): ?>	
	                    	<input type="text"  maxlength=10 onchange="update_adj_amount(this,'<?php echo $this->_tpl_vars['col']; ?>
_TOTAL')" name="<?php echo $this->_tpl_vars['col']; ?>
_<?php echo ((is_array($_tmp=@$this->_tpl_vars['rowData'][$this->_tpl_vars['params']['id']])) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_tpl_vars['rowData']['ID']) : smarty_modifier_default($_tmp, @$this->_tpl_vars['rowData']['ID'])); ?>
" id="<?php echo $this->_tpl_vars['col']; ?>
_<?php echo ((is_array($_tmp=@$this->_tpl_vars['rowData'][$this->_tpl_vars['params']['id']])) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_tpl_vars['rowData']['ID']) : smarty_modifier_default($_tmp, @$this->_tpl_vars['rowData']['ID'])); ?>
" old_value="<?php echo $this->_tpl_vars['rowData'][$this->_tpl_vars['col']]; ?>
" value="<?php echo $this->_tpl_vars['rowData'][$this->_tpl_vars['col']]; ?>
">
	                    <?php else: ?>			
							<?php if ($this->_tpl_vars['params']['link']): ?>
								<?php if ($this->_tpl_vars['params']['customCode']): ?>
									<?php echo smarty_function_sugar_evalcolumn_old(array('var' => $this->_tpl_vars['params']['customCode'],'rowData' => $this->_tpl_vars['rowData']), $this);?>

								<?php else: ?>
									<<?php echo $this->_tpl_vars['pageData']['tag'][$this->_tpl_vars['id']]['MAIN']; ?>
 href='index.php?action=<?php echo ((is_array($_tmp=@$this->_tpl_vars['params']['action'])) ? $this->_run_mod_handler('default', true, $_tmp, 'DetailView') : smarty_modifier_default($_tmp, 'DetailView')); ?>
&module=<?php echo ((is_array($_tmp=@$this->_tpl_vars['params']['module'])) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_tpl_vars['pageData']['bean']['moduleDir']) : smarty_modifier_default($_tmp, @$this->_tpl_vars['pageData']['bean']['moduleDir'])); ?>
&record=<?php echo ((is_array($_tmp=@$this->_tpl_vars['rowData'][$this->_tpl_vars['params']['id']])) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_tpl_vars['rowData']['ID']) : smarty_modifier_default($_tmp, @$this->_tpl_vars['rowData']['ID'])); ?>
&offset=<?php echo $this->_tpl_vars['pageData']['offsets']['current']; ?>
&stamp=<?php echo $this->_tpl_vars['pageData']['stamp']; ?>
'><?php echo $this->_tpl_vars['rowData'][$this->_tpl_vars['col']]; ?>
</<?php echo $this->_tpl_vars['pageData']['tag'][$this->_tpl_vars['id']]['MAIN']; ?>
>
								<?php endif; ?>
							<?php else: ?>
								<?php echo $this->_tpl_vars['rowData'][$this->_tpl_vars['col']]; ?>

							<?php endif; ?>
						<?php endif; ?>
					</td>
				<?php endif; ?>
			<?php endforeach; endif; unset($_from); ?>
	    	</tr>
	<?php endforeach; endif; unset($_from); ?>
		<tr class='<?php echo $this->_tpl_vars['rowColor'][0]; ?>
S1'>
		<?php if ($this->_tpl_vars['prerow']): ?>
			<td>&nbsp;</td>
		<?php endif; ?>
		<?php $_from = $this->_tpl_vars['displayColumns']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['col'] => $this->_tpl_vars['params']):
?>
			<?php if (! $this->_tpl_vars['params']['hidden']): ?>
				<td align='<?php echo ((is_array($_tmp=@$this->_tpl_vars['params']['align'])) ? $this->_run_mod_handler('default', true, $_tmp, 'left') : smarty_modifier_default($_tmp, 'left')); ?>
' valign='top'>
				<div style='white-space: nowrap;'width='100%' align='<?php echo ((is_array($_tmp=@$this->_tpl_vars['params']['align'])) ? $this->_run_mod_handler('default', true, $_tmp, 'left') : smarty_modifier_default($_tmp, 'left')); ?>
'>
				<span id="<?php echo $this->_tpl_vars['col']; ?>
_TOTAL_DISPLAY"><?php echo $this->_tpl_vars['totals'][$this->_tpl_vars['col']]; ?>
</span>
				<input type=hidden id="<?php echo $this->_tpl_vars['col']; ?>
_TOTAL" value="<?php echo $this->_tpl_vars['totals'][$this->_tpl_vars['col']]; ?>
"></div></td>		
			
			<?php endif; ?>
		<?php endforeach; endif; unset($_from); ?>
	</tr>	
</table>
<BR/>
<?php if ($this->_tpl_vars['prerow']): ?>
<a href='javascript:sListView.check_all(document.MassUpdate, "mass[]", false);'><?php echo $this->_tpl_vars['clearAll']; ?>
</a>
<?php endif; ?>
	<table width="100%" border="0" cellspacing="0" cellpadding="0" >
	    <tr>
			<td  width="30%" scope="row"><?php echo $this->_tpl_vars['LBL_DV_LAST_COMMIT_DATE']; ?>
&nbsp;<?php echo $this->_tpl_vars['PREV_COMMIT_DATE']; ?>
</td>
			<td  width="23%" scope="row"><?php echo $this->_tpl_vars['LBL_BEST_CASE']; ?>
&nbsp;<?php echo $this->_tpl_vars['PREV_BEST_CASE']; ?>
</td>
			<td  width="23%" scope="row"><?php echo $this->_tpl_vars['LBL_LIKELY_CASE']; ?>
&nbsp;<?php echo $this->_tpl_vars['PREV_LIKELY_CASE']; ?>
</td>
			<td  width="23%" scope="row"><?php echo $this->_tpl_vars['LBL_WORST_CASE']; ?>
&nbsp;<?php echo $this->_tpl_vars['PREV_WORST_CASE']; ?>
</td>
		</tr>
<?php if ($this->_tpl_vars['commit_allowed']): ?>
		<tr>
			<td scope="row" ><?php echo $this->_tpl_vars['LBL_COMMIT_NOTE']; ?>
</td>
			<td scope="row" ><?php echo $this->_tpl_vars['LBL_BEST_CASE']; ?>
&nbsp;<input id='commit_best_case' name='best_case'  maxlength='10' size=10  type="text" value="<?php echo $this->_tpl_vars['COMMITVALUEBEST']; ?>
"></td>
			<td scope="row" ><?php echo $this->_tpl_vars['LBL_LIKELY_CASE']; ?>
&nbsp;<input id='commit_likely_case' name='likely_case'   maxlength='10' size=10 type="text" value="<?php echo $this->_tpl_vars['COMMITVALUELIKELY']; ?>
"></td>
			<td scope="row" ><?php echo $this->_tpl_vars['LBL_WORST_CASE']; ?>
&nbsp;<input id='commit_worst_case' name='worst_case'   maxlength='10' size=10 type="text" value="<?php echo $this->_tpl_vars['COMMITVALUEWORST']; ?>
"></td>
		</tr>
    	<tr>	
    		<td colspan=3 scope="row">&nbsp;</td>	
			<td align="right" scope="row"><?php echo $this->_tpl_vars['COPY_LINK']; ?>
&nbsp;<input title="<?php echo $this->_tpl_vars['LBL_QC_COMMIT_BUTTON']; ?>
" class="button"  type = "button" onclick="if (commitverify(this.form,'<?php echo $this->_tpl_vars['ERR_FORECAST_AMOUNT']; ?>
','<?php echo $this->_tpl_vars['LBL_COMMIT_MESSAGE']; ?>
'))  formsubmit(this.form);" name="rollupcommit" value="<?php echo $this->_tpl_vars['LBL_QC_COMMIT_BUTTON']; ?>
" id='btn_commit'></td>
		</tr>		
<?php endif; ?>

	</table>
</form>