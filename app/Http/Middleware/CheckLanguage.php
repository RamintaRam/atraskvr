<?php

namespace App\Http\Middleware;

use Closure;

class CheckLanguage
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

        app()->setLocale($lang);

        return $next($request);
    }

//    public function handle($request, Closure $next)
//    {
//        if(!Session::has('locale'))
//        {
//            Session::put('locale', $request->getPreferredLanguage($this->languages));
//        }
//
//        app()->setLocale(Session::get('locale'));
//
//        if(!Session::has('statut'))
//        {
//            Session::put('statut', Auth::check() ?  Auth::user()->role->slug : 'visitor');
//        }
//
//        return $next($request);
//    }
//
//}
}