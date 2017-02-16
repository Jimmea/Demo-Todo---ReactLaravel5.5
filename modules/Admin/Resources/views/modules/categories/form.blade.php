{{-- Hien thi --}}
{!! $form->groupSelect(trans('admin::category.add.cate_type'), 'cate_type', 'cate_type', true, $typeCategory) !!}

{{-- TT co ban --}}
{!! $form->groupText(trans('admin::category.add.cate_name'), 'cate_name', 'cate_name', true) !!}

{{-- Danh muc cha--}}
{!! $form->groupSelect(trans('admin::category.add.cate_parent_id'), 'cate_parent_id', 'cate_parent_id', false, $categories, ['cate_id', 'cate_name'], true) !!}

{!! $form->groupSelect(trans('admin::category.add.cate_show_mob'), 'cate_show_mob', 'cate_show_mob', false,  $cateShowMod) !!}
{!! $form->groupSelect(trans('admin::category.add.cate_view_type'), 'cate_view_type', 'cate_show_mob', false, $typeView) !!}

{{-- Hinh anh--}}
{!! $form->groupText(trans('admin::category.add.cate_background'), 'cate_background', 'cate_background') !!}
{!! $form->groupFile(trans('admin::category.add.cate_picture'), 'cate_picture', 'cate_picture') !!}
{!! $form->groupFile(trans('admin::category.add.cate_icon'), 'cate_icon', 'cate_icon') !!}

{{-- Meta seo--}}
{!! $form->groupText(trans('admin::category.add.cate_seo_title'), 'cate_seo_title', 'cate_seo_title') !!}
{!! $form->groupText(trans('admin::category.add.cate_seo_keyword'), 'cate_seo_keyword', 'cate_seo_keyword') !!}
{!! $form->groupTextArea(trans('admin::category.add.cate_seo_description'), 'cate_seo_description', 'cate_seo_description') !!}

{{-- submit --}}
{!! $form->groupSubmitReset() !!}