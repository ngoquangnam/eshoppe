
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>list</title>
</head>
<body>
	<form action="{!! route('admin.store') !!}" method="POST">
		{{ csrf_field() }}
		<input type="hidden" name="_token" value="{!! csrf_token() !!}">
		<label for="">name</label>
		<input type="text" name="txtname" ><br>
		<label for="">price</label>
		<input type="text" name="txtprice"  ><br><br>
		<label for="">content</label>
		<input type="text" name="txtcontent" ><br>
		<label for="">image</label>
		<input type="text" name="txtimage"  ><br>
		<input type="submit" value="submit" >
	</form>
</body>
</html>