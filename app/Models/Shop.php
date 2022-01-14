<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;

    public function events()
    {
        return $this->hasMany(Event::class);
    }

    public function eventClasses()
    {
        return $this->hasMany(EventClass::class);
    }

    public function categories()
    {
        return $this->hasMany(Category::class);
    }
}
