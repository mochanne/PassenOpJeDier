<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    protected $table = "homes"; 

    public $timestamps = false;

    public function GetOwner() {
        return $this->belongsTo(\App\Models\User::class,"owner_id", "id");
    }


    public function GetMedia() {
        // get media from `media` where type == 'home' && post_id == this.id
        $this->hasMany();
    }
}
