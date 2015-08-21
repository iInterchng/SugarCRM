<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

 
$themedef = array(
    'name'  => "Right to Left",
    'description' => "A Right to Left Theme",
    'directionality' => 'rtl',
    'parentTheme' => 'Sugar',
    'ignoreParentFiles' => array('style.js'),
    'version' => array(
        'regex_matches' => array('6\.*.*'),
        ),
    'group_tabs' => true,
    );
