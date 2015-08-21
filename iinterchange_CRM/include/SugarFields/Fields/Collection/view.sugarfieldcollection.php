<?php
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

require_once('include/SugarFields/Fields/Collection/ViewSugarFieldCollection.php');
$view = new ViewSugarFieldCollection();
$view->setup();
$view->process();
$view->init_tpl();
echo $view->display();
?>