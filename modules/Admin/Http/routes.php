<?php
// Cau hinh module vao de chay phan quyen
require_once(dirname(__FILE__) . '/routers/router_module_id_config.php');

Route::group([
    'middleware' => ['web', 'checkadminlogin'],
    'prefix'     => 'admincpp',
    'namespace'  => 'Modules\Admin\Http\Controllers'], function() use ($perModule)
{
    require_once (dirname(__FILE__).'/routers/router_init_dashboard.php');
    require_once (dirname(__FILE__).'/routers/router_module_default.php');
    require_once (dirname(__FILE__).'/routers/router_tabaction.php');
    require_once (dirname(__FILE__).'/routers/router_event.php');
    require_once (dirname(__FILE__).'/routers/router_suggestkeyword.php');
    require_once (dirname(__FILE__).'/routers/router_suggestsearch.php');
    require_once (dirname(__FILE__).'/routers/router_file.php');
    require_once (dirname(__FILE__).'/routers/route_403.php');
});


