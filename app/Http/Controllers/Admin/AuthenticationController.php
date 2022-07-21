<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AuthenticationController extends Controller
{
   public function register(){
    return view('admin.authentication.registration');
   }
   public function login(){
    return view('admin.authentication.login');
   }

   public function loginregistration(Request $request){
       $request->validate([
           'email' => 'required',
           'password' => 'required',
       ]);
       $checkifExist = User::where(['email' => $request->email, 'password' => $request->password])->first();
       if($checkifExist){
           return redirect("table")->withSuccess('Oppes! You have entered invalid credentials');
       }else{
           return redirect()->back()->withSuccess('Oppes! You have entered invalid credentials');

       }
   }
   public function postregistration(Request $request){
       $request->validate([
           'name'=>'required',
           'email'=>'required|email|unique:users',
           'password'=>'required | min:6',
       ]);
       $data=$request->all();
       $check = User::create($data);
       if($check) {
           return redirect('login')->withsuccess('login');
       }
       function users(){
           $data['result']=DB:: table('users')->get();
           return view('table',$data);
       }

   }
}
