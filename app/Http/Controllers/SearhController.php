<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class SearhController extends CustomerController
{
    //
    public function index(Request $request)
    {
        $products = '';
        if($request->searh_category_id == 0)
        {
            $products = Product::where('pro_name','like','%'.$request->searh_key.'%')->get();
        }
        else
        {
            $products = Product::where('pro_name','like','%'.$request->searh_key.'%')->where('pro_category_id',$request->searh_category_id)->get();
        }
        $data = [
            'products' => $products
        ];
        return view('customer.searh.index',$data);
    }
}
