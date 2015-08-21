<?php /* Smarty version 2.6.11, created on 2014-05-08 12:15:56
         compiled from modules/Administration/templates/enableWirelessModules.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_getjspath', 'modules/Administration/templates/enableWirelessModules.tpl', 30, false),array('function', 'sugar_translate', 'modules/Administration/templates/enableWirelessModules.tpl', 53, false),)), $this); ?>
<script type="text/javascript" src="<?php echo smarty_function_sugar_getjspath(array('file' => 'include/javascript/sugar_grp_yui_widgets.js'), $this);?>
"></script>
<link rel="stylesheet" type="text/css" href="<?php echo smarty_function_sugar_getjspath(array('file' => 'modules/Connectors/tpls/tabs.css'), $this);?>
"/>

<form name="enableWirelessModules" method="POST">
	<input type="hidden" name="module" value="Administration">
	<input type="hidden" name="action" value="updateWirelessEnabledModules">
	<input type="hidden" name="enabled_modules" value="">
	
	<table border="0" cellspacing="1" cellpadding="1">
		<tr>
			<td>
			<input title="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_LABEL']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_TITLE']; ?>
" class="button primary" onclick="SUGAR.saveMobileSettings();" type="button" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_LABEL']; ?>
">
			<input title="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_KEY']; ?>
" class="button" onclick="document.enableWirelessModules.action.value='';" type="submit" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
">
			</td>
		</tr>
	</table>
	
	<div class='add_table' style='margin-bottom:5px'>
		<table id="enableWirelessModules" class="enableWirelessModules edit view" style='margin-bottom:0px;' border="0" cellspacing="0" cellpadding="0">
			<tr>
			    <td colspan="2">
			        <table>
                    <tr>
                        <td scope="row" nowrap="nowrap"><?php echo smarty_function_sugar_translate(array('module' => 'Configurator','label' => 'LBL_WIRELESS_LIST_ENTRIES'), $this);?>
: </td>
                        <td>
                            <input type='text' size='4' id="max_list" name='wl_list_max_entries_per_page' value='<?php echo $this->_tpl_vars['config']['wl_list_max_entries_per_page']; ?>
'>
                        </td>
                    </tr>
                    <tr>
                        <td scope="row" nowrap="nowrap"><?php echo smarty_function_sugar_translate(array('module' => 'Configurator','label' => 'LBL_WIRELESS_SUBPANEL_LIST_ENTRIES'), $this);?>
: </td>
                        <td>
                            <input type='text' size='4' id="max_subs" name='wl_list_max_entries_per_subpanel' value='<?php echo $this->_tpl_vars['config']['wl_list_max_entries_per_subpanel']; ?>
'>
                        </td>
                    </tr>
                </td>
            </tr>
		    <tr>
				<td width='1%'>
					<div id="enabled_div"></div>	
				</td>
				<td>
					<div id="disabled_div"></div>
				</td>
			</tr>
		</table>
	</div>
	
	<table border="0" cellspacing="1" cellpadding="1">
	   <tr>
	       <td colspan="2"><?php echo smarty_function_sugar_translate(array('module' => 'Configurator','label' => 'LBL_MOBILE_MOD_REPORTS_RESTRICTION'), $this);?>
</td>
	   </tr>
		<tr>
			<td>
				<input title="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_LABEL']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_TITLE']; ?>
" class="button primary" onclick="SUGAR.saveMobileSettings();" type="button" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_LABEL']; ?>
">
				<input title="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_KEY']; ?>
" class="button" onclick="document.enableWirelessModules.action.value='';" type="submit" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
">
			</td>
		</tr>
	</table>
</form>

<script type="text/javascript">
(function(){
    var Connect = YAHOO.util.Connect;
	Connect.url = 'index.php';
    Connect.method = 'POST';
    Connect.timeout = 300000;
	var get = YAHOO.util.Dom.get;

	var enabled_modules = <?php echo $this->_tpl_vars['enabled_modules']; ?>
;
	var disabled_modules = <?php echo $this->_tpl_vars['disabled_modules']; ?>
;
	var lblEnabled = '<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ACTIVE_MODULES'), $this);?>
';
	var lblDisabled = '<?php echo smarty_function_sugar_translate(array('label' => 'LBL_DISABLED_MODULES'), $this);?>
';
	<?php echo '
	SUGAR.mobileEnabledTable = new YAHOO.SUGAR.DragDropTable(
		"enabled_div",
		[{key:"label",  label: lblEnabled, width: 200, sortable: false},
		 {key:"module", label: lblEnabled, hidden:true}],
		new YAHOO.util.LocalDataSource(enabled_modules, {
			responseSchema: {fields : [{key : "module"}, {key : "label"}]}
		}),  
		{height: "300px"}
	);
	SUGAR.mobileDisabledTable = new YAHOO.SUGAR.DragDropTable(
		"disabled_div",
		[{key:"label",  label: lblDisabled, width: 200, sortable: false},
		 {key:"module", label: lblDisabled, hidden:true}],
		new YAHOO.util.LocalDataSource(disabled_modules, {
			responseSchema: {fields : [{key : "module"}, {key : "label"}]}
		}),
		{height: "300px"}
	);
	SUGAR.mobileEnabledTable.disableEmptyRows = true;
	SUGAR.mobileDisabledTable.disableEmptyRows = true;
	SUGAR.mobileEnabledTable.addRow({module: "", label: ""});
	SUGAR.mobileDisabledTable.addRow({module: "", label: ""});
	SUGAR.mobileEnabledTable.render();
	SUGAR.mobileDisabledTable.render();
	
	SUGAR.saveMobileSettings = function()
	{
		var enabledTable = SUGAR.mobileEnabledTable;
		var modules = "";
		for(var i=0; i < enabledTable.getRecordSet().getLength(); i++){
			var data = enabledTable.getRecord(i).getData();
			if (data.module && data.module != \'\')
			    modules += "," + data.module;
		}
		modules = modules == "" ? modules : modules.substr(1);
		
		ajaxStatus.showStatus(SUGAR.language.get(\'Administration\', \'LBL_SAVING\'));
		Connect.asyncRequest(
            Connect.method, 
            Connect.url, 
            {success: SUGAR.saveCallBack},
			SUGAR.util.paramsToUrl({
				module: "Administration",
				action: "updateWirelessEnabledModules",
				enabled_modules: modules,
				wl_list_max_entries_per_page : get(\'max_list\').value,
				wl_list_max_entries_per_subpanel : get(\'max_subs\').value
			}) + "to_pdf=1"
        );
		
		return true;
	}
	SUGAR.saveCallBack = function(o)
	{
	   ajaxStatus.flashStatus(SUGAR.language.get(\'app_strings\', \'LBL_DONE\'));
	   if (o.responseText == "true")
	   {
	       window.location.assign(\'index.php?module=Administration&action=index\');
	   } 
	   else 
	   {
	       YAHOO.SUGAR.MessageBox.show({msg:o.responseText});
	   }
	}	
})();
'; ?>

</script>