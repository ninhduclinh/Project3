<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class checkLoginUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(!Auth::check())
        {
            if($request->ajax()) {
                return response()->json([
                    'error' => true
                ]);
            }
            return redirect()->route('get.login')->with('needLogin','Cần đăng nhập');
        }
        return $next($request);
    }
}
