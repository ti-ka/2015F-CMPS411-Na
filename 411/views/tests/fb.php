<?php


    namespace App;

    use Framework\Social\FacebookUtils;

    $fb = new FacebookUtils();



   echo
       $fb->status("Hello people")
       ->photo("/Applications/XAMPP/htdocs/photo.jpg")
       ->post();

    /*

    $fb->video("/Applications/XAMPP/htdocs/video.mp4")
        ->videoTitle("Raining Water")
        ->videoDesc("Raining Water video is so beautiful to watch")
        ->post();
    */