<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <meta name="csrf-token" id="csrf_token" content="{{ csrf_token() }}">    
    <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>    
    <link rel="stylesheet" href="/react/css/reacttodo.css">
    <style>
		/* Im not a good designer :D */
		#app {
			width: 450px;
			margin: auto;
			padding-top: 60px;
		}
		.todo-done {
			text-decoration: line-through;
		}
	</style>
</head>
<body>
    <div id="app"> 

    </div>    
    <script>
        var API_URL = '{{url('/')}}';
        var _token  = document.getElementById('csrf_token').getAttribute('content');        
    </script>    
    <script src="/react/build/app.js"></script>    
</body>
</html>