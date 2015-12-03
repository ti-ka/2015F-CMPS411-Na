<?php

namespace App\Utils;

use Framework\Services\Image;
use Framework\Storage\DBObject;

abstract class ContentPost extends DBObject
{

    protected $dbTable = "";
    protected $dbPrimaryKey = "id";

    public
        $id,
        $title, $category, $content, $metaContent, $slug, $coverPhoto, $createDate, $updateDate,
        $author;


    public function afterConstruct()
    {
        parent::afterConstruct();
        $this->createDate = new \DateTime($this->createDate);
        $this->updateDate = new \DateTime($this->updateDate);
        $this->coverPhoto = new Image(BASE_DIR ."/" .$this->coverPhoto);
        $this->metaContent = $this->getMetaContent(400);

    }

    public function title($title){
        $this->title = $title;
        return $this;
    }

    public function content($content){
        $this->content = $content;
        return $this;
    }

    public function category($category){
        $this->category = $category;
        return $this;
    }

    public function author($author){
        $this->author = $author;
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

    public function getThumbnail($w = 300, $h = 300){
        return $this->coverPhoto->height($h)->width($w)->src();
    }

    public function url(){
        return "/" . $this->slug;
    }

    public function getMetaContent( $length = 400){
        return substr(strip_tags($this->content) , 0 , $length - 3) . "...";
    }

    public function prepareSlug(){
        $string = strtolower(str_replace(' ', '-', $this->title)); // Replaces all spaces with hyphens.
        $string = preg_replace('/[^a-z0-9\-]/', '', $string); // Removes special chars.
        $string = trim($string,"-");
        $string = substr($string,0,200);
        return $string;
    }





}