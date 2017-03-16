@extends('admin::layouts.master')
@section('content')
{!! bread_crumb([
        'List tag'
    ])
!!}
@php
    $dataGrid = new DataGrid();
    $stt      = $tags->perPage()*($tags->currentPage() - 1);
@endphp
<div class="row">
    <div class="col-md-12">
        <div class="white-box padd-0">
            <div class="white-box-header padd-10">
                {{ header_title_action('List tag', 'admincpp.getAddTag') }}
                {{ $dataGrid->beginFormSearch() }}
                {{ $dataGrid->labelSearch('Danh mục', 'tag_category_id', ARR, $categories, ['cate_id', 'cate_name']) }}
                {{ $dataGrid->labelSearch('Tag name', 'tag_name') }}
                {{ $dataGrid->labelSearch('Ngày tạo', 'created_at', 'date') }}
                {{ $dataGrid->closeForm() }}
            </div>
            <div class="white-box-content">
                <table class="table" id="dataTableList">
                    <thead>
                        <tr>
                            {!! $dataGrid->makeCheckAllRadio() !!}
                            <td width="4%" align="center" class="bold">Stt</td>
                            <td class="bold">Tên keyword</td>
                            <td width="10%">Tên danh mục</td>
                            <td width="10%" align="center">Count hit</td>
                            <td width="15%" class="bold">Ngày tạo</td>
                            <td width="15%" class="bold">Ngày cập nhật</td>
                            <td width="6%" align="center" class="bold">Admin</td>
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
                            <tr id="tr_{{ $item->tag_id }}">
                                {!! $dataGrid->makeCheckRadio() !!}
                                <td align="center">{{ $stt }}</td>
                                <td>{{ $item->tag_name }}</td>
                                <td>{{ $item->category->cate_name or 'NULL' }}</td>
                                <td width="6%" align="center">{{ $item->tag_count }}</td>
                                <td>{{ $item->created_at }}</td>
                                <td>{{ $item->updated_at }}</td>
                                <td align="center">{{ $item->admins->adm_name }}</td>
                                {!! $dataGrid->makeCheckButton('admincpp.getListTag', ['tag_active', $item]) !!}
                                {!! $dataGrid->makeEditButton('admincpp.getEditTag') !!}
                                {!! $dataGrid->makeDeleteButton('admincpp.getDeleteTag') !!}
                            </tr>
                        @endforeach
                    </tbody>
                    {!! $dataGrid->makeUrlDelete('admincpp.getDeleteTag') !!}
                    {!! $dataGrid->getTemplateFooter($tags) !!}
                </table>
            </div>
        </div>
    </div>
</div>
@stop