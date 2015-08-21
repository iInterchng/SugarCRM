{*
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

/*********************************************************************************

 ********************************************************************************/
*}

<script type="text/javascript">
js_iso4217 = {$JS_ISO4217};
</script>
<script type="text/javascript" src="modules/Currencies/EditView.js"></script>
<table width="100%" cellspacing="0" cellpadding="0" border="0" class="edit view">
<tr>
    <td>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td width="15%" scope="row" nowrap><slot>{$MOD.LBL_LIST_NAME}: <span class="required">{$APP.LBL_REQUIRED_SYMBOL}</span></slot></td>
<td width="35%"><slot><input name='name' tabindex='1' size='30' maxlength='50' type="text" value="{$NAME}"></slot></td>
<td width="15%" scope="row" nowrap><slot>{$MOD.LBL_LIST_ISO4217}:&nbsp;{sugar_help text=$MOD.LBL_LIST_ISO4217_HELP}</slot></td>
<td width="35%"><slot><input name='iso4217' tabindex='1' size='3'
  maxlength='3' type="text" value="{$ISO4217}" onKeyUp='isoUpdate(this);'></slot></td>
</tr>
<tr>

</tr>
<tr>
<td width="15%" scope="row" nowrap><slot> {$MOD.LBL_LIST_RATE}: <span class="required">{$APP.LBL_REQUIRED_SYMBOL}</span></slot></td>
<td width="35%"><slot><input name='conversion_rate' tabindex='1' size='30' maxlength='50' type="text" value="{$CONVERSION_RATE}">
<img border="0" src="index.php?entryPoint=getImage&themeName={$THEME}&imageName=helpInline.gif" onmouseover="return overlib('{$MOD.LBL_LIST_RATE_HELP}', FGCLASS, 'olFgClass', CGCLASS, 'olCgClass', BGCLASS, 'olBgClass', TEXTFONTCLASS, 'olFontClass', CAPTIONFONTCLASS, 'olCapFontClass', CLOSEFONTCLASS, 'olCloseFontClass', WIDTH, -1, NOFOLLOW, 'ol_nofollow' );" onmouseout="return nd();"/>
</slot></td>
<td width="15%" scope="row" nowrap><slot>{$MOD.LBL_LIST_SYMBOL}: <span class="required">{$APP.LBL_REQUIRED_SYMBOL}</span></slot></td>
<td width="35%"><slot><input name='symbol' tabindex='1' size='3' maxlength='50' type="text" value="{$SYMBOL}"></slot></td>

</tr>
<tr>

</tr>
<tr>
<td scope="row"><slot>{$MOD.LBL_LIST_STATUS}:</slot></td>
<td><slot><select name='status' tabindex='1'>{$STATUS_OPTIONS}</select> <em>{$MOD.NTC_STATUS}</em></slot></td>
</tr></table>
</td>
</tr>
</table>
<input type='hidden' name='record' value='{$ID}'>
</form>
{$JAVASCRIPT}
