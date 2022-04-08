<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class NewEntryController extends Controller
{

    public function upload_media($request) {
        $imageName = time().'.'.$request->image->extension();  
        $request->image->move(public_path('images'), $imageName);
    }

    public function GetNewHome() {
        return view('creates.home');
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
        return view('creates.offer');   
    }
    public function PostNewOffer(Request $request, \App\Models\Offer $new_offer) {
        $new_offer->pet_type = $request->input('pet_type');
        $new_offer->pet_name = $request->input('pet_name');
        $new_offer->description = $request->input('description');
        $new_offer->wage = $request->input('wage');
        $new_offer->location = $request->input('location');
        $new_offer->start_time = $request->input('start_time');
        $new_offer->end_time = $request->input('end_time');
        if ($request->input('media')){
            $new_offer->media = $request->input('media');
        }
        // $new_offer->media = $request->input('media');
        $new_offer->owner_id = Auth::user()->id;
        
        $new_offer->save();
        return redirect('/offers/' . $new_offer->id);
    }

    public function GetNewProposal($user_id) {
        
    }
    public function PostNewProposal(Request $request, $user_id) {

    }


    public function GetNewReview($user_id) {
        // return $user_id;
        return view('creates.review', ['target' => \App\Models\User::find($user_id)]);
    }
    public function PostNewReview(Request $request, \App\Models\Review $newrev, $user_id) {
        $newrev->review_text = $request->input('review_text');

        $newrev->score = $request->input('score');
        
        $newrev->poster_id = Auth::user()->id;
        $newrev->receiver_id = $user_id;
        
        $newrev->save();
        return redirect('/users/' . $user_id);
    }


    public function PostNewBlock(Request $request, $user_id, $state) {
        if (Auth::user()->admin) {
            $usr = \App\Models\Users::find($user_id);
            if ($state == 'true') {
                $usr->blocked = true;
            } elseif ($state == 'false') {
                $usr->blocked = false;
            }
            $usr->save();
        }
        return redirect('/users/' . $user_id);
    }
}
