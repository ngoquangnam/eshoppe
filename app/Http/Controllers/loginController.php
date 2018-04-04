<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Validator;
use App\customer;
use Hash;
use DB;
use Cart;
use Illuminate\Http\Request;

class loginController extends Controller
{
	public function checkout(){
		if(Auth::check()){
			return view('temp.checkout');
		}
		else{
			return redirect()->route('login');
		}
	}
	public function signin(Request $request){
		$validator = Validator::make($request->all(),[

			'ten' => 'required',
			'email' => 'required|unique:customers',
			'matkhau' => 'required',
			'nhaplai' => 'required|same:matkhau',
			'diachi' => 'required',
			'sodt' => 'required'
		
		],
		[
			'email.unique' => 'email bi trung',
			'ten.required' => 'vui long nhap ten',
			'email.required' => 'vui long nhap email',
			'password.required' => 'vui long nhap password',
			'nhaplai.required' => 'nhap dung password',
			'nhaplai.same' => 'mat khau nhap lai khong dung',
			'diachi.required' => 'vui long nhap dia chi',
			'sodt.required' => 'vui long nhap sodt'
			

		]);

		if($validator->fails()){
			return redirect()->back()
			->withErrors($validator)
			->withInput();
		}
		else{
			$date = Carbon::createFromDate($request->nam, $request->thang, $request->ngay);
			$login = new customer;
			$login->email = $request->email;
			$login->name = $request->ten;
			$login->password = Hash::make($request->matkhau);
			$login->remember_token = $request->_token;
			$login->diachi = $request->diachi;
			$login->sodt = $request->sodt;
			$login->note = 1;
			$login->ngaysinh = $date;
			$login->save();
			return redirect()->back();
		}
	}
	public function signup(Request $request){
		$validator = Validator::make($request->all(),[
			'email1' => 'required',
			'matkhau1' => 'required'
		],[
			'email1.required' => 'vui long nhap email',
			'matkhau1.required' => 'vui long nhap mat khau',
		]);
		if($validator->fails()){
			return redirect()->back()
					->withErrors($validator)
					->withInput();
		}
		else{
			if($request->email1 == "admin@gmail.com" && $request->matkhau1 == "admin"){
				return view('temp.main1');
			}
			else{
				if(Auth::attempt([
					'email' => $request->email1,
					'password' => $request->matkhau1
					]))
				{
					// $customer = Auth::user()->sodt;
					// //echo $customer;
					// $request->session()->put('key', $customer);
					return redirect()->route('index');
				}
					else{
						return redirect()->route('index');
						}
				}
			}
			
	}
}
