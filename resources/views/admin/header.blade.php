<!DOCTYPE HTML>
<html>
<head>
	<title>Minimal an Admin Panel Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Minimal Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<link href="{{ asset('public/css/admin/bootstrap.min.css') }}" rel='stylesheet' type='text/css' />
	<!-- Custom Theme files -->
	<link href="{{ asset('public/css/admin/style.css') }}" rel='stylesheet' type='text/css' />
	<link href="{{ asset('public/css/admin/font-awesome.css') }}" rel="stylesheet"> 
	<script src="{{ asset('public/js/admin/jquery.min.js') }}"> </script>
	<!-- Mainly scripts -->
	<script src="{{ asset('public/js/admin/jquery.metisMenu.js') }}"></script>
	<script src="{{ asset('public/js/admin/jquery.slimscroll.min.js') }}"></script>
	<!-- Custom and plugin javascript -->
	<link href="{{ asset('public/css/admin/custom.css') }}" rel="stylesheet">
	<script src="{{ asset('public/js/admin/custom.js') }}"></script>
	<script src="{{ asset('public/js/admin/screenfull.js') }}"></script>
	<link href="http://fonts.googleapis.com/css?family=Ruge+Boogie" rel="stylesheet" type="text/css"> 
	<script>
		$(function () {
			$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);
			if (!screenfull.enabled) {
				return false;
			}
			$('#toggle').click(function () {
				screenfull.toggle($('#container')[0]);
			});
		});
	</script>
	<script src="{{ asset('public/js/admin/jquery.nicescroll.js') }}"></script>
	<script src="{{ asset('public/js/admin/scripts.js') }}"></script>
	<script src="{{ asset('public/js/admin/bootstrap.min.js') }}"> </script>
</head>
<body>