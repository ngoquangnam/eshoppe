<div class="header-middle">
	<div class="container">
		<div class="row">
			<div class="col-sm-2">
				<div class="logo pull-left">			
					<a href="index.php"><img src="{{asset('public/images/home/logo.png')}}" alt="" /></a>

				</div>
			</div>
				<div class="col-sm-5"  >
				<div class="search_box pull-left" >
					<form action="{{ route('search') }}" method="post">
					{{ csrf_field() }}
					<input type="search" name="key" placeholder="Search here..." required="">
					<input type="submit" class="inputsub" value=" ">
					<div class="clearfix"></div>
				</form>
				</div>
			</div>
			<div class="col-sm-5">

				<div class="shop-menu pull-right">
					<ul class="nav navbar-nav">
						<li><a href="{!!route('index')!!}" class="active">Home</a></li>
						
						
						<li><a href="#"><i class="fa fa-user"></i>
						@if(Auth::check())
						{!! Auth::user()->name !!}
						@else
						
							Account
						
						@endif
							</a></li>
						<li><a href="{!! route('giohang') !!}"><i class="fa fa-shopping-cart"></i> Cart {!! '('.session()->get('count').')' !!}</a></li>
						<li><a href="{!! route('xoagiohang') !!}">Empty cart</a></li>					
						<li><a href="{!! route('login')!!}"><i class="fa fa-lock"></i> Login</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
