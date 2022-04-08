<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OfferController extends Controller
{
    public function GetIndex() {
        return view('offers.index', ['offers' => \App\Models\Offer::all()]);
    }

    public function GetItem($offer_id) {
        return view('offers.item',['offer' => \App\Models\Offer::find($offer_id)]);
    }
}
