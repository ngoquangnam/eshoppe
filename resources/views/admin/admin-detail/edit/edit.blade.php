<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Auditions Registration Form Widget Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href="{{ asset('public/css/form/style.css') }}" rel="stylesheet" type="text/css" media="all" />
    <script type="text/javascript" src="{{ asset('public/js/form/jquery-2.1.4.min.js') }}" ></script>
    <
    <link href="//fonts.googleapis.com/css?family=Anton&amp;subset=latin-ext,vietnamese" rel="stylesheet">
</head>
<body>
<div class="center-container">
    <div class="banner-dott">
        <div class="main">
            <h1 class="w3layouts_head">
                @yield('title')
            </h1>
            <div class="w3layouts_main_grid">
               @yield('form')
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
                    <p> Design by <a href="http://w3layouts.com">Ngo Quang Nam</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- //footer -->
</body>
</html>