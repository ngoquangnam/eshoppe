<section>
	<div class="container">
		<div class="row">
			<div class="col-sm-3">
				<div class="left-sidebar">
					
					@include('modules/category_products')
					@include('modules/brands_products')					
					@include('modules/shipping')
				</div>
			</div>
			<div class="col-sm-9 padding-right">
				
				@include('modules/features_items')
				@include('modules/category-tab')
				
				
			</div>
		</div>
	</div>
</section>