<?php

namespace App\Utils;


use Framework\Storage\DBObject;

class Testimonial extends DBObject
{


    protected $dbTable = "testimonials";
    protected $dbPrimaryKey = "id";

    public
        $id, $content, $author;


}