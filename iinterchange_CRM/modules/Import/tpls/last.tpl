{*

/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/




*}
{$MODULE_TITLE}
<span>
{if $noSuccess}
	<p>{$MOD.LBL_FAILURE}</p>
{else}
	<p>{$MOD.LBL_SUCCESS}</p>
{/if}
{if $createdCount > 0}
<b>{$createdCount}</b>&nbsp;{$MOD.LBL_SUCCESSFULLY_IMPORTED}<br />
{/if}
{if $updatedCount > 0}
<b>{$updatedCount}</b>&nbsp;{$MOD.LBL_UPDATE_SUCCESSFULLY}<br />
{/if}
{if $errorCount > 0}
<b>{$errorCount}</b>&nbsp;{$MOD.LBL_RECORDS_SKIPPED_DUE_TO_ERROR}<br />
<a href="{$errorFile}" target='_blank'>{$MOD.LNK_ERROR_LIST}</a><br />
<a href ="{$errorrecordsFile}" target='_blank'>{$MOD.LNK_RECORDS_SKIPPED_DUE_TO_ERROR}</a><br />
{/if}
{if $dupeCount > 0}
<b>{$dupeCount}</b>&nbsp;{$MOD.LBL_DUPLICATES}<br />
<a href ="{$dupeFile}" target='_blank'>{$MOD.LNK_DUPLICATE_LIST}</a><br />
{/if}

<form name="importlast" id="importlast" method="POST" action="index.php">
<input type="hidden" name="module" value="Import">
<input type="hidden" name="action" value="Undo">
<input type="hidden" name="import_module" value="{$IMPORT_MODULE}">

<br />
<table width="100%" cellpadding="0" cellspacing="0" border="0">
<tr>
    <td align="left" style="padding-bottom: 2px;">
{if !$noSuccess}
    <input title="{$MOD.LBL_UNDO_LAST_IMPORT}" accessKey="" class="button"
        type="submit" name="undo" id="undo" value="  {$MOD.LBL_UNDO_LAST_IMPORT}  ">
{/if}
    <input title="{$MOD.LBL_IMPORT_MORE}" accessKey="" class="button" type="submit"
            name="importmore" id="importmore" value="  {$MOD.LBL_IMPORT_MORE}  ">
        <input title="{$MOD.LBL_FINISHED}{$MODULENAME}" accessKey="" class="button" type="submit" 
            name="finished" id="finished" value="  {$MOD.LBL_IMPORT_COMPLETE}  ">
        {$PROSPECTLISTBUTTON}
    </td>
</tr>
</table>
</form>
{if $PROSPECTLISTBUTTON != ''}
<form name="DetailView">
    <input type="hidden" name="module" value="Prospects">
    <input type="hidden" name="record" value="id">
</form>
{/if}
{$JAVASCRIPT}
