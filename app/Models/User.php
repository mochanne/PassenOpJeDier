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
    // protected $casts = [
    //     'email_verified_at' => 'datetime',
    // ];
    public function CanReview($target_id) {
        // $table->
    }
    
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
