<section>
<div class="container">
	<div class="row">
		<div class="col-sm-3">
			<div class="left-sidebar">
				<?php 
				include("modules/category_products.php");
				include("modules/brands_products.php");
				include("modules/price_range.php");
				include("modules/shipping.php")
				?>
			</div>
		</div>
		<div class="col-sm-9 padding-right">
			<?php 
			include("modules/features_items.php");
			 ?>
		</div>
	</div>
</div>
</section>