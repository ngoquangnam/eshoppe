<div class="brands_products">
	<h2>Brands</h2>
	<div class="brands-name">
		<ul class="nav nav-pills nav-stacked">
			<?php $brand = DB::table('brands')->select('id','brand')->distinct()->get()->toArray(); ?>
			@foreach($brand as $item)
			<?php $num_brand = DB::table('products')->where('brand_id',$item->id)
													->groupBy('brand_id')
													->count('name') ?>
			<li><a href="{{route('brand',$item->id)}}"> <span class="pull-right">({!!$num_brand!!})</span>{{ $item->brand}}</a></li>
			@endforeach
		</ul>
	</div>
</div>