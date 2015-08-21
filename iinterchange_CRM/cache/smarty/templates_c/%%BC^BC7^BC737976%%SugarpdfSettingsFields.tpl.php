<?php /* Smarty version 2.6.11, created on 2014-05-08 12:28:57
         compiled from modules/Configurator/tpls/SugarpdfSettingsFields.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_help', 'modules/Configurator/tpls/SugarpdfSettingsFields.tpl', 36, false),array('function', 'counter', 'modules/Configurator/tpls/SugarpdfSettingsFields.tpl', 52, false),array('function', 'html_options', 'modules/Configurator/tpls/SugarpdfSettingsFields.tpl', 71, false),)), $this); ?>
<?php if ($this->_tpl_vars['property']['type'] == 'image'):  if (!((1 & $this->_tpl_vars['count']))): ?></tr><?php endif; ?>
<tr>
    <td scope="row" width="20%"><?php echo $this->_tpl_vars['property']['label']; ?>
:<span class="error" id="resized_<?php echo $this->_tpl_vars['name']; ?>
_img" style="display:none"> <?php echo $this->_tpl_vars['MOD']['LBL_IMG_RESIZED']; ?>
</span><?php echo smarty_function_sugar_help(array('text' => $this->_tpl_vars['property']['info_label']), $this);?>
 </td>
    <td colspan="3">
        <img src='<?php echo $this->_tpl_vars['property']['path']; ?>
' id='<?php echo $this->_tpl_vars['name']; ?>
_img' style='margin-bottom: 10px;'>
        <input type='hidden' id='<?php echo $this->_tpl_vars['name']; ?>
' name='<?php echo $this->_tpl_vars['name']; ?>
' value='<?php echo $this->_tpl_vars['property']['value']; ?>
'>
        <script type='text/javascript'>
            <?php echo '
            YAHOO.util.Event.onDOMReady(function() {
                if(document.getElementById('; ?>
"<?php echo $this->_tpl_vars['name']; ?>
_img"<?php echo ').width>document.width/2){
                    document.getElementById('; ?>
"<?php echo $this->_tpl_vars['name']; ?>
_img"<?php echo ').width = document.width/2;
                    document.getElementById('; ?>
"resized_<?php echo $this->_tpl_vars['name']; ?>
_img"<?php echo ').style.display="";
                }
            });
            '; ?>

        </script>
    </td>
</tr>
<?php echo smarty_function_counter(array(), $this);?>

<?php else: ?>
    <?php if ((1 & $this->_tpl_vars['count'])): ?>
    <tr>
    <?php endif; ?>
        <td scope="row" width="20%"><?php echo $this->_tpl_vars['property']['label']; ?>
:<?php if (isset ( $this->_tpl_vars['property']['required'] ) && $this->_tpl_vars['property']['required'] == true): ?> <span class="required">*</span><?php endif;  echo smarty_function_sugar_help(array('text' => $this->_tpl_vars['property']['info_label']), $this);?>
 </td>
        <td  width="30%">
            <?php if (isset ( $this->_tpl_vars['property']['custom'] )): ?>
                <?php echo $this->_tpl_vars['property']['custom']; ?>

            <?php elseif ($this->_tpl_vars['property']['type'] == 'text'): ?>
                <input type='text' size='40' name='<?php echo $this->_tpl_vars['name']; ?>
' id='<?php echo $this->_tpl_vars['name']; ?>
' value='<?php echo $this->_tpl_vars['property']['value']; ?>
'>
            <?php elseif ($this->_tpl_vars['property']['type'] == 'number'): ?>
                <input type='text' size='10' name='<?php echo $this->_tpl_vars['name']; ?>
' id='<?php echo $this->_tpl_vars['name']; ?>
' value='<?php echo $this->_tpl_vars['property']['value']; ?>
' onchange="verifyNumber('<?php echo $this->_tpl_vars['name']; ?>
')">
                <?php if (isset ( $this->_tpl_vars['property']['unit'] )): ?>
                    <?php echo $this->_tpl_vars['property']['unit']; ?>

                <?php endif; ?>
            <?php elseif ($this->_tpl_vars['property']['type'] == 'percent'): ?>
                <input type='text' size='20' name='<?php echo $this->_tpl_vars['name']; ?>
' id='<?php echo $this->_tpl_vars['name']; ?>
' value='<?php echo $this->_tpl_vars['property']['value']; ?>
' onchange="verifyPercent('<?php echo $this->_tpl_vars['name']; ?>
')">
            <?php elseif ($this->_tpl_vars['property']['type'] == 'select'): ?>
                <?php echo smarty_function_html_options(array('name' => $this->_tpl_vars['name'],'options' => $this->_tpl_vars['property']['selectList'],'selected' => $this->_tpl_vars['property']['value']), $this);?>

            <?php elseif ($this->_tpl_vars['property']['type'] == 'multiselect'): ?>
                <select name='<?php echo $this->_tpl_vars['name']; ?>
[]' multiple size=4>
                <?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['property']['selectList'],'selected' => $this->_tpl_vars['property']['value']), $this);?>

                </select>
            <?php elseif ($this->_tpl_vars['property']['type'] == 'bool'): ?>
                <input type="hidden" name='<?php echo $this->_tpl_vars['name']; ?>
' value='false'>
                <input type='checkbox' name='<?php echo $this->_tpl_vars['name']; ?>
' value='true' id='<?php echo $this->_tpl_vars['name']; ?>
' <?php if ($this->_tpl_vars['property']['value'] == 'true'): ?>CHECKED<?php endif; ?>>
            <?php elseif ($this->_tpl_vars['property']['type'] == 'password'): ?>
                <input type='password' size='20' name='<?php echo $this->_tpl_vars['name']; ?>
' id='<?php echo $this->_tpl_vars['name']; ?>
' value='<?php echo $this->_tpl_vars['property']['value']; ?>
'>
            <?php elseif ($this->_tpl_vars['property']['type'] == 'file'): ?>
                <input type="file" id='<?php echo $this->_tpl_vars['name']; ?>
' name='<?php echo $this->_tpl_vars['name']; ?>
' size="20" onBlur="checkFileType('<?php echo $this->_tpl_vars['name']; ?>
',0);"/>
            <?php endif; ?>
        </td>
    <?php if (!((1 & $this->_tpl_vars['count']))): ?>
    </tr>
    <?php endif;  endif; ?>