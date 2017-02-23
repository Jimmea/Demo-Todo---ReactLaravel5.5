@extends('admin::layouts.master')
@section('content')
    {!! bread_crumb([trans('admin::listing.title') ]) !!}
    <div class="row">
        <div class="col-md-12">
            <div class="white-box padd-0">
                <div class="white-box-header padd-10">
                    {!! header_title_action(trans('admin::listing.title'),  'admincpp.getAddBanner') !!}
                    <div class="header_search clearleft search-box">
                        <form action="" class="form-inline">
                            <label for="">
                                ID
                                <input type="number" class="input-sm form-control" name="ban_id">
                            </label>
                            <label for="">
                                Tên banner
                                <input type="text" class="form-control inpt-sm" name="ban_name">
                            </label>
                            <label for="">
                                <button type="submit" class="btn btn-info btn-sm"><i class="icon-magnifier"></i> Search</button>
                            </label>
                        </form>
                    </div>
                </div>
                <div class="white-box-content">
                    <table class="table table-bordered table-hover" id="dataTableList">
                    	<thead>
                            <tr bgcolor="#428BCA" style="color: #fff">
                                <td width="4%" align="center" class="bold">Stt</td>
                                <td width="4%" align="center"><input type="checkbox"></td>
                                <td width="10%" align="center" class="bold">Picture</td>
                                <td class="bold">Tiêu đề</td>
                                <td class="bold">Link</td>
                                <td class="bold">Cửa sổ</td>
                                <td class="bold">Vị trí</td>
                                <td class="bold">Hoạt động</td>
                                <td width="4%" align="center" class="bold">Status</td>
                                <td colspan="2" width="6%" class="text-center bold">Action</td>
                            </tr>
                    	</thead>
                    	<tbody id="tableCOntent">
                    		<tr>
                                <td width="3%" align="center" class="bold">Stt</td>
                                <td><input type="checkbox"></td>
                                <td class="bold" nowrap=""><img src="anh.jpg" alt="anh"></td>
                                <td class="bold">Email</td>
                                <td class="bold">Modules</td>
                                <td class="bold">Modules</td>
                                <td class="bold">Modules</td>
                                <td class="bold">20/11 - 22/22/3026</td>
                                <td class="bold">Modules</td>
                                <td class="bold">Modules</td>
                    		</tr>
                    	</tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop