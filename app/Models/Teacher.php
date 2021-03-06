<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    public function eventClasses()
    {
        return $this->belongsToMany(
            EventClass::class,
            'teacher_event_class',
            'teacher_id',
            'event_class_id'
        );
    }
}
