<?php

namespace ViewComponents;

use Framework\MVC\ViewComponent;

class HomePageSlideShowViewComponent extends ViewComponent
{

    public function __construct()
    {

        $articles = db()->select()->from("articles")->where(["category" => "homepage"])
                    ->asObject("App\\Article\\Article")
                    ->execute()
                    ->getAll();

        $this->pass(["articles" => $articles]);

    }


}