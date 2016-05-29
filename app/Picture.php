<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
    public $table = "pictures";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'apartment_id', 'route', 'thumbnail'
    ];

    public function apartment()
    {
        return $this->belongsTo('App\Apartment','apartment_id','id');
    }
}
