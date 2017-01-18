<!DOCTYPE html>
<html>
	<head>
		<title>Cook</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		@include(VIEW_FRONTEND_INCS . '.css')
		@yield('css')
	</head>
	<body>
		<a id="top"></a>
		<div class="slider-container" global-ui-events="">
			<div class="site-content">
				@include(VIEW_FRONTEND_INCS . '.header')
				@yield('content')
				@include(VIEW_FRONTEND_INCS . '.footer')
			</div>
		</div>
		@include(VIEW_FRONTEND_INCS . '.js')
		@yield('js')
	</body>
</html>