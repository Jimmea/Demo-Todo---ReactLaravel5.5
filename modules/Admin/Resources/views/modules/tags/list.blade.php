@extends('admin::layouts.master')
@section('content')
{!! bread_crumb([
        'List tag'
    ])
!!}
<div class="row">
    <div class="col-md-12">
        <div class="white-box padd-0">
            <div class="white-box-header padd-10">
                {!! header_title_action('List tag', 'admincpp.getAddTag') !!}
                <div class="header-search clearleft search-box">
                    <form action="" class="form-inline">
                        <label for="login_name">
                            Tag name
                            <input type="text" class="form-control" name="tag_name" value="{{ get_value('tag_name', 'str', 'GET', '') }}">
                        </label>
                        <label for="login_name">
                            Ngày tạo
                            <input type="date" class="form-control" name="created_at" value="{{ get_value('created_at', 'str', 'GET', '') }}">
                        </label>
                        <label>
                            <button type="submit" class="btn btn-info btn-sm"><i class="icon-magnifier"></i> Search</button>
                        </label>
                    </form>
                </div>
            </div>
            <?php
                $dataGrid = new DataGrid();
                $stt      = $tags->perPage()*($tags->currentPage() - 1);
            ?>
            <div class="white-box-content">
                <table class="table tablet table-bordered" id="dataTableList">
                    <thead>
                    <tr>
                        <th width="5%" align="center" class="bold">Stt</th>
                        <td class="bold">Tên</td>
                        <td width="15%" class="bold">Date create</td>
                        <td width="15%" class="bold">Date update</td>
                        <td width="4%" align="center" class="bold">Status</td>
                        <td width="6%" colspan="2" class="text-center bold">Action</td>
                    </tr>
                    </thead>
                    <tbody id="tableContent">
                        @foreach($tags as $item)
                            <?php
                                $stt ++;
                                $dataGrid->setPrimaryKey($item->tag_id);
                            ?>
                            <tr>
                                <td align="center">{{ $stt }}</td>
                                <td>{{ $item->tag_name }}</td>
                                <td>{{ $item->created_at }}</td>
                                <td>{{ $item->updated_at }}</td>
                                {!! $dataGrid->makeCheckButton('admincpp.getListTag', ['tag_active', $item]) !!}
                                {!! $dataGrid->makeEditButton('admincpp.getEditTag') !!}
                                {!! $dataGrid->makeDeleteButton('admincpp.getDeleteTag') !!}
                            </tr>
                        @endforeach
                    </tbody>
                    {!! $dataGrid->getTemplateFooter($tags) !!}
                </table>
            </div>
        </div>
    </div>
</div>
@stop