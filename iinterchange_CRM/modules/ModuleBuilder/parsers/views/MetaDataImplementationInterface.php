<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/


interface MetaDataImplementationInterface
{
    public function getViewdefs () ;
    public function getFielddefs () ;
    public function getLanguage () ;
    public function deploy ($defs) ;
    public function getHistory () ;
}