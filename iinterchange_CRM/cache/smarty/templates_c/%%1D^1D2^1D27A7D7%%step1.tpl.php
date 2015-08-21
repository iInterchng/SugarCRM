<?php /* Smarty version 2.6.11, created on 2014-05-09 17:24:03
         compiled from modules/Connectors/tpls/step1.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_getjspath', 'modules/Connectors/tpls/step1.tpl', 30, false),array('function', 'counter', 'modules/Connectors/tpls/step1.tpl', 317, false),)), $this); ?>
<script type="text/javascript" src="<?php echo smarty_function_sugar_getjspath(array('file' => 'include/javascript/sugar_grp_yui_widgets.js'), $this);?>
"></script>
<script type="text/javascript" src="<?php echo smarty_function_sugar_getjspath(array('file' => 'modules/Connectors/Connector.js'), $this);?>
"></script>
<script type='text/javascript' src="<?php echo smarty_function_sugar_getjspath(array('file' => 'include/javascript/sugar_grp_overlib.js'), $this);?>
">
<script type="text/javascript" src="<?php echo smarty_function_sugar_getjspath(array('file' => 'modules/Connectors/tpls/modify_mapping.js'), $this);?>
"></script>
<link rel="stylesheet" type="text/css" href="<?php echo smarty_function_sugar_getjspath(array('file' => 'modules/Connectors/tpls/tabs.css'), $this);?>
"/>

<?php echo '

<script language="javascript">
function checkKeyDown(event) {
	e = getEvent(event);
	eL = getEventElement(e);
	if ((kc = e["keyCode"])) {
	    enterPressed = (kc == 13) ? true : false;
        if(enterPressed) {
		   SourceTabs.search();
		   freezeEvent(e);
		}
	}
}

function getEvent(event) {
	return (event ? event : window.event);
}

function getEventElement(e) {
	return (e.srcElement ? e.srcElement: (e.target ? e.target : e.currentTarget));
}

function freezeEvent(e) {
	if (e.preventDefault) e.preventDefault();
	e.returnValue = false;
	e.cancelBubble = true;
	if (e.stopPropagation) e.stopPropagation();
	return false;
}

function get_source_details(source, id, spanId){
		go = function() {
			oReturn = function(body, caption, width, theme) {
						return overlib(body, CAPTION, caption, STICKY, MOUSEOFF, 1000, WIDTH, width, CLOSETEXT, (\'<img border=0 style="margin-left:2px; margin-right: 2px;" align="right" src=themes/default/images/close.gif>\'), CLOSETITLE, \'Click to Close\', CLOSECLICK, FGCLASS, \'olFgClass\', CGCLASS, \'olCgClass\', BGCLASS, \'olBgClass\', TEXTFONTCLASS, \'olFontClass\', CAPTIONFONTCLASS, \'olCapFontClass\', CLOSEFONTCLASS, \'olCloseFontClass\', REF, spanId, REFC, \'LL\', REFX, 13);
					}
			success = function(data) {
						eval(data.responseText);
	
						SUGAR.util.additionalDetailsCache[spanId] = new Array();
						SUGAR.util.additionalDetailsCache[spanId][\'body\'] = result[\'body\'];
						SUGAR.util.additionalDetailsCache[spanId][\'caption\'] = result[\'caption\'];
						SUGAR.util.additionalDetailsCache[spanId][\'width\'] = result[\'width\'];
						SUGAR.util.additionalDetailsCache[spanId][\'theme\'] = result[\'theme\'];
						ajaxStatus.hideStatus();
						return oReturn(SUGAR.util.additionalDetailsCache[spanId][\'body\'], SUGAR.util.additionalDetailsCache[spanId][\'caption\'], SUGAR.util.additionalDetailsCache[spanId][\'width\'], SUGAR.util.additionalDetailsCache[spanId][\'theme\']);
					}
	
					if(typeof SUGAR.util.additionalDetailsCache[spanId] != \'undefined\')
						return oReturn(SUGAR.util.additionalDetailsCache[spanId][\'body\'], SUGAR.util.additionalDetailsCache[spanId][\'caption\'], SUGAR.util.additionalDetailsCache[spanId][\'width\'], SUGAR.util.additionalDetailsCache[spanId][\'theme\']);
	
					if(typeof SUGAR.util.additionalDetailsCalls[spanId] != \'undefined\') // call already in progress
						return;
					ajaxStatus.showStatus(SUGAR.language.get(\'app_strings\', \'LBL_LOADING\'));
					url = \'index.php?module=Connectors&action=RetrieveSourceDetails&source_id=\'+source+\'&record_id=\'+id;
					SUGAR.util.additionalDetailsCalls[spanId] = YAHOO.util.Connect.asyncRequest(\'GET\', url, {success: success, failure: success});
	
					return false;
		}
		SUGAR.util.additionalDetailsRpcCall = window.setTimeout(\'go()\', 250);
	}
function clear_source_details(){
	if(typeof SUGAR.util.additionalDetailsRpcCall == \'number\') window.clearTimeout(SUGAR.util.additionalDetailsRpcCall);
}
</script>

<script language="javascript">
 	var _tabView;
 	var _sourceArray = new Array();
 	var firstSource = \'\';
 	var isDirty = false;
 	var isHidden = false;

 
SourceTab.prototype.sourceId = \'\';
SourceTab.prototype.isEnabled = false;
SourceTab.prototype.isDataLoaded = false;
SourceTab.prototype.searchFormCache = \'\';

function SourceTab(sourceId){
	this.sourceId = sourceId;
}
SourceTab.prototype.hide = function(){
		var div = document.getElementById(\'div_\'+this.sourceId);
        div.style.display = \'none\';
        this.isHidden = true;
	}
SourceTab.prototype.show = function(){
		var div = document.getElementById(\'div_\'+this.sourceId);
        div.style.display = \'block\';
        this.isHidden = false;
	}
SourceTab.prototype.refreshData = function(first_load){
		if(first_load){
			SourceTabs.setSearching(true);
		}
		
		var source = this;  	
		var callback =	{
			success: function(data) {
				source.setData(data.responseText);
			},
			failure: function(data) {
				
			}		  
		}
		
		postData = \'index.php?module=Connectors&action=RetrieveSource&record=';  echo $this->_tpl_vars['RECORD'];  echo '&to_pdf=true&source_id=\'+this.sourceId;
		var cObj = YAHOO.util.Connect.asyncRequest(\'GET\', postData, callback, null);
	}
SourceTab.prototype.setData = function(data){
		var div = document.getElementById(\'div_\'+this.sourceId);
		div.innerHTML = data;
		setTimeout("SourceTabs.setSearching(false)", 2000);
		this.isDataLoaded = true;
	}
SourceTab.prototype.isEmpty = function(){
	var div = document.getElementById(\'div_\'+this.sourceId);
	if(div.innerHTML == \'\'){
		return true;
	}else{
		return false;
	}
}
 
var SourceTabs = {

    init : function() {    
  		//SourceTabs.setSearching(true); 
    },
    
    setSearching : function(searching){
    	var btn_search = document.getElementById(\'btn_search\');
    	if(searching){
    		btn_search.value = '; ?>
"<?php echo $this->_tpl_vars['MOD']['LBL_SEARCHING_BUTTON_LABEL']; ?>
"<?php echo ';;
    	}else{
    		btn_search.value = '; ?>
"      <?php echo $this->_tpl_vars['APP']['LBL_SEARCH_BUTTON_LABEL']; ?>
      "<?php echo ';
    	}
    },
    
    search : function() {        
    	SourceTabs.setSearching(true);
		var formObject = document.getElementById(\'SearchForm\'); 
		if(typeof formObject != \'undefined\') {
	    	url = YAHOO.util.Connect.setForm(\'SearchForm\', false);    	
	    	var cObj = YAHOO.util.Connect.asyncRequest(\'POST\',\'index.php?module=Connectors&action=SetSearch&\' + url,
	         {
	          success: function() {SourceTabs.refreshActiveConnector();}, 
	          failure: function() { }
	         }
	        );
        }
    },
    
    clearForm : function(){
    	var formObject = document.forms[\'SearchForm\']; 
    	for(i=0; i<formObject.elements.length; i++){
			if(formObject.elements[i].type == \'text\'){
				formObject.elements[i].value=\'\';
			}
		}
    }, 
    
    refreshActiveConnector : function(){
    	 try{
	    	for(var i = 0; i <= _sourceArray.length; i++){
	    		var sTab = _sourceArray[i];
		    	if(!sTab.isHidden){
		    		sTab.refreshData();
		    		return;
		    	}
		     }
	     }catch(err){
	     
	     }
    },
    getSourceTab : function(source_id){
    	try{
	    	for(var i = 0; i <= _sourceArray.length; i++){
	    		var sTab = _sourceArray[i];
		    	if(sTab.sourceId == source_id){
		    		return sTab;
		    	}
		     }
	     }catch(err){
	     
	     }
    },
    refreshConnectors : function(){
    	 try{
	    	for(var i = 0; i <= _sourceArray.length; i++){
	    		var sTab = _sourceArray[i];
		    	if(sTab.isDataLoaded){
		    		sTab.refreshData();
		    	}
		     }
	     }catch(err){
	     
	     }
    },
    
    loadTab : function(tab, previousKey) {
        SourceTabs.getSearchForm(tab);
        for (var i = 0; i < _sourceArray.length; i++){
			var sTab = _sourceArray[i];
             if(sTab.sourceId && sTab.sourceId != tab) {
                sTab.hide();
             } else{
				if(isDirty || sTab.isEmpty()){
					SourceTabs.setSearching(true);
	        		sTab.refreshData();
	        	}
	        	sTab.show();
	        }
        }
	     
     },
     
     getSearchForm : function(source_id){
    	var sTab = SourceTabs.getSourceTab(source_id);
    	var searchDiv = document.getElementById(\'div_search_form\');
    	if(sTab.searchFormCache == \'\'){
	    	var callback =	{
				success: function(data) {
					searchDiv.innerHTML = data.responseText;
					sTab.searchFormCache = data.responseText;
				},
				failure: function(data) {
					
				}		  
			}
			postData = \'index.php?module=Connectors&action=GetSearchForm&merge_module=';  echo $this->_tpl_vars['module'];  echo '&record=';  echo $this->_tpl_vars['RECORD'];  echo '&source_id=\'+source_id;
			var cObj = YAHOO.util.Connect.asyncRequest(\'GET\', postData, callback, null);
		} else{
			searchDiv.innerHTML = sTab.searchFormCache;
		}
     }
}
YAHOO.util.Event.onDOMReady(SourceTabs.init);
</script>
'; ?>

<div id='div_search_form'>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/Connectors/tpls/search_form.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</div>
<form name="ConnectorStep1" method="POST">
<input type="hidden" name="action" value="Step2">
<input type="hidden" name="module" value="Connectors">
<input type="hidden" name="record" value="<?php echo $this->_tpl_vars['RECORD']; ?>
">

<table width="100%" cellpadding="0" cellspacing="0" border="0" class="h3Row">
<tr>
<td nowrap><h3><?php echo $this->_tpl_vars['mod']['LBL_RESULT_LIST']; ?>
</h3></td>
<td width='100%'><IMG height='1' width='1' src='include/images/blank.gif' alt=''></td>
</tr>
</table>


<table cellspacing="0" cellpadding="0" border="0" width="100%">
<tr>
	<td>
		<table border='0' cellpadding='0' cellspacing='0' width='100%'>
				<tr>
					<td nowrap>
						
<input title="<?php echo $this->_tpl_vars['mod']['LBL_MERGE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_NEXT_BUTTON_KEY']; ?>
" class="button" type="submit" name="button" value="<?php echo $this->_tpl_vars['mod']['LBL_MERGE']; ?>
"> 
<input title="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_KEY']; ?>
" class="button" onclick="document.ConnectorStep1.action.value='DetailView'; document.ConnectorStep1.module.value='<?php echo $this->_tpl_vars['module']; ?>
';" type="submit" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
"> 
					
					</td>
				</tr>
		</table>	
	</td>
</tr>
<tr>
</table>
<br/>

<?php echo $this->_tpl_vars['TABS']; ?>



<table cellspacing="0" cellpadding="0" border="0" width="100%">
<tr><td>
 <?php echo smarty_function_counter(array('assign' => 'source_count','start' => 0,'print' => 0), $this);?>
 
 <?php $_from = $this->_tpl_vars['SOURCES']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['connectors'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['connectors']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['name'] => $this->_tpl_vars['source']):
        $this->_foreach['connectors']['iteration']++;
?>   
 <?php echo smarty_function_counter(array('assign' => 'source_count'), $this);?>

 	<?php if ($this->_tpl_vars['source_count'] == 1): ?>
	<div id='div_<?php echo $this->_tpl_vars['source']; ?>
' style='display: block'></div>
	<?php else: ?>
	<div id='div_<?php echo $this->_tpl_vars['source']; ?>
' style='display: none'></div>
	<?php endif; ?>
	<script>
		var sourceTab = new SourceTab('<?php echo $this->_tpl_vars['source']; ?>
');
		_sourceArray[<?php echo $this->_tpl_vars['source_count']; ?>
-1] = sourceTab;
		<?php if ($this->_tpl_vars['source_count'] == 1): ?>
			sourceTab.refreshData(true);
		<?php endif; ?>
	</script>
<?php endforeach; endif; unset($_from); ?>
</td></tr>
</table>

<br/>
<table cellspacing="0" cellpadding="0" border="0" width="100%">
<tr>
	<td>
		<table border='0' cellpadding='0' cellspacing='0' width='100%'>
				<tr>
					<td nowrap>
						
<input title="<?php echo $this->_tpl_vars['mod']['LBL_MERGE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_NEXT_BUTTON_KEY']; ?>
" class="button" type="submit" name="button" value="<?php echo $this->_tpl_vars['mod']['LBL_MERGE']; ?>
"> 
<input title="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_KEY']; ?>
" class="button" onclick="document.ConnectorStep1.action.value='DetailView'; document.ConnectorStep1.module.value='<?php echo $this->_tpl_vars['module']; ?>
';" type="submit" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
"> 
					
					</td>
				</tr>
		</table>	
	</td>
</tr>
</table>

</form>