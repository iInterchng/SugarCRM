<?php /* Smarty version 2.6.11, created on 2014-05-08 12:28:57
         compiled from modules/Configurator/tpls/SugarpdfSettings.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_radios', 'modules/Configurator/tpls/SugarpdfSettings.tpl', 54, false),array('function', 'counter', 'modules/Configurator/tpls/SugarpdfSettings.tpl', 65, false),)), $this); ?>

<script type='text/javascript' src='include/javascript/overlibmws.js'></script>
<script type='text/javascript'>var fileFields = new Array();</script>
<BR>
<form name="ConfigureSugarpdfSettings" enctype='multipart/form-data' method="POST" action="index.php?action=SugarpdfSettings&module=Configurator" onSubmit="if(checkFileType(null,1))return (check_form('ConfigureSugarpdfSettings'));else return false;">
<span class='error'><?php echo $this->_tpl_vars['error']; ?>
</span>
<table width="100%" cellpadding="0" cellspacing="0" border="0">
    <tr>
        <td style="padding-bottom: 2px;">
            <input title="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_KEY']; ?>
" class="button"  type="submit"  name="save" value="  <?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_LABEL']; ?>
  " >
            &nbsp;<input title="<?php echo $this->_tpl_vars['MOD']['LBL_RESTORE_BUTTON_LABEL']; ?>
" class="button"  type="submit"  name="restore" value="  <?php echo $this->_tpl_vars['MOD']['LBL_RESTORE_BUTTON_LABEL']; ?>
  " >
            &nbsp;<input title="<?php echo $this->_tpl_vars['MOD']['LBL_CANCEL_BUTTON_TITLE']; ?>
"  onclick="document.location.href='index.php?module=Administration&action=index'" class="button"  type="button" name="cancel" value="  <?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
  " >
        </td> 
    </tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
    <td>
    
    <table width="100%" border="0" cellspacing="0" cellpadding="0"  class="edit view" <?php if ($this->_tpl_vars['pdf_enable_ezpdf'] == '0'): ?>style="display:none"<?php endif; ?>>
        <tr>
           <td scope="row" style="text-align: center;"><?php echo smarty_function_html_radios(array('name' => 'sugarpdf_pdf_class','options' => $this->_tpl_vars['pdf_class'],'selected' => $this->_tpl_vars['selected_pdf_class'],'separator' => '    ','onchange' => 'processPDFClass()'), $this);?>
</td>
        </tr>
    </table>
    
    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="edit view" id="settingsForTCPDF">
        <tr>
            <th align="left" scope="row" colspan="4"><h4 ><?php echo $this->_tpl_vars['MOD']['SUGARPDF_BASIC_SETTINGS']; ?>
</h4></th>
        </tr>
        <tr>
            <td scope="row">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <?php echo smarty_function_counter(array('start' => 0,'assign' => 'count'), $this);?>

                <?php $_from = $this->_tpl_vars['SugarpdfSettings']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['name'] => $this->_tpl_vars['property']):
?>
                    <?php if ($this->_tpl_vars['property']['class'] == 'basic'): ?>
                        <?php echo smarty_function_counter(array(), $this);?>

                        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/Configurator/tpls/SugarpdfSettingsFields.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                    <?php endif; ?>
                <?php endforeach; endif; unset($_from); ?>
                <?php if ((1 & $this->_tpl_vars['count'])): ?>
                        <td  ></td>
                        <td  ></td>
                    </tr>
                <?php endif; ?>
            </table>
            </td>
        </tr>
    </table>
    
    
    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="edit view">
        <tr>
            <th align="left" scope="row" colspan="4"><h4 ><?php echo $this->_tpl_vars['MOD']['SUGARPDF_LOGO_SETTINGS']; ?>
</h4></th>
        </tr>
        <tr>
            <td scope="row">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <?php echo smarty_function_counter(array('start' => 0,'assign' => 'count'), $this);?>

                <?php $_from = $this->_tpl_vars['SugarpdfSettings']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['name'] => $this->_tpl_vars['property']):
?>
                    <?php if ($this->_tpl_vars['property']['class'] == 'logo'): ?>
                        <?php echo smarty_function_counter(array(), $this);?>

                        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/Configurator/tpls/SugarpdfSettingsFields.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                    <?php endif; ?>
                <?php endforeach; endif; unset($_from); ?>
                <?php if ((1 & $this->_tpl_vars['count'])): ?>
                        <td  ></td>
                        <td  ></td>
                    </tr>
                <?php endif; ?>
            </table>
            </td>
        </tr>
    </table>
<!--
    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="edit view">
        <tr>
            <th align="left" scope="row" colspan="4"><h4 ><?php echo $this->_tpl_vars['MOD']['SUGARPDF_ADVANCED_SETTINGS']; ?>
</h4></th>
        </tr>
        <tr>
            <td scope="row" scope="row">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <?php echo smarty_function_counter(array('start' => 0,'assign' => 'count'), $this);?>

                <?php $_from = $this->_tpl_vars['SugarpdfSettings']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['name'] => $this->_tpl_vars['property']):
?>
                    <?php if ($this->_tpl_vars['property']['class'] == 'advanced'): ?>
                        <?php echo smarty_function_counter(array(), $this);?>

                        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/Configurator/tpls/SugarpdfSettingsFields.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                    <?php endif; ?>
                <?php endforeach; endif; unset($_from); ?>
                <?php if ((1 & $this->_tpl_vars['count'])): ?>
                        <td  ></td>
                        <td  ></td>
                    </tr>
                <?php endif; ?>
            </table>
            </td>
        </tr>
    </table>
-->
    </td>
    </tr>
</table>

<div style="padding-top: 2px;">
<input title="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_TITLE']; ?>
" class="button"  type="submit" name="save" value="  <?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_LABEL']; ?>
  " />
&nbsp;<input title="<?php echo $this->_tpl_vars['MOD']['LBL_RESTORE_BUTTON_LABEL']; ?>
" class="button"  type="submit"  name="restore" value="  <?php echo $this->_tpl_vars['MOD']['LBL_RESTORE_BUTTON_LABEL']; ?>
  " >
&nbsp;<input title="<?php echo $this->_tpl_vars['MOD']['LBL_CANCEL_BUTTON_TITLE']; ?>
"  onclick="document.location.href='index.php?module=Administration&action=index'" class="button"  type="button" name="cancel" value="  <?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
  " />
</div>
<?php echo $this->_tpl_vars['JAVASCRIPT']; ?>

</form>
<?php echo '
<script type=\'text/javascript\'>
function checkFileType(id, submit) {
	if (submit == 0) {
		var fileName = document.getElementById(id).value;
	  	if (';  echo $this->_tpl_vars['GD_WARNING'];  echo '==1 && (fileName.lastIndexOf(".png") != -1||
	  		fileName.lastIndexOf(".PNG") != -1)) {
	  		fileFields[id]=id;
	  		//alert('; ?>
SUGAR.language.get('Configurator', 'PDF_GD_WARNING'<?php echo '));
	  	}
  	}
  	else if (submit == 1) {
  		for (fileField in fileFields) {
			var fileName = document.getElementById(fileField).value;
		  	if (';  echo $this->_tpl_vars['GD_WARNING'];  echo '==1 && (fileName.lastIndexOf(".png") != -1||
		  		fileName.lastIndexOf(".PNG") != -1)) {
		  		//add_error_style(\'ConfigureSugarpdfSettings\', fileField, SUGAR.language.get(\'Configurator\', \'PDF_GD_WARNING\'));
		  		alert('; ?>
SUGAR.language.get('Configurator', 'PDF_GD_WARNING'<?php echo '));
		  		return false;
		  	}
  		}
  	}
  	return true;
 }
 function verifyPercent(id){
     var s = document.getElementById(id).value;
     if(isInteger(s)){
         if(inRange(s, 0, 100)){
             return true;
         }else{
             document.getElementById(id).value = "";
             return false;
         }
     }else{
         document.getElementById(id).value = "";
         return false;
     }
 }
 function verifyNumber(id){
     var s = document.getElementById(id).value;
     if(isNumeric(s)){
         return true;
     }else{
         document.getElementById(id).value = "";
         return false;
     }
 }
 function processPDFClass(){
     document.getElementById(\'settingsForTCPDF\').style.display="";
    // document.getElementById(\'fontManager\').style.display="";
     if(!check_form(\'ConfigureSugarpdfSettings\')){
         for (var i = 0; i <document.ConfigureSugarpdfSettings.sugarpdf_pdf_class.length; i++) {
             if(document.ConfigureSugarpdfSettings.sugarpdf_pdf_class[i].value == "TCPDF"){
                 document.ConfigureSugarpdfSettings.sugarpdf_pdf_class[i].checked=true;
             }
         }
     }else{
         var chosen = "";
         for (var i = 0; i <document.ConfigureSugarpdfSettings.sugarpdf_pdf_class.length; i++) {
             if (document.ConfigureSugarpdfSettings.sugarpdf_pdf_class[i].checked) {
                 chosen = document.ConfigureSugarpdfSettings.sugarpdf_pdf_class[i].value;
             }
         }
         if(chosen == "EZPDF"){
             document.getElementById(\'settingsForTCPDF\').style.display="none";
             //document.getElementById(\'fontManager\').style.display="none";
         }
     }
 }
 processPDFClass();
</script>
'; ?>
