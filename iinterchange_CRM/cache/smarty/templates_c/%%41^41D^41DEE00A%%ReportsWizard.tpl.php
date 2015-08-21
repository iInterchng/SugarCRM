<?php /* Smarty version 2.6.11, created on 2014-05-09 17:25:16
         compiled from modules/Reports/ReportsWizard.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_getimagepath', 'modules/Reports/ReportsWizard.tpl', 8, false),array('function', 'sugar_getjspath', 'modules/Reports/ReportsWizard.tpl', 13, false),array('function', 'counter', 'modules/Reports/ReportsWizard.tpl', 130, false),)), $this); ?>
<?php echo $this->_tpl_vars['chartResources']; ?>

<div id='progress_div' ></div>
<script>
document.getElementById('progress_div').innerHTML = '<img src="<?php echo smarty_function_sugar_getimagepath(array('file' => "bar_loader.gif"), $this);?>
">';
</script>


<script type="text/javascript" src="<?php echo $this->_tpl_vars['cache_path']; ?>
modules/modules_def_<?php echo $this->_tpl_vars['LANG']; ?>
_<?php echo $this->_tpl_vars['USER_ID_MD5']; ?>
.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo smarty_function_sugar_getjspath(array('file' => 'include/ytree/TreeView/css/folders/tree.css'), $this);?>
" />
<link rel="stylesheet" type="text/css" href="<?php echo smarty_function_sugar_getjspath(array('file' => 'modules/Reports/tpls/reports.css'), $this);?>
" />
<script type="text/javascript" src="<?php echo smarty_function_sugar_getjspath(array('file' => 'include/javascript/reports.js'), $this);?>
"></script>
<script type="text/javascript" src="<?php echo smarty_function_sugar_getjspath(array('file' => 'include/javascript/sugar_grp_yui_widgets.js'), $this);?>
"></script>
<script type="text/javascript" src="<?php echo smarty_function_sugar_getjspath(array('file' => 'include/javascript/FiltersWidget.js'), $this);?>
"></script>
<script type="text/javascript" src="<?php echo smarty_function_sugar_getjspath(array('file' => 'include/JSON.js'), $this);?>
"></script>
<script type="text/javascript" src="<?php echo smarty_function_sugar_getjspath(array('file' => 'include/javascript/sugar_grp_overlib.js'), $this);?>
"></script>
<script type="text/javascript" src="<?php echo smarty_function_sugar_getjspath(array('file' => 'include/SugarFields/Fields/Teamset/Teamset.js'), $this);?>
"></script>
<!--
<style>
.x-tree-node-collapsed .x-tree-node-icon<?php echo '{'; ?>

	background-image:url(<?php echo $this->_tpl_vars['IMG']; ?>
blank.gif);<?php echo '}'; ?>

.x-tree-node-expanded .x-tree-node-icon<?php echo '{'; ?>

	background-image:url(<?php echo $this->_tpl_vars['IMG']; ?>
blank.gif);<?php echo '}'; ?>

</style>
-->
<form name="ReportsWizardForm" id="ReportsWizardForm" method="post" action="index.php">
	<input type="hidden" name="module" value="Reports">
	<input type="hidden" name="current_module" value="">
	<input type="hidden" name="page" value="report">
	<input type="hidden" name="action" value="ReportsWizard">
	<input type="hidden" id="return_module" name="return_module" value="Reports">
	<input type="hidden" id="return_action" name="return_action" value="ReportsWizardType">
	<input type="hidden" name="run_query" value="0">
	<input type="hidden" name="save_and_run_query" value="0">
	<input type="hidden" name="current_step" value="<?php echo $this->_tpl_vars['current_step']; ?>
">
	<input type="hidden" name="record" value="<?php echo $this->_tpl_vars['record']; ?>
">
	<input type="hidden" name="save_report" value="0">
	<input type="hidden" name="is_delete" value="0">
	<input type="hidden" name="report_def">
	<input type="hidden" name="panels_def">
	<input type="hidden" name="filters_defs">
	<input type="hidden" name='expanded_combo_summary_divs' id='expanded_combo_summary_divs' value=''>
	<input type="hidden" name='report_offset' value ="<?php echo $this->_tpl_vars['report_offset']; ?>
">	
	<input type="hidden" name='sort_by' value ="<?php echo $this->_tpl_vars['sort_by']; ?>
">
	<input type="hidden" name='sort_dir' value ="<?php echo $this->_tpl_vars['sort_dir']; ?>
">
	<input type="hidden" name='summary_sort_by' value ="<?php echo $this->_tpl_vars['summary_sort_by']; ?>
">
	<input type="hidden" name='summary_sort_dir' value ="<?php echo $this->_tpl_vars['summary_sort_dir']; ?>
">
	
	<div id='wizard_outline_div' width='20%' >
	</div>
	<div id='report_type_div' style='display:none' class="edit view reportwizard">
		<table width="100%" border="0" cellspacing="1" cellpadding="0" >	
			<tr>
				<td colspan=4 ><?php echo $this->_tpl_vars['MOD']['LBL_SELECT_REPORT_TYPE']; ?>
<br><br>
				</td>
			</tr>		
			<tr valign="top">
				<td width="35%">
					<table  border="0" cellspacing="2" cellpadding="0" >	
						<tr valign='top'>
							<td><img src="<?php echo smarty_function_sugar_getimagepath(array('file' => 'RowsAndColumns.gif'), $this);?>
" name="rowsColsImg" onclick="SUGAR.reports.selectReportType('tabular');"
								onMouseOver="document.rowsColsImg.src='<?php echo smarty_function_sugar_getimagepath(array('file' => 'RowsAndColumnsOver.gif'), $this);?>
'"
								onMouseOut="document.rowsColsImg.src='<?php echo smarty_function_sugar_getimagepath(array('file' => 'RowsAndColumns.gif'), $this);?>
'"></td>
							<td>&nbsp;&nbsp;</td>
							<td class="buttonText"><b><?php echo $this->_tpl_vars['MOD']['LBL_ROWS_AND_COLUMNS_REPORT']; ?>
</b><br/>
								<?php echo $this->_tpl_vars['MOD']['LBL_ROWS_AND_COLUMNS_REPORT_DESC']; ?>

							</td>
						</tr>
						<tr>
							<td colspan=2>&nbsp;</td>
						</tr>
						<tr valign='top'>
							<td><img src="<?php echo smarty_function_sugar_getimagepath(array('file' => 'Summation.gif'), $this);?>
" name="summationImg" onclick="SUGAR.reports.selectReportType('summation');"
								onMouseOver="document.summationImg.src='<?php echo smarty_function_sugar_getimagepath(array('file' => 'SummationOver.gif'), $this);?>
'"
								onMouseOut="document.summationImg.src='<?php echo smarty_function_sugar_getimagepath(array('file' => 'Summation.gif'), $this);?>
'"></td>
							<td>&nbsp;&nbsp;</td>
							<td class="buttonText"><b><?php echo $this->_tpl_vars['MOD']['LBL_SUMMATION_REPORT']; ?>
</b><br/>
								<?php echo $this->_tpl_vars['MOD']['LBL_SUMMATION_REPORT_DESC']; ?>

							</td>
						</tr>
					</table>
				</td>
				<td width="10%">&nbsp;</td>
				<td width="35%">
					<table  border="0" cellspacing="2" cellpadding="0">	
						<tr valign='top'>
							<td><img src="<?php echo smarty_function_sugar_getimagepath(array('file' => 'SummationWithDetails.gif'), $this);?>
" name="summationWithDetailsImg" onclick="SUGAR.reports.selectReportType('summation_with_details');"
								onMouseOver="document.summationWithDetailsImg.src='<?php echo smarty_function_sugar_getimagepath(array('file' => 'SummationWithDetailsOver.gif'), $this);?>
'"
								onMouseOut="document.summationWithDetailsImg.src='<?php echo smarty_function_sugar_getimagepath(array('file' => 'SummationWithDetails.gif'), $this);?>
'"></td>
							<td>&nbsp;&nbsp;</td>
							<td class="buttonText"><b><?php echo $this->_tpl_vars['MOD']['LBL_SUMMATION_REPORT_WITH_DETAILS']; ?>
</b><br/>
								<?php echo $this->_tpl_vars['MOD']['LBL_SUMMATION_REPORT_WITH_DETAILS_DESC']; ?>

							</td>
						</tr>
						<tr>
							<td colspan=2>&nbsp;</td>
						</tr>

						<tr valign='top'>
							<td><img src="<?php echo smarty_function_sugar_getimagepath(array('file' => 'MatrixReport.gif'), $this);?>
" name="matrixImg" onclick="SUGAR.reports.selectReportType('summation', true);"
								onMouseOver="document.matrixImg.src='<?php echo smarty_function_sugar_getimagepath(array('file' => 'MatrixReportOver.gif'), $this);?>
'"
								onMouseOut="document.matrixImg.src='<?php echo smarty_function_sugar_getimagepath(array('file' => 'MatrixReport.gif'), $this);?>
'"></td>
							<td>&nbsp;&nbsp;</td>
							<td class="buttonText"><b><?php echo $this->_tpl_vars['MOD']['LBL_MATRIX_REPORT']; ?>
</b><br/>
								<?php echo $this->_tpl_vars['MOD']['LBL_MATRIX_REPORT_DESC']; ?>

							</td>
						</tr>
					</table>
				</td>				
				<td width="20%">&nbsp;</td>
			</tr>
		</table>
		
		<br/>
	</div>
	
	
	<div id='module_select_div' style="display:none" class="edit view reportwizard">
		<table width="100%" border="0" cellspacing="1" cellpadding="0" >	
			<tr>
				<td  colspan="6"><?php echo $this->_tpl_vars['MOD']['LBL_SELECT_MODULE_BUTTON']; ?>
<br><br>
				</td>
			</tr>
			<tr>
				<td>
					<table width="90%" id='buttons_table'>
							<?php echo smarty_function_counter(array('start' => 0,'name' => 'buttonCounter','print' => false,'assign' => 'buttonCounter'), $this);?>

							<?php $_from = $this->_tpl_vars['BUTTONS']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['button']):
?>
								<?php if ($this->_tpl_vars['buttonCounter'] > 5): ?>
									</tr><tr>
									<?php echo smarty_function_counter(array('start' => 0,'name' => 'buttonCounter','print' => false,'assign' => 'buttonCounter'), $this);?>

								<?php endif; ?>
								<td width="16%" style="padding: 5px;"  valign="top" id='buttons_td'>
								     <table class='wizardButton' onclick='SUGAR.reports.moduleButtonClick("<?php echo $this->_tpl_vars['button']['key']; ?>
", this);' onmousedown="" onmouseout="" width="60%" border='1' id='<?php echo $this->_tpl_vars['button']['name']; ?>
'>
								         <tr>
											<td align="left" width='50%'><a class='studiolink' href="javascript:void(0)" >
												<?php if ($this->_tpl_vars['button']['alt']): ?>
													<?php echo $this->_tpl_vars['button']['alt']; ?>

												<?php else: ?>
													<img border="0" src='<?php echo $this->_tpl_vars['button']['img']; ?>
'>			
												<?php endif; ?>
												</a>
											</td>
											 <td align="left" width='50%' valign="middle"><a class='studiolink' href="javascript:void(0)" onclick=""><?php echo $this->_tpl_vars['button']['name']; ?>
</a></td>

										 </tr>
									 </table>
								</td>
								<?php echo smarty_function_counter(array('name' => 'buttonCounter'), $this);?>

							<?php endforeach; endif; unset($_from); ?>
					</table>
				</td>
			</tr>
		</table>
	
		<br/>
	</div>	
	<div id='filters_div' style="display:none">
		<table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin-bottom: 20px;">
			<tr>
				<td align='left'><input type='button' title="<?php echo $this->_tpl_vars['MOD']['LBL_PREVIOUS']; ?>
" class="button" name="<?php echo $this->_tpl_vars['MOD']['LBL_PREVIOUS']; ?>
" value="<?php echo $this->_tpl_vars['MOD']['LBL_PREVIOUS']; ?>
" 
					onClick='SUGAR.reports.showWizardStep(1);'>&nbsp;&nbsp;<input type='button' title="<?php echo $this->_tpl_vars['MOD']['LBL_NEXT']; ?>
" class="button" name="<?php echo $this->_tpl_vars['MOD']['LBL_NEXT']; ?>
" value="<?php echo $this->_tpl_vars['MOD']['LBL_NEXT']; ?>
" 
					onClick='SUGAR.reports.showWizardStep(0);'><?php if ($this->_tpl_vars['RUN_QUERY'] == 1 || $this->_tpl_vars['id'] || $this->_tpl_vars['record']): ?>&nbsp;&nbsp;<input type='button' title="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_LABEL']; ?>
" class="button" name="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_LABEL']; ?>
" value="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_LABEL']; ?>
" 
					onClick='SUGAR.reports.saveReport();'>&nbsp;&nbsp;<input type='button' title="<?php echo $this->_tpl_vars['MOD']['LBL_PREVIEW_REPORT']; ?>
" class="button" name="<?php echo $this->_tpl_vars['MOD']['LBL_PREVIEW_REPORT']; ?>
" value="<?php echo $this->_tpl_vars['MOD']['LBL_PREVIEW_REPORT']; ?>
" 
					onClick='SUGAR.reports.previewReport();'><?php endif;  if ($this->_tpl_vars['record']): ?>&nbsp;&nbsp;<input type='button' title="<?php echo $this->_tpl_vars['MOD']['LBL_SAVE_RUN']; ?>
" class="button" name="<?php echo $this->_tpl_vars['MOD']['LBL_SAVE_RUN']; ?>
" value="<?php echo $this->_tpl_vars['MOD']['LBL_SAVE_RUN']; ?>
" 
					onClick='SUGAR.reports.runReport();'><?php endif;  if ($this->_tpl_vars['record'] && ( $this->_tpl_vars['IS_ADMIN'] == 1 || $this->_tpl_vars['IS_OWNER'] == 1 )): ?>&nbsp;&nbsp;<input type='button' title="<?php echo $this->_tpl_vars['APP']['LBL_DELETE_BUTTON_LABEL']; ?>
" class="button" name="<?php echo $this->_tpl_vars['APP']['LBL_DELETE_BUTTON_LABEL']; ?>
" value="<?php echo $this->_tpl_vars['APP']['LBL_DELETE_BUTTON_LABEL']; ?>
" 
					onClick='SUGAR.reports.deleteReport();'><?php endif; ?>&nbsp;&nbsp;<input type='button' title="<?php echo $this->_tpl_vars['MOD']['LBL_CANCEL']; ?>
" class="button" name="<?php echo $this->_tpl_vars['MOD']['LBL_CANCEL']; ?>
" value="<?php echo $this->_tpl_vars['MOD']['LBL_CANCEL']; ?>
" 
					onClick='document.location.href = "index.php?module=Reports&action=index&query=true&clear_query=true"'></td>				
			</tr>
		</table>	
		</br>
		<table width="100%" border="0" cellspacing="1" cellpadding="0" >	
			<tr>
				<td  width="15%" valign='top'>
					<div id="leftlayout" style="z-index:100;height:610px; width:202px;">
						<div id="module_tree_panel" style="height:260px; width:200px;">
						</div>
						<div id="autocomplete" style="width:200px;">
							<div class="autocompletewrapper">
							<input id="dt_input" size="23" style="width: 135px !important;" type="text"/>
							<input type="button" style="width: 45px;" id="clearButton" class="button" value="<?php echo $this->_tpl_vars['MOD']['LBL_CLEAR']; ?>
" name="<?php echo $this->_tpl_vars['MOD']['LBL_CLEAR']; ?>
" title="<?php echo $this->_tpl_vars['MOD']['LBL_CLEAR']; ?>
" />				    			
							<div id="dt_ac_container"></div> 
			    			</div>
						</div> 
						<div id="module_fields_panel" style="width:200px; float: left;">
						</div>
					</div>
				</td>
				<!--<td  width="10px" valign='top'>&nbsp;</td>-->
				<td id='filters_td' style="padding-bottom: 2px;" valign="top">
					<div id='filter_designer_div'></div>
					<div id='group_by_div' style="display:none">
						<div id='group_by_panel'>
						</div>
					</div>						
					<div id='display_summaries_div' style="display:none">
						<div id='display_summaries_panel'>
						</div>
					</div>						
					<div id='display_cols_div' style="display:none">
						<div id='display_cols_panel'>
						</div>
					</div>					
				</td>


			</tr>
		</table>
		<br/>
		<table width="100%" border="0" cellspacing="0" cellpadding="0" >
			<tr>
				<td align='left'><input type='button' title="<?php echo $this->_tpl_vars['MOD']['LBL_PREVIOUS']; ?>
" class="button" name="<?php echo $this->_tpl_vars['MOD']['LBL_PREVIOUS']; ?>
" value="<?php echo $this->_tpl_vars['MOD']['LBL_PREVIOUS']; ?>
" 
					onClick='SUGAR.reports.showWizardStep(1);'>&nbsp;&nbsp;<input type='button' title="<?php echo $this->_tpl_vars['MOD']['LBL_NEXT']; ?>
" class="button" name="<?php echo $this->_tpl_vars['MOD']['LBL_NEXT']; ?>
" value="<?php echo $this->_tpl_vars['MOD']['LBL_NEXT']; ?>
" 
					onClick='SUGAR.reports.showWizardStep(0);'><?php if ($this->_tpl_vars['RUN_QUERY'] == 1 || $this->_tpl_vars['id'] || $this->_tpl_vars['record']): ?>&nbsp;&nbsp;<input type='button' title="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_LABEL']; ?>
" class="button" name="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_LABEL']; ?>
" value="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_LABEL']; ?>
" 
					onClick='SUGAR.reports.saveReport();'>&nbsp;&nbsp;<input type='button' title="<?php echo $this->_tpl_vars['MOD']['LBL_PREVIEW_REPORT']; ?>
" class="button" name="<?php echo $this->_tpl_vars['MOD']['LBL_PREVIEW_REPORT']; ?>
" value="<?php echo $this->_tpl_vars['MOD']['LBL_PREVIEW_REPORT']; ?>
" 
					onClick='SUGAR.reports.previewReport();'><?php endif;  if ($this->_tpl_vars['record']): ?>&nbsp;&nbsp;<input type='button' title="<?php echo $this->_tpl_vars['MOD']['LBL_SAVE_RUN']; ?>
" class="button" name="<?php echo $this->_tpl_vars['MOD']['LBL_SAVE_RUN']; ?>
" value="<?php echo $this->_tpl_vars['MOD']['LBL_SAVE_RUN']; ?>
" 
					onClick='SUGAR.reports.runReport();'><?php endif;  if ($this->_tpl_vars['record'] && ( $this->_tpl_vars['IS_ADMIN'] == 1 || $this->_tpl_vars['IS_OWNER'] == 1 )): ?>&nbsp;&nbsp;<input type='button' title="<?php echo $this->_tpl_vars['APP']['LBL_DELETE_BUTTON_LABEL']; ?>
" class="button" name="<?php echo $this->_tpl_vars['APP']['LBL_DELETE_BUTTON_LABEL']; ?>
" value="<?php echo $this->_tpl_vars['APP']['LBL_DELETE_BUTTON_LABEL']; ?>
" 
					onClick='SUGAR.reports.deleteReport();'><?php endif; ?>&nbsp;&nbsp;<input type='button' title="<?php echo $this->_tpl_vars['MOD']['LBL_CANCEL']; ?>
" class="button" name="<?php echo $this->_tpl_vars['MOD']['LBL_CANCEL']; ?>
" value="<?php echo $this->_tpl_vars['MOD']['LBL_CANCEL']; ?>
" 
					onClick='document.location.href = "index.php?module=Reports&action=index&query=true&clear_query=true"'></td>				
			</tr>
		</table>	
	</div>
	<div id='chart_options_div' style="display:none">
		<table width="100%" border="0" cellspacing="0" cellpadding="0" >
			<tr>
				<td align='left'><input type='button' title="<?php echo $this->_tpl_vars['MOD']['LBL_PREVIOUS']; ?>
" class="button" name="<?php echo $this->_tpl_vars['MOD']['LBL_PREVIOUS']; ?>
" value="<?php echo $this->_tpl_vars['MOD']['LBL_PREVIOUS']; ?>
" 
					onClick='SUGAR.reports.showWizardStep(1);'>&nbsp;&nbsp;<input type='button' title="<?php echo $this->_tpl_vars['MOD']['LBL_NEXT']; ?>
" class="button" name="<?php echo $this->_tpl_vars['MOD']['LBL_NEXT']; ?>
" value="<?php echo $this->_tpl_vars['MOD']['LBL_NEXT']; ?>
" 
					onClick='SUGAR.reports.showWizardStep(0);'><?php if ($this->_tpl_vars['RUN_QUERY'] == 1 || $this->_tpl_vars['id'] || $this->_tpl_vars['record']): ?>&nbsp;&nbsp;<input type='button' title="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_LABEL']; ?>
" class="button" name="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_LABEL']; ?>
" value="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_LABEL']; ?>
" 
					onClick='SUGAR.reports.saveReport();'>&nbsp;&nbsp;<input type='button' title="<?php echo $this->_tpl_vars['MOD']['LBL_PREVIEW_REPORT']; ?>
" class="button" name="<?php echo $this->_tpl_vars['MOD']['LBL_PREVIEW_REPORT']; ?>
" value="<?php echo $this->_tpl_vars['MOD']['LBL_PREVIEW_REPORT']; ?>
" 
					onClick='SUGAR.reports.previewReport();'><?php endif;  if ($this->_tpl_vars['record']): ?>&nbsp;&nbsp;<input type='button' title="<?php echo $this->_tpl_vars['MOD']['LBL_SAVE_RUN']; ?>
" class="button" name="<?php echo $this->_tpl_vars['MOD']['LBL_SAVE_RUN']; ?>
" value="<?php echo $this->_tpl_vars['MOD']['LBL_SAVE_RUN']; ?>
" 
					onClick='SUGAR.reports.runReport();'><?php endif;  if ($this->_tpl_vars['record'] && ( $this->_tpl_vars['IS_ADMIN'] == 1 || $this->_tpl_vars['IS_OWNER'] == 1 )): ?>&nbsp;&nbsp;<input type='button' title="<?php echo $this->_tpl_vars['APP']['LBL_DELETE_BUTTON_LABEL']; ?>
" class="button" name="<?php echo $this->_tpl_vars['APP']['LBL_DELETE_BUTTON_LABEL']; ?>
" value="<?php echo $this->_tpl_vars['APP']['LBL_DELETE_BUTTON_LABEL']; ?>
" 
					onClick='SUGAR.reports.deleteReport();'><?php endif; ?>&nbsp;&nbsp;<input type='button' title="<?php echo $this->_tpl_vars['MOD']['LBL_CANCEL']; ?>
" class="button" name="<?php echo $this->_tpl_vars['MOD']['LBL_CANCEL']; ?>
" value="<?php echo $this->_tpl_vars['MOD']['LBL_CANCEL']; ?>
" 
					onClick='document.location.href = "index.php?module=Reports&action=index&query=true&clear_query=true"'></td>				
			</tr>
		</table>	
		</br>
        <div class="edit view">
		<table width="100%" border="0" cellspacing="1" cellpadding="0" >	
			<tr>
				<td id="no_chart_text" colspan=2><?php echo $this->_tpl_vars['MOD']['LBL_GROUP_BY_REQUIRED']; ?>
<br/></td>
			</tr>
			<tr>
				<td scope="row" width='20%'><?php echo $this->_tpl_vars['MOD']['LBL_CHART_TYPE']; ?>
:</td>
				<td align=left>
					<select name='chart_type' id='chart_type'>
					<?php $_from = $this->_tpl_vars['chart_types']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['thekey'] => $this->_tpl_vars['theval']):
?>
						<option value="<?php echo $this->_tpl_vars['thekey']; ?>
"><?php echo $this->_tpl_vars['theval']; ?>
</option>
					<?php endforeach; endif; unset($_from); ?>
					</select>
				</td>
			</tr>
			<tr>
				<td scope="row"><?php echo $this->_tpl_vars['MOD']['LBL_USE_COLUMN_FOR']; ?>
:<?php echo $this->_tpl_vars['chart_data_help']; ?>
</td>
				<td align=left>
					<select name='numerical_chart_column'>
					</select>
					<input type='hidden' name='numerical_chart_column_type'>
				</td>
			</tr>
			<tr>
				<td scope="row"><?php echo $this->_tpl_vars['MOD']['LBL_CHART_DESCRIPTION']; ?>
:</td>
				<td align=left>
					<input name='chart_description' size='50' value="<?php echo $this->_tpl_vars['chart_description']; ?>
" maxsize="255"/>
				</td>
			</tr>
			<tr>
				<td scope="row"><?php echo $this->_tpl_vars['MOD']['LBL_DO_ROUND']; ?>
:<?php echo $this->_tpl_vars['do_round_help']; ?>
</td>
				<td align=left>
					<input type="checkbox" class="checkbox" name="do_round"  <?php if (( $this->_tpl_vars['do_round'] )): ?>CHECKED<?php endif; ?>>
				</td>
			</tr>			
		</table>
        </div>
		<br/>
		<table width="100%" border="0" cellspacing="0" cellpadding="0" >
			<tr>
				<td align='left'><input type='button' title="<?php echo $this->_tpl_vars['MOD']['LBL_PREVIOUS']; ?>
" class="button" name="<?php echo $this->_tpl_vars['MOD']['LBL_PREVIOUS']; ?>
" value="<?php echo $this->_tpl_vars['MOD']['LBL_PREVIOUS']; ?>
" 
					onClick='SUGAR.reports.showWizardStep(1);'>&nbsp;&nbsp;<input type='button' title="<?php echo $this->_tpl_vars['MOD']['LBL_NEXT']; ?>
" class="button" name="<?php echo $this->_tpl_vars['MOD']['LBL_NEXT']; ?>
" value="<?php echo $this->_tpl_vars['MOD']['LBL_NEXT']; ?>
" 
					onClick='SUGAR.reports.showWizardStep(0);'><?php if ($this->_tpl_vars['RUN_QUERY'] == 1 || $this->_tpl_vars['id'] || $this->_tpl_vars['record']): ?>&nbsp;&nbsp;<input type='button' title="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_LABEL']; ?>
" class="button" name="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_LABEL']; ?>
" value="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_LABEL']; ?>
" 
					onClick='SUGAR.reports.saveReport();'>&nbsp;&nbsp;<input type='button' title="<?php echo $this->_tpl_vars['MOD']['LBL_PREVIEW_REPORT']; ?>
" class="button" name="<?php echo $this->_tpl_vars['MOD']['LBL_PREVIEW_REPORT']; ?>
" value="<?php echo $this->_tpl_vars['MOD']['LBL_PREVIEW_REPORT']; ?>
" 
					onClick='SUGAR.reports.previewReport();'><?php endif;  if ($this->_tpl_vars['record']): ?>&nbsp;&nbsp;<input type='button' title="<?php echo $this->_tpl_vars['MOD']['LBL_SAVE_RUN']; ?>
" class="button" name="<?php echo $this->_tpl_vars['MOD']['LBL_SAVE_RUN']; ?>
" value="<?php echo $this->_tpl_vars['MOD']['LBL_SAVE_RUN']; ?>
" 
					onClick='SUGAR.reports.runReport();'><?php endif;  if ($this->_tpl_vars['record'] && ( $this->_tpl_vars['IS_ADMIN'] == 1 || $this->_tpl_vars['IS_OWNER'] == 1 )): ?>&nbsp;&nbsp;<input type='button' title="<?php echo $this->_tpl_vars['APP']['LBL_DELETE_BUTTON_LABEL']; ?>
" class="button" name="<?php echo $this->_tpl_vars['APP']['LBL_DELETE_BUTTON_LABEL']; ?>
" value="<?php echo $this->_tpl_vars['APP']['LBL_DELETE_BUTTON_LABEL']; ?>
" 
					onClick='SUGAR.reports.deleteReport();'><?php endif; ?>&nbsp;&nbsp;<input type='button' title="<?php echo $this->_tpl_vars['MOD']['LBL_CANCEL']; ?>
" class="button" name="<?php echo $this->_tpl_vars['MOD']['LBL_CANCEL']; ?>
" value="<?php echo $this->_tpl_vars['MOD']['LBL_CANCEL']; ?>
" 
					onClick='document.location.href = "index.php?module=Reports&action=index&query=true&clear_query=true"'></td>				
			</tr>
		</table>	
	</div>	
	<div id='report_details_div' style="display:none">
		<table  width='100%' border="0" cellspacing="0" cellpadding="0" >
			<tr>
				<td align='left'><input type='button' title="<?php echo $this->_tpl_vars['MOD']['LBL_PREVIOUS']; ?>
" class="button" name="<?php echo $this->_tpl_vars['MOD']['LBL_PREVIOUS']; ?>
" value="<?php echo $this->_tpl_vars['MOD']['LBL_PREVIOUS']; ?>
" 
					onClick='SUGAR.reports.showWizardStep(1);'>&nbsp;&nbsp;<input type='button' title="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_LABEL']; ?>
" class="button" name="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_LABEL']; ?>
" value="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_LABEL']; ?>
" 
					onClick='SUGAR.reports.saveReport();'>&nbsp;&nbsp;<input type='button' title="<?php echo $this->_tpl_vars['MOD']['LBL_PREVIEW_REPORT']; ?>
" class="button" name="<?php echo $this->_tpl_vars['MOD']['LBL_PREVIEW_REPORT']; ?>
" value="<?php echo $this->_tpl_vars['MOD']['LBL_PREVIEW_REPORT']; ?>
" 
					onClick='SUGAR.reports.previewReport();'>&nbsp;&nbsp;<input type='button' title="<?php echo $this->_tpl_vars['MOD']['LBL_SAVE_RUN']; ?>
" class="button" name="<?php echo $this->_tpl_vars['MOD']['LBL_SAVE_RUN']; ?>
" value="<?php echo $this->_tpl_vars['MOD']['LBL_SAVE_RUN']; ?>
" 
					onClick='SUGAR.reports.runReport();'><?php if ($this->_tpl_vars['record'] && ( $this->_tpl_vars['IS_ADMIN'] == 1 || $this->_tpl_vars['IS_OWNER'] == 1 )): ?>&nbsp;&nbsp;<input type='button' title="<?php echo $this->_tpl_vars['APP']['LBL_DELETE_BUTTON_LABEL']; ?>
" class="button" name="<?php echo $this->_tpl_vars['APP']['LBL_DELETE_BUTTON_LABEL']; ?>
" value="<?php echo $this->_tpl_vars['APP']['LBL_DELETE_BUTTON_LABEL']; ?>
" 
					onClick='SUGAR.reports.deleteReport();'><?php endif; ?>&nbsp;&nbsp;<input type='button' title="<?php echo $this->_tpl_vars['MOD']['LBL_CANCEL']; ?>
" class="button" name="<?php echo $this->_tpl_vars['MOD']['LBL_CANCEL']; ?>
" value="<?php echo $this->_tpl_vars['MOD']['LBL_CANCEL']; ?>
" 
					onClick='document.location.href = "index.php?module=Reports&action=index&query=true&clear_query=true"'></td>				
							
			</tr>
		</table>
		<br/>	
		<div class="edit view">
		<table id="report_details_table" border="0"  width="100%" cellspacing="0" cellpadding="0" >
			<tr>
				<td width="20%" scope='row'><?php echo $this->_tpl_vars['MOD']['LBL_REPORT_NAME']; ?>
: <span class='required'>*</span></td>
				<td><input type='text' size='45' name='save_report_as' value='<?php echo $this->_tpl_vars['save_report_as']; ?>
'></td>
			</tr>
			<?php if ($this->_tpl_vars['IS_ADMIN']): ?>
			<tr>
				<td scope='row'><?php echo $this->_tpl_vars['MOD']['LBL_SHOW_QUERY']; ?>
:</td>
				<td><input type="checkbox" class="checkbox" name="show_query"  <?php if (( $this->_tpl_vars['show_query'] )): ?>CHECKED<?php endif; ?>></td>
			</tr>			
			<?php endif; ?>
			<tr>
				<td scope='row'><?php echo $this->_tpl_vars['MOD']['LBL_OWNER']; ?>
: <span class='required'>*</span></td>
				<td><?php echo $this->_tpl_vars['USER_HTML']; ?>
</td>
			</tr>	
			<tr>
				<td scope='row'><?php echo $this->_tpl_vars['MOD']['LBL_TEAM']; ?>
: <span class='required'>*</span></td>
				<td><?php echo $this->_tpl_vars['TEAM_HTML']; ?>
</td>
			</tr>
			<tr id='outerjoin_row' style="display:none">
				<td scope='row'><?php echo $this->_tpl_vars['MOD']['LBL_OUTER_JOIN_CHECKBOX']; ?>
: <?php echo $this->_tpl_vars['help_image']; ?>

				</td>
				<td><div id='outerjoin_div'></div></td>
			</tr>
			<tr id='matrixLayoutRow' style="display:none">
				<td scope='row'><?php echo $this->_tpl_vars['MOD']['LBL_MATRIX_LAYOUT']; ?>
</td>
				<td><select name='layout_options' id='layout_options'>
					<option value='1x2'><?php echo $this->_tpl_vars['MOD']['LBL_1X2']; ?>
</option>
					<option value='2x1'><?php echo $this->_tpl_vars['MOD']['LBL_2X1']; ?>
</option>
					</select></td>
			</tr>

		</table>
		</div>
		<br/>
		<table  width='100%' border="0" cellspacing="0" cellpadding="0" >
			<tr>
				<td align='left'><input type='button' title="<?php echo $this->_tpl_vars['MOD']['LBL_PREVIOUS']; ?>
" class="button" name="<?php echo $this->_tpl_vars['MOD']['LBL_PREVIOUS']; ?>
" value="<?php echo $this->_tpl_vars['MOD']['LBL_PREVIOUS']; ?>
" 
					onClick='SUGAR.reports.showWizardStep(1);'>&nbsp;&nbsp;<input type='button' title="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_LABEL']; ?>
" class="button" name="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_LABEL']; ?>
" value="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_LABEL']; ?>
" 
					onClick='SUGAR.reports.saveReport();'>&nbsp;&nbsp;<input type='button' title="<?php echo $this->_tpl_vars['MOD']['LBL_PREVIEW_REPORT']; ?>
" class="button" name="<?php echo $this->_tpl_vars['MOD']['LBL_PREVIEW_REPORT']; ?>
" value="<?php echo $this->_tpl_vars['MOD']['LBL_PREVIEW_REPORT']; ?>
" 
					onClick='SUGAR.reports.previewReport();'>&nbsp;&nbsp;<input type='button' title="<?php echo $this->_tpl_vars['MOD']['LBL_SAVE_RUN']; ?>
" class="button" name="<?php echo $this->_tpl_vars['MOD']['LBL_SAVE_RUN']; ?>
" value="<?php echo $this->_tpl_vars['MOD']['LBL_SAVE_RUN']; ?>
" 
					onClick='SUGAR.reports.runReport();'><?php if ($this->_tpl_vars['record'] && ( $this->_tpl_vars['IS_ADMIN'] == 1 || $this->_tpl_vars['IS_OWNER'] == 1 )): ?>&nbsp;&nbsp;<input type='button' title="<?php echo $this->_tpl_vars['APP']['LBL_DELETE_BUTTON_LABEL']; ?>
" class="button" name="<?php echo $this->_tpl_vars['APP']['LBL_DELETE_BUTTON_LABEL']; ?>
" value="<?php echo $this->_tpl_vars['APP']['LBL_DELETE_BUTTON_LABEL']; ?>
" 
					onClick='SUGAR.reports.deleteReport();'><?php endif; ?>&nbsp;&nbsp;<input type='button' title="<?php echo $this->_tpl_vars['MOD']['LBL_CANCEL']; ?>
" class="button" name="<?php echo $this->_tpl_vars['MOD']['LBL_CANCEL']; ?>
" value="<?php echo $this->_tpl_vars['MOD']['LBL_CANCEL']; ?>
" 
					onClick='document.location.href = "index.php?module=Reports&action=index&query=true&clear_query=true"'></td>				
							
			</tr>
		</table>	
	</div>

</form>
<?php echo $this->_tpl_vars['quicksearch_js']; ?>

<script type="text/javascript">

//Disable the Enter Key
<?php echo '
function stopEnterKey(evt) {
  var evt = (evt) ? evt : ((event) ? event : null);
  var node = (evt.target) ? evt.target : ((evt.srcElement) ? evt.srcElement : null);
  if ((evt.keyCode == 13) && (node.type=="text")) {
       SUGAR.reports.checkEnterKey();
  }
}
'; ?>


var users_array = new Array();
users_array[0]=<?php echo '{text'; ?>
:'<?php echo $this->_tpl_vars['MOD']['LBL_CURRENT_USER']; ?>
',value:'Current User'<?php echo '}'; ?>
;
<?php $_from = $this->_tpl_vars['users_array']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['user_id'] => $this->_tpl_vars['user_name']):
?>
	users_array[users_array.length] = <?php echo '{text'; ?>
:'<?php echo $this->_tpl_vars['user_name']; ?>
',value:'<?php echo $this->_tpl_vars['user_id']; ?>
'<?php echo '}'; ?>
;
<?php endforeach; endif; unset($_from); ?>

<?php echo '
function loadChartForReports() {

	var idObject = document.getElementById(\'record\');
	var id = \'\';
	if (idObject != null) {
		id = idObject.value;
	} // if
	var chartId = document.getElementById(id + \'_div\');
	var showHideChartButton = document.getElementById(\'showHideChartButton\');
	if (chartId == null) {
		if (showHideChartButton != null) {
			showHideChartButton.style.display = \'none\';	
		}
	} // if
}

function displayGroupCount() {
	
}
'; ?>


function onLoadDoInit() {
	<?php if ($this->_tpl_vars['report_def_str']): ?>
		SUGAR.reports.init("<?php echo $this->_tpl_vars['IMG']; ?>
", <?php echo $this->_tpl_vars['report_def_str']; ?>
, users_array, "<?php echo $this->_tpl_vars['ORIG_IMG']; ?>
");
	<?php else: ?>
		SUGAR.reports.init("<?php echo $this->_tpl_vars['IMG']; ?>
", '', users_array,"<?php echo $this->_tpl_vars['ORIG_IMG']; ?>
");
	<?php endif; ?>
	loadChartForReports();
	displayGroupCount();
}

<?php echo '
var reportLoader = new YAHOO.util.YUILoader({
	require : ["layout", "element"],
	loadOptional: true,
	skin: { base: \'blank\', defaultSkin: \'\' },
	onSuccess : onLoadDoInit,
	base : "include/javascript/yui/build/"
});
reportLoader.addModule({ 
    name: "sugarwidgets",
    type: "js", 
    fullpath: "include/javascript/sugarwidgets/SugarYUIWidgets.js", 
    varName: "YAHOO.SUGAR",
    requires: ["datatable", "dragdrop", "treeview", "tabview", "button", "autocomplete", "container"]
});
reportLoader.insert();
'; ?>


enableQS(true);
document.getElementById('progress_div').style.display="none";
function saveReportOptionsState(name, value) {
	
}
</script>