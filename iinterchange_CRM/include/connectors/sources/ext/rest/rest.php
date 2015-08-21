<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/


require_once('include/connectors/sources/default/source.php');
 
abstract class ext_rest extends source{
	
	protected $_url;
	
	public function __construct(){
 		parent::__construct();
 	}
 	
 	protected function fetchUrl($url){
 		$data = '';
 		$data = @file_get_contents($url);
 		if(empty($data)) {
 		   $GLOBALS['log']->error("Unable to retrieve contents from url:[{$url}]");
 		}
 		return $data;
 	}
 	
 	public function getUrl(){
 		return $this->_url;
 	}
 	
 	public function setUrl($url){
 		$this->_url = $url;
 	}
 	
 	public function __destruct(){
		parent::__destruct();
	}
}
?>