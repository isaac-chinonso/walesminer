<?php

namespace App\Http\Middleware;

use Closure;
use Session;

class ApiLogin
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
        $data = request()->session()->get('log');
        if(!is_null($data))
        {
            return $next($request);
        }
        return redirect()->route('signin');
        
    }
}
