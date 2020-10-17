<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    public function customer()
    {
        return $this->belongsTo('App\Customer');
    }

    public function vehicle()
    {
        return $this->belongsTo('App\Vehicle');
    }
}
