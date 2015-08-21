{*

/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/



*}


{if $helpFileExists}
	<html>
	<head>
	<title>{$title}</title>
    {$styleSheet}
	<meta http-equiv="Content-Type" content="text/html; charset={$charset}">
	</head>
	<body onLoad='window.focus();'>
	{$helpBar}
	<table class='edit view'>
		<tr>
		<td>{include file="$helpPath"}</td>
		</tr>
	</table>
	{$bookmarkScript}
	</body>
	</html>	
{else}
	<IFRAME frameborder="0" marginwidth="0" marginheight="0" bgcolor="#FFFFFF" SRC="{$iframeURL}"  NAME="SUGARIFRAME" ID="SUGARIFRAME" WIDTH="100%" height="1000"></IFRAME>
{/if}