{*

/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

*}

<table width="100%" cellspacing="0" cellpadding="0" border="0" style="border-top: 0px none; margin-bottom: 4px;">
<tr>
<td>
<!-- BEGIN PAGE RENDERING -->
	<table cellspacing='5' cellpadding='0' border='0' valign='top' width='100%'>
	{if $numCols > 1}
 	<tr>
 		{if $numCols > 2}
	 	<td>

		</td>
	
		<td rowspan="3">
				<img src='{sugar_getimagepath file='blank.gif'}' width='15' height='1' border='0'>
		</td>
		{/if}
		{if $numCols > 1}
		<td>

		</td>
		<td rowspan="3">
				<img src='{sugar_getimagepath file='blank.gif'}' width='15' height='1' border='0'>
		</td>
		{/if}	
	</tr>
	{/if}
	<tr>
	{counter assign=hiddenCounter start=0 print=false}
	{foreach from=$columns key=colNum item=data}
	<td valign='top' width={$data.width}>
		<ul class='noBullet' id='col_{$selectedPage}_{$colNum}'>
			<li id='page_{$selectedPage}_hidden{$hiddenCounter}b' style='height: 5px' class='noBullet'>&nbsp;&nbsp;&nbsp;</li>
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
			<li id='page_{$selectedPage}_hidden{$hiddenCounter}' style='height: 5px' class='noBullet'>&nbsp;&nbsp;&nbsp;</li>
		</ul>
	</td>
	{counter}
	{/foreach}
	</tr>
	</table>
<!-- END PAGE RENDERING -->
</td>
</tr>
</table>
<script>
	{if !$lock_homepage}
	SUGAR.mySugar.attachDashletCtrlEvent();
	{/if}
</script>
