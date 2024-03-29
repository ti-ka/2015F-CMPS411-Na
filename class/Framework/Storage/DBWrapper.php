<?php

namespace Framework\Storage;


abstract class DBWrapper
{

    private $table, $select, $update, $delete, $params, $object, $limit, $sort, $results;

    public function select($select = "*"){
        $this->select = $select;
        return $this;
    }

    public function get($select = "*"){
        $this->select($select);/* alias of select */
        return $this;
    }

    public function update($array){
        $this->update = $array;
        return $this;
    }

    public function delete(){
        $this->delete = true;
        return $this;
    }

    public function from($table){
        $this->table = $table;
        return $this;
    }

    public function table($table){ /* alias of from */
        $this->from($table);
        return $this;
    }

    public function where($array){
        $this->params = $array;
        return $this;
    }

    public function limit($int){
        $this->limit = $int;
        return $this;
    }

    public function sort($sort){
        $this->sort = $sort;
        return $this;
    }

    public function asObject($object){
        $this->object = $object;
        return $this;
    }

    public function execute(){

        if($this->select !== null){
            $this->results = DB::getFrom($this->table, $this->params, $this->limit, $this->sort, $this->object, $this->select );
            return $this;
        }

        if($this->update !== null){
            return DB::updateTo($this->table, $this->update, $this->params, $this->limit);
        }

        if($this->delete !== null){
            return DB::deleteFrom($this->table, $this->params, $this->limit);
        }
    }


    /*
    +--------------------------------------------------------------------+
    +                                                                    +
    +   Following methods are helpers for select statements:             +
    +                                                                    +
    +--------------------------------------------------------------------+

    */

    public function first(){
        return current($this->results);
    }

    public function last(){
        return end($this->results);
    }

    public function count(){
        return count($this->results);
    }

    public function getAll(){
        return $this->results;
    }


}