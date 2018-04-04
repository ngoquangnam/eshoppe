@extends('admin.admin-detail.list')

@section('title')
    List Color
@endsection

@section('table')
    <div class="tbl-header">
      <table cellpadding="0" cellspacing="0" border="0">
        <thead>
          <tr>
            <th>STT</th>
            <th>Color</th>
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
            <td>{{ $b->color }}</td>         
            <td>{{ $b->keyword }}</td>
            <th>
              
  {!! Form::open(array('route'=>array('color.destroy',$b->id),'method'=>'DELETE')) !!}
<button type="submit">Xóa</button>
  {!! Form::close() !!}
           </th>
           <th>
             <a href="{!! route('color.edit',$b->id) !!}">Sửa</a>
           </th>			
         </tr>
         @endforeach

       </tbody>
     </table>
   </div>
@endsection