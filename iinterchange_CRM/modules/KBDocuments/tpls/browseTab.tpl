{*
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

/*********************************************************************************
 ********************************************************************************/
*}


			<table width="100%" cellpadding="0" cellspacing="0" border="{$BORDER}" class="edit view search kb">
				<tr>
					<td width="{$TREE_WIDTH}" valign="top" >
						<div id="kb_browse_tags">
						
							{$TREEINSTANCE}
						</div>
					</td>
					<td valign="top"  id='selected_directory_children'>&nbsp;</td>
				</tr>
			</table>
			
{literal}			
	<script>



	//when called, this function will make ajax call to refresh list view sort order
	function sortBrowseList(params,name) {
	
		// if paginating before running a sort, then name will be empty.  Handle this use case
		if(typeof(name) =='undefined' ){
			//we will pass in keyword PAGINATE.  This will identify this call as a pagination call
			name = 'PAGINATE';
		}


		//create data to send across
		postData = 'sortCol='+name+ '&params=' + JSON.stringify(params) + '&module=KBDocuments&action=BrowseListView&to_pdf=1'; 
		//create callback function
		var callback =	{
			//on success, refresh list
			  success: function(o) {    
			    	var targetdiv=document.getElementById('selected_directory_children');
	    			targetdiv.innerHTML=o.responseText;
	    			SUGAR.util.evalScript(o.responseText);
			  },
			  //do nothing on failure
			  failure: function(o) {/*failure handler code*/}
		};
		//make ajax call
		var trobj = YAHOO.util.Connect.asyncRequest('POST','index.php', callback, postData);

	}

	</script>
{/literal}			