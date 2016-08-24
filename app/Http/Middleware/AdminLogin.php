<?php

namespace App\Http\Middleware;

use Closure;

class AdminLogin
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

        if( session('admin') == 1){
            echo '----1111111----';
//            return redirect('admin/login');
        } else{
            echo '----other----';
            return redirect('admin/login');
        }

        return $next($request);
    }
}
