{*

/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/




*}

<form name="importerror" method="GET" action="index.php" id="importerror">
<input type="hidden" name="module" value="Import">
<input type="hidden" name="action" value="{$ACTION}">
<input type="hidden" name="import_module" value="{$IMPORT_MODULE}">
<input type="hidden" name="source" value="{$SOURCE}">

<p class="error">{$MESSAGE}</p>

<table width="100%" cellpadding="0" cellspacing="0" border="0">
<tr>
    <td align="left">
        <input title="{$MOD.LBL_TRY_AGAIN}" accessKey="" class="button" type="submit" 
            name="button" value="{$MOD.LBL_TRY_AGAIN}">
    </td>
</tr>
</table>
</form>
