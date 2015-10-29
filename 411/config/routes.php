<?php

$routes = [

    "" => "index@HomeController",

    "tests/{file}" => "tests@HomeController",
    "about" => "about@HomeController",

    "blog" => "index@BlogController",
    "blog/add" => "newBlog@BlogController",
    "blog/{slug}" => "whereSlug@BlogController",
    "blog/{slug}/edit" => "edit@BlogController",
    "blog/{slug}/save" => "save@BlogController",
    "blog/{slug}/delete" => "delete@BlogController",


    "authorize/facebook" => "facebookAuthorization@SocialAuthController",
    "authorize/facebook/response" => "facebookResponse@SocialAuthController",


    "login" => "login@AuthController",
    "forgot" => "forgot@AuthController",
    "register" => "register@AuthController",
    "reset/oauth/{oauth}" => "reset@AuthController",
    "reset" => "newpass@AuthController",
    "logout" => "voidToken@AuthController",


];

define('REGISTER',false);
define('REGISTER_LEVEL',0);