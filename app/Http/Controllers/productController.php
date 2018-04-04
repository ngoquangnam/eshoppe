<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;
use App\image;
use App\category;
use App\color;
use App\productcolor;
use App\size;
use App\productsize;
use App\brand;

class productController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bien = product::all();
        $bien1 = image::all();
        $data = category::select('id','name')->get()->toArray();
        $brand = brand::select('id','brand')->get()->toArray();
        $data1 = color::select('id','color')->get()->toArray();
        $data2 = size::select('id','size')->get()->toArray();
        return view('listproduct',compact('bien','data','data1','data2','brand'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = category::select('id','name','parent_id')->get()->toArray();
        $brand = brand::select('id','brand')->get()->toArray();
        $data1 = color::select('id','color')->get()->toArray();
        $data2 = size::select('id','size')->get()->toArray();
        return view('addproduct',compact('data','data1','data2','brand'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file_name = $request->file('fimage')->getClientOriginalName();
        $ad = new product();
        $ad->category_id = $request->cate;
        $ad->brand_id = $request->brand;
        $ad->name = $request->name;
        $ad->price = $request->price;
        $ad->warranties = $request->warranty;
        $ad->image = $file_name;
        $ad->add_info = $request->addinfo;
        $ad->discription = $request->discription;
        $ad->review = $request->review;
        $request->file('fimage')->move('resources/upload/',$file_name);
        $ad->save();
        $pro_id = $ad->id;
        if($request->hasFile('image')){
            foreach ($request->file('image')as $file) {
                $pro_img = new image();
                if(isset($file))
                {
                    $pro_img->image = $file->getClientOriginalName();
                    $pro_img->product_id = $pro_id;
                    $file->move('resources/upload/detail/',$file->getClientOriginalName());
                    $pro_img->save();
                }
            }
        }
        
        foreach ( $request->color as $key) {
            $pro_color = new productcolor();
            $pro_color->product_id =  $pro_id;
            $pro_color->color_id = $key;
            $pro_color->save();
        }
        foreach ( $request->size as $key1) {
            $pro_size = new productsize();
            $pro_size->product_id =  $pro_id;
            $pro_size->size_id = $key1;
            $pro_size->save();
        }
        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = product::findOrFail($id);
        $cate = category::select('id','name')->get()->toArray();
        $brand = brand::select('id','brand')->get()->toArray();
        $datacolor = productcolor::where('product_id',$id)->get()->toArray();
        $datasize = productsize::where('product_id',$id)->get()->toArray();
        $data1 = color::select('id','color')->get()->toArray();
        $data2 = size::select('id','size')->get()->toArray();
        return view('editproduct',compact('data','cate','data1','data2','datacolor','datasize','brand'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $file_name = $request->file('fimage')->getClientOriginalName();
      $bien = product::find($id);
      $bien->category_id = $request->cate;
      $bien->brand_id = $request->brand;
      $bien->name = $request->name;
      $bien->price = $request->price;
      $bien->image = $file_name;
      $bien->add_info = $request->addinfo;
      $bien->discription = $request->discription;
      $bien->review = $request->review;
      $bien->category_id = $request->cate;     
      $request->file('fimage')->move('resources/upload/',$file_name);
      $bien->save();
      $pro_id = $bien->id;
      if($request->hasFile('image')){
        image::where('product_id',$id)->delete();
        foreach ($request->file('image')as $file) {
            $pro_img = new image();
            if(isset($file))
            {
                $pro_img->image = $file->getClientOriginalName();
                $pro_img->product_id = $pro_id;
                $file->move('resources/upload/detail/',$file->getClientOriginalName());
                $pro_img->save();
            }
        }
    }
    productcolor::where('product_id',$id)->delete();
    productsize::where('product_id',$id)->delete();
    foreach ( $request->color as $key) {
        
        $pro_color = new productcolor();
        $pro_color->product_id =  $pro_id;
        $pro_color->color_id = $key;
        $pro_color->save();
    }
    foreach ( $request->size as $key1) {

        $pro_size = new productsize();
        $pro_size->product_id =  $pro_id;
        $pro_size->size_id = $key1;
        $pro_size->save();
    }
    return redirect()->route('product.index');
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bien = product::findOrFail($id);
        $bien->delete();
        return redirect()->route('product.index');
    }

}
