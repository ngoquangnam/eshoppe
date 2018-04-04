
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>list</title>
</head>
<body>
  {!! Form::open(array('route'=>array('admin.update',$data['id']),'method'=>'PUT')) !!}
    <label for="">name</label>
    <input type="text" name="txtname" value=" {!! old('txtname',isset($data) ? $data['name'] : null) !!} "><br>
    <label for="">price</label>
    <input type="text" name="txtprice"  value=" {!! old('txtprice',isset($data) ? $data['price'] : null) !!} "><br><br>
    <label for="">content</label>
    <input type="text" name="txtcontent"  value=" {!! old('txtcontent',isset($data) ? $data['content'] : null) !!} "><br>
    <label for="">image</label>
    <input type="text" name="txtimage"  value=" {!! old('txtimage',isset($data) ? $data['image'] : null) !!} "><br>
    <input type="submit" value="submit" >
  {!!Form::close() !!}
</body>
</html>