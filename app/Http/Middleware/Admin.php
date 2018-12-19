<?php

namespace App\Http\Middleware;

use Illuminate\Contracts\Auth\Guard;
use Closure;
use Auth;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    protected $admin;
    public function __construct(Guard $auth)
    {
       $this->admin = $auth;
    }
    public function handle($request, Closure $next, $guard = 'admin')
    {
        if (Auth::guard($guard)->check() && Auth::guard($guard)->user()->group_name == 'admin') {
            return $next($request);
        }else{
            return redirect()->route('backend_login');
        }
    }
}
