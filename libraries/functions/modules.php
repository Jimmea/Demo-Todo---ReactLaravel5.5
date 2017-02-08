<?php
function getAllMenuRoleAdmin()
{
    $arrayMenu = array(
        'menus' => array(
            'label'      => "Manage menus",
            'icon'       => 'icon-grid',
            'is_menu'    => 1,
            'check_pers' => 1,
            'sub'        => array(
                'add' => array(
                    'is_menu'    => 1,
                    'check_pers' => 1,
                    'label'      => 'add menu',
                    'router'     => ''),
                'list' => array(
                    'is_menu'    => 1,
                    'check_pers' => 1,
                    'label'      => 'List menus',
                    'router'     => ''),
            )
        ),
        'catetories' => array(
            'label'      => 'Manage category',
            'icon'       => 'icon-folder',
            'is_menu'    => 1,
            'check_pers' => 1,
            'sub'        => array(
                'add' => array(
                    'is_menu'    => 1,
                    'check_pers' => 1,
                    'label'      => 'add category',
                    'router'     => ''),
                'list' => array(
                    'is_menu'    => 1,
                    'check_pers' => 1,
                    'label'      => 'List categories',
                    'router'     => ''),
            )
        ),
        'banners' => array(
            'label'      => 'Manage banner',
            'icon'       => 'icon-frame',
            'is_menu'    => 1,
            'check_pers' => 1,
            'sub'        => array(
                'add' => array(
                    'is_menu'    => 1,
                    'check_pers' => 1,
                    'label'      => 'add banner',
                    'router'     => ''),
                'list' => array(
                    'is_menu'    => 1,
                    'check_pers' => 1,
                    'label'      => 'List banners',
                    'router'     => ''),
            )
        ),
        'news' => array(
            'label'      => 'News',
            'icon'       => 'icon-note',
            'is_menu'    => 1,
            'check_pers' => 1,
            'sub'        => array(
                'add' => array(
                    'is_menu'    => 1,
                    'check_pers' => 1,
                    'label'      => 'add new',
                    'router'     => ''),
                'list' => array(
                    'is_menu'    => 1,
                    'check_pers' => 1,
                    'label'      => 'List news',
                    'router'     => ''),
            )
        ),
        'shoppings' => array(
            'label'      => 'Shopping',
            'icon'       => 'icon-handbag',
            'is_menu'    => 1,
            'check_pers' => 1,
            'sub'        => array(
                'add' => array(
                    'is_menu'    => 1,
                    'check_pers' => 1,
                    'label'      => 'add product',
                    'router'     => ''),
                'list' => array(
                    'is_menu'    => 1,
                    'check_pers' => 1,
                    'label'      => 'List products',
                    'router'     => ''),
            )
        ),
        'manager_accounts' => array(
            'label'      => 'Manage accouunt',
            'icon'       => 'icon-people',
            'is_menu'    => 1,
            'check_pers' => 1,
            'sub'        => array(
                'add' => array(
                    'is_menu'    => 1,
                    'check_pers' => 1,
                    'label'      => 'add account',
                    'router'     => ''),
                'list' => array(
                    'is_menu'    => 1,
                    'check_pers' => 1,
                    'label'      => 'List account',
                    'router'     => ''),
            )
        ),
        'setting_config' => array(
            'label'      => 'Setting config',
            'icon'       => 'icon-wrench',
            'is_menu'    => 1,
            'check_pers' => 1,
            'sub'        => array(
                'edit' => array(
                    'is_menu'    => 1,
                    'check_pers' => 1,
                    'label'      => 'edit setting config',
                    'router'     => ''),
            )
        ),
        'config_display' => array(
            'label'      => 'Config display',
            'icon'       => 'icon-eye',
            'is_menu'    => 1,
            'check_pers' => 1,
            'sub'        => array(
                'add'            => array(
                    'is_menu'    => 1,
                    'check_pers' => 1,
                    'label'      => 'add display',
                    'router'     => ''),
                'list' => array(
                    'is_menu'    => 1,
                    'check_pers' => 1,
                    'label'      => 'List display',
                    'router'     => ''),
            )
        ),
    );

    return $arrayMenu;
}

function getAllMenuAdmin()
{
    $arrayReturn 	= array();
    $allMenuRole 	= getAllMenuRoleAdmin();

    if ($allMenuRole)
    {
        foreach($allMenuRole as $key => $value)
        {
            if(isset($value['is_menu']) && $value['is_menu'] == 1)
            {
                $arrayReturn[$key] 	= $value;
                foreach($value['sub'] as $key_sub => $value_sub)
                {
                    // Xóa bỏ những item không phải là menu
                    if(!isset($value_sub['is_menu']) || $value_sub['is_menu'] != 1)
                    {
                        unset($arrayReturn[$key]['sub'][$key_sub]);
                    }
                }
            }
        }
    }

    return $arrayReturn;
}

function getAllRoleAdmin()
{
    $allMenuRole 	= getAllMenuRoleAdmin();
    $arrayReturn 	= array();

    foreach($allMenuRole as $key => $value)
    {
        if(isset($value['check_pers']) && $value['check_pers'] == 1)
        {
            $arrayReturn[$key] 	= $value;
            foreach($value['sub'] as $key_sub => $value_sub)
            {
                // Xóa bỏ những item không phải có quyền
                if(!isset($value_sub['check_pers']) || $value_sub['check_pers'] != 1)
                {
                    unset($arrayReturn[$key]['sub'][$key_sub]);
                }
            }
        }
    }

    return $arrayReturn;
}