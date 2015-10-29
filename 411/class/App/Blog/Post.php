<?php

namespace App\Blog;


use Framework\DB;

class Post
{

    public
        $postId,
        $title, $content, $metaContent, $slug, $createDate, $updateDate,
        $author;

    public function __construct($postId = null){
        if($postId != null){
            $posts = DB::get("posts",["postId" => $postId],null,null,"App\\Blog\\Post");
            if(count($posts) === 1){
                $post = $posts[0];
                $this->postId = $post->postId;
                $this->title = $post->title;
                $this->content = $post->content;
                $this->metaContent = $post->metaContent;
                $this->slug = $post->slug;
                $this->createDate = $post->createDate;
                $this->updateDate = $post->updateDate;
                unset($posts);
            }
        }

        $this->metaContent = $this->makeMetaContent();
    }

    public function getFromSlug($slug){

        $posts = DB::get("posts",["slug" => $slug],1,null,"App\\Blog\\Post");

        if(count($posts) === 1){
            $post = $posts[0];
            $this->postId = $post->postId;
            $this->title = $post->title;
            $this->content = $post->content;
            $this->metaContent = $post->metaContent;
            $this->slug = $post->slug;
            $this->createDate = $post->createDate;
            $this->updateDate = $post->updateDate;
            unset($posts);
        }


        return $this;
    }

    public function getDate(){
        $dt = new \DateTime($this->createDate);
        return $dt->format("M d, Y @ h:ia");
    }

    public function save(){
        $postData = [
            "title" => $this->title,
            "slug" => $this->slug,
            "content" => $this->content,
            //more
        ];


        if($this->postId == null){
            $success = $this->addNewPost($postData);
            $this->postId = DB::lastInsertedId();
            return $success;
        } else {
            return $this->updatePost($postData);
        }

    }

    public function deletePost($slug){
        return DB::delete("posts",["slug" => $slug]);
    }

    private function addNewPost($postData){

        if(DB::insert("posts",$postData)){
            return true;
        } else {
            return false;
        }
    }

    private function updatePost($postData){
        $params = ["postId" => $this->postId];

        if(DB::update("posts",$postData, $params)){
            return true;
        } else {
            return false;
        }

    }

    public function makeMetaContent(){
        return str_replace(" ","-",$this->content);
    }

}