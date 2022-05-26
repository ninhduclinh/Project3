<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Controllers\CustomerController;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends CustomerController
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;
    public function getLogin()
    {
        return view('customer.auth.login');
    }
    public function getLogout()
    {
        Auth::logout();
        return redirect()->route('get.login');
    }
    public function postLogin(Request $request)
    {
        $infologin = $request->only('email','password');
        if(Auth::attempt($infologin))
        {
            return redirect()->route('home');
        }
        else
        {
            return redirect()->back()->with('errorlogin','Lỗi');
        }
    }
}
