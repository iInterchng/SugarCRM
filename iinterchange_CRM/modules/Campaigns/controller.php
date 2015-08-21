<?php
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/


require_once('include/MVC/Controller/SugarController.php');
class CampaignsController extends SugarController{

    function action_newsletterlist(){
        $this->view = 'newsletterlist';
    }
}
?>