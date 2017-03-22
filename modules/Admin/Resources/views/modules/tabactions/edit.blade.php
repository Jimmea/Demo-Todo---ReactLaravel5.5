@extends('admin::layouts.master_tab')
@section('content')
    {{--{!! bread_crumb([--}}
          {{--'admincpp.getListTabAction' => 'Danh sách',--}}
          {{--'Cập nhật'--}}
      {{--]) !!}--}}
    <div class="row">
        <div class="col-md-12">
            <div class="white-box">
                {!! box_title('Cập nhật tab group category') !!}
                @include(ADMIN_VIEW. 'tabactions.form', [
                    'routeName'  => 'admincpp.postEditTabAction',
                    'routeParam' => $tabAction->ta_id
                ])
            </div>
        </div>
    </div>
@stop