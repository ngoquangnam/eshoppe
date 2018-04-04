

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>edit</title>
  <link href="{{ asset('public/css/admin.css') }}" rel="stylesheet">
</head>
<body>
	<section>
    <!--for demo wrap-->
    <h1>Fixed Table header</h1>
    <div class="tbl-header">
      <table cellpadding="0" cellspacing="0" border="0">
        <thead>
          <tr>
            <th>STT</th>
            <th>Name</th>
            <th>Content</th>
            <th>Price</th>
            <th>Image</th>
            <th>Sửa</th>
            <th>Xóa</th>
          </tr>
        </thead>
      </table>
    </div>
    <div class="tbl-content">
      <table cellpadding="0" cellspacing="0" border="0">
        <tbody>
          <?php $stt = 0; ?>
          @foreach($bien as $b)
          <?php $stt = $stt+1; ?>
          <tr>
            <td>{{$stt}}</td>
            <td>{{ $b->name }}</td>
            <td>{{ $b->content }}</td>
            <td>{{ $b->price }}</td>
            <td>{{ $b->image }}</td>
            <th>
              
  {!! Form::open(array('route'=>array('admin.destroy',$b->id),'method'=>'DELETE')) !!}
<button type="submit">Xóa</button>
  {!! Form::close() !!}
           </th>
           <th>
             <a href="{!! route('admin.edit',$b->id) !!}">Sửa</a>
           </th>			
         </tr>
         @endforeach

       </tbody>
     </table>
   </div>
 </section>


 <!-- follow me template -->
 <div class="made-with-love">
  Made with
  <i>♥</i> by
  <a target="_blank" href="https://codepen.io/nikhil8krishnan">Nikhil Krishnan</a>
</div>
</body>
</html>