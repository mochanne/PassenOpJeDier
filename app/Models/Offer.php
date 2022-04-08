<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    protected $table = "offers"; 
    public $timestamps = false;

    public function owner() {
        return $this->belongsTo(\App\Models\User::class,"owner_id", "id");
    }

    public function GetOwner() {
        // alias
        return $this->owner();
    }
}
