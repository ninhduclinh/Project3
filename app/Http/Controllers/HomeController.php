<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\Product;
use App\Models\Slide;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends CustomerController
{
    public function index()
    {
        $slides = Slide::all();
        $categories = Category::where('c_status','1')->get();
        $product_news = Product::where('pro_status',1)->orderBy('created_at','DESC')->limit(4)->get();
        $articles = Article::where('a_status','1')->orderBy('created_at','DESC')->take(3)->get();
        // $hotproducts = Product::where([
        //     'pro_status' => '1',
        //     'pro_hot' => '1'
        // ])->orderBy('id','DESC')->limit(4)->get();
        $product_best_pay = Product::where('pro_status',1)->orderBy('pro_pay','DESC')->limit(5)->get();
        $data= [
            'categories' => $categories,
            'product_news' => $product_news,
            'articles' => $articles,
            'product_best_pays' => $product_best_pay,
            'slides' => $slides
        ];
        return view('customer.index',$data);
    }
    public function aboutUs()
    {
        return view('customer.aboutus');
    }
    public function contact()
    {
        return view('customer.contact');
    }
}
