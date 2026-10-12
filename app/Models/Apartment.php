<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Apartment extends Model
{
    protected $fillable = [
        'title',
        'description',
        'price',
        'bedrooms',
        'bathrooms',
        'address',
        'image',
        'status',
        'city_id',
        'user_id',
    ];

   function city()
    {
        return $this->belongsTo(City::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
}
