@extends('admin.admin-detail.add.add')

@section('title')
	Add Brand
@endsection

@section('form')
	<form action="{!! route('brand.store') !!}" method="post" class="w3_form_post">
		{{ csrf_field() }}
		<input type="hidden" name="_token" value="{!! csrf_token() !!}">
		<div class="w3_agileits_main_grid w3l_main_grid">
			<span class="agileits_grid">
				<label>Select Category </label></span>
				<select name="cate">
					<option value="none" disabled="true" selected="">chọn category</option>
														
				</select>
		</div>
		<div class="w3_agileits_main_grid w3l_main_grid">
			<span class="agileits_grid">
				<label> Brand </label>
				<input type="text" name="Brand" placeholder="Brand" required="">
			</span>
		</div>
		<div class="w3_main_grid">
			<div class="w3_main_grid_right">
				<input type="submit" value="Submit">
			</div>
		</div>
	</form>
@endsection