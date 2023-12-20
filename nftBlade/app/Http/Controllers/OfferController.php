<?php

namespace App\Http\Controllers;

use App\Offer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OfferController extends Controller
{

    // public function submit(Request $request) {
    //     //check if the user is logged in
    //     if(Auth::check()) {
    //         // user is already logged in, submit the offer and redirect to purchaseSuccess page
    //         $this->submitOffer($request);
    //         return redirect('/purchase success');
    //     }
    //     else {
    //         //user is not logged in, attempt to authenticate or register the user
    //         $credentials = $request->only('email', 'password');
    //         if (Auth::attempt($credentials)) {
    //             // user was authenticated, submit the offer and redirect to purchaseSuccess page
    //             $this->submitOffer($request);
    //             return redirect('/purchaseSuccess');
    //         }
    //         else {
    //             //user was not authenticated, attempt to register the user
    //             $this->registerUser($request);
    //             //attempt to authenticate the newly registered use, redirect to login page with error message
    //             return redirect('/login')->with('error', 'Unable to log in with the provided credentials.');
    //         }
    //     }
    // }

    // public function submitOffer(Request $request) {
    //     $offer = new Offer;

    //     $offer->card_number = $request->input('card_number');
    //     $offer->price = $request->input('price');
    //     $offer->image_id = $request->input('image_id');
    //     $offer->save();

    //     return redirect()->route('login');   
    // }

    public function store(Request $request)
{

    $offer = new Offer;

    $offer->card_number = $request->input('card_number');
    $offer->price = $request->input('price');
    $offer->image_id = $request->input('image_id');
    $offer->save();

    return redirect()->route('purchaseSuccess');
}


    public function offer()
    {
        return view("/offer");
    }
}
