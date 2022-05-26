<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ShoppingCartController extends CustomerController
{
    public function index()
    {
        $products = \Cart::content();
        $data = [
            'products' => $products
        ];
        return view('customer.shoppingCart.index',$data);
    }
    //
    public function addProduct(Request $request,$id)
    {
        if($request->ajax())
        {
            // find product
            $product = Product::find($id);
            //find product in cart for get number product in cart how many
            $product_in_cart = \Cart::content()->where('id', $id);
            // check product in cart exist and create variable test + 1 product to qty
            if($product_in_cart->first())
            {
                $then_number_product_in_cart = $product_in_cart->first()->qty +1;
                // check if test variable qty not ennough number product return false
                if($then_number_product_in_cart > $product->pro_number)
                    return response()->json([
                        'status' => 2,
                        'product_less' => $product->pro_number
                    ]);
            }
            // check product exist
            if(!$product)
                return  response()->json([
                    'status' => 3
                ]);
            // get price when customer add product to cart
            $price = $product->pro_price;
            if($product->pro_sale){
                $price = $price*(100-$product->pro_sale)/100;
            }
            if($product->pro_number==0)
                return  response()->json([
                    'status' => 4
            ]);
            // add product to cart
            \Cart::add(
                    [
                        'id'=>$id,
                        'name' => $product->pro_name,
                        'qty' =>1,
                        'weight' => 0,
                        'price' => $price,
                        'options' => [
                            'image' => $product->pro_image,
                            'price_old' => $product->pro_price,
                            'sale'=> $product->pro_sale
                        ]
                    ]
                );
            return response()->json([
                'status' => 1,
                'number_product_in_cart' => \Cart::count(),
                'price_total_cart' => \Cart::subtotal(0,',','.')
        ]);
        }
    }
    public function editProductItem(Request $request)
    {
        $pro_id = $request->pro_id;
        $number_product_edit = $request->number_product_edit;
        // get cart
        $cart = \Cart::content();
        //get number product in stock
        $number_product_in_stock = Product::find($pro_id)->pro_number;
        $product_in_stock_name = Product::find($pro_id)->pro_name;
        //get number product in cart
        $number_product_in_cart = $cart->where('id', $pro_id)->first()->qty;
        //check number product edit bigger number product in stock
        if($number_product_edit > $number_product_in_stock)
            return redirect()->back()->with('warning','Sản phẩm '.$product_in_stock_name.' chỉ còn '.$number_product_in_stock.' trong kho');
        //get rowId for update number product in cart
        $rowId = $cart->where('id', $pro_id)->first()->rowId;
        \Cart::update($rowId, $number_product_edit);
        return redirect()->back()->with('success','Cập nhật số lượng sản phẩm thành công');
    }
    public function deleteProductItem($key)
    {
        \Cart::remove($key);
        return redirect()->back();
    }
}
