{*
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

*}
<table cellpadding="4" cellspacing="0" border="0" width="100%" class="view">
	<tr>
		<th colspan="4">
			<h4>{$app_strings.LBL_EMAIL_FOLDERS_TITLE}</h4>
		</th>
	</tr>
    <tr>
		<td NOWRAP style="padding: 8px;" valign="top" scope="row">
			<div>
				{$app_strings.LBL_EMAIL_SETTINGS_USER_FOLDERS}:
				<div id="rollover">
                    <a href="#" class="rollover"><img border="0" src="{sugar_getimagepath file='helpInline.gif'}"><span>{$app_strings.LBL_EMAIL_MULTISELECT}</span></a>
                </div>
			</div>
			<br/>
			<div>
				<select multiple size="8" STYLE="width: 140px" name="userFolders[]" id="userFolders" onchange="SUGAR.email2.folders.updateSubscriptions();"></select>
			</div>
		</td>

	</tr>
	<tr>
    	<td>&nbsp;</td>
    	<td>&nbsp;</td>
    	<td>&nbsp;</td>
    	<td align="right">
    	   <input type="button" class="button" style="margin-left:5px;" value="   {$app_strings.LBL_EMAIL_DONE_BUTTON_LABEL}   " onclick="javascript:SUGAR.email2.settings.saveOptionsGeneral(true);">
        </td>
	</tr>
</table>
