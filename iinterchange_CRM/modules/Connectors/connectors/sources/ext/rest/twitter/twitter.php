<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/


/*********************************************************************************
* Description:
* Portions created by SugarCRM are Copyright (C) SugarCRM, Inc. All Rights
* Reserved. Contributor(s): contact@synolia.com - www.synolia.com
* *******************************************************************************/

require_once('include/connectors/sources/ext/rest/rest.php');

class ext_rest_twitter extends ext_rest {
    public function __construct(){
        parent::__construct();
        $this->_enable_in_wizard = false;
        $this->_enable_in_hover = true;
    }

    /*
     * getItem
     *
     * As the twitter connector does not have a true API call, we simply
     * override this abstract
     */
    public function getItem($args=array(), $module=null){}


    /*
     * getList
     *
     * As the twitter connector does not have a true API call, we simply
     * override this abstract method
     */
    public function getList($args=array(), $module=null){}


    public function __destruct(){
        parent::__destruct();
    }
}

?>
