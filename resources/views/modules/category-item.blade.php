<div class="features_items">
	<h2 class="title text-center">Features Items</h2>
	<div class="row">
	@foreach($product as $item)
	<div class="col-sm-4">
		<div class="product-image-wrapper">
			<div class="single-products">
					<div class="productinfo text-center">
						<img src="{!! asset('resources/upload/'.$item['image']) !!}" alt="" />
						<h2>{{ $item["price"]}}$</h2>
						<a href="{!! route('sanpham',$item['id'])!!}"><p>{{ $item["name"]}}</p></a>
						<a href="{!!route('muahang',$item['id'])!!}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
					</div>
			</div>		
		</div>
	</div>
	@endforeach
	</div>
</div>