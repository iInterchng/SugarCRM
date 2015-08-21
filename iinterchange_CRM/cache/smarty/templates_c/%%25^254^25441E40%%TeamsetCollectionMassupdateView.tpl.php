<?php /* Smarty version 2.6.11, created on 2014-05-08 12:29:01
         compiled from include/SugarFields/Fields/Teamset/TeamsetCollectionMassupdateView.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_getjspath', 'include/SugarFields/Fields/Teamset/TeamsetCollectionMassupdateView.tpl', 32, false),array('function', 'sugar_translate', 'include/SugarFields/Fields/Teamset/TeamsetCollectionMassupdateView.tpl', 50, false),array('function', 'sugar_getimagepath', 'include/SugarFields/Fields/Teamset/TeamsetCollectionMassupdateView.tpl', 51, false),)), $this); ?>

	        	
<script type="text/javascript" src='<?php echo smarty_function_sugar_getjspath(array('file' => "include/SugarFields/Fields/Collection/SugarFieldCollection.js"), $this);?>
'></script>
<script type="text/javascript" src='<?php echo smarty_function_sugar_getjspath(array('file' => "include/JSON.js"), $this);?>
'></script>
<script type="text/javascript" src='<?php echo smarty_function_sugar_getjspath(array('file' => "include/SugarFields/Fields/Teamset/Teamset.js"), $this);?>
'></script>
<script type="text/javascript">
    var collection = (typeof collection == 'undefined') ? new Array() : collection;
    collection["<?php echo $this->_tpl_vars['displayParams']['formName']; ?>
_<?php echo $this->_tpl_vars['vardef']['name']; ?>
"] = new SUGAR.collection('<?php echo $this->_tpl_vars['displayParams']['formName']; ?>
', '<?php echo $this->_tpl_vars['vardef']['name']; ?>
', '<?php echo $this->_tpl_vars['module']; ?>
', '<?php echo $this->_tpl_vars['displayParams']['popupData']; ?>
');
	collection["<?php echo $this->_tpl_vars['displayParams']['formName']; ?>
_<?php echo $this->_tpl_vars['vardef']['name']; ?>
"].show_more_image = false;
</script>
<input type="hidden" id="update_fields_<?php echo $this->_tpl_vars['vardef']['name']; ?>
_collection" name="update_fields_<?php echo $this->_tpl_vars['vardef']['name']; ?>
_collection" value="">
<input type="hidden" id="<?php echo $this->_tpl_vars['vardef']['name']; ?>
_new_on_update" name="<?php echo $this->_tpl_vars['vardef']['name']; ?>
_new_on_update" value="<?php echo $this->_tpl_vars['displayParams']['new_on_update']; ?>
">
<input type="hidden" id="<?php echo $this->_tpl_vars['vardef']['name']; ?>
_allow_update" name="<?php echo $this->_tpl_vars['vardef']['name']; ?>
_allow_update" value="<?php echo $this->_tpl_vars['displayParams']['allow_update']; ?>
">
<input type="hidden" id="<?php echo $this->_tpl_vars['vardef']['name']; ?>
_allow_new" name="<?php echo $this->_tpl_vars['vardef']['name']; ?>
_allow_new" value="<?php echo $this->_tpl_vars['displayParams']['allow_new']; ?>
">
<input type="hidden" id="<?php echo $this->_tpl_vars['vardef']['name']; ?>
_allowed_to_check" name="<?php echo $this->_tpl_vars['vardef']['name']; ?>
_allowed_to_check" value="false">
<input type="hidden" id="<?php echo $this->_tpl_vars['vardef']['name']; ?>
_mass" name="<?php echo $this->_tpl_vars['vardef']['name']; ?>
_mass" value="<?php echo $this->_tpl_vars['vardef']['name']; ?>
_table">
<table name='<?php echo $this->_tpl_vars['displayParams']['formName']; ?>
_<?php echo $this->_tpl_vars['vardef']['name']; ?>
_table' id='<?php echo $this->_tpl_vars['displayParams']['formName']; ?>
_<?php echo $this->_tpl_vars['vardef']['name']; ?>
_table' style="border-spacing: 0pt;">
	 <tr>
	    <td colspan='2' nowrap>
			<span class="id-ff multiple ownline">
            <button type="button" class="button firstChild" value="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_SELECT_BUTTON_LABEL'), $this);?>
" onclick='javascript:open_popup("Teams", 600, 400, "", true, false, <?php echo '{"call_back_function":"set_return_teams_for_editview","form_name": '; ?>
 "<?php echo $this->_tpl_vars['displayParams']['formName']; ?>
","field_name":"<?php echo $this->_tpl_vars['vardef']['name']; ?>
",<?php echo '"field_to_name_array":{"id":"team_id","name":"team_name"}}'; ?>
, "MULTISELECT", true); if(collection["<?php echo $this->_tpl_vars['displayParams']['formName']; ?>
_<?php echo $this->_tpl_vars['vardef']['name']; ?>
"].more_status)collection["<?php echo $this->_tpl_vars['displayParams']['formName']; ?>
_<?php echo $this->_tpl_vars['vardef']['name']; ?>
"].js_more();' name="teamSelect">
            <img src="<?php echo smarty_function_sugar_getimagepath(array('file' => "id-ff-select.png"), $this);?>
">
            </button><button type="button" class="button lastChild" value="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ADD_BUTTON'), $this);?>
" onclick="javascript:collection['<?php echo $this->_tpl_vars['displayParams']['formName']; ?>
_<?php echo $this->_tpl_vars['vardef']['name']; ?>
'].add(); if(collection['<?php echo $this->_tpl_vars['displayParams']['formName']; ?>
_<?php echo $this->_tpl_vars['vardef']['name']; ?>
'].more_status)collection['<?php echo $this->_tpl_vars['displayParams']['formName']; ?>
_<?php echo $this->_tpl_vars['vardef']['name']; ?>
'].js_more();"  name="teamAdd">
            <img src="<?php echo smarty_function_sugar_getimagepath(array('file' => "id-ff-add.png"), $this);?>
"></button>
			</span>
		</td>        
        <td id="lineLabel_<?php echo $this->_tpl_vars['vardef']['name']; ?>
_primary" <?php if (empty ( $this->_tpl_vars['values']['role_field'] )): ?>style="display:none"<?php endif; ?>>
            <?php echo smarty_function_sugar_translate(array('label' => 'LBL_COLLECTION_PRIMARY'), $this);?>

        </td>
		<td>
        <a class="utilsLink" href="javascript:collection['<?php echo $this->_tpl_vars['displayParams']['formName']; ?>
_<?php echo $this->_tpl_vars['vardef']['name']; ?>
'].js_more();" id='more_<?php echo $this->_tpl_vars['displayParams']['formName']; ?>
_<?php echo $this->_tpl_vars['vardef']['name']; ?>
' <?php if (empty ( $this->_tpl_vars['values']['secondaries'] )): ?>style="display:none"<?php endif; ?>></a>
        </td>
        <td >&nbsp;</td>
    </tr>
    <tr id="lineFields_<?php echo $this->_tpl_vars['displayParams']['formName']; ?>
_<?php echo $this->_tpl_vars['vardef']['name']; ?>
_0" class="lineFields_<?php echo $this->_tpl_vars['displayParams']['formName']; ?>
_<?php echo $this->_tpl_vars['vardef']['name']; ?>
">
        <td valign="top">
            <span id='<?php echo $this->_tpl_vars['displayParams']['formName']; ?>
_<?php echo $this->_tpl_vars['vardef']['name']; ?>
_input_div_0' name='teamset_div'>   
            <input type="text" name="<?php echo $this->_tpl_vars['vardef']['name']; ?>
_collection_0" class="sqsEnabled" tabindex="<?php echo $this->_tpl_vars['tabindex']; ?>
" id="<?php echo $this->_tpl_vars['vardef']['name']; ?>
_collection_0" size="<?php echo $this->_tpl_vars['displayParams']['size']; ?>
" value="" title='<?php echo $this->_tpl_vars['vardef']['help']; ?>
' autocomplete="off" <?php echo $this->_tpl_vars['displayParams']['readOnly']; ?>
 <?php echo $this->_tpl_vars['displayParams']['field']; ?>
>
            <input type="hidden" name="id_<?php echo $this->_tpl_vars['vardef']['name']; ?>
_collection_0" id="id_<?php echo $this->_tpl_vars['vardef']['name']; ?>
_collection_0" value="">
            </span>
        </td>
<!-- BEGIN Remove and Radio -->
        <td valign="top" nowrap>
            &nbsp;
            <img id="remove_<?php echo $this->_tpl_vars['vardef']['name']; ?>
_collection_0" name="remove_<?php echo $this->_tpl_vars['vardef']['name']; ?>
_collection_0" src="<?php echo smarty_function_sugar_getimagepath(array('file' => 'id-ff-remove.png'), $this);?>
" onclick="collection['<?php echo $this->_tpl_vars['displayParams']['formName']; ?>
_<?php echo $this->_tpl_vars['vardef']['name']; ?>
'].remove(0);"/>
            <?php if (! empty ( $this->_tpl_vars['displayParams']['allowNewValue'] )): ?>
            <input type="hidden" name="allow_new_value_<?php echo $this->_tpl_vars['vardef']['name']; ?>
_collection_0" id="allow_new_value_<?php echo $this->_tpl_vars['vardef']['name']; ?>
_collection_0" value="true">
            <?php endif; ?>
        </td>
        <td valign="top" align="center">
            <span id='<?php echo $this->_tpl_vars['displayParams']['formName']; ?>
_<?php echo $this->_tpl_vars['vardef']['name']; ?>
_radio_div_0'>
            <input id="primary_<?php echo $this->_tpl_vars['vardef']['name']; ?>
_collection_0" name="primary_<?php echo $this->_tpl_vars['vardef']['name']; ?>
_collection" type="radio" class="radio" value="0" style="visibility:visible<?php if (empty ( $this->_tpl_vars['values']['role_field'] )): ?>;display:none;<?php endif; ?>" onclick="collection['<?php echo $this->_tpl_vars['displayParams']['formName']; ?>
_<?php echo $this->_tpl_vars['vardef']['name']; ?>
'].changePrimary(true);" />
            </span>
        </td>
        <td>&nbsp;</td>
<!-- END Remove and Radio -->
    </tr>
</table>
<table style="border-spacing: 0pt;">
    <tr>
		<td nowrap>
            <div id='<?php echo $this->_tpl_vars['displayParams']['formName']; ?>
_<?php echo $this->_tpl_vars['vardef']['name']; ?>
_mass_operation_div'>
        	<input type="radio" class="radio" name="<?php echo $this->_tpl_vars['vardef']['name']; ?>
_type" value="replace" checked> <?php echo smarty_function_sugar_translate(array('label' => 'LBL_REPLACE_BUTTON'), $this);?>

			<input type="radio" class="radio" name="<?php echo $this->_tpl_vars['vardef']['name']; ?>
_type" value="add"> <?php echo smarty_function_sugar_translate(array('label' => 'LBL_ADD_BUTTON'), $this);?>

            </div>	
		</td>
	</tr>    
</table>
<?php if (! empty ( $this->_tpl_vars['values']['secondaries'] )): ?>
            <?php $_from = $this->_tpl_vars['values']['secondaries']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['secondary_field']):
?>
                <script type="text/javascript">
                    var temp_array = new Array();
                    temp_array['name'] = '<?php echo $this->_tpl_vars['secondary_field']['name']; ?>
';
                    temp_array['id'] = '<?php echo $this->_tpl_vars['secondary_field']['id']; ?>
';
                    //collection["<?php echo $this->_tpl_vars['displayParams']['formName']; ?>
_<?php echo $this->_tpl_vars['vardef']['name']; ?>
"].secondaries_values.push(temp_array);
                </script>
            <?php endforeach; endif; unset($_from);  endif; ?>
<!--
Put this button in here since we have moved the Add and Select buttons above the text fields, the accesskey will skip these. So create this button
and push it outside the screen.
-->
 <input style='position:absolute; left:-9999px; width: 0px; height: 0px;' accesskey='T' halign='left' type="button" class="button" value="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_SELECT_BUTTON_LABEL'), $this);?>
" onclick='javascript:open_popup("Teams", 600, 400, "", true, false, <?php echo '{"call_back_function":"set_return_teams_for_editview","form_name": '; ?>
 "<?php echo $this->_tpl_vars['displayParams']['formName']; ?>
" <?php echo ',"field_name":"team_name","field_to_name_array":{"id":"team_id","name":"team_name"}}'; ?>
, "MULTISELECT", true);'>

<script type="text/javascript"> 
    collection["<?php echo $this->_tpl_vars['displayParams']['formName']; ?>
_<?php echo $this->_tpl_vars['vardef']['name']; ?>
"].add_secondaries(collection["<?php echo $this->_tpl_vars['displayParams']['formName']; ?>
_<?php echo $this->_tpl_vars['vardef']['name']; ?>
"].secondaries_values);
</script>
<?php echo $this->_tpl_vars['quickSearchCode']; ?>


<script type="text/javascript">
addToValidate('MassUpdate', 'team_name_mass', 'teamset_mass', true, 'Team');
</script>