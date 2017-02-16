@extends('admin::layouts.master')
@section('content')
    {!! bread_crumb([
            'admincpp.getListCategory'=> trans('admin::category.list.title'),
            trans('admin::category.add.title')
        ])
    !!}

    <div class="row">
        <div class="col-md-12">
            <div class="white-box">
                {!! box_title(trans('admin::category.add.title')) !!}
                <?php $form = new Form($errors); ?>
                {!! $form->beginForm(['admincpp.postAddCategory']) !!}
                    @include(ADMIN_VIEW. 'categories.form')
                {!! $form->closeForm() !!}
            </div>
        </div>
    </div
@stop