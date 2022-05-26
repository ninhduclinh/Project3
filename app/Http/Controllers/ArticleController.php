<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends CustomerController
{
    //
    public function index()
    {
        $count_article = Article::where('a_status','1')->count();
        $check_link=0;
        if($count_article>7)
        {
            $articles = Article::where('a_status','1')->paginate(3);
            $check_link=1;
        }
        else
        {
            $articles = Article::where('a_status','1')->get();
        }
        
        $data = [
            'articles' => $articles,
            'check_link' => $check_link 
        ];
        return view('customer.article.index',$data);
    }
    public function getDetailArticle($id)
    {
        $articles = Article::where('id','<>',$id)->limit(5)->get();
        $article = Article::find($id);
        $data = [
            'article' => $article,
            'articles' => $articles
        ];
        return view('customer.article.detail',$data);
    }
}
