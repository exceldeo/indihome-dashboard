<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class EnsureHasPermission
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param $permission
     * @return mixed
     */
    public function handle($request, Closure $next, $permission)
    {
        if (Auth::user()->hasPermission($permission)) {
            return $next($request);
        }
        else {
            return redirect()->back()->with('alert', 'You do not have the permission');
        }
    }
}
