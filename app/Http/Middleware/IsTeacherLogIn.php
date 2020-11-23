<?php

namespace App\Http\Middleware;

use Closure;
use Session;
class IsTeacherLogIn
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
        if(!Session::has('user2_id')){
            return redirect()->to('login');
        }
        return $next($request);
    }
}
