<div class="category-tab shop-details-tab">
		<ul class="nav nav-tabs">
			<li><a href="#details" data-toggle="tab"> Add information</a></li>
			<li><a href="#companyprofile" data-toggle="tab">Discription</a></li>
			<li class="active"><a href="#reviews" data-toggle="tab">Reviews</a></li>
		</ul>
	</div>
	<div class="tab-content">
		<div class="tab-pane fade" id="details" >
			<div class="col-sm-12">
				<p>{!! $sanpham["add_info"] !!}</p>
		</div>
		</div>			
		<div class="tab-pane fade" id="companyprofile" >
		<div class="col-sm-12">
				<p>{!! $sanpham["discription"] !!}</p>
		</div>
		</div>
		<div class="tab-pane fade active in" id="reviews" >
			<div class="col-sm-12">
				<p>{!! $sanpham["review"] !!}</p>
			</div>
		</div>
	</div>
	<br>
	<br>	
	<br>	
	<br>	
</div>