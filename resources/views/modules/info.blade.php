<section id="do_action">
	<div class="container">
		<div class="breadcrumbs">
			<ol class="breadcrumb">
			  <li><a href="#">Home</a></li>
			  <li class="active">Check out</li>
			</ol>
		</div>
		<div class="row">
			
			<div class="col-sm-6">
				<div class="total_area">
					<ul>
						<li>Customer<span>{!!Auth::user()->name!!}</span></li>
						<li>Email<span>{!!Auth::user()->email!!}</span></li>
						<li>Address<span>{!!Auth::user()->diachi!!}</span></li>
						<li>Phone <span>{!!Auth::user()->sodt!!}</span></li>
						<li>Subtotal <span>{!!session()->get('total');!!}</span></li>
					</ul>
					<a class="btn btn-default update" href="{!! route('dathang') !!}">Buy</a>
				</div>
			</div>
		</div>
	</div>
</section>