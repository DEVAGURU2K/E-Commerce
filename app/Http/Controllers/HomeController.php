<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\addproduct;
use App\Models\addtocart;
use App\Models\addcags;

class HomeController extends Controller
{
    //
    public function HomePage(){
        $data = addproduct::all();
        $cag = addcags::all();
        $totalcart= addtocart::all()->count();

        return view('home',compact('data','cag','totalcart'));
    }
    public function Filterprodcuct($data){
        $cag = addcags::all();
        $totalcart= addtocart::all()->count();

        return view('home',compact('data','cag','totalcart'));
    }
    public function FilterCag(Request $request){
          $id=  $request->input('category');
          $fetch = addproduct::query();
          $product=$fetch->where(['categories_name'=>$id])->get();
          return response ()->json([
            'product'=>$product
          ]);
          echo $product;
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

    }
}
