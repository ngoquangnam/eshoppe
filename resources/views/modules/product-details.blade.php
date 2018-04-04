<div class="product-details">
	<div class="col-sm-5">
		<div class="view-product">
			<img src="{{ asset('resources/upload/'.$sanpham['image']) }}"> 
		</div>
		<div id="similar-product" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner">

				<div class="item active">
					<a href=""> <img src="{{ asset('resources/upload/detail/'.$image1['image']) }}"> </a>
					<a href=""> <img src="{{ asset('resources/upload/'.$sanpham['image']) }}"> </a>
					<a href=""> <img src="{{ asset('resources/upload/detail/'.$image2['image']) }}"> </a>
				</div>

				<div class="item">
					<a href=""> <img src="{{ asset('resources/upload/detail/'.$image1['image']) }}"> </a>
					<a href=""> <img src="{{ asset('resources/upload/'.$sanpham['image']) }}"> </a>
					<a href=""> <img src="{{ asset('resources/upload/detail/'.$image2['image']) }}"> </a>
				</div>
				<div class="item">
					<a href=""> <img src="{{ asset('resources/upload/detail/'.$image1['image']) }}"> </a>
					<a href=""> <img src="{{ asset('resources/upload/'.$sanpham['image']) }}"> </a>
					<a href=""> <img src="{{ asset('resources/upload/detail/'.$image2['image']) }}"> </a>
				</div>

			</div>
			<a class="left item-control" href="#similar-product" data-slide="prev">
				<i class="fa fa-angle-left"></i>
			</a>
			<a class="right item-control" href="#similar-product" data-slide="next">
				<i class="fa fa-angle-right"></i>
			</a>
		</div>

	</div>
	<div class="col-sm-7">
		<div class="product-information">
			<img src="{{asset('public/images/product-details/new.jpg')}}" class="newarrival" alt="" />
			<h2>{!! $sanpham['name'] !!}</h2>
			<p>Web ID: 1089772</p>
			<img src="{{asset('public/images/product-details/rating.png')}}" alt="" />
			<span>
				<span>{!! $sanpham['price'] !!}$</span>
				
				<button type="button" class="btn btn-fefault cart">
					<i class="fa fa-shopping-cart"></i>
					Add to cart
				</button>
			</span>
			<div class="color-quality">
				<div class="color-quality-right">
					<div class="col-sm-6">
						<h5>Color :</h5>
					<select id="country1" onchange="change_country(this.value)" class="frm-field required sect">
						<?php showcolor($color_id,$color) ?>
					</select>
					</div>
					<div class="col-sm-6">
					<h5>Size :</h5>
					<select id="country1" onchange="change_country(this.value)" class="frm-field required sect">
						<?php showsize($size_id,$size) ?>
					</select>
					</div>
				</div>
			</div>
			
			<p><b>Category:</b> {!! $category['name'] !!}</p>
			<p><b>Brand:</b> {!! $brand['brand'] !!}</p>
			<p><b>Warranty:</b> {!! $sanpham['warranties'] !!} Month</p>
			<a href=""><img src="{{asset('public/images/product-details/share.png')}}" class="share img-responsive"  alt="" /></a>

		</div>
	</div>
</div>