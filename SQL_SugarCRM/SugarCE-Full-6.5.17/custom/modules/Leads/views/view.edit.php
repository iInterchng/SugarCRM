<?php
require_once('include/MVC/View/views/view.edit.php');
class LeadsViewEdit extends ViewEdit{

    public function LeadsViewEdit(){
        parent::ViewEdit();
    }

  public function preDisplay() {
    parent::preDisplay();
    $this->ss->assign('primary_adress_type_c_options', $GLOBALS['app_list_strings']['list_name_as_created_in_studio']);
  }

    public function display(){
        parent::display();
    }
}
?>