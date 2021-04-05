<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Home extends Model
{
    use HasFactory;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    // protected $table = 'homes' ;
    protected $fillable = ['user_id', 'location', 'description',  'no_rooms', 'price', 'type', 'materials', 'bid_count'];

    protected $appends = ['created_date'];

    protected $casts =[
        'materials' => 'array',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    // $this->attributes['title'] = $value;
    // $this->attributes['slug'] = str_slug($value);
    
    public function getCreatedDateAttribute(){
        return Carbon::parse($this->created_at)->diffForHumans();
    }
    
    public function getUrlAttribute(){

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