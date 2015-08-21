<?php /* Smarty version 2.6.11, created on 2014-05-09 17:32:18
         compiled from modules/Reports/templates/_template_summary_combo_view.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_getimagepath', 'modules/Reports/templates/_template_summary_combo_view.tpl', 85, false),array('modifier', 'in_array', 'modules/Reports/templates/_template_summary_combo_view.tpl', 209, false),)), $this); ?>

<?php 
	global $mod_strings;
 ?>

<br/>

<input type="hidden" name="expandAllState" id="expandAllState" value="<?php echo $this->_tpl_vars['expandAll']; ?>
">
<input class="button" name="expandCollapse" id="expandCollapse" title="<?php echo $this->_tpl_vars['mod_strings']['LBL_REPORT_COLLAPSE_ALL']; ?>
"
    type="button"
    value="<?php echo $this->_tpl_vars['mod_strings']['LBL_REPORT_COLLAPSE_ALL']; ?>
" 
    onclick="expandCollapseAll('false');">
<br/><br/>
<?php 
require_once('modules/Reports/templates/templates_reports.php');
$reporter = $this->get_template_vars('reporter');
$args = $this->get_template_vars('args');
$header_row = $this->get_template_vars('header_row');
$columns_row = $this->get_template_vars('columns_row');
$countKeyIndex = $this->get_template_vars('countKeyIndex');
$count = 0;
$totalGroupByCount = 0;
$topLevelGroupByCount = 0;
$previousRow = array();
$counterArray = array();
$indexOfGroupByStart = 0;
$rowIdToCountArray = array();
$forLoopIndexForGroupBy;
$topLevelGroupColumnNameId = "";
$got_row = 0;                                                                                   
$divCounter = 0;
while (( $row = $reporter->get_summary_next_row()) != 0 ) {
	$got_row = 1;                                                                                   
	$startTable = true;
	$indexOfGroupByStart = whereToStartGroupByRow($reporter, $count, $header_row, $previousRow, $row);
	if ($indexOfGroupByStart != 0) {
		$startTable = false;
	} // if
	$previousRow = $row;
	template_header_row($header_row, $args, true);
  
if ($count != 0 && $startTable) {
 ?>
			</table>
			<table width="100%" border="0" cellpadding="0" cellspacing="0" class="reportGroupBySpaceTableView">
				<tr height=1>
					<td width="3%">&nbsp;

					</td>
				</tr>
			</table>
<?php 
} // if
  
if ($startTable) {
	$spanId = "img_combo_summary_div_" . $divCounter;
	$divId = "combo_summary_div_" . $divCounter;
	$counterArray = getCounterArrayForGroupBy($reporter, $topLevelGroupByCount);
	$rowId = generateIdForGroupByIndex($counterArray, 0);
	$rowIdToCountArray[$rowId] = 0;
	$groupByColumnName = getGroupByColumnName($reporter, $indexOfGroupByStart, $header_row, $row);
	$indexOfGroupByStart++;
	$topLevelGroupClass = "reportGroupNByTable";
	if (count($reporter->report_def['group_defs']) > 1) {
		$topLevelGroupClass = "reportGroup1ByTable";
	} // if
	$this->assign('topLevelGroupClass', $topLevelGroupClass);
	$this->assign('groupByColumnName', $groupByColumnName);
	$this->assign('rowId', $rowId);
	$this->assign('spanId', $spanId);
	$this->assign('divId', $divId);
	$topLevelGroupByCount++;
 ?>
<table id="<?php echo $this->_tpl_vars['divId']; ?>
" width="100%" border="0" cellpadding="0" cellspacing="0" class="reportGroupViewTable">
	<tr>
		<td>
			<table width="100%" border="0" cellpadding="0" cellspacing="0" class="<?php echo $this->_tpl_vars['topLevelGroupClass']; ?>
">
				<tr height="20" >				
				  <th align='left' id = "<?php echo $this->_tpl_vars['rowId']; ?>
" name= "<?php echo $this->_tpl_vars['rowId']; ?>
" class="reportGroup1ByTableEvenListRowS1" valign=middle nowrap><span id="<?php echo $this->_tpl_vars['spanId']; ?>
"><a href="javascript:expandCollapseComboSummaryDivTable('<?php echo $this->_tpl_vars['divId']; ?>
')"><img width="8" height="8" border="0" absmiddle="" alt="<?php echo $this->_tpl_vars['mod_strings']['LBL_ALT_SHOW']; ?>
" src="<?php echo smarty_function_sugar_getimagepath(array('file' => 'basic_search.gif'), $this);?>
"/></a></span>&nbsp;<?php echo $this->_tpl_vars['groupByColumnName']; ?>

				  </th>
				</tr>
			</table>
		</td>
	</tr>
<?php 
$totalGroupByCount++;
$divCounter++;
} // if
  if (( $this->_tpl_vars['show_pagination'] != "" )):  echo $this->_tpl_vars['pagination_data']; ?>

<?php endif; ?>

<?php 
for ($forLoopIndexForGroupBy = $indexOfGroupByStart ; $forLoopIndexForGroupBy < count($reporter->report_def['group_defs']) ; $forLoopIndexForGroupBy++) {
	$groupByColumnName = getGroupByColumnName($reporter, $indexOfGroupByStart, $header_row, $row);
	$spaces = "&nbsp;&nbsp;&nbsp;";
	$reportGroupByClass = "reportGroupNByTable";
	for ($spacesCount = 0 ; $spacesCount < $indexOfGroupByStart ; $spacesCount++) {
		$spaces = $spaces . $spaces;
	} // for
	$rowId = generateIdForGroupByIndex($counterArray, $forLoopIndexForGroupBy);
	if (array_key_exists($rowId, $rowIdToCountArray)) {
		$counterArray[$forLoopIndexForGroupBy] = $counterArray[$forLoopIndexForGroupBy] + 1;	
		$rowId = generateIdForGroupByIndex($counterArray, $forLoopIndexForGroupBy);
	} 
	$rowIdToCountArray[$rowId] = 0;
	$newRowId = $rowId;
	if ($forLoopIndexForGroupBy < (count($reporter->report_def['group_defs']) -1)) {
		$reportGroupByClass = "reportGroup1ByTable";
	} // if
	if ($forLoopIndexForGroupBy == (count($reporter->report_def['group_defs']) -1)) {
		if ($countKeyIndex != -1) {
			$newRowId = "";
		} // if
	} // if
	$this->assign('reportGroupByClass', $reportGroupByClass);
	$this->assign('spaces', $spaces);
	$indexOfGroupByStart++;
	$this->assign('groupByColumnName', $groupByColumnName);
	$this->assign('rowId', $newRowId);	
 ?>
	<tr>
		<td>
			<table width="100%" border="0" cellpadding="0" cellspacing="0" class="<?php echo $this->_tpl_vars['reportGroupByClass']; ?>
">
				<tr height="20" class="reportGroupNByTableEvenListRowS1">
				  <td align='left' id = "<?php echo $this->_tpl_vars['rowId']; ?>
" name= "<?php echo $this->_tpl_vars['rowId']; ?>
" width="30%" nowrap class="reportGroupNByTableEvenListRowS1"><?php echo $this->_tpl_vars['spaces'];  echo $this->_tpl_vars['groupByColumnName']; ?>
</td>
				</tr>
			</table>
		</td>
	</tr>
<?php 
} // for
 ?>

<?php 
	//$divId = "combo_summary_div_". $count;
	//template_list_row($row, false, true, $divId);

 ?>

<?php 
	//echo template_end_table($args);
	//echo "<div id='". $divId ."' style='padding-left: 30px;display:none'>";
	template_header_row($columns_row, $args);
 ?>

	<tr>
		<td>
			<table width="100%" border="0" cellpadding="0" cellspacing="0" class="reportGroupByDataTableHeader">
				<tr>
					<td>
						<table width="100%" border="0" cellpadding="0" cellspacing="1" class="reportDataChildtablelistView">
						<?php if (( $this->_tpl_vars['show_pagination'] != "" )): ?>
						<?php echo $this->_tpl_vars['pagination_data']; ?>

						<?php endif; ?>
							<tr height="20">
<?php if (( $this->_tpl_vars['isSummaryCombo'] )): ?>
								<th scope="col" align='center' class="reportGroupByDataChildTablelistViewThS1" valign=middle nowrap>&nbsp;</th>
<?php endif; ?>

<?php 
	$count1 = 0;
	$this->assign('count1', $count1);
  $_from = $this->_tpl_vars['header_row']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['module'] => $this->_tpl_vars['cell']):
?>
	<?php if (( ( $this->_tpl_vars['args']['group_column_is_invisible'] != "" ) && ( $this->_tpl_vars['args']['group_pos'] == $this->_tpl_vars['count1'] ) )):  	
	$count1 = $count1 + 1;
	$this->assign('count1', $count1);
 ?>
	<?php else: ?>
	<?php if ($this->_tpl_vars['cell'] == ""):  	
	$cell = "&nbsp;";
	$this->assign('cell', $cell);
 ?>
	<?php endif; ?>	
								<th scope="col" align='center' class="reportGroupByDataChildTablelistViewThS1" valign=middle nowrap>	
	
	<?php echo $this->_tpl_vars['cell']; ?>

								</th>
	<?php endif;  endforeach; endif; unset($_from); ?>
							</tr>
<?php 
		//_pp($reporter->current_summary_row_count);
  		if ($reporter->current_summary_row_count > 0) {
  			for($i=0; $i < $reporter->current_summary_row_count; $i++ ) {
				if (($column_row = $reporter->get_next_row() ) != 0 ) {
					template_list_row($column_row, true);
					incrementCountForRowId($rowIdToCountArray, $rowId);
 ?>
<tr height=20 class="<?php echo $this->_tpl_vars['row_class']; ?>
">
<?php if (( $this->_tpl_vars['isSummaryComboHeader'] )): ?>

<?php endif;  
	$count1 = 0;
	$this->assign('count1', $count1);
  $_from = $this->_tpl_vars['column_row']['cells']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['module'] => $this->_tpl_vars['cell']):
?>
	<?php if (( ( $this->_tpl_vars['column_row']['group_column_is_invisible'] != "" ) && ( ((is_array($_tmp=$this->_tpl_vars['count1'])) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['column_row']['group_pos']) : smarty_modifier_in_array($_tmp, $this->_tpl_vars['column_row']['group_pos'])) ) )):  	
	$count1 = $count1 + 1;
	$this->assign('count1', $count1);
 ?>
	<?php else: ?>
	<?php if ($this->_tpl_vars['cell'] == ""):  	
	$cell = "&nbsp;";
	$this->assign('cell', $cell);
 ?>
	<?php endif; ?>	
									<td width="<?php echo $this->_tpl_vars['width']; ?>
%" valign=TOP class="<?php echo $this->_tpl_vars['row_class'][$this->_tpl_vars['module']]; ?>
" bgcolor="<?php echo $this->_tpl_vars['bg_color']; ?>
" scope="row">
	
	<?php echo $this->_tpl_vars['cell']; ?>

									</td>
	<?php endif;  endforeach; endif; unset($_from); ?>
								</tr>
				
<?php 
			   } else {
			     break;
			   } // else
  			} // for
 ?>							
  								</table>

								</td>
							</tr>
						</table>
					</td>
				</tr>

<?php 

  		} else {
			echo template_no_results();
  		}
		//echo template_end_table($args);
		//echo "</div>";
		$count++;
} // while
if (!$got_row) {
	echo template_summary_combo_view_no_results($args);
	echo template_end_table($args);
} // if	
$this->assign('divCounter', $divCounter);
global $global_json;
if (count($reporter->report_def['group_defs']) > 1) {
	$this->assign('totalGroupCountArrayString', $global_json->encode($rowIdToCountArray));
}
 ?>
<script language="javascript">
var totalGroupCountArrayString = '<?php echo $this->_tpl_vars['totalGroupCountArrayString']; ?>
';
var totalDivCounter = <?php echo $this->_tpl_vars['divCounter']; ?>
;
var groupCountObject = new Object();
<?php echo '
if (totalGroupCountArrayString != \'\') {
	groupCountObject = JSON.parse(totalGroupCountArrayString);
} // if

function displayGroupCount() {
	for (i in groupCountObject) {
		elem = document.getElementById(i);
		if (elem != null) {
			elem.innerHTML = trim(elem.innerHTML) + \', \' + SUGAR.language.get(\'app_strings\',\'LBL_REPORT_NEWREPORT_COLUMNS_TAB_COUNT\') +\' = \' + groupCountObject[i];
		}
	} // for
} // fn

function showHideTableRows(divId, toShow) {
	var tableElm = document.getElementById(divId);
	for (i = 1 ; i < tableElm.rows.length ; i++) {
		if (toShow) {
			tableElm.rows[i].style.display = "";
		} else {
			tableElm.rows[i].style.display = "none";
		} // else
	} // for
}

function expandCollapseAll(expandAll, makeAjaxCall) {
	expandCollapseButton = document.getElementById(\'expandCollapse\');
	if (expandAll == \'false\') {
		if (makeAjaxCall == null) {
			saveReportOptionsState("expandAll", "0");
		}
		expandCollapseButton.title = '; ?>
"<?php echo $this->_tpl_vars['mod_strings']['LBL_REPORT_EXPAND_ALL']; ?>
";
		<?php echo 'expandCollapseButton.value = '; ?>
"<?php echo $this->_tpl_vars['mod_strings']['LBL_REPORT_EXPAND_ALL']; ?>
";
		<?php echo 'expandCollapseButton.onclick = function() {expandCollapseAll(\'true\')};
	} else {
		if (makeAjaxCall == null) {
			saveReportOptionsState("expandAll", "1");
		} // if
		expandCollapseButton.title = '; ?>
"<?php echo $this->_tpl_vars['mod_strings']['LBL_REPORT_COLLAPSE_ALL']; ?>
";
		<?php echo 'expandCollapseButton.value = '; ?>
"<?php echo $this->_tpl_vars['mod_strings']['LBL_REPORT_COLLAPSE_ALL']; ?>
";
		<?php echo 'expandCollapseButton.onclick = function() {expandCollapseAll(\'false\')};
	} // else
	for (var i = 0 ; i < totalDivCounter ; i++) {
		expandCollapseComboSummaryDivTable(("combo_summary_div_" + i), expandAll);
	} // for
} // fn


function doExpandCollapseAll() {
	var expandAllState = document.getElementById(\'expandAllState\');
	if (expandAllState != null && (expandAllState.value == "0")) {
		expandCollapseAll(\'false\', false);
	} // if
} // fn

function expandCollapseComboSummaryDiv(divId) {

}

function expandCollapseComboSummaryDivTable(divId, expandAll) {
	if (document.getElementById(divId)) {
		var searchReturn = document.getElementById("img_" + divId).innerHTML.search(/advanced_search/);
		if (expandAll != null) {
			if (expandAll == \'true\') {
				searchReturn = 1;
			} else {
				searchReturn = -1;
			} // else
		} // if
		if (searchReturn != -1) {
			showHideTableRows(divId, true);
			//document.getElementById(divId).style.display = "";
			document.getElementById("img_" + divId).innerHTML = 
			document.getElementById("img_" + divId).innerHTML.replace(/advanced_search/,"basic_search");
			document.getElementById(\'expanded_combo_summary_divs\').value += divId + " ";
		} else {
			//document.getElementById(divId).style.display = "none";
			showHideTableRows(divId, false);
			document.getElementById("img_" + divId).innerHTML = 			
			document.getElementById("img_" + divId).innerHTML.replace(/basic_search/,"advanced_search");
			document.getElementById(\'expanded_combo_summary_divs\').value = 
			document.getElementById(\'expanded_combo_summary_divs\').value.replace(divId,"");

		} // else
	}
}

'; ?>

</script>
<?php 
if ( ! isset($header_row[0]['norows'])) {
	echo get_form_header( $mod_strings['LBL_GRAND_TOTAL'],"", false); 
} // if
if ( $reporter->has_summary_columns()) {
	// start template_total_table code
	global $mod_strings;
	$total_header_row = $reporter->get_total_header_row(); 
	$total_row = $reporter->get_summary_total_row();
	if ( isset($total_row['group_pos'])) {
		$args['group_pos'] = $total_row['group_pos'];
	} // if
	if ( isset($total_row['group_column_is_invisible'])) {
		$args['group_column_is_invisible'] = $total_row['group_column_is_invisible'];
	} // if
 	$reporter->layout_manager->setAttribute('no_sort',1);
  	echo get_form_header( $mod_strings['LBL_GRAND_TOTAL'],"", false); 
  	template_header_row($total_header_row,$args);
 ?>
	<table width="100%" border="0" cellpadding="0" cellspacing="0" class="list view">
	<?php if (( $this->_tpl_vars['show_pagination'] != "" )): ?>
	<?php echo $this->_tpl_vars['pagination_data']; ?>

	<?php endif; ?>
	<tr height="20">
	<?php if (( $this->_tpl_vars['isSummaryCombo'] )): ?>
	<th scope="col" align='left'  valign=middle nowrap>&nbsp;</th>
	<?php endif; ?>
	<?php if (( $this->_tpl_vars['isSummaryComboHeader'] )): ?>
	<th><span id="img_<?php echo $this->_tpl_vars['divId']; ?>
"><a href="javascript:expandCollapseComboSummaryDiv('<?php echo $this->_tpl_vars['divId']; ?>
')"><img width="8" height="8" border="0" absmiddle="" alt="<?php echo $this->_tpl_vars['mod_strings']['LBL_ALT_SHOW']; ?>
" src="<?php echo $this->_tpl_vars['image_path']; ?>
advanced_search.gif"/></a></span></th>
	<?php endif; ?>
	<?php 
		$count = 0;
		$this->assign('count', $count);
	 ?>
	<?php $_from = $this->_tpl_vars['header_row']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['module'] => $this->_tpl_vars['cell']):
?>
		<?php if (( ( $this->_tpl_vars['args']['group_column_is_invisible'] != "" ) && ( $this->_tpl_vars['args']['group_pos'] == $this->_tpl_vars['count'] ) )): ?>
	<?php 	
		$count = $count + 1;
		$this->assign('count', $count);
	 ?>
		<?php else: ?>
		<?php if ($this->_tpl_vars['cell'] == ""): ?>
	<?php 	
		$cell = "&nbsp;";
		$this->assign('cell', $cell);
	 ?>
		<?php endif; ?>		
		<td scope="col" align='left'  valign=middle nowrap>	
		
		<?php echo $this->_tpl_vars['cell']; ?>

		<?php endif; ?>
	<?php endforeach; endif; unset($_from); ?>
	</tr>
<?php 
  	if (! empty($total_row)) {
    	template_list_row($total_row);
 ?>
		<tr height=20 class="<?php echo $this->_tpl_vars['row_class']; ?>
" onmouseover="setPointer(this, '<?php echo $this->_tpl_vars['rownum']; ?>
', 'over', '<?php echo $this->_tpl_vars['bg_color']; ?>
', '<?php echo $this->_tpl_vars['hilite_bg']; ?>
', '<?php echo $this->_tpl_vars['click_bg']; ?>
');" onmouseout="setPointer(this, '<?php echo $this->_tpl_vars['rownum']; ?>
', 'out', '<?php echo $this->_tpl_vars['bg_color']; ?>
', '<?php echo $this->_tpl_vars['hilite_bg']; ?>
', '<?php echo $this->_tpl_vars['click_bg']; ?>
');" onmousedown="setPointer(this, '<?php echo $this->_tpl_vars['rownum']; ?>
', 'click', '<?php echo $this->_tpl_vars['bg_color']; ?>
', '<?php echo $this->_tpl_vars['hilite_bg']; ?>
', '<?php echo $this->_tpl_vars['click_bg']; ?>
');">
		<?php if (( $this->_tpl_vars['isSummaryComboHeader'] )): ?>
		<td><span id="img_<?php echo $this->_tpl_vars['divId']; ?>
"><a href="javascript:expandCollapseComboSummaryDiv('<?php echo $this->_tpl_vars['divId']; ?>
')"><img width="8" height="8" border="0" absmiddle="" alt="<?php echo $this->_tpl_vars['mod_strings']['LBL_ALT_SHOW']; ?>
" src="<?php echo $this->_tpl_vars['image_path']; ?>
advanced_search.gif"/></a></span></td>
		<?php endif; ?>
		<?php 
			$count = 0;
			$this->assign('count', $count);
		 ?>
		<?php $_from = $this->_tpl_vars['column_row']['cells']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['module'] => $this->_tpl_vars['cell']):
?>
			<?php if (( ( $this->_tpl_vars['column_row']['group_column_is_invisible'] != "" ) && ( ((is_array($_tmp=$this->_tpl_vars['count'])) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['column_row']['group_pos']) : smarty_modifier_in_array($_tmp, $this->_tpl_vars['column_row']['group_pos'])) ) )): ?>
		<?php 	
			$count = $count + 1;
			$this->assign('count', $count);
		 ?>
			<?php else: ?>
			<?php if ($this->_tpl_vars['cell'] == ""): ?>
		<?php 	
			$cell = "&nbsp;";
			$this->assign('cell', $cell);
		 ?>
			<?php endif; ?>
			
			<td width="<?php echo $this->_tpl_vars['width']; ?>
%" align="left" valign=TOP class="<?php echo $this->_tpl_vars['row_class']; ?>
" bgcolor="<?php echo $this->_tpl_vars['bg_color']; ?>
" scope="row">
			
			<?php echo $this->_tpl_vars['cell']; ?>

			<?php endif; ?>
		<?php endforeach; endif; unset($_from); ?>
		</tr>
		
<?php 
  	} else {
		echo template_no_results();
  	}
	echo template_end_table($args);
  	// end template_total_table code
  //template_total_table($reporter);
} // if
template_query_table($reporter); 
 ?>