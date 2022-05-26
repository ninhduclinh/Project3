<?php

namespace App\Http\Controllers;

use App\Models\Nofitication;
use App\Models\Order;
use App\Models\Transaction;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FeatureUserController extends CustomerController
{
    //
    public function getFormPay()
    {
        $products = \Cart::content();
        $data = [
            'products' => $products
        ];
        return view('customer.featureuser.formpay',$data);
    }
    public function saveInfoShoppingCart(Request $request)
    {
        // get value in total money cart
        $totalMoney = str_replace(',','',\Cart::subtotal(0));
        // insert data transaction and get id then insert
        $transactionId = Transaction::insertGetId([
            'tr_user_id'=> Auth::user()->id,
            'tr_total' => $totalMoney,
            'tr_note'=> $request->note,
            'tr_address' => $request->address,
            'tr_phone' => $request->phone,
            'created_at' => Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        // check exist id transaction above and insert order
        if($transactionId){
            $products = \Cart::content();
            foreach($products as $product)
            {
                Order::insert([
                    'or_transaction_id'=>$transactionId,
                    'or_product_id'=>$product->id,
                    'or_qty'=>$product->qty,
                    'or_price'=>$product->options->price_old,
                    'or_sale'=>$product->options->sale,
                    'created_at' => Carbon::now(),
                    'updated_at'=>Carbon::now()
                ]);
            }
            \Cart::destroy();
        }
        return redirect()->route('home');
    }
    public function deleteNofication(Request $request, $id)
    {
        $nofication = Nofitication::find($id);
        $nofication->delete();
        return redirect()->back();
    }
}
