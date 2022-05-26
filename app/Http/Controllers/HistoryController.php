<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HistoryController extends CustomerController
{
    //
    public function index()
    {
        $user = Auth::user();
        $transactions = $user->Transaction->sortByDesc('id');
        $data =  [
            'transactions' => $transactions
        ];
        return view('customer.history.index',$data);
    }
    public function getOrderItem(Request $request, $id)
    {
        if($request->ajax())
        {
            $orders = Order::where('or_transaction_id',$id)->get();
            $html  = view('Admin.transaction.orderItem',compact('orders'))->render();
            return \response()->json($html);
        }
    }
    public function transactionPaid($id)
    {
        $transaction = Transaction::find($id);
        $orders = Order::where('or_transaction_id',$id)->get();
        if($orders)
        {
            foreach ($orders as $order)
            {
                $product = Product::find($order->or_product_id);
                if($product->pro_number < $order->qty)
                return redirect()->route('admin.home');
                $product->pro_number =  $product->pro_number - $order->or_qty;
                $product->pro_pay=  $product->pro_pay + $order->or_qty;
                $product->save();
            }
            $transaction->tr_status = 2;
            $transaction->save();
        }
        return redirect()->back();
    }
}
