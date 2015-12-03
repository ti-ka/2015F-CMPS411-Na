<?php

namespace Framework\Services;


class StringService
{

    private $resource = null;


    public function __construct($stringId, $table , $resource)
    {
        $this->resource
            = db()->select($resource)->from($table)->where(["id" => $stringId])
            ->execute()
            ->first()->$resource;
    }

    public function getResource(){

        return $this->resource;
    }

}