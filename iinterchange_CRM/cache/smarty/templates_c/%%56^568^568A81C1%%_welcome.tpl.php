<?php /* Smarty version 2.6.11, created on 2014-05-08 12:13:45
         compiled from themes/Sugar/tpls/_welcome.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_getimagepath', 'themes/Sugar/tpls/_welcome.tpl', 9, false),)), $this); ?>

<?php if ($this->_tpl_vars['AUTHENTICATED']): ?>
<div id="welcome">
    <?php echo $this->_tpl_vars['APP']['NTC_WELCOME']; ?>
, <strong><a href='index.php?module=Users&action=EditView&record=<?php echo $this->_tpl_vars['CURRENT_USER_ID']; ?>
'><?php echo $this->_tpl_vars['CURRENT_USER']; ?>
</a></strong> <span>|</span> <a href='<?php echo $this->_tpl_vars['LOGOUT_LINK']; ?>
' class='utilsLink'><?php echo $this->_tpl_vars['LOGOUT_LABEL']; ?>
</a> 
</div>
<img src="<?php echo smarty_function_sugar_getimagepath(array('file' => "globalLinksLeft.png"), $this);?>
" id="globalLinksLeft"/>
<?php endif; ?>