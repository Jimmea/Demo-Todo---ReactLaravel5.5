<?php $form = new Form($errors, $admin); ?>
{!! $form->beginForm([$routeName,$routeParam]) !!}
    {!! ul_tab_begin() !!}
        {!! li_tab(['id'=> 'general', 'title'=> 'Thông tin cơ bản'], true) !!}
        {!! li_tab(['id'=> 'permission', 'title'=> 'Quyền chức năng']) !!}
    {!! ul_tab_close() !!}

    <div class="tab-content">
        <div role="tabpanel" class="tab-pane fade in active" id="general">
            {!! $form->groupText('Login Name', 'adm_loginname', 'adm_loginname', true) !!}
            {!! $form->groupText('Full Name', 'adm_name', 'adm_name', true) !!}
            {!! $form->groupText('Phone', 'adm_phone', 'adm_phone', true) !!}
            {!! $form->groupText('Email', 'adm_email', 'adm_email', true) !!}
            {!! $form->groupText('Password', 'adm_password', 'adm_password') !!}
            {!! $form->groupFile('Hình ảnh', 'adm_picture', 'adm_picture') !!}
            {!! $form->groupTextArea('Address', 'adm_address', 'adm_address') !!}
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
    {!! $form->groupSubmitReset() !!}
{!! $form->closeForm() !!}