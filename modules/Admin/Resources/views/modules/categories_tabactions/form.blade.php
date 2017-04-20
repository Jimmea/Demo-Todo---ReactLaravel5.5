@php $form = new Form($errors,$categoryTabAction) @endphp
{{ $form->beginForm([$routeName, $routeParam]) }}
    <div class="form-group">
        <label for="" class="col-md-2 control-label">Danh mục thêm vào</label>
        <div class="col-md-5"><input type="text" class="form-control input-sm" disabled value="{{ $category->cate_name }}" readonly></div>
        <input type="hidden" name="cta_category_id" value="{{ $category->cate_id }}">
    </div>
    {{ $form->groupSelect('Tab action', 'cta_tabaction_id', 'cta_tabaction_id', true, $tabActions, array(),true, ['div'=> 'col-md-5']) }}
    {{ $form->groupSelect('Trạng thái', 'cta_status', 'cta_status', false, $configStatus, array(),true, ['div'=> 'col-md-5']) }}
    {{ $form->groupSelectMul('Danh mục con', 'cta_group_category_id[]', 'select2', true, $categories,['cate_id', 'cate_name'], ['div'=> 'col-md-5'] )}}
    {{ $form->groupSubmitReset() }}
{{ $form->closeForm() }}