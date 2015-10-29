<?php

//Defining the Base Directory of the APP

if(!isset($_SESSION)){
    session_start();
}

define("BASE_DIR", __DIR__);
define("BASE_URL_RELATIVE", explode($_SERVER['DOCUMENT_ROOT'],__DIR__)[1].'/');
define("BASE_URL", $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['HTTP_HOST'].''.BASE_URL_RELATIVE);

//Grabbing constants
require_once BASE_DIR.'/config/constants.php';

function autoloader($class) {

    $file = BASE_DIR . DIRECTORY_SEPARATOR.  "class" . DIRECTORY_SEPARATOR . $class . ".php";

    $file = str_replace("/" , DIRECTORY_SEPARATOR, $file);
    $file = str_replace("\\" , DIRECTORY_SEPARATOR, $file);

    if(file_exists($file)){
        require_once $file;
    } else {
        die("Class " . $class . " not found as " . $file);
    }

}

spl_autoload_register('autoloader');


function RequireAuth($level = 1){
    $redirect = \Controllers\AuthController::currentURL();

    \Controllers\AuthController::authenticate($level, $redirect);
}

function LogOut(){
    $redirect = "/411";
    \Controllers\AuthController::voidToken($redirect);
}

