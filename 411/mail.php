<?php


require_once 'init.php';

use Framework\Mail;

$mail = new Mail();

$send = $mail
    ->to("tika.pahadi@selu.edu")
    ->from("")
    ->subject("")
    ->message(time());

var_dump($send);