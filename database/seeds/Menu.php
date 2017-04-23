<?php

use Illuminate\Database\Seeder;

class Menu extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $menus = [
              [
                  'mnu_name'       => 'Hỗ trợ đặt bàn',
                  'mnu_picture'    => '/media/news/new.jpg',
                  'mnu_link'       => '/link-1',
                  'mnu_target'     => '_self',
                  'mnu_type'       => 1,
                  'mnu_position'   => 1,
                  'mnu_admin_id'   => 1,
              ],
            [
                'mnu_name'       => 'Đồ ăn đêm',
                'mnu_picture'    => '/media/news/new.jpg',
                'mnu_link'       => '/link-1',
                'mnu_target'     => '_self',
                'mnu_type'       => 1,
                'mnu_position'   => 1,
                'mnu_admin_id'   => 1,
            ],
            [
                'mnu_name'       => 'Hỏi đáp nấu ăn',
                'mnu_picture'    => '/media/news/new.jpg',
                'mnu_link'       => '/link-1',
                'mnu_target'     => '_self',
                'mnu_type'       => 1,
                'mnu_position'   => 1,
                'mnu_admin_id'   => 1,
            ],
            [
                'mnu_name'       => 'Đăng tin món ăn',
                'mnu_picture'    => '/media/news/new.jpg',
                'mnu_link'       => '/link-1',
                'mnu_target'     => '_self',
                'mnu_type'       => 1,
                'mnu_position'   => 1,
                'mnu_admin_id'   => 1,
            ],
            [
                'mnu_name'       => 'Hỗ trợ công thức nấu ngay',
                'mnu_picture'    => '/media/news/new.jpg',
                'mnu_link'       => '/link-1',
                'mnu_target'     => '_self',
                'mnu_type'       => 1,
                'mnu_position'   => 1,
                'mnu_admin_id'   => 1,
            ],
            [
                'mnu_name'       => 'Giá trị cốt lõi',
                'mnu_picture'    => '/media/news/new.jpg',
                'mnu_link'       => '/link-1',
                'mnu_target'     => '_self',
                'mnu_type'       => 1,
                'mnu_position'   => 1,
                'mnu_admin_id'   => 1,
            ],
            [
                'mnu_name'       => 'Sứ mệnh của chúng tôi',
                'mnu_picture'    => '/media/news/new.jpg',
                'mnu_link'       => '/link-1',
                'mnu_target'     => '_self',
                'mnu_type'       => 1,
                'mnu_position'   => 1,
                'mnu_admin_id'   => 1,
            ],
        ];

        foreach ($menus as $menu)
        {
            \App\Models\Menus\Menu::create($menu);
        }
    }
}
