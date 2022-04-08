<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proposal extends Model
{
    protected $table = "proposals"; 
    public $timestamps = false;


    public function home() {
        return $this->belongsTo(\App\Models\Home::class, "home_id", "id");
    }
    public function offer() {
        return $this->belongsTo(\App\Models\Offer::class, "offer_id", "id");
    }
}
