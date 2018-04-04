<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Auditions Registration Form Widget Flat Responsive Widget Template :: w3layouts</title>
	<!-- for-mobile-apps -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Auditions Registration Form Widget Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<!-- //custom-theme -->
<link href="{{ asset('public/css/form/style.css') }}" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="{{ asset('public/js/form/jquery-2.1.4.min.js') }}" ></script>
<!-- //js -->
<!-- font-awesome-icons -->
<!-- //font-awesome-icons -->
<link href="//fonts.googleapis.com/css?family=Anton&amp;subset=latin-ext,vietnamese" rel="stylesheet">
</head>
<body>
	<!-- banner -->
	<div class="center-container">
		<div class="banner-dott">
			<div class="main">
				<h1 class="w3layouts_head">Edit Product</h1>
				<div class="w3layouts_main_grid">
					{!! Form::open(array('route'=>array('product.update',$data['id']),'method'=>'PUT','enctype'=>'multipart/form-data')) !!}
					{{ csrf_field() }}

					
					<input type="hidden" name="_token" value="{!! csrf_token() !!}">
					<div class="w3_agileits_main_grid w3l_main_grid">
						<span class="agileits_grid">
							<label>Select Category </label></span>
							<select name="cate">
								<option value="{!! $data['category_id'] !!}" disabled="disabled" selected=""><?php getcate($data["category_id"],$cate) ?></option>
								@foreach($cate as $key)
								<option value="{!! $key['id'] !!}">{!! $key["name"] !!}</option>
								@endforeach()
							</select>
						</div>
						<div class="w3_agileits_main_grid w3l_main_grid">
							<span class="agileits_grid">
								<label>Select Brand </label></span>
								<select name="brand">
									<option value="none" disabled="true" selected="">chọn brand</option>
									@foreach($brand as $item)
									<option value="{!! $item['id'] !!}">{!!$item["brand"]!!}</option>
									@endforeach()									
								</select>
							</div>
						<div class="w3_agileits_main_grid w3l_main_grid">							
							<span class="agileits_grid">
								<label>Select color </label></span>
								@foreach($data1 as $color)
								<label style="color: white;font-size: 20px"><input type="checkbox" value="{!! $color['id'] !!}" name="color[]" <?php checkcolor($color["id"],$datacolor) ?> >{!! $color["color"] !!}</label>
								@endforeach	
							</div>							
							<div class="w3_agileits_main_grid w3l_main_grid">							
								<span class="agileits_grid">
									<label>Select size </label></span>
									@foreach($data2 as $size)
									<label style="color: white;font-size: 20px"><input type="checkbox" value="{!! $size['id'] !!}" name="size[]" <?php checksize($size["id"],$datasize) ?> >{!! $size["size"] !!}</label>
									@endforeach	
								</div>	
								<div class="w3_agileits_main_grid w3l_main_grid">
									<span class="agileits_grid">
										<label>Name product </label>
										<input type="text" name="name" placeholder="Name product" value=" {!! old('name',isset($data) ? $data['name'] : null) !!} ">
									</span>
								</div>

								<div class="w3_agileits_main_grid w3l_main_grid">
									<span class="agileits_grid">
										<label>Price</label>
										<input type="text" name="price" placeholder="Price product" value=" {!! old('price',isset($data) ? $data['price'] : null) !!} ">
									</span>
								</div>
								<div class="w3_agileits_main_grid w3l_main_grid">
									<span class="agileits_grid">
										<label>Warranty</label>
										<input type="text" name="warranty" placeholder="Warranty" value=" {!! old('warranty',isset($data) ? $data['warraties'] : null) !!} ">
									</span>
								</div>
								<div class="w3_agileits_main_grid w3l_main_grid">
									<span class="agileits_grid">
										<label>Image current</label></span>
										<img src="{!! asset('resources/upload/'.$data['image']) !!}" style="width: 150px;
										height: 100px;">

									</div>
									<div class="w3_agileits_main_grid w3l_main_grid">
										<span class="agileits_grid">
											<label>Image</label></span>
											<input type="file" name="fimage" >

										</div>
										<div class="w3_agileits_main_grid w3l_main_grid">
											<span class="agileits_grid">
												<label>Add information</label>
												<textarea name="addinfo" id="txtarea1" cols="50" rows="6" class="form-control1" >{!! old('addinfo',isset($data) ? $data['add_info'] : null) !!}</textarea>
											</span>
										</div>
										<div class="w3_agileits_main_grid w3l_main_grid">
											<span class="agileits_grid">
												<label>Discription</label>
												<textarea name="discription" id="txtarea1" cols="50" rows="6" class="form-control1" > {!! old('discription',isset($data) ? $data['discription'] : null) !!}</textarea>
											</span>
										</div>
										<div class="w3_agileits_main_grid w3l_main_grid">
											<span class="agileits_grid">
												<label>Review</label>
												<textarea name="review" id="txtarea1" cols="50" rows="6" class="form-control1" >{!! old('review',isset($data) ? $data['review'] : null) !!} </textarea>
											</span>
										</div>
										<div class="w3_agileits_main_grid w3l_main_grid">
											<span class="agileits_grid">
												<label>Image detail</label>

												@for($i = 1; $i<3;$i++)
												<label> <input type="file" name="image[]"></label>

												@endfor
											</span>
										</div>
										<div class="w3_main_grid">
											<div class="w3_main_grid_right">
												<input type="submit" value="Submit">
											</div>
										</div>
									</form>
								</div>
								<!-- Calendar -->
								<link rel="stylesheet" href="{{ asset('public/css/form/jquery-ui.css') }}" />
								<script src="{{ asset('public/js/form/jquery-ui.js') }}" ></script>
								<script>
									$(function() {
										$( "#datepicker" ).datepicker();
									});
								</script>
								<!-- //Calendar -->
								<div class="w3layouts_copy_right">
									<div class="container">
										<p>Design by <a href="http://w3layouts.com">Ngo Quang Nam.</a></p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- //footer -->
				</body>
				</html>