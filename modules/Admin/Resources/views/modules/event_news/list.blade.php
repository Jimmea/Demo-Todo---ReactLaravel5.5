@extends('admin::layouts.master')
@section('content')
    {!! bread_crumb([
        'admincpp.getListEvent' => 'Danh sách event',
         'Thêm tin vào - '. $event->evn_name
    ]) !!}
    @php
        $dataGrid = new DataGrid();
        $stt      = $dataGrid->getPageStt($news);
    @endphp
    <div class="row">
        <div class="col-md-12">
            {{-- Thong tin tuc--}}
            <div class="white-box padd-0">
                <div class="white-box-header">
                    <div class="header-title pull-left">
                        <h3 class="box-title">Thêm tin vào event</h3>
                    </div>
                    @include(ADMIN_VIEW . 'event_news.inc_search_form')
                </div>
                <input type="hidden" name="event_id" value="{{ $event->evn_id }}" id="event_id">
                <div class="white-box-content">
                    <table class="table table-stripped" id="dataTableList">
                        <thead>
                            <tr>
                                <td width="4%" class="bold" align="center">Stt</td>
                                <td width="4%" class="bold" align="center">New id</td>
                                <td width="7%" class="bold" align="center">Picture</td>
                                <td class="bold" align="center">Thông tin cơ bản</td>
                                <td class="bold" align="center">Danh mục</td>
                                <td class="bold" width="7%" align="center">Kiểu bài</td>
                                <td class="bold" width="15%" align="center">User | Admin</td>
                                <td class="bold" width="12%" align="center" colspan="2">Danh mục event</td>
                            </tr>
                        </thead>
                        <tbody id="tableContent">
                        @foreach($news as $value)
                            @php $dataGrid->setPrimaryKey($value->new_id) @endphp
                            <tr>
                                <td align="center">{{ $stt++ }}</td>
                                <td align="center">{{ $value->new_id }}</td>
                                <td><img src="{{ $value->new_picture }}"  class="img-responsive img9070" alt=""></td>
                                <td>
                                    <a title="{{ $value->new_status ? 'Xem ngay' : 'Bài viết đăng ở chế độ ẩn' }}" href="/{{ $value->new_slug }}">{{ ucfirst($value->new_title) }}</a>
                                </td>
                                <td align="center">{{ $value->categories->cate_name }}</td>
                                <td align="center">{{ $newTypes[$value->new_type] }}</td>
                                <td align="center">Hung okata | {{ $value->admins->adm_name }}</td>
                                <td align="center" colspan="2">
                                    {{--<select name="category_id_event" id="category_id_event" class="form-control category_id_event input-sm" data-new-id="{{ $value->new_id }}">--}}
                                        {{--<option  value="">- Danh mục -</option>--}}
                                    {{--<option {{ (strpos($eventNewsExist, "[" . $value->new_id . '-' . $iCate . "]") !== false) ? "selected=selected" : '' }}  value="{{ $iCate }}">{{ $nCater }}</option>--}}
                                    {{--</select>--}}
                                    <table>
                                        @foreach($eventCategories as $iCate => $nCate)
                                            <tr>
                                                <td>
                                                    <input type="checkbox" {{ (strpos($eventNewsExist, "[" . $value->new_id . '-' . $iCate . "]") !== false) ? "checked=checked" : '' }}
                                                    name="category_id_event" class="category_id_event" data-new-id="{{ $value->new_id }}" value="{{ $iCate }}">
                                                </td>
                                                <td> &nbsp; {{ $nCate }}</td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop
@section('js')
    <script>
        $(document).ready(function () {
            $('.category_id_event').change(function () {
                var newId       = $(this).data('new-id');
                var categoryId  = $(this).val();
                var status      = $(this).is(':checked') == true ? 1 : 0;
                var eventId     = $('#event_id').val();
                $.ajax({
                    url: '{{ route('admincpp.postAddNewEvent', $event->evn_id) }}',
                    type: 'POST',
                    dataType: 'json',
                    data: {
                        newId       : newId,
                        status      : status,
                        categoryId  : categoryId,
                        eventId     : eventId,
                    },
                })
                    .done(function (response) {
                        if (!response.status)
                        {
                            alert(response.msg);
                        }
                    })
                    .fail(function () {
                        console.log("error");
                    })
                    .always(function () {
                        console.log("complete");
                    });
            })
        });
    </script>
@stop
