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
                                        <input type="hidden" name="new_picture" id="new_picture" value="">
                                        <input type="file" class="hide" accept="image/*" id="new_picture_face" name="new_picture_face">
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section id="advanced">
                            <h4 class="text-title">Thời gian & Youtube code</h4>
                            <hr>
                            {{ $form->groupText('Time chuẩn bị', 'new_cate_id', 'new_cate_id', false, ['label'=>'col-md-4', 'div'=> 'col-md-8']) }}
                            {{ $form->groupText('Time thực hiện', 'new_cate_id', 'new_cate_id', false, ['label'=>'col-md-4', 'div'=> 'col-md-8']) }}
                            {{ $form->groupText('Khẩu phần cho', 'new_video', 'new_video', false, ['label'=>'col-md-4', 'div'=> 'col-md-8']) }}
                            {{ $form->groupText('Youtobe Video', 'new_video', 'new_video', false, ['label'=>'col-md-4', 'div'=> 'col-md-8']) }}
                        </section>
                        <section>
                            <h4 class="text-title">Seo Google</h4>
                            <hr>
                            {{ $form->groupText('Meta title', 'new_meta_title', 'new_meta_title', true, ['label'=> '', 'div' => '', 'placeholder="Tiêu đề trên google"']) }}
                            {{ $form->groupTextArea('Meta keyword', 'new_meta_keyword', 'new_meta_keyword', true, ['label'=> '', 'div' => '', 'placeholder="Keyword cho google "']) }}
                            {{ $form->groupTextArea('Meta description', 'new_meta_description', 'new_meta_description', true, ['label'=> '', 'div' => '', 'placeholder="Description cho google"']) }}
                        </section>
                        <section>
                            <h4 class="text-title">Tag bài viết & Trạng thái</h4>
                            <hr>
                            {{ $form->groupText('Tags', 'new_tag', 'tags', false, ['label'=> '', 'div' => 'group-tags']) }}
                            <input type="hidden" name="tap_temp_key" id="tap_temp_key" value="{{ md5(time() . "friendcook") }}">

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
                            <div class="form-group {{ has_error($errors, 'new_cate_id') }}">
                                <label class="control-label">Danh mục {!! label_danger() !!} </label>
                                <?php $separator = ""; ?>
                                <select name="new_cate_id" id="new_cate_id" class="form-control input-sm">
                                    <option value="">-- Chọn danh mục --</option>
                                    @foreach($categories as $item)
                                    <option value="{{ $item['cate_id'] }}">
                                        <?php if (isset($v['level'])) for($i=0; $i < $v["level"];$i++) $separator .="---"; ?>
                                        {{ $separator . $item['cate_name'] }}
                                    </option>
                                    @endforeach
                                </select>
                                {!! get_error($errors, 'new_cate_id') !!}
                            </div>
                            {{ $form->groupText('Tên món ăn', 'new_title', 'new_title', true, ['label'=> '', 'div' => 'col-md-12']) }}
                            {{ $form->groupTextArea('Giới thiệu món ăn', 'new_description', 'new_description', true, ['label'=> '', 'div' => 'col-md-12']) }}
                        </section>

                        <section id="ingredient">
                            <h4 class="text-title">Nguyên liệu <small class="text-muted">(Thông tin bắt buộc)</small></h4>
                            <hr>
                            <div class="form-group {{ has_error($errors, 'new_ingredient') }}">
                                <label class="control-label">Chuẩn bị nguyên liệu{!! label_danger() !!}</label>
                                <div class="col-md-12">
                                    <textarea name="new_ingredient" id="new_ingredient" class="form-control"  rows="6" placeholder="Đặt mỗi nguyên liệu trên một dòng"></textarea>
                                    {!! get_error($errors, 'new_ingredient') !!}
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
                <div class=form-group">
                    <div class="input col-md-6 col-md-offset-5">
                        <button type="submit" class="btn btn-sm btn-info"><i class="icon-check"></i> Save</button>
                        <button type="reset" class="btn btn-sm btn-info"><i class="icon-refresh"></i> Reset</button>
                    </div>
                    <div class="clearfix"></div>
                </div>
                {{ $form->closeForm() }}
            </div>
        </div>
    </div>
@stop
@section('js')
    <script src="{{ asset('backend/js/pages/component_new.js') }}"></script>
    <script src="{{ asset('backend/js/pages/component_tag.js') }}"></script>
@stop