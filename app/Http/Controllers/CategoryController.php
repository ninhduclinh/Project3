<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends CustomerController
{
    public function index($slugname, $id)
    {
        $checklink = 0;
        $checkproduct = Product::where([
            'pro_category_id' =>$id,
            'pro_status'       => 1
        ])->count();
        $category = Category::find($id);
        if($checkproduct>9)
        {
            $checklink = 1;
            $products = Product::where([
                'pro_category_id' =>$id,
                'pro_status'       => 1
            ])->paginate(9);
        }
        else
        {
            $products = Product::where([
                'pro_category_id' =>$id,
                'pro_status'       => 1
            ])->get();
        }
        $data =  [
            'category' => $category,
            'products' => $products,
            'checklink' =>$checklink
        ];
        return view('customer.category.index',$data);
    }
    public function indexOrder($slugname, $id, $order)
    {
        $checklink = 0;
        $checkproduct = Product::where([
            'pro_category_id' =>$id,
            'pro_status'       => 1
        ])->count();
        $category = Category::find($id);
        $products = Product::where([
            'pro_category_id' =>$id,
            'pro_status'       => 1,
        ]);
        switch ($order) {
            case 'd1t':
                $products->where('pro_price','<',1000000);
                break;
            case '1t-10t':
                $products->whereBetween('pro_price',[1000000,10000000]);
                break;
            case '10t-20t':
                $products->whereBetween('pro_price',[10000000,20000000]);
                break;
            case '20t-50t':
                $products->whereBetween('pro_price',[20000000,50000000]);
            break;
            case 't50t':
                $products->where('pro_price','>',50000000);
            break;
            case 'az':
                $products->orderBy('pro_name','ASC');
                break;
            case 'za':
                $products->orderBy('pro_name','DESC');
                break;
            case 'mn':
                $products->orderBy('created_at','DESC');
                break;
            case 'cn':
                $products->orderBy('created_at','ASC');
                break;
            case 'td':
                $products->orderBy('pro_price','ASC');
                break;
            case 'gd':
                $products->orderBy('pro_price','DESC');
                break;
            default:
                dd("Lỗi");
                break;
        }
        if($checkproduct>9)
        {
            $checklink = 1;
            $products =$products->paginate(3);
        }
        else
        {
            $products =$products->get();
        }
        $data =  [
            'category' => $category,
            'products' => $products,
            'checklink' => $checklink
        ];
        return view('customer.category.index',$data);
    }
    public function indexOrderAttribute($slugname, $id, $idatv)
    {
        $checklink = 0;
        $category = Category::find($id);
        $products = Product::where([
            'pro_category_id' =>$id,
            'pro_status'       => 1,
        ])->get();
        $filterattritebuteproduct = array();
        foreach ($products as $product) {
            foreach($product->ProductAndAttributeValue as $atv)
            {
                if($atv->id == $idatv)
                {
                    array_push($filterattritebuteproduct,$product);
                }
            };
        }
        // dd($filterattritebuteproduct);
        // $checkproduct = count($filterattritebuteproduct);
        // if($checkproduct>9)
        // {
        //     $checklink = 1;
        //     $products =$products->paginate(3);
        // }
        // else
        // {
        //     $products =$products->get();
        // }
        $data =  [
            'category' => $category,
            'products' => $filterattritebuteproduct,
            'checklink' => $checklink
        ];
        return view('customer.category.index',$data);
    }
}
