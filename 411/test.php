<?php

use \Framework\Cookie,
    \Framework\Redirect;

require_once 'init.php';

$fb = new Facebook\Facebook([
    'app_id' => FACEBOOK_APP_ID,
    'app_secret' => FACEBOOK_APP_SECRET,
    'default_graph_version' => 'v2.2',
]);

$helper = $fb->getRedirectLoginHelper();

authorise();

function getLoginURL(){
    global $fb;
    $redirect = BASE_URL."test2.php";
    $helper = $fb->getRedirectLoginHelper();
    $permissions = ['email', 'user_likes', 'public_profile','user_posts','publish_actions'];
    return $loginUrl = $helper->getLoginUrl($redirect, $permissions);
}

function authorise(){
    if(Cookie::isItemSet("fb_token")){
        Redirect::to(Cookie::getItem("redirectURL"));
    } else {
        Redirect::to(getLoginURL());
    }
}

?>


