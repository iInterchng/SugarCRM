<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

/*********************************************************************************

 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

$tracker_config = 
  array (
    'tracker' => 
    array (
      'bean' => 'Tracker',
      'name' => 'Tracker',
      'metadata' => 'modules/Trackers/vardefs.php',
      'store' => 
      array (
        0 => 'DatabaseStore',
      ),
    ),
    'tracker_sessions' => 
    array (
      'bean' => 'TrackerSession',
      'name' => 'tracker_sessions',
      'metadata' => 'metadata/tracker_sessionsMetaData.php',
      'store' => 
      array (
        0 => 'TrackerSessionsDatabaseStore',
      ),
    ),
    'tracker_perf' => 
    array (
      'bean' => 'TrackerPerf',
      'name' => 'tracker_perf',
      'metadata' => 'metadata/tracker_perfMetaData.php',
      'store' => 
      array (
        0 => 'DatabaseStore',
      ),
    ),
    'tracker_queries' => 
    array (
      'bean' => 'TrackerQuery',
      'name' => 'tracker_queries',
      'metadata' => 'metadata/tracker_queriesMetaData.php',
      'store' => 
      array (
        0 => 'TrackerQueriesDatabaseStore',
      ),
    ),
    'tracker_tracker_queries' => 
    array (
      'name' => 'tracker_tracker_queries',
      'metadata' => 'metadata/tracker_tracker_queriesMetaData.php',
      'store' => 
      array (
        0 => 'DatabaseStore',
      ),
    ),
  );
?>