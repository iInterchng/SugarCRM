{*

/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/




*}
{if $UNDO_SUCCESS}
<h2>{$MOD.LBL_SUCCESS} {$MOD.LBL_LAST_IMPORT_UNDONE}</h2>
{else}
<h2>{$MOD.LBL_FAIL} {$MOD.LBL_NO_IMPORT_TO_UNDO}</h2>
{/if}
<form enctype="multipart/form-data" name="importundo" method="POST" action="index.php" id="importundo">
<input type="hidden" name="module" value="Import">
<input type="hidden" name="action" value="Step1">
<input type="hidden" name="import_module" value="{$IMPORT_MODULE}">

<br />
<table width="100%" cellpadding="2" cellspacing="0" border="0">
<tr>
    <td align="left">
        <input title="{$MOD.LBL_TRY_AGAIN}" accessKey="" 
            class="button" type="submit" name="button" 
            value="  {$MOD.LBL_TRY_AGAIN}  ">
        <input title="{$MOD.LBL_FINISHED}{$MODULENAME}" accessKey="" class="button" type="submit" 
            name="finished" id="finished" value="  {$MOD.LBL_FINISHED}{$MODULENAME}  ">
    </td>
</tr>
</table>
</form>
{$JAVASCRIPT}
