<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

 
function create_default_roles() {
    
// Adding MLA Roles
$mlaRoles = array(
     'Sales Administrator'=>array(
         'Accounts'=>array('admin'=>100, 'access'=>89),
         'Contacts'=>array('admin'=>100, 'access'=>89),
         'Forecasts'=>array('admin'=>100, 'access'=>89),
         'ForecastSchedule'=>array('admin'=>100, 'access'=>89),
         'Leads'=>array('admin'=>100, 'access'=>89),
         'Quotes'=>array('admin'=>100, 'access'=>89),
         'Opportunities'=>array('admin'=>100, 'access'=>89),
     ),
     'Marketing Administrator'=>array(
         'Accounts'=>array('admin'=>100, 'access'=>89),
         'Contacts'=>array('admin'=>100, 'access'=>89),
         'Campaigns'=>array('admin'=>100, 'access'=>89),
         'ProspectLists'=>array('admin'=>100, 'access'=>89),
         'Leads'=>array('admin'=>100, 'access'=>89),
         'Prospects'=>array('admin'=>100, 'access'=>89),
     ),
     'Customer Support Administrator'=>array(
         'Accounts'=>array('admin'=>100, 'access'=>89),
         'Contacts'=>array('admin'=>100, 'access'=>89),
         'Bugs'=>array('admin'=>100, 'access'=>89),
         'Cases'=>array('admin'=>100, 'access'=>89),
         'KBDocuments'=>array('admin'=>100, 'access'=>89),
        )
);
global $db;
addDefaultRoles($mlaRoles);   
}
?>