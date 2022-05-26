<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Rating;

class AdminCommentController extends Controller
{
    public function index()
    {
        $ratings = Rating::all();
        $data = [
            'ratings' => $ratings
        ];
        return view('admin.comment.index',$data);
    }
    public function action($action,$id){
        if($action){
            $rating = Rating::find($id);
            switch ($action) {
                case 'delete':
                    $product = Rating::find($id)->Product;
                    $product->pro_total_star -= $rating->ra_number;
                    $product->pro_number_of_reviewers -= 1;
                    $product->save();
                    $rating->delete();
                    return redirect()->route('admin.comment.index');
                    break;
            }
        }
        return redirect()->back();
    }
}
