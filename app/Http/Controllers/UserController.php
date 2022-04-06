<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function GetItem($user_id) {
        return view('user.item', ['user' => \App\Models\User::find($user_id)]);
        // return ;
    }
    public function GetIndex() {
        return view('user.index', ['users' => \App\Models\User::all()]);
    }
}
