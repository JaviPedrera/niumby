<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apartment extends Model
{
    public $table = "apartments";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'user_id', 
        'description', 
        'price_per_day', 
        'max_persons', 
        'min_nights',
    ];

    public function owner()
    {
        return $this->belongsTo('App\User','user_id','id');
    }

    public function reviews()
    {
        return $this->hasMany('App\Review', 'apartment_id', 'id');
    }
}
