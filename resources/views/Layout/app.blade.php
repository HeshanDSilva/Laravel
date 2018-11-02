<html>
<head>
	<title>Heshan</title>
	<link rel="stylesheet"  href="/css/app.css">
</head>
<body>
	@include('inc.navbar')
<div class="container">
	@if(Request::is('/'))
		@include('inc.sowcase')
	@endif
<div class="row">
	<div class="col-md-8 col-lg-8">
		@include('inc.messages')
		@yield('content')
	</div>
	<div class="col-md-4 col-lg-4">
		@include('inc.sidebarContent')
	</div>
</div>
</div>	
<footer id = "f" class="text-center">
	<p>copyright 2018 &copy; Heshan</p>
</footer>

</body>
</html>