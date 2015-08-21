<?php /* Smarty version 2.6.11, created on 2014-05-08 12:28:45
         compiled from include/MySugar/tpls/MySugar.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_getjspath', 'include/MySugar/tpls/MySugar.tpl', 57, false),array('function', 'sugar_getimagepath', 'include/MySugar/tpls/MySugar.tpl', 107, false),array('function', 'counter', 'include/MySugar/tpls/MySugar.tpl', 162, false),)), $this); ?>
<?php echo '
<style>
.menu{
	z-index:100;
}

.subDmenu{
	z-index:100;
}


li.active a img.deletePageImg {
   display: inline !important;
   margin-bottom: 2px;
}

div.moduleTitle {
height: 10px;
	}
</style>
'; ?>


<!-- begin includes for overlib -->
<script type="text/javascript" src="<?php echo smarty_function_sugar_getjspath(array('file' => 'include/javascript/sugar_grp_overlib.js'), $this);?>
"></script>
<div id="overDiv" style="position:absolute; visibility:hidden; z-index:1000"></div>
<!-- end includes for overlib -->

<script type="text/javascript">
var numPages = <?php echo $this->_tpl_vars['numPages']; ?>
;
var loadedPages = new Array();
loadedPages[0] = '<?php echo $this->_tpl_vars['loadedPage']; ?>
';
var activePage = <?php echo $this->_tpl_vars['activePage']; ?>
;
var theme = '<?php echo $this->_tpl_vars['theme']; ?>
';
current_user_id = '<?php echo $this->_tpl_vars['current_user']; ?>
';
jsChartsArray = new Array();
var moduleName = '<?php echo $this->_tpl_vars['module']; ?>
';
document.body.setAttribute("class", "yui-skin-sam");
</script>

<script type="text/javascript" src="<?php echo smarty_function_sugar_getjspath(array('file' => 'include/javascript/sugar_grp_yui_widgets.js'), $this);?>
"></script>
<script type="text/javascript" src="<?php echo smarty_function_sugar_getjspath(array('file' => 'include/javascript/dashlets.js'), $this);?>
"></script>
<script type="text/javascript" src='<?php echo smarty_function_sugar_getjspath(array('file' => 'include/JSON.js'), $this);?>
'></script>
<script type='text/javascript' src='<?php echo smarty_function_sugar_getjspath(array('file' => 'include/MySugar/javascript/MySugar.js'), $this);?>
'></script>
<link rel='stylesheet' href='<?php echo smarty_function_sugar_getjspath(array('file' => 'include/ytree/TreeView/css/folders/tree.css'), $this);?>
'>


<?php echo $this->_tpl_vars['chartResources']; ?>

<?php echo $this->_tpl_vars['mySugarChartResources']; ?>



<?php echo $this->_tpl_vars['form_header']; ?>

<table cellpadding="0" cellspacing="0" border="0" width="100%" id="tabListContainerTable">
<tr>
<td nowrap id="tabListContainerTD">
<div id="tabListContainer" class="yui-module yui-scroll">
    <div class="yui-hd">
        <span class="yui-scroll-controls">
            <a title="scroll left" class="yui-scrollup"><em>scroll left</em></a>
            <a title="scroll right" class="yui-scrolldown"><em>scroll right</em></a>
        </span>
    </div>

	<div class="yui-bd">
		<ul class="subpanelTablist" id="tabList">
		<?php $_from = $this->_tpl_vars['pages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['pageNum'] => $this->_tpl_vars['pageData']):
?>
		<li id="pageNum_<?php echo $this->_tpl_vars['pageNum']; ?>
" <?php if (( $this->_tpl_vars['pageNum'] == $this->_tpl_vars['activePage'] )): ?>class="active"<?php endif; ?>>
		<a id="pageNum_<?php echo $this->_tpl_vars['pageNum']; ?>
_anchor" class="<?php echo $this->_tpl_vars['pageData']['tabClass']; ?>
" href="javascript:SUGAR.mySugar.togglePages('<?php echo $this->_tpl_vars['pageNum']; ?>
');">
			<span id="pageNum_<?php echo $this->_tpl_vars['pageNum']; ?>
_input_span" style="display:none;">
			<input type="hidden" id="pageNum_<?php echo $this->_tpl_vars['pageNum']; ?>
_name_hidden_input" value="<?php echo $this->_tpl_vars['pageData']['pageTitle']; ?>
"/>
			<input type="text" id="pageNum_<?php echo $this->_tpl_vars['pageNum']; ?>
_name_input" value="<?php echo $this->_tpl_vars['pageData']['pageTitle']; ?>
" size="10" onblur="SUGAR.mySugar.savePageTitle('<?php echo $this->_tpl_vars['pageNum']; ?>
',this.value);"/>
			</span>
			<span id="pageNum_<?php echo $this->_tpl_vars['pageNum']; ?>
_link_span" class="tabText">
			<span id="pageNum_<?php echo $this->_tpl_vars['pageNum']; ?>
_title_text" <?php if (! $this->_tpl_vars['lock_homepage']): ?>ondblclick="SUGAR.mySugar.renamePage('<?php echo $this->_tpl_vars['pageNum']; ?>
');"<?php endif; ?>><?php echo $this->_tpl_vars['pageData']['pageTitle']; ?>
</span></span>
			<img id="pageNum_<?php echo $this->_tpl_vars['pageNum']; ?>
_delete_page_img" class="deletePageImg" style="display: none;" onclick="return SUGAR.mySugar.deletePage()" src='<?php echo smarty_function_sugar_getimagepath(array('file' => "info-del.png"), $this);?>
' alt='<?php echo $this->_tpl_vars['lblLnkHelp']; ?>
' border='0' align='absmiddle'>
		   </a>
	   </li>
	   <?php endforeach; endif; unset($_from); ?>	
		</ul>
	</div>

</div>
	<div id="addPage">
		<a href='javascript:void(0)' id="add_page" onclick="return SUGAR.mySugar.showAddPageDialog();"><img src='<?php echo smarty_function_sugar_getimagepath(array('file' => "info-add-page.png"), $this);?>
' alt='<?php echo $this->_tpl_vars['lblLnkHelp']; ?>
' border='0' align='absmiddle'></a>
	</div>
</td>

<?php if (! $this->_tpl_vars['lock_homepage']): ?>
<td nowrap id="dashletCtrlsTD">
	<div id="dashletCtrls">
            <a href="javascript:void(0)" id="add_dashlets" onclick="return SUGAR.mySugar.showDashletsDialog();" class='utilsLink'>
			<img src='<?php echo smarty_function_sugar_getimagepath(array('file' => "info-add.png"), $this);?>
' alt='<?php echo $this->_tpl_vars['lblLnkHelp']; ?>
' border='0' align='absmiddle'>
			    <?php echo $this->_tpl_vars['mod']['LBL_ADD_DASHLETS']; ?>

            </a>
            <a href="javascript:void(0)" id="change_layout" onclick="return SUGAR.mySugar.showChangeLayoutDialog();" class='utilsLink'>
			<img src='<?php echo smarty_function_sugar_getimagepath(array('file' => "info-layout.png"), $this);?>
' alt='<?php echo $this->_tpl_vars['lblLnkHelp']; ?>
' border='0' align='absmiddle'>
			    <?php echo $this->_tpl_vars['app']['LBL_CHANGE_LAYOUT']; ?>

            </a>
	</div>
</td>
<?php endif; ?>
</tr>
</table>
<div class="clear"></div>
<div id="pageContainer" class="yui-skin-sam">
<div id="pageNum_<?php echo $this->_tpl_vars['activePage']; ?>
_div">
<table width="100%" cellspacing="0" cellpadding="0" border="0" style="margin-top: 5px;">
	<?php if ($this->_tpl_vars['numCols'] > 1): ?>
 	<tr>
 		<?php if ($this->_tpl_vars['numCols'] > 2): ?>
	 	<td>
		
		</td>
	
		<td rowspan="3">
				<img src='<?php echo smarty_function_sugar_getimagepath(array('file' => 'blank.gif'), $this);?>
' width='40' height='1' border='0'>
		</td>
		<?php endif; ?>
		<?php if ($this->_tpl_vars['numCols'] > 1): ?>
		<td>
		
		</td>
		<td rowspan="3">
				<img src='<?php echo smarty_function_sugar_getimagepath(array('file' => 'blank.gif'), $this);?>
' width='40' height='1' border='0'>
		</td>
		<?php endif; ?>	
	</tr>
	<?php endif; ?>
	<tr>
		<?php echo smarty_function_counter(array('assign' => 'hiddenCounter','start' => 0,'print' => false), $this);?>

		<?php $_from = $this->_tpl_vars['columns']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['colNum'] => $this->_tpl_vars['data']):
?>
		<td valign='top' width='<?php echo $this->_tpl_vars['data']['width']; ?>
'>
			<ul class='noBullet' id='col_<?php echo $this->_tpl_vars['activePage']; ?>
_<?php echo $this->_tpl_vars['colNum']; ?>
'>
				<li id='page_<?php echo $this->_tpl_vars['activePage']; ?>
_hidden<?php echo $this->_tpl_vars['hiddenCounter']; ?>
b' style='height: 5px; margin-top: 12px\9;' class='noBullet'>&nbsp;&nbsp;&nbsp;</li>
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
				<li id='page_<?php echo $this->_tpl_vars['activePage']; ?>
_hidden<?php echo $this->_tpl_vars['hiddenCounter']; ?>
' style='height: 5px' class='noBullet'>&nbsp;&nbsp;&nbsp;</li>
			</ul>
		</td>
		<?php echo smarty_function_counter(array(), $this);?>

		<?php endforeach; endif; unset($_from); ?>
	</tr>
</table>
	</div>
	
	<?php $_from = $this->_tpl_vars['divPages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['divPageIndex'] => $this->_tpl_vars['divPageNum']):
?>
	<div id="pageNum_<?php echo $this->_tpl_vars['divPageNum']; ?>
_div" style="display:none;">
	</div>
	<?php endforeach; endif; unset($_from); ?>

	<div id="addPageDialog" style="display:none;">
		<div class="hd"><?php echo $this->_tpl_vars['lblAddPage']; ?>
</div>
		<div class="bd">
			<form method="POST" action="index.php?module=Home&action=DynamicAction&DynamicAction=addTab&to_pdf=1">
				<label><?php echo $this->_tpl_vars['lblPageName']; ?>
: </label><input type="textbox" name="pageName" /><br /><br />
				<label><?php echo $this->_tpl_vars['lblNumberOfColumns']; ?>
:</label>
				<table align="center" cellpadding="8">
					<tr>
						<td align="center"><img src="<?php echo smarty_function_sugar_getimagepath(array('file' => 'icon_Column_1.gif'), $this);?>
" border="0"/><br /><input type="radio" name="numColumns" value="1" /></td>
						<td align="center"><img src="<?php echo smarty_function_sugar_getimagepath(array('file' => 'icon_Column_2.gif'), $this);?>
" border="0"/><br /><input type="radio" name="numColumns" value="2" checked="yes" /></td>
						<td align="center"><img src="<?php echo smarty_function_sugar_getimagepath(array('file' => 'icon_Column_3.gif'), $this);?>
" border="0"/><br /><input type="radio" name="numColumns" value="3" /></td>
                    </tr>
				</table>
			</form>
		</div>
	</div>				
	
	<div id="changeLayoutDialog" style="display:none;">
		<div class="hd"><?php echo $this->_tpl_vars['lblChangeLayout']; ?>
</div>
		<div class="bd">
			<label><?php echo $this->_tpl_vars['lblNumberOfColumns']; ?>
:</label>
			<br /><br />
			<table align="center" cellpadding="15">
				<tr>
					<td align="center"><a href="javascript:SUGAR.mySugar.changePageLayout(1);"><img src="<?php echo smarty_function_sugar_getimagepath(array('file' => 'icon_Column_1.gif'), $this);?>
" border="0"/></a></td>
					<td align="center"><a href="javascript:SUGAR.mySugar.changePageLayout(2);"><img src="<?php echo smarty_function_sugar_getimagepath(array('file' => 'icon_Column_2.gif'), $this);?>
" border="0"/></a></td>
					<td align="center"><a href="javascript:SUGAR.mySugar.changePageLayout(3);"><img src="<?php echo smarty_function_sugar_getimagepath(array('file' => 'icon_Column_3.gif'), $this);?>
" border="0"/></a></td>						
				</tr>
			</table>
		</div>
	</div>
	
	<div id="dashletsDialog" style="display:none;">
		<div class="hd" id="dashletsDialogHeader"><a href="javascript:void(0)" onClick="javascript:SUGAR.mySugar.closeDashletsDialog();">
			<div class="container-close">&nbsp;</div></a><?php echo $this->_tpl_vars['lblAdd']; ?>

		</div>	
		<div class="bd" id="dashletsList">
			<form></form>
		</div>
		
	</div>
				
	
</div>

<?php echo '
<script type="text/javascript">
SUGAR.mySugar.maxCount = 	';  echo $this->_tpl_vars['maxCount'];  echo ';
SUGAR.mySugar.homepage_dd = new Array();
SUGAR.mySugar.init = function () {
	j = 0;
	
	'; ?>

	dashletIds = <?php echo $this->_tpl_vars['dashletIds']; ?>
;
	
	<?php if (! $this->_tpl_vars['lock_homepage']): ?>
	SUGAR.mySugar.attachDashletCtrlEvent();
	<?php echo '
	for(i in dashletIds) {
		SUGAR.mySugar.homepage_dd[j] = new ygDDList(\'dashlet_\' + dashletIds[i]);
		SUGAR.mySugar.homepage_dd[j].setHandleElId(\'dashlet_header_\' + dashletIds[i]);
		SUGAR.mySugar.homepage_dd[j].onMouseDown = SUGAR.mySugar.onDrag;  
		SUGAR.mySugar.homepage_dd[j].afterEndDrag = SUGAR.mySugar.onDrop;
		j++;
	}
	for(var wp = 0; wp <= ';  echo $this->_tpl_vars['hiddenCounter'];  echo '; wp++) {
	    SUGAR.mySugar.homepage_dd[j++] = new ygDDListBoundary(\'page_\'+activePage+\'_hidden\' + wp);
	}

	YAHOO.util.DDM.mode = 1;
	'; ?>

	<?php endif; ?>
	<?php echo '
	SUGAR.mySugar.renderDashletsDialog();
	SUGAR.mySugar.renderAddPageDialog();
	SUGAR.mySugar.renderChangeLayoutDialog();
	SUGAR.mySugar.renderLoadingDialog();
	'; ?>

	<?php if ($this->_tpl_vars['default']): ?>
//	SUGAR.mySugar.renderFirstLoadDialog();
	<?php endif; ?>
    <?php echo '
	SUGAR.mySugar.sugarCharts.loadSugarCharts(activePage);
}

</script>
'; ?>


<script type="text/javascript">
	YAHOO.util.Event.addListener(window, 'load', SUGAR.mySugar.init); 
	<?php echo $this->_tpl_vars['activeTabJavascript']; ?>

</script>