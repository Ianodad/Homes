<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use \App\Models\Home;
use \App\Models\User;

class Bid extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    // protected $table = 'homes' ;
    protected $fillable = ['user_id', 'home_id', 'starting_bid_price', 'current_bid',  'count_down_timer', 'current_bid_time', 'minimum_increment_bid', 'winning bid', 'total_bids'];

    public function home(){
        return $this->belongsTo(Home::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public static function boot(){
        parent::boot();

        static::created(function($bid){
            $bid->home->increment('bid_count');
            $bid->home->save();
            // echo "Bid created";
        });

        // static::bidUpdate(function($bid){
        //     echo "Bid Updated";
        // });

    }
    
    public function getCreatedUrlAttribute(){
        return $this->created_at->diffForHumans();
    }
}
