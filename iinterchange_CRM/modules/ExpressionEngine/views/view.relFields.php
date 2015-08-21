<?php
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

require_once('include/MVC/View/views/view.ajax.php');
class ViewRelFields extends ViewAjax
{
    var $vars = array("tmodule", "id", "field", "rel_field");

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



        if (empty($focus->field_defs[$this->field]))
            sugar_die("Unable to find field {$this->field}");

        //now load the requested link field ($this->field must be a field of type link in the target module)
        $def = $focus->field_defs[$this->field];
        if (empty($def['relationship'])) {
            echo "<pre>" . print_r($def) . "</pre>";
            sugar_die("Unable to find relationship for field {$this->field}");
        }

        $lfield = $this->field;
        if(!$focus->load_relationship($this->field))
            sugar_die("Unable to load relationship $lfield");
        if(empty($focus->$lfield))
            sugar_die("Relationship $lfield was not set");
        $rmodule = $focus->$lfield->getRelatedModuleName();

        //now we need a seed of the related module to load.
        $seed = $this->getBean($rmodule);
        $rlist = $focus->$lfield->getBeans($seed);

        if (empty($rlist))
             sugar_die("No related beans found");
        //For now we are only returning the first related record found. Other operations may
        $rBean = $rlist[0];
        $rf = $this->rel_field;
        if (isset($rBean->$rf))
            echo json_encode($rBean->$rf);
        else
            sugar_die("Related field not set");
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