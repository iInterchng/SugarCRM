<?php /* Smarty version 2.6.11, created on 2014-05-09 15:20:15
         compiled from modules/Administration/PasswordManager.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_getimagepath', 'modules/Administration/PasswordManager.tpl', 126, false),array('function', 'sugar_help', 'modules/Administration/PasswordManager.tpl', 134, false),)), $this); ?>
<script type='text/javascript' src='include/javascript/overlibmws.js'></script>
<form name="ConfigurePasswordSettings" method="POST" action="index.php" >
<input type='hidden' name='action' value='PasswordManager'/>
<input type='hidden' name='module' value='Administration'/>
<input type='hidden' name='saveConfig' value='1'/>
<span class='error'><?php echo $this->_tpl_vars['error']['main']; ?>
</span>
<table width="100%" cellpadding="0" cellspacing="0" border="0" class="actionsContainer">
	<tr>
	
		<td style="padding-bottom: 2px;" >
			<input title="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_KEY']; ?>
" class="button primary" id="btn_save" type="submit" onclick="addcheck(form);return check_form('ConfigurePasswordSettings');"  name="save" value="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_LABEL']; ?>
" >
			&nbsp;<input title="<?php echo $this->_tpl_vars['MOD']['LBL_CANCEL_BUTTON_TITLE']; ?>
"  onclick="document.location.href='index.php?module=Administration&action=index'" class="button"  type="button" name="cancel" value="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
" >
		</td>
	</tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
	<tr>
		<td>
			<table id="passRequirementId" name="passRequirementName" width="100%" border="0" cellspacing="1" cellpadding="0" class="edit view">
				<tr>
					<th align="left" scope="row" colspan="4">
						<h4>
							<?php echo $this->_tpl_vars['MOD']['LBL_PASSWORD_RULES_MANAGEMENT']; ?>

						</h4>
					</th>
				</tr>
				<tr>
								<td  scope="row" width='25%'>
									<?php echo $this->_tpl_vars['MOD']['LBL_PASSWORD_MINIMUM_LENGTH']; ?>
:
								</td>
								<td  	width='25%' >
									<input type='text' size='4' name='passwordsetting_minpwdlength' value='<?php echo $this->_tpl_vars['config']['passwordsetting']['minpwdlength']; ?>
'>
								</td>
								<td  scope="row"	width='25%'>
									<?php echo $this->_tpl_vars['MOD']['LBL_PASSWORD_MAXIMUM_LENGTH']; ?>
:
								</td>
								<td  	width='25%'>
									<input type='text' size='4' id='passwordsetting_maxpwdlength' name='passwordsetting_maxpwdlength' value='<?php echo $this->_tpl_vars['config']['passwordsetting']['maxpwdlength']; ?>
'>
								</td>
							</tr>
							<tr>
								<td  scope="row">
									<?php echo $this->_tpl_vars['MOD']['LBL_PASSWORD_ONE_UPPER_CASE']; ?>
: 
								</td>
								<?php if (( $this->_tpl_vars['config']['passwordsetting']['oneupper'] ) == '1'): ?>
									<?php $this->assign('oneupper_checked', 'CHECKED'); ?>
								<?php else: ?>
									<?php $this->assign('oneupper_checked', ''); ?>
								<?php endif; ?>
								<td >
									<input type='hidden' name='passwordsetting_oneupper' value='0'>
									<input id='passwordsetting_oneupper' name='passwordsetting_oneupper'  type='checkbox' value='1' <?php echo $this->_tpl_vars['oneupper_checked']; ?>
>
								</td>
								<td  scope="row">
									<?php echo $this->_tpl_vars['MOD']['LBL_PASSWORD_ONE_LOWER_CASE']; ?>
:
								</td>
								<?php if (( $this->_tpl_vars['config']['passwordsetting']['onelower'] ) == '1'): ?>
									<?php $this->assign('onelower_checked', 'CHECKED'); ?>
								<?php else: ?>
									<?php $this->assign('onelower_checked', ''); ?>
								<?php endif; ?>
								<td >
									<input type='hidden' name='passwordsetting_onelower' value='0'>
									<input id='passwordsetting_onelower' name='passwordsetting_onelower'  type='checkbox' value='1' <?php echo $this->_tpl_vars['onelower_checked']; ?>
>
								</td>
							</tr>
							<tr>
								<td  scope="row">
									<?php echo $this->_tpl_vars['MOD']['LBL_PASSWORD_ONE_NUMBER']; ?>
: 
								</td>
								<?php if (( $this->_tpl_vars['config']['passwordsetting']['onenumber'] ) == '1'): ?>
									<?php $this->assign('onenumber_checked', 'CHECKED'); ?>
								<?php else: ?>
									<?php $this->assign('onenumber_checked', ''); ?>
								<?php endif; ?>
								<td >
									<input type='hidden' name='passwordsetting_onenumber' value='0'>
									<input id='passwordsetting_onenumber' name='passwordsetting_onenumber'  type='checkbox' value='1' <?php echo $this->_tpl_vars['onenumber_checked']; ?>
>
								</td>
								<td  scope="row">
									<?php echo $this->_tpl_vars['MOD']['LBL_PASSWORD_ONE_SPECIAL_CHAR']; ?>
:
								</td>
								<?php if (( $this->_tpl_vars['config']['passwordsetting']['onespecial'] ) == '1'): ?>
									<?php $this->assign('onespecial_checked', 'CHECKED'); ?>
								<?php else: ?>
									<?php $this->assign('onespecial_checked', ''); ?>
								<?php endif; ?>
								<td >
									<input type='hidden' name='passwordsetting_onespecial' value='0'>
									<input id='passwordsetting_onespecial' name='passwordsetting_onespecial'  type='checkbox' value='1' <?php echo $this->_tpl_vars['onespecial_checked']; ?>
>
								</td>
							</tr>
							<tr>
								<td colspan='4'>
										<a class="tabFormAdvLink" href="javascript:toggleDisplay_2('regex_config_display')"><img id='regex_config_display_img' border="0" src="<?php echo smarty_function_sugar_getimagepath(array('file' => "advanced_search.gif"), $this);?>
"/>&nbsp<span id='regex_config_display_lbl'><?php echo $this->_tpl_vars['MOD']['LBL_SHOW_ADVANCED_OPTIONS']; ?>
<span></a>
								</td>
							</tr>
							<tr>
								<td colspan='4'>
									<table id='regex_config_display' style='display:none;' cellspacing="0" cellpadding="0" width="100%">
										<tr>
											<td width='25%' scope="row">
												<?php echo $this->_tpl_vars['MOD']['LBL_PASSWORD_REGEX']; ?>
: <?php echo smarty_function_sugar_help(array('text' => $this->_tpl_vars['MOD']['LBL_REGEX_HELP_TEXT'],'WIDTH' => 500), $this);?>

											</td>
											<td width='25%'>
												<input type='text'  style="width: 200px;" size='10' name='passwordsetting_customregex' id='customregex' value='<?php echo $this->_tpl_vars['config']['passwordsetting']['customregex']; ?>
' onblur='testregex(this)'>
											</td>
											<td width='25%' scope="row">
												<?php echo $this->_tpl_vars['MOD']['LBL_PASSWORD_REGEX_COMMENT']; ?>
: <?php echo smarty_function_sugar_help(array('text' => $this->_tpl_vars['MOD']['LBL_REGEX_DESC_HELP_TEXT'],'WIDTH' => 500), $this);?>

											</td>
											<td width='25%'>
												<input type='text'  style="width: 250px;" size='10' name='passwordsetting_regexcomment' value='<?php echo $this->_tpl_vars['config']['passwordsetting']['regexcomment']; ?>
'>
											</td>
										</tr>
									</table>
								</td>
							</tr>
							<tr>
							    <td colspan="4" id='SystemGeneratedPassword_warning2'scope="row" style='display:<?php echo $this->_tpl_vars['smtp_warning_2']; ?>
';>
                                   <i><?php if ($this->_tpl_vars['SMTP_SERVER_NOT_SET']): ?>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->_tpl_vars['MOD']['ERR_SMTP_SERVER_NOT_SET']; ?>
<br><?php endif; ?>
                                   &nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->_tpl_vars['MOD']['LBL_EMAIL_ADDRESS_REQUIRED_FOR_FEATURE']; ?>
</i>
                               </td>
                           </tr>
						</table>
			
						<table id="sysGeneratedId" name="sysGeneratedName" width="100%" border="0" cellspacing="1" cellpadding="0" class="edit view">
							<tr>
								<th align="left" scope="row" colspan="4">
									<h4>
										<?php echo $this->_tpl_vars['MOD']['LBL_PASSWORD_SYST_GENERATED_TITLE']; ?>

									</h4>
								</th>
							</tr>
										<tr>
									        <td  scope="row" width='25%'>
												<?php echo $this->_tpl_vars['MOD']['LBL_PASSWORD_SYST_GENERATED_PWD_ON']; ?>
:&nbsp<?php echo smarty_function_sugar_help(array('text' => $this->_tpl_vars['MOD']['LBL_PASSWORD_SYST_GENERATED_PWD_HELP'],'WIDTH' => 400), $this);?>

											</td>
											<td >
											<?php if (( $this->_tpl_vars['config']['passwordsetting']['SystemGeneratedPasswordON'] ) == '1'): ?>
												<?php $this->assign('SystemGeneratedPasswordON', 'CHECKED'); ?>
											<?php else: ?>
												<?php $this->assign('SystemGeneratedPasswordON', ''); ?>
											<?php endif; ?>
												<input type='hidden' name='passwordsetting_SystemGeneratedPasswordON' value='0'>
												<input name='passwordsetting_SystemGeneratedPasswordON' id='SystemGeneratedPassword_checkbox'   type='checkbox' value='1' <?php echo $this->_tpl_vars['SystemGeneratedPasswordON']; ?>
 onclick='enable_syst_generated_pwd(this);toggleDisplay("SystemGeneratedPassword_warning");'>
											</td>
											<?php if (! ( $this->_tpl_vars['config']['passwordsetting']['SystemGeneratedPasswordON'] )): ?>
												<?php $this->assign('smtp_warning', 'none'); ?>
											<?php endif; ?>
										</tr>
										<tr>
											<td colspan="2" id='SystemGeneratedPassword_warning'scope="row" style='display:<?php echo $this->_tpl_vars['smtp_warning']; ?>
';>
											<i><?php if ($this->_tpl_vars['SMTP_SERVER_NOT_SET']): ?>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->_tpl_vars['MOD']['ERR_SMTP_SERVER_NOT_SET']; ?>
<br><?php endif; ?>
											&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->_tpl_vars['MOD']['LBL_EMAIL_ADDRESS_REQUIRED_FOR_FEATURE']; ?>
</i>
										</td>
									    </tr>
									    <tr>
											<td align="left" scope="row" colspan="4">
													<?php echo $this->_tpl_vars['MOD']['LBL_PASSWORD_SYST_EXPIRATION']; ?>

											</td>
										</tr>
										<tr>
											<td colspan='4'>
												<table width="100%" id='syst_generated_pwd_table' border="0" cellspacing="1" cellpadding="0">
													<tr>
												            <?php $this->assign('systexplogin', ''); ?>
			                                                <?php $this->assign('systexptime', ''); ?>
			                                                <?php $this->assign('systexpnone', ''); ?>
			                                            <?php if (( $this->_tpl_vars['config']['passwordsetting']['systexpiration'] ) == '0' || $this->_tpl_vars['config']['passwordsetting']['systexpiration'] == ''): ?>
			                                                <?php $this->assign('systexpnone', 'CHECKED'); ?>
			                                            <?php endif; ?>
			                                            <?php if (( $this->_tpl_vars['config']['passwordsetting']['systexpiration'] ) == '1'): ?>
			                                                <?php $this->assign('systexptime', 'CHECKED'); ?>
			                                            <?php endif; ?>
			                                            <?php if (( $this->_tpl_vars['config']['passwordsetting']['systexpiration'] ) == '2'): ?>
			                                                <?php $this->assign('systexplogin', 'CHECKED'); ?>
			                                            <?php endif; ?>
													    <td width='30%'>
			                                                <input type="radio"  name="passwordsetting_systexpiration"  value='0' <?php echo $this->_tpl_vars['systexpnone']; ?>
 onclick="form.passwordsetting_systexpirationtime.value='';form.passwordsetting_systexpirationlogin.value='';">
			                                               <?php echo $this->_tpl_vars['MOD']['LBL_UW_NONE']; ?>

			                                            </td>
			    										<td  width='30%'>
															<input type="radio"  name="passwordsetting_systexpiration" id="required_sys_pwd_exp_time" value='1' <?php echo $this->_tpl_vars['systexptime']; ?>
 onclick="form.passwordsetting_systexpirationlogin.value='';">
															<?php echo $this->_tpl_vars['MOD']['LBL_PASSWORD_EXP_IN']; ?>
 
															<?php $this->assign('sdays', ''); ?>
															<?php $this->assign('sweeks', ''); ?>
															<?php $this->assign('smonths', ''); ?>
														<?php if (( $this->_tpl_vars['config']['passwordsetting']['systexpirationtype'] ) == '1'): ?>
															<?php $this->assign('sdays', 'SELECTED'); ?>
														<?php endif; ?>
														<?php if (( $this->_tpl_vars['config']['passwordsetting']['systexpirationtype'] ) == '7'): ?>
															<?php $this->assign('sweeks', 'SELECTED'); ?>
														<?php endif; ?>
														<?php if (( $this->_tpl_vars['config']['passwordsetting']['systexpirationtype'] ) == '30'): ?>
															<?php $this->assign('smonths', 'SELECTED'); ?>
														<?php endif; ?>
															<input type='text' maxlength="3" and style="width:2em"  name='passwordsetting_systexpirationtime' value='<?php echo $this->_tpl_vars['config']['passwordsetting']['systexpirationtime']; ?>
'>
															<SELECT  NAME="passwordsetting_systexpirationtype">
																<OPTION VALUE='1' <?php echo $this->_tpl_vars['sdays']; ?>
><?php echo $this->_tpl_vars['MOD']['LBL_DAYS']; ?>

																<OPTION VALUE='7' <?php echo $this->_tpl_vars['sweeks']; ?>
><?php echo $this->_tpl_vars['MOD']['LBL_WEEKS']; ?>

																<OPTION VALUE='30' <?php echo $this->_tpl_vars['smonths']; ?>
><?php echo $this->_tpl_vars['MOD']['LBL_MONTHS']; ?>

															</SELECT>
														</td>
														<td colspan='2' width='40%'>
															<input type="radio" name="passwordsetting_systexpiration"  id="required_sys_pwd_exp_login" value='2' <?php echo $this->_tpl_vars['systexplogin']; ?>
 onclick="form.passwordsetting_systexpirationtime.value='';">
															<?php echo $this->_tpl_vars['MOD']['LBL_PASSWORD_EXP_AFTER']; ?>
 
															<input type='text' maxlength="3" and style="width:2em"  name='passwordsetting_systexpirationlogin' value="<?php echo $this->_tpl_vars['config']['passwordsetting']['systexpirationlogin']; ?>
">
															<?php echo $this->_tpl_vars['MOD']['LBL_PASSWORD_LOGINS']; ?>

														</td>
													</tr>
												</table>
											</td>
										</tr>	
									</table>

						<table id="userResetPassId" name="userResetPassName" width="100%" border="0" cellspacing="1" cellpadding="0" class="edit view">
							<tr>
								<th align="left" scope="row" colspan="2"><h4><?php echo $this->_tpl_vars['MOD']['LBL_PASSWORD_USER_RESET']; ?>
</h4>
								</th>
							</tr>
							<tr>

											<td width="25%" scope="row"><?php echo $this->_tpl_vars['MOD']['LBL_PASSWORD_FORGOT_FEATURE']; ?>
:&nbsp<?php echo smarty_function_sugar_help(array('text' => $this->_tpl_vars['MOD']['LBL_PASSWORD_FORGOT_FEATURE_HELP'],'WIDTH' => 400), $this);?>
</td>
											<td scope="row" width="25%" >
												<?php if (( $this->_tpl_vars['config']['passwordsetting']['forgotpasswordON'] ) == '1'): ?>
													<?php $this->assign('forgotpasswordON', 'CHECKED'); ?>
												<?php else: ?>
													<?php $this->assign('forgotpasswordON', ''); ?>
												<?php endif; ?>
												<input type='hidden' name='passwordsetting_forgotpasswordON' value='0'>
												<input name="passwordsetting_forgotpasswordON" id="forgotpassword_checkbox" value="1" class="checkbox" type="checkbox"  onclick='forgot_password_enable(this); toggleDisplay("SystemGeneratedPassword_warning2");' <?php echo $this->_tpl_vars['forgotpasswordON']; ?>
>
											</td>
											<?php if (! ( $this->_tpl_vars['config']['passwordsetting']['forgotpasswordON'] )): ?>
												<?php $this->assign('smtp_warning_2', 'none'); ?>
											<?php endif; ?>
										</tr>
										<tr><td colspan="4" id='SystemGeneratedPassword_warning2'scope="row" style='display:<?php echo $this->_tpl_vars['smtp_warning_2']; ?>
';>
											<i><?php if ($this->_tpl_vars['SMTP_SERVER_NOT_SET']): ?>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->_tpl_vars['MOD']['ERR_SMTP_SERVER_NOT_SET']; ?>
<br><?php endif; ?>
											&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->_tpl_vars['MOD']['LBL_EMAIL_ADDRESS_REQUIRED_FOR_FEATURE']; ?>
</i>
											</td>
										</tr>
										<tr>
										<td width="25%" scope="row"><?php echo $this->_tpl_vars['MOD']['LBL_PASSWORD_LINK_EXPIRATION']; ?>
:&nbsp<?php echo smarty_function_sugar_help(array('text' => $this->_tpl_vars['MOD']['LBL_PASSWORD_LINK_EXPIRATION_HELP'],'WIDTH' => 400), $this);?>
</td>
											<td colspan="3">
												<table width="100%" border="0" cellspacing="0" cellpadding="0" id="forgot_password_table">
													<tr>
												        
											    		<?php $this->assign('linkexptime', ''); ?>
			                                                <?php $this->assign('linkexpnone', ''); ?>
			                                            <?php if (( $this->_tpl_vars['config']['passwordsetting']['linkexpiration'] ) == '0'): ?>
			                                                <?php $this->assign('linkexpnone', 'CHECKED'); ?>
			                                            <?php endif; ?>
			                                            <?php if (( $this->_tpl_vars['config']['passwordsetting']['linkexpiration'] ) == '1'): ?>
			                                                <?php $this->assign('linkexptime', 'CHECKED'); ?>
			                                            <?php endif; ?>
			                                            <td  width='30%'>
			                                                <input type="radio" name="passwordsetting_linkexpiration" value='0'  <?php echo $this->_tpl_vars['linkexpnone']; ?>
  onclick="form.passwordsetting_linkexpirationtime.value='';">
			                                               <?php echo $this->_tpl_vars['MOD']['LBL_UW_NONE']; ?>

			                                            </td>
			    										<td  width='30%'>
															<input type="radio" name="passwordsetting_linkexpiration" id="required_link_exp_time" value='1'  <?php echo $this->_tpl_vars['linkexptime']; ?>
>
															<?php echo $this->_tpl_vars['MOD']['LBL_PASSWORD_LINK_EXP_IN']; ?>

															<?php $this->assign('ldays', ''); ?>
															<?php $this->assign('lweeks', ''); ?>
															<?php $this->assign('lmonths', ''); ?>
														<?php if (( $this->_tpl_vars['config']['passwordsetting']['linkexpirationtype'] ) == '1'): ?>
															<?php $this->assign('ldays', 'SELECTED'); ?>
														<?php endif; ?>
														<?php if (( $this->_tpl_vars['config']['passwordsetting']['linkexpirationtype'] ) == '60'): ?>
															<?php $this->assign('lweeks', 'SELECTED'); ?>
														<?php endif; ?>
														<?php if (( $this->_tpl_vars['config']['passwordsetting']['linkexpirationtype'] ) == '1440'): ?>
															<?php $this->assign('lmonths', 'SELECTED'); ?>
														<?php endif; ?>
															<input type='text' maxlength="3" and style="width:2em" name='passwordsetting_linkexpirationtime'  value='<?php echo $this->_tpl_vars['config']['passwordsetting']['linkexpirationtime']; ?>
'>
															<SELECT   NAME="passwordsetting_linkexpirationtype">
																<OPTION VALUE='1' <?php echo $this->_tpl_vars['ldays']; ?>
><?php echo $this->_tpl_vars['MOD']['LBL_MINUTES']; ?>

																<OPTION VALUE='60' <?php echo $this->_tpl_vars['lweeks']; ?>
><?php echo $this->_tpl_vars['MOD']['LBL_HOURS']; ?>

																<OPTION VALUE='1440' <?php echo $this->_tpl_vars['lmonths']; ?>
><?php echo $this->_tpl_vars['MOD']['LBL_DAYS']; ?>

															</SELECT>
														</td width='40%'>
														<td >
														</td>
													</tr>
												</table>
											</td>
										</tr>	
										<tr>
										<?php if (! empty ( $this->_tpl_vars['settings']['captcha_on'] ) || ! ( $this->_tpl_vars['VALID_PUBLIC_KEY'] )): ?>
											<?php $this->assign('captcha_checked', 'CHECKED'); ?>
										<?php else: ?>
											<?php $this->assign('captcha_checked', ''); ?>
										<?php endif; ?>
											<td width="25%" scope="row"><?php echo $this->_tpl_vars['MOD']['ENABLE_CAPTCHA']; ?>
:&nbsp<?php echo smarty_function_sugar_help(array('text' => $this->_tpl_vars['MOD']['LBL_CAPTCHA_HELP_TEXT'],'WIDTH' => 400), $this);?>
</td>
											<td scope="row" width="75%"><input type='hidden' name='captcha_on' value='0'><input name="captcha_on" id="captcha_id" value="1" class="checkbox" tabindex='1' type="checkbox" onclick='document.getElementById("captcha_config_display").style.display=this.checked?"":"none";' <?php echo $this->_tpl_vars['captcha_checked']; ?>
></td>
										</tr>
									</table>
									<table width="100%" border="0" cellspacing="0" cellpadding="0">
										<tr>
											<td colspan="4">
												<div id="captcha_config_display" style="display:<?php echo $this->_tpl_vars['CAPTCHA_CONFIG_DISPLAY']; ?>
">
													<table width="100%" cellpadding="0" cellspacing="0">
													<tr>
														<td width="10%" scope="row"><?php echo $this->_tpl_vars['MOD']['LBL_PUBLIC_KEY']; ?>
<span class="required">*</span></td>
														<td width="40%" ><input type="text" name="captcha_public_key" id="captcha_public_key" size="45"  value="<?php echo $this->_tpl_vars['settings']['captcha_public_key']; ?>
" tabindex='1' onblur="this.value=this.value.replace(/^\s+/,'').replace(/\s+$/,'')"></td>
														<td width="10%" scope="row"><?php echo $this->_tpl_vars['MOD']['LBL_PRIVATE_KEY']; ?>
<span class="required">*</span></td>
														<td width="40%" ><input type="text" name="captcha_private_key" size="45"  value="<?php echo $this->_tpl_vars['settings']['captcha_private_key']; ?>
" tabindex='1' onblur="this.value=this.value.replace(/^\s+/,'').replace(/\s+$/,'')"></td>
													</tr>													
													</table>
												</div>
											</td>
										</tr>
									<?php if (! ( $this->_tpl_vars['VALID_PUBLIC_KEY'] )): ?>
										<tr><td scope="row"><span class='error'><?php echo $this->_tpl_vars['MOD']['ERR_PUBLIC_CAPTCHA_KEY']; ?>
</span></td></tr>
									<?php endif; ?>
									</table>


					

						<table id="emailTemplatesId" name="emailTemplatesName" width="100%" border="0" cellspacing="1" cellpadding="0" class="edit view">
							<tr>
								<th align="left" scope="row" colspan="4">
									<h4>
										<?php echo $this->_tpl_vars['MOD']['LBL_PASSWORD_TEMPLATE']; ?>

									</h4>
								</th>
							</tr>

										<tr>
									        <td  scope="row" width="35%"><?php echo $this->_tpl_vars['MOD']['LBL_PASSWORD_GENERATE_TEMPLATE_MSG']; ?>
: </td>
									        <td  >
										        <slot>
									        		<select tabindex='251' id="generatepasswordtmpl" name="passwordsetting_generatepasswordtmpl" <?php echo $this->_tpl_vars['IE_DISABLED']; ?>
><?php echo $this->_tpl_vars['TMPL_DRPDWN_GENERATE']; ?>
</select>
													<input type="button" class="button" onclick="javascript:open_email_template_form('generatepasswordtmpl')" value="<?php echo $this->_tpl_vars['MOD']['LBL_PASSWORD_CREATE_TEMPLATE']; ?>
" <?php echo $this->_tpl_vars['IE_DISABLED']; ?>
>
													<input type="button" value="<?php echo $this->_tpl_vars['MOD']['LBL_PASSWORD_EDIT_TEMPLATE']; ?>
" class="button" onclick="javascript:edit_email_template_form('generatepasswordtmpl')" name='edit_generatepasswordtmpl' id='edit_generatepasswordtmpl' style="<?php echo $this->_tpl_vars['EDIT_TEMPLATE']; ?>
">
												</slot>
									        </td>
									        <td ></td>
									        <td  ></td>
										</tr>
										<tr>
									        <td  scope="row"><?php echo $this->_tpl_vars['MOD']['LBL_PASSWORD_LOST_TEMPLATE_MSG']; ?>
: </td>
									        <td  >
							        			<slot>
									        		<select tabindex='251' id="lostpasswordtmpl" name="passwordsetting_lostpasswordtmpl" <?php echo $this->_tpl_vars['IE_DISABLED']; ?>
><?php echo $this->_tpl_vars['TMPL_DRPDWN_LOST']; ?>
</select>
													<input type="button" class="button" onclick="javascript:open_email_template_form('lostpasswordtmpl')" value="<?php echo $this->_tpl_vars['MOD']['LBL_PASSWORD_CREATE_TEMPLATE']; ?>
" <?php echo $this->_tpl_vars['IE_DISABLED']; ?>
>
													<input type="button" value="<?php echo $this->_tpl_vars['MOD']['LBL_PASSWORD_EDIT_TEMPLATE']; ?>
" class="button" onclick="javascript:edit_email_template_form('lostpasswordtmpl')" name='edit_lostpasswordtmpl' id='edit_lostpasswordtmpl' style="<?php echo $this->_tpl_vars['EDIT_TEMPLATE']; ?>
">
												</slot>
							        		 </td>
									        <td ></td>
									        <td ></td>
										</tr>
									</table>



									<table id="userGenPassExpId" name="userGenPassExpName" width="100%" border="0" cellspacing="1" cellpadding="0" class="edit view">
										<tr>
											<th align="left" scope="row" colspan="4">
												<h4 scope="row" >
													<?php echo $this->_tpl_vars['MOD']['LBL_PASSWORD_USER_EXPIRATION']; ?>

												</h4>
											</th>
										</tr>
										<tr>

											            <?php $this->assign('userexplogin', ''); ?>
		                                                <?php $this->assign('userexptime', ''); ?>
		                                                <?php $this->assign('userexpnone', ''); ?>
		                                            <?php if (( $this->_tpl_vars['config']['passwordsetting']['userexpiration'] ) == '0'): ?>
		                                                <?php $this->assign('userexpnone', 'CHECKED'); ?>
		                                            <?php endif; ?>
		                                            <?php if (( $this->_tpl_vars['config']['passwordsetting']['userexpiration'] ) == '1'): ?>
		                                                <?php $this->assign('userexptime', 'CHECKED'); ?>
		                                            <?php endif; ?>
		                                            <?php if (( $this->_tpl_vars['config']['passwordsetting']['userexpiration'] ) == '2'): ?>
		                                                <?php $this->assign('userexplogin', 'CHECKED'); ?>
		                                            <?php endif; ?>
												    <td width='30%'>
		                                                <input type="radio" name="passwordsetting_userexpiration"  value='0' <?php echo $this->_tpl_vars['userexpnone']; ?>
 onclick="form.passwordsetting_userexpirationtime.value='';form.passwordsetting_userexpirationlogin.value='';">
		                                               <?php echo $this->_tpl_vars['MOD']['LBL_UW_NONE']; ?>

		                                            </td>
		    										<td width='30%'>
														<input type="radio" name="passwordsetting_userexpiration" id="required_user_pwd_exp_time" value='1' <?php echo $this->_tpl_vars['userexptime']; ?>
 onclick="form.passwordsetting_userexpirationlogin.value='';">
														<?php echo $this->_tpl_vars['MOD']['LBL_PASSWORD_EXP_IN']; ?>
 
														<?php $this->assign('udays', ''); ?>
														<?php $this->assign('uweeks', ''); ?>
														<?php $this->assign('umonths', ''); ?>
													<?php if (( $this->_tpl_vars['config']['passwordsetting']['userexpirationtype'] ) == '1'): ?>
														<?php $this->assign('udays', 'SELECTED'); ?>
													<?php endif; ?>
													<?php if (( $this->_tpl_vars['config']['passwordsetting']['userexpirationtype'] ) == '7'): ?>
														<?php $this->assign('uweeks', 'SELECTED'); ?>
													<?php endif; ?>
													<?php if (( $this->_tpl_vars['config']['passwordsetting']['userexpirationtype'] ) == '30'): ?>
														<?php $this->assign('umonths', 'SELECTED'); ?>
													<?php endif; ?>
														<input type='text' maxlength="3" and style="width:2em" name='passwordsetting_userexpirationtime' value='<?php echo $this->_tpl_vars['config']['passwordsetting']['userexpirationtime']; ?>
'>
														<SELECT NAME="passwordsetting_userexpirationtype">
															<OPTION VALUE='1' <?php echo $this->_tpl_vars['udays']; ?>
><?php echo $this->_tpl_vars['MOD']['LBL_DAYS']; ?>

															<OPTION VALUE='7' <?php echo $this->_tpl_vars['uweeks']; ?>
><?php echo $this->_tpl_vars['MOD']['LBL_WEEKS']; ?>

															<OPTION VALUE='30' <?php echo $this->_tpl_vars['umonths']; ?>
><?php echo $this->_tpl_vars['MOD']['LBL_MONTHS']; ?>

														</SELECT>
													</td>
													<td colspan='2 width='40%'>
														<input type="radio" name="passwordsetting_userexpiration" id="required_user_pwd_exp_login" value='2' <?php echo $this->_tpl_vars['userexplogin']; ?>
 onclick="form.passwordsetting_userexpirationtime.value='';">
														<?php echo $this->_tpl_vars['MOD']['LBL_PASSWORD_EXP_AFTER']; ?>
 
														<input type='text' maxlength="3" and style="width:2em" name='passwordsetting_userexpirationlogin' value="<?php echo $this->_tpl_vars['config']['passwordsetting']['userexpirationlogin']; ?>
">
														<?php echo $this->_tpl_vars['MOD']['LBL_PASSWORD_LOGINS']; ?>

													</td>
												</tr>
											</table>

								<table id="loginLockoutId" name="loginLockoutName" width="100%" border="0" cellspacing="1" cellpadding="0" class="edit view">
								<tr>
									<th align="left" scope="row" colspan="4">
										<h4>
											<?php echo $this->_tpl_vars['MOD']['LBL_PASSWORD_LOCKOUT']; ?>

										</h4>
									</th>
								</tr>
											<tr>
											        <?php $this->assign('lockouttypelogin', ''); ?>
	                                                <?php $this->assign('lockoutnone', ''); ?>
	                                            <?php if (( $this->_tpl_vars['config']['passwordsetting']['lockoutexpiration'] ) == '0'): ?>
	                                                <?php $this->assign('lockoutnone', 'CHECKED'); ?>
	                                            <?php endif; ?>
	                                            <?php if (( $this->_tpl_vars['config']['passwordsetting']['lockoutexpiration'] ) == '1' || ( $this->_tpl_vars['config']['passwordsetting']['lockoutexpiration'] ) == '2'): ?>
	                                                <?php $this->assign('lockouttypelogin', 'CHECKED'); ?>
	                                            <?php endif; ?>
	                                            <td  width='30%'>
	                                                <input type="radio" name="passwordsetting_lockoutexpiration" value='0' <?php echo $this->_tpl_vars['lockoutnone']; ?>
 onclick="form.passwordsetting_lockoutexpirationtime.value='';form.passwordsetting_lockoutexpirationlogin.value=''; document.getElementById('dione').style.display='none';">
	                                               <?php echo $this->_tpl_vars['MOD']['LBL_UW_NONE']; ?>

	
	                                            </td>
												<td width='30%'>
	                                                <input type="radio" id="required_lockout_exp_login" name="passwordsetting_lockoutexpiration" value='1' <?php echo $this->_tpl_vars['lockouttypelogin']; ?>
 onclick="document.getElementById('dione').style.display='';">
	                                                <?php echo $this->_tpl_vars['MOD']['LBL_PASSWORD_LOCKOUT_ATTEMPT1']; ?>

	                                                <input type='text' maxlength="3" and style="width:2em" name='passwordsetting_lockoutexpirationlogin' value='<?php echo $this->_tpl_vars['config']['passwordsetting']['lockoutexpirationlogin']; ?>
'>
	                                            	<?php echo $this->_tpl_vars['MOD']['LBL_PASSWORD_LOCKOUT_ATTEMPT2']; ?>

	                                            </td>
	                                            <td width='40%'>
												</td>
	                                        </tr>
	                                        <tr>
												<td>
												</td>
											    <td>
	    											<div id="dione" style="display:<?php echo $this->_tpl_vars['LOGGED_OUT_DISPLAY_STATUS']; ?>
;">
	        											<table width='100%'>
    	        											<td scope="row" width='25%'><?php echo $this->_tpl_vars['MOD']['LBL_PASSWORD_LOGIN_DELAY']; ?>
:
    	        												<?php $this->assign('lminutes', ''); ?>
    	        												<?php $this->assign('lhours', ''); ?>
    	        												<?php $this->assign('ldays', ''); ?>
    	        											<?php if (( $this->_tpl_vars['config']['passwordsetting']['lockoutexpirationtype'] ) == '1'): ?>
    	        												<?php $this->assign('lminutes', 'SELECTED'); ?>
    	        											<?php endif; ?>
    	        											<?php if (( $this->_tpl_vars['config']['passwordsetting']['lockoutexpirationtype'] ) == '60'): ?>
    	        												<?php $this->assign('lhours', 'SELECTED'); ?>
    	        											<?php endif; ?>
    	        											<?php if (( $this->_tpl_vars['config']['passwordsetting']['lockoutexpirationtype'] ) == '1440'): ?>
    	        												<?php $this->assign('ldays', 'SELECTED'); ?>
    	        											<?php endif; ?>
    	        												<input type='text' maxlength="3" and style="width:2em" name='passwordsetting_lockoutexpirationtime' value="<?php echo $this->_tpl_vars['config']['passwordsetting']['lockoutexpirationtime']; ?>
">
    	        												<SELECT NAME="passwordsetting_lockoutexpirationtype">
    	        													<OPTION VALUE='1' <?php echo $this->_tpl_vars['lminutes']; ?>
><?php echo $this->_tpl_vars['MOD']['LBL_MINUTES']; ?>

    	        													<OPTION VALUE='60' <?php echo $this->_tpl_vars['lhours']; ?>
><?php echo $this->_tpl_vars['MOD']['LBL_HOURS']; ?>

    	        													<OPTION VALUE='1440' <?php echo $this->_tpl_vars['ldays']; ?>
><?php echo $this->_tpl_vars['MOD']['LBL_DAYS']; ?>

    	        												</SELECT>
    	        											</td>
	        											</table>
	    											</div>
												</td>
											</tr>
										</table>


							<?php if (! empty ( $this->_tpl_vars['settings']['system_ldap_enabled'] )): ?>
									<?php $this->assign('system_ldap_enabled_checked', 'CHECKED'); ?>
									<?php $this->assign('ldap_display', 'inline'); ?>
								<?php else: ?>
									<?php $this->assign('system_ldap_enabled_checked', ''); ?>
									<?php $this->assign('ldap_display', 'none'); ?>
							<?php endif; ?>
							<table id='ldap_table' width="100%" border="0" cellspacing="0" cellpadding="0" class="edit view">
								<tr>
									<td>
										<table width="100%" border="0" cellspacing="0" cellpadding="0">
											<tr>
												<th align="left" scope="row" colspan='3'><h4><?php echo $this->_tpl_vars['MOD']['LBL_LDAP_TITLE']; ?>
</h4></th>
											</tr>
											<tr>
												<td width="25%" scope="row" valign='middle'>
													<?php echo $this->_tpl_vars['MOD']['LBL_LDAP_ENABLE'];  echo smarty_function_sugar_help(array('text' => $this->_tpl_vars['MOD']['LBL_LDAP_HELP_TXT']), $this);?>

												</td><td valign='middle'><input name="system_ldap_enabled" id="system_ldap_enabled" class="checkbox"  type="checkbox" <?php echo $this->_tpl_vars['system_ldap_enabled_checked']; ?>
 onclick='toggleDisplay("ldap_display");enableDisablePasswordTable("system_ldap_enabled");'></td><td>&nbsp;</td><td>&nbsp;</td></tr>
											<tr>
												<td colspan='4'>
													<table  cellspacing='0' cellpadding='1' id='ldap_display' style='display:<?php echo $this->_tpl_vars['ldap_display']; ?>
' width='100%'>
														<tr>
															<td width='25%' scope="row" valign='top' nowrap><?php echo $this->_tpl_vars['MOD']['LBL_LDAP_SERVER_HOSTNAME']; ?>
 <?php echo smarty_function_sugar_help(array('text' => $this->_tpl_vars['MOD']['LBL_LDAP_SERVER_HOSTNAME_DESC']), $this);?>
</td><?php echo $this->_tpl_vars['settings']['proxy_host']; ?>

															<td width='25%' align="left"  valign='top'><input name="ldap_hostname" size='25' type="text" value="<?php echo $this->_tpl_vars['settings']['ldap_hostname']; ?>
"></td>
															<td width='25%' scope="row" valign='top' nowrap><?php echo $this->_tpl_vars['MOD']['LBL_LDAP_SERVER_PORT']; ?>
 <?php echo smarty_function_sugar_help(array('text' => $this->_tpl_vars['MOD']['LBL_LDAP_SERVER_PORT_DESC']), $this);?>
</td><?php echo $this->_tpl_vars['settings']['proxy_port']; ?>

															<td width='25%' align="left"  valign='top' ><input name="ldap_port" size='6' type="text" value="<?php echo $this->_tpl_vars['settings']['ldap_port']; ?>
"></td>
														</tr>
														<tr>
															<td scope="row" valign='middle' nowrap><?php echo $this->_tpl_vars['MOD']['LBL_LDAP_USER_DN']; ?>
 <?php echo smarty_function_sugar_help(array('text' => $this->_tpl_vars['MOD']['LBL_LDAP_USER_DN_DESC']), $this);?>
</td>
															<td align="left"  valign='middle'><input name="ldap_base_dn" size='35' type="text" value="<?php echo $this->_tpl_vars['settings']['ldap_base_dn']; ?>
"></td>
															<td scope="row" valign='middle' nowrap><?php echo $this->_tpl_vars['MOD']['LBL_LDAP_USER_FILTER']; ?>
 <?php echo smarty_function_sugar_help(array('text' => $this->_tpl_vars['MOD']['LBL_LDAP_USER_FILTER_DESC']), $this);?>
</td>
															<td align="left"  valign='middle'><input name="ldap_login_filter" size='25' type="text" value="<?php echo $this->_tpl_vars['settings']['ldap_login_filter']; ?>
"></td>
														</tr>
														<tr>
															<td scope="row" valign='top' nowrap><?php echo $this->_tpl_vars['MOD']['LBL_LDAP_BIND_ATTRIBUTE']; ?>
 <?php echo smarty_function_sugar_help(array('text' => $this->_tpl_vars['MOD']['LBL_LDAP_BIND_ATTRIBUTE_DESC']), $this);?>
</td>
															<td align="left"  valign='top'><input name="ldap_bind_attr" size='25' type="text" value="<?php echo $this->_tpl_vars['settings']['ldap_bind_attr']; ?>
"> </td>
															<td scope="row" valign='middle' nowrap><?php echo $this->_tpl_vars['MOD']['LBL_LDAP_LOGIN_ATTRIBUTE']; ?>
 <?php echo smarty_function_sugar_help(array('text' => $this->_tpl_vars['MOD']['LBL_LDAP_LOGIN_ATTRIBUTE_DESC']), $this);?>
</td>
															<td align="left"  valign='middle'><input name="ldap_login_attr" size='25' type="text" value="<?php echo $this->_tpl_vars['settings']['ldap_login_attr']; ?>
"></td>
														</tr>
														<tr>
															<td scope="row" valign='top'nowrap><?php echo $this->_tpl_vars['MOD']['LBL_LDAP_GROUP_MEMBERSHIP']; ?>
 <?php echo smarty_function_sugar_help(array('text' => $this->_tpl_vars['MOD']['LBL_LDAP_GROUP_MEMBERSHIP_DESC']), $this);?>
</td>
															<td align="left"  valign='top'>
															<?php if (! empty ( $this->_tpl_vars['settings']['ldap_group'] )): ?>
																<?php $this->assign('ldap_group_checked', 'CHECKED'); ?>
																<?php $this->assign('ldap_group_display', ''); ?>
															<?php else: ?>
																<?php $this->assign('ldap_group_checked', ''); ?>
																<?php $this->assign('ldap_group_display', 'none'); ?>
															<?php endif; ?>
																<input name="ldap_group_checkbox" class="checkbox" type="checkbox" <?php echo $this->_tpl_vars['ldap_group_checked']; ?>
 onclick='toggleDisplay("ldap_group")'> 
															</td>
															<td valign='middle' nowrap></td>
															<td align="left"  valign='middle'></td>
														</tr>
														<tr>	
															<td></td>
															<td colspan='3'>
																<span id='ldap_group' style='display:<?php echo $this->_tpl_vars['ldap_group_display']; ?>
'>
																	<table width='100%'>
																		<tr>
																			<td  width='25%' scope="row" valign='top'nowrap><?php echo $this->_tpl_vars['MOD']['LBL_LDAP_GROUP_DN']; ?>
 <?php echo smarty_function_sugar_help(array('text' => $this->_tpl_vars['MOD']['LBL_LDAP_GROUP_DN_DESC']), $this);?>
</td>
																			<td  width='25%' align="left"  valign='top'><input name="ldap_group_dn" size='20' type="text"  value="<?php echo $this->_tpl_vars['settings']['ldap_group_dn']; ?>
"></td>
																			<td  width='25%' scope="row" valign='top'nowrap><?php echo $this->_tpl_vars['MOD']['LBL_LDAP_GROUP_NAME']; ?>
 <?php echo smarty_function_sugar_help(array('text' => $this->_tpl_vars['MOD']['LBL_LDAP_GROUP_NAME_DESC']), $this);?>
</td>
																			<td  width='25%' align="left"  valign='top'><input name="ldap_group_name" size='20' type="text"  value="<?php echo $this->_tpl_vars['settings']['ldap_group_name']; ?>
"></td>
																		</tr>
																		<tr>
																			<td scope="row" valign='top' nowrap><?php echo $this->_tpl_vars['MOD']['LBL_LDAP_GROUP_USER_ATTR']; ?>
 <?php echo smarty_function_sugar_help(array('text' => $this->_tpl_vars['MOD']['LBL_LDAP_GROUP_USER_ATTR_DESC']), $this);?>
</td>
																			<td align="left"  valign='top'><input name="ldap_group_user_attr" size='20' type="text" value="<?php echo $this->_tpl_vars['settings']['ldap_group_user_attr']; ?>
"> </td>
																			<td scope="row" valign='top' nowrap><?php echo $this->_tpl_vars['MOD']['LBL_LDAP_GROUP_ATTR']; ?>
 <?php echo smarty_function_sugar_help(array('text' => $this->_tpl_vars['MOD']['LBL_LDAP_GROUP_ATTR_DESC']), $this);?>
</td>
																			<td align="left"  valign='top'><input name="ldap_group_attr" size='20' type="text" value="<?php echo $this->_tpl_vars['settings']['ldap_group_attr']; ?>
"> </td>
																		</tr>
																	</table>
																 <br>
																</span>
															</td>
														</tr>
														<tr>
															<td scope="row" valign='top'nowrap><?php echo $this->_tpl_vars['MOD']['LBL_LDAP_AUTHENTICATION']; ?>
 <?php echo smarty_function_sugar_help(array('text' => $this->_tpl_vars['MOD']['LBL_LDAP_AUTHENTICATION_DESC']), $this);?>
</td>
															<td align="left"  valign='top' >
															<?php if (! empty ( $this->_tpl_vars['settings']['ldap_authentication'] )): ?>
																<?php $this->assign('ldap_authentication_checked', 'CHECKED'); ?>
																<?php $this->assign('ldap_authentication_display', ''); ?>
															<?php else: ?>
																<?php $this->assign('ldap_authentication_checked', ''); ?>
																<?php $this->assign('ldap_authentication_display', 'none'); ?>
															<?php endif; ?>
															<input name="ldap_authentication_checkbox" class="checkbox"  type="checkbox" <?php echo $this->_tpl_vars['ldap_authentication_checked']; ?>
 onclick='toggleDisplay("ldap_authentication")'>
															</td>
															<td valign='middle' nowrap></td>
															<td align="left"  valign='middle'></td>
														</tr>
														<tr>
															<td></td>
															<td colspan='3'>
															<span id='ldap_authentication' style='display:<?php echo $this->_tpl_vars['ldap_authentication_display']; ?>
'>
																<table width='100%' >
																	<tr>
																		<td width='25%' scope="row" valign='top'nowrap><?php echo $this->_tpl_vars['MOD']['LBL_LDAP_ADMIN_USER']; ?>
 <?php echo smarty_function_sugar_help(array('text' => $this->_tpl_vars['MOD']['LBL_LDAP_ADMIN_USER_DESC']), $this);?>
</td>
																		<td width='25%' align="left"  valign='top'><input name="ldap_admin_user" size='20' type="text" value="<?php echo $this->_tpl_vars['settings']['ldap_admin_user']; ?>
"></td>
																		<td width='25%' scope="row" valign='middle' nowrap><?php echo $this->_tpl_vars['MOD']['LBL_LDAP_ADMIN_PASSWORD']; ?>
</td>
																		<td width='25%' align="left"  valign='middle'><input name="ldap_admin_password" size='20' type="password" value="<?php echo $this->_tpl_vars['settings']['ldap_admin_password']; ?>
"> </td>
																	</tr>
																</table>
																<br>
															</span>
															</td>
														</tr>
														<tr>
															<td scope="row" valign='top' nowrap><?php echo $this->_tpl_vars['MOD']['LBL_LDAP_AUTO_CREATE_USERS']; ?>
 <?php echo smarty_function_sugar_help(array('text' => $this->_tpl_vars['MOD']['LBL_LDAP_AUTO_CREATE_USERS_DESC']), $this);?>
</td>
															<?php if (! empty ( $this->_tpl_vars['settings']['ldap_auto_create_users'] )): ?>
																<?php $this->assign('ldap_auto_create_users_checked', 'CHECKED'); ?>
															<?php else: ?>
																<?php $this->assign('ldap_auto_create_users_checked', ''); ?>
															<?php endif; ?>
															<td align="left"  valign='top'><input type='hidden' name='ldap_auto_create_users' value='0'><input name="ldap_auto_create_users" value="1" class="checkbox" type="checkbox" <?php echo $this->_tpl_vars['ldap_auto_create_users_checked']; ?>
></td>
															<td valign='middle' nowrap></td>
															<td align="left"  valign='middle'></td>
														</tr>
														<tr>
															<td scope="row" valign='middle' nowrap><?php echo $this->_tpl_vars['MOD']['LBL_LDAP_ENC_KEY']; ?>
 <?php echo smarty_function_sugar_help(array('text' => $this->_tpl_vars['LDAP_ENC_KEY_DESC']), $this);?>
</td>
															<td align="left"  valign='middle'><input name="ldap_enc_key" size='35' type="password" value="<?php echo $this->_tpl_vars['settings']['ldap_enc_key']; ?>
" <?php echo $this->_tpl_vars['LDAP_ENC_KEY_READONLY']; ?>
> </td>
															<td valign='middle' nowrap></td>
															<td align="left"  valign='middle'></td>
														</tr>
													</table>
												</td>
											</tr>
										</table>
									</td>
								</tr>
							</table>
							
						             <!-- start SAML -->
						   <?php if (! empty ( $this->_tpl_vars['config']['authenticationClass'] ) && $this->_tpl_vars['config']['authenticationClass'] === 'SAMLAuthenticate'): ?>
                           <?php $this->assign('saml_enabled_checked', 'CHECKED'); ?>
                           <?php $this->assign('saml_display', 'inline'); ?>
                        <?php else: ?>
                           <?php $this->assign('saml_enabled_checked', ''); ?>
                           <?php $this->assign('saml_display', 'none'); ?>
                     <?php endif; ?>
        
                     <table id = 'saml_table' width="100%" border="0" cellspacing="0" cellpadding="0" class="edit view">
                        <tr>
                           <td>
                              <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                 <tr>
                                    <th align="left" scope="row" colspan='3'><h4><?php echo $this->_tpl_vars['MOD']['LBL_SAML_TITLE']; ?>
</h4></th>
                                 </tr>
                                 <tr>
                                    <td width="25%" scope="row" valign='middle'>
                                       <?php echo $this->_tpl_vars['MOD']['LBL_SAML_ENABLE'];  echo smarty_function_sugar_help(array('text' => $this->_tpl_vars['MOD']['LBL_SAML_HELP_TXT']), $this);?>

                                    </td><td valign='middle'>
                                    
                                    <input name="authenticationClass" id="system_saml_enabled" class="checkbox"  
                                       value="SAMLAuthenticate" type="checkbox" 
                                       <?php if ($this->_tpl_vars['saml_enabled_checked']): ?>checked="1"<?php endif; ?> 
                                       onclick='toggleDisplay("saml_display");enableDisablePasswordTable("system_saml_enabled");'>
                                    </td><td>&nbsp;</td><td>&nbsp;</td></tr>
                                 <tr>
                                    <td colspan='4'>
                                       <table  cellspacing='0' cellpadding='1' id='saml_display' style='display:<?php echo $this->_tpl_vars['saml_display']; ?>
' width='100%'>
                                            <tr>
                                             <td scope="row" valign='middle' nowrap><?php echo $this->_tpl_vars['MOD']['LBL_SAML_LOGIN_URL']; ?>
 <?php echo smarty_function_sugar_help(array('text' => $this->_tpl_vars['MOD']['LBL_SAML_LOGIN_URL_DESC']), $this);?>
</td>
                                             <td align="left"  valign='middle'><input name="SAML_loginurl" size='35' type="text" value="<?php echo $this->_tpl_vars['config']['SAML_loginurl']; ?>
"></td>
                                             
                                          </tr>
                                          <tr>
                                             <td width='25%' scope="row" valign='top' nowrap><?php echo $this->_tpl_vars['MOD']['LBL_SAML_CERT']; ?>
 <?php echo smarty_function_sugar_help(array('text' => $this->_tpl_vars['MOD']['LBL_SAML_CERT_DESC']), $this);?>
</td><?php echo $this->_tpl_vars['settings']['proxy_host']; ?>

                                             <td width='25%' align="left"  valign='top'><textarea style='height:200px;width:600px' name="SAML_X509Cert" ><?php echo $this->_tpl_vars['config']['SAML_X509Cert']; ?>
</textarea></td>
                                             
                                          </tr>
                                        
                                          
                     </table>
 
                  
               </td>
            </tr>
         </table>
         <!-- end SAML -->	
					</td>
				</tr>
			</table>
			<div style="padding-top: 2px;">
                     <input title="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_TITLE']; ?>
" class="button primary" id="btn_save" type="submit" onclick="addcheck(form);return check_form('ConfigurePasswordSettings');" name="save" value="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_LABEL']; ?>
" />
                     &nbsp;<input title="<?php echo $this->_tpl_vars['MOD']['LBL_CANCEL_BUTTON_TITLE']; ?>
"  onclick="document.location.href='index.php?module=Administration&action=index'" class="button"  type="button" name="cancel" value="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
" />
                  </div>
		</td>
	</tr>
</table>

      </td>
   </tr>
</table>
</form>
<?php echo $this->_tpl_vars['JAVASCRIPT']; ?>



<?php if (! ( $this->_tpl_vars['VALID_PUBLIC_KEY'] )): ?>
<script>
document.getElementById('captcha_public_key').focus();
document.getElementById('captcha_id').checked=true;
document.getElementById('forgotpassword_checkbox').checked=true;
</script>
<?php endif; ?>


<?php echo '
<script>
function addcheck(form){'; ?>

	addForm('ConfigurePasswordSettings');

	removeFromValidate('ConfigurePasswordSettings','passwordsetting_minpwdlength');
	addToValidateLessThan('ConfigurePasswordSettings', 'passwordsetting_minpwdlength', 'int', false,"<?php echo $this->_tpl_vars['MOD']['LBL_PASSWORD_MINIMUM_LENGTH']; ?>
",document.getElementById('passwordsetting_maxpwdlength').value,"<?php echo $this->_tpl_vars['MOD']['LBL_PASSWORD_MAXIMUM_LENGTH']; ?>
");
	
	if(document.getElementById('forgotpassword_checkbox').checked)<?php echo '{'; ?>

	addToValidate('ConfigurePasswordSettings', 'passwordsetting_linkexpirationtime', 'int', form.required_link_exp_time.checked,"<?php echo $this->_tpl_vars['MOD']['ERR_PASSWORD_LINK_EXPIRE_TIME']; ?>
 ");
	<?php echo '}'; ?>

	
	if(document.getElementById('SystemGeneratedPassword_checkbox').checked)<?php echo '{'; ?>

	addToValidate('ConfigurePasswordSettings', 'passwordsetting_systexpirationtime', 'int', form.required_sys_pwd_exp_time.checked,"<?php echo $this->_tpl_vars['MOD']['ERR_PASSWORD_EXPIRE_TIME']; ?>
" );
	addToValidate('ConfigurePasswordSettings', 'passwordsetting_systexpirationlogin', 'int', form.required_sys_pwd_exp_login.checked,"<?php echo $this->_tpl_vars['MOD']['ERR_PASSWORD_EXPIRE_LOGIN']; ?>
" );
   <?php echo '}'; ?>


    addToValidate('ConfigurePasswordSettings', 'passwordsetting_userexpirationtime', 'int', form.required_user_pwd_exp_time.checked,"<?php echo $this->_tpl_vars['MOD']['ERR_PASSWORD_EXPIRE_TIME']; ?>
" );
	addToValidate('ConfigurePasswordSettings', 'passwordsetting_userexpirationlogin', 'int', form.required_user_pwd_exp_login.checked,"<?php echo $this->_tpl_vars['MOD']['ERR_PASSWORD_EXPIRE_LOGIN']; ?>
" );

	addToValidate('ConfigurePasswordSettings', 'passwordsetting_lockoutexpirationlogin', 'int', form.required_lockout_exp_login.checked,"<?php echo $this->_tpl_vars['MOD']['ERR_PASSWORD_LOCKOUT_LOGIN']; ?>
" );
	addToValidate('ConfigurePasswordSettings', 'passwordsetting_lockoutexpirationtime', 'int', form.required_lockout_exp_login.checked,"<?php echo $this->_tpl_vars['MOD']['ERR_PASSWORD_LOCKOUT_TIME']; ?>
" );
	addToValidateMoreThan('ConfigurePasswordSettings', 'passwordsetting_minpwdlength', 'int', false,"<?php echo $this->_tpl_vars['MOD']['LBL_PASSWORD_MINIMUM_LENGTH']; ?>
",'0');
	
	var number_of_requirements=0;
	if (document.getElementById('passwordsetting_onespecial').checked)
		number_of_requirements++;
	if (document.getElementById('passwordsetting_onenumber').checked)
		number_of_requirements++;
	if (document.getElementById('passwordsetting_onelower').checked)
		number_of_requirements++;
	if (document.getElementById('passwordsetting_oneupper').checked)
		number_of_requirements++;
	if(document.getElementById('passwordsetting_maxpwdlength').value != '')
		addToValidateMoreThan('ConfigurePasswordSettings', 'passwordsetting_maxpwdlength', 'int', false,"<?php echo $this->_tpl_vars['MOD']['LBL_PASSWORD_MAXIMUM_LENGTH']; ?>
",number_of_requirements);
	
	if (document.getElementById('customregex').value!='')
		addToValidate('ConfigurePasswordSettings', 'passwordsetting_regexcomment','alpha','true',"<?php echo $this->_tpl_vars['MOD']['ERR_EMPTY_REGEX_DESCRIPTION']; ?>
");
		
<?php echo '	}


function open_email_template_form(fieldToSet) {
	fieldToSetValue = fieldToSet;
	URL="index.php?module=EmailTemplates&action=EditView&inboundEmail=true&show_js=1";
	windowName = \'email_template\';
	windowFeatures = \'width=800\' + \',height=600\' 	+ \',resizable=1,scrollbars=1\';

	win = window.open(URL, windowName, windowFeatures);
	if(window.focus)
	{
		// put the focus on the popup if the browser supports the focus() method
		win.focus();
	}
}

function enableDisablePasswordTable(checkbox_id) {
   var other = checkbox_id == "system_saml_enabled" ? "ldap_table" :  "saml_table";
	var enabled = document.getElementById(checkbox_id).checked;
	if (enabled) {
		document.getElementById("emailTemplatesId").style.display = "none";
		document.getElementById("sysGeneratedId").style.display = "none";
		document.getElementById("userResetPassId").style.display = "none";
		document.getElementById("passRequirementId").style.display = "none";
		document.getElementById("userGenPassExpId").style.display = "none";
		document.getElementById("loginLockoutId").style.display = "none";
		document.getElementById(other).style.display = "none";
	} else {
		document.getElementById("emailTemplatesId").style.display = "";
		document.getElementById("sysGeneratedId").style.display = "";
		document.getElementById("userResetPassId").style.display = "";
		document.getElementById("passRequirementId").style.display = "";
		document.getElementById("userGenPassExpId").style.display = "";
		document.getElementById("loginLockoutId").style.display = "";
		document.getElementById(other).style.display = "";
		
	}
} // if

function edit_email_template_form(templateField) {
	fieldToSetValue = templateField;
	var field=document.getElementById(templateField);
	URL="index.php?module=EmailTemplates&action=EditView&inboundEmail=true&show_js=1";
	if (field.options[field.selectedIndex].value != \'undefined\') {
		URL+="&record="+field.options[field.selectedIndex].value;
	}
	windowName = \'email_template\';
	windowFeatures = \'width=800\' + \',height=600\' 	+ \',resizable=1,scrollbars=1\';

	win = window.open(URL, windowName, windowFeatures);
	if(window.focus)
	{
		// put the focus on the popup if the browser supports the focus() method
		win.focus();
	}
}

function refresh_email_template_list(template_id, template_name) {
	var field=document.getElementById(fieldToSetValue);
	var bfound=0;
	for (var i=0; i < field.options.length; i++) {
			if (field.options[i].value == template_id) {
				if (field.options[i].selected==false) {
					field.options[i].selected=true;
				}
				field.options[i].text = template_name;
				bfound=1;
			}
	}
	//add item to selection list.
	if (bfound == 0) {
		var newElement=document.createElement(\'option\');
		newElement.text=template_name;
		newElement.value=template_id;
		field.options.add(newElement);
		newElement.selected=true;
	}

	//enable the edit button.
	var editButtonName = \'edit_generatepasswordtmpl\';
	if (fieldToSetValue == \'generatepasswordtmpl\') {
		editButtonName = \'edit_lostpasswordtmpl\';
	} // if
	var field1=document.getElementById(editButtonName);
	field1.style.visibility="visible";

	var applyListToTemplateField = \'generatepasswordtmpl\';
	if (fieldToSetValue == \'generatepasswordtmpl\') {
		applyListToTemplateField = \'lostpasswordtmpl\';
	} // if
	var field=document.getElementById(applyListToTemplateField);
	if (bfound == 1) {
		for (var i=0; i < field.options.length; i++) {
			if (field.options[i].value == template_id) {
				field.options[i].text = template_name;
			} // if
		} // for

	} else {
		var newElement=document.createElement(\'option\');
		newElement.text=template_name;
		newElement.value=template_id;
		field.options.add(newElement);
	} // else
	-->
}

function testregex(customregex)
{
try
  {
var string = \'hello\';
string.match(customregex.value);
  }
catch(err)
  {
  	alert(SUGAR.language.get("Administration", "ERR_INCORRECT_REGEX"));
  	setTimeout("document.getElementById(\'customregex\').select()",10);
  }
}
function toggleDisplay_2(id){

	if(this.document.getElementById(id).style.display==\'none\'){
		this.document.getElementById(id).style.display=\'\';
		this.document.getElementById(id+"_lbl").innerHTML=\'';  echo $this->_tpl_vars['MOD']['LBL_HIDE_ADVANCED_OPTIONS'];  echo '\';
		this.document.getElementById("regex_config_display_img").src = \'';  echo smarty_function_sugar_getimagepath(array('file' => "basic_search.gif"), $this); echo '\';		
	}else{
		this.document.getElementById(id).style.display=\'none\'
		this.document.getElementById(id+"_lbl").innerHTML=\'';  echo $this->_tpl_vars['MOD']['LBL_SHOW_ADVANCED_OPTIONS'];  echo '\';
		this.document.getElementById("regex_config_display_img").src = \'';  echo smarty_function_sugar_getimagepath(array('file' => "advanced_search.gif"), $this); echo '\';	
	}
}

function forgot_password_enable(check){
var table_fields=document.getElementById(\'forgot_password_table\');
var forgot_password_input=table_fields.getElementsByTagName(\'input\');
var forgot_password_select=table_fields.getElementsByTagName(\'select\');
	if(check.checked){
		for (i=0;i<forgot_password_input.length;i++)
			forgot_password_input[i].disabled=\'\';
		for (j=0;j<forgot_password_select.length;j++)
			forgot_password_select[j].disabled=\'\';
		document.ConfigurePasswordSettings.captcha_on[1].disabled=\'\';
	}else
		{
		document.ConfigurePasswordSettings.captcha_on[1].disabled=\'disabled\';
		document.ConfigurePasswordSettings.captcha_on[1].checked=\'\';
		document.getElementById("captcha_config_display").style.display=\'none\';
		for (i=0;i<forgot_password_input.length;i++)
			forgot_password_input[i].disabled=\'disabled\';
		for (j=0;j<forgot_password_select.length;j++)
			forgot_password_select[j].disabled=\'disabled\';
	}
}

function enable_syst_generated_pwd(check){
var table_fields=document.getElementById(\'syst_generated_pwd_table\');
var syst_generated_pwd_input=table_fields.getElementsByTagName(\'input\');
var syst_generated_pwd_select=table_fields.getElementsByTagName(\'select\');
	if(check.checked){
		for (i=0;i<syst_generated_pwd_input.length;i++)
			syst_generated_pwd_input[i].disabled=\'\';
		for (j=0;j<syst_generated_pwd_select.length;j++)
			syst_generated_pwd_select[j].disabled=\'\';
	}else
		{
		for (i=0;i<syst_generated_pwd_input.length;i++)
			syst_generated_pwd_input[i].disabled=\'disabled\';
		for (j=0;j<syst_generated_pwd_select.length;j++)
			syst_generated_pwd_select[j].disabled=\'disabled\';
	}
}
forgot_password_enable(document.getElementById(\'forgotpassword_checkbox\'));
enable_syst_generated_pwd(document.getElementById(\'SystemGeneratedPassword_checkbox\'));
if(document.getElementById(\'system_saml_enabled\').checked)enableDisablePasswordTable(\'system_saml_enabled\');
if(document.getElementById(\'system_ldap_enabled\').checked)enableDisablePasswordTable(\'system_ldap_enabled\');

</script>

'; ?>