@extends('admin::layouts.master')
@section('title', 'Setting configuration')
@section('content')
    {!! bread_crumb(['Edit configuration']) !!}
    <?php
        $tabConfiguration = array(
            'general'   => 'INFORMATION',
            'seo'       => 'SEO',
            'contact'   => 'CONTACT',
        );
    ?>
    <div class="row">
        <div class="col-md-12">
            <div class="white-box">
                <h3 class="box-title">Edit configuration</h3>
                <form class="form-horizontal">
                    <ul class="nav customtab nav-tabs" role="tablist">
                        @foreach($tabConfiguration as $key => $value)
                        <li role="presentation">
                            <a href="#{{ $key }}" aria-controls="{{ $key }}"
                               role="tab" data-toggle="tab" aria-expanded="true">
                                <span class="visible-xs">
                                    <i class="icon-home"></i></span>
                                <span class="hidden-xs"> {{ $value }}</span>
                            </a>
                        </li>
                        @endforeach
                    </ul>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade" id="general">
                    
                            <div class="clearfix"></div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade active in" id="seo">
                            <div class="form-group">
                                <label for="meta-title">Meta title</label>
                                <input type="text" class="form-control" name="con-site-title">
                            </div>
                            <div class="form-group">
                                <label for="meta-title">Meta keyword</label>
                                <input type="text" class="form-control" name="con-site-title">
                            </div>
                            <div class="form-group">
                                <label for="meta-title">Meta keyword</label>
                                <textarea name="" class="form-control" cols="30" rows="5"></textarea>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <button type="submit" class="btn btn-info btn-sm"><i class="icon-check"></i> Save</button>
                        <button type="reset" class="btn btn-info btn-sm"><i class="icon-refresh"></i> Reset</button>
                    </div>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>
@stop