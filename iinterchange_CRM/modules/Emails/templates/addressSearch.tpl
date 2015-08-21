{*
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

*}
<form id="searchForm" method="get" action="#">
    <table id="searchTable" border="0" cellpadding="0" cellspacing="0" width="670">
		<tr id="peopleTableSearchRow">
			<td scope="row" nowrap="NOWRAP">
			     <div id="rollover">
			     {$mod_strings.LBL_SEARCH_FOR}:
			         <a href="#" class="rollover"><img border="0" src="themes/default/images/helpInline.gif">
	                        <div style="position:absolute;top:-2px"><span class="rollover">{$mod_strings.LBL_ADDRESS_BOOK_SEARCH_HELP}</span></div>
	                 </a>
	                          
		      	<input id="input_searchField" name="input_searchField" type="text" value="">
		      	</div>
			    &nbsp;&nbsp; {$mod_strings.LBL_LIST_RELATED_TO}: &nbsp;
			    <select name="person" id="input_searchPerson">
			         {$listOfPersons}
			    </select>
			    &nbsp;
			    <a href="javascript:void(0);">
		           	<img onclick="SUGAR.email2.addressBook.searchContacts();" src="{sugar_getimagepath file='select.gif'}" align="absmiddle" border="0" alt="{$mod_strings.LBL_EMAIL_SELECTOR}">
                </a>
                <a href="javascript:void(0);">
		           	<img onclick="SUGAR.email2.addressBook.clearAddressBookSearch();" src="{sugar_getimagepath file='clear.gif'}" align="absmiddle" border="0" alt="{$mod_strings.LBL_EMAIL_SELECTOR}">
                </a>  
			</td>
        </tr>
        <tr id="peopleTableSearchRow">
            <td scope="row" nowrap="NOWRAP" colspan="2" id="relatedBeanColumn">
		      {$mod_strings.LBL_FILTER_BY_RELATED_BEAN}<span id="relatedBeanInfo"></span>
		   	  <input name="hasRelatedBean" id="hasRelatedBean" type="checkbox"/>
            </td>
            
        </tr>
        <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
        <tr id="peopleTableSearchRow">
            <td id="searchSubmit" scope="row" nowrap="NOWRAP">
                <button onclick="SUGAR.email2.addressBook.insertContactToResultTable(null,'{sugar_translate label='LBL_EMAIL_ADDRESS_BOOK_ADD_TO'}')">
                    {sugar_translate label="LBL_ADD_TO_ADDR" module="Emails"} <b>{sugar_translate label="LBL_EMAIL_ADDRESS_BOOK_ADD_TO"}</b>
                </button>
                <button onclick="SUGAR.email2.addressBook.insertContactToResultTable(null,'{sugar_translate label='LBL_EMAIL_ADDRESS_BOOK_ADD_CC'}')">
                    {sugar_translate label="LBL_ADD_TO_ADDR" module="Emails"} <b>{sugar_translate label="LBL_EMAIL_ADDRESS_BOOK_ADD_CC"}</b>
                </button>
                <button onclick="SUGAR.email2.addressBook.insertContactToResultTable(null,'{sugar_translate label='LBL_EMAIL_ADDRESS_BOOK_ADD_BCC'}')">
                    {sugar_translate label="LBL_ADD_TO_ADDR" module="Emails"} <b>{sugar_translate label="LBL_EMAIL_ADDRESS_BOOK_ADD_BCC"}</b>
                </button>
            </td>
        </tr>
        
    </table>
</form>