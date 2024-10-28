<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function home()
    {
        $links_pages = config('links_pages');
        /* @dd($links_pages); */
        // Recupero i treni che stanno partendo oggi
        $trainsTodayDeparting = Train::where('departure_date', date('Y-m-d'))->get();
        /* @dd($trains); */

        return view('pages.home', compact('trainsTodayDeparting', 'links_pages'));
    }

    public function allTrains()
    {
        $links_pages = config('links_pages');
        $trains = Train::all();

        return view('pages.trains', compact('trains', 'links_pages'));
    }

    public function show($index)
    {
        $links_pages = config('links_pages');
        $trains = Train::all();
        $train = $trains[$index];

        return view('pages.show', compact('train', 'links_pages'));
    }
}
