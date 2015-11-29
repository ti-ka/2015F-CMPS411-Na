<?php

namespace App\Base;


use Framework\DB;

class Person
{
    public
        $userId, $email,
        $firstName, $lastName,
        $dateOfBirth;

    public function update(){
        $update = [
            "firstName" => $this->firstName
        ];

        $params = ["userId" => 6];

        if(DB::update("person",$update,$params)){

        }
    }

    public function delete(){
        $params = ["userId" => $this->userId];

        if(DB::delete("person",$params)){

        }
    }

}
