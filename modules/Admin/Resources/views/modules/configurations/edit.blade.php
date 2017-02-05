@extends('admin::layouts.master')
@section('title', 'Setting configuration')
@section('content')
    {!! bread_crumb(['Edit configuration']) !!}
    <div class="row">
        <div class="col-md-12">
            <div class="white-box">
                {!! box_title('Edit configuration') !!} {!! note_required() !!}

                <form class="form-horizontal" action="">
                    <ul class="nav customtab nav-tabs" role="tablist">

                        <li role="presentation" class="active">
                            <a href="#general" aria-controls="general" class="text-uppercase"
                               role="tab" data-toggle="tab" aria-expanded="true">
                                <span class="visible-xs">
                                    <i class="icon-home"></i></span>
                                <span class="hidden-xs"> Thông tin cơ bản</span>
                            </a>
                        </li>

                        <li role="presentation">
                            <a href="#seo" aria-controls="general" class="text-uppercase"
                               role="tab" data-toggle="tab" aria-expanded="true">
                                <span class="visible-xs">
                                    <i class="icon-home"></i></span>
                                <span class="hidden-xs"> Thông tin seo</span>
                            </a>
                        </li>

                        <li role="presentation">
                            <a href="#contact" aria-controls="general" class="text-uppercase"
                               role="tab" data-toggle="tab" aria-expanded="true">
                                <span class="visible-xs">
                                    <i class="icon-home"></i></span>
                                <span class="hidden-xs"> Thông tin liên hệ</span>
                            </a>
                        </li>

                        <li role="presentation">
                            <a href="#code_support" aria-controls="code_support" class="text-uppercase"
                               role="tab" data-toggle="tab" aria-expanded="true">
                                <span class="visible-xs">
                                    <i class="icon-home"></i></span>
                                <span class="hidden-xs"> Code hỗ trợ</span>
                            </a>
                        </li>

                        <li role="presentation">
                            <a href="#support_show" aria-controls="support_show" class="text-uppercase"
                               role="tab" data-toggle="tab" aria-expanded="true">
                                <span class="visible-xs">
                                    <i class="icon-home"></i></span>
                                <span class="hidden-xs"> Hỗ trợ hiển thị</span>
                            </a>
                        </li>

                    </ul>

                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="general">

                            <div class="form-group">
                                <label>Tiêu đề website <span class="text-danger">(*)</span> </label>
                                <input type="text" class="form-control" name="con_site_title" size="100">
                            </div>

                            <div class="form-group image-group">
                                <label>Favicon <span class="text-danger">(*)</span> <span class="icon-eye hide"></span></label>
                                <div class="input-group">
                                    <input type="text"  class="form-control" class="form-control" name="con_favicon">
                                    {!! box_upload() !!}
                                </div>
                            </div>

                            <div class="form-group image-group">
                                <label>Logo <span class="text-danger">(*)</span><span class="icon-eye hide"></span></label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="con_logo">
                                    {!! box_upload() !!}
                                </div>
                            </div>

                            <div class="form-group image-group">
                                <label>Background images</label> <span class="icon-eye hide"></span>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="con_background_img">
                                    {!! box_upload() !!}
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Background color</label>
                                <input type="text" class="form-control" name="con_background_color">
                            </div>

                            <div class="form-group">
                                <label>Địa chỉ website</label>
                                <input type="text" class="form-control" name="con_address">
                            </div>

                            <div class="clearfix"></div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="seo">

                            <div class="form-group">
                                <label>Meta title <span class="text-danger">(*)</span></label>
                                <input type="text" class="form-control" name="con_meta_title">
                            </div>

                            <div class="form-group">
                                <label>Meta keyword <span class="text-danger">(*)</span></label>
                                <textarea name="con_meta_keyword" class="form-control" cols="30" rows="5"></textarea>
                            </div>

                            <div class="form-group">
                                <label>Meta description <span class="text-danger">(*)</span></label>
                                <textarea name="con_meta_description" class="form-control" cols="30" rows="5"></textarea>
                            </div>

                            <div class="clearfix"></div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="contact">

                            <div class="form-group">
                                <label>Support online</label>
                                <input type="text" class="form-control" name="con_support_online">
                            </div>

                            <div class="form-group">
                                <label>Hotline</label>
                                <input type="text" class="form-control" name="con_hotline">
                            </div>

                            <div class="form-group">
                                <label>Gmail</label>
                                <input type="text" class="form-control" name="con_gmail">
                            </div>

                            <div class="form-group">
                                <label>Facebook</label>
                                <input type="text" class="form-control" name="con_facebook">
                            </div>

                            <div class="form-group">
                                <label>Google</label>
                                <input type="text" class="form-control" name="con_google">
                            </div>

                            <div class="form-group">
                                <label>Instagram</label>
                                <input type="text" class="form-control" name="con_instagram">
                            </div>

                            <div class="form-group">
                                <label>Pinterest</label>
                                <input type="text" class="form-control" name="con_pinterest">
                            </div>

                            <div class="clearfix"></div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="code_support">

                            <div class="form-group">
                                <label>Code google analytics <span class="text-danger">(*)</span></label>
                                <textarea name="con_code_ga" class="form-control" cols="30" rows="3"></textarea>
                            </div>

                            <div class="form-group">
                                <label>Code chat</label>
                                <textarea name="con_code_chat" class="form-control" cols="30" rows="3"></textarea>
                            </div>

                            <div class="form-group">
                                <label>Code support 1</label>
                                <textarea name="con_code_param1" class="form-control" cols="30" rows="3"></textarea>
                            </div>

                            <div class="form-group">
                                <label>Code support 2</label>
                                <textarea name="con_code_param2" class="form-control" cols="30" rows="3"></textarea>
                            </div>

                            {{--<div class="form-group">--}}
                                {{--<label>Code support 3</label>--}}
                                {{--<textarea name="con_code_param3" class="form-control" cols="30" rows="3"></textarea>--}}
                            {{--</div>--}}

                            {{--<div class="form-group">--}}
                                {{--<label>Code support 4</label>--}}
                                {{--<textarea name="con_code_param4" class="form-control" cols="30" rows="3"></textarea>--}}
                            {{--</div>--}}

                            {{--<div class="form-group">--}}
                                {{--<label>Code support 5</label>--}}
                                {{--<textarea name="con_code_param5" class="form-control" cols="30" rows="3"></textarea>--}}
                            {{--</div>--}}
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="support_show">

                            <div class="form-group">
                                <label>Giới hạn bản ghi / trang</label>
                                <input type="number" class="form-control" name="con_limit" value="20">
                            </div>

                        </div>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-info btn-sm"><i class="icon-check"></i> Save</button>
                        <button type="reset" class="btn btn-info btn-sm"><i class="icon-refresh"></i> Reset</button>
                    </div>

                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>
@stop