

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
    <h1>List size</h1>
   <h3 ><a class="hvr-outline-out button2" href="{{route('index')}}" style="color:white;text-decoration: none;">Shop Now </a><a class="hvr-outline-out button2" href="{{route('admin')}}" style="color:white;text-decoration: none;">| Admin</a></h3>

    <div class="tbl-header">
      <table cellpadding="0" cellspacing="0" border="0">
        <thead>
          <tr>
            <th>STT</th>
            <th>Size</th>
            <th>keywords</th>
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
            <td>{{ $b->size }}</td>         
            <td>{{ $b->keyword }}</td>
            <th>
              
  {!! Form::open(array('route'=>array('size.destroy',$b->id),'method'=>'DELETE')) !!}
<button type="submit">Xóa</button>
  {!! Form::close() !!}
           </th>
           <th>
             <a href="{!! route('size.edit',$b->id) !!}">Sửa</a>
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