<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

 
require_once('include/SugarObjects/templates/basic/Basic.php');
require_once('include/upload_file.php');
require_once('include/formbase.php');

class File extends Basic
{
	public $file_url;
	public $file_url_noimage;

    function File(){
		parent::Basic();
	}

	/**
	 * @see SugarBean::save()
	 */
	public function save($check_notify=false)
	{
		if (!empty($this->uploadfile)) {
			$this->filename = $this->uploadfile;
		}
		
		return parent::save($check_notify);
 	}

 	/**
	 * @see SugarBean::fill_in_additional_detail_fields()
	 */
	public function fill_in_additional_detail_fields()
 	{
		global $app_list_strings;
		global $img_name;
		global $img_name_bare;
		
		$this->uploadfile = $this->filename;
		
		// Bug 41453 - Make sure we call the parent method as well
		parent::fill_in_additional_detail_fields();
		
		if (!$this->file_ext) {
			$img_name = SugarThemeRegistry::current()->getImageURL(strtolower($this->file_ext)."_image_inline.gif");
			$img_name_bare = strtolower($this->file_ext)."_image_inline";
		}
		
		//set default file name.
		if (!empty ($img_name) && file_exists($img_name)) {
			$img_name = $img_name_bare;
		} 
		else {
			$img_name = "def_image_inline"; //todo change the default image.
		}
		$this->file_url_noimage = basename(UploadFile::get_url($this->filename, $this->id));
		
		if(!empty($this->status_id)) {
	       $this->status = $app_list_strings['document_status_dom'][$this->status_id];
	    }
	}
	
	/**
	 * @see SugarBean::retrieve()
	 */
	public function retrieve($id = -1, $encode=true) 
	{
		$ret_val = parent::retrieve($id, $encode);
	
		$this->name = $this->document_name;
		
		return $ret_val;
	}
}
