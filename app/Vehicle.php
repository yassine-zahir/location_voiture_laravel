<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    public function reservations()
    {
        return $this->hasMany('App\Models\Reservation');
    }
}
