@extends('admin::layouts.master')
@section('content')
    {!! bread_crumb([
        'List Module'
    ]) !!}
    <div class="row">
        <div class="col-md-12">
            <div class="white-box padd-0">
                <div class="white-box-header padd-10">
                    {!! header_title_action('Danh sách modules', 'admincpp.getAddConfigAdmin') !!}
                    <div class="header-search clearleft search-box">
                        <form action="{{ $_SERVER['REDIRECT_URL'] }}" class="form-inline">
                            <input type="hidden" name="page" value="{{ get_value('page', 'int', 'GET', 1) }}">
                            <label>
                                Tên module <input type="text" class="form-control" name="mod_name" value="{{ get_value('mod_name', 'str', 'GET', '') }}">
                            </label>
                            <label>
                                <button type="submit" class="btn btn-info btn-sm"><i class="icon-magnifier"></i> Search</button>
                            </label>
                        </form>
                    </div>
                </div>
                <div class="white-box-content">
                    <?php $dataGrid = new DataGrid(); $stt = 1; ?>
                        <table class="table table-bordered table-stripped" id="dataTableList">
                            <thead>
                                <tr bgcolor="#428BCA" style="color: #fff">
                                    <td align="center" width="3%">TT</td>
                                    <td align="center" width="3%">ID</td>
                                    <td>Tên module</td>
                                    <td>Tiêu đề</td>
                                    <td>Tên router</td>
                                    <td class="text-center">Action</td>
                                </tr>
                            </thead>
                            <tbody id="tableContent">
                                @foreach($modules as $value)
                                <?php $dataGrid->setPrimaryKey($value->mod_id) ?>
                                <tr id="tr_{{ $value->mod_id }}">
                                    <td>{{ $stt++ }}</td>
                                    <td align="center">{{ $value->mod_id }}</td>
                                    <td>{{ $value->mod_name }}</td>
                                    <td>{{ $value->mod_listname }}</td>
                                    <td>{{ $value->mod_listrouter }}</td>
                                    {!! $dataGrid->makeEditButton('admincpp.getEditConfigAdmin') !!}
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>
@stop