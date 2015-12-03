<?php

namespace App\Blog;



use App\Utils\ContentPost;

class Post extends ContentPost
{

    protected $dbTable = "posts";


    public function url(){
        return "blog/" . $this->slug;
    }

    public function beforeSave()
    {
        parent::beforeSave();
        $this->coverPhoto = "assets/images/sample3.jpg";
        $this->createDate = $this->createDate->format('Y-m-d H:i:s');
        $this->updateDate = $this->updateDate->format('Y-m-d H:i:s');

        if($this->id === null){
            $this->slug($this->prepareSlug());
        }

    }


}