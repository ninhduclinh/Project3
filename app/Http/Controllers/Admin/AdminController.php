<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Product;
use App\Models\Transaction;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function getLogin()
    {
        return view('admin.login.login');
    }
    public function postLogin(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if(Auth::attempt($credentials)){
            $user = Auth::user();
            if($user->role == 1){
                return redirect()->route('admin.home');
            }
        }
        return redirect()->back()->with('error','Đăng nhập không thành công');
    }
    public function getLogout(){
        Auth::logout();
        return view('admin.login.login');
    }
    public function index(){
        // get 7 day formar Y-m-d
        $today = Carbon:: today()->format('Y-m-d');
        $onedago = Carbon:: today()->subDays(1)->format('Y-m-d');
        $twodago = Carbon:: today()->subDays(2)->format('Y-m-d');
        $threedago = Carbon:: today()->subDays(3)->format('Y-m-d');
        $fordago = Carbon:: today()->subDays(4)->format('Y-m-d');
        $fivedago = Carbon:: today()->subDays(5)->format('Y-m-d');
        $sixdago = Carbon:: today()->subDays(6)->format('Y-m-d');
        // get money redemm follow update status 2
        $totaltoday = Transaction::where('updated_at', 'like', '%'.$today.'%')->select('tr_status','tr_total','created_at')->where('tr_status',2)->sum('tr_total');
        $totalonedago = Transaction::where('updated_at', 'like', '%'.$onedago.'%')->select('tr_status','tr_total','created_at')->where('tr_status',2)->sum('tr_total');
        $totaltwodago = Transaction::where('updated_at', 'like', '%'.$twodago.'%')->select('tr_status','tr_total','created_at')->where('tr_status',2)->sum('tr_total');
        $totalthreedago = Transaction::where('updated_at', 'like', '%'.$threedago.'%')->select('tr_status','tr_total','created_at')->where('tr_status',2)->sum('tr_total');
        $totalfordago = Transaction::where('updated_at', 'like', '%'.$fordago.'%')->select('tr_status','tr_total','created_at')->where('tr_status',2)->sum('tr_total');
        $totalfivedago = Transaction::where('updated_at', 'like', '%'.$fivedago.'%')->select('tr_status','tr_total','created_at')->where('tr_status',2)->sum('tr_total');
        $totalsixdago = Transaction::where('updated_at', 'like', '%'.$sixdago.'%')->select('tr_status','tr_total','created_at')->where('tr_status',2)->sum('tr_total');
        // get 7 day for time graph
        $one = Carbon:: today()->subDays(1)->format('d-m');
        $two = Carbon:: today()->subDays(2)->format('d-m');
        $three = Carbon:: today()->subDays(3)->format('d-m');
        $for = Carbon:: today()->subDays(4)->format('d-m');
        $five = Carbon:: today()->subDays(5)->format('d-m');
        $six = Carbon:: today()->subDays(6)->format('d-m');
        $total_price_seven_days_edit = "".$totalsixdago.",".$totalfivedago.",".$totalfordago.",".$totalthreedago.",".$totaltwodago.",".$totalonedago.",".$totaltoday."";
        $time_chart = "".$six.",".$five.",".$for.",".$three.",".$two.",".$one.",Hôm nay";
        //number transaction handle
        $transaction_number = Transaction::where('tr_status','0')->count();
        //number products
        $number_products = Product::all()->count();
        //number user
        $number_users = User::all()->count();
        //number articles
        $number_articles = Article::all()->count();
        // data transmission
        $data = [
            'time_chart' => $time_chart,
            'total_price_seven_days_edit' => $total_price_seven_days_edit,
            'transaction_number' => $transaction_number,
            'number_products' => $number_products,
            'number_users' => $number_users,
            'number_articles' => $number_articles
        ];
        return view('admin.dashbroad.index',$data);
    }
}
