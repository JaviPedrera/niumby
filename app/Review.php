<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    public $table = "reviews";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'user_id',
    	'apartment_id',
    	'comment',
    	'rating',
    ];

    public function publisher()
    {
        return $this->belongsTo('App\User','user_id','id');
    }

    public function apartment()
    {
    	return $this->belongsTo('App\Apartment','apartment_id', 'id');
    }

    /**
     * 
     *	Scopes
     * 
     */

    public function scopeRatingAsc($query)
    {
    	$query->orderBy('rating', 'asc');
    }

    public function scopeRatingDesc($query)
    {
    	$query->orderBy('rating', 'desc');
    }

}
