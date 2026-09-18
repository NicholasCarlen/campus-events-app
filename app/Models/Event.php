<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'title', 
        'description', 
        'location', 
        'event_date', 
        'capacity'
    ];

    public function registrations()
    {
        return $this->hasMany(Registration::class);
    }
}