<?php

namespace App;

class App
{

    private $language = "en";

    public $social_links = [
        "facebook" => "https://www.facebook.com/nasablueberry",
        "twitter" => "https://twitter.com/NASABlueberry1",
        "instagram" => "http://instagram.com/nasablueberry/"
    ];


    public function language($language = null)
    {
        if($language === null){
            return $this->language;  //get
        }
        else {
            $this->language = $language; //set
            return $this;
        }
    }


}