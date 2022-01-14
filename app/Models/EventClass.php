<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventClass extends Model
{
    use HasFactory;

    protected $casts = [
        'start_date' => 'date:Y-m-d',
    ];

    public function event()
    {
        return $this->belongsTo(Event::class);
    }

    public function shop()
    {
        return $this->belongsTo(Shop::class);
    }

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
}
