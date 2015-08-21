<?php /* Smarty version 2.6.11, created on 2014-05-09 14:48:12
         compiled from include/SugarFields/Fields/Image/UserDetailView.tpl */ ?>
<?php if (isset ( $this->_tpl_vars['displayParams']['link'] )): ?>
<a href='<?php echo $this->_tpl_vars['displayParams']['link']; ?>
'>
<?php endif; ?>

<img 
	id="img_picture" 
	name="img_picture" 
	<?php if (empty ( $this->_tpl_vars['picture_value'] )): ?>
	   src='' 	
	<?php else: ?>
	   src='index.php?entryPoint=download&id=<?php echo $this->_tpl_vars['picture_value']; ?>
&type=SugarFieldImage&isTempFile=1'
	<?php endif; ?>	
	style='
		<?php if (empty ( $this->_tpl_vars['picture_value'] )): ?>
			display:	none;
		<?php endif; ?>
		<?php if (($this->_tpl_vars['vardef']).".border" == ""): ?>
			border: 0; 
		<?php else: ?>
			border: 1px solid black; 
		<?php endif; ?>
		<?php if (($this->_tpl_vars['vardef']).".width" == ""): ?>
			width: auto;
		<?php else: ?>
			width: <?php echo $this->_tpl_vars['vardef']['width']; ?>
px;
		<?php endif; ?>
		<?php if (($this->_tpl_vars['vardef']).".height" == ""): ?>
			height: auto;
		<?php else: ?>
			height: <?php echo $this->_tpl_vars['vardef']['height']; ?>
px;
		<?php endif; ?>
		'		
>

<?php if (isset ( $this->_tpl_vars['displayParams']['link'] )): ?>
</a>
<?php endif; ?>