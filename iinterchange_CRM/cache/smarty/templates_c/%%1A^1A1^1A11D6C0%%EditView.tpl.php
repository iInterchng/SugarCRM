<?php /* Smarty version 2.6.11, created on 2014-05-08 13:30:01
         compiled from include/SugarFields/Fields/Datetime/EditView.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugarvar', 'include/SugarFields/Fields/Datetime/EditView.tpl', 30, false),)), $this); ?>
{*
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

*}
<?php ob_start();  echo smarty_function_sugarvar(array('key' => 'name'), $this); $this->_smarty_vars['capture']['idname'] = ob_get_contents();  $this->assign('idname', ob_get_contents());ob_end_clean();  if (! empty ( $this->_tpl_vars['displayParams']['idName'] )): ?>
    <?php $this->assign('idname', $this->_tpl_vars['displayParams']['idName']);  endif; ?>
<span class="dateTime">
{assign var=date_value value=<?php echo smarty_function_sugarvar(array('key' => 'value','string' => true), $this);?>
 }
<input class="date_input" autocomplete="off" type="text" name="<?php echo $this->_tpl_vars['idname']; ?>
" id="<?php echo $this->_tpl_vars['idname']; ?>
" value="{$date_value}" title='<?php echo $this->_tpl_vars['vardef']['help']; ?>
' <?php echo $this->_tpl_vars['displayParams']['field']; ?>
 tabindex='<?php echo $this->_tpl_vars['tabindex']; ?>
' size="11" maxlength="10" >
<?php if (! $this->_tpl_vars['displayParams']['hiddeCalendar']): ?>
<img border="0" src="{sugar_getimagepath file='jscalendar.gif'}" alt="{$APP.LBL_ENTER_DATE}" id="<?php echo $this->_tpl_vars['idname']; ?>
_trigger" align="absmiddle" />
<?php endif;  if ($this->_tpl_vars['displayParams']['showFormats']): ?>
&nbsp;(<span class="dateFormat">{$USER_DATEFORMAT}</span>)
<?php endif; ?>
</span>
<?php if (! $this->_tpl_vars['displayParams']['hiddeCalendar']): ?>
<script type="text/javascript">
Calendar.setup ({ldelim}
inputField : "<?php echo $this->_tpl_vars['idname']; ?>
",
ifFormat : "{$CALENDAR_FORMAT}",
daFormat : "{$CALENDAR_FORMAT}",
button : "<?php echo $this->_tpl_vars['idname']; ?>
_trigger",
singleClick : true,
dateStr : "{$date_value}",
step : 1,
weekNumbers:false
{rdelim}
);
</script>
<?php endif; ?>