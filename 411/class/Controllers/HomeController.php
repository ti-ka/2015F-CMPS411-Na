<?php

    namespace Controllers;

    use App\Blog\Post;
    use Framework\Route;

    class HomeController{

        public static function index(){
            Route::view("pages.homepage.index");
        }

        public static function about(){
            Route::view("pages.about"); //Loading about page
        }

        public static function tests($file){
            Route::view("tests.".$file,[],false); //test pages without headers
        }



    }