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

        $user=Auth::user();
        // dd($email);
        if($user->membership=='Admin')
        {
            return redirect('admindashboard');
        }
        elseif($user->membership=='Customer'){
            return redirect('customerdashboard');
        }
        elseif($user->membership=='Agent'){
            return redirect('agentdashboard');
        }
        elseif($user->membership=='Super Agent'){
            return redirect('superagentdashboard');
        }
        elseif($user->phone_number==null){
            return redirect('register2');
        }
        else{
            return 'Invalid Response';
        }
    }
}
