/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/



function toggleOfflineClientInstallation(){
   var theForm = document.forms[0];

   if(!theForm.oc_install.checked ){
      theForm.oc_server_url.disabled = "disabled";
      theForm.oc_username.disabled = "disabled";
      theForm.oc_password.disabled = "disabled";
   }
   else {
      theForm.oc_server_url.disabled = '';
      theForm.oc_username.disabled = '';
      theForm.oc_password.disabled = '';
   }
}
