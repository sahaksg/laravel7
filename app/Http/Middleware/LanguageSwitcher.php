<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Session;
use App;
use Illuminate\Support\Facades\Config;

use Closure;

class LanguageSwitcher
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
        if(\Session::has('locale'))
   {
       \App::setlocale(\Session::get('locale'));
   }
   return $next($request);
    }
}
