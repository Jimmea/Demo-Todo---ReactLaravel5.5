@extends('admin::layouts.master')
@section('content')
    {!! bread_crumb([
        'admincpp.getListNew' => trans('admin::listing.title'),
        trans('admin::form.edit.title')
    ]) !!}
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="row">
        <div class="col-md-12">
            <div class="white-box">
                {!! box_title(trans('admin::form.edit.title')) !!}
                @include(ADMIN_VIEW . 'news.form', ['routeName'=> 'admincpp.postEditNew', 'routeParam'=> $new->new_id])
            </div>
        </div>
    </div>
@stop
