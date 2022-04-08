<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class NewEntryController extends Controller
{

    public function upload_media($request, $destination) {
        $imageName = time().'.'.$request->media->extension();  
        $request->media->move(public_path('cdn/upload/img/' . $destination), $imageName);
        return '/cdn/upload/img/' . $destination . '/' . $imageName;
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

        $newhome->media = $this->upload_media($request, 'homes');

        $newhome->owner_id = Auth::user()->id;
        $newhome->save();
        return redirect('/homes/' . $newhome->id);
    }

    public function PostDeleteHome($home_id) {
        $usr = Auth::user();
        $home = \App\Models\Home::find($home_id);
        if ($home->owner_id == $usr->id || $usr->admin) {
            $home ->discarded = true;
            $home->save();
            // return "ya";
        };
        
        return redirect('/homes');
    }
    public function PostDeleteOffer($offer_id) {
        $usr = Auth::user();
        $offer = \App\Models\Offer::find($offer_id);
        if ($offer->owner_id == $usr->id || $usr->admin) {
            $offer ->discarded = true;
            $offer->save();
            // return "ya";
        };
        
        return redirect('/homes');
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
        $new_offer->media = $this->upload_media($request, 'offers');
        // $new_offer->media = $request->input('media');
        $new_offer->owner_id = Auth::user()->id;
        
        $new_offer->save();
        return redirect('/offers/' . $new_offer->id);
    }

    public function GetNewProposalFromOffer($offer_id) {
        return view('creates.proposalOffer', ['offer' => \App\Models\Offer::find($offer_id)]);
    }
    public function PostNewProposalFromOffer(Request $request, \App\Models\Proposal $newprop, $offer_id) {
        $offer = \App\Models\Offer::find($offer_id);
        $newprop->offer_id = $offer_id;
        $newprop->home_id = $request->home_id;
        $newprop->homeowner_id = Auth::user()->id;
        $newprop->petowner_id = $offer->owner->id;
        $newprop->homeowner_accepted = true;
        $newprop->save();
        return redirect('/offers/' . $offer_id);

    }

    public function GetNewProposalFromHome($home_id) {
        return view('creates.proposalHome', ['home' => \App\Models\Home::find($home_id)]);
    }
    public function PostNewProposalFromHome(Request $request, \App\Models\Proposal $newprop, $home_id) {
        $home = \App\Models\Home::find($home_id);
        $newprop->offer_id = $request->offer_id;
        $newprop->home_id = $home_id;
        $newprop->homeowner_id = $home->owner->id;
        $newprop->petowner_id = Auth::user()->id;
        $newprop->petowner_accepted = true;
        $newprop->save();
        return redirect('/homes/' . $home_id);
    }
    public function PostAcceptProposal(Request $request, $proposal_id) {
        $proposal = \App\Models\Proposal::find($proposal_id);
        $you = Auth::user();
        if (($proposal->homeowner_id != $proposal->petowner_id) && !$proposal->discarded) {
            if ($you->id == $proposal->homeowner_id) {
                $proposal->homeowner_accepted = true;
                $proposal->save();
            } elseif ($you->id == $proposal->petowner_id) {
                $proposal->petowner_accepted = true;
                $proposal->save();
            }
        }
        return redirect()->back();
    }

    public function PostDenyProposal(Request $request, $proposal_id) {
        $proposal = \App\Models\Proposal::find($proposal_id);
        if ($proposal->homeowner_id != $proposal->petowner_id) {
            if (($you->id == $proposal->homeowner_id) || ($you->id == $proposal->petowner_id)) {
                $proposal->discarded = true;
                $proposal->save();
            }
        }
        return redirect()->back();

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


    public function PostNewBlock(Request $request, $user_id) {
        if (Auth::user()->admin) {
            $usr = \App\Models\User::find($user_id);

            // Not confident enough in how laravel types work to try and cast
            // this from string to bool, so we're doing it this way
            if ($request->state == 'true') {
                $usr->blocked = true;
            } elseif ($request->state == 'false') {
                $usr->blocked = false;
            }
            $usr->save();
        }
        return redirect('/users/' . $user_id);
    }
}
