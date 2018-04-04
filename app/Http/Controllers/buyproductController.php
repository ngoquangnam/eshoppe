<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Cart;
use App\product;
use App\brand;
use App\productcolor;
use App\productsize;
use App\size;
use App\color;
use App\image;
use App\category;
use App\customer;
use App\bill;
use App\bill_detail;
class buyproductController extends Controller
{
	public function sanpham($id)
	{
		//method first return the object
		$sanpham = product::where('id',$id)->first();
		$color_id = productcolor::where('product_id',$id)->select('color_id')->get()->toArray();
		$color = color::all();
		$brand = brand::where('id',$sanpham['brand_id'])->select('id','brand')->first();
		$category = category::where('id',$sanpham['category_id'])->select('id','name')->first();
		$size_id = productsize::where('product_id',$id)->select('size_id')->get()->toArray();
		$size = size::all();
		$image1 = image::where('product_id',$id)->get()->first()->toArray();
		$image2 = image::where('id','>',$image1['id'])->get()->first()->toArray();
		return view('temp.product-details',compact('sanpham','color_id','color','size_id','size','image1','image2','brand','category'));

	}
}
