<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OfferController extends Controller
{
    public function GetIndex() {
        return view('offer.index');
    }

    public function GetItem($offer_id) {
        return view('offer.item',['offer' => \App\Models\Offer::find($offer_id)]);
    }
}
