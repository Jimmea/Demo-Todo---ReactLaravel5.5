@extends(MASTER_V1.'.layout_master')

@section('content')
    <h1>Hello World</h1>

    <p>
        This view is loaded from module: {!! config('tintuc.name') !!}
    </p>
@stop
