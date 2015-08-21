<?php
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

require_once('include/MVC/View/views/view.ajax.php');
require_once('include/Expressions/Expression/Parser/Parser.php');
class ViewExecFunction extends ViewAjax
{
    var $vars = array("tmodule", "id", "params", "function");

    function __construct()
    {
        parent::ViewAjax();
        foreach($this->vars as $var)
        {
            if (empty($_REQUEST[$var]))
                sugar_die("Required paramter $var not set in ViewRelFields");
            $this->$var = $_REQUEST[$var];
        }

    }

 	function display() {
        //First load the primary bean
        $focus = $this->getBean($this->tmodule);
        $focus->retrieve($this->id);

        $params = implode(",", json_decode(html_entity_decode($this->params)));
        $result = Parser::evaluate("{$this->function}($params)", $focus)->evaluate();
        echo json_encode($result);
     }

    function getBean($module)
    {
       global $beanList;
       if (empty($beanList[$module]))
           sugar_die("No bean for module $module");
       $bean = $beanList[$module];
       return new $bean();
    }
}