<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function get()
    {
        return Reservation::paginate();
    }

    public function post(Request $request)
    {
        return Reservation::create($request->all());
    }
}
