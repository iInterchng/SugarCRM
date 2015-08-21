{*
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

*}
{capture name=getPhone assign=phone}{sugar_fetch object=$parentFieldArray key=$col}{/capture}

{sugar_phone value=$phone usa_format=$usa_format}