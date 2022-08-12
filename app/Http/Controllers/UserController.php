<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

use App\Models\addcags;
use App\Models\addproduct;
use App\Models\AdminPage;
use App\Models\register;


class UserController extends Controller
{
    //class AdminController extends Controller
    //
    public function userCheck(Request $request){
        // return view('UserDashboard');

        // $request->validate([
        //     'username'=>'required',
        //     'email' => 'required|email|unique:users',
        //     'mobilephone'=>'required',
        //     'password'=>'required|min:6',
        //     'conformpassword'=>'required_with:password|same:password|min:6',
        // ]);

        $name = $request->input('username');
        $password = $request->input('password');
        $username=register::where('username',$request->username)->first();
        $password=register::where('password',$request->password)->first();
        if($username) {
            if($password){
                return view ('UserDashboard');
            }
            else{
                return  "password not match";

            }
        }
        else{

            return  'Incorrect username ';
        }
    }
 public function InsertRegistration(Request $request){
      echo $request->all;
     $insert=new register;
     $insert->username= $request->input('username');
     $insert->email= $request->input('email');
     $insert->mobilephone= $request->input('mobilephone');
     $insert->password = $request->input('password');
     $insert->conformpassword= $request->input('conformpassword');
     $insert->save();

     return redirect('/userlogin');
 }
}
