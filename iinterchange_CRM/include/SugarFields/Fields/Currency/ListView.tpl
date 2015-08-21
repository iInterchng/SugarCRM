{*
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

*}
{sugar_fetch object=$parentFieldArray key=$col assign='amount'}
{if stripos(strtoupper($col), '_USD') || empty($currency_id)}
{sugar_currency_format var=$amount}
{else}
{sugar_currency_format var=$amount currency_id=$currency_id}
{/if}
