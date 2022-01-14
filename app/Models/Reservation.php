<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        "event_class_id",
        "first_name",
        "last_name",
        "email",
        "telephone",
        "seats",
        "promo_applied",
        "price",
        "source",
        "payment_status",
        "comment",
        "options",
        "gift",
        "buyer_first_name",
        "buyer_last_name",
        "buyer_message",
        "email_reminder_sent",
    ];

    public function eventClass()
    {
        return $this->belongsTo(EventClass::class);
    }
}
