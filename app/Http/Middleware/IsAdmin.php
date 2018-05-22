<?php

namespace App\Http\Middleware;

use Closure;

class IsAdmin
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
        if(auth()->check() && $request->user()->role == 'admin'){
            return $next($request);
        }else{
            die('dodol');
        }
        return redirect()->guest('/login');

        // if(auth()->check() && $request->user()->admin == 1){
        //     return $next($request);
        // }
        // return redirect()->guest('/')


    // $user = Auth::user();
    // if($user->role === User::ROLE_ADMIN) {
    //     return $next($request);
    // }

    // return redirect('home');        
    }
}
