<?php

namespace App\Http\Controllers;
use App\bill;
use App\customer;
use App\bill_detail;
use Cart;
use Illuminate\Http\Request;

class orderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $order = bill::join('customers','customers.id','=','bills.customer_id')
                        ->select('bills.*','customers.*')
                        ->get()->toArray();
        return view('admin-shop.order',compact('order'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bill_detail = bill::join('bill_details','bills.id','=','bill_details.bill_id')
                        ->join('customers','customers.id','=','bills.customer_id')
                        ->join('products','products.id','=','bill_details.product_id')
                        ->where('bills.customer_id',$id)
                        ->select('bills.*','bill_details.*','customers.*','products.*')
                        ->get()->toArray();
        return view('admin-shop.bill_detail',compact('bill_detail'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
