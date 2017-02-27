@extends('admin::layouts.master')
@section('css')
<style>
    .ui-sortable-helper {
        background: red;
    }
</style>
@stop
@section('content')
    {!! bread_crumb([
        'admincpp.getListNew' => trans('admin::listing.title'),
        trans('admin::form.add.title')
    ]) !!}
    <div class="row">
        <div class="col-md-12">
            <div class="white-box">
                {!! box_title(trans('admin::form.add.title')) !!}
                @php $form = new Form($errors) @endphp
                {{ $form->beginForm(['admincpp.postAddNew']) }}
                <div class="col-md-6 col-md-offset-3">
                    <div class="jumbotron" style="padding:10px">
                    	<div class="container text-center">
                            <h1 title="Vui lòng up hình minh họa"><label style="cursor: pointer" for="avatar"><img src="{{ asset('backend/imgs/avatar_cook.png') }}" width="130"></label></h1>
                            <input type="file" class="hide" id="avatar" name="new_picture">
                    		<p class="text-uppercase">hình minh họa</p>
                    	</div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <h4 class="text-info">Thông tin cơ bản </h4>
                {{ $form->groupText('Tên món ăn', 'new_title', 'new_title', true) }}
                {{ $form->groupTextArea('Giới thiệu về món ăn', 'new_description', 'new_description') }}
                {{ $form->groupText('Danh mục bài viết', 'new_cate_id', 'new_cate_id', true) }}
                <hr>
                <h4 class="text-info">Thông tin nâng cao</h4>
                <div class="row">
                    <div class="col-md-6">
                        {{ $form->groupText('Thời gian chuẩn bị', 'new_cate_id', 'new_cate_id', false, ['label'=>'col-md-4', 'div'=> 'col-md-8']) }}
                        {{ $form->groupText('Youtobe Video', 'new_video', 'new_video', false, ['label'=>'col-md-4', 'div'=> 'col-md-8']) }}
                    </div>
                    <div class="col-md-6">
                        {{ $form->groupText('Thời gian thực hiện', 'new_cate_id', 'new_cate_id', false, ['label'=>'col-md-4', 'div'=> 'col-md-8']) }}
                        {{ $form->groupText('Khẩu phần cho', 'new_video', 'new_video', false, ['label'=>'col-md-4', 'div'=> 'col-md-8']) }}
                    </div>
                </div>
                <hr>
                <h4 class="text-info">Nguyên liệu <small class="text-muted">(Thông tin bắt buộc)</small></h4>
                <div class="form-group">
                    <label class="control-label col-md-2">Nguyên liệu chuẩn bị {!! label_danger() !!}</label>
                    <div class="col-md-10">
                        <textarea name="new_ingredient" class="form-control"  rows="6" placeholder="Đặt mỗi nguyên liệu trên một dòng"></textarea>
                    </div>
                </div>
                <h4 class="text-info">Các bước thực hiện <small class="text-muted">(Thông tin bắt buộc)</small></h4>
                <div class="col-md-10 col-md-offset-2">

                    <div class="form-list-group" id="form-list-group">
                        @include(ADMIN_VIEW . 'new.groupstep')
                    </div>

                </div>
                <div class="clearfix"></div>
                <div class="form-group">
                    <a href="#" class="text-center btn btn-link btn-block button_add_step" id="button_add_step" data-behavior="add_step">
                        <i class="fa fa-plus"></i> <b>Bước tiếp theo</b>
                    </a>
                </div>
                <div class="clearfix"></div>
                {{ $form->groupSubmitReset()  }}
                {{ $form->closeForm() }}
            </div>
        </div>
    </div>
@stop
@section('js')
    {{--<script src="{{ asset('backend/js/plugins/sortable/jquery-sortable.js') }}"></script>--}}
    <script src="{{ asset('backend/js/pages/component_new.js') }}"></script>
    {{--<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>--}}
@stop