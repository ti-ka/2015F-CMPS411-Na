<?php

    namespace Controllers;

    use App\Blog\Post;
    use Framework\Route;

    class HomeController{

        public static function index(){
            echo "Hi there, we go it up and running!";
            echo "<br />Try these: ";
            echo "<br /><a href='about'>About Page</a>";
            echo "<br /><a href='blog/23'>Blog #23</a>";
        }

        public static function about(){
            Route::view("pages.about"); //Loading about page
        }

        public static function blog($slug){

            $blog = new Post();
            $blog->getFromSlug($slug);


            Route::view("pages.blog", ["blog" => $blog]); //Loading about page

        }


    }