@extends('admin.admin-detail.edit')

@section('title')
    Edit Brand
@endsection

@section('form')
{!! Form::open(array('route'=>array('product.update',$data['id']),'method'=>'PUT','enctype'=>'multipart/form-data')) !!}
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
            <label>Select Brand </label></span>
            <select name="brand">
                <option value="none" disabled="true" selected="">chọn brand</option>
                @foreach($brand as $item)
                <option value="{!! $item['id'] !!}">{!!$item["brand"]!!}</option>
                @endforeach()                                   
            </select>
        </div>
    <div class="w3_agileits_main_grid w3l_main_grid">                           
        <span class="agileits_grid">
            <label>Select color </label></span>
            @foreach($data1 as $color)
            <label style="color: white;font-size: 20px"><input type="checkbox" value="{!! $color['id'] !!}" name="color[]" <?php checkcolor($color["id"],$datacolor) ?> >{!! $color["color"] !!}</label>
            @endforeach 
        </div>                          
        <div class="w3_agileits_main_grid w3l_main_grid">                           
            <span class="agileits_grid">
                <label>Select size </label></span>
                @foreach($data2 as $size)
                <label style="color: white;font-size: 20px"><input type="checkbox" value="{!! $size['id'] !!}" name="size[]" <?php checksize($size["id"],$datasize) ?> >{!! $size["size"] !!}</label>
                @endforeach 
            </div>  
            <div class="w3_agileits_main_grid w3l_main_grid">
                <span class="agileits_grid">
                    <label>Name product </label>
                    <input type="text" name="name" placeholder="Name product" value=" {!! old('name',isset($data) ? $data['name'] : null) !!} ">
                </span>
            </div>

            <div class="w3_agileits_main_grid w3l_main_grid">
                <span class="agileits_grid">
                    <label>Price</label>
                    <input type="text" name="price" placeholder="Price product" value=" {!! old('price',isset($data) ? $data['price'] : null) !!} ">
                </span>
            </div>
            <div class="w3_agileits_main_grid w3l_main_grid">
                <span class="agileits_grid">
                    <label>Warranty</label>
                    <input type="text" name="warranty" placeholder="Warranty" value=" {!! old('warranty',isset($data) ? $data['warraties'] : null) !!} ">
                </span>
            </div>
            <div class="w3_agileits_main_grid w3l_main_grid">
                <span class="agileits_grid">
                    <label>Image current</label></span>
                    <img src="{!! asset('resources/upload/'.$data['image']) !!}" style="width: 150px;
                    height: 100px;">

                </div>
                <div class="w3_agileits_main_grid w3l_main_grid">
                    <span class="agileits_grid">
                        <label>Image</label></span>
                        <input type="file" name="fimage" >

                    </div>
                    <div class="w3_agileits_main_grid w3l_main_grid">
                        <span class="agileits_grid">
                            <label>Add information</label>
                            <textarea name="addinfo" id="txtarea1" cols="50" rows="6" class="form-control1" >{!! old('addinfo',isset($data) ? $data['add_info'] : null) !!}</textarea>
                        </span>
                    </div>
                    <div class="w3_agileits_main_grid w3l_main_grid">
                        <span class="agileits_grid">
                            <label>Discription</label>
                            <textarea name="discription" id="txtarea1" cols="50" rows="6" class="form-control1" > {!! old('discription',isset($data) ? $data['discription'] : null) !!}</textarea>
                        </span>
                    </div>
                    <div class="w3_agileits_main_grid w3l_main_grid">
                        <span class="agileits_grid">
                            <label>Review</label>
                            <textarea name="review" id="txtarea1" cols="50" rows="6" class="form-control1" >{!! old('review',isset($data) ? $data['review'] : null) !!} </textarea>
                        </span>
                    </div>
                    <div class="w3_agileits_main_grid w3l_main_grid">
                        <span class="agileits_grid">
                            <label>Image detail</label>

                            @for($i = 1; $i<3;$i++)
                            <label> <input type="file" name="image[]"></label>

                            @endfor
                        </span>
                    </div>
                    <div class="w3_main_grid">
                        <div class="w3_main_grid_right">
                            <input type="submit" value="Submit">
                        </div>
                    </div>
                </form>
@endsection