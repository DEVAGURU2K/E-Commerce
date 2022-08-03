<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\addcags;
use App\Models\addproduct;



class AddProductController extends Controller
{
    //

    public function AddProduct(){
        $cag=addcags::all();
        return view('AddProductForm',compact('cag'));
     }
     public function AddProductpage(){
        $data= addcags::all();
        return view('AddProduct',compact('data'));
     }
     public function store(Request $request){
        $request->validate([
            'categories_name' => 'required',
            'productname' => 'required',
            'brandname' => 'required',
            'price' => 'required',
            'maxprice' => 'required',
            'post' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);

        if($request->file('image')){
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/Image'), $filename);
            $data['image']= $filename;

        $add=new addproduct;
        $add->categories_name= $request->input('cagid');
        $add->productname= $request->input('productname');
        $add->brandname= $request->input('brandname');
        $add->price = $request->input('price');
        $add->maxprice= $request->input('maximumprice');
        $add->post= $request->file->filename();
        $add->save();


     }
}
