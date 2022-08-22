<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\addtocart;
use App\Models\addproduct;

class AddCartController extends Controller
{
    //
    public function Addcart(Request $request , $id){
        $cart = new addtocart;
        $fetch= addproduct::find($id);
        $check= addtocart::where([["productname", $fetch->productname],])->first();
        if ($check != ""){
            $value= $check->id;
            $price =$check->price;
            $update= addtocart::find($value);
            $update->quantity += 1;
            $update->prices+= 1*$price;
            $update->save();
            return  redirect()->back();
        }
        else{
            $cart->productname=$fetch->productname;
            $cart->quantity=$request->input('quantity');
            $cart->price=$fetch->price;
            $cart->prices=$fetch->price;
            $cart->productimage=$fetch->post;
            $cart->save();
            return redirect()->back();
        }

    }

   public function Viewcart(){
    $data=addtocart::all();
    return  view("viewaddcart",compact('data'));
   }

public function Filtercart($data){
    return view("viewaddcart",compact('data'));

}

 public function Deletecart($id){
     $prd = addtocart::find($id);
     $prd->delete();
     $data=addtocart::all();
     return  view("viewaddcart",compact('data'));
 }

public function IncreaseQuality($id){
    $prd = addtocart::find($id);
    if($prd->quantity >= 1){
        $prd->quantity=$prd->quantity+1;
        $prd->prices=$prd->price * $prd->quantity;
        $prd->save();
    }
    else{

        return redirect()->back();
}
    $data = addtocart::all();
    return view('viewaddcart',compact('data'));

}
public function DecreaseQuality($id){
    $prd = addtocart::find($id);
    if($prd->quantity == 1){
         redirect()->back();
    }
    else{
        $prd->quantity=$prd->quantity-1;
        $prd->prices=$prd->prices - $prd->price;
        $prd->save();

    }
     $data = addtocart::all();
    return view('viewaddcart',compact('data'));
}
}
