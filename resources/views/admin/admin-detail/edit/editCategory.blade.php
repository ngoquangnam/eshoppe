@extends('admin.admin-detail.edit')

@section('title')
    Edit Brand
@endsection

@section('form')
    {!! Form::open(array('route'=>array('category.update',$data['id']),'method'=>'PUT')) !!}
    {{ csrf_field() }}
    <input type="hidden" name="_token" value="{!! csrf_token() !!}">
    <div class="w3_agileits_main_grid w3l_main_grid">
    <span class="agileits_grid">
        <label>Select Category </label></span>
        <select name="cate">
            <option value="{!! $data['id'] !!}" disabled="disabled" selected="">
                <?php getcate($data["id"],$cate) ?>
                    
            </option>
            <option value=0>loại chính</option>
            <?php showcate($cate) ?>
        </select>
    </div>
    <div class="w3_agileits_main_grid w3l_main_grid">
        <span class="agileits_grid">
            <label> name </label>
            <input type="text" name="name" placeholder="Name" required="" value=" {!! old('name',isset($data) ? $data['name'] : null) !!} ">
        </span>
    </div>                      
    <div class="w3_agileits_main_grid w3l_main_grid">
        <span class="agileits_grid">
            <label>key word </label>
            <input type="text" name="key" placeholder="key word " required="" value=" {!! old('key',isset($data) ? $data['keywords'] : null) !!}">
        </span>
    </div>
    <div class="w3_main_grid">
        <div class="w3_main_grid_right">
            <input type="submit" value="Submit">
        </div>
    </div>
    </form>
@endsection