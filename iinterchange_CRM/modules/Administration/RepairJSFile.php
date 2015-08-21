<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

if(is_admin($current_user)){
    global $mod_strings; 

    
    //echo out warning message and msgDiv
    echo '<br>'.$mod_strings['LBL_REPAIR_JS_FILES_PROCESSING'];
    echo'<div id="msgDiv"></div>';        

    //echo out script that will make an ajax call to process the files via callJSRepair.php
     echo "<script>
        var ajxProgress;
        var showMSG = 'true';
        //when called, this function will make ajax call to rebuild/repair js files
        function callJSRepair() {
        
            //begin main function that will be called
            ajaxCall = function(){
                //create success function for callback
                success = function() {              
                    //turn off loading message
                    ajaxStatus.hideStatus();
                    var targetdiv=document.getElementById('msgDiv');
                    targetdiv.innerHTML=SUGAR.language.get('Administration', 'LBL_REPAIR_JS_FILES_DONE_PROCESSING');
                }//end success
        
                        
                        
                //set loading message and create url
                ajaxStatus.showStatus(SUGAR.language.get('app_strings', 'LBL_PROCESSING_REQUEST'));
                postData = \"module=Administration&action=callJSRepair&js_admin_repair=".$_REQUEST['type']."&root_directory=".urlencode(getcwd())."\";
                 
    
                        
                //if this is a call already in progress, then just return               
                    if(typeof ajxProgress != 'undefined'){ 
                        return;                            
                    }
                        
                //make asynchronous call to process js files
                var ajxProgress = YAHOO.util.Connect.asyncRequest('POST','index.php', {success: success, failure: success}, postData);
                        
    
            };//end ajaxCall method
    
                    
            //show loading status and make ajax call
//            ajaxStatus.hideStatus();
//            ajaxStatus.showStatus(SUGAR.language.get('app_strings', 'LBL_PROCESSING_REQUEST'));
            window.setTimeout('ajaxCall()', 2000);
            return;
    
        }
        //call function, so it runs automatically    
        callJSRepair();
        </script>";
        
}




?>