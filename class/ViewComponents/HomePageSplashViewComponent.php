<?php

namespace ViewComponents;

use Framework\MVC\ViewComponent;

class HomePageSplashViewComponent extends ViewComponent
{

    public function __construct()
    {
        $this->registeredVariables = ["name" => "John"];
    }


}