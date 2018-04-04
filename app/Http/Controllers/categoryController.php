<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;
class categoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bien = category::all();
       
        return view('listcate',compact('bien'));
        //return view('layouts.master',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = category::where('parent_id',0)->select('name','id')->get()->toArray();
        return view('addcate',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     $ad = new category;
     $ad->name = $request->name;
     $ad->parent_id = $request->cate;
     $ad->keywords = $request->key;
     $ad->save();
     return redirect()->route('category.index');
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
        $data = category::findOrFail($id);
        $cate = category::select('id','name','parent_id')->get()->toArray();
        return view('editcate',compact('data','cate'));
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
       $bien = category::find($id);
       $bien->name = $request->name;
       $bien->keywords = $request->key;
       $bien->save();
       return redirect()->route('category.index');
   }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bien = category::findOrFail($id);
        $bien->delete();
        return redirect()->route('category.index');
    }
}
