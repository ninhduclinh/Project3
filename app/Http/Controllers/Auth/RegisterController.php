<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;

class RegisterController extends CustomerController
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */
    public function getRegister()
    {
        return view('customer.auth.register');
    }
    public function postRegister(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role ='0';
        if($request->password != $request->confirmpassword)
        {
            return redirect()->back()->with('errorconfirmpassword','có lỗi');
        }
        $user->password= bcrypt($request->password);
        $user->save();
        if($user->id){
            return redirect()->back()->with('successregister','success');
        }
    }
}
