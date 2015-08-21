<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/




$global_control_links['sync'] = array(
'linkinfo' => array(translate('LBL_START_SYNC', 'Sync')=>'javascript:start_sync()'),
'submenu' => ''
 );
 $global_control_links['sync2'] = array(
'linkinfo' => array(translate('LBL_GO_ONLINE', 'Sync')=>'javascript:work_online()'),
'submenu' => ''
 );