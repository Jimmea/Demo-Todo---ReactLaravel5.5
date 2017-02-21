@extends('admin::layouts.master')
@section('content')
    {!! bread_crumb([
            trans('admin::category.list.title'),
         ])
     !!}
    <div class="row">
        <div class="col-md-12">
            <div id="wrap-table">
                <div class="white-box padd-0">
                    <div class="white-box-header padd-10">
                        <div class="header-title pull-left">
                            {!! box_title(trans('admin::category.list.title'), false) !!}
                        </div>
                        <div class="header-action pull-right">
                            <a href="{{ route('admincpp.getAddCategory') }}" class="btn btn-info btn-sm text-uppercase"><i class="icon-plus"></i> Add new</a>
                        </div>
                        <div class="header-search search-box clearleft">
                            <form action="{{ route('admincpp.getListCategory') }}" class="form-inline">
                                <label for="cate_type">
                                    Type Category
                                    <select name="cate_type" id="cate_type" class="form-control input-sm">
                                        <option value="">Type category</option>
                                        @foreach($typeCategory as $key => $name)
                                            <option {{ selectedCompare('cate_type', $key) }} value="{{ $key }}">{{ $name }}</option>
                                        @endforeach
                                    </select>
                                </label>
                                <label for="">
                                    Order
                                    <select name="cate_sort" id="cate_sort" class="form-control input-sm">
                                        <option value="">-- Select One --</option>
                                        <option {{ selectedCompare('cate_sort', 'asc') }} value="asc">Ascending</option>
                                        <option {{ selectedCompare('cate_sort', 'desc') }} value="desc">Decreasing</option>
                                    </select>
                                </label>
                                <label>
                                    <button type="submit" class="btn btn-info btn-sm"><i class="icon-magnifier"></i> Search</button>
                                </label>
                            </form>
                        </div>
                    </div>
                    <div class="white-box-content">
                        <form action="{{ route('admincpp.postProcessQuickCategory') }}" id="formTable">
                            <table class="table table-bordered table-stripped" id="dataTableList">
                                <thead>
                                <tr bgcolor="#428BCA" style="color: #fff">
                                    {{--<td width="3%" align="center" class="bold">STT</td>--}}
                                    <td width="3%" align="center" class="bold">ID</td>
                                    <td width="8%"  align="center" class="bold">Picture</td>
                                    <td width="8%" align="center" class="bold">Type</td>
                                    <td class="bold">Name</td>
                                    <td width="5%" align="center">Total view</td>
                                    <td width="3%" align="center" class="bold">Order</td>
                                    <td width="3%" align="center" class="bold">Show Home</td>
                                    <td width="3%" align="center" class="bold">Status</td>
                                    <td width="6%" colspan="2" class="text-center">Action</td>
                                </tr>
                                </thead>
                                <tbody id="tableContent">
                                <?php $stt = 0; $dataGrid = new DataGrid(); ?>
                                @forelse($categories as $key => $value)
                                    <?php $value = (array)$value;  $stt ++ ?>
                                    <tr>
                                        {{--<td align="center">{{ $stt }}</td>--}}
                                        <td align="center">{{ $value['cate_id'] }}</td>
                                        <td align="center">
                                            <img src="{{ asset(STATIC_MEDIA. '/demo.jpg') }}" class="img-responsive" style="width: 60px;height:60px" alt="img">
                                        </td>
                                        <td align="center">
                                            <b>{{ $typeCategory[$value['cate_type']] }}</b>
                                        </td>
                                        <td>
                                            <a href="javascript:void(0)">
                                                <?php if(isset($value['level'])) { for($j=0; $j< $value["level"];$j++) echo "--"; }?>
                                                <span class="editCateName"
                                                      title="Click to update quick this field"
                                                      data-name="editname"
                                                      data-pk="{{ $value['cate_id'] }}">
                                                        <b>{{ $value['cate_name'] }}</b>
                                            </span>
                                            </a>
                                        </td>
                                        <td align="center"><b>{{ $value['cate_total_hit'] }}</b></td>
                                        <td align="center">
                                            <a href="javascript:void(0)">
                                            <span
                                                title="Click to update quick this field"
                                                data-name="editorder"
                                                data-pk="{{ $value['cate_id'] }}"
                                                class="editCateOrder editable editable-click">
                                                <b>{{ $value['cate_order'] }}</b>
                                            </span>
                                            </a>
                                        </td>
                                        <td align="center">
                                            <a href="javascript:void(0)"><span
                                               data-action="updateShowHome"
                                               data-id="{{ $value['cate_id'] }}"
                                               data-check="{{ ($value['cate_show'] == 1 ? 'checked' : '') }}"
                                               class="execute_form fa fa-2x {{ ($value['cate_show'] == 1 ? 'fa-check-circle' : 'fa-circle') }}"><span></span></a>
                                        </td>
                                        <td align="center">
                                            <a href="javascript:void(0)">
                                                <span
                                                   data-action="updateStatus"
                                                   data-id="{{ $value['cate_id'] }}"
                                                   data-check="{{ ($value['cate_status'] == 1 ? 'checked' : '') }}"
                                                   class="execute_form fa fa-2x {{ ($value['cate_status'] == 1 ? 'fa-check-circle' : 'fa-circle') }}"></span>
                                            </a>
                                        </td>
                                        <td align="center">
                                            {!! $dataGrid->makeEditButton(['admincpp.getEditCategory',$value['cate_id']]) !!}
                                        </td>
                                        <td align="center">
                                            {!! $dataGrid->makeDeleteButton(['admincpp.getDeleteCategory',$value['cate_id']]) !!}
                                        </td>
                                    </tr>
                                @empty
                                    <tr><td colspan="10" align="center">{{ trans('admin::category.list.not_exist_data') }}</td></tr>
                                @endforelse
                                </tbody>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        EditQuickXtable('/category/process-quick-category', '.editCateOrder');
        EditQuickXtable('/category/process-quick-category', '.editCateName');
    </script>
@stop