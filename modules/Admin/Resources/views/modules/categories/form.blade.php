{{--
    Hàm form_group : Tạo 1 form group bootstrap
    param 1 : tên label
    param 2 : ten cot trong table cua bang
    param 3 : kiểu input
    param 4 : giá trị có yêu cầu bắt buộc nhập không
    param 5 : biến báo lỗi
    param 6 : giá trị của trường đó trong csdl
    param 7 : giá trị mặc định được truyền vào
--}}


{{-- Hien thi --}}
{!! form_group(trans('admin::category.add.cate_type'), 'cate_type', 'select', true, $errors, $categories, $typeCategory) !!}

{{-- TT co ban --}}
{!! form_group(trans('admin::category.add.cate_name'), 'cate_name', 'text', true, $errors, $category) !!}

{{-- Danh muc cha--}}
{!! form_group(trans('admin::category.add.cate_parent_id'), 'cate_parent_id', 'select', false, $errors, $categories,$category ) !!}

{{-- Expand --}}
{!! form_group(trans('admin::category.add.cat_show_mob'), 'cat_show_mob', 'select', false, $errors, $category, $cateShowMod) !!}
{!! form_group(trans('admin::category.add.cat_view_type'), 'cat_view_type', 'select', false, $errors, $category, $typeView) !!}

{{-- Hinh anh--}}
{!! form_group(trans('admin::category.add.cate_background'), 'cate_back  ground', 'text', false, $errors, $category) !!}
{!! form_group(trans('admin::category.add.cate_picture'), 'cate_picture', 'file', false, $errors, $category) !!}
{!! form_group(trans('admin::category.add.cate_icon'), 'cate_icon', 'file', false, $errors, $category) !!}

{{-- Meta seo--}}
{!! form_group(trans('admin::category.add.cate_seo_title'), 'cate_seo_title', 'text', false, $errors, $category) !!}
{!! form_group(trans('admin::category.add.cate_seo_keyword'), 'cate_seo_keyword', 'text', false, $errors, $category ) !!}
{!! form_group(trans('admin::category.add.cate_description'), 'cate_description', 'textarea', false, $errors, $category) !!}
