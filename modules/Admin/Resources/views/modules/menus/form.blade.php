{!! form_group('Menu position', 'mnu_position', 'select', false, $errors, $menu, $configPosition) !!}
{!! form_group('Menu name', 'mnu_name', 'text', true, $errors, $menu) !!}
{!! form_group('Link', 'mnu_link', 'text', false, $errors, $menu) !!}
{!! form_group('Upper menu', 'mnu_parent_id', 'select',false, $errors, $menu, $menus) !!}
{!! form_group('Ảnh đại diện', 'mnu_picture', 'file', false, $errors, $menu) !!}
{!! form_group('Set Order','mnu_order', 'text',false, $errors, $menu) !!}