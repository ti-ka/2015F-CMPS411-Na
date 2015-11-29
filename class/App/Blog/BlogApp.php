<?php

namespace App\Blog;


use Framework\DB;
use Framework\Storage\File;

class BlogApp
{
    public $posts = []; //Array of Post objects
    public $count = 10;


    public function feed(){
        $this->posts = DB::get("posts",null,$this->count);
        $feed  = [];

        foreach($this->posts as $post){
            $fd = new \stdClass();
            $fd->title = $post->title;
            $fd->image = File::cropImage($post->coverPhoto, 600, 600);
            $fd->link = BASE_URL."blog/".$post->slug;
            $fd->desc = substr(strip_tags($post->content), 0, 300);
            $fd->time = new \DateTime($post->createDate);
            $fd->via = "Blog";
            $feed[] = $fd;
        }


        return $feed;
    }

    public function count($count){
        $this->count = $count;
        return $this;
    }

}