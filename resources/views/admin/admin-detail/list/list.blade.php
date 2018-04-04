<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title')</title>
  <link href="{{ asset('public/css/admin.css') }}" rel="stylesheet">
</head>
<body>

<section>
    <h1>List Color</h1>
    <h3 ><a class="hvr-outline-out button2" href="{{route('index')}}" style="color:white;text-decoration: none;">Shop Now </a><a class="hvr-outline-out button2" href="{{route('admin')}}" style="color:white;text-decoration: none;">| Admin</a></h3>

    @yield('table')
 </section>

 <div class="made-with-love">
  Made with
  <i>♥</i> by
  <a target="_blank" href="https://codepen.io/nikhil8krishnan">Ngô Quang Nam</a>
</div>
</body>
</html>