<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\brand;
use App\category;
class brandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $bien = brand::all();     
      $data = category::all();     
      return view('listbrand',compact('bien','data'));
  }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = category::select('id','name','parent_id')->get()->toArray();
        return view('addbrand',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ad = new brand;
        $ad->brand = $request->Brand;
        $ad->category_id = $request->cate;
        $ad->save();
        return redirect()->route('brand.index');
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
        $data = brand::findOrFail($id);
        $cate = category::select('id','name')->get()->toArray();
        return view('editbrand',compact('data','cate'));
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
        $bien = brand::find($id);
        $bien->brand = $request->brand;
        $bien->category_id = $request->cate;
        $bien->save();
        return redirect()->route('brand.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     $bien = brand::findOrFail($id);
     $bien->delete();
     return redirect()->route('brand.index');
 }
}
