<?php
namespace Framework\Social;


use Facebook\Facebook;
use Facebook\Exceptions\FacebookResponseException as FacebookResponseException;
use Facebook\Exceptions\FacebookSDKException as FacebookSDKException;
use Framework\Cookie;

class FacebookUtils
{

    private
            $fbInstance,
            $fbAccessToken,
            $data = [],
            $currentMedia; //feed, photos, videos

    public function __construct(){
        $this->fbInstance = FacebookAuth::getFBInstance();
        $this->checkFacebookAuth();
    }

    private function checkFacebookAuth(){
        if(!FacebookAuth::isAuthorized()){
            FacebookAuth::authorize();
        } else {
            $this->fbAccessToken = Cookie::getItem(FacebookAuth::$tokenName);
        }
    }

    public function status($status){
        $this->data['message'] = $status;
        $this->currentMedia = "feed";
        return $this;
    }

    public function link($link){
        $this->data['link'] = $link;
        $this->currentMedia = "feed";
        return $this;
    }

    public function photo($path){
        $this->data['source'] = $this->fbInstance->fileToUpload($path);
        $this->currentMedia = "photos";
        return $this;
    }

    public function video($path){
        $this->data['source'] = $this->fbInstance->videoToUpload($path);
        $this->currentMedia = "videos";
        return $this;
    }

    public function videoTitle($title){
        $this->data['title'] = $title;
        $this->currentMedia = "videos";
        return $this;
    }

    public function videoDesc($description){
        $this->data['description'] = $description;
        $this->currentMedia = "videos";
        return $this;
    }

    public function post(){
        try {
            // Returns a `Facebook\FacebookResponse` object
            $response = $this->fbInstance->post('/me/' . $this->currentMedia, $this->data, $this->fbAccessToken);
            $graphNode = $response->getGraphNode();
            return isset($graphNode['id']);
        } catch(FacebookResponseException $e) {
            die('Graph returned an error: ' . $e->getMessage());
        } catch(FacebookSDKException $e) {
            die('Facebook SDK returned an error: ' . $e->getMessage());
        }

    }


}