<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = ['check_in_date', 'check_out_date', 'apartment_id', 'user_id'];

    function apartment()
    {
        return $this->belongsTo(Apartment::class);
    }
    function user()
    {
        return $this->belongsTo(User::class);
    }
}
