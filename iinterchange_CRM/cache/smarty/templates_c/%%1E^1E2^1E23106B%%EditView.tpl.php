<?php /* Smarty version 2.6.11, created on 2014-05-09 16:24:34
         compiled from include/SugarFields/Fields/Parent/EditView.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugarvar', 'include/SugarFields/Fields/Parent/EditView.tpl', 31, false),)), $this); ?>
{*
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

*}
<select name='parent_type' tabindex="<?php echo $this->_tpl_vars['tabindex']; ?>
" id='parent_type' title='<?php echo $this->_tpl_vars['vardef']['help']; ?>
' 
onchange='document.{$form_name}.<?php echo smarty_function_sugarvar(array('key' => 'name'), $this);?>
.value="";document.{$form_name}.parent_id.value=""; <?php echo smarty_function_sugarvar(array('key' => 'name'), $this);?>
changeQS(); checkParentType(document.{$form_name}.parent_type.value, document.{$form_name}.btn_<?php echo smarty_function_sugarvar(array('key' => 'name'), $this);?>
);'>
{html_options options=<?php echo smarty_function_sugarvar(array('key' => 'options','string' => true), $this);?>
 selected=$fields.parent_type.value sortoptions=true}
</select>

<?php if ($this->_tpl_vars['displayParams']['split']): ?>
<br>
<?php endif; ?>
{if empty(<?php echo smarty_function_sugarvar(array('key' => 'options','string' => true), $this);?>
[$fields.parent_type.value])}
	{assign var="keepParent" value = 0}
{else}
	{assign var="keepParent" value = 1}
{/if}
<input type="text" name="<?php echo smarty_function_sugarvar(array('key' => 'name'), $this);?>
" id="<?php echo smarty_function_sugarvar(array('key' => 'name'), $this);?>
" class="sqsEnabled" tabindex="<?php echo $this->_tpl_vars['tabindex']; ?>
" 
    size="<?php echo $this->_tpl_vars['displayParams']['size']; ?>
" {if $keepParent}value="<?php echo smarty_function_sugarvar(array('key' => 'value'), $this);?>
"{/if} autocomplete="off"><input type="hidden" name="<?php echo smarty_function_sugarvar(array('memberName' => 'vardef.id_name','key' => 'name'), $this);?>
" id="<?php echo smarty_function_sugarvar(array('memberName' => 'vardef.id_name','key' => 'name'), $this);?>
"  
{if $keepParent}value="<?php echo smarty_function_sugarvar(array('memberName' => 'vardef.id_name','key' => 'value'), $this);?>
"{/if}>
<span class="id-ff multiple">
<button type="button" name="btn_<?php echo smarty_function_sugarvar(array('key' => 'name'), $this);?>
" id="btn_<?php echo smarty_function_sugarvar(array('key' => 'name'), $this);?>
" tabindex="<?php echo $this->_tpl_vars['tabindex']; ?>
" 
title="{$APP.LBL_SELECT_BUTTON_TITLE}" accessKey="{$APP.LBL_SELECT_BUTTON_KEY}" class="button firstChild" value="{$APP.LBL_SELECT_BUTTON_LABEL}" 
onclick='open_popup(document.{$form_name}.parent_type.value, 600, 400, "", true, false, <?php echo $this->_tpl_vars['displayParams']['popupData']; ?>
, "single", true);' <?php if (isset ( $this->_tpl_vars['displayParams']['javascript']['btn'] )):  echo $this->_tpl_vars['displayParams']['javascript']['btn'];  endif; ?>><img src="{sugar_getimagepath file="id-ff-select.png"}"></button><?php if (empty ( $this->_tpl_vars['displayParams']['selectOnly'] )): ?><button type="button" name="btn_clr_<?php echo smarty_function_sugarvar(array('key' => 'name'), $this);?>
" id="btn_clr_<?php echo smarty_function_sugarvar(array('key' => 'name'), $this);?>
" tabindex="<?php echo $this->_tpl_vars['tabindex']; ?>
" title="{$APP.LBL_CLEAR_BUTTON_TITLE}" accessKey="{$APP.LBL_CLEAR_BUTTON_KEY}" class="button lastChild" onclick="this.form.<?php echo smarty_function_sugarvar(array('key' => 'name'), $this);?>
.value = ''; this.form.<?php echo smarty_function_sugarvar(array('memberName' => 'vardef.id_name','key' => 'name'), $this);?>
.value = '';" value="{$APP.LBL_CLEAR_BUTTON_LABEL}" <?php if (isset ( $this->_tpl_vars['displayParams']['javascript']['btn_clear'] )):  echo $this->_tpl_vars['displayParams']['javascript']['btn_clear'];  endif; ?>><img src="{sugar_getimagepath file="id-ff-clear.png"}"></button>
</span>
<?php endif; ?>

<script type="text/javascript">
function <?php echo smarty_function_sugarvar(array('key' => 'name'), $this);?>
changeQS() {literal}{
{/literal}
	new_module = document.forms["{$form_name}"].elements["parent_type"].value;
{literal}
	if(typeof(disabledModules[new_module]) != 'undefined') {
{/literal}
		sqs_objects["{$form_name}_parent_name"]["disable"] = true;
		document.forms["{$form_name}"].elements["parent_name"].readOnly = true;
{literal}
	} else {
{/literal}
		sqs_objects["{$form_name}_parent_name"]["disable"] = false;
		document.forms["{$form_name}"].elements["parent_name"].readOnly = false;
{literal}
	}
{/literal}
	sqs_objects["{$form_name}_parent_name"]["modules"] = new Array(new_module);
	if(typeof QSProcessedFieldsArray != 'undefined')
{literal}
    {
{/literal}
	   QSProcessedFieldsArray["{$form_name}_parent_name"] = false;
{literal}
	}	
{/literal}    
    enableQS(false);
{literal}
}
{/literal}
</script>
{literal}
<?php echo $this->_tpl_vars['displayParams']['disabled_parent_types']; ?>

{/literal}
{literal}
<?php echo $this->_tpl_vars['quickSearchCode']; ?>

{/literal}