@extends('admin-shop.content')
@section('route')
<h2>
	<a href={{route('index')}}>Home</a>
	<i class="fa fa-angle-right"></i>
	<span>Dashboard</span>
</h2>
@endsection
@section('table')
<table class="table table-striped customer-tb">
	<thead>
		<tr>
			<th scope="col">STT</th>
			<th scope="col">Tên khách hàng</th>
			<th scope="col">Tổng tiền</th>
			<th scope="col">Ngày bán</th>
			<th scope="col">Tình trạng</th>
		</tr>
		
	</thead>
	<tbody>
		<?php $stt=0; ?>
		@foreach($order as $item)
		<?php $stt++; ?>
		<tr>
			<td>{{$stt}}</td>
			<td><a href="{{route('order.show',$item["id"])}}">{!! $item["name"] !!}</a></td>
			<td>{!! $item["total"] !!}</td>
			<td>{!! $item["date_order"] !!}</td>
			<td>{!! $item["status"] !!}</td>
		</tr>
		@endforeach()
		
	</tbody>
</table>
@endsection