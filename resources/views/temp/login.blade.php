<!DOCTYPE html>
<html lang="en">
<head>
	
	@include('modules/head_index')
	 
</head>

<body>
	@include('modules/header')
	
	<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-5 col-sm-offset-1 ">

					<form action="{!! route('signin') !!}" method="post">
						{{ csrf_field() }}
						@if (count($errors) > 0)
						<div class="alert alert-danger">
							<ul>
								@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
						@endif
						{{ csrf_field() }}
						<input type="hidden" name="_token" value="{!! csrf_token() !!}">
						<div class="form-group col-md-6">
							<label for="inputEmail4">Name</label>
							<input type="text" class="form-control" id="inputEmail4" placeholder="Tên" name="ten">
						</div>
						<div class="form-group col-md-6">
							<label for="inputEmail4">Email</label>
							<input type="email" class="form-control" id="inputEmail4" placeholder="Email" name="email">
						</div>
						<div class="form-group col-md-6">
							<label for="inputPassword4">Password</label>
							<input type="password" class="form-control" id="inputPassword4" placeholder="Password" name="matkhau">
						</div>

						<div class="form-group col-md-6">
							<label for="inputCity">Confirm password</label>
							<input type="password" class="form-control" id="inputCity" placeholder="nhập lại mật khẩu" name="nhaplai">
						</div>
						<div class="form-group col-md-6">
							<label for="inputPassword4">Address</label>
							<input type="text" class="form-control" id="inputPassword4" placeholder="địa chỉ" name="diachi">
						</div>

						<div class="form-group col-md-6">
							<label for="inputCity">Phone number</label>
							<input type="text" class="form-control" id="inputCity" placeholder="số điện thoại" name="sodt">
						</div>

						<div class="form-group col-md-4">
							<label for="inputState">Birth day</label>
							<select id="inputState" class="form-control" name="ngay" >
								<option selected>Choose...</option>
								@for($ngay=1;$ngay<=31;$ngay++)
								<option value="{{$ngay}}">{{$ngay}}</option>
								@endfor
							</select>
						</div>
						<div class="form-group col-md-4">
							<label for="inputState"></label>
							<select id="inputState" class="form-control" name="thang" onchange="thang1(this)">
								<option selected>Choose...</option>
								@for($thang=1;$thang<=12;$thang++)
								<option value="{{$thang}}">{{$thang}}</option>
								@endfor
							</select>
						</div>
						<div class="form-group col-md-4">
							<label for="inputState"></label>
							<select id="inputState" class="form-control" name="nam">
								<option selected>Choose...</option>
								@for($nam=1990;$nam<=2000;$nam++)
								<option value="{{$nam}}">{{$nam}}</option>
								@endfor
							</select>
						</div>					
						<div class="form-group row">
							<div class="col-sm-10">
								<button type="submit" class="btn btn-primary">Sign in</button>
							</div>
						</div>	
					</form>
				</div>
				<div class="col-sm-1">
					<h2 class="or">OR</h2>
				</div>
				<div class="col-sm-4 ">
					<form method="post" action="{!! route('signup') !!}">
						{{ csrf_field() }}
						@if (count($errors) > 0)
						<div class="alert alert-danger">
							<ul>
								@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
						@endif
						{{ csrf_field() }}
						<input type="hidden" name="_token" value="{!! csrf_token() !!}">
						<div class="form-group">
							<label for="exampleInputEmail1">Email address</label>
							<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email1">
							
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Password</label>
							<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="matkhau1">
						</div>

						<button type="submit" class="btn btn-primary">Submit</button>
					</form>
				</div>
			</div>
		</div>
	</section><!--/form-->
	<script src="js/jquery.js"></script>
	<script src="js/price-range.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.prettyPhoto.js"></script>
	<script src="js/main.js"></script>
<!-- 	<script language="javascript">
		
		function thang1(obj){
			var message = document.getElementById('show_message');
				var value = obj.value;
				
				if(value === '2'){
			alert("ok");
		}
		}
	
	</script> -->
</body>
</html>