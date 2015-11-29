<?php

define("SERVER_INIT" , microtime(true));


if(!isset($_SESSION)){
    session_start();
}

if( ! ini_get('date.timezone') )
{
    date_default_timezone_set('America/Chicago');
}

if(!defined("BASE_DIR")){
    define("BASE_DIR", dirname(__DIR__));

    $parts = explode($_SERVER['DOCUMENT_ROOT'], BASE_DIR);

    if(count($parts) === 2){
        define("BASE_URL_RELATIVE", $parts[1] , "/");

    } else {
        define("BASE_URL_RELATIVE","/");

    }

   // print(BASE_DIR."<br>");

    //print(BASE_URL_RELATIVE."<br>");




    define("BASE_URL", $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['HTTP_HOST']. BASE_URL_RELATIVE);

    //print(BASE_URL."<br>");

}

//Grabbing constants
require_once BASE_DIR . '/config/constants.php';
require_once BASE_DIR . '/config/autoloader.php';
require_once BASE_DIR.'/config/routes.php';
require_once BASE_DIR.'/config/helperFunctions.php';
require_once BASE_DIR.'/config/class_alias.php';
