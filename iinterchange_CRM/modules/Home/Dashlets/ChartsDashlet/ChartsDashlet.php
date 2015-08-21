<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/


require_once('include/Dashlets/Dashlet.php');


class ChartsDashlet extends Dashlet {
    var $width = '400';
    var $height = '480';
    var $report_id;

    /**
     * Constructor 
     * 
     * @global string current language
     * @param guid $id id for the current dashlet (assigned from Home module)
	 * @param report_id $report_id id of the saved report
     * @param array $def options saved for this dashlet
     */
    function ChartsDashlet($id, $report_id, $def) {
    	$this->report_id = $report_id;	
    	
        $this->loadLanguage('ChartsDashlet'); // load the language strings here

        parent::Dashlet($id); // call parent constructor

        $this->searchFields = array();
        $this->isConfigurable = true; // dashlet is configurable
        $this->hasScript = true;  // dashlet has javascript attached to it               
    }

    /**
     * Displays the dashlet
     * 
     * @return string html to display dashlet
     */
    function display() {
    	require_once("modules/Reports/Report.php");
			
	
//		ini_set('display_errors', 'false');
		
		$chartReport = new SavedReport();
		$chartExists = $chartReport->retrieve($this->report_id, false);
		
		if (!is_null($chartExists)){
	        $this->title = $chartReport->name;
				
			$reporter = new Report($chartReport->content);
			$reporter->is_saved_report = true;
			$reporter->saved_report_id = $chartReport->id;
            $reporter->get_total_header_row();
			$reporter->run_chart_queries();
			
			require_once("modules/Reports/templates/templates_chart.php");
	
			ob_start();	
			template_chart($reporter, true, true, $this->id);
			$str = ob_get_contents();	
			ob_end_clean();
			
			$xmlFile = get_cache_file_name($reporter);
			
			$html = parent::display() . "<div align='center'>" . $str . "</div>" . "<br />"; // return parent::display for title and such
	
			$ss = new Sugar_Smarty();
	        $ss->assign('chartName', $this->id);
	        $ss->assign('chartXMLFile', $xmlFile);
	        $script = $ss->fetch('modules/Home/Dashlets/ChartsDashlet/ChartsDashletScript.tpl');
			$json = getJSONobj();
			
	        return parent::display() . "<div align='center'>" . $str . "</div>" . "<br />"; // return parent::display for title and such
		}
    }
    
    /**
     * Displays the javascript for the dashlet
     * 
     * @return string javascript to use with this dashlet
     */
    function displayScript() {
    	require_once("modules/Reports/Report.php");
			
	
		$chartReport = new SavedReport();		
		$chartExists = $chartReport->retrieve($this->report_id, false);
		
		if (!is_null($chartExists)){
	        $this->title = $chartReport->name;
				
			require_once("modules/Reports/templates/templates_chart.php");
			require_once('include/SugarCharts/SugarChartFactory.php');

			$sugarChart = SugarChartFactory::getInstance();
		
		
			$reporter = new Report($chartReport->content);
			$reporter->is_saved_report = true;
			$reporter->saved_report_id = $chartReport->id;
			$xmlFile = get_cache_file_name($reporter);

	        $str = $sugarChart->getDashletScript($this->id,$xmlFile);
	        return $str;
		}
    }
        
    /**
     * Displays the configuration form for the dashlet
     * 
     * @return string html to display form
     */
    function displayOptions() {
    }  

    /**
     * called to filter out $_REQUEST object when the user submits the configure dropdown
     * 
     * @param array $req $_REQUEST
     * @return array filtered options to save
     */  
    function saveOptions($req) {
    }
    
    function setConfigureIcon(){
    	
    	
        if($this->isConfigurable) 
            $additionalTitle = '<td nowrap width="1%" style="padding-right: 0px;"><div class="dashletToolSet"><a href="index.php?module=Reports&record=' . $this->report_id . '&action=ReportCriteriaResults&page=report">'
                               . SugarThemeRegistry::current()->getImage('dashlet-header-edit','title="' . translate('LBL_DASHLET_EDIT', 'Home') . '" alt="' . translate('LBL_DASHLET_EDIT', 'Home') . '"  border="0"  align="absmiddle"').'</a>' 
                               . '';
        else 
            $additionalTitle = '<td nowrap width="1%" style="padding-right: 0px;"><div class="dashletToolSet">';    	
    	
    	return $additionalTitle;
    }    

    function setRefreshIcon(){
    	
    	
    	$additionalTitle = '';
        if($this->isRefreshable)
            $additionalTitle .= '<a href="#" onclick="SUGAR.mySugar.retrieveDashlet(\'' 
                                . $this->id . '\', \'chart\'); return false;"><img border="0" align="absmiddle" title="' . translate('LBL_DASHLET_REFRESH', 'Home') . '" alt="' . translate('LBL_DASHLET_REFRESH', 'Home') . '" src="' 
                                . SugarThemeRegistry::current()->getImageURL('dashlet-header-refresh.png') .'" /></a>';	
        return $additionalTitle;
    }
    
}

?>