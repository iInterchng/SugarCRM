<?php /* Smarty version 2.6.11, created on 2014-05-08 12:28:45
         compiled from modules/SugarFeed/Dashlets/SugarFeedDashlet/UserPostForm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_options', 'modules/SugarFeed/Dashlets/SugarFeedDashlet/UserPostForm.tpl', 46, false),)), $this); ?>

<form name='form_<?php echo $this->_tpl_vars['id']; ?>
' id='form_<?php echo $this->_tpl_vars['id']; ?>
'>
<div class="dashletNonTable" style='white-space:nowrap;'>
  <table border=0 cellspacing=0 cellpadding=2>
    <tr>
      <td nowrap="nowrap"><span id='more_img_<?php echo $this->_tpl_vars['id']; ?>
'><?php echo $this->_tpl_vars['more_img']; ?>
</span><span id='less_img_<?php echo $this->_tpl_vars['id']; ?>
' style="display:none;"><?php echo $this->_tpl_vars['less_img']; ?>
</span> <b><?php echo $this->_tpl_vars['user_name']; ?>
</b>&nbsp;</td>
      <td style="padding-right: 5px;"><input id="text" name="text" type="text" size='25' maxlength='100' value="" /></td>
      <td nowrap="nowrap">
      <input type="submit" value="<?php echo $this->_tpl_vars['LBL_POST']; ?>
" class="button" style="vertical-align:top" onclick="SugarFeed.pushUserFeed('<?php echo $this->_tpl_vars['id']; ?>
'); return false;"></td>
    </tr>
</table>
<div id='more_<?php echo $this->_tpl_vars['id']; ?>
' style='display:none;padding-top:5px'>
<table>
<tr>
    <td><?php echo smarty_function_html_options(array('name' => 'link_type','options' => $this->_tpl_vars['link_types']), $this);?>
</td>
    <td><input type='text' name='link_url' size='30'/></td>
</tr>
<tr>
    <td><b><?php echo $this->_tpl_vars['LBL_TO']; ?>
</b></td>
    <td nowrap="nowrap">
        <input type="text" name="team_name" id="team_name_<?php echo $this->_tpl_vars['id']; ?>
" class="sqsEnabled" value="<?php echo $this->_tpl_vars['team_name']; ?>
" size="15" />
        <input type="hidden" name="team_id" id="team_id_<?php echo $this->_tpl_vars['id']; ?>
" value="<?php echo $this->_tpl_vars['team_id']; ?>
" />
        <input type="button" value="<?php echo $this->_tpl_vars['LBL_SELECT']; ?>
" class='button' type="button" style="vertical-align:top" onclick='open_popup("Teams", 600, 400, "", true, false, {"call_back_function":"set_return","form_name":"form_<?php echo $this->_tpl_vars['id']; ?>
","field_to_name_array":{"id":"team_id","name":"team_name"}}, "single", true);' />
    </td>
</tr>
</table>
</div>
</div>

</form>

<form name='SugarFeedReplyForm_<?php echo $this->_tpl_vars['id']; ?>
' id='SugarFeedReplyForm_<?php echo $this->_tpl_vars['id']; ?>
'>
<input type='hidden' name='parentFeed' value=''>
<div style='white-space:nowrap; display: none;'>
 <table border=0 cellspacing=0 cellpadding=2>
    <tr>
      <td nowrap="nowrap"><b><?php echo $this->_tpl_vars['user_name']; ?>
</b>&nbsp;</td>
      <td style="padding-right: 5px;"><input id="text" name="text" type="text" size='25' maxlength='100' value="" /></td>
      <td nowrap="nowrap">
      <input type="submit" value="<?php echo $this->_tpl_vars['LBL_POST']; ?>
" class="button" style="vertical-align:top" onclick="SugarFeed.replyToFeed('<?php echo $this->_tpl_vars['id']; ?>
'); return false;"></td>
    </tr>
</table>
</div>
</form>
