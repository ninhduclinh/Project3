<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class CustomerController extends Controller
{
    public function __construct()
    {
        $categories = Category::where('c_status','1')->get();
        View::share('categories_searh',$categories);
    }
}
