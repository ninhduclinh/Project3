<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;

class AdminTestController extends Controller
{
    //
    public function index()
    {
        //test relationship category and attribute
        // $category = Category::find(11);
        // $ca = $category->Attributes;
        // dd($ca);
        // ------
        // test relation ship attribute_value and product
        // $product = Product::find(5);
        // dd($product->ProductAndAttributeValue);
        // -----
        //Test file function
        // test123456();
        //test get product for category
        $category = Category::find(3);
        dd($category->Product->sortByDesc('id')->take(5));

    }
}
