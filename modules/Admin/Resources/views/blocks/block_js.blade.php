@if($arrJs = Config::get('admin.asset.js'))
    @foreach($arrJs as $path)
        <script src="{{ asset($path) }}"></script>
    @endforeach
@endif