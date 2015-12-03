<?php


namespace Controllers;


use App\Blog\BlogApp;
use App\Blog\Post;
use Framework\MVC\Controller;
use Framework\MVC\Redirect;

class BlogController extends Controller
{

    public function index(){
        $posts = (new BlogApp())->limit(6)->fetch()->getPosts();
        return view("blog.index")
                ->pass(["posts" => $posts])
                ->title("Blog");
    }

    public function slug($slug){
        $post = new Post();

        if($post->find(["slug" => $slug])){
            return view("blog.post")
                ->pass(["post" => $post])
                ->title($post->title)
                ->meta($post->metaContent)
                ->author($post->author);
        } else {
            Redirect::trigger(404);
        }

    }

    public function archives($year, $month){

        $month = ($month < 9) ?  "0" . ( (int) $month) : $month;
        $beginsWith = $year . "-" . $month;

        $posts = (new BlogApp())->params(["createDate", "LIKE" , $beginsWith ."%" ])->fetch()->getPosts();

        return view("blog.index")
            ->pass(["posts" => $posts])
            ->title("Blog");
    }

    public function search(){
        $query = $_GET["q"];
        $posts = (new BlogApp())->params(["title", "LIKE" , "%" . $query ."%" ])->fetch()->getPosts();

        return view("blog.index")
            ->pass(["posts" => $posts])
            ->title("Blog");
    }

    public function create(){
        return view("blog/create")->title("Create a blog");
    }

    public function save(){
        $data = (object) $_POST;

        $post = new Post();
        $post->title($data->blog_title)
            ->category($data->blog_category)
            ->author($data->blog_author)
            ->content($data->blog_content)->save();

        return $this->slug(["slug" => $post->slug ]);


    }

    public function edit($slug){
        $post = new Post();
        if($post->find(["slug" => $slug])){
            return view("blog/edit")->title("Edit a blog")->pass(["post" => $post]);
        } else {
            Redirect::trigger(404);
        }

    }

}