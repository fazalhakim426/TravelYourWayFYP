<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;
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
        // $user=Auth::user();
        // dd($user);
        // if($user->email=="hakimfazal426@gmail.com")
        // {
        //     return redirect('admindashboard');
        // }
        // else{
        //     return redirect('/dashboard');
        // }
        return $next($request);

    }

}
