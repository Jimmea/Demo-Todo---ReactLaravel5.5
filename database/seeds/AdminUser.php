<?php

use Illuminate\Database\Seeder;

class AdminUser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = [
            [
                'adm_loginname' => 'admin',
                'adm_name'      => 'admin',
                'adm_email'     => 'hungitc.hubt@gmail.com',
                'adm_isadmin'   => 1,
                'adm_password'  => bcrypt('123456'),
                'adm_active'    => 1,
                'adm_admin_id'  => 1,
            ],
            [
                'adm_loginname' => 'admin1',
                'adm_name'      => 'admin1',
                'adm_email'     => 'hungitc.hubt1@gmail.com',
                'adm_isadmin'   => 1,
                'adm_password'  => bcrypt('123456'),
                'adm_active'    => 1,
                'adm_admin_id'  => 1,
            ],
            [
                'adm_loginname' => 'admin2',
                'adm_name'      => 'admin2',
                'adm_email'     => 'hungitc.hubt2@gmail.com',
                'adm_isadmin'   => 1,
                'adm_password'  => bcrypt('123456'),
                'adm_active'    => 1,
                'adm_admin_id'  => 1,
            ],
        ];

        foreach ($admin as $key => $item)
        {
            \App\Models\Admins\Admin::create($item);
        }
    }
}
