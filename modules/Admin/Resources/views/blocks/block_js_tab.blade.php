@if($arrJs = Config::get('admin.asset.js_tab'))
    @foreach($arrJs as $path)
        <script src="{{ asset($path) }}"></script>
    @endforeach
@endif
<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
    });
</script>