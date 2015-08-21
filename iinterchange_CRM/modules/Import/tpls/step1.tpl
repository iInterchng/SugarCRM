{*

/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/




*}
{overlib_includes}
{$MODULE_TITLE}
{if $ERROR != ''}
<span class="error">{$ERROR}</span>
{/if}

<form enctype="multipart/form-data" name="importstep1" method="post" action="index.php" id="importstep1">
<input type="hidden" name="module" value="Import">
<input type="hidden" name="action" value="Step2">
<input type="hidden" name="import_module" value="{$IMPORT_MODULE}">
<p>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="edit view">
<tr>
    <td>
	<table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td valign="top" width='50%' scope="row"><table border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td align="left" scope="row" colspan="3"><h3>{$MOD.LBL_WHAT_IS}&nbsp;<span class="required">*</span></h3></td>
          </tr>
          <tr>
            <td colspan="3" scope="row"><input class="radio" type="radio" name="source" value="csv" checked="checked" />
              &nbsp;{$MOD.LBL_CSV}&nbsp;{sugar_help text=$MOD.LBL_DELIMITER_COMMA_HELP}</td>
          </tr>
          <tr id="customEnclosure">
            <td scope="row">&nbsp;&nbsp;{$MOD.LBL_CUSTOM_ENCLOSURE}</td>
            <td colspan="2" scope="row">
                <select name="custom_enclosure" id="custom_enclosure">
                    <option value="&quot;" selected="selected">{$MOD.LBL_OPTION_ENCLOSURE_DOUBLEQUOTE}</option>
                    <option value="'">{$MOD.LBL_OPTION_ENCLOSURE_QUOTE}</option>
                    <option value="">{$MOD.LBL_OPTION_ENCLOSURE_NONE}</option>
                    <option value="other">{$MOD.LBL_OPTION_ENCLOSURE_OTHER}</option>
                </select>
                <input type="text" name="custom_enclosure_other" style="display: none; width: 5em;" maxlength="1" />
                {sugar_help text=$MOD.LBL_ENCLOSURE_HELP}
            </td>
          </tr>
          <tr>
            <td colspan="3" scope="row"><input class="radio" type="radio" name="source" value="tab" />
              &nbsp;{$MOD.LBL_TAB}&nbsp;{sugar_help text=$MOD.LBL_DELIMITER_TAB_HELP}</td>
          </tr>
          <tr>
            <td colspan="3" scope="row"><input class="radio" type="radio" name="source" value="other" />
              &nbsp;{$MOD.LBL_CUSTOM_DELIMITED}&nbsp;{sugar_help text=$MOD.LBL_DELIMITER_CUSTOM_HELP}</td>
          </tr>
          <tr id="customDelimiter" style='display:none'>
            <td scope="row">&nbsp;&nbsp;{$MOD.LBL_CUSTOM_DELIMITER}&nbsp;<span class="required">*</span></td>
            <td colspan="2" scope="row">
                <input type="text" name="custom_delimiter" value="" style="width: 5em;" maxlength="1" />
            </td>
          </tr>
          {if $show_salesforce}
          <tr>
            <td colspan="3" scope="row"><input class="radio" type="radio" name="source" value="salesforce" />
            &nbsp;{$MOD.LBL_SALESFORCE}</td>
            </tr>
          {/if}
          {if $show_outlook}
          <tr>
            <td colspan="3" scope="row"><input class="radio" type="radio" name="source" value="outlook" />
              &nbsp;{$MOD.LBL_MICROSOFT_OUTLOOK}</td>
            </tr>
          {/if}
          {if $show_act}
          <tr>
            <td colspan="3" scope="row"><input class="radio" type="radio" name="source" value="act" />
              &nbsp;{$MOD.LBL_ACT}</td>
          </tr>
          {/if}
          {foreach from=$custom_mappings item=item name=custommappings}
          {capture assign=mapping_label}{$MOD.LBL_CUSTOM_MAPPING_}{$item|upper}{/capture}
          <tr>
            <td colspan="3" scope="row"><input class="radio" type="radio" name="source" value="{$item}" />
              &nbsp;{$mapping_label}</td>
          </tr>
          {/foreach}
          {foreach from=$custom_imports key=key item=item name=saved}
          {if $smarty.foreach.saved.first}
          <tr>
            <td scope="row" colspan="3">
                <h5>{$MOD.LBL_MY_SAVED}&nbsp;{sugar_help text=$MOD.LBL_MY_SAVED_HELP}</h5></td>
          </tr>
          {/if}
          <tr>
            <td scope="row" colspan="2">
                <input class="radio" type="radio" name="source" value="custom:{$item.IMPORT_ID}"/>
                &nbsp;{$item.IMPORT_NAME}
            </td>
            <td scope="row">
                {if $is_admin}
                <input type="button" name="publish" value="{$MOD.LBL_PUBLISH}" class="button" 
                    onclick="document.location.href = 'index.php?publish=yes&amp;import_module={$IMPORT_MODULE}&amp;module=Import&amp;action=step1&amp;import_map_id={$item.IMPORT_ID}'">
                {/if}
                <input type="button" name="delete" value="{$MOD.LBL_DELETE}" class="button" 
					onclick="if(confirm('{$MOD.LBL_DELETE_MAP_CONFIRMATION}')){literal}{{/literal}document.location.href = 'index.php?import_module={$IMPORT_MODULE}&amp;module=Import&amp;action=step1&amp;delete_map_id={$item.IMPORT_ID}'{literal}}{/literal}">
            </td>
          </tr>
          {/foreach}
          {foreach from=$published_imports key=key item=item name=published}
          {if $smarty.foreach.published.first}
          <tr>
            <td scope="row" colspan="3">
                <h5>{$MOD.LBL_PUBLISHED_SOURCES}&nbsp;{sugar_help text=$MOD.LBL_MY_PUBLISHED_HELP}</h5></td>
          </tr>
          {/if}
          <tr>
            <td scope="row" colspan="2">
                <input class="radio" type="radio" name="source" value="custom:{$item.IMPORT_ID}"/>
                &nbsp;{$item.IMPORT_NAME}
            </td>
            <td scope="row">
                {if $is_admin}
                <input type="button" name="publish" value="{$MOD.LBL_UNPUBLISH}" class="button" 
                    onclick="document.location.href = 'index.php?publish=no&amp;import_module={$IMPORT_MODULE}&amp;module=Import&amp;action=step1&amp;import_map_id={$item.IMPORT_ID}'">
                <input type="button" name="delete" value="{$MOD.LBL_DELETE}" class="button" 
                    onclick="if(confirm('{$MOD.LBL_DELETE_MAP_CONFIRMATION}')){literal}{{/literal}document.location.href = 'index.php?import_module={$IMPORT_MODULE}&amp;module=Import&amp;action=step1&amp;delete_map_id={$item.IMPORT_ID}'{literal}}{/literal}">
                {/if}
            </td>
          </tr>
          {/foreach}
          <tr>
            <td scope="row" colspan="3">
                <h3>{$MOD.LBL_IMPORT_TYPE}&nbsp;<span class="required">*</span></h3></td>
          </tr>
          <tr>
            <td scope="row" colspan="3">
                <input class="radio" type="radio" name="type" value="import" checked="checked" />
                &nbsp;{$MOD.LBL_IMPORT_BUTTON}
            </td>
          </tr>
          <tr>
            <td scope="row" colspan="3">
                <input class="radio" type="radio" name="type" value="update" />
                &nbsp;{$MOD.LBL_UPDATE_BUTTON}
            </td>
          </tr>
          </table>
        </td>
      </tr>
    </table>
    </td>
</tr>
</table>
</p>

<br>
<table width="100%" cellpadding="0" cellspacing="0" border="0">
<tr>
	<td align="left"><input title="{$MOD.LBL_NEXT}" accessKey="" class="button" type="submit" name="button" value="  {$MOD.LBL_NEXT}  "  id="gonext"></td>
</tr>
</table>

</form>
{$JAVASCRIPT}
