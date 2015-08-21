<?php
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/




require_once("include/SugarCharts/JsChart.php");

class Jit extends JsChart {
	
	var $supports_image_export = true;
	var $print_html_legend_pdf = true;
	
	function __construct() {
		parent::__construct();
	}
	
	function getChartResources() {
		return '
		<link type="text/css" href="'.getJSPath('include/SugarCharts/Jit/css/base.css').'" rel="stylesheet" />
		<!--[if lt IE 9]>
		<script type="text/javascript" src="'.getJSPath('include/SugarCharts/Jit/FlashCanvas/flashcanvas.js').'"></script>
		<![endif]-->
		<script language="javascript" type="text/javascript" src="'.getJSPath('include/SugarCharts/Jit/js/Jit/jit.js').'"></script>
		<script language="javascript" type="text/javascript" src="'.getJSPath('include/SugarCharts/Jit/js/sugarCharts.js').'"></script>
		';
	}
	
	function getMySugarChartResources() {
		return '
		<script language="javascript" type="text/javascript" src="'.getJSPath('include/SugarCharts/Jit/js/mySugarCharts.js').'"></script>
		';
	}
	

	function display($name, $xmlFile, $width='320', $height='480', $resize=false) {
	
		parent::display($name, $xmlFile, $width, $height, $resize);

		return $this->ss->fetch('include/SugarCharts/Jit/tpls/chart.tpl');	
	}
	

	function getDashletScript($id,$xmlFile="") {
		
		parent::getDashletScript($id,$xmlFile);
		return $this->ss->fetch('include/SugarCharts/Jit/tpls/DashletGenericChartScript.tpl');
	}
	
	

	
}

?>