<?php /* Smarty version 2.6.11, created on 2014-05-08 12:53:42
         compiled from modules/Administration/templates/ShortcutBar.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_getjspath', 'modules/Administration/templates/ShortcutBar.tpl', 30, false),array('function', 'sugar_translate', 'modules/Administration/templates/ShortcutBar.tpl', 87, false),)), $this); ?>
<script type="text/javascript" src="<?php echo smarty_function_sugar_getjspath(array('file' => 'include/javascript/sugar_grp_yui_widgets.js'), $this);?>
"></script>

<link rel="stylesheet" type="text/css" href="<?php echo smarty_function_sugar_getjspath(array('file' => 'modules/Connectors/tpls/tabs.css'), $this);?>
"/>
<style>.yui-dt-scrollable .yui-dt-bd {overflow-x: hidden;}</style>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr><td colspan='100'><h2><?php echo $this->_tpl_vars['title']; ?>
</h2></td></tr>
<tr><td><i class="info"><?php echo $this->_tpl_vars['msg']; ?>
</i></td></tr>
<td colspan='100'>
<?php if (empty ( $this->_tpl_vars['msg'] )): ?>
<form name="ConfigureShortcutBar" method="POST"  method="POST" action="index.php">
	<input type="hidden" name="module" value="Administration">
	<input type="hidden" name="action" value="ConfigureShortcutBar">
	<input type="hidden" id="enabled_modules" name="enabled_modules" value="">
	<input type="hidden" name="return_module" value="<?php echo $this->_tpl_vars['RETURN_MODULE']; ?>
">
	<input type="hidden" name="return_action" value="<?php echo $this->_tpl_vars['RETURN_ACTION']; ?>
">

	<table border="0" cellspacing="1" cellpadding="1">
		<tr>
			<td>
				<input title="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_KEY']; ?>
" class="button primary" onclick="SUGAR.saveShortcutBar();" type="button" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_LABEL']; ?>
" > 
				<input title="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_KEY']; ?>
" class="button" onclick="this.form.action.value='<?php echo $this->_tpl_vars['RETURN_ACTION']; ?>
'; this.form.module.value='<?php echo $this->_tpl_vars['RETURN_MODULE']; ?>
';" type="submit" name="button" value="  <?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
  ">
			</td>
		</tr>
	</table>
	<div class='add_table' style='margin-bottom:5px'>
		<table id="ConfigureTabs" class="themeSettings edit view" style='margin-bottom:0px;' border="0" cellspacing="0" cellpadding="0">
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
			<td>
				<input title="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_KEY']; ?>
" class="button primary" onclick="SUGAR.saveShortcutBar();" type="button" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_LABEL']; ?>
" > 
				<input title="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_KEY']; ?>
" class="button" onclick="this.form.action.value='<?php echo $this->_tpl_vars['RETURN_ACTION']; ?>
'; this.form.module.value='<?php echo $this->_tpl_vars['RETURN_MODULE']; ?>
';" type="submit" name="button" value="  <?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
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

	var enabled_modules = <?php echo $this->_tpl_vars['enabled_modules']; ?>
;
	var disabled_modules = <?php echo $this->_tpl_vars['disabled_modules']; ?>
;
	var lblEnabled = '<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ACTIVE_MODULES'), $this);?>
';
	var lblDisabled = '<?php echo smarty_function_sugar_translate(array('label' => 'LBL_DISABLED_MODULES'), $this);?>
';
	<?php echo '
	SUGAR.prodEnabledTable = new YAHOO.SUGAR.DragDropTable(
		"enabled_div",
		[{key:"label",  label: lblEnabled, width: 200, sortable: false},
		 {key:"module", label: lblEnabled, hidden:true}],
		new YAHOO.util.LocalDataSource(enabled_modules, {
			responseSchema: {
			   resultsList : "modules",
			   fields : [{key : "module"}, {key : "label"}]
			}
		}),  
		{height: "300px"}
	);
	SUGAR.prodDisabledTable = new YAHOO.SUGAR.DragDropTable(
		"disabled_div",
		[{key:"label",  label: lblDisabled, width: 200, sortable: false},
		 {key:"module", label: lblDisabled, hidden:true}],
		new YAHOO.util.LocalDataSource(disabled_modules, {
			responseSchema: {
			   resultsList : "modules",
			   fields : [{key : "module"}, {key : "label"}]
			}
		}),
		{height: "300px"}
	);
	SUGAR.prodEnabledTable.disableEmptyRows = true;
	SUGAR.prodDisabledTable.disableEmptyRows = true;
	SUGAR.prodEnabledTable.addRow({module: "", label: ""});
	SUGAR.prodDisabledTable.addRow({module: "", label: ""});
	SUGAR.prodEnabledTable.render();
	SUGAR.prodDisabledTable.render();
	
	SUGAR.saveShortcutBar = function()
	{
		var enabledTable = SUGAR.prodEnabledTable;
		var modules = [];
		if ( enabledTable.getRecordSet().getLength() > 11) //Max 10 + empty line
		{
			alert(\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ERROR_PROD_BAR_NUM_MODULES'), $this); echo '\');
			return false;
		}
		for(var i=0; i < enabledTable.getRecordSet().getLength(); i++){
			var data = enabledTable.getRecord(i).getData();
			if (data.module && data.module != \'\')
			    modules[i] = data.module;
		}
		
		ajaxStatus.showStatus(SUGAR.language.get(\'Administration\', \'LBL_SAVING\'));
		//YAHOO.SUGAR.MessageBox.show({title:"saving",msg:"Saving",close:false})
        Connect.asyncRequest(
            Connect.method, 
            Connect.url, 
            {success: SUGAR.saveCallBack},
			\'to_pdf=1&module=Administration&action=ConfigureShortcutBar&enabled_modules=\' + YAHOO.lang.JSON.stringify(modules)
        );
		
		return true;
	}
	SUGAR.saveCallBack = function(o)
	{
	   ajaxStatus.flashStatus(SUGAR.language.get(\'app_strings\', \'LBL_DONE\'));
	   if (o.responseText == "true")
	   {
	       window.location.assign(\'index.php?module=Administration&action=ConfigureShortcutBar\');
	   } 
	   else 
	   {
	       YAHOO.SUGAR.MessageBox.show({msg:o.responseText});
	   }
	}	
})();
'; ?>

</script>
<?php endif; ?>