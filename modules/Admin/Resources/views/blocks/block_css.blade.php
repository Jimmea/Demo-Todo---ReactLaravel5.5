@if($arrCss = Config::get('admin.asset.css'))
    @foreach($arrCss as $path)
        <link href="{{ asset($path) }}" rel="stylesheet">
    @endforeach
@endif