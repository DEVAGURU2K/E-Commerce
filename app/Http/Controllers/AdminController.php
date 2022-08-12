<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Models\AdminPage;
use App\Models\addcags;


use Hash;


class AdminController extends Controller
{
    //
    public function adminCheck(Request $request){

        $request->validate([
            'name'=>'required',
            'password'=>'required',
        ]);

        // $name = $request->get('name');
        // $password = $request->get('password');
        $user=AdminPage::where('username',$request->name)->first();
        $password=AdminPage::where('username',$request->password)->first();
        if($user) {
            if($password){
                return view ('AdminPage');
            }
            else{
                return 'inccorect password';

            }
        }
        else{

            return  'Incorrect username ';
        }
    }

 public function InsertAddCag(Request $request ){

    $cag=new addcags;
    $cag->categoriesname=$request->input('newcag');
    $cag->save();
    return  redirect('/addcategories');
 }

 public function ViewCag(Request $request){

    $data=addcags::all();
    return view('AddCategories',compact('data'));
 }

 public function CagEdit($id){
    $modify=addcags::find($id);
    return view('EditForm',compact('modify','id'));

 }
 public function CagUpdate(Request $request,$id){

    $update=addcags::find($id);
    $update->categoriesname=$request->input('newcag');
    $update->save();
    return redirect('/addcategories');

 }

 public function CagDelete($id){
    $remove=addcags::find($id);
    $remove->delete();
    return redirect('/addcategories');

 }


}
