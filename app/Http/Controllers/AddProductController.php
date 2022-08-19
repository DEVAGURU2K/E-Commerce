<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Models\addcags;
use App\Models\addproduct;



class AddProductController extends Controller
{
    //

    public function Productpage(){
        $data =addproduct :: all();
        return view('AddProduct',compact('data'));
     }
     public function AddNewProduct(){
        $cag= addcags::all();
        return view('AddProductForm' ,compact('cag'));
     }
     public function store(Request $request){

        //   $request->validate([
        //     'categories_name' => 'required',
        //     'productname' => 'required',
        //     'brandname' => 'required',
        //     'price' => 'required',
        //     'maxprice' => 'required',
        //     'post' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        // ]);

            $image= $request->file('file');
            $imageName = time().'.'.$image->extension();
            $image-> move(public_path('public/Image'), $imageName);


           $add=new addproduct;
           $add->categories_name= $request->input('cagid');
           $add->productname= $request->input('productname');
           $add->brandname= $request->input('brandname');
           $add->price = $request->input('price');
           $add->maxprice= $request->input('maximumprice');
           $add->post= $imageName;
           $add->save();

        $data=addproduct::all();
        return view('AddProduct',compact('data'));
    }

     public function Productdelete($id){
        $prd = addproduct::find($id);
        $prd->delete();
        return redirect('/productpage');


     }
     public function Productedit($id){
        $cag= addcags::all();
        $data=addproduct::find($id);
        return view('EditProductForm',compact('cag','data'));

     }

     public function Producteupdate(Request $request,$id){
        $image= $request->file('file');
        $imageName = time().'.'.$image->extension();
        $image-> move(public_path('public/Image'), $imageName);

        $update = addproduct::find($id);
        $update->categories_name= $request->input('cagid');
        $update->productname= $request->input('productname');
        $update->brandname= $request->input('brandname');
        $update->price = $request->input('price');
        $update->maxprice= $request->input('maximumprice');
        $update->post= $imageName;
        $update->save();



        return redirect('/productpage');
     }
}
