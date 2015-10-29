<?php

namespace Controllers;


use Framework\Cookie;
use Framework\Social\FacebookAuth as FacebookAuth;


class SocialAuthController
{

    public static function facebookAuthorization()
    {
        FacebookAuth::authorize();
    }

    public static function facebookResponse(){

        //Transfer Domain from sub-directory to "/" directory
        $cookie = Cookie::getItem("fb_token");
        Cookie::setItem("fb_token", $cookie);

        if(FacebookAuth::isAuthorized()){
            FacebookAuth::redirectToRedirectURL();
        } else {
            FacebookAuth::collectResponse();
        }
    }

}