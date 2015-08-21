{*
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

*}

{if !$error}
<script type="text/javascript">
	var css = new Array();
	var chartConfig = new Array();
	{foreach from=$css key=selector item=property}
	css["{$selector}"] = '{$property}';
	{/foreach}
	{foreach from=$config key=name item=value}
	chartConfig["{$name}"] = '{$value}';
	{/foreach}
	{if $height > 480}
	chartConfig["scroll"] = true;
	{/if}
	if (typeof SUGAR == 'undefined' || typeof SUGAR.mySugar == 'undefined') {ldelim}
		// no op
		loadCustomChartForReports();
	{rdelim} else {ldelim}
		SUGAR.mySugar.sugarCharts.addToChartsArray('{$chartId}','{$filename}',css,chartConfig,activePage);
	{rdelim}
	
	function loadCustomChartForReports() {ldelim}

	
		loadSugarChart('{$chartId}','{$filename}',css,chartConfig);
	{rdelim}
</script>

<div class="chartContainer">
	<div id="sb{$chartId}" class="scrollBars">
    <div id="{$chartId}" class="chartCanvas" style="width: {$width}; height: {$height}px;"></div>  
    </div>
	<div id="legend{$chartId}" class="legend"></div>
</div>
<div class="clear"></div>
{else}

{$error}
{/if}