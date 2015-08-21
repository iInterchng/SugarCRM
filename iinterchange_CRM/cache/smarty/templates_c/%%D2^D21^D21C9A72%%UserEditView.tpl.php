<?php /* Smarty version 2.6.11, created on 2014-05-09 14:35:33
         compiled from include/SugarFields/Fields/Image/UserEditView.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_getimagepath', 'include/SugarFields/Fields/Image/UserEditView.tpl', 75, false),)), $this); ?>


<?php if (isset ( $_REQUEST['isDuplicate'] ) && $_REQUEST['isDuplicate'] == 'true'): ?>
<input type="hidden" id="picture_duplicate" name="picture_duplicate" value="<?php echo $this->_tpl_vars['picture_value']; ?>
"/>
<?php endif; ?>

<input 
	type="file" id="picture" name="picture" 
	title="" size="30" maxlength="255" value="" tabindex="0" 
	onchange="confirm_imagefile('picture');" 
	<?php if (! empty ( $this->_tpl_vars['picture_value'] )): ?>
	style="display:none"
	<?php endif; ?>
/>

<?php if (empty ( $this->_tpl_vars['picture_value'] )):  else: ?>
<img 
	id="img_picture" 
	name="img_picture" 	
	src='index.php?entryPoint=download&id=<?php echo $this->_tpl_vars['picture_value']; ?>
&type=SugarFieldImage&isTempFile=1'
	style='
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
<img 
	id="bt_remove_picture" 
	name="bt_remvoe_picture" 
	alt="<?php echo $this->_tpl_vars['APP']['LBL_REMOVE']; ?>
"
	title="<?php echo $this->_tpl_vars['APP']['LBL_REMOVE']; ?>
"
	src="<?php echo smarty_function_sugar_getimagepath(array('file' => 'delete_inline.gif'), $this);?>
"
	onclick="remove_upload_imagefile('picture');" 	
	/>

<input id="remove_imagefile_picture" name="remove_imagefile_picture" type="hidden"  value="" />
<?php endif; ?>


<script type='text/javascript'>	
     function remove_upload_imagefile(field_name) {
            var field=document.getElementById('remove_imagefile_' + field_name);
            field.value=1;            
            
            //enable the file upload button.
            var field=document.getElementById( field_name);
            field.style.display="";
            
            //hide the image and remove button.
            var field=document.getElementById('img_' + field_name);
            field.style.display="none";
            var field=document.getElementById('bt_remove_' + field_name);
            field.style.display="none";
            
            if(document.getElementById(field_name + '_duplicate')) {
               var field = document.getElementById(field_name + '_duplicate');
               field.value = "";
            }            
    }
    
    function confirm_imagefile(field_name) {
    		var field=document.getElementById(field_name); 
    		var filename=field.value;   
        	var fileExtension = filename.substring(filename.lastIndexOf(".")+1);
        	fileExtension = fileExtension.toLowerCase();
			if (fileExtension == "jpg" || fileExtension == "jpeg" 
				|| fileExtension == "gif" || fileExtension == "png" || fileExtension == "bmp"){
					//image file
				}
			else{
				field.value=null;
				alert("<?php echo $this->_tpl_vars['APP']['LBL_UPLOAD_IMAGE_FILE_INVALID']; ?>
");
			}
	}
</script>