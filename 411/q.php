<?php
require_once 'init.php';
use \Framework\Social\FacebookUtils;

    \Framework\Cookie::setItem("redirectURL","http://local.akitech.org/411/q.php");
    FacebookUtils::post("Hi people");

?>


