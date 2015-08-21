<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/




require_once('include/Dashlets/DashletGenericChart.php');

class MyForecastingChartDashlet extends DashletGenericChart 
{
    /**
     * @see Dashlet::$isConfigurable
     */
    public $isConfigurable = true;
    
    
    /**
     * @see DashletGenericChart::$_seedName
     */
    protected $_seedName = 'Forecasts';
    
    
    /**
     * @see DashletGenericChart::display()
     */
    public function display() 
    {
        require_once('modules/Forecasts/Charts.php');
        $forecasting_chart = new forecast_charts();
        
        return $this->getTitle('<div align="center"></div>') . 
            '<div align="center">' . 
            $forecasting_chart->forecast_history($GLOBALS['current_user'],TimeDate::getInstance()->nowDb(),'Direct',5,true,$this->id) . '</div>'
			. $this->processAutoRefresh();
    }  

}

?>