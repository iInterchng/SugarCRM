<?php /* Smarty version 2.6.11, created on 2014-05-08 13:16:08
         compiled from modules/Import/tpls/step1.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'overlib_includes', 'modules/Import/tpls/step1.tpl', 34, false),array('function', 'sugar_help', 'modules/Import/tpls/step1.tpl', 56, false),array('modifier', 'upper', 'modules/Import/tpls/step1.tpl', 104, false),)), $this); ?>
<?php echo smarty_function_overlib_includes(array(), $this);?>

<?php echo $this->_tpl_vars['MODULE_TITLE']; ?>

<?php if ($this->_tpl_vars['ERROR'] != ''): ?>
<span class="error"><?php echo $this->_tpl_vars['ERROR']; ?>
</span>
<?php endif; ?>

<form enctype="multipart/form-data" name="importstep1" method="post" action="index.php" id="importstep1">
<input type="hidden" name="module" value="Import">
<input type="hidden" name="action" value="Step2">
<input type="hidden" name="import_module" value="<?php echo $this->_tpl_vars['IMPORT_MODULE']; ?>
">
<p>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="edit view">
<tr>
    <td>
	<table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td valign="top" width='50%' scope="row"><table border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td align="left" scope="row" colspan="3"><h3><?php echo $this->_tpl_vars['MOD']['LBL_WHAT_IS']; ?>
&nbsp;<span class="required">*</span></h3></td>
          </tr>
          <tr>
            <td colspan="3" scope="row"><input class="radio" type="radio" name="source" value="csv" checked="checked" />
              &nbsp;<?php echo $this->_tpl_vars['MOD']['LBL_CSV']; ?>
&nbsp;<?php echo smarty_function_sugar_help(array('text' => $this->_tpl_vars['MOD']['LBL_DELIMITER_COMMA_HELP']), $this);?>
</td>
          </tr>
          <tr id="customEnclosure">
            <td scope="row">&nbsp;&nbsp;<?php echo $this->_tpl_vars['MOD']['LBL_CUSTOM_ENCLOSURE']; ?>
</td>
            <td colspan="2" scope="row">
                <select name="custom_enclosure" id="custom_enclosure">
                    <option value="&quot;" selected="selected"><?php echo $this->_tpl_vars['MOD']['LBL_OPTION_ENCLOSURE_DOUBLEQUOTE']; ?>
</option>
                    <option value="'"><?php echo $this->_tpl_vars['MOD']['LBL_OPTION_ENCLOSURE_QUOTE']; ?>
</option>
                    <option value=""><?php echo $this->_tpl_vars['MOD']['LBL_OPTION_ENCLOSURE_NONE']; ?>
</option>
                    <option value="other"><?php echo $this->_tpl_vars['MOD']['LBL_OPTION_ENCLOSURE_OTHER']; ?>
</option>
                </select>
                <input type="text" name="custom_enclosure_other" style="display: none; width: 5em;" maxlength="1" />
                <?php echo smarty_function_sugar_help(array('text' => $this->_tpl_vars['MOD']['LBL_ENCLOSURE_HELP']), $this);?>

            </td>
          </tr>
          <tr>
            <td colspan="3" scope="row"><input class="radio" type="radio" name="source" value="tab" />
              &nbsp;<?php echo $this->_tpl_vars['MOD']['LBL_TAB']; ?>
&nbsp;<?php echo smarty_function_sugar_help(array('text' => $this->_tpl_vars['MOD']['LBL_DELIMITER_TAB_HELP']), $this);?>
</td>
          </tr>
          <tr>
            <td colspan="3" scope="row"><input class="radio" type="radio" name="source" value="other" />
              &nbsp;<?php echo $this->_tpl_vars['MOD']['LBL_CUSTOM_DELIMITED']; ?>
&nbsp;<?php echo smarty_function_sugar_help(array('text' => $this->_tpl_vars['MOD']['LBL_DELIMITER_CUSTOM_HELP']), $this);?>
</td>
          </tr>
          <tr id="customDelimiter" style='display:none'>
            <td scope="row">&nbsp;&nbsp;<?php echo $this->_tpl_vars['MOD']['LBL_CUSTOM_DELIMITER']; ?>
&nbsp;<span class="required">*</span></td>
            <td colspan="2" scope="row">
                <input type="text" name="custom_delimiter" value="" style="width: 5em;" maxlength="1" />
            </td>
          </tr>
          <?php if ($this->_tpl_vars['show_salesforce']): ?>
          <tr>
            <td colspan="3" scope="row"><input class="radio" type="radio" name="source" value="salesforce" />
            &nbsp;<?php echo $this->_tpl_vars['MOD']['LBL_SALESFORCE']; ?>
</td>
            </tr>
          <?php endif; ?>
          <?php if ($this->_tpl_vars['show_outlook']): ?>
          <tr>
            <td colspan="3" scope="row"><input class="radio" type="radio" name="source" value="outlook" />
              &nbsp;<?php echo $this->_tpl_vars['MOD']['LBL_MICROSOFT_OUTLOOK']; ?>
</td>
            </tr>
          <?php endif; ?>
          <?php if ($this->_tpl_vars['show_act']): ?>
          <tr>
            <td colspan="3" scope="row"><input class="radio" type="radio" name="source" value="act" />
              &nbsp;<?php echo $this->_tpl_vars['MOD']['LBL_ACT']; ?>
</td>
          </tr>
          <?php endif; ?>
          <?php $_from = $this->_tpl_vars['custom_mappings']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['custommappings'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['custommappings']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['custommappings']['iteration']++;
?>
          <?php ob_start();  echo $this->_tpl_vars['MOD']['LBL_CUSTOM_MAPPING_'];  echo ((is_array($_tmp=$this->_tpl_vars['item'])) ? $this->_run_mod_handler('upper', true, $_tmp) : smarty_modifier_upper($_tmp));  $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('mapping_label', ob_get_contents());ob_end_clean(); ?>
          <tr>
            <td colspan="3" scope="row"><input class="radio" type="radio" name="source" value="<?php echo $this->_tpl_vars['item']; ?>
" />
              &nbsp;<?php echo $this->_tpl_vars['mapping_label']; ?>
</td>
          </tr>
          <?php endforeach; endif; unset($_from); ?>
          <?php $_from = $this->_tpl_vars['custom_imports']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['saved'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['saved']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
        $this->_foreach['saved']['iteration']++;
?>
          <?php if (($this->_foreach['saved']['iteration'] <= 1)): ?>
          <tr>
            <td scope="row" colspan="3">
                <h5><?php echo $this->_tpl_vars['MOD']['LBL_MY_SAVED']; ?>
&nbsp;<?php echo smarty_function_sugar_help(array('text' => $this->_tpl_vars['MOD']['LBL_MY_SAVED_HELP']), $this);?>
</h5></td>
          </tr>
          <?php endif; ?>
          <tr>
            <td scope="row" colspan="2">
                <input class="radio" type="radio" name="source" value="custom:<?php echo $this->_tpl_vars['item']['IMPORT_ID']; ?>
"/>
                &nbsp;<?php echo $this->_tpl_vars['item']['IMPORT_NAME']; ?>

            </td>
            <td scope="row">
                <?php if ($this->_tpl_vars['is_admin']): ?>
                <input type="button" name="publish" value="<?php echo $this->_tpl_vars['MOD']['LBL_PUBLISH']; ?>
" class="button" 
                    onclick="document.location.href = 'index.php?publish=yes&amp;import_module=<?php echo $this->_tpl_vars['IMPORT_MODULE']; ?>
&amp;module=Import&amp;action=step1&amp;import_map_id=<?php echo $this->_tpl_vars['item']['IMPORT_ID']; ?>
'">
                <?php endif; ?>
                <input type="button" name="delete" value="<?php echo $this->_tpl_vars['MOD']['LBL_DELETE']; ?>
" class="button" 
					onclick="if(confirm('<?php echo $this->_tpl_vars['MOD']['LBL_DELETE_MAP_CONFIRMATION']; ?>
'))<?php echo '{'; ?>
document.location.href = 'index.php?import_module=<?php echo $this->_tpl_vars['IMPORT_MODULE']; ?>
&amp;module=Import&amp;action=step1&amp;delete_map_id=<?php echo $this->_tpl_vars['item']['IMPORT_ID']; ?>
'<?php echo '}'; ?>
">
            </td>
          </tr>
          <?php endforeach; endif; unset($_from); ?>
          <?php $_from = $this->_tpl_vars['published_imports']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['published'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['published']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
        $this->_foreach['published']['iteration']++;
?>
          <?php if (($this->_foreach['published']['iteration'] <= 1)): ?>
          <tr>
            <td scope="row" colspan="3">
                <h5><?php echo $this->_tpl_vars['MOD']['LBL_PUBLISHED_SOURCES']; ?>
&nbsp;<?php echo smarty_function_sugar_help(array('text' => $this->_tpl_vars['MOD']['LBL_MY_PUBLISHED_HELP']), $this);?>
</h5></td>
          </tr>
          <?php endif; ?>
          <tr>
            <td scope="row" colspan="2">
                <input class="radio" type="radio" name="source" value="custom:<?php echo $this->_tpl_vars['item']['IMPORT_ID']; ?>
"/>
                &nbsp;<?php echo $this->_tpl_vars['item']['IMPORT_NAME']; ?>

            </td>
            <td scope="row">
                <?php if ($this->_tpl_vars['is_admin']): ?>
                <input type="button" name="publish" value="<?php echo $this->_tpl_vars['MOD']['LBL_UNPUBLISH']; ?>
" class="button" 
                    onclick="document.location.href = 'index.php?publish=no&amp;import_module=<?php echo $this->_tpl_vars['IMPORT_MODULE']; ?>
&amp;module=Import&amp;action=step1&amp;import_map_id=<?php echo $this->_tpl_vars['item']['IMPORT_ID']; ?>
'">
                <input type="button" name="delete" value="<?php echo $this->_tpl_vars['MOD']['LBL_DELETE']; ?>
" class="button" 
                    onclick="if(confirm('<?php echo $this->_tpl_vars['MOD']['LBL_DELETE_MAP_CONFIRMATION']; ?>
'))<?php echo '{'; ?>
document.location.href = 'index.php?import_module=<?php echo $this->_tpl_vars['IMPORT_MODULE']; ?>
&amp;module=Import&amp;action=step1&amp;delete_map_id=<?php echo $this->_tpl_vars['item']['IMPORT_ID']; ?>
'<?php echo '}'; ?>
">
                <?php endif; ?>
            </td>
          </tr>
          <?php endforeach; endif; unset($_from); ?>
          <tr>
            <td scope="row" colspan="3">
                <h3><?php echo $this->_tpl_vars['MOD']['LBL_IMPORT_TYPE']; ?>
&nbsp;<span class="required">*</span></h3></td>
          </tr>
          <tr>
            <td scope="row" colspan="3">
                <input class="radio" type="radio" name="type" value="import" checked="checked" />
                &nbsp;<?php echo $this->_tpl_vars['MOD']['LBL_IMPORT_BUTTON']; ?>

            </td>
          </tr>
          <tr>
            <td scope="row" colspan="3">
                <input class="radio" type="radio" name="type" value="update" />
                &nbsp;<?php echo $this->_tpl_vars['MOD']['LBL_UPDATE_BUTTON']; ?>

            </td>
          </tr>
          </table>
        </td>
      </tr>
    </table>
    </td>
</tr>
</table>
</p>

<br>
<table width="100%" cellpadding="0" cellspacing="0" border="0">
<tr>
	<td align="left"><input title="<?php echo $this->_tpl_vars['MOD']['LBL_NEXT']; ?>
" accessKey="" class="button" type="submit" name="button" value="  <?php echo $this->_tpl_vars['MOD']['LBL_NEXT']; ?>
  "  id="gonext"></td>
</tr>
</table>

</form>
<?php echo $this->_tpl_vars['JAVASCRIPT']; ?>
