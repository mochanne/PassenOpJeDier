<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class NewEntryController extends Controller
{

    public function upload_media($req) {
        $imageName = time().'.'.$req->image->extension();  
        $req->image->move(public_path('images'), $imageName);
    }

    public function GetNewHome() {
        return view('creates.home', ['me' => Auth::user()]);
    }

    public function PostNewHome(Request $request, \App\Models\Home $newhome) {
        $newhome->location = $request->input('location');
        $newhome->description = $request->input('description');

        if ($request->input('allowed_pet_types')){
            $allowed_pets = '';
            foreach($request->input('allowed_pet_types') as $pt) {
                $allowed_pets = $allowed_pets . '+' . $pt;
            };
            $newhome->allowed_pet_types = $allowed_pets;
        }
        $newhome->owner_id = Auth::user()->id;
        $newhome->save();
        return redirect('/homes/' . $newhome->id);
    }


    public function GetNewOffer() {
        
    }
    public function PostNewOffer(Request $request) {

    }

    public function GetNewProposal($user_id) {
        
    }
    public function PostNewProposal(Request $request, $user_id) {

    }


    public function GetNewReview($user_id) {

    }
    public function PostNewReview(Request $request, $user_id) {

    }


    public function PostNewBlock(Request $request, $user_id) {

    }
}
