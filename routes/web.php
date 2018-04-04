<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/',function(){
	return view('temp.index');
})->name('index');

Route::get('checkout',function(){
	return view('temp.checkout');
})->name('checkout');

Route::get('admin',function(){
	return view('temp.main1');
})->name('admin');

Route::group(['prefix'=>'login'],function(){
	Route::get('/',function(){
		return view('temp.login');
	})->name('login');
	Route::post('/signin',['as'=>'signin','uses'=>'loginController@signin']);
	Route::post('/signup',['as'=>'signup','uses'=>'loginController@signup']);
	Route::get('checkout',['as'=>'checkout','uses'=>'loginController@checkout']);
});

Route::group(['prefix'=>'shopping'],function(){
	Route::get('muahang/{id}',['as'=>'muahang','uses'=>'cartController@muahang']);
	Route::get('giohang',function(){
		return view('temp.cart');
	})->name('giohang');
	Route::get('xoagiohang',['as'=>'xoagiohang','uses'=>'cartController@xoagiohang']);
	Route::post('donhang',['as'=>'donhang','uses'=>'cartController@donhang']);
	Route::get('dathang',['as'=>'dathang','uses'=>'cartController@dathang']);
	Route::get('brand/{id}',['as'=>'brand','uses'=>'cartcontroller@brand']);
	Route::get('loaisanpham/{id}',['as'=>'loaisanpham','uses'=>'cartcontroller@loaisanpham']);
	
});

route::resources([
	'category' => 'categoryController',
	'product' => 'productController',
	'brand' => 'brandController',
	'color' => 'colorController',
	'size' => 'sizeController',
	'order' => 'orderController'
]);


Route::get('sanpham/{id}',['as'=>'sanpham','uses'=>'buyproductController@sanpham']);

Route::post('search',['as'=>'search','uses'=>'cartcontroller@search']);

Route::get('test',function(){
	return view('admin.admin-detail.add.addcate');
});

