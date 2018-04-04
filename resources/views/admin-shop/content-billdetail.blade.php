@extends('admin-shop.content')
@section('route')
<h2>
	<a href={{route('index')}}>Home</a>
	<i class="fa fa-angle-right"></i>
	<span>Dashboard</span>
</h2>

@endsection

@section('table')
<div class="tb1">
	<div class="row">
		<table class="table">
			<thead class="thead-dark">
				<tr>
					<th scope="col">Tên khách hàng</th>
					<th scope="col">Email</th>
					<th scope="col">Số điện thoại</th>
					<th scope="col">địa chỉ</th>
				</tr>
			</thead>
			<tbody>
				@foreach($bill_detail as $item)
				<tr>    	
					<td>{!!$item["name"] !!}</td>
					<td>{!!$item["email"] !!}</td>
					<td>{!!$item["sodt"] !!}</td>
					<td>{!!$item["diachi"] !!}</td>
				</tr>
				@break
				@endforeach
			</tbody>
		</table>
	</div>
</div>
<div class="tb2">
	<div class="row">
		<table class="table customer-tb">
			<thead class="thead-light">
				<tr>
					<th scope="col">STT</th>
					<th scope="col">Tên sản phẩm</th>
					<th scope="col">Giá</th>
					<th scope="col">Số lượng</th>
					<th scope="col">Tổng tiền</th>
				</tr>
				
			</thead>
			<tbody>
				<?php $stt=0; ?>
				@foreach($bill_detail as $item)
				<?php $stt++; ?>
				<tr>
					<td>{{$stt}}</td>
					<td>{!!$item["name"]!!}</td>
					<td>{!!$item["price"]!!}</td>
					<td>{!!$item["qty"]!!}</td>
					<td>{!!$item["qty"]*$item["price"]!!}</td>
				</tr>
				@endforeach()
				<tr>
					<td colspan="3"></td>
					<td colspan="">Tạm tính</td>
					<td colspan="">{!!$item["total"]!!}</td>
				</tr>
				<tr>
					<td colspan="3"></td>
					<td colspan="">Thuế</td>
					<td colspan="">0</td>
				</tr>
				<tr>
					<td colspan="3"></td>
					<td colspan="">Giảm giá</td>
					<td colspan="">0</td>
				</tr>
				<tr>
					<td colspan="3"></td>
					<td colspan="">Tổng tiền</td>
					<td colspan="">{!!$item["total"]!!}</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>

@endsection