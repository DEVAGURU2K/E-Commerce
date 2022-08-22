<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Stripe;
use App\Models\addtocart;

class StripeController extends Controller
{
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripe()
    {
        $Article = addtocart::sum('prices');
        return view('stripe',compact('Article'));
    }

    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripePost(Request $request )
    {
        $amount = addtocart::sum('prices');
        Stripe\Stripe::setApiKey('sk_test_51LVt6hSEfxiOa6hiRq9ln4Z95tMI5eetbQ1EH9FAy0kImNVlI04LSO8RlJVfEImbRZhL0Uyellu1Qlgyn4ZXz7mA00v6npjqwa');
        \Stripe\PaymentIntent::create([
            'payment_method_types' => ['card'],
            'amount' => $amount*100,
            'currency' => 'inr',
            'description'=>'paymentforpurchase',
          ]);
        Session::flash('success', 'Payment has been successfully processed.');

        return back();
    }

}
