<?php

namespace ViewComponents;

use Framework\MVC\ViewComponent;

class NavigationBarViewComponent extends ViewComponent
{

    public function __construct()
    {

        if($this->uri() == BASE_URL_RELATIVE){
            //Homepage hash tags
            $tabs = [
                "Home" => "#home",
                "About" => "#about",
                "Blog" => "#blog",
                "Tour" => "tour",
                "Gallery" => "#gallery",
                "Contact" => "#contact"
            ];
        } else {
            $tabs = [
                "Home" => "",
                "About" => "about",
                "Blog" => "blog",
                "Tour" => "tour",
                "Gallery" => "gallery",
                "Contact" => "contact"
            ];
        }

        $this->registeredVariables["tabs"] = $tabs;

    }

    public function uri(){
        return rtrim($_SERVER['REQUEST_URI'],"/");
    }

}