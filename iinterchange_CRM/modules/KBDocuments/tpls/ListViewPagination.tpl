{*

/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/



*}
	<tr class='pagination'>
		<td colspan='{if $prerow}{$colCount+1}{else}{$colCount}{/if}'>
			<table border='0' cellpadding='0' cellspacing='0' width='100%' class='paginationTable'>
				<tr>
					<td nowrap="nowrap" width='2%' class='paginationActionButtons'>
						{$actionsLink}&nbsp;
						&nbsp;{$selectedObjectsSpan}
					</td>
					<td  nowrap='nowrap' width='1%' align="right" class='paginationChangeButtons'>
						{if $pageData.urls.startPage}
							<button type='button' id='listViewStartButton' name='listViewStartButton' title='{$navStrings.start}' class='button' {if $prerow}onClick='save_kb_checks(0); SUGAR.kb.paginateList("{$pageData.urls.startPage}", "browse");'{else} onClick='SUGAR.kb.paginateList("{$pageData.urls.startPage}", document.getElementById("mode_b").value);' {/if}>
								<img src='{sugar_getimagepath file='start.png'}' alt='{$navStrings.start}' align='absmiddle' border='0'>
							</button>
						{else}
							<button type='button' id='listViewStartButton' name='listViewStartButton' title='{$navStrings.start}' class='button' disabled='disabled'>
								<img src='{sugar_getimagepath file='start_off.png'}' alt='{$navStrings.start}' align='absmiddle' border='0'>
							</button>
						{/if}
						{if $pageData.urls.prevPage}
							<button type='button' id='listViewPrevButton' name='listViewPrevButton' title='{$navStrings.previous}' class='button' {if $prerow}onClick='save_kb_checks({$pageData.offsets.prev}); SUGAR.kb.paginateList("{$pageData.urls.prevPage}", "browse");' {else} onClick='SUGAR.kb.paginateList("{$pageData.urls.prevPage}", document.getElementById("mode_b").value);'{/if}>
								<img src='{sugar_getimagepath file='previous.png'}' alt='{$navStrings.previous}' align='absmiddle' border='0'>							
							</button>
						{else}
							<button type='button' id='listViewPrevButton' name='listViewPrevButton' class='button' title='{$navStrings.previous}' disabled='disabled'>
								<img src='{sugar_getimagepath file='previous_off.png'}' alt='{$navStrings.previous}' align='absmiddle' border='0'>
							</button>
						{/if}
							<span class='pageNumbers'>({if $pageData.offsets.lastOffsetOnPage == 0}0{else}{$pageData.offsets.current+1}{/if} - {$pageData.offsets.lastOffsetOnPage} {$navStrings.of} {if $pageData.offsets.totalCounted}{$pageData.offsets.total}{else}{$pageData.offsets.total}{if $pageData.offsets.lastOffsetOnPage != $pageData.offsets.total}+{/if}{/if})</span>
						{if $pageData.urls.nextPage}
							<button type='button' id='listViewNextButton' name='listViewNextButton' title='{$navStrings.next}' class='button' {if $prerow}onClick='save_kb_checks({$pageData.offsets.next}); SUGAR.kb.paginateList("{$pageData.urls.nextPage}", "browse");' {else} onClick='SUGAR.kb.paginateList("{$pageData.urls.nextPage}", document.getElementById("mode_b").value);'{/if}>
								<img src='{sugar_getimagepath file='next.png'}' alt='{$navStrings.next}' align='absmiddle' border='0'>
							</button>
						{else}
							<button type='button' id='listViewNextButton' name='listViewNextButton' class='button' title='{$navStrings.next}' disabled='disabled'>
								<img src='{sugar_getimagepath file='next_off.png'}' alt='{$navStrings.next}' align='absmiddle' border='0'>
							</button>
						{/if}
						{if $pageData.urls.endPage  && $pageData.offsets.total != $pageData.offsets.lastOffsetOnPage}
							<button type='button' id='listViewEndButton' name='listViewEndButton' title='{$navStrings.end}' class='button' {if $prerow}onClick='save_kb_checks("end"); SUGAR.kb.paginateList("{$pageData.urls.endPage}", "browse");' {else} onClick='SUGAR.kb.paginateList("{$pageData.urls.endPage}", document.getElementById("mode_b").value);'{/if}>
								<img src='{sugar_getimagepath file='end.png'}' alt='{$navStrings.end}' align='absmiddle' border='0'>							
							</button>
						{elseif !$pageData.offsets.totalCounted || $pageData.offsets.total == $pageData.offsets.lastOffsetOnPage}
							<button type='button' id='listViewEndButton' name='listViewEndButton' title='{$navStrings.end}' class='button' disabled='disabled'>
							 	<img src='{sugar_getimagepath file='end_off.png'}' alt='{$navStrings.end}' align='absmiddle'>
							</button>
						{/if}
					</td>
				</tr>
			</table>
		</td>
	</tr>