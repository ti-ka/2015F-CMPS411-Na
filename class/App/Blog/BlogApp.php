<?php

namespace App\Blog;



class BlogApp
{

    private $posts,
            $limit = null,
            $order = ["createDate" => "DESC"],
            $params = [];


    public function __construct()
    {

    }

    public function fetch(){
        $this->posts = db()
            ->select("*")
            ->from("posts")
            ->limit($this->limit)
            ->sort($this->order)
            ->where($this->params)
            ->asObject("App\\Blog\\Post")
            ->execute()
            ->getAll();
        return $this;
    }

    public function limit($limit){
        $this->limit = $limit;
        return $this;
    }

    public function order($order){
        $this->order = $order;
        return $this;
    }

    public function params($array){
        $this->params = $array;
        return $this;
    }

    public function getPosts(){
        return $this->posts;
    }

}