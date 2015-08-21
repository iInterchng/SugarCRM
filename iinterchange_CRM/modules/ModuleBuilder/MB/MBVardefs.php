<?php
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

class MBVardefs{
	var $templates = array();
	var $iTemplates = array();
	var $vardefs = array();
	var $vardef = array();
	var $path = '';
	var $name = '';
	var $errors = array();

	function MBVardefs($name, $path, $key_name){
		$this->path = $path;
		$this->name = $name;
		$this->key_name = $key_name;
		$this->load();
	}

	function loadTemplate($by_group, $template, $file){
		$module = $this->name;
		$table_name = $this->name;
		$object_name = $this->key_name;
		$_object_name = strtolower($this->key_name);

		// required by the vardef template for team security in SugarObjects
		$table_name = strtolower($module);

		if(file_exists($file)){
			include($file);
			if($by_group){
				$this->vardefs['fields'] [$template]= $vardefs['fields'];
			}else{
				$this->vardefs['fields']= array_merge($this->vardefs['fields'], $vardefs['fields']);
				if(!empty($vardefs['relationships'])){
					$this->vardefs['relationships']= array_merge($this->vardefs['relationships'], $vardefs['relationships']);
				}
			}
		}

	}

	function mergeVardefs($by_group=false){
		$this->vardefs = array(
					'fields'=>array(),
					'relationships'=>array(),
		);
//		$object_name = $this->key_name;
//		$_object_name = strtolower($this->name);
		$module_name = $this->name;
		$this->loadTemplate($by_group,'basic',  MB_TEMPLATES . '/basic/vardefs.php');
		foreach($this->iTemplates as $template=>$val){
			$file = MB_IMPLEMENTS . '/' . $template . '/vardefs.php';
			$this->loadTemplate($by_group,$template, $file);
		}
		foreach($this->templates as $template=>$val){
			if($template == 'basic')continue;
			$file = MB_TEMPLATES . '/' . $template . '/vardefs.php';
			$this->loadTemplate($by_group,$template, $file);
		}

		if($by_group){
			$this->vardefs['fields'][$this->name] = $this->vardef['fields'];
		}else{
			$this->vardefs['fields'] = array_merge($this->vardefs['fields'], $this->vardef['fields']);
		}
	}

	function updateVardefs($by_group=false){
		$this->mergeVardefs($by_group);
	}


	function getVardefs(){
		return $this->vardefs;
	}

	function getVardef(){
		return $this->vardef;
	}
		
	function addFieldVardef($vardef){
		if(empty($vardef['default']))unset($vardef['default']);
		$this->vardef['fields'][$vardef['name']] = $vardef;
	}

	function deleteField($field){
		unset($this->vardef['fields'][$field->name]);
	}

	function save(){
		$header = file_get_contents('modules/ModuleBuilder/MB/header.php');
		write_array_to_file('vardefs', $this->vardef, $this->path . '/vardefs.php','w', $header);
	}

	function build($path){
		$header = file_get_contents('modules/ModuleBuilder/MB/header.php');
		write_array_to_file('dictionary["' . $this->name . '"]', $this->getVardefs(), $path . '/vardefs.php', 'w', $header);
	}
	function load(){
		$this->vardef = array('fields'=>array(), 'relationships'=>array());
		if(file_exists($this->path . '/vardefs.php')){
			include($this->path. '/vardefs.php');
			$this->vardef = $vardefs;
		}
	}





}
?>