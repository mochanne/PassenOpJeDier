<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $table = "reviews"; 
    public $timestamps = false;

    public function GetPoster() {
        return $this->belongsTo(\App\Models\User::class,"poster_id", "id");
    }
    public function GetReceiver() {
        return $this->belongsTo(\App\Models\User::class,"receiver_id", "id");
    }
}
