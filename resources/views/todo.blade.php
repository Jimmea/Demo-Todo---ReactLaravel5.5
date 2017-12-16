<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Page Description">
    <meta name="author" content="Hungokata">
    <title>Demo basic todo react with laravel framework5.5</title>
    <meta name="_token" id="_token" content="{{ csrf_token() }}">

    <link rel="stylesheet" media="screen" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <style type="text/css">
        li.list-group-item.list {
            clear: both;
            display: block;
            overflow: hidden;
        }
    </style>
    <script>
        var API_URL = '{{url('/')}}';
        var _token = document.getElementById('_token').getAttribute('content');
    </script>
</head>
<body>
    <div id="app"></div>

    <script src="//code.jquery.com/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="/app/build/app.js"></script>
</body>
</html>