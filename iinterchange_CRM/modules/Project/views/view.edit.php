<?php

/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/


 require_once('include/MVC/View/views/view.edit.php');

class ProjectViewEdit extends ViewEdit {

 	function ProjectViewEdit(){
 		parent::ViewEdit();
 	}

 	function display() {
        $this->bean->is_template = 0;
        $this->ev->ss->assign("is_template", 0);
 		parent::display();
 	}
}
?>
