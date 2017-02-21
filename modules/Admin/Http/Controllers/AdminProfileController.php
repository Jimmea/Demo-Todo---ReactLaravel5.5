<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\Admins\AdminRepository;
use Illuminate\Http\Request;

class AdminProfileController extends AdminController
{
    public function __construct(AdminRepository $adminRepository)
    {
        $this->admin = $adminRepository;
    }

    public function getProfile($id)
    {
        $dataView = [
            'profile' => $this->admin->findById($id)
        ];

        return view(ADMIN_VIEW . 'profiles.index')->with($dataView);
    }

    public function postProfile(Request $request, $id)
    {
        set_flash_update_success();
        return redirect()->route('admincpp.getProfile', $id);
    }
}
