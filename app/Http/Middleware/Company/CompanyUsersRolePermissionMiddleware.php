<?php

namespace App\Http\Middleware\Company;

use Closure;
use Illuminate\Http\Request;

class CompanyUsersRolePermissionMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        echo Auth::guard('company_users')->role_id;
        return $next($request);
    }
}
