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
	<th scope="col">Tên</th>
	<th scope="col">Email</th>
	<th scope="col">Địa chỉ</th>
	<th scope="col">Nơi nhận hàng</th>
	<th scope="col">Số điện thoại</th>
</tr>
		
	</thead>
	<tbody>
		<?php $stt=0; ?>
@foreach($customer as $item)
<?php $stt++; ?>
<tr>
	<td>{{$stt}}</td>
	<td><a href="{{route('bill',$item->id)}}">{{$item->ten}}</a></td>
	<td>{{$item->email}}</td>
	<td>{{$item->xa.", ".$item->huyen.", ".$item->thanhpho}}</td>
	<td>{{$item->diachi}}</td>
	<td>{{$item->sodt}}</td>
</tr>
@endforeach()
		
	</tbody>
</table>
@endsection