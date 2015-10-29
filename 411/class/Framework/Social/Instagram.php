<?php
/**
 * Created by PhpStorm.
 * User: tika
 * Date: 10/29/15
 * Time: 3:48 AM
 */

namespace Framework\Social;


class Instagram {
    private $result = [];
    public $access_token = INSTAGRAM_TOKEN; // default access token, optional
    public $count = 10;
    public $userId = 1302207764;

    public function fetch($url){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_TIMEOUT, 20);
        $result = curl_exec($ch);
        curl_close($ch);
        return $result;
    }

    function __construct(){
        $result = json_decode($this->fetch("https://api.instagram.com/v1/users/".$this->userId."/media/recent?".
            "count=" .  $this->count .
            "&access_token=" . $this->access_token),
            true);
        $this->cleanUp($result);
    }

    function cleanUp($result){
        foreach($result["data"] as $item){
            $post = new \stdClass();
            $post->link = $item["link"];
            $post->likes = $item["likes"]["count"];
            $post->time = $item["created_time"];
            $post->title = $item["caption"]["text"];
            $post->image = new \stdClass();
            $post->image->lowRes = $item["images"]["low_resolution"]["url"];
            $post->image->thumb = $item["images"]["thumbnail"]["url"];
            $post->image->highRes = $item["images"]["standard_resolution"]["url"];
            $this->result[] = $post;
        }
    }
    public function getPosts(){
        return $this->result;
    }

}
