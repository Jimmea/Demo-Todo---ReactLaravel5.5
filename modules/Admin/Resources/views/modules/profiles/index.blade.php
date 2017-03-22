@extends('admin::layouts.master_tab')
@section('content')
    {{--{!! bread_crumb([--}}
            {{--'Update infomation'--}}
        {{--])--}}
    {{--!!}--}}
    <div class="row">
        <div class="col-md-12">
            <div class="white-box">
                {!! box_title('Thông tin cá nhân', false) !!}
                <?php $form = new Form($errors, $profile); ?>
                {{ $form->beginForm(['admincpp.postProfile',$profile->adm_id]) }}
                    <h5><u>Thông tin cơ bản</u></h5>
                    {{ $form->groupText('Họ và tên', 'adm_name', 'adm_name', true, ['div'=> 'col-md-5']) }}
                    {{ $form->groupText('Địa chỉ', 'adm_address', 'adm_address', false, ['div'=> 'col-md-5']) }}
                    <h5><u>Thông tin cơ bản</u></h5>
                    <div class="form-group">
                        <label class="control-label col-md-2">Password</label>
                        <div class="col-md-5">
                            <input type="text" name="adm_password" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-2">Confirm password</label>
                        <div class="col-md-5">
                            <input type="text" name="adm_confirm_password" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-5 col-md-offset-2">
                            <button type="submit" class="btn btn-sm btn-info"><i class="fa fa-check-circle"></i> Save</button>
                        </div>
                    </div>
                {{ $form->closeForm() }}
            </div>
        </div>
    </div>
@stop

