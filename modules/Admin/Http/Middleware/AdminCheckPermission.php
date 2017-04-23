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
        $admminLoged = get_session('logged');
        if (!$admminLoged) return redirect()->route('staff.getLogin');

        // Lấy tên quyền ứng với route truy cập | Lay (table|pers)
        $action = $request->route()->getAction();
        $allPermision = isset($action['permissions']) ? explode('.', $action['permissions']) : array();

        // Khong co quyen nao thi khong co phep truy cap
        if (!$allPermision) return redirectAccessDenied();
        $admin = new Admin();
        if (!$admin->checkRoleOfAdmin($allPermision))
        {
            return redirectAccessDenied();
        }
        return $next($request);
    }
}
