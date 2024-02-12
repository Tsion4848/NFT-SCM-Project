<?php

namespace App\Http\Controllers;

use App\Offer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OfferController extends Controller
{


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
