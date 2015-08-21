{*

/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/




*}

<table cellpadding='0' cellspacing='0' width='100%' border='0' class='list view'>
{*  --export and pagination-- *}
	{include file='modules/KBDocuments/tpls/ListViewPagination.tpl'}
{*  --Header Row -- *}
	<tr height='20'>
		{if $prerow}
			<td scope='col'  nowrap width='1%'>
				<input type='checkbox' class='checkbox' id='massall' name='massall' value='' onclick='sListView.check_all(document.MassUpdate, "mass[]", this.checked);' />
			</td>
		{/if}
		{counter start=0 name="colCounter" print=false assign="colCounter"}
		{foreach from=$displayColumns key=colHeader item=params}
			<td scope='col' width='{$params.width}%'  nowrap>
				<span sugar="sugar{$colCounter}"><div style='white-space: nowrap;'width='100%' align='{$params.align|default:'left'}'>
                {if !$params.ajaxSort|default:false}
	                {* normal sort is specified, so set the proper urls*}
	                {if $params.sortable|default:true}
		                <a href='{$pageData.urls.orderBy}{$params.orderBy|default:$colHeader|lower}' class='listViewThLinkS1' onclick="this.href='{$pageData.urls.orderBy}{$params.orderBy|default:$colHeader|lower}&mode='+document.getElementById('mode').value;">
		                	{sugar_translate label=$params.label module=$pageData.bean.moduleDir}&nbsp;&nbsp;
						{if $params.orderBy|default:$colHeader|lower == $pageData.ordering.orderBy}
							{if $pageData.ordering.sortOrder == 'ASC'}
                                {capture assign="imageName"}arrow_down.{$arrowExt}{/capture}
                                <img border='0' src='{sugar_getimagepath file=$imageName}' width='{$arrowWidth}' height='{$arrowHeight}' align='absmiddle' alt='{$arrowAlt}'>
                            {else}
                                {capture assign="imageName"}arrow_up.{$arrowExt}{/capture}
                                <img border='0' src='{sugar_getimagepath file=$imageName}' width='{$arrowWidth}' height='{$arrowHeight}' align='absmiddle' alt='{$arrowAlt}'>
                            {/if}
                        {else}
                            {capture assign="imageName"}arrow.{$arrowExt}{/capture}
                            <img border='0' src='{sugar_getimagepath file=$imageName}' width='{$arrowWidth}' height='{$arrowHeight}' align='absmiddle' alt='{$arrowAlt}'>
                        {/if}
						</a>
					{else}
						{sugar_translate label=$params.label module=$pageData.bean.moduleDir}
					{/if}
				{else}
					{* this is where the ajax sorting goes, set the sort urls appropriately*}
		                <a href="javascript:sortBrowseList('{$pageData.urls.orderBy}','{$params.orderBy|default:$colHeader|lower}')" class='listViewThLinkS1'>{sugar_translate label=$params.label module=$pageData.bean.moduleDir}&nbsp;&nbsp;
						{if $params.orderBy|default:$colHeader|lower == $pageData.ordering.orderBy}
							{if $pageData.ordering.sortOrder == 'ASC'}
                                {capture assign="imageName"}arrow_down.{$arrowExt}{/capture}
                                <img border='0' src='{sugar_getimagepath file=$imageName}' width='{$arrowWidth}' height='{$arrowHeight}' align='absmiddle' alt='{$arrowAlt}'>
                            {else}
                                {capture assign="imageName"}arrow_up.{$arrowExt}{/capture}
                                <img border='0' src='{sugar_getimagepath file=$imageName}' width='{$arrowWidth}' height='{$arrowHeight}' align='absmiddle' alt='{$arrowAlt}'>
                            {/if}
                        {else}
                            {capture assign="imageName"}arrow.{$arrowExt}{/capture}
                            <img border='0' src='{sugar_getimagepath file=$imageName}' width='{$arrowWidth}' height='{$arrowHeight}' align='absmiddle' alt='{$arrowAlt}'>
                        {/if}
						</a>
				{/if}
				</div></span sugar='sugar{$colCounter}'>
			</td>
			{counter name="colCounter"}
		{/foreach}
		{if !empty($quickViewLinks)}
		<td scope='col'  nowrap width='1%'>&nbsp;</td>
		{/if}
	</tr>
		
	{foreach name=rowIteration from=$data key=id item=rowData}
		{if $smarty.foreach.rowIteration.iteration is odd}
			{assign var='_bgColor' value=$bgColor[0]}
			{assign var='_rowColor' value=$rowColor[0]}
		{else}
			{assign var='_bgColor' value=$bgColor[1]}
			{assign var='_rowColor' value=$rowColor[1]}
		{/if}
		<tr height='20' class='{$_rowColor}S1'>
			{if $prerow}
			<td width='1%' nowrap='nowrap'>
					<input onclick='sListView.check_item(this, document.MassUpdate)' type='checkbox' class='checkbox' name='mass[]' value='{$rowData[$params.id]|default:$rowData.ID}'>
					{$pageData.additionalDetails.$id}
			</td>
			{/if}
			{counter start=0 name="colCounter" print=false assign="colCounter"}
			{foreach from=$displayColumns key=col item=params}
				<td scope='row' align='{$params.align|default:'left'}' valign='top'><span sugar="sugar{$colCounter}b">
					{if $params.link && !$params.customCode}
						{if $params.contextMenu}
							<span id='obj_{$rowData[$params.id]|default:$rowData.ID}'>
						{/if}

							<span id='adspan_{$rowData[$params.id]|default:$rowData.ID}' onmouseout="return document_clearAdditionalDetailsCall('{$rowData[$params.id]|default:$rowData.ID}', 'adspan_{$rowData[$params.id]|default:$rowData.ID}', '{$pageData.offsets.current+$smarty.foreach.rowIteration.iteration}')" 
							onmouseover="return getDocumentDetails('KBDocuments', '{$rowData[$params.id]|default:$rowData.ID}', 'adspan_{$rowData[$params.id]|default:$rowData.ID}', '{$rowData[$params.id]|default:$rowData.KBDOCUMENT_NAME_js}', 'panel_{$rowData[$params.id]|default:$rowData.ID}','{$pageData.offsets.current+$smarty.foreach.rowIteration.iteration}')" onclick="updateKBViewsCount('{$rowData[$params.id]|default:$rowData.ID}')">							
								<{$pageData.tag.$id[$params.ACLTag]|default:$pageData.tag.$id.MAIN} href='#'>
								{$rowData.$col}
								</{$pageData.tag.$id[$params.ACLTag]|default:$pageData.tag.$id.MAIN}>
							</span>


						{if $params.contextMenu}
							</span>
							<script>
							SUGAR.contextMenu.registerObject('{$params.contextMenu.objectType}', 'adspan_{$rowData[$params.id]|default:$rowData.ID}'{if $params.contextMenu.metaData},	{sugar_evalcolumn var=$params.contextMenu.metaData rowData=$rowData toJSON=true}{/if}, false);
							</script>
						{/if}
   				  	{elseif $params.customCode} 
						{sugar_evalcolumn var=$params.customCode rowData=$rowData}1
					{elseif $params.currency_format}
						{sugar_currency_format 
							var=$rowData.$col 
							round=$params.currency_format.round 
							decimals=$params.currency_format.decimals 
							symbol=$params.currency_format.symbol
						}
					{elseif $params.type == 'bool'}
							<input type='checkbox' disabled=disabled class='checkbox'
							{if !empty($rowData[$col])}
								checked=checked
							{/if}
							/>
					{else}	
						{$rowData.$col}
					{/if}
                    {if empty($rowData.$col)}&nbsp;{/if}
				</span sugar='sugar{$colCounter}b'></td>
				{counter name="colCounter"}
			{/foreach}
			{if !empty($quickViewLinks)}
			<td width='1%' nowrap='nowrap'>
				{if $pageData.access.edit}
					<a title='{$editLinkString}' href='index.php?action=EditView&module={$params.module|default:$pageData.bean.moduleDir}&record={$rowData[$params.id]|default:$rowData.ID}&offset={$pageData.offsets.current+$smarty.foreach.rowIteration.iteration}&stamp={$pageData.stamp}&return_module={$params.module|default:$pageData.bean.moduleDir}'><img border="0" src="{sugar_getimagepath file="edit_inline.gif"}"></a>
				{/if}
			</td>
	    	</tr>
			{/if}
	 	
	{/foreach}
	{include file='modules/KBDocuments/tpls/ListViewPagination.tpl'}
</table>
