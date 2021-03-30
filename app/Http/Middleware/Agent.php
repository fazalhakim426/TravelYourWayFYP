<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

use Auth;
class Agent
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
        $user=Auth::user();
        if($user->membership=="Agent")
        {
            // return redirect('/agentdashboard');
            return $next($request);
        }
        else{
            return redirect('/dashboard');
        }
    }
}
