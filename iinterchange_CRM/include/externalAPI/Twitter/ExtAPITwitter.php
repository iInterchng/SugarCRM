<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

require_once('include/externalAPI/Base/OAuthPluginBase.php');
require_once('include/externalAPI/Base/WebFeed.php');


class ExtAPITwitter extends OAuthPluginBase implements WebFeed {
    public $authMethod = 'oauth';
    public $useAuth = true;
    public $requireAuth = true;
    protected $authData;
    public $needsUrl = false;
    public $supportedModules = array('SugarFeed');
    public $connector = "ext_rest_twitter";

	protected $oauthReq = "https://api.twitter.com/oauth/request_token";
    protected $oauthAuth = 'https://api.twitter.com/oauth/authorize';
    protected $oauthAccess = 'https://api.twitter.com/oauth/access_token';
    protected $oauthParams = array(
    	'signatureMethod' => 'HMAC-SHA1',
    );

	public function getLatestUpdates($maxTime, $maxEntries)
    {
        $td = $GLOBALS['timedate'];

        $twitter_json_url = 'http://api.twitter.com/1/statuses/friends_timeline.json';
        $reply = $this->makeRequest('GET', $twitter_json_url,array('count'=>$maxEntries));

        if ( !$reply['success'] ) {
            $GLOBALS['log']->error('Twitter failed, reply said: '.print_r($reply,true));
            return $reply;
        }
        //$GLOBALS['log']->fatal('IKEA: Twitter worked, reply said: '.print_r($reply,true));

        $messages = array();
        foreach ( $reply['responseJSON'] as $message ) {
            if ( empty($message['text']) ) {
                continue;
            }
            $unix_time = strtotime($message['created_at']);

            $fake_record = array();
            $fake_record['sort_key'] = $unix_time;
            $fake_record['ID'] = create_guid();
            $fake_record['DATE_ENTERED'] = $td->to_display_date_time(gmdate('Y-m-d H:i:s',$unix_time));
            $fake_record['NAME'] = $message['user']['name'].'</b>';
            if ( !empty($message['text']) ) 
            {
            	$message['text'] = SugarFeed::parseMessage($message['text']); 
            	$fake_record['NAME'] .= ' '.preg_replace('/\@(\w+)/', "<a target='_blank' href='http://twitter.com/\$1'>@\$1</a>", $message['text']);
            }
            $fake_record['NAME'] .= '<br><div class="byLineBox"><span class="byLineLeft">'.SugarFeed::getTimeLapse($fake_record['DATE_ENTERED']).'&nbsp;</span><div class="byLineRight">&nbsp;</div></div>';
            $fake_record['IMAGE_URL'] = $message['user']['profile_image_url'];

            $messages[] = $fake_record;
        }


        return array('success'=>TRUE,'messages'=>$messages);
    }



    // Internal functions
    protected function makeRequest($requestMethod, $url, $urlParams = null, $postData = null )
    {
        $headers = array(
            "User-Agent: SugarCRM",
            "Content-Type: application/x-www-form-urlencoded",
            "Content-Length: ".strlen($postData),
            );

        $oauth = $this->getOauth();

        $rawResponse = $oauth->fetch($url, $urlParams, $requestMethod, $headers);

        if ( empty($rawResponse) ) {
            return array('success'=>FALSE,'errorMessage'=>translate('LBL_ERR_TWITTER', 'EAPM'));
        }
        $response = json_decode($rawResponse,true);
        if ( empty($response) ) {
            return array('success'=>FALSE,'errorMessage'=>translate('LBL_ERR_TWITTER', 'EAPM'));
        }

        if ( isset($response['error']) ) {
            return array('success'=>FALSE,'errorMessage'=>$response['error']);
        }

        return array('success'=>TRUE, 'responseJSON'=>$response);
    }
}