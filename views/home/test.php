<?php


use App\Blog\BlogApp;
use App\Blog\Post;

$post = new BlogApp();
$post->fetch();


echo "<pre>";
print_r($post);
echo "</pre>";