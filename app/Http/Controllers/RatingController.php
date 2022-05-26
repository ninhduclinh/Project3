<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Rating;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RatingController extends CustomerController
{
    public function saveRating(Request $request, $id)
    {
        if($request->ajax())
        {
            $checkonerating = Rating::where(
                [
                    ["ra_product_id","=",$id],
                    ["ra_user_id","=",Auth::user()->id]
                ]
            )->first();
            if($checkonerating)
            {
                //Đã đánh giá
                return \response()->json(['code'=>2]);
            }
            foreach(Auth::user()->Transaction->where('tr_status',2) as $transactions)
            {
                foreach($transactions->Order as $order)
                {
                    if($order->or_product_id == $id)
                    {
                        Rating::insert([
                            'ra_product_id'=>$id,
                            'ra_number'=>$request->number,
                            'ra_content'=>$request->content,
                            'ra_user_id' => Auth::user()->id,
                            'created_at'=>Carbon::now(),
                            'updated_at'=>Carbon::now(),
                        ]);
                        $product = Product::find($id);
                        $product->pro_total_star += $request->number;
                        $product->pro_number_of_reviewers += 1;
                        $product->save();
                        return \response()->json(['code'=>1]);
                    }
                }
            }
            return \response()->json(['code'=>3]);
        }
    }
    public function deleteRating($id)
    {
        $rating = Rating::find($id);
        $product = Rating::find($id)->Product;
        $product->pro_total_star -= $rating->ra_number;
        $product->pro_number_of_reviewers -= 1;
        $product->save();
        $rating->delete();
        return redirect()->back();
    }
}
