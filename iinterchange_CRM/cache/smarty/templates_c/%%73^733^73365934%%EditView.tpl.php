<?php /* Smarty version 2.6.11, created on 2014-05-09 16:24:33
         compiled from include/SugarFields/Fields/Datetimecombo/EditView.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugarvar', 'include/SugarFields/Fields/Datetimecombo/EditView.tpl', 30, false),array('modifier', 'cat', 'include/SugarFields/Fields/Datetimecombo/EditView.tpl', 35, false),)), $this); ?>
{*
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

*}
<?php ob_start();  echo smarty_function_sugarvar(array('key' => 'name'), $this); $this->_smarty_vars['capture']['idname'] = ob_get_contents();  $this->assign('idname', ob_get_contents());ob_end_clean();  if (! empty ( $this->_tpl_vars['displayParams']['idName'] )): ?>
    <?php $this->assign('idname', $this->_tpl_vars['displayParams']['idName']);  endif; ?>

<?php $this->assign('flag_field', ((is_array($_tmp=$this->_tpl_vars['vardef']['name'])) ? $this->_run_mod_handler('cat', true, $_tmp, '_flag') : smarty_modifier_cat($_tmp, '_flag'))); ?>
<table border="0" cellpadding="0" cellspacing="0" class="dateTime">
<tr valign="middle">
<td nowrap>
<input autocomplete="off" type="text" id="<?php echo $this->_tpl_vars['idname']; ?>
_date" value="{$fields[<?php echo smarty_function_sugarvar(array('key' => 'name','stringFormat' => true), $this);?>
].value}" size="11" maxlength="10" title='<?php echo $this->_tpl_vars['vardef']['help']; ?>
' tabindex="<?php echo $this->_tpl_vars['tabindex']; ?>
" onblur="combo_<?php echo $this->_tpl_vars['idname']; ?>
.update(); <?php if (isset ( $this->_tpl_vars['displayParams']['updateCallback'] )):  echo $this->_tpl_vars['displayParams']['updateCallback'];  endif; ?>" onchange="combo_<?php echo $this->_tpl_vars['idname']; ?>
.update(); <?php if (isset ( $this->_tpl_vars['displayParams']['updateCallback'] )):  echo $this->_tpl_vars['displayParams']['updateCallback'];  endif; ?>">
<img border="0" src="{sugar_getimagepath file='jscalendar.gif'}" alt="{$APP.LBL_ENTER_DATE}" id="<?php echo $this->_tpl_vars['idname']; ?>
_trigger" name="<?php echo $this->_tpl_vars['idname']; ?>
_trigger" align="absmiddle">&nbsp;
<?php if (empty ( $this->_tpl_vars['displayParams']['splitDateTime'] )): ?>
</td>
<td nowrap>
<?php else: ?>
<br>
<?php endif; ?>
<div id="<?php echo $this->_tpl_vars['idname']; ?>
_time_section"></div>
<?php if ($this->_tpl_vars['displayParams']['showNoneCheckbox']): ?>
<script type="text/javascript">
function set_<?php echo $this->_tpl_vars['idname']; ?>
_values(form) {ldelim}
 if(form.<?php echo $this->_tpl_vars['idname']; ?>
_flag.checked)  {ldelim} 
	form.<?php echo $this->_tpl_vars['idname']; ?>
_flag.value=1;
	form.<?php echo $this->_tpl_vars['idname']; ?>
.value="";
	form.<?php echo $this->_tpl_vars['idname']; ?>
.readOnly=true;
 {rdelim} else  {ldelim} 
	form.<?php echo $this->_tpl_vars['idname']; ?>
_flag.value=0;
	form.<?php echo $this->_tpl_vars['idname']; ?>
.readOnly=false;
 {rdelim} 
{rdelim}
</script>
<?php endif; ?>
</td>
</tr>
<?php if ($this->_tpl_vars['displayParams']['showFormats']): ?>
<tr valign="middle">
<td nowrap>
<span class="dateFormat">{$USER_DATEFORMAT}</span>
</td>
<td nowrap>
<span class="dateFormat">{$TIME_FORMAT}</span>
</td>
</tr>
<?php endif; ?>
</table>
<input type="hidden" class="DateTimeCombo" id="<?php echo $this->_tpl_vars['idname']; ?>
" name="<?php echo $this->_tpl_vars['idname']; ?>
" value="{$fields[<?php echo smarty_function_sugarvar(array('key' => 'name','stringFormat' => true), $this);?>
].value}">
<script type="text/javascript" src="include/SugarFields/Fields/Datetimecombo/Datetimecombo.js"></script>
<script type="text/javascript">
var combo_<?php echo $this->_tpl_vars['idname']; ?>
 = new Datetimecombo("{$fields[<?php echo smarty_function_sugarvar(array('key' => 'name','stringFormat' => true), $this);?>
].value}", "<?php echo $this->_tpl_vars['idname']; ?>
", "{$TIME_FORMAT}", "<?php echo $this->_tpl_vars['tabindex']; ?>
", '<?php echo $this->_tpl_vars['displayParams']['showNoneCheckbox']; ?>
', false, true);
//Render the remaining widget fields
text = combo_<?php echo $this->_tpl_vars['idname']; ?>
.html('<?php echo $this->_tpl_vars['displayParams']['updateCallback']; ?>
');
document.getElementById('<?php echo $this->_tpl_vars['idname']; ?>
_time_section').innerHTML = text;

//Call eval on the update function to handle updates to calendar picker object
eval(combo_<?php echo $this->_tpl_vars['idname']; ?>
.jsscript('<?php echo $this->_tpl_vars['displayParams']['updateCallback']; ?>
'));

addToValidate('{$form_name}',"<?php echo $this->_tpl_vars['idname']; ?>
_date",'date',false,"<?php echo $this->_tpl_vars['idname']; ?>
");
addToValidateBinaryDependency('{$form_name}',"<?php echo $this->_tpl_vars['idname']; ?>
_hours", 'alpha', false, "{$APP.ERR_MISSING_REQUIRED_FIELDS} {$APP.LBL_HOURS}" ,"<?php echo $this->_tpl_vars['idname']; ?>
_date");
addToValidateBinaryDependency('{$form_name}', "<?php echo $this->_tpl_vars['idname']; ?>
_minutes", 'alpha', false, "{$APP.ERR_MISSING_REQUIRED_FIELDS} {$APP.LBL_MINUTES}" ,"<?php echo $this->_tpl_vars['idname']; ?>
_date");
addToValidateBinaryDependency('{$form_name}', "<?php echo $this->_tpl_vars['idname']; ?>
_meridiem", 'alpha', false, "{$APP.ERR_MISSING_REQUIRED_FIELDS} {$APP.LBL_MERIDIEM}","<?php echo $this->_tpl_vars['idname']; ?>
_date");

YAHOO.util.Event.onDOMReady(function()
{ldelim}

	Calendar.setup ({ldelim}
	onClose : update_<?php echo $this->_tpl_vars['idname']; ?>
,
	inputField : "<?php echo $this->_tpl_vars['idname']; ?>
_date",
	ifFormat : "{$CALENDAR_FORMAT}",
	daFormat : "{$CALENDAR_FORMAT}",
	button : "<?php echo $this->_tpl_vars['idname']; ?>
_trigger",
	singleClick : true,
	step : 1,
	weekNumbers: false,
	comboObject: combo_<?php echo $this->_tpl_vars['idname']; ?>

	{rdelim});
	
	//Call update for first time to round hours and minute values
	combo_<?php echo $this->_tpl_vars['idname']; ?>
.update(false);

{rdelim}); 
</script>