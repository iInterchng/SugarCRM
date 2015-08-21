<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/


interface MetaDataParserInterface
{

    public function handleSave () ;

    public function getLayout () ;

    public function getLanguage () ;

    public function getHistory () ;

}
?>