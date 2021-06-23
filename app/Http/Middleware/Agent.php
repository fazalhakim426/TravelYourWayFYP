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
        $user=Auth::user()->userable;
      
        if(get_class($user)=="App\Models\Agent")
        {
                       
                        if($user->super_agent==null){
                            return redirect('register2');
                        }
                        else
                            return $next($request);

        }
        else{
            return redirect('/');
        }
    }
}
