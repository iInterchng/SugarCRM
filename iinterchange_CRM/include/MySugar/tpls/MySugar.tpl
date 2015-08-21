{*

/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/




*}
{literal}
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
{/literal}

<!-- begin includes for overlib -->
<script type="text/javascript" src="{sugar_getjspath file='include/javascript/sugar_grp_overlib.js'}"></script>
<div id="overDiv" style="position:absolute; visibility:hidden; z-index:1000"></div>
<!-- end includes for overlib -->

<script type="text/javascript">
var numPages = {$numPages};
var loadedPages = new Array();
loadedPages[0] = '{$loadedPage}';
var activePage = {$activePage};
var theme = '{$theme}';
current_user_id = '{$current_user}';
jsChartsArray = new Array();
var moduleName = '{$module}';
document.body.setAttribute("class", "yui-skin-sam");
</script>

<script type="text/javascript" src="{sugar_getjspath file='include/javascript/sugar_grp_yui_widgets.js'}"></script>
<script type="text/javascript" src="{sugar_getjspath file='include/javascript/dashlets.js'}"></script>
<script type="text/javascript" src='{sugar_getjspath file='include/JSON.js'}'></script>
<script type='text/javascript' src='{sugar_getjspath file='include/MySugar/javascript/MySugar.js'}'></script>
<link rel='stylesheet' href='{sugar_getjspath file='include/ytree/TreeView/css/folders/tree.css'}'>


{$chartResources}
{$mySugarChartResources}


{$form_header}
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
		{foreach from=$pages key=pageNum item=pageData}
		<li id="pageNum_{$pageNum}" {if ($pageNum == $activePage)}class="active"{/if}>
		<a id="pageNum_{$pageNum}_anchor" class="{$pageData.tabClass}" href="javascript:SUGAR.mySugar.togglePages('{$pageNum}');">
			<span id="pageNum_{$pageNum}_input_span" style="display:none;">
			<input type="hidden" id="pageNum_{$pageNum}_name_hidden_input" value="{$pageData.pageTitle}"/>
			<input type="text" id="pageNum_{$pageNum}_name_input" value="{$pageData.pageTitle}" size="10" onblur="SUGAR.mySugar.savePageTitle('{$pageNum}',this.value);"/>
			</span>
			<span id="pageNum_{$pageNum}_link_span" class="tabText">
			<span id="pageNum_{$pageNum}_title_text" {if !$lock_homepage}ondblclick="SUGAR.mySugar.renamePage('{$pageNum}');"{/if}>{$pageData.pageTitle}</span></span>
			<img id="pageNum_{$pageNum}_delete_page_img" class="deletePageImg" style="display: none;" onclick="return SUGAR.mySugar.deletePage()" src='{sugar_getimagepath file="info-del.png"}' alt='{$lblLnkHelp}' border='0' align='absmiddle'>
		   </a>
	   </li>
	   {/foreach}	
		</ul>
	</div>

</div>
	<div id="addPage">
		<a href='javascript:void(0)' id="add_page" onclick="return SUGAR.mySugar.showAddPageDialog();"><img src='{sugar_getimagepath file="info-add-page.png"}' alt='{$lblLnkHelp}' border='0' align='absmiddle'></a>
	</div>
</td>

{if !$lock_homepage}
<td nowrap id="dashletCtrlsTD">
	<div id="dashletCtrls">
            <a href="javascript:void(0)" id="add_dashlets" onclick="return SUGAR.mySugar.showDashletsDialog();" class='utilsLink'>
			<img src='{sugar_getimagepath file="info-add.png"}' alt='{$lblLnkHelp}' border='0' align='absmiddle'>
			    {$mod.LBL_ADD_DASHLETS}
            </a>
            <a href="javascript:void(0)" id="change_layout" onclick="return SUGAR.mySugar.showChangeLayoutDialog();" class='utilsLink'>
			<img src='{sugar_getimagepath file="info-layout.png"}' alt='{$lblLnkHelp}' border='0' align='absmiddle'>
			    {$app.LBL_CHANGE_LAYOUT}
            </a>
	</div>
</td>
{/if}
</tr>
</table>
<div class="clear"></div>
<div id="pageContainer" class="yui-skin-sam">
<div id="pageNum_{$activePage}_div">
<table width="100%" cellspacing="0" cellpadding="0" border="0" style="margin-top: 5px;">
	{if $numCols > 1}
 	<tr>
 		{if $numCols > 2}
	 	<td>
		
		</td>
	
		<td rowspan="3">
				<img src='{sugar_getimagepath file='blank.gif'}' width='40' height='1' border='0'>
		</td>
		{/if}
		{if $numCols > 1}
		<td>
		
		</td>
		<td rowspan="3">
				<img src='{sugar_getimagepath file='blank.gif'}' width='40' height='1' border='0'>
		</td>
		{/if}	
	</tr>
	{/if}
	<tr>
		{counter assign=hiddenCounter start=0 print=false}
		{foreach from=$columns key=colNum item=data}
		<td valign='top' width='{$data.width}'>
			<ul class='noBullet' id='col_{$activePage}_{$colNum}'>
				<li id='page_{$activePage}_hidden{$hiddenCounter}b' style='height: 5px; margin-top: 12px\9;' class='noBullet'>&nbsp;&nbsp;&nbsp;</li>
		        {foreach from=$data.dashlets key=id item=dashlet}		
				<li class='noBullet' id='dashlet_{$id}'>
					<div id='dashlet_entire_{$id}' class='dashletPanel'>
						{$dashlet.script}
                        {$dashlet.displayHeader}
						{$dashlet.display}
                        {$dashlet.displayFooter}
                  </div> 
				</li>
				<script>
				SUGAR.mySugar.attachToggleToolsetEvent('{$id}');
				</script>
				{/foreach}
				<li id='page_{$activePage}_hidden{$hiddenCounter}' style='height: 5px' class='noBullet'>&nbsp;&nbsp;&nbsp;</li>
			</ul>
		</td>
		{counter}
		{/foreach}
	</tr>
</table>
	</div>
	
	{foreach from=$divPages key=divPageIndex item=divPageNum}
	<div id="pageNum_{$divPageNum}_div" style="display:none;">
	</div>
	{/foreach}

	<div id="addPageDialog" style="display:none;">
		<div class="hd">{$lblAddPage}</div>
		<div class="bd">
			<form method="POST" action="index.php?module=Home&action=DynamicAction&DynamicAction=addTab&to_pdf=1">
				<label>{$lblPageName}: </label><input type="textbox" name="pageName" /><br /><br />
				<label>{$lblNumberOfColumns}:</label>
				<table align="center" cellpadding="8">
					<tr>
						<td align="center"><img src="{sugar_getimagepath file='icon_Column_1.gif'}" border="0"/><br /><input type="radio" name="numColumns" value="1" /></td>
						<td align="center"><img src="{sugar_getimagepath file='icon_Column_2.gif'}" border="0"/><br /><input type="radio" name="numColumns" value="2" checked="yes" /></td>
						<td align="center"><img src="{sugar_getimagepath file='icon_Column_3.gif'}" border="0"/><br /><input type="radio" name="numColumns" value="3" /></td>
                    </tr>
				</table>
			</form>
		</div>
	</div>				
	
	<div id="changeLayoutDialog" style="display:none;">
		<div class="hd">{$lblChangeLayout}</div>
		<div class="bd">
			<label>{$lblNumberOfColumns}:</label>
			<br /><br />
			<table align="center" cellpadding="15">
				<tr>
					<td align="center"><a href="javascript:SUGAR.mySugar.changePageLayout(1);"><img src="{sugar_getimagepath file='icon_Column_1.gif'}" border="0"/></a></td>
					<td align="center"><a href="javascript:SUGAR.mySugar.changePageLayout(2);"><img src="{sugar_getimagepath file='icon_Column_2.gif'}" border="0"/></a></td>
					<td align="center"><a href="javascript:SUGAR.mySugar.changePageLayout(3);"><img src="{sugar_getimagepath file='icon_Column_3.gif'}" border="0"/></a></td>						
				</tr>
			</table>
		</div>
	</div>
	
	<div id="dashletsDialog" style="display:none;">
		<div class="hd" id="dashletsDialogHeader"><a href="javascript:void(0)" onClick="javascript:SUGAR.mySugar.closeDashletsDialog();">
			<div class="container-close">&nbsp;</div></a>{$lblAdd}
		</div>	
		<div class="bd" id="dashletsList">
			<form></form>
		</div>
		
	</div>
				
	
</div>

{literal}
<script type="text/javascript">
SUGAR.mySugar.maxCount = 	{/literal}{$maxCount}{literal};
SUGAR.mySugar.homepage_dd = new Array();
SUGAR.mySugar.init = function () {
	j = 0;
	
	{/literal}
	dashletIds = {$dashletIds};
	
	{if !$lock_homepage}
	SUGAR.mySugar.attachDashletCtrlEvent();
	{literal}
	for(i in dashletIds) {
		SUGAR.mySugar.homepage_dd[j] = new ygDDList('dashlet_' + dashletIds[i]);
		SUGAR.mySugar.homepage_dd[j].setHandleElId('dashlet_header_' + dashletIds[i]);
		SUGAR.mySugar.homepage_dd[j].onMouseDown = SUGAR.mySugar.onDrag;  
		SUGAR.mySugar.homepage_dd[j].afterEndDrag = SUGAR.mySugar.onDrop;
		j++;
	}
	for(var wp = 0; wp <= {/literal}{$hiddenCounter}{literal}; wp++) {
	    SUGAR.mySugar.homepage_dd[j++] = new ygDDListBoundary('page_'+activePage+'_hidden' + wp);
	}

	YAHOO.util.DDM.mode = 1;
	{/literal}
	{/if}
	{literal}
	SUGAR.mySugar.renderDashletsDialog();
	SUGAR.mySugar.renderAddPageDialog();
	SUGAR.mySugar.renderChangeLayoutDialog();
	SUGAR.mySugar.renderLoadingDialog();
	{/literal}
	{if $default}
//	SUGAR.mySugar.renderFirstLoadDialog();
	{/if}
    {literal}
	SUGAR.mySugar.sugarCharts.loadSugarCharts(activePage);
}

</script>
{/literal}

<script type="text/javascript">
	YAHOO.util.Event.addListener(window, 'load', SUGAR.mySugar.init); 
	{$activeTabJavascript}
</script>
