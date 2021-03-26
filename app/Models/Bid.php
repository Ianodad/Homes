<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use \App\Models\Home;
use \App\Models\User;

class Bid extends Model
{
    use HasFactory;

    public function home(){
        return $this->belongsTo(Home::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
