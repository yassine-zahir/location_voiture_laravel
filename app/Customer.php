<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'cin', 'first_name','last_name', 'email'
    ];

    public function reservations()
    {
        return $this->hasMany('App\Reservation');
    }
}
