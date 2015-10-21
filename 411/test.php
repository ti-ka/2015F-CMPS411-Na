<?php

    require_once 'init.php';

?>
<pre><?php



    $posts = \Framework\DB::get("posts",null,null,null,"App\\Blog\\Post");


    $posts[0]->slug = "my-first-blog";
    $posts[0]->content = "Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin lite";


    print_r($posts[0]);


    $p = new \App\Blog\Post(2);

    print_r($p);
?></pre>