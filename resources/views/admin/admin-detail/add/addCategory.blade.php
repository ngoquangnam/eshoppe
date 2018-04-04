@extends('admin.admin-detail.add.add')

@section('title')
	Add Category
@endsection

@section('form')
	<form action="{!! route('category.store') !!}" method="post" class="w3_form_post">
		{{ csrf_field() }}
		<input type="hidden" name="_token" value="{!! csrf_token() !!}">
		<div class="w3_agileits_main_grid w3l_main_grid">
			<span class="agileits_grid">
				<label>Select Category </label></span>
				<select name="cate">
					<option value="none" disabled="true" selected="">chọn category</option>
					<option value=0>loại chính</option>
					@foreach($data as $cate)
					<option value="{!! $cate['id'] !!}">{!! $cate["name"] !!}</option>
					@endforeach()
				</select>
			</div>
		<div class="w3_agileits_main_grid w3l_main_grid">
			<span class="agileits_grid">
				<label> name </label>
				<input type="text" name="name" placeholder="Name" required="">
			</span>
		</div>
		<div class="w3_agileits_main_grid w3l_main_grid">
			<span class="agileits_grid">
				<label>key word </label>
				<input type="text" name="key" placeholder="key word " required="">
			</span>
		</div>
		<div class="w3_main_grid">
			<div class="w3_main_grid_right">
				<input type="submit" value="Submit">
			</div>
		</div>
	</form>
@endsection