<?php

namespace App\Http\Middleware;

use Closure;

class LoginAuth
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
    //     if($request->path() == "/shopkaro/login" and $request->session()->has('user1'))
    //     {
    //         return redirect('/shopkaro/mobile');
    //     }
        return $next($request);
    }
}
