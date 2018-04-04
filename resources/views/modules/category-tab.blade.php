<div class="category-tab">
	<div class="col-sm-12">
		<?php $cate = DB::table('categories')->where('parent_id',0)->select('id','name','parent_id')->skip(1)->take(6)->get()->toArray(); ?>
		<?php $cate1 = DB::table('categories')->where('parent_id',0)->first()?>
		<ul class="nav nav-tabs">

			<li class="active"><a href="#{!!$cate1->id!!}" data-toggle="tab">{!!$cate1->name!!}</a></li>
			@foreach($cate as $item)
			<li><a href="#{!!$item->id!!}" data-toggle="tab">{!!$item->name!!}</a></li>
			@endforeach()
		</ul>
	</div>
	<?php $pro = DB::table('categories')
		->join('products','categories.id','=','products.category_id')
		->select('products.*','categories.name as name1','categories.parent_id')
		->get();
		?>
	<div class="tab-content">
		<div class="tab-pane fade active in" id="14" >
			@foreach($pro as $item1)
			@if($item1->parent_id==$cate1->id)
			<div class="col-sm-3">
				<div class="product-image-wrapper">
					<div class="single-products">
						<div class="productinfo text-center">
							<img src="{!! asset('resources/upload/'.$item1->image) !!}" alt="" />
							<h2>${!!$item1->price!!}</h2>
							<p>{!!$item1->name!!}</p>
							<a href="{!!route('muahang',$item1->id)!!}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
						</div>
					</div>
				</div>
			</div>
			@endif
			@endforeach
		</div>
		
		@foreach($cate as $item)
		<div class="tab-pane fade" id="{!!$item->id!!}" >
			@foreach($pro as $item1)
			@if($item1->parent_id==$item->id)
			<div class="col-sm-3">
				<div class="product-image-wrapper">
					<div class="single-products">
						<div class="productinfo text-center">
							<img src="{!! asset('resources/upload/'.$item1->image) !!}" alt="" />
							<h2>${!!$item1->price!!}</h2>
							<p>{!!$item1->name!!}</p>
							<a href="{!!route('muahang',$item1->id)!!}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
						</div>
					</div>
				</div>
			</div>
			@endif
			@endforeach
		</div>
		@endforeach
		
	</div>
</div>
