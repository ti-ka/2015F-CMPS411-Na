<?php

namespace App\Blog;


use Framework\DB;
use Framework\Social\FacebookUtils;
use Framework\Storage\File;

class Post
{

    public static $imageUploadDir = "assets/uploads/blogs";
    public
        $postId,
        $title, $content, $metaContent, $slug, $coverPhoto, $createDate, $updateDate,
        $author;

    public function title($title){
        $this->title = $title;
        return $this;
    }
    public function content($content){
        $this->content = $content;
        return $this;
    }
    public function metaContent($metaContent){
        $this->content = $metaContent;
        return $this;
    }
    public function slug($slug){
        $this->slug = $slug;
        return $this;
    }

    public function __construct($postId = null){
        if($postId != null){
            $posts = DB::get("posts",["postId" => $postId],null,null,"App\\Blog\\Post");
            if(count($posts) === 1){
                $post = $posts[0];
                $this->postId = $post->postId;
                $this->title = $post->title;
                $this->content = $post->content;
                $this->metaContent = $post->metaContent;
                $this->coverPhoto = $post->coverPhoto;
                $this->slug = $post->slug;
                $this->createDate = $post->createDate;
                $this->updateDate = $post->updateDate;
                unset($posts);
            }
        }

        $this->metaContent = $this->content;
    }

    public function getFromSlug($slug){

        $posts = DB::get("posts",["slug" => $slug],1,null,"App\\Blog\\Post");

        if(count($posts) === 1){
            $post = $posts[0];
            $this->postId = $post->postId;
            $this->title = $post->title;
            $this->content = $post->content;
            $this->coverPhoto = $post->coverPhoto;
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

        if($this->slug == null){
            $this->slug = $this->makeSlug();
        }

        $postData = [
            "title" => $this->title,
            "slug" => $this->slug,
            "content" => $this->content,
        ];

        if(File::isFileUploaded()){
            $uploads = File::uploadFiles(self::$imageUploadDir);

            if(count($uploads)){
                $postData["coverPhoto"] = $uploads[0];
            }
        }

        if($this->postId == null){
            /*
            while(DB::exists("posts",["slug" => $this->slug])){
                $this->slug = $this->slug . rand(0,100);
            }
            */
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

            $fb = new FacebookUtils();

            $fb->status($this->title)
                ->link(BASE_URL."blog/".$this->slug)
                ->post();
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

    public function makeSlug(){
        $slug = strtolower($this->title);
        $slug = str_replace(" ","-",$slug);
        $slug = preg_replace("/[^a-z0-9-]+/", "", $slug);
        $slug = ltrim($slug,"-");
        $slug = rtrim($slug,"-");
        return $slug;
    }

}