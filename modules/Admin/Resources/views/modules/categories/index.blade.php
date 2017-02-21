@extends('admin::layouts.master')
@section('content')
    {!! bread_crumb([
            trans('admin::category.list.title'),
         ])
     !!}
    {!! $listing !!}
    <script>
        EditQuickXtable('/category/process-quick-category', '.editCateOrder');
        EditQuickXtable('/category/process-quick-category', '.editCateName');
    </script>
@stop