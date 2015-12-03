<?php

$routes = [
    "/"=> "Home/index",



    "blog" => "Blog/index",
    "blog/search" => "Blog/search",
    "blog/create" => "Blog/create",
    "blog/save" => "Blog/save",
    "blog/{slug}" => "Blog/slug",
    "blog/{slug}/edit" => "Blog/edit",
    "blog/{slug}/delete" => "Blog/slug",
    "blog/category/{category}" => "Blog/category",
    "blog/archives/{year}/{month}" => "Blog/archives",


    "article/{slug}" => "Article/slug",

    "tests/{file}" => "home/tests",
    "services/{file}" => "home/services",
    "image/{file}" => "Image/render"

];

