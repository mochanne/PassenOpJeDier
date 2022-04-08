<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    // protected $table = "proposals"; 

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */

    public function can_review($target) {
        foreach($this->pet_proposals as $petpros){
            // return true;
            if ($petpros->homeowner_id == $target->id && ($petpros->homeowner_accepted && $petpros->petowner_accepted)) {
                return true;
            };
        };
        foreach($this->home_proposals as $hompros){
            if ($hompros->petowner_id == $target->id && ($hompros->homeowner_accepted && $hompros->petowner_accepted)) {
                return true;
            };
        };
        return false;
    }

    public function pet_proposals() {
        return $this->hasmany(\App\Models\Proposal::class, 'petowner_id');
    }
    public function home_proposals() {
        return $this->hasmany(\App\Models\Proposal::class, 'homeowner_id');
    }
    
    

    // public function sent_proposals() {
    //     return $this->hasmany(\App\Models\Proposal::class, '')
    // }
    public function homes() {
        return $this->hasmany(\App\Models\Home::class, 'owner_id');
        // return \App\Models\Home::where('owner_id','=',$this->id);
    }
    public function profile_reviews() {
        return $this->hasmany(\App\Models\Review::class, 'receiver_id');
        // return \App\Models\Review::where('receiver_id','=',$this->id);
    }
    public function published_reviews() {
        return $this->hasmany(\App\Models\Review::class, 'poster_id');
        // return \App\Models\Review::where('poster_id','=',$this->id);
    }


    public function offers() {
        return $this->hasmany(\App\Models\Offer::class, 'owner_id');
    }


}
