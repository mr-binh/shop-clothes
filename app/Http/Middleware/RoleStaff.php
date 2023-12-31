<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RoleStaff
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $role = null)
    {
        if (auth()->user()) {
            if (!$role) $role = ['super admin', 'staff'];
            if (auth()->user()->hasAnyRole($role)) {
                return $next($request);
            } else {
                return abort(403);
            }
        } else {
            return redirect()->route('admin.auth.login');
        }
    }
}
