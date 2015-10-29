<?php

/*
    +-----------------------------------------------+
    |   This file Creates your table and            +
    |   adds a Super Admin -- DELETE after config   +
    +-----------------------------------------------+

 */


require_once 'init.php';


$pdo = \Framework\DB::getInstance();



$sql1 = "DROP table users";
$sql2 = "CREATE TABLE users (
    username VARCHAR(50) NOT NULL PRIMARY KEY,
    email VARCHAR(50) NOT NULL UNIQUE,
    name VARCHAR(30) NOT NULL,
    password CHAR(60) NOT NULL,
    access INT(1) NOT NULL DEFAULT 0,
    oauth CHAR(40) NULL UNIQUE,
    created_at  TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP NULL ON UPDATE CURRENT_TIMESTAMP
)";


$pass =  password_hash("pass", PASSWORD_BCRYPT, array('cost' => 12));


$sql3 = "INSERT INTO users(name, username, email, password, access)
VALUES ('Super Admin', 'admin' ,'admin@yoursite.com','$pass', 1)";

$i = 1;
while($i <= 3){
    //3 Loops
    try{
        $stmt = "sql" . $i;
        $pdo->exec($$stmt);
        echo $i . ") Action Successful. <br />";
    } catch (Exception $e) {
        echo $i . ") Action Failed. <br />";
        print_r($e);
        echo "<hr />";
    }


    $i++;
}




