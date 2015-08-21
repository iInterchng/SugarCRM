<?php
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

require_once ('modules/ModuleBuilder/MB/ModuleBuilder.php') ;
require_once ('modules/ModuleBuilder/parsers/ParserFactory.php') ;

class ExpressionEngineController extends SugarController
{
	var $action_remap = array ( ) ;
	
	function ExpressionEngineController() {
		$this->view = 'editFormula';
	}
	
	function action_editFormula ()
    {
     	$this->view = 'editFormula';  
    }
    
	function action_index ()
    {
     	$this->view = 'index';  
    }
    
	function action_cfTest ()
    {
     	$this->view = 'cfTest';  
    }
    
	function action_list ()
    {
     	$this->view = 'index';  
    }

    function action_relFields ()
    {
     	$this->view = 'relFields';  
    }

    function action_execFunction ()
    {
     	$this->view = 'execFunction';  
    }

    function action_functionDetail() {
    	$this->view = 'functionDetail'; 
    }
}
?>