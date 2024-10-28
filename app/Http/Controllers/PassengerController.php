<?php

namespace App\Http\Controllers;

use App\Models\Passenger;
use Illuminate\Http\Request;

class PassengerController extends Controller
{
    public function allPassengers()
    {
        $passengers = Passenger::all();

        return view('passengers.index', compact('passengers'));
    }
}
