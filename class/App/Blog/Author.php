<?php

namespace App\Blog;

use App\Base\Person;
use Framework\DB;

class Author extends Person
{

    private $posts = [];


    public function getPostsByAuthor(){
        if($this->posts == null){
            $this->fetchPosts();
        }
        return $this->posts;
    }

    public function fetchPosts(){
        $this->posts =
            DB::get(
                "posts",    //table
                ["author" => $this->userId], //params
                null,
                ["postDate" => "DESC"], //Order or Sort
                "App\\Blog\\Post"       //Return Type
            );

    }

}