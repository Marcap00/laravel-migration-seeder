<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function home()
    {
        // Recupero i dati dei treni dal database
        $trains = Train::all();

        return view('pages.home', compact('trains'));
    }
}
