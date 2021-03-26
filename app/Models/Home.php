<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    use HasFactory;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    // protected $table = 'homes' ;
    protected $fillable = ['user_id', 'title', 'location', 'description',  'no_rooms', 'price', 'type', 'materials', 'bid_count'];
    protected $casts =[
        'materials' => 'array',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    // $this->attributes['title'] = $value;
    // $this->attributes['slug'] = str_slug($value);
    
    public function getCreatedUrlAttribute(){
        return $this->created_at->diffForHumans();
    }
    
    public function getUrlAttributes(){

        return route("homes.show", $this->id);
    }

    public function getStatusAttribute(){
        if ($this-> price > 200){
            // if ($this->current_bid_id){
            //     return "current_bid";
            // }
            return "sold_out";
        }
        return "open_bid";
    }

    public function bid(){
        return $this->hasMany(Bid::class);
    } 
}