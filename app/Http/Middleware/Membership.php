<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;
class Membership
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
        // return $next($request);

        $user=Auth::user()->userable;
        if($user==null)
        {
            return redirect('/register2');
        }
        $memberclass=get_class($user);
        if($memberclass=="App\Models\SuperAgent")
        {
            
            return redirect('super-agent/dashboard');
        }
        else{
            if($memberclass=="App\Models\Customer")
        {
           
            return redirect('/customer/dashboard');
        }
        else{
            if($memberclass=="App\Models\Agent")
        {
            return redirect('agent/dashboard');
        }
        else{
            return redirect('/');
        }
        }

        }

        return redirect('/');

     
    }
}
