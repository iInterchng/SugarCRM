<?php
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/


require_once('include/MVC/Controller/SugarController.php');
  
class MergeRecordsController extends SugarController
{	
    /**
     * Override default method so we don't load a bean class automatically
     *
     * @see SugarController::loadBean()
     */
	public function loadBean()
	{	
	}	
}