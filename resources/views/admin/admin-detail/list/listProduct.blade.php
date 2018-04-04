@extends('admin.admin-detail.list')

@section('title')
    List Brand
@endsection

@section('table')
    {!! Form::open(array('route'=>array('brand.update',$data['id']),'method'=>'PUT')) !!}
    {{ csrf_field() }}
    <input type="hidden" name="_token" value="{!! csrf_token() !!}">
    <div class="w3_agileits_main_grid w3l_main_grid">
						<span class="agileits_grid">
							<label>Select Category </label></span>
        <select name="cate">
            <option value="{!! $data['category_id'] !!}" disabled="disabled" selected=""><?php getcate($data["category_id"],$cate) ?></option>
            @foreach($cate as $key)
                <option value="{!! $key['id'] !!}">{!! $key["name"] !!}</option>
            @endforeach()
        </select>
    </div>
    <div class="w3_agileits_main_grid w3l_main_grid">
        <span class="agileits_grid">
            <label> name </label>
            <input type="text" name="brand" placeholder="Name" required="" value=" {!! old('name',isset($data) ? $data['brand'] : null) !!} ">
        </span>
    </div>

    <div class="w3_main_grid">
        <div class="w3_main_grid_right">
            <input type="submit" value="Submit">
        </div>
    </div>
    </form>
@endsection