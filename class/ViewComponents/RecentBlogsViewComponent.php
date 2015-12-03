<?php

namespace ViewComponents;

use App\Blog\BlogApp;
use Framework\MVC\ViewComponent;

class RecentBlogsViewComponent extends ViewComponent
{

    public function __construct()
    {
        $posts = (new BlogApp())->limit(6)->fetch()->getPosts();
        $this->registeredVariables = [ "posts" => $posts ];

    }


}