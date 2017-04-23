@inject('adminRepository', 'App\Models\Admins\AdminRepository')
@extends('admin::layouts.master_tab')
@section('content')
    {{--{!! bread_crumb([--}}
            {{--'List account'--}}
        {{--])--}}
    {{--!!}--}}
    @php
        $dataGrid   = new DataGrid();
        $dataGrid->setDeleteAll(false);
        $stt        = $admins->perPage()*($admins->currentPage()-1) + 1;
        $access     = '';
    @endphp
    <div class="row">
        <div class="col-md-12">
            <div class="white-box padd-0">
                <div class="white-box-header padd-10">
                    {{ header_title_action('List account', 'admincpp.getAddAccount') }}
                    {{ $dataGrid->beginFormSearch('admincpp.getListAccount') }}
                    {{ $dataGrid->labelSearch('Tên đăng nhập', 'adm_loginname') }}
                    {{ $dataGrid->labelSearch('Địa chỉ email', 'adm_email') }}
                    {{ $dataGrid->closeForm() }}
                </div>
<<<<<<< HEAD
                <div class="white-box padd-0">
                    <form action="{{ route('admincpp.getProcessQuickAccount') }}" id="formTable">
                        <table class="table table-bordered table-stripped" id="dataTableList">
                            <thead>
                                <tr bgcolor="#428BCA" style="color: #fff">
                                    <td width="3%" align="center" class="bold">Stt</td>
                                    <td width="2%" align="center" class="bold">
<<<<<<< HEAD
                                        <input type="checkbox" class="icheck check-all" id="check_all_table" data-set="#dataTableList .check-one" name="check_all">
=======
                                        <input type="checkbox" class="check-all" id="check_all_table" data-set="#dataTableList .check-one" name="check_all">
                                    </td>
                                    <td class="bold">Login name</td>
                                    <td class="bold">Full name</td>
                                    <td class="bold">Email</td>
                                    {{--<td class="bold">Module</td>--}}
                                    <td width="7%" align="center" class="bold">Face login</td>
                                    <td width="4%" align="center" class="bold">Status</td>
                                    <td width="4%" align="center" class="bold">Edit</td>
                                    <td width="4%" align="center" class="bold">Delete</td>
                                </tr>
                            </thead>
                            <tbody id="tableContent">
                            <?php
                                $stt        = $admins->perPage()*($admins->currentPage()-1) + 1;
                                $dataGrid   = new DataGrid();
                            ?>
                            @forelse($admins as $key => $value)
=======
                <div class="white-box-content">
                    <table class="table" id="dataTableList">
                        <thead>
                            <tr>
                                <td width="4%" align="center" class="bold">Stt</td>
                                <td class="bold">Login name</td>
                                <td class="bold">Full name</td>
                                <td class="bold">Email</td>
                                <td class="bold">Right Modules</td>
                                <td width="8%" align="center">Người tạo</td>
                                @if(get_session('isadmin'))
                                <td class="bold" align="center">Right website</td>
                                @endif
                                @if(get_session('isadmin'))
                                <td width="10%" align="center" class="bold">Face login</td>
                                @endif
                                <td width="4%" align="center" class="bold">Status</td>
                                <td colspan="2" width="6%" class="text-center bold">Action</td>
                            </tr>
                        </thead>
                        <tbody id="tableContent">
                            @foreach($admins as $key => $value)
                                <?php $dataGrid->setPrimaryKey($value['adm_id']) ;?>
>>>>>>> 66e958c9a1a8727b9a81298d15ba2f0c8de38a1c
                                <tr bgcolor="" id="tr_{{ $value->adm_id }}">
                                    <td align="center">{{ $stt ++ }}</td>
                                    <td>{{ $value->adm_loginname }}</td>
                                    <td>{{ $value->adm_name }}</td>
                                    <td>{{ $value->adm_email }}</td>
<<<<<<< HEAD
                                    {{--<td>...</td>--}}
                                    <td align="center"><a href="#" class="btn btn-xs btn-success">Login</a></td>
                                    <td align="center">
                                        {!! $dataGrid->makeCheckButton($value, 'adm_active') !!}
                                    </td>
                                    <td align="center">
                                        {!! $dataGrid->makeEditButton(['admincpp.geteditAccount', $value->adm_id]) !!}
                                    </td>
                                    <td align="center">
                                        {!! $dataGrid->makeDeleteButton(['admincpp.getDeleteAccount', $value->adm_id]) !!}
>>>>>>> origin/dev
                                    </td>
                                    <td class="bold">Login name</td>
                                    <td class="bold">Full name</td>
                                    <td class="bold">Email</td>
                                    <td class="bold">Module</td>
                                    <td width="7%" align="center" class="bold">Face login</td>
                                    <td width="4%" align="center" class="bold">Trạng thái</td>
                                    <td width="4%" align="center" class="bold">Edit</td>
                                    <td width="4%" align="center" class="bold">Delete</td>
                                </tr>
<<<<<<< HEAD
                            </thead>
                            <tbody id="tableContent">
                                <?php $stt = $admins->perPage()*($admins->currentPage()-1) + 1;  ?>
                                @forelse($admins as $key => $value)
                                    <tr bgcolor="">
                                        <td align="center">{{ $stt ++ }}</td>
                                        <td align="center">
                                            <input type="checkbox" class="icheck check-one" name="check-one" value="{{ $value->adm_id }}">
                                        </td>
                                        <td>{{ $value->adm_loginname }}</td>
                                        <td>{{ $value->adm_name }}</td>
                                        <td>{{ $value->adm_email }}</td>
                                        <td>...</td>
                                        <td align="center"><a href="#" class="btn btn-xs btn-success">Login</a></td>
                                        <td align="center">
                                            <input type="checkbox" data-action="changeStatus" class="icheck execute_form" name="adm_status" {{ $value->adm_active ?  'checked' : '' }}
                                        </td>
                                        <td align="center">
                                            {!! (new DataGrid())->makeEditButton(['admincpp.geteditAccount', $value->adm_id]) !!}
                                        </td>
                                        <td align="center">
                                            {!! (new DataGrid())->makeDeleteButton(['admincpp.getDeleteAccount', $value->adm_id]) !!}
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td align="center" colspan="10">Not exist data</td>
                                    </tr>
                                @endforelse
                            </tbody>
                            {!! (new DataGrid())->getTemplateFooter($admins) !!}
=======
                            @empty
                                <tr>
                                    <td align="center" colspan="10">Not exist data</td>
                                </tr>
                            @endforelse
                            </tbody>
                            {!! $dataGrid->getTemplateFooter($admins) !!}
>>>>>>> origin/dev
                        </table>
                    </form>
=======
                                    <td>
                                        @if($value->adm_id == 1)
                                            All permission website
                                        @else
                                            @foreach($adminRepository->findAccessById($value->adm_id) as $rowAccess)
                                                <?php $access .= $rowAccess['mod_name'] . ", "; ?>
                                            @endforeach
                                            {{ rtrim($access, ', ') }}
                                            <?php $access = ''; ?>
                                        @endif
                                    </td>
                                    <td align="center">{{ $value->admins->adm_name }}</td>

                                    @if(get_session('isadmin'))
                                    {!! $dataGrid->makeCheckButton('admincpp.getListAccount', ['adm_isadmin', $value]) !!}
                                    @endif

                                    @if(get_session('isadmin') && $value->adm_id != 1)
                                    <td align="center"><a target="_blank" href="{{ route('admincpp.getFaceLogin', $value->adm_id) }}" class="btn btn-xs btn-success">Login</a></td>
                                    @else
                                        <td align="center">...</td>
                                    @endif

                                    @if($value->adm_id != 1)
                                        {!! $dataGrid->makeCheckButton('admincpp.getListAccount', ['adm_active', $value]) !!}
                                    @else
                                        <td align="center">...</td>
                                    @endif

                                    @if(get_session('adm_id') == 1)
                                    {!! $dataGrid->makeEditButton('admincpp.geteditAccount') !!}
                                    @else
                                        <td></td>
                                    @endif
                                </tr>
                            @endforeach
                        </tbody>
                        {!! $dataGrid->getTemplateFooter($admins) !!}
                    </table>
>>>>>>> 66e958c9a1a8727b9a81298d15ba2f0c8de38a1c
                </div>
            </div>
        </div>
    </div>
@stop