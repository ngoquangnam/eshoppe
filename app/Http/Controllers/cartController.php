<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use Illuminate\Support\Facades\Auth;
use App\product;
use App\productcolor;
use App\productsize;
use App\size;
use App\brand;
use App\color;
use App\image;
use App\category;
use App\customer;
use App\bill;
use App\bill_detail;
class cartController extends Controller
{
	public function loaisanpham($id){
		$product = product::where('category_id',$id)
							->get()->toArray();
		return view('temp.category-product',compact('product'));
	}
	public function brand($id){
		$product = product::where('brand_id',$id)
							->get()->toArray();
		return view('temp.brand-product',compact('product'));
	}
	public function muahang($id){
		$product_buy = product::where('id',$id)->first();
		Cart::add(array('id'=>$id,'name'=>$product_buy->name,'qty'=>1,'price'=>$product_buy->price,'options'=>array('img'=>$product_buy->image)));		
		$giohang = Cart::content();
		$total = Cart::total();
		session()->put('total',$total);
		session()->put('giohang',$giohang);
		$count = Cart::count();
		session()->put('count',$count);
		return redirect()->back();
	}
	public function xoagiohang(){
		Cart::destroy();
		return redirect()->route('index');
	}
	public function dathang(){
		$bill = new bill;
		$bill->customer_id = Auth::user()->id;
		$bill->date_order = date('Y-m-d');
		$bill->total = Cart::total();
		$bill->save();

		if(Cart::count()>0){

			foreach(Cart::content() as $item){
				$bill_detail = new bill_detail;
				$bill_detail->bill_id = $bill->id;
				$bill_detail->product_id = $item->id;
				$bill_detail->qty = $item->qty;
				$bill_detail->save();
			}
		}
		Cart::Destroy();
		return redirect()->route('index');
	}
	public function search (Request $request)
	{
		$product1 = product::where('name','like','%'.$request->key.'%')->orWhere('price','like','%'.$request->key.'%')->get()->toArray();
		return view('temp.search',compact('product1'));
	}
}
