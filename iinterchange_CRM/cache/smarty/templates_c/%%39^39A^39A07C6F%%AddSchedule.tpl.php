<?php /* Smarty version 2.6.11, created on 2014-05-09 17:35:31
         compiled from modules/Reports/tpls/AddSchedule.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_getjspath', 'modules/Reports/tpls/AddSchedule.tpl', 11, false),)), $this); ?>
 
<?php echo $this->_tpl_vars['PAGE_TITLE']; ?>

<head>
<title><?php echo $this->_tpl_vars['MOD']['LBL_SCHEDULE_EMAIL']; ?>
</title>

<?php echo $this->_tpl_vars['STYLESHEET']; ?>


<script type="text/javascript" src='<?php echo smarty_function_sugar_getjspath(array('file' => "include/javascript/sugar_3.js"), $this);?>
'></script>
<script type="text/javascript" src='<?php echo smarty_function_sugar_getjspath(array('file' => "include/javascript/sugar_grp1_yui.js"), $this);?>
'></script>
<script type="text/javascript" src='<?php echo smarty_function_sugar_getjspath(array('file' => "include/javascript/calendar.js"), $this);?>
'></script>
<script type="text/javascript" src='<?php echo smarty_function_sugar_getjspath(array('file' => "include/javascript/sugar_grp1.js"), $this);?>
'></script>
<script type="text/javascript" src='<?php echo smarty_function_sugar_getjspath(array('file' => "include/SugarFields/Fields/Datetimecombo/Datetimecombo.js"), $this);?>
'></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['CACHE_DIR']; ?>
jsLanguage/<?php echo $this->_tpl_vars['CURRENT_LANGUAGE']; ?>
.js?s=<?php echo $this->_tpl_vars['JS_VERSION']; ?>
&c=<?php echo $this->_tpl_vars['JS_CUSTON_VERSION']; ?>
&j=<?php echo $this->_tpl_vars['JS_LANGUAGE_VERSION']; ?>
"></script>
</head>
<body class='tabForm'>
<form action='index.php' name='add_schedule' method='POST'>
<table  width='100%'  id='schedule_table' border='0'>
<tr>
    <td scope="row" id="date_start_label" ><slot><?php echo $this->_tpl_vars['MOD']['LBL_START_DATE']; ?>
: </slot></td>
    <td ><slot>
        <table  cellpadding="0" cellspacing="0">
            <tr>
                <td nowrap><input name='schedule_date_start' id='date_start_date' onblur="parseDate(this, '<?php echo $this->_tpl_vars['CALENDAR_DATEFORMAT']; ?>
');" tabindex='1' size='11' maxlength='10' type="text" disabled=""> 
                            <img src="index.php?entryPoint=getImage&themeName=<?php echo $this->_tpl_vars['THEME']; ?>
&imageName=jscalendar.gif" alt="<?php echo $this->_tpl_vars['CALENDAR_DATEFORMAT']; ?>
"  id="jscal_trigger" align="absmiddle" >&nbsp;
                            <input type="hidden" id="date_start" name="date_start" value="<?php echo $this->_tpl_vars['DATE_START']; ?>
">
                            <span id="schedule_time_section"></span>
                </td>
           </tr>
           <tr>
                <td nowrap><span class="dateFormat"><?php echo $this->_tpl_vars['USER_DATEFORMAT']; ?>
</span>
                </td>
          </tr>
        </table></slot>
    </td>
    <td scope="row" ><slot><?php echo $this->_tpl_vars['MOD']['LBL_SCHEDULE_ACTIVE']; ?>
: </td>
    <td ><slot><input type='checkbox' class="checkbox" name='schedule_active' id='schedule_active' <?php echo $this->_tpl_vars['SCHEDULE_ACTIVE_CHECKED']; ?>
></slot></td>
</tr>
<tr>
    <td scope="row"><slot><?php echo $this->_tpl_vars['MOD']['LBL_TIME_INTERVAL']; ?>
: </slot></td>
    <td ><slot><select name='schedule_time_interval' id='schedule_time_interval'><?php echo $this->_tpl_vars['TIME_INTERVAL_SELECT']; ?>
</select></slot></td>
    <td scope="row"><slot><?php echo $this->_tpl_vars['MOD']['LBL_NEXT_RUN']; ?>
:</slot></td>
    <td ><slot><?php echo $this->_tpl_vars['NEXT_RUN']; ?>
</slot></td>
</tr>
<tr>
<td scope="row">&nbsp; </td>
<td >&nbsp;</td>
<td scope="row">&nbsp;</td>
<td ><input class="button" type='submit' name='update_schedule' value='<?php echo $this->_tpl_vars['MOD']['LBL_UPDATE_SCHEDULE']; ?>
' onclick="return check_form('add_schedule');"></td>
</tr>
<tr><td height='100%'></td></tr>
</table>
<input type='hidden' name='schedule_id' value='<?php echo $this->_tpl_vars['SCHEDULE_ID']; ?>
'>
<input type='hidden' name='save_schedule_msi' value='true'>
<input type='hidden' name='schedule_type' value='<?php echo $this->_tpl_vars['SCHEDULE_TYPE']; ?>
'>
<input type='hidden' name='refreshPage' value='<?php echo $this->_tpl_vars['REFRESH_PAGE']; ?>
'>
<input type='hidden' name='module' value='Reports'>
<input type='hidden' name='action' value='add_schedule'>
<input type='hidden' name='to_pdf' value='true'>
<input type='hidden' name='id' value='<?php echo $this->_tpl_vars['RECORD']; ?>
'>


</form>

<script type="text/javascript">

var combo_date_start = new Datetimecombo("<?php echo $this->_tpl_vars['DATE_START']; ?>
", "date_start", "<?php echo $this->_tpl_vars['TIME_FORMAT']; ?>
", "", '', '', true);
text = combo_date_start.html(false);
document.getElementById('schedule_time_section').innerHTML = text;
eval(combo_date_start.jsscript(''));

function update_date_start_available() {
      YAHOO.util.Event.onAvailable("date_start_date", this.handleOnAvailable, this); 
}

update_date_start_available.prototype.handleOnAvailable = function(me) 
{
	Calendar.setup ({
	onClose : update_date_start,
	inputField : "date_start_date",
	ifFormat : "<?php echo $this->_tpl_vars['CALENDAR_DATEFORMAT']; ?>
",
	daFormat : "<?php echo $this->_tpl_vars['CALENDAR_DATEFORMAT']; ?>
",
	button : "jscal_trigger",
	singleClick : true,
	step : 1,
	weekNumbers:false
	});
	
	//Call update for first time to round hours and minute values
	combo_date_start.update();
}

var obj_date_start = new update_date_start_available();

addToValidate('add_schedule',"date_start_date",'date',false,"Start Date");
addToValidateBinaryDependency('add_schedule',"date_start_hours", 'alpha', false, "<?php echo $this->_tpl_vars['APP']['ERR_MISSING_REQUIRED_FIELDS']; ?>
 <?php echo $this->_tpl_vars['APP']['LBL_HOURS']; ?>
" ,"date_start_date");
addToValidateBinaryDependency('add_schedule', "date_start_minutes", 'alpha', false, "<?php echo $this->_tpl_vars['APP']['ERR_MISSING_REQUIRED_FIELDS']; ?>
 <?php echo $this->_tpl_vars['APP']['LBL_MINUTES']; ?>
" ,"date_start_date");
addToValidateBinaryDependency('add_schedule', "date_start_meridiem", 'alpha', false, "<?php echo $this->_tpl_vars['APP']['ERR_MISSING_REQUIRED_FIELDS']; ?>
 <?php echo $this->_tpl_vars['APP']['LBL_MERIDIEM']; ?>
","date_start_date");
</script>
<?php echo $this->_tpl_vars['TIMEDATE_JS']; ?>

</body>