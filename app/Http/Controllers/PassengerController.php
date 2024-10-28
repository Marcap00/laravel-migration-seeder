<?php

namespace App\Http\Controllers;

use App\Models\Passenger;
use Illuminate\Http\Request;

class PassengerController extends Controller
{
    public function allPassengers()
    {
        $links_pages = config('links_pages');
        $passengers = Passenger::all();

        return view('passengers.index', compact('passengers', 'links_pages'));
    }
}
