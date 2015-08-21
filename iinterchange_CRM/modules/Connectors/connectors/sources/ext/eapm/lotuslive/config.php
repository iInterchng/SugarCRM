<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/


$config = array (
  'name' => 'LotusLive&#169;',
  'eapm' => array(
    'enabled' => true,
    'only' => true,
  ),
  'order' => 14,
  'properties' => array (
      'oauth_consumer_key' => '',
      'oauth_consumer_secret' => '',
  ),
  'encrypt_properties' => array (
      'oauth_consumer_secret',
  ),
);
