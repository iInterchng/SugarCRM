{*
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

*}
<script type='text/javascript' src='{sugar_getjspath file='include/javascript/sugar_grp_overlib.js'}'></script>
<script type='text/javascript' src='{sugar_getjspath file='include/javascript/sugar_3.js'}'></script>

<table cellpadding='0' cellspacing='0' width='100%' border='0' class='list view'>
<tr>
<th width="5%">{$APP.LBL_SELECT_BUTTON_LABEL}</td>
{foreach from=$displayColumns key=colHeader item=params}
{if $colHeader != 'id'}
	<th width="{$params.width}%" nowrap>
          	{sugar_translate label=$params.label module=$module}
	</th>
{/if}	
{/foreach}
<th width="1%"></td>
</tr>


{foreach name=rowIteration from=$DATA key=id item=bean}
    {counter name="offset" print=false}
	{if $smarty.foreach.rowIteration.iteration is odd}
		{assign var='_bgColor' value=$bgColor[0]}
		{assign var='_rowColor' value=$rowColor[0]}
		{assign var='_class' value='oddListRowS1'}
	{else}
		{assign var='_bgColor' value=$bgColor[1]}
		{assign var='_rowColor' value=$rowColor[1]}
		{assign var='_class' value='evenListRowS1'}
	{/if}
    
    <tr height='20' onmouseover="setPointer(this, '{$rowData.id}', 'over', '{$_bgColor}', '{$bgHilite}', '');" onmouseout="setPointer(this, '{$rowData.ID}', 'out', '{$_bgColor}', '{$bgHilite}', '');" onmousedown="setPointer(this, '{$rowData.id}', 'click', '{$_bgColor}', '{$bgHilite}', '');" class="{$_class}">
		<td valign="top" scope="row" NOWRAP>
		<input vertical-align="middle" type="radio" name="{$source_id}_id" value="{$bean->data_source_id}">

		</td>
		{foreach from=$displayColumns key=colHeader item=params}
		{if $colHeader != 'id'}
		<td valign="top" scope="row">{sugar_connector_display bean=$bean field=$colHeader source=$source_id}</td>               
        {/if}
        {/foreach}
		<td scope="row"><span id='adspan_{$bean->id}' onmouseout="return clear_source_details()" onmouseover="get_source_details('{$source_id}', '{$bean->id}', 'adspan_{$bean->id}')" onmouseout="return nd(1000);" vertical-align="middle"><img src="{sugar_getimagepath file="info_inline.png"}" vertical-align="middle"></span></td>
    </tr>

    
{/foreach}
</table>
