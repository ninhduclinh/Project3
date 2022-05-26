<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Controllers\CustomerController;
use App\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Request;

// use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

class ForgotPasswordController extends CustomerController
{
    public function postResetPassword(Request $request)
    {
        $email = $request->email_reset_password;
        $checkUser = User::where('email',$email)->first();
        if(!$checkUser)
        {
            $request->session()->flash('email_not_exist', 'Email không tồn tại!');
            return redirect()->back();
        }
        $code = bcrypt(md5(time().$email));
        $checkUser->code = $code;
        $checkUser->time_code = Carbon::now();
        $checkUser->save();

        $url = route('get.change.reset.password',['code'=> $checkUser->code,'email'=>$email]);
        $data = [
            'url' => $url
        ];
        Mail::send('customer.email.resetpassword', $data, function($message) use ($email){
	        $message->to($email,'ResetPassword')->subject('Lấy lại mật khẩu');
	    });
        $request->session()->flash('email_exist', 'Email có tồn tại!');
        return redirect()->back();
    }
    public function getChangePasswordReset(Request $request)
    {
        $code = $request->code;
        $email = $request->email;
        $checkUser = User::where(
            [
                'code' => $code,
                'email' => $email
            ]
        )->first();
        if(!$checkUser)
        {
            return redirect()->route('home');
        }
        $data = [
            'email' => $email
        ];
        return view('customer.auth.change_reset_password',$data);
    }
    public function postChangePasswordReset(Request $request)
    {
        $code = $request->code;
        $email = $request->email;
        $checkUser = User::where(
            [
                'code' => $code,
                'email' => $email
            ]
        )->first();
        if(!$checkUser)
        {
            return redirect()->route('home');
        }
        $validator = Validator::make($request->all(),
        [
           'passwordreset' => 'required|min:3|max:33',
           'confirm_passwordreset' => 'required|same:passwordreset'
        ],
        [
            'passwordreset.required' => 'Bạn đã bỏ trống trường mật khẩu mới',
            'passwordreset.min' => 'Cần ít nhất 3 kí tự cho mật khẩu mới',
            'passwordreset.max' => 'Tối đa 33 kí tự cho mật khẩu mới',
            'confirm_passwordreset.required' => 'Bạn đã bỏ trống trường Nhập lại mật khẩu',
            'confirm_passwordreset.same' => 'Mật khẩu nhập lại không giống mật khẩu mới'
        ]
        );
        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator,'resetPasswordErrors');
        }
        $checkUser->password = bcrypt($request->passwordreset);
        $checkUser->save();
        $request->session()->flash('success_resetpassword', 'Đổi mật khẩu thành công!');
        return redirect()->route("get.login");
    }
}
