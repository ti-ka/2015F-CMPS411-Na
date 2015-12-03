<?php

namespace ViewComponents;

use Framework\MVC\ViewComponent;

class HomePageContactViewComponent extends ViewComponent
{

    public function __construct()
    {

        $this->pass(["social_links" => app()->social_links ]);
    }


}