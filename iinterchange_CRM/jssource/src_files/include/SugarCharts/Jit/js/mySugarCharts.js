/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/




SUGAR.mySugar.sugarCharts = function() {

var activeTab = activePage,
    charts = new Object(),
	windowWidth = 0,
    firstLoad = (SUGAR.isIE) ? true: false;

	return {
		loadSugarCharts: function(activeTab) {
			var chartFound = false;
			for (id in charts[activeTab]){
				if(id != 'undefined'){
					chartFound = true;
				//alert(charts[activeTab][id]['chartType']);
					loadSugarChart(
											 charts[activeTab][id]['chartId'], 
											 charts[activeTab][id]['jsonFilename'],
											 charts[activeTab][id]['css'],
											 charts[activeTab][id]['chartConfig']
											 );
				}
			}
			//clear charts array
			charts = new Object();

		},

		addToChartsArrayJson: function(json,activeTab) {
			for (id in json) {
					if(json[id]['supported'] == "true") {
						SUGAR.mySugar.sugarCharts.addToChartsArray(
												 json[id]['chartId'], 
 												 json[id]['filename'],
												 json[id]['css'],
												 json[id]['chartConfig'],
												 activeTab);
					}
				}
		},
		addToChartsArray: function(chartId,jsonFilename,css,chartConfig,activeTab) {
			
			if (charts[activeTab] == null){
				charts[activeTab] = new Object();
			}
			charts[activeTab][chartId] = new Object();
			charts[activeTab][chartId]['chartId'] = chartId;
			charts[activeTab][chartId]['jsonFilename'] = jsonFilename;	
			charts[activeTab][chartId]['css'] = css;	
			charts[activeTab][chartId]['chartConfig'] = chartConfig;		
	
		},
		refreshPage: function() {
			var newWidth = document.body.offsetWidth;			
			if(newWidth != windowWidth && !firstLoad){
				if(SUGAR.isIE) { 
					SUGAR.mySugar.loading.show();
					document.getElementById('loading_c').style.display = 'inline';
					setTimeout(function() {location.reload();}, 500);
										
				} else {
					SUGAR.mySugar.retrievePage(activePage);	
				}
				
					
				SUGAR.mySugar.sugarCharts.loadSugarCharts(activePage);
						
			}
			firstLoad = false;		
			windowWidth = newWidth;	
			
		},
		refreshGraphs: function() {

			setTimeout("SUGAR.mySugar.sugarCharts.refreshPage()", 1000);	
		} 
		
		
	}
}();

YAHOO.util.Event.addListener(window, 'resize', SUGAR.mySugar.sugarCharts.refreshGraphs);