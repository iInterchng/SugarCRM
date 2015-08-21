<?php
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

$dictionary['SugarFeed'] = array(
	'table'=>'sugarfeed',
	'audited'=>false,
	'fields'=>array (
	 'name' => 
  array (
    'name' => 'name',
    'type' => 'name',
    'dbType' => 'varchar',
    'vname' => 'LBL_NAME',
    'len' => 255,
    'comment' => 'Name of the feed',
    'unified_search' => true,
    'audited' => true,
    'merge_filter' => 'selected',  //field will be enabled for merge and will be a part of the default search criteria..other valid values for this property are enabled and disabled, default value is disabled.
                            //property value is case insensitive.
  ),
   'description' => 
  array (
    'name' => 'description',
    'type' => 'name',
    'dbType' => 'varchar',
    'vname' => 'LBL_NAME',
    'len' => 255,
    'comment' => 'Name of the feed',
    'unified_search' => true,
    'audited' => true,
    'merge_filter' => 'selected',  //field will be enabled for merge and will be a part of the default search criteria..other valid values for this property are enabled and disabled, default value is disabled.
                            //property value is case insensitive.
  ),
  
    'related_module' => 
  array (
    'name' => 'related_module',
    'type' => 'varchar',
    'vname' => 'LBL_NAME',
    'len' => 100,
    'comment' => 'related module',
    'unified_search' => true,
    'audited' => false,
    'merge_filter' => 'selected',  //field will be enabled for merge and will be a part of the default search criteria..other valid values for this property are enabled and disabled, default value is disabled.
                            //property value is case insensitive.
  ),
   'related_id' => 
  array (
    'name' => 'related_id',
    'type' => 'id',
    'vname' => 'LBL_NAME',
    'len' => 36,
    'comment' => 'related module',
    'unified_search' => true,
    'audited' => false,
    'merge_filter' => 'selected',  //field will be enabled for merge and will be a part of the default search criteria..other valid values for this property are enabled and disabled, default value is disabled.
                            //property value is case insensitive.
  ),
  	 'link_url' => 
  array (
    'name' => 'link_url',
    'type' => 'varchar',
    'vname' => 'LBL_NAME',
    'len' => 255,
    'comment' => 'Name of the feed',
    'unified_search' => true,
    'audited' => false,
    'merge_filter' => 'selected',  //field will be enabled for merge and will be a part of the default search criteria..other valid values for this property are enabled and disabled, default value is disabled.
                            //property value is case insensitive.
  ),
   	 'link_type' => 
  array (
    'name' => 'link_type',
    'type' => 'varchar',
    'vname' => 'LBL_NAME',
    'len' => 30,
    'comment' => 'Name of the feed',
    'unified_search' => true,
    'audited' => false,
    'merge_filter' => 'selected',  //field will be enabled for merge and will be a part of the default search criteria..other valid values for this property are enabled and disabled, default value is disabled.
                            //property value is case insensitive.
  ),
	 
),
	'relationships'=>array (
    ),

    'indices' => array (
        array('name' => 'sgrfeed_date', 
              'type'=>'index',
              'fields'=>array('date_entered',
                              'deleted',
                  )),
    ),

	'optimistic_lock'=>true,
);

VardefManager::createVardef('SugarFeed','SugarFeed', array('basic',
'team_security',
'assignable'));