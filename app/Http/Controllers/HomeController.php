<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function GetItem($home_id) {
        return view('homes.item', [
            'home' => \App\Models\Home::find($home_id)
        ]);
    }
    public function GetIndex() {
        return view('homes.index', [
            'homes' => \App\Models\Home::all()
        ]);
    }
    
}
