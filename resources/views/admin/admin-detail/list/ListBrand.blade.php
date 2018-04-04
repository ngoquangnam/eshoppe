@extends('admin.admin-detail.list')

@section('title')
    List Brand
@endsection

@section('table')
    <div class="tbl-header">
      <table cellpadding="0" cellspacing="0" border="0">
        <thead>
          <tr>
            <th>STT</th>
            <th>Category</th>         
            <th>Brand</th>
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
            <td><?php getcate($b->category_id,$data) ?></td>
            <td>{{ $b->brand }}</td>
            <th>

              {!! Form::open(array('route'=>array('brand.destroy',$b->id),'method'=>'DELETE')) !!}
              <button type="submit">Xóa</button>
              {!! Form::close() !!}
            </th>
            <th>
             <a href="{!! route('brand.edit',$b->id) !!}">Sửa</a>
           </th>			
         </tr>
         @endforeach

       </tbody>
     </table>
   </div>
@endsection