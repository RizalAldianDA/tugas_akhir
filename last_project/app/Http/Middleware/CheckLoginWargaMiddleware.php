<?php

namespace App\Http\Middleware;

use Closure;

class CheckLoginWargaMiddleware
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
        if (session()->has('nik'))
        {
            return $next($request);
        }
        else {
            return redirect('/warga/login')->with('pesan',"Maaf, silahkan login terlebih dahulu");
        }
    }
}
