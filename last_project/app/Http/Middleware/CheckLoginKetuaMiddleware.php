<?php

namespace App\Http\Middleware;

use Closure;

class CheckLoginKetuaMiddleware
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
        if (session()->has('usernameket'))
        {
            return $next($request);
        }
        else {
            return redirect('/ketua/login')->with('pesan',"Maaf, silahkan login terlebih dahulu");
        }
    }
}
