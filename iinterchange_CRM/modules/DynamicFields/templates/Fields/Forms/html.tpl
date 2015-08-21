{*

/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/




*}


{include file="modules/DynamicFields/templates/Fields/Forms/coreTop.tpl"}

<tr>
    <td class="mbLBL">{sugar_translate module="DynamicFields" label="COLUMN_TITLE_HTML_CONTENT"}:</td>
    <td>
    {if $hideLevel < 5}
        <textarea name='htmlarea' id='htmlarea' cols=50 rows=10>{$HTML_EDITOR}</textarea>
        <input type='hidden' name='ext4' id='ext4' value='{$cf.ext4}'/>
    {else}
        <textarea name='htmlarea' id='htmlarea' cols=50 rows=10 disabled>{$HTML_EDITOR}</textarea>
        <input type='hidden' name='htmlarea' value='{$HTML_EDITOR}'/>
    {/if}
        <br>
    </td>
</tr>
{include file="modules/DynamicFields/templates/Fields/Forms/coreBottom.tpl"}

<script type="text/javascript" language="Javascript">
SUGAR.ajaxLoad = true;
{if $hideLevel < 5}
    setTimeout("tinyMCE.execCommand('mceAddControl', false, 'htmlarea');", 500);  
	ModuleBuilder.tabPanel.get("activeTab").closeEvent.subscribe(function(){ldelim}tinyMCE.execCommand('mceRemoveControl', false, 'htmlarea');{rdelim});
	setTimeout("document.forms.popup_form.required.value = false;YAHOO.util.Dom.getAncestorByTagName(document.forms.popup_form.required, 'tr').style.display='none';", 500);
{/if}
{literal}
document.popup_form.presave = function(){
    var inst = tinyMCE.get("htmlarea").getContent();
    document.getElementById('ext4').value =inst;
    document.getElementById('ext4').style.display = '';
};
</script>
{/literal}