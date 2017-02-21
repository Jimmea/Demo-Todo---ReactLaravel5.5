@inject('adminRepository', 'App\Models\Admins\AdminRepository')
@extends('admin::layouts.master')
@section('content')
    {!! bread_crumb([
            'List account'
        ])
    !!}
    <div class="row">
        <div class="col-md-12">
            <div class="white-box padd-0">
                <div class="white-box-header padd-10">
                    {!! header_title_action('List account', 'admincpp.getAddAccount') !!}
                    <div class="header-search clearleft search-box">
                        <form action="" class="form-inline">
                            <input type="hidden" name="page" value="{{ get_value('page','int', 'GET', 1) }}">
                            <label for="login_name">
                                Login name
                                <input type="text" class="form-control" name="adm_loginname" value="{{ get_value('adm_loginname', 'str', 'GET', '') }}">
                            </label>
                            <label for="email">
                                Email
                                <input type="text" class="form-control" name="adm_email" value="{{ get_value('adm_email', 'str', 'GET', '') }}">
                            </label>
                            <label>
                                <button type="submit" class="btn btn-info btn-sm"><i class="icon-magnifier"></i> Search</button>
                            </label>
                        </form>
                    </div>
                </div>
                <div class="white-box-content">
                    <form action="{{ route('admincpp.getProcessQuickAccount') }}" id="formTable">
                        <table class="table table-bordered table-stripped" id="dataTableList">
                            <thead>
                                <tr bgcolor="#428BCA" style="color: #fff">
                                    <td width="3%" align="center" class="bold">Stt</td>
                                    <td width="2%" align="center" class="bold">
                                        <input type="checkbox" class="check-all" id="check_all_table" data-set="#dataTableList .check-one" name="check_all">
                                    </td>
                                    <td class="bold">Login name</td>
                                    <td class="bold">Full name</td>
                                    <td class="bold">Email</td>
                                    <td class="bold">Modules</td>
                                    @if(get_session('isadmin'))
                                    <td width="10%" align="center" class="bold">Face login</td>
                                    @endif
                                    <td width="4%" align="center" class="bold">Status</td>
                                    <td colspan="2" width="6%" class="text-center bold">Action</td>
                                </tr>
                            </thead>
                            <tbody id="tableContent">
                            <?php
                                $stt        = $admins->perPage()*($admins->currentPage()-1) + 1;
                                $dataGrid   = new DataGrid();
                                $access     = '';
                            ?>
                            @forelse($admins as $key => $value)
                                <tr bgcolor="" id="tr_{{ $value->adm_id }}">
                                    <td align="center">{{ $stt ++ }}</td>
                                    <td align="center">
                                        <input type="checkbox" class="check-one" name="check-one" value="{{ $value->adm_id }}">
                                    </td>
                                    <td>{{ $value->adm_loginname }}</td>
                                    <td>{{ $value->adm_name }}</td>
                                    <td>{{ $value->adm_email }}</td>
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
                                    @if(get_session('isadmin'))
                                    <td align="center"><a href="{{ route('admincpp.getFaceLogin', $value->adm_id) }}" class="btn btn-xs btn-success">Login</a></td>
                                    @endif
                                    <td align="center">
                                        @if($value->adm_id != 1)
                                        {!! $dataGrid->makeCheckButton($value, 'adm_active') !!}
                                        @endif
                                    </td>
                                    <td align="center">
                                        {!! $dataGrid->makeEditButton(['admincpp.geteditAccount', $value->adm_id]) !!}
                                    </td>
                                    <td align="center">
                                        @if($value->adm_id != 1)
                                        {!! $dataGrid->makeDeleteButton(['admincpp.getDeleteAccount', $value->adm_id]) !!}
                                        @endif
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td align="center" colspan="10">Not exist data</td>
                                </tr>
                            @endforelse
                            </tbody>
                            {!! $dataGrid->getTemplateFooter($admins) !!}
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop