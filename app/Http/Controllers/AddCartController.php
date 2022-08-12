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
        $cart->productname=$fetch->productname;
        $cart->quantity=$request->input('quantity');
        $cart->price=$fetch->price;
        $cart->prices=$fetch->price;
        $cart->productimage=$fetch->post;
        $cart->save();
        session()->flash('message', 'add to cart added successfully.');
        Session()->flash('alert-class', 'alert-danger');
        return redirect()->back();
    }

   public function Viewcart(){
    $data=addtocart::all();
    return  view("viewaddcart",compact('data'));
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
