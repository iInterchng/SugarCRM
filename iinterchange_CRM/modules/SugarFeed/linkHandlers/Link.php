<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/


class FeedLinkHandlerLink {
    function getDisplay(&$data) {
        return '<div style="padding-left:10px"><a href="' . $data['LINK_URL'] . '" target="_blank">' .$data['LINK_URL'] .'</a></div>';
    }

    function handleInput($feed, $link_type, $link_url) {
        $feed->link_type = $link_type;

        // 
        if ( $link_url{0} != '.' || $link_url{0} != '/' ) {
            // Automatically add http:// in front of the link_url if it doesn't already have it
            if ( strncmp($link_url,'http://',7) != 0 && strncmp($link_url,'https://',8) != 0 ) {
                $link_url = 'http://'.$link_url;
            }
        }
        // Make sure they aren't trying to do something nasty like break out of a quote or something
        $link_url = str_replace(array('<','>','"',"'"),array('&lt;','&gt;','&quot;','&apos;'),$link_url);

        $feed->link_url = $link_url;	
    }
}