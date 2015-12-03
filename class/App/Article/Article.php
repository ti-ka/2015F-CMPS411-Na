<?php

namespace App\Article;


use App\Utils\ContentPost;

class Article extends ContentPost
{

    protected $dbTable = "articles";

    public function url(){
        return "article/" . $this->slug;
    }


}