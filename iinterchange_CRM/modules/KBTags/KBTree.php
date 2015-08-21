<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

/*usage: initialize the tree, add nodes, generate header for required files inclusion.
 *  	  generate function that has tree data and script to convert data into tree init.
 *	      generate call to tree init function.
 *		  subsequent tree data calls will be served by the node class.  
 *		  tree view by default make ajax based calls for all requests.
 */
require_once('include/ytree/Tree.php');

class KBTree extends Tree {
	function KBTree($name) {
		parent::Tree($name);
	}
	function generate_nodes_array($scriptTags = true) {
		global $sugar_config;
		$node=null;
		$ret=array();
		foreach ($this->_nodes as $node ) {
			$ret['nodes'][]=$node->get_definition();
			$abc=$this->json->encode($node->get_definition());
		}  	
	
		//todo removed site_url setting from here.
		//todo make these variables unique.	
		$tree_data="var TREE_DATA= " . $this->json->encode($ret) . ";\n";
		$tree_data.="var param= " . $this->json->encode($this->_params) . ";\n";  	
		
		$tree_data.="var mytree;\n";
		$tree_data.="treeinit(mytree,TREE_DATA,'{$this->_name}',param);\n";
		if($scriptTags) return '<script>'.$tree_data.'</script>';
		else return $tree_data;
	}
}

?>
 