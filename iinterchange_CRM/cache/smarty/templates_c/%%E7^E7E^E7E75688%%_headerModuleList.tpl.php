<?php /* Smarty version 2.6.11, created on 2014-05-08 12:13:45
         compiled from themes/Sugar/tpls/_headerModuleList.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_getimagepath', 'themes/Sugar/tpls/_headerModuleList.tpl', 24, false),array('function', 'sugar_link', 'themes/Sugar/tpls/_headerModuleList.tpl', 37, false),)), $this); ?>
<?php $this->assign('underscore', '_'); ?>
<div class="yuimenubar yuimenubarnav" id="moduleList">
<?php $_from = $this->_tpl_vars['groupTabs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['tabGroups'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['tabGroups']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['tabGroupName'] => $this->_tpl_vars['tabGroup']):
        $this->_foreach['tabGroups']['iteration']++;
?>
    <?php if ($this->_tpl_vars['tabGroupName'] == 'All'): ?>
  <?php $this->assign('groupTabId', ''); ?>
  <?php else: ?>
  <?php $this->assign('groupTabId', ($this->_tpl_vars['tabGroupName']).($this->_tpl_vars['underscore'])); ?>
  <?php endif; ?>
  
  
	<div id="themeTabGroupMenu_<?php echo $this->_tpl_vars['tabGroupName']; ?>
" class="themeTabGroupMenu yuimenubar yuimenubarnav"><div class="bd" id="themeTabGroup_<?php echo $this->_tpl_vars['tabGroupName']; ?>
"  style="border: 0px !important; margin: 0px !important;<?php if ($this->_tpl_vars['tabGroupName'] != $this->_tpl_vars['currentGroupTab']): ?>display:none;<?php endif; ?>">
      <ul class="first-of-type">
      <?php if ($this->_tpl_vars['USE_GROUP_TABS']): ?>
        <script type="text/javascript">
        sugar_theme_gm_current = '<?php echo $this->_tpl_vars['currentGroupTab']; ?>
';
        Set_Cookie('sugar_theme_gm_current','<?php echo $this->_tpl_vars['currentGroupTab']; ?>
',30,'/','','');
        </script>
                <li class="yuimenubaritem moduleTabGroupMenu">
        <a href="#" class="yuimenuitemlabel more group" title="<?php echo $this->_tpl_vars['tabGroupName']; ?>
"><?php echo $this->_tpl_vars['tabGroupName']; ?>
<img src="<?php echo smarty_function_sugar_getimagepath(array('file' => "grouped-menu-arrow.png"), $this);?>
" class="arrow"></a>
        <div id="TabGroupMenu_<?php echo $this->_tpl_vars['tabGroupName']; ?>
" class="yuimenu dashletPanelMenu"><div class="bd">
			<ul>
          <?php $_from = $this->_tpl_vars['groupTabs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['groupList'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['groupList']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['group'] => $this->_tpl_vars['module']):
        $this->_foreach['groupList']['iteration']++;
?>
          <li><a href="javascript:(sugar_theme_gm_switch('<?php echo $this->_tpl_vars['group']; ?>
') && false)" class="yuimenuitemlabel"><?php echo $this->_tpl_vars['group']; ?>
</a></li>
          <?php endforeach; endif; unset($_from); ?>
		  </ul>
        </div><div class="clear"></div></div> 
        </li>
      <?php endif; ?>

		<?php $_from = $this->_tpl_vars['tabGroup']['modules']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['moduleList'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['moduleList']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['name'] => $this->_tpl_vars['module']):
        $this->_foreach['moduleList']['iteration']++;
?>
			<?php if ($this->_tpl_vars['name'] == $this->_tpl_vars['MODULE_TAB']): ?>
			<li class="yuimenubaritem <?php if (($this->_foreach['moduleList']['iteration']-1) == 0): ?>first-of-type<?php endif; ?> current"><?php echo smarty_function_sugar_link(array('id' => "moduleTab_".($this->_tpl_vars['groupTabId']).($this->_tpl_vars['name']),'module' => $this->_tpl_vars['name'],'data' => $this->_tpl_vars['module'],'class' => 'yuimenuitemlabel'), $this);?>

			<?php else: ?>
			<li class="yuimenubaritem <?php if (($this->_foreach['moduleList']['iteration']-1) == 0): ?>first-of-type<?php endif; ?>"><?php echo smarty_function_sugar_link(array('id' => "moduleTab_".($this->_tpl_vars['groupTabId']).($this->_tpl_vars['name']),'module' => $this->_tpl_vars['name'],'data' => $this->_tpl_vars['module'],'class' => 'yuimenuitemlabel'), $this);?>

			<?php endif; ?>
			<?php if ($this->_tpl_vars['shortcutTopMenu'][$this->_tpl_vars['name']]): ?>
				<div id="<?php echo $this->_tpl_vars['groupTabId'];  echo $this->_tpl_vars['name']; ?>
" class="yuimenu dashletPanelMenu"><div class="bd">
				
										<ul class="shortCutsUl">
										<li class="yuimenuitem"><?php echo $this->_tpl_vars['APP']['LBL_LINK_ACTIONS']; ?>
</li>
										<?php $_from = $this->_tpl_vars['shortcutTopMenu'][$this->_tpl_vars['name']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['shortcut_item']):
?>
										
											<li class="yuimenuitem"><a href="<?php echo $this->_tpl_vars['shortcut_item']['URL']; ?>
" class="yuimenuitemlabel"><?php echo $this->_tpl_vars['shortcut_item']['LABEL']; ?>
</a></li>
										
										<?php endforeach; endif; unset($_from); ?>
										</ul>
										<?php if ($this->_tpl_vars['groupTabId']): ?>
										<ul id="lastViewedContainer<?php echo $this->_tpl_vars['tabGroupName']; ?>
_<?php echo $this->_tpl_vars['name']; ?>
" class="lastViewedUl"><li class="yuimenuitem"><?php echo $this->_tpl_vars['APP']['LBL_LAST_VIEWED']; ?>
</li><li class="yuimenuitem" id="shortCutsLoading<?php echo $this->_tpl_vars['tabGroupName']; ?>
_<?php echo $this->_tpl_vars['name']; ?>
"><a href="#" class="yuimenuitemlabel">&nbsp;</a></li></ul>
										<?php else: ?>
										<ul id="lastViewedContainer<?php echo $this->_tpl_vars['name']; ?>
" class="lastViewedUl"><li class="yuimenuitem"><?php echo $this->_tpl_vars['APP']['LBL_LAST_VIEWED']; ?>
</li><li class="yuimenuitem" id="shortCutsLoading<?php echo $this->_tpl_vars['tabGroupName']; ?>
_<?php echo $this->_tpl_vars['name']; ?>
"><a href="#" class="yuimenuitemlabel">&nbsp;</a></li></ul>
										<?php endif; ?>
								
				
				</div>
				<div class="clear"></div>
				</div>      
			<?php endif; ?>
			</li>
			<?php if ($this->_tpl_vars['name'] == $this->_tpl_vars['MODULE_TAB']): ?>
			<li class="yuimenubaritem currentTabRight"><?php echo smarty_function_sugar_link(array('id' => "moduleTab_".($this->_tpl_vars['groupTabId']).($this->_tpl_vars['name_right']),'module' => $this->_tpl_vars['name'],'data' => $this->_tpl_vars['module'],'class' => 'yuimenuitemlabel'), $this);?>
</li>
			<?php endif; ?>
		<?php endforeach; endif; unset($_from); ?>
			<?php if (count ( $this->_tpl_vars['tabGroup']['extra'] ) > 0): ?>
			<li class="yuimenubaritem moduleTabExtraMenu more" id="moduleTabExtraMenu<?php echo $this->_tpl_vars['tabGroupName']; ?>
">
				<a href="#" class="yuimenuitemlabel more"><em>&gt;&gt;</em></a>
				<div id="More<?php echo $this->_tpl_vars['tabGroupName']; ?>
" class="yuimenu dashletPanelMenu"><div class="bd">
				<ul>
					<?php $_from = $this->_tpl_vars['tabGroup']['extra']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['moduleList'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['moduleList']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['module'] => $this->_tpl_vars['name']):
        $this->_foreach['moduleList']['iteration']++;
?>
                  
					<li><?php echo smarty_function_sugar_link(array('id' => "moduleTab_".($this->_tpl_vars['groupTabId']).($this->_tpl_vars['module']),'class' => 'yuimenuitemlabel','module' => ($this->_tpl_vars['module']),'data' => ($this->_tpl_vars['name'])), $this);?>

					<?php endforeach; endif; unset($_from); ?>
				</ul>
				</div>
				<div class="clear"></div>
				</div> 
			</li>
			<?php endif; ?>
			
		</ul>            
	</div></div>
<?php endforeach; endif; unset($_from); ?>
</div>