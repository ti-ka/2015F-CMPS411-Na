<?php

namespace Controllers;


use App\Blog\Post;
use Framework\DB;
use Framework\Redirect;
use Framework\Route;

class BlogController
{

    public static function index(){

        $blogs = DB::get("posts", null, null, ["createDate" => "ASC"], "App\\Blog\\Post");

        Route::view("pages.blog.index",
            ["blogs" => $blogs]);
    }

    public static function whereSlug($slug){

        $blog = new Post();
        $blog->getFromSlug($slug);

        if($blog->postId == null){
            Redirect::trigger(404);
        } else {
            Route::view("pages.blog.single", ["blog" => $blog]);
        }



    }

    public static function edit($slug){

        RequireAuth(1);

        $blog = new Post();
        $blog->getFromSlug($slug);

        if($blog->postId == null){
            Redirect::trigger(404);
        } else {
            Route::view("pages.blog.edit", ["blog" => $blog]);
        }


    }

    public static function save($slug){

        $blog = new Post();
        $blog->getFromSlug($slug);

        $blog->title = $_POST["title"];
        $blog->content = $_POST["content"];
        $blog->save();

        Redirect::to("blog/" . $blog->slug);

    }

    public static function delete($slug){

        RequireAuth(3);
        $blog = new Post();

        $blog->deletePost($slug);

        Redirect::to("blog");


    }

}