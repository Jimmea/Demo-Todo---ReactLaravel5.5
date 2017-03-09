<?php

use Illuminate\Database\Seeder;

class Module extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $modules  = [
            [
                'mod_name'      => 'Quản lý thẻ tag',
                'mod_listname'  => 'Thêm mới|Danh sách',
                'mod_listrouter'=> 'getAddTag|getListTag',
                'mod_icon'      => 'icon-credit-card',
                'mod_order'     => 1,
            ],
            [
                'mod_name'      => 'Quản lý menu',
                'mod_listname'  => 'Thêm mới|Danh sách',
                'mod_listrouter'=> 'getAddMenu|getListMenu',
                'mod_icon'      => 'icon-menu',
                'mod_order'     => 2,
            ],
            [
                'mod_name'      => 'Danh mục',
                'mod_listname'  => 'Thêm mới|Danh sách',
                'mod_listrouter'=> 'getAddCategory|getListCategory',
                'mod_icon'      => 'icon-list',
                'mod_order'     => 3,
            ],
            [
                'mod_name'      => 'Bài viết tin tức',
                'mod_listname'  => 'Thêm mới|Danh sách',
                'mod_listrouter'=> 'getAddNew|getListNew',
                'mod_icon'      => 'icon-note',
                'mod_order'     => 4,
            ],
            [
                'mod_name'      => 'Banner',
                'mod_listname'  => 'Thêm mới|Danh sách',
                'mod_listrouter'=> 'getAddBanner|getListBanner',
                'mod_icon'      => 'icon-film',
                'mod_order'     => 5,
            ],
            [
                'mod_name'      => 'Sự kiện Event',
                'mod_listname'  => 'Thêm mới|Danh sách',
                'mod_listrouter'=> 'getAddEvent|getListEvent',
                'mod_icon'      => 'icon-diamond',
                'mod_order'     => 6,
            ],
            [
                'mod_name'      => 'Quản lý suggest từ khóa',
                'mod_listname'  => 'Thêm mới|Danh sách',
                'mod_listrouter'=> 'getAddSuggestKeyword|getListSuggestKeyword',
                'mod_icon'      => 'icon-key',
                'mod_order'     => 7,
            ],
            [
                'mod_name'      => 'Cấu hình admin',
                'mod_listname'  => 'Thêm mới|Danh sách',
                'mod_listrouter'=> 'getAddConfigAdmin|getListConfigAdmin',
                'mod_icon'      => 'icon-settings',
                'mod_order'     => 8,
            ],
            [
                'mod_name'      => 'Cấu hình website',
                'mod_listname'  => 'setting',
                'mod_listrouter'=> 'getEditConfiguration',
                'mod_icon'      => 'icon-equalizer',
                'mod_order'     => 9,
            ],
            [
                'mod_name'      => 'Phân quyền quản trị',
                'mod_listname'  => 'Thêm mới|Danh sách',
                'mod_listrouter'=> 'getAddAccount|getListAccount',
                'mod_icon'      => 'icon-people',
                'mod_order'     => 10,
            ]
        ];

        foreach ($modules as $module)
        {
            \App\Models\Modules\Module::create($module);
        }
    }
}
