<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\addproduct;
use App\Models\addcags;

class HomeController extends Controller
{
    //
    public function HomePage(){
        $data = addproduct::all();
        $cag = addcags::all();

        return view('home',compact('data','cag'));
    }
    public function FilterCag(Request $request){
          $id=  $request->input('category');
          $fetch = addproduct::query();
          $product=$fetch->where(['categories_name'=>$id])->get();
          return response ()->json([
            'product'=>$product
          ]);
          echo $product;
        // $id=$request->input('id');
        // $id = $_GET['category'];
        // return $id;
        // $fetch = addproduct::query();
        // if($request->ajax()){
        //     echo $request->category;
        //     $product=$fetch->where(['categories_name'=>$request->category])->get();
        //     return response()->json(['product'=>$product]);
        // }
        // $product =$query->get();
        //  return view('change',compact('product'));
        // // $cagvalue=$request->get('categories');
        // return $cagvalue;
        // $fetch = addproduct::find($id);
        // echo $fetch;
        // return view('viewaddcart');
    }

    public function FilterProduct(Request $request){
        // $input = Input::all();
        // echo $input
        $id=  $request->input('product');
        $fetch = addproduct::query();
        $products=$fetch->where(['productname'=>$id])->get();
          return response ()->json([
            'products'=>$products
          ]);
        // $products = addproduct::where('productname',$id)->get();
        // // $products=$fetch->where(['productname'=>$id])->get();
        // // $product=$fetch->where(['product_name'=>$id])->get();
        // return response ()->json([
        //   'products'=>$products
        // ]);

    }
}
