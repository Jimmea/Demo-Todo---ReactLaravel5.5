@extends('admin::layouts.master')
@section('content')
    {!! bread_crumb([
            trans('admin::category.list.title'),
         ])
     !!}
    {!! $listing !!}
@stop
@section('js')
    <script>
        EditQuickXtable('{{ route('admincpp.getListCategory') }}', '.clickEdit');
    </script>
@stop