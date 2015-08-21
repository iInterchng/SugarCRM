{*

/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/




*}

<b>{$MOD.LBL_IMPORT_VCARDTEXT}</b>
<script type="text/javascript" src="{sugar_getjspath file='include/javascript/sugar_grp_yui_widgets.js'}"></script>
{literal}
<script type="text/javascript">
<!--
function validate_vcard()
{
    if (document.getElementById("vcard_file").value=="") {
        YAHOO.SUGAR.MessageBox.show({msg: '{/literal}{$ERROR_TEXT}{literal}'} );
    }
    else
        document.EditView.submit();
}
-->
</script>
{/literal}
<form name="EditView" method="POST" ENCTYPE="multipart/form-data" action="index.php">
<input type="hidden" name="max_file_size" value="30000">
<input type='hidden' name='action' value='ImportVCardSave'>
<input type='hidden' name='module' value='{$MODULE}'>
<input type='hidden' name='from' value='ImportVCard'>

<input size="60" name="vcard" id="vcard_file" type="file" />&nbsp;
<input class='button' type="button" onclick='validate_vcard()' value="{$APP.LBL_IMPORT_VCARD_BUTTON_LABEL}" 
    title="{$APP.LBL_IMPORT_VCARD_BUTTON_TITLE}" accesskey="{$APP.LBL_IMPORT_VCARD_BUTTON_KEY}"/>
</form>

