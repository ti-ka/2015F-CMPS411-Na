<?php

use Framework\Social\Instagram;



$ig = new Instagram();

foreach($ig->getPosts() as $post){

    echo "<h3>" . $post->title ."</h3>";
    echo "<img src='".$post->image->thumb."'>";
}