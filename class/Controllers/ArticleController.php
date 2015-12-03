<?php


namespace Controllers;



use App\Article\Article;
use Framework\MVC\Controller;
use Framework\MVC\Redirect;

class ArticleController extends Controller
{

    public function slug($slug){

        $article = new Article();

        if($article->find(["slug" => $slug])){

            return view("article.item")
                    ->pass(["article" => $article])
                        ->title($article->title)
                            ->meta($article->metaContent)
                                ->author($article->author);


        } else {
            Redirect::trigger(404);
            return null;
        }

    }

}