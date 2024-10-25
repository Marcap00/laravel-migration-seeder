<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function home()
    {
        // Recupero i dati dei treni dal database
        /* $trains = Train::all(); */
        // Recpero i treni che stanno partendo oggi
        $trainsTodayDeparting = Train::where('departure_date', date('Y-m-d'))->get();
        /* @dd($trains); */

        return view('pages.home', compact('trainsTodayDeparting'));
    }

    public function allTrains()
    {
        $trains = Train::all();

        return view('pages.trains', compact('trains'));
    }

    public function show($index)
    {
        $trains = Train::all();
        $train = $trains[$index];

        return view('pages.show', compact('train'));
    }
}
