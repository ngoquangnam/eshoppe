@extends('admin.admin-detail.add.add')

@section('title')
    Add Color
@endsection

@section('form')
<form action="{!! route('product.store') !!}" enctype="multipart/form-data" method="post" class="w3_form_post">
    {{ csrf_field() }}
    <input type="hidden" name="_token" value="{!! csrf_token() !!}">
    <div class="w3_agileits_main_grid w3l_main_grid">
        <span class="agileits_grid">
            <label>Select Category </label></span>
            <select name="cate">
                <option value="none" disabled="true" selected="">chọn category</option>
                <?php showcate($data) ?>                                    
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
                <label style="color: white;font-size: 20px"><input type="checkbox" value="{!! $color['id'] !!}" name="color[]">{!! $color["color"] !!}</label>
                @endforeach 
            </div>                          
            <div class="w3_agileits_main_grid w3l_main_grid">                           
                <span class="agileits_grid">
                    <label>Select size </label></span>
                    @foreach($data2 as $size)
                    <label style="color: white;font-size: 20px"><input type="checkbox" value="{!! $size['id'] !!}" name="size[]">{!! $size["size"] !!}</label>
                    @endforeach 
                </div>  
                <div class="w3_agileits_main_grid w3l_main_grid">
                    <span class="agileits_grid">
                        <label>Name product </label>
                        <input type="text" name="name" placeholder="Name product" >
                    </span>
                </div>

                <div class="w3_agileits_main_grid w3l_main_grid">
                    <span class="agileits_grid">
                        <label>Price</label>
                        <input type="text" name="price" placeholder="Price product" >
                    </span>
                </div>
                <div class="w3_agileits_main_grid w3l_main_grid">
                    <span class="agileits_grid">
                        <label>warranty</label>
                        <input type="text" name="warranty" placeholder="warranty" >
                    </span>
                </div>
                <div class="w3_agileits_main_grid w3l_main_grid">
                    <span class="agileits_grid">
                        <label>Image</label>
                        <input type="file" name="fimage">
                    </span>
                </div>
                <div class="w3_agileits_main_grid w3l_main_grid">
                    <span class="agileits_grid">
                        <label>Add information</label>
                        <textarea name="addinfo" id="txtarea1" cols="50" rows="6" class="form-control1"></textarea>
                    </span>
                </div>
                <div class="w3_agileits_main_grid w3l_main_grid">
                    <span class="agileits_grid">
                        <label>Discription</label>
                        <textarea name="discription" id="txtarea1" cols="50" rows="6" class="form-control1"></textarea>
                    </span>
                </div>
                <div class="w3_agileits_main_grid w3l_main_grid">
                    <span class="agileits_grid">
                        <label>Review</label>
                        <textarea name="review" id="txtarea1" cols="50" rows="6" class="form-control1"></textarea>
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