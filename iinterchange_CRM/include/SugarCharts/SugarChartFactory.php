<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

/*********************************************************************************

* Description: This file generates the appropriate manager for the database
*
* Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
* All Rights Reserved.
* Contributor(s): ______________________________________..
********************************************************************************/


class SugarChartFactory
{
    /**
	 * Returns a reference to the ChartEngine object for instance $chartEngine, or the default
     * instance if one is not specified
     *
     * @param string $chartEngine optional, name of the chart engine from $sugar_config['chartEngine']
     * @param string $module optional, name of module extension for chart engine (see JitReports or SugarFlashReports)
     * @return object ChartEngine instance
     */
	public static function getInstance(
        $chartEngine = '',
        $module = ''
        )
    {
        global $sugar_config;
		$defaultEngine = "Jit";
        //fall back to the default Js Engine if config is not defined
        if(empty($sugar_config['chartEngine'])){
        	$sugar_config['chartEngine'] = $defaultEngine;
        }

        if(empty($chartEngine)){
        	$chartEngine = $sugar_config['chartEngine'];
        }

        $file = "include/SugarCharts/".$chartEngine."/".$chartEngine.$module.".php";

        if(file_exists('custom/' . $file))
        {
          require_once('custom/' . $file);
        } else if(file_exists($file)) {
          require_once($file);
        } else {
          $GLOBALS['log']->debug("using default engine include/SugarCharts/".$defaultEngine."/".$defaultEngine.$module.".php");
          require_once("include/SugarCharts/".$defaultEngine."/".$defaultEngine.$module.".php");
          $chartEngine = $defaultEngine;
        }

        $className = $chartEngine.$module;
        return new $className();

    }

}

?>
