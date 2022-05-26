<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Rating;
use Illuminate\Http\Request;

class ProductController extends CustomerController
{
    public function index($nameslug,$id)
    {
        $product = Product::find($id);
        $ratings = Rating::where('ra_product_id',$id)->orderBy('id','DESC')->get();
        // get number rating *
        $fivestar = Rating::where('ra_product_id',$id)->where('ra_number',5)->count();
        $forstar = Rating::where('ra_product_id',$id)->where('ra_number',4)->count();
        $threestar = Rating::where('ra_product_id',$id)->where('ra_number',3)->count();
        $twostar = Rating::where('ra_product_id',$id)->where('ra_number',2)->count();
        $onestar = Rating::where('ra_product_id',$id)->where('ra_number',1)->count();
        // push array for transmission
        $eachstar =[
            1 => $onestar,
            2 => $twostar,
            3 => $threestar,
            4 => $forstar,
            5 => $fivestar
        ];
        $data = [
            'product' => $product,
            'ratings' => $ratings,
            'eachstar' => $eachstar
        ];
        return view('customer.product.index',$data);
    }
}
