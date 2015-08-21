<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

if(isset($_SESSION['current_db_version']) && isset($_SESSION['target_db_version']) && $_SESSION['current_db_version'] != $_SESSION['target_db_version'])
{
    // check if we are in upgrade. If yes, skip EAPM for now, until the DB is upgraded
    $lotusLiveUrl = '';
    $llNowButton = '';
    return;
}
require_once('include/externalAPI/ExternalAPIFactory.php');
$api = ExternalAPIFactory::loadAPI('LotusLive');
if ( is_object($api) ) {
    $lotusLiveUrl = $api->hostURL;
    $lotusLiveMeetNowLabel = translate('LBL_MEET_NOW_BUTTON','EAPM');
    $llNowButton = '<button onclick=\\\'DCMenu.hostMeeting();\\\'>'.$lotusLiveMeetNowLabel.'</button>';
} else {
    // No meet now button if you don't have an account
    $lotusLiveUrl = '';
    $llNowButton = '';
}

if ( !isset($dynamicDCActions) || !is_array($dynamicDCActions) ) {
    $dynamicDCActions = array();
}

if ( is_object(ExternalAPIFactory::loadAPI('LotusLive',true)) ) {
    $dynamicDCActions['LotusLiveMeetings'] = array(
        'module' => 'Meetings',
        'label' => translate('LBL_VIEW_LOTUS_LIVE_MEETINGS','EAPM'),
        'action'=> "DCMenu.hostMeetingUrl='".$lotusLiveUrl."'; DCMenu.loadView('".translate('LBL_TITLE_LOTUS_LIVE_MEETINGS','EAPM')."','index.php?module=Meetings&action=listbytype&type=LotusLive',undefined,undefined,undefined,'".$llNowButton."');",
        'icon'=> SugarThemeRegistry::current()->getImageURL("icon_LotusMeetings_bar_32.png"),
        );

    $dynamicDCActions['LotusLiveDocuments'] = array(
		'module' => 'Documents',
		'label' => translate('LBL_VIEW_LOTUS_LIVE_DOCUMENTS','EAPM'),
		'action' => 'DCMenu.loadView(\''.translate('LBL_TITLE_LOTUS_LIVE_DOCUMENTS','EAPM').'\',\'index.php?module=Documents&action=extdoc&type=LotusLive\');',
		'icon' => SugarThemeRegistry::current()->getImageURL("icon_LotusDocuments_bar_32.png"),
        );
}