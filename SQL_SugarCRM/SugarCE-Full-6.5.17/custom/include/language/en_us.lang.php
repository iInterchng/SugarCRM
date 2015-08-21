<?php
$db = DBManagerFactory::getInstance(); 
$myQuery = "select cntry_id,cntry_cd from Country_master"; 
$Result=$db->query($myQuery);
$new_array = array();
$new_array[''] = '';
while($row = $db->fetchByAssoc($Result)) {
          $new_array[$row['cntry_id']] = $row['cntry_cd'];
       }
$GLOBALS['app_list_strings']['Country_list']=array (
  '' => '',
  'Malaysia'=>'MAS',
  'India'=>'IND',
);
$GLOBALS['app_list_strings']['set_list']=$new_array;
$GLOBALS['app_list_strings']['region_list']=array (
  '' => '',
);