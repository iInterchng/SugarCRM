/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/
function method_callback(request_id,rslt,e){if(rslt==null){return;}
if(typeof(global_request_registry[request_id])!='undefined'){widget=global_request_registry[request_id][0];method_name=global_request_registry[request_id][1];widget[method_name](rslt);}}
SugarClass.inherit("SugarVCalClient","SugarClass");function SugarVCalClient(){this.init();}
SugarVCalClient.prototype.init=function(){}
SugarVCalClient.prototype.load=function(user_id,request_id){this.user_id=user_id;urllib.getURL('./vcal_server.php?type=vfb&source=outlook&user_id='+user_id,[["Content-Type","text/plain"]],function(result){if(typeof GLOBAL_REGISTRY.freebusy=='undefined')
{GLOBAL_REGISTRY.freebusy=new Object();}
if(typeof GLOBAL_REGISTRY.freebusy_adjusted=='undefined')
{GLOBAL_REGISTRY.freebusy_adjusted=new Object();}
GLOBAL_REGISTRY.freebusy[user_id]=SugarVCalClient.parseResults(result.responseText,false);GLOBAL_REGISTRY.freebusy_adjusted[user_id]=SugarVCalClient.parseResults(result.responseText,true);global_request_registry[request_id][0].display();})}
SugarVCalClient.prototype.parseResults=function(textResult,adjusted){var match=/FREEBUSY.*?\:([\w]+)\/([\w]+)/g;var result;var timehash=new Object();var dst_start;var dst_end;if(GLOBAL_REGISTRY.current_user.fields.dst_start==null)
dst_start='19700101T000000Z';else
dst_start=GLOBAL_REGISTRY.current_user.fields.dst_start.replace(/ /gi,'T').replace(/:/gi,'').replace(/-/gi,'')+'Z';if(GLOBAL_REGISTRY.current_user.fields.dst_end==null)
dst_end='19700101T000000Z';else
dst_end=GLOBAL_REGISTRY.current_user.fields.dst_end.replace(/ /gi,'T').replace(/:/gi,'').replace(/-/gi,'')+'Z';gmt_offset_secs=GLOBAL_REGISTRY.current_user.fields.gmt_offset*60;while(((result=match.exec(textResult)))!=null)
{var startdate;var enddate;if(adjusted){startdate=SugarDateTime.parseAdjustedDate(result[1],dst_start,dst_end,gmt_offset_secs);enddate=SugarDateTime.parseAdjustedDate(result[2],dst_start,dst_end,gmt_offset_secs);}
else{startdate=SugarDateTime.parseUTCDate(result[1]);enddate=SugarDateTime.parseUTCDate(result[2]);}
var startmins=startdate.getUTCMinutes();if(startmins>=0&&startmins<15){startdate.setUTCMinutes(0);}
else if(startmins>=15&&startmins<30){startdate.setUTCMinutes(15);}
else if(startmins>=30&&startmins<45){startdate.setUTCMinutes(30);}
else{startdate.setUTCMinutes(45);}
for(var i=0;i<100;i++)
{if(startdate.valueOf()<enddate.valueOf())
{var hash=SugarDateTime.getUTCHash(startdate);if(typeof(timehash[hash])=='undefined')
{timehash[hash]=0;}
timehash[hash]+=1;startdate=new Date(startdate.valueOf()+(15*60*1000));}
else
{break;}}}
return timehash;}
SugarVCalClient.parseResults=SugarVCalClient.prototype.parseResults;SugarRPCClient.allowed_methods=['retrieve','query','save','set_accept_status','get_objects_from_module','email','get_user_array','get_full_list'];SugarClass.inherit("SugarRPCClient","SugarClass");function SugarRPCClient(){this.init();}
SugarRPCClient.prototype.allowed_methods=['retrieve','query','save','set_accept_status','get_objects_from_module','email','get_user_array','get_full_list'];SugarRPCClient.prototype.init=function(){this._serviceProxy;this._showError=function(e){alert("ERROR CONNECTING to: ./index.php?entryPoint=json_server, ERROR:"+e);}
this.serviceURL='./index.php?entryPoint=json_server';this._serviceProxy=new jsonrpc.ServiceProxy(this.serviceURL,this.allowed_methods);}
SugarRPCClient.prototype.call_method=function(method,args){var self=this;try{var the_result;if(arguments.length==3&&arguments[2]==true){the_result=this._serviceProxy[method](args);}else{this._serviceProxy[method](args,method_callback);the_result=this._serviceProxy.httpConn.request_id;}
return the_result;}catch(e){this._showError(e);}}
var global_rpcClient=new SugarRPCClient();