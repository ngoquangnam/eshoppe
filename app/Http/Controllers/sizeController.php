<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\size;
class sizeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $bien = size::all();
      return view('listsize',compact('bien'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addsize');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     $ad = new size;
     $ad->size = $request->name;
     $ad->keyword = $request->key;
     $ad->save();
     return redirect()->route('size.index');
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
       $data = size::findOrFail($id);
       return view('editsize',compact('data')); 
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
      $bien = size::find($id);
      $bien->size = $request->name;
      $bien->keyword = $request->key;
      $bien->save();
      return redirect()->route('size.index');
  }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bien = size::findOrFail($id);
        $bien->delete();
        return redirect()->route('size.index');    
    }
}
