<?php /* Smarty version 2.6.11, created on 2014-05-08 12:13:45
         compiled from themes/Sugar/tpls/header.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "themes/Sugar/tpls/_head.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<body class="yui-skin-sam">
	<?php echo $this->_tpl_vars['SUGAR_DCMENU']; ?>

	<div id="header">
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "themes/Sugar/tpls/_companyLogo.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <?php if ($this->_tpl_vars['AUTHENTICATED']): ?>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "themes/Sugar/tpls/_globalLinks.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php endif; ?>
    <div class="clear"></div>
    <div class="clear"></div>
    <?php if (! $this->_tpl_vars['AUTHENTICATED']): ?>
    <br /><br />
    <?php endif; ?>
	<?php if ($this->_tpl_vars['AUTHENTICATED']): ?>
      <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "themes/Sugar/tpls/_headerModuleList.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <?php endif; ?>
	
    <div class="clear"></div>
    <div class="clear"></div>
</div>
	<div class="clear"></div>
    <div class="clear"></div>
<div id="main">
    <div id="content">
        <table style="width:100%" id="contentTable"><tr><td>