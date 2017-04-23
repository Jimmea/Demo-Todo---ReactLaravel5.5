@extends(MASTER_V1.'.layout_master')
@section('seo')
@stop
@section('content')
    <div class="container-content body-content">
        <div class="recipe-container-outer">
            <section class="ar_recipe_index full-page">
                @include(MASTER_V1.'.blocks.block_breadcrumbs')
                @include(NEW_V1.'.new_detail._inc_header_detail')
                @include(NEW_V1.'.new_detail._inc_ingredient')
                @include(NEW_V1.'.new_detail._inc_direction')
                @include(NEW_V1.'.new_detail._inc_share_social')
                @include(NEW_V1.'.new_detail._inc_zergnet')
                @include(NEW_V1.'.new_detail._inc_review')
            </section>
            @include(NEW_V1.'.new_detail._inc_sidebar_right')
        </div>
    </div>
@stop