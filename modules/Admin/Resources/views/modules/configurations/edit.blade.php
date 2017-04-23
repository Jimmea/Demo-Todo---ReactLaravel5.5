@extends('admin::layouts.master_tab')
@section('content')
    {{--{!! bread_crumb([--}}
        {{--'Edit configuration'--}}
        {{--])--}}
    {{--!!}--}}
    <div class="row">
        <div class="col-md-12">
            <div class="white-box">
                {!! box_title('Edit configuration') !!}
                <?php $form = new Form($errors, $configuration); ?>
                {!! $form->beginForm(['admincpp.postEditConfiguration', 1]) !!}
                
                    {!! ul_tab_begin() !!}
                        {!! li_tab(['id'=> 'general', 'title'=> 'Thông tin cơ bản (*)'], true) !!}
                        {!! li_tab(['id'=> 'seo', 'title'=> 'SEO (*)']) !!}
                        {!! li_tab(['id'=> 'contact', 'title'=> 'Thông tin liên hệ']) !!}
                        {!! li_tab(['id'=> 'setting', 'title'=> 'Setting']) !!}
                        {!! li_tab(['id'=> 'supportcode', 'title'=> 'Support code']) !!}
                    {!! ul_tab_close() !!}

                    <div class="tab-content">

                        <div role="tabpanel" class="tab-pane fade in active" id="general">
                            {!! $form->groupText('Tiêu đề website', 'con_site_title', 'con_site_title', true) !!}
                            {!! $form->groupFile('Favicon', 'con_favicon', 'con_favicon') !!}
                            {!! $form->groupFile('Logo', 'con_logo', 'con_logo') !!}
                            {!! $form->groupText('Địa chỉ website', 'con_address', 'con_address') !!}
                            {!! $form->groupFile('Background image', 'con_background_img', 'con_background_img') !!}
                            {!! $form->groupText('Background color', 'con_background_color', 'input_color', false, ['input'=>'colorpicker']) !!}
                        </div>

                        <div role="tabpanel" class="tab-pane fade" id="seo">
                            {!! $form->groupText('Meta title', 'con_meta_title', 'con_meta_title', true) !!}
                            {!! $form->groupTextArea('Meta keyword', 'con_meta_keyword', 'con_meta_keyword', true) !!}
                            {!! $form->groupTextArea('Meta description', 'con_meta_description', 'con_meta_description', true) !!}
                        </div>

                        <div role="tabpanel" class="tab-pane fade" id="contact">
                            {!! $form->groupText('Support online', 'con_support_online', 'con_support_online') !!}
                            {!! $form->groupText('Hot line', 'con_hotline', 'con_hotline') !!}
                            {!! $form->groupText('Gmail', 'con_gmail', 'con_gmail') !!}
                            {!! $form->groupText('Facebook', 'con_facebook', 'con_facebook') !!}
                            {!! $form->groupText('Google', 'con_google', 'con_google') !!}
                            {!! $form->groupText('Instagram', 'con_instagram', 'con_instagram') !!}
                            {!! $form->groupText('Pinterest', 'con_pinterest', 'con_pinterest') !!}
                        </div>

                        <div role="tabpanel" class="tab-pane fade" id="setting">
                            {!! $form->groupSelect('Limit/page', 'con_limit', 'con_limit', false, [20, 30,40, 50]) !!}
                        </div>

                        <div role="tabpanel" class="tab-pane fade" id="supportcode">
                            {!! $form->groupTextArea('Google analytics', 'con_code_analytics', 'con_code_analytics') !!}
                            {!! $form->groupTextArea('Facebook social', 'con_code_facebook', 'con_code_facebook') !!}
                            {{--{!! $form->groupTextArea('Code support 1', 'con_code_param1', 'con_code_param1') !!}--}}
                            {{--{!! $form->groupTextArea('Code support 1', 'con_code_param2', 'con_code_param2') !!}--}}
                        </div>

                    </div>
                    {!! $form->groupSubmitReset() !!}
                    <div class="clearfix"></div>
                {!! $form->closeForm() !!}
            </div>
        </div>
    </div>
@stop