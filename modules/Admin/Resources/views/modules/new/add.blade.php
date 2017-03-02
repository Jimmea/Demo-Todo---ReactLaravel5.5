@extends('admin::layouts.master')
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
                <input type="hidden" name="new_picture" id="new_picture" value="">
                <div class="row">
                    <div class="col-md-4">
                        <section id="avatar">
                            <h4 class="text-title">Hình ảnh minh họa <small class="text-muted">(Chọn hình ảnh)</small></h4>
                            <hr>
                            <div class="jumbotron" style="padding:10px">
                                <div class="container-image text-center">
                                    <div style="width: 100%;height: 250px; overflow:hidden;position: relative" class="recipe_show_image img hidden">
                                        <img src="" alt="" id="avatar_show_image">
                                        <div class="image__button editor__tool">
                                            <label class="image_upload" title="Sửa ảnh" for="new_picture_face"><i class="fa fa-camera"></i></label>
                                            <label class="button_delete" title="Xóa ảnh"><i class="fa fa-trash-o"></i></label>
                                        </div>
                                    </div>
                                    <div class="recipe_image_default">
                                        <h1 title="Vui lòng up hình minh họa">
                                            <label style="cursor: pointer" for="new_picture_face">
                                                <img src="{{ asset('backend/imgs/avatar_cook.png') }}" id="img_new_picture" width="230">
                                            </label>
                                        </h1>
                                        <input type="file" class="hide" accept="image/*" id="new_picture_face" name="new_picture_face">
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section id="advanced">
                            <h4 class="text-title">Thông tin nâng cao</h4>
                            <hr>
                            {{ $form->groupText('Time chuẩn bị', 'new_cate_id', 'new_cate_id', false, ['label'=>'col-md-4', 'div'=> 'col-md-8']) }}
                            {{ $form->groupText('Time thực hiện', 'new_cate_id', 'new_cate_id', false, ['label'=>'col-md-4', 'div'=> 'col-md-8']) }}
                            {{ $form->groupText('Khẩu phần cho', 'new_video', 'new_video', false, ['label'=>'col-md-4', 'div'=> 'col-md-8']) }}
                            {{ $form->groupText('Youtobe Video', 'new_video', 'new_video', false, ['label'=>'col-md-4', 'div'=> 'col-md-8']) }}
                        </section>
                        <section>
                            <h4 class="text-title">Tag bài viết & Trạng thái</h4>
                            <hr>
                            {{ $form->groupTextArea('Tags', 'new_tag', 'new_tag', false, ['label'=> '', 'div' => 'col-md-12']) }}
                            <label class="control-label">Trạng thái bài viết</label>
                            <select name="new_status" id="new_status" class="input-sm form-control">
                                @foreach($configStatus as $key => $value)
                                    <option value="{{ $key }}">{{ $value }}</option>
                                @endforeach
                            </select>
                        </section>
                    </div>
                    <div class="col-md-8">
                        <section id="information">
                            <h4 class="text-title">Thông tin cơ bản </h4>
                            <hr>
                            <div class="form-group">
                                <label class="control-label">Danh mục {!! label_danger() !!} </label>
                                <?php $separator = ""; ?>
                                <select name="new_cate_id" id="new_cate_id" class="form-control input-sm">
                                    <option value="">-- Chọn danh mục--</option>
                                    @foreach($categories as $item)
                                    <option value="{{ $item['cate_id'] }}">
                                        <?php if (isset($v['level'])) for($i=0; $i < $v["level"];$i++) $separator .="---"; ?>
                                        {{ $separator . $item['cate_name'] }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Tên món ăn {!! label_danger() !!}</label>
                                <input type="text" name="new_title" class="form-control" id="new_title" value="">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Giới thiệu món</label>
                                <textarea name="new_description" id="new_description" class="form-control" cols="30" rows="5"></textarea>
                            </div>
                        </section>
                        <section id="ingredient">
                            <h4 class="text-title">Nguyên liệu <small class="text-muted">(Thông tin bắt buộc)</small></h4>
                            <hr>
                            <div class="form-group">
                                <label class="control-label">Chuẩn bị nguyên liệu{!! label_danger() !!}</label>
                                <div class="col-md-12">
                                    <textarea name="new_ingredient" id="new_ingredient" class="form-control"  rows="6" placeholder="Đặt mỗi nguyên liệu trên một dòng"></textarea>
                                </div>
                            </div>
                        </section>
                        <section id="methods">
                            <h4 class="text-title">Các bước thực hiện <small class="text-muted">(Thông tin bắt buộc)</small></h4>
                            <hr>
                            <div class="col-md-12">
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
                        </section>
                    </div>
                </div>
                <hr>
                {{ $form->groupSubmitReset()  }}
                {{ $form->closeForm() }}
            </div>
        </div>
    </div>
@stop
@section('js')
    <script src="{{ asset('backend/js/pages/component_new.js') }}"></script>
    <script src="{{ asset('backend/js/pages/component_tag.js') }}"></script>
@stop