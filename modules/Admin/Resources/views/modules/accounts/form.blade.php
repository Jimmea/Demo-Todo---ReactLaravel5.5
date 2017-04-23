@php $form = new Form($errors, $admin) @endphp
{{ $form->beginForm([$routeName,$routeParam]) }}
    <h5 class="box-title">Thông tin cơ bản & Quyền sử dụng</h5>
        <div role="tabpanel" class="tab-pane" id="general">
            @if($admin)
                <div class="form-group">
                    <label class="control-label col-md-2">Login name</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" readonly value="{{ $admin->adm_loginname }}">
                    </div>
                    <input type="hidden" name="adm_loginname" value="{{ $admin->adm_loginname }}">
                </div>
            @else
                {!! $form->groupText('Login Name', 'adm_loginname', 'adm_loginname', true) !!}    
            @endif
            {!! $form->groupText('Full Name', 'adm_name', 'adm_name', true) !!}
            {!! $form->groupText('Phone', 'adm_phone', 'adm_phone') !!}
            {!! $form->groupText('Email', 'adm_email', 'adm_email', true) !!}
            @if(!$admin)
                 {!! $form->groupText('Password', 'adm_password', 'adm_password') !!}
            @endif
            {!! $form->groupFile('Hình ảnh', 'adm_picture', 'adm_picture') !!}
            {!! $form->groupTextArea('Address', 'adm_address', 'adm_address') !!}
        </div>
        <div role="tabpanel" class="tab-pane" id="permission">
            <div class="col-md-5 col-md-offset-2">
                @if($errors->has('mod_id'))
                    <div class="has-error">
                        <span class="help-block">{{ $errors->first('mod_id') }}</span>
                    </div>
                @endif
                <table class="table table-stripped" id="tableModule">
                    <thead>
                        <tr bgcolor="#ECF4FA">
                            <th width="5%" class="text-center bold">{{ trans('admin::account.module.select') }}</th>
                            <th width="8%" class="bold">{{ trans('admin::account.module.module') }}</th>
                            <th width="3%" class="text-center bold">{{ trans('admin::account.module.add') }}</th>
                            <th width="3%" class="text-center bold">{{ trans('admin::account.module.edit') }}</th>
                            <th width="3%" class="text-center bold">{{ trans('admin::account.module.delete') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($modules)
                            @foreach($modules as $module)
                            <?php $modId = $module->mod_id; ?>
                                <tr>
                                    <td align="center"><input type="checkbox" {{ (strpos($accessModule, "[" . $modId . "]") !== false) ? "checked=checked" : '' }} name="mod_id[]" value="{{ $modId }}"></td>
                                    <td class="textBold">{{ $module->mod_name }}</td>
                                    <td align="center"><input type="checkbox" {{ (isset($arrayActionAccess[$modId]) && $arrayActionAccess[$modId][0]==1) ? 'checked=checked' : '' }} name="adu_add{{ $modId }}" id="adu_add{{ $modId }}" value="1"></td>
                                    <td align="center"><input type="checkbox" {{ (isset($arrayActionAccess[$modId]) && $arrayActionAccess[$modId][1]==1) ? 'checked=checked' : '' }} name="adu_edit{{ $modId }}" id="adu_add{{ $modId }}" value="1"></td>
                                    <td align="center"><input type="checkbox" {{ (isset($arrayActionAccess[$modId]) && $arrayActionAccess[$modId][2]==1) ? 'checked=checked' : '' }} name="adu_delete{{ $modId }}" id="adu_add{{ $modId }}" value="1"></td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
        {{--<div role="tabpanel" class="tab-pane fade" id="category">--}}
            {{--<div class="col-md-3 col-md-offset-1">--}}
                {{--<table class="table table-stripped" id="tableCategory">--}}
                    {{--<thead>--}}
                    {{--<tr bgcolor="#ECF4FA">--}}
                        {{--<th width="5%" class="text-center bold">--}}
                            {{--<input type="checkbox" name="adm_all_category" onclick="checkshowlistcat()" id="adm_all_category" checked="checked" value="1">--}}
                        {{--</th>--}}
                        {{--<th width="8%" class="bold">{{ trans('admin::account.module.module') }}</th>--}}
                    {{--</tr>--}}
                    {{--</thead>--}}
                    {{--<tbody id="showlistcategory" style="display:none">--}}
                    {{--@if($categories)--}}
                        {{--@foreach($categories as $category)--}}
                            {{--<tr>--}}
                                {{--<td align="center"><input type="checkbox" name="arelate_select[]" value="{{ $category->cate_id }}"></td>--}}
                                {{--<td class="textBold">{{ $category->cate_name }}</td>--}}
                            {{--</tr>--}}
                        {{--@endforeach--}}
                    {{--@endif--}}
                    {{--</tbody>--}}
                {{--</table>--}}
            {{--</div>--}}
        {{--</div>--}}
        <div class="clearfix"></div>
    {!! $form->groupSubmitReset() !!}
{!! $form->closeForm() !!}
<script language="javascript">
    function checkshowlistcat(){
        if(document.getElementById("adm_all_category").checked == true){
            document.getElementById("showlistcategory").style.display = 'none';
        }else{
            document.getElementById("showlistcategory").style.display = '';
        }
    }
</script>