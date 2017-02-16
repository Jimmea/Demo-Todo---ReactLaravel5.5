@extends('admin::layouts.master')
@section('content')
    {!! bread_crumb([
            'admincpp.getListMenu'=> trans('admin::menu.list.title')
        ])
    !!}
    <div class="row">
        <div class="col-md-12">
            <div class="white-box">
                {!! box_title(trans('admin::menu.list.title'), false) !!}
                <div class="search-box">
                    <form action="{{ route('admincpp.getListCategory') }}" class="form-inline">
                        <label for="">
                            Tiêu đề
                            <input type="text" name="mnu_name" class="form-control input-sm">
                        </label>
                        <label for="">
                            Vị trí
                            <select name="mnu_position" id="mnu_position" class="form-control input-sm">
                                <option value="">Tìm vị trí</option>
                            </select>
                        </label>
                        <label>
                            <button type="submit" class="btn btn-info btn-sm"><i class="icon-magnifier"></i> Search</button>
                        </label>
                    </form>
                </div>
            </div>
            <div class="white-box padd-0">
                <form action="{{ route('admincpp.postProcessQuickCategory') }}" id="formTable">
                    <table  class="table table-bordered table-stripped" id="dataTableList">
                        <thead>
                            <tr bgcolor="#428BCA" style="color: #fff">
                                <td width="5%" align="center" class="bold">Stt</td>
                                <td width="5%" align="center" class="bold">
                                    <input type="checkbox" class="check-all" id="check_all_table" data-set="#dataTableList .check-one" name="check_all">
                                </td>
                                <td class="bold">Tiêu đề</td>
                                <td class="bold">Đi tới</td>
                                <td width="7%" class="bold">Vị trí</td>
                                <td width="7%" class="bold">Thứ tự</td>
                                <td width="7%" align="center" class="bold">Cửa sổ</td>
                                <td width="4%" align="center" class="bold">Status</td>
                                <td width="4%" align="center" class="bold">Copy</td>
                                <td width="4%" align="center" class="bold">Edit</td>
                                <td width="4%" align="center" class="bold">Delete</td>
                            </tr>
                        </thead>
                        <?php $dataGrid = new DataGrid(); ?>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td align="center">1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>
                                    <a href="" class="fa fa-files-o button_copy btn btn-sm btn-info"></a>
                                </td>
                                <td>
                                    {!! $dataGrid->makeEditButton(['admincpp.getEditMenu',1]) !!}
                                </td>
                                <td>
                                    {!! $dataGrid->makeDeleteButton(['admincpp.getDeleteMenu',1]) !!}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </form>
            </div>
        </div>
    </div
@stop