@extends('admin.admin-detail.list')

@section('title')
    List Category
@endsection

@section('table')
    <div class="tbl-header">
      <table cellpadding="0" cellspacing="0" border="0">
        <thead>
          <tr>
            <th>STT</th>
            <th>Name</th>
            
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
            <td>{{ $b->name }}</td>
            
            <td>{{ $b->keywords }}</td>
            <th>

              {!! Form::open(array('route'=>array('category.destroy',$b->id),'method'=>'DELETE')) !!}
              <button type="submit">Xóa</button>
              {!! Form::close() !!}
            </th>
            <th>
             <a href="{!! route('category.edit',$b->id) !!}">Sửa</a>
           </th>			
         </tr>
         @endforeach

       </tbody>
     </table>
   </div>
@endsection