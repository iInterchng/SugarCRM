<?php
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

 require_once('include/ListView/ListViewSmarty.php');
 
class ListViewPackages extends ListViewSmarty{
    var $secondaryDisplayColumns;
    /**
     * Constructor  Call ListViewSmarty
     */
    function ListViewPackages(){
        parent::ListViewSmarty();   
    } 
    
    /**
     * Override the setup method in ListViewSmarty since we are not passing in a bean
     * 
     * @param data  the data to display on the page
     * @param file  the template file to parse
     */
    function setup($data, $file){
        $this->data = $data;
        $this->tpl = $file;       
    }
    
    /**
     * Override the display method
     */
    function display(){
        global $odd_bg, $even_bg, $app_strings;
        $this->ss->assign('rowColor', array('oddListRow', 'evenListRow'));
        $this->ss->assign('bgColor', array($odd_bg, $even_bg));
        $this->ss->assign('displayColumns', $this->displayColumns);
        $this->ss->assign('secondaryDisplayColumns', $this->secondaryDisplayColumns);
        $this->ss->assign('data', $this->data); 
        return $this->ss->fetch($this->tpl);  
    }  
}
?>
