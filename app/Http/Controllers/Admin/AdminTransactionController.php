<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Nofitication;
use App\Models\Order;
use App\Models\Product;
use App\Models\Transaction;
use Barryvdh\DomPDF\PDF;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class AdminTransactionController extends Controller
{
    //
    public function index()
    {
        $transactions = Transaction::all();
        $data = [
            'transactions' => $transactions
        ];
        return view('admin.transaction.index',$data);
    }
    public function getOrderItem(Request $request,$id)
    {
        if($request->ajax())
        {
            $orders = Order::where('or_transaction_id',$id)->get();
            $html  = view('admin.transaction.orderItem',compact('orders'))->render();
            return \response()->json($html);
        }
    }
    public function handle(Request $request,$action,$id)
    {
        if($action)
        {
            $transaction = Transaction::find($id);
            switch ($action) {
                case 'delete':
                        if($transaction->tr_status == 0)
                        {
                            $orders = Order::where('or_transaction_id',$id)->get();
                            if($orders)
                            {
                                foreach($orders as $order)
                                {
                                    $order->delete();
                                }
                            }
                            Nofitication::insert(
                                [
                                    'nof_sender' => Auth::user()->id,
                                    'nof_receiver' =>$transaction->tr_user_id,
                                    'nof_content' => 'Giao dịch <b>mã số '.$id.'</b> với ghi chú "'.$transaction->tr_note.'" <b>ĐÃ BỊ HỦY</b> ! Có thể do thiếu số lượng sản phẩm bạn yêu cầu, liên hệ lại chủ cửa hàng để biết thêm chi tiết !!!',
                                    'created_at' => Carbon::now(),
                                ]
                                );
                                $transaction->delete();
                        }
                        else if($transaction->tr_status == 1)
                        {
                            // find orders of customer in transaction
                            $orders = Order::where('or_transaction_id',$id)->get();
                            if($orders)
                            {
                                foreach ($orders as $order)
                                {
                                    // find product in order
                                    $product = Product::find($order->or_product_id);
                                    $product->pro_number =  $product->pro_number + $order->or_qty;
                                    $product->save();
                                    $order->delete();
                                }
                            }
                            Nofitication::insert(
                                [
                                    'nof_sender' => Auth::user()->id,
                                    'nof_receiver' =>$transaction->tr_user_id,
                                    'nof_content' => 'Giao dịch <b>mã số '.$id.'</b> với ghi chú "'.$transaction->tr_note.'" <b>đã bị hủy</b> trong khi vận chuyển !! Liên lạc lại chủ cửa hàng để biết thêm chi tiết !',
                                    'created_at' => Carbon::now()
                                ]
                                );
                            $transaction->delete();
                        }
                        else
                        {
                            $request->session()->flash('stopDelete', 'Giao dịch này đã thành công hoặc có dữ liệu quan trọng không thể xóa !!!');
                        }
                        return redirect()->route('admin.transaction.index')->with('success','Đã hủy giao dịch thành công');
                    break;
                case 'send':
                        // find orders of customer in transaction    
                        $orders = Order::where('or_transaction_id',$id)->get();
                        if($orders)
                        {
                            foreach ($orders as $order)
                            {
                                // find product in order
                                $product = Product::find($order->or_product_id);
                                // check number product enough number product customer buy
                                if($product->pro_number < $order->or_qty)
                                {
                                    Nofitication::insert(
                                        [
                                            'nof_sender' => Auth::user()->id,
                                            'nof_receiver' =>$transaction->tr_user_id,
                                            'nof_content' => 'Giao dịch mã số '.$id.' có sản phẩm '.$product->pro_name.' đã hết hàng ! Chủ cửa hàng có thể nhập thêm hoặc đơn hàng này sẽ bị <b>HỦY</b> trong thời gian tới !!!',
                                            'created_at' => Carbon::now()
                                        ]
                                        );
                                    $request->session()->flash('OutOfStock', 'Sản phẩm '.$product->pro_name.' đã hết hàng không thể thay đổi trạng thái giao dịch này !!!');
                                    return redirect()->back();
                                }
                                
                                // subtract number product in stock
                                $product->pro_number =  $product->pro_number - $order->or_qty;
                                $product->save();
                            }
                            $transaction->tr_status= 1;
                            $transaction->save();
                        }
                        return redirect()->route('admin.transaction.index')->with('success','Đã gửi hàng thành công !');
            }
        }
    }
    public function transactionPaid($id)
    {
        $transaction = Transaction::find($id);
        // find orders of customer in transaction 
        $orders = Order::where('or_transaction_id',$id)->get();
        if($orders)
        {
            foreach ($orders as $order)
            {
                // find product in order
                $product = Product::find($order->or_product_id);
                //Add number product bought in table product   
                $product->pro_pay=  $product->pro_pay + $order->or_qty;
                $product->save();
            }
            $transaction->tr_status = 2;
            Nofitication::insert(
                [
                    'nof_sender' => Auth::user()->id,
                    'nof_receiver' =>$transaction->tr_user_id,
                    'nof_content' => 'Giao dịch <b>mã số '.$id.'</b> đã <b>GIAO DỊCH THÀNH CÔNG</b> !! Bạn có thể đánh giá các sản phẩm trong giao dịch này bằng cách tìm sản phẩm hoặc kiểm tra tại Lịch sử mua hàng !!!',
                    'created_at' => Carbon::now(),
                ]
                );
            $transaction->save();
        }
        return redirect()->route('admin.transaction.index');
    }
    public function exportTransactionPdf($id)
    {
        $day = Carbon::now()->day;
        $month = Carbon::now()->month;
        $year = Carbon::now()->year;
        $transaction = Transaction::find($id);
        $data = [
            'transaction' => $transaction,
            'day' => $day,
            'month' => $month,
            'year' => $year
        ];
        // return view('Admin.transaction.transactionPdf',$data);
        $pdf = \PDF::loadView('admin.transaction.transactionPdf', $data);
        return $pdf->download('DetailTransaction'.$transaction->User->name.'MGD'.$transaction->id.'.pdf');
    }
}
