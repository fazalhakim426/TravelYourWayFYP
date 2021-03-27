<?php

namespace App\Http\Middleware;
use Auth;
use Closure;
use Illuminate\Http\Request;

class isAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        
        // if (Auth::user()->street==null||Auth::user()->phone_number==null) {
        //     return redirect('/register2');
        // }
    
        return $next($request);


    }

}
