<?php

namespace Modules\Admin\Http\Middleware;

use App\Models\Admins\Admin;
use Closure;
use Illuminate\Http\Request;

class AdminCheckPermission
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
        $admin = new Admin();
        return $next($request);
    }
}
