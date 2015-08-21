<?php
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

require_once('include/ytree/Tree.php');
require_once('include/ytree/Node.php');
class MBPackageTree{
	
	function MBPackageTree(){
		$this->tree = new Tree('package_tree');
		$this->tree->id = 'package_tree';
		$this->mb = new ModuleBuilder();
		$this->populateTree($this->mb->getNodes(), $this->tree);
	}
	
	function getName(){
		return 'Packages';
	}
	
	function populateTree($nodes, &$parent){
		foreach($nodes as $node){
			if(empty($node['label']))$node['label'] = $node['name'];
			$yn = new Node($parent->id . '/' . $node['name'],$node['label']);
			if(!empty($node['action']))
			$yn->set_property('action', $node['action']);
			$yn->set_property('href', 'javascript:void(0);');
			$yn->id = $parent->id . '/' . $node['name'];
			if(!empty($node['children']))$this->populateTree($node['children'], $yn);
			$parent->add_node($yn);
		}
	}
	
	function fetch(){
		//return $this->tree->generate_header() . $this->tree->generate_nodes_array();
		return $this->tree->generate_nodes_array();
	}
	
	function fetchNodes(){
		return $this->tree->generateNodesRaw();
	}
	
	
	
	
	
}
?>