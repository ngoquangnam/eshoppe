@extends('admin.admin-detail.add.add')

@section('title')
    Add Color
@endsection

@section('form')
    <form action="{!! route('size.store') !!}" method="post" class="w3_form_post">
        {{ csrf_field() }}
        <input type="hidden" name="_token" value="{!! csrf_token() !!}">
        <div class="w3_agileits_main_grid w3l_main_grid">
            <span class="agileits_grid">
                <label>Size </label>
                <input type="text" name="name" placeholder="Size" required="">
            </span>
        </div>
        <div class="w3_agileits_main_grid w3l_main_grid">
            <span class="agileits_grid">
                <label>Key word</label>
                <input type="text" name="key" placeholder="Key word" required="">
            </span>
        </div>
        <div class="w3_main_grid">
            <div class="w3_main_grid_right">
                <input type="submit" value="Submit">
            </div>
        </div>
    </form>
@endsection