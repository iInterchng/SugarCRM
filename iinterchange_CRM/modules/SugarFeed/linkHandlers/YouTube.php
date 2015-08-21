<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

require_once('modules/SugarFeed/linkHandlers/Link.php');

class FeedLinkHandlerYoutube extends FeedLinkHandlerLink {
    function getDisplay(&$data) {
        return '<div style="padding-left:10px"><object width="425" height="344"><param name="movie" value="http://www.youtube.com/v/' . $data['LINK_URL'] . '&hl=en&fs=1"></param><param name="allowFullScreen" value="true"></param><param name="wmode" value="opaque" /><embed src="http://www.youtube.com/v/' . $data['LINK_URL'] . '&hl=en&fs=1" type="application/x-shockwave-flash" allowfullscreen="false" wmode="opaque" width="425" height="344"></embed></object></div>';
    }
    
    function handleInput($feed, $link_type, $link_url) {
        $match = array();
        preg_match('/v=([^\&]+)/', $link_url, $match);
		
        if(!empty($match[1])){
            $feed->link_type = $link_type;
            $feed->link_url = $match[1];
        }
    }
}