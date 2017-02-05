{{ csrf_field() }}

{!! ul_tab_begin() !!}
{!! li_tab(['id'=> 'general', 'title'=> 'Thông tin cơ bản'], true) !!}
{!! li_tab(['id'=> 'permission', 'title'=> 'Quyền chức năng']) !!}
{!! ul_tab_close() !!}

<div class="tab-content">
    <div role="tabpanel" class="tab-pane fade in active" id="general">
        {!! form_group('Login name', 'adm_loginname', 'text', true, $errors, $admin) !!}
        {!! form_group('Full name', 'adm_name', 'text', true, $errors, $admin) !!}
        {!! form_group('Phone', 'adm_phone', 'text', true, $errors, $admin) !!}
        {!! form_group('Email', 'adm_email', 'text', true, $errors, $admin) !!}
        {!! form_group('Password', 'adm_password', 'text', true, $errors, $admin) !!}
        {!! form_group('Hình ảnh', 'adm_picture', 'file', false, $errors, $admin) !!}
        {!! form_group('Address', 'adm_address', 'textarea', false, $errors,$admin) !!}
    </div>

    <div role="tabpanel" class="tab-pane fade" id="permission">
        <div class="form-group col-xs-5">
            <table class="table table-stripped">
                <thead>
                    <tr>
                    <th width="10%" class="text-center bold">Select</th>
                    <th width="20%" class="text-center bold">Module</th>
                    <th width="10%" class="text-center bold">Add</th>
                    <th width="10%" class="text-center bold">Edit</th>
                    <th width="10%" class="text-center bold">Delete</th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                    <td align="center"><input type="checkbox" name="mod_id[]" value="1"></td>
                    <td align="center" class="textBold">Liên hệ</td>
                    <td align="center"><input type="checkbox" name="adu_add100" id="adu_add100" value="1"></td>
                    <td align="center"><input type="checkbox" name="adu_add100" id="adu_add100" value="1"></td>
                    <td align="center"><input type="checkbox" name="adu_add100" id="adu_add100" value="1"></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="clearfix"></div>
</div>