<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Auditions Registration Form Widget Flat Responsive Widget Template :: w3layouts</title>
	<!-- for-mobile-apps -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Auditions Registration Form Widget Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<!-- //custom-theme -->
<link href="{{ asset('public/css/form/style.css') }}" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="{{ asset('public/js/form/jquery-2.1.4.min.js') }}" ></script>
<!-- //js -->
<!-- font-awesome-icons -->
<!-- //font-awesome-icons -->
<link href="//fonts.googleapis.com/css?family=Anton&amp;subset=latin-ext,vietnamese" rel="stylesheet">
</head>
<body>
	<!-- banner -->
	<div class="center-container">
		<div class="banner-dott">
			<div class="main">
				<h1 class="w3layouts_head">Add category</h1>

				<div class="w3layouts_main_grid">
					<h2 ><a class="hvr-outline-out button2" href="{{route('index')}}" style="color:white;text-decoration: none;">Shop Now </a><a class="hvr-outline-out button2" href="{{url('main')}}" style="color:white;text-decoration: none;">| Admin</a></h2><br>

					<form action="{!! route('category.store') !!}" method="post" class="w3_form_post">
						{{ csrf_field() }}
						<input type="hidden" name="_token" value="{!! csrf_token() !!}">
						<div class="w3_agileits_main_grid w3l_main_grid">
							<span class="agileits_grid">
								<label>Select Category </label></span>
								<select name="cate">
									<option value="none" disabled="true" selected="">chọn category</option>
									<option value=0>loại chính</option>
									@foreach($data as $cate)
									<option value="{!! $cate['id'] !!}">{!! $cate["name"] !!}</option>
									@endforeach()
								</select>
							</div>
						<div class="w3_agileits_main_grid w3l_main_grid">
							<span class="agileits_grid">
								<label> name </label>
								<input type="text" name="name" placeholder="Name" required="">
							</span>
						</div>
						<div class="w3_agileits_main_grid w3l_main_grid">
							<span class="agileits_grid">
								<label>key word </label>
								<input type="text" name="key" placeholder="key word " required="">
							</span>
						</div>
						<div class="w3_main_grid">
							<div class="w3_main_grid_right">
								<input type="submit" value="Submit">
							</div>
						</div>
					</form>
				</div>
				<!-- Calendar -->
				<link rel="stylesheet" href="{{ asset('public/css/form/jquery-ui.css') }}" />
				<script src="{{ asset('public/js/form/jquery-ui.js') }}" ></script>
				<script>
					$(function() {
						$( "#datepicker" ).datepicker();
					});
				</script>
				<!-- //Calendar -->
				<div class="w3layouts_copy_right">
					<div class="container">
						<p>Design by</p> <a href="" style="color:blue; font-size: 25px">Ngo Quang Nam</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //footer -->
</body>
</html>