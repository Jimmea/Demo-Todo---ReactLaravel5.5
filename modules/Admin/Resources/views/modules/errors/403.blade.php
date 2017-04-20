@extends('admin::layouts.master')
@section('content')
    {!! bread_crumb() !!}
    <div class="row">
        <div class="col-md-12">
            <div class="white-box">
                <h3 class="text-danger box-t">Bạn không có quyền truy cập vào !!!</h3>
                <ul>
                    <li><i class="icon-phone"></i> Vui lòng liên hệ với admin được truy cập.</li>
                    <li><i class="icon-check"></i> Cám ơn bạn đã sử dụng.</li>
                </ul>
            </div>
        </div>
    </div>
@stop